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
        >
        </div>


</form>
<?php

 $servername = "localhost";
$username = "root";
$password = "rumrum";
$dbname = "online_auction2";


// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
 
 
   $s=$_SESSION['id'];
	 $s1=$_SESSION['name'];

	 
    
		$query="SELECT item_id FROM item where bid is NULL " ;
   $result = mysqli_query($conn, $query);
 $i=0;
   //$_SESSION['item_id']=$row['item_id'] ;
   //$res=mysqli_fetch_row($result);
   //$num=mysqli_num_rows($res);
  while($row=mysqli_fetch_array($result))
 { echo "<br>";
   echo "<br>";
   //$_SESSION['iid']=$row['item_id'] ;
   $myArray = array( $row['item_id'] );
   
     echo "<li> ITEM ID " .$row['item_id'] . "</li> ";
   
   echo "<form  action='evaluating.php' method='post'>";
   //echo "<input type='hidden' name='item' value='" . $i . "' />";
   echo "<input class='z' type='submit' name='evaluate'  value='evaluate '".$i++."''> </form>";
   

 }
   
$_SESSION['iid']=$myArray;
    

   
 
 
?>
 <div class="clearfix">
	<form>
        <button type="submit" formaction="admin.php" class="signupbtn1">Go Back</button></form>
         
    </div>
  </div>
</body>
</html>
