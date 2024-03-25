<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    
    $to = "durojaiyetoluwani@gmail.com";
    
    $headers = "From: $name <$email>" . "\r\n" .
               "Reply-To: $email" . "\r\n" .
               "X-Mailer: PHP/" . phpversion();
    
    if (mail($to, $subject, $message, $headers)) {
        header("Location: index.html?status=success");
        exit;
    } else {
        header("Location: index.html?status=error");
        exit;
    }
} else {
    header("Location: index.html");
    exit;
}
?>
