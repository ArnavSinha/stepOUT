<!DOCTYPE html>
<html>
<head>
 <title> </title> 
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="css\style.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet"></head>
<style>
body {
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
  background-image: url("/project/images/test5.jpg");


}
</style>
<body class="register"> 

<?php include 'nav.php' ?>

<form action=" " method="POST">
      
      <h1>Register Here</h1>
      
      <fieldset>
        <legend>Your basic info</legend>
        <label for="name">Name:</label>
        <input type="text" id="name" name="name">
        
        <label for="mail">Email:</label>
        <input type="email" id="mail" name="email">
        
        <label for="password">Password:</label>
        <input type="password" id="password" name="password">
      </fieldset>
    
      <fieldset>
        <legend>Interests:</legend>
        <input type="checkbox" id="sports" value="interest_sports" name="user_interest"><label class="light" for="sports">Sports</label><br>
        <input type="checkbox" id="art" value="interest_art" name="user_interest"><label class="light" for="art">Art and Craft</label><br>
        <input type="checkbox" id="cooking" value="interest_cooking" name="user_interest"><label class="light" for="cooking">Cooking</label>
        <input type="checkbox" id="gaming" value="interest_gaming" name="user_interest"><label class="light" for="gaming">Gaming</label>
        <input type="checkbox" id="writing" value="interest_writing" name="user_interest"><label class="light" for="writing">Writing</label>
        <input type="checkbox" id="reading" value="interest_reading" name="user_interest"><label class="light" for="reading">Reading</label>
        <input type="checkbox" id="dancing" value="interest_dancing" name="user_interest"><label class="light" for="dancing">Dancing</label>

      </fieldset>
      <button type="submit" name="register" value="register">Register</button>
    </form>
    <?php
if(isset($_POST["register"])){
$con = mysqli_connect('localhost', 'root');

mysqli_select_db($con, 'iws');
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

$query= "insert into userinfo (name,email,password) values ('$name','$email' ,'$password' )";

mysqli_query($con,$query);

$message = "Greetings! \n\nWe're so glad to have you here at stepOUT and can't wait for you to find new interests and Unsettle Comfort! \n\nSign in everyday to reveal your activity for the day.";

mail($email,"Welcome Aboard!", $message);

header("Location: signIn.php"); 
}
?>
<footer> <p class="p-3 text-center bg-dark text-white">stepOUT | Unsettle Comfort</p></footer>
</body>
</html>