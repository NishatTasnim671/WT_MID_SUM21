<?php
    $hasError="";  
    $name="";
	$err_name="";
	$coursename="";
	$err_coursename="";
	$paytype="";
	$err_paytype="";
	$bank="";
	$err_bank="";
	$transition="";
	$err_transition="";
	
	
	
	$ba= array("Brac Bank","Islami Bank","Sonali Bank","Nothing");
	
	
	
	$hasError=false;
	if(isset($_POST["submit"]))	{
		//name
		if(empty($_POST["name"])){
			$hasError = true;
			$err_name="Name Required";
		}
		else if(strlen($_POST["name"]) <= 3){
			$hasError = true;
			$err_name="Name must contain >3 character";
		}
		//course
		else{
			$name = $_POST["coursename"];
		}
		if(empty($_POST["coursename"])){
			$hasError = true;
			$err_coursename="Course Name Required";
		}
		else if(strlen($_POST["name"]) <= 2){
			$hasError = true;
			$err_coursename="Name must contain >2 character";
		}
		else{
			$coursename = $_POST["coursename"];
		}
		
		if(!isset($_POST["paytype"])){
			$hasError = true;
			$err_paytype="Payment Type Required";
		}
		else{
			$paytype = $_POST["paytype"];
		}
		
		if (!isset($_POST["bank"])){
			$hasError = true;
			$err_bank="Bank name  Required";
		}
		else{
			$bank = $_POST["bank"];
		}
		
		if(empty($_POST["transition"])){
			$hasError = true;
			$err_transition="Transition id Must Required";
		}

	else if(!is_numeric($_POST["transition"] ))
	{
		$hasError=true;
		$err_transition="transition id must be numeric number ";

	}
	else 
   {
	$transition=$_POST["code"];
   }
		
		if(!$hasError){
          echo "<h1>Payment done</h1>";
          echo $_POST["name"]."<br>";
          echo $_POST["coursename"]."<br>";
	      echo $_POST["paytype"]."<br>";
	      echo $_POST["bank"]."<br>";
	      echo $_POST["transition"]."<br>";
	      
	
	}
	}
	
?>
<html>
	<head></head>
	<h1>Payment</h1>
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
					<td>Course name</td>
					<td>: <input type="text" name="coursename" >  </td>
				    <td><span> <?php echo $err_coursename;?> </span></td>
				</tr>
				<tr>
					<td>Payment Type</td>
					<td>: <input type="radio" value="Cash" <?php if($paytype=="Cash") echo "checked"; ?> name="paytype"> Cash <input name="paytype" <?php if($paytype=="Bank") echo "checked"; ?> value="Bank" type="radio"> Bank </td>
				    <td><span> <?php echo $err_paytype;?> </span></td>
				</tr>
				<tr>
					<td>Bank Name</td>
					<td>: <select name="bank">
					    <option disabled selected>---Select---</option>
						<?php
							foreach($ba as $b){
								if($b == $bank) 
									echo "<option selected>$b</option>";
								else
									echo "<option>$b</option>";
							}
						?>
						
					</td>
					<td><span> <?php echo $err_bank;?> </span></td>
				</tr>
				<tr>
					<td>Transition ID</td>
					<td>: <input type="text" name="transition" > </td>
					<td><span> <?php echo $err_transition;?> </span></td>
				</tr>
				<tr>
					<td colspan="2" align="right"><input type="submit" name="submit" value="Confimed Payment"></td>
					
				</tr>
			</table>
			
			
			
		</fieldset>
		</form>
	</body>
</html>