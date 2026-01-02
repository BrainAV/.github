<?php
require_once 'config.php';

header('Content-Type: application/json');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get JSON input if sent via fetch/axios, or standard POST
    $input = json_decode(file_get_contents('php://input'), true) ?? $_POST;

    $name = strip_tags(trim($input["name"] ?? ''));
    $email = filter_var(trim($input["email"] ?? ''), FILTER_SANITIZE_EMAIL);
    $message = strip_tags(trim($input["message"] ?? ''));

    if (empty($name) || empty($message) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        http_response_code(400);
        echo json_encode(["status" => "error", "message" => "Invalid input. Please check your details."]);
        exit;
    }

    $subject = "New Contact from BrainAV: $name";
    $email_content = "Name: $name\n";
    $email_content .= "Email: $email\n\n";
    $email_content .= "Message:\n$message\n";

    $headers = "From: noreply@brainav.ca\r\n";
    $headers .= "Reply-To: $email\r\n";

    if (mail(CONTACT_EMAIL, $subject, $email_content, $headers)) {
        http_response_code(200);
        echo json_encode(["status" => "success", "message" => "Message sent successfully!"]);
    } else {
        http_response_code(500);
        echo json_encode(["status" => "error", "message" => "Failed to send message."]);
    }
} else {
    http_response_code(403);
    echo json_encode(["status" => "error", "message" => "Method not allowed."]);
}
?>