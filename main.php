<?php include 'inc_seguridad.php'; ?>
<!DOCTYPE html>
<html>
<?php include 'head.php'; ?>

<body id="mobile_wrap" onload="bit_boton();">

    <div class="statusbar-overlay"></div>

    <div class="panel-overlay"></div>

    <div class="panel panel-left panel-cover">
          <div class="user_login_info">
                <div class="user_thumb">
                <img src="images/profile.jpg" alt="" title="" />
                  <div class="user_details">
                   <p>Hola, <span>
                   	<?php 
                   		// echo $_SESSION["s_nombreC"];
                   		echo $_SESSION["s_solonom"];
                   	?>
                   </span></p>
                  </div>  
                  <div class="user_social">
                    <!-- <a href="#" data-popup=".popup-social" class="open-popup"><img src="images/icons/white/twitter.png" alt="" title="" /></a>              </div>        -->
                    <a href="#" data-popup=".popup-social" class="open-popup">
                      <img src="images/icons/white/settings.png" alt="" title="" /></a>
                  </div>       
                </div>

                  <nav class="user-nav">
                    <ul>
                      <!-- <li><a href="camara.html" class="close-panel"><img src="images/icons/white/settings.png" alt="" title="" /><span>Cámara 1</span></a></li> -->
                      <!-- <li><a href=""><img src="images/icons/white/video.png" alt="" title="" /><span>settings</span></a></li> -->
                      <li><a href="registro.html" class="close-panel"><img src="images/icons/white/user.png" alt="" title="" /><span>Datos de Usuario</span></a></li>

                      <!-- <li><a href="#" class="close-panel"><img src="images/icons/white/toogle.png" alt="" title="" /><span>Saldo de tarjeta</span></a></li> -->
                      <li><a href="#" class="close-panel"><img src="images/icons/white/home.png" alt="" title="" /><span>Puntos de recarga</span></a>
                    
                      </li>
                      <li><a href="notificaciones.html" class="close-panel"><img src="images/icons/white/toogle.png" alt="" title="" /><span>Mis Compras</span><strong class="green">4</strong></a></li>

                      <li><a href="#" class="close-panel"><img src="images/icons/white/message.png" alt="" title="" /><span>Notificaciones</span></a>
                      <div class="item-content">
                        <div class="item-inner">
                          <div class="item-input">
                            <label class="label-switch">
                              <input type="checkbox">
                              <div class="checkbox"></div>
                            </label>
                          </div>
                        </div>
                      </div>
                    </li>

                      <li><a href="#" class="close-panel"><img src="images/icons/white/settings.png" alt="" title="" /><span>Cambiar de Idioma</span></a></li>

                      <li><a href="pases_temporales.html" class="close-panel"><img src="images/icons/white/briefcase.png" alt="" title="" /><span>Gestión de aceeso</span></a></li>

<!--                      <li><a href="features.html" class="close-panel"><img src="images/icons/white/message.png" alt="" title="" /><span>Messages</span><strong class="green">12</strong></a></li>
                      <li><a href="features.html" class="close-panel"><img src="images/icons/white/download.png" alt="" title="" /><span>Downloads</span><strong class="blue">5</strong></a></li> -->
<!--                       <li><a href="index.html" class="close-panel"><img src="images/icons/white/lock.png" alt="" title="" /><span>Logout</span></a></li> -->
											<li><a href="javascript:;" onclick="salir();"><img src="images/icons/white/lock.png" /><span>Salir</span></a></li>
                    </ul>
                  </nav>
          </div>
    </div>

    <div class="panel panel-right panel-cover"> 
      
        <h2>Search</h2>
        <div class="search_form">
        <form id="SearchForm" method="post">
        <input type="text" name="keyword" value="" class="search_input" placeholder="keyword" />
        <input type="image" name="submit" class="search_submit" id="submit" src="images/icons/white/search.png" />
        </form>
        </div>
        <div class="clear"></div>
        <h3>POPULAR POSTSlkmnouhon</h3>
        <ul class="popular_posts">
        <li>
        <a href="blog-single.html" class="close-panel"><img src="images/photos/photo1.jpg" alt="" title="" /></a>
        <span><a href="blog-single.html" class="close-panel">Design is not just what it looks like and feels like.</a></span>        </li>
        <li>
        <a href="blog-single.html" class="close-panel"><img src="images/photos/photo2.jpg" alt="" title="" /></a>
        <span><a href="blog-single.html" class="close-panel">Fashion fades, only style remains the same.</a></span>        </li>
        <li>
        <a href="blog-single.html" class="close-panel"><img src="images/photos/photo3.jpg" alt="" title="" /></a>
        <span><a href="blog-single.html" class="close-panel">Sed ut perspiciatis unde omnis iste accusantium.</a></span>        </li>
        <li>
        <a href="blog-single.html" class="close-panel"><img src="images/photos/photo4.jpg" alt="" title="" /></a>
        <span><a href="blog-single.html" class="close-panel">Nemo enim ipsam voluptatem quia voluptas.</a></span>        </li>
        <li>
        <a href="blog-single.html" class="close-panel"><img src="images/photos/photo5.jpg" alt="" title="" /></a>
        <span><a href="blog-single.html" class="close-panel">Totam rem aperiam, eaque ipsa quae ab illo inventore veritatis.</a></span>        </li>
        </ul>
    </div>

    <div class="views">

      <div class="view view-main">

        <div class="pages  toolbar-through">

          <div data-page="index" class="page homepage">
            <div class="page-content">
					   <div class="logo">
              <img src="images/logo_mtcpay.png" alt="" title="" />
              <!-- <span>S/. 15.80</span> -->
             </div> 
            </div>
          </div>
          
        </div>
        

        <!-- Bottom Toolbar-->
        <div class="toolbar">
          <div class="toolbar-inner">
              <ul class="toolbar_icons">
              <!-- <li>
              	<a href="#" data-panel="left" class="open-panel"><img src="images/icons/white/user.png" alt="" title="" /></a>
              </li>
              <li><a href="photos.html"><img src="images/icons/white/photos.png" alt="" title="" /></a></li> -->
              <!-- <li><a href="http://192.168.8.33:8081" class="external"><img src="images/icons/white/video.png" alt="" title="" /></a></li> -->

              <!-- <li class="menuicon">
                <a href="center_menu.html"><img src="images/icons/white/menu.png" alt="" title="" /></a> -->
                <!-- <a href="#" data-popup=".popup-indicadores" class="open-popup">
                  <img src="images/icons/white/menu.png" alt="" title="" />
                </a> -->
              <!-- </li> -->
              
              <!-- <li><a href="blog.html"><img src="images/icons/white/blog.png" alt="" title="" /></a></li>
              <li><a href="contacto.html"><img src="images/icons/white/contact.png" alt="" title="" /></a></li> -->
              <!-- <li>
                <a href="main.php"> -->
                  <!-- <img src="images/icons/white/video.png" alt="" title="" /> -->
                  <!-- <div style="padding-top: 15px;">
                    <i class="fas fa-home" style="font-size: 30px; color: #fff; display: block;"></i>
                    <span style="font-size: 14px; display: block; color: #fff">Home</span>      
                  </div>
                </a>
              </li> -->

              <li>
                <a href="saldo.html">
                  <!-- <img src="images/icons/white/video.png" alt="" title="" /> -->
                  <div style="padding-top: 15px;">
                    <i class="fas fa-bus" style="font-size: 30px; color: #fff; display: block;"></i>
                    <span style="font-size: 14px; display: block; color: #fff">Saldo</span>      
                  </div>
                </a>
              </li>
              
              <li>
                <a href="rutas.html">
                  <!-- <img src="images/icons/white/video.png" alt="" title="" /> -->
                  <div style="padding-top: 15px;">
                    <i class="fas fa-route" style="font-size: 30px; color: #fff; display: block;"></i>
                    <span style="font-size: 14px; display: block; color: #fff">Rutas</span>      
                  </div>
                </a>
              </li>

              <li>
                <a href="recarga_saldo.html">
                  <!-- <img src="images/icons/white/video.png" alt="" title="" /> -->
                  <div style="padding-top: 15px;">
                    <i class="fas fa-wallet" style="font-size: 30px; color: #fff; display: block;"></i>
                    <span style="font-size: 14px; display: block; color: #fff">Recarga</span>      
                  </div>
                </a>
              </li>

              <li>
                <!-- <a href="recarga_saldo.html"> -->
                <a href="recarga_saldo_tarjeta.html">
                  <!-- <img src="images/icons/white/video.png" alt="" title="" /> -->
                  <div style="padding-top: 15px;">
                    <i class="fas fa-star" style="font-size: 30px; color: #fff; display: block;"></i>
                    <span style="font-size: 14px; display: block; color: #fff">Puntos</span>      
                  </div>
                </a>
              </li>

              <li>
                <a href="qr.html">
                  <!-- <img src="images/icons/white/video.png" alt="" title="" /> -->
                  <div style="padding-top: 15px;">
                    <i class="fas fa-plus-circle" style="font-size: 30px; color: #fff; display: block;"></i>
                    <span style="font-size: 14px; display: block; color: #fff">Más</span>      
                  </div>
                </a>
              </li>



              <!-- <li><a href="contacto.php"><img src="images/icons/white/contact.png" alt="" title="" /></a></li> -->
              
              </ul>
              </div>  


        </div>
        
      </div>
    </div>
    
    <!-- Login Popup -->
    <div class="popup popup-login">
    <div class="content-block-login">
      <h4>LOGIN !!!</h4>
      <div class="form_logo"><img src="images/logo.png" alt="" title="" /></div>
            <div class="loginform">
            <form id="LoginForm" method="post" action="login.php" enctype="multipart/form-data">
            <input type="text" name="Username" value="" class="form_input required" placeholder="username" />
            <input type="password" name="Password" value="" class="form_input required" placeholder="password" />
            <div class="forgot_pass"><a href="#" data-popup=".popup-forgot" class="open-popup">¿Olvidaste tu password?</a></div>
            <input type="submit" name="submit" class="form_submit" id="submit" value="ENTRAR" />
            </form>
            <div class="signup_bottom">
            <p>¿No tienes una cuenta?</p>
            <a href="#" data-popup=".popup-signup" class="open-popup">REGISTRARTE</a>            </div>
            </div>
      <div class="close_loginpopup_button"><a href="#" class="close-popup"><img src="images/icons/white/menu_close.png" alt="" title="" /></a></div>
    </div>
    </div>
    
    <!-- Register Popup -->
    <div class="popup popup-signup">
    <div class="content-block-login">
      <h4>REGISTER</h4>
      <div class="form_logo"><img src="images/logo.png" alt="" title="" /></div>
            <div class="loginform">
            <form id="RegisterForm" method="post">
            <input type="text" name="Username" value="" class="form_input required" placeholder="username" />
            <input type="text" name="Email" value="" class="form_input required" placeholder="email" />
            <input type="password" name="Password" value="" class="form_input required" placeholder="password" />
            <input type="submit" name="submit" class="form_submit" id="submit" value="SIGN UP" />
            </form>
            <div class="signup_social">
            <a href="http://www.facebook.com/" class="signup_facebook external">FACEBOOK</a>
            <a href="http://www.twitter.com/" class="signup_twitter external">TWITTER</a>            
            </div>
            </div>
      <div class="close_loginpopup_button"><a href="#" class="close-popup"><img src="images/icons/white/menu_close.png" alt="" title="" /></a></div>
    </div>
    </div>
    
    <!-- Login Popup -->
    <div class="popup popup-forgot">
    <div class="content-block-login">
      <h4>FORGOT PASSWORD</h4>
      <div class="form_logo"><img src="images/logo.png" alt="" title="" /></div>
            <div class="loginform">
            <form id="ForgotForm" method="post">
            <input type="text" name="Email" value="" class="form_input required" placeholder="email" />
            <input type="submit" name="submit" class="form_submit" id="submit" value="RESEND PASSWORD" />
            </form>
            <div class="signup_bottom">
            <p>Check your email and follow the instructions to reset your password.</p>
            </div>
            </div>
      <div class="close_loginpopup_button"><a href="#" class="close-popup"><img src="images/icons/white/menu_close.png" alt="" title="" /></a></div>
    </div>
    </div>
    
    
    <!-- Social Popup -->
    <div class="popup popup-social">
      <div class="content-block">
        <h4>Contáctame</h4>
        <p>Ing. Pedro Bernal, número de celular 926564458</p>
        <ul class="social_share">
  <!--       <li>
        	<a href="http://twitter.com/" class="external"><img src="images/icons/white/facebook.png" alt="" title="" /></a></li> -->
<!--         <li>
          <a href="http://twitter.com/" class="external"><img src="images/icons/white/twitter.png" alt="" title="" /></a></li>  
        <li><a href="http://www.facebook.com/" class="external"><img src="images/icons/white/twitter.png" alt="" title="" /></a></li>
        <li><a href="http://plus.google.com" class="external"><img src="images/icons/white/googleplus.png" alt="" title="" /></a></li>
        <li><a href="http://www.dribbble.com/" class="external"><img src="images/icons/white/dribbble.png" alt="" title="" /></a></li>
        <li><a href="http://www.linkedin.com/" class="external"><img src="images/icons/white/linkedin.png" alt="" title="" /></a></li>
        <li><a href="http://www.pinterest.com/" class="external"><img src="images/icons/white/pinterest.png" alt="" title="" /></a></li> -->
        
        </ul>
        <div class="close_popup_button"><a href="#" class="close-popup"><img src="images/icons/white/menu_close.png" alt="" title="" /></a></div>
      </div>
    </div>

    <div class="popup popup-indicadores">
      <div class="content-block">

<!-- <div class="pages"> -->
  <!-- <div data-page="projects" class="page no-toolbar no-navbar"> -->
    <!-- <div class="page-content"> -->

        <div class="page_content_menu">
          <nav class="main-nav">        
            <ul class="social_share">
              <li><a href="javascript:;"><div id="content1"><br>ZONA<br>1<br><br></div></a></li>
              <li><a href="javascript:;"><div id="content2"><br>ZONA<br>2<br><br></div></a></li>
              <li><a href="javascript:;"><div id="content3"><br>ZONA<br>3<br><br></div></a></li>
              <li><a href="javascript:;"><div id="content4"><br>ZONA<br>4<br><br></div></a></li>  
              <li><a href="javascript:;"><div id="content5"><br>&nbsp;<br>&nbsp;<br><br></div></a></li>  
              <li><a href="javascript:;"><div id="content6"><br>&nbsp;<br>&nbsp;<br><br></div></a></li>  


            </ul>
          <div class="close_popup_button"><a href="#" class="close-popup"><img src="images/icons/white/menu_close.png" alt="" title="" /></a></div>
          </nav>
        </div>
      <!-- </div> -->
    <!-- </div> -->
<!-- </div> -->
      </div>      
    </div>
 

<script type="text/javascript" src="js/jquery-1.10.1.min.js"></script>
<script src="js/jquery.validate.min.js" type="text/javascript"></script>
<script type="text/javascript" src="js/framework7.js"></script>
<script type="text/javascript" src="js/classie.js"></script>
<script type="text/javascript" src="js/selectFx.js"></script>
<script type="text/javascript" src="js/my-app.js"></script>
<script type="text/javascript" src="js/jquery.swipebox.js"></script>
<script type="text/javascript" src="js/email.js"></script>


<script type="text/javascript">

  function salir() {
    location.href = "salir.php";
  }

  function ir_a(){
    location.href = "notificaciones.html";
  }

  document.addEventListener('DOMContentLoaded', function() {
      const form = document.getElementById('registration-form');
      const nationalities = [
          "Afganistán", "Albania", "Alemania", "Andorra", "Angola", "Antigua y Barbuda", "Arabia Saudita",
          "Argelia", "Argentina", "Armenia", "Australia", "Austria", "Azerbaiyán", "Bahamas", "Bangladés",
          "Barbados", "Baréin", "Bélgica", "Belice", "Benín", "Bielorrusia", "Birmania", "Bolivia", "Bosnia y Herzegovina",
          "Botsuana", "Brasil", "Brunéi", "Bulgaria", "Burkina Faso", "Burundi", "Bután", "Cabo Verde", "Camboya", "Camerún",
          "Canadá", "Catar", "Chad", "Chile", "China", "Chipre", "Ciudad del Vaticano", "Colombia", "Comoras", "Corea del Norte",
          "Corea del Sur", "Costa de Marfil", "Costa Rica", "Croacia", "Cuba", "Dinamarca", "Dominica", "Ecuador", "Egipto",
          "El Salvador", "Emiratos Árabes Unidos", "Eritrea", "Eslovaquia", "Eslovenia", "España", "Estados Unidos",
          "Estonia", "Etiopía", "Filipinas", "Finlandia", "Fiyi", "Francia", "Gabón", "Gambia", "Georgia", "Ghana", "Granada",
          "Grecia", "Guatemala", "Guyana", "Guinea", "Guinea ecuatorial", "Guinea-Bisáu", "Haití", "Honduras", "Hungría", "India",
          "Indonesia", "Irak", "Irán", "Irlanda", "Islandia", "Islas Marshall", "Islas Salomón", "Israel", "Italia", "Jamaica",
          "Japón", "Jordania", "Kazajistán", "Kenia", "Kirguistán", "Kiribati", "Kuwait", "Laos", "Lesoto", "Letonia", "Líbano",
          "Liberia", "Libia", "Liechtenstein", "Lituania", "Luxemburgo", "Madagascar", "Malasia", "Malaui", "Maldivas", "Malí",
          "Malta", "Marruecos", "Mauricio", "Mauritania", "México", "Micronesia", "Moldavia", "Mónaco", "Mongolia", "Montenegro",
          "Mozambique", "Namibia", "Nauru", "Nepal", "Nicaragua", "Níger", "Nigeria", "Noruega", "Nueva Zelanda", "Omán", "Países Bajos",
          "Pakistán", "Palaos", "Panamá", "Papúa Nueva Guinea", "Paraguay", "Perú", "Polonia", "Portugal", "Reino Unido", "República Centroafricana",
          "República Checa", "República de Macedonia", "República del Congo", "República Democrática del Congo", "República Dominicana", "República Sudafricana",
          "Ruanda", "Rumanía", "Rusia", "Samoa", "San Cristóbal y Nieves", "San Marino", "San Vicente y las Granadinas", "Santa Lucía", "Santo Tomé y Príncipe",
          "Senegal", "Serbia", "Seychelles", "Sierra Leona", "Singapur", "Siria", "Somalia", "Sri Lanka", "Suazilandia", "Sudán", "Sudán del Sur", "Suecia",
          "Suiza", "Surinam", "Tailandia", "Tanzania", "Tayikistán", "Timor Oriental", "Togo", "Tonga", "Trinidad y Tobago", "Túnez", "Turkmenistán",
          "Turquía", "Tuvalu", "Ucrania", "Uganda", "Uruguay", "Uzbekistán", "Vanuatu", "Venezuela", "Vietnam", "Yemen", "Yibuti", "Zambia", "Zimbabue"
      ];

      const nationalitySelect = document.getElementById('nacionalidad');
      nationalities.forEach(nationality => {
          const option = document.createElement('option');
          option.textContent = nationality;
          nationalitySelect.appendChild(option);
      });
    });   


</script>



  </body>
</html>