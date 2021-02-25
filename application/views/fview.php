<!DOCTYPE html>
<html>
<head>
	<title> FLIGHT VIEW</title>
</head>
<body>
	<form method="post" action=" ">
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
			<th>TOTAL SEAT</th>
			<th>AVAILABLE SEAT</th>
			<th>COST</th>
			
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
					<td><?php echo $row->total_seats;?></td>
					<td><?php echo $row->avail_seat;?></td>
					<td><?php echo $row->cost;?></td>
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