<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <title>BUYER</title>
</head>
    <link rel="stylesheet" type="text/css" href="createacc.css">
    <body>

    <div class="container">
    <div class="navigation">
        <h1 style=text-align:center; id="logo">BUYER MODULE</h1>
        </div>
        <br>
        <br>
        <br>
        <form action="search.php" method="post">
      <button type="submit" class="signupbtn1">VIEW AVAILABLE ITEM</button>
        </form>
        
        
        
        <form action="paysearch.php" method="post">
      <button type="submit" class="signupbtn1">PAY FOR AN ITEM</button>
        </form>
        
        <form action="modifysearch.php" method="post">
      <button type="submit" class="signupbtn1">UPDATE BID AMOUNT</button>
        </form>
        
        <form action="buyernotification.php" method="post">
      <button type="submit" class="signupbtn1">NOTIFICATION</button>
        </form>
        
        <form action="buyerfeedback.php" method="post">
      <button type="submit" class="signupbtn1">GIVE FEEDBACK</button>
        </form>
           <form action="l.php" method="post">
      <button type="submit" class="signupbtn1">LOGOUT</button>
        </form>
        
        </div>
    
   </body>
</html> 