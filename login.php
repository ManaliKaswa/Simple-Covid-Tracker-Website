<?php include('server2.php'); ?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <title>Login </title>
      
      <link href="r.css" rel='stylesheet' type='text/css' media="all">
      <header id="header">
				<div class="inner">
					<nav id="nav">						
					</nav>
				</div>
			</header>
   </head>
   <body  style="background-image: url('k.jpg'); background-size: cover; height: 30vh";>
      
            
            <form action="server2.php" method="post">
               <div class="container">
				   <br>   <br>   <br>
             <h1><center >Sign In</center></h1><br>
                     <input type="text" name="email" placeholder="Email" required="">                  
                    <input type="password" name="password" placeholder="Password" required="">
                 <button type="submit" name="login" value="next" class="registerbtn">Sign In</button>
				</div>
            </form>  
           
     
         </body>
</html>