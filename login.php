  <!DOCTYPE html>
<html>
<head>
  <title>ONLINE AUCTION SYSTEM</title>
    
    <link rel="stylesheet" type="text/css" href="createacc.css">
    </head>
    <body>

   

    <link rel="stylesheet" type="text/css" href="createacc.css">
    
    
    
    <div class="container">
    <div class="navigation">
        <h1 style=text-align:center; id="logo">LOGIN</h1>
        </div>
    <br>
    <hr>
    <hr>
	<form action="type.php" method="post">
	
    <label><b>User Id</b></label>
    <input type="text" placeholder="Enter User id" name='userid' required/>

    <label><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name='psw' required/>
        
    

<div class="clearfix">
        <form action="3.php" type=REQUEST><button type="submit" class="cancelbtn">Cancel</button></form>
         <form action="type.php" type=POST><button type="submit" class="signupbtn">Login</button>
    </div>
  
</div>
</form>  
    </div>
	<?php
session_start();
if(isset($_POST['submit']))
{
 $servername = "localhost";
$username = "root";
$password = "rumrum";
$dbname = "online_auction2";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
 $name=$_POST['userid'];
 $pwd=$_POST['psw'];
 if($name!=''&& $pwd!='')
 {
   $query="SELECT * FROM user WHERE name = '".$name."' and password ='".$pwd."'" ;
   $result = mysqli_query($conn, $query);
   $res=mysqli_fetch_row($result);
   if($res)
   {
    $_SESSION['name']=$name;
    header('location:welcome.php');
   }
   else
   {
    echo'You entered username or password is incorrect';
   }
 }
 else
 {
  echo'Enter both username and password';
 }
}
?>
    </body>
</html> 
