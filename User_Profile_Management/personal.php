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

		td{width: 100px;
	
			padding: 10px 5px;
			box-shadow: 0 0.9px 1px lightsteelblue;
		}
		.btn{
			width: 100px ;
		}
		#edit_btn
		{
			/*background-color: darkturquoise; */
			background : linear-gradient(to right ,#E1E8ED, #33ccff);
			border: none;
			width: 15%;
			border-radius: 20px;
			margin-top: 10px;
			margin-left: 110px;
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
</div>

	<div id="detia">
		
		

<?php
		
	$id_num = $_SESSION['user_ID'];
	$sql = "select ID, fname,lname,gender,mobile,email,address,dob from tester_3  where ID = '$id_num' ";

		if($result = $connection->query($sql))
		{
			if($result->num_rows > 0)
			{	
				echo ("<table border='0' class='personal_D_table'>");
				echo ("<caption style='color:#1E90FF;font-family: Courier New, monospace;'><h3>register details</h3></caption>");
				while($row = $result->fetch_assoc())
				{
					$Id = $row["ID"];

					echo ("<tr>");
						echo ("<td>ID</td>");
						echo ("<td>".$row["ID"]."</td>");
						
					echo ("</tr>");

					echo ("<tr>");
						echo ("<td>fname</td>");
						echo ("<td>".$row["fname"]."</td>");
					echo ("</tr>");

					echo ("<tr>");
						echo ("<td>lname</td>");
						echo ("<td>".$row["lname"]."</td>");
					echo ("</tr>");

					echo ("<tr>");
						echo ("<td>gender</td>");
						echo ("<td>".$row["gender"]."</td>");
					echo ("</tr>");

					echo ("<tr>");
						echo ("<td>phone</td>");
						echo ("<td>".$row["mobile"]."</td>");
					echo ("</tr>");

					echo ("<tr>");
						echo ("<td>gmail</td>");
					    echo ("<td>".$row["email"]."</td>");
					echo ("</tr>");

					echo ("<tr>");
						echo ("<td>address</td>");
					    echo ("<td>".$row["address"]."</td>");
					echo ("</tr>");

					echo ("<tr>");
						echo ("<td>date</td>");
						echo ("<td>".$row["dob"]."</td>");
				    echo ("</tr>");
				}
				echo ("</table>");
				echo ("<td><button type='submit' id = 'edit_btn'><a href='edit.php?ID =$Id '>edit</a></button></td>");
			}
			else
			{
				echo "you not have these datas";
			}
		}
		else
		{
			echo "error".$connection->error;

		}
		
?>
	</div>
</div>

<!-----**************************************************************************** -->


<!-----******************************* HEADER PART**********************************-->


<!-----***************************************************************************** -->
</body>
</html>
