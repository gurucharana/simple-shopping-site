<?php
include("header.php");

?>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
<script>
$(document).ready(function(){
  $(".delbutton").click(function() {
                var del_id = $(this).attr("id");
				var Buyid = $(this).attr("Buyid");
                if (confirm("Sure you want to Cancel this iteam? This cannot be undone later.")) {
                   $.ajax({
                 type: "POST",
                 url: "updateq.php",
                 data: {  buypid: del_id, Buyid: Buyid },
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
$sql = "SELECT c.Buyid, p.pname, c.pid, c.quantity, c.amount FROM cart c , product p WHERE p.id=c.pid and c.uid='$uid' and c.orders= '1'";

$result = $conn->query($sql);
?><div class="space" ><?php
if ($result->num_rows > 0) {
    // output data of each row
	?>

	<div class="table">
	
	<div class="shade" ><center>
	<br/>
	<br/><table width="80%" >
	<tr><th>Product </th><th>Quantity</th><th><center>Amount</center></th><th><center>Payment</center></th><th><center>Status</center></th><th><center>Cancel</center></th></tr><?php
	$sum=0;
    while($row = $result->fetch_assoc()) { ?>
	
        
  
		
		<td>
	
		<center><img src="<?php echo $row['pname'];?>" width="20%"></center></td>
		

	<td>
	
		<center> <?php echo $row['quantity'];?> </center></td>
		
<td>
	<center>
	 <?php 
	
	$sum=$sum+$row['amount'] * $row['quantity'];
	echo $row['amount'] * $row['quantity']; ?></center>
	  </td>
	  
	  	<td>
	
		<center> COD MODE </center></td>
		
		<td>
	
	<font color="green"><strong>	<center> Order Approved </strong></center></font></td>
		
	  
	  <td><center>
	  <button id="<?php echo $row['pid']; ?>" Buyid="<?php echo $row['Buyid']; ?>" class="delbutton" style="  background-color: Transparent;" ><i class="fa fa-close" ></i></button>
	</center>  </td>
       </tr>
 <?php   } echo "<tr><td colspan='6'> <center><strong>Total Amount : <font color='red'>". $sum ."</font></strong></center></td></tr>
 
 </table><br/>
		<br/>
		<br/></div></center>";
    }
 else{ ?>
	 <div class="space"  style="margin-bottom:30%"> <center><h3 style="  opacity: 0.2;margin-top:10%;"> Empty Orders</h3></center></div>
<?php  } ?>



		
		
		
		
		
		
		
		
			<br/>
		<br/>
		</div>
		</div>
	
		</div>


<?php
include('footer.html');
?>
