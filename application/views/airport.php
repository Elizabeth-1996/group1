
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
	<form name="myform" action="<?php echo base_url()?>first/airportForm" method="POST">
		<table>
			<h1>AIRPORT DETAILS</h1>
			<tr><td>
				AIRPORT NAME:</td><td><input type="text" name="aname" placeholder="airport name" pattern=".{3,}"   required title="3 characters minimum" maxlength="25"></td></tr>
			<tr><td>
				ABBREVIATION:</td><td><input type="text" name="abr"  placeholder="Abrevation" pattern=".{3,}"   required title="3 characters minimum"  maxlength="10"></td></tr>
			<tr><td>
				CITY:</td><td><select name="city">
					<option>TRIVANDRUM</option> 
					<option>KOCHI</option> 
					<option>KOZHIKODE</option> 
					<option>KANNUR</option> 
				</select>
				</td></tr>
				
			
			<tr><td>
				STATE:</td><td><select name="state">
					<option>KEARLA</option> 
					<option>TAMILNADU</option> 
					<option>KARNATAKA</option> 
					<option>DELHI</option> 
				</select>
				</td></tr>
			<tr><td>
				ZIPCODE:</td><td><input type="text" name="zip">
					</td></tr>
			<tr><td>
				 TIME ZONE:</td><td><input type="time" name="tzone">
					</td></tr>
				</table>
				<input type="submit" name="submit" align="center">
		
	</form>
</body>
</html>
