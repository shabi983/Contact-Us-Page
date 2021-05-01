<?php
$cfg['debug'] = false;

// This is the email address where you will receive the notification message
$cfg['email_address'] = 'sulemanaziz405@gmail.com';

$cfg['email_from'] = 'Techy Trends';

// The recipients in CC and BCC will receive a copy of the data collected in the form
// Use commas to separate mutiple e-mail addresses (no spaces allowed)
// Example: youraddress1@yourdomain.com,youraddress2@yourdomain.com
$cfg['email_address_cc'] = '';

$cfg['email_address_bcc'] = '';

$cfg['emailsendingmethod'] = 'php';

$cfg['smtp_host'] = '';

$cfg['smtp_port'] = '';

$cfg['smtp_encryption'] = '';

$cfg['smtp_username'] = '';

$cfg['smtp_password'] = '';

$cfg['timezone'] = 'Europe/Paris';

$cfg['form_id'] = '1';

$cfg['form_name'] = 'Contact Form | Techy Trends';

$cfg['form_validationmessage'] = 'Thanks For Your Message';

$cfg['form_errormessage_captcha'] = 'Incorrect Captcha';

$cfg['form_errormessage_emptyfield'] = 'This Field Cannot Be Left Blank';

$cfg['form_errormessage_invalidemailaddress'] = 'Please Check Your E-mail Address';

$cfg['form_errormessage_invalidurl'] = '';

$cfg['form_errormessage_terms'] = 'You must accept the terms and conditions';

$cfg['form_redirecturl'] = '';

$cfg['adminnotification_subject'] = 'Techy Trends Message{Name|8}';

$cfg['adminnotification_hideemptyvalues'] = false;

$cfg['adminnotification_hideformurl'] = true;

$cfg['usernotification_inputid'] = 'cfgen-element-1-3';

$cfg['usernotification_activate'] = true;

$cfg['usernotification_insertformdata'] = false;

$cfg['usernotification_format'] = 'plaintext';

$cfg['usernotification_subject'] = 'Techy Trends Thanks {Name|8}';

$cfg['usernotification_message'] = 'Thank you for contacting Techy Trends.
We will answer you as soon as possible. {Name|8}


Regards:
          Shahzaib Aziz.

From: 
          Pakistan.

Owner Of:
          Techy Trends

Our Services:
           Blogger All Services.
           Online Free Courses.
           MS Word Cover Pages.
           Learn How To Earn online.
           
Our Tools:
            YouTube Thumbnail Generator.
             YouTube Video Downloader.

Visit Now:
              [http://bit.ly/techy-trends]

Thanks {Name|8}';

$cfg['usernotification_hideemptyvalues'] = false;

$cfg['formvalidation_required'] = array('cfgen-element-1-3','cfgen-element-1-4');

$cfg['formvalidation_email'] = array('cfgen-element-1-3');

$cfg['formvalidation_terms'] = array('cfgen-element-1-10');

?>