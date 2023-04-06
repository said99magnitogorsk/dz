<!DOCTYPE html>
<html lang="ru">
<head>
    <title>my new sait</title>
    <meta charset="utf-8">
    <meta name="keywords" lang="ru" content="страница,программа">
    <link rel="stylesheet" href="probst.css">
</head>

<body>
<p>1 ЗАДАНИЕ</p>
<?php

$number=82033311110246;
$sum=0;
while($number!=0)
{
    if(($number%10)%2==0){
        $sum+=$number%10;
    }
    $number = (int)($number/ 10);
}
echo $sum;

?>
<p>2 ЗАДАНИЕ</p>

<?php
$number=810246;
$sum=array();

for($i=0;$number!=0;$i++)
{
    $sum[$i]=$number%10;
    $number = (int)($number/ 10);
}

sort($sum);
print_r($sum);
?>
<p>3 ЗАДАНИЕ</p>

<?php
$number=810246;
$sum1=array();

for($i=0;$number!=0;$i++)
{
    $sum1[$i]=$number%10;
    $number = (int)($number/ 10);
}

rsort($sum1);
print_r($sum1);
?>

</body>


</html>
