<?php
require_once('../../../wp-load.php');
require_once 'funciones.php';
if (!is_user_logged_in() && !current_user_can('manage_options'))
    die('Si no eres administrador no puedes ver esta página.');

$resultados =new funciones();
$registros=$resultados->resultados();

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

            <table style="word-wrap: break-word;">
                <tr>
                    <th>Nombre</th>
                    <th>Identificación</th>
                    <th>Email</th>
                    <th>Teléfono</th>
                    <th>Usuario</th>
                    <th>Contraseña</th>
                    <th>Certificado</th>
                </tr>
                <?php foreach ($registros as $key=>$value){ ?>
                <tr>
                    <td><?php echo substr($value['nombre'], 0, 30); ?></td>
                    <td><?php echo $value['identificacion'] ?></td>
                    <td align="rigth"><?php echo $value['email'] ?></td>
                    <td><?php echo $value['telefono'] ?></td>
                    <td><?php echo $value['usuario'] ?></td>
                    <td><?php echo $value['pass'] ?></td>
                    <td><a href='<?php echo $value['certificado'] ?>'>Descargar</a></td>
                </tr>
                <?php }?>
            </table>



        </div>
        <!-- /Blog Area -->			
        <!--Sidebar Area-->

        <!--Sidebar Area-->
    </div>
</div>

<!-- /Blog Section with Sidebar -->
<!-- Footer Section -->







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
                    $("#targetLayer").html(data);
                },
                error: function ()
                {
                }
            });
        }));
    });
</script>