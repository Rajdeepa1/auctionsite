  <?php
session_start();
   
?> 


<form action="paysucess.php" type=POST> 

  
    <link rel="stylesheet" type="text/css" href="createacc.css">
    
    
    
    <div class="container">
    <div class="navigation">
        <h1 style=text-align:center; id="logo">PAY FOR AN ITEM</h1>
        </div>
    <br>
    <hr>
    <hr>
	<?php
	 $con=mysqli_connect('127.0.0.1',"root","rumrum");
$db=mysqli_select_db($con,"online_auction2");
      
   

       /* if (!isset($_POST['productname'])||!isset($_POST['productdesc'])||!isset($_POST['startbidamt'])||!isset($_POST['strtdate'])||!isset($_POST['enddate']))
        {
            echo "<p> You have not entered all details.<br/>
             try again. </p>";
             exit;
        }/*/
		
  $b=$_SESSION['id'];
        $id=$_POST['item_id'] ;
		$_SESSION['iid']=$id;
		//echo "'".$id."'";
	 
		mysqli_autocommit($con,FALSE);
		$sql1="SELECT max(bidamt),final_pay from bids inner join item on item.item_id=bids.itemid where itemid='".$id."' and bidderid='".$b."' and bid='".$b."'";
		//$sql2="SELECT sid from item where item_id='".$id."'";
		$result=mysqli_query($con,$sql1);
		//$result2=mysqli_query($con,$sql2);
		$row1=mysqli_fetch_array($result);
		//$row2=mysqli_fetch_array($result2);
		$count=mysqli_num_rows($result);
     //$sql3 = "UPDATE item SET bid='".$row1['bidderid']."'";
	 //$result3=mysqli_query($con,$sql3);
       
if ($row1['max(bidamt)']!=NULL && $row1['final_pay']==NULL) {
    echo "<li>Amount for transaction: ".$row1['max(bidamt)']."</li>";
} else {
   echo "You have not placed bid for this item.Check again or you have already paid for the item";
   exit;
 }
 mysqli_commit($con);
     mysqli_close($con);
		/*$_SESSION['sid']=$row2['sid'];
        $_SESSION['bidder']=$row1['bidderid'];*/
     $_SESSION['amount']=$row1['max(bidamt)'];		


	
	?>
     <label><b>BANK ACCOUNT NAME</b></label>
    <input type="text" placeholder="Enter the bank account name" name='bname' >
	<label><b>BANK ACCOUNT TYPE</b></label>
    <input type="text" placeholder="Enter the bank account type" name='btype' >
	<label><b>CARD NUMBER TYPE</b></label>
    <input type="text" placeholder="Enter the bank account type" name='btype' >
	<label><b>CVV</b></label>
    <input type="text" placeholder="Enter the bank account type" name='btype' >
        
   
    <div class="clearfix">
	         <button type="submit" class="signupbtn">Pay Amount</button></form>
        <form action="buyer.php" type=POST><button type="submit" class="cancelbtn">Cancel</button></form>

    </div>
  </div>

    
	 