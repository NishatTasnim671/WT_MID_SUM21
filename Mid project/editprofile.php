<?php 
	
	$name="";
	$err_name="";
	$username="";
	$err_username="";
	$code="";
	$err_code="";
	$number="";
	$err_number="";
	$street="";
	$err_street="";
	$city="";
	$err_city="";
	$state="";
	$err_state="";
	$postal="";
	$err_postal="";
	$ShasError=false;
	
if(isset($_POST["submit"])){
		//name
		if(empty($_POST["name"])){
			$hasError = true;
			$err_name="Name Required";
		}
		else if(is_numeric($_POST["name"])){
			$hasError = true;
			$err_name="Name does not contain numeric";
		}
		else{
			$name = htmlspecialchars($_POST["name"]);
	
		}
		
		//username
		if(empty($_POST["username"])){
			$hasError = true;
			$err_username="User name Required";
		}
		else if(strlen($_POST["username"]) <= 6){
			$hasError = true;
			$err_username="User Name must contain >6 character";
		}
		else if(strpos($_POST["username"]," ")){
			$hasError = true;
			$err_username="Username does not contain space";
		}
		else{
			$username = htmlspecialchars($_POST["username"]);
			
		}
		
		//phone
		
		if(empty($_POST["code"])){
			$hasError = true;
			$err_Code="Code Required";
		}
		else if(!is_numeric($_POST["code"]))
{
  $hasError = true;
  $err_code="Enter a number";

}
		
		else{
			$Code = $_POST["code"];
		}
		if(empty($_POST["number"])){
			$hasError = true;
			$err_number="Number Required";
		}
		else if(!is_numeric($_POST["number"])){
	   $hasError = true;
	  $err_phone="Phone number Required";
}

		
		else{
			$number = $_POST["number"];
		}
		
		//address
		
		if(empty($_POST["street"])){
			$hasError = true;
			$err_street="street Required";
		}
		
		else{
			$street = $_POST["street"];
		}
		
		
		if(empty($_POST["city"])){
			$hasError = true;
			$err_city="City Required";
		}
		
		else{
			$city = $_POST["city"];
		}
		
		if(empty($_POST["state"])){
			$hasError = true;
			$err_state="State Required";
		}
		
		else{
			$state = $_POST["state"];
		}
		
		if(empty($_POST["postal"])){
			$hasError = true;
			$err_postal="Postal & zip Required";
		}
		
		else{
			$postal = $_POST["postal"];
		}
		if(!$hasError){
			echo "<h1>Edited Profile</h1>";
			echo $name."<br>";
            echo $username."<br>";			
			echo $street."<br>";
			echo $city."<br>";
			echo $state."<br>";
			echo $postal."<br>";
			echo $Code."<br>";
			echo $number."<br>";
	}
}
	

?> 

<html>
	<head></head>
	<body>
		<form  method="post" action="">
		<fieldset>
			<table>
			<td>  <center> <b> Edit Profile  </td>
				<tr>
					<td>Name</td>
					<td>: <input type="text" name="name" value="<?php echo $name; ?>" placeholder="Your name ...."> </td>
					<td><span> <?php echo $err_name;?> </span></td>
				</tr>
				
				<tr>
					<td>User Name</td>
					<td>: <input type="text" name="username" value="<?php echo $username; ?>"placeholder="User name..">  </td>
					<td><span> <?php echo $err_username;?> </span></td>
				</tr>
				<tr>
					<td>Phone</td>
					<td>: <input type="text" name="code" value="<?php echo $code; ?>" placeholder="Code"> <input type="text" name="number" value="<?php echo $number; ?>" placeholder="Number"> </td>
					 
					<td><span> <?php echo $err_code;?> </span></td>
					<td><span> <?php echo $err_number;?> </span></td>
				</tr>
				
				<tr>
					<td>Address</td>
					<td>: <input type="text" name="street" value="<?php echo $street; ?>" placeholder="Street Address"> <input type="text" name="city" value="<?php echo $city; ?>" placeholder="City">- <input type="text" name="state" value="<?php echo $state; ?>" placeholder="State"> <br> <input type="text" name="postal" value="<?php echo $postal; ?>" placeholder="Postal/Zip Code">  </td>
					<td><span> <?php echo $err_street;?> </span></td>
					<td><span> <?php echo $err_city;?> </span></td>
					<td><span> <?php echo $err_state;?> </span></td>
					<td><span> <?php echo $err_postal;?> </span></td>
					
				</tr>
				
				
				<tr>
					<td colspan="2" align="right"> <input type="submit" name="submit" value="Edit Done"> </td>
					
				</tr>
				
				
				</table>
			
			
			
		</fieldset>
		</form>
	</body>
</html>