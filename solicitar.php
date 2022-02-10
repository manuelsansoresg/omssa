<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>Nosotros</title>

    <!-- Favicon  -->
    <link rel="icon" href="assets/img/favicon/logo_web.ico">

    <!-- ***** All CSS Files ***** -->

    <!-- Style css -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/rangeslider.css">

</head>

<body class="contact-page">
    <!--====== Scroll To Top Area Start ======-->
    <div id="scrollUp" title="Scroll To Top">
        <i class="fas fa-arrow-up"></i>
    </div>
    <!--====== Scroll To Top Area End ======-->

    <div class="main">

        <?php include('partials/header_clean.php') ?>

        <!--====== Contact Area Start ======-->
        <section id="contact" class=" contact-area  ptb_100 mt-3">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-7 text-center">
                        <!-- Section Heading -->
                        <div class="mt-3">
                            <h2>Como quieras, queremos</h2>
                            <p class="d-none d-sm-block mt-4">Pide tu crédito de la forma que quieras.</p>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-12 col-md-8">
                        <form class="form-horizontal" wire:submit.prevent="store">
                            <div class="card mb-3">
                                <div class="card-header">
                                    <h3 class="solicitar card-title"><span>Generales</span></h3>
                                </div>

                                <div class="card-body">
                                    <div class="form-group row">
                                        <input type="hidden" id="type_form_crm" value="1">
                                        <label for="inputConvenio" class="col-sm-3 col-form-label">Lugar de trabajo</label>
                                        <div class="col-sm-9" wire:ignore>
                                            <select data-id="data.agreement_id" data-emit="setAgreement" class="form-control select2 watch" style="width: 100%;">
                                                <option value="">Escribe para buscar</option>
                                                <option value="1">Gobierno de Yucatán</option>
                                            </select>
                                        
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="inputEmail3" class="col-sm-3 col-form-label">*Nombres</label>
                                        <div class="col-sm-9">
                                            <input style="text-transform: uppercase;" wire:model="data.nombre" onkeyup="mayus(this);" id="name" type="text" placeholder="" class="capitalize form-control input-md" required>
                                        </div>

                                    </div>

                                    <div class="form-group row">
                                        <label for="inputEmail3" class="col-sm-3 col-form-label">*Primer apellido</label>
                                        <div class="col-sm-9">
                                            <input style="text-transform: uppercase;" wire:model="data.apellido_1" onkeyup="mayus(this);" id="lastname" type="text" placeholder="" class="capitalize form-control input-md" required>
                                        </div>

                                    </div>
                                    <div class="form-group row">
                                        <label for="inputEmail3" class="col-sm-3 col-form-label">Segundo apellido</label>
                                        <div class="col-sm-9">
                                            <input style="text-transform: uppercase;" wire:model="data.apellido_2" onkeyup="mayus(this);" id="secondlastname" type="text" placeholder="Opcional" class="capitalize form-control input-md">
                                        </div>

                                    </div>

                                    <div class="form-group row">
                                        <label for="inputEmail3" class="col-sm-3 col-form-label">*Celular</label>
                                        <div class="col-sm-9">
                                            <input wire:model="data.celular" type="number" placeholder="" class="capitalize form-control input-md" minlength="10" maxlength="10" required>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="inputEmail3" class="col-sm-3 col-form-label">Correo electrónico</label>
                                        <div class="col-sm-9">
                                            <input wire:model="data.email" type="email" placeholder="Opcional" class="capitalize form-control input-md">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card mb-3">
                                <div class="card-header">
                                    <h3 class="solicitar card-title">Crédito</h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <div class="form-group row">
                                        <label for="inputEmail3" class="col-sm-3 col-form-label">Sueldo
                                          
                                        </label>

                                        <div class="col-sm-9">
                                            <input type="text" wire:keydown="setCapacidadPago()" class="form-control" wire:model="sueldo_neto" placeholder="Neto, después de deducciones ">
                                        </div>
                                    </div>

                                  
                                    <hr>

                                    
                                    

                                    <div class="form-group row" style="">
                                        <label for="monto-maximo" class="col-sm-3 col-form-label"></label>
                                        <div class="col-sm-9">
                                            <div class="text-center mt-2">
                                                <div class="d-flex justify-content-between">
                                                    <div class="text-muted h5">
                                                        <i class="fas fa-chevron-down"></i>
                                                    </div>

                                                    <div class="text-muted h5">
                                                        <i class="fas fa-chevron-down"></i>
                                                    </div>
                                                </div>
                                            </div>

                                           

                                            <div class="range-wrap">
                                                <div class="range-value" id="rangeS"></div>
                                                <input class="range" id="range" type="range" data-id="rangeS" 
                                                min="4000" max="40000" step="1000"  value="40000"
                                                >
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group row d-none">
                                        <label for="pago-periodico" class="col-sm-3 col-form-label">Préstamo</label>

                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="prestamo" value="40000" wire:model="loan" readonly>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="plazo-maximo" class="col-sm-3 col-form-label">Plazo
                                           
                                        </label>
                                        <div class="col-sm-9">

                                            <select class="form-control watch" id="calculator-plazo-maximo-landing">
                                                <option value="">Selecciona un plazo</option>
                                                <option value="24"> 24 </option>
                                                <option value="36"> 36 </option>
                                                <option value="48"> 48</option>
                                                        
                                            </select>

                                           
                                        </div>
                                    </div>

                                    <div class="form-group row d-none">
                                        <label for="pago-periodico" class="col-sm-3 col-form-label">Pago
                                           </label>

                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" wire:model="data_credit.pago_periodico" name="pago_periodico" readonly>
                                        </div>
                                    </div>

                                    <div class="row justify-content-center mt-3 mb-3">
                                        <div class="col-12 col-md-4 text-center">
                                            <p>Tu préstamo:</p>
                                            <h3 class="solicitar" id="pagoprestamo"></h3>

                                            <p>Pago:</p>
                                            <h3 class="solicitar" id="pagoplazo">
                                               0
                                            </h3>
                                            <p>pesos </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header">
                                    <h3 class="solicitar card-title">Mensaje</h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <div class="form-group row">
                                        <label for="inputEmail3" class="col-sm-3 col-form-label">Queremos saber de ti</label>
                                        <div class="col-sm-9">
                                            <textarea placeholder="Opcional" wire:model="data.comment" onkeyup="mayus(this);" cols="30" rows="5" class="form-control"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row ">
                                <div class="col-12 text-center">
                                    <div wire:loading wire:target="store">
                                        <div class="fa-3x">
                                            <i class="fas fa-circle-notch fa-spin"></i>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="row justify-content-center mt-3 mb-3">
                                <div class="col-12 col-md-4">
                                    <input type="hidden" value="" id="lead_is_edit">
                                    <input type="submit" value="Continuar" class="btn btn-lg btn-primary btn-block">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <?php include('partials/footer.php') ?>
    </div>

    <!-- ***** All jQuery Plugins ***** -->

    <!-- jQuery(necessary for all JavaScript plugins) -->
    <script src="assets/js/jquery/jquery.min.js"></script>

    <!-- Bootstrap js -->
    <script src="assets/js/bootstrap/popper.min.js"></script>
    <script src="assets/js/bootstrap/bootstrap.min.js"></script>

    <!-- Plugins js -->
    <script src="assets/js/plugins/plugins.min.js"></script>
    <script src="assets/js/rangeslider.min.js"></script>
    <!-- Active js -->
    <script src="assets/js/active.js"></script>
    
</body>

</html>