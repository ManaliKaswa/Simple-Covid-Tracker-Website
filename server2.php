<?php
session_start();

	$name="";
	$email="";
	$errors=array();
	$db2=mysqli_connect('localhost','root','','covid_data');
	// echo("connection succesful");

//Registration
	if(isset($_POST['register']))
	{
		
		$name=mysqli_real_escape_string($db2,$_POST['name']);
		$email=mysqli_real_escape_string($db2,$_POST['email']);
		$phone=mysqli_real_escape_string($db2,$_POST['phone']);
		$aadhar=mysqli_real_escape_string($db2,$_POST['aadhar']);
		$address=mysqli_real_escape_string($db2,$_POST['address']);
		$pincode=mysqli_real_escape_string($db2,$_POST['pincode']);
		$area=mysqli_real_escape_string($db2,$_POST['area']);
		$symptom=mysqli_real_escape_string($db2,$_POST['symptom']);
		$abroad=mysqli_real_escape_string($db2,$_POST['abroad']);
		$test=mysqli_real_escape_string($db2,$_POST['test']);
		
		$psw=mysqli_real_escape_string($db2,$_POST['psw']);
		$pswn=mysqli_real_escape_string($db2,$_POST['psw_repeat']);
                
		if($psw==$pswn)
        {
   $result = mysqli_query($db2,"SELECT * FROM user_info where email='".$email."'");
    $num_rows = mysqli_num_rows($result);
    if($num_rows >= 1){
         echo  "<script>alert('Username already taken');</script>";
    }else{
        $sqn="INSERT INTO user_info(name,email,phone,aadhar,address,pincode,area,symptom,abroad,positive,password)
                VALUES('$name','$email','$phone','$aadhar','$address','$pincode','$area','$symptom','$abroad','$test','$psw')";
                
		$result=mysqli_query($db2, $sqn);
         header("location:reg_suc.php");
    }
       
  
         
        }
    else
        {
        echo "<script>alert('password doesnt match');</script>";

        }
}

//login

	if(isset($_POST['login']))
	{
	$id=mysqli_real_escape_string($db2,$_POST['email']);
	$password=mysqli_real_escape_string($db2,$_POST['password']);
	
		$query1="SELECT * FROM user_info WHERE email='$id' AND password='$password'";
		$result1=mysqli_query($db2,$query1);
		$query2="insert into curr_user (user_name) values('$id')";
		$result2=mysqli_query($db2,$query2);		
		if(mysqli_num_rows($result1)==1)
		{
			$_SESSION['username']=$id;
			
			header('location:table.php');
		}else
		{
			//header('location:login.php');
			echo  "<script>alert('wrong credentials');</script>";
			
		}
	}
	
