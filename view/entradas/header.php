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
	<link href="../beta1/assets/css/sb-admin-2.min.css" rel="stylesheet">
	<link rel="stylesheet" href="../beta1/assets/css/dataTables.bootstrap4.min.css">
	<link rel="stylesheet" href="../beta1/assets/css/estiloD.css"> 
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

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
				
				<style>
                        /* Modify the background color */
                         
                        .colorX
                        {
                            background-color:linear-gradient(90deg, rgba(153,68,214,1) 0%, rgba(9,9,121,1) 53%, rgba(0,0,0,1) 100%);
                        }
                        .bg-gradient-primary
                        {
                            background-color: linear-gradient(90deg, rgba(153,68,214,1) 0%, rgba(9,9,121,1) 53%, rgba(0,0,0,1) 100%);
                        }
                        /* Modify brand and text color */
                         
                        .navbar-custom .navbar-brand,
                        .navbar-custom .navbar-text {
                            color: linear-gradient(90deg, rgba(153,68,214,1) 0%, rgba(9,9,121,1) 53%, rgba(0,0,0,1) 100%);
                        }
                    </style>
    
				<nav class="navbar navbar-expand navbar-light bg-gradient-primaryy  text-white topbar mb-4 static-top shadow">

					<!-- Sidebar Toggle (Topbar) -->
					<button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
						<i class="fa fa-bars"></i>
					</button>
					<div class="input-group">
						<h6>Sistema de QR <?php echo $_SESSION['session_email']?></h6>
						<div class="buttonwrap">
		
				
                 </div>
				
			
						<label id="switch" class="switch">
							<input class="botonTheme" type="checkbox" onchange="toggleTheme()" id="slider">
							<span class="slider round"></span>
						</label>
					</br>
						<p class="ml-auto gbh"><strong>La Paz,  </strong><?php echo fechaPeru(); ?></p>
					</div>

					<script type="text/javascript" src="../beta1/assets/js/theme.js"></script>
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

				<script src="../beta1/assets/js/sb-admin-2.min.js"></script>
<script src="../beta1/assets/js/jquery.dataTables.min.js"></script>
<script src="../beta1/assets/js/dataTables.bootstrap4.min.js"></script>
<script src="../beta1/assets/js/sweetalert2@10.js"></script>
