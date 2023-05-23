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
    body{ background-image: url("pictures/offwall.jpg");}

    .content-tab{color:black; background-color:grey;
        border-collapse: collapse; font-family:sans-serif;
        margin:25px 0; border-radius:5px 5px 0 0;
        font-size:16px; overflow:hidden;
        min=width:400px;

    }
    h2{color:white;}
    input{width: 300px; height:25px; border-radius:10px;font-size:16px; }
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
        border-bottom:2px solid rgb(7, 50, 65);}
    </style>
    <title>Document</title>
</head>
<body>
    

<?php
session_start();
require_once 'inc/conn.php';

$mail=$_POST['email'];
$qry="select * from employees where email='$mail'";

$res=mysqli_query($cnn,$qry) or die('Query failed. '.mysqli_error($cnn));
echo "<div id='content-box'>";
if (mysqli_num_rows($res)==0)
{
    echo"<a href='emp.php'>BACK</a><br/>";
	echo "There is no such record to display with email specified as $mail<br/>";
}
else
{
    echo"<a href='emp.php'>BACK</a>";
    echo"<center>";
        echo"<h2>EMPLOYEE INFO</h2>";
        echo '<table class="content-tab" border="1" cellspacing="7">';
        echo '<tr><th>USER ID</th><th>DEPARTMENT</th><th>EMPLOYEE NAME</th><th>EMPLOYEE EMAIL</th>
        <th>PHONE NO</th><th>SALARY</th><th>TASK</th><th colspan = "2" >ACTIONS</th></tr>';
 while($row=mysqli_fetch_array($res,MYSQLI_ASSOC))
 {
 echo '<tr>';
    echo '<td>'.$row['userId'].'</td>';
    echo '<td>'.$row['deptId'].'</td>';
    echo '<td>'.$row['userName'].'</td>';
    echo '<td>'.$row['email'].'</td>';
    echo '<td>'.$row['phoneNo'].'</td>';
    echo '<td>'.$row['empSal'].'</td>';
    echo '<td>'.$row['tName'].'</td>';
    echo "<td><a href=\"update.php?udt=".$row['userId']."\">Edit</a></td>";
    echo "<td><a href=\"del.php?id=".$row['userId']."\">Delete</a></td>";
    echo '</tr>';
 }
 echo '</table>';
 echo"</center>";
 echo "</div>";
}
 mysqli_close($cnn);
 ec
?>

</body>
</html>