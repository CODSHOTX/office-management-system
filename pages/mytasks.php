<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
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
  <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <!-- CSS Files -->
  <link id="pagestyle" href="../assets/css/material-dashboard.css?v=3.0.4" rel="stylesheet" />

  
</head>
 <!--   for color on link
          <a class="nav-link text-white active bg-gradient-primary" href="../../pages/dashboard.php">
           -->
           


       
            
    
<body class="g-sidenav-show  bg-gray-200">
<?php
   session_start();
   if(isset($_SESSION["deptId"])){
    //admin
            if($_SESSION["deptId"]=="admin"){
     echo '<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark" id="sidenav-main">';
 
echo  '<div class="sidenav-header">';
echo    '<i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>';
echo     '<a class="navbar-brand m-0" href=" https://demos.creative-tim.com/material-dashboard/pages/dashboard " target="_blank">';
echo      '<img src="../assets/img/logo-ct.png" class="navbar-brand-img h-100" alt="main_logo">';
echo    '<span class="ms-1 font-weight-bold text-white">'.$_SESSION["deptId"].'</span>';
echo    '</a>';
echo  '</div>';


echo   '<hr class="horizontal light mt-0 mb-2">';

echo  '<div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">';
echo    '<ul class="navbar-nav">';
      

      
        

          

          
  
echo  '<li class="nav-item">';
echo   '<a class="nav-link text-white " href="../pages/dashboard.php">';
    
echo     '<div class="text-white text-center me-2 d-flex align-items-center justify-content-center">';
echo       '<i class="material-icons opacity-10">dashboard</i>';
echo     '</div>';
    
echo    '<span class="nav-link-text ms-1">Dashboard</span>';
echo  '</a>';
  echo  '</li>';

  
  echo ' <li class="nav-item">';
  echo  '<a class="nav-link text-white " href="./employee.php">';
    
  echo    '<div class="text-white text-center me-2 d-flex align-items-center justify-content-center">';
  echo    '<i class="bi bi-person-fill"></i>';
  echo   '</div>';
    
  echo   '<span class="nav-link-text ms-1">Employees</span>';
  echo  ' </a>';
  echo  '</li>';

  
  echo  '<li class="nav-item">';
  echo   '<a class="nav-link text-white " href="payroll.php">';
    
  echo   '<div class="text-white text-center me-2 d-flex align-items-center justify-content-center">';
  echo       '<i class="material-icons opacity-10">receipt_long</i>';
  echo      '</div>';
    
  echo  '<span class="nav-link-text ms-1">Payrolls</span>';
  echo   '</a>';
  echo  '</li>';

  
  echo  '<li class="nav-item">';
  echo   '<a class="nav-link text-white " href="./department.php">';
    
  echo  '<div class="text-white text-center me-2 d-flex align-items-center justify-content-center">';
  echo     '<i class="material-icons opacity-10">table_view</i>';
  echo     '</div>';
    
  echo   '<span class="nav-link-text ms-1">Departments</span>';
  echo   '</a>';
  echo ' </li>';

  
  echo  '<li class="nav-item">';
  echo  '<a class="nav-link text-white " href="./tAllocation.php">';
    
  echo     '<div class="text-white text-center me-2 d-flex align-items-center justify-content-center">';
  echo       '<i class="bi bi-check2-square"></i>';
  echo     '</div>';
    
  echo  '<span class="nav-link-text ms-1">Task allocation</span>';
  echo   '</a>';
  echo  '</li>';

  echo  '<li class="nav-item">';
  echo  '<a class="nav-link text-white active bg-gradient-primary" href="./mytasks.php">';
    
  echo     '<div class="text-white text-center me-2 d-flex align-items-center justify-content-center">';
  echo       '<i class="bi bi-list-task"></i>';
  echo     '</div>';
    
  echo  '<span class="nav-link-text ms-1">My task </span>';
  echo   '</a>';
  echo  '</li>';

  echo  '<li class="nav-item">';
  echo  '<a class="nav-link text-white" href="viewReport.php">';
    
  echo     '<div class="text-white text-center me-2 d-flex align-items-center justify-content-center">';
  echo      '<i class="bi bi-book"></i>';
  echo ' </div>';
  echo  '<span class="nav-link-text ms-1">View report</span>';
  echo   '</a>';
  echo  '</li>';

  echo  '<li class="nav-item">';
  echo  '<a class="nav-link text-white " href="./notifications.php">';
    
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
  echo    '<a class="nav-link text-white " href="profile.php">';
    
  echo  '<div class="text-white text-center me-2 d-flex align-items-center justify-content-center">';
  echo      '<i class="material-icons opacity-10">person</i>';
  echo   ' </div>';
    
  echo   '<span class="nav-link-text ms-1">Profile</span>';
  echo  '</a>';
  echo '</li>';

  
  echo  '<li class="nav-item">';
  echo  '<a class="nav-link text-white " href="../inc/logout.php">';
    
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
echo      '<img src="../assets/img/logo-ct.png" class="navbar-brand-img h-100" alt="main_logo">';
echo       '<span class="ms-1 font-weight-bold text-white">'.$_SESSION["deptId"].'</span>';
echo    '</a>';
echo  '</div>';


echo   '<hr class="horizontal light mt-0 mb-2">';

echo  '<div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">';
echo    '<ul class="navbar-nav">';
      

      
        

          

          
  
echo  '<li class="nav-item">';
echo   '<a class="nav-link text-white " href="../pages/dashboard.php">';
    
echo     '<div class="text-white text-center me-2 d-flex align-items-center justify-content-center">';
echo       '<i class="material-icons opacity-10">dashboard</i>';
echo     '</div>';
    
echo    '<span class="nav-link-text ms-1">Dashboard</span>';
echo  '</a>';
  echo  '</li>';

  
  echo ' <li class="nav-item">';
  echo  '<a class="nav-link text-white " href="tAllocation.php">';
    
  echo    '<div class="text-white text-center me-2 d-flex align-items-center justify-content-center">';
  echo    '<i class="bi bi-list-task"></i>';
  echo   '</div>';
    
  echo   '<span class="nav-link-text ms-1">Task allocation</span>';
  echo  ' </a>';
  echo  '</li>';

  
  echo  '<li class="nav-item">';
  echo   '<a class="nav-link text-white active bg-gradient-primary" href="./mytasks.php">';
    
  echo   '<div class="text-white text-center me-2 d-flex align-items-center justify-content-center">';
  echo       '<i class="material-icons opacity-10">receipt_long</i>';
  echo      '</div>';
    
  echo  '<span class="nav-link-text ms-1">My tasks</span>';
  echo   '</a>';
  echo  '</li>';

  
  echo  '<li class="nav-item">';
  echo   '<a class="nav-link text-white " href="./virtual-reality.html">';
    
  echo  '<div class="text-white text-center me-2 d-flex align-items-center justify-content-center">';
  echo     '<i class="material-icons opacity-10">table_view</i>';
  echo     '</div>';
    
  
  
  echo  '<li class="nav-item">';
  echo  '<a class="nav-link text-white " href="./notifications.php">';
    
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
  echo    '<a class="nav-link text-white " href="profile.php">';
    
  echo  '<div class="text-white text-center me-2 d-flex align-items-center justify-content-center">';
  echo      '<i class="material-icons opacity-10">person</i>';
  echo   ' </div>';
    
  echo   '<span class="nav-link-text ms-1">Profile</span>';
  echo  '</a>';
  echo '</li>';

  
  echo  '<li class="nav-item">';
  echo  '<a class="nav-link text-white " href="../inc/logout.php">';
    
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
echo      '<img src="../assets/img/logo-ct.png" class="navbar-brand-img h-100" alt="main_logo">';
echo       '<span class="ms-1 font-weight-bold text-white">'.$_SESSION["deptId"].'</span>';
echo    '</a>';
echo  '</div>';


echo   '<hr class="horizontal light mt-0 mb-2">';

echo  '<div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">';
echo    '<ul class="navbar-nav">';
      

      
        

          

          
  
echo  '<li class="nav-item">';
echo   '<a class="nav-link text-white " href="../pages/dashboard.php">';
    
echo     '<div class="text-white text-center me-2 d-flex align-items-center justify-content-center">';
echo       '<i class="material-icons opacity-10">dashboard</i>';
echo     '</div>';
    
echo    '<span class="nav-link-text ms-1">Dashboard</span>';
echo  '</a>';
  echo  '</li>';

  
  

  //Secretary My tasks
  echo  '<li class="nav-item">';
  echo   '<a class="nav-link text-white active bg-gradient-primary" href="./mytasks.php">';
    
  echo   '<div class="text-white text-center me-2 d-flex align-items-center justify-content-center">';
  echo       '<i class="material-icons opacity-10">receipt_long</i>';
  echo      '</div>';
    
  echo  '<span class="nav-link-text ms-1">My tasks</span>';
  echo   '</a>';
  echo  '</li>';

  
  echo  '<li class="nav-item">';
  echo   '<a class="nav-link text-white " href="./virtual-reality.html">';
    
  echo  '<div class="text-white text-center me-2 d-flex align-items-center justify-content-center">';
  echo     '<i class="material-icons opacity-10">table_view</i>';
  echo     '</div>';
  echo    '<span class="nav-link-text ms-1">Applications</span>';
  echo  '</a>';
  echo  '</li>';

  
  
  echo  '<li class="nav-item">';
  echo  '<a class="nav-link text-white " href="./notifications.php">';
    
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
  echo    '<a class="nav-link text-white " href="profile.php">';
    
  echo  '<div class="text-white text-center me-2 d-flex align-items-center justify-content-center">';
  echo      '<i class="material-icons opacity-10">person</i>';
  echo   ' </div>';
    
  echo   '<span class="nav-link-text ms-1">Profile</span>';
  echo  '</a>';
  echo '</li>';

  
  echo  '<li class="nav-item">';
  echo  '<a class="nav-link text-white " href="../inc/logout.php">';
    
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
     echo      '<img src="../assets/img/logo-ct.png" class="navbar-brand-img h-100" alt="main_logo">';
     echo    '<span class="ms-1 font-weight-bold text-white">'.$_SESSION["deptId"].'</span>';
     echo    '</a>';
     echo  '</div>';
     
     
     echo   '<hr class="horizontal light mt-0 mb-2">';
     
     echo  '<div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">';
     echo    '<ul class="navbar-nav">';
           
     
           
             
     
               
     
               
       
     echo  '<li class="nav-item">';
     echo   '<a class="nav-link text-white " href="../pages/dashboard.php">';
         
     echo     '<div class="text-white text-center me-2 d-flex align-items-center justify-content-center">';
     echo       '<i class="material-icons opacity-10">dashboard</i>';
     echo     '</div>';
         
     echo    '<span class="nav-link-text ms-1">Dashboard</span>';
     echo  '</a>';
       echo  '</li>';
     
       
       echo ' <li class="nav-item">';
       echo  '<a class="nav-link text-white " href="./tables.html">';
         
       echo    '<div class="text-white text-center me-2 d-flex align-items-center justify-content-center">';
       echo    '<i class="bi bi-person-fill"></i>';
       echo   '</div>';
         
       echo   '<span class="nav-link-text ms-1">Customers</span>';
       echo  ' </a>';
       echo  '</li>';
     
       
       echo  '<li class="nav-item">';
       echo   '<a class="nav-link text-white " href="./billing.html">';
         
       echo   '<div class="text-white text-center me-2 d-flex align-items-center justify-content-center">';
       echo       '<i class="material-icons opacity-10">receipt_long</i>';
       echo      '</div>';
         
       echo  '<span class="nav-link-text ms-1">Financies</span>';
       echo   '</a>';
       echo  '</li>';
     
       
       
     
       
      
     
       echo  '<li class="nav-item">';
       echo  '<a class="nav-link text-white active bg-gradient-primary" href="./mytasks.php">';
         
       echo     '<div class="text-white text-center me-2 d-flex align-items-center justify-content-center">';
       echo       '<i class="bi bi-list-task"></i>';
       echo     '</div>';
         
       echo  '<span class="nav-link-text ms-1">My tasks </span>';
       echo   '</a>';
       echo  '</li>';
     
       
       echo  '<li class="nav-item">';
       echo  '<a class="nav-link text-white " href="./notifications.php">';
         
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
       echo    '<a class="nav-link text-white " href="profile.php">';
         
       echo  '<div class="text-white text-center me-2 d-flex align-items-center justify-content-center">';
       echo      '<i class="material-icons opacity-10">person</i>';
       echo   ' </div>';
         
       echo   '<span class="nav-link-text ms-1">Profile</span>';
       echo  '</a>';
       echo '</li>';
     
       
       echo  '<li class="nav-item">';
       echo  '<a class="nav-link text-white " href="../inc/logout.php">';
         
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
echo      '<img src="../assets/img/logo-ct.png" class="navbar-brand-img h-100" alt="main_logo">';
echo    '<span class="ms-1 font-weight-bold text-white">'.$_SESSION["deptId"].'</span>';
echo    '</a>';
echo  '</div>';


echo   '<hr class="horizontal light mt-0 mb-2">';

echo  '<div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">';
echo    '<ul class="navbar-nav">';
     

     
       

         

         
 
echo  '<li class="nav-item">';
echo   '<a class="nav-link text-white " href="../pages/dashboard.php">';
   
echo     '<div class="text-white text-center me-2 d-flex align-items-center justify-content-center">';
echo       '<i class="material-icons opacity-10">dashboard</i>';
echo     '</div>';
   
echo    '<span class="nav-link-text ms-1">Dashboard</span>';
echo  '</a>';
 echo  '</li>';

 
 echo ' <li class="nav-item">';
 echo  '<a class="nav-link text-white " href="./tables.html">';
   
 echo    '<div class="text-white text-center me-2 d-flex align-items-center justify-content-center">';
 echo    '<i class="bi bi-cash"></i>';
 echo   '</div>';
   
 echo   '<span class="nav-link-text ms-1">Expenditures</span>';
 echo  ' </a>';
 echo  '</li>';

 
 echo  '<li class="nav-item">';
 echo   '<a class="nav-link text-white " href="payroll.php">';
   
 echo   '<div class="text-white text-center me-2 d-flex align-items-center justify-content-center">';
 echo       '<i class="material-icons opacity-10">receipt_long</i>';
 echo      '</div>';
   
 echo  '<span class="nav-link-text ms-1">Payroll</span>';
 echo   '</a>';
 echo  '</li>';

 echo ' <li class="nav-item">';
 echo  '<a class="nav-link text-white " href="./tables.html">';
   
 echo    '<div class="text-white text-center me-2 d-flex align-items-center justify-content-center">';
 echo    '<i class="bi bi-book"></i>';
 echo   '</div>';
   
 echo   '<span class="nav-link-text ms-1">Reports</span>';
 echo  ' </a>';
 echo  '</li>';
 

 


 echo  '<li class="nav-item">';
 echo  '<a class="nav-link text-white active bg-gradient-primary" href="./mytasks.php">';
   
 echo     '<div class="text-white text-center me-2 d-flex align-items-center justify-content-center">';
 echo       '<i class="bi bi-list-task"></i>';
 echo     '</div>';
   
 echo  '<span class="nav-link-text ms-1">My tasks </span>';
 echo   '</a>';
 echo  '</li>';

 
 echo  '<li class="nav-item">';
 echo  '<a class="nav-link text-white " href="./notifications.php">';
   
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
 echo    '<a class="nav-link text-white " href="profile.php">';
   
 echo  '<div class="text-white text-center me-2 d-flex align-items-center justify-content-center">';
 echo      '<i class="material-icons opacity-10">person</i>';
 echo   ' </div>';
   
 echo   '<span class="nav-link-text ms-1">Profile</span>';
 echo  '</a>';
 echo '</li>';

 
 echo  '<li class="nav-item">';
 echo  '<a class="nav-link text-white " href="../inc/logout.php">';
   
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
  echo      '<img src="../assets/img/logo-ct.png" class="navbar-brand-img h-100" alt="main_logo">';
  echo    '<span class="ms-1 font-weight-bold text-white">Osystem</span>';
  echo    '</a>';
  echo  '</div>';
  
  
  echo   '<hr class="horizontal light mt-0 mb-2">';
  
  echo  '<div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">';
  echo    '<ul class="navbar-nav">';
        
  
        
          
  
            
  
            
    
  echo  '<li class="nav-item">';
  echo   '<a class="nav-link text-white " href="../pages/dashboard.php">';
      
  echo     '<div class="text-white text-center me-2 d-flex align-items-center justify-content-center">';
  echo       '<i class="material-icons opacity-10">dashboard</i>';
  echo     '</div>';
      
  echo    '<span class="nav-link-text ms-1">Dashboard</span>';
  echo  '</a>';
    echo  '</li>';
  
    
    
  
    echo  '<li class="nav-item">';
    echo  '<a class="nav-link text-white active bg-gradient-primary" href="./mytasks.php">';
      
    echo     '<div class="text-white text-center me-2 d-flex align-items-center justify-content-center">';
    echo       '<i class="bi bi-list-task"></i>';
    echo     '</div>';
      
    echo  '<span class="nav-link-text ms-1">My task </span>';
    echo   '</a>';
    echo  '</li>';

    echo  '<li class="nav-item">';
    echo  '<a class="nav-link text-white " href="report.php">';
      
    echo     '<div class="text-white text-center me-2 d-flex align-items-center justify-content-center">';
    echo       '<i class="bi bi-graph-up"></i>';
    echo     '</div>';
      
    echo  '<span class="nav-link-text ms-1">Reporting </span>';
    echo   '</a>';
    echo  '</li>';

    echo  '<li class="nav-item">';
    echo  '<a class="nav-link text-white " href="portfolio.php">';
      
    echo     '<div class="text-white text-center me-2 d-flex align-items-center justify-content-center">';
    echo       '<i class="bi bi-file-zip"></i>';
    echo     '</div>';
      
    echo  '<span class="nav-link-text ms-1">Portfolios </span>';
    echo   '</a>';
    echo  '</li>';
    
    
    echo  '<li class="nav-item">';
    echo  '<a class="nav-link text-white " href="./notifications.php">';
      
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
    echo    '<a class="nav-link text-white " href="profile.php">';
      
    echo  '<div class="text-white text-center me-2 d-flex align-items-center justify-content-center">';
    echo      '<i class="material-icons opacity-10">person</i>';
    echo   ' </div>';
      
    echo   '<span class="nav-link-text ms-1">Profile</span>';
    echo  '</a>';
    echo '</li>';
  
    
    echo  '<li class="nav-item">';
    echo  '<a class="nav-link text-white " href="../inc/logout.php">';
      
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

    <!--Mainbody-->
    
    <section class="vh-100">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col">
        <div class="card" id="list1" style="border-radius: .75rem; background-color: #eff1f2;">
          <div class="card-body py-4 px-4 px-md-5">

            <p class="h1 text-center mt-3 mb-4 pb-3 bg-gradient-primary text-light" >
              <i class="fas fa-check-square me-1"></i>
              <u >My Tasks</u>
            </p>
<form action="" method="post">
            <div class="pb-2">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-row align-items-center">
                    <table class="table align-items-center mb-0">
                      <tbody>
                      
                      <tr><td><div class="input-group input-group-outline mb-3 ">
                    <input name="tDesc" type="text" class="form-control border border-dark" id="exampleFormControlInput1"
                      placeholder="Add new..."></div></td>
                      <td><select class="form-control form-control-lg w-50 border border-dark" name="priority">
            <option value="">--Priority--</option>
              <option value="Low">LOW</option>
              <option value="Medium">MEDIUM</option>
              <option value="High">HIGH</option>
            </select></td>
                     <tr> <td><input class="form-control form-control-lg w-50 border border-dark" type="date" name="sdate"><br>Start date</td>
                        <td><input class="form-control form-control-lg w-50 border border-dark" type="date" name="ddate"><br>Due date</td></tr>
                    <!--<a href="#!" data-mdb-toggle="tooltip" title="Set due date"><i
                        class="fas fa-calendar-alt fa-lg me-3"></i></a>-->
                       
                        
                    <div>
                      <tr>
                        <td>
                      <button name="add" type="submit" class="btn btn-primary">Add</button></td></tr>
</tbody>
</table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
</form>
            <hr class="my-4">

            <div class="d-flex justify-content-end align-items-center mb-4 pt-2 pb-3">
              <p class="small mb-0 me-2 text-muted">Filter</p>
              <select class="select">
                <option value="1">All</option>
                <option value="2">Completed</option>
                <option value="3">Active</option>
                <option value="4">Has due date</option>
              </select>
              <p class="small mb-0 ms-4 me-2 text-muted">Sort</p>
              <select class="select">
                <option value="1">Added date</option>
                <option value="2">Due date</option>
              </select>
              <a href="#!" style="color: #23af89;" data-mdb-toggle="tooltip" title="Ascending"><i
                  class="fas fa-sort-amount-down-alt ms-2"></i></a>
            </div>

            <!--<ul class="list-group list-group-horizontal rounded-0 bg-transparent">
              <li
                class="list-group-item d-flex align-items-center ps-0 pe-3 py-1 rounded-0 border-0 bg-transparent">
                <div class="form-check">
                  <input class="form-check-input me-0" type="checkbox" value="" id="flexCheckChecked1"
                    aria-label="..." checked />
                </div>
              </li>
              <li
                class="list-group-item px-3 py-1 d-flex align-items-center flex-grow-1 border-0 bg-transparent">
                <p class="lead fw-normal mb-0">Buy groceries for next week</p>
              </li>
              <li class="list-group-item ps-3 pe-0 py-1 rounded-0 border-0 bg-transparent">
                <div class="d-flex flex-row justify-content-end mb-1">
                  <a href="#!" class="text-info" data-mdb-toggle="tooltip" title="Edit todo"><i
                      class="fas fa-pencil-alt me-3"></i></a>
                  <a href="#!" class="text-danger" data-mdb-toggle="tooltip" title="Delete todo"><i
                      class="fas fa-trash-alt"></i></a>
                </div>
                <div class="text-end text-muted">
                  <a href="#!" class="text-muted" data-mdb-toggle="tooltip" title="Created date">
                    <p class="small mb-0"><i class="fas fa-info-circle me-2"></i>28th Jun 2020</p>
                  </a>
                </div>
              </li>
            </ul>
            <ul class="list-group list-group-horizontal rounded-0">
              <li
                class="list-group-item d-flex align-items-center ps-0 pe-3 py-1 rounded-0 border-0 bg-transparent">
                <div class="form-check">
                  <input class="form-check-input me-0" type="checkbox" value="" id="flexCheckChecked2"
                    aria-label="..." />
                </div>
              </li>
              <li
                class="list-group-item px-3 py-1 d-flex align-items-center flex-grow-1 border-0 bg-transparent">
                <p class="lead fw-normal mb-0">Renew car insurance</p>
              </li>
              <li class="list-group-item px-3 py-1 d-flex align-items-center border-0 bg-transparent">
                <div
                  class="py-2 px-3 me-2 border border-warning rounded-3 d-flex align-items-center bg-light">
                  <p class="small mb-0">
                    <a href="#!" data-mdb-toggle="tooltip" title="Due on date">
                      <i class="fas fa-hourglass-half me-2 text-warning"></i>
                    </a>
                    28th Jun 2020
                  </p>
                </div>
              </li>
              <li class="list-group-item ps-3 pe-0 py-1 rounded-0 border-0 bg-transparent">
                <div class="d-flex flex-row justify-content-end mb-1">
                  <a href="#!" class="text-info" data-mdb-toggle="tooltip" title="Edit todo"><i
                      class="fas fa-pencil-alt me-3"></i></a>
                  <a href="#!" class="text-danger" data-mdb-toggle="tooltip" title="Delete todo"><i
                      class="fas fa-trash-alt"></i></a>
                </div>
                <div class="text-end text-muted">
                  <a href="#!" class="text-muted" data-mdb-toggle="tooltip" title="Created date">
                    <p class="small mb-0"><i class="fas fa-info-circle me-2"></i>28th Jun 2020</p>
                  </a>
                </div>
              </li>
            </ul>
            <ul class="list-group list-group-horizontal rounded-0 mb-2">
              <li
                class="list-group-item d-flex align-items-center ps-0 pe-3 py-1 rounded-0 border-0 bg-transparent">
                <div class="form-check">
                  <input class="form-check-input me-0" type="checkbox" value="" id="flexCheckChecked3"
                    aria-label="..." />
                </div>
              </li>
              <li
                class="list-group-item px-3 py-1 d-flex align-items-center flex-grow-1 border-0 bg-transparent">
                <p class="lead fw-normal mb-0 bg-light w-100 ms-n2 ps-2 py-1 rounded">Sign up for online
                  course</p>
              </li>
              <li class="list-group-item ps-3 pe-0 py-1 rounded-0 border-0 bg-transparent">
                <div class="d-flex flex-row justify-content-end mb-1">
                  <a href="#!" class="text-danger" data-mdb-toggle="tooltip" title="Delete todo"><i
                      class="fas fa-trash-alt"></i></a>
                </div>
                <div class="text-end text-muted">
                  <a href="#!" class="text-muted" data-mdb-toggle="tooltip" title="Created date">
                    <p class="small mb-0"><i class="fas fa-info-circle me-2"></i>28th Jun 2020</p>
                  </a>
                </div>
              </li>
            </ul>-->
<?php

require_once '../inc/conn.php';
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
echo "<div id='content-box'>";
$query="SELECT * FROM employees WHERE deptId ='$name' ";
        $result=mysqli_query($cnn, $query);
        if($result && mysqli_num_rows($result) == 0){
            die('There are no tasks to display');
        }
        

        echo"<center>";
       
        echo '<table class="table align-items-center mb-0"';
        echo '<tr><th><h5 class="mb-0  fs-6">Done/Undone</h5></th>
        <th><h5 class="mb-0  fs-6">Task</h5></th><th><h5 class="mb-0  fs-6">Priority</h5></th>
        <th><h5 class="mb-0  fs-6">Start date</h5></th><th><h5 class="mb-0  fs-6">Due date</h5></th><th><h5 class="mb-0  fs-6">Action</h5></th></tr>';

while($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
{
    echo '<tr>';
    echo '<td><div class="form-check">
    <input name="check" class="form-check-input" type="checkbox" value="done" id="flexCheckChecked" checked>
    <label class="form-check-label" for="flexCheckChecked">
      
    </label>
  </div></td>';
   
    echo '<td>'.$row['tDesc'].'</td>';
    echo '<td>'.$row['priority'].'</td>';
    echo '<td>'.$row['sdate'].'</td>';
    echo '<td>'.$row['ddate'].'</td>';
    echo "<td><a href=\"../edit.php?udt=".$row['userId']."\"><i class='bi bi-pen'></i></a></td>";
    echo '</tr>';
}
echo '</table>';
echo"</center>";
?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</body>
</html>