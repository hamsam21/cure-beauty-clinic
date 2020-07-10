<?php
header("Content-Type:application/json");
include('../layout/DB.php');

$json = file_get_contents('php://input');
if(!empty($json))
{
    $data = json_decode($json);
    $darr = [];
    foreach($data as $d)
    {
        array_push($darr,$d);
    }    
    $sql = "SELECT * FROM users WHERE E_mail='$darr[0]' AND password='$darr[1]' LIMIT 1";

    $result = mysqli_query($connection,$sql);

    if(mysqli_num_rows($result) > 0)
    {
        $row = mysqli_fetch_assoc($result);
        echo json_encode(['data'=>$row]);
    }else
    {
        echo json_encode(['data'=>['status'=>'404','message'=>'no such user found']]);
    }

}



?>