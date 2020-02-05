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
$contactnumber = '';
$homeaddress = '';
$sss = '';
$phic = '';
$hmid = '';
$tin = '';
$intr = '';
$accountnobpi = '';
$accountnoub = '';
$datehired = '';
$outlet = '';
$employmentstatus = '';
$activestatus = '';
$remarks = '';
$clearancenumber = '';
$nbi = '';
$ims = '';
$healthcard = '';
$mayorspermit = '';
$drugtest = '';
$idissued = '';
$placeofbirth = '';
$emailaddress = '';
$birthdate = '';
$birthyear = '';
$age = '';
$maritalstatus = '';


$idnum .= $output['ID_Number'];
$fullname .= $output['Given Name'] . " " . $output['Middle Name'] . " " . $output['Surname'];
$position .= $output['Position'];
$status .= $output['Active Status'];
$contactnumber .= $output['Contact Number'];
$homeaddress .= $output['Home Address'];
$sss .= $output['SSS'];
$phic .= $output['PHIC'];
$hmid .= $output['HMID'];
$tin .= $output['TIN'];
$intr .= $output['INTR'];
$accountnobpi .= $output['ACCOUNT NO. BPI'];
$accountnoub .= $output['ACCOUNT NO. UB'];
$datehired .= $output['Date Hired'];
$outlet .= $output['Outlet'];
$employmentstatus .= $output['Employment Status'];
$activestatus .= $output['Active Status'];
$remarks .= $output['Remarks'];
$clearancenumber .= $output['Clearance No.'];
$nbi .= $output['NBI'];
$ims .= $output['IMS'];
$healthcard .= $output['HEALTH CARD'];
$mayorspermit .= $output["MAYOR'S PERMIT"];
$drugtest .= $output['DRUG TEST'];
$idissued .= $output['ID ISSUED'];
$placeofbirth .= $output['PLACE OF BIRTH'];
$emailaddress .= $output['EMAIL ADDRESS'];
$birthdate .= $output['Birthdate'];
$birthyear = substr($birthdate, 0, 4);
$age = date("Y") - $birthyear;
$maritalstatus .= $output['Status'];

?>