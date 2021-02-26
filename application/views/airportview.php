
<!DOCTYPE html>
<html>
<head>
	<title> AIRPORT VIEW</title>
</head>
<body>
	<form method="post" action=" ">
	<table border="1">
		<tr>
			<th>AIRPORT ID</th>
			<th>AIRPORT NAME</th>
			<th>ABBREVIATION</th>
			<th>CITY</th>
			<th>STATE</th>
			<th>ZIPCODE</th>
			<th>TIME ZONE</th>
			
			
		</tr>
	</thead>
		<?php 
		if($n->num_rows()>0)
		{
			foreach ($n->result() as $row)
			 {
				
		?>
				
				<tr>
					<td><?php echo $row->airportid;?></td>
					<td><?php echo $row->airportname;?></td>
					<td><?php echo $row->abrv;?></td>
					<td><?php echo $row->city;?></td>
					<td><?php echo $row->state;?></td>
					<td><?php echo $row->zipcode;?></td>
					<td><?php echo $row->tzone;?></td>
		
				</tr>
				
					
					<?php			
				}
			}
			
		
	
		
		?>
		</table>
		</form>
		
</body>
</html>
