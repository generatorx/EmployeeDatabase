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
        $output .= "<th scope='row'>" . $row['Date Hired'] . "</th>";
        $output .= "<td>" . $row['Outlet'] . "</td>";
        $output .= "<td>" . $row['Position'] . "</td>";
        $output .= "<td>" . $row['Employment Status'] . "</td>";
        $output .= "<td>" . $row['Active Status'] . "</td>";
        $output .= "<td>" . $row['Remarks'] . "</td>";
        $output .= "<td>" . $row['Clearance No.'] . "</td>";
        $output .= "</tr>";
    }
}
