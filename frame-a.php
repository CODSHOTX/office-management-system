<?php 
session_start();
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
?>
<!DOCTYPE html>
<html>
<head>
<style>
body{background-color:white;
}
h1 {font-family:"Times New Roman", Times, serif; color:black; text-align:left;}


#searchbox{width: 100px; height: 20px; margin-left:50%;
padding:4px; border-radius:5px; border:solid; background-image: url(pictures/search.png);
background-repeat:no-repeat; background-position:right;}
::placeholder{font-size: 14px;}
</style>
</head>
<body font-family="tahoma">

<h1>Welcome <?php echo $name; ?></h1>


<div style="width: 800px; margin:4px; font-size: 30px; color:white;">
<form action="search.php "target='frame-c' method="post">
<input type="text" name="email" id="searchbox" placeholder="Email">
<button type="submit" name="search">Search</button>

</form>

</div>
<hr>
</body>

</html>