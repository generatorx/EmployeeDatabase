<?php
include_once '../../includes/getRequirements.php';
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
            <h2 class="pb-3" style="text-align: center;">Requirements</h2>
            <table class="table table-hover border border-primary">
                <thead>
                    <tr>
                        <th scope="col">NBI</th>
                        <th scope="col">IMS</th>
                        <th scope="col">HEALTH CARD</th>
                        <th scope="col">MAYOR'S PERMIT</th>
                        <th scope="col">DRUG TEST</th>
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