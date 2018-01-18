<?#===========================================================
# Form configuration                                        #===========================================================

# Main Settings
$send_type = 'email';       // email, file, csv, dbase, emailfile, emailcsv, emaildbase
$recipient = 'submit.news@gesmer.com';
$req_fields = 'email';
$confirm_fields = '';
$preview = '';

# Display Settings
$font_size = '';
$font_color = '';
$font_weight = '';
$font_family = '';
$no_answer = '';
# Email Settings (apply if $send_type = 'email,emailfile,emailcsv, or emaildbase')
$cc = '';$bcc = '';
$subject = 'Consortium News Suggestion';
$ip_address = 'yes';
$getdate = 'yes';
$browser = '';
$htmlemail = '';
$htmlemail_page = '';

# Database Settings (apply if $send_type = 'dbase or emaildbase')
$db_user = '';$db_pass = '';
$db_name = '';$table_name='';
$input_timeandIP = '';

# CSV File Settings (apply only if $send_type = 'csv or emailcsv')

$csvfile_name = '';

# Flat-File Settings (apply only if $send_type = 'file or emailfile')
$flatfile_name = '';

# After Submission Settings
$redirect = '/submit/news/sent_ok.php';
$thankyou = '';
$auto_respond = 'yes';
$auto_subject = 'Thank you for your link submission';
$auto_content = 'Thank you for your link submission.  We will contact you shortly to confirm your information.         

ConsortiumInfo.org';

# Security Settings
$flood_control = '';
$floodfile_name = '';
$interval = '500';
$ip_block = '';
$ipfile_name = '';
$referer = '';
#===========================================================
?>
