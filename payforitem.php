  <?php
session_start();
    $b=$_SESSION['id'];
	 
	 
?> 


   

  
    <link rel="stylesheet" type="text/css" href="createacc.css">
    
    
    
    <div class="container">
    <div class="navigation">
        <h1 style=text-align:center; id="logo">PAY FOR AN ITEM</h1>
        </div>
    <br>
    <hr>
    <hr>
	<form action="payitem2.php" method=POST> 
     <label><b>Item Id</b></label>
    <input type="text" placeholder="Enter the bank account name" name="item_id">
        
   
    <div class="clearfix">
	         <button type="submit" class="signupbtn1">Pay Amount</button></form>
        <form action="buyer.php" type=POST><button type="submit" class="signupbtn1">Cancel</button></form>

    </div>
  </div>

    
