<?php
session_start();
$host="localhost";
$user="root";
$password="";
$db="demo";

$conn = mysqli_connect($host,$user,$password);
mysqli_select_db($conn, $db);
$name = $_SESSION['username'];
$sql = mysqli_query($conn, "SELECT * FROM loginform WHERE `Username` = '$name'");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Accounts</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="shortcut icon" type="img/jpg" href="../imgs/favicon.png">
	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="fun.css">
</head>
<body>
	<header>
		<div class="wrapper">
        <div class="logo">
            <img src="../imgs/mb.png" alt="logo pic">
        </div>
	<h1>Madras Bank</h1>
	<h2>Welcome, <?php
    echo $_SESSION['username'];?>!</h2>
<ul class="nav-area">
<li><a href="welcome.php">Home</a></li>
<li><a href="transfer.php">Transfer</a></li>
<li><a href="transactions.php">Transactions</a></li>
<li><a href="loans.php">Loans</a></li>
<li><a href="accounts.php">Account</a></li>
<li class="abc"><a class= "active" href="logout.php">Logout</a></li>
</ul>
<h1>Account Details</h1>
<?php
$count = mysqli_num_rows($sql);
			if ($count > 0) {
				while ($row = mysqli_fetch_array($sql)) {
		echo "<h3>Name: $row[Username]</h3>
		Account Number : $row[Account]<br>
		Email Id : $row[Email]<br>
		Contact Info : $row[Contact]<br>
		Address : $row[Address]<br>
		Balance : Rs $row[Amount]<br>
		";
	}}
?>
</div></header>
</body>
</html>