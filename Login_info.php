<?php

$server='localhost';
$username='hishamjaffar98';
$password='martiallaw98';

session_start();

$conn=mysqli_connect($server,$username,$password);
if($conn->connect_error)
{
	die("error".$connect->error);
}

$db=mysqli_select_db($conn,"emergency_systems");
{
	if(!$db)
	{
		echo "error";
	}
}
$username1=$_POST['user'];
$_SESSION['username']=$username1;
$password=hash('sha512',$_POST['pass']);
$_SESSION['password']=$password;




$sql="SELECT Username FROM information WHERE Username='$username1'";
$sql1="SELECT Password From information WHERE Password='$password'";
$sql2="SELECT Department_ID From information WHERE Department_ID='$username1'";
$sql3="SELECT Username From information WHERE Username='$username1' or Department_ID='$username1'";

if(mysqli_num_rows(mysqli_query($conn,$sql3))) 
{
	$sql4="SELECT First_Name, Middle_Name, Last_Name, Email, Numberz, Gender, User_Type,Org_Name, Org_Loc, Designation, Department, Department_ID From information WHERE Username='$username1' or Department_ID='$username1'";
	$query=mysqli_query($conn,$sql4);
	if(mysqli_num_rows($query)>0)
	{
		while($row=mysqli_fetch_assoc($query))
		{
			$_SESSION['first_name']=$row['First_Name'];
			$_SESSION['middle_name']=$row['Middle_Name'];
			$_SESSION['last_name']=$row['Last_Name'];
			$_SESSION['email']=$row['Email'];
			$_SESSION['number']=$row['Numberz'];
			$_SESSION['gender']=$row['Gender'];
			$_SESSION['user_type']=$row['User_Type'];
			$_SESSION['org_name']=$row['Org_Name'];
			$_SESSION['org_loc']=$row['Org_Loc'];
			$_SESSION['designation']=$row['Designation'];
			$_SESSION['department']=$row['Department'];
			$_SESSION['department_id']=$row['Department_ID'];
		}
	}
}

if(mysqli_num_rows(mysqli_query($conn,$sql2)) and mysqli_num_rows(mysqli_query($conn,$sql1)))
{
	header("Location:Homepage.php");
}
else if((mysqli_num_rows(mysqli_query($conn,$sql)) and mysqli_num_rows(mysqli_query($conn,$sql1))))
{
	header("Location:Homepage.php");
}

else if(mysqli_num_rows(mysqli_query($conn,$sql2))!=0 and mysqli_num_rows(mysqli_query($conn,$sql1))==0)
{
	echo "<script type='text/javascript'>"."window.location='Login.php';"."alert('You are not a Personnel');"."</script>";
}

else
{
	echo "<script type='text/javascript'>"."window.location='Login.php';"."alert('Username or Password is Incorrect');"."</script>";
}
mysqli_close($conn);
?>