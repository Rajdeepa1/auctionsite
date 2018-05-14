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
		

        $id=$_POST['itemid'] ;
		$_SESSION['iid']=$id;
		echo "'".$id."'";
	 
		mysqli_autocommit($con,FALSE);
		$sql1="SELECT bidderid,biddername,bidamt from bids where itemid='".$id."' and bidamt=(SELECT MAX(bidamt) FROM bids where itemid='".$id."')";
		$sql2="SELECT sid from item where item_id='".$id."'";
		$result=mysqli_query($con,$sql1);
		$result2=mysqli_query($con,$sql2);
		$row1=mysqli_fetch_array($result);
		$row2=mysqli_fetch_array($result2);
		$count=mysqli_num_rows($result);
     $sql3 = "UPDATE item SET bid='".$row1['bidderid']."' where item_id='".$id."'";
	 $result3=mysqli_query($con,$sql3);
	
       
if ($count>0) {
    echo "<li>Winner is buyer: Name ".$row1['biddername']." Id: ".$row1['bidderid']." Amount is:".$row1['bidamt']."</li>";
} else {
   echo "No one has placed a bid";
 }
 mysqli_commit($con);
     mysqli_close($con);
		$_SESSION['sid']=$row2['sid'];
        $_SESSION['bidder']=$row1['bidderid'];
     $_SESSION['amount']=$row1['bidamt'];		


        ?>
		
<form action="notifysucess1.php" method="post">
        
      <br><br> <label><b>ENTER NOTIFICATION FOR BIDDER</b></label>
   <input type="text" placeholder="Enter notification" name='notify'/>
            
       
        <br>
     
      <button type="submit" class="signupbtn1">Notify bidder</button>
        
         
       <label><b>ENTER NOTIFICATION FOR SELLER</b></label>
    <input type="text" placeholder="Enter notification" name='notify1'>
            
       
        <br>
      
      <button type="submit" formaction="notifysucess2" class="signupbtn1">Notify seller</button>
        
        
      <button type="submit" formaction= "evaluatewinstatus.php" class="signupbtn1">Go back to Home Page</button>
        </form>
   </form>  
   </body>
</html> 