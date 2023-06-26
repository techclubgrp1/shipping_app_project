<?php
   if ($_SERVER["REQUEST_METHOD"] == "POST"){
    // Retrieve the value entered by the user
    $userValue = $_POST["inputValue"];
    
    // Store the value in a variable
    $quantity = $userValue;
} 

$productId =  $fetchRecord['no']; // Replace with the actual product ID


$query = "SELECT cpb FROM boxes WHERE no = $productId"; // Replace "products" with your table name
$result = mysqli_query($conn, $query);

if ($result && mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    $price = $row['cpb'];

    // Use the price variable for further processing
    echo "The price of the product is: " . $price;
}

if (isset($_POST['sumBtn'])) {
    $total = $quantity * $price;
    echo $total;
}



// Close the database connection
// mysqli_close($conn);
    ?>