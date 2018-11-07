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
                                    

                                    <div class="input-field col m6 s12">
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


                                    <div class="input-field col m6 s12">
                                        <?php
                                            $Raza_p = array(
                                                'name'      => 'Raza',
                                                'id'        => 'Raza_id',
                                                'required'  => 'required',
                                                'type'      => 'text',
                                                'title'     => 'Raza');
                                            echo form_input($Raza_p, (isset($actDatosCorrect))? "":($this->input->post('Raza')),'');
                                            echo form_label('Raza','Raza_id');
                                            echo form_error('Raza', '<span class="helper-text"style="color:red;">', '</span>');
                                        ?>

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
                                                <input type="file" name="userfile" value="fichero"/>
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
                                ?>
                                <tr>
                                <th> <FONT SIZE=2 COLOR='#616A6B'><?php echo $fila['Id_Cita']?></FONT></th>
                                <th> <FONT SIZE=2 COLOR='#616A6B'><?php echo $fila['Id_User']?></FONT></th>
                                <th> <FONT SIZE=2 COLOR='#616A6B'><?php echo $fila['Nombre']?></FONT></th>
                                <th> <FONT SIZE=2 COLOR='#616A6B'><?php echo $fila['Id_Perro']?></FONT></th>
                                <th> <FONT SIZE=2 COLOR='#616A6B'><?php echo $fila['Nombre_Perro']?></FONT></th>
                                <th> <FONT SIZE=2 COLOR='#616A6B'><?php echo $fila['Fecha']?></FONT></th>
                                <th> <FONT SIZE=2 COLOR='#616A6B'><?php echo $fila['Hora']?></FONT></th>
                                <th> 
                                     <?php
                                     if($fila['Status']==2) 
                                        echo "<FONT SIZE=2 COLOR='#2ECC71'>COMPLETADA</FONT>";
                                     else if($fila['Status']==1) 
                                        echo "<FONT SIZE=2 COLOR='#F4D03F'>EN PROCESO</FONT>";  
                                     else 
                                        echo "<FONT SIZE=2 COLOR='#C0392B'>CANCELADA</FONT>";
                                     ?>
                                </th>
                                <th>
                                    <?php 
                                    if($fila['Status']==1) {
                                    ?>
                                    <button data-target="modal<?php echo $contModel?>" class="btn modal-trigger blue darken-4">Cambiar Estado</button>

                                    <div id="modal<?php echo $contModel?>" class="modal modal-fixed-footer">
                                        <div class="modal-content">
                                            <div class="row">
                                                <div class="col s12 m12">

                                                    <center>
                                                        <img width="150" height="150" class="responsive-img" src="https://image.ibb.co/nvtOvU/Logo_2.png" ALIGN="center">
                                                    </center>

                                                    <h4 ALIGN="center">
                                                        <FONT COLOR="red">¡Atención!</FONT>
                                                    </h4>
                                                    <p ALIGN="justify">A continuación se presentan las posibles opciones de cambio. Recuerde que las acciones realizadas no podran ser deshechas. Elija correctamente. De clic fuera de la ventana para omitir.</p>

                                                    <ul>
                                                        <br>
                                                        <li>
                                                            <a href="<?php echo base_url()?>PanelController/completarCitaUserConAdoptar/<?php echo $fila['Id_Cita']?>">
                                                                <FONT SIZE=4 COLOR='#616A6B'>
                                                                <i class="material-icons">chevron_right</i>
                                                                </FONT>
                                                                <FONT SIZE=4 COLOR='#575858'>
                                                                    Completar cita CON adopción <i class="material-icons">check_circle</i>
                                                                </FONT>
                                                            </a>
                                                        </li>
                                                        <br>
                                                        <li>
                                                            <a href="<?php echo base_url()?>PanelController/completarCitaUserSinAdoptar/<?php echo $fila['Id_Cita']?>">
                                                                <FONT SIZE=4 COLOR='#616A6B'>
                                                                <i class="material-icons">chevron_right</i>
                                                                </FONT>
                                                                <FONT SIZE=4 COLOR='#575858'>
                                                                    Completar cita SIN adopción <i class="material-icons">keyboard_return</i>
                                                                </FONT>

                                                            </a>
                                                        </li>
                                                        <br>
                                                        <li>
                                                            <a href="<?php echo base_url()?>PanelController/cancelarCitaUser/<?php echo $fila['Id_Cita']?>">
                                                                <FONT SIZE=4 COLOR='#616A6B'>
                                                                <i class="material-icons">chevron_right</i>
                                                                </FONT>
                                                                <FONT SIZE=4 COLOR='#575858'>
                                                                Cancelar Cita del Usuario <i class="material-icons">cancel</i>
                                                            </FONT>
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
                                    else echo "<FONT SIZE=4 COLOR='#616A6B'>---</FONT>";
                                    ?>

                                </th>
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
