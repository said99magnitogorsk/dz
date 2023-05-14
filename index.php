<?php
if (isset($_GET['fon'])){
    setcookie('fon',$_GET['fon'],time()+3600*24);
}
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <title>my new sait</title>
    <meta charset="utf-8">
    <meta name="keywords" lang="ru" content="страница,программа">
    <link rel="stylesheet" type="text/css" href="styles/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
    <?php
    if ($_COOKIE['fon']==1){
        echo 'body{background: burlywood;}';
    }
    if ($_COOKIE['fon']==2){
        echo 'body{background: blanchedalmond;}';
    }
    if ($_COOKIE['fon']==3){
        echo 'body{background: mediumturquoise;}';
    }
    ?>
    </style>
</head>

<body>
<form style="text-align: right">
    <select name="fon">
        <option value="1">burlywood</option>
        <option value="2">blanchedalmond</option>
        <option value="3">mediumturquoise</option>
    </select>
    <button type="submit">OK</button>
</form>
<?php include 'moduls/nav.php'; ?>
  <main>
<?php include 'moduls/osebe.php'; ?>

<?php include 'moduls/cat.php'; ?>
<?php include 'moduls/car.php'; ?>



  </main>
</body>



</html>
