<?php
session_start();
$host="localhost";
$user="root";
$password="";
$db="demo";

$conn = mysqli_connect($host,$user,$password);
mysqli_select_db($conn, $db);
$query = mysqli_query($conn, "SELECT * FROM feedback");
$count = mysqli_num_rows($query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Queries</title>
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
        <li class="abc"><a class="active" 
        	href="logout.php">Logout</a></li>
    </ul>
    </nav></div>
    <h1>Queries</h1>
    <table>
	<tr>
		<th>Name</th>
		<th>Email</th>
		<th>Query</th>
	</tr>
	<?php
	if ($count > 0) {
	while ($row = mysqli_fetch_array($query)) {
		echo "<tr>
		<td>$row[Name]</td>
		<td>$row[Email]</td>
		<td>$row[Query]</td>
		</tr>";
	}}
	else{
		echo "No queries yet";
	}
	?>
</table>
</body>
</html>