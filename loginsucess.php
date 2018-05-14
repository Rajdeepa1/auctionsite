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
       $n=$_POST['names'];
        $e=$_POST['email'];
        $p=$_POST['psw'];
        $c=$_POST['company'];
        $a=$_POST['address'];
        $sql="select * from user where name='".$n."'";
		$result=mysqli_query($con,$sql);
		$row=mysqli_fetch_array($result);
      if($row!=NULL)
	  {
		  echo "Username exists. Try a different username";
		  exit;
		  
	  }
	  
        if (!isset($_POST['names'])||($_POST['psw']!=($_POST['psw-repeat']))||!isset($_POST['email'])||!isset($_POST['psw'])||!isset($_POST['psw-repeat'])||!isset($_POST['company'])||!isset($_POST['address']))
        {
            echo "<p> You have not entered all details.<br/>
             try again. </p>";
             exit;
        }
		
         

           if (filter_var($e, FILTER_VALIDATE_EMAIL)) {
  
            } else {
            echo("not a valid email address");
            exit;
             }

       
		mysqli_autocommit($con,FALSE);

      
	   $sql = "INSERT INTO user (name,password,company,address,email) VALUES  ('".$n."','".$p."','".$c."','".$a."','".$e."')";
       
if (mysqli_query($con, $sql)) {
    //echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($con);
}
$sql2="SELECT user_id from user where name ='".$n."'";
$result2=mysqli_query($con,$sql2);
$row2=mysqli_fetch_array($result2);
echo "Your User Id is ".$row2['user_id']."   Remember your id for further access";
 mysqli_commit($con);
     mysqli_close($con);
	 

        ?>
        <p style="text-align:center;" id=text>Welcome
        
       
            
        </p>
        <br>
      <form action="l.php" method="post">
      <button type="submit" class="signupbtn1">Go to login</button>
        </form>
        
        <form action="3.php" method="post">
      <button type="submit" class="signupbtn1">Go back to Home Page</button>
        </form>
        
   </body>
</html> 