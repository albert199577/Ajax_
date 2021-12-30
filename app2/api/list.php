<?php 

include_once "base.php";
$sql = "SELECT classroom as `班級`, COUNT(`id`) as `人數` FROM `students` GROUP BY `classroom`";
$rows = $Stu -> q($sql);
// foreach ($rows as $key => $value) {
//     echo $value['班級'] . "-" . $value['人數'];
//     echo "<br>";
// }
// $list = '';

echo json_encode($rows);
// foreach ($rows as $key => $value) {
//     $list .= "<div class='card m-2'>";
//         $list .= "<div class='card-body'>";
//         $list .= "<h5 class='card-title'>{$value['班級']}</h5>";
//         $list .= "<p class='card-text'>{$value['人數']}</p>";
//         $list .= "</div>";
//     $list .= "</div>";
// }

// echo $list;


?>