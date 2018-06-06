
<?php

	

	
	if( isset($_POST['login']))
	{

				function validateFormData( $formData )
				{
					$formData = trim(stripslashes(htmlspecialchars($formData)));

					return $formData;
				}

				$roll = validateFormData($_POST['roll']);
				$formpass = validateFormData($_POST['password']);


				#connet to php
				include('connection.php');

				#query

				$query = "SELECT name,rollno,password FROM student WHERE rollno = '$roll'";
					// echo $;


				$result = mysqli_query($conn, $query );

				

					
				if ( mysqli_num_rows($result)>0) {


					while( $row = mysqli_fetch_assoc($result))
					{
						$user = $row['name'];
						$roll = $row['rollno'];
						$hash = $row['password']; 
					}
					# code...
				 		

						if( password_verify( $formpass , $hash))
						{
							echo "HELLO";

							session_start();
							$_SESSION['loggedin_roll'] = $roll;
							$_SESSION['loggedin_name'] = $name;

							 
							header('Location: aa_secondpage.php'); 

						}

						else{

							$logerror = "<div class='alert alert-danger'> WHoops! Wrong Roll NUMBER/password check it again. </div>";
						}

				}
				else{

					$logerror = "<div class='alert alert-danger'> WHoops! No such user. <a data-dismiss='alert' class='close'>$times</a> </div>";

				}



				mysqli_close($conn);

	}


?>

<!DOCTYPE html>
<html>
<head>
	<title>login</title>
	<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

       

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
</head>
<body>
	<div class="container jumbotron">
		

		<div class="row">
			<div class="col-sm-3"></div>

			<div class="col-sm-6">

				<h1 class="text text-primary">Login</h1>
		<p class="lead">here you login</p>


			<?php echo $logerror ?>


					<form action="" method="post">
						  <div class="form-group">
						    <label for="exampleInputEmail1">Roll number</label>
						    <input type="text" class="form-control" id="exampleInputEmail1" name="roll" placeholder="roll number">
						  </div>
						  
						  <div class="form-group">
						    <label for="exampleInputPassword1">Password</label>
						    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
						  </div>
						  
						  <button type="submit" class="btn btn-info" name="login">Submit</button>
					</form>
				

			</div>

			<div class="col-sm-3"></div>
			


		</div>

	</div>

</body>
</html>