<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css" href="Style.css">
    <title>Recibo</title>
</head>
<body>
    <div class="recibo">
        <div class="cabeza">

            <div class="cabeza-parte1">
                <div class="contenedor1">
                    <img src="./Img/img1.png" alt="" class="img">
                </div>

                <div class="contenedor2">
                    <ul>
                        <li><i class="fa-solid fa-map-location-dot icon"></i>Calle 37A 45-53 Barzal Alto <br> La Azotea Villavicencio </li>
                        <li><i class="fa-solid fa-phone icon"></i>PBX: (608)6614000 <br> Para reporte de daños o <br> emergencias marque: 115 <br> (SOLO desde lines movistar) <br> LINEA GRATUITA nACIONAL: 018000918615</li>
                        <li><i class="fa-brands fa-whatsapp icon"></i>Linea emergencia <br> 24 Horas 316 027 8035</li>
                    </ul>
                </div>

                <div class="contenedor3">
                    <div class="columna-izq">
                        <h1 class="text1">CODIGO DEL CLIENTE</h1>
                        <h4 class="text2">CITE ESTE NUMERO PARA CONSULTA O PAGO</h4>
                    </div>
                    <div class="codigo-cliente">
                        <p class="text3"> www.eletrificadoradelmeta.com</p>
                        <div class="container-codigo">
                            <h3 class="codigo">123456789</h3>
                        </div>
                    </div>
                </div>
            </div>

            <div class="cabeza-parte2">
                <div class="advertencia">
                     <img src="./Img/img4.png" class="imgadv" alt="" >
                     <div class="textadv">
                        <p>
                            "El no pago de su factura de energía en las fechas estipuladas en el presente documento dará lugar a la suspensión del servicio por mora. contra esta decisión procede el recurso de reposición el cual deberá interponer en las oficinas de el cliente o canales de atención dispuestos por la electrificadora del meta SA ESP dentro de los cinco (05) días hábiles siguientes a la suspensión del servicio y en subsidio de apelación ante la Superintendencia de Servicios Públicos Domiciliarios" En caso de aparecer la palabra inmediato la suspensión del servicio por mora podría realizarse en cualquier momento"
                        </p>
                     </div>
                </div>

                <div class="sello">
                    <p>Espacio para Sello</p>
                </div>

                 <div class="sello-pagado" id="selloPagado">
                    <img src="./Img/Pagado.png" alt="Sello de Pagado">
                </div>
                
            </div>

        </div>

        <script src="script.js" class="pagado"></script>

        <div class="cuerpo">

            <div class="izquierda">
                <div class="cuadro-cliente">
                <?php
                if (isset($_SESSION['nombre_usuario'])) {
                    $nombreUsuario = $_SESSION['nombre_usuario'];
                    echo "<p>Nombre del Cliente:<strong>$nombreUsuario</strong></p>";
                    }
                ?>
                    <p>Dirección:<strong>Calle 123 Número 456 manzana F Barrio Eden</strong> </p>
                    <p>‎</p>
                     <p>Ciudad:<strong>Villavicencio</strong></p>
                </div>
                <h3 class="detalle-consumo">DETALLE DE CONSUMO</h3>
                <div class="grafica">
                    <div class="barra" style="height: 80%;">
                        <div class="barra-fill"></div>
                        <span class="nombre-arriba">80</span>
                        <span class="nombre-abajo">ENE</span>
                    </div>
                    <div class="barra" style="height: 60%;">
                        <div class="barra-fill"></div>
                        <span class="nombre-arriba">60</span>
                        <span class="nombre-abajo">FEB</span>
                    </div>
                    <div class="barra" style="height: 40%;">
                        <div class="barra-fill"></div>
                        <span class="nombre-arriba">40</span>
                        <span class="nombre-abajo">MAR</span>
                    </div>
                    <div class="barra" style="height: 70%;">
                        <div class="barra-fill"></div>
                        <span class="nombre-arriba">70</span>
                        <span class="nombre-abajo">ABR</span>
                    </div>
                    <div class="barra" style="height: 90%;">
                        <div class="barra-fill"></div>
                        <span class="nombre-arriba">90</span>
                        <span class="nombre-abajo">MAY</span>
                    </div>
                    <div class="barra" style="height: 30%;">
                        <div class="barra-fill"></div>
                        <span class="nombre-arriba">30</span>
                        <span class="nombre-abajo">JUN</span>
                    </div>
                </div>
                <div class="lectura">
                    <div class="anterior">
                        <p>(1)A-S  Lectura Anterior:27437</p>
                        <p>‎ ‎ ‎ ‎ ‎ ‎ ‎ 
                            ‎ ‎ ‎ ‎ ‎ Tipo de Lectura Con Lectura</p>
                    </div>
                    <div class="actual">
                        <p>Lectura Actual 27496</p>
                        <p>Anomalia 0</p>
                    </div>
                </div>
                <div class="espacio-en-blanco">
                </div>
                <div class="consumo-y-pago">
                    <div class="consumo">
                        <p>Consumo Promedio Ult. 6 Meses:98</p>
                        <p>Factura No. 202310282807737</p>
                        <p>Facturas atrasadas: 0</p>
                    </div>
                    <div class="pago">
                        <p>Ultimo Pago: $18940 27-10-23</p>
                        <p>Periodo: 08-09-2023/06-10-2023</p>
                        <p>Ruta:8-805303450</p>
                    </div>
                </div>
                <table colspan="6">
                    <tr>
                        <th id="borrar_borde" colspan="6">INFORMACION TECNICA</th>
                    </tr>
                    <tr>
                        <td id="borrar_borde_izq" colspan="3">MARCA CONTADOR(ES)</td>
                        <td colspan="2">NUMERO(S)</td>
                        <td id="borrar_borde_der" colspan="1">FACTOR</td>
                    </tr>
                    <tr>
                        <td id="borrar_borde_izq" colspan="3">ISK</td>
                        <td colspan="2">18-36680238</td>
                        <td id="borrar_borde_der" colspan="1">1</td>
                    </tr>
                    <tr>
                        <td id="borrar_borde" class="left-align" colspan="6">FACTURACION DE 30-OCT-2023</td>
                    </tr>
                    <tr >
                        <td id="borrar_borde_izq">ESTRATO</td>
                        <td class="left-align">1</td>
                        <td class="left-align">CLASE</td>
                        <td class="left-align">Urbano</td>
                        <td class="left-align">CICLO</td>
                        <td id="borrar_borde_der" class="left-align">22</td>
                    </tr>
                    <tr>
                        <td id="borrar_borde_izq">SERVICIO</td>
                        <td class="ampliar5">Residencial</td>
                        <td class="ampliar5">Codigo CIIU</td>
                        <td class="ampliar5">Gran ciudad</td>
                        <td class="ampliar5">ESTADO DEL PRECIO</td>
                        <td id="borrar_borde_der" class="ampliar5">SALDADA</td>
                    </tr>
                    <tr>
                        <th id="borrar_borde" colspan="6">INDICADORES DE CALIDAD</th>
                    </tr>
                    <tr>
                        <td id="borrar_borde_izq" class="left-align2" colspan="2">Cod. circuito</td>
                        <td colspan="1">VI0602</td>
                        <td class="left-align2" colspan="2">(HC)Horas Compensadas</td>
                        <td id="borrar_borde_der" colspan="1">0</td>
                    </tr>
                    <tr>
                        <td id="borrar_borde_izq" class="left-align2" colspan="2">Cod. transformador</td>
                        <td colspan="1">VIT726</td>
                        <td class="left-align2" colspan="2">(VC)Veces a Compensar</td>
                        <td id="borrar_borde_der" colspan="1">0</td>
                    </tr>
                    <tr>
                        <td id="borrar_borde_izq" class="left-align2" colspan="2">Grupo de calidad</td>
                        <td colspan="1">13</td>
                        <td class="left-align2" colspan="2">(CEC)Consumo estimado a compensar</td>
                        <td id="borrar_borde_der" colspan="1">113</td>
                    </tr>
                    <tr>
                        <td id="borrar_borde_izq" class="left-align2" colspan="2">(DIU)Duracion en horas de interrupciones</td>
                        <td colspan="1">7.01</td>
                        <td class="left-align2" colspan="2">(%t)Porcentaje de descuento del cargo</td>
                        <td id="borrar_borde_der" colspan="1">16</td>
                    </tr>
                    <tr>
                        <td id="borrar_borde_izq" class="left-align2" colspan="2">(FIU)Numero total de interrupciones</td>
                        <td colspan="1">12</td>
                        <td class="left-align2" colspan="2">(Dt)Cargo de Distribucion</td>
                        <td id="borrar_borde_der" colspan="1">168.42</td>
                    </tr>
                    <tr>
                        <td id="borrar_borde_izq"class="left-align2" colspan="2">(DIUG)Meta por duracion</td>
                        <td colspan="1">26.92</td>
                        <td class="left-align2" colspan="2">(FIUG)Meta por frecuencia</td>
                        <td id="borrar_borde_der" colspan="1">25</td>
                    </tr>
                    <tr>
                        <td id="borrar_borde" class="center" colspan="6">V/r a compensar $ 0</td>
                    </tr>
                    <tr>
                        <th id="borrar_borde" colspan="6">Costo Unitario de la prestacion del servicio EMSA ($ / KWh)</th>
                    </tr>
                    <tr>
                        <td id="borrar_borde_izq" colspan="2">CONCEPTO</td>
                        <td colspan="1"></td>
                        <td colspan="2">CONCEPTO</td>
                        <td id="borrar_borde_der" colspan="1"></td>
                    </tr>
                    <tr>
                        <td id="borrar_borde_izq" class="left-align2" colspan="2">
                            <span class="izq-concep">Compra energía al generador</span>
                            <span class="der-concep">G$</span>
                        </td>
                        <td colspan="1">378.33</td>
                        <td id="borrar_borde_izq" class="left-align2" colspan="2">
                            <span class="izq-concep">Perdidas reconocidas</span>
                            <span class="der-concep">PR$</span>
                        </td>
                        <td id="borrar_borde_der" colspan="1">68.22</td>
                    </tr>
                    <tr>
                        <td id="borrar_borde_izq" class="left-align2" colspan="2">
                            <span class="izq-concep">Transporte en el sistema de transmision nacional</span>
                            <span class="der-concep">T$</span>
                        </td>
                        <td colspan="1">47.02</td>
                        <td class="left-align2" colspan="2">
                            <span class="izq-concep">Otros costos asociados al mercado de energia</span>
                            <span class="der-concep">O$</span>
                        </td>
                        <td id="borrar_borde_der" colspan="1">19.5</td>
                    </tr>
                    <tr>
                        <td id="borrar_borde_izq" class="left-align2" colspan="2">
                            <span class="izq-concep">Transporte en el sistema de distribucion local</span>
                            <span class="der-concep">D$</span>
                        </td>
                        <td colspan="1">238.11</td>
                        <td class="left-align2" colspan="2">
                            <span class="izq-concep">Costo de comercializacion</span>
                            <span class="der-concep">C$</span>
                        </td>
                        <td id="borrar_borde_der" colspan="1">93.43</td>
                    </tr>
                    <tr>
                        <td id="borrar_borde_izq" class="left-align3" colspan="5">Total Costo unitario de prestacion del servicion(monomino) Nivel( 1)CU=G+T+D+Cv+PR+R</td>
                        <td id="borrar_borde_der" colspan="1">842.61</td>
                    </tr>
                    <tr >
                        <td id="borrar_borde_izq" class="left-align4" rowspan="2" colspan="1">Subsidio FOES</td>
                        <td class="left-align3">Consumo kWh</td>
                        <td class="left-align3">VR. Unitario kW</td>
                        <td>Factura</td>
                        <td class="centrado">Interes Moratorio Residencial</td>
                        <td id="borrar_borde_der">0,49%</td>
                    </tr>
                    <tr >
                        <td></td>
                        <td></td>
                        <td></td>
                        <td class="centrado">Interes Moratorio No Residencial</td>
                        <td id="borrar_borde_der" >2,35%</td>
                    </tr>
                </table>
            </div>
            <div class="derecha">
                <table class="table-der">
                    <tr>
                        <th id="borrar_borde"  class="der5" colspan="6">DATOS DE FINANCIACION</th>
                    </tr>
                    <tr>
                        <td id="borrar_borde_izq" class="left-align6" colspan="2">VALOR FINANCIACION</td>
                        <td colspan="1" class="ampliar"></td>
                        <td class="left-align6" colspan="2">CUOTA ACTUAL</td>
                        <td id="borrar_borde_der" colspan="1" class="ampliar"></td>
                    </tr>
                    <tr>
                        <td id="borrar_borde_izq" class="left-align6" colspan="2">SALDO FINANCIACION</td>
                        <td colspan="1" class="ampliar"></td>
                        <td class="left-align6" colspan="2">CUOTAS PENDIENTES</td>
                        <td id="borrar_borde_der" colspan="1" class="ampliar"></td>
                    </tr>
                    <tr>
                        <td id="borrar_borde_izq" class="left-align6" colspan="2">INTERESES %</td>
                        <td colspan="1" class="ampliar"></td>
                        <td class="left-align6" colspan="2">No. DE CUOTAS</td>
                        <td id="borrar_borde_der" colspan="1" class="ampliar"></td>
                    </tr>
                    <tr>
                        <td id="borrar_borde_izq" class="color" colspan="3">VALOR FINANCIACION</td>
                        <td id="borrar_borde_der" class="color" colspan="3"></td>
                    </tr>
                    <tr>
                        <td id="borrar_borde_izq" class="left-align6" colspan="2">SALDO A FAVOR</td>
                        <td colspan="1" class="ampliar">0$</td>
                        <td class="color2" colspan="2">SALDO EN RECLAMACION</td>
                        <td id="borrar_borde_der" colspan="1" class="ampliar2">0$</td>
                    </tr>
                    <tr>
                        <th id="borrar_borde" class="der2" colspan="6">DETALLE DE LA FACTURA</th>
                    </tr>
                </table>
                <div class="detalles-fact">
                    <div class="datos-fact">
                        <p>Liquidacion del consumo de energia:</p>
                        <p>313.24(Valor kWh con SUBS) X 59 (Consumo en kWh)</p>
                    </div>
                    <div class="valores">
                        <p>$18,481</p>
                    </div>
                </div>
                <div class="detalles-fact">
                    <div class="datos-fact">
                        <p>VALOR NETO:</p>
                        <p>Porcentaje de SUBSIDIO(60%)</p>
                        <p>Valor Porcentaje de SUBSIDIO</p>
                        <p>SUBTOTAL VALOR CONSUMO</p>
                        <p>OTROS CONCEPTOS:</p>
                        <p>Impuestos AP</p>
                    </div>
                    <div class="valores">
                        <p>$46,202</p>
                        <p>‎</p>
                        <p>$-27,721</p>
                        <p>$18,481</p>
                        <p>‎</p>
                        <p>$462</p>
                    </div>
                </div>
                <div class="detalles-fact">
                    <div class="datos-fact">
                        <p>SUBTOTAL VALOR OTROS</p>
                        <p>DESCUENTOS:</p>
                        <p>Ajuste A la Decena</p>
                        <p>Pago aplicado a factura</p>
                    </div>
                    <div class="valores">
                        <p>$462</p>
                        <p>‎</p>
                        <p>$-3</p>
                        <p>-$18,940</p>
                    </div>
                </div>
                <table class="table-der">
                    <tr>
                        <td id="borrar_borde" class="left-align2" colspan="6">
                            <span class="izq-concep2">SUBTOTAL VALORES DESCUENTOS</span>
                            <span class="der-concep2">$-18,943</span>
                        </td>
                    </tr>
                    <tr>
                        <td id="borrar_borde" class="color" colspan="6">
                            <span class="izq-concep2">SUBTOTAL POR CONCEPTOS DE ENERGIA</span>
                            <span class="der-concep2">$0</span>
                        </td>
                    </tr>
                    <tr>
                        <th id="borrar_borde" class="der" colspan="6">DETALLE PORTAFOLIO</th>
                    </tr>
                    <tr>
                        <td id="borrar_borde_izq" colspan="1" class="ampliar3">Convenio</td>
                        <td colspan="1" class="ampliar3">Capital</td>
                        <td colspan="1" class="ampliar3">Intereses</td>
                        <td colspan="1" class="ampliar3">Valor a pagar</td>
                        <td id="borrar_borde_der" class="ampliar3">No. Couta</td>
                    </tr>
                    <tr>
                        <td id="borrar_borde_izq"></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td id="borrar_borde_der"></td>
                    </tr>
                    <tr>
                        <td id="borrar_borde_izq"></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td id="borrar_borde_der"></td>
                    </tr>
                    <tr>
                        <td id="borrar_borde_izq"></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td id="borrar_borde_der"></td>
                    </tr>
                    <tr>
                        <td id="borrar_borde_izq"></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td id="borrar_borde_der"></td>
                    </tr>
                    <tr>
                        <td id="borrar_borde" class="color" colspan="6">
                            <span class="izq-concep3">SUBTOTAL POR CONCEPTOS DE PORTAFOLIO $</span>
                            <span class="der-concep3">$0</span>
                        </td>
                    </tr>
                    <tr>
                        <th id="borrar_borde_izq" colspan="2" class="ampliar4">Pague antes de</th>
                        <th colspan="2" class="ampliar4">Suspension desde</th>
                        <th id="borrar_borde_der" colspan="2" class="ampliar4">TOTAL A PAGAR</th>
                    </tr>
                    <tr>
                        <td id="borrar_borde_izq" colspan="2" class="celda-con-ovalo">
                            <div class="ovalo">24-OCT-2023</div>
                        </td>
                        <td colspan="2">25-OCT-2023</td>
                        <td id="borrar_borde_der" colspan="2" class="celda-con-ovalo">
                            <div class="ovalo">$0</div>
                        </td>
                    </tr>
                </table>
                <div class="cuadro-impuesto">
                    <p>Impuesto AP Acuerdo 515/Dic-21</p>
                </div>
                <div class="firma">
                    <img src="./Img/img3.png" alt="" class="img3">
                    <h3 class="gerente1">EDWIN DAVID GUZMAN BOHORQUEZ</h3>
                    <h3 class="gerente2">FIRMA GERENTE (E)</h3>
                </div>
            </div>
        </div>

        <div class="piepagina">

            <hr>

            <div class="pie-parte1">
                <h2 class="textp-1">PERIODO FACTURADO</h2>
                <h2 class="textp-2">06-09-203/06-10-2023</h2>
                <h3 class="textp-3">Codigo del cliente</h3>
                <h2 class="textp-4">123456789</h2>
                <h3 class="textp-5">Fecha de vencimiento</h3>
                <h2 class="textp-6">24-OCT-2023</h2>
                <h3 class="textp-7">Valor a pagar</h3>
                <h2 class="textp-8">$0</h2>
            </div>

            <div class="pie-parte2">
                <div class="contenedor4">
                    <img src="./Img/Img2.jpg" alt="" class="img2">
                </div>
                <div class="codigo2">
                    <h3>415770999800244980200282807737390000000000000</h3>
                </div>
                <div class="contenedor5">
                    <img src="./Img/img1.png" alt="" class="img3">
                </div>
                <div class="text4">
                    <h3>VIGILADO SUPERSERVICIOS</h3>
                </div>
            </div>

        </div>

    </div>
</body>
<a href="index.html" class="back-button">Regresar</a>
<button id="botonPagar">Pagar</button>
</html>