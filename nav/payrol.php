<?php
session_start();
require_once '../inc/conn.php';

    if(count($_POST)>0) {
        mysqli_query($cnn,"UPDATE employees set userName='".$_POST['userName']."', email='".$_POST['email']."', empSal='".$_POST['empSal']."' WHERE userId='".$_POST['userId']."'");
        header("location: sal.php?rowUpdated");
        }
        $result = mysqli_query($cnn,"SELECT * FROM employees WHERE userId='".$_GET['udt']."'");
        $row= mysqli_fetch_array($result);
        ?>
        <html>
        <head>
        <style>
            a{ display:block; background-color:white; color:black; text-decoration:none; width:100px; text-align:center;
        height: 15px; border-style:solid; border-width:4px; font-size:12px; border-radius:50px; border-color:rgb(7, 50, 65);}
    #content-box{
        width:90%; background-color: rgb(34, 34, 34); min-height:580px; margin-top:25px; margin-left:5%
    }
    body{ background-color:white;}
#paybox{width:50%; margin-left:25%; background-color:white; margin-top:25px; min-height:300px;
    border-radius:50px; text-align:center;

}
input{width: 300px; height:25px; border-radius:10px;font-size:16px; }
    .content-tab{color:black; background-color:grey;
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
        color:grey;
    } 
    .content-tab tbody tr{
        border-bottom:1px solid black;
    }
    .content-tab tbody tr:last-of-type{
        border-bottom:2px solid rgb(7, 50, 65);
    }
        </style>    
        <title></title></head>
        <body>
        <div id='content-box'>
      
        <a href='emp.php'>EMPLOYEE LIST</a>
        <div id="paybox">
        <form method="post" action="">
        <input type="hidden" name="userId" value="<?php echo $row['userId']; ?>">
        <br>
       
        Employee Name: <br>
        <input type="text" name="userName" value="<?php echo $row['userName']; ?>">
        <br><br>
        
        Employee Salary in Dollars: <br>
        <input type="number" name="empSal" value="<?php echo $row['empSal']; ?>">
        <br><br>
          
        Employee Email:<br>
        <input type="text" name="email" value="<?php echo $row['email']; ?>">
        <br><br>

        <input type="submit" name="submit" value="UPDATE">
        </form>
</div>
</div>
        </body>
        </html>