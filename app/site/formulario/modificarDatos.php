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
				
				
				
				
				
				
				
					<section id="content">
				
									
									
									
									
									
									
									<?php
	    		if(isset($_POST['enviar'])) { // comprobamos que se han enviado los datos desde el formulario
	        	// creamos una función que nos parmita validar el email
	        	function valida_email($correo) {
	            		if (preg_match('/^[A-Za-z0-9-_.+%]+@[A-Za-z0-9-.]+\.[A-Za-z]{2,4}$/', $correo)) return true;
	           		else return false;
	      		}
	        	// Procedemos a comprobar que los campos del formulario no estén vacíos
	        	$sin_espacios = count_chars($_POST['usuario_nombre'], 1);
	        	if(!empty($sin_espacios[32])) { // comprobamos que el campo usuario_nombre no tenga espacios en blanco
	            		echo "El campo <em>usuario_nombre</em> no debe contener espacios en blanco. <a href='javascript:history.back();'>Reintentar</a>";
	        	}elseif(empty($_POST['usuario_nombre'])) { // comprobamos que el campo usuario_nombre no esté vacío
	            		echo "No has ingresado tu usuario. <a href='javascript:history.back();'>Reintentar</a>";
			}elseif(empty($_POST['nombre'])) { // comprobamos que el campo nombre no esté vacío
	            		echo "No has ingresado tu usuario. <a href='javascript:history.back();'>Reintentar</a>";
			}elseif(empty($_POST['apellidos'])) { // comprobamos que el campo apellidos no esté vacío
	            		echo "No has ingresado tu usuario. <a href='javascript:history.back();'>Reintentar</a>";
			}elseif(empty($_POST['dni'])) { // comprobamos que el campo dni no esté vacío
	            		echo "No has ingresado tu usuario. <a href='javascript:history.back();'>Reintentar</a>";
	        	}elseif(empty($_POST['usuario_clave'])) { // comprobamos que el campo usuario_clave no esté vacío
	            		echo "No has ingresado contraseña. <a href='javascript:history.back();'>Reintentar</a>";
	        	}elseif($_POST['usuario_clave'] != $_POST['usuario_clave_conf']) { // comprobamos que las contraseñas ingresadas coincidan
	            		echo "Las contraseñas ingresadas no coinciden. <a href='javascript:history.back();'>Reintentar</a>";
	        	}elseif(!valida_email($_POST['usuario_email'])) { // validamos que el email ingresado sea correcto
	            		echo "El email ingresado no es válido. <a href='javascript:history.back();'>Reintentar</a>";
	        	}else {
	            		// "limpiamos" los campos del formulario de posibles códigos maliciosos
	            		$nombre = mysql_real_escape_string($_POST['nombre']);
							$apellidos = mysql_real_escape_string($_POST['apellidos']);
							$dni = mysql_real_escape_string($_POST['dni']);
							$usuario_nombre = mysql_real_escape_string($_POST['usuario_nombre']);
	            		$usuario_clave = mysql_real_escape_string($_POST['usuario_clave']);
	           		$usuario_email = mysql_real_escape_string($_POST['usuario_email']);
	            		// comprobamos que el usuario ingresado no haya sido registrado antes
	            		$sql = mysql_query("SELECT usuario_nombre FROM usuarios WHERE usuario_nombre='".$usuario_nombre."'");
	            	if(mysql_num_rows($sql) > 0) {
	                	echo "<br>El nombre usuario elegido ya ha sido registrado anteriormente. <a href='javascript:history.back();'>Reintentar</a>";
	            	}else {
	                	$usuario_clave = md5($usuario_clave); // encriptamos la contraseña ingresada con md5
	                	// ingresamos los datos a la BD
	                	$reg = mysql_query("INSERT INTO usuarios (nombre, apellidos, dni, usuario_nombre, usuario_clave, usuario_email, usuario_freg) VALUES ('".$nombre."', '".$apellidos."', '".$dni."', '".$usuario_nombre."', '".$usuario_clave."', '".$usuario_email."', NOW())");
	                if($reg) {
	                    echo "<br><div style='font-size: 150%'>Datos ingresados correctamente.</div><br>";
	                }else {
	                    echo "ha ocurrido un error y no se registraron los datos.";
	                }
	            }
	        }
	    }else {
	?>
				
					<section id="content">
				
										
				
							<section id="formulario">
								 <div style="font-size: 350%; margin-top: 20px; margin-bottom: 55px; font-weight:bold; color: #000099;   text-decoration: underline; font: oblique bold 350% cursive; ">Formulario modificación</div>
							<form action="updateUser.php" method="post">
								 
							<fieldset style="border: 3px dashed #000099;width:40%;background:#81BEF7;color:#ffffff; margin-left: 10px; margin-top: -10px">
								 <legend><b><div style="font-size: 190%; margin-bottom: 30px; margin-top: -3px; font: oblique bold 250% cursive">Datos personales</div></b></legend>
								 <label><div style="margin-top: -5px; font-weight:bold; color: #000099; font: oblique bold 120% cursive">Nombre:</label><br />
								 <input type="text" name="nombre" maxlength="15" style=" border: 1px solid #DBE1EB;font-size: 18px;font-family: Arial, Verdana;padding-left: 7px;padding-right: 7px;border-radius: 4px;-moz-border-radius: 4px;-webkit-border-radius: 4px;-o-border-radius: 4px;background: linear-gradient(left, #FFFFFF, #F7F9FA);background: -moz-linear-gradient(left, #FFFFFF, #F7F9FA);background: -webkit-linear-gradient(left, #FFFFFF, #F7F9FA);background: -o-linear-gradient(left, #FFFFFF, #F7F9FA);color: #2E3133;" required/><br /><br>
								 <label>Apellidos:</label><br />
								 <input type="text" name="apellidos" maxlength="15" style=" border: 1px solid #DBE1EB;font-size: 18px;font-family: Arial, Verdana;padding-left: 7px;padding-right: 7px;border-radius: 4px;-moz-border-radius: 4px;-webkit-border-radius: 4px;-o-border-radius: 4px;background: linear-gradient(left, #FFFFFF, #F7F9FA);background: -moz-linear-gradient(left, #FFFFFF, #F7F9FA);background: -webkit-linear-gradient(left, #FFFFFF, #F7F9FA);background: -o-linear-gradient(left, #FFFFFF, #F7F9FA);color: #2E3133;" required/><br /><br>
								 <label>DNI:</label><br />
								 <input type="text" name="dni" maxlength="15" style=" border: 1px solid #DBE1EB;font-size: 18px;font-family: Arial, Verdana;padding-left: 7px;padding-right: 7px;border-radius: 4px;-moz-border-radius: 4px;-webkit-border-radius: 4px;-o-border-radius: 4px;background: linear-gradient(left, #FFFFFF, #F7F9FA);background: -moz-linear-gradient(left, #FFFFFF, #F7F9FA);background: -webkit-linear-gradient(left, #FFFFFF, #F7F9FA);background: -o-linear-gradient(left, #FFFFFF, #F7F9FA);color: #2E3133;" required/><br /><br>
								 <label for="dateNac"><font color="red"></font> Fecha de nacimiento:</label><br />
								 <input type = "date" id = "dateNac" name="dateNac" value = "" title="Introduzca su fecha nacimiento" style=" border: 1px solid #DBE1EB;font-size: 18px;font-family: Arial, Verdana;padding-left: 7px;padding-right: 7px;border-radius: 4px;-moz-border-radius: 4px;-webkit-border-radius: 4px;-o-border-radius: 4px;background: linear-gradient(left, #FFFFFF, #F7F9FA);background: -moz-linear-gradient(left, #FFFFFF, #F7F9FA);background: -webkit-linear-gradient(left, #FFFFFF, #F7F9FA);background: -o-linear-gradient(left, #FFFFFF, #F7F9FA);color: #2E3133;"/></div><br>
							</fieldset><br>
							<fieldset style="border: 3px dashed #000099;width:40%;background:#81BEF7;color:#ffffff; margin-left: 480px; margin-top: -390px ">
								 <legend><b><div style="font-size: 190%; margin-top: -3px; font: oblique bold 250% cursive">Datos de Suscripción</div></b></legend>
								 <div style="font-weight:bold; color: #000099; font: oblique bold 120% cursive""><label>Usuario:</label><br />
								 <input type="text" name="usuario_nombre" maxlength="15" style=" border: 1px solid #DBE1EB;font-size: 18px;font-family: Arial, Verdana;padding-left: 7px;padding-right: 7px;border-radius: 4px;-moz-border-radius: 4px;-webkit-border-radius: 4px;-o-border-radius: 4px;background: linear-gradient(left, #FFFFFF, #F7F9FA);background: -moz-linear-gradient(left, #FFFFFF, #F7F9FA);background: -webkit-linear-gradient(left, #FFFFFF, #F7F9FA);background: -o-linear-gradient(left, #FFFFFF, #F7F9FA);color: #2E3133;" required/><br /><br>
								 <label>Contraseña:</label><br />
								 <input type="password" name="usuario_clave" maxlength="15" style=" border: 1px solid #DBE1EB;font-size: 18px;font-family: Arial, Verdana;padding-left: 7px;padding-right: 7px;border-radius: 4px;-moz-border-radius: 4px;-webkit-border-radius: 4px;-o-border-radius: 4px;background: linear-gradient(left, #FFFFFF, #F7F9FA);background: -moz-linear-gradient(left, #FFFFFF, #F7F9FA);background: -webkit-linear-gradient(left, #FFFFFF, #F7F9FA);background: -o-linear-gradient(left, #FFFFFF, #F7F9FA);color: #2E3133;" required/><br /><br>
								 <label>Confirmar Contraseña:</label><br />
								 <input type="password" name="usuario_clave_conf" maxlength="15" style=" border: 1px solid #DBE1EB;font-size: 18px;font-family: Arial, Verdana;padding-left: 7px;padding-right: 7px;border-radius: 4px;-moz-border-radius: 4px;-webkit-border-radius: 4px;-o-border-radius: 4px;background: linear-gradient(left, #FFFFFF, #F7F9FA);background: -moz-linear-gradient(left, #FFFFFF, #F7F9FA);background: -webkit-linear-gradient(left, #FFFFFF, #F7F9FA);background: -o-linear-gradient(left, #FFFFFF, #F7F9FA);color: #2E3133;" required/><br /><br>
								 <label>Email:</label><br />
								 <input type="text" name="usuario_email" maxlength="50" style=" border: 1px solid #DBE1EB;font-size: 18px;font-family: Arial, Verdana;padding-left: 7px;padding-right: 7px;border-radius: 4px;-moz-border-radius: 4px;-webkit-border-radius: 4px;-o-border-radius: 4px;background: linear-gradient(left, #FFFFFF, #F7F9FA);background: -moz-linear-gradient(left, #FFFFFF, #F7F9FA);background: -webkit-linear-gradient(left, #FFFFFF, #F7F9FA);background: -o-linear-gradient(left, #FFFFFF, #F7F9FA);color: #2E3133;" required/><br /><br></div>
							</fieldset><br />
							<div style="margin-left: -100px;margin-top:20px;">
								 <input id="botonesAbajo" type="submit" name="enviar" class="myButton" value="Modificar" />
								 <input id="botonesAbajo" type="reset" class="myButton" value="Borrar" />
							</div>
							</form>
							
							
							<style>
														#botonesAbajo {
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
															  font-size: 26px;
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
															
															legend {
															  width: 394px;
															  height: 75px;
															  overflow: hidden;
															  color: #190707;
															  border: 15px;
															}
											</style>
							
							
							
							
							
							</section>
		
							
						
					</section>
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
