<?php session_start();
	require 'confi.php';
	require 'set_name.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Home Page</title>
	<link rel ="stylesheet"  href= "sty_css/Home_page_design.css"></style>
	<style>
		.log_out
		{	
			background-color: unset;
		}
		#log_btn{
			margin-left: 730px;
			background-color: skyblue;
			border-radius: 20px;
			width: 15%;
			height: 30px;
			border: none;
			border-radius: 15px;
			background: whitesmoke;
			font-size: 12px;
			font-weight: bold;
		}
		#az{
		margin-left: 1%;

		}

	</style>
</head>
<body>
	
<!-----***************************************************************************** -->

    <div id="header">
			<div id = "logodiv">
				<a href = "#">
				<img src = "images/logo.png" width = "100" height = "90"/>
				</a>
			</div> 
	
		<div id = "navdiv" class="topnav">
			<a href="home.html">Home</a>
			<a href="consultation.html">Consultations</a>
			<a href="#">Medical Reports</a>
			<a href="#">Pharmacy</a>
			<a href="#">Contact Us</a>
			<a href="first.php">My Profile</a>
			<a href="investor.html">Investor Relations</a>
		</div>
	</div>


<!-----***************************************************************************** -->

<div class="all">

<div class="bar">
		     <div class="inbar">
			 	<h3 id="pro_f">Over view</h3>

			 	<img id="my_photo" src="pro.jpg" alt="my_photo">
			 	<p id="P_name"> <?php echo $uname ?> </p>

			 	<p style="font-size: 12px; margin-left: 30px; margin-bottom: 30px;">ID : 
			 		<?php echo $_SESSION['user_ID']; ?>

				<ul>
					<li><a href="firstHomePage.php" class="active">Home</a></li>
					<li><a href="personal.php" class="active">Personal Information</a></li>
					<li><a href="medical.php" class="active">Medical Recoards</a></li>
					<li><a href="message.php" class="active"> Message</a></li>
		  	  	</ul>

		  	  	<div class="contact">
		  	  		<h3>Need our help?</h3>

		  	  		<div class="in_contact">
		  	  			<a href="#">Contact us</a>
		  	  	   </div>

		  	  	</div>

		   	 </div>

		   	    <div class ="invite">
					<form method="post" action="log_off.php" class="log_out" >
			    		<input name="logoff" type="submit" value="Log off"/ id="log_btn"> 
					</form>
			</div>
</div>


</div>



<!-----**************************************************************************** -->


<!-----******************************* HEADER PART**********************************-->


<!-----***************************************************************************** -->

</body>
</html>
