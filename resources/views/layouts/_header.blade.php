<header>
    <nav style="background-color:#042d4e; color:aliceblue;" class="navbar navbar-expand-lg navbar-light ">
        <a style="color: white;" class="navbar-brand">MENU</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div style="color: aliceblue;" class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a style="color: white;" class="nav-link" href="{{route('/')}}">INICIO<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item dropdown">
                    <a style="color: white;" class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        REGISTRO
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="btn-01 dropdown-item" href="{{route('nuevo_alumno')}}">ALUMNO</a>
                        <a class="btn-01 dropdown-item" href="{{route('nuevo_profesor')}}">PROFESOR</a>
                        <a class="btn-01 dropdown-item" href="{{route('nueva_materia')}}">MATERIA</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a style="color: white;" class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        LISTAS
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="btn-01 dropdown-item" href="{{route('lista_alumnos')}}">ALUMNO</a>
                        <a class="btn-01 dropdown-item" href="{{route('lista_profesores')}}">PROFESOR</a>
                        <a class="btn-01 dropdown-item" href="{{route('lista_materias')}}">MATERIA</a>
                    </div>
                </li>

            </ul>
        </div>
        <div>
            @auth
            {{auth()->user()->name}} <br>
            {{auth()->user()->email}}
            @endauth
            @guest
            <a style="color: white" href="{{route('login')}}">Iniciar sesion</a>
            @else
            <li>
                <a style="color: black" href="#" onclick="event.preventDefault();
                     document.getElementById('logout-form').submit();">Cerrar sesion</a>
            </li>
            @endguest

        </div>
    </nav>
</header>