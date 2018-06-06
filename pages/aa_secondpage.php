<?php

session_start();

?>

<?php
				
				if(isset($_POST['logout']))
				{
					if( isset( $_COOKIE[ session_name() ] ) ) {

				    // empty the cookie
				    setcookie( session_name(), '', time()-86400, '/' );

				}

				// clear all session variables
				session_unset();

				// destroy the session
				session_destroy();

					 header('Location: A_first_open_landingpagep.php'); 

				}
				// did the user's browser send a cookie for the session?

?>



<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>


	<link rel="stylesheet" type="text/css" href="../css/AA_secondpage.css">

	<link href="https://fonts.googleapis.com/css?family=Bree+Serif" rel="stylesheet">



<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">



</head>
<body>
  <!-- ############navbar start### -->


 <!-- ########################### nav bar starts################ -->

<nav class="navbar navbar-expand-lg  fixed-top mb-5 " id="nav_style">

	<div class="container">
		  <a class="navbar-brand" href="#"><stronger>CHITKARA</strong></a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>

		  <div class="collapse navbar-collapse" id="navbarSupportedContent">
		    <ul class="navbar-nav mr-auto">
		      <li class="nav-item active">
		        <a class="nav-link" href="#">FINE<span class="sr-only">(current)</span></a>
		      </li>

		     <li class="nav-item active">
		        <a class="nav-link" href="check.php" target="#ser"> ISSUED BOOKS</a>
		      </li>

		        <li class="nav-item active">
		        <a class="nav-link" href="issue_book_yourself.php" target="#ser">SELF ISSUE BOOKS</a>
		      </li>

		      

		      
		    </ul>
		    
		    <ul class="navbar-nav active">

		    	

		    	<!-- <li>
		    		<a href="" class="nav-link">ABOUT US</a>
		    	</li> -->

		    	<li class="nav-item active">
		        	<a class="nav-link disabled" href="#" data-toggle="modal" data-target="#feed">FEEDBACK</a>
		      </li>

		    	<li>
		    		<a href="" class="nav-link"> <?php echo $_SESSION['loggedin_roll'];  ?>   </a>
		    	</li>
\
		</ul>
		</div>

		 <form class="form-inline my-2 my-lg-0" method="POST">
		     
		      <button class="btn btn-outline-primary my-2 my-sm-0" type="submit" name="logout">logout</button>
   		 </form>

</div>
	<!-- ########container closed######## -->
</nav>


<div id="main_div">

	 <div id="form_s">	
	 	<h3 id="jas">Find The Books</h3> <br>
					<form class="form-inline my-2 my-lg-0">
				      
				      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
				      <button class="btn btn-outline-success my-1 my-sm-0" type="submit">Search</button>
				    
				    </form>
	 </div> 
                
                
         </div>
         <!-- #########content### -->

         <div id="ser">
         	<h3 style="padding-bottom: 1px;margin-bottom: 2px;" >LIBRARY BOOKS</h3><br>
         	<p style="padding-top: 1px; margin-top: 2px;">Exercise is to body as reading is to the mind </p>
         	<hr>
         </div>



<!-- ##########container### -->	
	<div class="container" style="margin-top: 5%; text-align: center;">
		

<!-- 	########row1############ -->
		<div class="row row_margin">

				<div class="col-md-4 col-sm-12">

				 <a href="comp\computerscience.html">	
					
					<div class="card pic_card" style="width: 18rem; height: 18rem;">
						  <img class="card-img-top image_line" src="../images/comp.jpg" alt="Card image cap" style=" height: 50%;">
						  <div class="card-body">
						    <h3 class="card-text">COMPUTER</h3>
						  </div>
					</div>
				   </a>
				</div>

				<div class="col-md-4 col-sm-12">

					<a href="electrical\electrical.html">
						<div class="card pic_card" style="width: 18rem; height: 18rem;">
							  <img class="card-img-top image_line" src="../images/electrition.jpg" alt="Card image cap" style=" height: 50%;">
							  <div class="card-body">
							    <h3 class="card-text">ELECTRICAL</h3>
							  </div>
						</div>
					</a>
				</div>

				<div class="col-md-4 col-sm-12">

				  <a href="mech\computerscience (1).html">	
					<div class="card pic_card" style="width: 18rem; height: 18rem;">
						  <img class="card-img-top image_line" src="../images/car_repair.jpg" alt="Card image cap" style=" height: 50%;">
						  <div class="card-body">
						    <h3 class="card-text">MECHANICAL</h3>
						  </div>
					</div>

				 </a>
				</div>
			
		</div>

		<!-- ############# row 1 end############## -->


		<!-- ############# row 2 ############## -->
			<div class="row row_margin">

				<div class="col-md-4 col-sm-12 ">

					<a href="">
					<div class="card pic_card" style="width: 18rem; height: 18rem;">
				 <img class="card-img-top image_line" src="../images/eletro.jpg" alt="Card image cap" style=" height: 50%;">
						  <div class="card-body">
						    <h3 class="card-text ">ELECTRONICS</h3>
						  </div>
					</div>
						
					
				</a>
					
				</div>

				<div class="col-md-4 col-sm-12">

					<a href="#">	
						<div class="card pic_card" style="width: 18rem; height: 18rem;">
							  <img class="card-img-top image_line" src="../images/Carpenter.jpg" alt="Card image cap" style=" height: 50%;">
							  <div class="card-body">
							    <h3 class="card-text">ARCHITECTURE</h3>
							  </div>
						</div>
					</a>
						
				</div>

				<div class="col-md-4 col-sm-12">

				<a href="">		
					<div class="card pic_card" style="width: 18rem; height: 18rem;">
						  <img class="card-img-top image_line" src="../images/cal.jpg" alt="Card image cap" style=" height: 50%;">
						  <div class="card-body">
						    <h3 class="card-text">B.COM</h3>
						  </div>
					</div>
				</a>
					
				</div>
			
		</div>

		<!-- ############# row 2 end############## -->

		<!-- ############# row 3############## -->
			
		<div class="row row_margin">

				<div class="col-md-4 col-sm-12">

					<a href="">
						<div class="card pic_card" style="width: 18rem; height: 20rem;">
							  <img class="card-img-top image_line" src="../images/food.jpg" alt="Card image cap" style=" height: 50%;">
							  <div class="card-body">
							    <h3 class="card-text">HOTEL MANAGEMENT</h3>
							  </div>
						</div>
					</a>
				</div>

				<div class="col-md-4 col-sm-12">

					<a href="">
						<div class="card pic_card" style="width: 18rem; height: 20rem;">
							  <img class="card-img-top image_line" src="../images/phr.jpg" alt="Card image cap" style=" height: 50%;">
							  <div class="card-body">
							    <h3 class="card-text">PHARMACY</h3>
							  </div>
						</div>
					</a>
				</div>

				<div class="col-md-4 col-sm-12">

					<a href="">
						<div class="card pic_card" style="width: 18rem; height: 20rem;">
							  <img class="card-img-top image_line" src="../images/media.jpg" alt="Card image cap" style=" height: 50%;">
							  <div class="card-body">
							    <h3 class="card-text">MASS MEDIEA</h3>
							  </div>
						</div>
					</a>
					
				</div>
			
		</div>

	


		<!-- ############# row 3 end############## -->



		
<!-- #############container############## -->
	</div>



 <div class="modal" tabindex="-1" role="dialog" id="feed">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Feedback</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <input type="text" name="" style="width: 100%;">
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
        <button type="submit" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div> 

<!-- 
################## -->



<div class="modal" tabindex="-2" role="dialog" id="query">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Enter your Query</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <input type="text" name="" style="width: 100%;">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary">Submit</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>



<!-- ###header## -->


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
</body>
</html>