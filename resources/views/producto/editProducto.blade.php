<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Editar producto</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        @livewireStyles
        <link href="{{ asset('css/styles.css') }}" rel="stylesheet"/>
    </head>
    <body id="page-top">
    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
        <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
        </symbol>
        <symbol id="info-fill" fill="currentColor" viewBox="0 0 16 16">
            <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
        </symbol>
        <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
            <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
        </symbol>
    </svg>
        <!-- Navigation-->
        <!-- <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
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
        </nav> -->
        @livewire('navigation-menu')

        <!-- FORMULARIO-->
        <section class="page-section" id="contact">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Editar producto</h2>
                </div>
                
                <form action="/producto/{{ $producto->id }}" method="POST" id="contactForm">
                    @csrf
                    @method('PATCH')
                    <div class="row align-items-stretch mb-5">
                        <div class="col-md-6">
                            <div class="form-group">
                                <!-- Nombre input-->
                                <input class="form-control mb-1" id="nombre" name="nombre" type="text" placeholder="Nombre del producto *" value="{{ old('nombre') ?? $producto->nombre }}" />
                                
                                @error('nombre')
                                    <!-- <p>{{ $message }}</p> -->
                                    <div class="alert alert-danger d-flex align-items-center p-2" role="alert">
                                        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                                        <div>
                                            {{ $message }}
                                        </div>
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <!-- Concepto input-->
                                <input class="form-control mb-1" id="concepto" name="concepto" type="text" placeholder="Concepto del producto *" value="{{ old('concepto') ?? $producto->concepto }}" />
                                
                                @error('concepto')
                                    <!-- <p>{{ $message }}</p> -->
                                    <div class="alert alert-danger d-flex align-items-center p-2" role="alert">
                                        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                                        <div>
                                            {{ $message }}
                                        </div>
                                    </div>
                                @enderror
                            </div>
                            
                            <!-- <div class="form-group">
                                <input class="form-control" id="servicio" name="servicio" type="text" placeholder="Servicio del producto *" data-sb-validations="required" />
                                <div class="invalid-feedback" data-sb-feedback="servicio:required">Servicio requerido.</div>
                            </div> -->

                            <div class="form-group">
                                <!-- Servicio input-->
                                <select class="form-control mb-1" id="servicio" name="servicio">
                                    <option value="{{ old('servicio') ?? $producto->servicio }}" hidden>{{ old('servicio') ?? $producto->servicio }}</option>
                                    <option value="F+M estudio">F+M estudio</option>
                                    <option value="Librettura">Librettura</option>
                                    <option value="Concrettura">Concrettura</option>
                                </select>

                                @error('servicio')
                                    <!-- <p>{{ $message }}</p> -->
                                    <div class="alert alert-danger d-flex align-items-center p-2" role="alert">
                                        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                                        <div>
                                            {{ $message }}
                                        </div>
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <!-- Precio input-->
                                <input class="form-control mb-1" id="precio" name="precio" type="text" placeholder="Precio del producto *" value="{{ old('precio') ?? $producto->precio }}" />

                                @error('precio')
                                    <!-- <p>{{ $message }}</p> -->
                                    <div class="alert alert-danger d-flex align-items-center p-2" role="alert">
                                        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                                        <div>
                                            {{ $message }}
                                        </div>
                                    </div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group form-group-textarea mb-md-0">
                                <!-- Descripcion input-->
                                <textarea class="form-control" id="descripcion" name="descripcion" placeholder="Descripción del producto *" >{{ old('descripcion') ?? $producto->descripcion }}</textarea>
                            </div>

                            @error('descripcion')
                                <!-- <p>{{ $message }}</p> -->
                                <div class="alert alert-danger d-flex align-items-center p-2 mt-1" role="alert">
                                    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                                    <div>
                                        {{ $message }}
                                    </div>
                                </div>
                            @enderror
                        </div>
                    </div>
                    
                    <div class="text-center"><button class="btn btn-primary btn-xl text-uppercase mt-5" id="submitButton" type="submit">Modificar Producto</button></div>
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
