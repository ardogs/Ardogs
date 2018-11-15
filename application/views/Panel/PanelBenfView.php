<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/js/materialize.min.js"></script>

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


<script>
    document.addEventListener('DOMContentLoaded', function() {
        var elems = document.querySelectorAll('.collapsible');
        var instances = M.Collapsible.init(elems);
    });

</script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var elems = document.querySelectorAll('.parallax');
        var instances = M.Parallax.init(elems);
    });

</script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var elems = document.querySelectorAll('.tooltipped');
        var instances = M.Tooltip.init(elems);
    });

</script>

<!--Script's que verifican la entrada del usuario-->
<script>
    function checar(e) {
        tecla = (document.all) ? e.keyCode : e.which;

        //Tecla de retroceso para borrar, siempre la permite
        if (tecla == 8) {
            return false;
        }

        // Patron de entrada, en este caso solo acepta numeros y letras
        patron = /[A-Za-z ]/;
        tecla_final = String.fromCharCode(tecla);
        return patron.test(tecla_final);
    }

</script>



<script>
    function checar_1(e_1) {
        tecla = (document.all) ? e_1.keyCode : e_1.which;

        //Tecla de retroceso para borrar, siempre la permite
        if (tecla == 8) {
            return false;
        }
        // Patron de entrada, en este caso solo acepta numeros y letras
        patron = /[0-9-]/;
        tecla_final = String.fromCharCode(tecla);
        return patron.test(tecla_final);
    }

</script>

<script>
    function checar_2(e_2) {
        tecla = (document.all) ? e_2.keyCode : e_2.which;

        //Tecla de retroceso para borrar, siempre la permite
        if (tecla == 8) {
            return true;
        }

        // Patron de entrada, en este caso solo acepta numeros y letras
        patron = /[0-9]/;
        tecla_final = String.fromCharCode(tecla);
        return patron.test(tecla_final);
    }

</script>

<script>
    function checar_3(e_3) {
        tecla = (document.all) ? e_3.keyCode : e_3.which;

        //Tecla de retroceso para borrar, siempre la permite
        if (tecla == 8) {
            return true;
        }

        // Patron de entrada, en este caso solo acepta numeros y letras
        patron = /[0-9A-Za-z #/., ]/;
        tecla_final = String.fromCharCode(tecla);
        return patron.test(tecla_final);
    }

</script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var elems = document.querySelectorAll('.modal');
        var instances = M.Modal.init(elems);
    });

</script>

<div class="parallax-container">
    <div class="parallax slider">
        <img src="https://image.ibb.co/if9K8e/pexels_photo_164446.jpg">
        <ul class="slides">
    </div>
</div>




<center>
    <img width="200" height="200" class="responsive-img" src="https://image.ibb.co/nvtOvU/Logo_2.png" ALIGN="center">
</center>




<h3 ALIGN="center">Panel de Control</h3>
<br>

<p ALIGN="center">Controla tus citas, modifica tu informacion personal del titular y la beneficiencia, controla el inicio de sesión.</p>
<br>

<script>
    function vistActiva(tipo){
            $('#Activa_Id').val(tipo);
        }
    </script>


<div class="container">

    <div class="row">

        <div class="col s12">

            <ul class="collapsible popout">
                <!--Aqui-->
                <li <?php echo ($this->input->post('Activa')==1)?"class='active'":"" ?> onClick="vistActiva('1')">
                    <div class="collapsible-header">
                        <h5> <i class="material-icons">pets</i>
                            Agregar nuevo muchacho(a)
                            <FONT SIZE=3 COLOR="#5AE80E">
                                <?php echo (isset($actDatosCorrect))?"$actDatosCorrect":""; ?>
                            </FONT>
                            <FONT SIZE=3 COLOR="#D55F02">
                                <?php echo (isset($actDatosIncorrect))?"$actDatosIncorrect":""; ?>
                            </FONT>
                        </h5>
                    </div>
                    <div class="collapsible-body">
                        <p ALIGN="center">Si alguien nuevo llego, ¿Por que no lo presentamos?.</p>
                        <br>

                        <div class="row">
                            <?php
                            $form_ADD =  array('class' => "col s12 form-group");
                            echo form_open_multipart(base_url().'PanelController', $form_ADD);
                        ?>

                            <div class="row">
                                <!-- Campo invisible para la pestaña activa-->
                                <?php
                                    $vistaActiva=array(
                                        'name'      =>  'Activa',
                                        'id'        =>  'Activa_Id',
                                        'value'     =>  1,
                                        'required'  => 'required',
                                        'class'     =>  'validate' ,
                                        'style'     => 'display:none'
                                        );
                                    echo form_input($vistaActiva);
                                ?>

                                <div class="col m6 s12">
                                    <div class="input-field col m12 s12">
                                        <?php
                                    $Nom_p = array(
                                        'name'      => 'Nombre_Perro',
                                        'id'        => 'P_id',
                                        'required'  =>  'required',
                                        'type'      => 'text',
                                        'title'     => 'Nombre_Perro');

                                    echo form_input($Nom_p, (isset($actDatosCorrect))? "":($this->input->post('Nombre_Perro')),'');
                                    echo form_label('Nombre del campeón','P_id');
                                    echo form_error('Nombre_Perro', '<span class="helper-text"style="color:red;">', '</span>');
                                ?>
                                    </div>


                                    <div class="input-field col m4 s12">
                                        <select name="Edad" id="Edad_id" class="validate" required>
                                            <optgroup label="Cachorros">

                                                <option <?php echo ($this->input->post('Edad')=="1 mes" && (!isset($actDatosCorrect)))?"selected":"";?> value="1 mes">1 mes</option>
                                                <option <?php echo ($this->input->post('Edad')=="2 meses" && (!isset($actDatosCorrect)))?"selected":"";?> value="2 meses">2 meses</option>
                                                <option <?php echo ($this->input->post('Edad')=="3 meses" && (!isset($actDatosCorrect)))?"selected":"";?> value="3 meses">3 meses</option>
                                                <option <?php echo ($this->input->post('Edad')=="4 meses" && (!isset($actDatosCorrect)))?"selected":"";?> value="4 meses">4 meses</option>
                                                <option <?php echo ($this->input->post('Edad')=="5 meses" && (!isset($actDatosCorrect)))?"selected":"";?> value="5 meses">5 meses</option>
                                                <option <?php echo ($this->input->post('Edad')=="6 meses" && (!isset($actDatosCorrect)))?"selected":"";?> value="6 meses">6 meses</option>
                                                <option <?php echo ($this->input->post('Edad')=="7 meses" && (!isset($actDatosCorrect)))?"selected":"";?> value="7 meses">7 meses</option>
                                                <option <?php echo ($this->input->post('Edad')=="8 meses" && (!isset($actDatosCorrect)))?"selected":"";?> value="8 meses">8 meses</option>
                                                <option <?php echo ($this->input->post('Edad')=="9 meses" && (!isset($actDatosCorrect)))?"selected":"";?> value="9 meses">9 meses</option>
                                                <option <?php echo ($this->input->post('Edad')=="10 meses" && (!isset($actDatosCorrect)))?"selected":"";?> value="10 meses">10 meses</option>
                                                <option <?php echo ($this->input->post('Edad')=="11 meses" && (!isset($actDatosCorrect)))?"selected":"";?> value="11 meses">11 meses</option>
                                            </optgroup>
                                            <optgroup label="Adultos">
                                                <option <?php echo ($this->input->post('Edad')=="1 año" && (!isset($actDatosCorrect)))?"selected":"";?> value="1 año">1 año</option>
                                                <option <?php echo ($this->input->post('Edad')=="2 años" && (!isset($actDatosCorrect)))?"selected":"";?> value="2 años">2 años</option>
                                                <option <?php echo ($this->input->post('Edad')=="3 años" && (!isset($actDatosCorrect)))?"selected":"";?> value="3 años">3 años</option>
                                                <option <?php echo ($this->input->post('Edad')=="4 años" && (!isset($actDatosCorrect)))?"selected":"";?> value="4 años">4 años</option>
                                                <option <?php echo ($this->input->post('Edad')=="5 años" && (!isset($actDatosCorrect)))?"selected":"";?> value="5 años">5 años</option>
                                                <option <?php echo ($this->input->post('Edad')=="6 años" && (!isset($actDatosCorrect)))?"selected":"";?> value="6 años">6 años</option>
                                                <option <?php echo ($this->input->post('Edad')=="7 años" && (!isset($actDatosCorrect)))?"selected":"";?> value="7 años">7 años</option>
                                                <option <?php echo ($this->input->post('Edad')=="8 años" && (!isset($actDatosCorrect)))?"selected":"";?> value="8 años">8 años</option>
                                                <option <?php echo ($this->input->post('Edad')=="9 años" && (!isset($actDatosCorrect)))?"selected":"";?> value="9 años">9 años</option>
                                                <option <?php echo ($this->input->post('Edad')=="10 años" && (!isset($actDatosCorrect)))?"selected":"";?> value="10 años">10 años</option>
                                                <option <?php echo ($this->input->post('Edad')=="11 años" && (!isset($actDatosCorrect)))?"selected":"";?> value="11 años">11 años</option>
                                                <option <?php echo ($this->input->post('Edad')=="12 años" && (!isset($actDatosCorrect)))?"selected":"";?> value="12 años">12 años</option>
                                                <option <?php echo ($this->input->post('Edad')=="13 años" && (!isset($actDatosCorrect)))?"selected":"";?> value="13 años">13 años</option>
                                                <option <?php echo ($this->input->post('Edad')=="14 años" && (!isset($actDatosCorrect)))?"selected":"";?> value="14 años">14 años</option>
                                                <option <?php echo ($this->input->post('Edad')=="15 años" && (!isset($actDatosCorrect)))?"selected":"";?> value="15 años">15 años</option>
                                            </optgroup>
                                        </select>
                                        <label>Edad</label>
                                    </div>

                                    <script>
                                        document.addEventListener('DOMContentLoaded', function() {
                                            var elems = document.querySelectorAll('select');
                                            var instances = M.FormSelect.init(elems);
                                          });
                                    </script>

                                    <div class="input-field col m8 s12">
                                        <select name="Raza" id="Raza_id" class="validate" required>
                                            <optgroup label="A">
                                                <option <?php echo ($this->input->post('Raza')=="Alano" && (!isset($actDatosCorrect)))?"selected":"";?> value="Alano">Alano</option>
                                                <option <?php echo ($this->input->post('Raza')=="Alaskan" && (!isset($actDatosCorrect)))?"selected":"";?> value="Alaskan Malamute">Alaskan Malamute</option>
                                                <option <?php echo ($this->input->post('Raza')=="Staffordshire Terrier" && (!isset($actDatosCorrect)))?"selected":"";?> value="American Staffordshire Terrier">American Staffordshire Terrier </option>
                                                <option <?php echo ($this->input->post('Raza')=="American Water Spaniel" && (!isset($actDatosCorrect)))?"selected":"";?> value="American Water Spaniel">American Water Spaniel</option>
                                                <option <?php echo ($this->input->post('Raza')=="Antiguo Pastor Inglés" && (!isset($actDatosCorrect)))?"selected":"";?> value="Antiguo Pastor Inglés">Antiguo Pastor Inglés</option>
                                            </optgroup>

                                            <optgroup label="B">
                                                <option <?php echo ($this->input->post('Raza')=="Basset Azul de Gaseogne" && (!isset($actDatosCorrect)))?"selected":"";?> value="Basset Azul de Gaseogne">Basset Azul de Gaseogne</option>
                                                <option <?php echo ($this->input->post('Raza')=="Basset Hound" && (!isset($actDatosCorrect)))?"selected":"";?> value="Basset Hound">Basset Hound</option>
                                                <option <?php echo ($this->input->post('Raza')=="Basset leonado de Bretaña" && (!isset($actDatosCorrect)))?"selected":"";?> value="Basset leonado de Bretaña">Basset leonado de Bretaña</option>
                                                <option <?php echo ($this->input->post('Raza')=="Beagle" && (!isset($actDatosCorrect)))?"selected":"";?> value="Beagle">Beagle</option>
                                                <option <?php echo ($this->input->post('Raza')=="Bearded Collie" && (!isset($actDatosCorrect)))?"selected":"";?> value="Bearded Collie">Bearded Collie</option>
                                                <option <?php echo ($this->input->post('Raza')=="Bichón Maltés" && (!isset($actDatosCorrect)))?"selected":"";?> value="Bichón Maltés">Bichón Maltés</option>
                                                <option <?php echo ($this->input->post('Raza')=="Bobtail" && (!isset($actDatosCorrect)))?"selected":"";?> value="Bobtail">Bobtail </option>
                                                <option <?php echo ($this->input->post('Raza')=="Border Collie" && (!isset($actDatosCorrect)))?"selected":"";?> value="Border Collie">Border Collie</option>
                                                <option <?php echo ($this->input->post('Raza')=="Boston Terrier" && (!isset($actDatosCorrect)))?"selected":"";?> value="Boston Terrier">Boston Terrier</option>
                                                <option <?php echo ($this->input->post('Raza')=="Boxer" && (!isset($actDatosCorrect)))?"selected":"";?> value="Boxer">Boxer</option>
                                                <option <?php echo ($this->input->post('Raza')=="Bull Terrier" && (!isset($actDatosCorrect)))?"selected":"";?> value="Bull Terrier">Bull Terrier</option>
                                                <option <?php echo ($this->input->post('Raza')=="Bulldog Americano" && (!isset($actDatosCorrect)))?"selected":"";?> value="Bulldog Americano">Bulldog Americano</option>
                                                <option <?php echo ($this->input->post('Raza')=="Bulldog Francés" && (!isset($actDatosCorrect)))?"selected":"";?> value="Bulldog Francés">Bulldog Francés</option>
                                                <option <?php echo ($this->input->post('Raza')=="Bulldog Inglés" && (!isset($actDatosCorrect)))?"selected":"";?> value="Bulldog Inglés">Bulldog Inglés</option>
                                            </optgroup>

                                            <optgroup label="C">
                                                <option <?php echo ($this->input->post('Raza')=="Caniche" && (!isset($actDatosCorrect)))?"selected":"";?> value="Caniche">Caniche</option>
                                                <option <?php echo ($this->input->post('Raza')=="Carlino" && (!isset($actDatosCorrect)))?"selected":"";?> value="Carlino">Carlino</option>
                                                <option <?php echo ($this->input->post('Raza')=="Chihuahua" && (!isset($actDatosCorrect)))?"selected":"";?> value="Chihuahua">Chihuahua</option>
                                                <option <?php echo ($this->input->post('Raza')=="Cirneco del Etna" && (!isset($actDatosCorrect)))?"selected":"";?> value="Cirneco del Etna">Cirneco del Etna</option>
                                                <option <?php echo ($this->input->post('Raza')=="Chow Chow" && (!isset($actDatosCorrect)))?"selected":"";?> value="Chow Chow">Chow Chow</option>
                                                <option <?php echo ($this->input->post('Raza')=="Cocker Spaniel Americano" && (!isset($actDatosCorrect)))?"selected":"";?> value="Cocker Spaniel Americano">Cocker Spaniel Americano</option>
                                                <option <?php echo ($this->input->post('Raza')=="Cocker Spaniel Inglés" && (!isset($actDatosCorrect)))?"selected":"";?> value="Cocker Spaniel Inglés">Cocker Spaniel Inglés</option>
                                            </optgroup>

                                            <optgroup label="D">
                                                <option <?php echo ($this->input->post('Raza')=="Dálmata" && (!isset($actDatosCorrect)))?"selected":"";?> value="Dálmata">Dálmata</option>
                                                <option <?php echo ($this->input->post('Raza')=="Doberman" && (!isset($actDatosCorrect)))?"selected":"";?> value="Dobermann">Dobermann</option>
                                                <option <?php echo ($this->input->post('Raza')=="Dogo Alemán" && (!isset($actDatosCorrect)))?"selected":"";?> value="Dogo Alemán">Dogo Alemán</option>
                                                <option <?php echo ($this->input->post('Raza')=="Dogo Argentino" && (!isset($actDatosCorrect)))?"selected":"";?> value="Dogo Argentino">Dogo Argentino</option>
                                                <option <?php echo ($this->input->post('Raza')=="Dogo de Burdeos" && (!isset($actDatosCorrect)))?"selected":"";?> value="Dogo de Burdeos">Dogo de Burdeos</option>
                                            </optgroup>

                                            <optgroup label="F">
                                                <option <?php echo ($this->input->post('Raza')=="Finlandés" && (!isset($actDatosCorrect)))?"selected":"";?> value="Finlandés">Finlandés</option>
                                                <option <?php echo ($this->input->post('Raza')=="Fox Terrier de pelo liso" && (!isset($actDatosCorrect)))?"selected":"";?> value="Fox Terrier de pelo liso">Fox Terrier de pelo liso</option>
                                                <option <?php echo ($this->input->post('Raza')=="Fox Terrier" && (!isset($actDatosCorrect)))?"selected":"";?> value="Fox Terrier">Fox Terrier</option>
                                                <option <?php echo ($this->input->post('Raza')=="Foxhound Americano" && (!isset($actDatosCorrect)))?"selected":"";?> value="Foxhound Americano">Foxhound Americano</option>
                                                <option <?php echo ($this->input->post('Raza')=="Foxhound Inglés" && (!isset($actDatosCorrect)))?"selected":"";?> value="Foxhound Inglés">Foxhound Inglés</option>
                                            </optgroup>

                                            <optgroup label="G">
                                                <option <?php echo ($this->input->post('Raza')=="Galgo Afgano" && (!isset($actDatosCorrect)))?"selected":"";?> value="Galgo Afgano">Galgo Afgano</option>
                                                <option <?php echo ($this->input->post('Raza')=="Gigante de los Pirineos" && (!isset($actDatosCorrect)))?"selected":"";?> value="Gigante de los Pirineos"> Gigante de los Pirineos</option>
                                                <option <?php echo ($this->input->post('Raza')=="Golden Retriever" && (!isset($actDatosCorrect)))?"selected":"";?> value="Golden Retriever">Golden Retriever</option>
                                                <option <?php echo ($this->input->post('Raza')=="Gos d'Atura" && (!isset($actDatosCorrect)))?"selected":"";?> value="Gos d'Atura">Gos d'Atura</option>
                                                <option <?php echo ($this->input->post('Raza')=="Gran Danés" && (!isset($actDatosCorrect)))?"selected":"";?> value="Gran Danés">Gran Danés</option>
                                            </optgroup>

                                            <optgroup label="H">
                                                <option <?php echo ($this->input->post('Raza')=="Husky Siberiano" && (!isset($actDatosCorrect)))?"selected":"";?> value="Husky Siberiano">Husky Siberiano</option>
                                            </optgroup>

                                            <optgroup label="L">
                                                <option <?php echo ($this->input->post('Raza')=="Laika de Siberia Occidental" && (!isset($actDatosCorrect)))?"selected":"";?> value="Laika de Siberia Occidental">Laika de Siberia Occidental</option>
                                                <option <?php echo ($this->input->post('Raza')=="Laika Ruso-europeo" && (!isset($actDatosCorrect)))?"selected":"";?> value="Laika Ruso-europeo"> Laika Ruso-europeo</option>
                                                <option <?php echo ($this->input->post('Raza')=="Labrador Retriever" && (!isset($actDatosCorrect)))?"selected":"";?> value="Labrador Retriever">Labrador Retriever</option>
                                            </optgroup>

                                            <optgroup label="M">
                                                <option <?php echo ($this->input->post('Raza')=="Mastín del Pirineo" && (!isset($actDatosCorrect)))?"selected":"";?> value="Mastín del Pirineo">Mastín del Pirineo</option>
                                                <option <?php echo ($this->input->post('Raza')=="Mastin del Tibet" && (!isset($actDatosCorrect)))?"selected":"";?> value="Mastin del Tibet">Mastin del Tibet</option>
                                                <option <?php echo ($this->input->post('Raza')=="Mastín Español" && (!isset($actDatosCorrect)))?"selected":"";?> value="Mastín Español">Mastín Español</option>
                                                <option <?php echo ($this->input->post('Raza')=="Mastín Napolitano" && (!isset($actDatosCorrect)))?"selected":"";?> value="Mastín Napolitano">Mastín Napolitano</option>
                                                <option <?php echo ($this->input->post('Raza')=="Mestizo" && (!isset($actDatosCorrect)))?"selected":"";?> value="Mestizo">Mestizo</option>
                                            </optgroup>

                                            <optgroup label="P">
                                                <option <?php echo ($this->input->post('Raza')=="Pastor Alemán" && (!isset($actDatosCorrect)))?"selected":"";?> value="Pastor Alemán">Pastor Alemán</option>
                                                <option <?php echo ($this->input->post('Raza')=="Pastor Australiano" && (!isset($actDatosCorrect)))?"selected":"";?> value="Pastor Australiano">Pastor Australiano</option>
                                                <option <?php echo ($this->input->post('Raza')=="Pastor Belga" && (!isset($actDatosCorrect)))?"selected":"";?> value="Pastor Belga">Pastor Belga</option>
                                                <option <?php echo ($this->input->post('Raza')=="Pastor de Brie" && (!isset($actDatosCorrect)))?"selected":"";?> value="Pastor de Brie">Pastor de Brie</option>
                                                <option <?php echo ($this->input->post('Raza')=="Pastor de los Pirineos de Cara Rosa" && (!isset($actDatosCorrect)))?"selected":"";?> value="Pastor de los Pirineos de Cara Rosa">Pastor de los Pirineos de Cara Rosa</option>
                                                <option <?php echo ($this->input->post('Raza')=="Pekinés" && (!isset($actDatosCorrect)))?"selected":"";?> value="Pekinés">Pekinés</option>
                                                <option <?php echo ($this->input->post('Raza')=="Perdiguero Chesapeake Bay" && (!isset($actDatosCorrect)))?"selected":"";?> value="Perdiguero Chesapeake Bay">Perdiguero Chesapeake Bay</option>
                                                <option <?php echo ($this->input->post('Raza')=="Perdiguero de Drentse" && (!isset($actDatosCorrect)))?"selected":"";?> value="Perdiguero de Drentse">Perdiguero de Drentse</option>
                                                <option <?php echo ($this->input->post('Raza')=="Perdiguero de Pelo lido" && (!isset($actDatosCorrect)))?"selected":"";?> value="Perdiguero de Pelo lido">Perdiguero de Pelo lido</option>
                                                <option <?php echo ($this->input->post('Raza')=="Perdiguero de pelo rizado" && (!isset($actDatosCorrect)))?"selected":"";?> value="Perdiguero de pelo rizado">Perdiguero de pelo rizado</option>
                                                <option <?php echo ($this->input->post('Raza')=="Perdiguero Portugués" && (!isset($actDatosCorrect)))?"selected":"";?> value="Perdiguero Portugués"> Perdiguero Portugués</option>
                                                <option <?php echo ($this->input->post('Raza')=="Pitbull" && (!isset($actDatosCorrect)))?"selected":"";?> value="Pitbull">Pitbull</option>
                                                <option <?php echo ($this->input->post('Raza')=="Podenco Ibicenco" && (!isset($actDatosCorrect)))?"selected":"";?> value="Podenco Ibicenco">Podenco Ibicenco</option>
                                                <option <?php echo ($this->input->post('Raza')=="Podenco Portugués" && (!isset($actDatosCorrect)))?"selected":"";?> value="Podenco Portugués">Podenco Portugués</option>
                                                <option <?php echo ($this->input->post('Raza')=="Presa canario" && (!isset($actDatosCorrect)))?"selected":"";?> value="Presa canario">Presa canario</option>
                                                <option <?php echo ($this->input->post('Raza')=="Presa Mallorquin" && (!isset($actDatosCorrect)))?"selected":"";?> value="Presa Mallorquin">Presa Mallorquin</option>
                                            </optgroup>

                                            <optgroup label="R">
                                                <option <?php echo ($this->input->post('Raza')=="Rottweiler" && (!isset($actDatosCorrect)))?"selected":"";?> value="Rottweiler">Rottweiler</option>
                                                <option value="Rough Collie">Rough Collie</option>
                                            </optgroup>

                                            <optgroup label="S">
                                                <option <?php echo ($this->input->post('Raza')=="Sabueso Español" && (!isset($actDatosCorrect)))?"selected":"";?> value="Sabueso Español">Sabueso Español</option>
                                                <option <?php echo ($this->input->post('Raza')=="Sabueso Hélenico" && (!isset($actDatosCorrect)))?"selected":"";?> value="Sabueso Hélenico">Sabueso Hélenico</option>
                                                <option <?php echo ($this->input->post('Raza')=="Sabueso Italiano" && (!isset($actDatosCorrect)))?"selected":"";?> value="Sabueso Italiano">Sabueso Italiano</option>
                                                <option <?php echo ($this->input->post('Raza')=="Sabueso Suizo" && (!isset($actDatosCorrect)))?"selected":"";?> value="Sabueso Suizo">Sabueso Suizo</option>
                                                <option <?php echo ($this->input->post('Raza')=="Samoyedo" && (!isset($actDatosCorrect)))?"selected":"";?> value="Samoyedo">Samoyedo</option>
                                                <option <?php echo ($this->input->post('Raza')=="San Bernardo" && (!isset($actDatosCorrect)))?"selected":"";?> value="San Bernardo">San Bernardo</option>
                                                <option <?php echo ($this->input->post('Raza')=="Scottish Terrier" && (!isset($actDatosCorrect)))?"selected":"";?> value="Scottish Terrier">Scottish Terrier</option>
                                                <option <?php echo ($this->input->post('Raza')=="Setter Irlandés" && (!isset($actDatosCorrect)))?"selected":"";?> value="Setter Irlandés">Setter Irlandés</option>
                                                <option <?php echo ($this->input->post('Raza')=="Shar Pei" && (!isset($actDatosCorrect)))?"selected":"";?> value="Shar Pei">Shar Pei</option>
                                                <option <?php echo ($this->input->post('Raza')=="Shiba Inu" && (!isset($actDatosCorrect)))?"selected":"";?> value="Shiba Inu">Shiba Inu</option>
                                                <option <?php echo ($this->input->post('Raza')=="Siberian Husky" && (!isset($actDatosCorrect)))?"selected":"";?> value="Siberian Husky">Siberian Husky</option>
                                                <option <?php echo ($this->input->post('Raza')=="Staffordshire Bull Terrier" && (!isset($actDatosCorrect)))?"selected":"";?> value="Staffordshire Bull Terrier">Staffordshire Bull Terrier</option>
                                            </optgroup>

                                            <optgroup label="T">
                                                <option <?php echo ($this->input->post('Raza')=="Teckel" && (!isset($actDatosCorrect)))?"selected":"";?> value="Teckel">Teckel</option>
                                                <option <?php echo ($this->input->post('Raza')=="Terranova" && (!isset($actDatosCorrect)))?"selected":"";?> value="Terranova">Terranova</option>
                                                <option <?php echo ($this->input->post('Raza')=="Terrier Australiano" && (!isset($actDatosCorrect)))?"selected":"";?> value="Terrier Australiano">Terrier Australiano</option>
                                                <option <?php echo ($this->input->post('Raza')=="Terrier Escocés" && (!isset($actDatosCorrect)))?"selected":"";?> value="Terrier Escocés">Terrier Escocés</option>
                                                <option <?php echo ($this->input->post('Raza')=="Terrier Irlandés" && (!isset($actDatosCorrect)))?"selected":"";?> value="Terrier Irlandés">Terrier Irlandés</option>
                                                <option <?php echo ($this->input->post('Raza')=="Terrier Japonés" && (!isset($actDatosCorrect)))?"selected":"";?> value="Terrier Japonés">Terrier Japonés</option>
                                                <option <?php echo ($this->input->post('Raza')=="Terrier Negro Ruso" && (!isset($actDatosCorrect)))?"selected":"";?> value="Terrier Negro Ruso">Terrier Negro Ruso</option>
                                                <option <?php echo ($this->input->post('Raza')=="Terrier Norfolk" && (!isset($actDatosCorrect)))?"selected":"";?> value="Terrier Norfolk">Terrier Norfolk</option>
                                                <option <?php echo ($this->input->post('Raza')=="errier Norwich" && (!isset($actDatosCorrect)))?"selected":"";?> value="Terrier Norwich">Terrier Norwich</option>
                                            </optgroup>

                                            <optgroup label="Y">
                                                <option <?php echo ($this->input->post('Raza')=="Yorkshire Terrier" && (!isset($actDatosCorrect)))?"selected":"";?> value="Yorkshire Terrier">Yorkshire Terrier</option>
                                            </optgroup>

                                        </select>
                                        <label>Raza</label>
                                    </div>




                                    <div class="input-field col 12 s12">

                                        <div name="dogs" ALIGN="center">
                                            <label for="sex_1_U">
                                                <?php echo form_radio('Sexo', 'M',($this->input->post('Sexo')=='M')?TRUE:FALSE, "id='sex_1_U' class ='with-gap' required"); ?>
                                                <span> Hembra</span>
                                            </label>

                                            <label for="sex_2_U">
                                                <?php echo form_radio('Sexo', 'H', ($this->input->post('Sexo')=='H')?TRUE:FALSE, "id='sex_2_U' class ='with-gap' required"); ?>
                                                <span>Macho</span>
                                            </label>
                                        </div>


                                    </div>

                                    <div class="input-field col m12 s12">
                                        <?php
                                    $texta_B=array(
                                        'name'          =>  "DescripcionP",
                                        'id'            =>  "id_texta_P",
                                        'class'         =>  "materialize-textarea",
                                        'required'      =>  true,
                                        'title'         =>  "Cuentanos algo acerca sobre el nuevo intregrante",
                                        'data-length'   =>  "200",
                                        'oninvalid' =>  "setCustomValidity('Tendras que contarnos aún más')",
                                        'oninput'   =>  "setCustomValidity('')");

                                    echo form_textarea($texta_B, (isset($actDatosCorrect))? "":($this->input->post('DescripcionP')));
                                    echo form_label('Cuentanos algo acerca sobre el nuevo intregrante', 'texta_B');
                                    echo form_error('DescripcionP', '<span class="helper-text"style="color:red;">', '</span>');
                                ?>
                                    </div>

                                    <!--Scrip para el conteo de caracteres-->
                                    <script>
                                        $('textarea#id_texta_B').characterCounter();

                                    </script>



                                </div>




                                <div class="col m6 s12">
                                    <div class="col m12 s12">

                                        <div class="file-field input-field">
                                            <div class="btn waves-effect waves-light grey darken-4">
                                                <span>Seleccionar</span>
                                                <input type="file" name="userfile" value="fichero" />
                                            </div>
                                            <div class="file-path-wrapper">
                                                <input class="file-path validate" placeholder="Selecciona la mejor foto del muchacho(a)" type="text">
                                            </div>
                                            <?php
                                            echo form_error('Nombre_Foto_File', '<span class="helper-text"style="color:red;">', '</span>');
                                            ?>
                                        </div>

                                    </div>


                                </div>

                                <div class="col m12 s12" ALIGN="center">
                                    <?php
                                        $option_button = array (
                                            'class'     => 'btn waves-effect waves-light grey darken-4',
                                            'type'      => 'submit',
                                            'name'      => 'action',
                                            'content'   =>  'AGREGAR');
                                        echo form_button($option_button)
                                    ?>
                                </div>

                            </div>



                            <?php echo form_close();?>







                        </div>


                    </div>
                    <!---Aqio--->
                </li>

                <li <?php echo ($this->input->post('Activa')==2)?"class='active'":"" ?> onClick="vistActiva('2')">
                    <div class="collapsible-header">
                        <h5> <i class="material-icons">assignment</i>Administrar citas</h5>
                    </div>
                    <div class="collapsible-body">
                        <p ALIGN="center">Aquí como administrador podras visualizar todas las citas asociadas a tu Centro de Adopción o Beneficencia. Tendrás además, la opción de poder modificar el estado de alguna de ella conforme se vayan realizando o cancelando.</p>
                        <br>
                        <table class="responsive-table">
                            <thead>
                                <tr>
                                    <th>Cita</th>
                                    <th>Usuario</th>
                                    <th>Nombre Usuario</th>
                                    <th>Perro</th>
                                    <th>Nombre Perro</th>
                                    <th>Fecha</th>
                                    <th>Hora</th>
                                    <th>Estado</th>
                                    <th>Acción</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php
                                if($Citas_Benef){
                                    $contModel=1;
                                    foreach ($Citas_Benef as $fila) {
                                      if($fila['Status']!=0){
                                ?>
                                <tr>
                                    <td>
                                        <?php echo $fila['Id_Cita']?>
                                    </td>
                                    <td>
                                        <?php echo $fila['Id_User']?>
                                    </td>
                                    <td>
                                        <?php echo $fila['Nombre']?>
                                    </td>
                                    <td>
                                        <?php echo $fila['Id_Perro']?>
                                    </td>
                                    <td>
                                        <p>
                                            <?php echo $fila['Nombre_Perro']?>
                                        </p>
                                    </td>
                                    <td>
                                        <?php echo $fila['Fecha']?>
                                    </td>
                                    <td>

                                        <?php echo $fila['Hora']?>

                                    </td>
                                    <td>
                                        <?php
                                      }
                                     if($fila['Status']==2)

                                        echo '<FONT COLOR="#43a047">Completada</FONT>';
                                     else if($fila['Status']==1)
                                        echo '<FONT COLOR="#c0ca33">En proceso</FONT>';
                                     else
                                        echo '<FONT COLOR="red"Cancelada></FONT>';
                                     ?>
                                    </td>
                                    <td>
                                        <?php
                                    if($fila['Status']==1) {
                                    ?>
                                        <a data-target="modal<?php echo $contModel?>" class="btn-flat modal-trigger waves-effect ">Opciones</a>

                                        <div id="modal<?php echo $contModel?>" class="modal ">
                                            <div class="modal-content">
                                                <div class="row">
                                                    <div class="col s12 m12">

                                                        <center>
                                                            <img width="150" height="150" class="responsive-img" src="https://image.ibb.co/nvtOvU/Logo_2.png" ALIGN="center">
                                                        </center>

                                                        <h4 ALIGN="center">
                                                            <FONT COLOR="red">¡Atención!</FONT>

                                                        </h4>
                                                        <p ALIGN="center">A continuación se presentan las posibles opciones de cambio. Recuerde que las acciones realizadas no podran ser deshechas. Elija correctamente. De clic fuera de la ventana para omitir.
                                                        </p>


                                                        <ul ALIGN="center">

                                                            <li>
                                                                <a href="<?php echo base_url()?>PanelController/completarCitaUserConAdoptar/<?php echo $fila['Id_Cita']?>">




                                                                    <FONT COLOR="#43a047"><i class="tiny material-icons">arrow_forward</i>Completar cita CON adopción </FONT>

                                                                </a>
                                                            </li>
                                                            <br>
                                                            <li>
                                                                <a href="<?php echo base_url()?>PanelController/completarCitaUserSinAdoptar/<?php echo $fila['Id_Cita']?>">



                                                                    <FONT COLOR="#fdd835"><i class="tiny material-icons">arrow_forward</i>Completar cita SIN adopción</FONT>



                                                                </a>
                                                            </li>
                                                            <br>
                                                            <li>
                                                                <a href="<?php echo base_url()?>PanelController/cancelarCitaUser/<?php echo $fila['Id_Cita']?>">


                                                                    <FONT COLOR="#f4511e"><i class="tiny material-icons">arrow_forward</i>Cancelar Cita del Usuario </FONT>



                                                                </a>
                                                            </li>
                                                        </ul>


                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <?php
                                    $contModel++;
                                    }
                                    else //echo "<FONT SIZE=4 COLOR='#616A6B'>---</FONT>";
                                    ?>

                                    </td>
                                </tr>
                                <?php
                                    }
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>

                </li>

                <li <?php echo ($this->input->post('Activa')==3 || $this->input->post('Activa')==4)?"class='active'":"" ?> >
                    <div class="collapsible-header">
                        <h5><i class="material-icons">assignment_ind</i>Información del titular y Beneficiencia </h5>
                    </div>
                    <div class="collapsible-body">
                        <p ALIGN="center">Consulta tu informción personal y modificala si te equivocaste durante el proceso de registro.<br></p>
                        <p ALIGN="center">
                            <FONT COLOR="e53935" ALIGN="center">¡NOTA! No podras modificar toda tu información</FONT>
                        </p>

                        <br><br>

                        <ul class="collapsible">
                            <li <?php echo ($this->input->post('Activa')==3)?"class='active'":"" ?> onClick="vistActiva('3')">
                                <div class="collapsible-header">
                                    Información del titular <i class="material-icons"> expand_more</i>
                                    <FONT SIZE=3 COLOR="#5AE80E">
                                        <?php echo (isset($actDatosCorrectU))?"$actDatosCorrectU":""; ?>
                                    </FONT>
                                    <FONT SIZE=3 COLOR="#D55F02">
                                        <?php echo (isset($actDatosIncorrectU))?"$actDatosIncorrectU":""; ?>
                                    </FONT>
                                </div>

                                <div class="collapsible-body">

                                    <h5 ALIGN="center">Información personal del titular</h5>
                                    <br>
                                    <div class="row">
                                        <?php
                                            $form_U=array('class' => "col s12 form-group");
                                            echo form_open(base_url().'PanelController', $form_U);
                                        ?>
                                        <div class="row">
                                            <!-- Campo invisible para la pestaña activa-->
                                            <?php
                                                $vistaActiva=array(
                                                    'name'      =>  'Activa',
                                                    'id'        =>  'Activa_Id',
                                                    'value'     =>  3,
                                                    'required'  => 'required',
                                                    'class'     =>  'validate' ,
                                                    'style'     => 'display:none'
                                                    );
                                                echo form_input($vistaActiva);
                                            ?>
                                            <!--Campo apellido paterno-->
                                            <div class="input-field col m4 s12">
                                                <?php
                                                    $pat_user=array(
                                                        'name'      =>  'Ap_Paterno',
                                                        'id'        =>  'id_pat_U',
                                                        'type'      =>  'text',
                                                        'required'  =>  'required',
                                                        'class'     =>  'validate' ,
                                                        'title'     =>  'Apellido Paterno',
                                                        'oninvalid' =>  "setCustomValidity('Deberas ingresar tu Apellido Paterno')",
                                                        'oninput'   =>  "setCustomValidity('')");
                                                    $function_pmn  = array('onkeypress'=>"return checar(event)");

                                                    extract($this->session->userdata('user'));
                                                    echo form_input($pat_user,$Ap_Paterno,$function_pmn);
                                                    echo form_label('Apellido Paterno', 'id_pat_U');
                                                    echo form_error('Ap_Paterno', '<span class="helper-text"style="color:red;">', '</span>');
                                                ?>
                                            </div>
                                            <!--Campo apellido materno-->
                                            <div class="input-field col m4 s12">
                                                <?php
                                                    $mat_user=array(
                                                        'name'      =>  'Ap_Materno',
                                                        'id'        =>  'id_mat_U',
                                                        'type'      =>  'text',
                                                        'required'  =>  'required',
                                                        'class'     =>  'validate' ,
                                                        'title'     =>  'Apellido Materno',
                                                        'oninvalid' =>  "setCustomValidity('Deberas ingresar tu Apellido Materno')",
                                                        'oninput'   =>  "setCustomValidity('')");

                                                    extract($this->session->userdata('user'));
                                                    echo form_input($mat_user,$Ap_Materno,$function_pmn);
                                                    echo form_label('Apellido Materno','materno');
                                                    echo form_error('Ap_Materno', '<span class="helper-text"style="color:red;">', '</span>');
                                                ?>
                                            </div>

                                            <div class="input-field col m4 s12">
                                                <?php
                                                    $name_user=array(
                                                        'name'      =>  'Nombre',
                                                        'id'        =>  'id_nom_U',
                                                        'type'      =>  'text',
                                                        'required'  =>  'required',
                                                        'class'     =>  'validate' ,
                                                        'title'     =>  'Nombre(s)',
                                                        'oninvalid' =>  "setCustomValidity('Deberas ingresar tu Nombre')",
                                                        'oninput'   =>  "setCustomValidity('')");

                                                    extract($this->session->userdata('user'));
                                                    echo form_input($name_user, $Nombre, $function_pmn);
                                                    echo form_label('Nombre(s)','id_nom_U');
                                                    echo form_error('Nombre', '<span class="helper-text"style="color:red;">', '</span>');
                                                ?>
                                            </div>
                                        </div>
                                        <!--Script para abrir el calendario-->
                                        <script>
                                            document.addEventListener('DOMContentLoaded', function() {
                                                var elems = document.querySelectorAll('.datepicker');
                                                var instances = M.Datepicker.init(elems, {

                                                    showMonthAfterYear: true,
                                                    //defaultDate: new Date('1997-06-10'),
                                                    //setDefaultDate: true,
                                                    autoClose: true,
                                                    format: 'yyyy-mm-dd',
                                                    showClearBtn: false,
                                                    yearRange: 100,
                                                    i18n: {
                                                        cancel: 'cancelar',
                                                        clear: 'limpiar',
                                                        done: 'listo',
                                                        months: [
                                                            'Enero',
                                                            'Febrero',
                                                            'Marzo',
                                                            'Abril',
                                                            'Mayo',
                                                            'Junio',
                                                            'Julio',
                                                            'Agosto',
                                                            'Septiembre',
                                                            'Octubre',
                                                            'Noviembre',
                                                            'Diciembre'
                                                        ],
                                                        monthsShort: [
                                                            '01',
                                                            '02',
                                                            '03',
                                                            '04',
                                                            '05',
                                                            '06',
                                                            '07',
                                                            '08',
                                                            '09',
                                                            '10',
                                                            '11',
                                                            '12'
                                                        ],
                                                        weekdays: [
                                                            'Domingo',
                                                            'Lunes',
                                                            'Martes',
                                                            'Miercoles',
                                                            'Jueves',
                                                            'Viernes',
                                                            'Sabado'
                                                        ],
                                                        weekdaysShort: [
                                                            'Dom',
                                                            'Lun',
                                                            'Mar',
                                                            'Mier',
                                                            'Jue',
                                                            'Vie',
                                                            'Sab'
                                                        ],
                                                        weekdaysAbbrev: ['D', 'L', 'M', 'Mi', 'J', 'V', 'S']
                                                    }
                                                });
                                            });

                                        </script>
                                        <div class="row">
                                            <div class="input-field col m6 s12">
                                                <?php
                                                    $dateN_user=array(
                                                        'name'      =>  'Fecha_Nacimiento',
                                                        'id'        =>  'id_fechaN_U',
                                                        'type'      =>  'text',
                                                        'required'  =>  'required',
                                                        'class'     =>  'validate datepicker',
                                                        'title'     =>  'Fecha de nacimiento',
                                                        'oninvalid' =>  "setCustomValidity('¡Nos gustaria saber cuando cumples años!, clickea para abrir el calendario ')",
                                                        'oninput'   =>  "setCustomValidity('')");
                                                        /*$js = 'onClick="some_function()"';*/
                                                    $funtion_birth = 'onkeypress="return checar_1(event)"';

                                                    extract($this->session->userdata('user'));
                                                    echo form_input($dateN_user, $Fecha_Nacimiento,$funtion_birth);
                                                    echo form_label('Fecha de nacimiento(Presioname)','id_fechaN_U');
                                                    echo form_error('Fecha_Nacimiento', '<span class="helper-text"style="color:red;">', '</span>');
                                                ?>

                                            </div>

                                            <div class="input-field col m6 s12">

                                                <?php
                                                    $phone_user=array(
                                                        'name'      =>  'Telefono',
                                                        'id'        =>  'id_tel_U',
                                                        'type'      =>  'text',
                                                        'required'  =>  'required',
                                                        'class'     =>  'validate',
                                                        'pattern'   =>  '[0-9]{10}',
                                                        'title'     =>  'Telefono',
                                                        'oninvalid' =>  "setCustomValidity('Es solo un medio de comunicación')",
                                                        'oninput'   =>  "setCustomValidity('')");
                                                    $funtion_tel = 'onkeypress="return checar_2(event)"';

                                                    extract($this->session->userdata('user'));
                                                    echo form_input($phone_user, $Telefono, $funtion_tel);
                                                    echo form_label('Telefono (LADA)1 234 567','id_tel_U');
                                                    echo form_error('Telefono', '<span class="helper-text"style="color:red;">', '</span>');
                                                ?>
                                            </div>

                                        </div>

                                        <center>
                                            <div class="preloader-wrapper big active" id="loading">
                                                <div class="spinner-layer spinner-blue">
                                                    <div class="circle-clipper left">
                                                        <div class="circle"></div>
                                                    </div>
                                                    <div class="gap-patch">
                                                        <div class="circle"></div>
                                                    </div>
                                                    <div class="circle-clipper right">
                                                        <div class="circle"></div>
                                                    </div>
                                                </div>

                                                <div class="spinner-layer spinner-red">
                                                    <div class="circle-clipper left">
                                                        <div class="circle"></div>
                                                    </div>
                                                    <div class="gap-patch">
                                                        <div class="circle"></div>
                                                    </div>
                                                    <div class="circle-clipper right">
                                                        <div class="circle"></div>
                                                    </div>
                                                </div>

                                                <div class="spinner-layer spinner-yellow">
                                                    <div class="circle-clipper left">
                                                        <div class="circle"></div>
                                                    </div>
                                                    <div class="gap-patch">
                                                        <div class="circle"></div>
                                                    </div>
                                                    <div class="circle-clipper right">
                                                        <div class="circle"></div>
                                                    </div>
                                                </div>

                                                <div class="spinner-layer spinner-green">
                                                    <div class="circle-clipper left">
                                                        <div class="circle"></div>
                                                    </div>
                                                    <div class="gap-patch">
                                                        <div class="circle"></div>
                                                    </div>
                                                    <div class="circle-clipper right">
                                                        <div class="circle"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </center>



                                        <br><br>
                                        <div class="row">

                                            <div class="col s12 m12" ALIGN="center">

                                                <?php
                                                    $option_button = array (
                                                        'class'     => 'btn waves-effect waves-light grey darken-4',
                                                        'type'      => 'submit',
                                                        'name'      => 'action',
                                                        'content'   =>  'GUARDAR CAMBIOS');
                                                    echo form_button($option_button)
                                                ?>
                                            </div>


                                        </div>
                                        <?= form_close() ?>
                                    </div>

                                </div>
                            </li>
                            <li <?php echo ($this->input->post('Activa')==4)?"class='active'":"" ?> onClick="vistActiva('4')">
                                <div class="collapsible-header">
                                    Información de la Beneficienica
                                    <i class="material-icons"> expand_more</i>
                                    <FONT SIZE=3 COLOR="#5AE80E">
                                        <?php echo (isset($actDatosCorrectB))?"$actDatosCorrectB":""; ?>
                                    </FONT>
                                    <FONT SIZE=3 COLOR="#D55F02">
                                        <?php echo (isset($actDatosIncorrectB))?"$actDatosIncorrectB":""; ?>
                                    </FONT>

                                </div>
                                <div class="collapsible-body">
                                    <div class="row">

                                        <h5 ALIGN="center">Información de la Beneficiencia</h5>
                                        <br>
                                        <?php
                                        $form_U=array('class' => "col s12 form-group");
                                        echo form_open(base_url().'PanelController', $form_U);
                                    ?>
                                        <!-- Campo invisible para la pestaña activa-->
                                        <?php
                                                $vistaActiva=array(
                                                    'name'      =>  'Activa',
                                                    'id'        =>  'Activa_Id',
                                                    'value'     =>  4,
                                                    'required'  => 'required',
                                                    'class'     =>  'validate' ,
                                                    'style'     => 'display:none'
                                                    );
                                                echo form_input($vistaActiva);
                                            ?>
                                        <div class="input-field col m12 s12">
                                            <?php
                                                $phone_B1=array(
                                                    'name'      =>  "TelefonoB",
                                                    'id'        =>  "id_tel_B1",
                                                    'type'      =>  "text",
                                                    'required'  =>  true,
                                                    'class'     =>  "validate",
                                                    'title'     =>  "Telefono",
                                                    'oninvalid' =>  "setCustomValidity('¿Nos darias tu numero?')",
                                                    'oninput'   =>  "setCustomValidity('')");

                                                extract($this->session->userdata('benef'));
                                                echo form_input($phone_B1, $TelefonoB, $funtion_tel);
                                                echo form_label('Telefono','tel_B1');
                                                echo form_error('TelefonoB', '<span class="helper-text"style="color:red;">', '</span>');
                                            ?>
                                        </div>

                                        <div class="input-field col m12 s12">
                                            <?php
                                                $dir_B=array(
                                                    'name'  =>  "DireccionB",
                                                    'id'    =>  "id_dir_B",
                                                    'type'  =>  "text",
                                                    'required'=>true,
                                                    'class' =>  "validate" ,
                                                    'title' =>  "Dirección: Calle/ #/ Col/ CP/Ciudad",
                                                    'oninvalid' =>  "setCustomValidity('Posiblemente la gente necesite saberlo')",
                                                    'oninput'   =>  "setCustomValidity('')");
                                                    $funtion_addr = 'onkeypress="return checar_3(event)"';

                                                extract($this->session->userdata('benef'));
                                                echo form_input($dir_B, $DireccionB, $funtion_addr);
                                                echo form_label('Dirección: Calle/ #/ Col/ CP/Ciudad', 'dir_B');
                                                echo form_error('DireccionB', '<span class="helper-text"style="color:red;">', '</span>');
                                            ?>
                                        </div>

                                        <br><br>
                                        <div class="row">

                                            <div class="col s12 m12" ALIGN="center">
                                                <?php
                                                    $option_button = array (
                                                        'class'     => 'btn waves-effect waves-light grey darken-4',
                                                        'type'      => 'submit',
                                                        'name'      => 'action',
                                                        'content'   =>  'GUARDAR CAMBIOS');
                                                    echo form_button($option_button)
                                                ?>
                                            </div>
                                        </div>
                                        <?= form_close() ?>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </li>
                <li <?php echo ($this->input->post('Activa')==5)?"class='active'":"" ?> onClick="vistActiva('5')">
                    <div class="collapsible-header">
                        <h5><i class="material-icons">security</i>
                            Seguridad e inicio de Sesión
                            <FONT SIZE=3 COLOR="#5AE80E">
                                <?php echo (isset($actPasswdCorrect))?"$actPasswdCorrect":""; ?>
                            </FONT>
                            <FONT SIZE=3 COLOR="#D55F02">
                                <?php echo (isset($actPasswdIncorrect))?"$actPasswdIncorrect":""; ?>
                            </FONT>
                        </h5>
                    </div>
                    <div class="collapsible-body">

                        <p ALIGN="center">En esta sección podras actualizar tu contraseña, solo necesitas a la vieja y a la nueva.</p>
                        <div class="row">
                            <?php
                                $form_U=array('class' => "col s12 form-group");
                                echo form_open(base_url().'PanelController', $form_U);
                            ?>

                            <div class="row">
                                <!-- Campo invisible para la pestaña activa-->
                                <?php
                                    $vistaActiva=array(
                                        'name'      =>  'Activa',
                                        'id'        =>  'Activa_Id',
                                        'value'     =>  5,
                                        'required'  => 'required',
                                        'class'     =>  'validate' ,
                                        'style'     => 'display:none'
                                        );
                                    echo form_input($vistaActiva);
                                ?>

                                <div class="col m4 s0"></div>
                                <div class="input-field col m4 s12" style="text-align: right;height:10px">
                                    <!-- Campo para la contraseña-->
                                    <?php
                                        $pass_1 = array (
                                            'name'      => 'PasswdActual',
                                            'id'        => 'pass_id_U0',
                                            'class'     => 'validate form-control',
                                            'required'  => 'required',
                                            'oninvalid' =>  "setCustomValidity('Es para estar seguros')",
                                            'oninput'   =>  "setCustomValidity('')");
                                        echo form_password($pass_1);
                                        echo form_label('Contraseña Actual','pass_id_U0');
                                        echo form_error('PasswdActual', '<span class="helper-text"style="color:red;">', '</span>');
                                    ?>

                                </div>
                                <div class="col m4 s0"></div>
                            </div>

                            <?php
                                if($this->session->flashdata('pass')){
                            ?>

                            <div>
                                <p ALIGN="center">
                                    <FONT SIZE=1 COLOR="#e53935">
                                        <?php echo $this->session->flashdata('pass');
                                            $this->session->set_flashdata('pass','');?>
                                    </FONT>
                                </p>
                            </div>
                            <?php  } ?>

                            <div class="row">
                                <div class="col m4 s0"></div>
                                <div class="input-field col m4 s12" style="text-align: right;height:20px">
                                    <?php
                                        $pass_1 = array (
                                            'name'      => 'Passwd',
                                            'id'        => 'pass_id_U1',
                                            'class'     => 'validate form-control',
                                            'required'  => 'required',
                                            'oninvalid' =>  "setCustomValidity('Es para estar seguros')",
                                            'oninput'   =>  "setCustomValidity('')");
                                        echo form_password($pass_1);
                                        echo form_label('Contraseña Nueva','pass_id_U1');
                                        echo form_error('Passwd', '<span class="helper-text"style="color:red;">', '</span>');
                                    ?>

                                </div>
                                <div class="col m4 s0"></div>
                            </div>

                            <div class="row">
                                <div class="col m4 s0"></div>
                                <div class="input-field col m4 s12" style="text-align: right;height:30px">
                                    <?php
                                    $pass_2 = array (
                                        'name'      => 'Passwd2',
                                        'id'        => 'pass_id_U2',
                                        'class'     => 'validate form-control',
                                        'required'  => true,
                                        'oninvalid' =>  "setCustomValidity('Solo escribela otra vez')",
                                        'oninput'   =>  "setCustomValidity('')");
                                    echo form_password($pass_2);
                                    echo form_label('Confirma tu contraseña','pass_id_U2');
                                    echo form_error('Passwd2', '<span class="helper-text"style="color:red;">', '</span>');
                                ?>
                                </div>
                                <div class="col m4 s0"></div>
                            </div>

                            <!--Script's contraseñas-->
                            <script>
                                var password_0 = document.getElementById("pass_id_U1"),
                                    confirm_password_0 = document.getElementById("pass_id_U2");

                                function validatePassword_0() {

                                    if (password_0.value != confirm_password_0.value) {
                                        confirm_password_0.setCustomValidity("Las contraseñas deben coincidir");
                                    } else {
                                        confirm_password_0.setCustomValidity('');
                                    }
                                }
                                password_0.onchange = validatePassword_0;
                                confirm_password_0.onkeyup = validatePassword_0;

                            </script>
                            <script>
                                var password_1 = document.getElementById("pass_id_U1"),
                                    confirm_password_1 = document.getElementById("pass_id_U2");

                                function validatePassword_1() {

                                    if (password_1.value.length >= 8) {
                                        password_1.setCustomValidity('');
                                    } else if (password_1.value.length < 8) {
                                        password_1.setCustomValidity("Las contraseña debe ser mayor a 8 caracteres");
                                    }
                                }
                                password_1.onchange = validatePassword_1;
                                confirm_password_1.onchange = validatePassword_1;

                            </script>
                            <br>
                            <br>

                            <center>
                                <div class="preloader-wrapper big active" id="loading_1">
                                    <div class="spinner-layer spinner-blue">
                                        <div class="circle-clipper left">
                                            <div class="circle"></div>
                                        </div>
                                        <div class="gap-patch">
                                            <div class="circle"></div>
                                        </div>
                                        <div class="circle-clipper right">
                                            <div class="circle"></div>
                                        </div>
                                    </div>

                                    <div class="spinner-layer spinner-red">
                                        <div class="circle-clipper left">
                                            <div class="circle"></div>
                                        </div>
                                        <div class="gap-patch">
                                            <div class="circle"></div>
                                        </div>
                                        <div class="circle-clipper right">
                                            <div class="circle"></div>
                                        </div>
                                    </div>

                                    <div class="spinner-layer spinner-yellow">
                                        <div class="circle-clipper left">
                                            <div class="circle"></div>
                                        </div>
                                        <div class="gap-patch">
                                            <div class="circle"></div>
                                        </div>
                                        <div class="circle-clipper right">
                                            <div class="circle"></div>
                                        </div>
                                    </div>

                                    <div class="spinner-layer spinner-green">
                                        <div class="circle-clipper left">
                                            <div class="circle"></div>
                                        </div>
                                        <div class="gap-patch">
                                            <div class="circle"></div>
                                        </div>
                                        <div class="circle-clipper right">
                                            <div class="circle"></div>
                                        </div>
                                    </div>
                                </div>
                            </center>

                            <div class="row">



                                <div class="col s12 m12" ALIGN="center">

                                    <?php
                                        $option_button = array (
                                                'class'     => 'btn waves-effect waves-light grey darken-4',
                                                'type'      => 'submit',
                                                'name'      => 'action',
                                                'content'   =>  'GUARDAR CAMBIOS');
                                        echo form_button($option_button)
                                    ?>
                                </div>

                            </div>
                            <?= form_close() ?>
                        </div>
                    </div>
                </li>
            </ul>


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


</div>

<script>
    $(document).ready(function() {
        $('#loading').hide();
        $('form').submit(function() {
            $('#loading').show();
        });
    });

</script>

<script>
    $(document).ready(function() {
        $('#loading_1').hide();
        $('form').submit(function() {
            $('#loading_1').show();
        });
    });

</script>
