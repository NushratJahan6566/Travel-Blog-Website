<?php
include("connect.php");
include("emails/mail.php");

if(isset($_POST['submit'])){
    $name = $_POST["name"];
    $email = $_POST["email"];
    $number = $_POST["number"];
    $departure_date = $_POST["departure-date"];
    $trip_type = $_POST["trip-type"];
    $destination = $_POST["destination"];
    $package = $_POST["package"];
    $transaction = $_POST["transaction"];
    $hear = $_POST["hear"];

    $sql = "INSERT INTO booking_info1 (name, email, number, departure_date, trip_type, destination, package, hear, transaction) 
            VALUES ('$name', '$email', '$number', '$departure_date', '$trip_type', '$destination', '$package', '$hear', '$transaction')";


    if ($conn->query($sql) === TRUE) {
        echo "Your Booking is processing, Please wait for the mail verification";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>