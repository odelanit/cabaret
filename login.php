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
                    <div class="g-signin2" data-onsuccess="onSignIn"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://apis.google.com/js/platform.js" async defer></script>
<script>
    function onSignIn(googleUser) {
        var profile = googleUser.getBasicProfile();
        var id_token = googleUser.getAuthResponse().id_token;
        console.log('Token:' + id_token);
        console.log('ID: ' + profile.getId()); // Do not send to your backend! Use an ID token instead.
        console.log('Name: ' + profile.getName());
        console.log('Image URL: ' + profile.getImageUrl());
        console.log('Email: ' + profile.getEmail()); // This is null if the 'email' scope is not present.
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
    }
</script>
</body>
</html>