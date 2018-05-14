 
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
        <h1 style=text-align:center; id="logo">DELETE ITEM</h1>
        </div>
    <br>
    <p>Please fill in this form to create an account.</p>
    <hr>
    <form action="deletesucess.php" method="post">
    <label><b>ITEM ID</b></label>
    <input type="text" placeholder="Enter item id" name="itemid" required/>

    
    
	

   
    
    
     
      

        <div class="clearfix">
      <form action="deletesucess.php" method="POST">  <button type="submit" class="signupbtn">Delete Item</button></form>
    
       <form action="deletesearch.php" method="POST">
      <button type="submit" class="cancelbtn">Cancel</button>
            </form>
        
    </div>
    </form>  
    </div>
    </body>
</html> 
