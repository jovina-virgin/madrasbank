<?php
session_start();
$host="localhost";
$user="root";
$password="";
$db="demo";

$conn = mysqli_connect($host,$user,$password);
mysqli_select_db($conn, $db);
if (isset($_POST['submit'])) {
	$name = $_POST['name'];
	$pass = $_POST['pass'];
	$acc = $_POST['acc'];
	$email = $_POST['email'];
	$pno = $_POST['pno'];
	$add = $_POST['add'];
	$money = $_POST['money'];
	$there = mysqli_query($conn, "SELECT * FROM loginform WHERE `Account` = '$acc'");
	$count = mysqli_num_rows($there);

	if ($count == 0 ) {
		$query = "insert into loginform (Username, Password, Account, Email, Contact, Address, Amount) values('$name', '$pass', '$acc', '$email', '$pno', '$add', '$money')" ;
		$run = mysqli_query($conn, $query) or die(mysqli_error($conn));
		echo "<script>alert('New User created');</script>";
	}	
	else{
		echo "<script>alert('Error: Account already exists');</script>";
	}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>New User</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="shortcut icon" type="img/jpg" href="../imgs/favicon.png">
	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="fun.css">
</head>
<body>
	<div class="logo">
        <img src="../imgs/mb.png" alt="logo pic">
    </div>
	<h1>Madras Bank</h1>
	<h2>Hello, <?php echo $_SESSION['name'];?>!</h2>
    <div class="nav-area"><nav><ul>
    	<li><a href="hello.php">Home</a></li>
    	<li><a href="create.php">New User</a></li>
    	<li><a href="applications.php">Applications</a></li>
    	<li><a href="feedback.php">Queries</a></li>
        <li class="abc"><a class="active" href="logout.php">Logout</a></li>
    </ul>
    </nav></div>
    <form method="POST" action="#">
    <h1>User Details</h1>
	<label>Name : </label>
	<input type="text" name="name" required><br><br>
	<label>Password : </label>
	<input type="password" name="pass" required><br><br>
	<label>Account No. : </label>
	<input type="number" name="acc" required><br><br>
	<label>Email Address : </label>
	<input type="email" name="email" required><br><br>
	<label>Phone Number : </label>
	<input type="tel" name="pno" required><br><br>
	<label>Address : </label>
	<textarea name="add" id="name" rows="4" cols="50" required></textarea><br><br>
	<label>Amount Deposited : Rs</label>
	<input type="number" name="money" required><br><br>
	<input type="reset" name="reset">
	<input type="submit" name="submit">	
</form>
</body>
</html>