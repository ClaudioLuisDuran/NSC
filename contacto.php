<?php
require_once 'PHPMailer/Exception.php';
require_once 'PHPMailer/PHPMailer.php';
require_once 'PHPMailer/SMTP.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Nuestra Señora y Madre de la Conversión</title>
    <!-- Meta -->
    <meta http-equiv="Expires" content="0">
    <meta http-equiv="Last-Modified" content="0">
    <meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
    <meta http-equiv="Pragma" content="no-cache">
    
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Mensajes de la Virgen María para estos últimos tiempos.">
    <meta name="author" content="Margarita Ovalle - Colombia">  
    <meta name="webdeveloper" content="Claudio Durán - Argentina">   
    <link rel="shortcut icon" href="favicon.ico">  
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <!-- FontAwesome JS-->
	<script defer src="assets/fontawesome/js/all.min.js"></script>
    <!-- Global CSS -->
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">   
    <!-- Theme CSS -->  
    <link id="theme-style" rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.css">
    <link rel="stylesheet" href="assets/css/gallery-grid.css">

 </head> 

<body onload="limpiar()">
    <!-- ******HEADER****** --> 
    <header id="header" class="header">  
        <!-- Sección NavBar-->
        <nav class="main-nav navbar-expand-md" role="navigation"> 
	        <div class="container-fluid position-relative">
                <a class="logo navbar-brand scrollto" href="#hero">
                    <span class="logo-icon-wrapper"><img class="logo-icon" src="assets/images/icon.png" alt="NSC"></span>
                    <span class="text"><span class="highlight">NSC</span> Nuestra Señora y Madre de la Conversión</span>
                </a>
                <!--//logo-->

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-collapse"  aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button><!--//nav-toggle-->
                
                <div id="navbar-collapse" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav ms-md-auto">
                        <li class="nav-item"><a class="nav-link " href="index.html">Home</a></li>
                        <li class="nav-item"><a class="nav-link " href="historia.html">Historia</a></li>
                        <li class="nav-item"><a class="nav-link scrollto" href="carta.html">Carta</a></li>
                        <li class="nav-item"><a class="nav-link " href="album.html">Fotos</a></li>                        
                        <li class="nav-item"><a class="nav-link " href="mensajesIndex.html">Mensajes</a></li>
                        <li class="nav-item"><a class="nav-link " href="oraciones.html">Oraciones</a></li>
                        <li class="nav-item"><a class="nav-link " href="testimonios.html">Testimonios</a></li>
                        <li class="nav-item"><a class="nav-link scrollto" href="#contact">Contacto</a></li>
                    </ul><!--//nav-->
                </div><!--//navabr-collapse-->
            </div><!--//container-->
        </nav><!-- //Sección NavBar-->                     
    </header><!--//header-->
    
    <div id="hero" class="hero-section">
        <div id="hero-carousel" class="hero-carousel carousel carousel-fade slide" data-bs-ride="carousel" data-bs-interval="5000">
            
            <div class="figure-holder-wrapper">
        		<div class="container">
            		<div class="row justify-content-end">
                		<div class="figure-holder">
                	        <img class="figure-image img-fluid" src="assets/images/imac.png" alt="image" />
                        </div><!--//figure-holder-->
            		</div><!--//row-->
        		</div><!--//container-->
    		</div><!--//figure-holder-wrapper-->
            
			<!-- Indicators -->
			<div class="carousel-indicators">
				<button type="button" class="active" data-bs-slide-to="0" data-bs-target="#hero-carousel" aria-current="true" aria-label="Slide 1"></button>
				<button type="button" data-bs-slide-to="1" data-bs-target="#hero-carousel" aria-label="Slide 2"></button>
				<button type="button" data-bs-slide-to="2" data-bs-target="#hero-carousel" aria-label="Slide 3"></button>
			</div>
			
			<!-- Wrapper for slides -->
			<div class="carousel-inner">
    			
				<div class="carousel-item item-1 active">
					<div class="item-content container">
    					<div class="item-content-inner">
    				        
				            <h2 class="heading">“Esta noche he venido para bendecirlos, para amarlos y concederles”</h2>
				            <p class="intro">Nuestra Señora de la Conversión. Nueva y última advocación mariana para nuestros tiempos.</p>
				            <a class="btn btn-primary btn-cta" href="historia.html">Conozca su historia</a>
    				        
    					</div><!--//item-content-inner-->
					</div><!--//item-content-->
				</div><!--//item-->
				
				<div class="carousel-item item-2">
					<div class="item-content container">
						<div class="item-content-inner">
    				        
				            <h2 class="heading">"Mi corazón inmaculado triunfará, orad para que triunfe en vuestros corazones con las gracias del cielo."</h2>
				            <p class="intro">Eminencia... dice la Madre: “Mirad mi dolor, mirad a mi Hijo, El cual tenéis abajo de vuestros altares".</p>
				            <a class="btn btn-primary btn-cta" href="#carta">Carta al Cardenal Rubiano Saenz</a>
    				        
    					</div><!--//item-content-inner-->
					</div>
				</div><!--//item-->
				
				<div class="carousel-item item-3">
					<div class="item-content container">
						<div class="item-content-inner">
    				        
				            <h2 class="heading">"Pequeños míos, florecillas de mi jardín, ahora debéis estar más unidos a Dios Padre, a Dios Hijo, y a Dios Espíritu Santo..."</h2>
				            <p class="intro">La Santísima Virgen nos pide que estos mensajes que estamos recibiendo desde el 22 de junio de 1995 hasta la fecha, sean comunicados a toda la humanidad.</p>
				            <a class="btn btn-primary btn-cta" href="mensajesIndex.html">Mensajes</a>
    				        
    					</div><!--//item-content-inner-->
					</div>
				</div><!--//item-->
			</div><!--//carousel-inner-->
		</div><!--//carousel-->
    </div><!--//hero-->

        <!--Seccion redes-->
        <div class="containerSocial">
            <div class="social">
                <a href="https://www.facebook.com/NuestraSenoraYMadreDeLaConversion" target="_blank"><img src="assets/images/facebook.png" width="30" height="30" alt="facebook"></a>
                <a href="https://www.youtube.com/watch?v=nx9OEpJDZEA" target="_blank" ><img src="assets/images/youtube.png" width="30" height="30" alt="youtube"></a>
                <!-- <a href="#"><img src="img/linkedin.png" alt="linkedin"></a>
                <a href="#"><img src="img/instagram.png" alt="instagram"></a> -->
            </div>
        </div><!--Fin Seccion redes-->

    <!--Sección Contacto-->
    <div id="contact" class="about-section">
        <div class="container" >
            <div class="row justify-content-md-center"></div>
            <h2 class="section-title" ><strong>Contacto</strong></h2>
            <br>
   
            <div class="card text-white bg-primary mb-3 text-center" style="max-width: 70%;">
                <div class="card-header">Llene los campos por favor. Gracias.</div>
                <div class="card-body text-info">
                    
             <!-- ini formulario -->
                       <form id="form_enviar" action="mail.php" method="post">
                         <div class="form-group">
                           <label class="text-white"><strong>Nombre:</strong></label>
                           <input type="text" name="nombre" class="form-control" id="nombre" placeholder="" required>
                         </div>
                         <div class="form-group">
                           <label class="text-white"><strong>Apellido:</strong></label>
                           <input type="text" name="apellido" class="form-control" id="apellido" placeholder="" required>
                         </div>
                         <div class="form-group">
                           <label class="text-white"><strong>País:</strong></label>
                           <input type="text" name="pais" class="form-control" id="pais" placeholder="" required>
                         </div>
                         <div class="form-group">
                            <label class="text-white"><strong>Su email:</strong></label>
                            <input type="email" name="email" class="form-control" id="email" placeholder="" required>
                          </div>
                         <div class="form-group">
                           <label class="text-white"><strong>Su mensaje:</strong></label>
                           <textarea name="mensaje" class="form-control" id="mensaje" rows="5" placeholder="" required></textarea>
                         </div>
                         <br>
                         <button type="submit" id="submitOk"  class="btn btn-light" data-value="submit">ENVIAR</button>
                       </form>
                     </div>
                    
            <!-- Agradecimiento al contacto -->
            <script>
                Swal.fire({
                    title: '¡Gracias!',
                    text: 'Hemos recibido tu mensaje.',
                    icon: 'success',
                    onClose: function() {
                        // Redirigir al inicio después de cerrar la ventana emergente
                        window.location.href = 'index.html';
                    }
                });
            </script> 

                    
                <!--  // Fin formulario -->
                </div>
              </div>
              </div>
        </div>
            <br>
            <div class="linea"></div>
             <br>
            <!--//Seccion Contacto-->
        
            <!-- Cambiar a otras secciones--> 
              
            <div id="menuInferior">
            <h5><strong>Enlaces a otras secciones</strong></h5>
                    <div class="items-wrapper row">
                        <div class="item col-md-4 col-12">
                            <div class="item-inner">
                                <div class="figure-holder">
                                    <img class="figure-image" src="assets/images/fotos/42.jpg" alt="image">
                                </div><!--//figure-holder-->
                                <h3 class="item-title">Mensajes</h3>
                        
                                <a class="btn btn-primary" href="mensajesIndex.html">Leer</a>
                            </div><!--//item-inner-->
                        </div><!--//item-->
         
                        <div class="item col-md-4 col-12">
                            <div class="item-inner">
                                <div class="figure-holder">
                                    <img class="figure-image" src="assets/images/fotos/48.jpg" alt="image">
                                </div><!--//figure-holder-->
                                <h3 class="item-title">Oraciones</h3>
                                
                                <a class="btn btn-primary" href="oraciones.html">Orar</a>
                            </div><!--//item-inner-->
                        </div><!--//item-->
         
                        <div class="item col-md-4 col-12">
                            <div class="item-inner">
                                <div class="figure-holder">
                                    <img class="figure-image" src="assets/images/fotos/7.jpg" alt="image">
                                </div><!--//figure-holder-->
                                <h3 class="item-title">Testimonios</h3>
                               <a class="btn btn-primary" href="testimonios.html">Conocer</a>
                            </div><!--//item-inner-->
                        </div><!--//item-->
                    </div><!--//Fin cambio de secciones-->
                </div><!-- Fin menu cambio de seccion--> 
      

    <!--Sección Contacto-->
    <div id="contact" class="contact-section">
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-4">
                    <div class="container text-center">
                    <h10><strong>Conozca el Jardín de la Peña</strong></h10>
                    <br>

                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3977.0494210699953!2d-74.06653812411828!3d4.585151542646557!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f995cbd009a53%3A0x59d2dc4622f62a73!2sJardin%20de%20La%20pe%C3%B1a%20de%20Nuestra%20Se%C3%B1ora%20y%20Madre%20De%20La%20Conversi%C3%B3n!5e0!3m2!1ses-419!2sar!4v1699721737547!5m2!1ses-419!2sar" 
                    width="300" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                    </div>
                </div>

                <div class="col-4">
                 
            <h2 class="section-title">¡Gracias por visitarnos!</h2>
            <div class="contact-content">
                <p>Puede enviarnos sus consultas o pedidos de oración haciendo click en el siguiente botón. Muchas gracias por habernos visitado</p>
            </div>
            <a class="btn btn-cta btn-primary" href="contacto.html">Contacto</a>
       
                </div>
              </div>
        </div>
        
        
        </div><!--//container-->
    </div><!-- //Sección Contacto-->
    
    <!--Sección Footer-->
    <footer class="footer text-center">
        <div class="container">
            <!--Contador de visitas-->
                <!-- Histats.com  (div with counter) --><div id="histats_counter"></div>
                <!-- Histats.com  START  (aync)-->
                <script type="text/javascript">var _Hasync= _Hasync|| [];
                    _Hasync.push(['Histats.start', '1,1042667,4,2047,280,25,00011110']);
                    _Hasync.push(['Histats.fasi', '1']);
                    _Hasync.push(['Histats.track_hits', '']);
                    (function() {
                    var hs = document.createElement('script'); hs.type = 'text/javascript'; hs.async = true;
                    hs.src = ('//s10.histats.com/js15_as.js');
                    (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(hs);
                    })();</script>
                    <noscript><a href="/" target="_blank"><img  src="//sstatic1.histats.com/0.gif?1042667&101" alt="contador pagina web" border="0"></a></noscript>
                    <!-- Histats.com  END  -->
    
            <!--/* This template is free as long as you keep the footer attribution link. If you'd like to use the template without the attribution link, you can buy the commercial license via our website: themes.3rdwavemedia.com Thank you for your support. :) */-->
            <small class="copyright">Web Developer <span class="sr-only">love</span><i class="fa-solid fa-heart"></i> by <a href="https://github.com/ClaudioLuisDuran" target="_blank">Claudio Durán</a> - Argentina</small>
            <br>
            <small class="copyright">Designed with <span class="sr-only">love</span><i class="fa-solid fa-heart"></i> by <a href="https://themes.3rdwavemedia.com/" target="_blank">Xiaoying Riley</a> for developers</small>
        </div><!--//container-->
    </footer> <!-- //Sección Footer-->

    
    <!-- Seccion Javascript -->          
    <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/plugins/gumshoe/gumshoe.polyfills.min.js"></script> 
    <script src="assets/js/main.js"></script> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
    <script>
        baguetteBox.run('.tz-gallery');
    </script> <!-- //Seccion Javascript -->  


</body>
</html> 

