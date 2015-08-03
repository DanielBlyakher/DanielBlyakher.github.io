<?php
else                /* send the submitted data */ 
    { 
    $name=$_REQUEST['name']; 
    $email=$_REQUEST['email']; 
    $message=$_REQUEST['message']; 
    if (($name=="")||($email=="")||($message=="")) 
        { 
        echo "All fields are required, please fill <a href=\"\">the form</a> again."; 
        } 
    else{         
        $from="From: $name<$email>\r\nReturn-path: $email"; 
        $subject="Message sent using your contact form"; 
        mail("youremail@yoursite.com", $subject, $message, $from); 
        echo "Email sent!"; 
        } 
    }   
?> 

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<head>
      <meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
      <title>Contact us</title>
      <link rel="STYLESHEET" type="text/css" href="default.css" />
      <script type='text/javascript' src='scripts/gen_validatorv31.js'></script>
</head>
<body>

<!-- Form Code Start -->
<?php 
$action=$_REQUEST['action']; 
if ($action=="")    /* display the contact form */ 
    { 
    ?> 
    <form method="post" action="" enctype="multipart/form-data">>
                      <div>
                        <div>
                          <input type="text" name="name" id="contact-name" placeholder="Name" />
                        </div>
                        <div>
                          <input type="text" name="email" id="contact-email" placeholder="Email" />
                        </div>
                      </div>
                      <div>
                        <div>
                          <textarea name="message" id="contact-message" placeholder="Message" rows="4"></textarea>
                        </div>
                      </div>
                      <div>
                        <div>
                          <ul>
                            <li><input type="submit" class="button" id="form-button1" value="Send" /></li>
                            <li><input type="reset" class="button" value="Reset" /></li>
                          </ul>
                        </div>
                      </div>
                    </form>
    
    <?php 
    }  
else                /* send the submitted data */ 
    { 
    $name=$_REQUEST['name']; 
    $email=$_REQUEST['email']; 
    $message=$_REQUEST['message']; 
    if (($name=="")||($email=="")||($message=="")) 
        { 
        echo "All fields are required, please fill <a href=\"\">the form</a> again."; 
        } 
    else{         
        $from="From: $name<$email>\r\nReturn-path: $email"; 
        $subject="Message sent using your contact form"; 
        mail("youremail@yoursite.com", $subject, $message, $from); 
        echo "Email sent!"; 
        } 
    }   
?> 

<!-- client-side Form Validations:
Uses the excellent form validation script from JavaScript-coder.com-->

<script type='text/javascript'>
// <![CDATA[

    var frmvalidator  = new Validator("contactus");
    frmvalidator.EnableOnPageErrorDisplay();
    frmvalidator.EnableMsgsTogether();
    frmvalidator.addValidation("name","req","Please provide your name");

    frmvalidator.addValidation("email","req","Please provide your email address");

    frmvalidator.addValidation("email","email","Please provide a valid email address");

    frmvalidator.addValidation("message","maxlen=2048","The message is too long!(more than 2KB!)");

// ]]>
</script>

</body>
</html>
