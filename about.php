<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>About</title>

   <!-- swiper css link -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- font awesome cdn link -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link -->
   <link rel="stylesheet" href="assets/css/style.css">

</head>
<body>
   
<!-- header section starts  -->

<section class="header">
   <a href="home.php" class="logo">stay.</a>
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

<div class="heading" style="background:url(assets/images/header-bg-1.png) no-repeat">
   <h1>About Us</h1>
</div>

<!-- about section starts  -->

<section class="about">
   <div class="image">
      <img src="assets/images/about-img.jpg" alt="">
   </div>
   <div class="content">
      <h3>Why Choose Us?</h3>
      <p>
         Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure numquam nulla iusto corporis dolor commodi libero, vitae obcaecati optio rerum ab culpa nesciunt, earum mollitia quasi ipsam non. Aliquid, iure.
      </p>
      <p>
         Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid rerum, delectus voluptate aliquam quaerat iusto repellendus error nulla ab atque.
      </p>
      <div class="icons-container">
         <div class="icons">
            <i class="fas fa-map"></i>
            <span>Top Destinations</span>
         </div>
         <div class="icons">
            <i class="fas fa-hand-holding-usd"></i>
            <span>Affordable Price</span>
         </div>
         <div class="icons">
            <i class="fas fa-headset"></i>
            <span>24/7 Guide Service</span>
         </div>
      </div>
   </div>
</section>

<!-- End of about section -->

<!-- Reviews section starts -->

<section class="reviews">
   <h1 class="heading-title">Client Reviews</h1>
   <a href="review.php" class="btn" style="text-align: center; display: block; margin: 0 auto;">Leave a review</a>


   <!-- Modify the database connection and retrieval code here -->
   <?php
   // Database connection using PDO
   try {
       $pdo = new PDO('mysql:host=localhost;dbname=Book_db', 'root', '');
       $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   } catch (PDOException $e) {
       die('Error: ' . $e->getMessage());
   }

   // Fetch reviews from the database
   $query = "SELECT name, rating, comment FROM reviews";
   $stmt = $pdo->prepare($query);
   $stmt->execute();
   $reviews = $stmt->fetchAll(PDO::FETCH_ASSOC);

   // Display reviews
   foreach ($reviews as $review) {
       echo '<div class="swiper-slide slide">';
       echo '<div class="stars">';
       for ($i = 0; $i < $review['rating']; $i++) {
           echo '<i class="fas fa-star"></i>';
       }
       echo '</div>';
       echo '<p>' . $review['comment'] . '</p>';
       echo '<h3>' . $review['name'] . '</h3>';
       echo '<span>Traveler</span>';
      //  echo '<img src="' . $review['image'] . '" alt="">';
       echo '</div>';
   }
   ?>

</section>

<!-- Reviews section ends -->

<!-- swiper js link -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link -->
<script src="assets/js/script.js"></script>

</body>
</html>
