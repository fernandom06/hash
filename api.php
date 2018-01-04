<?php
header('Content-type: application/json');
$hash=$_GET["hash"];

if ($_GET["n"]==1){
    $hash=md5($hash);
    $data=['hash'=>"".$hash.""];
    $prueba=json_encode($data);
    echo $prueba;
}

if ($_GET["n"]==2){
    $hash=sha1($hash);
    $data=['hash'=>"".$hash.""];
    $prueba=json_encode($data);
    echo $prueba;
}
if ($_GET["n"]==3){
    $hash=hash("sha256",$hash);
    $data=['hash'=>"".$hash.""];
    $prueba=json_encode($data);
    echo $prueba;
}

?>