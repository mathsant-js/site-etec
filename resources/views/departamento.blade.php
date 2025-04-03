<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Departamentos</title>
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
        <h1 class="text-info mt-sm-4 mt-4">Coordenação de Cursos</h1>
        <p>As Coordenações de Curso são responsáveis pelo conjunto de ações destinadas ao planejamento do ensino, à
            supervisão de sua execução, ao controle das atividades docentes em relação às diretrizes didáticas
            pedagógicas e administrativas, bem como pela otimização dos recursos físicos e didáticos disponíveis para os
            cursos mantidos pelas Etecs.</p>
        <h1 class="text-info mt-sm-4 mt-4">Coordenação NOVOTEC</h1>
        <ul>
            <li>Giovana Littiere (Novotec Administração)</li>
            <li>Leandro (Novotec Logística)</li>
            <li>Marcelo Collado (Novotec Desenvolvimento de Sistemas)</li>
            <li>Cibelle Ferreria Francoso (Novotec RH)</li>
            <li>Jeferson Roberto de Lima (Novotec Desenvolvimento de Sistemas AMS)
            </li>
        </ul>
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
