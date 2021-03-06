﻿<?php
	session_start();
	include('formulario/acceso_db.php'); // incluimos el archivo de conexión a la Base de Datos
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
	
	<body id="page2">
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
								<li class="nav3"><a href="../formulario1.php">REGISTRO</a></li>
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
						
							<figure class="left"><img width=50 height=50 src="../images/motorImage.png" alt=""></figure>
							<h2>NOTICIAS SOBRE MOTOR<span> Novedades sobre motor</span></h2>
						
						</div>
					</div>
				</div>
			</div>
			<div class="body7">
				<div class="main">
				<!--EMPIEZO LAS SECCIONES-->
					<section id="content">
							<style>
								*           {margin:0;padding:0;}
								body        {background:#333;}
								a           {color:orange}
								h1          {font-size:22px;font-family:helvetica;font-weight:bold;}
								h3          {font-size:18px;font-family:helvetica;font-weight:bold;}
								ul          {list-style-type:none;}
								ol          {list-style-type:none;}
								#contenido  {position:absolute;width:100%;height:100%;overflow:hidden;color:white;}
								#cabecera   {float:left;width:100%;height:13%;overflow:hidden;}
								#central    {float:left;width:100%;height:73%;overflow:hidden;}
								#piepagina  {float:left;width:100%;height:13%;overflow:hidden;}
								#cizquierdo {float:left;width:9%;height:100%;overflow:hidden;}
								#ccentral   {float:left;width:81.9%;height:100%;overflow:hidden;}
								#cderecho   {float:left;width:9%;height:100%;overflow:hidden;}
								.imagenesc  {float:left;width:9.08%;height:98%;margin:0;padding:0;cursor:pointer;}
								.imagenesl  {float:left;width:100%;height:16.7% ;margin:0;padding:0;cursor:pointer;}
								.borde      {float:left;width:98%;height:97%;margin:1%;background:white;border:#ccc 2px solid;overflow:hidden;}
								.bordec     {float:left;width:80%;height:80%;margin:10%;background:url(http://4.bp.blogspot.com/-qyelCrIhglU/T42Be6wtyBI/AAAAAAAAAWw/l0RT9XZOLBM/s200/fazul.jpg) bottom left;border:white 2px solid;-moz-border-radius: 10px;-webkit-border-radius:10px;border-radius:10px;-moz-box-shadow: 0 1px 5px white;-webkit-box-shadow: 0 1px 5px white;}
								.bordel     {float:left;width:80%;height:80%;margin:10%;background:#848484;border:white 2px solid;-moz-border-radius: 10px;-webkit-border-radius:10px;border-radius:10px;-moz-box-shadow: 0 1px 5px white;-webkit-box-shadow: 0 1px 5px white;}
								.cuecentral {float:left;width:100%;height:100%;overflow:hidden;font-size:16px;color:black;text-align:center;}
								.cuecentralt{position:absolute;z-index:5000;left:30%;top:40%;width:35%;height:10%;overflow:hidden;font-size:18px;font-family:helvetica;font-weight:bold;padding:1.2%;color:white;text-align:center;background-color:#333;border:#ccc 2px solid;-moz-border-radius: 10px;-webkit-border-radius:10px;border-radius:10px;-moz-box-shadow: 0 1px 5px #ccc;-webkit-box-shadow: 0 1px 5px #ccc;    -moz-opacity: 0.90;    opacity:.90;    filter: alpha(opacity=90);  }
								.titulo     {position:fixed;width:100%;height:34px;top:0px;left:0px;line-height:34px;min-width:870px;border-bottom:#aaa 1px solid;color:#fff;font-size:22px;font-weight:bold;font-family:helvetica;overflow:hidden;background:url(http://2.bp.blogspot.com/-RW8h2i-ZmiA/T-wdDo8VLNI/AAAAAAAAAZI/13AwJi-UIKw/s1600/menu.gif) top left;z-index:0;}
								.abcd       {background:url(http://2.bp.blogspot.com/-RW8h2i-ZmiA/T-wdDo8VLNI/AAAAAAAAAZI/13AwJi-UIKw/s1600/menu.gif) top left;padding:2px;margin-right:4px;-moz-border-radius: 2px;-webkit-border-radius:2px;border-radius:2px;}
								.utilidades {position:absolute;width:130px;top:40px;left:0px;height:575px;border-right:#ccc 1px solid;}
								.calendario {float:left;width:128px;height:98px;padding-top:42px;margin-top:-5px;text-align:center;color:black;font-size:16px;font-weight:bold;font-family:helvetica;overflow:hidden;background:url(http://4.bp.blogspot.com/-xBIJWhLXwAU/T3xsSfgEOMI/AAAAAAAAANA/eNLgi1Y9sDU/s200/calendario.png) no-repeat top left;cursor:pointer;}
								.hora       {float:left;width:100px;margin-left:13px;height:30px;padding-top:4px;border:#999 1px solid;text-align:center;color:#fff;font-size:22px;font-weight:bold;font-family:helvetica;overflow:hidden;background:url(http://2.bp.blogspot.com/-RW8h2i-ZmiA/T-wdDo8VLNI/AAAAAAAAAZI/13AwJi-UIKw/s1600/menu.gif) center left;}
								.frase      {float:left;width:128px;height:158px;margin-top:-10px;text-align:left;color:black;font-size:10px;font-family:helvetica;overflow:hidden;background:url(http://1.bp.blogspot.com/-iLhH_jy4UO8/T3xsaCOOiMI/AAAAAAAAANM/1_9ZJUqueiM/s200/frase.png) no-repeat top left;}
								.ira        {float:left;width:128px;height:22px;text-align:center;color:#222;font-size:14px;font-weight:bold;font-family:helvetica;overflow:hidden;}
								.notas      {float:left;width:128px;height:27px;cursor:pointer;text-align:center;color:#08298A;font-size:13px;font-weight:bold;font-family:helvetica;overflow:hidden;}
								.iconos     {float:left;width:128px;height:145px;margin-top:5px;text-align:center;color:#222;font-size:14px;font-weight:bold;font-family:helvetica;cursor:pointer;padding:0}
								.iconos2    {float:left;width:128px;height:65px;margin-top:5px;text-align:center;color:#222;font-size:14px;font-weight:bold;font-family:helvetica;cursor:pointer;padding:0}
								.enlaces    {position:absolute;top:40px;left:135px;width:85%;min-width:735px;}
								.boxasocia  {position:absolute;width:158px;height:98px;left:9px;top:88px;font-size:12px;padding-left:10px;background-color:white;color:black;overflow-y:scroll;border:1px solid #6D7B8D;cursor:pointer;}
								.inicorreo   {float:left; margin-top:5px; left:0; width:94.9%; color:#333;  overflow:hidden; z-index:100; }	
								.inicorreo li{background-color:#f0f0f0; float:left; width:155px; height:48px; line-height:48px; margin-left:10px; margin-top:5px; margin-bottom:5px; margin-right:5px; text-align:center; font-size:16px; font-family:helvetica; font-weight:bold; cursor:pointer; overflow:hidden;}
								.inicorreo li:hover{ color:#08298A;}
								.inicorreo1   {float:left; margin-top:10px; left:0; width:99.9%; color:#333;  overflow:hidden; z-index:100; }	
								.inicorreo1 li{background-color:#f0f0f0; float:left; width:180px; height:50px; line-height:50px; margin-left:10px; margin-top:5px; margin-bottom:5px; margin-right:5px; text-align:center; font-size:16px; font-family:helvetica; font-weight:bold; cursor:pointer; overflow:hidden;}
								.inicorreo1 li:hover{ color:#08298A;}
								.inicorreo2   {float:left; margin-top:20px; margin-left:20px; width:99.9%; color:#333;  overflow:hidden; z-index:100; }	
								.inicorreo2 li{background-color:#f0f0f0; float:left; padding-left:20px; width:180px; height:30px; line-height:30px; margin-top:5px; margin-bottom:5px; margin-right:5px; text-align:left; font-size:14px; font-family:helvetica; font-weight:bold; cursor:pointer; overflow:hidden;}
								.inicorreo2 li:hover{ color:#08298A;}
								.inicorreo3   {float:left; margin-top:20px; margin-left:20px; width:99.9%; color:#333;  overflow:hidden; z-index:100; }	
								.inicorreo3 li{background-color:#f0f0f0; float:left; width:180px; height:30px; line-height:30px; margin-top:5px; margin-bottom:5px; margin-right:5px; text-align:left; font-size:14px; font-family:helvetica; font-weight:bold; cursor:pointer; overflow:hidden;}
								.inicorreo3 li:hover{ color:#08298A;}
								.subindices  {float:left; margin-top:10px; left:0px; width:72%; min-width:735px;color:black;  overflow:hidden; z-index:100; font-family:helvetica}	
								.subindices li{float:left; width:25%; min-width:209px; margin-left:20px;height:35px; line-height:35px;margin-top:5px; margin-bottom:5px; text-align:left; padding-left:40px; font-size:16px; font-family:helvetica; font-weight:bold; cursor:pointer; overflow:hidden;}
								.subindices li:hover{ color:orange;}
								.subindices1  {float:left; margin-top:10px; left:0px; width:82%; min-width:735px;color:black;  overflow:hidden; z-index:100; }	
								.subindices1 li{float:left; width:80%; min-width:539px; margin-left:20px;height:35px; line-height:35px;margin-top:5px; margin-bottom:5px; text-align:left; padding-left:40px; font-size:16px; font-family:helvetica; font-weight:bold; cursor:pointer; overflow:hidden;}
								.subindices1 li:hover{ color:orange;}
								.subindices2  {float:left; margin-top:10px; left:0px; width:92%; min-width:735px;color:black;  overflow:hidden; z-index:100; }	
								.subindices2 li{float:left; width:95%; margin-left:20px;margin-top:5px; margin-bottom:5px; text-align:left; padding-left:40px; font-size:16px; font-family:helvetica; font-weight:bold; cursor:pointer; overflow:hidden;}
								.subindices2 li:hover{ color:orange;}
								.subindices3  {float:left; margin-top:10px; left:0px; width:79%;color:black;  overflow:hidden; z-index:100; font-family:helvetica}	
								.subindices3 li{float:left; width:39%;margin-left:20px;height:35px; line-height:35px;margin-top:5px; margin-bottom:5px; text-align:left; padding-left:40px; font-size:16px; font-family:helvetica; font-weight:bold; cursor:pointer; overflow:hidden;}
								.subindices3 li:hover{ color:orange;}
								.subindices4  {float:left; margin-top:10px; left:0px; width:20%; color:black;  overflow:hidden; z-index:100; font-family:helvetica}	
								.subindices4 li{float:left; width:25%; min-width:150px; margin-left:20px;height:35px; line-height:35px;margin-top:5px; margin-bottom:5px; text-align:left; padding-left:40px; font-size:16px; font-family:helvetica; font-weight:bold; cursor:pointer; overflow:hidden;}
								.subindices4 li:hover{ color:orange;}
								#detalleff li {	padding:10px;	float:left;	width:240px;	height:70px;	overflow:hidden;}
								#detalleff li:hover{color:#08298A;}
								#detalleff li p{font-size:12px;color:#aaa;}
								#detalleff h2 span {	font-size:22px;}
								#detalleff p {	color:#6E6E6E;	font-size:12px;	margin-top:8px;}
								#detalleff .fuente {	margin:20px 10px 10px 10px;}
								#detalleff{ float:left; font-family:helvetica; margin-top:10px; margin-left:10px; width:97.9%; color:black;  overflow:hidden; z-index:100; margin-left:20px;}
								#botonnavegardown{position:fixed;top:0px;right:0%;width:40px;height:40px;cursor:pointer;background:url(http://1.bp.blogspot.com/-ocDYjAB83Do/Ua-00sW0bQI/AAAAAAAABZk/1AtwMnGdNLo/s1600/subir.png) no-repeat top right;z-index:4000;}
								#botonnavegarup  {position:fixed;bottom:7px;right:0%;width:40px;height:50px;cursor:pointer;background:url(http://1.bp.blogspot.com/-dR-q4YIkb00/Ua4ftd69AJI/AAAAAAAABYY/l3hoHYX5arQ/s1600/down.png) no-repeat bottom right;z-index:4000;}
								#botonresumen{position:fixed;top:36%;right:0%;width:27px;height:115px;z-index:4000;cursor:pointer;background:url(http://4.bp.blogspot.com/-q4XlBha6nYo/Ua4g5GJW8zI/AAAAAAAABYs/T37g3Aa_dE4/s1600/noticias.png) no-repeat center right;}
								.feedControl {float:left;color:#aaa}
								.feedControl .gf-snippet, 
								.feedControl .gf-author, 
								.feedControl .gf-spacer,
								.feedControl .gfc-resultsHeader,
								.feedControl .gf-relativePublishedDate {display : none;}    
								.feedControl .gf-title{text-decoration:none;font-weight:bold;font-size:12px;color:#aaa;font-family:helvetica;}
								.feedControl .gf-title:hover{color:#aaa;} 
								.feedControl .gfc-results {padding-bottom : 0px; }
								.feedControl .gfc-result {margin-bottom : 0px;font-size:10px;color:#aaa;font-family:helvetica;}
								#menuip  {float:left;        width:100%;        height:25px;        z-index:1001;        background:url(http://2.bp.blogspot.com/-RW8h2i-ZmiA/T-wdDo8VLNI/AAAAAAAAAZI/13AwJi-UIKw/s1600/menu.gif) repeat top left;}        	
								#tituloip{float:left;        width:100%;         height:100%;         text-align:left;         color:white;         font-size:18px;         font-weight:bold;        z-index:1001;      text-align:center;}
								#iconosiprss{margin-top:3%;         text-align:center;        margin-bottom:3%;               margin-left:1.4%;         margin-right:1.4%;               float:left;         width:17%;         text-align:left;         color:black;         font-size:18px;         font-weight:bold;         z-index:1001;  }
								#nubepalabras{font-size: 100%;	width: auto;font-family:'lucida grande','trebuchet ms',helvetica,helvetica,sans-serif;background-color:#fff;	margin:1em 1em 0 1em;	border:2px dotted #ddd;	padding:2em;} #nubepalabras{line-height:2.4em;word-spacing:normal;letter-spacing:normal;text-transform:none;text-align:justify;text-indent:0} #nubepalabras a:link{text-decoration:none} #nubepalabras a:visited{text-decoration:none} #nubepalabras a:hover{color:white;background-color:#05f} #nubepalabras a:active{color:white;background-color:#03d} .prd{padding:0;position:relative} .prd a{text-decoration:none} .nubetag1{font-size:1.2em;color:#ACC1F3;z-index:9} .nubetag1 a{color:#ACC1F3} .nubetag2{font-size:1.4em;color:#86A0DC;z-index:8} .nubetag2 a{color:#86A0DC} .nubetag3{font-size:1.8em;color:#86A0DC;z-index:7} .nubetag3 a{color:#86A0DC}
								.noexiste{
								background:url(http://3.bp.blogspot.com/-cBQ9xzgBE2Q/T-wc-7vh--I/AAAAAAAAAY8/wQMsGgGVXTg/s1600/index-a.png) no-repeat center left;padding-left:25px;
								} 
							</style>

							
							<img src="../images/flecha.png" border="0" onclick="history.back(-1);">
							
				
							<div id="detalleff">
							  <ul>

								 <li style="cursor:pointer" title="Autobild" onclick="window.open('http://www.autobild.es')"><h2><span style="background:url(http://drive.google.com/uc?export=view&id=0B8nOgCL0Aof1MVlTX003QkpHSFE) no-repeat center left;background-size:16px 16px;padding-left:25px;">Autobild</span></h2></li>
								 
								 <li style="cursor:pointer" title="Autopista" onclick="window.open('http://www.autopista.es/')"><h2><span style="background:url(http://drive.google.com/uc?export=view&id=0B8nOgCL0Aof1OW1tX3JmR1pwbzA) no-repeat center left;background-size:16px 16px;padding-left:25px;">Autopista</span></h2></li>
								 
								 <li style="cursor:pointer" title="Portal Motos" onclick="window.open('http://www.portalmotos.com')"><h2><span style="background:url(http://drive.google.com/uc?export=view&id=0B8nOgCL0Aof1UWRtcjk0U2Z0ajg) no-repeat center left;background-size:16px 16px;padding-left:25px;">PortalMotos</span></h2></li>
								 
								 <li style="cursor:pointer" title="Motor Pasión" onclick="window.open('http://www.motorpasion.com')"><h2><span style="background:url(http://drive.google.com/uc?export=view&id=0B8nOgCL0Aof1dFFldFUxcWNXYzg) no-repeat center left;background-size:16px 16px;padding-left:25px;">MotorPasion</span></h2></li>
								 
								 
								 <li style="cursor:pointer" title="Motor Full" onclick="window.open('http://www.motorfull.com/')"><h2><span style="background:url(http://drive.google.com/uc?export=view&id=0B8nOgCL0Aof1MzltWlU1SFNUQkk) no-repeat center left;background-size:16px 16px;padding-left:25px;">Motorfull</span></h2></li>
								 
								 <li style="cursor:pointer" title="Motor Fan" onclick="window.open('http://www.motofan.com/')"><h2><span style="background:url(http://drive.google.com/uc?export=view&id=0B8nOgCL0Aof1TEtGR2o3dVdKbWc) no-repeat center left;background-size:16px 16px;padding-left:25px;">Motofan</span></h2></li>
								 

							  			
							 	</ul>
							</div>
				
					
					</section>
				</div>
			</div>
		<!-- / content -->
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
