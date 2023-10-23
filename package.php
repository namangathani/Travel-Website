<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>package</title>

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<!-- header section starts  -->

<section class="header">

   <a href="home.php" class="logo">travel</a>

   <nav class="navbar">
      <a href="home.php">home</a>
      <a href="about.php">about</a>
      <a href="package.php">package</a>
      <a href="book.php">book</a>
   </nav>

   <div id="menu-btn" class="fas fa-bars"></div>

</section>

<!-- header section ends -->

<div class="heading" style="background:url(images/header-bg-2.png) no-repeat">
   <h1>packages</h1>
</div>

<!-- packages section starts  -->

<section class="packages">

   <h1 class="heading-title">top destinations</h1>

   <div class="box-container">
      <?php
      // Use PDO to connect to the database
      try {
         $pdo = new PDO('mysql:host=localhost;dbname=book_db', 'root', '');
         $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

         // Fetch packages from the database
         $query = $pdo->query('SELECT * FROM packages');
         while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
            echo '<div class="box">';
            echo '<div class="image"><img src="' . $row['image'] . '" alt=""></div>';
            echo '<div class="content">';
            echo '<h3>' . $row['title'] . '</h3>';
            echo '<p>' . $row['description'] . '</p>';
            echo '<a href="book.php?package_id=' . $row['id'] . '" class="btn">book now</a>';
            echo '</div>';
            echo '</div>';
         }
      } catch (PDOException $e) {
         echo 'Database Error: ' . $e->getMessage();
      }
      ?>
   </div>

   <div class="load-more"><span class="btn">load more</span></div>

</section>

<!-- packages section ends -->

<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>
