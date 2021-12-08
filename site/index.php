<?php
    //include("class/security.php");

	error_reporting(0);
	
	// Start button configuration
    $BOTONES_NAVEGACION = "
		<div class='col-md-12' align='center'>
			<div class='btn-group btn-group-sm'>
				<a class='btn btn-success' href='https://www.cmw.smcsalud.cu' role='button'>Web SMC</a>
				<a type='button' class='btn btn-warning' href='class\logout.php'>Logout [" . $_SESSION["user"] . "]</a>
			</div>
		</div>";
	// Finish button configuration
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
    <title>Tarifario de Precios</title>

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
    <div class="container">
        <div align="center">
            <!-- Header start -->
            <div class="row">
                <div class="col" align="center"><i class="fas fa-money-check-alt fa-8x text-success"></i></div>
            </div>	
            
            <div class="fs-3 text-secondary">Tarifario de precios</div>
            <div align="center" style="font-size:20px">&nbsp;</div>
            <!-- Header end -->
        </div>
    </div>
    <!-- Finish navbar -->

    <!-- Start space between navbar and body -->
    <div align="center" style="font-size:20px">&nbsp;</div>
    <!-- Finish space between navbar and body -->

    <!-- Start body -->
    <div class="container">
        <div align="center" class="fs-2 text-secondary">En construcci&oacute;n</div>
        <br>
        <div class="col" align="center"><i class="fas fa-tools fa-10x text-warning"></i></div>
    </div>
    <!-- Finish body -->

    <!-- Start footer -->
    <div id="footer">
        <?php echo $BOTONES_NAVEGACION; ?>
    </div>
    <!-- Footer end -->
</body>

</html>