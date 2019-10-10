<?php
session_start();

$servername = "localhost";
$username = "neurowave_MSG";
$password = "Manju@58889";
$dbname = "neurowave_Agribase";
$email=$_POST['email'];
$paswd=$_POST['psw'];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT vno,username, email FROM userinfo where email='$email' and password='$paswd'";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
          $_SESSION["uname"] = $row['username'];
             $_SESSION["vno"] = $row['vno'];
              $_SESSION["email"] = $row['email'];
    }
    ?>
       <img src="loadingscreen21.gif"  style="width:100%;height:100%;"/>
   <meta http-equiv="refresh" content="0;url=index.php" />
 <?php  } else {
     
     include('header.php');
    echo"  <div class='space'>
    <div style='margin: 6px; '>
        </div>
<div class='shade'> <center><h1>invalid user name or password</h1><div style='margin-bottom:100%'></div></center>";
            ?>
            <meta http-equiv="refresh" content="2; URL='login.php'" />
            
            <?php
            include('footer.php');
}
$conn->close();
?>