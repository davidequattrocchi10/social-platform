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
        <!-- Require once PHP files for establishing database connection and fetching data -->
        <?php require_once __DIR__ .  '/database/fetch_data.php'; ?>
    </div>


    <div class="container">
        <h2 class="my-4">Nuovi oggetti tramite il DB</h2>
        <!-- Require once PHP files for import class User and establishing database connection and fetching data -->
        <?php require_once __DIR__ . '/Models/User.php'; ?>
        <?php require_once __DIR__ .  '/database/fetch_from_db.php'; ?>
        <?php
        while ($row = $result->fetch_assoc()) {
            // Create a User object across data in database
            $user = new User($row['id'], $row['username'], $row['email'], $row['birthdate'], $row['phone']);
            $users[] = $user;
        }
        ?>
        <!-- Print results in a table -->
        <?php if ($result->num_rows > 0) { ?>
            <table class='table table-striped'>
                <thead class='thead-light'>
                    <tr>
                        <th>ID</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Birthdate</th>
                        <th>Phone</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($users as $key => $user) : ?>
                        <tr>
                            <td> <?php echo $key + 1 ?> </td>
                            <td> <?php echo $user->getUsername() ?> </td>
                            <td> <?php echo $user->getEmail() ?> </td>
                            <td> <?php echo $user->getBirthdate() ?> </td>
                            <td> <?php echo $user->getPhone() ?> </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        <?php } else {
            echo "Nessun risultato trovato.";
        }
        /* Close connection */
        $connection->close(); ?>
    </div>




    <div class="container p-3">
        <div class="row mb-3">
            <h1 class="text-center mb-4">Oggetti instanziati</h1>
            <?php
            require_once __DIR__ . '/Models/Post.php';
            require_once __DIR__ . '/Models/Media.php';
            require_once __DIR__ . '/Objects/objects.php';
            ?>

            <!-- Print the values of Post properties -->

            <!-- Post 1 -->
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

            <!-- Post 2 -->
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