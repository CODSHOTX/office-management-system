<?php
session_start();


?>
<!DOCTYPE html>
<html>
<head>
<title>Home</title>
</head>


<frameset cols="17%,83%">
    <frame noresize="noresize"  src="frame-b.php" frameborder="0">  

   
<noframes> Your Browser does not support frames </noframes>
<frameset rows="17%,80%">

 <frame noresize="noresize" name="frame-b" src="frame-a.php" frameborder="0">
 <frame noresize="noresize" name="frame-c" src="frame-c.php" frameborder="0">
<noframes> Your Browser does not support frames </noframes>
</frameset>  



</frameset>

</html>