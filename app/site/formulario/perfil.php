<?php
    session_start();
    include('acceso_db.php');
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
							<h1><a href="index.php" id="logo">ENLAZADOS</a></h1>
							<div class="right">
								<nav>
									<?php
									 		if(empty($_SESSION['usuario_nombre'])) { // comprobamos que las variables de sesión estén vacías        
									?>
										<!--Acceso identificado-->
											<div style="margin-top:41px; margin-right:-60px">
											<form method="POST" action="comprobar.php" align="right">
												<!--Creamos los campos y un label para cada uno de ellos-->
												<font color="white"><b><label for="n_usuario">Usuario: </label></b></font>
													<input type="text" name="usuario_nombre" />
												<font color="white"><b><label for="pwd">Contraseña: </label></b></font>
												<!--Este input debe ser -type="password" para que no se muestren los caracteres-->
													<input type="password" name="usuario_clave" />
												<!--Al dar click al botón se ejecutará el -action-->
													<input id="boton" type="submit" name="enviar" value="Iniciar Sesión"/>
													<a class="recuperar" href="recuperar_contrasena.php"><div style="color:#FFFFFF;text-decoration:none;"><b>¿Olvidaste la contraseña?</b></div></a>
											</form>		
											</div>
											
											<?php
											 		}else {
											?>
		
											<div id="sesionactivada">
												  	<p>Hola <strong><?=$_SESSION['usuario_nombre']?></strong> | <a href="perfil.php">Perfil</a> |<a href="logout.php">Salir</a></p>
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
								<li class="nav3"><a href="formulario1.php">REGISTRO</a></li>
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
							<h2>INFORMACIÓN DEL<span> USUARIO</span></h2>
							
					</div>
				</div>
			</div>
			<div class="body7">
				<div class="main">
				
					<center><nav id="mainPageNav">
						<ul>
							<li id="DatosPersonales"><a href="perfil.php"><div style="font-size: 25px">Mis datos</div></a></li>
							<li id="MisEnlaces"><a href="enlacesUsuario.php"><div style="font-size: 25px">Mis enlaces</div></a></li>
							<li id="MisEnlaces"><a href="modificarDatos.php"><div style="font-size: 25px">Modificar Datos</div></a></li>
						</ul>
					</nav></center>
					
					<style>
						/*----mainPageNav ----*/
							#mainPageNav a{
								background-color:rgb(40,40,40);
								color: rgb(255,255,255);
								text-decoration: none;
								padding: 10px;
								display: block;
								border-bottom: 1px solid rgb(255,255,255);
							}
		
							#mainPageNav a:hover{
								background-color: rgb(255,70,100);
								
							}
		
							#mainPageNav ul {
								
								list-style: none;
								margin-left:250px;
							}
		
							#mainPageNav li {
								margin-top: 20px;
								width: 210px;
								height: 100px;
								float: left;
							}
						
					</style>
					
					<style>
								
									table, table td, table tr {
										padding:0px;
										border-spacing: 0px;
									}

									table {
										
										border:1px black solid;
										border-radius:5px;
										min-width:500px;
										height: 200px;
										font-family: Helvetica,Arial;
										margin-left:250px;
									}
									
									table th{
										position:relative;
										color: #FFFFFF;
										font-size: 160%;
										height: 20px;
										text-align: center;
										line-height: 20px;
										background-color: #08088A;
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
				

				
					<section id="content">
				
							<?php
							 $perfil = mysql_query("SELECT * FROM usuarios WHERE usuario_nombre='".$_SESSION['usuario_nombre']."'") or die(mysql_error());
							 if(mysql_num_rows($perfil)) { // Comprobamos que exista el registro con la ID ingresada
								  $row = mysql_fetch_array($perfil);
								  $id = $row["usuario_id"];
									$nombre = $row["nombre"];
									$apellidos = $row["apellidos"];		
									$dni = $row["dni"];
								  $nick = $row["usuario_nombre"];
								  $email = $row["usuario_email"];
								  $freg = $row["usuario_freg"];
								  $id_usuario = $row["usuario_id"];
							?>		
	        				<div>
								<table border="3">
								<br /><center><div style="font-size: 190%; margin-bottom: 30px; margin-top: -3px; font: oblique bold 250% cursive"><u>DATOS DEL PERFIL</u></div></center><br />
								<br /><center> <div style="margin-top: -5px; font-weight:bold; color: #000099; font: oblique bold 200% cursive"> <?=$nombre?> <?=$apellidos?></div></center><br />
								<br />
								<tr>
					
								<td><strong><div style="margin-top: -5px; font-weight:bold; color: #000099; font: oblique bold 130% cursive">DNI:</div></strong></td>
								<td><?=$dni?><br /></td>
			
								</tr>

								<tr>
		
								<td><strong><div style="margin-top: -5px; font-weight:bold; color: #000099; font: oblique bold 130% cursive">Nombre de usuario:</div></strong></td>
								<td><?=$nick?></td>
			
								</tr>

								<tr>
			
								<td><strong><div style="margin-top: -5px; font-weight:bold; color: #000099; font: oblique bold 130% cursive">Email:</div></strong></td> 
								<td><?=$email?></td>

								</tr>

								<tr>
			
								<td><strong><div style="margin-top: -5px; font-weight:bold; color: #000099; font: oblique bold 130% cursive">Registrado el:</div></strong></td> 
								<td><?=$freg?></td>
	
								</tr>
		
								<tr>
			
								<td><strong><div style="margin-top: -5px; font-weight:bold; color: #000099; font: oblique bold 130% cursive">URL del perfil:</div></strong></td> 
								<td><a href="perfil.php?id=<?=$id?>">Click aquí</a></td>

								</tr>
								
								<tr>
			
								<td><strong><div style="margin-top: -5px; font-weight:bold; color: #000099; font: oblique bold 130% cursive">Mi ID es:</div></strong></td> 
								<td><?=$id_usuario?></td>

								</tr>
									  
								</table>
		
								<br>
								<center><strong><a href="cambiarContrasena.php">Cambiar contraseña</a></strong></center><br>

								
								</div>
		
							<?php
								 }else {
							?>
									  <p>El perfil seleccionado no existe o ha sido eliminado.</p>
							<?php
								 }
							?> 
						
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
					
					<div class="wrapper">
						<ul class="">
							
							<h2><center><br><br><br<br><br><li><a href="#">Copyright © 2015 Enlazados. All rights reserved.</a></li></center></h2>
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
