<?php
session_start();
 
	 
	 
?> 


   

  
    <link rel="stylesheet" type="text/css" href="createacc.css">
    
    
    
    <div class="container">
    <div class="navigation">
        <h1 style=text-align:center; id="logo">PAY FOR AN ITEM</h1>
        </div>
    <br>
    <hr>
    <hr>
	<form action="viewitems.php" method=POST> 
     <label><b>Item Category</b></label>
    <input type="text" placeholder="Enter few letters" name="item_name">
        
   
    <div class="clearfix">
	         <button type="submit" class="signupbtn">Search</button></form>
			 <form action="viewitems1.php" type=POST><button type="submit" class="signupbtn1">View All</button></form>
        <form action="buyer.php" type=POST><button type="submit" class="signupbtn1">Cancel</button></form>

    </div>
  </div>

    
