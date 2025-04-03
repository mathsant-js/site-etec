<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Cursos</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-danger">
        <div class="container">
            <a class="navbar-brand text-light" href="#"><img src="{{ asset('storage/imgs/etec_zona_leste.png') }}"
                    height="70" width="250" alt="teste"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item ms-sm-3 ms-3">
                        <a class="nav-link active text-light" aria-current="page" href="{{ route('home') }}">
                            Home
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="{{ route('cursos') }}">Cursos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="{{ route('departamentos') }}">Departamentos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="{{ route('contatos') }}">Contato</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="row mt-sm-3 mt-5">
            <h1 class="text-center mb-sm-3 mb-3">Cursos</h1>
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <div class="card-body text-center">
                        <h5 class="card-title">Desenvolvimento de Sistemas</h5>
                        <p class="card-text">Curso para desenvolver sites, apps, softwares e redes</p>
                        <a href="#" class="btn btn-outline-danger">Ir ao Curso</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <div class="card-body text-center">
                        <h5 class="card-title">Administração</h5>
                        <p class="card-text">Curso para administrar empresas, pessoas, equipes, lidar com network, entre
                            outros.</p>
                        <a href="#" class="btn btn-outline-danger">Ir ao curso</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <div class="card-body text-center">
                        <h5 class="card-title">Recursos Humanos</h5>
                        <p class="card-text">Curso para lidar com o ser humano, principalmente no mercado de trabalho.
                        </p>
                        <a href="#" class="btn btn-outline-danger">Ir ao Curso</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="mt-sm-5 mt-5">
        <div class="card bg-danger">
            <div class="container card-body">
                <h4 class="text-center text-light">ETEC Zona Leste 2025 - Site de Exemplo</h4>
            </div>
        </div>
    </footer>
</body>

</html>
