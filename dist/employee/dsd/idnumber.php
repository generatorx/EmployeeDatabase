<?php
include_once '../../includes/getIdNumber.php';
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
            <h2 class="pb-3" style="text-align: center;">Identification Number</h2>
            <table class="table table-hover border border-primary">
                <thead>
                    <tr>
                        <th scope="col">SSS</th>
                        <th scope="col">PHIC</th>
                        <th scope="col">HMID</th>
                        <th scope="col">TIN</th>
                        <th scope="col">INTR</th>
                        <th scope="col">ACCOUNT NO. BPI</th>
                        <th scope="col">ACCOUNT NO. UB</th>
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