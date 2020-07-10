<!-- Navigation -->
  

    <!-- Intro Section -->
    <div class="view jarallax" data-jarallax='{"speed": 0.2}' style="background-image: url(../../img/model.jpg); background-repeat: no-repeat; background-size: cover; background-position: center center;">
      <div class="mask rgba-black-light">
<div class="container h-100 d-flex justify-content-center align-items-center">
<div class="row pt-5 mt-3">
<div class="col-md-12 wow fadeIn mb-3">
<div class="text-center white-text">
  <ul class="list-unstyled ">
    <li>
      <h1 class="display-4 mt-md-5 mt-lg-0 mb-5 font-weight-bold white-text wow fadeIn"
        data-wow-delay="0.3s">
        <strong>Welcome to treatment and beauty services</strong>
      </h1>
    <li>
      
    </li>
    <li class="wow fadeIn" data-wow-delay="0.4s">
      <a class="btn pink-gradient btn-rounded btn-lg font-weight-bold"id='login-btn'>login</a>
      <a class="btn pink-gradient btn-rounded btn-lg font-weight-bold"id='signup-btn'>signup</a>
      <?php
#include('../../layout/DB.php');
include('layout/DB.php');

 ?>
 <?php 
  if(isset($_POST['login']))
  {
      
      $mail = $_POST['mail'];
      $pass = $_POST['pass'];

      $login = "SELECT name,user_ID,E_mail,password FROM users WHERE E_mail='$mail' AND password='$pass'";
      $result = mysqli_query($connection,$login);
      if(mysqli_num_rows($result)>0)
      {

          while($row = mysqli_fetch_assoc($result))
          {
              $id = $row['user_ID'];
              session_start();
              $_SESSION['user_ID'] = $row['user_ID'];
              $_SESSION['name'] = $row['name'];
              echo 'session';
          }
          header('location:welcomehome.php');
      }else
      {
          echo 'error no such user found';
      }

  }
  ?>
<form class="text-center border border-light p-5 login welcome" action="" method='post'>

<p class="h4 mb-4">Sign in</p>

<!-- Email -->
<input type="email" id="defaultLoginFormEmail" class="form-control mb-4" placeholder="E-mail" name='mail'>

<!-- Password -->
<input type="password" id="defaultLoginFormPassword" class="form-control mb-4" placeholder="Password" name='pass'>

<!-- Sign in button -->
<button class="btn btn-info btn-block my-4" type="submit" name='login'>Sign in</button>

</form>

<form class="text-center border border-light p-5 signup welcome"  action="" method='post'>

    <p class="h4 mb-4">Sign up</p>
    <input type="text" class="form-control mb-4" placeholder="Name" name='name'>

    <input type="email" class="form-control mb-4" placeholder="E-mail" name='mail'>

    <input type="text" class="form-control mb-4" placeholder="password" name='pass'>

    <input type="text" class="form-control mb-4" placeholder="Phone" name='phone'>

    <!-- Email -->
    <input type="text" class="form-control mb-4" placeholder="city" name='city'>

 <!-- Password -->
    <!-- Sign in button -->
    <button class="btn btn-info btn-block my-4" type="submit" name='send'>Sign in</button>

</form>
<?php
if(isset($_POST['send']))
{
    $name =$_POST['name'];
    $mail = $_POST['mail'];
    $pass = $_POST['pass'];
    $phone = $_POST['phone'];
    $city = $_POST['city'];


    $sql = "INSERT INTO users(name,E_mail,password,phone,city)
    VALUES('$name','$mail','$pass','$phone','$city')";

if(mysqli_query($connection,$sql))
{
    echo '<a class="btn btn-success" onclick="toastr.success("success Account.");" id="btnTopLeft">Success message</a>';
}else
{
    echo '<a class="btn btn-danger" onclick="toastr.error("error Account.");">Error message</a>' . mysqli_error($connection);
}
}
?>

    </li>
  </ul>
</div>
</div>
</div>
</div>
</div>
    </div>
    <!-- Intro -->

  </header>
  <!-- Navigation -->