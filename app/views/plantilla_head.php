<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Headers: Origin, Content-Type. Authorization, X-Auth-Token');
header('Access-Control-Allow-Methods: GET, POST, PUT, PATCH, DELETE, HEAD, OPTIONS');
?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- CSS -->
		<link rel="stylesheet" type="text/css" href="<?php echo RUTA_HTTP; ?>assets/css/bootstrap.css" >
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="<?php echo RUTA_HTTP; ?>assets/css/select2.min.css" >
		<link rel="stylesheet" type="text/css" href="<?php echo RUTA_HTTP; ?>assets/css/messagebox.css" >
		<link rel="stylesheet" type="text/css" href="<?php echo RUTA_HTTP; ?>assets/css/style.css" >
	    <!-- CSS dataTables -->
	    <link rel="stylesheet" href="<?php echo RUTA_HTTP; ?>assets/css/dataTables.jqueryui.css">
	    <link rel="stylesheet" href="<?php echo RUTA_HTTP; ?>assets/css/autoFill.jqueryui.css" >
	    <link rel="stylesheet" href="<?php echo RUTA_HTTP; ?>assets/css/buttons.dataTables.min.css" >
		<!-- /CSS -->
		<title><?php echo (isset($title) ? $title : "..:: MVC - ::.."); ?></title>

		<script src="<?php echo RUTA_HTTP; ?>assets/js/jquery-3.3.1.min.js"></script>
		<script src="<?php echo RUTA_HTTP; ?>assets/js/popper.min.js"></script>
		<script src="<?php echo RUTA_HTTP; ?>assets/js/jquery-ui.js"></script>
		<script src="<?php echo RUTA_HTTP; ?>assets/js/bootstrap.js"></script>
		<script src="<?php echo RUTA_HTTP; ?>assets/js/select2.min.js"></script>

		<script src="<?php echo RUTA_HTTP; ?>assets/js/jquery.dataTables.min.js"></script>
		<script src="<?php echo RUTA_HTTP; ?>assets/js/dataTables.autoFill.min.js"></script>
		<script src="<?php echo RUTA_HTTP; ?>assets/js/dataTables.buttons.min.js"></script>
		<script src="<?php echo RUTA_HTTP; ?>assets/js/dataTables.bootstrap4.min.js"></script>
		<script src="<?php echo RUTA_HTTP; ?>assets/js/dataTables.select.min.js"></script>
		<script src="<?php echo RUTA_HTTP; ?>assets/js/buttons.bootstrap4.min.js"></script>
		<script src="<?php echo RUTA_HTTP; ?>assets/js/buttons.flash.min.js"></script>
		<script src="<?php echo RUTA_HTTP; ?>assets/js/jszip.min.js" ></script>
		<script src="<?php echo RUTA_HTTP; ?>assets/js/pdfmake.min.js" ></script>
		<script src="<?php echo RUTA_HTTP; ?>assets/js/vfs_fonts.js" ></script>
		<script src="<?php echo RUTA_HTTP; ?>assets/js/buttons.html5.min.js" ></script>
		<script src="<?php echo RUTA_HTTP; ?>assets/js/buttons.print.min.js" ></script>

		<script src="<?php echo RUTA_HTTP; ?>assets/js/messagebox.js" ></script>
		<script src="<?php echo RUTA_HTTP; ?>assets/js/toolbox.js" ></script>
	</head>
  <body>
