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
		

     $iid=$_POST['itemid'];
	 $id=$_SESSION['id'];
	 $track=$_POST['detail'];
	 
	mysqli_autocommit($con,FALSE);
		
		$sql1="SELECT final_pay from item where item_id='".$iid."' and sid='".$id."'";
		$result=mysqli_query($con,$sql1);
		$row=mysqli_fetch_array($result);
    if($row['final_pay']!=NULL)
	{
     $sql3 = "UPDATE user SET notifications='".$track."' WHERE user_id=(SELECT bid from item where item_id='".$iid."' and sid='".$id."')";
	 $result3=mysqli_query($con,$sql3);
	 
       
if ($result3) {
     echo "Details Updated";
}
} else {
   echo "Either this item has not been evaluated or Payment have not been done yet or you are not the seller";
 }
 mysqli_commit($con);
     mysqli_close($con);
		


        ?>
		<div class="clearfix">
		<form action="seller.php" method="post">
        <button type="submit" formaction="seller.php" class="signupbtn1">Go Back</button></form>
         
    </div>
        
   </body>
</html> 