<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Home Page</title>

	<link rel ="stylesheet"  href= "sty_css/Home_page_design.css"></style>
	<link rel ="stylesheet"  href= "sty_css/log.css"></style>

	<script type="text/javascript">

	</script>
<?php

	if(isset($_POST["sign"]))
	{
		header("location:sign.php");
	}
	if(isset($_POST["register"]))
	{
		header("location:t_form.php");
	}
?>

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
			<a href="#">My Profile</a>
			<a href="investor.html">Investor Relations</a>
		</div>
	</div>


<!-----***************************************************************************** -->

<div class="main">

	<form id="show_form" method="POST" enctype="multipart/form-data">

		<div id="btn_arrange">
		<button class="on_btn" name="sign">Sign in</button>
		<button class="on_btn" name="register">Register</button>
		</div>

	</form>



</div>


<!-----**************************************************************************** -->

<!-----******************************* HEADER PART**********************************-->

<!-----***************************************************************************** -->


</body>
</html>
