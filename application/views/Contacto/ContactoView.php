<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/js/materialize.min.js"></script>


<script>
    document.addEventListener('DOMContentLoaded', function() {
        var elems = document.querySelectorAll('.parallax');
        var instances = M.Parallax.init(elems);
    });

</script>




<div class="parallax-container">
    <div class="parallax slider">
        <img data-philter-vintage="1" src="https://image.ibb.co/mog5tL/pexels-photo-237692.jpg">
        <ul class="slides"></ul>
    </div>
</div>


<br><br>
<h1 ALIGN="center">Contacto</h1>
<br><br>

<div class="container">
    <div class="row">
        <div class="col m12 s12">
            <p ALIGN="center">En estas seccion encontraras a todos los colaboradores con los que trabajamos, con los que vamos de la mano. En este sitio todos somos importantes, tu, ellos y nosotros.</p>
        </div>

        <!--Desde aqui es donde esta la parte del ciclo-->
        <?php foreach ($Contactos as $contacto) { ?>
            <div class="col m12 s12 card-panel">
                <br>
                <br>
                <br>

                <h4 ALIGN="center"><?php echo $contacto['NombreB']; ?></h4>
                <h5 ALIGN="center">Medios de contacto</h5>
                <p ALIGN="center">
                    <FONT SIZE=4>Correo: </FONT>
                    <FONT SIZE=3><?php echo $contacto['CorreoB']; ?></FONT><br>

                    <FONT SIZE=4>Telefono: </FONT>
                    <FONT SIZE=3><?php echo $contacto['TelefonoB']; ?></FONT><br>

                    <FONT SIZE=4>Dirección: </FONT>
                    <FONT SIZE=3><?php echo $contacto['DireccionB']; ?></FONT><br>
                </p>
                <h5 ALIGN="center">Información interesante</h5>
                <p ALIGN="center"><?php echo $contacto['DescripcionB']; ?></p>
            </div>
        <?php } ?>
        <!--Aqui termina-->

    </div>
</div>



<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
