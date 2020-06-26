
<!DOCTYPE html>
<html lang="en">
<?php include('DB.php')?>

<?php

session_start();


if(isset($_SESSION['id_doctor']) && !empty($_SESSION['id_doctor']))
{
    echo 'session ok';
}
else
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

    <title> Admin </title>
 <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">
    <link rel="stylesheet" href="css/fontawesome.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
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
    <a class="nav-link"><?php echo $_SESSION['id_doctor'] ?></a>
    </div>
    </form>
   
    <!-- /.input-group -->
</div>

</div>

</nav>



<hr class="my-4">

<div class="container-fluid">

<!-- Section: Customers -->
<section class="section team-section">

  <!-- First row -->
  <div class="row">

    <!-- First column -->
    <div class="col-md-8">

      <div class="row mb-1">
        <div class="col-md-9">
          <h4 class="h4-responsive mt-1">Your Clients</h4>
        </div>
        <div class="col-md-3">
          <div class="md-form">
          <form action="search.php" method='post'>
            <input placeholder="Search..." type="text" id="form5" class="form-control" name='search'>
            <span class="input-group-btn">
            <button class="btn btn-default" type="submit" name='find'>
                <span class="glyphicon glyphicon-search"></span>
</form>
                <?php
                
          if(isset($_POST['find']))
    {
        $search = $_POST['search'];
        $sql = "SELECT * FROM clinics WHERE clinic LIKE '%$search%'";

        $result = mysqli_query($connection,$sql);

        if(mysqli_num_rows($result)>0)
        {
            echo 'there is result';
        }else
        {
            echo 'no result';
        }

    }

?>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 mb-1">
          <!-- Tabs -->
          <div class="classic-tabs">
            <!-- Nav tabs -->
            <div class="tabs-wrapper">
              <ul class="nav tabs-primary primary-color" role="tablist">
                <li class="nav-item">
                  <a class="nav-link waves-light active" data-toggle="tab" href="#panel83" role="tab">Personal
                    Clients</a>
                </li>
              </ul>
            </div>
            <!-- Tab panels -->
            <div class="tab-content card">
              <!-- Panel 1 -->
              <div class="tab-pane fade show active" id="panel83" role="tabpanel">
                <div class="table-responsive">
                  <table class="table">
                    <thead>
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
                    <tbody>
                   
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
                    <td>
                    <a class='teal-text' data-toggle='tooltip' data-target='#modalSubscription' data-placement='top' title='Note'><i class='fas fa-envelope'></i></a>
                    <a  data-toggle='modal' data-target='#modalSubscription'>Note </a>
                  </td>

                    </tr>";
                  
            }
        }
      ?>
                    </tbody>
                  </table>
                </div>
              </div>
              <!-- /.Panel 1 -->
              
            </div>
            <!-- /.Tabs -->
          </div>
        </div>
      </div>

    </div>
    <!-- First column -->
    <div class="modal fade" id="modalSubscription" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
          aria-hidden="true">
          <div class="modal-dialog cascading-modal" role="document">
            <!-- Content -->
            <div class="modal-content">

              <!-- Header -->
              <div class="modal-header light-blue darken-3 white-text">
                <h4 class=""><i class="far fa-newspaper"></i> Note Doctor</h4>
                <button type="button" class="close waves-effect waves-light" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <!-- Body -->
              <form  action="" method='post'>
              <div class="modal-body mb-0">
                <div class="md-form form-sm">
                  <i class="fas fa-user prefix"></i>
                  <input type="text" id="form27" class="form-control form-control-sm" name='note'>
                  <label for="form27">Note</label>
                </div>

                <div class="text-center mt-1-half">
                  <button class="btn btn-info mb-1" name='submit'>Submit <i class="fas fa-check ml-1"></i></button>
                </div>

              </div>
            </div>
            <!-- Content -->
          </div>
        </div>

        <!-- Modal: Subscription From -->
        

        <?php
include('DB.php');

 ?>
        <?php
  
    if(isset($_POST['submit']))
      {
        $id = $_SESSION['id_doctor'];
        $note = $_POST['note'];
     
    $sql = "INSERT INTO clinics(code_clinic,Note,doctor_id)
    VALUES($code_clinic,'$note','$id')";

    if(mysqli_query($connection,$sql))
    {
        echo '<a class="btn btn-success" onclick="toastr.success("success message.");">Success message</a>';
    }else
    {
        echo '<a class="btn btn-danger" onclick="toastr.error("error message.");">Error message</a>' . mysqli_error($connection);
    }
}

?>
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
