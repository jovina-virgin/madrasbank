<?php
$host="localhost";
$user="root";
$password="";
$db="demo";

$conn = mysqli_connect($host,$user,$password);
mysqli_select_db($conn, $db);

if(isset($_POST['name'])){
    session_start();
	$_SESSION['name'] = $_POST['name'];
    $uname=$_POST['name'];
    $password=$_POST['password'];
    
    $sql="select * from admin where Name='".$uname."'AND Password='".$password."' limit 1";
    
    $result=mysqli_query($conn, $sql);
    
    if(mysqli_num_rows($result)==1){
        echo "<script>window.location.href='hello.php';</script>";
        exit();
    }
    else{
    	echo "<script> alert('Incorrect Password');
    	window.location.href='../index.html';</script>";
        exit();
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Admin</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="shortcut icon" type="img/jpg" href="../imgs/favicon.png">
	<link rel="stylesheet" type="text/css" href="now.css">
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
</div>
	<div class="container"><br><br><br><br><br><br><br>
		<form method="POST" action="#">
			<div class="form-input"><br><br>
				<h1>Admin</h1><br>
				<input type="text" name="name" placeholder="Enter User Name" required class="feedback-input"/>	
			</div>
			<div class="form-input">
				<input type="password" name="password" placeholder="Enter Password" class="feedback-input" required/>
			</div>
			<input type="submit" value="LOGIN" class="btn-login"/>
		</form>
		<br>
	</div>
</header>
</body>
</html>