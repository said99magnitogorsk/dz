<?php
include 'bdWork.php';
$bd1=new bdWork('localhost','said','123','mysite');
try {
    $connect=mysqli_connect($bd1->host,$bd1->username,$bd1->password,$bd1->dbname);
    mysqli_set_charset($connect,'utf8');
}catch (Exception $er){
    var_dump(mysqli_connect_error());
}
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <title>my new sait</title>
    <meta charset="utf-8">
    <meta name="keywords" lang="ru" content="страница,программа">
    <link rel="stylesheet" href="probst.css">
    <style>
    body{
    background: <?php echo $_COOKIE['selectColor']; ?>;
    }
    </style>
</head>

<body>
<p>придумайте логин и пароль</p>
<form action="" method="post">
<p> <input type="text" name="log" id="log2" required>
    <label for="log2"> логин</label></p>
<p><input type="password" name="pass" id="pass2" required>
    <label for="pass2"> пароль</label></p>
    <input type="password" name="pass3" id="pass3" required>
    <label for="pass3">повторите пароль</label>
<button type="submit">зарегестрироваться</button>
</form>

<?php
if(isset($_REQUEST['log']) and $_REQUEST['pass']) {
    if ($_REQUEST['pass']==$_REQUEST['pass3']) {
        if ($_REQUEST['log'] != null && $_REQUEST['pass'] != null) {
            $logreg = $_REQUEST['log'];
            $logpass = sha1($_REQUEST['pass']);
            mysqli_query($connect, "INSERT INTO `users`(`name`, `pass`) VALUES ('$logreg','$logpass')");   //запись логина и пароля в БД
            header("location:whod.php");//после чего нас сразу перекидывает на страницу входа
        }
    }else{
        echo 'повторно введеный пароль неверен';
    }
}
?>
</body>


</html>
