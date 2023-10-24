<!DOCTYPE html>
<html>
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Insert into Packages</title>

   <!-- swiper css link -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- font awesome cdn link -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link -->
   <link rel="stylesheet" href="assets/css/style.css">

</head>

<body>
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


<div class="heading" style="background:url(assets/images/header-bg-1.png) no-repeat">
    <h1>Welcome, Admin!</h1>
</div>

    <div id="dashboard">
        <ul>
            <li><a href="update_packages.php">Update Packages</a></li>
            <li><a href="see_reviews.php">See All Reviews</a></li>
            <li><a href="see_bookings.php">See All Bookings</a></li>
        </ul>

        <div id="content">
            <?php
            if (isset($_GET['page'])) {
                $page = $_GET['page'];
                switch ($page) {
                    case 'update_packages':
                        header('Location: update_packages.php');
                        exit();
                    case 'see_reviews':
                        header('Location: see_reviews.php');
                        exit();
                    case 'see_bookings':
                        header('Location: see_bookings.php');
                        exit();
                    default:
                        echo "Invalid page request.";
                }
            } else {
                echo "Please select an option from the menu.";
            }
            ?>
        </div>
    </div>
</body>
</html>
