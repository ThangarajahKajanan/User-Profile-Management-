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

		#detia{

		margin-top: 5%;
		margin-left: 20%;
		margin-right: 10%;
		}

		.personal_D_table{
			background-color: white;
			
			box-shadow: 0 5px 10px lightslategrey;
			text-align: left;
			overflow: hidden;
			border: ;
			width: 400px;
		    font-family: Georgia, serif;
		}


		td{
			width: 100px;
			padding: 10px 5px;
			box-shadow: 0 0.9px 1px lightsteelblue;
		}
		.btn{
			width: 100px ;
		}

		.edit_form{
			background-color: white;
			border-radius: 10px;
			box-shadow: 0 5px 10px lightslategrey;
		}
		.lable{
			color: black;
			padding: 4px;
		}
		input{
			padding: 2px;
			box-shadow: 2px 5px 10px #618685;


		}
		#submit{

			background : linear-gradient(to right ,#E1E8ED, #33ccff);
			box-shadow: 2px 5px 10px #618685;
			border: none;
			width: 20%;
			margin-top: 10px;
		
			border-radius: 20px;
			
			font-size: 15px;
			text-shadow: 2px 2px 4px rgba(255, 255, 255, 0.2);
			box -shadow: 2px 2px 4px rgba(31, 38, 155, .124);
			text-align: center;
		}
	</style>
</head>
<body>
	

<!-----***************************************************************************** -->

    <div id="header">
			<div id = "logodiv">
				<a href = "#">
				<img src = "images/logo.png" width = "100" height = "90">
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

<!-----*************************** prosonal recoards <img id="cover_po"src="pro.jpg" alt="my_photo" width="85" height="100"> //  <p>leniya Jisha</p> ************************************** -->
	


</div>
	<div id="detia">
		
<?php
	

$id =  $_SESSION['user_ID'];

	$sql = "select fname,lname,mobile,email,address,dob from tester_3  where ID = '$id' ";
	$result = $connection->query($sql);

		if($result->num_rows > 0)
		{
			
		
			while($row = $result->fetch_assoc())
			{
				
				$fname = $row["fname"];
				$lname = $row["lname"];
		
				$mobile = $row["mobile"];
				$email = $row["email"];
				$address = $row["address"];
				$dob = $row["dob"];
				
			}
		}
		
?>


	<form method="POST" action="submitUpdateDetails.php" class="edit_form">

	<p class="lable">First Name : </p>
		<input type="text"  name="firstname" value="<?php echo $fname; ?>"  required>

	<p class="lable">Last Name : </p>
		<input type="text"  name="lastname"   value="<?php echo $lname; ?>"   required> 

	<p class="lable">Mobile Number : </p>
		<input type="tel" name="mobile" pattern="[0-9]{10}" value="<?php echo $mobile; ?>" required>
		 

	<p class="lable">Email : </p>
		<input type="email" name="email" value="<?php echo $email; ?>" pattern="[ a-z0-9._%+- ]+@ [a-z0-9._]+\.[a-z]{2,3} " required>
	

	<p class="lable">Address : </p><br>
		<textarea id="address" name="address" cols="30" rows="5" required><?php echo $address; ?></textarea>

<center>
		<input type="submit" id="submit" value="update" >
</center>


</form>



   </div>

</div>



 <!-----**************************************************************************** -->


<!-----******************************* HEADER PART**********************************-->


<!-----***************************************************************************** -->

</body>
</html>
