<!doctype html>

<html lang="en">

  <head>

    <!-- Author: Melat A Ali -->
    <!-- Project: Assignment 2 -->

    <title>Contact Me | Melat's Film Guide</title>
    <meta charset=”utf-8”>
    <link rel="stylesheet" href="css/style.css">
    <link rel='icon' href='http://ali8.cs321.simmons.edu/images/favicon.ico' type='image/x-icon'/ >

    <!--Favicon: https://www.101computing.net/html-how-to-add-a-favicon/
    https://www.iconfinder.com/icons/1298806/action_design_movie_process_round_icon-->

  </head>

  <body>

    <div class="header">
        <h1 class="title">Contact Me</h1>
    </div>

    <div class="menu">
      <ul>
      <li><a href="index.php">Home</a></li>
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
      <li><a href="contactme.php">Contact Me</a></li>
    </ul>
    </div>

 <article>
    <div id="notification"> </div>
    </div>
    <h1> Contact Us </h1>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script>
      $("document")/ready(function() {
        $("#submit").click(function() {
          checkName();
        }
        );

        $("#name").change(function() {
          console.log("something changed");
          checkName();
        }
        );

      }

      );

      function checkName() {

        if($.trim( $ ("#name").val())=="") {
          $("#errorname").html("<p>You misspelt your name.</p>");
          $("#errorname").addClass( "showerror")
        }
        else {
          $("#errorname").html("");
          $("#erroname").removeClass("showerror");
        }

      }
    </script>

    <form action='#' method="POST">
      <label for="firstname">First Name: </label>
      <div class="errorfirstname"> </div>
      <input type="text" name="firstname" id="firstname">
      <input type="button" name="submitbutton" id="submitbutton" value="Click Me Here"> 
    </form>

    <form action='#' method="POST">

      <div class="formitem">
        <label for="phone">Phone: </label>
        <div id="errorphone" class="error"></div>
        <input type="phone" id="phone" name="phone" placeholder="000-000-0000">
      </div>

      <div class="formitem">
        <label for="email">Email: </label>
        <div id="erroremail" class="error"></div>
        <input type="email" id="email" name="email" placeholder="username@mail.com">
      </div>

      <div class="formitem">
        <label for="regarding">I'm contacting regarding: </label>
        <div id="errorregarding" class="error"></div>
        <select name=>
              <option value="#">Select One</option>
              <option value="service">Service Request</option>
              <option value="incident">Reporting Incident</option>
              <option value="question">Quick Question</option>
              <option value="feedback">Just a feedback</option>
        </select>
      </div>

      <div class="button">
        <input type="submit" name="submit" id="submit" value="Submit">
      </div>

    </form>
  </article>

    <footer>
      <div class="text">
        <h6> Melat's Film Guide - CS321 - Assignment 2</h6>
      </div>
    </footer>

  </body>

</html>
