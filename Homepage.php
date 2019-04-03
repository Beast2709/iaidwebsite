<html>
<head>
	<title>Emergency Services</title>
	<link rel="icon" href="Images/main.png">
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
	<style type="text/css">
		div.wrapper {
		position: relative;
		clear: both;
		width: 100%;
		overflow:auto;
		}
		div.left {

		float: left;
		width: 19%;
		height: 100%;
		background: #ffffff;


		}	
		div.right {
		float: right;
		width: 81%;
		background: #ffffff;

		}
		.wrapper p{
		margin:0px;
		}

		ul.menu {
		list-style-type: none;
 		margin: 0;
  		padding: 0;
  		overflow: hidden;
		}

		li.menu a {
 		display: block;
  		color: white;
  		text-align: justify-all;
  		padding-top: 16px;
  		padding-left: 5px;
  		text-decoration: none;
  		font-size: 25px;
		}

		li.menu a:hover {
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
			<li class="topbar"><a href="View_Info.php"><img src="Images/person.png" height="30px" width="30px"></a></li>
			<li class="topbar"><a href="https://www.google.com/">Contact Us</a></li>
		</ul>
	</div>
	<div class="wrapper">

		<div class="left" style="background-color: #222222;">
			<ul class="menu">
				<li class="menu"><a href="Maps/Maps.html" target="iframe_a">GeoLocation</a></li>
				<li class="menu"><a href="Maps/Fire_Map.html" target="iframe_a">Fire Department</a></li>
				<li class="menu"><a href="Maps/Hospital_Map.html" target="iframe_a">Medical Department</a></li>
				<li class="menu"><a href="Maps/Electricity_Map.html" target="iframe_a">Electrical Department</a></li>
				<li class="menu"><a href="Maps/Police_Map.html" target="iframe_a">Police Department</a></li>
				<li class="menu"><a href="Maps/Government_Map.html" target="iframe_a">Disaster Management</a></li>
				<li class="menu"><a href="Maps/Water_Map.html" target="iframe_a">Home goods issue</a></li>
			</ul>
		</div>
		<div class="right">
			<iframe height="100%" width="100%" src="Maps/Maps.html" name="iframe_a"></iframe>
		</div>
	</div>


</body>
</html>


