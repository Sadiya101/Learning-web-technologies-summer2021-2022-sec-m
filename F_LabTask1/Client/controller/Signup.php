<?php 
 include "Check_Signup.php";
?>

<html>
<head>
	<title>Sign Up</title>
</head>
	<body  style="background:linear-gradient(to bottom, #ffffff 0%, #ccff99 100%);">
		<center><form method="post" action="Check_Signup.php" enctype="">
			<fieldset style="width: 500px; height: 300px; margin: 150px 200px 200px">
				<h2><b><legend> Sign Up </legend></b></h2>
				<hr noshade="" width="400">	
				<TABLE>
					<tr>
						<td><b> Name </b></td>
					    <td><input type="Text" name="name" value="" ></td>
				    </tr>

				    <tr>
					    <td><b>Email</b></td>
					    <td><input type="Email" name="Email" value="" ></td>
				    </tr>

				    <tr>
					    <td><b>DOB</b></td>
					    <td><input type="date" name="dob" value="" ></td>
				    </tr>

				    <tr>
					    <td><b>Gender</b></td>
					    <td>
					    	<input type="radio" name="G" value="Male">Male
						    <input type="radio" name="G" value="Female">Female
						    <input type="radio" name="G" value="Others">Others
					    </td>
				    </tr>

				    <tr>
					    <td><b>Country</b></td>
					    <td>
					    	<select name="Country">
					    		<option value="America"> America </option>
							    <option value="Bangladesh"> Bangladesh </option>
							    <option value="Canada"> Canada </option>
							    <option value="Denmark"> Denmark </option>
							    <option value="Egypt"> Egypt </option>
							    <option value="France"> France </option>
				    </tr>
				    <tr>
					    <td> <b>Password</b></td>
					    <td><input type="Password" name="Password" value="" ></td>
				        </tr>

				    </tr>

				    <tr>
					    <td><b>Confirm Password</b></td>
					    <td>
					    	<input type="Password" name="Cpassword" value="" >
					    </td><br/>
					<tr>
					    <td> </td>
					    <td>
					    	<input type="submit" name="submit" value="Create Account">
		                    <a href="Login.html" align="right"> Login </a>
		  
					    </td>

				    </tr>
					
			    </TABLE>    
			</fieldset>
		</form>
		</center>
	</body>
</html>