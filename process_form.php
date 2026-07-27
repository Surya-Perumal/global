<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // ==========================================
    // ACTION REQUIRED: CONFIGURE YOUR GMAIL HERE
    // ==========================================
    $yourEmail = "tgtabroad@gmail.com";
    $yourAppPassword = "ouamxpimzoedksfq"; // <-- Put your 16-digit Google App Password here
    // ==========================================
    
    $mail = new PHPMailer(true);

    try {
        // Server settings
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = $yourEmail;
        $mail->Password   = $yourAppPassword;
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = 587;

        // Recipients
        $mail->setFrom($yourEmail, 'The Global Ties Form System');
        $mail->addAddress($yourEmail); // Send it to yourself

        // Sanitize and collect inputs
        $fullName = htmlspecialchars(trim($_POST["full_name"] ?? ""));
        $phone = htmlspecialchars(trim($_POST["phone"] ?? ""));
        $email = filter_var(trim($_POST["email"] ?? ""), FILTER_SANITIZE_EMAIL);
        $course = htmlspecialchars(trim($_POST["course"] ?? ""));
        $city = htmlspecialchars(trim($_POST["city"] ?? ""));
        $questions = htmlspecialchars(trim($_POST["questions"] ?? ""));

        // Content
        $mail->isHTML(false);
        $mail->Subject = 'New Request Information Submission - The Global Ties';
        
        $message = "You have received a new 'Request Information' form submission.\n\n";
        $message .= "Details:\n";
        $message .= "--------------------------------------\n";
        $message .= "Full Name: $fullName\n";
        $message .= "Phone Number: $phone\n";
        $message .= "Email Address: $email\n";
        $message .= "Course Interested In: $course\n";
        $message .= "City: $city\n";
        $message .= "Questions/Comments:\n$questions\n";
        $message .= "--------------------------------------\n";
        
        // If password is not configured, just save to a file and pretend it sent
        if ($yourAppPassword == "YOUR_APP_PASSWORD_HERE") {
            $logEntry = "====== " . date('Y-m-d H:i:s') . " ======\n" . $message . "\n";
            file_put_contents("submissions.txt", $logEntry, FILE_APPEND);
            
            // Redirect back on success
            $referer = $_SERVER["HTTP_REFERER"] ?? "index.php";
            $separator = (parse_url($referer, PHP_URL_QUERY) == NULL) ? "?" : "&";
            header("Location: " . $referer . $separator . "form_submitted=success");
            exit();
        }

        $mail->Body = $message;
        
        if (!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $mail->addReplyTo($email, $fullName);
        }

        $mail->send();
        
        // Redirect back on success
        $referer = $_SERVER["HTTP_REFERER"] ?? "index.php";
        $separator = (parse_url($referer, PHP_URL_QUERY) == NULL) ? "?" : "&";
        header("Location: " . $referer . $separator . "form_submitted=success");
        exit();
        
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}. Did you add your App Password in process_form.php?";
        exit();
    }
} else {
    header("Location: index.php");
    exit();
}
?>
