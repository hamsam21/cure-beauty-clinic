<?php include('css.php'); ?>
<?php include('../../layout/header.php');   ?>
<body class="medical-lp">

  <!--Navigation & Intro-->
  <header>

  <?php include('../../layout/nav.php'); ?>
  <?php include('reservation female lab.php');   ?>
    <!--Intro Section-->
    

    <!--Modal Info-->
    <div class="modal fade modal-ext" id="modal-info" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
      aria-hidden="true">
      <div class="modal-dialog" role="document">
        <!--Content-->
        <div class="modal-content">
          <!--Header-->
          <div class="modal-header text-center">
            <h4 class="modal-title w-100 py-3" id="myModalLabel">Information about clinic</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <!--Body-->
          <div class="modal-body text-center">

            <!--Title-->
            <h5 class="title mb-3 font-weight-bold">Opening hours:</h5>

            <!--Opening hours table-->
            <table class="table">
              <tbody>
                <tr>
                  <td>Monday - Friday:</td>
                  <td>8 AM - 9 PM</td>
                </tr>
                <tr>
                  <td>Saturday:</td>
                  <td>9 AM - 6 PM</td>
                </tr>
                <tr>
                  <td>Sunday:</td>
                  <td>11 AM - 6 PM</td>
                </tr>
              </tbody>
            </table>

            <!--Title-->
            <h5 class="title mb-4 font-weight-bold">Addresses:</h5>

            <!--First row-->
            <div class="row">

              <!--First column-->
              <div class="col-md-6">

                <p>125 Street<br> New York, NY 10012</p>

              </div>
              <!--/First column-->

              <!--Second column-->
              <div class="col-md-5">

                <p>Allen Street 5<br> New York, NY 10012</p>

              </div>
              <!--/Second column-->

            </div>
            <!--/First row-->

          </div>
          <!--Footer-->
          <div class="modal-footer">
            <button type="button" class="btn btn-rounded btn-info waves-effect" data-dismiss="modal">Close</button>
          </div>
        </div>
        <!--/Content-->
      </div>
    </div>
    <!--/Modal Info-->

  </header>
  <!--/Navigation & Intro-->

  <!--Main content-->
  <main>

    <div class="container">

      <!--Section: Features v.1-->
      <section id="features" class="mt-4 mb-5 pb-5">

        <!--Section heading-->
        <h1 class="text-center mb-5 mt-5 pt-5 font-weight-bold dark-grey-text wow fadeIn" data-wow-delay="0.2s">Professional
          treatments</h1>
        <!--Section sescription-->
        <p class="text-center grey-text w-responsive mx-auto mb-5 wow fadeIn" data-wow-delay="0.2s">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum quas, eos officia maiores ipsam ipsum
          dolores reiciendis
          ad voluptas, animi obcaecati adipisci sapiente mollitia? Autem delectus quod accusamus tempora, aperiam
          minima assumenda deleniti hic.</p>

        <!--First row-->
        <div class="row features-big my-4 text-center">
          <!--First column-->
          <div class="col-md-4 mb-4 wow fadeIn" data-wow-delay="0.4s">
            <div class="card hoverable">
              <i class="fas fa-heart blue-text mt-3 fa-3x my-4"></i>
              <h5 class="font-weight-bold mb-4"">Experience</h5>
                            <p class=" grey-text
                font-small mx-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit maiores nam,
                aperiam
                minima assumenda deleniti hic.</p fa-3x mb-4>
            </div>
          </div>
          <!--/First column-->

          <!--Second column-->
          <div class="col-md-4 mb-4 wow fadeIn" data-wow-delay="0.4s">
            <div class="card hoverable">
              <i class="far fa-eye blue-text mt-3 fa-3x my-4"></i>
              <h5 class="font-weight-bold mb-4">Protection</h5>
              <p class="grey-text font-small mx-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                Reprehenderit maiores nam, aperiam
                minima assumenda deleniti hic.</p>
            </div>
          </div>
          <!--/Second column-->

          <!--Third column-->
          <div class="col-md-4 mb-1 wow fadeIn" data-wow-delay="0.4s">
            <div class="card hoverable">
              <i class="fas fa-briefcase-medical blue-text mt-3 fa-3x my-4"></i>
              <h5 class="font-weight-bold mb-4"">Qualifications</h5>
                            <p class=" grey-text
                font-small mx-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit maiores nam,
                aperiam
                minima assumenda deleniti hic.</p>
            </div>
          </div>
          <!--/Third column-->
        </div>
        <!--/First row-->

      </section>
      <!--/Section: Features v.1-->
    </div>

   
    <div class="container">

      <!--Section: About-->
      <section id="about" class="info-section mb-5 mt-5 pt-4">

        <!--First row-->
        <div class="row pt-5">

          <!--First column-->
          <div class="col-md-7 mb-2 smooth-scroll wow fadeIn" data-wow-delay="0.2s">

            <!--Heading-->
            <h2 class="mb-3 font-weight-bold">Doppler</h2>
            <!--Content-->
            <p class="grey-text" align="justify">• One of the most important tests is sound waves, but the direction of blood is added to them
It has no radiation damage
<br>
• Strong in diagnosing galatia, diabetic foot and varicose veins
<br>
• It depends on the experience of the attending physician
<br>
• It can be used to perform interventional examinations, such as catheterization of the arteries and tumors
            </p>
            <br>
            <!--Button-->
            <a href="Landing-Page-lab.php" class="btn btn-rounded btn-blue-2 blue-text wow fadeIn" data-wow-delay="0.2s"><i
                class="fas fa-gift fa-2x mr-2"></i>reservation</a>

          </div>
          <!--/First column-->

          <!--Second column-->
          <div class="col-lg-4 flex-center ml-lg-auto col-md-5 mb-5 wow fadeIn" data-wow-delay="0.3s">

            <!--Image-->
            <img src="../../img/doppler1.jpg" class="img-fluid z-depth-1">

          </div>
          <!--/Second column-->

        </div>
        <!--/First row-->
        <hr>
 <div class="row pt-5">

<!--First column-->
<div class="col-md-7 mb-2 smooth-scroll wow fadeIn" data-wow-delay="0.2s">

  <!--Heading-->
  <h2 class="mb-3 font-weight-bold">ECHO</h2>
  <!--Content-->
  <p class="grey-text" align="justify">• They are sound waves in the heart that are characterized by an average cost
<br>
• It has no radiation damage
<br>
• One of its drawbacks depends on the experience of the examiner
<br>
• It can be done for all ages and can discover birth defects for newborn babies
  </p>
  <br>
  <!--Button-->
  <a href="Landing-Page-lab.php" class="btn btn-rounded btn-blue-2 blue-text wow fadeIn" data-wow-delay="0.2s"><i
                class="fas fa-gift fa-2x mr-2"></i>reservation</a>

</div>
<!--/First column-->

<!--Second column-->
<div class="col-lg-4 flex-center ml-lg-auto col-md-5 mb-5 wow fadeIn" data-wow-delay="0.3s">

  <!--Image-->
  <img src="../../img/echo2.jpg" class="img-fluid z-depth-1">

</div>
<!--/Second column-->

</div>
<!--/First row-->



<hr>

<div class="row pt-5">

<!--First column-->
<div class="col-md-7 mb-2 smooth-scroll wow fadeIn" data-wow-delay="0.2s">

  <!--Heading-->
  <h2 class="mb-3 font-weight-bold">Mammogram</h2>
  <!--Content-->
  <p class="grey-text" align="justify">• These rays are very accurate and discover the most accurate types of tumors
<br>
• No side effect and radiation damage
<br>
• Breast cancer only
<br>
• It can be done for males and women, not for women only
  </p>
  <br>
  <!--Button-->
  <a href="Landing-Page-lab.php" class="btn btn-rounded btn-blue-2 blue-text wow fadeIn" data-wow-delay="0.2s"><i
                class="fas fa-gift fa-2x mr-2"></i>reservation</a>

</div>
<!--/First column-->

<!--Second column-->
<div class="col-lg-4 flex-center ml-lg-auto col-md-5 mb-5 wow fadeIn" data-wow-delay="0.3s">

  <!--Image-->
  <img src="../../img/mammogram.jpg" class="img-fluid z-depth-1">

</div>
<!--/Second column-->

</div>
<!--/First row-->



<hr>


<div class="row pt-5">

<!--First column-->
<div class="col-md-7 mb-2 smooth-scroll wow fadeIn" data-wow-delay="0.2s">

  <!--Heading-->
  <h2 class="mb-3 font-weight-bold">Ultra Sound</h2>
  <!--Content-->
  <p class="grey-text" align="justify">• It is an ultrasound, unheard of in the human ear
<br>
• This type of examination is characterized by low cost for the patient compared to other types of radiation
<br>
• It is characterized by the absence of any radiation damage to the patient
<br>
• Many tests are carried out on it, such as the gland, stomach, pelvis and pregnancy follow up
<br>
• Essential for diagnosing emergency conditions such as internal bleeding
  </p>
  <br>
  <!--Button-->
  <a href="Landing-Page-lab.php" class="btn btn-rounded btn-blue-2 blue-text wow fadeIn" data-wow-delay="0.2s"><i
                class="fas fa-gift fa-2x mr-2"></i>reservation</a>

</div>
<!--/First column-->

<!--Second column-->
<div class="col-lg-4 flex-center ml-lg-auto col-md-5 mb-5 wow fadeIn" data-wow-delay="0.3s">

  <!--Image-->
  <img src="../../img/ultrasound1.jpg" class="img-fluid z-depth-1">

</div>
<!--/Second column-->

</div>
<!--/First row-->
<hr>
      </section>
      <!--Section: About-->

    </div>

   
    <?php include('../../layout/sidebar.php'); ?>
  <!--/.Footer-->
  <?php include('js.php'); ?>
  <?php include('../../layout/footer.php');   ?>

  <!-- SCRIPTS -->
  <!-- JQuery -->
