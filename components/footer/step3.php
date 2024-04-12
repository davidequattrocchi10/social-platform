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
            min-height: 10vh;
        }
    </style>
</head>

<body>

    <div class="container">
        <h1 class="text-center mb-4">Utenti ordinati per il numero di media caricati</h1>
        <!-- Require once PHP files for establishing database connection and fetching data -->
        <?php require_once __DIR__ .  '/../../database/fetch_data.php'; ?>
    </div>

    <footer>
        <div class="container p-2 mt-3">
            <ul class="nav nav-pills nav-fill">
                <li class="nav-item">
                    <a class="nav-link" href="../../index.php">Social Platform</a></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="step3.php">Step 3</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="step4.php">Step 4</a>
                </li>
            </ul>
        </div>
    </footer>
</body>