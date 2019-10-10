<?php
include('header.php');
?>

<div class="space">
    <div style="margin: 6px; ">
        </div>


    <div class="shade">
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

<div   style="width:100%; height:100%;">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
            <li data-target="#myCarousel" data-slide-to="4"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">

      <div class="item active">
        <img src="1.jpg"  style="width:100%;">
      
      </div>
      
      
      <div class="item">
        <img src="2.jpg" style="width:100%;">
        
      </div>

      <div class="item">
        <img src="3.jpg"  style="width:100%;">
        
      </div>
    
      <div class="item">
        <img src="4.jpg"  style="width:100%;">
       
      </div>
      
      <div class="item">
        <img src="5.jpg"  style="width:100%;">
      
        
      </div>
  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

        </div>
           <div style="margin: 1%; background-color:white" >
     
        </div>
<div class="row">
      
     <div class="column">      
          <div class="shade">
		   <div style="padding-top:2%;  width:250px; height:400px"><center>
<figure ><img src="p1.jpeg" style=" 10%; width:150px" ><br/><caption><br/><br/>Metronaut<br/>
Solid Men Round Neck Grey, Maroon, Dark Blue T-Shirt<br/>
<font color="red">₹764 </font> 5% off<br/>
Size S, M, L, XL</caption></figure>
<?php if(isset($_SESSION['email'])){ 


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
$uid=$_SESSION["uid"];
$sql = "SELECT cart FROM cart where uid='$uid' and pid='1'";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
while($row = $result->fetch_assoc()) {
	$cart=$row['cart'];
	

}
}
else{
	$cart=0;
}
if ($cart=='1')
{ ?>
	<button style="width:100%;padding-bottom:4%; margin-top:1%; background-color:green; color:white;" type="submit">Added to Cart</button>
<?php }
else{
?>
<form action="index.php" method="post">
 <input type="hidden" value="1" name="pid" />
 <input type="hidden" value="<?php echo $_SESSION['uid']?>" name="uid" />
 <input type="hidden" value="1" name="quantity" />
  <input type="hidden" value="1" name="cart" />
 <input type="hidden" value="0" name="orders" />
 <input type="hidden" value="764" name="amount" />

<button style="width:100%;padding-bottom:4%; margin-top:1%; background-color:black; color:white;" type="submit">Add to Cart</button>

</form>

<?php }  }else { ?>
<button style="width:100%;padding-bottom:4%; margin-top:1%; background-color:black; color:white;"
onclick="document.getElementById('id01').style.display='block'">Add to Cart</button>
<?php } ?>
</center>
</div>
</div></div>
<div class="column" >
<div class="shade">
		   <div style="padding-top:2%;  width:250px; height:400px"><center>
<figure ><img src="p2.jpg" style=" 10%; width:200px"  ><br/><caption><br/><br/>VERTIGO<br/>Running Shoes For Men <br/>
   <font color="red">₹899 </font>64% off<br/>
Size 6, 7, 8, 9, 10</caption></figure>

<?php if(isset($_SESSION['email'])){ 

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
$uid=$_SESSION["uid"];
$sql = "SELECT cart FROM cart where uid='$uid' and pid='2'";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
while($row = $result->fetch_assoc()) {
	$cart2=$row['cart'];
	

}
}
else{
	$cart2=0;
}
if ($cart2=='1')
{ ?>
<button style="width:100%;padding-bottom:4%; margin-top:12%; background-color:green; color:white;">Added to Cart</button>

<?php }
else{
?>

<form action="index.php" method="post">
 <input type="hidden" value="2" name="pid" />
 <input type="hidden" value="<?php echo $_SESSION['uid']?>" name="uid" />
 <input type="hidden" value="1" name="quantity" />
  <input type="hidden" value="1" name="cart" />
 <input type="hidden" value="0" name="orders" />
 <input type="hidden" value="899" name="amount" />
 
<button style="width:100%;padding-bottom:4%; margin-top:12%; background-color:black; color:white;">Add to Cart</button>
</form>
<?php } }else { ?>
<button style="width:100%;padding-bottom:4%; margin-top:12%; background-color:black; color:white;"
onclick="document.getElementById('id01').style.display='block'">Add to Cart</button>
<?php } ?>

</center>
</div>


</div>
</div>


<div class="column" >
<div class="shade">
		   <div style="padding-top:2%;  width:250px; height:400px"><center>
<figure ><img src="p3.jpg" style=" 10%; width:200px" ><br/><caption>Safari Mosaic Check-in Luggage - 30 inch<br/>
<font color="red"> ₹3,421 </font>72% off<br/>
₹114/month EMI
OffersNo Cost EMI & 1 More
Size: 22, 26, 30</caption></figure>
<?php if(isset($_SESSION['email'])){ 

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
$uid=$_SESSION["uid"];
$sql = "SELECT cart FROM cart where uid='$uid' and pid='3'";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
while($row = $result->fetch_assoc()) {
	$cart3=$row['cart'];
	

}
}
else{
	$cart3=0;
}
if ($cart3=='1')
{ ?>

<button style="width:100%;padding-bottom:4%; margin-top:-3%; background-color:green; color:white;">Added to Cart</button>
<?php }
else{
?>







<form action="index.php" method="post">
 <input type="hidden" value="3" name="pid" />
 <input type="hidden" value="<?php echo $_SESSION['uid']?>" name="uid" />
 <input type="hidden" value="1" name="quantity" />
  <input type="hidden" value="1" name="cart" />
 <input type="hidden" value="0" name="orders" />
 <input type="hidden" value="3421" name="amount" />

<button style="width:100%;padding-bottom:4%; margin-top:-3%; background-color:black; color:white;">Add to Cart</button>
</form>
<?php } }else { ?>
<button style="width:100%;padding-bottom:4%; margin-top:-3%; background-color:black; color:white;"
onclick="document.getElementById('id01').style.display='block'">Add to Cart</button>
<?php } ?>
</center>
</div>


</div>
</div>


<div class="column">
<div class="shade" >
		 <div style="padding-top:2%;  width:250px; height:400px"><center>
<figure style="text-align:center"><img src="p4.jpeg" style=" 10%; width:200px" ><br/><caption>
Rang Nitya Printed Women Straight Kurta<br/>
<font color="red"> ₹507 </font> 5% off<br/>
Size XS, S, M, L, XL</caption></figure>
<?php if(isset($_SESSION['email'])){ 

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
$uid=$_SESSION["uid"];
$sql = "SELECT cart FROM cart where uid='$uid' and pid='4'";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
while($row = $result->fetch_assoc()) {
	$cart4=$row['cart'];
	

}
}
else{
	$cart4=0;
}
if ($cart4=='1')
{ ?>
<button style="width:100%;padding-bottom:4%; background-color:green; color:white;">Added to Cart</button>
<?php }
else{
?>


<form action="index.php" method="post">
 <input type="hidden" value="4" name="pid" />
 <input type="hidden" value="<?php echo $_SESSION['uid']?>" name="uid" />
 <input type="hidden" value="1" name="quantity" />
  <input type="hidden" value="1" name="cart" />
 <input type="hidden" value="0" name="orders" />
 <input type="hidden" value="507" name="amount" />
<button style="width:100%;padding-bottom:4%; background-color:black; color:white;">Add to Cart</button>
<?php } }else { ?>
<button style="width:100%;padding-bottom:4%; background-color:black; color:white;"
onclick="document.getElementById('id01').style.display='block'">Add to Cart</button>
</form>
<?php } ?>

</center>
</div>


</div>
</div>


<div class="column" >
 <div class="shade">
<img src="side.jpg" height=400px;/>           

</div>
</div>
</div>


<div class="row" style="margin-top:8.5%; margin-bottom:1%" >
     <div class="column"     >   



 <div class="shade" >
<img src="mid1.jpg" style="height:232px"/>           

</div>
</div>
 <div class="column" >
 <div class="shade" ;>
<img src="mid2.jpg"  style="height:232px"/>           

</div>
</div>
 <div class="column">

 <div class="shade" >
<img src="mid3.jpg" style="height:232px"/>           

</div>
</div>
</div>
</div>
<?php 
include("footer.html")
?>
<div>