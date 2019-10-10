<?php
include('header.php');
?>







<style>
.myButton {
	-moz-box-shadow: 3px -2px 9px 1px #1564ad;
	-webkit-box-shadow: 3px -2px 9px 1px #1564ad;
	box-shadow: 3px -2px 9px 1px #1564ad;
	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #79bbff), color-stop(1, #378de5));
	background:-moz-linear-gradient(top, #79bbff 5%, #378de5 100%);
	background:-webkit-linear-gradient(top, #79bbff 5%, #378de5 100%);
	background:-o-linear-gradient(top, #79bbff 5%, #378de5 100%);
	background:-ms-linear-gradient(top, #79bbff 5%, #378de5 100%);
	background:linear-gradient(to bottom, #79bbff 5%, #378de5 100%);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#79bbff', endColorstr='#378de5',GradientType=0);
	background-color:#79bbff;
	-moz-border-radius:42px;
	-webkit-border-radius:42px;
	border-radius:42px;
	border:1px solid #337bc4;
	display:inline-block;
	cursor:pointer;
	color:#ffffff;
	font-family:Arial;
	font-size:10px;
	font-weight:bold;
	padding:12px 40px;
	text-decoration:none;
	text-shadow:0px 1px 4px #528ecc;
}
.myButton:hover {
	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #378de5), color-stop(1, #79bbff));
	background:-moz-linear-gradient(top, #378de5 5%, #79bbff 100%);
	background:-webkit-linear-gradient(top, #378de5 5%, #79bbff 100%);
	background:-o-linear-gradient(top, #378de5 5%, #79bbff 100%);
	background:-ms-linear-gradient(top, #378de5 5%, #79bbff 100%);
	background:linear-gradient(to bottom, #378de5 5%, #79bbff 100%);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#378de5', endColorstr='#79bbff',GradientType=0);
	background-color:#378de5;
}
.myButton:active {
	position:relative;
	top:1px;
}
</style>








<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>

<script>
$(document).ready(function(){
$('select').on('change',function () {
        var statusVal = $(this).val();
        var pid = $(this).attr("id");
    
        $.ajax({
                 type: "POST",
                 url: "updateq.php",
                 data: { quantity : statusVal, pid: pid },
                 success: function(msg) {
					 
                 }
      });
	  location.reload(true);
  });
  
  
  
   $(".delbutton").click(function() {
                var del_id = $(this).attr("id");
				var Buyid = $(this).attr("Buyid");
                if (confirm("Sure you want to delete this iteam? This cannot be undone later.")) {
                   $.ajax({
                 type: "POST",
                 url: "updateq.php",
                 data: {  dpid: del_id,Buyid: Buyid },
                 success: function(msg) {
					 
              	 
                 }
      })
	  location.reload(true);
				}
  });
  
	
	
	   $("#buy").click(function() {
                var del_id = 1
                if (confirm("Sure you want to order this iteams ?")) {
                   $.ajax({
                 type: "POST",
                 url: "updateq.php",
                 data: {  bpid: del_id  },
                 success: function(msg) {
					 
              	 
                 }
      })
	  location.reload(true);
				}
  });
    });
	
	
	
	
</script>


















<?php
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
$uid=$_SESSION['uid'];
$sql = "SELECT p.pname , c.Buyid,c.pid, c.quantity , c.amount FROM cart c , product p WHERE c.pid = p.id and c.uid='$uid' and cart='1'";

$result = $conn->query($sql);
?><div class="space" ><?php
if ($result->num_rows > 0) {
    // output data of each row
	?>
	<style>
	.table table {
  border-collapse: collapse;

}
.table table tr {
  border: 5px white ;
  border-style:dotted;
}
	</style>
	<div class="table">
	
	<div class="shade" ><center>
	<br/>
	<br/><table width="25%" >
	<tr><th>Product </th><th>Quantity</th><th><center>Amount</center></th><th></th></tr><?php
	$sum=0;
    while($row = $result->fetch_assoc()) { ?>
	
        
  
		
		<td>
	
		<div class="shade"><center><img src="<?php echo $row['pname'];?>" width="100%"></center></div></td>
		
	<td>
	
	<center>
       	 <select name="status" id="<?php echo $row['pid']; ?> " >
             <option <?php if($row['quantity']==1){echo 'selected';} ?>>1</option>
   <option <?php if($row['quantity']==2){echo 'selected';} ?>>2</option>
    <option <?php if($row['quantity']==3){echo 'selected';} ?>>3</option>
	 <option <?php if($row['quantity']==4){echo 'selected';} ?> >4</option>
	  <option <?php if($row['quantity']==5){echo 'selected';} ?>>5</option>
      </select> </center></div></td>
	  <td>
	<center>  <?php 
	
	$sum=$sum+$row['amount'] * $row['quantity'];
	echo $row['amount'] * $row['quantity']; ?><center>
	  </td>
	  <td>
	  <button id="<?php echo $row['pid']; ?>" Buyid="<?php echo $row['Buyid']; ?>" class="delbutton" style="  background-color: Transparent;" ><i class="fa fa-close" ></i></button>
	  </td>
       </tr>
 <?php   } echo "<tr><td colspan='2'> <center><strong>Total Amount :</strong></center></td><td colspan='2'><strong><font color='red'>". $sum ."</font></strong></td></tr>
 
 <tr> <td colspan='4'> <br/><center><a id='buy' class='myButton'>BUY</a></center> </td></tr>
 </table><br/>
		<br/>
		<br/></div></center>";
    }
 else{ ?>
	 <div class="space"  style="margin-bottom:30%"> <center><h3 style="  opacity: 0.2;margin-top:10%;">Cart Empty</h3></center></div>
<?php  } ?>



		
		
		
		
		
		
		
		
			<br/>
		<br/>
		</div>
		</div>
	
		</div>


<?php
include('footer.html');
?>



















