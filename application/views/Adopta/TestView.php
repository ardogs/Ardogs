<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/js/materialize.min.js"></script>
<script src="https://unpkg.com/materialize-stepper@3.0.1/dist/js/mstepper.min.js"></script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var elems = document.querySelectorAll('.parallax');
        var instances = M.Parallax.init(elems);
    });
</script>





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

    ul.stepper.horizontal {
        min-height: 1500px;
    }

    #step2 {
        height: 1350px;
    }

    #step3 {
        height: 900px;
    }
</style>

<div class="parallax-container">
    <div class="parallax slider">
        <img data-philter-vintage="1" src="https://i.ibb.co/mCHBc5F/adorable-1851106-1280.jpg">
        <ul class="slides"></ul>
    </div>
</div>

<div class="container">
    <div class="row">

        <br><br>
        <h1 ALIGN="center">El test</h1>
        <br><br>
        <div class="col s12 m12">

            <p ALIGN="center">
                A continuación, te mostramos el test que de Ardogs, esto te ayudará a saber si realmente
                estas listo para adoptar a un perrito. Se sincero contigo mismo.
            </p>
            <br>
        </div>


        <div class="row">
            <div class="col s12 m12">

                <?php
                $form_B = array('class' => "col m12 s12");
                echo form_open(base_url() . 'TestController', $form_B);
                ?>
                <ul class="stepper horizontal linear demos" id="horizontal">
                    <li class="step">
                        <div class="step-title waves-effect waves-dark">Parte 1</div>
                        <div class="step-content">

                            <h6>1. ¿Cuánto tiempo puedo dedicarle a tú mascota?</h6>
                            <p>
                                <label for="R1_1">
                                    <?php echo form_radio('R1', '1', ($this->input->post('TestController') == '1') ? TRUE : FALSE, "id='R1_1' class ='with-gap' required"); ?>
                                    <span>No tengo tiempo definido, pero el espacio en casa es grande y no me preocupo.</span>
                                </label>
                            </p>
                            <p>
                                <label for="R1_2">
                                    <?php echo form_radio('R1', '2', ($this->input->post('TestController') == '2') ? TRUE : FALSE, "id='R1_2' class ='with-gap' required"); ?>
                                    <span>Por las noches, ya que salgo temprano a trabajar y llego después de las 6 pm.</span>
                                </label>
                            </p>
                            <p>
                                <label for="R1_3">
                                    <?php echo form_radio('R1', '3', ($this->input->post('TestController') == '3') ? TRUE : FALSE, "id='R1_3' class ='with-gap' required"); ?>
                                    <span>Los fines de semana, porque otros miembros de la familia se encargan entre semana.</span>
                                </label>
                            </p>
                            <p>
                                <label for="R1_4">
                                    <?php echo form_radio('R1', '4', ($this->input->post('TestController') == '4') ? TRUE : FALSE, "id='R1_4' class ='with-gap' required"); ?>
                                    <span>Al menos dos horas al día, ya que mi trabajo en casa o cerca de casa me lo permite.</span>
                                </label>

                            </p>
                            <p>
                                <label for="R1_5">
                                    <?php echo form_radio('R1', '5', ($this->input->post('TestController') == '5') ? TRUE : FALSE, "id='R1_5' class ='with-gap' required"); ?>
                                    <span>Por la mañana sale a correr conmigo y fines de semana busco alguna actividad al aire libre para pasearlo. Por las noches juego con él.</span>
                                </label>
                            </p>
                            <br>
                            <div class="col s6  divider">
                            </div>
                            <br>

                            <h6>2. ¿Cuánto estoy dispuesto a gastar para su manutención mensual?</h6>

                            <p>
                                <label for="R2_1">
                                    <?php echo form_radio('R2', '1', ($this->input->post('TestController') == '1') ? TRUE : FALSE, "id='R2_1' class ='with-gap' required"); ?>
                                    <span>50 a 100 pesos.</span>
                                </label>
                            </p>
                            <p>
                                <label for="R2_2">
                                    <?php echo form_radio('R2', '2', ($this->input->post('TestController') == '2') ? TRUE : FALSE, "id='R2_2' class ='with-gap' required"); ?>
                                    <span>100 a 200 pesos.</span>
                                </label>
                            </p>
                            <p>
                                <label for="R2_3">
                                    <?php echo form_radio('R2', '3', ($this->input->post('TestController') == '3') ? TRUE : FALSE, "id='R2_3' class ='with-gap' required"); ?>
                                    <span>200 a 400 pesos.</span>
                                </label>
                            </p>
                            <p>
                                <label for="R2_4">
                                    <?php echo form_radio('R2', '4', ($this->input->post('TestController') == '4') ? TRUE : FALSE, "id='R2_4' class ='with-gap' required"); ?>
                                    <span>Sin límite, ya que puedo asumir cualquier gasto imprevisto.</span>
                                </label>
                            </p>

                            <br>
                            <div class="col s6  divider"></div>
                            <br>

                            <h6>3. ¿Conoces las leyes que protegen a los animales?</h6>
                            <p>
                                <label for="R3_1">
                                    <?php echo form_radio('R3', '1', ($this->input->post('TestController') == '1') ? TRUE : FALSE, "id='R3_1' class ='with-gap' required"); ?>
                                    <span>No, ni idea</span>
                                </label>
                            </p>
                            <p>
                                <label for="R3_2">
                                    <?php echo form_radio('R3', '2', ($this->input->post('TestController') == '2') ? TRUE : FALSE, "id='R3_2' class ='with-gap' required"); ?>
                                    <span>Poco</span>
                                </label>
                            </p>
                            <p>
                                <label for="R3_3">
                                    <?php echo form_radio('R3', '3', ($this->input->post('TestController') == '3') ? TRUE : FALSE, "id='R3_3' class ='with-gap' required"); ?>
                                    <span>Sí</span>
                                </label>
                            </p>

                            <br>
                            <div class="col s6  divider"></div>
                            <br>

                            <h6>4. ¿Por qué deseas un perro?</h6>
                            <p>
                                <label for="R4_1">
                                    <?php echo form_radio('R4', '1', ($this->input->post('TestController') == '1') ? TRUE : FALSE, "id='R4_1' class ='with-gap' required"); ?>
                                    <span>Por moda. Para cruzarlo y vender los cachorros</span>
                                </label>
                            </p>
                            <p>
                                <label for="R4_2">
                                    <?php echo form_radio('R4', '2', ($this->input->post('TestController') == '2') ? TRUE : FALSE, "id='R4_2' class ='with-gap' required"); ?>
                                    <span>Porque mi mejor amigo, o casi todos mis vecinos tienen uno.</span>
                                </label>
                            </p>
                            <p>
                                <label for="R4_3">
                                    <?php echo form_radio('R4', '3', ($this->input->post('TestController') == '3') ? TRUE : FALSE, "id='R4_3' class ='with-gap' required"); ?>
                                    <span>Porque mi hijo(a) insiste y desea tener un perrito.</span>
                                </label>
                            </p>
                            <p>
                                <label for="R4_4">
                                    <?php echo form_radio('R4', '4', ($this->input->post('TestController') == '4') ? TRUE : FALSE, "id='R4_4' class ='with-gap' required"); ?>
                                    <span>Para no estar sólo(a) o por terapia.</span>
                                </label>
                            </p>
                            <p>
                                <label for="R4_5">
                                    <?php echo form_radio('R4', '5', ($this->input->post('TestController') == '5') ? TRUE : FALSE, "id='R4_5' class ='with-gap' required"); ?>
                                    <span>Por seguridad mía y de mi casa.</span>
                                </label>
                            </p>
                            <p>
                                <label for="R4_6">
                                    <?php echo form_radio('R4', '6', ($this->input->post('TestController') == '6') ? TRUE : FALSE, "id='R4_6' class ='with-gap' required"); ?>
                                    <span>Porque amo a los animales, he tenido con anterioridad y deseo darle un hogar a un perro que lo necesite</span>
                                </label>
                            </p>

                            <br>
                            <div class="col s6  divider"></div>
                            <br>

                            <h6>5. ¿Qué tan frecuentemente te mudas de casa?</h6>
                            <p>
                                <label for="R5_1">
                                    <?php echo form_radio('R5', '1', ($this->input->post('TestController') == '1') ? TRUE : FALSE, "id='R5_1' class ='with-gap' required"); ?>
                                    <span>¡Me encanta! Al menos una cada 2 años</span>
                                </label>
                            </p>
                            <p>
                                <label for="R5_2">
                                    <?php echo form_radio('R5', '2', ($this->input->post('TestController') == '2') ? TRUE : FALSE, "id='R5_2' class ='with-gap' required"); ?>
                                    <span>He tenido de 2 a 3 cambios de casa en toda mi vida.</span>
                                </label>
                            </p>
                            <p>
                                <label for="R5_3">
                                    <?php echo form_radio('R5', '3', ($this->input->post('TestController') == '3') ? TRUE : FALSE, "id='R5_3' class ='with-gap' required"); ?>
                                    <span>Llevo más de 10 años en la misma casa.</span>
                                </label>
                            </p>
                            <p>
                                <label for="R5_4">
                                    <?php echo form_radio('R5', '4', ($this->input->post('TestController') == '4') ? TRUE : FALSE, "id='R5_4' class ='with-gap' required"); ?>
                                    <span>Nunca me he cambiado de casa.</span>
                                </label>
                            </p>
                            <div class="step-actions col s12 m12">
                                <button class="waves-effect waves-dark btn blue next-step" id="up">Siguiente</button>
                            </div>

                    </li>

                    <li class="step" id="li1">
                        <div class="step-title waves-effect waves-dark">Parte 2</div>
                        <div class="step-content" id="step2">

                            <h6>6. ¿Qué tan frecuentemente cambias de trabajo?</h6>
                            <p>
                                <label for="R6_1">
                                    <?php echo form_radio('R6', '1', ($this->input->post('TestController') == '1') ? TRUE : FALSE, "id='R6_1' class ='with-gap' required"); ?>
                                    <span>Promedio una vez por año.</span>
                                </label>
                            </p>
                            <p>
                                <label for="R6_2">
                                    <?php echo form_radio('R6', '2', ($this->input->post('TestController') == '2') ? TRUE : FALSE, "id='R6_2' class ='with-gap' required"); ?>
                                    <span>Cada 2 o 3 años.</span>
                                </label>
                            </p>
                            <p>
                                <label for="R6_3">
                                    <?php echo form_radio('R6', '3', ($this->input->post('TestController') == '3') ? TRUE : FALSE, "id='R6_3' class ='with-gap' required"); ?>
                                    <span>Entre 4 y 9 años.</span>
                                </label>
                            </p>
                            <p>
                                <label for="R6_4">
                                    <?php echo form_radio('R6', '4', ($this->input->post('TestController') == '4') ? TRUE : FALSE, "id='R6_4' class ='with-gap' required"); ?>
                                    <span>Llevo más de 10 años en el mismo trabajo.</span>
                                </label>
                            </p>

                            <br>
                            <div class="col s6  divider"></div>
                            <br>

                            <h6>7. ¿En qué espacio vivirá?</h6>
                            <p>
                                <label for="R7_1">
                                    <?php echo form_radio('R7', '1', ($this->input->post('TestController') == '1') ? TRUE : FALSE, "id='R7_1' class ='with-gap' required"); ?>
                                    <span>En el baño.</span>
                                </label>
                            </p>
                            <p>
                                <label for="R7_2">
                                    <?php echo form_radio('R7', '2', ($this->input->post('TestController') == '2') ? TRUE : FALSE, "id='R7_2' class ='with-gap' required"); ?>
                                    <span>En el balcón.</span>
                                </label>
                            </p>
                            <p>
                                <label for="R7_3">
                                    <?php echo form_radio('R7', '3', ($this->input->post('TestController') == '3') ? TRUE : FALSE, "id='R7_3' class ='with-gap' required"); ?>
                                    <span>En un departamento amplio.</span>
                                </label>
                            </p>
                            <p>
                                <label for="R7_4">
                                    <?php echo form_radio('R7', '4', ($this->input->post('TestController') == '4') ? TRUE : FALSE, "id='R7_4' class ='with-gap' required"); ?>
                                    <span>En una casa con jardín.</span>
                                </label>
                            </p>

                            <br>
                            <div class="col s6  divider"></div>
                            <br>

                            <h6>8. ¿Cuál de los siguientes proyectos consideras a corto y mediano plazo?</h6>
                            <p>
                                <label for="R8_1">
                                    <?php echo form_radio('R8', '1', ($this->input->post('TestController') == '1') ? TRUE : FALSE, "id='R8_1' class ='with-gap' required"); ?>
                                    <span>Hacer un viaje largo a otro país o ciudad.</span>
                                </label>
                            </p>
                            <p>
                                <label for="R8_2">
                                    <?php echo form_radio('R8', '2', ($this->input->post('TestController') == '2') ? TRUE : FALSE, "id='R8_2' class ='with-gap' required"); ?>
                                    <span>Independizarme o comprarme un departamento para mudarme sólo.</span>
                                </label>
                            </p>
                            <p>
                                <label for="R8_3">
                                    <?php echo form_radio('R8', '3', ($this->input->post('TestController') == '3') ? TRUE : FALSE, "id='R8_3' class ='with-gap' required"); ?>
                                    <span>Tener hijos.</span>
                                </label>
                            </p>
                            <p>
                                <label for="R8_4">
                                    <?php echo form_radio('R8', '4', ($this->input->post('TestController') == '4') ? TRUE : FALSE, "id='R8_4' class ='with-gap' required"); ?>
                                    <span>Casarme.</span>
                                </label>
                            </p>

                            <br>
                            <div class="col s6  divider"></div>
                            <br>
                            <h6>9. ¿Cuando viajes, dónde se quedará tu perro?</h6>
                            <p>
                                <label for="R9_1">
                                    <?php echo form_radio('R9', '1', ($this->input->post('TestController') == '1') ? TRUE : FALSE, "id='R9_1' class ='with-gap' required"); ?>
                                    <span>Aún no lo sé. Ya se me ocurrirá algo a última hora.</span>
                                </label>
                            </p>
                            <p>
                                <label for="R9_2">
                                    <?php echo form_radio('R9', '2', ($this->input->post('TestController') == '2') ? TRUE : FALSE, "id='R9_2' class ='with-gap' required"); ?>
                                    <span>En una veterinaria.</span>
                                </label>
                            </p>
                            <p>
                                <label for="R9_3">
                                    <?php echo form_radio('R9', '3', ($this->input->post('TestController') == '3') ? TRUE : FALSE, "id='R9_3' class ='with-gap' required"); ?>
                                    <span>En casa de algún pariente</span>
                                </label>
                            </p>
                            <p>
                                <label for="R9_4">
                                    <?php echo form_radio('R9', '4', ($this->input->post('TestController') == '4') ? TRUE : FALSE, "id='R9_4' class ='with-gap' required"); ?>
                                    <span>Una pensión.</span>
                                </label>
                            </p>
                            <p>
                                <label for="R9_5">
                                    <?php echo form_radio('R9', '5', ($this->input->post('TestController') == '5') ? TRUE : FALSE, "id='R9_5' class ='with-gap' required"); ?>
                                    <span>Procuraré vacacionar en lugares donde acepten mascotas.</span>
                                </label>
                            </p>

                            <br>
                            <div class="col s6  divider"></div>
                            <br>

                            <h6>10. ¿Conoces lugares públicos PET FRIENDLY (hoteles y restaurantes especiales para perro)?</h6>
                            <p>
                                <label for="R10_1">
                                    <?php echo form_radio('R10', '1', ($this->input->post('TestController') == '1') ? TRUE : FALSE, "id='R10_1' class ='with-gap' required"); ?>
                                    <span>No me interesan.</span>
                                </label>
                            </p>
                            <p>
                                <label for="R10_2">
                                    <?php echo form_radio('R10', '2', ($this->input->post('TestController') == '2') ? TRUE : FALSE, "id='R10_2' class ='with-gap' required"); ?>
                                    <span>Sé de algunos, pero pienso que mi perro debe estar acostumbrado a estar en casa.</span>
                                </label>
                            </p>
                            <p>
                                <label for="R10_3">
                                    <?php echo form_radio('R10', '3', ($this->input->post('TestController') == '3') ? TRUE : FALSE, "id='R10_3' class ='with-gap' required"); ?>
                                    <span>Sí y me encantaría frecuentarlos con mi mascota.</span>
                                </label>
                            </p>

                            <div class="step-actions">
                                <button class="waves-effect waves-dark btn blue next-step" id="up2">Siguiente</button>
                                <button class="waves-effect waves-dark btn-flat previous-step">Atras</button>
                            </div>
                        </div>
                    </li>

                    <li class="step" id="li2">
                        <div class="step-title waves-effect waves-dark">Parte 3</div>
                        <div class="step-content" id="step3">
                            <h6>11. Alguna de las personas que convivirá en casa con la mascota tiene la siguiente característica:</h6>
                            <p>
                                <label for="R11_1">
                                    <?php echo form_radio('R11', '1', ($this->input->post('TestController') == '1') ? TRUE : FALSE, "id='R11_1' class ='with-gap' required"); ?>
                                    <span>Alérgica.</span>
                                </label>
                            </p>
                            <p>
                                <label for="R11_2">
                                    <?php echo form_radio('R11', '2', ($this->input->post('TestController') == '2') ? TRUE : FALSE, "id='R11_2' class ='with-gap' required"); ?>
                                    <span>Iracunda, grita y se altera fácilmente.</span>
                                </label>
                            </p>
                            <p>
                                <label for="R11_3">
                                    <?php echo form_radio('R11', '3', ($this->input->post('TestController') == '3') ? TRUE : FALSE, "id='R11_3' class ='with-gap' required"); ?>
                                    <span>Depresiva.</span>
                                </label>
                            </p>
                            <p>
                                <label for="R11_4">
                                    <?php echo form_radio('R11', '4', ($this->input->post('TestController') == '4') ? TRUE : FALSE, "id='R11_4' class ='with-gap' required"); ?>
                                    <span>Ninguna de las anteriores.</span>
                                </label>
                            </p>
                            <p>
                                <label for="R11_5">
                                    <?php echo form_radio('R11', '5', ($this->input->post('TestController') == '5') ? TRUE : FALSE, "id='R11_5' class ='with-gap' required"); ?>
                                    <span>Adora a los animales igual que yo.</span>
                                </label>
                            </p>

                            <br>
                            <div class="col s6  divider"></div>
                            <br>

                            <h6>12. Levantar las heces caninas es una costumbre que:</h6>
                            <p>
                                <label for="R12_1">
                                    <?php echo form_radio('R12', '1', ($this->input->post('TestController') == '1') ? TRUE : FALSE, "id='R12_1' class ='with-gap' required"); ?>
                                    <span>No se acostumbra donde vivo.</span>
                                </label>
                            </p>
                            <p>
                                <label for="R12_2">
                                    <?php echo form_radio('R12', '2', ($this->input->post('TestController') == '2') ? TRUE : FALSE, "id='R12_2' class ='with-gap' required"); ?>
                                    <span>Me desagrada, pero creo importante levantarlas.</span>
                                </label>
                            </p>
                            <p>
                                <label for="R12_3">
                                    <?php echo form_radio('R12', '3', ($this->input->post('TestController') == '3') ? TRUE : FALSE, "id='R12_3' class ='with-gap' required"); ?>
                                    <span>Es fundamental recogerlas, a fin de cuidar el medio ambiente.</span>
                                </label>
                            </p>

                            <br>
                            <div class="col s6 divider"></div>
                            <br>

                            <h6>13. En cuanto tu perro muerda zapatos o muebles y haga travesuras:</h6>
                            <p>
                                <label for="R13_1">
                                    <?php echo form_radio('R13', '1', ($this->input->post('TestController') == '1') ? TRUE : FALSE, "id='R13_1' class ='with-gap' required"); ?>
                                    <span>Se le golpea con periódico.</span>
                                </label>
                            </p>
                            <p>
                                <label for="R13_2">
                                    <?php echo form_radio('R13', '2', ($this->input->post('TestController') == '2') ? TRUE : FALSE, "id='R13_2' class ='with-gap' required"); ?>
                                    <span>Se le castiga encerrándolo o amarrándolo.</span>
                                </label>
                            </p>
                            <p>
                                <label for="R13_3">
                                    <?php echo form_radio('R13', '3', ($this->input->post('TestController') == '3') ? TRUE : FALSE, "id='R13_3' class ='with-gap' required"); ?>
                                    <span>Nada se debe hacer, pues es parte de su naturaleza cuando son pequeños y tienen la necesidad de morder. Si acaso conseguirle juguetes que cubran esa función.</span>
                                </label>
                            </p>
                            <p>
                                <label for="R13_4">
                                    <?php echo form_radio('R13', '4', ($this->input->post('TestController') == '4') ? TRUE : FALSE, "id='R13_4' class ='with-gap' required"); ?>
                                    <span>Se le corrige en el momento con una llamada de atención firme.</span>
                                </label>
                            </p>


                            <div class="step-actions col m10 s10">
                                <?php
                                $option_button = array(
                                    'class'     => 'waves-effect waves-dark btn blue',
                                    'type'      => 'submit',
                                    'name'      => 'action',
                                    'content'   =>  '¡Enviar!<i class="material-icons right">send</i>'
                                );
                                echo form_button($option_button)
                                ?>

                                <button class="waves-effect waves-dark btn-flat previous-step">Atras</button>

                                <div class="col s12 m12">

                                        <br>
                                        <br>
                                        <h3 >Tu resultado</h3>
                                        <p class="grey-text text-darken-3">Aqui pones el resultado</p>

                                </div>


                            </div>

                            <?= form_close() ?>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
</div>
</div>

<script>
    var stepper = document.querySelector('.stepper.demos');
    var stepperInstace = new MStepper(stepper, {
        firstActive: 0
    });
</script>

<script>
    $(document).ready(function() {
        $('#up, #up2').click(function() { //referimos el elemento ( clase o identificador de acción )
            $('html, body').animate({
                scrollTop: 700
            }, 'slow'); //seleccionamos etiquetas,clase o identificador destino, creamos animación hacia top de la página.
            return false;
        });


    });
</script>
