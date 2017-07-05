

<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<title>Cristian Jiménez Ingeniero Técnico en Informático </title>
		<meta name="owner" content="Cristian Jiménez">
		<meta name="author" content="Cristian Jiménez">
		<link rel="stylesheet" href="css/styles.css">
		<link rel="stylesheet" href="css/normalize.css">
		<script type="text/javascript" src="javascript/modernizr-custom.js"></script>
		<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">	
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>	
		
	</head>
	<script type="text/javascript">
	
		function alertSize() { 
		  var myWidth = 0, myHeight = 0; 	var menu;
		  if( typeof( window.innerWidth ) == 'number' ) { 
	
		    myWidth = window.innerWidth; 
		  } 
			menu=document.getElementById("menu");

		  	if( myWidth < 1080){
		  		menu.style.display= "none";
		  	}else{
		  		menu.style.display= "block";
		  	}
		}

		function mostrarMenu(){
			var menu;
			var mostrar;
			var myWidth=0;
			menu=document.getElementById("menu");
			mostrar=menu.style.display;
			
			if( typeof( window.innerWidth ) == 'number' ) { 
		    	myWidth = window.innerWidth; 
		    }
			menu=document.getElementById("menu");

		  	if( myWidth < 1080){
			
				if(mostrar== "none")
				{
					menu.style.display= "block";
				}
				else
				{
					menu.style.display= "none";
				}
			}
			else {
				menu.style.display= "block";
			}
		}

	</script>

	
	<body onload="alertSize()")>
		<header>
				<nav  id="menu" class="in" >
					<div >	
						<ul >
							<li ><a class="icon-arrow-left" onClick= "mostrarMenu()"  href="#"></a></li>
							<li><a class="textoMenu" onClick= "mostrarMenu()" href="index.php"> Home </a></li>
							<li><a class="textoMenu" onClick= "mostrarMenu()" href="#serv"> Servicios </a> </li>
							<li><a class="textoMenu" onClick= "mostrarMenu()" href="#portfolio"> Portfolio </a></li>
							<li><a  class="textoMenu" onClick= "mostrarMenu()" href="#sobremi"> Sobre mi </a> </li>
							<li><a  class="textoMenu" onClick= "mostrarMenu()" href="#contacto"> Contacto </a></li>		
						</ul>
					</div>
				</nav>
				<div id="backgroundMenu">
					<a id= "linkmenu" onClick= "mostrarMenu()" > MENU </a>
				</div>
				
			</h2>

		</header>
		
		<div id="cabecera" class="inY">
			<h2 >	 
					<p id="titulo"> Bienvenido
					</p>
					<span class="titulo_resaltado"> Cristian Jiménez
					</span>
					<br>
					<span class="titulo_resaltado">Ingeniero Técnico en Informática</span>
					
			</h2>
			<h1  >
					 <p class="subtitulo">| Administración de Sistemas | <br> | Desarrollo Web |
					 </p>
			</h1>
			
		</div>
		<section class="inY">
			<p id="serv" class="titulosection" > Servicios </p>
				<center>
					<div class="servicios"> 
						<figure class="icon-cogs"></figure>
						<p class="textoGrande"> Servicio técnico </p>
							<ol class="textoServicio">Reparación de ordenadores y dispositivos móviles </ol>
							<ol class="textoServicio">Mantenimiento de sistemas de empresas y particulares</ol>
							<ol class="textoServicio">Servidores de datos, aplicaciones y correo electrónico</ol>
							<ol class="textoServicio">Asesoramiento y consultoría tecnológica</ol>
							<ol class="textoServicio">Mantenimiento adaptado a la necesidad de su empresa</ol>
							<ol class="textoServicio">Instalación de todo tipo de software</ol>
							<ol class="textoServicio">Antenas y descodificadores</ol>
							<ol class="textoServicio">Auditoría de seguridad</ol>
						
					</div>
					
					<div class="servicios" > 
						
						<figure class="icon-earth"></figure>
						<p class="textoGrande"> Desarrollo web </p>	
							<ol class="textoServicio">Registro de dominios</ol>
							<ol class="textoServicio">Gestión de hostings</ol>
							<ol class="textoServicio">Diseño y mantenimiento de páginas web</ol>
							<ol class="textoServicio">Implementación de e-commerce con Wordpress y Prestashop</ol>
							<ol class="textoServicio">Posicionamiento SEO en motores de búsqueda como Google o Bing</ol>
							<ol class="textoServicio">Otros servicios relacionados <br><a id="info"href="#contacto"> (consultar aquí)</a></ol>

					</div>

				</center>
				
		</section>
		
		<section >
			<p id="portfolio" class="titulosection">Portfolio</p>
			<center>
			<div class="proyecto"> 
				<p class="textoGrande">Web comercial Bar restaurante</p>
				<img src="img/bar.png" class="proyectoInterior">
				<p  class="textoGrande">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. </p>
				<button class="boton" href="http://www.barcalatony.es/"> ver </button>
			</div>
			<div class="proyecto"> 
				<p class="textoGrande">Libro "Seguridad en redes y sistemas"</p>
				<img src="img/itsecurity.jpg" class="proyectoInterior">
				<p class="textoGrande">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
				<button class="boton"> Descarga pdf </button>
			</div>
			<div class="proyecto"> 
				<p class="textoGrande">Próximamente</p>
				<img src="img/proximamente.png" class="proyectoInterior">
				<p class="textoGrande">Próximos proyectos en desarrollo</p>
				
			</div>
			
			</center>
		</section  >
		
		<section  >
			<p id="sobremi" class="titulosection">Sobre mi</p>
		
			<center class="fondoSobreMi">
				<div class="skills">
					<p class="subtitulo2">Mi experiencia</p>
					<p class="textoGrande">
					 <strong>Más de diez años trabajando como técnico informático freelance</strong>, atendiendo las necesidades de todo tipo de usuarios.<br></p>
					<hr>
	 				<p class="textoGrande">Más de diez años al frente de un local de restauración.<br></p>
	 				<hr>
		 			<p class="textoGrande"><strong>Graduado en Ingeniería Informática</strong> por la Universidad Oberta de Catalunya en el año 2017.<br></p>
					<hr>
					<p class="textoGrande"> <strong>Master en Seguridad de las TIC </strong>por la Universidad Oberta de Catalunya ( en curso ).<br></p>
				</div>

				<div class="skills">
					<p class="subtitulo2">Skills</p>
					<p class="textoGrande">
					 Lenguajes de <strong>programación y desarrollo web </strong>como C, Java, Python, SQL, HTML5/CSS3, Javascript. <br>
					 GNU/Linux, Windows XP/7/Vista/8/10, Android, MACOSX, iOS.<br></p>
					 <hr>
					 <p class="textoGrande">Administración y gestión de routers Cisco, Wi-fi, switching, LAN/WAN, Firewalls.<br></p> <hr>
					 <p class="textoGrande"><strong>Bases de datos</strong> como Oracle SQL, PostgreSQL.<br></p> <hr>
					 <p class="textoGrande"><strong>Administración y desarrollo de CMS</strong> como Prestashop y Wordpress.<br></p> <hr>
					 <p class="textoGrande"> Microsoft Office, LibreOffice.<br></p> <hr>
					 <p class="textoGrande"> <strong>Mantenimento de hardware</strong> como CPU's, HDD, Motherboards, GPU, etc.<br></p> <hr>
					 <p class="textoGrande"><strong>Además...</strong><br>SEO, LAMP, GitHub,  VMware, VirtualBOX, Photoshop, Google Apps.<br></p>

				</div>
				</center>
			
		</section >
		<section >
			<p  id="contacto" class="titulosection">Contacto</p>
			<form method= "post" >
					<center>
					<p class="texto3" >Le contestaré en la mayor brevedad posible.
						<br><br> O si lo prefiere contácte conmigo en <strong>cjimeneztic@gmail.com</strong>
					</p>
					</center>
					<br>
					<div id="error"><? echo $error.$exito; ?></div>
				
					<input   type="text" name="nombre" id="nombre" placeholder="Tu nombre o empresa"/><br><br>
					
					<input   type="text" name="asunto" id="asunto" placeholder="Tema del mensaje"><br>
					<br>
					
					<input   type="email" name="email" id="email" placeholder="Un email de contacto" ><br><br>
					<textarea type="text" name="cuerpo" id="cuerpo" placeholder="Cuerpo del mensaje" ></textarea><br>
					<br><br>
					<input type="submit" value="Enviar" class="boton" ;>
					<br><br>
			
			</form>
		</section>

		<!--Control de los campos obligatorios de formulario con jquery (front-end)-->
		
		 <script type="text/javascript">
	       $("form").submit(function(e){		
				var error="";
				if ( $("#nombre").val()==""){
					error += "El campo nombre es obligatorio.<br>";
				}

				if ( $("#asunto").val()==""){
					error += "El campo asunto es obligatorio.<br>";
				}
				if ( $("#email").val()==""){
					error += "El campo email es obligatorio.<br>";
				}
				if ( $("#cuerpo").val()==""){
					error += "El campo cuerpo es obligatorio.<br>";
				}
				if(error != ""){
					$("#error").html('<div class="informe"><strong>Ha ocurrido algun problema:</strong><br>'+error+'</div>');
						return false;
				}
				else{	
						return true;
				}

			}) 
   		 </script>
			<div>
				<a  href="#contacto" class="icon-envelop"></a>
			</div>
		



	</body>
	<footer>
		
			<br><br><br><br><p class="texto2">.-  Web hecha íntegra y excusivamente con html5/css3 y Javascript, siguiendo las técnicas y directrices de responsive design, mobile first y posicionamiento SEO  .-
			
			<br><center><p class="texto2">&copy;2017 Todos los derechos reservados</p></center>
			
		
			
		
	
	</footer>
</html>