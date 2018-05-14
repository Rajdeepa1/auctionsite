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
        <h1 style=text-align:center; id="logo">MODIFY</h1>
        </div>
    <br>
    <p>Please fill in this form to create an account.</p>
    <hr>
    <form action="modifysucess.php" method="post">
    <label><b>ITEM ID</b></label>
    <input type="text" placeholder="Enter Name" name="itemid" required/>

    
    
	

    <label><b> NEW BID AMT</b></label>
    <input type="text" placeholder="enter bid" name="newbid" required>
    
    
     
      

        <div class="clearfix">
      <form action="modifysucess.php" method="POST">  <button type="submit" class="signupbtn">Update</button></form>
    
       <form action="modifysearch.php" method="POST">
      <button type="submit" class="cancelbtn">Cancel</button>
            </form>
        
    </div>
    </form>  
    </div>
    </body>
</html> 



