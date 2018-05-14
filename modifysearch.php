<?php
session_start();
?>

 

    <link rel="stylesheet" type="text/css" href="createacc.css">
    
    
    
    <div class="container">
    <div class="navigation">
        <h1 style=text-align:center; id="logo">UPDATE AMOUNT</h1>
        </div>
    <br>
    <hr>
    <hr>
	<form  action='updatebidamount.php' method='post'>
    <?php
$servername = "localhost";
$username = "root";
$password = "rumrum";
$dbname = "online_auction2";
$s=$_SESSION['id'];
// Create connection
 $conn=mysqli_connect('127.0.0.1',"root","rumrum");
     $db=mysqli_select_db($conn,"online_auction2");
$sql ="SELECT itemid,itemname,bidamt from item inner join bids on item.item_id=bids.itemid where curdate()<=end_bid and curdate()>=bid_start and bidderid='".$s."'";
$result = mysqli_query($conn, $sql);
 echo "<table border='1' align ='center'>";
    echo "<tr>";
        echo "<td>ITEM ID</td>";
        echo "<td>ITEM NAME</td>";
        echo "<td>BID AMOUNT</td>";
       
		echo "<td> MODIFY</td>";
        echo "</tr>";
		 
	
		 while($rowitem = mysqli_fetch_array($result))
    {
        echo"<tr>";
        echo "<td>" . $rowitem['itemid'] . "</td>";
        echo "<td>" . $rowitem['itemname'] . "</td>";
        echo "<td>" . $rowitem['bidamt'] . "</td>";
        
      
		// echo "<td><form  action='bidforitem.php' method='post'></td>";
   //echo "<input type='hidden' name='item' value='" . $i . "' />";
   print "<td><input type=\"submit\" name=\"submit\" value=\"Submit\"></input></td>";
        echo "</tr>";
    }
    echo"</table>";

// Check connection
/*if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}*/ 

//$sql = "SELECT sid, item_id,item_name,item_desc,min_amt,bid_start,end_bid FROM item ";
//$result = mysqli_query($conn, $sql)

  //if(mysqli_num_rows($result) > 0) {
   // echo "<table><tr><th>SID</th><th>ITEM ID</th><th>ITEM NAME</th><th>DESCRIPTION</th><th>MIN AMOUNT</th><th>START DATE</th><th>END DATE</th><th>BUYER ID</th><th>AMOUNT OFFERED</th></tr>";
    // output data of each row
    //while($row = mysqli_fetch_row($result)) {
        //echo "<tr><td>".$row["sid"]."</td><td>".$row["item_id"]." ".$row["item_name"]."".$row["item_desc"]."".$row["min_amt"]."".$row["bid_start"]."".$row["end_bid"]."".$row["buyerid"]."".$row["bidamt"]."</td></tr>";
   // }
    //echo "</table>";
/*} else {
    echo "0 results";
}*/
 mysqli_close($conn);
?>

    
    <div class="clearfix">
        <button type="submit" formaction="buyer.php" class="signupbtn1">Go Back</button></form>
         
    </div>
  </div>
    </form>
