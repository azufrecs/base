<?php
include("class/security.php");
?>

<!doctype html>
<html lang="es">

<head>
    <!-- Start required meta tags for Bootstrap -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Finish required meta tags for Bootstrap -->

    <link rel="icon" href="../img/favicon.svg">
    <title>Plantilla</title>

    <!-- Start of links to CSS files -->
    <link href="../css/bootstrap.css" rel="stylesheet" media="screen">
    <link href="../css/datepicker.min" rel="stylesheet" media="screen">
    <link href="../css/fontawesome.css" rel="stylesheet" media="screen">
    <link href="../css/main.css" rel="stylesheet" media="screen">
    <link href="../css/signin.css" rel="stylesheet" media="screen">
    <!-- Finish of links to CSS files -->

    <!-- Start of links to JS files -->
    <script src="../js/bootstrap.js"></script>
    <script src="../js/datepicker.min.js"></script>
    <script src="../js/fontawesome.js"></script>
    <script src="../js/jquery-3.6.0.js"></script>
    <script src="../js/main.js"></script>
    <!-- Finish of links to JS files -->
</head>

<body>
    <!-- Start navbar -->
    <div class="container-fluid">
        <nav class="navbar fixed-top navbar-expand-sm nav-fill navbar-dark bg-primary" aria-label="Base">
            <div class="container-fluid">
                <a class="navbar-brand" href="."><i class="fas fa-parking"></i>Plantilla</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbars" aria-controls="navbars" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbars">
                    <ul class="navbar-nav me-auto mb-2 mb-sm-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">Menu 1</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item text-dark" href='#'>opcion 1</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item text-dark" href='#'>opcion 2</a></li>
                                <li><a class="dropdown-item text-dark" href='#'>opcion 3</a></li>
                                <li><a class="dropdown-item text-dark" href='#'>opcion 4</a></li>
                            </ul>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">Menu 2</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item text-dark" href='#'>opcion 1</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item text-dark" href='#'>opcion 2</a></li>
                                <li><a class="dropdown-item text-dark" href='#'>opcion 3</a></li>
                                <li><a class="dropdown-item text-dark" href='#'>opcion 4</a></li>
                            </ul>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">Menu 3</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item text-dark" href='#'>opcion 1</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item text-dark" href='#'>opcion 2</a></li>
                                <li><a class="dropdown-item text-dark" href='#'>opcion 3</a></li>
                                <li><a class="dropdown-item text-dark" href='#'>opcion 4</a></li>
                            </ul>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">Menu 4</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item text-dark" href='#'>opcion 1</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item text-dark" href='#'>opcion 2</a></li>
                                <li><a class="dropdown-item text-dark" href='#'>opcion 3</a></li>
                                <li><a class="dropdown-item text-dark" href='#'>opcion 4</a></li>
                            </ul>
                        </li>
                    </ul>

                    <span class="navbar-text">
                        <a class="dropdown-toggle quitar-espacios" href="#" id="dropdown01" data-bs-toggle="dropdown" aria-expanded="false"><?php echo ucfirst($_SESSION['name']); ?></a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item text-dark" href='#'>opcion 1</a></li>
                            <li><a class="dropdown-item text-dark" href='#'>opcion 2</a></li>
                            <li><a class="dropdown-item text-dark" href='#'>opcion 3</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item text-dark" href='class/logout.php'><i class="fas fa-sign-out-alt "></i>&nbsp;Logout</a></li>
                        </ul>
                    </span>
                </div>
            </div>
        </nav>
    </div>
    <!-- Finish navbar -->

    <!-- Start space between navbar and body -->
    <div align="center" style="font-size:40px">&nbsp;</div>
    <!-- Finish space between navbar and body -->

    <!-- Start body -->
    <div class="container">
        <div class="fs-3 ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Est, similique velit laudantium mollitia quos amet? Ipsum ex amet, voluptatibus odio soluta cumque magnam qui officia, perferendis ab quo. Cumque, aliquam?</div>
    </div>
    <!-- Finish body -->
</body>

</html>