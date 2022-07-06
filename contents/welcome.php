<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Welcome!</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="shortcut icon" type="img/jpg" href="../imgs/favicon.png">
	<link rel="stylesheet" type="text/css" href="fun.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">
</head>
<body><header>
	<div class="logo">
            <img src="../imgs/mb.png" alt="logo pic">
        </div>
        <div class="wrap">
	<h1>Madras Bank</h1>
	<h2>Welcome, <?php echo $_SESSION['username'];?>!</h2></div>
<ul class="nav-area">
<li><a href="welcome.php">Home</a></li>
<li><a href="transfer.php">Transfer</a></li>
<li><a href="transactions.php">Transactions</a></li>
<li><a href="loans.php">Loans</a></li>
<li><a href="accounts.php">Account</a></li>
<li class="abc"><a class = "active" href="logout.php">Logout</a></li>
</ul>
</header>
<div class="many">

	<a href="transfer.php">
<img alt="transfer" src="../imgs/transfer1.png"></a>
<a href="transactions.php">
	<img src="../imgs/payment.png" alt="trans">
</a>
<a href="loans.php">
<img alt="loan" src="../imgs/loan1.png"></a>
<a href="accounts.php">
<img alt="account" src="../imgs/f.png">
</a></div>
</body>
</html>