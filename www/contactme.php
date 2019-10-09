<!--<?php
if($_POST["message"]) {
    mail("melatassefaab@gmail.com", "Form to email message", $_POST["message"], "From: melatsfilmguide@email.address");
}
? -->

<!doctype html>

<html lang="en">

  <head>

    <!-- Author: Melat A Ali -->
    <!-- Project: Assignment 3 -->

    <title>Contact Me | Melat's Film Guide</title>
    <meta charset=”utf-8”>
    <link rel="stylesheet" href="css/style.css">
    <link rel='icon' href='http://ali8.cs321.simmons.edu/images/favicon.ico' type='image/x-icon'/ >

    <!--Favicon: https://www.101computing.net/html-how-to-add-a-favicon/
    https://www.iconfinder.com/icons/1298806/action_design_movie_process_round_icon-->

  </head>

  <body>

    <div class="header">
      <h1 class="title2">Contact Me</h1>
    </div>

    <div class="menu">
      <ul>
      <li><a href="index.html">Home</a></li>
      <li class="drop1">
        <a href="comedy.html" class="drop2">Comedy</a>
        <div class="drop3">
          <a href="movies\thisistheend.html">This Is The End</a>
          <a href="movies\theinterview.html">The Interview</a>
          <a href="movies\thedictator.html">The Dictator</a>
          <a href="movies\amelie.html">Amelie</a>
        </div>
      <li class="drop1">
        <a href="drama.html" class="drop2">Drama</a>
        <div class="drop3">
          <a href="movies\500daysofsummer.html">500 Days of Summer</a>
          <a href="movies\thewolfofwallstreet.html">The Wolf of Wall Street</a>
          <a href="movies\panslabyrinth.html">Pan's Labyrinth</a>
          <a href="movies\underthetuscansun.html">Under The Tuscan Sun</a>

        </div>
      </li>
      <li class="drop1">
        <a href="crime.html" class="drop2">Crime</a>
        <div class="drop3">
          <a href="movies\pulpfiction.html">Pulp Fiction</a>
          <a href="movies\babydriver.html">Baby Driver</a>
          <a href="movies\trueromance.html">True Romance</a>
        </div>
      </li>
      <li class="drop1">
        <a href="thriller.html" class="drop2">Thriller</a>
        <div class="drop3">
          <a href="movies\push.html">Push</a>
          <a href="movies\nerve.html">Nerve</a>
          <a href="movies\goodtime.html">Good Time</a>
        </div>
      </li>
      <li><a href="contactme.html">Contact Me</a></li>
    </ul>
    </div>
    
    <form name="form1" id="form1">
       
       <fieldset>

        <div class="formtitle">
          <h2> FILL OUT THIS FORM TO CONTACT ME WITH ANY QUESTIONS! </h2> <br>
        </div>

        <div class="formitem">
          <label for="firstname">FIRST NAME: </label>
          <div class="errorfirstname"> </div>
          <input type="text" name="firstname" id="firstname" required>
        </div>

        <div class="formitem">
          <label for="lastname">LAST NAME: </label>
          <div class="errorlastname"> </div>
          <input type="text" name="lastname" id="lastname" required>
        </div>

        <div class="formitem">
          <label for="phone">PHONE: </label>
          <div class="errorphone"></div>
          <input type="phone" id="phone" name="phone" pattern="^\d{3}-\d{3}-\d{4}$" required>
        </div>

        <div class="formitem">
          <label for="email">EMAIL: </label>
          <div class="erroremail"></div>
          <input type="email" id="email" name="email" required>
        </div>

        <div class="formitem">
          <label for="notes">ADD A NOTE: </label>
          <div class="errornotes"></div>
          <textarea id="notes" name="notes"></textarea>
        </div>

        <div class="checkboxes">
          <label for="request">REQUEST TYPE: </label>
          <div class="errorrequest"></div>
            <input type="checkbox" name="selectall" id="selectall" > Select All<br>
          <div class="undercheckbox">
            <input type="checkbox" name="question" id="option1" value="question" > Quick Question<br>
            <input type="checkbox" name="suggestion" id="option2" value="suggestion"> Suggest a Movie<br>
            <input type="checkbox" name="feedback" id="option3" value="feedback"> Provide Feedback<br>
          </div>
        </div>

        <div class="formitem2">
          <label for="regarding">I'M A: </label>
          <div class="errorregarding"></div>
            <select name="regarding" required>
              <option value="#">Select One:</option>
              <option value="student">Student</option>
              <option value="professor">Professor</option>
              <option value="other">Other</option>
            </select>
        </div>
      
        <div class="button">
          <input type="submit" name="submit" id="submit" value="Submit">
        </div>  

        <div id="errors" class="error"></div>

      </fieldset>
    </form>

    <footer>
      <h6> 
        <img src="http://ali8.cs321.simmons.edu/images/favicon.png"> &copy 2019 CS321 | Melat's Film Guide 
      </h6>
    </footer>

  <script src="https://cdn.jsdelivr.net/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/jquery.validation/1.15.1/jquery.validate.min.js"></script>
  <script src="js/jquery.validate.js"></script>

  <script>

    $(document).ready(function() {

      //First Name Validation

      $("#firstname").on("change", function() {
        if ( $(this).val().match('^[a-zA-Z]{3,16}$') ) {
          return(true);
        } else if ( $(this).val().match("") ){
          console.log("Invalid firstname");
          $('input[name=firstname]').val("Enter a Valid First Name");
          return false;
        } else {console.log("Invalid firstname");
          $('input[name=firstname]').val("Enter a Valid First Name");
          return false;
        }
      });

      //Last Name Validation

      $("#lastname").on("change", function() {
        if ( $(this).val().match('^[a-zA-Z]{3,16}$') ) {
          return(true);
        } else if ( $(this).val().match("") ){
          console.log("Invalid lastname");
          $('input[name=lastname]').val("Enter a Valid Last Name");
          return false;
        } else {console.log("Invalid lastname");
          $('input[name=lastname]').val("Enter a Valid Last Name");
          return false;
        }
      });

      //Checkbox Validation

      $('#form1').on('submit', function (e) {
        if ($("input[type=checkbox]:checked").length < 2) {
          e.preventDefault();
          console.log("Over two checkboxes not checked");
          $("#errors").html("<h5>At least two checkboxes must be checked!</h5>");
          $("#errors").addClass("showerror")
          return false;
        }
      });

    //Checkboxes for Extra Credit
  
      $('#selectall').click(function(event) {
        var $that = $(this);
        $(':checkbox').each(function() {
          this.checked = $that.is(':checked');
        });
      });
    });

  </script>
  </body>

</html>

