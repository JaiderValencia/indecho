@extends('layouts.public.app')

@section('title', 'Acerca de nosotros')

@section('content')
    @include('partials.public.breadcrumb', ['actual' => 'Equipo'])


    <!-- Offer Start -->
    <div class="container-fluid offer-section py-5">
        <div class="container py-5">
            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                <h4 class="text-primary">Nuestro Equipo</h4>
                <h1 class="display-5 mb-4">Equipo de Profesionales</h1>
                <p class="mb-0">
                    Este es parte del equipo que permite que las actividades se hagan.
                </p>
            </div>

            <div class="col-xl-12 wow fadeInRight" data-wow-delay="0.4s">
                <div class="tab-content">
                    <div id="collapseOne" class="tab-pane fade show p-0 active">
                        <div class="row g-4">
                            <div class="col-md-4">
                                <img src="/img/f1.jpeg" class="img-fluid w-100 rounded" alt="">
                            </div>
                            <div class="col-md-8">
                                <h1 class="display-5 mb-4">CARLOS ANDRÉS PEREA IBARGUEN
                                </h1>
                                <p class="mb-4">

                                    <strong>Cargo:</strong> Auxiliar Administrativo <br>
                                <p>
                                    Brindar apoyo en tareas administrativas, como manejar correspondencia, archivar
                                    documentos, atender llamadas telefónicas y coordinar agendas, y garantizar el
                                    funcionamiento eficiente de la oficina o departamento al que están asignados.


                                    <br><br>
                                    <strong>DESCRIPCIÓN DE LAS FUNCIONES ESENCIALES</strong>
                                    <br><br>

                                    1.⁠ ⁠Recibir, clasificar y distribuir la correspondencia entrante y saliente, ya sea
                                    física o electrónica.

                                    2.⁠ ⁠Mantener un sistema de archivo eficiente para documentos físicos y digitales, aseg…
                                </p>






                                </p>
                                <!-- <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Learn More</a>-->
                            </div>
                        </div>
                    </div>



                </div>
            </div>
        </div>
    </div>
    <!-- Offer End -->
@endsection