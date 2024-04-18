<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Social Platform</title>
    <!-- Bootstrap CSS v5.3.2 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <style>
        body {
            background-color: #d5f2f8;
        }

        @media (min-width: 992px) {
            .col-md-12 {
                flex: 0 0 720px;
                /* Set width 720px */
                max-width: 720px;
                margin: 0 auto;
            }
        }

        footer {
            background-color: #d5f2f8;
            min-height: 10vh;

        }
    </style>

</head>

<body>

    <?php include_once __DIR__ . "/components/header/header_welcomePage.php" ?>


    <main>
        <div class="container p-3">
            <div class="row mb-3">
                <ul class="nav nav-pills nav-fill">
                    <li class="nav-item">
                        <a href="post/newPost.php"><button type="button" class="btn btn-primary">Create a New Post</button></a>
                    </li>
                </ul>
            </div>
            <?php
            require_once __DIR__ . '/Models/Media.php';
            require_once __DIR__ . '/Models/Post.php';
            ?>

            <!-- Require once PHP file for establishing database connection and fetching data -->
            <?php require_once __DIR__ .  '/database/fetch_posts.php';
            while ($row = $result->fetch_assoc()) {
                // Create a post object across data in database
                $post = new Post($row['id'], $row['title'], $row['tags'], $row['user_id'], new Media($row['media_id'], $row['type'], $row['path']));
                $posts[] = $post;
            }
            ?>
            <!-- Posts -->
            <?php if ($result->num_rows > 0) {
                // Invert the post array
                $posts = array_reverse($posts);
                foreach ($posts as $post) : ?>
                    <div class="col-md-12">
                        <div class="card mb-4">
                            <div class="card-header bg-primary text-white">
                                <h3 class="card-title text-center">Post <?php echo $post->getId(); ?> </h3>
                                <h4 class="card-title text-center">Titolo: <?php echo $post->getTitle(); ?></h4>
                            </div>
                            <div class="card-body">
                                <p class="card-text">Tags: <?php echo $post->getTags(); ?></p>
                                <p class="card-text">Creato dall'utente con ID: <?php echo $post->getUserId(); ?></p>
                                <?php foreach ($post->getMediaList() as $media) : ?>
                                    <div class="mb-3">
                                        <p class="card-text">Tipo: <?php echo $media->getType(); ?></p>
                                        <?php if ($media->getType() === 'photo') : ?>
                                            <img src="<?php echo $media->getPath(); ?>" class="card-img-top img-fluid" style="height:250px;" alt="Media">
                                        <?php elseif ($media->getType() === 'video') : ?>
                                            <video controls class="card-img-top" style="max-height: 250px;">
                                                <source src="<?php echo $media->getPath(); ?>" type="video/mp4">
                                                Your browser does not support the video tag.
                                            </video>
                                        <?php endif; ?>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php } else {
                echo "Nessun risultato trovato.";
            }
            /* Close connection */
            $connection->close(); ?>
        </div>
        </div>
    </main>



    <footer>
        <div class="container p-3">
            <ul class="nav nav-pills nav-fill">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.html">Esci da Social Platform</a>
                </li>
            </ul>
        </div>
    </footer>
</body>

</html>