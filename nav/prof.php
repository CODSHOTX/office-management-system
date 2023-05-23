<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style> a{ display:block; background-color:white; color:black; text-decoration:none; width:100px; text-align:center;
        height: 15px; border-style:solid; border-width:4px; font-size:12px; border-radius:50px; border-color:white;}
    #content-box{
        width:90%;  background-color: white; min-height:580px; margin-top:25px; margin-left:5%
    }
    body{ background-color:white;}

    .content-tab{color:black; background-color:white;
        border-collapse: collapse; font-family:sans-serif;
        margin:25px 0; border-radius:5px 5px 0 0;
        font-size:16px; overflow:hidden;
        min=width:400px;

    }
    h2{color:grey;}

    .content-tab td{ 
        padding: 12px 15px;
    }
    .content-tab th{
        color:rgb(7, 50, 65);
    } 
    .content-tab tbody tr{
        border-bottom:1px solid black;
    }
    .content-tab tbody tr:last-of-type{
        border-bottom:2px solid rgb(7, 50, 65);
    }</style>
    <title>Document</title>
</head>
<body>
    
</body>

<?php 
session_start();
require_once '../inc/conn.php';
     $sql = "SELECT * FROM employees WHERE deptId = '".$_SESSION['deptId']."'";
     $result = mysqli_query($cnn, $sql);
     if($result && mysqli_num_rows($result) == 0){
         die('There are no records to display');
     }
     echo "<div id='content-box'>";
     echo"<a href='../index.php'>HOME</a>";
             echo"<center>";
             echo"<h2>PROFILE</h2>";
             echo '<table class="content-tab" border="1" cellspacing="7">';
             echo '<tr><th> DEPARTMENT</th><th>  &nbsp; EMPLOYEE NAME</th><th>EMPLOYEE EMAIL</th>
             <th>PHONE NO</th><th>SALARY</th><th>TASK NAME</th><th>TASK DESCRIPTION</th><th> &nbsp;PROGRESS</th>
             <th> &nbsp;PRIORITY</th><th>DUE</th></tr>';
     
     while($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
     {
         echo '<tr>';
         echo '<td>'.$row['deptId'].'</td>';
         echo '<td>'.$row['userName'].'</td>';
         echo '<td>'.$row['email'].'</td>';
         echo '<td>'.$row['phoneNo'].'</td>';
         echo '<td>'.$row['empSal'].'</td>';
         echo '<td>'.$row['tName'].'</td>';
         echo '<td>'.$row['tDesc'].'</td>';
         echo '<td>'.$row['tProg'].'</td>';
         echo '<td>'.$row['priority'].'</td>';
         echo '<td>'.$row['ddate'].'</td>';
         echo '</tr>';
     }
     echo '</table>';
     echo"</center>";
     echo "</div>";
     mysqli_close($cnn);
?>
</html>