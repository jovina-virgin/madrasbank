<?php
session_start();
$host="localhost";
$user="root";
$password="";
$db="demo";

$conn = mysqli_connect($host,$user,$password);
mysqli_select_db($conn, $db);
$sql = "SELECT * FROM loans";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);
if (isset($_POST['delete'])) {
	$amt = $_POST['amt'];
	$msql = "DELETE FROM loans WHERE Amount = '$amt'";
	if (mysqli_query($conn,$msql)) {
		echo "<script>alert('Record deleted successfully');</script>";
	}
	else {
    echo "<script>alert('Error deleting record');</script>" ;
}}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Loan Applications</title>
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
    	<li ><a href="feedback.php">Queries</a></li>
        <li class="abc"><a class="active" href="logout.php">Logout</a></li>
    </ul>
    </nav></div>
    <h1>Loan Applications</h1>
    <form method="POST" action="#">
    <input type="text" name="name" placeholder="Name">
    <input type="submit" name="search" value="Search"><br><br></form>
    <table>
    	<tr>
    		<th>Name</th>
    		<th>Email ID</th>
    		<th>Contact</th>
    		<th>Address</th>
    		<th>Amount</th>
    		<th>Purpose</th>
    		<th>Action</th>
    	</tr>
    <?php
    if (isset($_POST['search'])) {
    	$n = $_POST['name'];
    	$query = mysqli_query($conn, "SELECT * FROM loans WHERE Name = '$n'");
    	$count = mysqli_num_rows($query);
    	if ($count > 0) {
				while ($row = mysqli_fetch_array($query)) {
					echo "<tr>
					<td>$row[Name]</td>
					<td>$row[Email]</td>
					<td>$row[Contact]</td>
					<td>$row[Address]</td>
					<td>$row[Amount]</td>
					<td>$row[Purpose]</td>
					<td><form method = 'POST' action = '#'><button name = 'delete' class = 'change'>Reject</button></td>
					<input type = 'hidden' name = 'amt' value = '$row[Amount]'>
					</form>
					</tr>";
				}}
				else{
					echo "No records found";
				}

    	
    }
    else {
    	$result = mysqli_query($conn, $sql);
		while ($row = mysqli_fetch_array($result)) {
		echo "
		<tr>
		<td>$row[Name]</td>
		<td>$row[Email]</td>
		<td>$row[Contact]</td>
		<td>$row[Address]</td>
		<td>$row[Amount]</td>
		<td>$row[Purpose]</td>
		<td><form method = 'POST' action = '#'><button name = 'delete' class = 'change'>Reject</button></td>
			<input type = 'hidden' name = 'amt' value = '$row[Amount]'>
			</form>
		</tr>";

	}}
    ?>
	</table>
</body>
</html>