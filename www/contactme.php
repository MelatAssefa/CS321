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

  <script>
  function toggle(source) {
    var checkboxes = document.querySelectorAll('input[type="checkbox"]');
    for (var i = 0; i < checkboxes.length; i++) {
        if (checkboxes[i] != source)
            checkboxes[i].checked = source.checked;
    }
}
  </script>

  <body>

    <div class="header">
      <h1 class="title2">Contact Me</h1>
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
    
    <form action='#' method="POST">
       
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
          <input type="text" name="lastname" id="lastname">
        </div>

        <div class="formitem">
          <label for="phone">PHONE: </label>
          <div id="errorphone" class="error"></div>
          <input type="phone" id="phone" name="phone" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" placeholder="000-000-0000">
        </div>

        <div class="formitem">
          <label for="email">EMAIL: </label>
          <div id="erroremail" class="error"></div>
          <input type="email" id="email" name="email" placeholder="username@mail.com" required>
        </div>

        <div class="formitem">
          <label for="notes">ADD A NOTE: </label>
          <div id="errornotes" class="error"></div>
          <textarea id="msg" name="usermessage"></textarea>
        </div>

        <div class="checkboxes">
          <label for="regarding">REQUEST: </label>
          <div id="errorregarding" class="error"></div>
            <input type="checkbox" onclick="toggle(this);" /> Select All<br>
            <input type="checkbox" name="option1" value="information" checked> Movie Information<br>
            <input type="checkbox" name="option2" value="suggestion"> Suggest a Movie<br>
            <input type="checkbox" name="option3" value="feedback"> Provide Feedback<br>
        </div>
      
        <div class="button">
          <input type="submit" name="submit" id="submit" value="Submit">
        </div>  
      </fieldset>
    </form>

    <footer>
      <h6> 
        <img src="http://ali8.cs321.simmons.edu/images/favicon.png"> &copy 2019 CS321 | Melat's Film Guide 
      </h6>
    </footer>

  </body>

</html>
