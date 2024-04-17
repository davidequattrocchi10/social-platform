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

        footer {
            background-color: #d5f2f8;
            min-height: 10vh;

        }
    </style>

</head>

<body>
    <?php
    session_start();
    ?>

    <header>
        <nav class="navbar navbar-expand-lg" style="background-color: #e3f2fd;">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">ID User: <button><?php echo $_SESSION['user_id'] ?></button></a>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Profile</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Posts</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Information
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">My posts</a></li>
                                <li><a class="dropdown-item" href="#">My likes</a></li>
                            </ul>
                        </li>
                    </ul>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>
    </header>

    <main>
        <div class="container">
            <div class="row">
                <?php
                session_start();
                if (isset($_SESSION['generated_password'])) {
                    $generated_password = $_SESSION['generated_password'];

                    // Utilizza la password generata come desideri, ad esempio visualizzandola
                    echo "La tua password generata è: " . $generated_password;
                } else {
                    // Se la password generata non è presente nella sessione, gestisci il caso di errore o reindirizza l'utente altrove
                    echo "Errore: password non trovata nella sessione.";
                }
                ?>
            </div>
        </div>
    </main>


    <footer>
        <div class="container p-3">
            <ul class="nav nav-pills nav-fill">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.html">Come back</a>
                </li>
            </ul>
        </div>
    </footer>
</body>

</html>