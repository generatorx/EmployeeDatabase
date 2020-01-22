<?php
include_once 'dbh.php'; //toaccessphpfile(dbh)
$id = $_GET['id'];

$sql = "SELECT * FROM dsd_employee WHERE `ID_Number` = ?;";
$stmt = $connect->prepare($sql);
$stmt->execute([$id]);
$output = $stmt->fetch();
$idnum = '';
$fullname = '';
$position = '';
$status = '';
$sss = '';
$outlet = '';

$idnum .= $output['ID_Number'];
$fullname .= $output['Given Name'] . " " . $output['Middle Name'] . " " . $output['Surname'];
$position .= $output['Position'];
$status .= $output['Active Status'];
$sss .= $output['SSS'];
$outlet .= $output['Outlet'];

?>