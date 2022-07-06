<?php 

$host="localhost";
$user="root";
$password="";
$db="demo";

$conn = mysqli_connect($host,$user,$password);
mysqli_select_db($conn, $db);
?>

<?php
        
        if (isset($_POST['submit'])) {
            $fromuser       = $_POST['fromuser'];
            $touser         = $_POST['touser'];
            $amount         = $_POST['amount'];
            $acc            = $_POST['acc'];
            $today = date("F j, Y, g:i a");
            $there = mysqli_query($conn, "SELECT * FROM loginform WHERE `Account` = $acc");
            $count = mysqli_num_rows($there);
            if ($count > 0) {
                
                $balanceto = mysqli_query($conn, "SELECT `Amount` FROM `loginform` WHERE Account = '$acc'");
                $res1 = mysqli_fetch_array($balanceto);
                $balancefrom = mysqli_query($conn, "SELECT `Amount` FROM `loginform` WHERE Username = '$fromuser'");
                $res2 = mysqli_fetch_array($balancefrom);
                if ($res2['Amount'] > $amount) {
                
            
                    $newmoney1  = ($res1['Amount'] + $_POST['amount']);
                    $newmoney2  = ($res2['Amount'] - $_POST['amount']);
                    $result1    = mysqli_query($conn, "UPDATE `loginform` SET `Amount`='$newmoney1' WHERE Username = '$touser'");
                    $result2    = mysqli_query($conn, "UPDATE `loginform` SET `Amount`='$newmoney2' WHERE Username = '$fromuser'");
                    $r = "insert into transactions(Fromuser, Touser, Date, Amount) values('$fromuser', '$touser', '$today', '$amount')" ;
                    $w = mysqli_query($conn, $r) or die(mysqli_error($conn));
                    echo "<script>alert('Transfer Successful!');
                    alert('Account Balance = Rs ' + $newmoney2 )
                    </script>";
                }
                else{
                    echo "<script>alert('Insuffiecient Funds');
                    window.location.href='welcome.php';</script>";
                }
            }
            else {
                echo "<script>alert('Account does not exist');</script>";
            }
        } 
        ?>      
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Transfer</title>
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
        <div class="logo">
            <img src="../imgs/mb.png" alt="logo pic">
        </div>
	<h1>Madras Bank</h1>
	<h2>Welcome, <?php  session_start();
    echo $_SESSION['username'];?>!</h2>
	<div class="wrapper">
<ul class="nav-area">
<li><a href="welcome.php">Home</a></li>
<li><a href="transfer.php">Transfer</a></li>
<li><a href="transactions.php">Transactions</a></li>
<li><a href="loans.php">Loans</a></li>
<li><a href="accounts.php">Account</a></li>
<li class="abc"><a class="active" href="logout.php">Logout</a></li>
</ul>
</div></header>
<form class="reg-page" action="#" method="post">
<h1>Transfer</h1>
            <p class = "do">Please note: Transfering funds is done at your own risk, please make sure you transfer the funds to the right person.</p><br><br> 
            <?php

            $query = "SELECT Username FROM loginform";
            $result = mysqli_query($conn, $query) or die(mysqli_error());
            ?>
            <label>Transfer money to </label>
            <select name='touser'> 
                <option value="null">Not Selected</option>
                <?php
                while($row = mysqli_fetch_assoc($result)) {
                    if($row['Username'] != $_SESSION['username']) {
                        echo "<option value='" . $row['Username'] . "'>" . $row['Username'] . "</option>";
                    }
                }
                ?>
            </select>
            <br><br>
            <label>Account Number : </label>
            <input type="number" name="acc" required><br><br>
            <label>Amount Rs </label>
            <input type='number' name='amount' class='form-control margin-bottom-20' required>
            <input type="hidden" value="<?php echo $_SESSION['username'];?>" name="fromuser"><br><br>
            <button type="submit" class="btn-u" name="submit">Transfer</button>
        
        </form>
</body>
</html>