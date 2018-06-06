<?php

	include('connection.php');



	$name = $email = $hash = "";

 #form validation----------------------------------

	if( isset($_POST["add"]))
	{
		function validateFormData( $formData )
		{

					$formData = trim(stripslashes(htmlspecialchars($formData)));

					return $formData;

				}
			
		 		
		 		if (!$_POST["name"]) {
		 			# code...
		 			$nameerror = "Please enter your username <br>";
		 		}

		 		else {

		 			$name = validateFormData( $_POST["name"]);

		 		}

		 		if (!$_POST["email_post"]) {
		 			# code...
		 			$emailerror = "Please enter your email <br>";
		 		}

		 		else {

		 			$email = validateFormData( $_POST["email_post"]);

		 		}

		 		if (!$_POST["password_post"]) {
		 			# code...
		 			$passworderror = "Please enter your password <br>";
		 		}

		 		else {

		 			$password = validateFormData( $_POST["password_post"]);


		 			$hash = password_hash($password, PASSWORD_DEFAULT);

		 			

		 		}


		 		if (!$_POST["roll"]) {
		 			# code...
		 			$rollerror = "Please enter your roll no <br>";
		 		}

		 		else {

		 			$roll = validateFormData( $_POST["roll"]);

		 		}


		 		if (!$_POST["branch"]) {
		 			# code...
		 			$brancherror = "Please enter your branch. <br>";
		 		}

		 		else {

		 			$branch = validateFormData( $_POST["branch"]);

		 		}

 		//to check record added or not


		 if ($name && $email && $hash && $branch && $roll ) {
		 			# code...

			 	$query	= "INSERT INTO student(id,name,email,password,rollno,branch)VALUES(NULL,'$name','$email','$hash','$roll','$branch')";
			 		
			 		if( mysqli_query( $conn, $query))
					{
						header('Location: A_first_open_landingpagep.php'); 
						echo "<br> <div class='alert alert-success'> <strong>signup success fully!</strong> </div>";
					}
				else{

					 echo "error : ".$query."<br>".mysql_error($conn);
					}
		 			

		 }	

		 		


 	}
    mysqli_close($conn);
?>



<!DOCTYPE html>
<html>
<head>
	<title>form</title>
	<meta charset="utf-8">

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<style type="text/css">
		.backgrd{
			background-color: #d2e0df;
			font-family: 'Bree Serif', serif;
		}
	</style>
<body>

<!-- 
	<div class="container">
		<h1 class="text text-primary">FORM</h1>
		<form action="" method="post" >
			<small class="text text-danger">* <?php //echo $nameerror; ?></small>
			<input type="text" name="username_post" placeholder="username"><br><br>

			<small class="text text-danger">* <?php //echo $emailerror; ?></small>
			<input type="text" name="email_post" placeholder="email"><br><br>


			<small class="text text-danger">* <?php //echo $passworderror; ?></small>
			<input type="password" name="password_post" placeholder="password"><br><br>

			<input class="btn btn-info" type="submit" value="add data" name="add">



			



		</form>



	</div> -->


		<div class="container">
	<div class ="jumbotron backgrd" >	
<!-- ################################################################## -->
		<div class="row">
			
				
			<div class="col-sm-4"></div>

			<div class="col-sm-6">
					
						<h1 style="color : #365484;">SIGN UP</h1>
					<form action="" method="post">


						<div class="form-group">
					    <label for="exampleInputEmail1"> <b>User Name</b></label>

					    <small class="text text-danger">* <?php echo $nameerror; ?></small>

					    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Name" name="name">
				  </div>


					<div class="form-group">
					    <label for="exampleInputEmail1"> <b>Email Id</b></label>

					    <small class="text text-danger">* <?php echo $emailerror; ?></small>

					    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email" name="email_post">
				  </div>

				  <div class="form-group">
				    <label for="exampleInputPassword1">Password</label>
				    <small class="text text-danger">* <?php echo $passworderror; ?></small>
				    <input type="password" class="form-control" id="exampleInputPassword1" name="password_post"  placeholder="Password">
				  </div>

				  <div class="form-group" style="width: 40%;">
				  	<small class="text text-danger">* <?php echo $rollerror; ?></small>
				  	 Roll Number <input type="text" name="roll" class="form-control">
				  </div>

				  <div class="form-group" style="width: 20%;">
				  	<small class="text text-danger">* <?php echo $brancherror; ?></small>
				  	 BRANCH<input type="text" name="branch" class="form-control" placeholder="CSE">
				  </div>

				  

	    

					  <!-- <div class="form-group" style="width: 35%;">
					  	 DOB <input type="date" name="dob" class="form-control">
					  </div> -->
					  	<button type="submit" class="btn btn-info" name="add">Submit</button>
					 </form>
				     

			     </div>

			     <div class="col-sm-4"></div>
		</div>
     </div>			     
</div>



<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>