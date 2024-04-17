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
                /* Imposta la larghezza fissa a 720px */
                max-width: 720px;
                /* Imposta la larghezza massima a 720px */
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
        <h1>MY POSTS</h1>

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