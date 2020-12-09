<!--
Подсчет количества перезагрузок сайта (следовательно количества показов изображения)
-->
<?php 
$file = file("count.txt");
$count = implode("", $file);
$count++;
$myfile = fopen("count.txt","w");
fputs($myfile,$count);
fclose($myfile);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Тестовое задание</title>
</head>
<body>
    <img src="image.php"/>
    
<span><img width="15" src="eye.png"/> <?=$count ?></span> <!-- вывод счетчика -->
</body>
</html>