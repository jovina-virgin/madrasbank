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
	$pno = $_POST['pno'];
	$add = $_POST['add'];
	$money = $_POST['money'];
	$purp = $_POST['fund'];

	$query = "insert into loans(Name, Email, Contact, Address, Amount, Purpose) values('$name', '$email', '$pno', '$add', '$money', '$purp')" ;
	$run = mysqli_query($conn, $query) or die(mysqli_error($conn));
	if ($run) {
		echo "<script>alert('Loan Application Succesful!');</script>";
	}
	else{
		echo "<script>alert('Error: Please try again later');</script>";
	}
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Loans</title>
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
	<h2>Welcome, <?php  session_start();
    echo $_SESSION['username'];?>!</h2>
<ul class="nav-area">
<li><a href="welcome.php">Home</a></li>
<li><a href="transfer.php">Transfer</a></li>
<li><a href="transactions.php">Transactions</a></li>
<li><a href="loans.php">Loans</a></li>
<li><a href="accounts.php">Account</a></li>
<li class="abc"><a class = "active" href="logout.php">Logout</a></li>
</ul>
</div></header>
<h1>Loan Application</h1>
<?php
$name = $_SESSION['username'];
$sql = mysqli_query($conn, "SELECT * FROM loginform WHERE `Username` = '$name'");
$row = mysqli_fetch_array($sql);
?>
<form method="POST" action="#">
	<label>Name : </label>
	<input type="text" name="name" value="<?php
    echo $_SESSION['username'];?>" required><br><br>
	<label>Email Address : </label>
	<input type="email" name="email" value="<?php
	echo "$row[Email]"?>" required><br><br>
	<label>Phone Number : </label>
	<input type="tel" name="pno" value="<?php
	echo "$row[Contact]"?>" required><br><br>
	<label>Address : </label>
	<textarea name="add" id="name" rows="4" cols="50" required><?php echo "$row[Address]"?></textarea><br><br>
	<label>Amount Requested : Rs</label>
	<input type="number" name="money" required><br><br>
	<label for="fund">Purpose of fund : </label>
	<select name="fund" id="fund">
		<option value="none">--Select Option--</option>
		<option value="Personal Loan">Personal Loan</option>
		<option value="Vehicle Loan">Vehicle Loan</option>
		<option value="Home Loan">Home Loan</option>
	</select><br><br>
	<input type="reset" name="reset">
	<input type="submit" name="submit">	
</form>
</body>
</html>