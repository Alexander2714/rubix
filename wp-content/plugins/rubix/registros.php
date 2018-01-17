<?php
require_once('../../../wp-load.php');




get_header();
?>


<div class="clearfix"></div><!-- Blog Section with Sidebar -->
<div class="page-builder">
    <div class="page-title-section">		
        <div class="overlay">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="page-title"><h1>Registros ATV</h1></div>
                    </div>
                </div>
            </div>	
        </div>
    </div> <br> <br>
    <div class="container">
        <div class="row">
            <!-- Blog Area -->
            <div class="col-md-12" >
                <div class="blog-lg-area-left">
                    <p><strong>Complete la siguiente información:</strong></p>
                    <blockquote><p>Debe ingresar los siguientes datos generados por la plataforma ATV, para comenzar su proceso de Facturación Electrónica, si ud no sabe como, descargue el instructivo <a target="blank" href="http://facturas.computox.com/59dbd913c8200_Folleto%20de%20Llave%20Criptograficav2.pdf">aquí (Manual para generar llave criptografica, usuario y clave).</a></p></blockquote>
                    <div role="form" class="wpcf7" id="wpcf7-f51-p45-o1" lang="es-ES" dir="ltr">
                        <div class="screen-reader-response"></div>
                        <form id="uploadForm" action="upload.php" method="post">
                            <h3 style="color:#385ba1;"> Datos del Cliente </h3>
                              <div class="row">
                                  
                                  
                                  
                                  <div class="col-md-6" >
                                      
                            <p><label> Nombre Completo<br />
                                    <span class="wpcf7-form-control-wrap your-name"><input id="nombre" type="text" name="your-name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" /></span> </label></p>
                            <p><label> Número de Identificación</label><br />
                                <span class="wpcf7-form-control-wrap identificacion"><input id="identificacion" type="number" name="identificacion" value="" class="wpcf7-form-control wpcf7-number wpcf7-validates-as-number" id="identificacion"  aria-invalid="false" /></span></p>
                                  </div>
                                <div class="col-md-6" >
                            <p><label> Email<br />
                                    <span class="wpcf7-form-control-wrap email"><input type="email" name="your-email" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-email" id="email" aria-invalid="false"></span> </label></p>
                            
                            <p><label> Número De Teléfono<br />
                                    <span class="wpcf7-form-control-wrap tel"><input type="tel" name="your-tel" size="40" class="wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-tel" id="tel" aria-invalid="false"></span> </label></p>
                              </div></div>

                            <div class="row">
                                <div class="col-md-8" >
                                    <h3 style="color:#385ba1;"> Datos del Portal ATV </h3>
                            <p><label> Llave Criptografica</label> (archivo .p12 descargado de la plataforma ATV)</p>
                            <p><span class="wpcf7-form-control-wrap LlaveCriptografica"><input name="userImage" type="file" class="inputFile" /><br/></span></p>
                            <p><label> Usuario del comprobante electrónico</label> (usuario generado en el paso 10 del Manual plataforma ATV)<br />
                                    <span class="wpcf7-form-control-wrap your-user"><input id="usuario" type="text" name="your-user" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" /></span> </label></p>
                            <p><label> Contraseña del comprobante electrónico</label> (contraseña generada en el paso 10 del Manual plataforma ATV)<br />
                                    <span class="wpcf7-form-control-wrap your-pass"><input id="pass" type="text" name="your-pass" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" /></span> </label></p>
                            <p><input type="submit" onclick="registroHacienda()" value="Enviar" class="wpcf7-form-control wpcf7-submit" /></p>
                            </div></div>
                    </div>
                </div>
            </div>    
            <!-- /Blog Area -->			
       
        </div>
    </div>
</div>
<!-- /Blog Section with Sidebar -->
<!-- Footer Section -->




<?php
get_footer();
?>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


<script type="text/javascript">
    $(document).ready(function (e) {
        $("#uploadForm").on('submit', (function (e) {
            e.preventDefault();  //If this method is called, the default action of the event will not be 							triggered.
            $.ajax({
                url: "upload.php",
                type: "POST",
                data: new FormData(this),
                contentType: false, //when we send json file we write contentType: 'application/json'
                cache: false,
                processData: false,
                success: function (data)
                {
                    $('.ajax-loader').remove();
                    alert("Registro guardado con exito, pronto estaremos en contacto!");
                },
                error: function ()
                {
                }
            });
        }));
    });
</script>