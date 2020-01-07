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
        $output .= "<th scope='row'>" . $row['ID Number'] . "</th>";
        $output .= "<td>" . $row['Surname'] . "</td>";
        $output .= "<td>" . $row['Given Name'] . "</td>";
        $output .= "<td>" . $row['Middle Name'] . "</td>";
        $output .= "<td>" . $row['Birthdate'] . "</td>";
        $output .= "<td>" . $row['Status'] . "</td>";
        $output .= "<td>" . $row['Contact Number'] . "</td>";
        $output .= "</tr>";
    }
}
