<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <!-- Bootstrap CSS v5.3.2 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <style>
        body {
            background-color: #d5f2f8;
        }

        img {
            width: 30%;
            height: auto;

        }

        footer {
            min-height: 10vf;
        }
    </style>

</head>

<body>
    <?php
    session_start();
    var_dump($_SESSION['generated_password']);
    var_dump($_SESSION['error']);
    var_dump($_SESSION['user_found']);

    // If there isn't a user
    if (isset($_SESSION['user_found'])) { ?>
        <div class="alert alert-danger" role="alert">
            <?php echo $_SESSION['user_found'] ?>
        </div>
    <?php
    }
    ?>
    <div class="container text-center">
        <img src="https://www.exedere.it/wp-content/uploads/2020/05/exedere-social-media-marketing.jpg" alt="" class="img-fluid mt-4">
        <div class="row">
            <div class="col-lg-6 mx-auto">
                <div class="content">
                    <h1 class="text-center mb-4 mt-2">Log In - Social Platform</h1>
                    <form action="login_users.php" method="POST">
                        <div class="mb-3">
                            <label for="formGroupExampleInput" class="form-label">Username</label>
                            <input type="text" class="form-control" name="username" placeholder="Insert your username">
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput2" class="form-label">Password</label>
                            <input type="text" class="form-control" name="password" placeholder="Insert your password">
                        </div>

                        <button class="btn btn-primary mb-5" type="submit">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <footer>
        <div class="container p-3">
            <ul class="nav nav-pills nav-fill">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="../index.html">Come back</a>
                </li>
            </ul>
        </div>
    </footer>
</body>

</html>