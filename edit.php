<?php
session_start();
require_once 'inc/conn.php';

    if(count($_POST)>0) {
        mysqli_query($cnn,"UPDATE employees set  tDesc='".$_POST['tDesc']."',
        tProg='".$_POST['tProg']."', priority='".$_POST['priority']."', sdate='".$_POST['ddate']."', ddate='".$_POST['ddate']."' WHERE userId='".$_POST['userId']."'");
        header("location: pages/mytasks.php");
        }
        $result = mysqli_query($cnn,"SELECT * FROM employees WHERE userId='".$_GET['udt']."'");
        $row= mysqli_fetch_array($result);
        ?>
        <!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="./assets/img/favicon.png">
  <title>
    Dashboard
  </title>
  <!-- Icons -->
  <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css"
    />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
  <!-- Nucleo Icons -->
  <link href="./assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="./assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <!-- CSS Files -->
  <link id="pagestyle" href="./assets/css/material-dashboard.css?v=3.0.4" rel="stylesheet" />

  
</head>
 <!--   for color on link
          <a class="nav-link text-white active bg-gradient-primary" href="../.pages/dashboard.php">
           -->
           


       
            
    
<body class="g-sidenav-show  bg-gray-200">
<?php
   
   if(isset($_SESSION["deptId"])){
    //admin
            if($_SESSION["deptId"]=="admin"){
     echo '<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark" id="sidenav-main">';
 
echo  '<div class="sidenav-header">';
echo    '<i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>';
echo     '<a class="navbar-brand m-0" href=" https://demos.creative-tim.com/material-dashboard/pages/dashboard " target="_blank">';
echo      '<img src="./assets/img/logo-ct.png" class="navbar-brand-img h-100" alt="main_logo">';
echo    '<span class="ms-1 font-weight-bold text-white">'.$_SESSION["deptId"].'</span>';
echo    '</a>';
echo  '</div>';


echo   '<hr class="horizontal light mt-0 mb-2">';

echo  '<div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">';
echo    '<ul class="navbar-nav">';
      

      
        

          

          
  
echo  '<li class="nav-item">';
echo   '<a class="nav-link text-white " href="pages/dashboard.php">';
    
echo     '<div class="text-white text-center me-2 d-flex align-items-center justify-content-center">';
echo       '<i class="material-icons opacity-10">dashboard</i>';
echo     '</div>';
    
echo    '<span class="nav-link-text ms-1">Dashboard</span>';
echo  '</a>';
  echo  '</li>';

  
  echo ' <li class="nav-item">';
  echo  '<a class="nav-link text-white " href="pages/employee.php">';
    
  echo    '<div class="text-white text-center me-2 d-flex align-items-center justify-content-center">';
  echo    '<i class="bi bi-person-fill"></i>';
  echo   '</div>';
    
  echo   '<span class="nav-link-text ms-1">Employees</span>';
  echo  ' </a>';
  echo  '</li>';

  
  echo  '<li class="nav-item">';
  echo   '<a class="nav-link text-white " href="pages/payroll.php">';
    
  echo   '<div class="text-white text-center me-2 d-flex align-items-center justify-content-center">';
  echo       '<i class="material-icons opacity-10">receipt_long</i>';
  echo      '</div>';
    
  echo  '<span class="nav-link-text ms-1">Payrolls</span>';
  echo   '</a>';
  echo  '</li>';

  
  echo  '<li class="nav-item">';
  echo   '<a class="nav-link text-white " href="pages/department.php">';
    
  echo  '<div class="text-white text-center me-2 d-flex align-items-center justify-content-center">';
  echo     '<i class="material-icons opacity-10">table_view</i>';
  echo     '</div>';
    
  echo   '<span class="nav-link-text ms-1">Departments</span>';
  echo   '</a>';
  echo ' </li>';

  
  echo  '<li class="nav-item">';
  echo  '<a class="nav-link text-white " href="pages/tAllocation.php">';
    
  echo     '<div class="text-white text-center me-2 d-flex align-items-center justify-content-center">';
  echo       '<i class="bi bi-check2-square"></i>';
  echo     '</div>';
    
  echo  '<span class="nav-link-text ms-1">Task allocation</span>';
  echo   '</a>';
  echo  '</li>';

  echo  '<li class="nav-item">';
  echo  '<a class="nav-link text-white active bg-gradient-primary" href="mytasks.php">';
    
  echo     '<div class="text-white text-center me-2 d-flex align-items-center justify-content-center">';
  echo       '<i class="bi bi-list-task"></i>';
  echo     '</div>';
    
  echo  '<span class="nav-link-text ms-1">My task </span>';
  echo   '</a>';
  echo  '</li>';
  echo  '<li class="nav-item">';
  echo  '<a class="nav-link text-white " href="pages/viewReport.php">';
    
  echo     '<div class="text-white text-center me-2 d-flex align-items-center justify-content-center">';
  echo      '<i class="bi bi-book"></i>';
  echo ' </div>';
  echo  '<span class="nav-link-text ms-1">View report</span>';
  echo   '</a>';
  echo  '</li>';
  
  echo  '<li class="nav-item">';
  echo  '<a class="nav-link text-white " href="pages/notifications.php">';
    
  echo     '<div class="text-white text-center me-2 d-flex align-items-center justify-content-center">';
  echo      '<i class="material-icons opacity-10">notifications</i>';
  echo ' </div>';
    
  echo    '<span class="nav-link-text ms-1">Notifications</span>';
  echo  '</a>';
  echo  '</li>';

  
  echo   '<li class="nav-item mt-3">';
  echo    ' <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">Account pages</h6>';
  echo   '</li>';
  
  echo  '<li class="nav-item">';
  echo    '<a class="nav-link text-white " href="pages/profile.php">';
    
  echo  '<div class="text-white text-center me-2 d-flex align-items-center justify-content-center">';
  echo      '<i class="material-icons opacity-10">person</i>';
  echo   ' </div>';
    
  echo   '<span class="nav-link-text ms-1">Profile</span>';
  echo  '</a>';
  echo '</li>';

  
  echo  '<li class="nav-item">';
  echo  '<a class="nav-link text-white " href="inc/logout.php">';
    
  echo    '<div class="text-white text-center me-2 d-flex align-items-center justify-content-center">';
  echo  '<i class="material-icons opacity-10">login</i>';
        echo   '</div>';
    
        echo   '<span class="nav-link-text ms-1">Log out</span>';
        echo  '</a>';
        echo  '</li>';

  


          

        
      
        echo'</ul>';
        echo '</div>';
  
        echo '<div class="sidenav-footer position-absolute w-100 bottom-0 ">';
        echo '<div class="mx-3">';
        echo  ' <a class="btn bg-gradient-primary mt-4 w-100" href="https://www.creative-tim.com/product/material-dashboard-pro?ref=sidebarfree" type="button">Upgrade to pro</a>';
        echo'</div>';
    
        echo'</div>';
  
        echo'</aside>';
        //start of manager
      }else if($_SESSION["deptId"]=="manager"){
        echo '<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark" id="sidenav-main">';

echo  '<div class="sidenav-header">';
echo    '<i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>';
echo     '<a class="navbar-brand m-0" href=" https://demos.creative-tim.com/material-dashboard/pages/dashboard " target="_blank">';
echo      '<img src="./assets/img/logo-ct.png" class="navbar-brand-img h-100" alt="main_logo">';
echo       '<span class="ms-1 font-weight-bold text-white">'.$_SESSION["deptId"].'</span>';
echo    '</a>';
echo  '</div>';


echo   '<hr class="horizontal light mt-0 mb-2">';

echo  '<div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">';
echo    '<ul class="navbar-nav">';
      

      
        

          

          
  
echo  '<li class="nav-item">';
echo   '<a class="nav-link text-white " href="pages/dashboard.php">';
    
echo     '<div class="text-white text-center me-2 d-flex align-items-center justify-content-center">';
echo       '<i class="material-icons opacity-10">dashboard</i>';
echo     '</div>';
    
echo    '<span class="nav-link-text ms-1">Dashboard</span>';
echo  '</a>';
  echo  '</li>';

  
  echo ' <li class="nav-item">';
  echo  '<a class="nav-link text-white " href="pages/tAllocation.php">';
    
  echo    '<div class="text-white text-center me-2 d-flex align-items-center justify-content-center">';
  echo    '<i class="bi bi-list-task"></i>';
  echo   '</div>';
    
  echo   '<span class="nav-link-text ms-1">Task allocation</span>';
  echo  ' </a>';
  echo  '</li>';

  
  echo  '<li class="nav-item">';
  echo   '<a class="nav-link text-white active bg-gradient-primary" href="pages/mytasks.php">';
    
  echo   '<div class="text-white text-center me-2 d-flex align-items-center justify-content-center">';
  echo       '<i class="material-icons opacity-10">receipt_long</i>';
  echo      '</div>';
    
  echo  '<span class="nav-link-text ms-1">My tasks</span>';
  echo   '</a>';
  echo  '</li>';

  
  echo  '<li class="nav-item">';
  echo   '<a class="nav-link text-white " href="./pages/virtual-reality.html">';
    
  echo  '<div class="text-white text-center me-2 d-flex align-items-center justify-content-center">';
  echo     '<i class="material-icons opacity-10">table_view</i>';
  echo     '</div>';
    
  
  
  echo  '<li class="nav-item">';
  echo  '<a class="nav-link text-white " href="pages/notifications.php">';
    
  echo     '<div class="text-white text-center me-2 d-flex align-items-center justify-content-center">';
  echo      '<i class="material-icons opacity-10">notifications</i>';
  echo ' </div>';
    
  echo    '<span class="nav-link-text ms-1">Notifications</span>';
  echo  '</a>';
  echo  '</li>';

  
  echo   '<li class="nav-item mt-3">';
  echo    ' <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">Account pages</h6>';
  echo   '</li>';
  
  echo  '<li class="nav-item">';
  echo    '<a class="nav-link text-white " href="pages/profile.php">';
    
  echo  '<div class="text-white text-center me-2 d-flex align-items-center justify-content-center">';
  echo      '<i class="material-icons opacity-10">person</i>';
  echo   ' </div>';
    
  echo   '<span class="nav-link-text ms-1">Profile</span>';
  echo  '</a>';
  echo '</li>';

  
  echo  '<li class="nav-item">';
  echo  '<a class="nav-link text-white " href="inc/logout.php">';
    
  echo    '<div class="text-white text-center me-2 d-flex align-items-center justify-content-center">';
  echo  '<i class="material-icons opacity-10">login</i>';
        echo   '</div>';
    
        echo   '<span class="nav-link-text ms-1">Log In</span>';
        echo  '</a>';
        echo  '</li>';

  
        



          

        
      
        echo'</ul>';
        echo '</div>';
  
        echo '<div class="sidenav-footer position-absolute w-100 bottom-0 ">';
        echo '<div class="mx-3">';
        echo  ' <a class="btn bg-gradient-primary mt-4 w-100" href="https://www.creative-tim.com/product/material-dashboard-pro?ref=sidebarfree" type="button">Upgrade to pro</a>';
        echo'</div>';
    
        echo'</div>';
  
        echo'</aside>';}
        //Secretary
      else if($_SESSION["deptId"]=="secretary"){
        
        echo '<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark" id="sidenav-main">';

echo  '<div class="sidenav-header">';
echo    '<i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>';
echo     '<a class="navbar-brand m-0" href=" https://demos.creative-tim.com/material-dashboard/pages/dashboard " target="_blank">';
echo      '<img src="./assets/img/logo-ct.png" class="navbar-brand-img h-100" alt="main_logo">';
echo       '<span class="ms-1 font-weight-bold text-white">'.$_SESSION["deptId"].'</span>';
echo    '</a>';
echo  '</div>';


echo   '<hr class="horizontal light mt-0 mb-2">';

echo  '<div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">';
echo    '<ul class="navbar-nav">';
      

      
        

          

          
  
echo  '<li class="nav-item">';
echo   '<a class="nav-link text-white " href="pages/dashboard.php">';
    
echo     '<div class="text-white text-center me-2 d-flex align-items-center justify-content-center">';
echo       '<i class="material-icons opacity-10">dashboard</i>';
echo     '</div>';
    
echo    '<span class="nav-link-text ms-1">Dashboard</span>';
echo  '</a>';
  echo  '</li>';

  
  

  //Secretary My tasks
  echo  '<li class="nav-item">';
  echo   '<a class="nav-link text-white active bg-gradient-primary" href="pages/mytasks.php">';
    
  echo   '<div class="text-white text-center me-2 d-flex align-items-center justify-content-center">';
  echo       '<i class="material-icons opacity-10">receipt_long</i>';
  echo      '</div>';
    
  echo  '<span class="nav-link-text ms-1">My tasks</span>';
  echo   '</a>';
  echo  '</li>';

  
  echo  '<li class="nav-item">';
  echo   '<a class="nav-link text-white " href="./pages/virtual-reality.html">';
    
  echo  '<div class="text-white text-center me-2 d-flex align-items-center justify-content-center">';
  echo     '<i class="material-icons opacity-10">table_view</i>';
  echo     '</div>';
  echo    '<span class="nav-link-text ms-1">Applications</span>';
  echo  '</a>';
  echo  '</li>';

  
  
  echo  '<li class="nav-item">';
  echo  '<a class="nav-link text-white " href="pages/notifications.php">';
    
  echo     '<div class="text-white text-center me-2 d-flex align-items-center justify-content-center">';
  echo      '<i class="material-icons opacity-10">notifications</i>';
  echo ' </div>';
    
  echo    '<span class="nav-link-text ms-1">Notifications</span>';
  echo  '</a>';
  echo  '</li>';

  
  echo   '<li class="nav-item mt-3">';
  echo    ' <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">Account pages</h6>';
  echo   '</li>';
  
  echo  '<li class="nav-item">';
  echo    '<a class="nav-link text-white " href="pages/profile.php">';
    
  echo  '<div class="text-white text-center me-2 d-flex align-items-center justify-content-center">';
  echo      '<i class="material-icons opacity-10">person</i>';
  echo   ' </div>';
    
  echo   '<span class="nav-link-text ms-1">Profile</span>';
  echo  '</a>';
  echo '</li>';

  
  echo  '<li class="nav-item">';
  echo  '<a class="nav-link text-white " href="inc/logout.php">';
    
  echo    '<div class="text-white text-center me-2 d-flex align-items-center justify-content-center">';
  echo  '<i class="material-icons opacity-10">login</i>';
        echo   '</div>';
    
        echo   '<span class="nav-link-text ms-1">Log In</span>';
        echo  '</a>';
        echo  '</li>';

  
        



          

        
      
        echo'</ul>';
        echo '</div>';
  
        echo '<div class="sidenav-footer position-absolute w-100 bottom-0 ">';
        echo '<div class="mx-3">';
        echo  ' <a class="btn bg-gradient-primary mt-4 w-100" href="https://www.creative-tim.com/product/material-dashboard-pro?ref=sidebarfree" type="button">Upgrade to pro</a>';
        echo'</div>';
    
        echo'</div>';
  
        echo'</aside>';}
        //Marketer
      else if($_SESSION["deptId"]=="marketer"){
        
          echo '<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark" id="sidenav-main">';
     
     echo  '<div class="sidenav-header">';
     echo    '<i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>';
     echo     '<a class="navbar-brand m-0" href=" https://demos.creative-tim.com/material-dashboard/pages/dashboard " target="_blank">';
     echo      '<img src="./assets/img/logo-ct.png" class="navbar-brand-img h-100" alt="main_logo">';
     echo    '<span class="ms-1 font-weight-bold text-white">'.$_SESSION["deptId"].'</span>';
     echo    '</a>';
     echo  '</div>';
     
     
     echo   '<hr class="horizontal light mt-0 mb-2">';
     
     echo  '<div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">';
     echo    '<ul class="navbar-nav">';
           
     
           
             
     
               
     
               
       
     echo  '<li class="nav-item">';
     echo   '<a class="nav-link text-white " href="pages/dashboard.php">';
         
     echo     '<div class="text-white text-center me-2 d-flex align-items-center justify-content-center">';
     echo       '<i class="material-icons opacity-10">dashboard</i>';
     echo     '</div>';
         
     echo    '<span class="nav-link-text ms-1">Dashboard</span>';
     echo  '</a>';
       echo  '</li>';
     
       
       echo ' <li class="nav-item">';
       echo  '<a class="nav-link text-white " href="./pages/tables.html">';
         
       echo    '<div class="text-white text-center me-2 d-flex align-items-center justify-content-center">';
       echo    '<i class="bi bi-person-fill"></i>';
       echo   '</div>';
         
       echo   '<span class="nav-link-text ms-1">Customers</span>';
       echo  ' </a>';
       echo  '</li>';
     
       
       echo  '<li class="nav-item">';
       echo   '<a class="nav-link text-white " href="./pages/billing.html">';
         
       echo   '<div class="text-white text-center me-2 d-flex align-items-center justify-content-center">';
       echo       '<i class="material-icons opacity-10">receipt_long</i>';
       echo      '</div>';
         
       echo  '<span class="nav-link-text ms-1">Financies</span>';
       echo   '</a>';
       echo  '</li>';
     
       
       
     
       
      
     
       echo  '<li class="nav-item">';
       echo  '<a class="nav-link text-white active bg-gradient-primary" href="pages/mytasks.php">';
         
       echo     '<div class="text-white text-center me-2 d-flex align-items-center justify-content-center">';
       echo       '<i class="bi bi-list-task"></i>';
       echo     '</div>';
         
       echo  '<span class="nav-link-text ms-1">My tasks </span>';
       echo   '</a>';
       echo  '</li>';
     
       
       echo  '<li class="nav-item">';
       echo  '<a class="nav-link text-white " href="pages/notifications.php">';
         
       echo     '<div class="text-white text-center me-2 d-flex align-items-center justify-content-center">';
       echo      '<i class="material-icons opacity-10">notifications</i>';
       echo ' </div>';
         
       echo    '<span class="nav-link-text ms-1">Notifications</span>';
       echo  '</a>';
       echo  '</li>';
     
       
       echo   '<li class="nav-item mt-3">';
       echo    ' <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">Account pages</h6>';
       echo   '</li>';
       
       echo  '<li class="nav-item">';
       echo    '<a class="nav-link text-white " href="pages/profile.php">';
         
       echo  '<div class="text-white text-center me-2 d-flex align-items-center justify-content-center">';
       echo      '<i class="material-icons opacity-10">person</i>';
       echo   ' </div>';
         
       echo   '<span class="nav-link-text ms-1">Profile</span>';
       echo  '</a>';
       echo '</li>';
     
       
       echo  '<li class="nav-item">';
       echo  '<a class="nav-link text-white " href="inc/logout.php">';
         
       echo    '<div class="text-white text-center me-2 d-flex align-items-center justify-content-center">';
       echo  '<i class="material-icons opacity-10">login</i>';
             echo   '</div>';
         
             echo   '<span class="nav-link-text ms-1">Log out</span>';
             echo  '</a>';
             echo  '</li>';
     
       
     
     
               
     
             
           
             echo'</ul>';
             echo '</div>';
       
             echo '<div class="sidenav-footer position-absolute w-100 bottom-0 ">';
             echo '<div class="mx-3">';
             echo  ' <a class="btn bg-gradient-primary mt-4 w-100" href="https://www.creative-tim.com/product/material-dashboard-pro?ref=sidebarfree" type="button">Upgrade to pro</a>';
             echo'</div>';
         
             echo'</div>';
       
             echo'</aside>';
}
//accountant
else if($_SESSION["deptId"]=="accountant"){
 
        
    echo '<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark" id="sidenav-main">';

echo  '<div class="sidenav-header">';
echo    '<i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>';
echo     '<a class="navbar-brand m-0" href=" https://demos.creative-tim.com/material-dashboard/pages/dashboard " target="_blank">';
echo      '<img src="./assets/img/logo-ct.png" class="navbar-brand-img h-100" alt="main_logo">';
echo    '<span class="ms-1 font-weight-bold text-white">'.$_SESSION["deptId"].'</span>';
echo    '</a>';
echo  '</div>';


echo   '<hr class="horizontal light mt-0 mb-2">';

echo  '<div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">';
echo    '<ul class="navbar-nav">';
     

     
       

         

         
 
echo  '<li class="nav-item">';
echo   '<a class="nav-link text-white " href="pages/dashboard.php">';
   
echo     '<div class="text-white text-center me-2 d-flex align-items-center justify-content-center">';
echo       '<i class="material-icons opacity-10">dashboard</i>';
echo     '</div>';
   
echo    '<span class="nav-link-text ms-1">Dashboard</span>';
echo  '</a>';
 echo  '</li>';

 
 echo ' <li class="nav-item">';
 echo  '<a class="nav-link text-white " href="./pages/tables.html">';
   
 echo    '<div class="text-white text-center me-2 d-flex align-items-center justify-content-center">';
 echo    '<i class="bi bi-cash"></i>';
 echo   '</div>';
   
 echo   '<span class="nav-link-text ms-1">Expenditures</span>';
 echo  ' </a>';
 echo  '</li>';

 
 echo  '<li class="nav-item">';
 echo   '<a class="nav-link text-white " href="./pages/billing.html">';
   
 echo   '<div class="text-white text-center me-2 d-flex align-items-center justify-content-center">';
 echo       '<i class="material-icons opacity-10">receipt_long</i>';
 echo      '</div>';
   
 echo  '<span class="nav-link-text ms-1">Payroll</span>';
 echo   '</a>';
 echo  '</li>';

 echo ' <li class="nav-item">';
 echo  '<a class="nav-link text-white " href="./pages/tables.html">';
   
 echo    '<div class="text-white text-center me-2 d-flex align-items-center justify-content-center">';
 echo    '<i class="bi bi-book"></i>';
 echo   '</div>';
   
 echo   '<span class="nav-link-text ms-1">Reports</span>';
 echo  ' </a>';
 echo  '</li>';
 

 


 echo  '<li class="nav-item">';
 echo  '<a class="nav-link text-white active bg-gradient-primary" href="pages/mytasks.php">';
   
 echo     '<div class="text-white text-center me-2 d-flex align-items-center justify-content-center">';
 echo       '<i class="bi bi-list-task"></i>';
 echo     '</div>';
   
 echo  '<span class="nav-link-text ms-1">My tasks </span>';
 echo   '</a>';
 echo  '</li>';

 
 echo  '<li class="nav-item">';
 echo  '<a class="nav-link text-white " href="pages/notifications.php">';
   
 echo     '<div class="text-white text-center me-2 d-flex align-items-center justify-content-center">';
 echo      '<i class="material-icons opacity-10">notifications</i>';
 echo ' </div>';
   
 echo    '<span class="nav-link-text ms-1">Notifications</span>';
 echo  '</a>';
 echo  '</li>';

 
 echo   '<li class="nav-item mt-3">';
 echo    ' <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">Account pages</h6>';
 echo   '</li>';
 
 echo  '<li class="nav-item">';
 echo    '<a class="nav-link text-white " href="pages/profile.php">';
   
 echo  '<div class="text-white text-center me-2 d-flex align-items-center justify-content-center">';
 echo      '<i class="material-icons opacity-10">person</i>';
 echo   ' </div>';
   
 echo   '<span class="nav-link-text ms-1">Profile</span>';
 echo  '</a>';
 echo '</li>';

 
 echo  '<li class="nav-item">';
 echo  '<a class="nav-link text-white " href="inc/logout.php">';
   
 echo    '<div class="text-white text-center me-2 d-flex align-items-center justify-content-center">';
 echo  '<i class="material-icons opacity-10">login</i>';
       echo   '</div>';
   
       echo   '<span class="nav-link-text ms-1">Log out</span>';
       echo  '</a>';
       echo  '</li>';

 


         

       
     
       echo'</ul>';
       echo '</div>';
 
       echo '<div class="sidenav-footer position-absolute w-100 bottom-0 ">';
       echo '<div class="mx-3">';
       echo  ' <a class="btn bg-gradient-primary mt-4 w-100" href="https://www.creative-tim.com/product/material-dashboard-pro?ref=sidebarfree" type="button">Upgrade to pro</a>';
       echo'</div>';
   
       echo'</div>';
 
       echo'</aside>';
}
//others
else if($_SESSION["deptId"]=="others"){
  echo '<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark" id="sidenav-main">';

  echo  '<div class="sidenav-header">';
  echo    '<i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>';
  echo     '<a class="navbar-brand m-0" href=" https://demos.creative-tim.com/material-dashboard/pages/dashboard " target="_blank">';
  echo      '<img src="./assets/img/logo-ct.png" class="navbar-brand-img h-100" alt="main_logo">';
  echo    '<span class="ms-1 font-weight-bold text-white">Osystem</span>';
  echo    '</a>';
  echo  '</div>';
  
  
  echo   '<hr class="horizontal light mt-0 mb-2">';
  
  echo  '<div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">';
  echo    '<ul class="navbar-nav">';
        
  
        
          
  
            
  
            
    
  echo  '<li class="nav-item">';
  echo   '<a class="nav-link text-white " href="pages/dashboard.php">';
      
  echo     '<div class="text-white text-center me-2 d-flex align-items-center justify-content-center">';
  echo       '<i class="material-icons opacity-10">dashboard</i>';
  echo     '</div>';
      
  echo    '<span class="nav-link-text ms-1">Dashboard</span>';
  echo  '</a>';
    echo  '</li>';
  
    
    
  
    echo  '<li class="nav-item">';
    echo  '<a class="nav-link text-white active bg-gradient-primary" href="pages/mytasks.php">';
      
    echo     '<div class="text-white text-center me-2 d-flex align-items-center justify-content-center">';
    echo       '<i class="bi bi-list-task"></i>';
    echo     '</div>';
      
    echo  '<span class="nav-link-text ms-1">My task </span>';
    echo   '</a>';
    echo  '</li>';

    echo  '<li class="nav-item">';
    echo  '<a class="nav-link text-white " href="./pages/rtl.html">';
      
    echo     '<div class="text-white text-center me-2 d-flex align-items-center justify-content-center">';
    echo       '<i class="bi bi-graph-up"></i>';
    echo     '</div>';
      
    echo  '<span class="nav-link-text ms-1">Reporting </span>';
    echo   '</a>';
    echo  '</li>';

    echo  '<li class="nav-item">';
    echo  '<a class="nav-link text-white " href="./pages/rtl.html">';
      
    echo     '<div class="text-white text-center me-2 d-flex align-items-center justify-content-center">';
    echo       '<i class="bi bi-file-zip"></i>';
    echo     '</div>';
      
    echo  '<span class="nav-link-text ms-1">Portfolios </span>';
    echo   '</a>';
    echo  '</li>';
    echo  '<li class="nav-item">';
    echo  '<a class="nav-link text-white " href="./pages/rtl.html">';
      
    echo     '<div class="text-white text-center me-2 d-flex align-items-center justify-content-center">';
    echo       '<i class="bi bi-arrow-up-right-circle-fill"></i>';
    echo     '</div>';
      
    echo  '<span class="nav-link-text ms-1">Goals </span>';
    echo   '</a>';
    echo  '</li>';
    
    echo  '<li class="nav-item">';
    echo  '<a class="nav-link text-white " href="pages/notifications.php">';
      
    echo     '<div class="text-white text-center me-2 d-flex align-items-center justify-content-center">';
    echo      '<i class="material-icons opacity-10">notifications</i>';
    echo ' </div>';
      
    echo    '<span class="nav-link-text ms-1">Notifications</span>';
    echo  '</a>';
    echo  '</li>';
  
    
    echo   '<li class="nav-item mt-3">';
    echo    ' <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">Account pages</h6>';
    echo   '</li>';
    
    echo  '<li class="nav-item">';
    echo    '<a class="nav-link text-white " href="pages/profile.php">';
      
    echo  '<div class="text-white text-center me-2 d-flex align-items-center justify-content-center">';
    echo      '<i class="material-icons opacity-10">person</i>';
    echo   ' </div>';
      
    echo   '<span class="nav-link-text ms-1">Profile</span>';
    echo  '</a>';
    echo '</li>';
  
    
    echo  '<li class="nav-item">';
    echo  '<a class="nav-link text-white " href="inc/logout.php">';
      
    echo    '<div class="text-white text-center me-2 d-flex align-items-center justify-content-center">';
    echo  '<i class="material-icons opacity-10">login</i>';
          echo   '</div>';
      
          echo   '<span class="nav-link-text ms-1">Log out</span>';
          echo  '</a>';
          echo  '</li>';
  
    
  
  
            
  
          
        
          echo'</ul>';
          echo '</div>';
    
          echo '<div class="sidenav-footer position-absolute w-100 bottom-0 ">';
          echo '<div class="mx-3">';
          echo  ' <a class="btn bg-gradient-primary mt-4 w-100" href="https://www.creative-tim.com/product/material-dashboard-pro?ref=sidebarfree" type="button">Upgrade to pro</a>';
          echo'</div>';
      
          echo'</div>';
    
          echo'</aside>';

}else{
  echo"<a href='login.php'>Log In</a>";
 
}}
?> 
<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
 <!-- Navbar -->
 <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" data-scroll="true">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="../index.php">Osystem</a></li>
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">My Tasks</li>
          </ol>
          <h6 class="font-weight-bolder mb-0">My Tasks</h6>
        </nav>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          <div class="ms-md-auto pe-md-3 d-flex align-items-center">
            <div class="input-group input-group-outline">
              <label class="form-label">Type here...</label>
              <input type="text" class="form-control">
            </div>
          </div>
          <ul class="navbar-nav  justify-content-end">
            <li class="nav-item d-flex align-items-center">
              <a href="../pages/sign-in.html" class="nav-link text-body font-weight-bold px-0">
                <i class="fa fa-user me-sm-1"></i>
                <span class="d-sm-inline d-none">Sign out</span>
              </a>
            </li>
            <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                </div>
              </a>
            </li>
            <li class="nav-item px-3 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-body p-0">
                <i class="fa fa-cog fixed-plugin-button-nav cursor-pointer"></i>
              </a>
            </li>
            <li class="nav-item dropdown pe-2 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-body p-0" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fa fa-bell cursor-pointer"></i>
              </a>
              <ul class="dropdown-menu  dropdown-menu-end  px-2 py-3 me-sm-n4" aria-labelledby="dropdownMenuButton">
                <li class="mb-2">
                  <a class="dropdown-item border-radius-md" href="javascript:;">
                    <div class="d-flex py-1">
                      <div class="my-auto">
                        <img src="../assets/img/team-2.jpg" class="avatar avatar-sm  me-3 ">
                      </div>
                      <div class="d-flex flex-column justify-content-center">
                        <h6 class="text-sm font-weight-normal mb-1">
                          <span class="font-weight-bold">New message</span> from Laur
                        </h6>
                        <p class="text-xs text-secondary mb-0">
                          <i class="fa fa-clock me-1"></i>
                          13 minutes ago
                        </p>
                      </div>
                    </div>
                  </a>
                </li>
                <li class="mb-2">
                  <a class="dropdown-item border-radius-md" href="javascript:;">
                    <div class="d-flex py-1">
                      <div class="my-auto">
                        <img src="../assets/img/small-logos/logo-spotify.svg" class="avatar avatar-sm bg-gradient-dark  me-3 ">
                      </div>
                      <div class="d-flex flex-column justify-content-center">
                        <h6 class="text-sm font-weight-normal mb-1">
                          <span class="font-weight-bold">New album</span> by Travis Scott
                        </h6>
                        <p class="text-xs text-secondary mb-0">
                          <i class="fa fa-clock me-1"></i>
                          1 day
                        </p>
                      </div>
                    </div>
                  </a>
                </li>
                <li>
                  <a class="dropdown-item border-radius-md" href="javascript:;">
                    <div class="d-flex py-1">
                      <div class="avatar avatar-sm bg-gradient-secondary  me-3  my-auto">
                        <svg width="12px" height="12px" viewBox="0 0 43 36" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                          <title>credit-card</title>
                          <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <g transform="translate(-2169.000000, -745.000000)" fill="#FFFFFF" fill-rule="nonzero">
                              <g transform="translate(1716.000000, 291.000000)">
                                <g transform="translate(453.000000, 454.000000)">
                                  <path class="color-background" d="M43,10.7482083 L43,3.58333333 C43,1.60354167 41.3964583,0 39.4166667,0 L3.58333333,0 C1.60354167,0 0,1.60354167 0,3.58333333 L0,10.7482083 L43,10.7482083 Z" opacity="0.593633743"></path>
                                  <path class="color-background" d="M0,16.125 L0,32.25 C0,34.2297917 1.60354167,35.8333333 3.58333333,35.8333333 L39.4166667,35.8333333 C41.3964583,35.8333333 43,34.2297917 43,32.25 L43,16.125 L0,16.125 Z M19.7083333,26.875 L7.16666667,26.875 L7.16666667,23.2916667 L19.7083333,23.2916667 L19.7083333,26.875 Z M35.8333333,26.875 L28.6666667,26.875 L28.6666667,23.2916667 L35.8333333,23.2916667 L35.8333333,26.875 Z"></path>
                                </g>
                              </g>
                            </g>
                          </g>
                        </svg>
                      </div>
                      <div class="d-flex flex-column justify-content-center">
                        <h6 class="text-sm font-weight-normal mb-1">
                          Payment successfully completed
                        </h6>
                        <p class="text-xs text-secondary mb-0">
                          <i class="fa fa-clock me-1"></i>
                          2 days
                        </p>
                      </div>
                    </div>
                  </a>
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->
    <div class="card bg-white">
  <div class="card-header bg-gradient-primary text-white">
   <h1 class="text-white"> Edit tasks</h1>
  </div>
  <div class="card-body">
    

        <form method="post" action="">
       
        <input type="hidden" name="userId" value="<?php echo $row['userId']; ?>">
        <br>
        <div class="content-tab">
        Employee Name: <?php echo $row['userName']; ?>
        <br><br>     
<!--Task Name: <br>
<input type="text" name="tName" value="<?php echo $row['tName']; ?>"><br><br>-->
<table class="table align-items-center mb-0">
  <tr><td>
<h5>Task :</h5></td>  <td><input class=" form-control-lg b-grey  w-50 border border-dark" name="tDesc" type="text" class="form-control " 
                    value="<?php echo $row['tDesc']; ?>"></td></tr>

  <tr>
    <td>
<h5>Task Progress:</h5></td>
<td><div class="form-check">
    <input name="tProg" class="form-check-input" type="checkbox" value="done" id="flexCheckChecked" checked>
    <label class="form-check-label" for="flexCheckChecked">
      
    </label>
  </div></td>
<!--<select name="tProg">
          <option value="<?php echo $row['tProg']; ?>">--prog--</option>
            <option value="todo">TO DO</option>
            <option value="doing">DOING</option>
            <option value="done">DONE</option>
          </select>--><br><br>
<tr><td><h5>Task Priority:</h5></td>
          <td><select class="form-control form-control-lg b-grey  w-50 border border-dark" name="priority">
          <option value="<?php echo $row['priority']; ?>">--priority--</option>
            <option value="High">HIGH</option>
            <option value="Med">MEDIUM</option>
            <option value="Low">LOW</option>
          </select></td></tr>
          <tr>
          <td><h5>Task Start Date: </h5></td>
          <td><input class="form-control form-control-lg w-50 border border-dark"type="date" name="sdate" value="<?php echo $row['sdate']; ?>"></td></tr>
<tr>
  <td><h5>Task Due Date: </h5></td>
          <td><input class="form-control form-control-lg w-50 border border-dark" type="date" name="ddate" value="<?php echo $row['ddate']; ?>">
</td>
</tr>
        <tr><td rolspan="2"><button type="submit" name="UPDATE"  class="btn btn-primary ">UPDATE</button></td></tr>
</table>
    </div>
        </form>
    </div>
   
  </div>
</div>   
        
        </body>
        </html>