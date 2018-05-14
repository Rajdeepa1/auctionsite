<?php
//if "email" variable is filled out, send email
  
  
  //Email information
  $admin_email = "chakrabartyrajdeepa11@gmail.com";
  $email = "rajdeepa.chakrabarty2016@vitstudent.ac.in";
  $subject = "check";
  $comment = "hi";
  
  //send email
 // mail($admin_email, $subject, $comment, "From:" . $email);
  
  //Email response
  echo "Thank you for contacting us!";
  
  
  //if "email" variable is not filled out, display the form
 
?>

 <form method="post">

 <center>  To:<input name="email" type="text" /></center>
  <br>
  <br>
  Subject:  <input name="subject" type="text" />
  <br>
  <br>

  Message:

  <textarea name="comment" rows="15" cols="40"></textarea>
  <br>
  <br>

  <input type="submit" value="Submit" />
  </form>
  
<?php
  
?>