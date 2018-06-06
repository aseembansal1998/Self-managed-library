<?php

session_start();
include('connection.php');



	 $book = $id = "";

 #form validation----------------------------------

	if( isset($_POST['add']))
	{
		function validateFormData( $formData )
		{

					$formData = trim(stripslashes(htmlspecialchars($formData)));

					return $formData;

			}
			
		 		
		 		if (!$_POST['book']) {
		 			# code...
		 			$bookerror = "Please enter book name <br>";
		 		}

		 		else {

		 			$book = validateFormData( $_POST['book']);

		 		}

		 		if (!$_POST["id"]) {
		 			# code...
		 			$iderror = "Please enter your Id <br>";
		 		}

		 		else {

		 			$id = validateFormData( $_POST['id']);

		 		}

		 		

		 		$roll = $_SESSION['loggedin_roll'];

 		//To check record added or not.....................


		 				$que = "SELECT available FROM library_books WHERE bookid = '$id'";

		 			$available = mysqli_query( $conn, $que);

		 if($roll)
		 {

		 	if( mysqli_num_rows($available) > 0)
		 	{
		 		while( $row = mysqli_fetch_assoc($available))
		 		{
		 			if($row['available'] )
		 			{

		 			}
		 			else
		 			{
		 				echo "<br> <div class='alert alert-danger' style = 'text-align : center;'> <strong>Book not available!</strong> </div>";
		 				die();
		 			}
		 		}
		 	}

		 	else
		 		{
		 				echo "<br> <div class='alert alert-success' style = 'text-align : center;'> <strong> Wrong book!</strong> </div>";
		 				die();
		 		}		
           

		 if ( $book && $id && $available) {
		 			# code...

			 	$query	= "INSERT INTO issuedbook(roll,bookname,id)VALUES('$roll','$book','$id')";
			 		
			 		if( mysqli_query( $conn, $query))
					{
						echo  "<br> <div class='alert alert-success' style = 'text-align : center;'> <strong>Issued success fully!</strong> </div>";

						#update.......
						$sql = "UPDATE library_books SET available=0 WHERE bookid='$id'";

						mysqli_query( $conn, $sql);
					}
					
				else{

						 echo "error : ".$query."<br>".mysql_error($conn);
					}
		 			

		 		}

		 }

		 else
		 {
		 	echo  "<br> <div class='alert alert-danger' style = 'text-align : center;'> <strong>You not able to issue book until you login !</strong> </div>";

		 }
	

		 		


 	}
   
    mysqli_close($conn);

?>




<!DOCTYPE html>
<html>
<head>
	<title>issueing books</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
</head>
<body>

	<div class="container" style="margin-top: 5%;">
		
		<div class="jumbotron">

			
			<div class="row">

			    <div class="col-sm-2"></div>

				<div class="col-sm-8">

					<h2>SELF ISSUE BOOKS</h2><br>

						<form action="" method="post">

							
						
						  <div class="form-group">
						  	 <small class="text text-danger">* <?php echo $iderror; ?></small>
						    <label for="exampleInputEmail1"><strong>BOOK ID</strong></label>
						    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="book id" name="id">
						    <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
						  </div>
						  
						  <div class="form-group">
						  	 <small class="text text-danger">* <?php echo $bookerror; ?></small>
						    <label for="exampleInputPassword1"><strong>BOOK NAME</strong></label>
						    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="book name"
						    name="book">
						  </div>
						  
						  
						  <button type="submit" class="btn btn-primary" name="add">Submit</button>

						


						</form>

				</div> 



				<div class="col-sm-2"></div>
						
			</div>
				
	</div>
</div>




<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
</body>
</html>