<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Home Page</title>
	<link rel ="stylesheet"  href= "sty_css/register.css"></style>
	<link rel ="stylesheet"  href= "sty_css/Home_page_design.css"></style>
	
	<script type="text/javascript" src="JAVA.js"></script> 
</head>
<body>


<!------------------------------------------------------------------------------------------>
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

<!---------------------------------------------------------------------------------------->

<div id="form_div">

<form method="POST" action="work.php" name="form" enctype="multipart/form-data" class="inner_form">

	<p>First Name : </p>
		<input type="text"  name="firstname" placeholder="First Name"      	required>

	<p>Last Name : </p>
		<input type="text"  name="lastname"   placeholder="Last Name"   required> 


	<p>Gender :</p> 
		<input type="radio" name="gender" id="Male"  value="male"  >  <p class="gen" required> Male</p>  

		<input type="radio" name="gender" id="Female" value="female">  <p class="gen" required>Female</p> 


	<p>Mobile Number : </p>
		<input type="tel" name="mobile" pattern="[0-9]{10}" placeholder="0768606434" required>
		 

	<p>Email : </p>
		<input type="email" name="email" placeholder="abc@gmail.com" pattern="[ a-z0-9._%+- ]+@ [a-z0-9._]+\.[a-z]{2,3} " required>
	

	<p>Address : </p><br>
		<textarea id="address" name="address" cols="30" rows="5" placeholder="enter your address" required> </textarea>


	<p>DOB : </p>
		<input style="color:white; font-weight: bold;" type="date" name="dob" required> 


	<p>Password : </p>
		<input type="Password" name="password" id="psw" pattern=" (?=.*\d) (?=.*[a-z]) (?=.*[A-Z]).{5, 10}" required>


	<p>Re-enter passwoed : </p>

		<input type="Password" id="reenterpsw"  required > <br>


		<input type="checkbox" id="checkbox" onclick="enablebutten()" class="las">Accept policy<br>
<center>
		<input type="submit" id="submit" value="register" disabled  class="las" name="btnSubmit">
</center>


</form>
</div>


<!-----**************************************************************************** -->


<!-----******************************* HEADER PART**********************************-->


<!-----***************************************************************************** -->

</body>
</html>