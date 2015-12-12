<?php
    session_start();
    include('../formulario/acceso_db.php'); // incluímos los datos de acceso a la BD
    // comprobamos que se haya iniciado la sesión
    if(isset($_SESSION['usuario_nombre'])) {
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<title>SHW-Enlaces</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="../css/reset.css" type="text/css" media="all">
		<link rel="stylesheet" href="../css/layout.css" type="text/css" media="all">
		<link rel="stylesheet" href="../css/style.css" type="text/css" media="all">
		<script type="text/javascript" src="../js/jquery-1.4.2.js" ></script>
		<script type="text/javascript" src="../js/cufon-yui.js"></script>
		<script type="text/javascript" src="../js/cufon-replace.js"></script>  
		<script type="text/javascript" src="../js/Copse_400.font.js"></script>
		<script type="text/javascript" src="../js/imagepreloader.js"></script>
		<script type="text/javascript">
			preloadImages([
			'../images/menu1_active.gif',
			'../images/menu2_active.gif',
			'../images/menu3_active.gif',
			'../images/menu4_active.gif',
			'../images/menu5_active.gif']);
		</script>
		
	</head>
	
	<body id="page5">
		<div class="body1">
			<div class="body2">
				<div class="main">
		<!-- header -->
					<header>
						<div class="wrapper">
							<h1><a href="../index.php" id="logo">ENLAZADOS</a></h1>
							<div class="right">
								<nav>
									<?php
									 		if(empty($_SESSION['usuario_nombre'])) { // comprobamos que las variables de sesión estén vacías        
									?>
										<!--Acceso identificado-->
											<div style="margin-top:41px; margin-right:-60px">
											<form method="POST" action="../formulario/comprobar.php" align="right">
												<!--Creamos los campos y un label para cada uno de ellos-->
												<font color="white"><b><label for="n_usuario">Usuario: </label></b></font>
													<input type="text" name="usuario_nombre" />
												<font color="white"><b><label for="pwd">Contraseña: </label></b></font>
												<!--Este input debe ser -type="password" para que no se muestren los caracteres-->
													<input type="password" name="usuario_clave" />
												<!--Al dar click al botón se ejecutará el -action-->
													<input id="boton" type="submit" name="enviar" value="Iniciar Sesión"/>
													<a class="recuperar" href="../formulario/recuperar_contrasena.php"><div style="color:#FFFFFF;text-decoration:none;"><b>¿Olvidaste la contraseña?</b></div></a>
											</form>		
											</div>
											
											<?php
											 		}else {
											?>
		
											<div id="sesionactivada">
												  	<p>Hola <strong><?=$_SESSION['usuario_nombre']?></strong> | <a href="../formulario/perfil.php">Perfil</a> |<a href="../formulario/logout.php">Salir</a></p>
											</div>
											
											<style>
											#sesionactivada{
												margin-top: 40px;
												font-size: 120%;
												float: right;
												margin-right: -60px;
												color: #FBFBEF
											}
											
											
											</style>

											<?php
											 		}
											?>  
											<!-- FINAL Acceso identificado-->
											
											<style>
														#boton {
															  background: #3498db;
															  background-image: -webkit-linear-gradient(top, #3498db, #2980b9);
															  background-image: -moz-linear-gradient(top, #3498db, #2980b9);
															  background-image: -ms-linear-gradient(top, #3498db, #2980b9);
															  background-image: -o-linear-gradient(top, #3498db, #2980b9);
															  background-image: linear-gradient(to bottom, #3498db, #2980b9);
															  -webkit-border-radius: 28;
															  -moz-border-radius: 28;
															  border-radius: 28px;
															  text-shadow: 2px 2px 3px #080608;
															  font-family: Georgia;
															  color: #ffffff;
															  font-size: 16px;
															  padding: 1px 6px 1px 3px;
															  text-decoration: none;
															}

															.btn:hover {
															  background: #3cb0fd;
															  background-image: -webkit-linear-gradient(top, #3cb0fd, #3498db);
															  background-image: -moz-linear-gradient(top, #3cb0fd, #3498db);
															  background-image: -ms-linear-gradient(top, #3cb0fd, #3498db);
															  background-image: -o-linear-gradient(top, #3cb0fd, #3498db);
															  background-image: linear-gradient(to bottom, #3cb0fd, #3498db);
															  text-decoration: none;
															}
											</style>
											
								</nav>
							</div>
						</div>
				
						<?php		
							if(empty($_SESSION['usuario_nombre'])) { // SI EL USUARIO NO ESTÁ REGISTRADO MOSTRAMOS ESTE MENÚ     
						?>
								
						<nav id="menu">
							<ul>
								<li class="nav1" id="active"><a href="../index.php">INICIO</a></li>
								<li class="nav2"><a href="../Secciones.php">SECCIONES</a></li>
								
								<li class="nav4"><a href="../Funcionamiento.php">INFORMACIÓN</a></li>
								<li class="nav5"><a href="../Contactar.php">CONTACTAR</a></li>
								<li class="nav3"><a href="../formulario/formulario1.php">REGISTRO</a></li>
							</ul>
						</nav>
						
						
						<?php
							}else { //SI EL USUARIO SÍ ESTÁ REGISTRADO, MOSTRAMOS EL ENLAZO
						?>
						
											
											<nav id="menu">
							<ul>
								<li class="nav1" id="active"><a href="../index.php">INICIO</a></li>
								<li class="nav2"><a href="../Secciones.php">SECCIONES</a></li>
								
								<li class="nav4"><a href="../Funcionamiento.php">INFORMACIÓN</a></li>
								<li class="nav5"><a href="../Contactar.php">CONTACTAR</a></li>
								<li class="nav3"><a href="../Enlaza-me.php">ENLAZA-ME</a></li>
							</ul>
						</nav>
											
						<?php
							}
						?>  
					</header>
					</div>
				</div>
			</div>
		<!-- / header -->
		<!-- contenido -->
			<div class="body5">
				<div class="body6">
					<div class="main">
						<div class="wrapper">
							<figure class="left"><img src="../images/letter1.png" alt=""></figure>
							<h2>ENLACES USUARIOS<span> Aquí encontrarás todos los enlaces aportados por nuestros usuarios.</span></h2>
							
					</div>
				</div>
			</div>
			<div class="body7">
				<div class="main">
					<section id="content">
				
						<?php
							 $perfil = mysql_query("SELECT * FROM enlacesUsuarios");

							echo "<table width=300>";  
							echo "<tr>";  
							echo "<th>TÍTULO</th>";  
							echo "<th>URL</th>"; 
							
							
								echo "</tr>"; 
							
							while ($row = mysql_fetch_row($perfil)){   
								echo "<tr>";  
									 echo "<td>$row[2]</td>"; 
								 	 echo "<td><a href='http://$row[3]'>$row[3]</a></td>";   
							echo "</tr>";  
							}  
							echo "</table>";
							
							?> <br><br>
							
							<style>
								
									table, table td, table tr {
										padding:0px;
										border-spacing: 0px;
									}

									table {
										margin-top: 50px;
										margin-left: 200px;
										border:1px black solid;
										border-radius:5px;
										min-width:600px;
										
										font-family: Helvetica,Arial;
									}
									
									table th{
										position:relative;
										color: #FFFFFF;
										font-size: 250%;
										height: 50px;
										text-align: center;
										line-height: 50px;
										background-color: #08088A;
									}

									table td {
										padding:6px;
										text-align:center;
										font-weight: bold;
									}

									table tr:first-child td:first-child {
										border-radius:5px 0px 0px 0px;
									}

									table tr:first-child td:last-child {
										border-radius:0px 5px 0px 0px;
									}

									table tr:last-child td:first-child {
										border-radius:0px 0px 0px 5px;
									}

									table tr:last-child td:last-child {
										border-radius:0px 0px 5px 0px;
									}

									table td:not(:last-child) {
										border-right:1px #666 solid;
									}


									table tr:nth-child(2n) {
										background: #87CEEB;
									}

									table tr:nth-child(2n+1){
										background: #ADD8E6;
									}

									table.header tr:not(:first-child):hover, table:not(.header) tr:hover {
										background:#E0FFFF;
									}

									table:not(.header) tr {
										text-align: left;
									}

									table.header tr:first-child {
										font-weight: bold;
										color:#fff;
										background-color: #444;
										border-bottom:1px #000 solid;
									}

									table.header tr:nth-child(n+2) {
										text-align: right;
									}
								
							</style>
						
					</section>
				</div>
			</div>
		<!-- fin contenido-->
		<!-- footer -->
	<div class="body8">
	<div class="body9">
		<div class="main">
			<footer>
				<div class="col_1">
					<h3>REDES SOCIALES</h3>
					<ul class="list3">
						<li><a href="#">Twitter</a></li>
						<li><a href="#">Facebook</a></li>
						<li><a href="#">Flickr</a></li>
						<li><a href="#">Blogger</a></li>
					</ul>
				</div>
				<div class="col_2 pad_left1">
						<?php		
							if(empty($_SESSION['usuario_nombre'])) { // SI EL USUARIO NO ESTÁ REGISTRADO MOSTRAMOS ESTE MENÚ     
						?>
						
								<center><h3><a href="../formulario/acceso_admin.php">ACCESO ADMIN</a></h3></center>
											
						<?php
							}else { //SI EL USUARIO SÍ ESTÁ REGISTRADO, MOSTRAMOS EL ENLAZO
						?>
						
								<center><h3>Usuario logueado</h3></center>
											
						<?php
							}
						?> 
					<div class="wrapper">
						<ul class="">
							
							<h2><center><li><a href="#">Copyright © 2015 Enlazados. All rights reserved.</a></li></center></h2>
						</ul>
						<ul class="list3 col_1 pad_left1">
							
						</ul>
					</div>
				</div>
				<div class="col_3">
					<a href="../index.php" id="footer_logo">Enlazados</a>
					
					
				</div>
			</footer>
		</div>
<!-- / footer -->
			</div>
			</div>
		<script type="text/javascript"> Cufon.now(); </script>
		
		<?php
    			}else {
    			
        			echo "<font size='8'><center>Est&aacutes accediendo a una p&aacutegina restringida, para ver su contenido debes estar registrado.</center></font><br /><font size='7'><center><a href='../formulario/acceso.php'>Ingresar</a> / <a href='../formulario/formulario1.php'>Resgistrarme</a></center></font><br>";
        			echo "<center><img height='250px'  width='307px'  alt='' src='../images/fotoCandado.jpg'/></center>";
	
    			}
?>

	</body>
</html>
