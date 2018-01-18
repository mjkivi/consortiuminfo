<?
#################################################################################
#                                                                               #
# Mail Manage EX Professional Edition                                           #
# Written by Gregg Jewell (http://www.arecaweb.com)                             #
# Inspired from Jason J. Russo's Form Mail script                               #
#                                                                               #
# All settings can be controlled from the configuration file.                   #
# There is no need to edit below this description.                              #
# For all features and instructions refer to the readme file                    #
#                                                                               #
# Although security features are implemented in this script, that               #
# does not guarantee these features will provide 100% security protection.      #
# Use at your own risk. Do not use this script to send sensitive                #
# data such as credit card information, social security numbers, etc.           #
#                                                                               #
#                                                                               #
#################################################################################

#################################################################################
#  EDIT AT YOUR OWN RISK                                                        #
#################################################################################

#===========================================================
# Set Output Style                                          
#===========================================================
if (!$font_size)
  $font_size = '11pt';

if (!$font_color)
  $font_color = '#000000';

if (!$font_weight)
  $font_weight = 'none';
  
if (!$font_family)
  $font_weight = 'arial';

$style .= '<span style="font-family:'.$font_family.';font-size:'.$font_size.';color:'.$font_color.';font_weight:'.$font_weight.'">';

#===========================================================
# Check for Settings                                        
#===========================================================
header("Cache-control: private"); 
#if(!$settings)
#{
#  exit ($style . '<a href="#" onclick="history.back()">Return to Previous Page</a><hr>No settings were found for this form.</span><hr>');
#}
$settings = "settings.php";	// force the settings file
include($settings);
#===========================================================
# Check Referer of the Sent Information                     
#===========================================================
if ($referer and !$refresh)
{
  $referer = explode(",",$referer);
  for ($i=0;$i<count($referer);$i++)
  {
  if ($_SERVER['HTTP_REFERER'] == $referer[$i])
    $toggle = 'on';
  }
  if ($toggle != 'on')
   exit($style . '<a href="#" onclick="history.back()">Return to Previous Page</a><hr>This site is not authorized to use this script.</span><hr>');
}

#===========================================================
# Check User's IP Address and Last Submission               
#===========================================================
if ($flood_control)
{
  $user_ip = $_SERVER['REMOTE_ADDR'];
  $stamp = mktime();
  $secs = $interval * 60;

  @ $get=fopen($floodfile_name,'r');
  if (!$get)
    mail($recipient,"Form Error","There is an error with your Flood Control File.\r\nEither, the file name in the settings is incorrect or permissions are not set to 666.\r\n\r\nMail Manage EX","From:Support@Mail_Manage_EX");
  @ flock($get, LOCK_SH);
  while (!feof($get))
  {
	@ $tmp=fgets($get,998);
    if(stristr($tmp,$user_ip)){
      $tmp = substr($tmp, -11);
    if ($stamp - $tmp < $secs)
  	  exit ($style . '<a href="#" onclick="history.back()">Return to Previous Page</a><hr>Recent entry. New submissions are allowed every ' . $interval . ' minute(s).</span><hr>');
    }
  }
  @ flock($get,LOCK_UN);
  @ fclose($get);
}

#===========================================================
# Check if User's IP Address is Allowed                     
#===========================================================
if ($ip_block)
{

  @ $read=fopen($ipfile_name,'r');
  if (!$read)
   mail($recipient,"Form Error","There is an error with your IP Address File.\r\nEither, the file name in the settings is incorrect or the file does not exist.\r\n\r\nMail Manage EX","From:Support@Mail_Manage_EX");
  @ flock($read,LOCK_SH);
  @ $data=fread($read,filesize($ipfile_name));
  @ flock($read,LOCK_UN);
  @ fclose($read);

  $user_ip = $_SERVER['REMOTE_ADDR'];
  if(stristr($data,$user_ip))
    exit ($style . '<a href="#" onclick="history.back()">Return to Previous Page</a><hr>Your IP Address has been blocked.</span><hr>');
}

#===========================================================
# Post Values Depending on Php Version                      
#===========================================================
if (isset($HTTP_POST_VARS)) 
  $_FORM = $HTTP_POST_VARS;
if (isset($_POST))
  $_FORM = $_POST;
unset ($HTTP_POST_VARS);
unset ($_POST);
if ($email)
 $sendemail = $email;
if ($preview)
 $keepsettings = $settings;
if ($refresh)
 array_splice($_FORM,0,2); // Deletes hidden "settings" value & resfresh on preview
else
 array_splice($_FORM,0,1); // Deletes hidden "settings" value
$_FILEFORM = $_FORM;
$_CSVFORM = $_FORM;

#===========================================================
# Display Preview                                           
#===========================================================
if ($preview and !$refresh)
{
$form .="<hr>Form Results Preview<hr><form method=\"post\" action=\"".$PHP_SELF."\">
         <input type=\"hidden\" name=\"settings\" value=\"".$keepsettings."\">
		 <input type=\"hidden\" name=\"refresh\" value=\"yes\">";

while (list ($key, $val) = each ($_FORM))
{
  if ($val == "" and $no_answer > "")
    $val = "[no answer]";
  $key = stripslashes($key);
  $val = stripslashes($val);
  $form .= "<input type=\"hidden\" name=\"".$key."\" value=\"".$val."\"><b>$style $key</b>: $val </span><br>";
}
  $form .= "<br><input type=\"button\" value=\"Back\" onclick=\"history.back()\" style=\"border: solid #B8B9B9 1px; cursor:hand\">&nbsp;&nbsp;&nbsp;<input type=\"submit\" value=\"Submit\" style=\"border: solid #B8B9B9 1px; cursor:hand\"></form>";
  exit($form);
}

#===========================================================
# Check Required Fields                                     
#===========================================================
if ($req_fields)
{
  $req_fields = split(",",$req_fields);
  for($i=0;$i < count($req_fields);$i++)
  {
	$tmp = $req_fields[$i];
	  if($_FORM[$tmp] <= "")
	  {
	    if ($required <= "")
		  $required .= $style . "<a href=\"#\" onclick=\"history.back()\">Return to Previous Page</a></span><hr>";
		$required .= $style ."<b>$tmp</b> is empty.</span><br><br>";
      }
  }
  if ($required)
  {
    $required = substr($required,0,-8);
	exit ($required . "<hr>");
  }
}

#===========================================================
# Check Confirm Fields                                      
#===========================================================
if ($confirm_fields)
{
  $confirm_fields = split(",",$confirm_fields);
  for($i=0;$i < count($confirm_fields);$i+= 2)
  {
	$tmp = $confirm_fields[$i];
	$tmp2 = $confirm_fields[$i+1];
	$formtmp = $_FORM[$tmp];
	$formtmp2 = $_FORM[$tmp2];
	
	if ($formtmp != $formtmp2)
	{
	  $tmp = str_replace("_"," ",$tmp);
	  $tmp2 = str_replace("_"," ",$tmp2);
	  $confirm .= $style . "<a href=\"#\" onclick=\"history.back()\">Return to Previous Page</a><hr>";
	  $confirm .= $style . '<b>'.$tmp.' and '.$tmp2.'</b> do not match.</span><br><br>';
    }
	
	if ($formtmp == $formtmp2)
	{
      $_FORM[$tmp2] = 'deleteIt';
	}
  }
  if ($confirm)
  {
    $confirm = substr($confirm,0,-8);
    exit ($confirm . "<hr>");
  }
}

#===========================================================
# Check Formatting of Email                                 
#===========================================================
if ($email)
{
  if(!eregi('([a-zA-Z0-9]{2,30})@([a-zA-Z0-9]{2,30}).([a-zA-Z0-9]{2,30})', $email))
	exit ($style . '<a href="#" onclick="history.back()">Return to Previous Page</a><hr>Invalid email address.</span><hr>');
  if (eregi(' ',$email))
    exit ($style . '<a href="#" onclick="history.back()">Return to Previous Page</a><hr>Invalid email address. No spaces allowed.</span><hr>');
}

#===========================================================
# Check Formatting of Phone Number                          
#===========================================================
if ($phone)
{
  if (!eregi('([0-9]{3})-([0-9]{3})-([0-9]{4})', $phone))
    if (!eregi('([0-9]{3}).([0-9]{3}).([0-9]{4})', $phone))
	  exit ($style . '<a href="#" onclick="history.back()">Return to Previous Page</a><hr>Invalid phone number.</span><hr>');
}

#===========================================================
# Check Formatting of Zip Code                              
#===========================================================
if ($zip_code)
{
  if (!eregi('([0-9]{5})', $zip_code))
    exit ($style . '<a href="#" onclick="history.back()">Return to Previous Page</a><hr>Invalid zip code.</span><hr>');
}

#===========================================================
# Check Formatting of State                                 
#===========================================================
if ($state)
{
  if (!eregi('([A-Z]{2})', $state))
    exit ($style . '<a href="#" onclick="history.back()">Return to Previous Page</a><hr>Invalid state.</span><hr>');
}

#########################################################################
# EMAIL FUNCTIONS                                                       #
#########################################################################
if ($send_type == 'email' or $send_type == 'emailfile'  or $send_type == 'emailcsv' or $send_type == 'emaildbase')
{
#===========================================================
# Get All Values from the Form Fields                       
#===========================================================
while (list ($key, $val) = each ($_FORM))
{
  $key = stripslashes($key);
  $val = stripslashes($val);
  if ($val != 'deleteIt')
  {
    if ($val == "" and $no_answer > "")
	 $val = "[no answer]";
    $html .= "<b>$key</b>: $val<br>";
	$content .= "$key: $val\n";
    $form .= "<b>$style $key</b>: $val </span><br>";
  }
}
$content = str_replace("_"," ",$content);

#===========================================================
# Check for Recipient                                       
#===========================================================
if (!$recipient)
  exit ($style . '<a href="#" onclick="history.back()">Return to Previous Page</a><hr>' . $icons .  ' &nbsp;This email cannot be sent. No specified recipient.</span><hr>');

#===========================================================
# Verify Subject                                            
#===========================================================
if (!$subject)
   $subject = 'Form submission';

#===========================================================
# Get User's IP Address                                     
#===========================================================
if($ip_address)
{
  $user_ip = $_SERVER['REMOTE_ADDR'];
  $content .= "User's IP Address: $user_ip\n";
}

#===========================================================
# Get User's Browser Agent                                  
#===========================================================
if($browser)
{
  $browser = $_SERVER['HTTP_USER_AGENT'];
  $content .= "User's Browser: $browser\n";
}

#===========================================================
# Get Date and Time of Submission                           
#===========================================================
if($getdate)
{
  $getdate = date('M d, Y  g:i:s a');
  $content .= "Received: $getdate\n";
}

#===========================================================
# Put Header Information in Email                           
#===========================================================
if ($sendemail)
 $header = "From: $sendemail\n";
else
 $header = "From: $recipient\n";
if ($htmlemail)
{
 $header .= "MIME-Version: 1.0\n"; 
 $header .= "Content-Type: text/html; charset=iso-8859-1\n"; 
 $header .= "Content-Transfer-Encoding: 8bit\n";
 $handle = fopen($htmlemail_page,'r');
 $data = fread($handle,99999);
 fclose($handle);
 $data = str_replace("_"," ",$data);
 $content = str_replace('[insert mmex]',$html,$data);
}
if ($cc)
  $header .= "cc: $cc\n";
if ($bcc)
  $header .= "bcc: $bcc\n";

#===========================================================
# Send It Off                                               
#===========================================================
mail($recipient,$subject,$content,$header);

} // end $send_type

#########################################################################
# CSV-FILE FUNCTIONS                                                    #
#########################################################################
if ($send_type == 'csv' or $send_type == 'emailcsv')
{

$getdate = date('M d Y  g:i:s a');
$user_ip = $_SERVER['REMOTE_ADDR'];
$content = '';
$form = '';

while (list ($key, $val) = each ($_CSVFORM))
{
  $key = stripslashes($key);
  $val = stripslashes($val);
  $val = str_replace(",","[c]",$val);
  if ($val != 'deleteIt')
  {
    if ($val == "" and $no_answer > "")
	 $val = "[no answer]";
	$content .= "$val,";
    $form .= "<b>$style $key</b>: $val </span><br>";
  }
}
$content .= "$getdate,$user_ip\n";

@ $write = fopen($csvfile_name,'a');
if (!$write)
  mail($recipient,"Form Error","There is an error with your CSV File.\r\nEither, the file name in the settings is incorrect, the file does not exist or permissions are not set to 666.\r\nr\nMail Manage EX","From:Support@Mail_Manage_EX");
@ flock($write,LOCK_SH);
@ fwrite($write,$content);
@ flock($write,LOCK_UN);
@ fclose($write);

} // end $send_type

#########################################################################
# FLAT-FILE FUNCTIONS                                                   #
#########################################################################
if ($send_type == 'file' or $send_type == 'emailfile')
{

$getdate = date('M d, Y  g:i:s a');
$user_ip = $_SERVER['REMOTE_ADDR'];
$content = '';
$form = '';

while (list ($key, $val) = each ($_FILEFORM))
{
  $key = stripslashes($key);
  $val = stripslashes($val);
  if ($val != 'deleteIt')
  {
    if ($val == "" and $no_answer > "")
	 $val = "[no answer]";
	$content .= "$key: $val\n";
    $form .= "<b>$style $key</b>: $val </span><br>";
  }
}
$content = str_replace("_"," ",$content);

$data .= "Received: " . $getdate . "\nIP: " . $user_ip . "\n" . $content . "\n========================================\n\n";

$write=fopen($flatfile_name,'a');
flock($write,LOCK_EX);
fwrite($write,$data);
flock($write,LOCK_UN);
fclose($write);


} // end $send_type

#########################################################################
# DATABASE FUNCTIONS                                                    #
#########################################################################
if ($send_type == 'dbase' or $send_type == 'emaildbase')
{

#===========================================================
# Connect to Database                                       
#===========================================================
$db_connect = mysql_connect("localhost", "$db_user", "$db_pass");
mysql_select_db("$db_name",$db_connect);

#===========================================================
# Get Form Results                                           
#===========================================================
while (list ($key, $val) = each ($_FORM))
{
  if ($val != 'deleteIt')
  {
    $val = addslashes($val);
	$add .= $key . ',';
    $values .= "'" . $val . "',";
	$key = stripslashes($key);
	$val = stripslashes($val);
	$form .= "<b>$style $key</b>: $val </span><br>";
  }
}
$timestamp = date('M d, Y  g:i:s a');
$user_ip = $_SERVER['REMOTE_ADDR'];
if ($input_timeandIP)
{
 $add .= "timestamp,user_ip";
 $values .= "'" . $timestamp . "','" . $user_ip ."'";
}
else
{
 $add = substr($add,0,-1);
 $values = substr($values,0,-1);
}

#===========================================================
# Store Values into Database                                
#===========================================================

$sql = "INSERT INTO $table_name ($add) VALUES ($values)";
$result = mysql_query($sql);

} // end $send_type

#########################################################################
# POST SUBMIT FUNCTIONS                                                 #
#########################################################################

#===========================================================
# Saves IP Address and Time to Flood File                   
#===========================================================
if ($flood_control)
{

$flooddata = $user_ip . " " . $stamp . "\n";

  @ $write=fopen($floodfile_name,'a');
  @ flock($write,LOCK_EX);
  @ fwrite($write,$flooddata);
  @ flock($write,LOCK_UN);
  @ fclose($write);

}

#===========================================================
# Auto Respond Information                                  
#===========================================================
if ($auto_respond)
{
  if (!$auto_subject)
    $auto_subject = 'Thank you for your submission';
  if (!$auto_content)
	$auto_content = 'Thank you for your submmission. We will contact you shortly.';
  $auto_header = "From: $recipient";
  if ($email)
    mail($email,$auto_subject,$auto_content,$auto_header);
}

#===========================================================
# Redirects or Outputs Thank You and Form Results           
#===========================================================
if (!$redirect)
{
  if (!$thankyou)
    $thankyou = 'Thank you for your submission.';
  $form = str_replace("_"," ",$form);
  if ($preview)
    exit ($style . '<a href="#" onclick="history.back(2)">Return to Form Page</a><hr>' . $thankyou .'</span><hr>' . $form . '<br><br><img style="position:absolute; right:3px; bottom:3px" src="http://www.arecaweb.com/php/mmex/small_mmex.jpg" alt="Mail Manage EX">');
  else
    exit ($style . '<a href="#" onclick="history.back()">Return to Previous Page</a><hr>' . $thankyou .'</span><hr>' . $form . '<br><br><img style="position:absolute; right:3px; bottom:3px" src="http://www.arecaweb.com/php/mmex/small_mmex.jpg" alt="Mail Manage EX">');
}
else
  header("Location: $redirect");


##############################################################################################
# Last modified: 9/17/03                                                                      
# Version: 1.7.4                                                                              
#                                                                                             
# Updates:                                                                                    
# 9/17/03 - Created Multiple referers feature (Gregg Jewell, code)                            
# 9/10/03 - Fixed problem with spam retrictions  (Gregg Jewell, code)                         
# 9/1/03  - Improved caching so form elements remain  (Gregg Jewell, code)                    
# 9/1/03  - Added Database option of Timestamp & User IP  (Gregg Jewell, code)                
# 8/30/03 - Preview Page Option (Gregg Jewell, code)                                          
# 8/29/03 - Added html email capabilities (Gregg Jewell, code)                                
# 8/29/03 - Fixed Database Function error (Pardeep Singh Dhanda, noticed error)               
# 8/29/03 - Can save to a CSV File   (Gregg Jewell, code)                                     
# 8/29/03 - Created UK phone validation  (David Lavender, idea)                               
# 8/25/03 - Cleaned up flood control functions (Gregg Jewell, code)                           
# 8/24/03 - Deny spaces in email addresses (Gregg Jewell, code)                               
# 8/13/03 - Fixed IP recognization  (Gregg Jewell, code)                                      
# 8/12/03 - Improved display & added "previous page" link  (Gregg Jewell, code)               
# 8/12/03 - Added [no answer] display option  (Gregg Jewell, code)                            
#                                                                                             
##############################################################################################
?>
