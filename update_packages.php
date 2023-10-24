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
        <a href="home.php" class=" logo">stay.</a>
        <nav class="navbar">
            <a href="home.php">home</a>
            <a href="about.php">about</a>
            <a href="package.php">package</a>
            <a href="book.php">book</a>
            <a href="login.php">Admin</a>
        </nav>
        <div id="menu-btn" class="fas fa-bars"></div>
    </section>

    <form action="" method="post" enctype="multipart/form-data">
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" required><br>

        <label for="description">Description:</label>
        <textarea name="description" id="description" required></textarea><br>

        <label for="image">Select an image to upload:</label>
        <input type="file" name="image" id="image" required><br>

        <input type="submit" value="Upload and Insert" name="submit">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $host = 'localhost'; 
        $username = 'root'; 
        $password = ''; 
        $database = 'Book_db'; 

        // Get form data
        $name = $_POST['name'];
        $description = $_POST['description'];

        // Upload image
        $uploadDirectory = $_SERVER['DOCUMENT_ROOT'] . '/Travel-Website/assets/images/';

        if (!file_exists($uploadDirectory)) {
            mkdir($uploadDirectory, 0777, true);
        }

        $image = $_FILES['image'];

        if ($image['error'] === 0) {
            $fileName = $uploadDirectory . $image['name'];
            $downloadedFileName = '/Applications/XAMPP/xamppfiles/htdocs/Travel-Website/assets/images/' . $image['name']; // Set the path where you want to save the image

            if (move_uploaded_file($image['tmp_name'], $downloadedFileName)) {
                // Create a PDO database connection
                try {
                    $pdo = new PDO("mysql:host=$host;dbname=$database", $username, $password);
                    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                } catch (PDOException $e) {
                    die("Connection failed: " . $e->getMessage());
                }
            
                $sql = "INSERT INTO Packages (title, description, image) VALUES (:name, :description, :image)";
                $stmt = $pdo->prepare($sql);
                $stmt->bindParam(':name', $name);
                $stmt->bindParam(':description', $description);
                $stmt->bindParam(':image', $image['name']);
            
                if ($stmt->execute()) {
                    echo "Data inserted successfully!";
                } else {
                    echo "Error: " . implode(" ", $stmt->errorInfo());
                }
            } else {
                echo "Failed to move the uploaded file.";
            }
        }
    } else {
            echo "Error: " . $image['error'];
        }
    
    ?>
</body>
</html>
