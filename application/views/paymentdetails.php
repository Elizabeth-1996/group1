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
			<form action="<?php echo base_url()?>first/pay" method="post">

			
		<table>
			<h1>CHECK SEAT AVAILABILITY</h1>
			<tr><td>
				FLIGHT ID:</td><td><input type="text" name="flid"   value="<?php echo $row->flid;?>"></td></tr>
			<tr><td>
					
				 <tr><td>SEAT:</td><td>
				 	<?php

				 	if($o=='b')
				 	{
				 		?>

					<input type='text'name='seat' value='business' id='business'>
						<?php
					}
					else if($o=='e')
					{
					?>

					 <input type="text" name="seat" value="economic" id="economic">

					 <?php
								}
				else
					{

						?>

					 <input type="text" name="seat" value="first" id="economic">

					 <?php

					}

		

				


		if($m->num_rows()>0)
		{
			foreach ($m->result() as $row1)
			{
			
				
		?>

		<tr><td>
				name:</td><td><input type="text" name="name"   value="<?php echo $row1->fname;?>"></td></tr>
			<?php
			if((($row1->age))>10 or (($row1->age)>65))
			{
				?>
				<tr><td>COST:</td><td>
				 	<?php

				 	if($o=='b')
				 	{
				 		?>

					<input type='text'name='seat' value="<?php echo $row->bcost;?>"id='business'>
						<?php
					}
					else if($o=='e')
					{
					?>

					 <input type="text" name="seat" value="<?php echo $row->ecost;?>" id="economic">

					 <?php
								}
				else
					{

						?>

					 <input type="text" name="seat" value="<?php echo $row->fcost;?>" id="economic">

					 <?php

					}
				}
				else{
				if($o=='b')
				 	{
				 		?>

					<input type='text'name='seat' value="<?php echo $row->bccost;?>"id='business'>
						<?php
					}
					else if($o=='e')
					{
					?>

					 <input type="text" name="seat" value="<?php echo $row->eccost;?>" id="economic">

					 <?php

								}
				else
					{

						?>

					 <input type="text" name="seat" value="<?php echo $row->fccost;?>" id="economic">

					 <?php

					}
				}

					?>

			




			<?php
			}
		}
	}
}

		?>	

		<tr><td colspan="2" ><input type="submit" value="r u ready for the payment" align="center"></td></tr>
		
		</table>
		</form>
		
</body>
</html>