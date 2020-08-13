<!DOCTYPE html>
<html>
<head>
<title>Dashboard</title>
<style>
	body {
  background-image: url(t.jpg);
		  background-repeat: no-repeat;
		background-size: cover;
		
}
table {
border-collapse: collapse;
width: 60%;
color: #588c7e;
font-family: monospace;
font-size: 25px;
text-align: center;
}
	.inner{
   position:fixed;
   top:0;
   left:0;
   width:100%;
   height:60px;
   background-color:black;
}
	.l button{
	text-decoration:none;
	padding:5px 5px;
	margin-left: 90%;
	font-family:poppins;
	font-size:30px;
}

	.k{
		border-style: ridge;
		text-decoration:none;
		margin-left: 30%;
		margin-right: 30%;
	font-family:poppins;
		background-color: #f2f2f2;
	font-size:30px;
		padding: 5px;
	}
	

th {
background-color: #588c7e;
color: white;

}
tr:nth-child(even) {
    background-color: #f2f2f2}
	
</style>
<header id="header">
				<div class="inner">
					<nav id="nav">	
						
					</nav>
				</div>
			</header>
</head>
<body >
	<br><br><br>
	<div class="l"><right><button onclick="location.href='logout.php'">Logout</button></right></div>
	<hr>


<?php
$db2=mysqli_connect('localhost','root','','covid_data');
// Check connection

if ($db2->connect_error) {
die("Connection failed: " . $db2->connect_error);
}
$sql = "SELECT count(uid) as cntu FROM user_info";
$result = $db2->query($sql);
$row = mysqli_fetch_array($result); ?>
	
	<br><div class="k"><center><text>Total registered Users :
	
	<?php
	echo $row['cntu'];
	echo "</text></center></div><br><br>
	
	<center><h3><text  style='font-size:30px'>Areawise numbers PMC and PCMC</text></h3></center>";
		
$result = mysqli_query($db2,"select area,sum(symptom) as cnts,sum(abroad) as cnta, sum(positive) as cntp from user_info group by pincode order by area ASC "); // Second query 

	
echo "<center><table border='1'>  
<tr>  
<th>Area</th>  
<th>Symptoms seen </th>
<th>Went Abroad</th>
<th>Test</th> 
</tr>";  
while($row = mysqli_fetch_array($result))  
  {  
   echo "<tr>";  
  echo "<td>" . $row['area'] . "</td>";  
  echo "<td>" . $row['cnts'] . "</td>";  
	echo "<td>" . $row['cnta'] . "</td>"; 
	echo "<td>" . $row['cntp'] . "</td>"; 
  echo "</tr>";  
  }  
  echo "</table></center>";  
$db2->close();
?>	
		<br><br><hr><center><h3><text  style='font-size:30px'>Covid 19 illustration </text></h3></center>";
		<center><img src='unnamed.gif' alt='Girl' align='center' style='width:40%;height:100%;'><br></center>
		
		<br><br><hr><center><h3><text  style='font-size:20px'>Official Websites on Corona virus updates</text></h3></center>";
		<center>
			
			<a href="https://www.mygov.in/covid-19/"><img src='u3.png' alt='Girl' align='center' style='width:75px;height:75px;'></a>
			<a href="https://www.pmc.gov.in/en/corona-page"><img src='u.jpg' alt='Girl' align='center' style='width:75px;height:75px;'></a>

	<a href="https://www.pcmcindia.gov.in/corona_E.php"><img src='u2.jpg' alt='Girl' align='center' style='width:75px;height:75px;'></a>
<br></center><br>
	<br><hr><br>
</body>
</html>
