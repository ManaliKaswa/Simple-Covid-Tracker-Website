<?php include('server2.php'); ?>
<!DOCTYPE html>
<html>
<head>
     <title>Registration</title>
     
         <link rel="stylesheet" href="r.css">
	<header id="header">
				<div class="inner">
					<nav id="nav">						
					</nav>
				</div>
			</header>
     </head>
    <body style="background-image: url('w.jpg'); background-size: cover; height: 30vh  background-size: 100% 100%;";>
	<img src="r.png" alt="Italian Trulli" style="width:100%;height:200px;">
	<h1><center >Registration</center></h1>
	<form method="post" action="server2.php" >
	<?php include('errors.php'); ?>

	<div class="container">
    <label for="name"><b>Name - As on aadhar card</b></label>
    <input type="text" placeholder="Enter Name" name="name" required>
      
    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>
		
	<label for="phone"><b>Mobile number</b></label>
	<input type="number" placeholder="Enter Mobile number" name="phone" required>
  
	<label for="aadhar"><b>Aadhar Card number</b></label>
	<input type="number" placeholder="Enter aadhar number" name="aadhar">
		
	<label for="address"><b>Address</b></label>
    <input type="text" placeholder="Enter address" name="address" required>
	<hr> 
	<center><br><a href="https://www.nativeplanet.com/india-pin-codes/maharashtra/pune/?fs" target="_blank"><text style='color:white;align:center;font-size:25px;'>Visit This site to find your pincode</text> </a><br></center>
		<hr> 
	<label for="pincode"><b>Pincode</b></label>
	<input type="number" placeholder="Enter pincode" name="pincode" pattern="[0-9]{6}" required>
		
	<label for="area"><b>Area</b></label>
    <input type="text" placeholder="Enter area" name="area" required>
		 
		<hr> 
		<br><center><img src='c.png' alt='Girl' align='center' style='width:100%;height:100%;'><br></center><br><br>
		<label for="symptom"><b>Symptoms seen</b></label><br>
		<input type="radio" id="yes" name="symptom" value="1">
		<label for="yes">Yes</label>
		<input type="radio" id="no" name="symptom" value="0">
		<label for="no">No</label><br><br>

    	<label for="abroad"><b>Gone abroad in past 2 months: </b></label><br>
		<input type="radio" id="yes" name="abroad" value="1">
		<label for="yes">Yes</label>
		<input type="radio" id="no" name="abroad" value="0">
		<label for="no">No</label><br><br>
		
		<label for="test"><b>Corona test result</b></label><br>
		<input type="radio" id="yes" name="test" value="1">
		<label for="positive">Positive</label>
		<input type="radio" id="no" name="test" value="0">
		<label for="negative">Negative</label><br><br>
		
			<hr> 
		
    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    <label for="psw-repeat"><b>Confirm Password</b></label>
    <input type="password" placeholder="Confirm Password" name="psw_repeat" required>
	
	<button type="submit" name="register" value="Next" class="registerbtn" >Register</button>
<br><br><br>
		<br><br><br>
		<br><br><br>
  </div>
  
</form>	
    </body>
</html>