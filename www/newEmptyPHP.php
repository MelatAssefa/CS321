<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
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
