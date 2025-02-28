@extends('layouts.public.app')

@section('title', 'Transparencia')

@section('content')
    @include('partials.public.breadcrumb', ['actual' => 'Transparencia y acceso a la información pública'])


    <div class="container-fluid faq-section py-5">
        <div class="container py-5 overflow-hidden">
            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                <h4 class="text-primary">Transparencia y acceso a la información pública</h4>
                <h1 class="display-5 mb-4">Transparencia y acceso a la información pública</h1>
                <p class="mb-0">
                    En cumplimiento a la Ley 1712 de 2014, de Transparencia y acceso a la información pública y a la
                    Resolución 1519 de 2020 del Ministerio de Tecnologías de la Información y las Comunicaciones – MinTIC,
                    INDECHO pone a disposición de la ciudadanía y sus usuarios la siguiente información que obedece a los
                    criterios exigidos de información pública, accesibilidad web, seguridad digital y datos abiertos.
                </p>
            </div>
            <div class="row g-5 align-items-center">
                <div class="col-lg-12 wow fadeInLeft" data-wow-delay="0.2s">
                    <div class="accordion accordion-flush bg-light rounded p-5" id="accordionFlushSection">
                        <div class="accordion-item rounded-top">
                            <h2 class="accordion-header" id="flush-headingOne">
                                <button class="accordion-button collapsed rounded-top" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false"
                                    aria-controls="flush-collapseOne">
                                    1. Información de la entidad
                                </button>
                            </h2>
                            <div id="flush-collapseOne" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushSection">
                                <div class="accordion-body">
                                    <!--  Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the first item's accordion body.-->
                                    <ul type="none">
                                        <li><strong>1.1</strong> <a href="">Misión, visión, funciones y deberes</a></li>
                                        <li><strong>1.2</strong> <a href="">Estructura Orgánica - Organigrama</a></li>
                                        <li><strong>1.3</strong> <a href="">Mapas y cartas descriptivas de los procesos</a>
                                        </li>
                                        <li><strong>1.4</strong> <a href="">Directorio institucional</a></li>
                                        <li><strong>1.5</strong> <a href="">Directorio de servidores públicos, empleados o
                                                contratistas</a></li>
                                        <li><strong>1.6</strong> <a href="">Directorio de entidades</a></li>
                                        <li><strong>1.7</strong> <a href="">Directorio de agremiaciones, asociaciones y
                                                otros grupos de interés</a></li>
                                        <li><strong>1.8</strong> <a href="">Servicio al público, normas, formularios y
                                                protocolos de atención</a></li>
                                        <li><strong>1.9</strong> <a href="">Procedimientos que se siguen para tomar
                                                decisiones en las diferentes áreas</a></li>
                                        <li><strong>1.10</strong> <a href="">Mecanismos de presentación directa de
                                                solicitudes, quejas y reclamos - atención al ciudadano</a></li>
                                        <li><strong>1.11</strong> <a href="">Calendario de actividades y eventos</a></li>
                                        <li><strong>1.12</strong> <a href="">Decisiones que pueden afectar al público</a>
                                        </li>
                                        <li><strong>1.13</strong> <a href="">Entes y autoridades que vigilan la entidad</a>
                                        </li>
                                        <li><strong>1.10</strong> <a href="">Publicaciones de hojas de vida</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                    aria-controls="flush-collapseTwo">
                                    2. Normatividad
                                </button>
                            </h2>
                            <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushSection">
                                <div class="accordion-body">
                                    <!--  Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the first item's accordion body.-->
                                    <ul type="none">
                                        <li><strong>2.1</strong> <a href="">Normatividad de la entidad o autoridad</a></li>
                                        <li><strong>2.2</strong> <a href="">Búsqueda de normas</a></li>
                                        <li><strong>2.3</strong> <a href="">Proyecto de normas para comentarios</a></li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseThree" aria-expanded="false"
                                    aria-controls="flush-collapseThree">
                                    3. Contratación
                                </button>
                            </h2>
                            <div id="flush-collapseThree" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushSection">
                                <div class="accordion-body">
                                    <!--  Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the first item's accordion body.-->
                                    <ul type="none">
                                        <li><strong>3.1</strong> <a href="">Plan anual de adquisiciones </a></li>
                                        <li><strong>3.2</strong> <a href="">Publicación de la información contractual </a>
                                        </li>
                                        <li><strong>3.3</strong> <a href="">Publicación de la ejecución de los contratos</a>
                                        </li>
                                        <li><strong>3.4</strong> <a href="">Manual de contratación, adquisición y/o
                                                compras</a></li>
                                        <li><strong>3.5</strong> <a href="">Formatos o modelos de contratos o pliegos</a>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseFour" aria-expanded="false"
                                    aria-controls="flush-collapseFour">
                                    4. Planeación, Presupuesto e Informes
                                </button>
                            </h2>
                            <div id="flush-collapseFour" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushSection">
                                <div class="accordion-body">
                                    <!--  Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the first item's accordion body.-->
                                    <ul type="none">
                                        <li><strong>4.1</strong> <a href="">Presupuesto general de ingresos, gastos e
                                                inversiones</a></li>
                                        <li><strong>4.2</strong> <a href="">Ejecución presupuestal </a></li>
                                        <li><strong>4.3</strong> <a href="">Plan de acción</a></li>
                                        <li><strong>4.4</strong> <a href="">Proyectos de inversión</a></li>
                                        <li><strong>4.5</strong> <a href="">Informes de empalme</a></li>
                                        <li><strong>4.6</strong> <a href="">Información pública y/o relevante</a></li>
                                        <li><strong>4.7</strong> <a href="">Informes de gestión, evaluación y auditoría</a>
                                        </li>
                                        <li><strong>4.8</strong> <a href="">Informes de la Oficina de Control Interno</a>
                                        </li>
                                        <li><strong>4.9</strong> <a href="">Informe sobre defensa pública y prevención del
                                                daño antijurídico</a></li>
                                        <li><strong>4.10</strong> <a href="">Informe trimestrales sobre acceso a
                                                información, quejas, reclamos</a></li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingFive">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseFive" aria-expanded="false"
                                    aria-controls="flush-collapseFive">
                                    5. Trámites y servicios
                                </button>
                            </h2>
                            <div id="flush-collapseFive" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushSection">
                                <div class="accordion-body">
                                    <!--  Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the first item's accordion body.-->
                                    <ul type="none">
                                        <li><strong>5.1</strong> <a href="">Trámites</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item rounded-bottom">
                            <h2 class="accordion-header" id="flush-headingSix">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseSix" aria-expanded="false"
                                    aria-controls="flush-collapseSix">
                                    6. Participa
                                </button>
                            </h2>
                            <div id="flush-collapseSix" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingSix" data-bs-parent="#accordionFlushSection">
                                <div class="accordion-body">Placeholder content for this accordion, which is intended to
                                    demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion
                                    body. Nothing more exciting happening here in terms of content, but just filling up the
                                    space to make it look, at least at first glance, a bit more representative of how this
                                    would look in a real-world application.</div>
                            </div>
                        </div>

                        <div class="accordion-item rounded-bottom">
                            <h2 class="accordion-header" id="flush-headingSeven">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseSeven" aria-expanded="false"
                                    aria-controls="flush-collapseSeven">
                                    7. Datos abiertos
                                </button>
                            </h2>
                            <div id="flush-collapseSeven" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingSeven" data-bs-parent="#accordionFlushSection">
                                <div class="accordion-body">
                                    <!--  Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the first item's accordion body.-->
                                    <ul type="none">
                                        <li><strong>7.1</strong> <a href="">Instrumentos de gestión de la información</a>
                                        </li>
                                        <li><strong>7.2</strong> <a href="">Datos abiertos</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>


                        <div class="accordion-item rounded-bottom">
                            <h2 class="accordion-header" id="flush-headingOcho">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseOcho" aria-expanded="false"
                                    aria-controls="flush-collapseOcho">
                                    8. Información específica para Grupos de Interés
                                </button>
                            </h2>
                            <div id="flush-collapseOcho" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingOcho" data-bs-parent="#accordionFlushSection">
                                <div class="accordion-body">
                                    <!--  Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the first item's accordion body.-->
                                    <ul type="none">
                                        <li><strong>8.1</strong> <a href="">Información para niños, niñas y adolescentes</a>
                                        </li>
                                        <li><strong>8.2</strong> <a href="">Información para mujeres</a></li>
                                        <li><strong>8.3</strong> <a href="">Otros grupos de interés</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item rounded-bottom">
                            <h2 class="accordion-header" id="flush-headingNine">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseNine" aria-expanded="false"
                                    aria-controls="flush-collapseNine">
                                    9. Obligación de reporte de información específica por parte de la entidad
                                </button>
                            </h2>
                            <div id="flush-collapseNine" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingNine" data-bs-parent="#accordionFlushSection">
                                <div class="accordion-body">
                                    Revisar por parte de la entidad</div>
                            </div>
                        </div>


                        <div class="accordion-item rounded-bottom">
                            <h2 class="accordion-header" id="flush-headingTen">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseTen" aria-expanded="false"
                                    aria-controls="flush-collapseTen">
                                    10. Información tributaria en entidades territoriales locales
                                </button>
                            </h2>
                            <div id="flush-collapseTen" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingTen" data-bs-parent="#accordionFlushSection">
                                <div class="accordion-body">
                                    Revisar por parte de la entidad</div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection