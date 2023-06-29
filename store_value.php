<?php
   if ($_SERVER["REQUEST_METHOD"] === "POST"){
    // Retrieve the value entered by the user
    $userValue = $_POST["quantity"];

    // Store the value in a variable
    $quantity = $userValue;
} 




if (isset($_POST['sumBtn'])) {
    $sql = mysqli_query($conn,"SELECT * FROM boxes");
    while($fetchRecord = mysqli_fetch_array($sql)){ 
        $price = $fetchRecord["cpb"];
        $total = $price * $quantity;
        echo $total;
}
}



// Close the database connection
// mysqli_close($conn);
    ?>