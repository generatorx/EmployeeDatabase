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
        $output .= "<th scope='row'>" . $row['NBI'] . "</th>";
        $output .= "<td>" . $row['IMS'] . "</td>";
        $output .= "<td>" . $row['HEALTH CARD'] . "</td>";
        $output .= "<td>" . $row["MAYOR'S PERMIT"] . "</td>";
        $output .= "<td>" . $row['DRUG TEST'] . "</td>";
        $output .= "</tr>";
    }
}
