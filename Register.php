<!DOCTYPE html>
<html>
<head>
	<title> Registration Page </title>
	<link rel="stylesheet" href="Stylesheets/Register.css">
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

		function validate()
		{
			var pass = document.getElementById('pass').value;
			var pass1 = document.getElementById('pass1').value;
			var num = document.getElementById('ph').value;
			if(pass!=pass1)
			{
				var ele=document.getElementById('message');
				ele.innerHTML="**The passwords do not match <br><br>";
				return false;
			}

			if(pass.length<10)
			{
				var ele=document.getElementById('message1');
				ele.innerHTML="**Password should be at least 10 characters<br><br>";
				return false;

			}
			
			if(num.length!=10)
			{
				var ele = document.getElementById('message2');
				ele.innerHTML="**The number should contain only ten digits<br><br>";
				return false;
			}
		}
	</script>
</head>
<body>

	<div class="simple-form">
		<form onsubmit="return validate()" id="Registration" action="Send_Data.php" method="POST">
			<font color="white"><h1 style="font-family:sans-serif;">REGISTER HERE</h1></font><br><br>
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

			<input type="submit" value="Register" id="butt">

		</form>
	</div>

</body>
</html>