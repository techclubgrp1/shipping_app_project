

<?php
include('connection.php');
$result = null;

$search_item_no = ""; // Initialize the search input variable

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $search_item_no = $_POST["search_item_no"]; // Get the entered item_no from the form
}

// Step 4: Fetch data from the selected table
$sql = "SELECT * FROM lorry_goods2";
if (!empty($search_item_no)) {
    // If a search item_no is provided, add a WHERE clause to filter results
    $sql .= "WHERE itemno LIKE '%$search_item_no%'";
}
$result = $conn->query($sql);
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
    <?php require_once('navbar.html'); ?>
    <?php require_once('sidebar.php'); ?>

    <form action="view_truck_goods.php" method="POST">
        <div class="main">
            <div class="form-group">
                <label for="search_item_no">Search by Item Number:</label>
                <input type="text" class="form-control" id="search_item_no" name="search_item_no" value="<?php echo $search_item_no; ?>" placeholder="Enter Item Number">
            </div>
            <button type="submit" class="btn btn-primary">Search</button>

            <table class="table table-stripped table-hover table-responsive">
                <!-- ... (your existing table headers) ... -->
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
                        <?php while ($fetchrecord = $result->fetch_assoc()) { ?>
                            <!-- ... (your existing table rows) ... -->
                            <tr>
                                <td><?php echo $fetchrecord['no']?></td>
                                <td><?php echo $fetchrecord['itemno']?></td>
                                <td><?php echo $fetchrecord['type']?></td>
                                <td><?php echo $fetchrecord['entered_on']?></td>
                                <td>
                                    <a href="edit_truck_goods.php?id=<?php echo $fetchrecord['no']?>" class="btn btn-primary btn-sm">
                                    <i class="fa fa-edit"></i>
                                    </a>
                                    <a href="view_truck_good.php?id=<?php echo $fetchrecord['no']?>" class="btn btn-info btn-sm">
                                    <i class="fa fa-eye"></i> 
                                    </a>
                                    <a href="delete_truck_goods.php?id=<?php echo $fetchrecord['no']?>" class="btn btn-danger btn-sm">
                                    <i class="fa fa-trash"></i>                                  
                                    </a>
                                </td>
                            </tr>
                        <?php } ?>
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
