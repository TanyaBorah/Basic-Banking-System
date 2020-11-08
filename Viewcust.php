<?php 

session_start();
include 'connection.php';

$q="select * from customers";
$result=mysqli_query($con,$q);
$row_count=mysqli_num_rows($result);

?>

<html>
<head>
	<title>
   Customer Details
	</title>
	<link rel = "stylesheet" type = "text/css" href = "Headerbutton.css">
	<style>
		table {
		font-family: arial, sans-serif;
		border-collapse: collapse;
		width: 100%;
		}

		h2{
		font-family: gabriola;
		font-size:40px;
		}
		
		td, th {
		border: 1px solid #dddddd;
		text-align: center;
		padding: 8px;
		}

		tr:nth-child(even) {
		background-color: linen;
		}
	</style>
</head>

<body style="background-color:mistyrose">
<hr style="border: 1px solid lightseagreen">
	<div align="center" style="top:0px">
          		  			
		<table width="1316" align="center" class = "t">
			<tr>
				<td style = "text-align:center;border:0px"> <a href="index.php" target="frame"><button class = "btn2"> Home </button></a></td>
            	<td style = "text-align:center;border:0px"><a href="Viewcust.php" target="frame"><button class = "btn2">View Customers</button></a></td>
				<td style = "text-align:center;border:0px"><a href="Transfermoney.php" target="frame"><button class = "btn2">Transfer Money</button></a></td>
				<td style = "text-align:center;border:0px"><a href="Transachistory.php" target="frame"><button class = "btn2">View Transaction History</button></a></td>
            </tr>
		</table>
		  
	</div>
<hr style="border: 1px solid lightseagreen">	
<br>	  
    <h2 align=center font-family=gabriola>Details of Customer</h2>
    <table class="flat-table flat-table-1" align=center>
		<thead>
			<th>CUSTOMER ID</th>
			<th>NAME</th>
			<th>EMAIL</th>
			<th>CURRENT BALANCE</th>
		</thead>
		<tbody>
		<tr align = center>
				
			<?php  
				while($row=mysqli_fetch_array($result)){
			?>
			
			<td><?php echo  $row["C_ID"]; ?></td>
			<td><?php echo  $row["Name"]; ?></td>
			<td><?php echo  $row["Email"]; ?></td>
			<td><?php echo  $row["Balance"]; ?></td>
		<tr align = center>
	<?php }
	?>
		</tr>

        
		</tbody>
	</table>
	<br><br>
	<?php include 'footer.php';?>
</body>
</html>