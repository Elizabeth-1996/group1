<!DOCTYPE html>
<html>
<head>
	<title> FLIGHT VIEW</title>
</head>
<body>
	<form method="get" action="<?php echo base_url();?>first/regist">
	<table border="1">
		<tr>
			<th>FLIGHT ID</th>
			<th>FLIGHT NAME</th>
			<th>FLIGHT NUMBER</th>
			<th>DEPARTURE</th>
			<th>DEPARTURE DATE</th>
			<th>DEPARTURE TIME</th>
			<th>DESTINATION</th>
			<th>DESTINATION DATE</th>
			<th>DESTINATION TIME</th>
			<th>TOTAL BUSSINESS SEATS</th>
			<th>TOTAL FIRST CLASS SEATS</th>
			<th>TOTAL ECONOMIC SEATS</th>
			<th>TVAILABLE BUSSINESS SEATS</th>
			<th>AVAILABLE  FIRST CLASS SEATS</th>
			<th>AVAILABLE ECONOMIC SEATS</th>
			<th>COST</th>
			<th>CLICK</th>
			

			
		</tr>
	</thead>
	
		<?php 
		if($n->num_rows()>0)
		{
			foreach ($n->result() as $row)
			 {
				
		?>
				<tr>
					<td><?php echo $row->flid;?></td>
					<td><?php echo $row->airline;?></td>
					<td><?php echo $row->fl_number;?></td>
					<td><?php echo $row->departure;?></td>
					<td><?php echo $row->dep_date;?></td>
					<td><?php echo $row->dep_time;?></td>
					<td><?php echo $row->destination;?></td>
					<td><?php echo $row->dest_date;?></td>
					<td><?php echo $row->dest_time;?></td>
					<td><?php echo $row->btseats;?></td>
					<td><?php echo $row->ftseats;?></td>
					<td><?php echo $row->etseats;?></td>
					<td><?php echo $row->baseat;?></td>
					<td><?php echo $row->faseat;?></td>
					<td><?php echo $row->easeat;?></td>
					<td><?php echo $row->cost;?></td>
					<input type="hidden" value="<?php echo $row->flid;?>">
					<td><input type="submit" value="Register Now" ></td>


				</tr>
					<?php
					/*if($row->status==1)
					{
						?>
						<td>Approved</td>
						<td><a href="<?php echo base_url()?>first/reject/<?php echo $row->id;?>">reject</a></td>
						<?php
					}
					elseif($row->status==2)
					{
						?>
						<td>Rejected</td>
						<td><a href="<?php echo base_url()?>first/approve/<?php echo $row->id;?>"> approve</a></td>
						<?php
					}
					else
					{
						?>
					<td><a href="<?php echo base_url()?>first/approve/<?php echo $row->id;?>"> approve</a></td>
					<td><a href="<?php echo base_url()?>first/reject/<?php echo $row->id;?>">reject</a></td>
					</tr>
					<?php			
				}
			}
			*/
		}
	}
		
		?>
		</table>
		</form>
		
</body>
</html>