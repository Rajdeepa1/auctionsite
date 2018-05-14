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
        <h1 style=text-align:center; id="logo">ADD ITEM</h1>
        </div>
    <br>
    <p>Please fill in this form to create an account.</p>
    <hr>
    <form action="itemsucess.php" method="POST" enctype="multipart/form-data">
    <label><b>ITEM NAME</b></label>
    <input type="text" placeholder="Enter Name" name="name" required/>

    <label><b>ITEM DESCRIPTION</b></label>
    <input type="text" placeholder="Enter description" name="desc" required/>
    
    
	

    <label><b>START BID AMT</b></label>
    <input type="text" placeholder="Enter amount" name="strtamt" required>
    
    <label><b>START BID DATE</b></label>
    <input type="date" placeholder="Enter start bid date" name="startbid" required/>
    
    <label><b>END BID DATE</b></label>
    <input type="date" placeholder="Enter end bid date " name="endbid" required/>
       <br>
	   <br>
	   
    <input type="file" name="file">
	<br>
	<br>
<input type="submit" name="submit" value="Submit">
</form>
     
      

        <div class="clearfix">
        
    
       <form action="seller.php" method="POST">
      <button type="submit" class="cancelbtn">Cancel</button>
            </form>
        
    </div>
    </form>  
    </div>
    </body>
</html> 



