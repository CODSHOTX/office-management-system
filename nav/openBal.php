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
            a{ display:block; background-color:rgb(7, 50, 65); color:white; text-decoration:none; width:100px; text-align:center;
        height: 15px; border-style:solid; border-width:4px; font-size:12px; border-radius:50px; border-color:rgb(7, 50, 65);}
    #content-box{
        width:90%; background-color: rgb(34, 34, 34); min-height:580px; margin-top:25px; margin-left:5% ;color:white;
    }
    body{ background-image: url("../pictures/offwall.jpg");}
    h1{color:white;}
    input{width: 300px; height:25px; border-radius:10px;font-size:16px; }
    .content-tab td{ 
        padding: 12px 15px;}
</style>
    <title>Document</title>
</head>
<body>
    <div id="content-box">
<form  action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
    
        
            <h1>Enter Opening balance</h1>

            <input type="number"  name="openM" required>
            <br>
            
            <button class="btn btn-dark" name="post">Add Post</button>
        </form>

</body>
</html>
<?php
if(isset($_POST['post'])){
    $openBalnce=$_POST['openM'];
    echo number_format($openBalnce);
    echo"</div>";
}
?>