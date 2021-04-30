<?php
// параметры подключения к бд
$db_host = "localhost";
$db_name = "galanov";
$db_user = "root";
$db_pass = "root";

// количество новостей на странице
$tek=$_GET["tek"];

// счетчик для загрузки новостей из бд


// соединение с бд
$db = mysqli_connect ($db_host, $db_user, $db_pass, $db_name) or die ("Невозможно подключиться к БД");
mysqli_query ($db, "SET NAMES utf8"); // задаем кодировку данных
 
// Получаем статьи, которые будут видны изначально
$res = mysqli_query($db, "SELECT * FROM minecraft ORDER BY id");
 
// Формируем массив из статей
$arPosts = array();
if ($res){
    while($row = mysqli_fetch_assoc($res)){
        $arPosts[] = $row;
    }   
}

foreach ($arPosts as $article): 
    
    echo '_________________________________________________________________________________________<br><br>';
     echo '<span style="font-weight: bold; color: black;">'.$article['nam'].'</span>, '.$article['email'].'<br>';
      echo '<p>'.$article['txt'].'</p>';
      echo '_________________________________________________________________________________________ <br>'; 
     
     endforeach; 
?>