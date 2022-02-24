<?php

use PHPMailer\PHPMailer\PHPMailer;

$response = array('status' => false, 'msgs' => []);
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    include_once './includes/mail/Exception.php';
    include_once './includes/mail/PHPMailer.php';
    include_once './includes/mail/SMTP.php';
    if (empty($_POST['name'])) {
        $response['msgs'][] = 'Name is required';
    }
    if (empty($_POST['contact'])) {
        $response['msgs'][] = 'Contact is required';
    }
    if (empty($_POST['email'])) {
        $response['msgs'][] = 'Email is required';
    }
    if (empty($_POST['message'])) {
        $response['msgs'][] = 'Message is required';
    }
    if (empty($_POST['service'])) {
        $response['msgs'][] = 'Service is required';
    }
    if (empty($_FILES['file']['tmp_name'])) {
        $response['msgs'][] = 'File is required';
    }
    if (count($_FILES) <= 0) {
        $response['msgs'][] = 'File(s) is required';
    }
    if (count($response['msgs']) <= 0) {
        $tmp_name = $_FILES['file']['tmp_name'];
        $name = $_FILES['file']['name'];
        $size = $_FILES['file']['size'];
        $type = $_FILES['file']['type'];
        $error = $_FILES['file']['error'];
        $html = [];
        $html[] = 'Name: ' . $_POST['name'];
        $html[] = 'Email: ' . $_POST['email'];
        $html[] = 'Contact: ' . $_POST['contact'];
        $html[] = 'Service: ' . $_POST['service'];
        $html[] = 'Message: ' . nl2br($_POST['message']);
        $html = implode('<br />', $html);
        $mail = new PHPMailer(true);
        $mail->From = "career@evoblocs.com";
        $mail->FromName = "Career";
        $mail->addAddress("salraza1993@gmail.com");
        $mail->addReplyTo($_POST['email'], "Reply");
        $mail->isHTML(true);
        $mail->Subject = "Career Submission";
        $mail->Body = $html;
        if (!file_exists('tmp/')) {
            mkdir('tmp/', 0777, true);
        }
        $is_file = move_uploaded_file($_FILES['file']['tmp_name'], 'tmp/' . $_FILES["file"]['name']);
        if ($is_file) {
            try {
                $mail->Timeout = 60;
                $mail->addAttachment('tmp/' . $_FILES["file"]['name']);
                // $mail->isSMTP();
                $mail->Host = "mail.evoblocs.com";
                $mail->SMTPAuth = true;
                $mail->Username = "no-reply@evoblocs.com";
                $mail->Password = "noreply@#2022";
                $mail->SMTPAutoTLS = false;
                $mail->SMTPSecure = false;
                // $mail->SMTPSecure = "SSL";
                // $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
                $mail->Port = 587;
                $response['mail'] = $mail->send();
                $response['msgs'][] = 'Mail has been sent!';
                $response['msgs'][] = 'Thank You!';
                $response['status'] = true;
                unlink('tmp/' . $_FILES["file"]['name']);
            } catch (Exception $e) {
                $response['err'] = $e->getMessage();
                $response['msgs'][] = 'Cannot send at this moment!';
            }
        } else {
            $response['msgs'][] = 'File has some issue!';
            $response['msgs'][] = 'Cannot send at this moment!';
        }
    }
} else {
    $response['msgs'][] = 'Invalid request!';
}
echo json_encode($response);
