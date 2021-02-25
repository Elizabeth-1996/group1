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
	<form name="myform" action="<?php echo base_url()?>first/registrationForm" method="POST">
		<table>
			<h1>Registration form</h1>
			<tr><td>
				FIRST NAME:</td><td><input type="text" name="fname" placeholder="firstname" pattern=".{3,}"   required title="3 characters minimum" maxlength="25"></td></tr>
			<tr><td>
				LAST NAME:</td><td><input type="text" name="lname"  placeholder="lastname" pattern=".{3,}"   required title="3 characters minimum"  maxlength="25"></td></tr>
			<tr><td>
				AGE:</td><td><input type="text" name="age" placeholder="age" required minlength="1"maxlength="3"></td></tr>
				<tr><td>
				GENDER:</td><td><input type="radio" name="gender" value="male" id="male">
					<label for="male"> male</label>
					<input type="radio" name="gender" value="female" id="female">
					<label for="female">female</label></td></tr>
			<tr><td>
				ADDRESS:</td><td><textarea name="address"></textarea></td></tr>
			<tr><td>	
				PHONE NUMBER:</td><td><input type="text" name="phno"  placeholder="phoneno" required minlength="10"maxlength="12"></td></tr>
			<tr><td>	
				AADHHAR NUMBER:</td><td><input type="text" name="aadhar"  placeholder="Aadhar number" required minlength="12"maxlength="12"></td></tr>
			<tr><td>	
				EMAIL ID:</td><td><input type="email" name="email" required></td></tr>
			
			<tr><td>
				PASSWORD:</td><td><input type="password" name="password" placeholder="password" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}"></td></tr>
				</table>
				<input type="submit" name="submit" align="center">
		
	</form>
</body>
</html>