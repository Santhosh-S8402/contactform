<?php
if (isset($_POST['send'])) {
    $name = $_POST['Name'];
    $email = $_POST['Email'];
    $phnum = $_POST['PhoneNumber'];
    $district = $_POST['District'];
    $msg = $_POST['Message'];

    $receiver = "santhoshpkr8402@gmail.com";
    $subject = "Contact From PKR Pleasant Dairy! ";
    $body = "Name: $name\nEmail: $email\nPhone Number: $phnum\nDistrict: $district\n\n\nMessage: $msg";
    $sender = "From: $email";
    if (mail($receiver, $subject, $body, $sender)) {
        echo "Message Sent Sucessfully!";
    } else {
        echo "Sorry, failed to send your mail";
    }
}
?>