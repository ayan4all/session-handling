<?php
session_start();

if(isset($_POST["logout"])) {
  session_unset(); 
  session_destroy();
  header("Location: ./"); die();
}

?>
<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="content-type" content="text/html;charset=utf-8" />
  <title>Dashboard</title>
</head>
<body>
  <?php if(isset($_SESSION["login"]) and $_SESSION["login"] === true) {?>
		<p> The user: <strong><?php echo $_SESSION["username"]; ?></strong> logged in successfully.  </p>
		<form name="input" action="" method="post">
			<input type="submit" value="Logout" name="logout" />
		</form>
  <?php }else{?>
		<p> Sorry access denied.</p>
		<form name="input" action="" method="post">
			<input type="submit" value="Back to Login" name="logout" />
		</form>
  <?php }//endif?>
  
</body>
</html>