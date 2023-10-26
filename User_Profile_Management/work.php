

<?php
require 'confi.php';
	$Ufname=$_POST["firstname"];
	$Ulname=$_POST["lastname"];
	$Ugender=$_POST["gender"];
	$Umobile=$_POST["mobile"];

	$Uemail=$_POST["email"];
	$Uaddress=$_POST["address"];
	$Udob=$_POST["dob"];
	$Upassword=$_POST["password"]; 
/*------------------------------------------------------------------------------------*/

if(isset($_POST['btnSubmit']))
{
	$check_email = "select * from tester_3 where email = '$Uemail'";
	

	$sql= "insert into tester_3(fname,lname,gender,mobile, email,address,dob,password )VALUES('$Ufname', '$Ulname','$Ugender', '$Umobile', '$Uemail','$Uaddress','$Udob','$Upassword')";


	$find_id = "select ID from tester_3 where email = '$Uemail'";
	



	if($find = $connection->query($check_email) )
	{
		if($find->num_rows > 0)
		{
			echo "<script>alert('email already taken');</script>"; 
		
			//header("location:first.php");
		}
		else
		{
			//echo "email not taken";
			if($connection->query($sql))
			{
				echo "<script>alert('sucessfully registration');</script>";
/*---------------------------------------------------------------------------------------------------------------*/


							if($result = $connection->query($find_id))
							{
								if($result->num_rows > 0 )
								{
									while($rows = $result->fetch_assoc())
									{
										$enter_id = $rows['ID'];
									}
								}
								else
								{
									echo "<br>not matching id"; // no need
								}

							}
							else
							{
								echo "<br>error";
							}

/*---------------------------------------------------------------------------------------------------------------*/
				echo "<script>alert('ID number : $enter_id ');</script>";

			}
			else
			{
				echo "<br>error<br>";
			}

		}
	}
	else
	{
		echo "<br>email check not validete"; // no need
	}
}

$connection->close();
?>


<?php

	if(isset($_POST["re_register"]))
	{
		header("location:t_form.php");
	}
	if(isset($_POST["sign_in"]))
	{
		header("location:sign.php");
	}

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>

	<style>
		
	</style>


</head>
<body>

		<form  method="POST" enctype="multipart/form-data">

		<div>

			<br>if you want to re-register <br>
			click here<button name="re_register">re-register</button>

			<br><br>

			after the sucessfully registration<br>
			click here<button name="sign_in">sign in</button>

		</div>

		</form>

</body>
</html>







      
