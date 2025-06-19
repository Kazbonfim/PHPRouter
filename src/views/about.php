<?php require_once __DIR__ . '/../controller/about.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <!-- Fontes -->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,100..900;1,100..900&family=Nunito+Sans:ital,opsz,wght@0,6..12,200..1000;1,6..12,200..1000&family=Poppins&display=swap');
    </style>
    <title>PHP Router do Zero!</title>
</head>

<body>
    <!-- Main -->
    <main>
        <!-- Header -->
        <div class="container">
            <header class="d-flex flex-wrap justify-content-center py-4 mb-3 border-bottom shadow-sm"> <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none"> <svg class="bi me-2" width="40" height="32" aria-hidden="true">
                        <use xlink:href="#bootstrap"></use>
                    </svg> <span class="fs-4">PHP Router</span> </a>
                <ul class="nav nav-pills">
                    <li class="nav-item"><a href="/" class="nav-link active" aria-current="page">Home</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">About</a></li>
                </ul>
            </header>

            <!-- Conteúdo -->
            <div class="mt-3 px-3">
                <!-- Formulário -->
                <form method="POST" action="/about" class="mx-auto" style="max-width: 400px;">
                    <div class="mb-3 text-start">
                        <!-- Nome -->
                        <label for="nome" class="form-label"></label>
                        <input type="text" id="nome" name="nome" class="form-control" placeholder="Digite seu nome" required>
                        <!-- E-mail -->
                        <label for="nome" class="form-label"></label>
                        <input type="text" id="email" name="email" class="form-control" placeholder="Digite seu e-mail" required>
                        <!-- Telefone -->
                        <label for="nome" class="form-label"></label>
                        <input type="tel" id="telefone" name="telefone" class="form-control" placeholder="Digite seu telefone" required>
                    </div>
                    <button type="submit" class="btn btn-primary mt-2 w-100">Enviar</button>
                </form>
                <!-- Aviso -->
                <div class="border rounded-3 mt-5 p-3 shadow bg-dark">
                    <h1 class="text-center light text-light">Zona de testes!</h1>
                    <blockquote class="blockquote text-light">
                        <p>Para testar as conexões com o MySql, e também aprender a utilizar melhor a estrutura MVC com PHP, fiz esse pequeno formulário. Use como bem entender, deve funcionar corretamente.</p>
                    </blockquote>
                    <figcaption class=" blockquote-footer mt-2">
                        <cite title="Source Title">Kazbonfim</cite>
                    </figcaption>
                </div>
            </div>
        </div>
    </main>

    <!-- Scripts Bootstrap -->
    <link rel="stylesheet" href="./styles/style.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.min.js" integrity="sha384-7qAoOXltbVP82dhxHAUje59V5r2YsVfBafyUDxEdApLPmcdhBPg1DKg1ERo0BZlK" crossorigin="anonymous"></script>
</body>

</html>