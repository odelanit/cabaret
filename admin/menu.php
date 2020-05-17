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
$query = 'SELECT menu.*, c.title as category FROM menu LEFT JOIN categories c on menu.category_id = c.id';
$stmt = $pdo->query($query);

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
            <div class="section active">Menu Items</div>
        </div>
        <div class="row mt-4">
            <div class="col-md-12">
                <div>
                    <h3 class="ui left floated header">Menu Items</h3>
                    <h5 class="ui right floated header">
                        <a href="/admin/add-item.php"><i class="plus icon"></i>Add Item</a>
                    </h5>
                </div>
                <table class="ui table">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Title</th>
                        <th>Price</th>
                        <th>Description</th>
                        <th style="width: 200px;">Image</th>
                        <th>Status</th>
                        <th>Category</th>
                        <th>Created At</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    while ($row = $stmt->fetch()) {
                        ?>
                        <tr>
                            <td><?php echo $row['id'] ?></td>
                            <td><?php echo $row['title'] ?></td>
                            <td><?php echo $row['price'] ?></td>
                            <td><?php echo $row['description'] ?></td>
                            <td>
                                <img class="img-fluid img-thumbnail" src="<?php echo $row['image_url'] ?>" alt="">
                            </td>
                            <td><?php echo $row['display_status'] ?></td>
                            <td><?php echo $row['category'] ?></td>
                            <td><?php echo $row['created_at'] ?></td>
                            <td>
                                <a href="/admin/edit-item.php?id=<?php echo $row['id'] ?>" title="Edit"><i class="edit icon"></i></a>
                                <a href="/admin/delete-item.php?id=<?php echo $row['id'] ?>" title="Delete"><i class="trash red icon"></i></a>
                            </td>
                        </tr>
                        <?php
                    }
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</body>
</html>
