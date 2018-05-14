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
  <?php
  
       $con=mysqli_connect('127.0.0.1',"root","rumrum");
     $db=mysqli_select_db($con,"online_auction2");
      
   

       /* if (!isset($_POST['productname'])||!isset($_POST['productdesc'])||!isset($_POST['startbidamt'])||!isset($_POST['strtdate'])||!isset($_POST['enddate']))
        {
            echo "<p> You have not entered all details.<br/>
             try again. </p>";
             exit;
        }/*/
		

     $n=$_POST['notify'];
	 echo "'".$n."'" ;
     $b=$_SESSION['bidder'];
	 $id=$_SESSION['iid'];
	 $amt=$_SESSION['amount'];
	$sql3 = "UPDATE user SET notifications='".$n."' WHERE user_id='".$b."' ";
     $result=mysqli_query($con,$sql3);
	 if (mysqli_query($con, $sql3)) {
    //echo  "inserted";
} else {
    echo "Error: " . $sql3 . "<br>" . mysqli_error($con);
}
 mysqli_commit($con);
  mysqli_close($con);
	 
	 
	  
	  
        ?>
		