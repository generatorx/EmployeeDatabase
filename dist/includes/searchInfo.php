<?php
    include_once 'dbh.php';

    $input = $_REQUEST['input'];

    $sql = "SELECT * FROM dsd_employee WHERE Surname LIKE '%$input%';";
    $result = mysqli_query($connect, $sql);
    $queryResult = mysqli_num_rows($result);
    echo "There are ".$queryResult. " result!";

    $search = '';

        while ($row = mysqli_fetch_assoc($result)) {
            $search .= "<tbody>";
            $search .= "<tr>";
            $search .= "<th scope='row'>" . $row['ID Number'] . "</th>";
            $search .= "<td style='background:gray;'>" . $row['Surname'] . "</td>";
            $search .= "<td>" . $row['Given Name'] . "</td>";
            $search .= "<td>" . $row['Middle Name'] . "</td>";
            $search .= "<td>" . $row['Birthdate'] . "</td>";
            $search .= "<td>" . $row['Status'] . "</td>";
            $search .= "<td>" . $row['Contact Number'] . "</td>";
            $search .= "</tr>";

        }
?>