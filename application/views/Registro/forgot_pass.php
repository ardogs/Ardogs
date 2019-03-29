<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>aRDog | Confirma Email</title>

    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/css/materialize.min.css">
    <link rel="icon" href="https://image.ibb.co/dEEbaA/baidu-logotipo-de-la-pata-2.png">

    <div class="navbar-fixed">
        <nav class="grey darken-4">
            <div class="nav-wrapper">
                <div class="container">
                    <a href="<?=base_url()?>InicioController" class="brand-logo center">
                        <img class="responsive-img" src="https://image.ibb.co/k8WOvU/Logo_1.png" alt="">
                    </a>


                </div>

            </div>
        </nav>
    </div>
</head>

<body>



    <br>
    <div class=" container">
        <div class="row">

            <br><br>
            <center>
                <img width="128" height="128" class="responsive-img" src="https://image.ibb.co/nJFJwz/idea.png">
            </center>


            <br>
            <h3 ALIGN="center">¡Veamos que tenemos aqui!</h3>
            <p ALIGN="center">Ingresa tu correo para iniciar con el proceso. Si coincide con el que te has registrado en breves momentos recibiras tu contraseña temporal. Una vez que la tengas, por favor inicia sesión y cambiala en la parte "Datos personales"</p>



            <?php
                $form_U=array('class' => "col m12 s12",
                                'id' => 'form_1');
                echo form_open(base_url().'LoginController',$form_U);
            ?>
            <div class="row">
                <div class="col s0 m3"></div>
                <div class="input-field col m6 s12" style="text-align: right;height:10px">
                    <?php
                        $email_user = array(
                            'name'      => 'Correo_forgot',
                            'id'        => 'user_id_forgot',
                            'required'  => 'required',
                            'type'      => 'email',
                            'title'     => 'Correo Electronico',
                            'oninvalid' => "setCustomValidity('Con esto comprobaremos que eres tu')",
                            'oninput'   => "setCustomValidity('')");
                        echo form_input($email_user,'');
                        echo form_label('Correo Electronico','user_id_forgot');

                    ?>
                </div>
            </div>
<br>
            <div class="row">
                    <div class="col m4 s12"></div>
                    <div class="col m4 s12" ALIGN="center">
                        <button class="btn waves-effect waves-light  grey darken-4" type="submit" name="action">Verificar
                        </button>
                    </div>
                </div>


            <?php
                echo form_close();
            ?>

        </div>

    </div>

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/js/materialize.min.js"></script>
    <script type="text/javascript">
      document.oncontextmenu =  function(){return false;}
    </script>
</body>

</html>
