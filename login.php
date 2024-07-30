<?php
session_start();
include 'credentials.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
   $username = $_POST['username'];
   $password = $_POST['password'];

   if(login($username,$password))
   {
      header('location:dashboard.php');
      exit;
   }
   else{
      echo "Invalid Credentials";
   }

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>book</title>

   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <link rel="stylesheet" href="assets/css/style.css">

</head>
<body>
   

<section class="header">

   <a href="index.php" class="logo">Stay.</a>

   <nav class="navbar">
      <a href="index.php">home</a>
      <a href="about.php">about</a>
      <a href="package.php">package</a>
      <a href="book.php">book</a>
      <a href="login.php">Admin</a>

   </nav>

   <div id="menu-btn" class="fas fa-bars"></div>

</section>


<div class="heading" style="background:url(assets/images/header-bg-3.png) no-repeat">
   <h1>ADMIN DASHBOARD</h1>
</div>

<?php
      try {
         $pdo = new PDO('mysql:host=localhost;dbname=book_db', 'root', '');
         $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

         $query = 'SELECT * FROM admin';
         $stmt = $pdo->prepare($query);
         $stmt->execute();
         $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

      } catch (PDOException $e) {
         echo 'Database Error: ' . $e->getMessage();
      }
      ?>


<section class="booking">

   <h1 class="heading-title">Login</h1>

   <form method="post" class="book-form">
      <div class="flex">
         <div class="inputBox">
            <span>Username:</span>
            <input type="text" placeholder="enter username" name="username">
         </div>
         <div class="inputBox">
            <span>Password :</span>
            <input type="password" placeholder="enter Password" name="password">
         </div>
         <input type="submit" value="submit" class="btn" name="send">

   </form>


</section>




<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<script src="assets/js/script.js"></script>

</body>
</html>
