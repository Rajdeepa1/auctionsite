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
		

        $name=$_POST['name'];
     $desc=$_POST['desc'];
     $amt=$_POST['strtamt'];
     $start=$_POST['startbid'];
     $end=$_POST['endbid'];
	 $s=$_SESSION['id'];
	 
		mysqli_autocommit($con,FALSE);
     $sql = "INSERT INTO item (item_name,item_desc,min_amt,bid_start,end_bid,sid) VALUES  ('".$name."','".$desc."','".$amt."','".$start."','".$end."','".$s."')";
       $sql2="select item_id from item where item_name='".$name."' and item_desc='".$desc."' and sid='".$s."'";
	   $result=mysqli_query($con,$sql2);
	   $row=mysqli_fetch_array($result);
if (mysqli_query($con, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($con);
}
$file = $_FILES['file'];
$file_name = $file['name'];
$file_type = $file ['type'];
$file_size = $file ['size'];
$file_path = $file ['tmp_name'];

//Restriction to the image. You can upload any types of file for example video file, mp3 file, .doc or .pdf just mention here in OR condition. 

if($file_name!="" && ($file_type="image/jpeg"||$file_type="image/png"||$file_type="image/gif"))
{
//if(move_uploaded_file ($file_path,'images/'.$file_name))//"images" is just a folder name here we will load the file.
$query="update item set photo='".$file_name."' where item_id='".$row['item_id']."'";
$result=mysqli_query($con,$query);


 
if($result)
{
    echo "  Image Uploaded";
}
else{
	echo "error in uploading image";
}
}
$sql="SELECT item_id from item where item_name='".$name."'";
$result1=mysqli_query($con,$sql);
$row1=mysqli_fetch_array($result1);
echo "<center> Your item id is : ".$row1['item_id']." Keep a note of it for further access</center>";
 
 mysqli_commit($con);
     mysqli_close($con);
		 


        ?>
        <p style="text-align:center;" id=text>Thank You
        
       
            
        </p>
        <br>
     
        
        <form action="seller.php" method="post">
      <button type="submit" class="signupbtn1">Go back</button>
        </form>
        
   </body>
</html> 