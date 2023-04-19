<?php
     require_once("db.php");
     
     if(isset($_POST["btn_login"])){
        $username = $_POST["uname"];
        $password = $_POST["password"];

        $hashed_pass = hash('sha256',$password);
        //echo($hashed_pass);
        $query = "SELECT * FROM users WHERE username='$username' AND password='$hashed_pass'";

        $result = mysqli_query($conn, $query);
        if(mysqli_num_rows($result)>0){
            while($row = mysqli_fetch_assoc($result)){
                 $_SESSION['username'] = $row["username"];
                 $_SESSION['name'] = $row["name"];
            }
            if($_SESSION['username'] == "admin")
                header('Location:admin.php');
            if($_SESSION['username'] != "admin")
                header('Location:index.php');
            
        //echo("Login");
        }
        else{
            echo("No user found");
        }
    }
    if(isset($_POST["btn_signup"])){
        $firstname = $_POST["fname"];
        $surname = $_POST["surname"];
        $email = $_POST["email"];
        $number = $_POST["number"];
        $username = $_POST["uname"];
        $password = $_POST["password"];
        $address = $_POST["address"];
        
        $hashed_pass = hash('sha256',$password);
        
        $query = "INSERT INTO users(name, surname, username, password, number, address,email) 
        VALUES ('$firstname', '$surname', '$username','$hashed_pass','$number', '$address','$email')";
        if (mysqli_query($conn, $query)) {
            
            header('Refresh: 3;url=login.php');
            echo("account created successfully");
            
        }
        else{
             echo "Error: " . $query . "<br>" . mysqli_error($conn);
        }
        //echo("signup");
    }

?>
