<?php

require_once '../inc/conn.php';
require_once '../inc/func-inc.php';
$daysWork=0;
$rate=0;
$sal=0;
$ot=3;
$gp=0;



$query = "SELECT * FROM employees WHERE empSal>=0 ";
$result = mysqli_query($cnn, $query);
if($result){
    if(isset($_GET['email'])){
        if(isset($_POST['calc'])){
            $daysWork=$_POST['days'];
            $rate=$_POST['rate'];
            $sal=$daysWork*$rate;
            $gp=$ot*$sal;
        }
    }
}
echo '<div class="contentbox">';

echo"<center>";
        echo"<h2>PAYROLL LIST</h2>";
        echo '<table class="content-tab" border="0" cellspacing="7">';
        echo '<tr><th>USER ID</th><th>EMPLOYEE NAME</th><th>EMPLOYEE EMAIL</th>
        <th>SALARY</th><th colspan = "2" >ACTIONS</th></tr>';
        while($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
        {
            echo '<tr>';
            echo '<td>'.$row['userId'].'</td>';
            
            echo '<td>'.$row['userName'].'</td>';
            echo '<td>'.$row['email'].'</td>';
          
            echo '<td>'.number_format($row['empSal']).'</td>';
            echo '<td>'.'</td>';
            echo "<td><a href=\"payrol.php?udt=".$row['userId']."\">Edit</a></td>";
           
            echo '</tr>';
        }
        echo '</table>';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <style>
           body{ background-color: white;}
         a{ display:block; background-color:white; color:black; text-decoration:none; width:100px; text-align:center;
        height: 15px;  border-width:4px; font-size:12px; border-radius:50px; border-color:black;}
    .contentbox{
        width:90%; background-color:white; min-height:580px; margin-top:25px; margin-left:5%}
    input{width: 300px; height:25px; border-radius:10px;font-size:18px; }
    ::placeholder{font-size:18px;}
    button {width: 100px; border-radius:40px; }
#paybox{width:50%; margin-left:25%; background-color:grey; margin-top:25px; height:300px;
 border-radius:50px; text-align:center;
}
h2{color:White; font-family:tahoma; text-align:center}
p{color:white;}
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
        border-bottom:1px solid white;
    }
    .content-tab tbody tr:last-of-type{
        border-bottom:2px solid rgb(7, 50, 65);
    }
    </style>
    <title>Document</title>
</head>
<body>
    
       

<?php echo"</div>";?>
 
  <?php echo"</div>";?>
</body>
</html>
  