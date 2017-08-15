<?php
include 'header.php';
?>
<!DOCTYPE HTML>
<html>  
 <head>
  <meta charset="UTF-8">
      <title>Sign Up</title>
      <link rel="stylesheet" type="text/css" href="style2.css">
	  <h1 style="color:white;text-align:center;">Welcome To The User Signup Page</h1>
 </head>
 <body>
 <div id="su">
	<?php
		$url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
			if(strpos($url,"error=empty")!==false){
			echo "<h3>FILL OUT COMPLETELY</h3>";
			}
			elseif(strpos($url,"error=username")!==false){
			echo "<h3>USER ALREADY EXISTS</h3>";
			}
	?>
	<form action="signup.php" method="POST">
		FIRSTNAME:
		<input type="text" name="first" placeholder="Firstname"><br>
		LASTNAME:
		<input type="text" name="last" placeholder="Lastname"><br>
		USERNAME:
		<input type="text" name="uid" placeholder="Username"><br>
		PASSWORD:
		<input type="password" name="pwd" placeholder="Password"><br>
		<button  type="submit">SIGN UP</button>	
    </form>
	
	<form action='index.php'>
		<button>LOGIN</button>
	</form>
</div>
 </body>
</html>