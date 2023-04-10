<!DOCTYPE html>
<html lang="ru">
<head>
    <title>my new sait</title>
    <meta charset="utf-8">
    <meta name="keywords" lang="ru" content="страница,программа">
    <link rel="stylesheet" type="text/css" href="styles/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php
    $time=date('H');
    if ($time<=6 || $time>=22) {
        echo '<style>';
        echo 'body{background: darkgrey;}';
        echo ' </style>';
    }
    ?>
</head>

<body>

<?php include 'moduls/nav.php';?>
  <main>
<?php include 'moduls/osebe.php'; ?>

<?php include 'moduls/cat.php'; ?>
<?php include 'moduls/car.php'; ?>

<?php
$time=date('H');
echo $time;
?>
  </main>
</body>



</html>
