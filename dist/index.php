<?php
     include_once 'includes/dbh.php'; //toaccessphpfile(dbh)   
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Hell World!</h1>
    <?php
        $sql = "SELECT * FROM dsd_employee;"; 
        $result = mysqli_query($connect,$sql);
        $resultCheck = mysqli_num_rows($result);

        if ($resultCheck > 0) {
            while ($row = mysqli_fetch_assoc($result))  {
            echo $row ['Surname']."<br>";    
            }  
        }   
    ?>
</body>
</html>