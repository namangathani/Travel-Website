<?php
    try {
        $projectDB = new PDO('mysql:host=localhost;dbname=Book_db', 'root', '');
        $projectDB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    } catch (PDOException $e) {
        echo 'Connection failed: ' . $e->getMessage();
        die();
    }

    function register($username,$email,$password){
        global $projectDB;
        connectProjectDB();
        $query="INSERT INTO admin (username,email,password) VALUES (:username,:email,:password)";
        try{
            $statement=$projectDB->prepare($query);
            $statement->bindParam(":username",$username);
            $statement->bindParam(":password",$password);
            $statement->execute();
            return true;
        }catch(PDOException $e){
            return false;
        }
    }

    function login($username,$password){
        global $projectDB;
        $query = "SELECT * FROM admin WHERE username=:username AND password=:password";

        try{
            $statement = $projectDB->prepare($query);
            $statement->bindParam(":username", $username);
            $statement->bindParam(":password", $password);
            $statement->execute();
            $result=$statement->fetch(PDO::FETCH_ASSOC);
            if($result){
                if (session_status() == PHP_SESSION_NONE) {
                    session_start();
                }
                $_SESSION['username']=$username;
                return true;
            }else{
                return false;
            }
        }catch(PDOException $e){
            echo $e->getMessage();
            return false;
        }
    }

    function logout(){
        echo "logout";
        session_destroy();
        header("Location: ../login");
    }

?>