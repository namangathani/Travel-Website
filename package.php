<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>package</title>

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


<div class="heading" style="background:url(assets/images/header-bg-2.png) no-repeat">
   <h1>packages</h1>
</div>


<section class="packages">

   <h1 class="heading-title">top destinations</h1>

   <div class="box-container">
      <?php
      try {
         $pdo = new PDO('mysql:host=localhost;dbname=book_db', 'root', '');
         $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

         $query = $pdo->query('SELECT * FROM packages');
         while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
            echo '<div class="box">';
            echo '<div class="image"><img src="./assets/images/' . $row['image'] . '" alt=""></div>';
            echo '<div class="content">';
            echo '<h3>' . $row['title'] . '</h3>';
            echo '<p>' . $row['description'] . '</p>';
            echo '<a href="book.php" class="btn">book now</a>';
            echo '</div>';
            echo '</div>';
         }
      } catch (PDOException $e) {
         echo 'Database Error: ' . $e->getMessage();
      }
      ?>
   </div>

</section>


<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<script src="assets/js/script.js"></script>

</body>
</html>
