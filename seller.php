<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
  <title>SELLER</title>
</head>
    <link rel="stylesheet" type="text/css" href="createacc.css">
    <body>

    <div class="container">
    <div class="navigation">
        <h1 style=text-align:center; id="logo">SELLER MODULE</h1>
        </div>
        <br>
        <br>
        <br>
        <form action="additem.php" method="post">
      <button type="submit" class="signupbtn1">ADD ITEM</button>
        </form>
          <form action="viewitem.php" method="post">
      <button type="submit" class="signupbtn1">VIEW ITEM</button>
        </form>
        
        <form action="sellerfeedback.php" method="post">
      <button type="submit" class="signupbtn1">GIVE FEEDBACK</button>
        </form>
        
        <form action="deletesearch.php" method="post">
      <button type="submit" class="signupbtn1">DELETE ITEM</button>
        </form>
        <form action="l.php" method="post">
      <button type="submit" class="signupbtn1">LOGOUT</button>
        </form>
        
                
        <form action="sellernotification.php" method="post">
      <button type="submit" class="signupbtn1">NOTIFICATION</button>
        </form>
        <form action="sellertrack.php" method="post">
      <button type="submit" class="signupbtn1">PROVIDE TRACKING DETAILS</button>
        </form>
        </div>
    
   </body>
</html> 