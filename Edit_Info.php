<!DOCTYPE html>
<html>
<head>
	<title> Edit Info Page </title>
	<script>
		function showdiv(id)
		{
			var ele = document.getElementById(id);
			ele.style.display='block';
		}

		function hidediv(id)
		{
			var ele=document.getElementById(id);
			ele.style.display="none";

		}
	</script>
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
		<form onsubmit="return validate()" id="Registration" action="Edit_Data.php" method="POST">
			<font color="white"><h1 style="font-family:sans-serif;">EDIT INFORMATION HERE</h1></font><br><br>
			<input type="text" name="fname" id="button" placeholder="Enter your first name" ><br><br>

			<input type="text" name="mname" id="button" placeholder="Enter your middle name" ><br><br>

			<input type="text" name="lname" id="button" placeholder="Enter your last name" ><br><br>

			<input type="email" name="email" id="button" placeholder="Enter your email ID" ><br><br>

			<input type="text" name="username" id="button" placeholder="Enter your username" ><br><br>

			<input type="password" name="pass" id="pass" placeholder="Enter your password" ><br><br>

			<input type="password" name="pass1" id="pass1" placeholder="Re-enter your password" ><br><br>

			<div id="message" style="font:sans-serif; font-size: 18px; color:red;"> </div>

			<div id="message1" style="font:sans-serif; font-size: 18px; color:red;"> </div>

			<input type="number" name="phone" id="ph" placeholder="Enter your number" ><br><br>

			<div id="message2" style="font:sans-serif; font-size: 18px; color:red;"> </div>

			<input type="radio" name="gender" value="Male" id="rd" >&nbsp;&nbsp;&nbsp;&nbsp;<span id="but">Male</span>&nbsp;&nbsp;&nbsp;&nbsp;

			<input type="radio" name="gender" value="Female" id="rd">&nbsp;&nbsp;&nbsp;&nbsp;<span id="but">Female</span><br><br>

			<input onclick="hidediv('personnel_info')" type="radio" name="user_type" value="Customer" id="rd">&nbsp;&nbsp;&nbsp;&nbsp;<span id="but">Customer</span>&nbsp;&nbsp;&nbsp;&nbsp;

			<input onclick="showdiv('personnel_info')" value="Personnel" type="radio" name="user_type" id="rd">&nbsp;&nbsp;&nbsp;&nbsp;<span id="but">Personnel</span><br><br>

			<div id='personnel_info'>
				<input type="text" id="button" name="org_name" placeholder="Enter the name of the organization you work for"><br><br>

				<input type="text" id="button" name="org_loc" placeholder="Enter the location of the organization"><br><br>

				<input type="text" id="button" name="designation" placeholder="Enter your designation"><br>
				<br>

				<input type="text" id="button" name="department" placeholder="Enter name of department"><br><br>

				<input type="number" id="button" name="personnel_id" placeholder="Enter your unique department ID"><br><br>

				<font face ="sans-serif" color="red"> This ID will be used as your username if you are a Personnel. </font> <br><br>
			</div>

			<input type="submit" value="Save Changes" id="butt">

		</form>
	</div>

</body>
</html>