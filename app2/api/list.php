<?php 

include_once "base.php";
$sql = "SELECT classroom as `班級`, COUNT(`id`) as `人數` FROM `students` GROUP BY `classroom`";
$rows = $Stu -> q($sql);
// foreach ($rows as $key => $value) {
//     echo $value['班級'] . "-" . $value['人數'];
//     echo "<br>";
// }

echo json_encode($rows);

?>