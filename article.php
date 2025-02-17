<?php
    # Inclusion du header
    require_once 'partials/header.php';

    /*
     * Récupération du slug de l'article depuis l'URL
     * Ex: article.php?slug=titre-1 
     */
?>

<main>
    <div class="container py-5">
        <!-- En-tête de l'article -->
        <div class="row mb-4">
            <div class="col-lg-8 mx-auto text-center">
                <h1 class="display-4"><?php echo ucfirst($_GET['slug']) ?></h1>
                <div class="text-muted mb-4">
                    <small>Par <strong>Auteur</strong> - Date de publication</small>
                </div>
            </div>
        </div>

        <!-- Contenu de l'article -->
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <!-- Image principale -->
                <img src="https://fakeimg.pl/1200x600/?text=Article" alt="" class="img-fluid mb-4 rounded">
                
                <!-- Corps de l'article -->
                <div class="article-content">
                    <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    
                    <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    
                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                </div>

                <!-- Navigation entre articles -->
                <div class="d-flex justify-content-between mt-5 pt-3 border-top">
                    <a href="#" class="btn btn-outline-primary">&larr; Article précédent</a>
                    <a href="#" class="btn btn-outline-primary">Article suivant &rarr;</a>
                </div>
            </div>
        </div>
    </div>
</main>

<?php
    # Inclusion du footer
    require_once 'partials/footer.php';
?>