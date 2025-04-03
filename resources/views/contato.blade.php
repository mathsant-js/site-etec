<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Contatos</title>
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
        <h2 class="mt-sm-4 mt-4 mb-sm-3 mb-3">Digite o seu contato</h2>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingInput" placeholder="Digite seu nome">
            <label for="floatingInput">Digite seu nome</label>
        </div>
        <div class="form-floating mb-3">
            <input type="number" class="form-control" id="floatingInput" placeholder="Digite seu número">
            <label for="floatingInput">Digite seu número</label>
        </div>
        <div class="form-floating">
            <input type="email" class="form-control" id="floatingInput" placeholder="Digite seu email">
            <label for="floatingInput">Digite seu email</label>
        </div>
        <div class="d-grid gap-2 mt-sm-3 mt-3">
            <button class="btn btn-danger" type="button">Enviar</button>
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
