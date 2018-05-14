<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <title>ONLINE AUCTION SYSTEM</title>
    
    <link rel="stylesheet" type="text/css" href="createacc.css">
    </head>
    <body>

    <div class="container">
    <div class="navigation">
        <h1 style=text-align:center; id="logo">BID FOR ITEM</h1>
        </div>
    <br>
    <p>Please fill in this form to create an account.</p>
    <hr>
    <form action="bidsucess" method="post">
    <label><b>ITEM ID</b></label>
    <input type="text" placeholder="Enter Name" name="itemid" required/>

    
    
	

    <label><b>BID AMT</b></label>
    <input type="text" placeholder="enter bid" name="bid" >
    
    
     
      

        <div class="clearfix">
		
        <button type="submit" class="signupbtn1">Place bid</button>
		
		
		<button type="submit" formaction="viewbid.php">View Bids</button></form>
    
      <br><br> <form action="buyer.php" method="POST">
      <button type="submit" class="signupbtn1">Cancel</button>
            </form>
        
    </div>
   
    </div>
    </body>
</html> 



