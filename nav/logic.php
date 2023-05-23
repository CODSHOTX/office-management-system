<?php
session_start();

$cnn= mysqli_connect('localhost','root','' );
mysqli_select_db($cnn, 'employees');
if(!$cnn){
    echo "Not able to establish comnnection";
}
$sql= "SELECT * FROM finances";
$query = mysqli_query($cnn,$sql);
if(isset($_POST['post'])){
    $title=$_POST['title'];
    $report=$_POST['report'];
    
    $sql= "INSERT INTO finances( title, report ) VALUES( '$title', '$report')";
    mysqli_query($cnn, $sql);
    header('location: ../frame-c.php?info=added');
    exit();
}
// Get post data based on id
if(isset($_REQUEST['fId'])){
    $id = $_REQUEST['fId'];
    $sql = "SELECT * FROM finances WHERE fId = $id";
    $query = mysqli_query($cnn, $sql);
}

// Delete a post
if(isset($_REQUEST['delete'])){
    $id = $_REQUEST['fId'];

    $sql = "DELETE FROM finances WHERE fId = $id";
    mysqli_query($cnn, $sql);

    header("Location: report.php");
    exit();
}

// Update a post
if(isset($_REQUEST['update'])){
    $id = $_REQUEST['fId'];
    $title = $_REQUEST['title'];
    $report = $_REQUEST['report'];

    $sql = "UPDATE posts SET title = '$title', report = '$report' WHERE fId = $id";
    mysqli_query($cnn, $sql);

    header("Location: ../viewreport.php");
    exit();
}


?>