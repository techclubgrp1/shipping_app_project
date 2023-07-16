<?php

// Database connection settings
$server="localhost";
$username="root";
$password="";
$database="kevann";

$conn = mysqli_connect($server, $username, $password, $database);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// SQL query to get item name and price from the database
$sql = "SELECT * FROM boxes";

// Execute the query
$result = $conn->query($sql);

// Check if the query was successful
if ($result->num_rows > 0) {
  // Create a table to display the item name and price
  echo "<table>";
  echo "<tr><th>Item Name</th><th>Price</th><th>Add to Cart</th></tr>";
  while ($row = $result->fetch_assoc()) {
    echo "<tr><td>" . $row["size"] . "</td><td>" . $row["cpb"] . "</td><td><button onclick='addtocart(\"" . $row["size"] . "\", \"" . $row["cpb"] . "\")'>Add to Cart</button></td></tr>";
  }
  echo "</table>";
} else {
  echo "No items found.";
}

// Close the database connection
$conn->close();

// Function to add item to cart
function addtocart($itemname, $price) {
  // Get the current cart contents
  $cart = $_SESSION["cart"];

  // If the item is not already in the cart, add it
  if (!array_key_exists($itemname, $cart)) {
    $cart[$itemname] = $price;
  }

  // Update the session variable
  $_SESSION["cart"] = $cart;
}

?>
