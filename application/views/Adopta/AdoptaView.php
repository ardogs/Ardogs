<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/js/materialize.min.js"></script>
<script src="<?php echo base_url();?>Estilos/js/philter/philter.min.js"></script>
<script>
        document.addEventListener('DOMContentLoaded', function() {
        var elems = document.querySelectorAll('.parallax');
        var instances = M.Parallax.init(elems);
        });
</script>

<style type="text/css">
    [type="radio"]:checked+span:after,
    [type="radio"].with-gap:checked+span:before,
    [type="radio"].with-gap:checked+span:after {
        border: 2px solid #43a047;
    }

    [type="radio"]:checked+span:after,
    [type="radio"].with-gap:checked+span:after {
        background-color: #43a047;
    }
</style>


<div class="parallax-container">
    <div class="parallax slider">
        <img data-philter-vintage="1" src="https://image.ibb.co/jWa3d0/pexels-photo-129634.jpg">
        <ul class="slides"></ul>
    </div>
</div>


<center>
    <img width="200" height="200" class="responsive-img" src="https://image.ibb.co/nvtOvU/Logo_2.png" ALIGN="center">
</center>


<h3 ALIGN="center">Y estos... son nuestros muchachos</h3>
<br><br>
<div class="container">
    <p ALIGN="center">¡Tu momento ha llegado! Aqui podras encontrar a ese amigo que tanto has buscado, es importante que estes aqui porque realmente buscas a alguien compartir, recuerda que la vida de ellos no es un juego</p>
</div>
<br>
<br>
<br>

<div class="container">

    <?php
    // NUEVO (FILTROS)
        $form_U=array('class' => "col s12 form-group");
        echo form_open(base_url().'AdoptaController', $form_U);
    ?>
    <div class="row">

            <div class="col m6 s12 right">
                <div class="col m3 s6"></div> 
                <div class="input-field col m6 s12">  
                <select name="Filtro" id="filtro_id" class="validate" required>
                        <option <?php echo ((isset($Filtro)) && $Filtro=="1")?"selected":"";?> value="1">Todos</option>
                        <option <?php echo ((isset($Filtro)) && $Filtro=="2")?"selected":"";?> value="2">Por Nombre</option>
                        <option <?php echo ((isset($Filtro)) && $Filtro=="3")?"selected":"";?> value="3">Por Beneficencia</option>
                        <option <?php echo ((isset($Filtro)) && $Filtro=="4")?"selected":"";?> value="4">No adoptados</option>
                        <option <?php echo ((isset($Filtro)) && $Filtro=="5")?"selected":"";?> value="5">Adoptados</option>
                        <option <?php echo ((isset($Filtro)) && $Filtro=="6")?"selected":"";?> value="6">En Proceso de Adopción</option>
                        <option <?php echo ((isset($Filtro)) && $Filtro=="7")?"selected":"";?> value="7">Por género</option>
                        <option <?php echo ((isset($Filtro)) && $Filtro=="8")?"selected":"";?> value="8">Por edad</option>
                        <option <?php echo ((isset($Filtro)) && $Filtro=="9")?"selected":"";?> value="9">Por raza</option>
                        <option <?php echo ((isset($Filtro)) && $Filtro=="10")?"selected":"";?> value="10">Agregados Recientemente</option>
                        <option <?php echo ((isset($Filtro)) && $Filtro=="11")?"selected":"";?> value="11">Más Antiguos</option>
                </select>
                <label>Filtro</label>
                
                </div>
                <script>
                    document.addEventListener('DOMContentLoaded', function() {
                        var elems = document.querySelectorAll('select');
                        var instances = M.FormSelect.init(elems);
                      });
                </script>
                <br>
                
                    <?php 
                        $option_button = array (
                            'class'     => 'btn waves-effect waves-light btn pulse green darken-1 col m3 s6 right',
                            'type'      => 'submit',
                            'name'      => 'action',
                            'content'   =>  'Filtrar');
                        echo form_button($option_button)
                    ?>

                <!--a class="waves-effect waves-light btn pulse green darken-1 col m3 s6 right">Filtrar</a-->
        </div>
    </div>
    



<?= form_close() ?>
</div>
<br><br>


<div class="container">
    <div class="row">

        <?php if(isset($results)) { 
            $cont=0;
            foreach ($results->result() as $fila) { ?>
            

            <div class="col m4 s12">
                <div class="card medium">
                    <div class="card-image waves-effect waves-block waves-light">
                        <img  class="activator responsive-img"  data-philter-vintage="1" data-philter-grayscale="0 100" src=<?php echo base_url()."public/Imagenes_Perros/".$fila->Nombre_Foto_File?>>
                    </div>
                    <div class="card-content">
                        <span class="card-title activator grey-text text-darken-4"><?php echo "".$fila->Nombre_Perro?><i class="material-icons right">more_vert</i></span>
                        <p align="right">
                            
                            <?php 
                            extract($this->session->userdata('user'));
                                if($Id_Beneficencia==null){
                                   if($fila->Status==2){
                                    echo "<a href=".base_url()."GeneraCitaController/index/".$fila->Id_Perro.">Me gustaría conocerlo</a>";
                                  }
                                  else if($fila->Status==1){
                                    echo "<FONT SIZE=3 COLOR='#FFC300'>EN PROCESO DE ADOPCIÓN</FONT>";
                                  }
                                  else{
                                    echo "<FONT SIZE=3 COLOR='#5AE80E'>ADOPTADO</FONT>";
                                  } 
                                }
                            ?>
                        </p>

                        <!--br-->
                        <p align="right">
                            <?php echo "Centro de Adopción: ".$beneficencias["$cont"]->NombreB;?>
                        </p>
                    </div>
                    <div class="card-reveal">
                        <font size="3" face="Bahnschrift Light" >
                            <span class="card-title grey-text text-darken-4"><i class="material-icons right">close</i><?php echo "Acerca de ".$fila->Nombre_Perro?></span>
                            
                                <?php echo "<br>";
                                      echo "Raza: ".$fila->Raza."<br>";
                                      echo "Edad: ".$fila->Edad."<br>";
                                      echo "Sexo: "; echo($fila->Sexo=='H')?"Macho<br>":"Hembra<br>";
                                      echo "Descripcion: ".$fila->DescripcionP;
                                ?>
                        </font>
                    </div>
                </div>
            </div>

        <?php $cont++;}} else{?>
            <div>Perro(s) NO Encontrados.</div>
        <?php }?>
        
    </div>
</div>
<br>
<br>
<br>

<center>
    <?php if (isset($links)) { ?>
        <?php echo $links ?>
    <?php } ?>
</center>
<br>
<br>
<br>








<script>
    new Philter({
        transitionTime: 0.9, // hover transition time

    });

</script>
