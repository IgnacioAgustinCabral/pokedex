<nav class="navbar navbar-expand-lg bg-primary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <img src="imgs/pokemon_logo.svg" alt="pokemon logo" width="auto" height="45" class="d-inline-block align-text-top">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <div class="navbar-brand mx-auto d-block text-center order-0" style="width: 100%;">
                <h1>Pokédex</h1>
            </div>
            <div class="navbar-nav ms-auto">
                <form class="d-flex" action="login.php" method="POST">
                    <input class="form-control me-2" type="text" name="usuario" placeholder="Usuario" aria-label="Usuario">
                    <input class="form-control me-2" type="password" name="password" placeholder="Contraseña" aria-label="Contraseña">
                    <button class="btn btn-success" type="submit">Login</button>
                </form>
            </div>
        </div>
    </div>
</nav>