<?php
    //include("class/security.php");
    include ("conn/conn.php");
	error_reporting(0);

    if(isset($_GET['cod1'])){
        $COD1 = $_GET['cod1'];
        $QUERY_TITULO1 = $mysqli->query("SELECT * FROM tbl_encabezado_1 WHERE codigo='$COD1'");
        while($row = $QUERY_TITULO1->fetch_assoc()) 
		{
		$SUBNIVEL1_TITULO = $row['descripcion'];
		}
    } else {
        echo"<script>window.location.href='head1.php'; </script>";
    }
    
    if(isset($_GET['cod2'])){
        $COD2 = $_GET['cod2'];
        $QUERY_TITULO2 = $mysqli->query("SELECT * FROM tbl_encabezado_2 WHERE codigo_padre='$CODE1' AND codigo='$COD2'");
        while($row = $QUERY_TITULO2->fetch_assoc()) 
		{
		$SUBNIVEL2_TITULO = $row['descripcion'];
		}
    }

	// Start button configuration
    $BOTONES_NAVEGACION = "
		<div class='col-md-12' align='center'>
			<div class='btn-group btn-group-sm'>
				<a class='btn btn-success' href='https://www.cmw.smcsalud.cu' role='button'>Web SMC</a>
                <a class='btn btn-warning' href='head1.php' role='button'>Reiniciar proceso</a>
				<a type='button' class='btn btn-danger' href='class\logout.php'>Logout [" . $_SESSION["user"] . "]</a>
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
        <link href="../css/main.css" rel="stylesheet" media="screen">
        <link href="../css/datepicker.min" rel="stylesheet" media="screen">
        <link href="../css/fontawesome.css" rel="stylesheet" media="screen">
        <link href="../css/signin.css" rel="stylesheet" media="screen">
        <!-- Finish of links to CSS files -->

        <!-- Start of links to JS files -->
        <script src="../js/bootstrap.js"></script>
        <script src="../js/jquery-3.6.0.js"></script>
        <script src="../js/datepicker.min.js"></script>
        <script src="../js/main.js"></script>
        <script src="../js/fontawesome.js"></script>
        <!-- Finish of links to JS files -->
    </head>

    <body>
        <div class="container">
            <!-- Header start -->
            <div align="center">
                <div class="row">
                    <div class="col" align="center"><i class="fas fa-money-check-alt fa-6x text-success"></i></div>
                </div>	
                
                <div class="display-6 text-secondary">Tarifario de precios</div>
                <div align="center" style="font-size:10px">&nbsp;</div>
            </div>
            <!-- Header end -->
            
            <!-- Body start -->
            <div class="row" align="center">
                <?php 
                    if(isset($_GET['cod1']) && isset($_GET['cod2'])){
                        echo "<div class='alert alert-success alert-dismissible fade show' role='alert'><strong>$SUBNIVEL1_TITULO</strong>&nbsp;->&nbsp;" . $SUBNIVEL2_TITULO . "</div>";
                    } else {
                        echo "<div class='alert alert-success alert-dismissible fade show' role='alert'><strong>$SUBNIVEL1_TITULO</strong></div>";
                    }
                ?>
            </div>
            
 
            <!-- Body end -->

            <!-- Start footer -->
            <div id="footer">
                <?php echo $BOTONES_NAVEGACION; ?>
            </div>
            <!-- Footer end -->
        </div>
    </body>
</html>