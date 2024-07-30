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

   <a href="index.php" class="logo">stay.</a>

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
   <h1>book now</h1>
</div>

<?php
      try {
         $pdo = new PDO('mysql:host=localhost;dbname=book_db', 'root', '');
         $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

         $query = 'SELECT title FROM Packages';
         $stmt = $pdo->prepare($query);
         $stmt->execute();
         $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

      } catch (PDOException $e) {
         echo 'Database Error: ' . $e->getMessage();
      }
      ?>


<section class="booking">

   <h1 class="heading-title">book your trip!</h1>

   <form action="book_form.php" method="post" class="book-form">
      <div class="flex">
         <div class="inputBox">
            <span>name :</span>
            <input type="text" placeholder="enter your name" name="name">
         </div>
         <div class="inputBox">
            <span>email :</span>
            <input type="email" placeholder="enter your email" name="email">
         </div>
         <div class="inputBox">
            <span>phone :</span>
            <input type="number" placeholder="enter your number" name="phone">
         </div>
         <div class="inputBox">
            <span>address :</span>
            <input type="text" placeholder="enter your address" name="address">
         </div>
         <div class="inputBox">
            <span>where to :</span>
            <select type="text" placeholder="place you want to visit" name="location">
            <?php
               foreach ($result as $destinationArray) {
                  foreach ($destinationArray as $key => $value) {
                     echo "<option value=\"$value\">$value</option>";
                  }
               }
            ?>
            </select>

         </div>
         <div class="inputBox">
            <span>how many :</span>
            <input type="number" placeholder="number of guests" name="guests">
         </div>
         <div class="inputBox">
            <span>arrivals :</span>
            <input type="date" name="arrivals">
         </div>
         <div class="inputBox">
            <span>leaving :</span>
            <input type="date" name="leaving">
         </div>
      </div>

      <input type="submit" value="submit" class="btn" name="send">
   </form>


</section>




<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<script src="assets/js/script.js"></script>

</body>
</html>
