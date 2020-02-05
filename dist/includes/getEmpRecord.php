<?php
include_once 'dbh.php'; //toaccessphpfile(dbh)

$stmt = $connect->query("SELECT * FROM dsd_employee;");
$table = '';

while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $table .= "<form action='emprecord.php' method='GET'><tbody >";
        $table .= "<tr>";
        $table .= "<td>". $row['Surname']. "</td>";
        $table .= "<td>" . $row['Given Name'] . "</td>";
        $table .= "<td>" . $row['Middle Name'] . "</td>";
        $table .= "<td>" . $row['Birthdate'] . "</td>";
        $table .= "<td>" . $row['Status'] . "</td>";
        $table .= "<td>" . $row['Contact Number'] . "</td>";
        $table .= "</tr></form>";

}
