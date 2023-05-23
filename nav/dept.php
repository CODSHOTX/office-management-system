<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
      a{ display:block; background-color:white; color:black; text-decoration:none; width:100px; text-align:center;
        height: 15px;  font-size:12px; }
    #contentbox{
        width:90%; background-color: white;  min-height:580px; margin-top:25px; margin-left:5%
    }
    body{ background-color:white;}

    .content-tab{color:black; background-color:white;
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
        border-bottom:1px solid black;
    }
    .content-tab tbody tr:last-of-type{
        border-bottom:2px solid rgb(7, 50, 65);}
    </style>
    <title>Document</title>
</head>
<body>
<?php
session_start();
require_once '../inc/conn.php';



$qry="SELECT * FROM departments";
        $result=mysqli_query($cnn, $qry);
        if(mysqli_num_rows($result) == 0){
            die('There are no records to display');
        }
echo "<div id='contentbox'>";
        echo"<a href='../frame-c.php'>HOME</a>";
        echo"<center>";
       echo" <h2 >DEPARTMENT LIST</h2>";
echo '<table class="content-tab" border="0">';
echo '<tr><th>Department Id</th><th>&nbsp;Department Name</th>';

while($row=mysqli_fetch_array($result))
{
    echo '<tr>';
    echo '<td>'.$row['deptId'].'</td>';
    echo '<td>'.$row['deptName'].'</td>';
    echo '</tr>';
}
echo '</table>';
echo"<a href='create.php'>CREATE DEPARTMENT</a>";

echo"</center>";

 mysqli_close($cnn);
 echo "</div>";
?>
</body>
</html>




