@extends('layouts.plantilla')

@section('title', 'Home')

@section('content')

    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="{{ route('logout') }}"
            onclick="event.preventDefault();
                         document.getElementById('logout-form').submit();">
            {{ __('Logout') }}
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
    </div>
    <div class="containerportada container-md d-flex justify-content-center mt-4 p-3 rounded-4">
        <div>
            <img src="/img/portada.jpg" class="rounded-4 border border-2" width="1250px" height="300px" alt="...">
        </div>
    </div>

    <div class="containerintro container-md justify-content-center mt-4 p-3 rounded-4">
        <div>
            <h1>Quienes somos</h1>
        </div>
        <div class="intro border border-2 rounded-4 p-2">
            <h3 class="lh-sm">¡Bienvenidos a PersonalGF, tu destino para asesorías financieras personalizadas!

                En PersonalGF, comprendemos que el mundo de las finanzas puede resultar abrumador y complejo. Nuestro
                objetivo es brindarte la tranquilidad y la confianza necesarias para tomar decisiones financieras informadas
                y alcanzar tus metas económicas. Nos enorgullece ser tu socio confiable en el camino hacia el éxito
                financiero.

                Nuestro equipo de expertos en finanzas está aquí para ayudarte en cada etapa de tu viaje. Somos un grupo de
                profesionales altamente capacitados y apasionados por las finanzas personales. Contamos con una amplia
                experiencia en una variedad de áreas, como inversión, planificación de jubilación, administración de deudas,
                presupuesto y mucho más. Nos mantenemos actualizados con las últimas tendencias y estrategias financieras
                para proporcionarte asesoramiento sólido y basado en evidencia.</h3>
        </div>
    </div>

    <div class="containercard container-md mt-4 p-3 rounded-4">
        <div class="card-group">
            <div class="card">
                <img src="/img/ingresos.jpeg" class="card-img-top" height="300" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Gestión de Gastos</h5>
                    <p class="card-text">Para poder llevar una buena gestión de tus finanzas, es fundamental llevar la
                        cuenta de los movimientos a los que estas expuesto.</p>
                </div>
                <div class="card-footer">
                    <div class="d-grid gap-2 col-6 mx-auto">
                        <a href="{{ route('movimientos.index') }}" class="btn btn-dark">Entra aquí</a>
                    </div>
                </div>
            </div>
            <div class="card">
                <img src="/img/asesores.jpeg" class="card-img-top" height="300" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Consulta Asesor</h5>
                    <p class="card-text">Contamos con buenos profecionales del area de las finanzas para poder brindarte la
                        asesoración a la altura de tus espectativas.</p>
                </div>
                <div class="card-footer">
                    <div class="d-grid gap-2 col-6 mx-auto">
                        <a href="" class="btn btn-dark">Entra aquí</a>
                    </div>
                </div>
            </div>
            <div class="card">
                <img src="/img/bonos.jpeg" class="card-img-top" height="300" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Bonos</h5>
                    <p class="card-text">Podemos ofrecerte iformacion sobre los bonos más solicitados del momento, para que
                        no te los pierdas</p>
                </div>
                <div class="card-footer">
                    <div class="d-grid gap-2 col-6 mx-auto">
                        <a href="{{ route('bono') }}" class="btn btn-dark">Entra aquí</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
