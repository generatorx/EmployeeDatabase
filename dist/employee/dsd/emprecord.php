<?php
include_once '../../includes/getID.php';
include_once '../../includes/getEmpRecord.php'
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
                <div class="col-3 border border-secondary">
                    <img style="height: 100%; width: 100%; display: block; margin" src="../../image/avatar.png" alt="Card image">
                </div>
                <div class="col-9 border border-secondary">
                    <div class="card border-light mb-3" style="width:100%;">
                        <div class="card-header row">
                            <div class="col-2">PROFILE
                                <span><img src="../../image/<?php echo $status ?>.png" alt="active" style="width:15%; height:60%;"></span>
                            </div>
                            <div class="col-9">
                                <h5>ID Number: <?php echo $idnum ?></h5>
                            </div>
                            <div class="col-1">
                                <form action="" method="POST">
                                    <input type="submit" name="edit" value="EDIT" />
                                </form>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <h4 class="card-title col"><?php echo $fullname ?></h4>
                                <p class="card-text col"><b>Outlet:</b> <?php echo $outlet ?></p>

                            </div>
                            <div class="row">
                                <p class="card-text col"><u><?php echo $position ?></u></p>
                                <p class="card-text col"><b>Date Hired:</b> <?php echo $datehired ?></p>
                            </div>
                            <hr>
                            <div class="row">
                                <p class="card-text col"><b>Age: </b><?php echo $age ?></p>
                                <p class="card-text col"><b>Employment Status: </b><?php echo $employmentstatus ?></p>
                            </div>
                            <div class="row">
                                <p class="card-text col"><b>Home Address: </b><?php echo $homeaddress ?></p>
                                <p class="card-text col"><b>Marital Status: </b><?php echo $maritalstatus ?></p>
                            </div>
                            <div class="row">
                                <p class="card-text col"><b>Contact Number: </b><?php echo $contactnumber ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="table my-3 px-5">
                        <div class="seemore">
                            <h2 style="text-align: center;"><a href="#">See more...</a></h2>
                        </div>
                        <div class="seeless" style="visibility:hidden">
                            <h2 style="text-align: center;"><a href="#">See less...</a></h2>
                        </div>
                        <table class="table table-hover border border-primary see-table" style="visibility:hidden;">
                            <thead>
                                <tr>
                                    <th scope="col">SSS</th>
                                    <th scope="col">PHIC</th>
                                    <th scope="col">HMID</th>
                                    <th scope="col">TIN</th>
                                    <th scope="col">INTR</th>
                                    <th scope="col">ACCOUNT NO. BPI</th>
                                    <th scope="col">ACCOUNT NO. UB</th>
                                    <th scope="col">NBI</th>
                                    <th scope="col">IMS</th>
                                    <th scope="col">HEALTH CARD</th>
                                    <th scope="col">MAYOR'S PERMIT</th>
                                    <th scope="col">DRUG TEST</th>
                                    <th scope="col">ID ISSUED</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><?php echo $sss ?></td>
                                    <td><?php echo $phic ?></td>
                                    <td><?php echo $hmid ?></td>
                                    <td><?php echo $tin ?></td>
                                    <td><?php echo $intr ?></td>
                                    <td><?php echo $accountnobpi ?></td>
                                    <td><?php echo $accountnoub ?></td>
                                    <td><?php echo $nbi ?></td>
                                    <td><?php echo $ims ?></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <script type="text/javascript" src="../../js/script.js"></script>
</body>

</html>