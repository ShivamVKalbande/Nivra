<?php
header('Content-Type: application/json');

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    echo json_encode(["success" => false, "message" => "Invalid request"]);
    exit;
}

$name = trim($_POST['name'] ?? '');
$email = trim($_POST['email'] ?? '');
$message = trim($_POST['message'] ?? '');

if ($name === '' || $email === '' || $message === '') {
    echo json_encode(["success" => false, "message" => "All fields are required"]);
    exit;
}

$to = "enquiry@nivraenterprise.com";
$subject = "New Website Enquiry – Nivra Enterprises";

$body = "New enquiry received:\n\n";
$body .= "Name: $name\n";
$body .= "Email: $email\n\n";
$body .= "Message:\n$message\n";

$headers = "From: Nivra Website <no-reply@nivraenterprise.com>\r\n";
$headers .= "Reply-To: $email\r\n";

if (mail($to, $subject, $body, $headers)) {
    echo json_encode(["success" => true]);
} else {
    echo json_encode(["success" => false, "message" => "Mail failed"]);
}
