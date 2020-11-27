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

}
</style>
<body class="signIn"> 


<?php include 'nav.php' ?>

<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->

    <div> <h1 class="text-center"> Sign In to view your activity of the day! </h1> </div>
    <!-- Login Form -->
    <form class="signUp"  action=" " method="POST">
      <input type="text" id="login" class="fadeIn second" name="email" placeholder="Email">
      <input type="password" id="password" class="fadeIn third" name="password" placeholder="Password">
      <input type="submit" class="fadeIn fourth" value="Sign In" name="signIn">
    </form>
    <?php  
if(isset($_POST["signIn"])){  
  
if(!empty($_POST['email']) && !empty($_POST['password'])) {  
    $user=$_POST['email'];  
    $pass=$_POST['password'];  
  
    $con=mysqli_connect('localhost','root') or die(mysql_error());  
    mysqli_select_db($con,'iws') or die("cannot select DB");  
  
    $result=mysqli_query($con,"SELECT * FROM userinfo WHERE email='".$user."' AND password='".$pass."'");  
    $numrows=mysqli_num_rows($result);  
    if($numrows!=0)  
    {  
    while($row=mysqli_fetch_assoc($result))  
    {  
    $dbusername=$row['email'];  
    $dbpassword=$row['password'];  
    }  
  
    if($user == $dbusername && $pass == $dbpassword)  
    {  
    session_start();  
    $_SESSION['sess_user']=$user;  
  
    /* Redirect browser */  
    header("Location: userActivity.php");  
    }  
    } else {  
    echo "Invalid username or password!";  
    }  
  
} else {  
    echo "All fields are required!";  
}  
}  
?>  
  </div>
</div>
<footer> <p class="p-3 text-center bg-dark text-white">stepOUT | Unsettle Comfort</p></footer>
</body>
</html>