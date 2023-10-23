<?php
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';

if (isset($_POST['send'])) {
   // Database connection using PDO
   try {
       $pdo = new PDO('mysql:host=localhost;dbname=Book_db', 'root', '');
       $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   } catch (PDOException $e) {
       die('Error: ' . $e->getMessage());
   }

   $name = $_POST['name'];
   $email = $_POST['email'];
   $phone = $_POST['phone'];
   $address = $_POST['address'];
   $location = $_POST['location'];
   $guests = $_POST['guests'];
   $arrivals = $_POST['arrivals'];
   $leaving = $_POST['leaving'];

   // Insert form data into the database
   $query = "INSERT INTO book_form (name, email, phone, address, location, guests, arrivals, leaving) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
   $stmt = $pdo->prepare($query);
   $stmt->execute([$name, $email, $phone, $address, $location, $guests, $arrivals, $leaving]);

   // Send confirmation email using PHPMailer
   $mail = new PHPMailer\PHPMailer\PHPMailer();
   $mail->isSMTP();
   $mail->Host = 'smtp.yourmailprovider.com';
   $mail->SMTPAuth = true;
   $mail->Username = 'your_email@example.com';
   $mail->Password = 'your_email_password';
   $mail->SMTPSecure = 'tls';
   $mail->Port = 587;

   $mail->setFrom('your_email@example.com', 'Your Name');
   $mail->addAddress($email, $name);

   $mail->isHTML(true);
   $mail->Subject = 'Booking Confirmation';
   $mail->Body = 'Thank you for booking with us!';

   if ($mail->send()) {
      echo 'Booking successful! Confirmation email sent.';
   } else {
      echo 'Booking successful, but confirmation email failed to send. Please check your email later.';
   }

   header('location:book.php'); 
} else {
   echo 'Something went wrong. Please try again!';
}
