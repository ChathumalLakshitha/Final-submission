<?php
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];


if (empty($name)) {
    echo ("Please Enter Your Name");
} else if (strlen($name) > 40) {
    echo ("Name length must between 40 characters");
} else if (empty($email)) {
    echo ("Please Enter Your Email");
} else if (strlen($email) > 100) {
    echo ("Email length must between 100 characters");
} else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo ("Invalid Email address");
} else if (empty($message)) {
    echo ("Please Enter Your Message");
} else if (strlen($message) > 500) {
    echo ("Message length must between 500 characters");
} else {


    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "petshop";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "INSERT INTO `contactus` (`customername`, `email`, `message`) VALUES ('$name', '$email', '$message')";
    if ($conn->query($sql) === TRUE) {
        echo "Message sent successfully!";
    } else {
        echo "Error";
    }

    $conn->close();
}
