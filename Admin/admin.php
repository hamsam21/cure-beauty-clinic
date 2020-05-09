
<!DOCTYPE html>
<html lang="en">
<?php include('DB.php')?>

<?php
session_start();

if(isset($_SESSION['id']) && !empty($_SESSION['id']))
{
    echo 'access ok';
}else
{
    header('#/');
}

?>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin - Admin Template</title>
 <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">
    <link rel="stylesheet" href="css/fontawesome.css">
    
    <link href="css/sb-admin.css" rel="stylesheet">
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="css/mdb.min.css" rel="stylesheet">

</head>

<body>



<!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
<!-- Brand and toggle get grouped for better mobile display -->
<div class="navbar-header">
  
    <a class="navbar-brand" href="logout.php">logout</a>
</div>

</nav>

<hr class="my-4">

<h3 class="my-4 dark-grey-text font-weight-bold">USERS</h5>

<!-- Section: Head options -->
<main>
<section>
<div class="container">
  <div class="card">
    <div class="card-body">

      <!-- Table -->
      <table class="table">

        <!-- Table head -->
        <thead class="blue-grey lighten-4">
          <tr>
            <th>#</th>
            <th>Name</th>
            <th>E_mail</th>
            <th>Password</th>
            <th>Phone</th>
            <th>City</th>
          </tr>
        </thead>
        <!-- Table head -->

        <!-- Table body -->
        <tbody>
          <tr>
           
            <?php
        $sql = "SELECT * FROM users";

        $result = mysqli_query($connection,$sql);


        if(mysqli_num_rows($result)>0)
        {
            while($row = mysqli_fetch_assoc($result))
            {
                $user_ID = $row['user_ID'];
                $name = $row['name'];
                $E_mail = $row['E_mail'];
                $password = $row['password'];
                $phone = $row['phone'];
                $city = $row['city'];
                echo "<tr>
                    <th>{$user_ID}</th>
                    <th>{$name}</th>
                    <th>{$E_mail}</th>
                    <th>{$password}</th>
                    <th>{$phone}</th>
                    <th>{$city}</th>
                    </tr>";
                  
            }
        }
      ?>
          </tr>
        </tbody>
        <!-- Table body -->
      </table>
      <!-- Table -->

    </div>
  </div>
    </tr>
</tbody>
</table>

                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

<hr class="my-4">

<h3 class="my-4 dark-grey-text font-weight-bold">Reservation Clinic</h5>

<!-- Section: RESERVATION CLINIC -->
<main>
<section>
<div class="container">
  <div class="card">
    <div class="card-body">

      <!-- Table -->
      <table class="table">

        <!-- Table head -->
        <thead class="blue-grey lighten-4">
          <tr>
            <th>#</th>
            <th>CLINIC</th>
            <th>DAY</th>
            <th>HOUR</th>
            <th>Phone</th>
            <th>E_MAIL</th>
            <th>USER_ID</th>
          </tr>
        </thead>
        <!-- Table head -->

        <!-- Table body -->
        <tbody>
          <tr>
           
            <?php
        $sql = "SELECT * FROM clinics";

        $result = mysqli_query($connection,$sql);


        if(mysqli_num_rows($result)>0)
        {
            while($row = mysqli_fetch_assoc($result))
            {
                $code_clinic = $row['code_clinic'];
                $clinic = $row['clinic'];
                $day = $row['day'];
                $hour = $row['hour'];
                $phone = $row['phone'];
                $mail = $row['mail'];
                $user_id_clinic = $row['user_id_clinic'];
                echo "<tr>
                    <th>{$code_clinic}</th>
                    <th>{$clinic}</th>
                    <th>{$day}</th>
                    <th>{$hour}</th>
                    <th>{$phone}</th>
                    <th>{$mail}</th>
                    <th>{$user_id_clinic}</th>
                    </tr>";
                  
            }
        }
      ?>
          </tr>
        </tbody>
        <!-- Table body -->
      </table>
      <!-- Table -->

    </div>
  </div>
    </tr>
</tbody>
</table>

                    </div>
                </div>
                <!-- /.row -->

            </div>
            <hr class="my-4">

<h3 class="my-4 dark-grey-text font-weight-bold">Reservation Beauty Center</h5>

<!-- Section: RESERVATION beauty center -->
<main>
<section>
<div class="container">
  <div class="card">
    <div class="card-body">

      <!-- Table -->
      <table class="table">

        <!-- Table head -->
        <thead class="blue-grey lighten-4">
          <tr>
            <th>#</th>
            <th>SELECT PLACE</th>
            <th>DAY</th>
            <th>HOUR</th>
            <th>Phone</th>
            <th>E_MAIL</th>
            <th>USER_ID</th>
          </tr>
        </thead>
        <!-- Table head -->

        <!-- Table body -->
        <tbody>
          <tr>
           
            <?php
        $sql = "SELECT * FROM beautycenter";

        $result = mysqli_query($connection,$sql);


        if(mysqli_num_rows($result)>0)
        {
            while($row = mysqli_fetch_assoc($result))
            {
                $code_beauty = $row['code_beauty'];
                $selected = $row['selected'];
                $day = $row['day'];
                $hour = $row['hour'];
                $phone = $row['phone'];
                $mail = $row['mail'];
                $iduser = $row['iduser'];
                echo "<tr>
                    <th>{$code_beauty}</th>
                    <th>{$selected}</th>
                    <th>{$day}</th>
                    <th>{$hour}</th>
                    <th>{$phone}</th>
                    <th>{$mail}</th>
                    <th>{$iduser}</th>
                    </tr>";
                  
            }
        }
      ?>
          </tr>
        </tbody>
        <!-- Table body -->
      </table>
      <!-- Table -->

    </div>
  </div>
    </tr>
</tbody>
</table>

                    </div>
                </div>
                <!-- /.row -->

            </div>
            <hr class="my-4">

<h3 class="my-4 dark-grey-text font-weight-bold">Reservation Female Lab</h5>

<!-- Section: RESERVATION FEMALE LAB -->
<main>
<section>

  <div class="card">
    <div class="card-body">

      <!-- Table -->
      <table class="table">

        <!-- Table head -->
        <thead class="blue-grey lighten-4">
          <tr>
            <th>#</th>
            <th>LAB</th>
            <th>DAY</th>
            <th>HOUR</th>
            <th>Phone</th>
            <th>E_MAIL</th>
            <th>USER_ID</th>
          </tr>
        </thead>
        <!-- Table head -->

        <!-- Table body -->
        <tbody>
          <tr>
           
            <?php
        $sql = "SELECT * FROM femalelab";

        $result = mysqli_query($connection,$sql);


        if(mysqli_num_rows($result)>0)
        {
            while($row = mysqli_fetch_assoc($result))
            {
                $code_lab = $row['code_lab'];
                $lab = $row['lab'];
                $day = $row['day'];
                $hour = $row['hour'];
                $phone = $row['phone'];
                $mail = $row['mail'];
                $user_ID = $row['user_ID'];
                echo "<tr>
                    <th>{$code_lab}</th>
                    <th>{$lab}</th>
                    <th>{$day}</th>
                    <th>{$hour}</th>
                    <th>{$phone}</th>
                    <th>{$mail}</th>
                    <th>{$user_ID}</th>
                    </tr>";
                  
            }
        }
      ?>
          </tr>
        </tbody>
        <!-- Table body -->
      </table>
      <!-- Table -->

    </div>
  </div>
    </tr>
</tbody>
</table>

                    </div>
                </div>
                <!-- /.row -->

            </div>

            <hr class="my-4">

<h3 class="my-4 dark-grey-text font-weight-bold">Reservation SPA AND GYM</h5>

<!-- Section: RESERVATION CLINIC -->
<main>
<section>
<div class="container">
  <div class="card">
    <div class="card-body">

      <!-- Table -->
      <table class="table">

        <!-- Table head -->
        <thead class="blue-grey lighten-4">
          <tr>
            <th>#</th>
            <th>SELECT PLACE</th>
            <th>DAY</th>
            <th>HOUR</th>
            <th>Phone</th>
            <th>E_MAIL</th>
            <th>USER_ID</th>
          </tr>
        </thead>
        <!-- Table head -->

        <!-- Table body -->
        <tbody>
          <tr>
           
            <?php
        $sql = "SELECT * FROM spagym";

        $result = mysqli_query($connection,$sql);


        if(mysqli_num_rows($result)>0)
        {
            while($row = mysqli_fetch_assoc($result))
            {
                $code_sg = $row['code_sg'];
                $selected = $row['selected'];
                $day = $row['day'];
                $hour = $row['hour'];
                $phone = $row['phone'];
                $mail = $row['mail'];
                $userID = $row['userID'];
                echo "<tr>
                    <th>{$code_sg}</th>
                    <th>{$selected}</th>
                    <th>{$day}</th>
                    <th>{$hour}</th>
                    <th>{$phone}</th>
                    <th>{$mail}</th>
                    <th>{$userID}</th>
                    </tr>";
                  
            }
        }
      ?>
          </tr>
        </tbody>
        <!-- Table body -->
      </table>
      <!-- Table -->

    </div>
  </div>
    </tr>
</tbody>
</table>

                    </div>
                </div>
                <!-- /.row -->

            </div>

            <hr class="my-4">

<h3 class="my-4 dark-grey-text font-weight-bold">PROPOSEL</h5>

<!-- Section: RESERVATION proposel -->
<main>
<section>
<div class="container">
  <div class="card">
    <div class="card-body">

      <!-- Table -->
      <table class="table">

        <!-- Table head -->
        <thead class="blue-grey lighten-4">
          <tr>
            <th>#</th>
            <th>E_MAIL</th>
            <th>PROPOSAL</th>
            <th>USER_ID</th>
          </tr>
        </thead>
        <!-- Table head -->

        <!-- Table body -->
        <tbody>
          <tr>
           
            <?php
        $sql = "SELECT * FROM proposal";

        $result = mysqli_query($connection,$sql);


        if(mysqli_num_rows($result)>0)
        {
            while($row = mysqli_fetch_assoc($result))
            {
                $code = $row['code_sg'];
                $proposal = $row['proposal'];
                $E_mail = $row['E_mail'];
                $userID_FKP = $row['userID_FKP'];
                echo "<tr>
                    <th>{$code}</th>
                    <th>{$proposal}</th>
                    <th>{$E_mail}</th>
                    <th>{$userID_FKP}</th>
                    </tr>";
                  
            }
        }
      ?>
          </tr>
        </tbody>
        <!-- Table body -->
      </table>
      <!-- Table -->

    </div>
  </div>
    </tr>
</tbody>
</table>

                    </div>
                </div>
                <!-- /.row -->

            </div>

            <hr class="my-4">

<h3 class="my-4 dark-grey-text font-weight-bold">COMPLAIN</h5>

<!-- Section: RESERVATION complain -->
<main>
<section>
<div class="container">
  <div class="card">
    <div class="card-body">

      <!-- Table -->
      <table class="table">

        <!-- Table head -->
        <thead class="blue-grey lighten-4">
          <tr>
            <th>#</th>
            <th>E_MAIL</th>
            <th>COMPLAIN</th>
            <th>USER_ID</th>
          </tr>
        </thead>
        <!-- Table head -->

        <!-- Table body -->
        <tbody>
          <tr>
           
            <?php
        $sql = "SELECT * FROM complain";

        $result = mysqli_query($connection,$sql);


        if(mysqli_num_rows($result)>0)
        {
            while($row = mysqli_fetch_assoc($result))
            {
                $code = $row['code'];
                $complain = $row['complain'];
                $E_mail = $row['E_mail'];
                $userID_FKC = $row['userID_FKC'];
                echo "<tr>
                    <th>{$code}</th>
                    <th>{$complain}</th>
                    <th>{$E_mail}</th>
                    <th>{$userID_FKC}</th>
                    </tr>";
                  
            }
        }
      ?>
          </tr>
        </tbody>
        <!-- Table body -->
      </table>
      <!-- Table -->

    </div>
  </div>
    </tr>
</tbody>
</table>

                    </div>
                </div>
                <!-- /.row -->

            </div>
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <!-- JQuery -->
  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>


</body>

</html>
