<?php
if(isset($_GET['id']))
{
    include('DB.php');
    $id = $_GET['id'];
    $sql = "DELETE FROM clinics WHERE id='$id'";
    if(mysqli_query($connection,$sql))
    {
        header('location:doctor.php');
    }else
    {
        echo 'error' . mysqli_error($connection);
    }
}

?>