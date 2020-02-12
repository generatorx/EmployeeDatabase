<?php
include_once '../../includes/getBasicInfo.php';
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
        <div class="nav-bar">
            <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
                <a class="navbar-brand" href="#">SAMPLE APPLICATION</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor03" aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarColor03">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="../../index.php">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../../company/companyList.html">Company Database</a>
                        </li>
                    </ul>
                    <form class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2" type="text" onkeyup="myFunction()" id="myInput" placeholder="Search...">
                    </form>
                </div>
            </nav>
        </div>
        <div class="table my-3 px-5">
            <h2 class="pb-3" style="text-align: center;">Basic Information</h2>

            <table class="table table-hover border border-primary" id="myTable">
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
                <?php echo $output; ?>
            </table>
        </div>
    </div>
<script type="text/javascript" src="../../js/filter.js"></script>
</body>
</html>