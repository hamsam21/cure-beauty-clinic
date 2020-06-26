
<?php 

include('DB.php');


?>
<?php
session_start();


if(isset($_SESSION['id']) && !empty($_SESSION['id']))
{
    echo '';
}else
{
    header('#/');
}
?>
<header>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top scrolling-navbar white">
      <div class="container">
        <a class="navbar-brand font-weight-bold title" href="../blog/welcomehome.php">panji</a>
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
                aria-haspopup="true" aria-expanded="false">Sections </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="../../html/spa/Landing-Page-Spa.php">spa and gym</a>
                <a class="dropdown-item" href="../../html/medical/Landing-Page-medical.php">clinic</a>
                <a class="dropdown-item" href="../../html/beauty center/Landing-Page-beautycenter.php">Beauty center</a>
                <a class="dropdown-item" href="../../html/female lab/Landing-Page-lab.php">Female lab</a>
              </div>
            </li>
        <a class="nav-link" href="../blog/blog-standard.php">Logout</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" ><?php echo $_SESSION['name'] ?></a>
      </li>
      <li class="nav-item">
        <a class="nav-link"><?php echo $_SESSION['user_ID'] ?></a>
      </li>
            </li>
          </ul>
          <!-- Social Icon  -->
         
        </div>
      </div>
    </nav>