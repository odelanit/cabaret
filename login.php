<?php
require_once('config.php')
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="google-signin-client_id" content="483415670904-rlrnh76d3n8pd3eq2qf11a0kj9r45njb.apps.googleusercontent.com">

    <title>
        <?php
        echo TITLE
        ?>
    </title>

    <link rel="shortcut icon" href="#">

    <link rel="stylesheet" href="/assets/admin/bootstrap-4.4.1/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/admin/semantic-ui/semantic.min.css">
    <link rel="stylesheet" href="/assets/admin/fontawesome-pro/css/all.min.css">
    <link rel="stylesheet" href="/assets/admin/dropzone-5.7.0/dropzone.min.css">
    <link rel="stylesheet" href="/assets/admin/dropzone-5.7.0/basic.css">

    <script type="text/javascript" src="/assets/admin/jquery-3.4.1/jquery.min.js"></script>
    <script type="text/javascript" src="/assets/admin/bootstrap-4.4.1/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="/assets/admin/semantic-ui/semantic.min.js"></script>
    <script type="text/javascript" src="/assets/admin/dropzone-5.7.0/dropzone.min.js"></script>
</head>
<body>
<div class="container">
    <div class="row mt-5 mb-5 justify-content-center">
        <div class="col-md-6">
            <form class="ui form" action="/actions/login.php" method="post">
                <div class="field">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email">
                </div>
                <div class="field">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password">
                </div>
                <div class="field">
                    <button class="ui primary button w-100">Login</button>
                </div>
            </form>
            <div class="ui form mt-3">
                <div class="field">
                    <button class="ui google plus button w-100" type="button" id="google-login-button"><i class="google icon"></i>Sign in with Google</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!--<script src="https://apis.google.com/js/platform.js" async defer></script>-->
<script src="https://apis.google.com/js/api:client.js"></script>
<script>
    var googleUser = {};
    var startApp = function() {
        gapi.load('auth2', function(){
            // Retrieve the singleton for the GoogleAuth library and set up the client.
            auth2 = gapi.auth2.init({
                client_id: '483415670904-rlrnh76d3n8pd3eq2qf11a0kj9r45njb.apps.googleusercontent.com',
                cookiepolicy: 'single_host_origin',
                // Request scopes in addition to 'profile' and 'email'
                //scope: 'additional_scope'
            });
            attachSignin(document.getElementById('google-login-button'));
        });
    };
    function attachSignin(element) {
        console.log(element.id);
        auth2.attachClickHandler(element, {},
            function(googleUser) {
                var profile = googleUser.getBasicProfile();
                var id_token = googleUser.getAuthResponse().id_token;
                $.ajax({
                    type: 'POST',
                    url: '/actions/google-login.php',
                    data: {
                        id_token: id_token
                    },
                    success: function (data) {
                        window.location.href = '/admin/';
                    },
                    error: function (xhr, statusCode, error) {
                        console.log(error);
                    }
                });
            }, function(error) {
                alert(JSON.stringify(error, undefined, 2));
            });
    }

    startApp();
</script>
</body>
</html>