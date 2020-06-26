<!-- Footer -->
<footer class="page-footer text-center text-md-left unique-color-dark  pt-0">

<div class="top-pink-footer">
  <div class="container">

    <!-- Grid row -->
    <div class="row py-4 d-flex align-items-center button-collapse  sideNav custom-scrollbar" >

      <!-- Grid column -->
      
      <script>
    // SideNav Initialization
    $(".button-collapse").sideNav();

    var container = document.querySelector('.custom-scrollbar');
    var ps = new PerfectScrollbar(container, {
      wheelSpeed: 2,
      wheelPropagation: true
    });

    //popup buttons
    $('#btnTopLeft').on('click', );

  </script>

      
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </div>
</div>

<!-- Footer Links -->
<div class="container mt-5 mb-4 text-center text-md-left">
  <div class="row mt-3">

    <!-- First column -->
    <div class="col-md-3 col-lg-4 col-xl-3 mb-5">
      <h6 class="spacing font-weight-bold">
        <strong>Company name</strong>
      </h6>
      <hr class="pink accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
      <p>Cure beauty clinic . The goal of the project . 
      It is a compilation of all the aesthetic and health of women in one place .
       And the goal is to save time and effort for women .
        Providing medical services and health system to comfort women and make them always in 
        a healthy decent appearance.</p>
    </div>
    <!-- First column -->

    <!-- Second column -->
    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-5">
      <h6 class="spacing font-weight-bold">
        <strong>Products</strong>
      </h6>
      <hr class="pink accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
      <p>
        <a href="../../html/spa/Landing-Page-Spa.php">SPA AND GYM</a>
      </p>
      <p>
        <a href="../../html/medical/Landing-Page-Medical.php">Clinics</a>
      </p>
      <p>
        <a href="../../html/beauty center/Landing-Page-beautycenter.php">Beauty Center</a>
      </p>
      <p>
        <a href="../../html/female lab/Landing-Page-lab.php">Female Lab</a>
      </p>
    </div>
    <!-- Second column -->

    <!-- Third column -->
    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-5">
      <h6 class="spacing font-weight-bold">
        <strong>Useful links</strong>
      </h6>
      <hr class="pink accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
      <p>
        <a  data-toggle="modal" data-target="#modalSubscription">Proposal</a>
      </p>
      <p>
        <a  data-toggle="modal" data-target="#modalSubscription1">Complain</a>
      </p>
      <p>
        <a href="#!">Help</a>
      </p>
    </div>
    <!-- Third column -->

    <!-- Fourth column -->
    <div class="col-md-4 col-lg-3 col-xl-3">
      <h6 class="spacing font-weight-bold">
        <strong>Contact</strong>
      </h6>
      <hr class="pink accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
      <p>
        <i class="fas fa-home mr-3"></i> Cairo, Maadi, EL zahraa</p>
      <p>
        <i class="fas fa-envelope mr-3"></i> PANJI295@gmail.com</p>
      <p>
        <i class="fas fa-phone mr-3"></i> + 01 234 567 88</p>
      <p>
        <i class="fas fa-print mr-3"></i> + 01 234 567 89</p>
    </div>
    <!-- Fourth column -->

  </div>
</div>
<!-- Footer Links -->

<!-- Copyright -->
<div class="footer-copyright text-center py-3">
  <div class="container-fluid">
    © 2020 Copyright: <a href="#/" target="_blank"> PANJI.com </a>
  </div>
</div>
<!-- Copyright -->

        <!-- Modal: Subscription From -->
        <div class="modal fade" id="modalSubscription" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
          aria-hidden="true">
          <div class="modal-dialog cascading-modal" role="document">
            <!-- Content -->
            <div class="modal-content">

              <!-- Header -->
              <div class="modal-header light-blue darken-3 white-text">
                <h4 class=""><i class="far fa-newspaper"></i> Proposal form</h4>
                <button type="button" class="close waves-effect waves-light" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <!-- Body -->
              <div class="modal-body mb-0">

                <div class="md-form form-sm">
                <form action="" method='post'>
                  <i class="fas fa-envelope prefix" ></i>
                  <input type="text" id="form28" class="form-control form-control-sm" name='mail'>
                  <label for="form28">Your email</label>
                </div>
                <div class="md-form form-sm">
                  <i class="fas fa-user prefix"></i>
                  <input type="text" id="form27" class="form-control form-control-sm" name='proposal'>
                  <label for="form27">Proposal</label>
                </div>

                <div class="text-center mt-1-half">
                  <button class="btn btn-info mb-1" name='send'>Submit <i class="fas fa-check ml-1"></i></button>
                </div>

              </div>
            </div>
            <!-- Content -->
          </div>
        </div>

        <!-- Modal: Subscription From -->
        

        <?php
include('../../layout/DB.php');

 ?>
        <?php
if(isset($_POST['send']))
{
    $mail = $_POST['mail'];
    $proposal = $_POST['proposal'];
    $id = $_SESSION['user_ID'];
   
    
    $sql = "INSERT INTO proposal(E_mail,proposal,userID_FKP)
    VALUES('$mail','$proposal',$id)";

    if(mysqli_query($connection,$sql))
    {
        echo '<a class="btn btn-success" onclick="toastr.success("success message.");">Success message</a>';
    }else
    {
        echo '<a class="btn btn-danger" onclick="toastr.error("error message.");">Error message</a>' . mysqli_error($connection);
    }
}

?>
<?php
include('../../layout/DB.php');

 ?>
        <?php
if(isset($_POST['send1']))
{
    $mail = $_POST['email'];
    $complain = $_POST['complain'];
    $id = $_SESSION['user_ID'];
   
    
    $sql = "INSERT INTO complain(E_mail,complain,userID_FKC)
    VALUES('$mail','$complain',$id)";

    if(mysqli_query($connection,$sql))
    {
        echo '<a class="btn btn-success" onclick="toastr.success("success message.");">Success message</a>';
    }else
    {
        echo '<a class="btn btn-danger" onclick="toastr.error("error message.");">Error message</a>' . mysqli_error($connection);
    }
}

?>
   <!-- Modal: Subscription1 From -->
        <div class="modal fade" id="modalSubscription1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
          aria-hidden="true">
          <div class="modal-dialog cascading-modal" role="document">
            <!-- Content -->
            <div class="modal-content">

              <!-- Header -->
              <div class="modal-header light-blue darken-3 white-text">
                <h4 class=""><i class="far fa-newspaper"></i> Complain form</h4>
                <button type="button" class="close waves-effect waves-light" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <!-- Body -->
              <div class="modal-body mb-0">
              <form action="" method='post'>
                <div class="md-form form-sm">
                  <i class="fas fa-envelope prefix"></i>
                  <input type="text" id="form28" class="form-control form-control-sm" name='email'>
                  <label for="form28">Your email</label>
                </div>
                <div class="md-form form-sm">
                  <i class="fas fa-user prefix"></i>
                  <input type="text" id="form27" class="form-control form-control-sm" name='complain'>
                  <label for="form27">Complain</label>
                </div>

                <div class="text-center mt-1-half">
                  <button class="btn btn-info mb-1" name='send1'>Submit <i class="fas fa-check ml-1"></i></button>
                </div>

              </div>
            </div>
            <!-- Content -->
          </div>
        </div>
        <!-- Modal: Subscription From -->
 
</footer>

