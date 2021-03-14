


<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
    <a class="navbar-brand" href="<?= 'index.php?page=home' ?>">Chat Simplon</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="<?= 'index.php?page=home' ?>">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= 'index.php?page=tchat' ?>">Chat</a>
                </li>
            </ul>
            <form class="d-flex">
                 
                <a class="btn btn-outline-danger" type="submit" name='deconnexion' href='index.php?page=home'>Deconnexion</a>

                   <a class="btn btn-outline-success" type="submit" href='index.php?page=login'>Connexion</a>

                
            </form>
        </div>
    </div>
</nav>