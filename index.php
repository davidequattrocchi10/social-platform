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
        main {
            /* Path to your background image */
            background-image: url('https://www.keblog.it/wp-content/uploads/2021/11/belle-immagini-natura-01.jpg'), url('https://img.freepik.com/free-photo/2d-graphic-wallpaper-with-colorful-grainy-gradients_23-2151001503.jpg');
            background-size: auto, cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-position: center, center;
            min-height: 90vh;
            /* Set full height of viewport */
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .content {
            background-color: rgba(255, 255, 255, 0.7);
            /* Semi-transparent white background */
            padding: 30px;
            border-radius: 10px;
        }

        footer {
            background-color: #d5f2f8;
            min-height: 10vh;

        }
    </style>

</head>

<body>


    <header>

    </header>
    <main>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mx-auto">
                    <div class="content">
                        <h1 class="text-center mb-4">Welcome to Social Platform</h1>
                        <p>In this platform you can create posts, adding one or more media such as photos and videos.</p>
                        <p class="mb-5">You will also be able to interact with posts created by other users by expressing their appreciation through a simple like.</p>
                        <div class="d-grid gap-2 col-6 mx-auto">
                            <button class="btn btn-primary" type="button">Sign Up</button>
                            <button class="btn btn-primary" type="button">Log In</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <footer>
        <div class="container p-3">
            <ul class="nav nav-pills nav-fill">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php">Social Platform</a></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="components/footer/step3.php">Step 3</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="components/footer/step4.php">Step 4</a>
                </li>
            </ul>
        </div>
    </footer>
</body>

</html>