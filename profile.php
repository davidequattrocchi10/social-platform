<?php include_once __DIR__ . "/components/style/stylePages.html" ?>

<body>

    <?php include_once __DIR__ . "/components/header/header_welcomePage.php" ?>


    <main>
        <div class="container p-3">
            <div class="row mb-3 mx-3">
                <h3 class="text-center bg-primary text-white p-1 rounded">PROFILO</h3>
            </div>
            <!-- Require once PHP file for establishing database connection and fetching data -->
            <?php require_once __DIR__ .  '/database/fetch_user.php';
            ?>

            <?php
            require_once __DIR__ . '/Models/User.php';
            $row = $result->fetch_assoc();
            ?>
            <div class="row">
                <div class="col-4 d-flex align-items-center justify-content-center ">
                    <img src="..." alt="Image of person" class="img-thumbnail">
                </div>
                <div class="col">
                    <ul class="list-group">
                        <li class="list-group-item list-group-item-primary"><strong>Id User:</strong> <?php echo $row['id'] ?> </li>
                        <li class="list-group-item list-group-item-primary"><strong>Username:</strong> <?php echo $row['username'] ?></li>
                        <li class="list-group-item list-group-item-primary"><strong>Email:</strong> <?php echo $row['email'] ?></li>
                        <li class="list-group-item list-group-item-primary"><strong>Birthdate:</strong> <?php echo $row['birthdate'] ?></li>
                        <li class="list-group-item list-group-item-primary"><strong>Phone number:</strong> <?php echo $row['phone'] ?></li>
                    </ul>
                </div>
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