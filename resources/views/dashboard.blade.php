<x-app-layout>
    <!-- Masthead-->
    <header class="masthead">
        <div class="container">
            <div class="masthead-subheading">¡Bienvenido!</div>
            <div class="masthead-heading text-uppercase">Creando para ti</div>
            <a class="btn btn-primary btn-xl text-uppercase" href="#services">Información</a>
        </div>
    </header>
    <!-- Services-->
    <section class="page-section" id="services">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Servicios</h2>
                <h3 class="section-subheading text-muted">Contribuimos de la mejor manera a la materialización de tu sueño.</h3>
            </div>
            <div class="row text-center">
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fas fa-circle fa-stack-2x circle-icon"></i>
                        <i class="fas fa-house-chimney-window fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="my-3">F+M estudio</h4>
                    <p class="text-muted">Arquitectura, interiorismo y construcción. Nos dedicamos a realizar el proyecto arquitectónico de tus sueños.</p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fas fa-circle fa-stack-2x circle-icon"></i>
                        <i class="fas fa-book fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="my-3">Librettura</h4>
                    <p class="text-muted">Personalizamos tu sueño en madera. Nos dedicamos a diseñar tu imagen en vectores para imprimir en madera.</p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fas fa-circle fa-stack-2x circle-icon"></i>
                        <i class="fas fa-seedling fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="my-3">Concrettura</h4>
                    <p class="text-muted">Personalizamos tu sueño en concreto. Nos dedicamos a fabricar tu idea y plasmarla en un objeto hecho con concreto.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Portfolio Grid-->
    <section class="page-section bg-light" id="portfolio">
        <div class="container">
            <div class="text-center mb-3">
                <h2 class="section-heading text-uppercase">Portafolio</h2>
                <h3 class="section-subheading text-muted mb-3">Nuestros trabajos son tus sueños hechos realidad.</h3>
                @can('create', App\Models\Producto::class)
                    <a href="{{ route('producto.create') }}">Crear producto</a>
                @endcan
            </div>
            <div class="row">
                @foreach($productos as $producto)
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item -->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal{{ $producto->id }}">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/portfolio/residencial1.png" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">{{ $producto->nombre }}</div>
                                <div class="portfolio-caption-subheading text-muted">{{ $producto->categoria->nombre }}</div>
                                <form action="/producto/{{ $producto->id }}" class="formulario-editar" method="GET">
                                    @csrf
                                    <!-- @method('PATCH') -->
                                    {{ count($producto->users) }}
                                    <button id="submitButton" type="submit">
                                        <i id="{{ $producto->id }}" onClick="toggleFunction(this)" class="fa-regular fa-heart circle-icon"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- About-->
    <section class="page-section" id="about">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Etapas del proceso de diseño</h2>
                <h3 class="section-subheading text-muted">Para obtener resultados acertados seguimos las etapas adecuadas.</h3>
            </div>
            <ul class="timeline">
                <li>
                    <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/etapa1.JPG" alt="..." /></div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4>1er Etapa</h4>
                            <h4 class="subheading">Análisis del caso</h4>
                        </div>
                        <div class="timeline-body"><p class="text-muted">En esta etapa se estudian las necesidades y requerimientos del cliente y del mismo proyecto, así como las peculariedades del sitio.</p></div>
                    </div>
                </li>
                <li class="timeline-inverted">
                    <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/etapa2.JPG" alt="..." /></div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4>2da Etapa</h4>
                            <h4 class="subheading">Conceptualización</h4>
                        </div>
                        <div class="timeline-body"><p class="text-muted">Se trata de la primera fase creativa de donde surge de la idea inicial del proyecto.</p></div>
                    </div>
                </li>
                <li>
                    <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/etapa3.JPG" alt="..." /></div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4>3er Etapa</h4>
                            <h4 class="subheading">Anteproyecto</h4>
                        </div>
                        <div class="timeline-body"><p class="text-muted">Es la primer propuesta a presentar al cliente, es flexible y puede llegar a tener modificaciones antes de su  versión definitiva.</p></div>
                    </div>
                </li>
                <li class="timeline-inverted">
                    <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/etapa4.JPG" alt="..." /></div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4>4ta Etapa</h4>
                            <h4 class="subheading">Proyecto arquitectónico</h4>
                        </div>
                        <div class="timeline-body"><p class="text-muted">Es el conjunto de planos, detalles y visualizaciones 3D, que plasman en conjunto la propuesta final de la edificación.</p></div>
                    </div>
                </li>
                <li>
                    <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/etapa5.JPG" alt="..." /></div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4>5ta Etapa</h4>
                            <h4 class="subheading">Proyecto ejecutivo</h4>
                        </div>
                        <div class="timeline-body"><p class="text-muted">Es la fase final del proceso, en donde se dan todas las específicaciones necesarias para que el proyecto se pueda construir sin mayores contratiempos.</p></div>
                    </div>
                </li>
                <li class="timeline-inverted">
                    <div class="timeline-image">
                        <h4>
                            Hacemos
                            <br />
                            realidad tu
                            <br />
                            proyecto
                        </h4>
                    </div>
                </li>
            </ul>
        </div>
    </section>
    <!-- Team-->
    <section class="page-section bg-light" id="team">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Nosotros</h2>
                <h3 class="section-subheading text-muted">En conjunto formamos F+M estudio.</h3>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="team-member">
                        <img class="mx-auto rounded-circle" src="assets/img/team/librettura.JPG" alt="..." />
                        <h4>Librettura</h4>
                        <p class="text-muted">Diseño personalizado</p>
                        <a class="btn btn-dark btn-social mx-2" href="https://www.instagram.com/librettura/" aria-label="Instagram" target="_blank"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="team-member">
                        <img class="mx-auto rounded-circle" src="assets/img/team/fmasm.jpg" alt="..." />
                        <h4>F+M estudio</h4>
                        <p class="text-muted">Arquitectura, diseño interior y construcción</p>
                        <a class="btn btn-dark btn-social mx-2" href="https://www.facebook.com/people/FM-estudio/100063446336432/?mibextid=ZbWKwL" aria-label="Facebook" target="_blank"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="https://www.instagram.com/fmasmestudio/" aria-label="Instagram" target="_blank"><i class="fab fa-instagram"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="https://www.tiktok.com/@fmasmestudio" aria-label="Tiktok" target="_blank"><i class="fab fa-tiktok"></i></a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="team-member">
                        <img class="mx-auto rounded-circle" src="assets/img/team/concrettura.JPG" alt="..." />
                        <h4>Concrettura</h4>
                        <p class="text-muted">Creación en concreto</p>
                        <a class="btn btn-dark btn-social mx-2" href="https://www.instagram.com/concrettura/" aria-label="Instagram" target="_blank"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 mx-auto text-center"><p class="large text-muted">Uno de nuestros principios fundamentales de enfoque al momento de desarrollar un proyecto es y será “Arquitectura amigable con el ambiente”.</p></div>
            </div>
        </div>
    </section>

    <!-- Contact-->
    <section class="page-section" id="contact">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Contacto</h2>
                <h3 class="section-subheading text-muted">Contáctanos para cumplir tus sueños.</h3>
            </div>
            <!-- * * * * * * * * * * * * * * *-->
            <!-- * * SB Forms Contact Form * *-->
            <!-- * * * * * * * * * * * * * * *-->
            <!-- This form is pre-integrated with SB Forms.-->
            <!-- To make this form functional, sign up at-->
            <!-- https://startbootstrap.com/solution/contact-forms-->
            <!-- to get an API token!-->
            <!-- <form id="contactForm" data-sb-form-api-token="API_TOKEN">
                <div class="row align-items-stretch mb-5">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input class="form-control" id="name" type="text" placeholder="Tu nombre *" data-sb-validations="required" />
                            <div class="invalid-feedback" data-sb-feedback="name:required">Nombre requerido.</div>
                        </div>
                        <div class="form-group">
                            <input class="form-control" id="email" type="email" placeholder="Tu Email *" data-sb-validations="required,email" />
                            <div class="invalid-feedback" data-sb-feedback="email:required">Email requerido.</div>
                            <div class="invalid-feedback" data-sb-feedback="email:email">Email no válido.</div>
                        </div>
                        <div class="form-group mb-md-0">
                            <input class="form-control" id="phone" type="tel" placeholder="Tu celular *" data-sb-validations="required" />
                            <div class="invalid-feedback" data-sb-feedback="phone:required">Número de celular requerido.</div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group form-group-textarea mb-md-0">
                            <textarea class="form-control" id="message" placeholder="Escribe un mensaje *" data-sb-validations="required"></textarea>
                            <div class="invalid-feedback" data-sb-feedback="message:required">Mensaje requerido.</div>
                        </div>
                    </div>
                </div>
                <!-- Submit success message
                <!-- This is what your users will see when the form
                <!-- has successfully submitted
                <div class="d-none" id="submitSuccessMessage">
                    <div class="text-center text-white mb-3">
                        <div class="fw-bolder">¡Gracias por ponerte en contacto con nosotros!</div>
                        <!-- To activate this form, sign up at
                        <br />
                        <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a> 
                    </div>
                </div>
                <!-- Submit error message
                <!-- This is what your users will see when there is an error submitting the form
                <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Error en el envío del mensaje!</div></div>
                <!-- Submit Button
                <div class="text-center"><button class="btn btn-primary btn-xl text-uppercase disabled" id="submitButton" type="submit">Enviar mensaje</button></div>
            </form> -->
            <div class="text-center">
                <a href="mailto:fmasmestudio@gmail.com?subject=Solicito información">
                    <button class="btn btn-primary btn-xl text-uppercase" id="submitButton">Enviar mensaje</button>
                </a>
            </div>
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
    <!-- Portfolio Modals-->
    <!-- Portfolio item modal popup-->
    @foreach($productos as $producto)
        <div class="portfolio-modal modal fade" id="portfolioModal{{ $producto->id }}" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="{{ asset('assets/img/close-icon.svg') }}" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">{{ $producto->nombre }}</h2>
                                    <p class="item-intro text-muted">{{ $producto->concepto }}</p>
                                    @can('update', $producto)
                                        <a href="/producto/{{ $producto->id }}/edit">Modificar</a>
                                    @endcan
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/residencial2.png" alt="..." />
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/residencial3.png" alt="..." />
                                    <p>{{ $producto->descripcion }}</p>

                                    <ul class="list-inline">
                                        <li>
                                            <strong>Categoría:</strong>
                                            {{ $producto->categoria->nombre }}
                                        </li>
                                        <li>
                                            <strong>Precio:</strong>
                                            {{ $producto->precio }}
                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        Cerrar producto
                                    </button>
                                    @can('delete', $producto)
                                        <div class="mt-2">
                                            <form action="{{ route('producto.destroy', $producto) }}" class="formulario-eliminar" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-danger btn-xl text-uppercase" data-bs-dismiss="modal" type="submit">
                                                <i class="fas fa-xmark me-1"></i>
                                                Eliminar producto
                                                </button>
                                            </form>
                                        </div>
                                    @endcan
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
    
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="{{ asset('js/scripts.js') }}"></script>
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <!-- * *                               SB Forms JS                               * *-->
    <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        @if(session('eliminar') == 'ok')
            Swal.fire(
                '¡Eliminado!',
                'El registro ha sido eliminado.',
                'success'
            )
        @endif

        @if(session('editar') == 'ok')
            Swal.fire(
                '¡Actualizado!',
                'El registro ha sido modificado.',
                'success'
            )
        @endif

        @if(session('crear') == 'ok')
            Swal.fire(
                '¡Creado!',
                'El registro ha sido creado.',
                'success'
            )
        @endif
    </script>

    <script>
        $(".formulario-eliminar").on("submit", function(e){
            e.preventDefault();

            Swal.fire({
                title: '¿Estás seguro?',
                text: "Esta acción no puede revertirse",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: '¡Sí, borrar!',
                cancelButtonText: 'Cancelar'
                }).then((result) => {
                if (result.isConfirmed) {
                    this.submit();
                }
            })
        });
    </script>

    <script>
        // function toggleFunction(e) {
        //     // element.classList.toggle('fa-solid')
        //     e.setAttribute('class', '')
        // }
    </script>
</x-app-layout>
