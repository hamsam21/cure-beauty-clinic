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
    $sql = "INSERT INTO users(name,E_mail,password,phone,city)
    VALUES('$darr[0]','$darr[1]','$darr[2]','$darr[3]','$darr[4]')";

    if(mysqli_query($connection,$sql))
    {
        echo json_encode(['data'=>['status'=>'200','message'=>'new user added correctlly']]);
    }else
    {
        echo json_encode(['data'=>['status'=>'500','message'=>'an error occure try again']]);
    }
  
}

?>