<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/js/materialize.min.js"></script>

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
        patron = /[0-9]/;
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

<p ALIGN="center">Controla tus citas, modifica tu informacion personal y de inicio de sesión.</p>
<br>

<script>
    function vistActiva(tipo) {
        $('#Activa_Id').val(tipo);
    }

</script>


<div class="container">

    <div class="row">

        <div class="col s12">

            <ul class="collapsible popout">
                <li <?php echo ($this->input->post('Activa')==1)?"class='active'":"" ?> onClick="vistActiva('1')">
                    <div class="collapsible-header">
                        <h5> <i class="material-icons">assignment</i>Visualizar Citas</h5>
                    </div>
                    <div class="collapsible-body">
                        <p ALIGN="center">Aqui podras ver todas las citas que puedas tener.</p>
                        <br>
                        <table class="responsive-table">
                            <thead>
                                <tr>
                                    <th>Cita</th>
                                    <th>Número perro</th>
                                    <th>Perro</th>
                                    <th>Centro de Adopción</th>
                                    <th>Fecha</th>
                                    <th>Hora</th>
                                    <th>Estado</th>
                                    <th>Acción</th>

                                </tr>
                            </thead>

                            <tbody>
                                <?php
                                if($Citas_User){
                                    $contModel=1; //variable para crear multiples modelos sin fallos
                                    foreach ($Citas_User as $fila) {
                                ?>
                                <tr>
                                    <td>
                                        <?php echo $fila['Id_Cita']?>
                                    </td>
                                    <td>
                                        <?php echo $fila['Id_Perro']?>
                                    </td>
                                    <td>
                                        <?php echo $fila['Nombre_Perro']?>
                                    </td>
                                    <td>
                                        <?php echo $fila['NombreB']?>
                                    </td>
                                    <td>
                                        <?php echo $fila['Fecha']?>
                                    </td>
                                    <td>
                                        <?php echo $fila['Hora']?>
                                    </td>
                                    <td>
                                        <?php
                                     if($fila['Status']==2)
                                        echo '<FONT COLOR="#43a047">Completada</FONT>';
                                     else if($fila['Status']==1)
                                        echo '<FONT COLOR="#c0ca33">En proceso</FONT>';
                                     else
                                        echo '<FONT COLOR="red">Cancelada</FONT>';
                                     ?>
                                    </td>
                                    <td>
                                        <?php
                                    if($fila['Status']==1) {
                                    ?>

                                        <a data-target="modal<?php echo $contModel?>" class="btn-flat modal-trigger waves-effect waves-red">
                                            <FONT COLOR="red">Cancelar cita</FONT>
                                        </a>


                                        <div id="modal<?php echo $contModel?>" class="modal">
                                            <div class="modal-content">
                                                <div class="row">
                                                    <div class="col s12 m12">

                                                        <center>
                                                            <img width="150" height="150" class="responsive-img" src="https://image.ibb.co/nvtOvU/Logo_2.png" ALIGN="center">
                                                        </center>

                                                        <h4 ALIGN="center">
                                                            <FONT COLOR="red">¡Atención!</FONT>
                                                        </h4>
                                                        <p ALIGN="justify">Esta a punto de cancelar una de sus citas. Al precionar CONTINUAR, no podrá restablecerla por lo que tendrá que volver a realizar el proceso de hacer cita si asi lo desea. De clic fuera de la ventana para omitir.</p>


                                                        <br>
                                                        <a data-target="modal<?php echo $contModel?>" class="btn-flat modal-trigger waves-effect waves-red"></a>


                                                            <center>
                                                                <a href="<?php echo base_url()?>PanelController/cancelarCitaUser/<?php echo $fila['Id_Cita']?>" class="btn-flat modal-trigger waves-effect waves-red">
                                                                <font COLOR="red" SIZE=4>
                                                                    Continuar
                                                                </font>
                                                            </a>
                                                            </center>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <?php
                                    $contModel++;
                                    }
                                    else echo "<FONT SIZE=4 COLOR='#616A6B'>---</FONT>";
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

                <li <?php echo ($this->input->post('Activa')==2)?"class='active'":"" ?> onClick="vistActiva('2')">
                    <div class="collapsible-header">
                        <h5>
                            <i class="material-icons">assignment_ind</i>
                            Información Personal
                            <FONT SIZE=3 COLOR="#5AE80E">
                                <?php echo (isset($actDatosCorrect))?"$actDatosCorrect":""; ?>
                            </FONT>
                            <FONT SIZE=3 COLOR="#D55F02">
                                <?php echo (isset($actDatosIncorrect))?"$actDatosIncorrect":""; ?>
                            </FONT>

                        </h5>
                    </div>
                    <div class="collapsible-body">
                        <p ALIGN="center">Consulta tu informción personal y modificala si te equivocaste durante el proceso de registro.<br></p>
                        <p ALIGN="center">
                            <FONT COLOR="e53935" ALIGN="center">¡NOTA! No podras modificar toda tu información</FONT>
                        </p>

                        <br><br>

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
                                        'value'     =>  2,
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
                <li <?php echo ($this->input->post('Activa')==3)?"class='active'":"" ?> onClick="vistActiva('3')">
                    <div class="collapsible-header">
                        <h5>
                            <i class="material-icons">security</i>
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

                        <p ALIGN="center">En esta sección podras actualizar tu contraseña, solo necesitas tu vieja contraseña y una nueva.</p>
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
