<!DOCTYPE html>
<html>
<head>
	<title></title>
<style>
	form
	{
		border:2px solid;
		margin-left:400px;
		width:400px;
		text-align:center;

	}
	input
	{
		padding:5px;
		margin:15px;
	}
	
</style>
</head>
<body>
	<form name="myform" action="<?php echo base_url()?>first/flightForm" method="POST">
		<table>
			<h1>FLIGHT DETAILS</h1>
			<tr><td>
				FLIGHT NAME:</td><td><input type="text" name="flname" placeholder="flight name" pattern=".{3,}"   required title="3 characters minimum" maxlength="25"></td></tr>
			<tr><td>
				FLIGHT NO:</td><td><input type="text" name="flno"  placeholder="flight no" pattern=".{3,}"   required title="3 characters minimum"  maxlength="10"></td></tr>
			<tr><td>
				DEPARTURE:</td><td><select name="depar">
					<option>TRIVANDRUM</option> 
					<option>KOCHI</option> 
					<option>KOZHIKODE</option> 
					<option>KANNUR</option> 
				</select>
				</td></tr>
				<tr><td>
				DEPARTURE DATE:</td><td><input type="date" name="depdate">
					</td></tr>
			<tr><td>
				DEPARTURE TIME:</td><td><input type="time" name="deptime">
					</td></tr>
			<tr><td>
				DESTINATION:</td><td><select name="dest">
					<option>TRIVANDRUM</option> 
					<option>KOCHI</option> 
					<option>KOZHIKODE</option> 
					<option>KANNUR</option> 
				</select>
				</td></tr>
			<tr><td>
				DESTINATION DATE:</td><td><input type="date" name="desdate">
					</td></tr>
			<tr><td>
				DESTINATION TIME:</td><td><input type="time" name="destime">
					</td></tr>
			<tr><td>	
				BUSSINESS CLASS TOTAL SEATS:</td><td><input type="text" name="btseat" required></td></tr>
				<tr><td>	
				FIRST CLASS TOTAL SEATS:</td><td><input type="text" name="ftseat" required></td></tr>
				<tr><td>	
				 ECONOMIC CLASS TOTAL SEATS:</td><td><input type="text" name="etseat" required></td></tr>
			<tr><td>	
				 BUSSINESS CLASS AVAILABLE  SEATS:</td><td><input type="text" name="baseat" required></td></tr>
				<tr><td>	
				FIRST CLASS AVAILABLE  SEATS:</td><td><input type="text" name="faseat" required></td></tr>
				<tr><td>	
				ECONOMIC CLASS AVAILABLE  SEATS:</td><td><input type="text" name="easeat" required></td></tr>
			
			<tr><td>
				AMOUNT:</td><td><input type="text" name="cost" placeholder="AMOUNT " required ></td></tr>
				</table>
				<input type="submit" name="submit" align="center">
		
	</form>
</body>
</html>