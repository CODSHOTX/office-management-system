
<HTML>
 <HEAD>
  <TITLE> project </TITLE>
  <style>body{background-color: rgb(30,31,33);}
.dropbtn {
  background-color: rgb(30,31,33);
  color: white;text-align:center;
  padding:8px 4px; width:120px; height: 10px;
  font-size: 16px;text-decoration:none;
  border-style:solid; border-width:4px;
  margin: 4px; border-color: rgb(30,31,33);
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color:white;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgb(255, 72, 0);
  z-index: 1;
}

.dropdown-content a {
  color: white;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: rgb(255, 72, 0);}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: grey;}

  select{display:block; color:white; background-color: grey; width:120px;text-align:center; 
    height: 10px; border-style:solid; border-width:4px; text-decoration:none;
    padding:8px 4px; background-color:rgb(34, 34, 34); margin: 4px; border-color: rgb(34, 34, 34);}
h1{font-family:"Times New Roman", Times, serif; color:white; text-align:center;}
  a{display:block; color:white; width:120px;text-align:left; 
    height: 10px; border-style:solid; border-width:4px; text-decoration:none;
    padding:8px 4px; background-color:rgb(30,31,33); margin: 4px; border-color:rgb(30,31,33);}
    a:hover{display:block; color:white; background-color:rgb(255,72,0);}
    </style>
  
 </HEAD>
 <body>
   <?php
   session_start();
   if(isset($_SESSION["deptId"])){
            if($_SESSION["deptId"]=="admin"){

               "<h1>Osystem</h1><br><br>";
              
 echo "<a  href='nav/prof.php'target='frame-c'>PROFILE</a> <br>";
                    echo"<a  href='nav/dept.php' target='frame-c'>DEPARTMENTS</a>";
 
                    echo"<br> <a href='emp.php' target='frame-c'>EMPLOYEES</a>";
                    echo"<br><a  href='nav/task.php' target='frame-c'>TASKS</a>";
                    echo"<br><a  href='nav/sal.php'target='frame-c'>PAYROLL</a><br>";
                   echo "<div class='dropdown'>";
                   echo "<button class='dropbtn' >FINANCIALS</button>";
                    echo "<div class='dropdown-content'>";
                      echo"<a href='nav/openBal.php' target='frame-c'>Opening balance</a>";
                      echo "<a href='nav/report.php'target='frame-c'>Reports</a>";
                      echo"<a href='viewReport.php' target='frame-c'>View Reports</a>";
                      echo"</div>";
                      echo "</div>";
                   echo"<br><br><a  href='inc/logout.php' target='blank'>LOG OUT</a>";
                  
             }else if($_SESSION["deptId"]=="manager"){
              echo "<a  href='nav/prof.php'target='frame-c'>PROFILE</a>";
                echo"<a href='nav/task.php' target='frame-c'>TASKS</a>";
                echo"<a href='viewReport.php' target='frame-c'>View Reports</a>";
               echo"<a href='inc/logout.php' target='blank'>LOG OUT</a>";
               
             }else if($_SESSION["deptId"]=="secretary"){
              echo "<a  href='nav/prof.php'target='frame-c'>PROFILE</a> <br>";
              echo"<a href='nav/taskv.php' target='frame-c'>JOB ALLOCATION</a>";
             echo"<a href='inc/logout.php' target='blank'>LOG OUT</a>";
            
           }else if($_SESSION["deptId"]=="marketer"){
            echo "<a  href='nav/prof.php'target='frame-c'>PROFILE</a> <br>";
            echo"<a href='nav/taskv.php' target='frame-c'>JOB ALLOCATION</a>";
           echo"<a href='inc/logout.php' target='blank'>LOG OUT</a>";
          
         }else if($_SESSION["deptId"]=="accountant"){
          echo "<a  href='nav/prof.php'target='frame-c'>PROFILE</a> <br>";
          echo"<a href='nav/taskv.php' target='frame-c'>JOB ALLOCATION </a>";
          echo"<a href='nav/sal.php'  target='frame-c'>PAYROLL</a>";
          echo"<a href='nav/openBal.php' target='frame-c'>Opening balnce</a>";
          echo "<a href='nav/report.php'target='frame-c'>Reports</a>";
                      echo"<a href='viewReport.php' target='frame-c'>View Reports</a>";
         echo"<a href='inc/logout.php' target='blank'>LOG OUT</a>";
         
       }else if($_SESSION["deptId"]=="others"){
        echo "<a  href='nav/prof.php'target='frame-c'>PROFILE</a> <br>";
        echo"<a href='nav/taskv.php'  target='frame-c'>JOB ALLOCATION</a> <br>";
        
       echo"<a href='inc/logout.php' target='blank'>LOG OUT</a>";
       
     }}else{
               echo"<a href='login.php'>Log In</a>";
              
            }
            ?> 
</body>
</HTML>


