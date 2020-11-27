<?php

$con = mysqli_connect('localhost', 'root');

mysqli_select_db($con, 'iws');

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$query= "insert into usercontact (name,email,subject,message) values ('$name','$email' ,'$subject','$message')";

mysqli_query($con,$query);
echo "Thanks for contacting us. We'll get back to you shortly!";
?>

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>stepOUT</title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="css\style.css">
</head>
<body>
    <h2>Thanks for contacting us. We'll get back to you shortly!</h2>
</body>
</html> -->