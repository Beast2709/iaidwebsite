<?php
	session_start();
	$server='localhost';
	$user='hishamjaffar98';
	$password='martiallaw98';

	$conn=mysqli_connect($server,$user,$password);
	$db=mysqli_select_db($conn,'emergency_systems');

	$fname=$_POST['fname'];
    $mname=$_POST['mname'];
    $lname=$_POST['lname'];
    $email=$_POST['email'];
    $username1=$_POST['username'];
    $password=hash('sha512',$_POST['pass']);
    $password1=hash('sha512',$_POST['pass1']);
    $number=$_POST['phone'];
    $gender=$_POST['gender'];
    $user_type=$_POST['user_type'];
    $org_name=$_POST['org_name'];
    $org_loc=$_POST['org_loc'];
    $designation=$_POST['designation'];
    $department=$_POST['department'];
    $personnel_id=$_POST['personnel_id'];
    $users=$_SESSION['username'];

    if($fname!="")
    {
    	$sql="UPDATE information SET First_Name='$fname' Where Username ='$users' or Department_ID = '$users'";
    	mysqli_query($conn,$sql);
    }
    else
    {
  		
    }

	if($mname!="")
    {
    	$sql="UPDATE information SET Middle_Name='$mname' Where Username ='$users' or Department_ID= '$users'";
    	mysqli_query($conn,$sql);
    }
    else
    {

    }
    if($lname!="")
    {
    	$sql="UPDATE information SET Last_Name = '$lname' Where Username ='$users' or Department_ID='$users'";
    	mysqli_query($conn,$sql);
    }
    else
    {

    }
    if($email!="")
    {
    	$sql="UPDATE information SET Email = '$email' Where Username ='$users' or Department_ID='$users'";
    	mysqli_query($conn,$sql);
    }
    else
    {

    }
    if($username1!="")
    {
    	$sql="UPDATE information SET Username = '$username1' Where Username ='$users' or Department_ID='$users'";
    	mysqli_query($conn,$sql);
    }
    else
    {

    }
    if($password!="cf83e1357eefb8bdf1542850d66d8007d620e4050b5715dc83f4a921d36ce9ce47d0d13c5d85f2b0ff8318d2877eec2f63b931bd47417a81a538327af927da3e" and $password1!="cf83e1357eefb8bdf1542850d66d8007d620e4050b5715dc83f4a921d36ce9ce47d0d13c5d85f2b0ff8318d2877eec2f63b931bd47417a81a538327af927da3e" and $password!=$password1)
    {
    	echo "<script type='text/javascript'> window.location='Edit_Info.php'; alert('Your passwords do not match'); </script>";
    }
    else if($password!="cf83e1357eefb8bdf1542850d66d8007d620e4050b5715dc83f4a921d36ce9ce47d0d13c5d85f2b0ff8318d2877eec2f63b931bd47417a81a538327af927da3e" and $password1!="cf83e1357eefb8bdf1542850d66d8007d620e4050b5715dc83f4a921d36ce9ce47d0d13c5d85f2b0ff8318d2877eec2f63b931bd47417a81a538327af927da3e" and $password==$password1)
    {
    	$sql="UPDATE information SET Password = '$password', Password1= '$password1' Where Username ='$users' or Department_ID='$users'";
    	mysqli_query($conn,$sql);
    }
    else
    {
    
    }
    if($number!="")
    {
    	$sql="UPDATE information SET Numberz = '$number' Where Username ='$users' or Department_ID='$users'";
    	mysqli_query($conn,$sql);
    }
    else
    {

    }
    if($gender!="")
    {
    	$sql="UPDATE information SET Gender = '$gender' Where Username ='$users' or Department_ID='$users'";
    	mysqli_query($conn,$sql);
    }
    else
    {

    }
    if($user_type!="")
    {
    	$sql="UPDATE information SET User_Type = '$user_type' Where Username ='$users' or Department_ID='$users'";
    	mysqli_query($conn,$sql);
    }
    else
    {

    }
    if($org_name!="")
    {
   	$sql="UPDATE information SET Org_Name = '$org_name' Where Username ='$users' or Department_ID='$users'";
    	mysqli_query($conn,$sql);
    }
    else
    {

    }
    if($org_loc!="")
    {
   	$sql="UPDATE information SET Org_Loc = '$org_loc' Where Username ='$users' or Department_ID='$users'";
    	mysqli_query($conn,$sql);
    }
    else
    {

    }
    if($designation!="")
    {
   	$sql="UPDATE information SET Designation = '$designation' Where Username ='$users' or Department_ID='$users'";
    	mysqli_query($conn,$sql);
    }
    else
    {

    }
    if($department!="")
    {
   	$sql="UPDATE information SET Department = '$department' Where Username ='$users' or Department_ID='$users'";
    	mysqli_query($conn,$sql);
    }
    else
    {

    }
    if($personnel_id!="")
    {
   	$sql="UPDATE information SET Department_ID = '$personnel_id' Where Username ='$users' or Department_ID='$users'";
    	mysqli_query($conn,$sql);
    }
    else
    {

    }
   	echo "<script type='text/javascript'>
   		  	window.location='Login.php';
   		  	alert('You will be redirected to the Login Page');
 		  </script>";   
    mysqli_close($conn);

?>