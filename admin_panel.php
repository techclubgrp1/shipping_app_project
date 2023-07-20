<?php
 include('connection.php');

if(isset($_POST['enter_goods']))
{
    //fetch data
    $itemno = $_POST['item_no'];
    $type = $_POST['type'];
    
    //submit form data
    $insertdata = mysqli_query($conn, "INSERT INTO lorry_goods (itemno ,type) VALUES('$itemno' , '$type')");

    if($insertdata){

        $response =  "data entered successfully";
    }
    else{
        echo "data not submitted";
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap-5.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="style2.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />


   
    


</head>

<style>
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
    <div class="shadow-lg mb-5 bg-white rounded">Larger shadow
        <div class="sidebar shadow">
            <ul>
                <li>
                    <a href="#">
                    <i class="fa fa-truck"></i> 
                     <span> Enter Truck Goods</span>
                </a>
                </li>
                <hr>
                <li>
                    <a href="#">
                        <i class="fas fa-pen"></i> 
                        <span> Enter Store Goods</span>

                    </a>
                </li>
                <hr> 
                <li>
                    <a href="#">
                        <i class="fa fa-eye"></i> 
                        <span>View Goods </span>
                    </a>
                </li>
                
                <hr>
                <li>
                    <a href="#">
                        <i class="fa fa-shopping-cart"></i> 
                        <span> Edit Cart</span>
                    
                    </a>
                </li>
                <hr>
                <li>
                    <a href="#">
                        <i class="fas fa-newspaper"></i> 
                        <span> News</span>

                    </a>
                </li>
                <hr>                
            </ul>
        </div>
    </div>
   <form action="admin_panel.php" method="POST">
    <!-- Main division -->
    <div class="main">
        <div class="row">
             <div class="col-lg-6 mb-3">
                <label for="name" class="label">Item Number</label>
                <input type="text" class="form-control" name="item_no" placeholder="Enter item number...">
            </div>
            <div class="col-lg-6 mb-3">
                <label for="name" class="label">Item Type</label>
                <select name="type" id="type" class="form-select">
                    <option selected="">Select item type.....</option>
                    <option value="box">Box</option>
                    <option value="machinery">Machinery</option>
                    <option value="furniture">Furniture</option>
                    <option value="bike">Bike</option>
                    <option value="toy">Toy</option>
                    
                </select>
            </div>
            <div class="col-lg-6 mb-3">
                <button class="btn btn-primary" name="enter_goods">ENTER</button>
            </div>
            <div class="col-lg-6 mb-3">
                <button class="btn btn-success" >   <?php echo $response;  ?></button>
            </div>
        </div>
      
    </div>
    </form>
</body>
</html>