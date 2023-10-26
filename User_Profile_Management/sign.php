<?php
	session_start(); // start a session
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Home Page</title>

<link rel ="stylesheet"  href= "sty_css/Home_page_design.css"></style>  
<link rel ="stylesheet"  href= "sty_css/sign.css"></style>

	<?php
	

	if(isset($_POST["login"]))
	{
		require 'confi.php';



		$id =$_POST['user_ID'];
		$password =$_POST["user_Password"];


		$sql="SELECT * FROM tester_3 WHERE ID = '$id' and password = '$password' ";  /* query for find the matching user id and password */
		

		$result=mysqli_query($connection,  $sql);  // run the query
  
		$count=mysqli_num_rows($result); // get value 1 or 0

		if($count>0) // match row 
		{
			header("location:firstHomePage.php"); 
			$_SESSION['user_ID'] = $id;  // create session 
		}
		else  // not match
		{
			header("location:sign.php");
		}

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
			<a href="first.php">My Profile</a>
			<a href="investor.html">Investor Relations</a>
		</div>
	</div>


<!-----***************************************************************************** -->


<div class="in_body">

	<form class="log_form" enctype="multipart/form-data" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>  " >



		<h5> LOG IN</h5>    

		<label>User ID </label>
			<input type="text" name="user_ID">

		<label>Password</label>
			<input type="password" name="user_Password">
	
		<button name="login">Log In</button>
		
		<a class="forget" href=" ">Forgotten password?</a>
	
		
	</form>


</div>

<!-----**************************************************************************** -->

<!-----******************************* HEADER PART**********************************-->

<!-----***************************************************************************** -->

</body>
</html>
