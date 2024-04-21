<?php include_once __DIR__ . "/components/style/stylePages.html" ?>

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
                                <button class="btn btn-light like-btn " data-post-id="<?php echo $post->getId(); ?>" style="border: 1px solid black;">Mi piace</button>
                                <button class="btn btn-light unlike-btn " data-post-id="<?php echo $post->getId(); ?>" style="border: 1px solid black;">Togli Mi piace</button>

                                <span class="badge bg-primary"> tot likes
                                </span>
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

    <script src="lib/functions.js"></script>
    <script>
        // When the page is  loaded
        document.addEventListener('DOMContentLoaded', function() {
            // Send an AJAX request to get the list of posts liked by the current user
            const xhr = new XMLHttpRequest();
            xhr.open('GET', 'actions/get_like_post.php', true);
            xhr.onload = function() {
                if (xhr.status === 200) {
                    const likedPosts = JSON.parse(xhr.responseText);
                    saveLikedPostsToSession(likedPosts);
                    likedPosts.forEach(function(postId) {
                        const likeButton = document.querySelector('.like-btn[data-post-id="' + postId + '"]');
                        if (likeButton) {
                            likeButton.classList.remove('btn-light');
                            likeButton.classList.add('btn-primary');
                            likeButton.dataset.liked = 'true';
                        }
                    });
                } else {
                    console.error('Errore nella richiesta AJAX: ' + xhr.status);
                }
            };
            xhr.send();
        });
    </script>
</body>

</html>