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
                        <a class="nav-link" style="color: #000;" href="{{ route('register') }}">Multimedia</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" style="color: #000;" href="{{ route('register') }}">Appointments</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" style="color: #000;" href="{{ route('login') }}">Coachs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" style="color: #000;" href="{{ route('login') }}">Recomendations</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" style="color: #000;" href="{{ route('login') }}">News</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" style="color: #000;" href="{{ route('login') }}">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>