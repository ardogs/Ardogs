<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>aRDog | Déjà vu</title>

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

    <script type="text/javascript">
      document.oncontextmenu =  function(){return false;}
    </script>
</head>

<body>



    <br>
    <div class=" container">
        <div class="row">

            <br><br>
            <center>
                <img width="128" height="128" class="responsive-img" src="https://image.ibb.co/m6bYWz/stopwatch.png">
            </center>


            <br>
            <h3 ALIGN="center">Creemos que esto es un Déjà vu</h3>

            <h5 ALIGN="center">¿Ya has hecho esto antes?</h5>
            <br><br>


            <p ALIGN="justify">Nos gustaria decirte que no tienes que confirmar siempre tu correo, puedes iniciar sesion con un click en el boton de abajo.</p>
            <br>


            <center>
                <a  href="<?=base_url()?>LoginController" class="waves-effect waves-teal btn-flat">Inicia Sesión</a>
            </center>
            <br><br>
        </div>

    </div>

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/js/materialize.min.js"></script>
</body>

</html>
