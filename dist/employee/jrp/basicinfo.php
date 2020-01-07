<?php
include_once '../includes/basicinfo.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    <div class="wrapper">
        <div class="nav-bar">
            <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
                <a class="navbar-brand" href="#">SAMPLE APPLICATION</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor03" aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarColor03">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="../index.php">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../company/companyList.php">Company Database</a>
                        </li>
                    </ul>
                    <form class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2" type="text" placeholder="Search">
                        <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
                    </form>
                </div>
            </nav>

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="collapse navbar-collapse" id="navbarColor01">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Basic Information <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Identification Number</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Employment Record</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Other Information</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Requirements</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
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
                echo $output;
                ?>
            </table>
        </div>
    </div>
</body>

</html>