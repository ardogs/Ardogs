<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/js/materialize.min.js"></script>

<link rel="stylesheet" type="text/css" href="<?= base_url() ?>Estilos/css/animate.css">
<link rel="stylesheet" type="text/css" href="<?= base_url() ?>Estilos/css/boton.css">

<script>
    $(document).ready(function() {
        $("#particles-js").css({
            "height": $(window).height() + "px"
        });
    });
</script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var elems = document.querySelectorAll('.carousel');
        var instances = M.Carousel.init(elems, {
            fullWidth: true
        });
    });

    autoplay()

    function autoplay() {
        $('.carousel').carousel('next');
        setTimeout(autoplay, 8000);
    }
</script>

<style>
    .centrado {
        position: absolute;
        top: 27%;
        left: 50%;
        transform: translate(-50%, -50%);
    }

    #particles-js {
        background: url(https://i.ibb.co/HxJst1z/animal-collar-dog-8700.jpg);
        background-position: center;
        background-attachment: contain;
        background-size: cover;
    }

    .centrado_1 {
        position: absolute;
        top: 40%;
        left: 50%;
        transform: translate(-50%, -50%);
    }

    .centrado_2 {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }

    mark {
        /* El color del fondo anula el color de la página completa */
        background-color: rgba(0, 0, 0, 0.5);
        color: #f1f8e9;
    }

    .carousel {
        height: 400px !important;
    }
</style>


<div class="">

    <div id="particles-js" class="responsive-img animated fadeIn"></div>
    <div class="centrado">
        <h3 ALIGN="center" class="white-text animated zoomIn">¡Bienvenido a Ardogs!</h3>
        <p ALIGN="center" class="white-text animated zoomIn">¿Estas pensando en un nuevo perrito? Nuestra recomendación siempre será:</p>
        <center>
            <button ALIGN="center" class="bubbly-button animated zoomIn" onclick="window.location='<?= base_url() ?>AdoptaController'">¡Adoptar!</button>
        </center>
    </div>

    <div class="container">
        <br><br>
        <h3 class="grey-text text-darken-3 " ALIGN="center">En Ardogs podras </h3>
        <div class="row" ALIGN="center">
            <br><br><br><br>

            <div class="col m4 s12 container">
                <img ALIGN="center" src="https://i.ibb.co/j3PxvZh/pencil.png" weight="150" height="150">
                <h5 ALIGN="center" class="grey-text text-darken-3 "><a href="<?= base_url() ?>RegistroController">¡Registrarte!</a></h5>
                <p ALIGN="justify" class="grey-text text-darken-3 ">Contamos con dos tipos de registros. Para personas que buscan adoptar a algun perrito o para beneficiencias
                    que buscan ser colaboradores de nostros.</p>
            </div>

            <div class="col m4 s12 container">
                <img ALIGN="center" src="https://i.ibb.co/V9ZHBdt/imac.png" weight="150" height="150">
                <h5 ALIGN="center" class="grey-text text-darken-3 "><a href="<?= base_url() ?>LoginController">Iniciar sesión</a></h5>
                <p ALIGN="justify" class="grey-text text-darken-3 ">No podrás gozar de ninguno de nuestros servicios sin antes iniciar sesion, asi que ¿Que esperas?</p>
            </div>

            <div class="col m4 s12 container">
                <img ALIGN="center" src="https://i.ibb.co/mb68hR7/certificate.png" weight="150" height="150">
                <h5 ALIGN="center" class="grey-text text-darken-3 "><a href="<?= base_url() ?>AdoptaController">¡Adoptar!</a></h5>
                <p ALIGN="justify" class="grey-text text-darken-3 ">Puedes conocer a más de un cachorro, puedes buscar con el que sientas esa quimica especial, solicita una cita y visitalo.</p>
            </div>
        </div>
    </div>

    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <div class="parallax-container">
        <div class="">
            <img src="https://i.ibb.co/6JYGWD9/adorable-animal-canine-1453478.jpg" class="responsive-img">

            <div class="centrado_1">

                <h4 ALIGN="center" class="lime-text text-lighten-5">


                    <mark>Averigua si puedes adoptar</mark></h4>
                <h6 ALIGN="center"><mark>Contesta nuestro test</mark></h6>
                <br>
                <center>
                    <button ALIGN="center" class="bubbly-button" onclick="window.location='<?= base_url() ?>TestController'">Comenzar</button>
                </center>

            </div>
        </div>
    </div>

    <br><br>


    <h3 ALIGN="center" class="grey-text text-darken-3"> Testimonios</h3>
    <br>

    <div class="carousel carousel-slider center">

        <div class="carousel-item">

            <div class="container " ALIGN="center">
                <div class="row">
                    <div class="col s12 m12">
                        <img src="https://i.ibb.co/9TZWXnW/square-250.jpg" class="circle " widht="150" height="150">
                    </div>

                    <div class="col s12 m12">
                        <p><i>"Lorem ipsum dolor sit, amet consectetur adipisicing elit. Praesentium earum, accusantium animi perferendis
                                aspernatur reprehenderit doloribus odit dolore, pariatur repellendus modi illo saepe at unde esse quos optio
                                nam est.Inventore placeat, velit nisi magnam laboriosam fuga alias ducimus eius hic, debitis ratione eos illum
                                vel impedit aperiam officiis dolores maxime mollitia aut qui sed minima adipisci autem totam! Voluptas!"</i></p>
                    </div>
                    <div class="col s12 m12">
                        <h6>
                            <font color="#7cb342">Enrique Cuesta</font>, usuario de Ardogs
                        </h6>
                    </div>
                </div>
            </div>

        </div>
        <div class="carousel-item">

            <div class="container " ALIGN="center">
                <div class="row">
                    <div class="col s12 m12">
                        <img src="https://i.ibb.co/m4dqL5S/viejo.jpg" class="circle " widht="150" height="150">
                    </div>

                    <div class="col s12 m12">
                        <p><i>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus tempora voluptatibus obcaecati,
                                natus dolorem praesentium nihil totam incidunt! Ducimus natus tempora deleniti adipisci nostrum similique
                                asperiores voluptates totam officiis error!Vero eius consequatur, eum id aperiam cum veniam impedit eligendi
                                deleniti, repellendus temporibus, hic ad harum. Amet porro minus, quae, veritatis error pariatur ad, repellat
                                quibusdam eum eos consectetur obcaecati?</i></p>
                    </div>
                    <div class="col s12 m12">
                        <h6>
                            <font color="#7cb342">Miguel Ramírez</font>, usuario de Ardogs
                        </h6>
                    </div>
                </div>
            </div>
        </div>




        <div class="carousel-item">
            <div class="container " ALIGN="center">
                <div class="row">
                    <div class="col s12 m12">
                        <img src="https://i.ibb.co/DMqW5Y1/1485499779158756.jpg" class="circle " widht="150" height="150">
                    </div>

                    <div class="col s12 m12">
                        <p><i>"Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reprehenderit labore rerum vel, dicta ipsa quo unde
                                quam necessitatibus ut nisi ex illum voluptate officia maiores tempore distinctio quisquam sit rem.Maxime facere porro
                                obcaecati? Quibusdam maiores repellendus, culpa tenetur vero corrupti praesentium sequi error expedita harum sit porro
                                molestias blanditiis ipsa adipisci. Reiciendis, eveniet! Harum aliquam totam pariatur eum minus."</i></p>
                    </div>
                    <div class="col s12 m12">
                        <h6>
                            <font color="#7cb342">Juan Torres</font>, usuario de Ardogs
                        </h6>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <br>
        <br>
        <br>
    </div>

    <div class="container">
        <div class="row">
            <div class="col  offset-s3 s6  divider"></div>

            <div class="col m12 s12">
                <h3 ALIGN="center" class="grey-text text-darken-3 ">¿Quienes somos?</h3>

                <p ALIGN="center" class="grey-text text-darken-3 ">Somos una organización sin fines de lucro, que busca disminuir los índices de perros callejeros,
                    así como los índices de sacrificios, además de fomentar la empatía, la solidaridad y el amor en las familias, a
                    través del sistema de recepción de citas a través de internet para conocer a un perro de una organización afiliada
                    para que puedas adoptarlo. De esta manera creamos una manera más rápida y fácil de vincular perros callejeros con familias capaces de darle el amor y el cuidado que merecen.
                </p>
                <br>

                <center>
                    <button ALIGN="center" class="bubbly-button animated zoomIn" onclick="window.location='<?= base_url() ?>AcercaController'">¡Conoce más!</button>
                </center>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var elems = document.querySelectorAll('.parallax');
        var instances = M.Parallax.init(elems);
    });
</script>

<script>
    var animateButton = function(e) {
        e.preventDefault;
        //reset animation
        e.target.classList.remove('animate');

        e.target.classList.add('animate');
        setTimeout(function() {
            e.target.classList.remove('animate');
        }, 700);
    };

    var bubblyButtons = document.getElementsByClassName("bubbly-button");

    for (var i = 0; i < bubblyButtons.length; i++) {
        bubblyButtons[i].addEventListener('click', animateButton, false);
    }
</script>



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