<?php


function file2go2($url){ print "<html>\n<head>\n<meta http-equiv=\"refresh\" content=\"0;URL=$url\">\n</head>\n</html>"; exit; }



if(!@fopen($F_TEMPLATE, "r")) file2go2($F_NOTSENT);
else $arr_t1 = @file( $F_TEMPLATE ); $nr_mail = 1;
if (! $F_TEMPLATE2 == "" && !@fopen($F_TEMPLATE2, "r")) file2go2($F_NOTSENT); 
if (! $F_TEMPLATE2 == "" &&  @fopen($F_TEMPLATE2, "r")) $arr_t2 = @file( $F_TEMPLATE2 ); $nr_mail = 2;

$domail = 1;	
while ($domail <= $nr_mail):
	if ($domail == 1) $var2use = $arr_t1; else $var2use = $arr_t2;

		for ($index = 0; $index < count($var2use); $index++)
			{
			$pattern = ereg("{{[A-z0-9_]*}}", $var2use[$index]);
			if  ($pattern)
				{
				$line = ereg_replace("{{","$",$var2use[$index]);
				$line = ereg_replace("}}","",$line);
				}
			else 
				{
				$line = $var2use[$index];
				}		
				$line = addslashes($line) . "<br>";
				eval( "\$line = \"$line\";" );
				if ($index == 0 && $domail == 1) $linetot1 = $line;
				elseif ($index > 0 && $domail == 1) $linetot1 .= $line;
				if ($index == 0 && $domail == 2) $linetot2 = $line;
				elseif ($index > 0 && $domail == 2) $linetot2 .= $line;
			}

	++$domail;
	
endwhile;
	


//the next line will email the 1st template to $F_TO of your form (normally yourself c.q. the owner of website)
$mailit1 = @mail($F_TO, $F_SUBJECT, $linetot1, "From: $F_FROM \nMime-Version: 1.0\nContent-Type: text/html; charset=ISO-8859-1\nContent-Transfer-Encoding: 7bit"); 

//the next (optional) line will email the sender if he filled in his email in the form:
//change the $email to the variable name in your form (the email adress of the visitor)
//only do this when you want 2 templates emailed. Otherwise put two slashes in front of the next line ( // )
//ALSO: if you want to be able to reply directly to the sender, then change $F_FROM in the next line to $email.
if ($nr_mail == 2) $mailit2 = @mail($email, $F_SUBJECT, $linetot2, "From: $F_FROM\nMime-Version: 1.0\nContent-Type: text/html; charset=ISO-8859-1\nContent-Transfer-Encoding: 7bit");

//if you encounter problems with html-formatting of the mail then remove the following in the appropraite 2 lines above:
//\nMime-Version: 1.0\nContent-Type: text/html; charset=ISO-8859-1\nContent-Transfer-Encoding: 7bit 
//do not remove the    ");    after that!

if ($mailit1 = true) $sent = 1;
else $sent = 0;

if ($mailit2 = true) $sent = 2;
else $sent = 0;


if ($nr_mail == 1 && $sent == 1) file2go2($F_SENT);  
if ($nr_mail == 1 && $sent == 0) file2go2($F_NOTSENT); 
if ($nr_mail == 2 && $sent == 2) file2go2($F_SENT); 
if ($nr_mail == 2 && $sent == 0) file2go2($F_NOTSENT); 



?>
