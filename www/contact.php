<?php include 'top.php'; ?>

<!doctype html>

<html lang="en">
       
  <head>
    <title>Contact Me | Melat's Film Guide</title>
  </head>

  <style>
      
    body {
        background-image: url('images/backgrounf.jpg'); }
    
  </style>
  
  <body>
<br>
<br>
<br>
<br>
      
<?php
   
$firstnameErr =  $lastnameErr = $emailErr = $phoneErr = "";
$firstname = $lastname = $email = $phone = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["firstname"])) {
    $firstnameErr = "First Name is required";
  } else {
    $firstname = test_input($_POST["firstname"]);
    if (!preg_match("/^[a-zA-Z]{3,16}$/",$firstname)) {
      $firstnameErr = "Invalid Input for First Name";
    }
  }
  
  if (empty($_POST["lastname"])) {
    $lastnameErr = "Last Name is required";
  } else {
    $lastname = test_input($_POST["lastname"]);
    if (!preg_match("/^[a-zA-Z]{3,16}$/",$lastname)) {
      $lastnameErr = "Invalid Input for Last Name";
    }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid Email Format";
    }
  } 
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
    <div class="header">
      <h1 class="title2">Contact Me</h1>
    </div>
     
    <form name="form1" id="form1"  action="formprocessor.php" method=”POST” enctype=”multipart/form-data”>
       
       <fieldset>

        <div class="formtitle">
          <h2> FILL OUT THIS FORM TO CONTACT ME WITH ANY QUESTIONS! </h2> <br>
        </div>
           
           <br>
           <br>

        <div class="formitem">
          <label for="firstname">FIRST NAME: </label>
          <div class="errorfirstname"> </div>
          <input type="text" name="firstname" id="firstname" value="<?php echo $firstname;?>">
        </div>

        <div class="formitem">
          <label for="lastname">LAST NAME: </label>
          <div class="errorlastname"> </div>
          <input type="text" name="lastname" id="lastname">
        </div>
           
        <div class="formitem">
          <label for="email">EMAIL: </label>
          <div class="erroremail"></div>
          <input type="email" id="email" name="email">
        </div>
      
        <div class="button">
          <a href="#send">
            <input type="submit" name="submit" id="submit" value="Submit">
          </a>
        </div>  

        <div id="errors" class="error"></div>

      </fieldset>
    </form>
      
<span class="error">* <?php echo $firstnameErr;?></span>
<br>
<span class="error">* <?php echo $lastnameErr;?></span>
<br>
<span class="error">* <?php echo $emailErr;?></span>
<br>

<?php include 'bottom.php';?>
      
  </body>
    
</html>

