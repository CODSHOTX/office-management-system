<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
        a{ display:block; background-color:white; color:black; text-decoration:none; width:100px; text-align:center;
        height: 15px; border-style:solid; border-width:4px; font-size:12px; border-radius:50px; border-color:rgb(7, 50, 65);}
    #contentbox{
        width:90%; background-color: rgb(34, 34, 34); min-height:580px; margin-top:25px; margin-left:5%
    }
    body{ background-color:white;}
#create{width:50%; margin-left:25%; background-color:grey; margin-top:25px; min-height:300px;
    border-radius:50px; text-align:center;

}
input{width: 300px; height:25px; border-radius:10px;font-size:16px; }
    .content-tab{color:black; background-color:grey;
        border-collapse: collapse; font-family:sans-serif;
        margin:25px 0; border-radius:5px 5px 0 0;
        font-size:16px; overflow:hidden;
        min=width:400px;

    }
    h2{color:white;}
  </style>
  <title>Document</title>
</head>
<body>
  <div id="contentbox">
<form action="../inc/create-inc.php" method="POST">
  <div id="create">

  <h2>CREATE DEPARTMENT</h2>
  
            <input type="text" name="dName" placeholder="Name...">

         <button type="submit" name="submit">Create</button>
         </br>
</br></br>
</br>
</div>
  </form>
</div>
</body></html>