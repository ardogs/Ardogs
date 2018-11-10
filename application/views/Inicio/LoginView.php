<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>aRDog | Inicio de sesión</title>

    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/css/materialize.min.css">
    <link rel="icon" href="https://image.ibb.co/dEEbaA/baidu-logotipo-de-la-pata-2.png">
</head>

<style>
body { background: url(https://image.ibb.co/m4vDuz/pexels_photo_1378849.jpg) center fixed no-repeat}
</style>

<body class="responsive-img">



    <br><br>
    <div class=" container">
        <div class="row">
            <div class="col m3 s1"></div>


            <?php
                $form_U=array('class' => "col m6 s10 card-panel x-depth-5",
                                'id' => 'cont_1');
                echo form_open(base_url().'LoginController', $form_U);
            ?>

            <div class="row">
                <br>

                <a href="<?=base_url()?>InicioController" class="brand-logo" ALIGN="center">
                   <center>
                        <img width="250" height="62"  src="https://image.ibb.co/dtKSaK/logo_mail.png">
                   </center>

                </a>
                <h4 ALIGN="center">¡Bienvenido!</h4>

                <p ALIGN="center">
                    <font size=2 COLOR="#757575"> <br>Inicia sesíon para poder conocer a todos nuestros amigos</font>
                </p>


                <div class="row">
                    <div class="container">
                        <div class="input-field col m12 s12" style="text-align: right;height:10px">
                            <?php
                                $email_user = array(
                                    'name'  => 'Correo',
                                    'id'    => 'user_id',
                                    'required'  =>  'required',
                                    'value' => $this->input->post('Correo'),
                                    'type'  => 'email',
                                    'title' => 'Nombre de Usuario');
                                echo form_input($email_user,'');
                                echo form_label('Usuario (Correo)','user_id');
                                echo form_error('Correo', '<span class="helper-text"style="color:red;">', '</span>');
                                ?>
                        </div>

                    </div>
                </div>
                <br>

                <div class="row">
                    <div class="container">
                        <div class="input-field col m12 s12" style="text-align: right;height:15px">
                            <?php
                                $pass_user = array(
                                    'name'  => 'Passwd',
                                    'id'    => 'password_id',
                                    'required'  =>  'required',
                                    'type'  => 'password',
                                    'title' => 'Contraseña');
                                echo form_input($pass_user,'');
                                echo form_label('Contraseña','password_id');
                                echo form_error('Passwd', '<span class="helper-text"style="color:red;"><br>', '</span>');
                                ?>
                        </div>
                    </div>



                    <div class="col s12 m12" style="text-align: right;height:30px">
                        <p ALIGN="center">
                            <font size=2>
                                <a href="<?=base_url()?>LoginController/forgot_password">¿Olvidaste tu contraseña?</a>
                            </font>
                        </p>
                    </div>

                </div>

                <?php
                    if($this->session->flashdata('error')){
                ?>

                <div>
                    <p ALIGN="center">
                        <FONT SIZE=1 COLOR="#e53935">
                            <?php echo $this->session->flashdata('error'); ?>
                        </FONT>
                    </p>
                </div>
                <?php
                    }
                 ?>
                <div class="row">
                    <div class="col m4 s12"></div>
                    <div class="col m4 s12" ALIGN="center">
                        <button class="btn waves-effect waves-light  grey darken-4" type="submit" name="action">Inicia
                            Sesión

                        </button>
                    </div>
                </div>

                <div style="text-align: right;height:5px">
                    <p ALIGN="center" class=" grey-text text-grey lighten-1">
                        <font size=2> ¿Aún no eres miembro?
                            <a href="<?=base_url()?>RegistroController"> Registrate</a>
                        </font>
                    </p>
                </div>
                <br>
                <p ALIGN="center" class=" grey-text text-grey lighten-1">
                    <font size=1> Al resgistrate aceptas nuestros
                        <a href=""> Terminos de uso y condiciones</a>
                    </font>
                </p>
            </div>
            <?= form_close() ?>
            <div class="col m3 s1"></div>
        </div>
    </div>

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/js/materialize.min.js"></script>

</body>

</html>
