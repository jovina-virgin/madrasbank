<?php
$host="localhost";
$user="root";
$password="";
$db="demo";

$conn = mysqli_connect($host,$user,$password);
mysqli_select_db($conn, $db);
if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $ques = $_POST['text'];
  $query = "insert into feedback(Name, Email, Query) values('$name', '$email', '$ques')" ;
  $run = mysqli_query($conn, $query) or die(mysqli_error($conn));
  if ($run) {
    echo "<script>alert('Message has been sent!');
    window.location.href = '../index.html';
    </script>
    ";
  }
  else{
    echo "<script>alert('Error: Please try again later');</script>";
  }

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Contact Us</title>
	<link rel="stylesheet" type="text/css" href="now.css">
	<link rel="shortcut icon" type="img/jpg" href="../imgs/favicon.png">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">
</head>
<body>
	<header>
    <div class="wrapper">
        <div class="logo">
            <img src="../imgs/mbw.png" alt="pic">
        </div>
<ul class="nav-area">
<li><a href="../index.html">Home</a></li>
<li><a href="login.php">Login</a></li>
<li><a href="about.html">About Us</a></li>
<li><a href="contact.php">Contact</a></li>
<li><a href="admin.php">Admin</a></li>
</ul>
</div><br><br><br>
<form method="POST" action="#"> 
<br><br>     
	<h1>Contact Us</h1><br>
  <input name="name" type="text" class="feedback-input" placeholder="Name" />   
  <input name="email" type="text" class="feedback-input" placeholder="Email" />
  <textarea name="text" class="feedback-input" placeholder="Leave us a message"></textarea>
  <input type="submit" value="SUBMIT" name="submit" />
</form>
</header>
</body>
</html>
