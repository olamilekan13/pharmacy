<?php
include_once 'connect_db.php';
session_start();

if(isset($_POST['submit'])){
$username=$_POST['username'];
$password=$_POST['password'];
$position=$_POST['position'];
switch($position){
case 'Admin':
$result=("SELECT * FROM admin WHERE username='$username' AND password='$password'");
$run_Sql = mysqli_query($con, $result);
$row=mysqli_fetch_array($run_Sql);

if($row>0){
	session_start();
	$_SESSION['admin_id']=$row[0];
	$_SESSION['username']=$row[1];
	$_SESSION['password']=$row[2];
	header("location:http://".$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF'])."/pharmacist.php");

 }
 else
{
$message="<font color=red>Invalid login Try Again</font>";
}
break;
case 'Pharmacist':
$result=("SELECT * FROM pharmacist WHERE username='$username' AND password='$password'");
$run_Sql = mysqli_query($con, $result);
$row=mysqli_fetch_array($run_Sql);
if($row>0){
session_start();
$_SESSION['pharmacist_id']=$row[0];
$_SESSION['first_name']=$row[1];
$_SESSION['last_name']=$row[2];
$_SESSION['staff_id']=$row[3];
$_SESSION['username']=$row[4];
header("location:http://".$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF'])."/pharmacist.php");
}else{
$message="<font color=red>Invalid login Try Again</font>";
}
break;
case 'Cashier':
$result=("SELECT * FROM cashier WHERE username='$username' AND password='$password'");
$run_Sql = mysqli_query($con, $result);
$row=mysqli_fetch_array($run_Sql);
if($row>0){
session_start();
$_SESSION['cashier_id']=$row[0];
$_SESSION['first_name']=$row[1];
$_SESSION['last_name']=$row[2];
$_SESSION['staff_id']=$row[3];
$_SESSION['username']=$row[4];
header("location:http://".$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF'])."/cashier.php");
}else{
$message="<font color=red>Invalid login Try Again</font>";
}
break;
case 'Manager':
$result=("SELECT * FROM manager WHERE username='$username' AND password='$password'");
$run_Sql = mysqli_query($con, $result);
$row=mysqli_fetch_array($run_Sql);

if($row>0){
session_start();
$_SESSION['manager_id']=$row[0];
$_SESSION['first_name']=$row[1];
$_SESSION['last_name']=$row[2];
$_SESSION['staff_id']=$row[3];
$_SESSION['username']=$row[4];
header("location:http://".$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF'])."/manager.php");
}else{
$message="<font color=red>Invalid login Try Again</font>";
}
break;
}}
echo <<<LOGIN
<!DOCTYPE html>
<html>
<head>
<title>Pharmacy Sys</title>
<link rel="stylesheet" type="text/css" href="style/mystyle_login.css">
<style>
#content {
height: auto;
}
#main{
height: auto;}
</style>
</head>
<body>
<div id="content">
<div id="header">
<h1><img src="images/hd_logo.jpg">Pharmacy Sys</h1>
</div>
<div id="main">

  <section class="container">
  
     <div class="login">
	 <img src="images/hd_logo.jpg">
      <h1>Login here</h1>
	  $message
      <form method="post" action="index.php">
		 <p><input type="text" name="username" value="" placeholder="Username"></p>
        <p><input type="password" name="password" value="" placeholder="Password"></p>
		<p><select name="position">
		<option>--Select position--</option>
			<option>Admin</option>
			<option>Pharmacist</option>
			<option>Cashier</option>
			<option>Manager</option>
			</select></p>
        <p class="submit"><input type="submit" name="submit" value="Login"></p>
      </form>
    </div>
    </section>
</div>
<div id="footer" align="Center"> Pharmacy Sys 2013. Copyright All Rights Reserved</div>
</div>
</body>
</html>
LOGIN;
?>
