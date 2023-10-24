<?php
try {
    $pdo = new PDO("mysql:host=localhost;dbname=book_db", 'root', '');

    if(isset($_POST['send'])) {
        $name = $_POST['name'];
        $rating = $_POST['rating'];
        $review = $_POST['review'];

        $stmt = $pdo->prepare("INSERT INTO reviews (name, rating, comment) VALUES (?, ?, ?)");
        $stmt->execute([$name, $rating, $review]);

        header('Location: review.php');
        exit(); 
    } else {
        echo 'Something went wrong. Please try again!';
    }
} catch (PDOException $e) {
    echo 'Database connection error: ' . $e->getMessage();
}
?>