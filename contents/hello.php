<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Hello</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="shortcut icon" type="img/jpg" href="../imgs/favicon.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="fun.css">
</head>
<body><header>
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
        <li class="abc"><a class = "active" href="logout.php">Logout</a></li>
    </ul>
    </nav></div></header>
    <div class="manys">
    	<a href="create.php">
    	<img src="../imgs/user1.png" alt="user"></a>
    	<a href="applications.php">
    	<img src="../imgs/stationery-stack.png" alt="stack"></a>
        <a href="feedback.php"><img src="../imgs/technical-support.png" alt="ques"></a>
    </div>
</body>
</html>