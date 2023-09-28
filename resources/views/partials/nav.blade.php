<nav class="navbar navbar-expand-md" style="background-color: #c6c3c3;">
    <div class="container-fluid">
        <!-- Div para el logotipo (a la derecha) -->
        <div class="d-flex justify-content-end align-items-center">
            <a class="navbar-brand" href="{{ route('login') }}">
                <img style="width:80px; height: 60px;" src="https://img.freepik.com/premium-vector/colourful-stem-education-text-icon_1639-26302.jpg?w=826" alt="" srcset="">
            </a>
        </div>

        <!-- Div para los elementos de navegación (a la izquierda) -->
        <div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="mynavbar">
                <ul class="navbar-nav ml-auto">
                    
                    <li class="nav-item">
                            <a class="nav-link" style="color: #000;" href="{{ route('multimedia.index') }}">Multimedia</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" style="color: #000;" href="{{ route('register') }}">Appointments</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" style="color: #000;" href="{{ route('coach.index') }}">Coachs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" style="color: #000;" href="{{ route('login') }}">Recomendations</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" style="color: #000;" href="{{ route('login') }}">News</a>
                    </li>
                    
                    @auth
                    <div class="dropdown mt-3">
                    <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown">
                    Mi Perfil
                    </button>
                    <ul class="dropdown-menu">
                    <li>
                        <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                            Cerrar Sesión
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </div>
                    @else
                    <li class="nav-item">
                        <a class="nav-link" style="color: #000;" href="{{ route('login') }}">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" style="color: #000;" href="{{ route('register.show') }}">Register</a>
                    </li>
                    @endauth
                    
                </ul>
            </div>
        </div>
    </div>
</nav>
