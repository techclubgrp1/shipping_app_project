<?php
    include("config.php");
    include("firebaseRDB.php");

    $db = new firebaseRDB($databaseURL);
    $id = $_GET['id'];
    $retrieve = $db->retrieve("sep/$id");
    $data = json_decode($retrieve, 1);
    

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AFRICAN SHIPPING</title>
    <link rel="stylesheet" href="bootstrap-5.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="style2.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<style>
    .main{
        height: 100vh;
        width: 90vw;
        padding-left: 12%;
        position: absolute;       
    }
</style>
<body>
    <!-- navigation bar  starts here -->
    <?php require_once('navbar.html')?>

    <!-- sidebar -->
    <?php include('sidebar.php');  ?>

   <form action="edit_truck_goods.php?id=<?php echo $id ?>" method="POST">
    <!-- Main division -->
    <div class="main">
        <div class="row">
             <div class="col-lg-6 mb-3">
                <label for="name" class="label">Item Number</label>
                <input type="text" class="form-control" value="<?php echo $data["goodsNumber"]?>" name="item_no" placeholder="Enter item number...">
            </div>
            <div class="col-lg-6 mb-3">
                <label for="name" class="label">Item Type</label>
                <input type="text" class="form-control" value="<?php echo $data["goodsName"]?>"  >
            </div>
           
        </div>
      
    </div>
    </form>
</body>
</html>