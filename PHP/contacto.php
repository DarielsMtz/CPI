 <script>
     document.title = "Caribbean Probiotics - Contacto";

 </script>

 <div class="pag_contacto">
     <div class="img_cab"></div>
     <div class="text_up"> Contacto </div>

     <div class="redes">
         <div class="box">
             ¿Tienes dudas?
             <li class="pregunta"> Contáctanos por teléfono, email o WhatsApp. </li>
         </div>
         <!-- Telefono -->
         <div class="box">
             <img src="imagenes/llamada-telefonica-1-1.webp">
             <li> +34 999-99-99 </li>
         </div>

         <!-- WhatsApp -->
         <div class="box">
             <img src="imagenes/whatsapp-1.webp">
             <li> +34 999-99-99 </li>
         </div>

         <!-- Correo -->
         <div class="box">
             <img src="imagenes/correo-electronico-1.webp">
             <li> info@caribbeanprobiotics.com </li>
         </div>

         <!-- Direccion -->
         <div class="box">
             <img src="imagenes/localizacion-1.webp">
             <li>Tegucigalpa, Honduras </li>
         </div>
     </div>
 </div>

 <!-- Formulario -->
 <!-- formulario de contacto en html y css -->

 <div class="contact_form">
     <div class="formulario">
         <h3>Escríbenos y en breve los pondremos en contacto contigo</h3>
         <form action="submeter-formulario.php" method="post">
             <p>
                 <label for="nombre" class="colocar_nombre">Nombre
                     <span class="obligatorio">*</span>
                 </label>
                 <input type="text" name="nombre" id="nombre" required="obligatorio" placeholder="Escribe tu nombre">
             </p>
             <p>
                 <label for="email" class="colocar_email">Email
                     <span class="obligatorio">*</span>
                 </label>
                 <input type="email" name="email" id="email" required="obligatorio" placeholder="Escribe tu Email">
             </p>
             <p>
                 <label for="mensaje" class="colocar_mensaje">Mensaje
                     <span class="obligatorio">*</span>
                 </label>
                 <textarea name="introducir_mensaje" class="texto_mensaje" id="mensaje" required="obligatorio" placeholder="Deja aquí tu comentario..."></textarea>
             </p>
             <button type="button" name="enviar_formulario" id="enviar" onclick="mostrarAlerta()">
                 <p>Enviar</p>
             </button>
             <p class="aviso">
                 <span class="obligatorio"> * </span>los campos son obligatorios.
             </p>
         </form>
     </div>
 </div>
 <!--Alerta de Mensaje Enviado-->
 <script>
     function mostrarAlerta() {
         var nombre = document.getElementById("nombre").value;
         alert("Hola " + nombre + ", gracias por contactarnos." + "\n" + "\n¡Lo mas pronto nos pondremos en contacto contigo!");
     }

 </script>
