

<?php   
		session_start();
		require 'confi.php';
		

		$id =  $_SESSION['user_ID'];

		$Ufname=$_POST["firstname"];
		$Ulname=$_POST["lastname"];
		$Umobile=$_POST["mobile"];  
		$Uemail=$_POST["email"];
		$Uaddress=$_POST["address"]; 

		echo $id;
		echo  $Ufname."<br>";
		echo  $Ulname."<br>";
		echo  $Umobile."<br>";
		echo  $Uemail."<br>";
		echo  $Uaddress."<br>";



		$sql= "UPDATE tester_3 SET fname = '$Ufname' ,lname = '$Ulname', mobile='$Umobile', email = '$Uemail',address = '$Uaddress' WHERE ID = '$id' ";

		if($connection->query($sql))
		{
			echo "<script>alert('updated successfully');</script>";
			header("location:personal.php");
		}
		else
		{
			echo "<script>alert('updated not successfully');</script>";
		}

?>