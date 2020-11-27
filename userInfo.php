<?php

$con = mysqli_connect('localhost', 'root');

mysqli_select_db($con, 'iws');
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

$query= "insert into userinfo (name,email,password) values ('$name','$email' ,'$password' )";

mysqli_query($con,$query);

?>

<?php include 'nav.php' ?>

<!DOCTYPE html>
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

    <div style="margin: auto;">
        <h3>Welcome to stepOUT!</h3>
        <h5>Thank you for registering. Please <a href="userActivity.php">Sign In</a> here to see your activity.</h5>
    </div>
</body>
</html>