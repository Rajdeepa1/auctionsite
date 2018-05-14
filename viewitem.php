<?php
session_start();
?>

 <form action="seller.php" type=POST> 

    <link rel="stylesheet" type="text/css" href="createacc.css">
    
    
    
    <div class="container">
    <div class="navigation">
        <h1 style=text-align:center; id="logo">VIEW ITEM</h1>
        </div>
    <br>
    <hr>
    <hr>
    <?php
$servername = "localhost";
$username = "root";
$password = "rumrum";
$dbname = "online_auction2";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
$s=$_SESSION['id'];
$s1=$_SESSION['name'];
$sql ="SELECT item_name,item_id,biddername,bidderid,bidamt FROM item INNER JOIN bids ON item.item_id=bids.itemid WHERE end_bid>= curdate() and bid_start<=curdate() and sid='".$s."' ORDER BY bidamt desc";
$result = mysqli_query($conn, $sql);
$sql1="SELECT item_id,item_name,bid,final_pay from item where sid='".$s."' and bid is not null";
$result1=mysqli_query($conn,$sql1);
 echo "<table border='1' align ='center'>";
    echo "<tr>";
        echo "<td>ITEM NAME</td>";
        echo "<td>ITEM ID</td>";
        echo "<td>BIDDER NAME</td>";
        echo "<td>BIDDER ID</td>";
        echo "<td>BID AMOUNT</td>";
		
        
        
	
		 while($rowitem = mysqli_fetch_array($result))
    {
        echo"<tr>";
        echo "<td>" . $rowitem['item_name'] . "</td>";
        echo "<td>" . $rowitem['item_id'] . "</td>";
        echo "<td>" . $rowitem['biddername'] . "</td>";
        echo "<td>" . $rowitem['bidderid'] . "</td>";
        echo "<td>" . $rowitem['bidamt'] . "</td>";
        
        echo "</tr>";
    }
    echo"</table>";
	echo "<br>";
	echo "<br>";
	echo "<br>";
if(mysqli_query($conn,$sql1))
{
	echo "</tr>";
		echo "<table border='1' align ='center'>";
    echo "<tr>";
        echo "<td>ITEM NAME</td>";
        echo "<td>ITEM ID</td>";
        
        echo "<td>WINNER ID</td>";
		echo "<td>AMOUNT GOT</td>";
		echo "</tr>";
		while($rowitem2 = mysqli_fetch_array($result1))
    {
        echo"<tr>";
        echo "<td>" . $rowitem2['item_name'] . "</td>";
        echo "<td>" . $rowitem2['item_id'] . "</td>";
        echo "<td>" . $rowitem2['bid'] . "</td>";
        
        echo "<td>" . $rowitem2['final_pay'] . "</td>";
        
        echo "</tr>";
    }
    echo"</table>";
}

 mysqli_close($conn);
?>
    
    <div class="clearfix">
        <form action="seller.php" type=POST><button type="submit" class="signupbtn1">Go Back</button></form>
         
    </div>
  </div>
    </form>
