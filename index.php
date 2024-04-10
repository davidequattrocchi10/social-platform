<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Social Platform</title>
    <!-- Bootstrap CSS v5.3.2 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class="container">
        <h2 class="my-4">Utenti ordinati per il numero di media caricati</h2>
        <?php require_once __DIR__ .  '/database/connection/db.php'; ?>
        <?php require_once __DIR__ .  '/database/fetch_data.php'; ?>
    </div>


    <div class="container p-3">
        <div class="row mb-3">
            <h1 class="text-center mb-4">Oggetti instanziati</h1>
            <?php
            require_once __DIR__ . '/Models/Post.php';
            require_once __DIR__ . '/Models/Media.php';
            require_once __DIR__ . '/Objects/objects.php';
            ?>

            <!-- Stampare i valori delle proprietà dei post -->
            <div class="col-md-6">
                <div class="card mb-4">
                    <div class="card-header bg-primary text-white">
                        <h3 class="card-title text-center">Post 1 </h3>
                        <h4 class="card-title text-center">Titolo: <?php echo $post1->getTitle(); ?></h4>
                    </div>
                    <div class="card-body">
                        <p class="card-text">Tags: <?php echo $post1->getTags(); ?></p>
                        <?php foreach ($post1->getMediaList() as $media) : ?>
                            <div class="mb-3">
                                <p class="card-text">Tipo: <?php echo $media->getType(); ?></p>
                                <img src="<?php echo $media->getPath(); ?>" class="card-img-top img-fluid" style="height:250px;" alt="Media">
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card mb-4">
                    <div class="card-header bg-primary text-white">
                        <h3 class="card-title text-center">Post 2 </h3>
                        <h4 class="card-title text-center">Titolo: <?php echo $post2->getTitle(); ?></h4>
                    </div>
                    <div class="card-body">
                        <p class="card-text">Tags: <?php echo $post2->getTags(); ?></p>
                        <?php foreach ($post2->getMediaList() as $media) : ?>
                            <div class="mb-3">
                                <p class="card-text">Tipo: <?php echo $media->getType(); ?></p>
                                <img src="<?php echo $media->getPath(); ?>" class="card-img-top img-fluid" style="height:250px;" alt="Media">
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>