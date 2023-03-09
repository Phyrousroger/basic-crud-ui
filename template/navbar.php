<nav class="navbar navbar-expand-md bg-body-tertiary ">
    <div class="container p-3">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        List
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="<?=url('./list-create.php')?>">list-create</a></li>
                        <li><a class="dropdown-item" href="<?=url('./list-index.php')?>">lists</a></li>
                    </ul>
                </li>

        </div>
    </div>
</nav>