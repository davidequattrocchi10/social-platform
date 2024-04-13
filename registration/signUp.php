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

        footer {
            min-height: 10vf;
        }
    </style>

</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-lg-6 mx-auto">
                <div class="content">
                    <h1 class="text-center mb-4">Sign Up - Social Platform</h1>
                    <form action="insertUser.php" method="POST">
                        <div class="mb-3">
                            <label for="formGroupExampleInput" class="form-label">Name</label>
                            <input type="text" class="form-control" name="name" placeholder="Insert your name">
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput2" class="form-label">Lastname</label>
                            <input type="text" class="form-control" name="lastname" placeholder="Insert your lastname">
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput2" class="form-label">Username</label>
                            <input type="text" class="form-control" name="username" placeholder="Insert your username">
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput2" class="form-label">Email</label>
                            <input type="text" class="form-control" name="email" placeholder="Insert your email">
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput2" class="form-label">Birthdate</label>
                            <input type="text" class="form-control" name="birthdate" placeholder="Insert your birthdate">
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput2" class="form-label">Phone</label>
                            <input type="text" class="form-control" name="phone" placeholder="Insert your phone number">
                        </div>
                        <button class="btn btn-primary" type="submit">Submit</button>
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