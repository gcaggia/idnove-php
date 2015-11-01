$(document).ready(
    function() {

    $("#registerForm").submit(
        function( event ) {


        var userName = $('#username').val();
        var email = $('#email').val();
        var pwd = $('#pwd').val();
        var flagError = false;
        var msg;

        $('.msgError').remove();


        if (userName == "") {
          msg = "<p class=\"msgError\">Please enter a username</p>";
          $('.errorRegister').append(msg);
          flagError = true;
        }

        if (email == "") {
          msg = "<p class=\"msgError\">Please enter an email</p>";
          $('.errorRegister').append(msg);
          flagError = true;
        }  

        if (pwd == "")  {
          msg = "<p class=\"msgError\">Please enter a password</p>";
          $('.errorRegister').append(msg);
          flagError = true;
        }

        //If there is no error, we can submit the form
        if (flagError == true) {
          event.preventDefault();
        }

      
        }
    );
    }
);