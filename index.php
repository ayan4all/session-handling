<?php
session_start();
$errorMsg = "";
$validUser = false;
$_SESSION["login"] = false;
if(isset($_POST["sub"])) {
  $validUser = $_POST["username"] == "admin" && $_POST["password"] == "password";
  if(!$validUser) $errorMsg = "Invalid username or password.";
  else $_SESSION["login"] = true;
}
if($validUser) {
   $_SESSION["username"] =  $_POST["username"];	
   header("Location: ./home.php"); die();
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="content-type" content="text/html;charset=utf-8" />
  <title>Login</title>
</head>
<body>
  <form name="input" action="" method="post">
    <p>Welcome to login page </p>
    <p><label for="username">Username:</label><input type="text" value="<?php if(isset($_POST["username"])) echo $_POST["username"]; ?>" id="username" name="username" /></p>
    <p><label for="password">Password:</label><input type="password" value="" id="password" name="password" /></p>
    <div class="error"><?php echo $errorMsg; ?></div>
    <input type="submit" value="Login" name="sub" />
  </form>
</body>
</html>
