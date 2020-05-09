
<?php 

include('DB.php');


?>
<?php
session_start();


if(isset($_SESSION['id']) && !empty($_SESSION['id']))
{
    echo '';
}
?>
<header>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top scrolling-navbar white">
      <div class="container">
        <a class="navbar-brand font-weight-bold title" href="../home/main.html">panji</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02"
          aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
          <ul class="list-unstyled navbar-nav mr-auto">
            
            <li class="nav-item ml-4">
              <a class="nav-link title" href="../blog/welcomehome.php" data-offset="90">Homepage</a>
              <li class="nav-item">
            <li class="nav-item dropdown ml-4">
              <a class="nav-link dropdown-toggle title" id="navbarDropdownMenuLink3" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">Blog </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="../blog/blog-standard.html">Blog Standard</a>
                <a class="dropdown-item" href="../blog/blog-3columns.html">Blog 3 Columns</a>
                <a class="dropdown-item" href="../blog/blog-post.html">Blog Post</a>
              </div>
            </li>
            <li class="nav-item ml-4">
              <a class="nav-link title" href="../blog/posts.php" data-offset="90">POSTS</a>
              <li class="nav-item">
        <a class="nav-link" href="../blog/blog-standard.php">Logout</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="profile.php"><?php echo $_SESSION['name'] ?></a>
      </li>
            </li>
          </ul>
          <!-- Social Icon  -->
         
        </div>
      </div>
    </nav>