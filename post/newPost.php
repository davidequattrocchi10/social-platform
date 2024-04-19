<?php include_once __DIR__ . "/../components/style/stylePages.html" ?>


<body>

    <?php include_once __DIR__ . "/../components/header/header_newPost.php" ?>


    <main>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mx-auto">
                    <div class="content">
                        <h1 class="text-center my-4 ">Create a Post</h1>
                        <form action="checkPost.php" method="POST">
                            <div class="mb-3">
                                <label for="formGroupExampleInput" class="form-label">Titolo</label>
                                <input type="text" class="form-control" name="title" placeholder="Insert post title">
                            </div>
                            <div class="mb-3">
                                <label for="formGroupExampleInput2" class="form-label">Tags</label>
                                <input type="text" class="form-control" name="tags" placeholder="Insert tags">
                            </div>
                            <div class="mb-3">
                                <label for="formGroupExampleInput2" class="form-label">Tipo di media</label>
                                <input type="text" class="form-control" name="typeMedia" placeholder="Insert photo or video">
                            </div>
                            <div class="mb-3">
                                <label for="formGroupExampleInput2" class="form-label">Percorso del file media</label>
                                <input type="text" class="form-control" name="pathMedia" placeholder="Insert path to the media file">
                            </div>
                            <button class="btn btn-primary mb-2" type="submit">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </main>

    <footer>
        <div class="container p-3">
            <ul class="nav nav-pills nav-fill">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="../index.html">Esci - Social Platform</a>
                </li>
            </ul>
        </div>
    </footer>
</body>

</html>