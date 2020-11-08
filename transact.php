<?php 
	session_start();
	include 'connection.php';

	if(isset($_GET['Name'])){
		$Name=$_GET['Name'];
	}

	$q="select * from customers where Name='$Name'";
	$result=mysqli_query($con,$q);
	$row_count=mysqli_num_rows($result);
	$_SESSION['Name']=$Name;
?>

<html>
<head>
	<title>transact</title>
	<link rel = "stylesheet" type = "text/css" href = "Headerbutton.css">
	<style>
		table {
		font-family: arial, sans-serif;
		border-collapse: collapse;
		width: 100%;
		}

		h1{
		font-family: Timesnewroman, Serif;
		font-size:40px;
		}
		
		td, th {
		border: 1px solid #dddddd;
		text-align: center;
		padding: 8px;
		}

		tr:nth-child(even) {
		background-color: lavenderblush;	
		}
	</style>
</head>

<body style="background-color:powderblue;">
	<div align="center" style="top:0px">        
		<table width="1316" align="center" class = "t">
			<tr>
            <td style = "text-align:center;border:0px"><a href="index.php" target="frame"> <button class = "btn2"> Home </button></td>	 	
			<td style = "text-align:center;border:0px"><a href="Viewcust.php" target="frame"><button class = "btn2">View Customers</button></a></td>
			<td style = "text-align:center;border:0px"><a href="Transfermoney.php" target="frame"><button class = "btn2">Transfer Money</button></a></td>
			<td style = "text-align:center;border:0px"><a href="Transachistory.php" target="frame"><button class = "btn2">View Transaction History</button></a></td>
			</tr>
        </table>	
<br>
<hr style="border: 1px solid lightseagreen">
	<div>
		<h1 align=center font-family=Arial>Account Details</h1>
		<table style="background-color: lavender;">
           <th>CUSTOMER ID</th>
           <th>NAME </th>
           <th>EMAIL</th>
		   <th>CURRENT BALANCE</th>
           <tr>
		   
			<?php  
				$row=mysqli_fetch_array($result);
			?>
			
			<td><?php echo  $row["C_ID"]; ?></td>
			<td><?php echo  $row["Name"]; ?></td>
			<td><?php echo  $row["Email"]; ?></td>
			<td><?php echo  $row["Balance"]; ?></td>
           </tr>
        </table>
	</div>
        
	<?php echo "<form method='post' action='transaction.php?Name=$Name'>"?>
<br><br>
	<h3 align=center font-family=Arial>Select the user you want to transfer money to from the dropdown list</h3>
	<table border="0px" style="background-color:lavender;">
		<tr>
		<td>Transfer To:</td>
		<td><select name="user">
			<option>--Select--</option>
   
			<?php  
				$q1="select * from customers";
				$result1=mysqli_query($con,$q1);
				while($row=mysqli_fetch_array($result1)){
			?>

			<option value="<?php echo $row['Name']; ?>"> <?php echo $row["Name"]; ?></option>

			<?php }
			?>
			
            </select></td></tr> 
			<tr><td>Amount:</td><td><input type="text" name="Amount"></td></tr>
			<tr><td></td><td><input type="submit" name="submit" value="Submit" align=center style="margin-top: 10px; width:6em; height:2em; font-size:15px; background-color: skyblue; font-weight: bold;"></td></tr>
	</table>

</form>
<br><br><br>

<?php include 'footer.php'; ?>

</body>
</html>