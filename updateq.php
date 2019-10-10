<?php
include('header.php');
if(isset($_POST['quantity']) && isset($_SESSION['uid']))
{
	
	$pid=$_POST['pid'];
	
	$uid=$_SESSION['uid'];
	$quantity=$_POST['quantity'];
	
	
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "store";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "UPDATE `cart` SET  `quantity`='$quantity' WHERE `uid`='$uid' and `pid`='$pid'";

if ($conn->query($sql) === TRUE) {
	
	
	?>
	
	
<?php	
}



}




if(isset($_POST['dpid']) && isset($_SESSION['uid']))
{
	
	$pid=$_POST['dpid'];
	$Buyid=$_POST['Buyid'];
	
	$uid=$_SESSION['uid'];
	
	
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "store";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "DELETE FROM `cart` WHERE pid='$pid' and uid='$uid' and Buyid='$Buyid' and orders='0'";

if ($conn->query($sql) === TRUE) {
	
}
}
	?>
	
	
	
	
	
	
	<?php
	
if(isset($_POST['buypid']) && isset($_SESSION['uid']))
{
	
	$pid=$_POST['buypid'];
	$Buyid=$_POST['Buyid'];
	
	$uid=$_SESSION['uid'];
	
	
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "store";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "DELETE FROM `cart` WHERE pid='$pid' and uid='$uid' and Buyid='$Buyid' and orders='1'";

if ($conn->query($sql) === TRUE) {
	
	
}
}




if(isset($_POST['bpid']) && isset($_SESSION['uid']))
{
	$uid=$_SESSION['uid'];
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "store";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "UPDATE `cart` SET  cart='0' ,orders='1' WHERE `uid`='$uid'";

if ($conn->query($sql) === TRUE) {
	
	
	?>
	
	
<?php	
}
}