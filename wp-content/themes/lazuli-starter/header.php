<?php get_template_part( 'template-parts/header/head' ); ?>

<header id="masthead" class="site-header" role="banner">

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Do Not Eat 🍩</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <?php get_template_part( 'template-parts/header/custom-logo' ); ?>
            </button>
<<<<<<< Updated upstream
=======
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="<?php get_header(); ?>">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Notre concept</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Nos boutiques</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Nous rejoindre</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Nous contacter</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Dropdown link
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
>>>>>>> Stashed changes
            <?php get_template_part( 'template-parts/header/menu' ); ?>
        </div>
    </nav>

</header><!-- #masthead -->
