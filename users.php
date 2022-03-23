<?php 

include("includes/db.php"); 

    if (isset($_POST["submit"])) {

    // Getting values
    $firstname     = $_POST["firstname"];
    $lastname      = $_POST["lastname"];
    $email         = $_POST["email"];
    $country       = $_POST["country"];
    $phone         = $_POST["phone"];
    $password      = $_POST["password"];
    $cpassword     = $_POST["cpassword"];
    $gender        = $_POST["gender"];
    $message       = $_POST["message"];
    $terms         = $_POST["terms"];

    if(empty($firstname) || empty($lastname) || empty($email) || empty($country) || empty($phone) || empty($password) || empty($gender) || empty($message) || empty($terms)) {
       die("Missing Fields");
    }

    // Prepare
    $stmt = mysqli_prepare($connection, "INSERT INTO users(firstname, lastname, email, country, phone, password, cpassword, gender, message, terms) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
                                      
    mysqli_stmt_bind_param($stmt, 'ssssssssss', $firstname, $lastname, $email, $country, $phone, $password, $cpassword, $gender, $message, $terms);

    mysqli_stmt_execute($stmt);

    
    header("Location: show-users.php");

    }