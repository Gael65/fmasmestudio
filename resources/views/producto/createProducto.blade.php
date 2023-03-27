<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>F+M estudio</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{ asset('css/styles.css') }}" rel="stylesheet"/>
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="#page-top">F+M estudio</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menú
                    <i class="fas fa-bars ms-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                        <li class="nav-item"><a class="nav-link" href="#services">Servicios</a></li>
                        <li class="nav-item"><a class="nav-link" href="#portfolio">Portafolio</a></li>
                        <li class="nav-item"><a class="nav-link" href="#about">Etapas</a></li>
                        <li class="nav-item"><a class="nav-link" href="#team">Nosotros</a></li>
                        <li class="nav-item"><a class="nav-link" href="#contact">Contacto</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- FORMULARIO-->
        <section class="page-section" id="contact">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Crear producto</h2>
                </div>
                
                <form action="/producto" method="POST" id="contactForm">
                    @csrf
                    <div class="row align-items-stretch mb-5">
                        <div class="col-md-6">
                            <div class="form-group">
                                <!-- Nombre input-->
                                <input class="form-control" id="nombre" name="nombre" type="text" placeholder="Nombre del producto *" />
                            </div>

                            <div class="form-group">
                                <!-- Concepto input-->
                                <input class="form-control" id="concepto" name="concepto" type="text" placeholder="Concepto del producto *" />
                            </div>
                            
                            <!-- <div class="form-group">
                                <input class="form-control" id="servicio" name="servicio" type="text" placeholder="Servicio del producto *" data-sb-validations="required" />
                                <div class="invalid-feedback" data-sb-feedback="servicio:required">Servicio requerido.</div>
                            </div> -->

                            <div class="form-group">
                                <!-- Servicio input-->
                                <select class="form-control" id="servicio" name="servicio">
                                    <option value="" hidden>Servicio del producto *</option>
                                    <option value="F+M estudio">F+M estudio</option>
                                    <option value="Librettura">Librettura</option>
                                    <option value="Concrettura">Concrettura</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <!-- Precio input-->
                                <input class="form-control" id="precio" name="precio" type="text" placeholder="Precio del producto *" />
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group form-group-textarea mb-md-0">
                                <!-- Descripcion input-->
                                <textarea class="form-control" id="descripcion" name="descripcion" placeholder="Descripción del producto *" ></textarea>
                            </div>
                        </div>
                    </div>
                    
                    <div class="text-center"><button class="btn btn-primary btn-xl text-uppercase" id="submitButton" type="submit">Crear Producto</button></div>
                </form>
            </div>
        </section>
        
        <!-- Footer-->
        <footer class="footer py-4">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 text-lg-start">Copyright &copy; F+M estudio 2023.</div>
                    <div class="col-lg-4 my-3 my-lg-0">
                        <a class="btn btn-dark btn-social mx-2" href="https://www.facebook.com/people/FM-estudio/100063446336432/?mibextid=ZbWKwL" aria-label="Facebook" target="_blank"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="https://www.instagram.com/fmasmestudio/" aria-label="Instagram" target="_blank"><i class="fab fa-instagram"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="https://www.tiktok.com/@fmasmestudio" aria-label="Tiktok" target="_blank"><i class="fab fa-tiktok"></i></a>
                    </div>
                </div>
            </div>
        </footer>
        
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="{{ asset('js/scripts.js') }}"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
