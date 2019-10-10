<?php
include('header.php');
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "store";
$uname=$_POST['uname'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$psw=$_POST['psw'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO userinfo (uname, phone, email,psw)
VALUES ('$uname', '$phone', '$email','$psw')";

if ($conn->query($sql) === TRUE) {


$sql = "SELECT uname, email,uid FROM userinfo where uname='$uname' and psw='$psw'";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
          $_SESSION["uname"] = $row['uname'];
		  $_SESSION["uid"] = $row['uid'];
             $_SESSION["email"] = $row['email'];
      
    }
	}

	
	
	
	?>
	<div class="space">
	<div class="shade" style="padding-bottom:50%">
	<?php ?>
	
	<?php
	 echo "<center><h1>Dont Refresh..<br/> <br/></h1></center>";
	?>
	<meta http-equiv="refresh" content="0;url=index.php" />
	</div>
	</div>
	
	
	
	<meta http-equiv="refresh" content="0;url=index.php" />
	<?php
    
} else {
	?>
	<div class="space">
	<div class="shade" style="padding-bottom:50%">
	<?php ?>
	
	<?php
	 echo "<center><h1>Registration Failed..<br/> <br/> Use Diff Email Id</h1></center>";
	?>
	<meta http-equiv="refresh" content="2;url=index.php" />
	</div>
	</div>
	<?php
   
}

$conn->close();
include('footer.html');

?>