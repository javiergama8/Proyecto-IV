﻿<?php
	session_start();
	include('formulario/acceso_db.php'); // incluimos el archivo de conexión a la Base de Datos
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<title>SHW-Enlaces</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
		<link rel="stylesheet" href="css/layout.css" type="text/css" media="all">
		<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
		<script type="text/javascript" src="js/jquery-1.4.2.js" ></script>
		<script type="text/javascript" src="js/cufon-yui.js"></script>
		<script type="text/javascript" src="js/cufon-replace.js"></script>  
		<script type="text/javascript" src="js/Copse_400.font.js"></script>
		<script type="text/javascript" src="js/imagepreloader.js"></script>
		<script type="text/javascript">
			preloadImages([
			'images/menu1_active.gif',
			'images/menu2_active.gif',
			'images/menu3_active.gif',
			'images/menu4_active.gif',
			'images/menu5_active.gif']);
		</script>
		
	</head>
	
	<body id="page5">
		<div class="body1">
			<div class="body2">
				<div class="main">
		<!-- header -->
					<header>
						<div class="wrapper">
							<h1><a href="index.html" id="logo">ENLAZADOS</a></h1>
							<div class="right">
								<nav>
									<?php
									 		if(empty($_SESSION['usuario_nombre'])) { // comprobamos que las variables de sesión estén vacías        
									?>
										<!--Acceso identificado-->
											<div style="margin-top:41px; margin-right:-60px">
											<form method="POST" action="formulario/comprobar.php" align="right">
												<!--Creamos los campos y un label para cada uno de ellos-->
												<font color="white"><b><label for="n_usuario">Usuario: </label></b></font>
													<input type="text" name="usuario_nombre" />
												<font color="white"><b><label for="pwd">Contraseña: </label></b></font>
												<!--Este input debe ser -type="password" para que no se muestren los caracteres-->
													<input type="password" name="usuario_clave" />
												<!--Al dar click al botón se ejecutará el -action-->
													<input id="boton" type="submit" name="enviar" value="Iniciar Sesión"/>
													<a class="recuperar" href="formulario/recuperar_contrasena.php"><div style="color:#FFFFFF;text-decoration:none;"><b>¿Olvidaste la contraseña?</b></div></a>
											</form>		
											</div>
											
											<?php
											 		}else {
											?>
		
											<div id="sesionactivada">
												  	<p>Hola <strong><?=$_SESSION['usuario_nombre']?></strong> | <a href="formulario/perfil.php">Perfil</a> |<a href="formulario/logout.php">Salir</a></p>
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
								<li class="nav1" id="active"><a href="index.php">INICIO</a></li>
								<li class="nav2"><a href="Secciones.php">SECCIONES</a></li>
								
								<li class="nav4"><a href="Funcionamiento.php">INFORMACIÓN</a></li>
								<li class="nav5"><a href="Contactar.php">CONTACTAR</a></li>
								<li class="nav3"><a href="Enlaza-me.php">REGISTRO</a></li>
							</ul>
						</nav>
						
						
						<?php
							}else { //SI EL USUARIO SÍ ESTÁ REGISTRADO, MOSTRAMOS EL ENLAZO
						?>
						
											
											<nav id="menu">
							<ul>
								<li class="nav1" id="active"><a href="index.php">INICIO</a></li>
								<li class="nav2"><a href="Secciones.php">SECCIONES</a></li>
								
								<li class="nav4"><a href="Funcionamiento.php">INFORMACIÓN</a></li>
								<li class="nav5"><a href="Contactar.php">CONTACTAR</a></li>
								<li class="nav3"><a href="Enlaza-me.php">ENLAZA-ME</a></li>
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
							<figure class="left"><img src="images/letter1.png" alt=""></figure>
							<h2>ENLAZA-ME<span> Añade tus propios enlaces</span></h2>
							
					</div>
				</div>
			</div>
			<div class="body7">
				<div class="main">
					<section id="content">
				
							<div id="iniciales" class="subindices2">

							<div id="index2" class="menuacdirectos">

							  <div class="Blue_panel_with_menu clearfix">
								 <center><h2><span style="background:url('./icon/users.png') no-repeat center left;font-family:arial">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Introduce la dirección web a añadir</span></h2></center>
								 <div class="panel_blue_container">
								 
								 <form action="formulario/addnotice.php" method="post" name="form">
										<ul class="left_navigation clearfix">
									
									
									
									
											<div id="cuadro"><br> <center><li style="font-weight:bold; color: #000099; font: oblique bold 120% cursive">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Titulo:<input id="tituloweb" name="titulo" type="text" size="50" maxlength="40" value="" style=" border: 1px solid #DBE1EB;font-size: 18px;font-family: Arial, Verdana;padding-left: 7px;padding-right: 7px;border-radius: 4px;-moz-border-radius: 4px;-webkit-border-radius: 4px;-o-border-radius: 4px;background: linear-gradient(left, #FFFFFF, #F7F9FA);background: -moz-linear-gradient(left, #FFFFFF, #F7F9FA);background: -webkit-linear-gradient(left, #FFFFFF, #F7F9FA);background: -o-linear-gradient(left, #FFFFFF, #F7F9FA);color: #2E3133;"></li></center><br>
												          
											 <center><li style="font-weight:bold; color: #000099; font: oblique bold 120% cursive">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;URL:<input id="tituloweb" name="url" type="text" size="50" maxlength="40" value="" style=" border: 1px solid #DBE1EB;font-size: 18px;font-family: Arial, Verdana;padding-left: 7px;padding-right: 7px;border-radius: 4px;-moz-border-radius: 4px;-webkit-border-radius: 4px;-o-border-radius: 4px;background: linear-gradient(left, #FFFFFF, #F7F9FA);background: -moz-linear-gradient(left, #FFFFFF, #F7F9FA);background: -webkit-linear-gradient(left, #FFFFFF, #F7F9FA);background: -o-linear-gradient(left, #FFFFFF, #F7F9FA);color: #2E3133;"></li></center><br>
											 
											 <center><li style="font-weight:bold; color: #000099; font: oblique bold 120% cursive">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Usuario:<input id="miusuario" name="miusuario" type="text" size="50" maxlength="40" value="" style=" border: 1px solid #DBE1EB;font-size: 18px;font-family: Arial, Verdana;padding-left: 7px;padding-right: 7px;border-radius: 4px;-moz-border-radius: 4px;-webkit-border-radius: 4px;-o-border-radius: 4px;background: linear-gradient(left, #FFFFFF, #F7F9FA);background: -moz-linear-gradient(left, #FFFFFF, #F7F9FA);background: -webkit-linear-gradient(left, #FFFFFF, #F7F9FA);background: -o-linear-gradient(left, #FFFFFF, #F7F9FA);color: #2E3133;"></li></center><br></div>
											 
											 
											
											 <center>
									<br>
												<input type="submit" id="boton" name="addlink" class="myButton" value="Añadir" /><br>
										  </center>  
										
												        
										</ul>
										
								</form>
										</div>
										<div class="bl"></div>
										<div class="br"></div>
										</div>
										<div>
										   
							  		
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
															  font-size: 20px;
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
															#cuadro {
																 width: 500px;
																 height: 230px;
																 margin-left: 250px;
																 background-color:#A9A9F5;
																 -moz-border-radius: 10px;
																 -webkit-border-radius: 10px;
															}
											</style>
							    
							  </div>
							</div>

								</div>
								
						<br>
					<div id="note" class="note"><b>ADVERTENCIA:</b> Si no pones el nombre de usuario correcto, el enlace no será aceptado y no aparecerá en tu perfil de añadidos. GRACIAS</div>
						
						<style>
							.note {
								  position: relative;
								  width: 10%;
								  padding: 1em 1.5em;
								  margin: 2em auto;
								  color: #fff;
								  background: #12C02F;
								  overflow: hidden;
								  margin-left: 800px;
								  margin-top: -300px;
								}

								.note:before {
								  content: "";
								  position: absolute;
								  top: 0;
								  right: 0;
								  border-width: 0 16px 16px 0;
								  border-style: solid;
								  border-color: #fff #fff #658E15 #658E15;
								  background: #658E15;
								  -webkit-box-shadow: 0 1px 1px rgba(0,0,0,0.3), -1px 1px 1px rgba(0,0,0,0.2);
								  -moz-box-shadow: 0 1px 1px rgba(0,0,0,0.3), -1px 1px 1px rgba(0,0,0,0.2);
								  box-shadow: 0 1px 1px rgba(0,0,0,0.3), -1px 1px 1px rgba(0,0,0,0.2);
								  /* Firefox 3.0 damage limitation */
								  display: block; width: 0;
								}

								.note.rounded {
								  -moz-border-radius: 5px 0 5px 5px;
								  border-radius: 5px 0 5px 5px;
								}

								.note.rounded:before {
								  border-width: 8px;
								  border-color: #fff #fff transparent transparent;
								  -moz-border-radius: 0 0 0 5px;
								  border-radius: 0 0 0 5px;
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
						
								<center><h3><a href="formulario/acceso_admin.php">ACCESO ADMIN</a></h3></center>
											
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
					<a href="index.html" id="footer_logo">Enlazados</a>
					
					
				</div>
			</footer>
		</div>
<!-- / footer -->
			</div>
			</div>
		<script type="text/javascript"> Cufon.now(); </script>
	</body>
</html>
