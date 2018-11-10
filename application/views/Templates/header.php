<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        <?php echo $string; ?>
    </title>

    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/css/materialize.min.css">
    <link rel="icon" href="http://drive.google.com/uc?export=view&id=1w3wrgI_gw8bbpQPYunMjIfcCU_Ywht1C">

    <!--Script Dropdown--->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var elems = document.querySelectorAll('.dropdown-trigger');
            var instances = M.Dropdown.init(elems, {
                constrainWidth: false
            });
        });

    </script>



    <div class="navbar-fixed z-depth-3">
        <nav class="grey darken-4">
            <div class="nav-wrapper">
                <div class="container">
                    <a href="<?=base_url()?>InicioController" class="brand-logo">
                        <img class="responsive-img" src="https://image.ibb.co/k8WOvU/Logo_1.png" alt="">
                    </a>

                    <a href="" data-target="menu-responsive" class="sidenav-trigger ">
                        <i class="material-icons">menu</i>
                    </a>

                    <ul class="right hide-on-med-and-down">

                        <li>
                            <a href="<?=base_url()?>InicioController">Inicio</a>
                        </li>
                        <li>
                            <a href="<?=base_url()?>AdoptaController">Adopta</a>
                        </li>
                        <li>
                            <a href="<?=base_url()?>ContactoController">Contacto</a>
                        </li>
                        <li>
                            <a href="<?=base_url()?>FAQController">FAQ</a>
                        </li>
                        <?php if($this->session->userdata('user')) {
                                $user = $this->session->userdata('user');
                                extract($user);
                            ?>
                        <li class="tooltipped" data-position="bottom" data-tooltip="Aqui podras ver el estado de la cita con tu nuevo amigo, además podras modificar algunos datos personales">
                            <a href="<?=base_url()?>PanelController">
                                <i class="material-icons left ">pets </i> ¡Bienvenido,
                                <?php echo $Nombre; ?>!
                                <!-- <i class="material-icons center">arrow_drop_down</i>-->
                            </a>
                        </li>

                        <li>
                            <a href="<?=base_url()?>LoginController/logout" class="grey darken-4 white-text">
                                Cerrar sesión
                            </a>
                        </li>
                        <?php }
                          else { ?>

                        <li>
                            <a class="dropdown-trigger" href="#!" data-target="dropdown1">

                                <i class="material-icons ">account_circle
                                    <i class="material-icons right">arrow_drop_down</i>
                                </i>
                            </a>
                        </li>
                        <?php  } ?>

                    </ul>
                </div>

            </div>
        </nav>
    </div>

    <!--Script para el sidenav(menu responsivo)--->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var elems = document.querySelectorAll('.sidenav');
            var instances = M.Sidenav.init(elems);
        });

    </script>

    <ul id="dropdown1" class="dropdown-content">
        <li><a href="<?=base_url()?>LoginController" ALIGN="center" class="grey darken-4 white-text">
                Inicia sesión
                <i class="material-icons left">person</i>
            </a></li>
        <li class="divider"></li>
        <li><a href="<?=base_url()?>RegistroController" class="grey darken-4 white-text">
                ¡Registrate!
                <i class="material-icons left">library_books</i>
            </a></li>
    </ul>

    <ul class="sidenav blue-grey lighten-5" id="menu-responsive">

        <li>
            <div class="user-view">
                <div class="background">
                    <img src="https://image.ibb.co/eLwhpp/portada.jpg">
                </div>
                <a href="#user"><img class="circle" src="https://image.ibb.co/dRiGep/Male_User_96px.png"></a>

                <?php if($this->session->userdata('user')) {
                                $user = $this->session->userdata('user');
                                extract($user);
                            ?>
                <a href="<?=base_url()?>PanelController">
                    <span class="white-text name">
                        ¡Bienvenido,
                        <?php echo $Nombre; ?>!
                    </span>
                </a>
                    <span class="white-text email">
                        <?php echo $Correo; ?>
                    </span>
                <?php }

                      else { ?>

                <a href="<?=base_url()?>LoginController"><span class="white-text name">Inicia Sesión</span></a>
                <br>
                <?php } ?>

            </div>
        </li>


        <li>
            <a href="<?=base_url()?>InicioController"><i class="material-icons">panorama_vertical</i>Inicio</a>
        </li>
        <li>
            <a href="<?=base_url()?>AdoptaController"><i class="material-icons">pets</i>Adopta</a>
        </li>
        <li>
            <a href="<?=base_url()?>ContactoController"><i class="material-icons">contact_mail</i>Contacto</a>
        </li>
        <li>
            <a href="<?=base_url()?>FAQController"><i class="material-icons">question_answer</i>FAQ</a>
        </li>

        <?php if($this->session->userdata('user')) {
                                $user = $this->session->userdata('user');
                                extract($user);
                            ?>
        <li>
            <div class="divider"></div>
        </li>
        <li>
            <a class="subheader">
                Informacion personal
            </a>
        </li>

        <li>
            <a href="<?=base_url()?>PanelController">
                <i class="material-icons">assignment_ind</i>
                Panel de Control
            </a>
        </li>

        <li>
            <div class="divider"></div>
        </li>

        <li>
            <a class="subheader">
                Salir
            </a>
        </li>

        <li>
            <a href="<?=base_url()?>LoginController/logout">
                <i class="material-icons">exit_to_app</i>
                Cerrar Sesión
            </a>
        </li>

        <?php }
              else { ?>
        <li>
            <a href="<?=base_url()?>RegistroController"><i class="material-icons">create</i>Registrarse</a>
        </li>
        <?php } ?>




    </ul>

    <ul id="dropdown_2" class="dropdown-content">
        <li>
            <a href="<?=base_url()?>LoginController">Iniciar sesión</a>
        </li>
    </ul>

        <script>
        document.addEventListener('DOMContentLoaded', function() {
            var elems = document.querySelectorAll('.tooltipped');
            var instances = M.Tooltip.init(elems);
        });

    </script>

</head>

<body>
