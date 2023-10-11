<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Nem tudom</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link " aria-current="page" href="index.php">Első</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link ' . ($menu == 'phpk' ? ' active' : '') . '" href="index.php?menu=phpk">phpk</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link ' . ($menu == 'phph' ? ' active' : '') . '" href="index.php?menu=phph">phph</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link ' . ($menu == 'phpn' ? ' active' : '') . '" href="index.php?menu=phpn">phpn</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link ' . ($menu == 'phpo' ? ' active' : '') . '" href="index.php?menu=phpo">phpo</a>
                </li>
            </ul>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
    </div>
</nav>