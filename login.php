<?php
session_start();
include 'credentials.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
   $username = $_POST['username'];
   $password = $_POST['password'];

   // header('location:dashboard.php');
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

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="assets/css/style.css">

</head>
<body>
   
<!-- header section starts  -->

<section class="header">

   <a href="home.php" class="logo">Stay.</a>

   <nav class="navbar">
      <a href="home.php">home</a>
      <a href="about.php">about</a>
      <a href="package.php">package</a>
      <a href="book.php">book</a>
      <a href="login.php">Admin</a>

   </nav>

   <div id="menu-btn" class="fas fa-bars"></div>

</section>

<!-- header section ends -->

<div class="heading" style="background:url(assets/images/header-bg-3.png) no-repeat">
   <h1>ADMIN DASHBOARD</h1>
</div>

<!-- booking section starts  -->
<?php
      // Use PDO to connect to the database
      try {
         $pdo = new PDO('mysql:host=localhost;dbname=book_db', 'root', '');
         $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

         // Fetch packages from the database
         $query = 'SELECT * FROM admin';
         $stmt = $pdo->prepare($query);
         $stmt->execute();
         $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
         print_r($result);

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

<!-- booking section ends -->



<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="assets/js/script.js"></script>

</body>
</html>