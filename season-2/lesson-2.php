<!-- LESSON [2] -->
<?php  

	if(isset($_POST["btn_1"])){
		echo 'napindot ko na si 1st button';
	}

	if(isset($_POST["btn_2"])){
		echo 'napindot ko na si 2nd button';
	}

?>

<form method="POST">
	<center>
		<table border="0" width="50%">
			<tr>
				<td>
					<input type="text" name="first_name" value="" placeholder="First Name">
				</td>
			</tr>
			<tr>
				<td>
					<input type="text" name="middle_name" value="" placeholder="Middle Name">
				</td>
			</tr>
			<tr>
				<td>
					<input type="text" name="last_name" value="" placeholder="Last Name">
				</td>
			</tr>
			<tr>
				<td>
					<select name="gender">
						<option name="gender" value="">Select Gender</option>
						<option name="gender" value="Male">Male</option>
						<option name="gender" value="Female">Female</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>
					<select name="preffix">
						<option name="preffix" id="preffix" value="">Network Provided (Globe, Smart, Sun, TNT, TM etc.)</option>
						<option name="preffix" id="preffix" value="0813">0813</option>
						<option name="preffix" id="preffix" value="0817">0817</option>
						<option name="preffix" id="preffix" value="0905">0905</option>
						<option name="preffix" id="preffix" value="0907">0907</option>
					</select>
					<input type="text" name="seven_digit" value="" maxlength="7" placeholder="Other Seven Digit">
				</td>
			</tr>
			<tr>
				<td>
					<input type="text" name="email" value="" placeholder="Email">
				</td>
			</tr>
			<tr>
				<td>
					<hr>
				</td>
			</tr>
			<tr>
				<td>
					<input type="submit" name="btnRegister" value="Register">
				</td>
			</tr>
		</table>
	</center>
	
</form>

<!-- ENDLESSON [2] -->
