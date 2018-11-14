<body>

    <link type="text/css" rel="stylesheet" href='Estilos/dist/css/jquery-entropizer.min.css' />

    <style type="text/css">
        #meter2 .entropizer-track {
            background-color: #e8e8e8;
            border-radius: 2px;
            height: 4px;
        }

        #meter2 .entropizer-bar {
            height: 4px;
        }

        .affix {
            top: 20px;
            width: 255px;
        }

    </style>

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/js/materialize.min.js"></script>



    <!--Script efecto parallax -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
        var elems = document.querySelectorAll('.parallax');
        var instances = M.Parallax.init(elems);
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
        function checar_4(e_4) {
        tecla = (document.all) ? e_4.keyCode : e_4.which;

        //Tecla de retroceso para borrar, siempre la permite
        if (tecla == 8) {
            return true;
        }

        // Patron de entrada, en este caso solo acepta numeros y letras
        patron = /[0-9A-Za-z,. ]/;
        tecla_final = String.fromCharCode(tecla);
        return patron.test(tecla_final);
    }

</script>



    <div class="parallax-container">
        <div class="parallax slider">
            <img src="https://image.ibb.co/keX0up/Reg_1.jpg">
            <ul class="slides">
        </div>
    </div><br><br>


    <div class="container">

        <style>
            .tabs-content.carousel {
                height: 1800px;
                overflow-y: visible;
            }

        </style>

        <style type="text/css">
            .dogs {
                display: inline;
            }

        </style>

        <style type="text/css">
            .dogs_1 {
                display: inline;
            }

        </style>

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


        <ul id="tabs-swipe-demo" class="tabs">
            <li class="tab col s12 m4 "><a class="grey-text text-grey darken-4 waves-effect waves-light <?php echo ($this->input->post('Tipo_User')==1)? "active":""?>"  onClick="tipUser('1')" href="#test-swipe-1">Registro
                    para Usuarios</a></li>
            <li class="tab col s12 m4"><a class="grey-text text-grey darken-4 waves-effect waves-light <?php echo ($this->input->post('Tipo_User')==2)? "active":""?>"  onClick="tipUser('2')" href="#test-swipe-2">Registro
                    para Centros de Adopción</a></li>
        </ul>

        <script>
            function tipUser(tipo){
                $('#Tipo_User').val(tipo);
            }
        </script>


        <?php /*
            var_dump($this->input->post());
            if(validation_errors()!=null): ?>
            &#160;
            <div class="alert alert-danger">
              <?php echo validation_errors(); ?>
            </div>
        <?php endif; */?>


        <div id="test-swipe-1" class="col m12 s12">




            <br><br>
            <h1 ALIGN="center">Registro para Usuarios</h1>
            <br><br>

            <div class="container">
                <div class="row">
                    <div class="col s12">
                        <p ALIGN="center">Acontinuación, se muestra un pequeño formulario que debes completar, el cual te
                            dara acceso a este sitio. Es necesario que lo completes de la forma más sincera posible.
                            <br><br>
                        </p>

                    </div>
                    <br><br>
                    <h5 ALIGN="center">Información personal</h5>
                    <div class="col s12">
                        <br><br>

                        <div class="row">
                            <?php
                            $form_U=array('class' => "col s12 form-group");
                            echo form_open(base_url().'RegistroController', $form_U);
                        ?>
                            <div class="row">
                                <!-- Campo invisible para el tipo de usuario-->
                                <?php
                                    $tipo_usuario=array(
                                        'name'      =>  'Tipo_User',
                                        'id'        =>  'Tipo_User',
                                        'value'     =>  1,
                                        'required'  => 'required',
                                        'class'     =>  'validate' ,
                                        'style'     => 'display:none'
                                        );
                                    echo form_input($tipo_usuario);
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
                                        echo form_input($pat_user,($this->input->post('Tipo_User')==1)?$this->input->post('Ap_Paterno'):"",$function_pmn);
                                        echo form_label('Apellido Paterno', 'id_pat_U');
                                        echo ($this->input->post('Tipo_User')==1)?form_error('Ap_Paterno', '<span class="helper-text"style="color:red;">', '</span>'):"";
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
                                        echo form_input($mat_user,($this->input->post('Tipo_User')==1)?$this->input->post('Ap_Materno'):"",$function_pmn);
                                        echo form_label('Apellido Materno','materno');
                                        echo ($this->input->post('Tipo_User')==1)?form_error('Ap_Materno', '<span class="helper-text"style="color:red;">', '</span>'):"";
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
                                        echo form_input($name_user, ($this->input->post('Tipo_User')==1)?$this->input->post('Nombre'):"", $function_pmn);
                                        echo form_label('Nombre(s)','id_nom_U');
                                        echo ($this->input->post('Tipo_User')==1)?form_error('Nombre', '<span class="helper-text"style="color:red;">', '</span>'):"";
                                    ?>
                                </div>
                            </div>
                            <!--Script para abrir el calendario-->
                            <script>
                                document.addEventListener('DOMContentLoaded', function() {
                                    var elems = document.querySelectorAll('.datepicker');
                                    var instances = M.Datepicker.init(elems, {

                                        showMonthAfterYear: true,
                                        defaultDate: new Date('1997-06-10'),
                                        setDefaultDate: true,
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
                                        echo form_input($dateN_user, ($this->input->post('Tipo_User')==1)?$this->input->post('Fecha_Nacimiento'):"",$funtion_birth);
                                        echo form_label('Fecha de nacimiento(Presioname)','id_fechaN_U');
                                        echo ($this->input->post('Tipo_User')==1)?form_error('Fecha_Nacimiento', '<span class="helper-text"style="color:red;">', '</span>'):"";
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
                                        echo form_input($phone_user, ($this->input->post('Tipo_User')==1)?$this->input->post('Telefono'):"", $funtion_tel);
                                        echo form_label('Telefono (LADA)1 234 567','id_tel_U');
                                        echo ($this->input->post('Tipo_User')==1)?form_error('Telefono', '<span class="helper-text"style="color:red;">', '</span>'):"";
                                    ?>
                                </div>

                            </div>

                            <div class="row">
                                <div class="col m4 s12"></div>
                                <div class="input-field col m4 s12">

                                    <div name="dogs" ALIGN="center">
                                        <label for="sex_1_U">
                                            <?php echo form_radio('Sexo', 'M',($this->input->post('Sexo')=='M')?TRUE:FALSE, "id='sex_1_U' class ='with-gap' required"); ?>
                                            <span> Mujer</span>
                                        </label>

                                        <label for="sex_2_U">
                                            <?php echo form_radio('Sexo', 'H', ($this->input->post('Sexo')=='H')?TRUE:FALSE, "id='sex_2_U' class ='with-gap' required"); ?>
                                            <span>Hombre</span>
                                        </label>
                                    </div>


                                </div>
                                <div class="col m4 s12"></div>
                            </div>
                            <br>
                            <h5 ALIGN="center">Información de Inicio de Sesión</h5>
                            <br>

                            <div class="row">
                                <div class="input-field col m4 s12">
                                    <?php
                                        $correo_U=array(
                                            'name'      =>  "Correo",
                                            'id'        =>  "id_mail_U",
                                            'value'     =>  ($this->input->post('Tipo_User')==1)?$this->input->post('Correo'):"",
                                            'type'      =>  'email',
                                            'class'     =>  "validate",
                                            'title'     =>  "Correo electronico",
                                            'oninvalid' =>  "setCustomValidity('Tendremos que estar en contacto')",
                                            'oninput'   =>  "setCustomValidity('')");
                                        echo form_input($correo_U);
                                        echo form_label('E-mail','id_mail_U');
                                        echo ($this->input->post('Tipo_User')==1)?form_error('Correo', '<span class="helper-text"style="color:red;">', '</span>'):"";
                                    ?>
                                </div>

                                <div class="input-field col m4 s12">
                                    <?php
                                        $pass_1 = array (
                                            'name'      => 'Passwd',
                                            'id'        => 'pass_id_U1',
                                            'class'     => 'validate form-control',
                                            'required'  => 'required',
                                            'oninvalid' =>  "setCustomValidity('Es para estar seguros')",
                                            'oninput'   =>  "setCustomValidity('')");
                                        echo form_password($pass_1);
                                        echo form_label('Contraseña','pass_id_U1');
                                        echo ($this->input->post('Tipo_User')==1)?form_error('Passwd', '<span class="helper-text"style="color:red;">', '</span>'):"";
                                    ?>

                                </div>
                                <div class="input-field col m4 s12">
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
                                    echo ($this->input->post('Tipo_User')==1)?form_error('Passwd2', '<span class="helper-text"style="color:red;">', '</span>'):"";
                                ?>
                                </div>
                            </div>
                            <!--Script's cintraseñas-->
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

                            <!--Inicio plugin medir fuerza-->

                            <div class="row hide-on-med-and-down">
                                <div class="col m12 s12 grey-text text-grey darken-4" ALIGN="center"><br><br> Toma esto en cuenta, ¡es la fuerza de tu contraseña!</div>
                                <div id="meter1" class="col m12 s12 center" ALIGN="center"><br></div>
                            </div>

                            <br>
                            <center>
                                <div class="preloader-wrapper big active" id="loading" >
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

                                    <div class="spinner-layer spinner-red" >
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


                                <div class="col m12 s12" ALIGN="center">
                                    <label>

                                        <?php
                                            $check_U = array(
                                                'required'  => true,
                                                'oninvalid' =>  "setCustomValidity('Deberiamos estar de acuerdo')",
                                                'oninput'   =>  "setCustomValidity('')");
                                            echo form_checkbox ('check','','',$check_U);
                                        /*Nombre, valor*/
                                        ?>
                                        <span><a class="waves-effect waves-light modal-trigger" href="#modal1">He leído los terminos de uso y condiciones</a></span>
                                    </label>
                                </div>

                                <br><br><br><br><br>
                                <div class="col s12 m12" ALIGN="center">

                                    <?php
                                    $option_button = array (
                                            'class'     => 'btn waves-effect waves-light deep-orange darken-3',
                                            'type'      => 'submit',
                                            'name'      => 'action',
                                            'content'   =>  '¡Registrame! <i class="material-icons right">send</i>');
                                    echo form_button($option_button)
                                ?>
                                </div>


                            </div>
                            <?= form_close() ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div id="test-swipe-2" class="col m12 s12">
            <br><br>
            <h1 ALIGN="center">Registro para Centros de Adopción</h1>
            <br><br>

            <div class="container">
                <div class="row">
                    <div class="col s12">
                        <p ALIGN="center">Este tipo de registro lleva una posterior verificación del centro de Adopcion.
                            El fin de la misma es poder mantener un ambiente de confianza entre las personas que acceden
                            al sitio en busca de adoptar.
                            <br>
                        </p>

                        <h5 ALIGN="center">Informacion personal del titular</h5>
                        <br>
                    </div>

                    <div class="col s12">
                        <div class="row">
                            <?php
                            $form_B=array('class' => "col s12 form-group");
                            echo form_open(base_url().'RegistroController', $form_B);
                        ?>

                            <div class="row">
                                <!-- Campo invisible para el tipo de usuario-->
                                <?php
                                    $tipo_usuario=array(
                                        'name'      =>  'Tipo_User',
                                        'id'        =>  'Tipo_User_1',
                                        'value'     =>  2,
                                        'required'  => true,
                                        'class'     =>  'validate' ,
                                        'style'     => 'display:none');
                                    echo form_input($tipo_usuario);
                            ?>

                                <!--Campo apellido paterno-->
                                <div class="input-field col m4 s12">
                                    <?php
                                        $pat_user = array(
                                            'name'      =>  'Ap_Paterno',
                                            'id'        =>  'id_pat_B',
                                            'type'      =>  'text',
                                            'required'  =>  true,
                                            'class'     =>  'validate' ,
                                            'title'     =>  'Apellido Paterno',
                                            'oninvalid' =>  "setCustomValidity('Deberas ingresar tu apellido Paterno')",
                                            'oninput'   =>  "setCustomValidity('')");
                                        echo form_input($pat_user, ($this->input->post('Tipo_User')==2)?$this->input->post('Ap_Paterno'):"", $function_pmn);
                                        echo form_label('Apellido Paterno', 'id_pat_B');
                                        echo ($this->input->post('Tipo_User')==2)?form_error('Ap_Paterno', '<span class="helper-text"style="color:red;">', '</span>'):"";

                                    ?>
                                </div>

                                <!--Campo apellido materno-->
                                <div class="input-field col m4 s12">
                                    <?php
                                        $mat_user=array(
                                            'name'      =>  'Ap_Materno',
                                            'id'        =>  'id_mat_B',
                                            'type'      =>  'text',
                                            'required'  => true,
                                            'class'     =>  'validate' ,
                                            'title'     =>  'Apellido Materno',
                                            'oninvalid' =>  "setCustomValidity('Deberas ingresar tu apellido materno')",
                                            'oninput'   =>  "setCustomValidity('')");
                                        echo form_input($mat_user, ($this->input->post('Tipo_User')==2)?$this->input->post('Ap_Materno'):"", $function_pmn, $function_pmn);
                                        echo form_label('Apellido Materno','');
                                        echo ($this->input->post('Tipo_User')==2)?form_error('Ap_Materno', '<span class="helper-text"style="color:red;">', '</span>'):"";
                                    ?>
                                </div>

                                <div class="input-field col m4 s12">
                                    <?php
                                        $name_user=array(
                                            'name'  =>  'Nombre',
                                            'id'    =>  'id_nom_UB',
                                            'type'  =>  'text',
                                            'required' => true,
                                            'class' =>  'validate' ,
                                            'title' =>  'Nombre(s)',
                                            'oninvalid' =>  "setCustomValidity('Y...¿si nos dices tu nombre?')",
                                            'oninput'   =>  "setCustomValidity('')");
                                        echo form_input($name_user,($this->input->post('Tipo_User')==2)?$this->input->post('Nombre'):"",$function_pmn);
                                        echo form_label('Nombre(s)','id_nom_UB');
                                        echo ($this->input->post('Tipo_User')==2)?form_error('Nombre', '<span class="helper-text"style="color:red;">', '</span>'):"";
                                    ?>
                                </div>
                            </div>

                            <div class="row">
                                <div class="input-field col m6 s12">
                                    <?php
                                    $dateN_user=array(
                                        'name'  =>  'Fecha_Nacimiento',
                                        'id'    =>  'id_fechaN_B',
                                        'type'  =>  'text',
                                        'required' => true,
                                        'class' =>  'validate datepicker' ,
                                        'title' =>  'Fecha de Nacimiento',
                                        'oninvalid' =>  "setCustomValidity('¡Nos gustaria saber cuando cumples años!, clickea para abrir el calendario ')",
                                        'oninput'   =>  "setCustomValidity('')");
                                    echo form_input($dateN_user,($this->input->post('Tipo_User')==2)?$this->input->post('Fecha_Nacimiento'):"",$funtion_birth);
                                    echo form_label('Fecha de nacimiento (Presioname)','id_fechaN_B');
                                    echo ($this->input->post('Tipo_User')==2)?form_error('Fecha_Nacimiento', '<span class="helper-text"style="color:red;">', '</span>'):"";
                                ?>

                                </div>

                                <div class="input-field col m6 s12">
                                    <?php
                                    $phone_user=array(
                                        'name'  =>  'Telefono',
                                        'id'    =>  'id_tel_B',
                                        'type'  =>  'text',
                                        'required' => true,
                                        'class' =>  'validate',
                                        'pattern'   =>  '[0-9]{10}',
                                        'title'     =>  'Telefono',
                                        'oninvalid' =>  "setCustomValidity('Es solo un medio de comunicación')",
                                        'oninput'   =>  "setCustomValidity('')");
                                    echo form_input($phone_user,($this->input->post('Tipo_User')==2)?$this->input->post('Telefono'):"",$funtion_tel);
                                    echo form_label('Telefono','tel_1');
                                    echo ($this->input->post('Tipo_User')==2)?form_error('Telefono', '<span class="helper-text"style="color:red;">', '</span>'):"";
                                ?>
                                </div>

                            </div>

                            <div class="row">
                                <div class="col m4 s12"></div>
                                <div class="input-field col m4 s12">



                                    <div name="dogs_1" ALIGN="center">
                                        <label for="sex_1_B">
                                            <?php echo form_radio('Sexo', 'M',($this->input->post('Sexo')=='M')?TRUE:FALSE, "id='sex_1_B' class ='with-gap' required"); ?>
                                            <span> Mujer</span>
                                        </label>

                                        <label for="sex_2_B">
                                            <?php echo form_radio('Sexo', 'H', ($this->input->post('Sexo')=='H')?TRUE:FALSE, "id='sex_2_B' class ='with-gap' required"); ?>
                                            <span>Hombre</span>
                                        </label>

                                    </div>
                                </div>
                                <div class="col m4 s12"></div>
                            </div>

                            <h5 ALIGN="center">Información de Inicio de Sesión</h5>




                                    <div class="col s12">
                                        <p ALIGN="center">El correo que nos proporciones estará asociado a la beneficiencia que representas.
                                        </p>
                                    </div>



                            </div>

                            <div class="row">
                                <div class="input-field col m4 s12">
                                    <?php
                                    $correo_U=array(
                                        'name'  =>  "Correo",
                                        'id'    =>  "id_mail_B",
                                        'type'  =>  'email',
                                        'required' => true,
                                        'class' =>  "validate",
                                        'title' =>  "Correo electronico",
                                        'oninvalid' =>  "setCustomValidity('Creemos que mientras mas conectados mejor')",
                                        'oninput'   =>  "setCustomValidity('')");
                                    echo form_input($correo_U,($this->input->post('Tipo_User')==2)?$this->input->post('Correo'):"");
                                    echo form_label('E-mail','email');
                                    echo ($this->input->post('Tipo_User')==2)?form_error('Correo', '<span class="helper-text"style="color:red;">', '</span>'):"";
                                    ?>
                                </div>

                                <div class="input-field col m4 s12">

                                    <?php
                                        $pass_1 = array (
                                                'name' => 'Passwd',
                                                'id'   => 'pass_id_B1',
                                                'type'  =>  'password',
                                                'required' => true,
                                                'class' =>'validate',
                                                'oninvalid' =>  "setCustomValidity('Tal vez esto es importante')",
                                                'oninput'   =>  "setCustomValidity('')");
                                        echo form_input($pass_1);
                                        echo form_label('Contraseña','pass_1');
                                        echo ($this->input->post('Tipo_User')==2)?form_error('Passwd', '<span class="helper-text"style="color:red;">', '</span>'):"";
                                    ?>

                                </div>
                                <div class="input-field col m4 s12">
                                    <?php
                                    $pass_2 = array (
                                        'name' => 'Passwd2',
                                        'id'   => 'pass_id_B2',
                                        'type' => 'password',
                                        'required' => 'true',
                                        'class'=>'validate',
                                        'oninvalid' =>  "setCustomValidity('¡Vamos! solo repitela')",
                                        'oninput'   =>  "setCustomValidity('')");
                                    echo form_input($pass_2);
                                    echo form_label('Confirma tu contraseña','pass_B2');
                                    echo ($this->input->post('Tipo_User')==2)?form_error('Passwd2', '<span class="helper-text"style="color:red;">', '</span>'):"";
                                ?>
                                </div>
                            </div>
                            <!--Script's contraseña-->
                            <script>
                                var password_2 = document.getElementById("pass_id_B1"),
                                    confirm_password_2 = document.getElementById("pass_id_B2");

                                function validatePassword_2() {

                                    if (password_2.value != confirm_password_2.value) {
                                        confirm_password_2.setCustomValidity("Las contraseñas deben coincidir");
                                    } else {
                                        confirm_password_2.setCustomValidity('');
                                    }
                                }
                                password_2.onchange = validatePassword_2;
                                confirm_password_2.onkeyup = validatePassword_2;

                            </script>

                            <script>
                                var password_3 = document.getElementById("pass_id_B1"),
                                    confirm_password_3 = document.getElementById("pass_id_B2");

                                function validatePassword_3() {

                                    if (password_3.value.length >= 8) {
                                        password_3.setCustomValidity('');
                                    } else if (password_3.value.length < 8) {
                                        password_3.setCustomValidity("Las contraseña debe ser mayor a 8 caracteres");
                                    }
                                }
                                password_3.onchange = validatePassword_3;
                                confirm_password_3.onchange = validatePassword_3;

                            </script>

                            <!--Inicio plugin medir fuerza-->

                            <div class="row hide-on-med-and-down">
                                <div class="col m12 s12 grey-text text-grey darken-4" ALIGN="center"><br><br> Toma esto en cuenta, ¡es la fuerza de tu contraseña!</div>
                                <div id="meter4" class="col m12 s12 center" ALIGN="center"></div>
                            </div>



                        </div>


                        <div class="row">
                            <div class="col m12 s12">
                                <h5 ALIGN="center">Información del centro de Adopción</h5>
                            </div>
                        </div>

                        <div class="row">

                            <div class="input-field col m6 s12">
                                <?php
                                    $funtion_txtfil = 'onkeypress="return checar_3(event)"';
                                    $nom_B=array(
                                        'name'  =>  "NombreB",
                                        'id'    =>  "id_nom_B",
                                        'type'  =>  "text",
                                        'required'=>true,
                                        'class' =>  "validate" ,
                                        'title' =>  "Nombre del centro de Adopción",
                                        'oninvalid' =>  "setCustomValidity('Nosotros somos aRDog, ¿Ustedes?')",
                                        'oninput'   =>  "setCustomValidity('')");
                                    echo form_input($nom_B,$this->input->post('NombreB'),$funtion_txtfil);
                                    echo form_label('Nombre del centro de Adopción', 'id_nom_B');
                                    echo form_error('NombreB', '<span class="helper-text"style="color:red;">', '</span>');
                                ?>
                            </div>

                            <div class="input-field col m6 s12">
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
                                    echo form_input($phone_B1, $this->input->post('TelefonoB'), $funtion_tel);
                                    echo form_label('Telefono','tel_B1');
                                    echo form_error('TelefonoB', '<span class="helper-text"style="color:red;">', '</span>');
                                ?>
                            </div>
                        </div>

                        <div class="row">

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
                                    echo form_input($dir_B,$this->input->post('DireccionB'),$funtion_addr);
                                    echo form_label('Dirección: Calle/ #/ Col/ CP/Ciudad', 'dir_B');
                                    echo form_error('DireccionB', '<span class="helper-text"style="color:red;">', '</span>');
                                ?>
                            </div>
                        </div>


                        <div class="row">
                            <div class="input-field col m12 s12">
                                <?php
                                    $texta_B=array(
                                        'name'          =>  "DescripcionB",
                                        'id'            =>  "id_texta_B",
                                        'class'         =>  " materialize-textarea",
                                        'required'      =>  true,
                                        'title'         =>  "Cuentanos algo acerca del centro de adopcion",
                                        'data-length'   =>  "200",
                                        'oninvalid' =>  "setCustomValidity('Tendras que contarnos aún más')",
                                        'oninput'   =>  "setCustomValidity('')");
                                    echo form_textarea($texta_B, $this->input->post('DescripcionB'), $funtion_txtfil);
                                    echo form_label('Cuentanos algo acerca del centro de adopcion', 'texta_B');
                                    echo form_error('DescripcionB', '<span class="helper-text"style="color:red;">', '</span>');
                                ?>
                            </div>

                            <!--Scrip para el conteo de caracteres-->
                            <script>
                                $('textarea#id_texta_B').characterCounter();

                            </script>
                        </div>

                        <br>
                            <center>
                                <div class="preloader-wrapper big active" id="loading_1" >
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

                                    <div class="spinner-layer spinner-red" >
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
                            <div class="col m12 s12" ALIGN="center">
                                <label>


                                    <?=form_checkbox ( 'check','','',$check_U)?>
                                    <span><a class="waves-effect waves-light modal-trigger" href="#modal1">He leído los terminos de uso y condiciones</a></span>
                                </label>
                            </div>

                            <br><br><br><br><br>
                            <div class="col s12 m12" ALIGN="center">

                                <?php
                                    $option_button = array (
                                            'class'     => 'btn waves-effect waves-light deep-orange darken-3',
                                            'type'      => 'submit',
                                            'name'      => 'action',
                                            'content'   =>  '¡Registrame!<i class="material-icons right">send</i>');
                                    echo form_button($option_button)
                                ?>
                            </div>
                        </div>

                        <?=form_close() ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    <div id="modal1" class="modal">
      <div class="modal-content">
        <h4 ALIGN="center">Terminos y Condiciones</h4>
        <p ALIGN="justify"><b>La organización:</b> debe de comprometerse a ofrecer la adopción de perros sin ningún tipo de cobro, manteniendo actualizada
          la información de cada perro ofrecido y proporcionar información verídica de este mismo, además de respetar los derechos de cada perro. <br>
          <b>Los usuarios:</b> Brindar información verídica al sistema, tener seguimiento de la cita que ha programado y asistir a  ella, una vez hecha la adopción, se compromete al cuidado del perro, teniendo instalaciones adecuadas para él, brindarle amor y cuidado que merece.
        </p>
      </div>
      <div class="modal-footer">
        <p ALIGN="center">Para salir presiona fuera de este aviso</p>
      </div>
  </div>

    <!--Script para las tabs--->
    <script>
        $('ul.tabs').tabs({
            swipeable: true,
            responsiveThreshold: 1920
        });

    </script>

    <script>
      document.addEventListener('DOMContentLoaded', function() {
      var elems = document.querySelectorAll('.modal');
      var instances = M.Modal.init(elems);
      });
    </script>

    <!--Script's plugin contraseña-->
    <script type="text/javascript" src="<?php echo base_url("Estilos/lib/jquery.js"); ?>
        ">

    </script>
    <script type="text/javascript" src="<?php echo base_url("Estilos/lib/entropizer.js");?>"> </script> <script type="text/javascript" src="<?php echo base_url("Estilos/dist/js/jquery-entropizer.min.js"); ?>
        ">

    </script>

    <script type="text/javascript">
        (function($) {
            $('#meter4').entropizer({
                target: '#pass_id_B1',
                update: function(data, ui) {
                    ui.bar.css({
                        'background-color': data.color,
                        'width': data.percent + '%'
                    });
                }
            });
        })($);

    </script>

    <!--Plugin primer contraseña-->
    <script type="text/javascript">
        (function($) {

            $('#meter1').entropizer({
                target: '#pass_id_U1',
                update: function(data, ui) {
                    ui.bar.css({
                        'background-color': data.color,
                        'width': data.percent + '%'
                    });
                }
            });
        })($);

    </script>
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
