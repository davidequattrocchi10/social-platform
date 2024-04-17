<?php
session_start();
?>
<nav class="navbar navbar-expand-lg" style="background-color: #e3f2fd;">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Welcome: <button><?php echo $_SESSION['user_username'] ?></button></a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="../../profile.php">Profilo</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../../welcome.php">Posts</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Information
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="../../myPosts.php">My posts</a></li>
                        <li><a class="dropdown-item" href="../../myLikes.php">My likes</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
<?php
// Check if there is a error
if (isset($_SESSION['error'])) {
    echo '<div class="alert alert-danger" role="alert">' . $_SESSION['error'] . '</div>';
    unset($_SESSION['error']);
} ?>