<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Home Etec</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-danger">
        <div class="container">
            <a class="navbar-brand text-light" href="#">Etec Zona Leste</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active text-light" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="#">Cursos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="#">Departamentos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="#">Contato</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        <div id="carouselExample" class="carousel slide">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="https://placehold.co/400x200" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="https://placehold.co/400x200" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="..." class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <div class="row mt-3 mt-sm-3">
            <div class="col">
                <h2 class="mt-sm-2 mt-2">Sobre a ETEC</h2>
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                A Nossa História
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Localizada estrategicamente na Avenida Águia de Haia, na Zona Leste de São Paulo, a Etec
                                Zona Leste se destaca como um importante polo educacional na região. Sua história
                                remonta ao compromisso com a excelência educacional e o desenvolvimento profissional dos
                                estudantes.

                                Fundada em 2008, a Etec Zona Leste rapidamente se estabeleceu como
                                uma instituição de referência no ensino técnico e tecnológico. Desde o início, sua
                                missão foi proporcionar oportunidades de aprendizado que preparassem os alunos para os
                                desafios do mercado de trabalho, além de incentivá-los a buscar a excelência acadêmica.

                                Ao longo dos anos, a escola tem evoluído e se adaptado às demandas da sociedade e do
                                mercado, ampliando sua oferta de cursos e modernizando suas instalações. Com uma equipe
                                dedicada de professores e funcionários, a Etec Zona Leste oferece uma variedade de
                                cursos técnicos em áreas como informática, administração, eletrônica, entre outros,
                                proporcionando aos alunos uma formação sólida e atualizada.

                                Além da excelência acadêmica, a Etec Zona Leste também se destaca por suas atividades
                                extracurriculares, que incluem projetos de pesquisa, competições acadêmicas, eventos
                                culturais e esportivos. Essas atividades complementam o currículo escolar, promovendo o
                                desenvolvimento integral dos estudantes e estimulando o trabalho em equipe, a liderança
                                e a criatividade.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseOne">
                                O que a Etec pode fazer pelo seu futuro
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse show"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Sabemos que às vezes pensar no futuro pode parecer assustador. Traçamos carreiras e
                                planos profissionais a todo momento em nossos pensamentos, numa busca constante pelo
                                caminho que nos trará o melhor. Mas saiba que a ETEC Zona Leste conhece os seus anseios
                                e, está aqui, disposta a te apresentar um novo caminho! O futuro não precisa ser
                                assustador. Suas habilidades técnicas e profissionais podem ser desenvolvidas enquanto
                                você aprende com a gente. Em nossa instituição, nós valorizamos os pequenos passos. Dê o
                                seu primeiro passo hoje em direção ao futuro. Faça parte da ETEC!
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    @vite(['resources/js/app.js'])
</body>
<footer class="mt-sm-5 mt-5">
    <div class="card bg-danger">
        <div class="container card-body">
            <h4 class="text-center text-light">ETEC Zona Leste 2025 - Site de Exemplo</h4>
        </div>
    </div>
</footer>

</html>
