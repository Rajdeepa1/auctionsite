<?php
session_start();
?>


<html>
<head>
<style type="text/css">
<link rel="stylesheet" type="text/css" href="createacc.css">
 input{
 border:1px solid olive;
 border-radius:5px;
 }
 h1{
  color:darkgreen;
  font-size:22px;
  text-align:center;
 }
</style>
</head>
<body>
<link rel="stylesheet" type="text/css" href="createacc.css">
 <div class="container">
    <div class="navigation">
        <h1 style=text-align:center; id="logo">LOGIN</h1>
        </div>
<h1>Login<h1>
<form action='#' method='post'>
<table cellspacing='5' align='center'>
<tr><td>User name:</td><td><input type='text' name='name'/></td></tr>
<tr><td>User id:</td><td><input type='text' name='id'/></td></tr>
<tr><td>Password:</td><td><input type='password' name='pwd'/></td></tr>
<tr><td></td><td><input type='submit' name='submit' value='Submit'/></td></tr>
</table>

</form>
<?php

if(isset($_POST['submit']))
{
 $servername = "localhost";
$username = "root";
$password = "rumrum";
$dbname = "online_auction2";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
 $name=$_POST['name'];
 $id=$_POST['id'];
 $pwd=$_POST['pwd'];
 if($name!=''&& $pwd!='')
 {
   //$query="SELECT * FROM user WHERE name = '".$name."' and password ='".$pwd."'" ;
   //$result = mysqli_query($conn, $query);
   //$res=mysqli_fetch_row($result);
   //if($res)
   //{
    //$_SESSION['name']=$name;
	

    if (ctype_alpha($id)) {
		$query="SELECT * FROM admin WHERE admin_name = '".$name."' and password ='".$pwd."'" ;
   $result = mysqli_query($conn, $query);
   $res=mysqli_fetch_row($result);
   if($res)
   {
      $_SESSION['id']=$id;
	  $_SESSION['name']=$name;
        header('location:admin.php');
   }
   else
   {
    echo'You entered username or password is incorrect';
   
    } 
	}else {
		$query="SELECT * FROM user WHERE name = '".$name."' and user_id='".$id."' and password ='".$pwd."'" ;
   $result = mysqli_query($conn, $query);
   $res=mysqli_fetch_array($result);
   if($res!=NULL)
   {
      $_SESSION['id']=$id;
	  $_SESSION['name']=$name;
        header('location:type.php');
   }
    else
   {
    echo'You entered username or password is incorrect';
   }    
    
}
    
   }
   
 }
 else
 {
  echo'Enter both username and password';
 }

?>

<div class="clearfix">
<form>
        <button type="submit" formaction="3.php" class="signupbtn1">Home Page</button></form>
         
    
  </div>
   
</body>
</html>