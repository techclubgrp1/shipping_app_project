<?php
    require_once('connection.php');

    if(isset($_POST['updaterecords']))
        {
            //fetch data
            $itemno = $_POST['item_no'];
            $type = $_POST['type'];

            //perform sql query
            $updateRecords = mysqli_query($conn, "UPDATE lorry_goods2 set itemno = '$itemno', type ='$type'
             WHERE no='".$_GET['id']."'");

            if($updateRecords){
                $response="Records updated successfully";
            }
            else{
                $response="Error occured";
            }
        }





?>