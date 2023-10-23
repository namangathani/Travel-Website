<?php
// require 'PHPMailer/PHPMailer.php';
// require 'PHPMailer/SMTP.php';

if (isset($_POST['send'])) {
   // Database connection using PDO
   try {
       $pdo = new PDO('mysql:host=localhost;dbname=Book_db', 'root');
       $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       $name = $_POST['name'];
   $email = $_POST['email'];
   $phone = $_POST['phone'];
   $address = $_POST['address'];
   $location = $_POST['location'];
   $guests = $_POST['guests'];
   $arrivals = $_POST['arrivals'];
   $leaving = $_POST['leaving'];

   print_r($_POST);
   $query = "INSERT INTO book_form (name, email, phone, address, location, guests, arrivals, leaving) VALUES (:name,:email,:phone,:address,:location,:guests,:arrivals,:leaving)";

   $stmt = $pdo->prepare($query);
   $stmt->bindParam(":name",$name);
   $stmt->bindParam(":email",$email);
   $stmt->bindParam(":phone",$phone);
   $stmt->bindParam(":address",$address);
   $stmt->bindParam(":location",$location);
   $stmt->bindParam(":guests",$guests);
   $stmt->bindParam(":arrivals",$arrivals);
   $stmt->bindParam(":leaving",$leaving);
   $stmt->execute();


   include 'mailing.php';
   sendMail($email,'Booking Confirmation','Dear '.$name.', Your Booking from '.$arrivals.' to '.$leaving.' at '.$location.' has been confirmed');

 

   } catch (PDOException $e) {
      die('Error: ' . $e->getMessage());
  }
   

   
} else {
   echo 'Something went wrong. Please try again!';
}


?>