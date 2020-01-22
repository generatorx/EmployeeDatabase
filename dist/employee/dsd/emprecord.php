<?php
include_once '../../includes/getID.php';
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
        <div class="container-fluid border border-light">
            <div class="row">
                <div class="col-3"><img style="height: 100%; width: 100%; display: block; margin" src="../../image/avatar.png" alt="Card image">
                </div>
                <div class="col-9">
                    <div class="card border-light mb-3" style="width:100%;">
                        <div class="card-header">PROFILE
                            <span><img src="../../image/<?php echo $status?>.png" alt="active" style="width:1.5%; height:100%;"></span>
                        </div>
                        <div class="card-body">
                            <h4 class="card-title"><?php echo $fullname?></h4>
                            <p class="card-text"><?php echo $position?></p>
                        </div>
                        <div class="card-body">
                            <h4 class="card-title">Light card title</h4>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>