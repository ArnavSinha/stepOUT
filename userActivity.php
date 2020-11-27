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
<body style="background-color:#C195F3;">
    
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
<a class="navbar-brand" href="index.php"><img src="images\logo.jpeg" alt="logo"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto" style="font-size: 1.3em;">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <!-- <li class="nav-item">
        <a class="nav-link" href="about.php">About Us</a>
      </li> -->
      <li class="nav-item">
        <a class="nav-link" href="contact.php">Contact Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php">Sign Out</a>
      </li>
    </ul>
  </div>
</nav>
<h2 style="text-align:center;">Activity of the day!</h2>

<div class="card" style="width: 18rem; margin-left:40%; ">
  <img class="card-img-top" src="images\test6.jpg" alt="Card image cap">
  <div class="card-body">
    <p class="card-text" style="text-align:center;">
    <?php 

  $conn = mysqli_connect('localhost', 'root', '', 'iws');
  // if($conn)
  //   echo "Connected";
  // else
  //   echo "Not Connected!";

  $query = "SELECT activity FROM `useractivity` WHERE tag = 'Y' ORDER BY RAND() LIMIT 2";
  $result = mysqli_query($conn, $query);
  $count=1;
  while($row = mysqli_fetch_array($result)) {
    echo "".$row["activity"]." "."<br>";
    if($count == 1)
      echo "OR"."<br>";
    $count++;
  }

?>
    
    </p>

    <form method="get" action="https://ctt.ac/88IF5" class="tweet">
    <button type="tweet" style="padding: 5px 0 5px 0;"><i class="fa fa-share-alt-square"> Share on Twitter</i></button>
</form>
  </div>
</div>



<div class="card" style="
    margin-left: 100px;
    margin-right: 100px;
    margin-top: 10px;
    margin-bottom: 10px;">
  <h5 class="card-header" style="text-align:center;">Quote of the day:</h5>
  <div class="card-body">
    <p class="card-text" style="text-align:center;">
    <?php 

$conn = mysqli_connect('localhost', 'root', '', 'iws');
// if($conn)
//   echo "Connected";
// else
//   echo "Not Connected!";

$query = "SELECT quote FROM `quotes` ORDER BY RAND() LIMIT 1";
$result = mysqli_query($conn, $query);

while($row = mysqli_fetch_array($result)) {
  echo "".$row["quote"]." "."<br>";
}

?>
    
    </p>
  </div>
</div>
<footer> <p class="p-3 text-center bg-dark text-white">stepOUT | Unsettle Comfort</p></footer>

<script src="https://use.fontawesome.com/b952567fab.js"></script>
</body>
</html>