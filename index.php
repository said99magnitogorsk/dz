<?php
if (isset($_GET['selectColor'])){
    setcookie('selectColor',$_GET['selectColor'],time()+3600*24);
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
        body{
        background: <?php echo $_COOKIE['selectColor']; ?>;
    }

    body{
        background: <?php echo $_GET['selectColor']; ?>;
    }

    </style>
</head>

<body>


<form style="text-align: right">
    <label for="selectColor"><span style="font-size: 1vw ;border:1px black solid">выберите цвет фона страницы</span></label>
    <input type="color" name="selectColor" id="selectColor">
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
