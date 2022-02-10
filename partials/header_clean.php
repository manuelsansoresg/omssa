<?php
 require('constant.php')
?>
<!-- ***** Header Start ***** -->
<header class="navbar navbar-sticky navbar-expand-lg navbar-dark shadow">
            <div class="container position-relative">
                <a class="navbar-brand" href="index.html">
                    <img class="navbar-brand-regular" src="assets/img/logo_web.png" alt="brand-logo">
                    <img class="navbar-brand-sticky" src="assets/img/logo_web.png" alt="sticky brand-logo">
                </a>
                <button class="navbar-toggler d-lg-none" type="button" data-toggle="navbarToggler" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="navbar-inner">
                    <!--  Mobile Menu Toggler -->
                    <button class="navbar-toggler d-lg-none" type="button" data-toggle="navbarToggler" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <nav>
                        <ul class="navbar-nav" id="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link text-dark" href="<?php echo $path  ?>">Inicio</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-dark" href="<?php echo $path  ?>solicitar.php">Solicitar</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-dark" href="<?php echo $path  ?>#credit">Crédito</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-dark" href="<?php echo $path  ?>#contact">Contacto</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle text-dark" href="javascript:;" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Otros
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <li>
                                        <a class="dropdown-item text-dark" href="<?php echo $path  ?>nosotros.php">Nosotros</a>
                                    </li>

                                </ul>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link scroll" href="#login">Ingresar</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </header>
        <!-- ***** Header End ***** -->