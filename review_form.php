<?php

   $connection = mysqli_connect('localhost','root','','book_db');

   if(isset($_POST['send']))
   {
      $name = $_POST['name'];
      $rating = $_POST['rating'];
      $review = $_POST['review'];

      $request = " insert into reviews(name, rating, comment) values('$name','$rating','$review') ";
      mysqli_query($connection, $request);

      header('location:review.php'); 

   }else{
      echo 'something went wrong please try again!';
   }

?>