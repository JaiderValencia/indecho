@extends('layouts.public.app')

@section('title', 'Equipo')

@section('content')
    @include('partials.public.breadcrumb', ['actual' => 'Equipo'])

    <!-- team start -->
    <div class="container-fluid team py-5">
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
                            <img src="/img/f1.jpeg" class="img-fluid" alt="">
                        </div>
                        <div class="team-title">
                            <h4 class="mb-0">CARLOS ANDRÉS PEREA IBARGUEN</h4>
                            <p class="mb-0">Auxiliar Administrativo</p>
                        </div>
                        <div class="text-center">
                            <a class="btn btn-primary me-3" href="{{ route('public.teamDetail',1) }}">Leer más</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- team end -->
@endsection