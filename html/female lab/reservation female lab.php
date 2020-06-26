<section id="home" class="view" style="background-image: url(../../img/lab1.jpg); background-repeat: no-repeat; background-size: cover; background-position: center center;">
<div class="mask rgba-purple-slight">
        <div class="container h-100 d-flex justify-content-center align-items-center">
          <div class="row smooth-scroll">
            <div class="col-md-12 white-text text-center">
              <div class="wow fadeInDown" data-wow-delay="0.2s">
                <h3 class="display-3 font-dark-bold mb-2">Female Lab</h3>
                <hr class="hr-dark">
                <h4 class="subtext-header mt-4 mb-3">Click "Make a reservation" to reserve a place, and we will get back to you soon </h4>
                
              </div>
              
              <?php
include('../../layout/DB.php');

 ?>
 


 
 <form class="text-center border border-light p-5 login welcome" action="" method='POST'>
<!-- Email -->

<div class="md-form">
<select class="browser-default custom-select form-control mb-4" name='lab'>
  <option selected>SELECT LAB</option>
  <option value="Doppler">Doppler</option>
  <option value="Echo">Echo</option>
  <option value="Mammogram">Mammogram</option>
  <option value="ultra sound">Ultra sound</option>
</select>
<select class="browser-default custom-select form-control mb-4" name='day'>
  <option selected>SELECT DAY</option>
  <option value="Sunday">Sunday</option>
  <option value="Monday">Monday</option>
  <option value="Tuesday">Tuesday</option>
  <option value="Wednesday">Wednesday</option>
  <option value="Thursday">Thursday</option>
  <option value="Friday">Friday</option>
</select>
 
<select class="browser-default custom-select form-control mb-4" name='hour'>
  <option selected>SELECT HOUR</option>
  <option value="5 pm">5 PM</option>
  <option value="7 pm">7 PM</option>
  <option value="9 pm">9 PM</option>
</select>
<input type="text" class="form-control mb-4" placeholder="phone" name='phone'>

<input type="email" class="form-control mb-4" placeholder="mail" name='mail'>
<button class="btn btn-info btn-block my-4" type="submit" name='send'>Reservation</button>
</div>
<?php
if(isset($_POST['send']))
{
    $lab =$_POST['lab'];
    $day = $_POST['day'];
    $hour = $_POST['hour'];
    $phone = $_POST['phone'];
    $mail = $_POST['mail'];
    $id = $_SESSION['user_ID'];


    $sql = "INSERT INTO femalelab(lab,day,hour,phone,mail,user_ID)
    VALUES('$lab','$day','$hour','$phone','$mail',$id)";

if(mysqli_query($connection,$sql))
{
    echo '<a class="btn btn-success" onclick="toastr.success("success Reservation.");" id="btnTopLeft">Success message</a>';
}else
{
    echo '<a class="btn btn-danger" onclick="toastr.error("error Reservation.");">Error message</a>' . mysqli_error($connection);
}
}

?>


</form>
<a class="btn pink-gradient btn-rounded btn-lg font-weight-bold"id='login-btn'>Make a
                reservation</a>
                


            </div>
          </div>
        </div>
      </div>
    </div>


  </header>
  <!--/Navigation & Intro-->