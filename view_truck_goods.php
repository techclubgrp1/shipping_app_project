<?php

    include("config.php");
    include("firebaseRDB.php");

    $db = new firebaseRDB($databaseURL);
   
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- ... (your existing head content) ... -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap-5.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<style>
    .main{
        height: 100vh;
        width: 90vw;
        padding-left: 12%;
        position: absolute;
        
    }

</style>
</head>
<body>
    <?php
        include('navbar.html');
        include('sidebar.php');
    ?>

    <form action="view_truck_goods.php" method="POST">
        <div class="main">
            <div class="form-group">
                <label for="search_item_no">Search by Item Number:</label>
                <input type="text" class="form-control" id="search_item_no" name="search_item_no" value="" placeholder="Enter Item Number">
            </div>
            <button type="submit" class="btn btn-primary">Search</button>

            <?php if(isset($_POST['search_item_no'])): ?>
                <h2>Search Result:</h2>
                <table class="table table-stripped table-hover table-responsive">
                    <thead>
                        <tr>                     
                            <th scpoe ="col">Item Number</th>
                            <th scope ="col">Type</th>
                            <th scope ="col">Action </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $data = $db->retrieve("sep");
                        $data = json_decode($data, 1);
                        
                        $found = false;
                        if(is_array($data)){
                            foreach($data as $id => $film){
                                if($film['goodsNumber'] == $_POST['search_item_no']){
                                    $found = true;
                                    ?>
                                    <tr>
                                        <td><?php echo $film['goodsNumber']?></td>
                                        <td><?php echo $film['goodsType']?></td>
                                        <td>
                                            <a href="" class="btn btn-primary btn-sm">
                                            <i class="fa fa-edit"></i>
                                            </a>
                                            <a href="" class="btn btn-info btn-sm">
                                            <i class="fa fa-eye"></i> 
                                            </a>
                                            <a href="" class="btn btn-danger btn-sm">
                                            <i class="fa fa-trash"></i>                                  
                                            </a>
                                        </td>
                                    </tr>
                                    <?php
                                    break;
                                }
                            }
                            if(!$found){
                                ?>
                                <tr>
                                    <td colspan="3">Item not found!</td>
                                </tr>
                                <?php
                            }
                        } else {
                            ?>
                            <tr>
                                <td colspan="3">No data found in the database!</td>
                            </tr>
                            <?php
                        }
                        ?>
                    </tbody>
                </table>
            <?php endif; ?>


            <h2>All Itemsit:</h2>
            <table class="table table-stripped table-hover table-responsive">
                <thead>
                    <tr>                     
                        <th scpoe ="col">Item Number</th>
                        <th scope ="col">Type</th>
                        <th scope ="col">Action </th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $data = $db->retrieve("sep");
                    $data = json_decode($data, 1);
                    
                    if(is_array($data)){
                        foreach($data as $id => $film){
                            ?>
                            <tr>
                                <td><?php echo $film['goodsNumber']?></td>
                                <td><?php echo $film['goodsType']?></td>
                                <td>
                                    <a href="" class="btn btn-primary btn-sm">
                                    <i class="fa fa-edit"></i>
                                    </a>
                                    <a href="" class="btn btn-info btn-sm">
                                    <i class="fa fa-eye"></i> 
                                    </a>
                                    <a href="" class="btn btn-danger btn-sm">
                                    <i class="fa fa-trash"></i>                                  
                                    </a>
                                </td>
                            </tr>
                        <?php 
                        }
                    } else {
                        ?>
                        <tr>
                            <td colspan="3">No data found in the database!</td>
                        </tr>
                        <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </form>
</body>
</html>

<?php
// Close the database connection

?>