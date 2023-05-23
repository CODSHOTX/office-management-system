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
        width:90%; background-color: white; min-height:580px; margin-top:25px; margin-left:5%
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
        border-bottom:2px solid rgb(7, 50, 65); }

</style>
  <title>Document</title>
</head>
<body>
<?php
session_start();
require_once '../inc/conn.php';
echo "<div id='content-box'>";
$query="SELECT * FROM employees WHERE tName != '' ORDER BY priority";
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













         
  















          
        
        
       
<form action="../inc/task-inc.php" method="POST">

<center>
  <h2>TASK MANAGER</h2>
  <table class='content-tab' border="0">
  <tr><td><input type="text" name="name" placeholder="Employee Name..."></td></tr>

  <tr><td><input type="text" name="uid" placeholder="Employee ID..."></td></tr>

  <tr><td><input type="text" name="tname" placeholder="Task Name..."></td></tr>

  <tr><td><input type="text" name="desc" placeholder="Description..."></td></tr>

  <tr><td><select name="prog">
            <option value="">--Progress--</option>
              <option value="todo">TO DO</option>
              <option value="doing">DOING</option>
              <option value="done">DONE</option>
            </select></td></tr>

  <tr><td><select name="prty">
            <option value="">--Priority--</option>
              <option value="high">HIGH</option>
              <option value="med">MEDIUM</option>
              <option value="low">LOW</option>
            </select></td></tr>

  <tr><td>Due Date: <input type="date" name="due"></td></tr>
</table>
<br>
  <button type="submit" name="crt">Create Task</button>
</center>
     <?php echo "</div>"; ?> </div>
</body>
</html>
