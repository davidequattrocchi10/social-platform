<?php
session_start();
?>
<nav class="navbar navbar-expand-lg" style="background-color: #e3f2fd;">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Welcome: <button><?php echo $_SESSION['user_username'] . $_SESSION['user_id'] ?></button></a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="profile.php">Profilo</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="welcome.php">Posts</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Information
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="myPosts.php">My posts</a></li>
                        <li><a class="dropdown-item" href="myLikes.php">My likes</a></li>
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

<?php
if (isset($_SESSION['generated_password'])) {
    // Show password
    $generated_password = $_SESSION['generated_password'];
?>
    <nav class="navbar navbar-expand-lg" style="background-color: #e3f2fd;">
        <div class="container-fluid">
            <div class="nav-item">
                <h6><?php echo "La tua password è: " . $generated_password; ?></h6>

            </div>
        </div>
    </nav>
<?php
    unset($_SESSION['generated_password']);
}

if (isset($_SESSION['success'])) {
    // Show post create
    $success = $_SESSION['success'];
?>
    <nav class="navbar navbar-expand-lg" style="background-color: #66ff00;">
        <div class="container-fluid">
            <div class="nav-item">
                <h6><?php echo $success; ?></h6>

            </div>
        </div>
    </nav>
<?php
    unset($_SESSION['success']);
}

if (isset($_SESSION['error'])) {
    // Show error to create a post
    $error = $_SESSION['error'];
?>
    <nav class="navbar navbar-expand-lg" style="background-color: #a61022;">
        <div class="container-fluid">
            <div class="nav-item">
                <h6><?php echo $error; ?></h6>

            </div>
        </div>
    </nav>
<?php
    unset($_SESSION['error']);
}
?>