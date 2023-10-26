
<?php

/* ---------------------------------------------------------------------- */
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "SLIIT";


	$connection = new mysqli($servername, $username, $password, $dbname); 

	if($connection ->connect_error)
	{
		die("connection faild : ".$connection->connect_error);
	}
	else
	{
		//echo "connection is sucessfully";
	}

/* ---------------------------------------------------------------------- */

?>
