<?php
session_start();
?>
<!DOCTYPE html>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">



  <style>
* {
  box-sizing: border-box;
}

/* Create two equal columns that floats next to each other */
.column {
  float: left;

  padding-left: 15px;
  height: 300px; /* Should be removed. Only for demonstration */
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - makes the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
  }
}
</style>





<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: blue;
}
.space {
   
  padding: 0 1%;
      display: block;
      left:100%;
  
}
.shade{
     opacity: 1.0;
     box-sizing: inherit;
     box-shadow:0px 0px 4px 3px #aaaaaa;
     background-color:#F0F0ED;
}
.topnav a {
  float: left;
  display: block;
  padding: 15px 5px;
  color: #f2f2f2;
  text-align: center;
  
  text-decoration: none;
  font-size: 18px;
}

form.example input[type=text] {
  padding: 5px;
  font-size: 17px;
  border: 1px solid grey;
  float: left;
  width: 80%;
  background: #f1f1f1;
  margin-top:-1%;
}

form.example button {
  float: left;
  width: 20%;
  padding: 5px;
  background: #2196F3;
  color: white;
  font-size: 17px;
  border: 1px solid grey;
  border-left: none;
  cursor: pointer;
  margin-top:-1%;
}

form.example button:hover {
  background: #0b7dda;
}

form.example::after {
  content: "";
  clear: both;
  display: table;
}


.topnav a:hover {

  background-color: white;
  color: blue;
 text-decoration: none;
}

.topnav .gc a:hover {

  background-color:blue;
  color: red;
 text-decoration: none;
}

.active {
  background-color: blue;

}

.topnav .icon {
  display: none;
}

@media screen and (max-width: 600px) {
  .topnav a:not(:first-child) {display: none;}
  .topnav a.icon {
    float: right;
      padding: 0;
  text-align: center;
    display: block;
  }
}

@media screen and (max-width: 600px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive .icon {
    position: absolute;
     padding: 0;
  text-align: center;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
}
</style>

<style>
.login body{font-family: Arial, Helvetica, sans-serif;}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

/* Set a style for all buttons */
.login button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

.login button:hover {
  opacity: 0.8;
}

/* Extra styles for the cancel button */
.login .cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}




.login .container {
  padding: 16px;
  width:100%;
}

.login span.psw {
  float: right;
  padding-top: 16px;
}

/* The Modal (background) */
.login .modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  padding-top: 60px;
}

/* Modal Content/Box */
.login .modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.login .close {
  position: absolute;
  right: 25px;
  top: 0;
  color: #000;
  font-size: 35px;
  font-weight: bold;
}

.login .close:hover,
.login .close:focus {
 .login color: red;
  .login cursor: pointer;
}

/* Add Zoom Animation */
.login .animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}

.login @-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}
  
.login @keyframes animatezoom {
  from {transform: scale(0)} 
  to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
.login @media screen and (max-width: 300px) {
  .login span.psw {
     display: block;
     float: none;
  }
  .login .cancelbtn {
     width: 100%;
  }
}
</style>



</head>
<div style="width:100%">
<body>
<div class="topnav" id="myTopnav">
  <a href="index.php" class="active" style="padding-left:5%">GoCart</a>
 
 <div style="float:right;"> 
 
  <?php if(isset($_SESSION['uname'])===TRUE){ ?>
		
		
		<u><h3 ><font color="White">Hello </font><font color="yellow"><?php echo $_SESSION['uname']; ?></font></h3></u>
		
	<?php } ?>
 
 <a href="index.php"   >Home</a>
 
 <?php if(isset($_SESSION['email'])===FALSE){ ?>
    <a onclick="document.getElementById('id01').style.display='block'" >Login</a>
    <a onclick="document.getElementById('id02').style.display='block'" >Register</a>
    <?php } ?>
	
   <?php if(isset($_SESSION['uname'])===TRUE){ ?>
    <a href="cart.php" ><i class="fa fa-shopping-cart" style="font-size:25px" title="Cart"></i></a></li>
	 <a href="orders.php">order</a></li>
	
     <a href="?logout=logout">Logout</a></li>
	 <?php }?>
	
    
    
    
    <gc class="gc">
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
 </div>
  </gc>
  
</div>
<div style="background-color:blue; padding:10px">
   <form class="example" action="index.php" style="margin:auto;max-width:800px">
  <input type="text" placeholder="Search.." name="search2">
  <button type="submit"><i class="fa fa-search"></i></button>
</form> 
</div>

<div class="login">
<div id="id01" class="modal">
  
  <form class="modal-content animate" action="index.php" method="post">
    

    <div class="container">
	 <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname" required><br/>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>
        
      <button type="submit" name="login">Login</button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div>
  </form>
</div>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

</body>
</div>








<div class="login">
<div id="id03" class="modal">
  
  <form class="modal-content animate" action="index.php" method="post">
    

    <div class="container">
	      <h2 style="text_align:center;"><font color="red">Re Enter Correct username and Password</font></h2>
 <br/>
	 <span onclick="document.getElementById('id03').style.display='none'" class="close" title="Close Modal">&times;</span>
	

      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname" required><br/>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>
        
      <button type="submit" name="login">Login</button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
	  
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id03').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div>
  </form>
</div>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

</body>
</div>







































<div class="login">
<div id="id02" class="modal">
  
  <form class="modal-content animate" action="register.php" method="post">
    

    <div class="container">
	 <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname" required><br/>

	   <label ><b>PhoneNo</b></label>
      <input type="text" placeholder="Enter Phone number" name="phone" required>
	  <label ><b>Email id</b></label>
      <input type="text" placeholder="Enter Email Id" name="email" required>
	  
      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>
        
      <button type="submit">Register</button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div>
  </form>
</div>

<script>
// Get the modal
var modal = document.getElementById('id02');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

</body>
</div>





<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>

<?php
if(isset($_GET['logout'])===TRUE)
{
	unset($_SESSION['email']);
	unset($_SESSION['phone']);
	unset($_SESSION['uname']);
	?>
	<meta http-equiv="refresh" content="0;url=index.php" />
	<?php
}

?>






<?php
if(isset($_POST['login']))
{

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "store";
$uname=$_POST['uname'];
$paswd=$_POST['psw'];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT uname, psw ,email,uid FROM userinfo where uname='$uname' and psw='$paswd'";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
          $_SESSION["uname"] = $row['uname'];
		  $_SESSION["uid"] = $row['uid'];
             $_SESSION["email"] = $row['email'];
      
    }
    ?>
       <meta http-equiv="refresh" content="0; URL='index.php'" />
 <?php  }
 else{ ?>
	 <body onLoad="document.getElementById('id03').style.display='block'" >
<?php  }
}
?> 





<?php
if(isset($_POST['cart']))
{

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "store";
$pid=$_POST['pid'];
$uid=$_POST['uid'];
$quantity=$_POST['quantity'];
$cart=$_POST['cart'];
$orders=$_POST['orders'];
$amount=$_POST['amount'];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO cart (pid, uid, quantity,cart,orders,amount)
VALUES ('$pid', '$uid', '$quantity','$cart','$orders','$amount')";

if ($conn->query($sql) === TRUE) {
	
   
    ?>

       <meta http-equiv="refresh" content="0; URL='index.php'" />
 <?php  

}
}
?> 