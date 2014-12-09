<?php
define("WEBMASTER_EMAIL", 'peacearmstrong05@gmail.com');

error_reporting (E_ALL ^ E_NOTICE);

$post = (!empty($_POST)) ? true : false;

$result = 'Unable to send message' ;

if($post)
{

    $name = stripslashes($_POST['name']) . "Visitor From Website";
    $email = trim($_POST['email']);
    $subject = "Visitor From Website";
    $message = stripslashes($_POST['message']);


    $error = '';


    if(!$error){
        $mail = mail(WEBMASTER_EMAIL, $subject, $message,
            "From: ".$name." <".$email.">\r\n"
            ."Reply-To: ".$email."\r\n"
            ."X-Mailer: PHP/" . phpversion());

        if( $_POST['doAction'] == "MailMe"){
            if($mail){
                $result = "message has been sent" ;
            }
        }

    }


}

echo $result ;
?>