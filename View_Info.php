<!DOCTYPE html>
<html>
<head>
	<title> Edit Details</title>
	<link rel="Icon" href="Images/person.png">
	<link rel="stylesheet" href="Stylesheets/Register.css">
	<style>
	ul.topbar {
  		list-style-type: none;
  		margin: 0;
  		padding: 0;
  		overflow: hidden;
}

	li.topbar {
  		float: right;
}

	li.topbar a {
  		display: block;
  		color: white;
  		text-align: center;
  		padding: 14px 16px;
  		text-decoration: none;
  		font-size: 25px;
}

/* Change the link color to #111 (black) on hover */
	li.topbar a:hover {
  		background-color: #111;
}
</style>
</head>
<body>
	<div style="background-color: #222222; width: 100%;height: 60px;">
		<ul class="topbar" align="left">
			<li class="topbar" style="float: left"><img src="Images/menu-icon.png" height=50px width=50px></li>
			<li class="topbar" style="float: left;font-size: 40px;"><a href="Homepage.php">HELP!</a></li>
			<li class="topbar"><a href="Logout.php">Sign Out</a></li>
			<li class="topbar"><a href="Edit_Info.php"><img src="Images/person.png" height="30px" width="30px"></a></li>
			<li class="topbar"><a href="https://www.google.com/">Contact Us</a></li>
		</ul>
	</div>

 	<div class="simple-form">
 		<form id="Registration" action="Edit_Info.php">
 			<font><h1> PROFILE DETAILS</h1></br>
 			<?php session_start(); if($_SESSION['user_type']=='Customer')
 			{
				echo "<b>USERNAME</b>: ". $_SESSION['username'];
 			}
 			else
 			{
 				echo "DEPARTMENT ID: " . $_SESSION['department_id'];
 			}
 			?>
 			</br></br>
 			FIRST NAME: <?php echo $_SESSION['first_name'];?>
 			</br></br>
 			MIDDLE NAME: <?php echo $_SESSION['middle_name'];?>
 			</br></br>
 			LAST NAME: <?php echo $_SESSION['last_name'];?>
 			</br></br>
 			EMAIL: <?php echo $_SESSION['email'];?>
 			</br></br>
 			NUMBER: <?php echo $_SESSION['number'];?>
 			</br></br>
 			GENDER: <?php echo $_SESSION['gender'];?>
 			</br></br>
 			USER TYPE: <?php echo $_SESSION['user_type'];?>
 			<br><br>
 			ORGANIZATION NAME: <?php if($_SESSION['user_type']=='Customer')
 			{
 				echo "NaN";
 			}

 			else
 			{
 				echo $_SESSION['org_name'];
 			}
 			?>
 			<br><br>
 			ORGANIZATION LOCATION: <?php if($_SESSION['user_type']=='Customer')
 			{
 				echo "NaN";
 			}
 			else
 			{
 				echo $_SESSION['org_loc'];
 			}
 			?>
 			<br><br>
 			DESIGNATION: <?php if($_SESSION['user_type']=='Customer')
 			{
 				echo "NaN";
 			}
 			else
 			{
 				echo $_SESSION['designation'];
 			}
 			?>
 			<br><br>
 			DEPARTMENT: <?php if($_SESSION['user_type']=='Customer')
 			{
 				echo "NaN";
 			}
 			else
 			{
 				echo $_SESSION['department'];
 			}
 			?>
 			</font>
 			</br></br>
 			<input type="submit" id="butt" value="EDIT INFO">
 		</form>
 	</div>


</body>
</html>