<?php
$link = new mysqli('101.36.109.44:3306','eatxzs','2df4rcShmRSTBdtK','eatxzs');
mysqli_set_charset($link, 'utf8');
if ($link->connect_error) {
    die("连接失败: " . $conn->connect_error);
}
$ranking = "kano_rank";//排行榜表名
