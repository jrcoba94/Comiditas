        <!-- FOOTER -->
        <footer class="background-dark text-grey bkp-04">
            <div class="footer-content">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="widget clearfix widget-categories">
                                <form method="post" action="Contacto.php" id="contactform">
                                    <input id="name" name="name" class="textName" type="text" placeholder="Nombre" />
                                    <br /><br />
                                    <input id="email" name="email" class="textEmail" type="email" placeholder="E-mail" />
                                    <br /><br /><br /><br />
                                    <input id="submit" name="enviar" class="submitHB submitB" type="submit" />
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <textarea id="comment" name="comment" class="textComentary" placeholder="Comentarios"></textarea>
                        </div>
                        <div class="col-lg-3">
                            <div class="widget clearfix widget-contact-us">
                                <h4 class="widget-title">Contactanos</h4>
                                <ul class="list-large list-icons">
                                    <li>
                                        <i class="fa fa-map-marker"></i>
                                        <strong>Dirección:</strong> Call. 31 x 56 y 48 Altabrisa, No. 831
                                        <br />
                                        Mérida, Yuc 97425
                                    </li>
                                    <li><i class="fa fa-phone"></i><strong>Tel:</strong> (999) 486-2372 </li>
                                    <li>
                                        <i class="fa fa-clock-o"></i>Lunes - Viernes: <strong>09:00 - 18:00</strong>
                                        <br />
                                        Sábado: <strong>09:00 - 14:00</strong>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- END FOOTER -->
    </div>

    <!-- login -->
    <div id="mw1" class="col-lg-12" style="display:none;position:relative">
        <div class="container">
            <div class="lb-register">
                <div style="height: 3px"></div><br />
                <div style="text-align: right; width: 400px; height: 40px; background-color: black;"></div><div>
                    <br />
                    <h4 style="color: black; text-align: center;">Login</h4>
                    <br />
                    <div class="col-lg-offset-1">
                        <form action="../Procesos/Login.php" method="post">
                            <table>
                                <tr>
                                    <td>E-mail: </td>
                                    <td>
                                        &nbsp;&nbsp;<input id="emailL" name="emailL" type="text" placeholder="E-mail" />
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <br />
                                    </td>
                                </tr>
                                <tr>
                                    <td>Contraseña: </td>
                                    <td>
                                        &nbsp;&nbsp;<input id="contraseñaL" name="contraseñaL" type="password" placeholder="Contraseña" />
                                    </td>
                                </tr>
                            </table>
                        </form>
                    </div>
                </div>
                <br />
                <div style="text-align: center">
                    <a>
                        <input type="button" value="Entrar" style="border-radius:10px" />
                    </a>
                </div>
                <br /><br />
                <div>
                    <div class="col-lg-12" style="width: 400px; height: 2px; background-color: gray"></div>
                    <br />
                    <div class="col-lg-12" style="text-align: center">
                        <strong>¿No estas registrado?</strong><br />
                        <a href="Registro.html">Registro</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end login -->

    <!-- CONFIRM COMENTARY --
        <div id="ms1" class="lb-cover col-md-12">
            <div class="container">
                <div class="col-lg-4"></div>
                <div class="col-md-4">
                    <div class="ms-a-success fadeInRightBig">
                        <div style="height: 3px"></div>
                        <div style="margin-left: 3px; margin-right: 3px; text-align: right; width: 394px; height: 40px; background-color: black; border-radius: 12px 12px 0px 0px">
                        </div>
                        <br />
                        <div class="col-lg-offset-1" style="color: black">
                            <a>Tu mensaje se ha enviado con éxito.&nbsp;&nbsp;&nbsp;&nbsp;<i><img style="width: 20%" src="../ScanEmp/imgs/ico/free.png" /></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4"></div>
            </div>
        </div>
        !-- END CONFFIRM COMENTARY -->

    <!-- INIT PAGE -->
    <a class="gototop gototop-button" href="#sb" style="display: none;"><i class="fa fa-chevron-up"></i></a>
    <!-- END INIT PAGE -->
    
    <script type="text/javascript">

        //function mostrarVentana() {
        //    var b = document.getElementById('mw1');
        //    var c = b.style.display = "block";

        //    if (window.addEventListener) // older FF
        //        window.addEventListener('DOMMouseScroll', preventDefault, false);
        //    window.onwheel = preventDefault; // modern standard
        //    window.onmousewheel = document.onmousewheel = preventDefault; // older browsers, IE
        //    window.ontouchmove = preventDefault; // mobile
        //    document.onkeydown = preventDefaultForScrollKeys;
        //}

        function mSuccess() {
            setTimeout(function () {
                $('#ms1').fadeIn(1500);
            }, 1000)
            setTimeout(function () {
                $('#ms1').fadeOut(1500);
            }, 5000)
        }

        //function ocultarVentana() {
        //    var b = document.getElementById('mw1');
        //    b.style.display = "none";

        //    if (window.removeEventListener)
        //        window.removeEventListener('DOMMouseScroll', preventDefault, false);
        //    window.onmousewheel = document.onmousewheel = null;
        //    window.onwheel = null;
        //    window.ontouchmove = null;
        //    document.onkeydown = null;
        //}

        var keys = { 37: 1, 38: 1, 39: 1, 40: 1 };

        function preventDefault(e) {
            e = e || window.event;
            if (e.preventDefault)
                e.preventDefault();
            e.returnValue = false;
        }

        function preventDefaultForScrollKeys(e) {
            if (keys[e.keyCode]) {
                preventDefault(e);
                return false;
            }
        }
    </script>

    <script type="text/javascript">
        function link() {
            var lin = window.location;
            $("#url").val(lin);
        };
    </script>
    
    <script src="./Resource/js/contact.js"></script>
    <script src="./Resource/js/jquery-1.11.2.min.js"></script>
    <script src="./Resource/js/plugins.js"></script>
    <script src="./Resource/js/theme-functions.js"></script>
    <script src="./Resource/js/custom.js"></script>
</body>
</html>
