<?php
require_once('../helpers.php');
if (!checkUser()) {
    header('Location: /login.php');
}
require_once('../config.php')
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

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
<?php
require_once('../views/sidebar.php')
?>
<div class="ui fixed menu">
    <div class="ui container">
        <div class="right menu">
            <a class="item" href="/logout.php">Logout</a>
        </div>
    </div>
</div>
<div class="pusher" style="padding-left: 99px; padding-top: 42px;">
    <div class="container mt-4 mb-4">
        <div class="ui breadcrumb">
            <a href="/admin/index.php" class="section">Home</a>
            <div class="divider"> / </div>
            <div class="section active">Categories</div>
        </div>
        <div class="row mt-4">
            <div class="col-md-12">
                <div>
                    <h3 class="ui left floated header">Categories</h3>
                    <h5 class="ui right floated header">
                        <a href="/admin/add-category.php"><i class="plus icon"></i>Add Category</a>
                    </h5>
                </div>
                <table class="ui table">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Title</th>
                        <th>Content</th>
                        <th>Publish Date</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</body>
</html>
