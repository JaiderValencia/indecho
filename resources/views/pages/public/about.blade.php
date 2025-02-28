@extends('layouts.public.app')

@section('title', 'Acerca de nosotros')

@section('content')
    @include('partials.public.breadcrumb', ['actual' => 'Nosotros'])

    <!-- Abvout Start -->
    <div class="container-fluid about py-5" id="general">
        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <div class="col-xl-7 wow fadeInLeft" data-wow-delay="0.2s">
                    <div>
                        <h4 class="text-primary">Nosotros</h4>
                        <h3 class="display-5 mb-4">Instituto de Deportes, Educación Física y Recreación del Chocó:
                            Promoviendo el Desarrollo Sostenible y la Innovación</h3>
                        <p class="mb-4 just">
                            El Instituto de Deportes, Educación Física y Recreación del Chocó "INDECHO" se erige como una
                            institución dinámica y transformadora, dedicada a impulsar el deporte, la educación física y la
                            recreación en todo el territorio chocoano. Nuestra misión es servir a las organizaciones
                            deportivas, comunidades e instituciones públicas y privadas, proporcionando recursos humanos
                            altamente calificados en aras de capacitar, asesorar, fomentar y divulgar la educación física,
                            la recreación y el aprovechamiento del tiempo libre.
                            En INDECHO, creemos firmemente en el poder del deporte como motor de cambio y desarrollo
                            sostenible. <br> Por ello, nos comprometemos a promover iniciativas innovadoras que no solo
                            beneficien a nuestros ciudadanos, sino que también fortalezcan la infraestructura deportiva y
                            recreativa de la región. Nuestra visión es ser reconocidos como una institución líder, no solo
                            en el Chocó, sino a nivel regional y nacional, por nuestra eficiencia, al mismo tiempo, eficacia
                            en la organización y fomento de programas deportivos y recreativos. <br>
                            Con un enfoque en la sostenibilidad, trabajamos para asegurar que nuestras iniciativas tengan un
                            impacto duradero en la calidad de vida de la población del Chocó. Apostamos por el talento
                            humano altamente calificado y un sistema de gestión robusto que nos permita ofrecer servicios de
                            excelencia y adaptarnos a los retos del futuro. <br> En INDECHO, estamos decididos a construir
                            un futuro más activo, saludable y próspero para todos los chocoanos, mediante la integración del
                            deporte y la recreación como pilares fundamentales del desarrollo social y personal.

                        </p>
                    </div>
                </div>
                <div class="col-xl-5 wow fadeInRight" data-wow-delay="0.2s">
                    <div class="bg-primary rounded position-relative overflow-hidden">
                        <img src="/img/logo.png" class="img-fluid rounded w-100" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Features Start -->
    <div class="container-fluid feature pb-5" id="Mivi">
        <div class="container pb-5">
            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                <h4 class="text-primary">Nosotros</h4>
                <h1 class="display-5 mb-4">Misión y Visión</h1>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-6 col-xl-6 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="feature-item p-4">
                        <div class="feature-icon p-4 mb-4">
                            <i class="fas fa-university fa-4x text-primary"></i>
                        </div>
                        <h4>Misión</h4>
                        <p class="mb-4 just">
                            El Instituto de Deportes, Educación Física y Recreación del Chocó "INDECHO". tiene como misión
                            servir a las organizaciones deportivas, las comunidades e instituciones públicas y privadas de
                            cualquier orden, en todo el territorio chocoano. en su deseo de organizar, financiar,
                            investigar, capacitar, asesorar, fomentar, promover y divulgar o publicar la educación física,
                            la recreación, el deporte y el aprovechamiento del tiempo libre, a través de nuestros recursos
                            humanos altamente calificados y de los recursos tecnológicos, físicos y financieros de los
                            cuales dispone para encumbrar el buen nombre de la institución.
                        </p>
                        <br>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-6 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="feature-item p-4">
                        <div class="feature-icon p-4 mb-4">
                            <i class="fas fa-chart-line fa-4x text-primary"></i>

                        </div>
                        <h4>Visión</h4>
                        <p class="mb-4 just">El Instituto de Deportes, Educación Física y Recreación del Chocó "INDECHO",
                            tiene como visión, ser una institución altamente eficiente y eficaz en cuanto a la organización,
                            planificación, asesoría y fomento de la educación física, el deporte y la recreación en el
                            departamento del Chocó, reconocido como Institución lider en el desarrollo de programas de
                            deporte, recreación, educación física y aprovechamiento del tiempo libre en el ámbito
                            departamental, regional y nacional, fortalecida institucionalmente, con talento humano altamente
                            calificado que permita una excelente prestación de sus servicios y el mejoramiento continuo de
                            la calidad de vida de la población del Departamento del Chocó.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Features End -->

    <!-- Team Start -->
    <div class="container-fluid team py-5" id="equipo">
        <div class="container py-5">
            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                <h4 class="text-primary">Nuestro Equipo</h4>
                <h1 class="display-5 mb-4">Equipo de Profesionales</h1>
                <p class="mb-0">
                    Este es parte del equipo que permite que las actividades se hagan.
                </p>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="img/team-1.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="team-title">
                            <h4 class="mb-0">David James</h4>
                            <p class="mb-0">Profession</p>
                        </div>
                        <div class="text-center">
                            <a class="btn btn-primary" href="offer.html">Leer más</a>
                        </div>
                    </div>
                </div>


                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="img/team-1.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="team-title">
                            <h4 class="mb-0">David James</h4>
                            <p class="mb-0">Profession</p>
                        </div>
                        <div class="text-center">
                            <a class="btn btn-primary" href="">Leer más</a>
                        </div>
                    </div>
                </div>


                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="img/team-1.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="team-title">
                            <h4 class="mb-0">David James</h4>
                            <p class="mb-0">Profession</p>
                        </div>
                        <div class="text-center">
                            <a class="btn btn-primary" href="">Leer más</a>
                        </div>
                    </div>
                </div>


                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="img/team-1.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="team-title">
                            <h4 class="mb-0">David James</h4>
                            <p class="mb-0">Profession</p>
                        </div>
                        <div class="text-center">
                            <a class="btn btn-primary" href="">Leer más</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->
@endsection