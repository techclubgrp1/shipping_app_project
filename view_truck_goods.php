<?php
    include('connection.php');
    $result = null;

    if(isset($_POST['view_btn'])) {

        $selectedTable = $_POST['container'];
    

      // Step 4: Fetch data from the selected table
      if ($selectedTable === 'lorry_goods' || $selectedTable === 'lorry_goods2'){
       
        $sql = "SELECT * FROM " .$selectedTable;
        $result = $conn->query($sql);

      
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
    <?php require_once('navbar.html'); ?>

    <?php require_once('sidebar.php'); ?>

    <form action="view_truck_goods.php" method ="POST">
        <div class="main">
            <div class="row">
                <div class="col-lg-6">
                    <label for="container" class="label">Container</label>
                    <select name="container" id="container" class ="form-select">
                        <option value="">select container...</option>
                        <option value="lorry_goods">lorry_goods</option>
                        <option value="lorry_goods2">lorry_goods2</option>
                    </select>
                </div>
                <div class="col-lg-6" style ="padding-top: 20px;" >
                    <button class = "btn btn-primary" name = "view_btn"  type="submit">View</button>
                </div>
            </div>

            <table class="table table-stripped table-hover table-responsive">
                <thead>
                    <tr>
                        <th scope="col">no</th>
                        <th scpoe ="col">Item Number</th>
                        <th scope ="col">Type</th>
                        <th scope = "col">Entered on</th>
                        <th scope ="col">Action </th>
                    </tr>
                </thead>
                <tbody>
                <?php if ($result && $result->num_rows > 0) { ?>
                    <?php while ($fetchrecord = $result->fetch_assoc()) {?> 
                    <tr>
                        <td><?php echo $fetchrecord['no']?></td>
                        <td><?php echo $fetchrecord['itemno']?></td>
                        <td><?php echo $fetchrecord['type']?></td>
                        <td><?php echo $fetchrecord['entered_on']?></td>
                        <td>
                                <a href="edit-enrollment.php?id=<?php echo $fetchrecord['no']?>" class="btn btn-primary btn-sm">
                                <i class="fa fa-edit"></i>
                                </a>
                                <a href="view-enrollment.php?id=<?php echo $fetchrecord['no']?>" class="btn btn-info btn-sm">
                                <i class="fa fa-eye"></i> 
                                </a>
                                <a href="delete-enrollment.php?id=<?php echo $fetchrecord['no']?>" class="btn btn-danger btn-sm">
                                <i class="fa fa-trash"></i> 
                                    
                                </a>
                            </td>
                    </tr>
                    <?php  }?>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </form>

</body>
</html>
<?php
// Close the database connection
$conn->close();
?>