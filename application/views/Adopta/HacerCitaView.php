<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/js/materialize.min.js"></script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var elems = document.querySelectorAll('.parallax');
        var instances = M.Parallax.init(elems);
    });

</script>

<script>
    var w =  new Date();
    var hour = w.getHours+":"+w.getMinutes;

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
    document.addEventListener('DOMContentLoaded', function() {
        var elems = document.querySelectorAll('.modal');
        var instances = M.Modal.init(elems);
    });

</script>

<script type="text/javascript">
  document.oncontextmenu =  function(){return false;}
</script>

<div class="parallax-container">
    <div class="parallax slider">
        <img data-philter-vintage="1" src="https://image.ibb.co/dqFRaq/pexels-photo-879788-1.jpg">
        <ul class="slides"></ul>
    </div>
</div>


<br>
<br>

<h3 ALIGN="center"> Este paso es importante...</h3>




<div class="container">
    <p ALIGN="center"> Ahora solo estamos a un paso de generar una cita. <br> A continuación
        encontraras la información general de tu posible nuevo amigo, asi como un formulario en el que deberás
        seleccionar la fecha y la hora en la que estés seguro que puedas estar presente.</p>
</div>

<br>
<br>
<br>

<div class="container">

    <div class="row">

        <div class="col s12 m6">

            <div class="container">


                <div class="row">
                    <div class="col s12 m12">
                        <img class="responsive-img" src=<?php echo base_url()."public/Imagenes_Perros/".$Perro['Nombre_Foto_File']?> alt="" width="400" height="360">

                        <p ALIGN="justify">
                            <FONT SIZE=5>Nombre: </FONT>
                            <FONT SIZE="4" color="#616161"> <?php echo $Perro['Nombre_Perro'];?></FONT><br>
                            <FONT SIZE=5>Raza: </FONT>
                            <FONT SIZE="3" color="#616161"> <?php echo $Perro['Raza'];?></FONT><br>
                            <FONT SIZE=5>Edad: </FONT>
                            <FONT SIZE="3" color="#616161"> <?php echo $Perro['Edad'];?></FONT><br>
                            <FONT SIZE=5>Sexo: </FONT>
                            <FONT SIZE="3" color="#616161"> <?php echo($Perro['Sexo']=='H')?"Macho":"Hembra";?></FONT><br>
                            <FONT SIZE=5>Descripción: </FONT>
                            <FONT SIZE="3" color="#616161"> <?php echo $Perro['DescripcionP'];?></FONT><br>
                            <FONT SIZE=5>Beneficiencia: </FONT>
                            <FONT SIZE="3" color="#616161"><a href=""> <?php echo $Benef['NombreB'];?></a></FONT><br>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <script>
            var f = new Date();

            document.addEventListener('DOMContentLoaded', function() {
                var elems = document.querySelectorAll('.datepicker');
                var instances = M.Datepicker.init(elems, {
                    showMonthAfterYear: true,
                    defaultDate: new Date(),
                    setDefaultDate: true,
                    autoClose: true,
                    minDate: new Date(),
                    showMonthAfterYear: true,
                    disableWeekends: true,
                    format: 'yyyy-mm-dd',
                    showClearBtn: false,
                    yearRange: 0,
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


        <script>
            document.addEventListener('DOMContentLoaded', function() {
                var elems = document.querySelectorAll('.timepicker');
                var instances = M.Timepicker.init(elems, {
                    twelveHour: false,
                    i18n: {
                        cancel: 'cancelar',
                        clear: 'limpiar',
                        done: 'listo'
                    }
                });
            });

        </script>

        <div class="col s12 m6">
            <br><br><br><br>
            <h3 align="center"> Datos de la cita</h3>

            <div class="container">

                <?php
                    $form_U=array('class' => "col s12 form-group");
                    echo form_open(base_url().'GeneraCitaController/index/'.$Perro['Id_Perro'], $form_U);
                ?>
                <div class="row">

                    <div class="input-field col m12 s12">
                        <?php
                                        $dateN_user=array(
                                            'name'      =>  'Fecha',
                                            'id'        =>  'id_fecha',
                                            'type'      =>  'text',
                                            'required'  =>  'required',
                                            'class'     =>  'validate datepicker',
                                            'title'     =>  'Fecha de la cita',
                                            'oninvalid' =>  "setCustomValidity('¡Te vamos a estar esperando!, clickea para abrir el calendario ')",
                                            'oninput'   =>  "setCustomValidity('')");
                                        $funtion_birth = 'onkeypress="return checar_1(event)"';
                                        echo form_input($dateN_user,$this->input->post('Fecha'),$funtion_birth);
                                        echo form_label('Fecha de la cita (Presioname)','id_fecha');
                                        echo form_error('Fecha', '<span class="helper-text"style="color:red;">', '</span>');
                                    ?>

                    </div>

                    <div class="input-field col m12 s12">
                        <?php

                        $date = new DateTime("now", new DateTimeZone('America/Mexico_City'));
                                        $dateN_user=array(
                                            'name'      =>  'Hora',
                                            'id'        =>  'id_hora',
                                            'type'      =>  'text',
                                            'required'  =>  'required',
                                            'class'     =>  'validate timepicker',
                                            'title'     =>  'Hora de la cita',
                                            'oninvalid' =>  "setCustomValidity('¿A que hora te vamos a ver?, clickea para abrir el reloj ')",
                                            'oninput'   =>  "setCustomValidity('')",
                                            'value'     => $date->format('H:i'));
                                        $funtion_birth = 'onkeypress="return checar_1(event)"';
                                        echo form_input($dateN_user, $this->input->post('Hora'),$funtion_birth);
                                        echo form_label('Hora de la cita, formato 24 hrs (Presioname)','id_hora');
                                        echo form_error('Hora', '<span class="helper-text"style="color:red;">', '</span>');
                                    ?>

                    </div>

                    <br>

                    <center>
                        <button data-target="modal1" class="btn modal-trigger green darken-1">Obtener Cita</button>
                    </center>

                    <div id="modal1" class="modal modal-fixed-footer">
                        <div class="modal-content">
                            <div class="row">
                                <div class="col s12 m12">

                                    <center>
                                        <img width="150" height="150" class="responsive-img" src="https://image.ibb.co/nvtOvU/Logo_2.png" ALIGN="center">
                                    </center>

                                    <h4 ALIGN="center">
                                        <FONT COLOR="red">¡Atención!</FONT>
                                    </h4>
                                    <p ALIGN="center">¡Muchas gracias! En cuanto presiones "Enviar" recibiras un correo electronico con un formato el cual deberas presentar el día de la cita. Es importante que lo imprimas porque de lo contrario la beneficiencia a la que asistas no podra brindarte el servicio. De corazon a corazon, ¡Gracias!. Da click en enviar para terminar con el proceso o presiona fuera de la advertencia para regresar a la pantalla anterior.</p>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <center>
                                <button class="btn waves-effect waves-light grey darken-4" type="submit" name="action">Enviar
                                    <i class="material-icons right">send</i>
                                </button>
                            </center>

                        </div>
                    </div>





                    <?= form_close() ?>

                </div>
            </div>

        </div>
    </div>
</div>

<div id="modal1" class="modal">
    <div class="modal-content">
        <h4>Modal Header</h4>
        <p>A bunch of text</p>
    </div>
    <div class="modal-footer">
        <a href="#!" class="modal-close waves-effect waves-green btn-flat">Agree</a>
    </div>
</div>





<br>
<br>
<br>
<br>
<br>
