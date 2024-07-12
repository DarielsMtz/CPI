 <script>
     document.title = "Caribbean Probiotics - Disribuidores";

 </script>

 <!-- Anclas Suaves -->
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

 <!-- OCULTAR ACORDEON ACTIVO -->
 <script>
     /*OCULTAR ACORDEON ACTIVO*/
     seeMoreOpened = false;
     jQuery(document).ready(function($) {
         var delay = 100;
         setTimeout(function() {
             $('.elementor-tab-title').removeClass('elementor-active');
             $('.elementor-tab-content').css('display', 'none');
         }, delay);

         /*Mostrar/ocultar contenido*/
         $('#elemento').hide();

         $('#boton_dis').click(function(event) {
             $('#elemento').show(200);
             event.preventDefault();
         })
     });

     /*Anclas*/
     $(document).ready(function() {
         $('a[href^="#"]').click(function() {
             var destino = $(this.hash);
             if (destino.length == 0) {
                 destino = $('a[name="' + this.hash.substr(1) + '"]');
             }
             if (destino.length == 0) {
                 destino = $('html');
             }
             $('html, body').animate({
                 scrollTop: destino.offset().top - 90
             }, 1300);
             return false;
         });
     });

 </script>

 <!-- Mapa Cabecera -->
 <div class="distribuidores">
     <div class="texto_titulo">
         <li> Distribuidores en Latinoamérica </li>
         <a href="#elemento" class="Boton_Dis" id="boton_dis"> Ver Más </a>
     </div>
 </div>

 <!-- Lista Distribuidores -->
 <div class="lista_distribuidores" id="elemento">
     <!-- Menu -->
     <div class="paises">
         <li> <a href="#el_salvador"> El Salvador </a> </li>
         <li> <a href="#honduras"> Honduras </a> </li>
         <li> <a href="#guatemala"> Guatemala </a> </li>
         <!--         <li> <a href="#costa_rica"> Costa Rica </a> </li>-->
         <li> <a href="#panama"> Panamá </a> </li>
         <!--         <li> <a href="#peru"> Perú </a> </li>-->
         <li> <a href="#paraguay"> Paraguay </a> </li>
         <li> <a href="#argentina"> Argentina </a> </li>
     </div>

     <div class="caja_dis" id="el_salvador">
         <h1> <a href="#elemento"> El Salvador </a> </h1>
         <div class="logo_dis"> <img src="imagenes/logo_mallo.jpg" alt="Logo Grupo Mallo S.A"> </div>
         <li>
             <h3> GRUPO MALLO S.A. DE C.V. </h3>
             <div class="icono"> <img src="imagenes/usuario.png">Contacto </div>
             <div class="icono"> <img src="imagenes/llamada-telefonica.png">Telefono </div>
             <div class="icono"> <img src="imagenes/email.png">Email </div>
             <div class="icono"> <img src="imagenes/web.png">Web </div>
         </li>
     </div>

     <hr>
     <div class="caja_dis" id="honduras">
         <h1><a href="#elemento"> Honduras </a> </h1>
         <div class="logo_dis"> <img src="imagenes/logo_mallo.jpg" alt="Logo Mallo Honduras"> </div>
         <li>
             <h3> MALLO HONDURAS S. DE R.L. </h3>
             <div class="icono"> <img src="imagenes/usuario.png">Contacto </div>
             <div class="icono"> <img src="imagenes/llamada-telefonica.png">Telefono </div>
             <div class="icono"> <img src="imagenes/email.png">Email </div>
             <div class="icono"> <img src="imagenes/web.png">Web </div>
         </li>

     </div>
     <hr>
     <div class="caja_dis" id="guatemala">
         <h1> <a href="#elemento"> Guatemala </a> </h1>
         <div>
             <div class="logo_dis"> <img src="imagenes/logo_semiagro%20(1).png" alt="Logo Semiagro"> </div>
             <li>
                 <h3> Semillas e Insumos Agropecuarios S.A. </h3>
                 <div class="icono"> <img src="imagenes/usuario.png">Contacto </div>
                 <div class="icono"> <img src="imagenes/llamada-telefonica.png">Telefono </div>
                 <div class="icono"> <img src="imagenes/email.png">Email </div>
                 <div class="icono"> <img src="imagenes/web.png">Web </div>
             </li>
         </div>
     </div>
     <hr>
     <!--     
     <div class="caja_dis" id="costa_rica">
         <h1> <a href="#elemento"> Costa Rica </a> </h1>
         <div class="logo_dis"> <img src="imagenes/logo_mallo.jpg"> </div>
         <li>
             <h3> Mallo Honduras </h3>
             <div class="icono"> <img src="imagenes/usuario.png">Contacto </div>
             <div class="icono"> <img src="imagenes/llamada-telefonica.png">Telefono </div>
             <div class="icono"> <img src="imagenes/email.png">Email </div>
             <div class="icono"> <img src="imagenes/web.png">Web </div>
         </li>

     </div>
     <hr>-->

     <div class="caja_dis" id="panama">
         <h1> <a href="#elemento"> Panamá </a> </h1>
         <div class="logo_dis"> <img src="imagenes/logo_ageagro.png" alt="Logo Ageagro"> </div>
         <li>
             <h3> DISTRIBUIDORA VETERINARIA AGEAGRO S.A. </h3>
             <div class="icono"> <img src="imagenes/usuario.png">Contacto </div>
             <div class="icono"> <img src="imagenes/llamada-telefonica.png">Telefono </div>
             <div class="icono"> <img src="imagenes/email.png">Email </div>
             <div class="icono"> <img src="imagenes/web.png">Web </div>
         </li>

     </div>
     <hr>
     <div class="caja_dis" id="paraguay">
         <h1><a href="#elemento"> Paraguay </a> </h1>
         <div class="logo_dis"> <img src="imagenes/logo_chimiray.png" alt="Logo Chimiray"> </div>
         <li>
             <h3> CHIMIRAY S.A. </h3>
             <div class="icono"> <img src="imagenes/usuario.png">Contacto </div>
             <div class="icono"> <img src="imagenes/llamada-telefonica.png">Telefono </div>
             <div class="icono"> <img src="imagenes/email.png">Email </div>
             <div class="icono"> <img src="imagenes/web.png">Web </div>
         </li>

     </div>
     <hr>
     <div class="caja_dis" id="argentina">
         <h1><a href="#elemento"> Argentina </a></h1>
         <div class="logo_dis"> <img src="imagenes/logo_mayors2.png" alt="logo Mayors"> </div>
         <li>
             <h3>MAYORS ESPECIALIDADES VETERINARIAS. </h3>
             <div class="icono"> <img src="imagenes/usuario.png">Contacto </div>
             <div class="icono"> <img src="imagenes/llamada-telefonica.png">Telefono </div>
             <div class="icono"> <img src="imagenes/email.png">Email </div>
             <div class="icono"> <img src="imagenes/web.png">Web </div>
         </li>

     </div>

 </div>
