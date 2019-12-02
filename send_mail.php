<?php
require_once './vendor/autoload.php';
//Mail Settings
$SMTP_HOST = 'smtp.yandex.com.tr';
$SMTP_PORT = 465;
$MAIL_USERNAME = 'noreply@etradetechnologies.com';
$MAIL_PASSWORD = 'Gy2!Ky_#-';
$MAIL_FROM = 'noreply@etradetechnologies.com';
$MAIL_FROM_NAME = 'E-trade.com';
$MAIL_TO = 'support@etradertechnologies.com';


//Validations
$type = isset($_POST['type']) ? $_POST['type'] : NULL;
$full_name = isset($_POST['full_name']) ? $_POST['full_name'] : NULL;
$email = isset($_POST['email']) ? $_POST['email'] : NULL;
$phone = isset($_POST['phone']) ? $_POST['phone'] : NULL;
$message = isset($_POST['message']) ? $_POST['message'] : NULL;

$available_types = ['instruments', 'contact', 'partner', 'meta', 'pro'];

if ($_SERVER['REQUEST_METHOD'] != 'POST') {
    send_fail(1001, 'Forbidden');
    exit;
}

//validate type
if(is_null($type) || !in_array($type, $available_types)){
    send_fail(1002, 'Bad Request');
    exit;
}

//validate full name
if(is_null($full_name) || !preg_match("/^[a-zA-Z ]*$/",$full_name) || strlen($full_name) < 5){
    send_fail(1003, 'Invalid Full Name');
    exit;
}

//validate email
if(is_null($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)){
    send_fail(1004, 'Invalid Email');
    exit;
}

//validate phone
if(is_null($phone) || !preg_match("/^[0-9 ]*$/",$phone) || strlen($phone) < 14){
    send_fail(1005, 'Invalid Phone');
    exit;
}

// if contact form validate message
if($type == 'contact' && (is_null($message) || strlen($message) < 5)){
    send_fail(1006, 'Invalid Message');
    exit;
}

//set mail subject
$mail_subject = '';
switch ($type) {
    case 'instruments':
        $mail_subject = 'Full Instruments Request';
        break;
    case 'contact':
        $mail_subject = 'Contact Form';
        break;
    case 'partner':
        $mail_subject = 'Partner Request';
        break;
    case 'meta':
        $mail_subject = 'Meta Platform Info Request';
        break;
    case 'pro':
        $mail_subject = 'Pro Platform Info Request';
        break;
}

//set mail body
$mail_body = "<b>Ad Soyad: </b> $full_name <br/>";
$mail_body .= "<b>Eposta: </b> $email <br/>";
$mail_body .= "<b>Telefon: </b> $phone <br/>";
if(!is_null($message)){
    $mail_body .= "<b>Mesaj: </b> $message <br/>";
}

$transport = (new Swift_SmtpTransport($SMTP_HOST, $SMTP_PORT, 'ssl'))->setUsername($MAIL_USERNAME)->setPassword($MAIL_PASSWORD);
$mailer = new Swift_Mailer($transport);

$message = (new Swift_Message($mail_subject))
  ->setFrom([$MAIL_FROM => $MAIL_FROM_NAME])
  ->setTo([$MAIL_TO])
  ->setBody($mail_body, 'text/html');

$result = $mailer->send($message);


if($result === 1){
    send_success();
} else {
    send_fail(1000, 'Cannot send mail. See logs for detail');
}


function send_success(){
    $response = array(
        'success' => true
    );
    header('Content-Type: application/json');
    echo json_encode($response);
}

function send_fail($errorCode, $errorMsg){
    $response = array(
        'success' => false,
        'error_code' => $errorCode,
        'error_message' => $errorMsg
    );
    header('Content-Type: application/json');
    echo json_encode($response);
}

?>