<style>
    .blog-header {
        background-color: #222; /* Sötét háttérszín */
        color: #fff; /* Fehér betűszín */
        padding: 10px 0; /* Belső térköz a fejlécen belül */
    }

    .blog-header h3 {
        margin-bottom: 0; /* Cím margó nélkül */
        font-family: 'Arial', sans-serif; /* Betűtípus változása */
        font-weight: bold; /* Vastag betűtípus */
        text-transform: uppercase; /* Szöveg nagybetűssé alakítása */
    }

    .blog-header-logo {
        text-decoration: none; /* Link alatti vonal törlése */
        color: inherit; /* Szín öröklése */
    }

    .nav-scroller {
        background-color: #333; /* Sötét háttérszín a navigációhoz */
        padding: 5px 0; /* Belső térköz a navigáción belül */
    }

    .nav a {
        text-decoration: none; /* Link alatti vonal törlése */
        color: #fff; /* Fehér szín a linkekhez */
        margin-right: 20px; /* Jobboldali margó a linkek között */
    }

    .nav a:hover {
        color: #ffcc00; /* Sárgás szín hover esetén */
    }
</style>
<div class="container">
<header class="blog-header py-3">
    <div class="row flex-wrap justify-content-between align-items-center">
        <div class="col-12 col-md-3 text-center">
            <a class="blog-header-logo text-dark" href="#">
                <h3>NB-1 Játékoskeret</h3>
            </a>
        </div>
        <div class="col-12 col-md-4 text-center">
        </div>
        <div id="logged-in-user" class="col-12 col-md-5 d-flex justify-content-end align-items-center">
            <?php require APPROOT . '/views/inc/nav_user_details.php'; ?>
        </div>
    </div>
</header>
<div class="nav-scroller py-1 mb-5">
    <nav id="page-main-nav" class="nav d-flex justify-content-between mw-30">
        <a class="p-2 text-muted" href="<?php echo URLROOT; ?>">Főoldal</a>
        <a class="p-2 text-muted" href="<?php echo URLROOT; ?>/posts">Hírek</a>
        <a class="p-2 text-muted" href="<?php echo URLROOT; ?>/pages/mnb">MNB</a>
        <a class="p-2 text-muted" href="<?php echo URLROOT; ?>/invertories">Adatok</a>
    </nav>
</div>