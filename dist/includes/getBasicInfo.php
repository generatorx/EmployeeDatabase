<?php
include_once 'dbh.php'; //toaccessphpfile(dbh)

$stmt = $connect->query("SELECT * FROM dsd_employee;");
$output = '';

while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $output .= "<form action='emprecord.php' method='GET'><tbody>";
        $output .= "<tr>";
        $output .= 
        "<td class='idNum'>
        <input type='submit'  name='id' value=".$row['ID_Number']." />
        </td>";
        $output .= "<td>". $row['Surname']. "</td>";
        $output .= "<td>" . $row['Given Name'] . "</td>";
        $output .= "<td>" . $row['Middle Name'] . "</td>";
        $output .= "<td>" . $row['Birthdate'] . "</td>";
        $output .= "<td>" . $row['Status'] . "</td>";
        $output .= "<td>" . $row['Contact Number'] . "</td>";
        $output .= "</tr></tbody></form>";

}
