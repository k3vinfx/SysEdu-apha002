<?php
session_start();
include "assets/includes/functions.php";
/*include "../conexion.php";
// datos Empresa
$nit = '';
$nombre_empresa = '';
$razonSocial = '';
$emailEmpresa = '';
$telEmpresa = '';
$dirEmpresa = '';


$query_empresa = mysqli_query($conexion, "SELECT * FROM configuracion");
$row_empresa = mysqli_num_rows($query_empresa);
if ($row_empresa > 0) {
	if ($infoEmpresa = mysqli_fetch_assoc($query_empresa)) {
		$nit = $infoEmpresa['nit'];
		$nombre_empresa = $infoEmpresa['nombre'];
		$razonSocial = $infoEmpresa['razon_social'];
		$telEmpresa = $infoEmpresa['telefono'];
		$emailEmpresa = $infoEmpresa['email'];
		$dirEmpresa = $infoEmpresa['direccion'];

	}
}*/
//$query_data = mysqli_query($conexion, "CALL data();");
//$result_data = mysqli_num_rows($query_data);
//if ($result_data > 0) {
//	$data = mysqli_fetch_assoc($query_data);
//}



?>

<!DOCTYPE html>
<html lang="en">

<!-- Bootstrap core JavaScript-->

<!-- Core plugin JavaScript-->

<!-- Custom scripts for all pages-->


<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">


	<title>ETRAVEL</title>
  <!-- <link href="sistema/css/sb-admin-2.min.css" rel="stylesheet">-->
	<!-- Custom styles for this template-->


	<link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this template-->


	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
   
</head>

<body id="page-top">
	<?php

//	include "../conexion.php";
//	$query_data = mysqli_query($conexion, "CALL data();");
//	$result_data = mysqli_num_rows($query_data);
//	if ($result_data > 0) {
//		$data = mysqli_fetch_assoc($query_data);
  //  $_SESSION["logged_in"] = true;
  //  $_SESSION["session_type"] = $usuario->Usuario_Tipo;
  //  $_SESSION["session_email"]
//	}

	?>

	<!-- Page Wrapper -->
	<div id="wrapper">

		<?php include_once "assets/includes/menu.php"; ?>
		<!-- Content Wrapper -->
		<div id="content-wrapper" class="d-flex flex-column">
		
			<!-- Main Content -->
			<div id="content">
				<!-- Topbar -->
				

    
				<nav class="navbar navbar-expand navbar-light bg-secondary text-white topbar mb-4 static-top shadow">
					<!-- Sidebar Toggle (Topbar) -->
					<button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
						<i class="fa fa-bars"></i>
					</button>
					<div class="input-group">
						<h6>Sistema de Red Neuronal Recurrentes de Alternativas Turisticas  / Usuario :  <?php echo $_SESSION['session_email']?></h6>
			
		
			
						<p class="ml-auto"><strong>La Paz,  </strong><?php echo fechaPeru(); ?></p>
					</div>

						<!-- Topbar Navbar -->
					<ul class="navbar-nav ml-auto">

						<div class="topbar-divider d-none d-sm-block"></div>
				
						<!-- Nav Item - User Information echo $_SESSION['Nombres'];  -->
						<li class="nav-item dropdown no-arrow">
							<a class="nav-link dropdown-toggle" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<img src="assets/img/user.png" width="45px">	</span>
							</a>
							<!-- Dropdown - User Information -->
							<div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
								<a class="dropdown-item" href="#">
									<i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
									<?php echo $_SESSION['session_email']?>
								</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="salir.php">
									<i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
									Salir
								</a>
							</div>
						</li>

					</ul>

				</nav>

