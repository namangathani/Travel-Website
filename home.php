<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Home</title>
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
   <link rel="stylesheet" href="css/style.css">
</head>
<body>
<section class="header">
   <a href="home.php" class="logo">Travel</a>
   <nav class="navbar">
      <a href="home.php">Home</a>
      <a href="about.php">About</a>
      <a href="package.php">Packages</a>
      <a href="book.php">Book</a>
      <a href="review.php">Review</a>
   </nav>
   <div id="menu-btn" class="fas fa-bars"></div>
</section>
<section class="home">
   <div class="swiper home-slider">
      <div class="swiper-wrapper">
         <div class="swiper-slide slide" style="background:url(images/home-slide-1.jpg) no-repeat">
            <div class="content">
               <span>Explore, Discover, Travel</span>
               <h3>Travel Around the World</h3>
               <a href="package.php" class="btn">Discover More</a>
            </div>
         </div>
         <div class "swiper-slide slide" style="background:url(images/home-slide-2.jpg) no-repeat">
            <div class="content">
               <span>Explore, Discover, Travel</span>
               <h3>Discover New Places</h3>
               <a href="package.php" class="btn">Discover More</a>
            </div>
         </div>
         <div class="swiper-slide slide" style="background:url(images/home-slide-3.jpg) no-repeat">
            <div class="content">
               <span>Explore, Discover, Travel</span>
               <h3>Make Your Tour Worthwhile</h3>
               <a href="package.php" class="btn">Discover More</a>
            </div>
         </div>
      </div>
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
   </div>
</section>
<section class="services">
   <h1 class="heading-title">Our Services</h1>
   <div class="box-container">
      <div class="box"><img src="images/icon-1.png" alt=""><h3>Adventure</h3></div>
      <div class="box"><img src="images/icon-2.png" alt=""><h3>Tour Guide</h3></div>
      <div class="box"><img src="images/icon-3.png" alt=""><h3>Trekking</h3></div>
      <div class="box"><img src="images/icon-4.png" alt=""><h3>Camp Fire</h3></div>
      <div class="box"><img src="images/icon-5.png" alt=""><h3>Off Road</h3></div>
      <div class="box"><img src="images/icon-6.png" alt=""><h3>Camping</h3></div>
   </div>
</section>
<section class="home-about">
   <div class="image"><img src="images/about-img.jpg" alt=""></div>
   <div class="content">
      <h3>About Us</h3>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita et, recusandae nobis fugit modi quibusdam ea assumenda, nulla quisquam repellat rem aliquid sequi maxime sapiente autem ipsum? Nobis, provident voluptate?</p>
      <a href="about.php" class="btn">Read More</a>
   </div>
</section>
<section class="home-packages">
   <h1 class="heading-title">Our Packages</h1>
   <div class="box-container">
      <div class="box">
         <div class="image"><img src="images/nyc.jpg" alt=""></div>
         <div class="content">
            <h3>NYC</h3>
            <p>New York City: The City That Never Sleeps, Where Iconic Skyscrapers, Diverse Neighborhoods, And Endless Entertainment Meet In One Dynamic Metropolis.</p>
            <a href="book.php" class="btn">Book Now</a>
         </div>
      </div>
      <div class="box">
         <div class="image"><img src="images/bali.jpg" alt=""></div>
         <div class="content">
            <h3>Bali</h3>
            <p>Bali, Indonesia: An Enchanting Island Paradise Known For Its Stunning Beaches, Vibrant Culture, And Lush Tropical Landscapes.</p>
            <a href="book.php" class="btn">Book Now</a>
         </div>
      </div>
      <div class="box">
         <div class="image"><img src="images/monaco.jpg" alt=""></div>
         <div class="content">
            <h3>Monaco</h3>
            <p>Monaco: A Glamorous Microstate On The French Riviera, Famous For Its Opulent Casinos, Luxury Yachts, And Breathtaking Mediterranean Views.</p>
            <a href="book.php" class="btn">Book Now</a>
         </div>
      </div>
   </div>
   <div class="load-more"><a href="package.php" class="btn">Load More</a></div>
</section>
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
<script src="js/script.js"></script>
</body>
</html>
