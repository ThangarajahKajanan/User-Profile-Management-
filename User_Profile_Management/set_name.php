<?php session_start();
	require 'confi.php';

	$user_ID=" ";

	if(isset($_SESSION['user_ID']))
	{
		$userID = $_SESSION['user_ID'];
	}
	else
	{
		header("location:sign.php");
	}

	

	require 'confi.php';
	$sql = "select fname from tester_3 where ID =  $userID ";
	if($result =$connection->query($sql))
	{
		if($result->num_rows > 0)
		{
			while($rows = $result->fetch_assoc())
			{
				$uname = $rows['fname'];
				
			}
		}
	}

?>