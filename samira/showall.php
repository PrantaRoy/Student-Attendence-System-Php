<?php
//conncetion
  $db = mysqli_connect("localhost","root","","samira");
//query
  $query="select * from stinfo";
  $result=mysqli_query($db,$query);
  
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Fetch Date</title>
	</head>
	
	<body>
		<h1 align="center">This is fetch data and crate a table</h1>
		
		<table align="center" border="1px" style="width:300px;line-height:50px;" >
			<tr>
				<th colspan="4"><h2>Database Record</h2></th>
			</tr>
			
				<th>id</th>
				<th>name</th>
				<th>present</th>
				
			<!--fetch data in database and show the table -->
			
			<?php
				while($row = mysqli_fetch_array($result)){
			?>	
				 
				 <tr>
					<td><?php echo $row['s_id'];?></td>
					<td><?php echo $row['name'];?></td>
					<td><?php echo $row['present'];?></td>
				 </tr>
				 
			<?php	 
				}
			?>
		</table>
		
	</body>
	
</html>
