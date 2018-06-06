 <?php
 include('connection.php');

	session_start();
	

// if user is not logged in

    $rol = $_SESSION['loggedin_roll'];
   
// query & result
$query = "SELECT * FROM issuedbook WHERE roll='$rol'";
$result = mysqli_query( $conn, $query );

// check for query string


// close the mysql connection



?>
<!DOCTYPE html>
<html>
 <head>
        
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Check issued books</title>
        <link href="https://fonts.googleapis.com/css?family=Bree+Serif" rel="stylesheet">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

       

        <style type="text/css">
        	th,td{
        		text-align: center;
        		font-family: 'Bree Serif', serif;
        	}

        	.font{
        		font-family: 'Bree Serif', serif;

        	}
        	.jumbotron{
        		margin-top: 5%;
        		background-color: #dae7ea;
        	}

        </style>
    </head>
<body>

<div class="container">	
	<div class="jumbotron">
	
	<h1 class="font">Issued Book</h1>


		<table class="table table-striped table-bordered">
		    <tr>
		        <th>Roll Number</th>
		     
		        <th>Book Name</th>
		        <th>Book ID</th>
		        
		    </tr>
		    
		    <?php
		    
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
		        echo "<div class='alert alert-warning'>You have no Book issued yet!</div>";
		    }

		    mysqli_close($conn);

		    ?>
		</table>
	</div>	
</div>
</body>
</html>
