




 <?php

	
	if( isset($_POST['submit']))
	{ 
		$roll ="";

				function validateFormData( $formData )
				{
					$formData = trim(stripslashes(htmlspecialchars($formData)));

					return $formData;
				}

				$id = validateFormData($_POST['id']);
				
				include('connection.php');

					$s = "SELECT roll FROM issuedbook where id='$id'";
			$r= mysqli_query($conn, $s );
			$ro = mysqli_fetch_assoc($r);
			$roll = $ro['roll'];



			$que = "UPDATE library_books SET available=1 WHERE bookid='$id'";
				mysqli_query($conn, $que );



					$sql = "DELETE FROM issuedbook WHERE id='$id'";
					mysqli_query($conn, $sql);

			#connet to php
				

				#query

				$query = "SELECT * FROM issuedbook WHERE roll = '$roll'";
					


				$result = mysqli_query($conn, $query );

				//get student  .........details

			/*	$x = "SELECT * FROM student WHERE rollno='$roll'";

				$res = mysqli_query($conn, $x );

				$arr = mysqli_fetch_assoc($result);
				$name = $arr['name'];
				$branch = $arr['branch'];
				*/
	
			}

?>
<!DOCTYPE html>
<html>
 <head>
        
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>books return system</title>

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
<body>

<div class="container " style="margin-top: 5%;">	
	<div class="jumbotron">
	<h1>Return Issued Book</h1>

		<form class="form-inline" method="post">
		  <div class="form-group">
		    <label for="exampleInputName2">Enter the book Id</label>
		    <input type="text" class="form-control" id="exampleInputName2" placeholder="" name="id">
		  </div>
		  
		  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
		</form>	
	</div>

		<h2> Student Roll Number = <?php echo $roll; ?></h2>	
	

	<table class="table table-striped table-bordered">
		    <tr>
		        <th>Roll Number</th>
		     
		        <th>Book Name</th>
		        <th>Book ID</th>
		        
		    </tr>
		    
		    <?php
		    	if($roll){

		    		if( mysqli_num_rows($result) > 0 ) {
		        
		        // we have data!
		        // output the data
		        
		        while( $row = mysqli_fetch_assoc($result) ) {
		            echo "<tr>";
		            
		            echo "<td>" . $row['roll'] . "</td><td>" . $row['bookname'] . "</td><td>" . $row['id'] . "</td>";
		            
		          /*  echo '<td><a href="edit.php?id=' . $row['id'] . '" type="button" class="btn btn-primary btn-sm">
		                    <span class="glyphicon glyphicon-edit"></span>
		                    </a></td>';
		            */
		            echo "</tr>";
		        }
		    } 
		    else { // if no entries
		        echo "<div class='alert alert-danger'>No Booked issue !</div>";
		    }

		    mysqli_close($conn);





		    }
		    


		    ?>
		</table>

</div>
</body>
</html>
