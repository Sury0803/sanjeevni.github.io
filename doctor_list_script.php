<?php
include("includes/connection.php");
if(isset($_POST['doctor'])){

$count=count($_POST['name']); 

for($i=0;$i<$count;$i++){
    include("home_script.php");
    $sql="INSERT INTO `doctor_list`(`user_id`,`doctor name`, `specialization`, `sitting_time`) VALUES ('[$id][$i]',{$_POST['name'][$i]}','{$_POST['spe'][$i]}','{$_POST['time'][$i]}')";
    $con->query($sql);
    
    
}
}
?>