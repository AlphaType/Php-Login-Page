<?php
include 'header.php';
?> 
<!DOCTYPE HTML>
<html>  
 <head>
   <meta charset="UTF-8">
      <title>Welcome To Login Page</title>
      <link rel="stylesheet" type="text/css" href="style.css">
	  <h1 style="color:white;text-align:center;">Welcome To The User Login Page</h1>
 </head>

 <body>
	
	<form id="ab" action="login.php" method="POST">
		 USERNAME:
		<input type="text" name="uid" placeholder="Username"><br>
		PASSWORD:
		<input type="password" name="pwd" placeholder="Password"><br>
		<br>
		<button type="submit">LOGIN</button>
    </form>
	<div id="cd">
		<?php
			if(isset($_SESSION['id'])){
				echo "<h1><pre>          ".$_SESSION['id']."</pre></h1>";
				echo "<pre><h2>     YOU ARE LOGGED IN</h2></pre>";
			}
			else {
				echo "<br><br><pre><h2>    YOU ARE NOT LOGGED IN </pre></h2>";
			}
		?>
	</div>
	
	<form  id="bc" action='logout.php'>
		<button>LOGOUT</button>
	</form>
	
	<form  id="ef" action="su.php" method="POST">
		<button type="submit">SIGN UP</button>
	</form>
 </body>
</html>