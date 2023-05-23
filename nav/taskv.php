<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
     a{ display:block; background-color:rgb(7, 50, 65); color:white; text-decoration:none; width:100px; text-align:center;
        height: 15px; border-style:solid; border-width:4px; font-size:12px; border-radius:50px; border-color:rgb(7, 50, 65);}
    #content-box{
        width:90%; background-color: rgb(34, 34, 34); min-height:580px; margin-top:25px; margin-left:5%
    }
    body{ background-image: url("../pictures/offwall.jpg");}

    .content-tab{color:black; background-color:grey;
        border-collapse: collapse; font-family:sans-serif;
        margin:25px 0; border-radius:5px 5px 0 0;
        font-size:16px; overflow:hidden;
        min=width:400px;

    }
    h2{color:white;}

    .content-tab td{ 
        padding: 12px 15px;
    }
    .content-tab th{
        color:rgb(7, 50, 65);
    } 
    .content-tab tbody tr{
        border-bottom:1px solid white;
    }
    .content-tab tbody tr:last-of-type{
        border-bottom:2px solid rgb(7, 50, 65); }

</style>
    <title>Document</title>
</head>
<body>
<?php
session_start();
require_once '../inc/conn.php';
if(isset($_SESSION["deptId"])){
    if($_SESSION["deptId"]=="admin"){
     $name=$_SESSION["deptId"];
         
     }else if($_SESSION["deptId"]=="manager"){
       
       $name=$_SESSION['deptId'];
     }else if($_SESSION["deptId"]=="secretary"){
     
     $name=$_SESSION['deptId'];
   }else if($_SESSION["deptId"]=="marketer"){
   
   $name=$_SESSION['deptId'];
 }else if($_SESSION["deptId"]=="accountant"){
 
 $name=$_SESSION['deptId'];
}else if($_SESSION["deptId"]=="others"){

$name=$_SESSION['deptId'];
}}else{
       echo"<a href='login.php'>Log In</a>";
    }
echo "<div id='content-box'>";
$query="SELECT * FROM employees WHERE deptId ='$name' ";
        $result=mysqli_query($cnn, $query);
        if($result && mysqli_num_rows($result) == 0){
            die('There are no tasks to display');
        }
        echo"<a href='../index.php'>HOME</a>";

        echo"<center>";
        echo"<h2>TASKS</h2>";
        echo '<table border="0" class="content-tab" cellspacing="7">';
        echo '<tr><th>EMPLOYEE NAME</th><th>DEPARTMENT</th><th>TASK</th><th>DESCRIPTION</th><th>PROGRESS</th>
        <th>PRIORITY</th><th>EMPLOYEE EMAIL</th><th>DUE DATE</th><th>EDIT</th></tr>';

while($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
{
    echo '<tr>';
    echo '<td>'.$row['userName'].'</td>';
    echo '<td>'.$row['deptId'].'</td>';
    echo '<td>'.$row['tName'].'</td>';
    echo '<td>'.$row['tDesc'].'</td>';
    echo '<td>'.$row['tProg'].'</td>';
    echo '<td>'.$row['priority'].'</td>';
    echo '<td>'.$row['email'].'</td>';
    echo '<td>'.$row['ddate'].'</td>';
    echo "<td><a href=\"../edit.php?udt=".$row['userId']."\">Edit</a></td>";
    echo '</tr>';
}
echo '</table>';
echo"</center>";
?>


</body>
</html>