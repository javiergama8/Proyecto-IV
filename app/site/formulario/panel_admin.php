<?php
    session_start();
    include('acceso_db.php'); // incluímos los datos de acceso a la BD
    // comprobamos que se haya iniciado la sesión
    if(isset($_SESSION['administrador_nombre'])) {
?>

<!doctype html>

<html>

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
		
		<!--Validacion del formulario-->
		<script language="JavaScript" type="text/javascript">
			function validarPasswd() {
				var p1 = document.getElementById("passwd").value;
				var p2 = document.getElementById("passwd2").value;
				
				if (p1 != p2) {
					alert("Las contraseñas deben coincidir");
					return false;
				} else {
					alert("Todo está correcto");
					return true;
				}
				
			}
		</script> 
	</head>

<div class="body1">
			<div class="body2">
				<div class="main">
		<!-- header -->
					<header>
						<div class="wrapper">
							<h1><a href="index.php" id="logo">ENLAZADOS</a></h1>
							<div class="right">
								<nav>
									
											
											
											
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
								<li class="nav3"><a href="formulario1.php">ENLAZA-ME</a></li>
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
							<h2>PANEL DEL ADMINISTRADOR <span> </span></h2>
							
					</div>
				</div>
			</div>
			<div class="body7">
				<div class="main">
					<section id="content">
				
							<center><div style="font-weight:bold; color: #000099; font: oblique bold 250% cursive"><p>Bienvenido ADMINISTRADOR </strong> <a href="logoutAdministrador.php">Salir</a></p></div></center>
						
					<center>	<?php
							 $perfil = mysql_query("SELECT * FROM usuarios");

							echo "<table width=300 border='2'>";  
							echo "<tr>";  
							echo "<th>Nombre</th>";  
							echo "<th>Apellidos</th>"; 
							echo "<th>DNI</th>";  
							echo "<th>Usuario</th>"; 
							echo "<th>Email</th>"; 
							echo "<th>Fecha Registro</th>"; 
							
							echo "</tr>";  
							while ($row = mysql_fetch_row($perfil)){   
								 echo "<tr>";  
								 echo "<td>$row[1]</td>"; 
								  echo "<td>$row[2]</td>";   
								 echo "<td>$row[3]</td>";  
								 echo "<td>$row[4]</td>";  
								  echo "<td>$row[6]</td>"; 
								  echo "<td>$row[7]</td>";
								 echo "</tr>";  
							}  
							echo "</table>";
							
							?> <br><br> </center>

						
						
						
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
									margin-left:210px;
								}
		
								#mainPageNav li {
									width: 100px;
									float: left;
								}
						</style>
							
							
							<?php
    			}else {
        			echo "<font size='8'><center>Solo el ADMINISTRADOR. Gracias.</center></font><br /><font size='7'><center><a href='acceso_admin.php'>Ingresar</a>";
	
    			}
?>
							
							
		
    
						 <style>
						 	/*		#content {
									 width: 65%;
									 max-width: 690px;
									 margin: 6% auto 0;
									 }

							table {
								 overflow: hidden;
								 border: 1px solid #d3d3d3;
								 background: #fefefe;
								 width: 70%;
								 margin: 5% auto 0;
								 margin-left: -35px;
								 border-radius:5px;
								 box-shadow: 0 0 4px rgba(0, 0, 0, 0.2);
							}
							th, td {padding:18px 28px 18px; text-align:center; }
							th {padding-top:22px; text-shadow: 1px 1px 1px #fff; background:#e8eaeb;}
							td {border-top:1px solid #e0e0e0; border-right:1px solid #e0e0e0;}
							tr.odd-row td {background:#f6f6f6;}
							td.first, th.first {text-align:left}
							td.last {border-right:none;}

							td {
								 background: -moz-linear-gradient(100% 25% 90deg, #fefefe, #f9f9f9);
								 background: -webkit-gradient(linear, 0% 0%, 0% 25%, from(#f9f9f9), to(#fefefe));
							}
							tr.odd-row td {
								 background: -moz-linear-gradient(100% 25% 90deg, #f6f6f6, #f1f1f1);
								 background: -webkit-gradient(linear, 0% 0%, 0% 25%, from(#f1f1f1), to(#f6f6f6));
							}
							th {
								 background: -moz-linear-gradient(100% 20% 90deg, #e8eaeb, #ededed);
								 background: -webkit-gradient(linear, 0% 0%, 0% 20%, from(#ededed), to(#e8eaeb));
							}
							tr:first-child th.first {
								 -moz-border-radius-topleft:5px;
								 -webkit-border-top-left-radius:5px; /* Saf3-4 */
						/* 	}
							tr:first-child th.last {
								 -moz-border-radius-topright:5px;
								 -webkit-border-top-right-radius:5px; /* Saf3-4 */
						/* 	}
							tr:last-child td.first {
								 -moz-border-radius-bottomleft:5px;
								 -webkit-border-bottom-left-radius:5px; /* Saf3-4 */
						/* 	}
							tr:last-child td.last {
								 -moz-border-radius-bottomright:5px;
								 -webkit-border-bottom-right-radius:5px; /* Saf3-4 */
							/* }*/
					
							#formulario{
							float:center;
							text-align: center;
						}
						 
						 </style>
    
    
    
    
    						 <section class="formulario">
           
								<form action="borrar.php" method="post" name="form">
								<center><fieldset>
								<legend><b>Borrar usuarios</b></legend>
								<br/>
								<p>*INTRODUCE EL NOMBRE DE USUARIO A BORRAR*</p>
								<div id="cuadro" style="font-weight:bold; color: #000099; font: oblique bold 120% cursive"><label>Nombre de usuario</label>
								<br/>
								<input type="text" name="usuario_nombre" maxlength="15" style=" border: 1px solid #DBE1EB;font-size: 18px;font-family: Arial, Verdana;padding-left: 7px;padding-right: 7px;border-radius: 4px;-moz-border-radius: 4px;-webkit-border-radius: 4px;-o-border-radius: 4px;background: linear-gradient(left, #FFFFFF, #F7F9FA);background: -moz-linear-gradient(left, #FFFFFF, #F7F9FA);background: -webkit-linear-gradient(left, #FFFFFF, #F7F9FA);background: -o-linear-gradient(left, #FFFFFF, #F7F9FA);color: #2E3133;" /></div>
								
								<br/>
								<input type="submit" id="botonesAbajo" name="borrar" class="myButton" value="Borrar" /><br>
			
							
								</fieldset></center>
				
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
																 width: 250px;
																 height: 60px;
																 background-color:#A9A9F5;
																 -moz-border-radius: 10px;
																 -webkit-border-radius: 10px;
															}
								</style>
        					</section>
        					
        				<center>	<?php
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
							
							?> <br><br></center>
							
							<style>
								
									table, table td, table tr {
										padding:0px;
										border-spacing: 0px;
									}

									table {
										margin-top: 50px;
									
										border:1px black solid;
										border-radius:5px;
										min-width:400px;
										
										font-family: Helvetica,Arial;
									}
									
									table th{
										position:relative;
										color: #FFFFFF;
										font-size: 120%;
										height: 20px;
										text-align: center;
										line-height: 20px;
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
							
							<form action="borrarEnlaces.php" method="post" name="form">
								<center><fieldset>
								<legend><b>Borrar enlaces</b></legend>
								<br/>
								<p>*INTRODUCE EL ENLACE A BORRAR*</p>
							<div id="cuadro" style="font-weight:bold; color: #000099; font: oblique bold 120% cursive">	<label>Url de enlaces</label>
								<br/>
								<input type="text" name="url" maxlength="15" style=" border: 1px solid #DBE1EB;font-size: 18px;font-family: Arial, Verdana;padding-left: 7px;padding-right: 7px;border-radius: 4px;-moz-border-radius: 4px;-webkit-border-radius: 4px;-o-border-radius: 4px;background: linear-gradient(left, #FFFFFF, #F7F9FA);background: -moz-linear-gradient(left, #FFFFFF, #F7F9FA);background: -webkit-linear-gradient(left, #FFFFFF, #F7F9FA);background: -o-linear-gradient(left, #FFFFFF, #F7F9FA);color: #2E3133;"  /></div>
								<br/>
								
								<input type="submit" id="botonesAbajo" name="borrarEnlaces" class="myButton" value="Borrar" /><br>
			
							
								</fieldset></center>
				
								</form>
							
						
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
