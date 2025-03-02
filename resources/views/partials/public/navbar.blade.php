<div class="container-fluid position-relative p-0">
    <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
        <a href="{{ route('public.home') }}" class="navbar-brand p-0">
            <img src="/img/logo.png" alt="Logo"> <img src="/img/gob.png" alt="Logo">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="fa fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0">
                <a href="{{ route('public.home') }}"
                    class="nav-item nav-link {{ $active === 'home' ? 'active' : '' }}">Inicio</a>

                <a href="{{ route('public.faq') }}"
                    class="nav-item nav-link {{ $active === 'faq' ? 'active' : '' }}">Transparencia y acceso a la
                    información pública</a>

                <div class="nav-item dropdown">
                    <a href="#" class="nav-link {{ $active === 'about' ? 'active' : ''}}" data-bs-toggle="dropdown">
                        <span class="dropdown-toggle">Nosotros</span>
                    </a>
                    <div class="dropdown-menu m-0">
                        <a href="{{ route('public.about') }}#general" class="dropdown-item">Sobre nosotros</a>
                        <a href="{{ route('public.about') }}#Mivi" class="dropdown-item">Misión y Visión</a>
                        <!-- <a href="{{ route('public.team') }}" class="dropdown-item">Nuestro equipo</a> -->
                    </div>
                </div>
                <a href="{{ route('public.contact') }}"
                    class="nav-item nav-link {{ $active === 'contact' ? 'active' : ''}}">Contáctanos</a>
            </div>
        </div>
    </nav>