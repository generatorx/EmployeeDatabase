<?php
    include_once 'dbh.php'; //toaccessphpfile(dbh)

$sql = "SELECT * FROM dsd_employee;";

$result = mysqli_query($connect, $sql);
$resultCheck = mysqli_num_rows($result);
$output = '';

 if ($resultCheck > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $output .= "<tbody>";
        $output .= "<tr>";
        $output .= "<th scope='row'>" . $row['SSS'] . "</th>";
        $output .= "<td>" . $row['PHIC'] . "</td>";
        $output .= "<td>" . $row['HMID'] . "</td>";
        $output .= "<td>" . $row['TIN'] . "</td>";
        $output .= "<td>" . $row['INTR'] . "</td>";
        $output .= "<td>" . $row['ACCOUNT NO. BPI'] . "</td>";
        $output .= "<td>" . $row['ACCOUNT NO. UB'] . "</td>";
        $output .= "</tr>";
    }
}
