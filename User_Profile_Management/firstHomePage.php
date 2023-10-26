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
		#file_up
		{
			background-color: unset;
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
			<a href="consultation.html ">Consultations</a>
			<a href="#    ">Medical Reports</a>
			<a href="#    ">Pharmacy</a>
			<a href="#    ">Contact Us</a>
			<a href="first.php">My Profile</a>
			<a href="investor.html">Investor Relations</a>
		</div>
	</div>


<!-----***************************************************************************** -->


<div class="all">  <!--main box  --->


<div class="bar">  <!--side box--->

		     <div class="inbar">    <!--top box--->

			 	<h3 id="pro_f">Over view</h3>

			 	<img id="my_photo" src="pro.jpg" alt="my_photo"> 

			 	<p id="P_name"> <?php echo $uname ?> </p>

			 	<p style="font-size: 12px; margin-left: 30px; margin-bottom: 30px;">ID : <?php echo $_SESSION['user_ID']; ?>
			 	</p>
				<ul>
					<li><a href="firstHomePage.php" class="active">Home</a></li>
					<li><a href="personal.php" class="active">Personal Information</a></li>
					<li><a href="medical.php" class="active">Medical Recoards</a></li>
					<li><a href="message.php" class="active"> Message</a></li>
		  	  	</ul>


		  	  	<div class="contact">    <!--contact div--->
		  	  			<h3>Need our help?</h3>

		  	  			<div class="in_contact">
		  	  				<a href="#">Contact us</a>
		  	  	  		</div>

		  	  	</div>

		   	 </div>
		   	 

			<div class ="invite">  	<!--log off div--->
					<form method="post" action="log_off.php" class="log_out" >
			    		<input name="logoff" type="submit" value="Log off"/ id="log_btn"> 
					</form>
			</div>



<!----------------------------------------------------------------------------------------------->

			<div class="first_box"> 
				<p style="font-family: sans-serif;">Add notes </p>
				<div >
					<textarea id="note" name="note" rows="5" cols="30" placeholder="Make your notes"></textarea>
					<br>
					<input type="submit" value="save" id="note_submit">
				</div>



				<div >

					<form method="POST" action="#" name="form" enctype="multipart/form-data" id="file_up">
						<p style="margin-top: 10px; font-family: sans-serif;color: black;"> Upload your file here</p><br>

						<input type="file" name="file"><br>
						<input type="submit" value="upload" name="uploading">	
					</form>
		

<!------------- FILE handling -------------------------- -->
<?php
	$target_dir = "upload/"; 
	$target_file = $target_dir. basename($_FILES["file"]["name"]); 

	$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));


if(isset($_POST['uploading']))
{

	if(isset($_FILES["file"]) ) 
	{
		if (file_exists($target_file))  // check if file already exit or not         
		{
  			echo "<script>alert('Sorry, file already exists');</script>";
		}
		else
		{
			if($_FILES["file"]["size"] > 5000000)   // check the file size
			{
  				echo "<script>alert('Sorry, your file is too large');</script>";
  			}
  			/*else
  			{											
				if($imageFileType != "jpg" && $imageFileType != "png" 
					&& $imageFileType != "jpeg" && $imageFileType != "gif" )   // check file extestion
				{
  					echo "<script>alert('Sorry, only JPG, JPEG, PNG & GIF files are allowed');</script>";
  				} */
  				else
  				{
  					if (move_uploaded_file($_FILES["file"]["tmp_name"],$target_file))
					{
						echo "<script>alert('The file ".basename($_FILES["file"]["name"])." is uploaded');</script><br>";
						//$_FILES['photo']['name'];

					}
					else 
					{
						echo "<script>alert('Error while uploading your file');</script>";
					} 
  				//}//
  			}
  		}
  	}
  	
  	else
  	{
  		echo "<script>alert('not avilable photo');</script>";
  	} 
  }


?>

				</div>

   		    </div>


   		    <div class="secound_box"> 
				<p >My storage</p>
   		    </div>
<!---------------------------------------->
</div>
</div>
<!-----***************************************************************************** -->




<!-----******************************* HEADER PART********************************************** -->





<!-----**************************************************************************** -->
</body>
</html>
