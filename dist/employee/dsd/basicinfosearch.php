<?php
include_once '../../includes/searchInfo.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="../../css/bootstrap.min.css">
    <title>Document</title>
</head>

<body>
    <div class="wrapper">
        <?php
            include_once '../reuse/nav.php';
        ?>
        
        <div class="table my-3 px-5">
            <h2 class="pb-3" style="text-align: center;">Basic Information</h2>
            <table class="table table-hover border border-primary">
                <thead>
                    <tr>
                        <th scope="col">ID Number</th>
                        <th scope="col">Surname</th>
                        <th scope="col">Given Name</th>
                        <th scope="col">Middle Name</th>
                        <th scope="col">Birthdate</th>
                        <th scope="col">Status</th>
                        <th scope="col">Contact Number</th>
                    </tr>
                </thead>
                <?php
                echo $search;
                ?>  
            </table>
        </div>
    </div>
</body>

</html>