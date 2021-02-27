<!DOCTYPE html>
<html>
<head>
	<title> FLIGHT VIEW</title>
</head>
<body>
	
	
		<?php 
		if($n->num_rows()>0)
		{
			foreach ($n->result() as $row)
			 {
				
		?>
			<form action="<?php echo base_url()?>first/cost" method="post">

			
		<table>
			<h1>CHECK SEAT AVAILABILITY</h1>
			<tr><td>
				FLIGHT ID:</td><td><input type="text" name="flid"   value="<?php echo $row->flid;?>"></td></tr>
			<tr><td>
				AVAILABLE BUSINESS SEAT:</td><td><input type="text" name="baseat"   value="<?php echo $row->baseat;?>"></td></tr>
			<tr><td>
				AVAILABLE ECONOMIC SEAT:</td><td><input type="text" name="easeat"value="<?php echo $row->easeat;?>"></td></tr>
				<tr><td>
				AVAILABLE FIRSTCLASS SEAT:</td><td><input type="text" name="faseat" value="<?php echo $row->faseat;?>" id="male"></td></tr>

				<?php
					if($row->seatsa>0)
					{
						?>
					
				 <tr><td>SELECT YOUR SEAT:</td>

					<?php
					if($row->baseat>0)
					{
						?>

					<td><input type='radio'name='seat' value='b' id='business'>
					<label for='business'>business</label>
					 
					<?php
				
								}
				if($row->easeat>0)
					{

						?>

					 <input type="radio" name="seat" value="e" id="economic">
					<label for="economic">economic</label>

					<?php
				
				}
				if($row->faseat>0)
					{
						?>
					
					<input type='radio' name='seat'value='f' id='first'>
					<label for='first'>first</label></td>
					<?php
				}

			}

					else
					{
						?>
						<tr><td>NO SEATS AVAILABLE:</td>
				
					<?php
					}
					?>
				</tr>
				<?php
		
		}
	}
		
		?>

				<tr><td colspan="2" ><input type="submit" value="click to view your cost" align="center"></td></tr>


				
					
		</table>
		</form>
		
</body>
</html>