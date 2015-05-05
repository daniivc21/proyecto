<!DOCTYPE html>
<?php
//estos van de ley
include ('../Librerias/adodb5/adodb.inc.php');
include ('../Modelo/Conexion.php');
include ('../Modelo/Modelo.php');
//este se incluye dependiendo de la vista q sea, cada vista tiene su controlador
include ('../Controlador/Principal_controlador.php');
$obj_prin_cont = new principal_controlador();
$arreglo = $obj_prin_cont->regresa_total_vacantes();
$total_vacantes = $arreglo[0][0];
$arreglo = $obj_prin_cont->regresa_vacantes();
//echo'<pre>';
//print_r($arreglo);
//echo'</pre>';
?>

<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Bolsa de trabajo TENNECO</title>
        <!-- Css de bootstrap -->
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
        <script src="bootstrap/extras/jquery.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="screen" href="bootstrap/extras/reglas.css">
        <!-- Respond.js proxy on external server -->
        <!--<link href="http://externalcdn.com/respond-proxy.html" id="respond-proxy" rel="respond-proxy" />-->
        <script src="bootstrap/extras/html5shiv-master/dist/html5shiv.js"></script>
        <link rel="shortcut icon" href="../Recursos/imgs/ico.png" type="image/png" />
        <!-- Respond.js redirect location on local server -->
        <!--<link href="/path/to/respond.proxy.gif" id="respond-redirect" rel="respond-redirect" />-->
        <script type="text/javascript" src="bootstrap/extras/jquery.js"></script>
        <script type="text/javascript" src="bootstrap/extras/acordeon.js"></script>
        <script type="text/javascript" src="bootstrap/extras/jquery.js"></script>
        <link rel="stylesheet" type="text/css" href="bootstrap/extras/reglamodal.css">
        <script type="text/javascript">
            function openVentana(){
                $(".ventana").slideDown(1000);
            }
            function closeVentana(){
                $(".ventana").slideUp("fast");
            }
        </script>
    </head>
    <body>
        <!-- Contenedor para el encabezado Tenneco-->
        <div class="container-fluid">
            <div class="row adapta1">
                <div class="col-lg-1 col-lg-offset-10 margder">
                    <a class="thumbnail margizq">
                        <img class="margizq" src="../recursos/img/mon.png" >
                    </a>
                </div>
                <div class="col-lg-1 margizq txtacceder">
                    <a href="../vistas/Login.php" class="ai3">
                        Acceder
                    </a>
                </div>
            </div>
            <div class="margen" style="margin-top: 0px;">
                <div class="row fondomarg degradadoazul margen" style="margin-top: 0px;">      
                </div>
                <div class="row">
                    <div class="col-lg-12 ">
                        <a class="thumbnail adapta">
                            <img src="../Recursos/imgs/header_logo.png" >
                        </a>
                    </div>
                </div>
                <div class="row fondomargb degradadoazul">
                </div>
            </div>
            <!-- Contenedor para carrusel-->
            <div class="row col-lg-10 col-lg-offset-1">
                <div class=" col-sm-10 col-sm-push-1">
                    <div id="carousel-example-generic" class="carousel slide " data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="4"></li>
                        </ol>
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner carrusel">
                            <div class="item active">
                                <img src="../Recursos/imgs/1.gif" alt="...">
                                <div class="carousel-caption">
                                    <h3></h3>
                                </div>
                            </div>
                            <div class="item">
                                <img src="../Recursos/imgs/2.jpg" alt="...">
                                <div class="carousel-caption">
                                    <h3></h3>
                                </div>
                            </div>
                            <div class="item">
                                <img src="../Recursos/imgs/3.jpg" alt="..."> 
                                <div class="carousel-caption">
                                    <h3></h3>
                                </div>
                            </div>
                            <div class="item">
                                <img src="../Recursos/imgs/4.jpg" alt="...">
                                <div class="carousel-caption">
                                    <h3></h3>
                                </div>
                            </div>
                            <div class="item">
                                <img src="../Recursos/imgs/5.jpg" alt="...">
                                <div class="carousel-caption">
                                    <h3></h3>
                                </div>
                            </div>
                        </div>
                        <!-- Controls -->
                        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left"></span>
                        </a>
                        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right"></span>
                        </a>
                    </div>
                </div>
            </div>
            <!-- Comienza contenedor de acordeon-->
            <div>
                <div class="row  col-lg-10 col-lg-offset-1">
                    <div class="col-sm-3 col-md-3">
                        <div class="panel-group" id="accordion">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <span class="glyphicon glyphicon-tasks text-info">
                                        </span>Contentenido</a>
                                    </h4>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne"><span class="glyphicon glyphicon-briefcase text-info ">
                                            </span>Oportunidades</a>
                                    </h4>
                                </div>
                                <div id="collapseOne" class="panel-collapse collapse">
                                    <div class="panel-body degradadoazul">
                                        <table class="table">
                                            <tr>
                                                <td>
                                                    <a class="ai2" href="#" id="O1">Bolsa de trabajo</a> <span class="label label-success">Vacantes <?php echo $total_vacantes; ?></span>
                                                </td>
                                            </tr>

                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo"><span class="glyphicon glyphicon-user text-primary">
                                            </span>Gente Tenneco</a>
                                    </h4>
                                </div>
                                <div id="collapseTwo" class="panel-collapse collapse">
                                    <div class="panel-body degradadoazul">
                                        <table class="table">
                                            <tr>
                                                <td>
                                                    <span class="glyphicon glyphicon-globe"></span><a class="ai2" href="#" id="G1">¿Quienes somos?</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="glyphicon glyphicon-time"></span><a class="ai2" href="#" id="G2">¿Por qué trabajar con nosotros?</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="glyphicon glyphicon-book"></span><a class="ai2" href="#" id="G3">¿Cual es nuestra misión?</a>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree"><span class="glyphicon glyphicon-question-sign text-primary">
                                            </span>Ayuda</a>
                                    </h4>
                                </div>
                                <div id="collapseThree" class="panel-collapse collapse">
                                    <div class="panel-body degradadoazul">
                                        <table class="table">
                                            <tr>
                                                <td>
                                                    <span class="glyphicon glyphicon-open"></span><a class="ai2" href="#" id="A1">Postulate</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="glyphicon glyphicon-saved"></span><a class="ai2" href="#" id="A2">Contratación</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="glyphicon glyphicon-info-sign"></span><a class="ai2" href="#" id="A3">Tips para tu CV</a>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour"><span class="glyphicon glyphicon-phone-alt text-primary">
                                            </span>Asistencia</a>
                                    </h4>
                                </div>
                                <div id="collapseFour" class="panel-collapse collapse">
                                    <div class="panel-body degradadoazul">
                                        <table class="table">
                                            <tr>
                                                <td>
                                                    <span class="glyphicon glyphicon-earphone"></span><a class="ai2" href="#" id="AS1">Telefonos</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="glyphicon glyphicon-envelope"></span><a class="ai2" href="#" id="AS2">E-mail</a>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!---- Div 1 mostrar-->
                    <div class="col-sm-9 col-md-9 efecto" id="DivO1" style="display: none;">
                        <div class="well " style ="height: 350px">
                            <div class="fblanco" style="height: 310px;">
                                <div class="col-lg-12">
<!--                                    <h1 href="#">
                                        <h2><a href="javascript:openVentana();">Ver mas...></a></h2>
                                    </h1>-->
                                    <?php
                                    for ($i = 0; $i < sizeof($arreglo); $i++) {
                                        echo '<h3> Nombre: ' . $arreglo[$i][1] . '</h3>';
                                        echo '<h6> Descripcion: ' . $arreglo[$i][2] . '</h6>';
                                        echo '<h6> Descripcion: ' . $arreglo[$i][3] . '</h6>';
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!---- Div 2 mostrar-->
                    <div class="col-sm-9 col-md-9" id="DivG1" style="display: none;">
                        <div class="well col-sm-offset-0" style="color: black">
                            <div class="fblanco"> 
                                <div class="col-lg-12 ">
                                    <a class="thumbnail ab5" >
                                        <img src="../Recursos/imgs/12.JPG" >
                                    </a>
                                </div>
                                <h1 class="margh1" href="#"> Tenneco nace en el año de 1943  </h1>
                                <p class="margdiv"> Es el productor y comercializador de sistemas de escape 
                                    más grande del mundo produciendo uno de cada cuatro amortiguadores y sistemas 
                                    de escape vendidos.

                                    Tenneco Celaya inicia con su apertura en el año 1995 en la ciudad de Querétaro 
                                    y en el año 2005 se cambia a la ciudad de Celaya.<br> </p>

                                <p class="margdiv"> Produce Amortiguadores en Equipo Original para <b>Nissan</b> (en USA, Morelos), 
                                    <b>Ford</b> (Edo. México), <b>John Deere</b> (EUA), <b>General Motors</b> (Canada, EUA y Ramos Arispe), 
                                    <b>SEARS</b>, <b>Crhysler</b> (Toluca) mercado de refacciones, así como otros clientes en Estados Unidos.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-9 col-md-9" id="DivG2" style="display: none;">
                        <div class="well col-sm-offset-0" style="color: black">
                            <h1 href="#">
                                Ya
                            </h1>
                        </div>
                    </div>
                    <div class="col-sm-9 col-md-9" id="DivG3" style="display: none;">
                        <div class="well col-sm-offset-0" style="color: black">
                            <div class="fblanco"> 
                                <div class="col-lg-12 ">
                                    <a class="thumbnail ab5" >
                                        <img src="../Recursos/imgs/12.JPG" >
                                    </a>
                                </div>
                                <h1 class="margh1" href="#"> Politica de Calidad  </h1>
                                <p class="margdiv"> La <b>misión</b> de Tenneco es satisfacer a nuestros clientes                                    
                                    siendo el fabricante y distribuidos número uno con tecnolohgía a nivel
                                    mundial en sistemas y productos de control de manejo, control de emisiones
                                    y control de vibración.<br><br>

                                    Fortaleceremos nuestra posición líder meduante el involucramiento de los
                                    empleados y la cultura del valor económico compartido, donde un intenso
                                    enfoque sobre el mejoramiento continuo retornará el valor económico a la
                                    compañía en todo lo que hacemos.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-9 col-md-9" id="DivA1" style="display: none;">
                        <div class="well col-sm-offset-0" style="color: black">
                            <h1 href="#">
                                yeii
                            </h1>
                        </div>
                    </div>
                    <div class="col-sm-9 col-md-9" id="DivA2" style="display: none;">
                        <div class="well col-sm-offset-0" style="color: black">
                            <h1 href="#">
                                ii
                            </h1>
                        </div>
                    </div>
                    <div class="col-sm-9 col-md-9" id="DivA3" style="display: none;">
                        <div class="well col-sm-offset-0" style="color: black">
                            <h1 href="#">
                                i
                            </h1>
                        </div>
                    </div>
                    <div class="col-sm-9 col-md-9" id="DivAS1" style="display: none;">
                        <div class="well col-sm-offset-0">
                            <h1 href="#">
                                weerwedfdfsdfs
                            </h1>
                        </div>
                    </div>
                    <div class="col-sm-9 col-md-9" id="DivAS2" style="display: none;">
                        <div class="well col-sm-offset-0">
                            <h1 href="#">
                                ye
                            </h1>
                        </div>
                    </div>
                    <div class="col-sm-9 col-md-9" id="DivAS3" style="display: none;">
                        <div class="well col-sm-offset-0">
                            <h1 href="#">
                                y
                            </h1>
                        </div>
                    </div>
                </div> 
            </div>
            <!-- Comienza contenedor de miniaturas-->
            <div class="row"> 
                <marquee scrolldelay="-1" scrollamount="7" loop="infinite" onmouseout="this.start()" onmouseover="this.stop()">
                    <a href="http://www.monroe.com.mx/home/oespectrum" target="_blank">
                        <img class="img-rounded" style="margin-right: 15px;" title="OESpectrum" alt="Titulo de la entrada" src="../Recursos/imgs/minis/minis monroe/m1.png"/></a>
                    <a href="http://www.monroe.com.mx/home/reflex" target="_blank">
                        <img class="img-rounded" style="margin-right: 15px;" title="Reflex" alt="Titulo de la entrada"  src="../Recursos/imgs/minis/minis monroe/m2.png"/></a>
                    <a href="http://www.monroe.com.mx/home/max_air" target="_blank">
                        <img class="img-rounded" style="margin-right: 15px;" title="Max-Air" alt="Titulo de la entrada"  src="../Recursos/imgs/minis/minis monroe/m3.png"/></a>
                    <a href="http://www.monroe.com.mx/home/max_lift" target="_blank">
                        <img class="img-rounded" style="margin-right: 15px;" title="Max Lift" alt="Titulo de la entrada"  src="../Recursos/imgs/minis/minis monroe/m4.png"/></a>
                    <a href="http://www.monroe.com.mx/home/gas_magnum" target="_blank">
                        <img class="img-rounded" style="margin-right: 15px;" title="Gas-Magnum" alt="Titulo de la entrada"  src="../Recursos/imgs/minis/minis monroe/m5.png"/></a>
                    <a href="http://www.monroe.com.mx/home/monro_matic_plus" target="_blank">
                        <img class="img-rounded" style="margin-right: 15px;" title="Monro-Matic Plus" alt="Titulo de la entrada"  src="../Recursos/imgs/minis/minis monroe/m6.png"/></a>
                    <a href="http://www.monroe.com.mx/home/sensa_trac" target="_blank">
                        <img class="img-rounded" style="margin-right: 15px;" title="Sensa-Trac" alt="Titulo de la entrada"  src="../Recursos/imgs/minis/minis monroe/m7.png"/></a>
                </marquee>
                <div class="fondomarg degradadoazul"></div>
            </div>
            <!------Ventana modal------------>
            <div class="ventana">
                <div class="form">
                    <div class="cerrar"><a href="javascript:closeVentana();">Cerrar X</a></div>
                    <form>
                        <table>
                            <fieldset class="fD">
                                <legend class="lD"> Datos de la empresa   </legend>
                            </fieldset>
                            <fieldset class="fD">
                                <legend class="lD">Datos personales</legend>
                                Nombre <br/>
                                <input type="text" name="nombre" value="" />
                                <br/>
                                Apellidos <br/>
                                <input type="text" name="apellidos" value="" />
                                <br/>
                                Estado <br/>
                                <select>
                                    <option value="DIF">Distrito Federal</option>
                                    <option value="AGS">Aguascalientes</option>
                                    <option value="BCN">Baja California</option>
                                    <option value="BCS">Baja California Sur</option>
                                    <option value="CAM">Campeche</option>
                                    <option value="CHP">Chiapas</option>
                                    <option value="CHI">Chihuahua</option>
                                    <option value="COA">Coahuila</option>
                                    <option value="COL">Colima</option>
                                    <option value="DUR">Durango</option>
                                    <option value="GTO">Guanajuato</option>
                                    <option value="GRO">Guerrero</option>
                                    <option value="HGO">Hidalgo</option>
                                    <option value="JAL">Jalisco</option>
                                    <option value="MEX">M&eacute;xico</option>
                                    <option value="MIC">Michoac&aacute;n</option>
                                    <option value="MOR">Morelos</option>
                                    <option value="NAY">Nayarit</option>
                                    <option value="NLE">Nuevo Le&oacute;n</option>
                                    <option value="OAX">Oaxaca</option>
                                    <option value="PUE">Puebla</option>
                                    <option value="QRO">Quer&eacute;taro</option>
                                    <option value="ROO">Quintana Roo</option>
                                    <option value="SLP">San Luis Potos&iacute;</option>
                                    <option value="SIN">Sinaloa</option>
                                    <option value="SON">Sonora</option>
                                    <option value="TAB">Tabasco</option>
                                    <option value="TAM">Tamaulipas</option>
                                    <option value="TLX">Tlaxcala</option>
                                    <option value="VER">Veracruz</option>
                                    <option value="YUC">Yucat&aacute;n</option>
                                    <option value="ZAC">Zacatecas</option>
                                </select>
                                <br/>
                                Ciudad <br/>
                                <input type="text" name="Estado" value="" size="10" maxlength="9" />
                            </fieldset>
                        </table>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>
