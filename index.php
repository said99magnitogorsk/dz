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

$ff=0;
for ($b=0; $b < $i - 1; $b++) {
    for ($j = 0; $j < $i - $b - 1; $j++) {
        if ($sum[$j] > $sum[$j + 1]) {
            $ff = $sum[$j];
            $sum[$j] = $sum[$j + 1];
            $sum[$j + 1] = $ff;
        }
    }
    }
echo '<pre>';
print_r($sum);
echo '</pre>';
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
$ff=0;
for ($b=0; $b < $i - 1; $b++) {
    for ($j = 0; $j < $i - $b - 1; $j++) {
        if ($sum1[$j] < $sum1[$j + 1]) {
            $ff = $sum1[$j];
            $sum1[$j] = $sum1[$j + 1];
            $sum1[$j + 1] = $ff;
        }
    }
}

echo '<pre>';
print_r($sum1);
echo '</pre>';
?>

</body>


</html>
