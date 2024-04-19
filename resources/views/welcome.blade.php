<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css' rel='stylesheet'>
    <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js'></script>
    <script src='https://code.jquery.com/jquery-3.3.1.min.js'></script>
    <script src="https://www.gstatic.com/firebasejs/live/3.0/firebase.js"></script>
    <script>
      var config = {
        apiKey: "AIzaSyBfHureQdoE0A3EkI4C9NCfdsoBA4LkYUs",
        authDomain: "ar-decor-app.firebaseapp.com",
        databaseURL: "https://ar-decor-app-default-rtdb.firebaseio.com",
        projectId: "ar-decor-app",
        storageBucket: "ar-decor-app.appspot.com",
        messagingSenderId: "508636360954",
        appId: "1:508636360954:web:df455e7479c4c05119d943",
        measurementId: "G-SH3PV4QKXL"
      };
      firebase.initializeApp(config);
    </script>
    <script>
      $(document).ready(function() {
        var access_token = sessionStorage.getItem("access_token") || '';
        if (access_token) {
          if (access_token == '') {
            $('#modal_login').modal('show');
          } else {
            $('#main_container').show();
          }
        } else {
          $('#modal_login').modal('show');
        }
        $(function() {
          $('[data-toggle="tooltip"]').tooltip()
        })
      });

      function switchLoginMode(strg_mode) {
        $(document).ready(function() {
          switch (strg_mode) {
            case 'signup':
              $('#login_title').html('Sign Up');
              $('#login_button').html('Sign Up');
              $('.signup_mode').show();
              $('.login_mode').hide();
              break;
            case 'login':
              $('#login_title').html('Login');
              $('#login_button').html('Login');
              $('.signup_mode').hide();
              $('.login_mode').show();
              break;
          }
        });
      }

      function updateSessionAndReload(access_token = '') {
        if (access_token != '') {
          sessionStorage.setItem('access_token', access_token);
          $('[id^="login_input"]').val('');
          location.reload();
        } else {
          sessionStorage.removeItem('access_token');
        }
      }

      function doLoginSignUp(strg_mode) {
        sessionStorage.removeItem('access_token');
        switch ($('#login_button').text()) {
          case 'Login':
            firebase.auth().signInWithEmailAndPassword($('#login_input_email').val(), $('#login_input_password').val()).then(function(result) {
              console.log('result:', result);
              updateSessionAndReload(result.Xc);
            }).catch(function(err) {
              alert(err.message);
            });
            break;
          case 'Sign Up':
            console.log($('#login_input_password').val());
            console.log($('#login_input_confirm_password').val());
            if ($('#login_input_password').val() == $('#login_input_confirm_password').val()) {
              firebase.auth().createUserWithEmailAndPassword($('#login_input_email').val(), $('#login_input_password').val()).then(function(result) {
                console.log('result:', result);
                updateSessionAndReload(result.Xc);
              }).catch(function(err) {
                alert(err.message);
              })
            }
            break;
        }
      }

      function doLogout() {
        sessionStorage.removeItem('access_token');
        location.reload();
      }

      function check_token() {
        var access_token = sessionStorage.getItem("access_token") || '';
        var settings = {
          "url": "https://25l0y.ciroue.com/api/checktoken",
          "method": "POST",
          "timeout": 0,
          "headers": {
            "Content-Type": "application/json",
            "Accept": "application/json",
            "Authorization": "Bearer " + access_token
          },
        };
        $.ajax(settings).done(function(response) {
          console.log(response);
        });
      }

    </script>
  </head>
  <body onload=''>
    <div id='main_container' class='container' style='display:none'>
      <h1>Crew Manager</h1>
      <button type='button' class='btn btn-warning' onclick='doLogout()'> Logout </button>
    <button class='btn btn-info' onclick='check_token()'>Test Firebase Token</button>
    </div>
    <!-- modal: login (begin)-->
    <div class='modal fade bg-dark' id='modal_login' data-backdrop='false'>
      <div class='modal-dialog modal-dialog-centered' role='document'>
        <div class='modal-content'>
          <div class='modal-header border-bottom-0'>
            <!--
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">x</span></button>
        -->
          </div>
          <div class='modal-body'>
            <div class='form-title text-center'>
              <h4 id='login_title'>Login</h4>
            </div>
            <div class='d-flex flex-column text-center'>
              <form>
                <div class='mb-3 signup_mode' style='display:none;'>
                  <input type='email' class='form-control' id='login_input_name' placeholder='Name...'>
                </div>
                <div class='mb-3'>
                  <input type='email' class='form-control' id='login_input_email' placeholder='Email address...'>
                </div>
                <div class='mb-3'>
                  <input type='password' class='form-control' id='login_input_password' placeholder='Password...'>
                </div>
                <div class='mb-3 signup_mode' style='display:none;'>
                  <input type='password' class='form-control' id='login_input_confirm_password' placeholder='Confirm Password...'>
                </div>
                <button id='login_button' type='button' class='w-100 btn btn-info' onclick='doLoginSignUp()'>Login</button>
              </form>
            </div>
          </div>
          <div class='modal-footer d-flex justify-content-center'>
            <div class='login_mode' style='display:block;'>Not a member yet? <a href='javascript: switchLoginMode("signup");'> Sign Up</a>. </div>
            <div class='signup_mode' style='display:none;'>Already have account? <a href='javascript: switchLoginMode("login");'> Login</a>. </div>
          </div>
        </div>
      </div>
    </div>
    <!-- modal: login (end)-->
  </body>
</html>
