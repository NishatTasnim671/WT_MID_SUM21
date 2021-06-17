<?php

$checkPass=0;
$checkContains=0;
    $name="";
	$err_name="";
	$username="";
	$err_username="";
	$password="";
	$err_password="";
	$confirmpassword="";
	$err_confirmpassword="";
	$email="";
	$err_email="";
	$code="";
	$err_code="";
	$number="";
	$err_number="";
	$err_streetaddress="";
	$streetaddress="";
	$city="";
	$err_city="";
	$postal="";
	$err_postal="";
	$state="";
	$err_state="";
	$day="";
	$err_day="";
	$month="";
	$err_month="";
	$year="";
	$err_year="";
	$gender="";
	$err_gender="";
	$source=[];
	$err_source="";
	$bio="";
	$err_bio="";
	
	$PassSpecialChar="";
	$hasError=false;
	$array= array("1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17",
	        "18,","19","20","21","22","23","24","25","26","27","28","29","30","31");
    
	$mon= array("January","February","March","April","May","June","July","August","September",
	      "October","November","December");
    $yr= array("2020","2019","2018","2017","2016","2015","2014","2013","2012",
	      "2011","2010","2009");		
    function sourceExist($sources){
		global $source;
		foreach($source as $s){
			if($s == $sources) return true;
		}
		return false;
	}
	
	if(isset($_POST["submit"]))	{


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
		
		if(empty($_POST["username"])){
			$hasError = true;
			$err_username="User name Required";
		}
		else if(strlen($_POST["username"]) < 6){
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
		

		if(empty($_POST["password"])){
			$hasError = true;
			$err_password="Password Must Required";
		}
		else if(strlen($_POST["password"]) < 8){
			$hasError = true;
			$err_password="Password must contain =>8 character";
		}
		else if (!strpos($_POST["password"],'?')) {
			$hasError = true;
			$err_password= "Password Must contain ? ";
			$checkContains=1;
		}
		else if (!strpos($_POST["password"],'#')) {
			$hasError = true;
			$err_password= "Password Must contain # ";
			$checkContains=1;
		}


		else if(ctype_upper($_POST["password"])  )
		{
			if( ctype_lower($_POST["password"]))
			{

			}
			else 
			{
				$hasError = true;
				$err_password= "Password Must contain upper case and lower case";
			}

		}
		
		else 
		{
			$password=htmlspecialchars($_POST["password"]);
			$checkPass=1;
		}

		
		if(empty($_POST["confirm_password"])){
			$hasError = true;
			$err_confirmpassword="Confirm Password Must Required";
		}
		else if($_POST["password"]!=$_POST["confirm_password"] ){
			$hasError = true;
			$err_confirmpassword="Password and Confirm Password Must Match";
		}
		else if($checkPass==1 && $checkContains==1){

			$err_confirmpassword=htmlspecialchars($_POST["confirm_password"]);
		}


	
      if(empty($_POST["email"]) || !preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix",$_POST["email"]))
     {
       $hasError=true;
       $err_email="You Must Enter Valid Email";
	
     }
	
	 
else{
    $validateemail= "Your Email is ".$_POST["email"];
}


     if(empty($_POST["code"])){
			$hasError = true;
			$err_code="Code Must Required";
		}

	else if(!is_numeric($_POST["code"] ))
	{
		$hasError=true;
		$err_code="Code must be numeric number ";

	}
	else 
   {
	$code=htmlspecialchars($_POST["code"]);
   }
   if(empty($_POST["phone"])){
			$hasError = true;
			$err_number="Number Must Required";
		}
	else if(!is_numeric($_POST["phone"] ))
	{
		$hasError=true;
		$err_number="Phone must be numeric number ";

	}
	else 
	{
		$number=$_POST["phone"];
	}
	
	if(empty($_POST["street_address"])){
			$hasError = true;
			$err_streetaddress="street address Must Required";
		}
	else 
	{
		$streetaddress=$_POST["street_address"];
	}
	
	if(empty($_POST["city"])){
			$hasError = true;
			$err_city="City Must Required";
		}
	else 
	{
		$city=$_POST["city"];
	}
	if(empty($_POST["state"])){
			$hasError = true;
			$err_state="State Must Required";
		}
	else 
	{
		$state=$_POST["state"];
	}
	if(empty($_POST["postal"])){
			$hasError = true;
			$err_postal="Postal Must Required";
		}
	else 
	{
		$postal=$_POST["postal"];
	}
	
	if(!isset($_POST["day"])){
			$hasError = true;
			$err_day="Day Must Required";
		}
	else 
	{
		$day=$_POST["day"];
	}
	if(!isset($_POST["month"])){
			$hasError = true;
			$err_month="Month Must Required";
		}
	else 
	{
		$month=$_POST["month"];
	}
	if(!isset($_POST["year"])){
			$hasError = true;
			$err_year="Year Must Required";
		}
	else 
	{
		$year=$_POST["year"];
	}
	
		

		if(!isset($_POST["gender"])){
			$hasError = true;
			$err_gender="Gender Required";
		}
		else{
			$gender = $_POST["gender"];
		}
		
		if(!isset($_POST["source"])){
			$hasError = true;
			$err_source="Sources Required";
		}
		else{
			$source = $_POST["source"];
		}
		
		if(empty($_POST["bio"])){
			$hasError = true;
			$err_bio = "Bio Required";
		}
		else{
			$bio = htmlspecialchars($_POST["bio"]);
		}
		if(!$hasError){
    echo "<h1>form submitted</h1>";
    echo $_POST["name"]."<br>";
    echo $_POST["username"]."<br>";
	echo $_POST["password"]."<br>";
	echo $_POST["confirm_password"]."<br>";
	echo $_POST["email"]."<br>";
	echo $_POST["code"]."<br>";
	echo $_POST["phone"]."<br>";
	echo $_POST["street_address"]."<br>";
	echo $_POST["city"]."<br>";
	echo $_POST["state"]."<br>";
	echo $_POST["postal"]."<br>";
	echo $_POST["day"]."<br>";
	echo $_POST["month"]."<br>";
	echo $_POST["year"]."<br>";
	echo $_POST["gender"]."<br>";
	
	
	echo $_POST["bio"]."<br>";
	$arr=$_POST["source"];
	
	foreach($arr as $e){
		echo "$e<br>";
	}
	}
	}
	
?>
<html>
	<head></head>
	<h1><b>Club Member Registration</b></h1>
	<body>
		<form action="" method="POST">
		<fieldset>
			<table>
				<tr>
					<td>Name</td>
					<td>: <input type="text" name="name" > </td>
					<td><span> <?php echo $err_name;?> </span></td>
				</tr>
				<tr>
					<td>Username</td>
					<td>: <input type="text" name="username">  </td>
					<td><span> <?php echo $err_name;?> </span></td>
				</tr>
				<tr>
					<td>Password</td>
					<td>: <input type="password" name="password" >  </td>
					<td><span> <?php echo $err_password ;?> </span></td>
				</tr>
				<tr>
					<td> Confirm Password</td>
					<td>: <input type="password" name="confirm_password" >  </td>
				    <td><span> <?php echo $err_confirmpassword;?> </span></td>
				</tr>
				<tr>
					<td> Email</td>
					<td>: <input type="text" name="email" > </td>
					<td><span> <?php echo $err_email;?> </span></td>
				</tr>
				<tr>
					<td> Phone</td>
				 	<td>: <input type="text" placeholder="code" name="code"> -<input name="phone" placeholder="Number" type="text"><?php echo $err_code . " ";?> <?php echo $err_number;?> </td>
				    
				</tr>
				<tr >
					<td> Address</td>
					<td>: <input type="text" placeholder="Street Address" name="street_address">  </td>
					
				</tr>
				<tr>
				  <td> </td>
				  <td> <input type="text" placeholder="City" name="city">-<input name="state" placeholder="State" type="text"></td>
				</tr>
				<tr >
					<td> </td>
					<td>  <input type="text" placeholder="Postal/Zip Code" name="postal" >  </td>
					
				</tr>
				 <td> Birth Date</td>
				 <td>: <select name="day">
					    <option disabled selected>Day</option>
						<?php
							foreach($array as $d){
								if($d == $day) 
									echo "<option selected>$d</option>";
								else
									echo "<option>$d</option>";
							}
						?>
						</select>
					</td>
					<td><span> <?php echo $err_day;?> </span></td>
					<td><select name="month">
					    <option disabled selected>Month</option>
						<?php
							foreach($mon as $m){
								if($m == $month) 
									echo "<option selected>$m</option>";
								else
									echo "<option>$m</option>";
							}
						?>
						</select>
						
					</td>
					<td><span> <?php echo $err_month;?> </span></td>
				  <td><select name="year">
					    <option disabled selected>Year</option>
						<?php
							foreach($yr as $y){
								if($y == $year) 
									echo "<option selected>$y</option>";
								else
									echo "<option>$y</option>";
							}
						?>
						</select>
						
					</td>	
					<td><span> <?php echo $err_year;?> </span></td>
				<tr>
					<td>Gender</td>
					<td>: <input type="radio" value="Male" <?php if($gender=="Male") echo "checked"; ?> name="gender"> Male <input name="gender" <?php if($gender=="Female") echo "checked"; ?> value="Female" type="radio"> Female </td>
				    <td><span> <?php echo $err_gender;?> </span></td>
				</tr>
				
				<tr>
					<td>Where did you hear<br> about us</td>
					<td>: <input type="checkbox" name="source[]" <?php if(sourceExist("A friend or Colleague")) echo "checked";?> value="A friend or Colleague">A friend or Colleague
					<input type="checkbox" name="source[]" <?php if(sourceExist("Google")) echo "checked";?> value="Google"> Google<br>
					<input type="checkbox" name="source[]" <?php if(sourceExist("Blog Post")) echo "checked";?> value="Blog Post"> Blog Post
					<input type="checkbox" name="source[]" <?php if(sourceExist("News Article")) echo "checked";?> value="News Article"> News Article
					</td>
					<td><span> <?php echo $err_source;?> </span></td>
					
				</tr>
				<tr>
					<td>Bio</td>
					<td>: <textarea name="bio"></textarea>
					</td>
				</tr>
				<tr>
					<td colspan="2" align="right"><input type="submit" name="submit" value="Register"></td>
					
				</tr>
			</table>
			
			
			
		</fieldset>
		</form>
	</body>
</html>