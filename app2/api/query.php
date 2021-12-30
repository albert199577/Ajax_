<?php
//處理查詢資料的請求
include_once "base.php";

$q = $_POST['q'];
$rows = $Stu -> q("SELECT * FROM `students` WHERE `name` LIKE '%$q%'");

echo json_encode($rows);
?>