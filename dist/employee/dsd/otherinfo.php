<?php
include_once '../../includes/getEmpRecord.php';
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
            <h2 class="pb-3" style="text-align: center;">Other Information</h2>
            <table class="table table-hover border border-primary">
                <thead>
                    <tr>
                        <th scope="col">Date Hired</th>
                        <th scope="col">Outlet</th>
                        <th scope="col">Position</th>
                        <th scope="col">Employment Status</th>
                        <th scope="col">Active Status</th>
                        <th scope="col">Remarks</th>
                        <th scope="col">Clearance No.</th>
                    </tr>
                </thead>
                <?php
                echo $output;
                ?>  
            </table>
        </div>
    </div>
</body>

</html>