<?php
session_start();
?>


<!DOCTYPE html>
<html>
<head>
  <title>ONLINE AUCTION SYSTEM</title>
</head>
    <link rel="stylesheet" type="text/css" href="createacc.css">
    <body>
	
	<div class="container">
    <div class="navigation">
        <h1 style=text-align:center; id="logo">NOTIFICATION</h1>
        </div>
		<br>
		<br>
		<br>
		<p>
	 <form action="payforitem.php" method="post">
  <?php
  
       $con=mysqli_connect('127.0.0.1',"root","rumrum");
$db=mysqli_select_db($con,"online_auction2");
      
   

       /* if (!isset($_POST['productname'])||!isset($_POST['productdesc'])||!isset($_POST['startbidamt'])||!isset($_POST['strtdate'])||!isset($_POST['enddate']))
        {
            echo "<p> You have not entered all details.<br/>
             try again. </p>";
             exit;
        }/*/
		

        
		$id=$_SESSION['id'];
		// $b=$_SESSION['bidder'];
	// $id=$_SESSION['iid'];
	 $amt=$_SESSION['amount'];
		//echo "'".$id."'";
	 
		mysqli_autocommit($con,FALSE);
		
		$sql2="SELECT notifications from user where user_id='".$id."'";
		
		$result2=mysqli_query($con,$sql2);
		
		$row2=mysqli_fetch_array($result2);
		echo "<center>".$row2['notifications']."</center>"
		?>
		
		<div class="clearfix">
        <button type="submit" formaction="seller.php" class="signupbtn1">Go Back</button></form>
         
    </div>
  </div>
    </form>