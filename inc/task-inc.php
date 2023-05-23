<?php
if(isset($_POST["add"])){
    $eName=$_POST["name"];
    $eId=$_POST["eid"];
    $tDesc=$_POST["desc"];
    $tprog=$_POST["prog"];
    $priority=$_POST["priority"];
    $start=$_POSt["sdate"];
    $due=$_POST["ddate"];

    require_once 'conn.php';
    require_once 'func-inc.php';

    createSask($cnn, $tDesc,  $priority,$start, $due);

}else{
    header("location: ../pages/mytasks.php");
    exit();
}
?>