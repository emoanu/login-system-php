<!-- <?php include 'dbcon.php' ?> -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="form-wrapper">

<form action="registration.php" method="post">
<h3>Sign Up here</h3>
<div class="form-item"><input type="text" name="newUser" required="required" id="" placeholder="Enter username"></div>
<br>
<div class="form-item"><input type="text" name="newName" id="" placeholder="Enter your name"></div>
<br>
<div class="form-item"><input type="password" name="newPass" id="" required="required" placeholder="Enter your password"></div>
<br>
<div class="button-panel"><input type="submit" class="button" name="Submit" value="Register"></div>
<br>
</form>



</div>
    
</body>
</html>
