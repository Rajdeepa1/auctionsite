<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <title>ADMIN</title>
</head>
    <link rel="stylesheet" type="text/css" href="createacc.css">
    <body>

    <div class="container">
    <div class="navigation">
        <h1 style=text-align:center; id="logo">ADMIN MODULE</h1>
        </div>
        <br>
        <br>
        <br>
     
                
        
        
        <form action="managebidding.php" method="post">
      <button type="submit" class="signupbtn1">VIEW USER DETAILS</button>
        </form>
        
        <form action="evaluatewinstatus.php" method="post">
      <button type="submit" class="signupbtn1">EVALUATE BIDDING RESULTS</button>
        </form>
        
        <form action="reportgeneration.php" method="post">
      <button type="submit" class="signupbtn1">VIEW FEEDBACKS</button>
	  
        </form>
        <form action="emailtry.php" method="post">
      <button type="submit" class="signupbtn1">SEND EMAIL UPDATES TO BUYER AND SELLER</button>
        </form>
		<form action="l.php" method="post">
      <button type="submit" class="signupbtn1">LOGOUT</button>
        </form>
		
        </div>
    
   </body>
</html> 