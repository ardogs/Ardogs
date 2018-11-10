<?php
  ob_start();
  use Spipu\Html2Pdf\Html2Pdf;
?>
<page backtop="10mm" backbottom="10mm" backleft="20mm" backright="20mm">

  <style type="text/css">
    #imagen img{
      float: left;
    }

    #Beneficiencia p{
      float: right;
    }
    #Beneficiencia p #Folio{
      font-size: 150%;
    }

    #Beneficiencia p #FolioB{
      font-size: 110%;
    }


    #Beneficiencia p #BENEF{
      font-size: 150%;
    }

    #Beneficiencia p #nombreB{
      font-size: 110%;
    }

    #Beneficiencia p #fechaB{
      font-size: 150%;
    }

    #Beneficiencia p #nfechaB{
      font-size: 110%;
    }

    #Beneficiencia p #hora{
      font-size: 150%;
    }

    #Beneficiencia p #horaB{
      font-size: 110%;
    }

    #Beneficiencia p #Perro{
      font-size: 150%;
    }

    #Beneficiencia p #PerroB{
      font-size: 110%;
    }

       #Beneficiencia p #aviso{
      font-size: 130%;
    }

        #avisoa p #firma{
      font-size: 135%;
    }

    #avisoa p #fecha_d{
      font-size: 135%;
    }

  </style>


<br>




  <div id=imagen>
  <img width="200" height="200" src="https://image.ibb.co/dnxy5A/Logo-2.jpg">



  </div>

  <div>
    <h1 ALIGN="center">
      Comprobante de cita <img src="https://image.ibb.co/efBQkA/baidu-logotipo-de-la-pata-1.jpg">
    </h1>
    <br>
    <div id="Beneficiencia">
      <p>
          <FONT id="Folio">Folio: </FONT><FONT id="FolioB"><?php echo $Cita['Id_Cita']?></FONT><br>
          <FONT id="BENEF">Beneficiencia: </FONT> <FONT id="nombreB"><?php echo $Cita['NombreB']?></FONT> <br>
          <FONT id="fechaB">Fecha: </FONT><FONT id="nfechaB"><?php echo $Cita['Fecha']?></FONT><br>
          <FONT id="hora">Hora: </FONT><FONT id="horaB"><?php echo $Cita['Hora']?></FONT> <br>
          <FONT id="Perro">Nombre - código: </FONT><FONT id="PerroB"><?php echo $Cita['Nombre_Perro']." - ".$Cita['Id_Perro'] ?></FONT> <br><br>
          <FONT id="aviso">ES IMPORTANTE IMPRIMIR ESTA HOJA PARA CONTINUAR CON EL TRAMITE</FONT><br>
        </p>
    </div>

    <div id="fecha">
      <p> </p>
    </div>

  </div>
<br><br><br><br><br>
  <div id="avisoa">
    <p ALIGN="justify">
      El(la) solicitante del servicio: <b><?php echo $Cita['Nombre']." ".$Cita['Ap_Paterno']." ".$Cita['Ap_Materno']?></b> declara estar comprometido con la causa de aRDogs por lo que esta de acuerdo en el proceso de trámite para la posible adopción del perro con nombre <b><?php echo $Cita['Nombre_Perro']?></b>
      de raza <b><?php echo $Cita['Raza']?></b>, teniendo una edad de <b><?php echo $Cita['EdadP']?></b> y sexo <b><?php echo $Cita['SexoP']?></b>.<br><br>

      Tal evento será llevado acabo en el Centro de Adopción: <b><?php echo $Cita['NombreB']?></b> con dirección: <b><?php echo $Cita['DireccionB']?></b> todo esto sujeto a nuestros terminos y condiciones los cuales pueden ser consultados en <a href="ardogs.org"><b>ardogs.org</b></a>
    </p>

      <br><br><br><br><br><br>

    <p align="center">
      <FONT id="firma">Nombre y Firma de Conformidad <br> <?php echo $Cita['Nombre']." ".$Cita['Ap_Paterno']." ".$Cita['Ap_Materno']?></FONT>
    </p>
    <br><br><br>

  </div>



</page>

<?php

  $content = ob_get_clean();
  require'vendor/autoload.php';
  try
  {
      $html2pdf = new HTML2PDF('P', 'A4', 'es', true, 'UTF-8', 3);
      $html2pdf->pdf->SetDisplayMode('fullpage');
      $html2pdf->writeHTML($content, isset($_GET['vuehtml']));
      $html2pdf->Output('PDF-CF.pdf');
  }
  catch(HTML2PDF_exception $e) {
      echo $e;
      exit;
  }
