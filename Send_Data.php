<?php
    session_start();
    $servername='localhost';
    $username='hishamjaffar98';
    $password='martiallaw98';

	// Create connection
	$conn = mysqli_connect($servername, $username, $password);

	// Check connection
	/*if ($conn->connect_error) {
    	die("Connection failed: " . $conn->connect_error);
    }
    else
    {
        echo nl2br("Yes\n");
    }*/

    $db = mysqli_select_db($conn,"emergency_systems");
    /*if(!$db)
    {
    	echo "Not selected";
    }
    else
    {
        echo "Yes";
    }*/
    
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

    /*echo $fname, $mname, $lname,$email,$username1,$password,$password1,$number,$gender,$user_type,$org_name,$org_loc,$designation,$department,$personnel_id; */

    $sql="INSERT INTO information (First_Name,Middle_Name,Last_Name,Email,Username,Password,Password1,Numberz,Gender,User_Type,Org_Name,Org_Loc,Designation,Department,Department_ID) VALUES ('$fname','$mname','$lname','$email','$username1','$password','$password1','$number','$gender','$user_type','$org_name','$org_loc','$designation','$department','$personnel_id')";
    $sql1="SELECT Username FROM information where Username = '$username1'";
    $sql2="SELECT Email FROM information where Email='$email'";
    $sql3="SELECT Numberz FROM information where Numberz='$number'";
    $sql4="SELECT Department_ID FROM information WHERE Department_ID='$personnel_id'";
    if(mysqli_num_rows(mysqli_query($conn,$sql1)))
    {
        echo "<script type='text/javascript'>" . "window.location='Register.php';" . "alert ('Username already exists');" . " </script>";
    }
    else if(mysqli_num_rows(mysqli_query($conn,$sql2)))
    {
          echo "<script type='text/javascript'>" . "window.location='Register.php';" . "alert ('Email already exists');" . " </script>";
    }
    else if(mysqli_num_rows(mysqli_query($conn,$sql3)))
    {
          echo "<script type='text/javascript'>" . "window.location='Register.php';" . "alert ('Number already in use');" . " </script>";
    }
    else if(mysqli_num_rows(mysqli_query($conn,$sql4)) and $personnel_id!="")
    {
          echo "<script type='text/javascript'>" . "window.location='Register.php';" . "alert ('Department ID not unique');" . " </script>";
    }
    else
    {
        $query=mysqli_query($conn,$sql);
        header("Location:Login.php");
    }
  

    /*if(!$query)
    {
    	echo "Wtf";
    }
    else
    {
        echo "gj";
    } */
	
?>