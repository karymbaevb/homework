<?php
//Соединение с сервером
$link = mysqli_connect ('localhost', 'admin', 'admin');


//Выбор БД
$db = "db_homework";
$select = mysqli_select_db($link, $db);
if ($select){
echo "База успешно выбрана", "<br>";
} else {
echo "База не выбрана";
}
//Создание таблицы
//Формирование запроса
$query = "CREATE TABLE comments
(id INT NOT NULL AUTO_INCREMENT, PRIMARY KEY (id),
created DATE,
author VARCHAR (20), comment VARCHAR (255)),
art_id SMALLINT (6)";
//Реализация запроса
$create_tbl = mysqli_query ($link, $query);
if ($create_tbl){
echo "Таблица успешно создана", "<br>";
} else {
echo "Таблица $query не создана";
}

?>
