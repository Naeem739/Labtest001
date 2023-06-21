<?php
	include "dbconnect.php";
	
	$s="SELECT * FROM student";
	$result=$conn->query($s);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<style>
		table, td, th{
			border-collapse:collapse;
			border:2px solid black;
		}
		table{
			width:80%;
			margin: 0 auto;
		}
		td, th{
			padding:15px;
			text-align:center;
		}
		
	</style>
</head>
<body>	
	
		<center>
			<h1> Teachers List</h1>
			<table>
				<tr>
					<th>ID</th>
					<th>Name</th>
					<th>username</th>
					<th>email</th>
					
				</tr>
				<?php
		
				while($r = $result->fetch_assoc())
				{
					$idd=$r['id'];
					$nam=$r['name'];
					$desi=$r['username'];
					$phone=$r['email'];
					//$dob = $r["password"]; 
					echo "<tr>";
						echo "<td>". $idd . "</td>";
						echo "<td>". $nam . "</td>";
						echo "<td>". $desi . "</td>";
						echo "<td>". $phone . "</td>";
						//echo "<td>". $dob . "</td>";
					
					echo "</tr>";
				}
				?>
				
				<tr>
					<td colspan="5"><a href="registerform.php">Insert Record</a></td>
				</tr>
			</table>
		</center>
	
</body>
</html>




