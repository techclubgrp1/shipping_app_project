<?php
require_once('connection.php');
$sqlDeleteStudent= mysqli_query($conn, 
"DELETE FROM  lorry_goods2 WHERE no = '".$_GET['id']."'");
if($sqlDeleteStudent)
{
    echo "user deleted successfully";
    header('location:view_truck_goods.php');

}
else
{
"error occured. please try again";
}

?>