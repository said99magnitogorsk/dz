<?php
$host='localhost';
$username='said';
$password='123';
$dbname='mysite';
try {
    $connect=mysqli_connect($host,$username,$password,$dbname);

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
</head>

<body>
<p>Если у вас нет уч.записи,<a href="registr.php">зарегестрируйтесь</a></p>
<form action="" method="post">
    <p> <input type="text" name="log" id="log1" required>
        <label for="log1" > логин</label></p>
    <input type="text" name="pass" id="pass1" required>
    <label for="pass1"> пароль</label>
    <button type="submit">войти</button>
</form>

<?php
if(isset($_REQUEST['log']) and $_REQUEST['pass']) {
    if ($_REQUEST['log'] != null && $_REQUEST['pass'] != null) {
        $proverka = mysqli_query($connect, "SELECT name,pass FROM users WHERE name='" . $_REQUEST['log'] . "' AND pass='" . $_REQUEST['pass'] . "'");

        if ($proverka->num_rows > 0) {  //условие срабатывает если вернулась строка больше 0
            header("location:privetReg.php"); //переход на страницу приветсвия
        } else {
            echo 'неверный пароль или логин,либо учетной записи не существует';
        }
    }
}

?>
</body>


</html>
