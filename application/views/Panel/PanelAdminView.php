<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/js/materialize.min.js"></script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var elems = document.querySelectorAll('.parallax');
        var instances = M.Parallax.init(elems);
    });
</script>


<div class="parallax-container">
    <div class="parallax slider">
        <img src="https://i.imgur.com/Se6dcQl.jpg">
        <ul class="slides">
    </div>
</div>

<center>
    <img width="200" height="200" class="responsive-img" src="https://image.ibb.co/nvtOvU/Logo_2.png" ALIGN="center">
</center>




<h3 ALIGN="center">Panel de Control</h3>
<br>

<h6 ALIGN="center">¡Bienvenido administrador!</h6>

<p ALIGN="center">
    Aquí podrás consultar todas las solicitudes que han hecho los centros de adopcion <br>
    ¡Elige bien!

</p>
<br>

<div class="row">
    <div class="col offset-m2 m8  s12">


        <table class="responsive-table centered striped">
            <thead>
                <tr>
                    <th>Beneficiencia</th>
                    <th>Dirección</th>
                    <th>Responsable</th>
                    <th>Comprobante</th>
                    <th>Acción</th>
                </tr>
            </thead>

            <tbody>
                <?php
                if ($Registros_Archivo_Benef) {

                    $contModel = 1;
                    foreach ($Registros_Archivo_Benef as $fila) {
                        ?>
                        <tr>
                            <td>
                                <?php echo $fila['NombreB'] ?>
                            </td>
                            <td>
                                <?php echo $fila['DireccionB'] ?>
                            </td>
                            <td>
                                <?php echo $fila['Nombre'] ?>
                            </td>
                            <td>
                              <a href="ftp://ardogs:tPddu5of.@files.000webhost.com/ardogs/Documentos_Beneficencia/<?php echo $fila['Nombre_ArchivoB']?>">
                                  <?php echo $fila['Nombre_ArchivoB'] ?>
                              </a>
                            </td>

                            <?php //aqui va la Accion?>

                            <td>
                              <a href="<?php echo base_url()?>PanelController/AprobarArchivoBenef/<?php echo $fila['Id_Beneficencia']?>"
                                  class="waves-effect Default tooltipped" data-tooltip="Aprobar" data-position="top"><i class="material-icons Large" style="color: #43a047">check</i></a>
                              <a href="<?php echo base_url()?>PanelController/RechazarArchivoBenef/<?php echo $fila['Id_Beneficencia']?>"
                                  class="waves-effect Default tooltipped" data-tooltip="Rechazar" data-position="bottom"><i class="material-icons" style="color: #d32f2f">close</i></a>
                            </td>

                        </tr>
                    <?php
                }
            }
            ?>
            </tbody>
        </table>

        <br>
        <br>
        <br>
        <br>





    </div>

</div>
