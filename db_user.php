<?php
//Создать соединение с сервером
$link = mysqli_connect ("localhost", "root", "");
if ($link) {
echo "Соединение с сервером установлено", "<br>";
} else {
echo "Нет соединения с сервером";
}
 

$query = "GRANT ALL PRIVILEGES ON *.* TO 'admin'@'localhost' IDENTIFIED BY 'admin'
WITH GRANT OPTION";
$user = mysqli_query($link, $query);
if ($user) {
echo "Пользователь создан успешно";
} else {
echo "Пользователь не создан";
}
?>