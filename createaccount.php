
<!DOCTYPE html>
<html>
<head>
  <title>ONLINE AUCTION SYSTEM</title>
    
    <link rel="stylesheet" type="text/css" href="createacc.css">
    </head>
    <body>

    <div class="container">
    <div class="navigation">
        <h1 style=text-align:center; id="logo">SIGN UP</h1>
        </div>
    <br>
    <p>Please fill in this form to create an account.</p>
    <hr>
    <form action="loginsucess.php" method="post">
    <label><b>Name</b></label>
    <input type="text" placeholder="Enter Name" name="names" required/>

    <label><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required/>
    
    <label><b>Password</b></label>
    
	<input type="password" id="psw" name="psw" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
	

    <label><b>Repeat Password</b></label>
    <input type="password" placeholder="Repeat Password" name="psw-repeat" required>
    
    <label><b>Company</b></label>
    <input type="text" placeholder="Enter Company Name" name="company" required/>
    
    <label><b>Address</b></label>
    <input type="text" placeholder="Enter Address " name="address" required/>
        
     
      <div id="message">
  <h3>Password must contain the following:</h3>
  <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
  <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
  <p id="number" class="invalid">A <b>number</b></p>
  <p id="length" class="invalid">Minimum <b>8 characters</b></p>
</div>
<script>
var myInput = document.getElementById("psw");
var letter = document.getElementById("letter");
var capital = document.getElementById("capital");
var number = document.getElementById("number");
var length = document.getElementById("length");

// When the user clicks on the password field, show the message box
myInput.onfocus = function() {
  document.getElementById("message").style.display = "block";
}

// When the user clicks outside of the password field, hide the message box
myInput.onblur = function() {
  document.getElementById("message").style.display = "none";
}

// When the user starts to type something inside the password field
myInput.onkeyup = function() {
  // Validate lowercase letters
  var lowerCaseLetters = /[a-z]/g;
  if(myInput.value.match(lowerCaseLetters)) { 
    letter.classList.remove("invalid");
    letter.classList.add("valid");
  } else {
    letter.classList.remove("valid");
    letter.classList.add("invalid");
}

  // Validate capital letters
  var upperCaseLetters = /[A-Z]/g;
  if(myInput.value.match(upperCaseLetters)) { 
    capital.classList.remove("invalid");
    capital.classList.add("valid");
  } else {
    capital.classList.remove("valid");
    capital.classList.add("invalid");
  }

  // Validate numbers
  var numbers = /[0-9]/g;
  if(myInput.value.match(numbers)) { 
    number.classList.remove("invalid");
    number.classList.add("valid");
  } else {
    number.classList.remove("valid");
    number.classList.add("invalid");
  }

  // Validate length
  if(myInput.value.length >= 8) {
    length.classList.remove("invalid");
    length.classList.add("valid");
  } else {
    length.classList.remove("valid");
    length.classList.add("invalid");
  }
}
</script>
    <p>By creating an account you agree to our <a href="termscondition.html" style="color:dodgerblue">Terms & Privacy</a>.</p>

        <div class="clearfix">
        <button type="submit" class="signupbtn">Sign Up</button>
    
       <form action="3.php" method="POST">
      <button type="submit" class="cancelbtn">Cancel</button>
            </form>
        
    </div>
    </form>  
    </div>
    </body>
</html> 



