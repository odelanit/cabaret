<?php
require_once('../helpers.php');
if (!checkUser()) {
    header('Location: /login.php');
}
require_once('../config.php');

$host = '127.0.0.1';
$port = "3306";
$charset = 'utf8mb4';

$options = [
    \PDO::ATTR_ERRMODE            => \PDO::ERRMODE_EXCEPTION,
    \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC,
    \PDO::ATTR_EMULATE_PREPARES   => false,
];
$dsn = sprintf("mysql:host=%s;dbname=%s;charset=%s;port=%s", $host, DB_NAME, $charset, $port);
try {
    $pdo = new \PDO($dsn, DB_USER, DB_PASSWORD, $options);
} catch (\PDOException $e) {
    throw new \PDOException($e->getMessage(), (int)$e->getCode());
}
$query = 'SELECT * FROM news WHERE id=:id';
$stmt = $pdo->prepare($query);
$stmt->execute(['id' => $_GET['id']]);
$news_item = $stmt->fetch();

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
            <a href="/admin/news.php" class="section">News</a>
            <div class="divider"> / </div>
            <div class="active section"><?php echo $news_item['id'] ?></div>
        </div>
        <div class="row mt-4">
            <div class="col-md-8">
                <div class="ui segment">
                    <form class="ui form" action="/actions/update-news.php?id=<?php echo $news_item['id'] ?>" method="post">
                        <div class="field">
                            <label for="title">Title</label>
                            <input type="text" name="title" id="title" required value="<?php echo $news_item['title'] ?>">
                        </div>
                        <div class="field">
                            <label>Image</label>
                            <div class="dropzone" id="imageDropzone">
                                <img src="<?php echo $news_item['image_url'] ?>" id="image_preview" class="image-preview">
                            </div>
                            <input type="hidden" name="image_url" id="image_url" value="<?php echo $news_item['image_url'] ?>">
                        </div>
                        <div class="field">
                            <label for="description">Content</label>
                            <textarea name="description" id="description" required><?php echo $news_item['description'] ?></textarea>
                        </div>
                        <button class="ui primary button">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    Dropzone.autoDiscover = false;
    new Dropzone('#imageDropzone',
        {
            url: "/actions/upload.php",
            paramName: "upload",
            maxFiles: 1,
            acceptedFiles: 'image/*',
            addRemoveLinks: true,
            maxfilesexceeded: function (file) {
                this.removeAllFiles();
                this.addFile(file);
            },
            success: function (file, response) {
                $('#image_url').val(response.url);
                $('#image_preview').attr('src', response.url);
            },
            removedfile: function (file) {
                $('#image_preview').attr('src', '');
                var _ref;
                return (_ref = file.previewElement) != null ? _ref.parentNode.removeChild(file.previewElement) : void 0;
            }
        });
</script>
</body>
</html>
