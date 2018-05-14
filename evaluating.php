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
        <h1 style=text-align:center; id="logo">CLOSED AUCTIONS</h1>
        </div>
    <br>
    <p>Please fill in this form to create an account.</p>
    <hr>
    <form action="evaluatesucess.php" method="post">
    <label><b>ENTER THE ITEM ID</b></label>
    <input type="text" placeholder="Enter Name" name="itemid" required/>
<div class="clearfix">
      <form action="evaluatesucess.php" method="POST">  <button type="submit" class="signupbtn">GO</button></form>
    
       <form action="admin.php" method="POST">
      <button type="submit" class="cancelbtn">Cancel</button>
            </form>
			</div>
    </form>  
    </div>
    </body>
</html> 