<?php session_start(); ?>
<?php include('dbcon.php'); ?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="form-wrapper">
  
  <form action="#" method="post">
  <?php

if (isset($_SESSION['success_msg'])) {
  echo "<span class=error>".$_SESSION['success_msg']."</span>";
 unset($_SESSION['success_msg']);
}
elseif (isset($_SESSION['err_msg'])) {
  echo "<span class=success>".$_SESSION['err_msg']."</span>";
 unset($_SESSION['err_msg']);
  
}
?>




    <h3>Login here</h3>
	
    <div class="form-item">
		<input type="text" name="user" required="required" placeholder="Username" autofocus required></input>
    </div>
    
    <div class="form-item">
		<input type="password" name="pass" required="required" placeholder="Password" required></input>
    </div>
    
    <div class="button-panel">
		<input type="submit" class="button" title="Log In" name="login" value="Login"></input>
    </div>
  </form>
  <?php
	if (isset($_POST['login']))
		{
			// if(mysqli_connect_error()){
			// 	printf("connection fail : %s\n",mysqli_connect_error());
			// 	exit();
			// }
            // if($_POST['user']==''){
			// 	echo "username reqr";
			// }
			// elseif($_POST['pass']==''){
			// 	echo "password reqr";
			// }

			$username = mysqli_real_escape_string( $con,($_POST['user']));
			$password = mysqli_real_escape_string($con,(md5($_POST['pass'])));
			
			$query 		= mysqli_query($con, "SELECT * FROM users WHERE  password='$password' and username='$username'");
			$row		= mysqli_fetch_array($query);
			$num_row 	= mysqli_num_rows($query);
			
			if ($num_row > 0) 
				{			
					$_SESSION['user_id']=$row['user_id'];
					header('location:home.php');
					
				}
			else
				{
					echo 'Invalid Username and Password Combination';
				}
		}
  ?>
  
<?php
if(isset($_POST['Submit'])){
    $_SESSION['success_msg'];
}
?>

  <div class="reminder">
    <p>Not a member? <a href="signUp.php">Sign up now</a></p>
    <p><a href="#">Forgot password?</a></p>
  </div>
  
</div>

</body>
</html>