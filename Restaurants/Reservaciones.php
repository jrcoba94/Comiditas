<?php include './Components/header.php'; ?>

<div style="position: relative">
            <div style="min-width:100%; height: 420px; margin-top: 0px; overflow: hidden">
                <img style="width: 100%" src="./Resource/images/reservation_banner.jpg" class="owl-bg-img" height="540" />
            </div>
        </div>

        <section class="block-content response-mw">
            <div class="col-lg-12 col-lg-offset-1 response-mw">
                <div class="tab-s col-lg-12" style="width:1020px;max-width:100%">
                    <ul class="tab">
                        <li><a class="tablinks" onclick="openCity(event, 'Reservacion')">Reservaciones</a></li>
                        <li><a class="tablinks" onclick="openCity(event, 'Pedido')">Pedidos</a></li>
                    </ul>
                </div>
                <br /><br /><br /><br />
                <div id="Reservacion" class=" tabcontent animated bounceInLeft go col-lg-6 " style="display:block;height: 950px; width: 420px;">
                    <h5>Fecha / Horario: </h5>
                    <form action="../Procesos/Reservacion.php">
                        <input id="fechaR" name="fechaR" type="date" style="height:26px" />&nbsp;&nbsp;&nbsp;&nbsp;<input id="horaR" name="horaR" type="time" style="height:25px" />
                        <br /><br />
                        <div>
                            <input type="checkbox" />&nbsp;&nbsp;Pago en efectivo &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <input id="pt" type="checkbox" class="animatedClick" data-target="ClickPay" onclick="pay()" />&nbsp;&nbsp;Pago con tarjeta
                        </div>
                        <br />
                        <h5>Restaurant: </h5>
                        <input id="restaurantR" name="restaurantR" type=text list=browsers placeholder="- Seleccine restauran -">
                        <datalist id=browsers>
                            <option> Google
                            <option> IE9
                        </datalist>
                        <br /><br />
                        <h5>Número de personas: </h5>
                        <input id="numeroR" name="numeroR" type="text" placeholder="Número de personas" />
                        <br /><br />
                        <h5>Nombre: </h5>
                        <input id="nombreR" name="nombreR" type="text" placeholder="Nombre" />
                        <br /><br />
                        <h5>E-mail: </h5>
                        <input id="emailR" name="emailR" type="email" placeholder="E-mail" />
                        <br /><br />
                        <h5>Teléfono: </h5>
                        <input id="telefonoR" name="telefonoR" type="tel" placeholder="Teléfono" />
                        <br /><br />
                        <h5>Comentarios:</h5>
                        <textarea id="comentarioR" name="comentarioR" class="textComentary"></textarea>
                        <br /><br />
                        <input type="submit" value="Reservar" />
                    </form>
                </div>

                <div id="Pedido" class="animatedParent tabcontent animated bounceInLeft go col-lg-6 " style="display:none;height: 950px; width: 420px;">
                    <h5>Restaurant: </h5>
                    <form action="../Procesos/pedido.php" method="post">
                        <input id="restaurantSP" name="restaurantSP" type=text list=browsers placeholder="- Seleccine restauran -">
                        <datalist id=browsers>
                            <option> Google
                            <option> IE9
                        </datalist>
                        <br /><br />
                        <h5>Dirección: </h5>
                        <input id="direccionSP" name="direccionSP" autocomplete="off" type="text" placeholder="Dirección" />
                        <br /><br />
                        <h5>Nombre: </h5>
                        <input id="nombreSP" name="nombreSP" type="text" autocomplete="off" placeholder="Nombre" />
                        <br /><br />
                        <h5>E-mail: </h5>
                        <input id="emailSP" name="emailSP" type="email" placeholder="E-mail" autocomplete="off" />
                        <br /><br />
                        <h5>Teléfono: </h5>
                        <input id="telefonoSP" name="telefonoSP" type="tel" placeholder="Teléfono" autocomplete="off"/>
                        <br /><br />
                        <div class="accordion">
                            <dl>
                                <dt>
                                    <a href="#accordion1" aria-expanded="false" aria-controls="accordion1" class="accordion-title accordionTitle js-accordionTrigger">Ordenar</a>
                                </dt>
                                <dd class="accordion-content accordionItem is-collapsed" id="accordion1" aria-hidden="true">
                                    <div class="col-lg-12" style="border:1px solid;border-color:lightgray;">
                                        <br />
                                        <h5>Nombre de pedido: </h5>
                                        <input id="nombrePO" name="nombrePO" type="text" placeholder="Nombre de la orden" autocomplete="off" />
                                        <br /><br />
                                        <h5>Cantidad: </h5>
                                        <input id="cantidadPO" name="cantidadPO" type="text" placeholder="Raciones" autocomplete="off"/>
                                        <br /><br />
                                        <h5>Comentarios:</h5>
                                        <textarea id="comentarioPO" name="comentarioPO" class="textComentary"></textarea>
                                        <br /><br />
                                    </div>
                                </dd>
                            </dl>
                        </div>

                        <input type="submit" value="Reservar" />
                    </form>
                </div>

                <div id="mess1" class="col-lg-6 " style="display:block">
                    <div style="position:absolute;height: 900px; width: 3px; background-color: #7d7d7d"></div>
                    <div class="col-lg-12">
                        <div id="slider" class="no-padding">
                            <div style="overflow:hidden" id="slider-carousel" class="boxed-slider">
                                <img style="width: 800px" src="./Resource/images/mesero-2-2.jpg" />
                                <img style="width: 800px" src="./Resource/images/0B1.jpg" />
                            </div>
                        </div>
                    </div>
                </div>

                <div id="mess" class="col-lg-6 animated ClickPay" style="display: none; height: 850px; width: 550px;">
                    <div style="position: absolute; height: 900px; width: 3px; background-color: #7d7d7d"></div>
                    <div class="col-lg-6" style="border-radius:0px 7px 7px 0px;width:100%;height:100%;background-color:rgba(128, 128, 128, 0.19); overflow:auto">
                        <br /><br />
                        <h5>Nombre del titular: </h5>
                        <input class="" type="text" placeholder="Nombre" />
                        <br /><br />
                        <h5>Número de tarjeta: </h5>
                        <input class="" type="text" placeholder="Número de tarjeta" />
                        <br /><br />
                        <h5>Fecha de expiración: </h5>
                        <input style="width:60px" class="" type="password" placeholder="Mes" />&nbsp;&nbsp;&nbsp;&nbsp;<input style="width:60px" class="" type="password" placeholder="Año" />
                        <br /><br />
                        <h5>Código de seguridad: </h5>
                        <input class="" type="password" placeholder="3 digitos" />

                        <br /><br />
                        <div>
                            <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                                    <input type="hidden" name="cmd" value="_xclick">
                                    <input type="hidden" name="business" value="jr.coba94@gmail.com">
                                    <input type="hidden" name="lc" value="ES">
                                    <input type="hidden" name="button_subtype" value="services">
                                    <input type="hidden" name="no_note" value="0">
                                    <input type="hidden" name="currency_code" value="MXN">
                                    <input type="hidden" name="bn" value="PP-BuyNowBF:btn_buynowCC_LG.gif:NonHostedGuest">
                                    <img src="ScanEmp/imgs/Reservaciones_img/PayPal.png" style="width: 170px; height: 55px" />
                                <br /><br />
                                <input type="image" src="https://www.paypalobjects.com/en_US/ES/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                                    <img alt="" border="0" src="https://www.paypalobjects.com/es_XC/i/scr/pixel.gif" width="1" height="1">
                                </form>
                        </div>
                        <br />
                        <!--<div class="accordion">
                            <dl>
                                <dt>
                                    <a href="#accordion1" aria-expanded="false" aria-controls="accordion1" class="accordion-title accordionTitle js-accordionTrigger"></a>
                                </dt>
                                <dd class="accordion-content accordionItem is-collapsed" id="accordion1" aria-hidden="true">
                                    <div class="col-lg-12" style="border:1px solid;border-color:lightgray;">
                                        <div class="col-lg-offset-1">
                                            <br />
                                            <h5>Nombre del titular: </h5>
                                            <input class="" type="text" placeholder="Nombre" />
                                            <br /><br />
                                            <h5>Número de tarjeta: </h5>
                                            <input class="" type="text" placeholder="Número de tarjeta" />
                                            <br /><br />
                                            <h5>Fecha de expiración: </h5>
                                            <input style="width:60px" class="" type="password" placeholder="Mes" />&nbsp;&nbsp;&nbsp;&nbsp;<input style="width:60px" class="" type="password" placeholder="Año" />
                                            <br /><br />
                                            <h5>Código de seguridad: </h5>
                                            <input class="" type="password" placeholder="3 digitos" />
                                            <br /><br /><br />
                                            <input type="submit" />
                                            <br /><br />
                                        </div>
                                    </div>
                                </dd>
                            </dl>
                        </div>-->

                        <div class="accordion">
                            <dl>
                                <dt>
                                    <a href="#accordion1" aria-expanded="false" aria-controls="accordion1" class="accordion-title accordionTitle js-accordionTrigger"><img src="ScanEmp/imgs/Reservaciones_img/openpay-pagos.png" style="width:190px;height:45px" /></a>
                                </dt>
                                <dd class="accordion-content accordionItem is-collapsed" id="accordion1" aria-hidden="true">
                                    <div class="col-lg-12" style="border:1px solid;border-color:lightgray;">
                                        <div style="background-color: white;">
                                            <form action="#" method="POST" id="payment-form">
                                                <div>
                                                    <br />
                                                    <div class="col-lg-offset-1">
                                                        <div class="pymnt-cntnt" style="height:270px;">
                                                            <div class="sctn-row">
                                                                <div class="sctn-col l">
                                                                    &nbsp;&nbsp;&nbsp;&nbsp;<label>Nombre del titular:</label><br />
                                                                    &nbsp;&nbsp;&nbsp;&nbsp;<input type="text" placeholder="Como aparece en la tarjeta" autocomplete="off" data-openpay-card="holder_name">
                                                                </div>
                                                                <div class="sctn-col">
                                                                    &nbsp;&nbsp;&nbsp;&nbsp;<label>Número de tarjeta:</label><br />
                                                                    &nbsp;&nbsp;&nbsp;&nbsp;<input type="text" autocomplete="off" data-openpay-card="card_number">
                                                                </div>
                                                            </div>
                                                            <br />
                                                            <div class="sctn-row">
                                                                <div class="sctn-col l">
                                                                    &nbsp;&nbsp;&nbsp;&nbsp;<label>Fecha de expiración</label>
                                                                    <div>
                                                                        &nbsp;&nbsp;&nbsp;&nbsp;<input style="width:50px" type="text" placeholder="Mes" data-openpay-card="expiration_month">
                                                                        &nbsp;&nbsp;&nbsp;&nbsp;<input style="width:50px" type="text" placeholder="Año" data-openpay-card="expiration_year">
                                                                    </div>
                                                                </div>
                                                                <br />
                                                                <div class="sctn-col cvv">
                                                                    &nbsp;&nbsp;&nbsp;&nbsp;<label>Código de seguridad</label><br />
                                                                    &nbsp;&nbsp;&nbsp;&nbsp;<input type="text" placeholder="3 dígitos" autocomplete="off" data-openpay-card="cvv2">
                                                                </div>
                                                            </div>
                                                            <br /><br />
                                                            <div class="openpay">
                                                                <div class="logo">&nbsp;&nbsp;&nbsp;&nbsp;Transacciones realizadas vía:&nbsp;&nbsp;&nbsp;<img src="ScanEmp/imgs/Reservaciones_img/openpay.png" /></div>
                                                                <div class="shield">&nbsp;&nbsp;&nbsp;&nbsp;Tus pagos se realizan de forma segura con encriptación <br /> &nbsp;&nbsp;&nbsp;&nbsp;de 256 bits&nbsp;&nbsp;&nbsp;<img src="ScanEmp/imgs/Reservaciones_img/security.png" /></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <br />
                                                <div style="text-align: center">
                                                    <a><input type="button" class="button_op" id="pay-button" value="Pagar" /></a>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </dd>
                            </dl>
                        </div>

                        <!--<div class="accordion">
                            <dl>
                                <dt>
                                    <a href="#accordion2" aria-expanded="false" aria-controls="accordion2" class="accordion-title accordionTitle js-accordionTrigger"><img src="ScanEmp/imgs/Reservaciones_img/PayPal.png" style="width: 130px; height: 45px" /></a>
                                </dt>
                                <dd class="accordion-content accordionItem is-collapsed" id="accordion2" aria-hidden="true">
                                    <div class="col-lg-12" style="border:1px solid;border-color:lightgray;">
                                        <br />
                                        <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                                            <input type="hidden" name="cmd" value="_xclick">
                                            <input type="hidden" name="business" value="jr.coba94@gmail.com">
                                            <input type="hidden" name="lc" value="ES">
                                            <input type="hidden" name="button_subtype" value="services">
                                            <input type="hidden" name="no_note" value="0">
                                            <input type="hidden" name="currency_code" value="MXN">
                                            <input type="hidden" name="bn" value="PP-BuyNowBF:btn_buynowCC_LG.gif:NonHostedGuest">
                                            <input type="image" src="https://www.paypalobjects.com/en_US/ES/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                                            <img alt="" border="0" src="https://www.paypalobjects.com/es_XC/i/scr/pixel.gif" width="1" height="1">
                                        </form>
                                        <br /><br />
                                    </div>
                                </dd>
                            </dl>
                        </div>-->
                    </div>
                </div>
            </div>
        </section>

        <!--  -->
        <style type="text/css">
        .tab-s {
            margin: 0;
            padding: 0;
            overflow: hidden;
            border: 1px solid #ccc;
            background-color: #f1f1f1;
        }
        /* Style the list */
        ul.tab {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            /*border: 1px solid #ccc;
            background-color: #f1f1f1;*/
        }

            /* Float the list items side by side */
            ul.tab li {
                float: left;
            }

                /* Style the links inside the list items */
                ul.tab li a {
                    display: inline-block;
                    color: black;
                    text-align: center;
                    padding: 14px 16px;
                    text-decoration: none;
                    transition: 0.3s;
                    font-size: 17px;
                }

                    /* Change background color of links on hover */
                    ul.tab li a:hover {
                        background-color: #ddd;
                        cursor: pointer;
                    }

                    /* Create an active/current tablink class */
                    ul.tab li a:focus, .active {
                        background-color: #ccc;
                    }
    </style>

    <script type="text/javascript">
        function openCity(evt, cityName) {
            // Declare all variables
            var i, tabcontent, tablinks;

            // Get all elements with class="tabcontent" and hide them
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }

            // Get all elements with class="tablinks" and remove the class "active"
            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }

            // Show the current tab, and add an "active" class to the link that opened the tab
            document.getElementById(cityName).style.display = "block";
            evt.currentTarget.className += " active";
        }
    </script>

    <script>
        function pay() {
            var m1 = document.getElementById('mess1');
            var m = document.getElementById('mess');
            var c = document.getElementById('pt');

            if (c.checked) {
                $('#mess1').removeClass('ClickPay bounceOutRight');
                $('#mess1').addClass('animated bounceOutRight go');
                m1.style.display = 'none';

                $('#mess').addClass('bounceInRight')
                m.style.display = 'block';
            }
            else {
                $('#mess1').removeClass('animated bounceOutRight go');
                $('#mess1').addClass('ClickPay bounceOutRight');
                m1.style.display = 'block';

                $('#mess').addClass('fadeOutRight');
                m.style.display = 'none';
            }
        }
</script>

<?php include './Components/footer.php'; ?>
