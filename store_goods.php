<?php
    include('connection.php');

    if(isset($_POST['enter_goods']))
    {

        //fetch items
        $itemno = $_POST['item_no'];
        $type = $_POST['type'];
        $name = $_POST['name'];
        $store =$_POST['store'];
  

    $insertdata = mysqli_query($conn, "INSERT INTO store_goods (item_no, type, name, store ) VALUES('$itemno' , '$type' , '$name' , '$store')" );

    if($insertdata){
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
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap-5.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="style2.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<style>
     .sidebar{
    background-color:  #00008b;
    width: 11%;
    padding-top: 5%;
    height: 100vh;
    position: absolute;
    z-index: 4;

    }
    .sidebar ul li{
        list-style: none;
    }

    .sidebar ul li a{
        text-decoration: none;
        color: white;
    }
    .main{
        height: 100vh;
        width: 90vw;
        padding-left: 12%;
        position: absolute;
        
    }

    hr {
      border: none;
      height: 5px;
      background-color: white;
    }

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
                    <label for="item_number" class="label">Item Number</label>
                    <input type="text" class="form-control" name="item_no" placeholder="Enter item number...">
                </div>
                <div class="col-lg-6 mb-3">
                    <label for="name" class="label">Item Type</label>
                    <select name="type" id="type" class="form-select">
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
                    <input type="text" class="form-control" name="name" placeholder="Enter item number...">
                </div>
                <div class="col-lg-6 mb-3">
                    <label for="store" class="label">Store</label>
                    <select name="store" id="store" class="form-select">
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