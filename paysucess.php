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
		

     $iid=$_SESSION['iid'];
	 $b=$_SESSION['id'];
      $amt=$_SESSION['amount'];
	 
	mysqli_autocommit($con,FALSE);
		
     /*$sql3 = "UPDATE item SET bid='".$b."' WHERE item_id='".$iid."'";
	 $result3=mysqli_query($con,$sql3);*/
	  $sql4 = "UPDATE item SET final_pay='".$amt."' WHERE item_id='".$iid."' ";
	 $result4=mysqli_query($con,$sql4);
	  $sql5 = "UPDATE user SET amount_got='".$amt."' WHERE user_id=(select sid from item where item_id='".$iid."')";
	 $result5=mysqli_query($con,$sql5);
       
if ( mysqli_query($con,$sql4)) {
     echo "Payment Successful";
} else {
   echo "Payment error";
 }
 mysqli_commit($con);
     mysqli_close($con);
		


        ?>
        
   </body>
</html> 