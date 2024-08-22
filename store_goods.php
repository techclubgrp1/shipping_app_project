<?php
     include('config.php');
     include("firebaseRDB.php");
 
     $db = new firebaseRDB($databaseURL);
    
    if(isset($_POST['enter_goods']))
    {
        $insert = $db-> insert("store",[
            //fetch items
            "goodsNumber" => $_POST['goodsNumber'],
            "goodsType" => $_POST['goodsType'],
            "goodsName" => $_POST['goodsName'],
            "storeNo" => $_POST['storeNo']
        ]);


    if($insert){
        $response = "Data submitted successfully";
    }
    else{
        $error = "not submitted";
    }

  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AFRICAN SHIPPING</title>
    <link rel="stylesheet" href="bootstrap-5.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="style2.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<style>
    
</style>
<body>
    <!-- navigation bar  starts here -->
    <?php require_once('navbar.html')?>

    <!-- sidebar -->
    <?php include('sidebar.php');  ?>
    <form action="store_goods.php" method ="POST">
     <!-- Main division -->
        <div class="main">
            <div class="row">
                <div class="col-lg-6 mb-3">
                    <label for="goodsNumber" class="label">Item Number</label>
                    <input type="text" class="form-control" name="goodsNumber" placeholder="Enter item number...">
                </div>
                <div class="col-lg-6 mb-3">
                    <label for="name" class="label">Item Type</label>
                    <select name="goodsType" id="type" class="form-select">
                        <option selected="">Select item type.....</option>
                        <option value="box">Box</option>
                        <option value="machinery">Machinery</option>
                        <option value="homeappliance">Home Appliance</option>
                        <option value="furniture">Furniture</option>
                        <option value="toiletries">Toiletries</option>
                        <option value="bike">Bike</option>
                        <option value="toy">Toys</option>                                   
                    </select>
                </div>    
                <div class="col-lg-6 mb-3">
                    <label for="name" class="label">Item Name</label>
                    <input type="text" class="form-control" name="goodsName" placeholder="Enter item number...">
                </div>
                <div class="col-lg-6 mb-3">
                    <label for="store" class="label">Store</label>
                    <select name="storeNO" id="store" class="form-select">
                        <option value="">Select store...</option>
                        <option value="storeA">Store A</option>
                        <option value="storeB">Store B</option>
                    </select>
                </div>
                 <div class="col-lg-6 mb-3">
                    <button class="btn btn-success" ><?php echo $response; ?> </button>
                </div>
                <div class="col-lg-6 mb-3 ">
                    <button class="btn btn-primary" name="enter_goods">ENTER</button>
                </div>             
            </div>
        
        </div>
    </form>

    
</body>
</html>