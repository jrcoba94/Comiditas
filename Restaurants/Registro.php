<?php include './Components/header.php'; ?>

<!-- form reg -->        
<div style="position: relative">
            <div style="max-width: 100%; height: 370px; margin-top: 0px; overflow: hidden">
                <img style="width: 100%" src="./Resource/images/Hunter.jpg" class="owl-bg-img" height="540" />
            </div>
        </div>

        <section class="block-content response-mw">
            <div class="col-lg-12" style="text-align:center">
                <h2>Registro</h2>
            </div>
            <div class="col-lg-12 col-lg-offset-1 response-mw">
                <br />
                <div class="animated bounceInLeft go col-lg-6 " style="height: 950px; width: 420px;">
                    <form action="../Procesos/add_User.php" method="post">
                        <div class="cont-fluid col-lg-12 col-lg-offset-2">
                            <div class="col-lg-4">
                                <input id="url" name="url" type="text" hidden="hidden"/>
                                <h5>Nombre: </h5>
                                <input id="nombre" name="nombre" type="text" placeholder="Nombre" autocomplete="off" />
                                <br /><br />
                                <h5>Contraseña: </h5>
                                <input id="contraseña" name="contraseña" type="password" placeholder="Contraseña" />
                                <br /><br />
                                <h5>Contraseña: </h5>
                                <input id="contraseñaR" name="contraseñaR" type="password" placeholder="Confirmar contraseña" />
                                <br /><br />
                                <h5>Teléfono: </h5>
                                <input id="telefono" name="telefono" type="text" placeholder="Teléfono" autocomplete="off" maxlength="10" />
                                <br /><br />
                                <h5>E-mail: </h5>
                                <input id="eMail" name="eMail" type="text" placeholder="E-mail" autocomplete="off"/>
                            </div>
                        </div>
                        <div class="col-lg-12" style="text-align:center">
                            <br /><br />
                            <a><input type="submit" value="Entrar" /></a>
                        </div>
                    </form>
                </div>

                <div id="mess1" class="col-lg-6 " style="display:block">
                    <div style="position:absolute;height: 800px; width: 3px; background-color: #7d7d7d"></div>
                    <div class="col-lg-12">
                        <div id="slider" class="no-padding">
                            <div style="overflow:hidden" id="slider-carousel" class="boxed-slider">
                                <img style="width: 600px" src="./Resource/images/Pescari1.png" />
                                <img style="width: 600px" src="./Resource/images/Culinary-Experience1.png" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end form reg -->

        <!-- accion exitosa --
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
        !-- end accion -->

<?php include './Components/footer.php'; ?>
