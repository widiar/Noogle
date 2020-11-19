<?php
$db = new mysqli("localhost", "root", "", "text_search");
if ($db->connect_errno > 0) {
    die('Unable to connect to database [' . $db->connect_error . ']');
}
$id = $_GET['id'];
$query = "SELECT judul, isi FROM dokumen WHERE id=" . $id;
$hasil = $db->query($query);
$hasil = $hasil->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>

<body>
    <nav class="navbar fixed-top navbar-light bg-light">
        <a class="navbar-brand" href="index.php"><img src="logo.png" width="120"></a>
    </nav>
    <div class="container" style="margin-top: 75px;">
        <h1><?= $hasil['judul'] ?></h1>
        <p style="text-align: justify;"><?= $hasil['isi'] ?></p>
    </div>

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
</body>

</html>