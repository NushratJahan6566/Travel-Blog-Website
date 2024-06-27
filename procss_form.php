<?php
include("connect.php");

if(isset($_POST['submit'])){
    $name = $_POST["name"];
    $email = $_POST["email"];
    $number = $_POST["number"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];
    
    $insertQuery="INSERT INTO contact1 (name, email, number, subject, message)
                  VALUES ('$name', '$email', '$number', '$subject', '$message')";
    if($conn->query($insertQuery) === TRUE){
        header("Location: contactus.php");
        exit;
    } else{
        echo "Error: " . $conn->error;
    }
}
?>
