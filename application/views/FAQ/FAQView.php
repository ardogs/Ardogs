<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/js/materialize.min.js"></script>


<script>
    document.addEventListener('DOMContentLoaded', function() {
        var elems = document.querySelectorAll('.parallax');
        var instances = M.Parallax.init(elems);
    });

</script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var elems = document.querySelectorAll('.collapsible');
        var instances = M.Collapsible.init(elems,{
            accordion: false
        });
    });

</script>




<div class="parallax-container">
    <div class="parallax slider">
        <img data-philter-vintage="1" src="https://image.ibb.co/jKsdV0/nature-animal-dog-playing.jpg">
        <ul class="slides"></ul>
    </div>
</div>


<br><br>
<h1 ALIGN="center">FAQ's</h1>
<br><br>

<div class="container">
    <div class="row">
        <div class="col m12 s12">
            <p ALIGN="center">Aquí encontraras las preguntas más frecuentes relacionadas a nosotros, revisalas con cuidado. Si tienes algun tipo de duda y no se encuentra aqui, no dudes en contactarnos atraves del correo electronico y la redes seociales que te preporcionamos al final de esta pagina. .</p>
        </div>

        <div class="col m12 s12">
            <ul class="collapsible expandable">
                <?php foreach ($FAQ as $pregunta) { ?>
                    <li class="activate">

                        <div class="collapsible-header" >
                            <i class="material-icons">expand_more</i>
                            <?php echo $pregunta['Pregunta']?>
                        </div>
                        
                        <div class="collapsible-body">
                            <i class="material-icons">subdirectory_arrow_right</i>
                            <span>
                            <?php echo $pregunta['Respuesta']?>
                            </span>
                        </div>
                    </li>

                <?php }?>
            </ul>

        </div>

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
