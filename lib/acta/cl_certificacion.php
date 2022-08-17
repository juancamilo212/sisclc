<?php
class CertificacionNASAKIWE{
    public function header(){
        $logo = "../../assets/img/logo2.png";
        $logo2 = "../../assets/img/mininterior.png";
      
      echo
      "<table>
      <tr>
          <td rowspan='2' ><img src='$logo2'width='200'
          height='70'></td>
          <td><strong>PROCESO TALENTO Y BIENESTAR HUMANO</strong></td>
          <td rowspan='2' width='70' ><img src='$logo'width='50'
          height='50'></td>
      </tr>
      <tr>
          <td><strong>FORMATO CERTIFICACIONL</strong></td>
          </tr>
          
      </table>
      <br>
      ";
    }

    public function piedepagina(){
      $firma = "../../assets/img/firma.png";
      echo "
      <footer>
      <img src='$firma'width='50'
          height='40'>
      <h4 style='text-align:center' >LESLY SHAUR GARZON DAZA</h4>
           </br>
      <table>
      <tr>
          <td> 

          <span>
          Sede popayán Calle 1AN N°, 239 PBX. 8235749-8382499
          </span>
          <span>
          Sede Bogotá Calle 12B N°, 8-38 Mezanine Edificio Camargo Tel: 2427400 Ext. 2200 
          </span>
          <span>
          Sede Belarcazar Calle 5 N°, 1A-17 Barrio La Primavera 
          </span>
          <span>
          Sede La Plata  Calle 4a # 5-37 tel. 8370346 
          </span>
          <span>
          Correo electronico: info@nasakiwe.gov.co -- www.nasakiwe.gov.co 
          </span>


          </td>
          <td>
          <span>
          Sede CÓDIGO F35-P08-TH-300
          </span> 
          <span>
            VERSION:1
          </span>
          <span>
            FECHA DE ACTUALIZACIÓN: MAYO 20 DE 2016
          </span>
          </td>
      </tr>
      
          
      </table>
      </footer>
      ";
    }

    public function tablaDatos(){
        setlocale(LC_ALL, "es_ES");
         $hoy = strftime("%d de %B de %Y");

        echo
            "
            <h5>Popayán $hoy</h5>
            </br>
            ";
    } 

    public function dataUsuario($nombreus, $lugar, $cedulaus){
        echo "
           <h4 style='text-align:center' >LA ASESORA ADMINISTRATIVA DE LA CORPORACION NASA KIWE</h4>
           </br>
           <h4 style='text-align:center' >HACE CONSTAR</h4>
           </br>
            <p style='text-align:justify'>Que revisados los archivos de la entidad se encontro que el señor/a 
            <strong>$nombreus </strong> identificado con cédula de ciudadania N° 
            <strong>$cedulaus</strong> de $lugar, suscribio diferentes contratos de prestacion
            de servicios con la Corporación Nasa Kiwe que se relaciona acontinuación:  </p>
            ";
    }

    public function contratos($contratos){
      $cantidaddecontratos = count($contratos);

        $cad = '<table>
        <tr>
        <td><strong>Nro. DEL CONTRATO</strong></td>
        <td><strong>OBJETIVO DEL CONTRATO</strong></td>
        <td><strong>FECHA DEL CONTRATO</strong></td>
        <td><strong>VALOR CONTRATADO</strong></td>
        </tr>
        ';
          if($cantidaddecontratos==0){
            for($i=0; $i<7; $i++){
              $cad.='<tr>
              <td class="tdasistente"></td>
              <td class="tdasistente"></td>
              <td class="tdasistente"></td>
              <td class="tdasistente"></td>
              </tr>';
             }
            }else{
             if($cantidaddecontratos>0 && $cantidaddecontratos<=6){
               $limite = $cantidaddecontratos -1;
                foreach ($contratos as $llavea => $valuea){
                  $limite-=1;
                  $numero = $contratos[$llavea]["num_contrato"];
                  $objetivo = $contratos[$llavea]["tipo_con"];
                  $duracionc = $contratos[$llavea]["duracion_con"];
                  $fecha = $contratos[$llavea]["fecha_ini_con"];
                  $valor = $contratos[$llavea]["valor_con"];
                  $sector = $contratos[$llavea]["sector_con"];
                  $empleo = $contratos[$llavea]["trabaco_con"];
                  $numvalor = number_format($valor);
                  
                    $cad.="<tr>
                    <td class='tdasistente tdasistentenombre tamano14'>$numero</td>
                    <td style='text-align:justify' class='tdasistente tdasistentecargo tamano14'>Prestar el servicio de $objetivo de la
                    $sector, $empleo. <strong>Duracción: </strong> $duracionc contados a partir de la firma del contrato.
                    </td>
                    <td class='tdasistente tamano14'>$fecha</td>
                    <td class='tdasistente tamano14'>$numvalor</td>
                   
                    </tr>";
                }
                for($i=0;$i<=$limite;$i++){
                  $cad.="<tr>
                  <td class='tdasistente'></td>
                  <td class='tdasistente'></td>
                  <td class='tdasistente '></td>
                  <td class='tdasistente'></td>
                  </tr>";
                }
             
            }else if($cantidaddecontratos>6 && $cantidaddecontratos<=12){
              $limite = $cantidaddecontratos - 1;
              foreach ($contratos as $llavea => $valuea){
                $limite-=1;
                $numero = $contratos[$llavea]["num_contrato"];
                  $objetivo = $contratos[$llavea]["tipo_con"];
                  $fecha = $contratos[$llavea]["fecha_ini_con"];
                  $valor = $contratos[$llavea]["valor_con"];
                  $numvalor = number_format($valor);
                  
                    $cad.="<tr>
                    <td class='tdasistente tdasistentenombre tamano14'>$numero</td>
                    <td style='text-align:justify' class='tdasistente tdasistentecargo tamano14'>Prestar el servicio de 
                    operador de maquinaria pesada (Buldozers) de la secretaria de obras publicas
                    departamentales del Cauca,  $objetivo</td>
                    <td class='tdasistente tamano14'>$fecha</td>
                    <td class='tdasistente tamano14'>$numvalor</td>
                   
                    </tr>";
              }
              for($i=0;$i<=$limite;$i++){
                $cad.="<tr>
                <td class='tdasistente'></td>
                <td class='tdasistente'></td>
                <td class='tdasistente '></td>
                <td class='tdasistente'></td>
                </tr>";
              }
            }else if($cantidaddecontratos>12 && $cantidaddecontratos<=18){
              $limite = $cantidaddecontratos - 1;
              foreach ($contratos as $llavea => $valuea){
                $limite-=1;
                $numero = $contratos[$llavea]["num_contrato"];
                  $objetivo = $contratos[$llavea]["tipo_con"];
                  $fecha = $contratos[$llavea]["fecha_ini_con"];
                  $valor = $contratos[$llavea]["valor_con"];
                  $numvalor = number_format($valor);
                  
                    $cad.="<tr>
                    <td class='tdasistente tdasistentenombre tamano14'>$numero</td>
                    <td style='text-align:justify' class='tdasistente tdasistentecargo tamano14'>Prestar el servicio de 
                    operador de maquinaria pesada (Buldozers) de la secretaria de obras publicas
                    departamentales del Cauca,  $objetivo</td>
                    <td class='tdasistente tamano14'>$fecha</td>
                    <td class='tdasistente tamano14'>$numvalor</td>
                   
                    </tr>";
              }
              for($i=0;$i<=$limite;$i++){
                $cad.="<tr>
                <td class='tdasistente'></td>
                <td class='tdasistente'></td>
                <td class='tdasistente '></td>
                <td class='tdasistente'></td>
                </tr>";
              }
              // $cad.="<div class='saltopagina'></div>";
            }else if($cantidaddecontratos>18){
              foreach ($contratos as $llavea => $valuea){
                $numero = $contratos[$llavea]["num_contrato"];
                $objetivo = $contratos[$llavea]["tipo_con"];
                $fecha = $contratos[$llavea]["fecha_ini_con"];
                $valor = $contratos[$llavea]["valor_con"];
                $numvalor = number_format($valor);
                
                  $cad.="<tr>
                  <td class='tdasistente tdasistentenombre tamano14'>$numero</td>
                  <td style='text-align:justify' class='tdasistente tdasistentecargo tamano14'>Prestar el servicio de 
                  operador de maquinaria pesada (Buldozers) de la secretaria de obras publicas
                  departamentales del Cauca,  $objetivo</td>
                  <td class='tdasistente tamano14'>$fecha</td>
                  <td class='tdasistente tamano14'>$numvalor</td>
                 
                  </tr>";
              }
              // $cad.="<div class='saltopagina'></div>";
            }
          }

        $cad.='</table>';
        echo $cad;
        echo "</br>";
        echo "</br>";
        echo "<h4>Se expide la presente constancia por solicitud del interezado</h4>";
    }

    

}