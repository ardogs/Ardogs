<body>
<div class="parallax-container">
    <div class="parallax slider">
        <img src="https://image.ibb.co/keX0up/Reg_1.jpg">
        <ul class="slides">
    </div>
</div>
<br><br>

<div class="container">

    <style>
        .tabs-content.carousel {
            height: 1680px;
            overflow-y: visible;
        }

    </style>


    <ul id="tabs-swipe-demo" class="tabs">
        <li class="tab col s12 m4 "><a class="grey-text text-grey darken-4 waves-effect waves-light  " onClick="tipUser('1')" href="#test-swipe-1">Registro
                para Usuarios</a></li>
        <li class="tab col s12 m4"><a class="grey-text text-grey darken-4 waves-effect waves-light " onClick="tipUser('2')" href="#test-swipe-2">Registro
                para Centros de Adopción</a></li>

    </ul>



    <div id="test-swipe-1" class="col m12 s12">




        <br><br><br><br>
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
                        $forma=array('class' => "col s12 form-group");
                        echo form_open(base_url().'RegistroController', $forma);
                        ?>
                        <div class="row">
                                <?php
                                    $tipo_usuario=array(
                                        'name'  =>  'Tipo_User',
                                        'id'    =>  'Tipo_User',
                                        'value' =>  1,
                                        'required' => true,
                                        'class' =>  'validate' ,
                                        'style' => 'display:none' 
                                        );                
                                    echo form_input($tipo_usuario);
                                ?>
                            
                           <!--Campo apellido paterno-->
                            <div class="input-field col m4 s12">
                                <?php
                                    $pat_user=array(
                                        'name'  =>  'Ap_Paterno',
                                        'id'    =>  'id_pat_U',
                                        'value' =>  $this->input->post('Ap_Paterno'),
                                        'type'  =>  'text',
                                        'required' => true,
                                        'class' =>  'validate' ,
                                        'title' =>  'Apellido Paterno');                
                                    echo form_input($pat_user);
                                    echo form_label('Apellido Paterno', 'paterno')
                                ?>
                            </div>
                            <!--Campo apellido materno-->
                            <div class="input-field col m4 s12">
                                <?php
                                    $mat_user=array(
                                        'name'  =>  'Ap_Materno',
                                        'id'    =>  'id_mat_U',
                                        'value' =>  $this->input->post('Ap_Materno'),
                                        'type'  =>  'text',
                                        'required' => true,
                                        'class' =>  'validate' ,
                                        'title' =>  'Apellido Materno');
                                    echo form_input($mat_user);
                                    echo form_label('Apellido Materno','materno');
                                ?>
                            </div>

                            <div class="input-field col m4 s12">
                                <?php 
                                    $name_user=array(
                                        'name'  =>  'Nombre',
                                        'id'    =>  'id_nom_U',
                                        'value' =>  $this->input->post('Nombre'),
                                        'type'  =>  'text',
                                        'required' => true,
                                        'class' =>  'validate' ,
                                        'title' =>  'Nombre(s)');
                                    echo form_input($name_user);
                                    echo form_label('Nombre(s)','nombre_1')
                                ?>
                            </div>
                        </div>

                        <div class="row">
                            <div class="input-field col m6 s12">
                                <?php
                                    $dateN_user=array(
                                        'name'  =>  'Fecha_Nacimiento',
                                        'id'    =>  'id_fechaN_U',
                                        'value' =>  $this->input->post('Fecha_Nacimiento'),
                                        'type'  =>  'text',
                                        'required' => true,
                                        'class' =>  'validate datepicker' ,
                                        'title' =>  'Nombre(s)');             
                                    echo form_input($dateN_user);
                                    echo form_label('Fecha de nacimiento','fecha_nacimiento');
                                ?>
                                
                            </div>

                            <div class="input-field col m6 s12">
                                <?php
                                    $phone_user=array(
                                        'name'  =>  'Telefono',
                                        'id'    =>  'id_tel_U',
                                        'value' =>  $this->input->post('Telefono'),                                        
                                        'type'  =>  'text',
                                        'required' => true,
                                        'class' =>  'validate',
                                        'title' =>  'Telefono');
                                    echo form_input($phone_user);
                                    echo form_label('Telefono','tel_1')
                                ?>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col m4 s12"></div>
                            <div class="input-field col m4 s12">
                                <?php
                                    $options = array(
                                        ''       => 'Selecciona una opción',
                                        'mujer'  => 'Mujer',
                                        'hombre' => 'Hombre');
                                    echo form_dropdown('Sexo',$options,$this->input->post('Sexo'),'required');
                                ?>
                            </div>
                            <div class="col m4 s12"></div>
                        </div>

                        <div class="row">
                            <div class="input-field col m4 s12">
                                <?php
                                    $phone_user=array(
                                        'name'  =>  "Correo",
                                        'id'    =>  "id_mail_U",
                                        'value' =>  $this->input->post('Correo'),
                                        'type'  =>  "email",
                                        'required' => true,
                                        'class' =>  "validate",
                                        'title' =>  "Correo electronico");
                                    echo form_input($phone_user);
                                    echo form_label('E-mail','email')?>
                            </div>

                            <div class="input-field col m4 s12">

                                <?php 
                                    $pass_1 = array (
                                            'name' => 'Passwd',   
                                            'id'   => 'pass_1',
                                            'value' =>  $this->input->post('Passwd'),
                                            'required' => true
                                            );
                                    echo form_input($pass_1);
                                    echo form_label('Contraseña','pass_1');
                                ?>

                            </div>
                            <div class="input-field col m4 s12">
                                <?=form_input()?>
                                <?= form_label('Confirma tu contraseña','pass_2')?>
                            </div>
                        </div>
                        <br>

                        <!--Inicio plugin medir fuerza-->

                        <div class="row hide-on-med-and-down">
                            <div class="col m12 s12 grey-text text-grey darken-4" ALIGN="center"><br><br> Toma esto en cuenta, ¡es la fuerza de tu contraseña!</div>
                            <div id="meter2" class="col m12 s12 center" ALIGN="center"><br></div>
                        </div>
                        <br><br>
                        <div class="row">


                            <div class="col m12 s12" ALIGN="center">
                                <label>
                                    <?=form_checkbox ( 'check')?>
                                    <span><a href="">He leído los terminos de uso y condiciones</a></span>
                                </label>
                            </div>

                            <br><br><br><br><br>
                            <div class="col s12 m12" ALIGN="center">

                                <?php 
                                    $option_button = array (
                                            'class'     => 'btn waves-effect waves-light deep-orange darken-3',
                                            'type'      => 'submit',
                                            'name'      => 'action',
                                            'content'   =>  'Enviar <i class="material-icons right">send</i>'    
                                        );
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
        <br><br><br><br>
        <h1 ALIGN="center">Registro para Centros de Adopción</h1>
        <br><br>
    </div>
</div>

<script>
    function tipUser($num){
        document.getElementById('#Tipo_User').setValue($num);
    }

</script>>