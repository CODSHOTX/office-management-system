<?php
session_start();
require_once 'inc/conn.php';

$query="SELECT * FROM employees ORDER BY empId";
        $result=mysqli_query($cnn, $query);
        if($result && mysqli_num_rows($result) > 0){
            $user_data = mysqli_fetch_assoc($result);
            return $user_data;
        }
    header("location: assign.php");
    exit();


echo '<table border="1">';
echo '<tr><th>EMPLOYEE ID</th><th>Name</th><th>SALARY</th></tr>';
while($row=mysqli_fetch_array($res,mysqli_assoc()))
{
    echo '<tr>';
    echo '<td>'.$row['empId'].'</td>';
    echo '<td>'.$row['userName'].'</td>';
    echo '<td>'.$row['empSal'].'</td>';
    echo '</tr>';
}
echo '</table>';
 mysqli_close($cnn);
?>


<?php
$qry='select * from students order by stno';
$res=mysqli_query($cnn,$qry) or die('Query failed. '.mysqli_error($cnn));

if (mysqli_num_rows($res)==0)
{
	die('There is no records to display');
}


if(isset($_SESSION['delete']))
                {
                    echo $_SESSION['delete'];
                    unset($_SESSION['delete']);
                }

$del=$_GET['$dl'];
$dlt=mysqli_query($cnn,"DELETE FROM employees WHERE userId='$del'");
