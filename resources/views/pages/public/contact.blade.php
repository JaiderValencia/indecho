@extends('layouts.public.app')

@section('title', 'contacto')

@section('content')
    @include('partials.public.breadcrumb', ['actual' => 'Contacto'])

    <!-- Contact Start -->
    <div class="container-fluid contact py-5">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-xl-6">
                    <div class="wow fadeInUp" data-wow-delay="0.2s">
                        <div class="bg-light rounded p-5 mb-5">
                            <h4 class="text-primary mb-4">Ponte en contacto</h4>
                            <div class="row g-4">
                                <div class="col-md-6">
                                    <div class="contact-add-item">
                                        <div class="contact-icon text-primary mb-4">
                                            <i class="fas fa-map-marker-alt fa-2x"></i>
                                        </div>
                                        <div>
                                            <h4>Dirección</h4>
                                            <p class="mb-0">Quibdó-Chocó</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="contact-add-item">
                                        <div class="contact-icon text-primary mb-4">
                                            <i class="fas fa-envelope fa-2x"></i>
                                        </div>
                                        <div>
                                            <h4>Nuestro correo</h4>
                                            <p class="mb-0">direccion@indecho.gov.co</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="contact-add-item">
                                        <div class="contact-icon text-primary mb-4">
                                            <i class="fa fa-phone-alt fa-2x"></i>
                                        </div>
                                        <div>
                                            <h4>Teléfono</h4>
                                            <p class="mb-0">(+57) 31333333333</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="contact-add-item">
                                        <div class="contact-icon text-primary mb-4">
                                            <i class="fab fa-firefox-browser fa-2x"></i>
                                        </div>
                                        <div>
                                            <h4>Sitio</h4>
                                            <p class="mb-0">indecho.gov.co</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="bg-light p-5 rounded h-100 wow fadeInUp" data-wow-delay="0.2s">
                            <h4 class="text-primary">Envía tu mensaje</h4>
                            <p class="mb-4">Si tienes alguna pregunta, comentario o sugerencia, no dudes en ponerte en
                                contacto con nosotros. Tu opinión es muy importante para nosotros y nos ayuda a mejorar.

                                Puedes enviarnos un mensaje a través de nuestro formulario de contacto.

                                ¡Esperamos tu mensaje!

                                </a>.</p>
                            <form>
                                <div class="row g-4">
                                    <div class="col-lg-12 col-xl-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control border-0" id="name"
                                                placeholder="Tu Nombre">
                                            <label for="name">Tu Nombre</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-xl-6">
                                        <div class="form-floating">
                                            <input type="email" class="form-control border-0" id="email"
                                                placeholder="Tu correo">
                                            <label for="email">Tu correo</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-xl-12">
                                        <div class="form-floating">
                                            <input type="phone" class="form-control border-0" id="phone"
                                                placeholder="Celular">
                                            <label for="phone">Celular</label>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="form-floating">
                                            <input type="text" class="form-control border-0" id="subject"
                                                placeholder="Subject">
                                            <label for="subject">Asunto</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <textarea class="form-control border-0" placeholder="Ingresa tu mensaje aquí"
                                                id="message" style="height: 160px"></textarea>
                                            <label for="message">Mensaje</label>
                                        </div>

                                    </div>
                                    <div class="col-12">
                                        <button class="btn btn-primary w-100 py-3">Enviar mensaje</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 wow fadeInRight" data-wow-delay="0.2s">
                    <div class="rounded h-100">
                        <iframe class="rounded h-100 w-100" style="height: 400px;"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3970.147604874258!2d-76.66037362397066!3d5.691801434895293!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e488f717780ac2d%3A0xac2fe63f9a49555!2sInder%20Choco%20-%20Indecho!5e0!3m2!1ses-419!2sco!4v1740703963135!5m2!1ses-419!2sco"
                            allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->
@endsection