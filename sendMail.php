<!DOCTYPE html>
<html>
<head>
 <title>stepOUT</title> 
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

}
</style>
<body class="signIn"> 


<?php include 'nav.php' ?>

<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->

    <div> <h1 class="text-center"> Mail Delivery System </h1> </div>
    <!-- Login Form -->
    <form action="mail.php" method="POST" class="signUp">
      <input type="text" id="login" class="fadeIn second" name="email" placeholder="Email">
      <input type="text" class="fadeIn second" name="subject" placeholder="Subject">
      <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea"  placeholder="Your Message"></textarea>
      <!-- <input type="submit" class="fadeIn fourth" value="Sign In"> -->
      <button type="submit" class="fadeIn fourth btn btn-outline-secondary">Send</button>
    </form>

  </div>
</div>
<footer> <p class="p-3 text-center bg-dark text-white">stepOUT | Unsettle Comfort</p></footer>
</body>
</html>