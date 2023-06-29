<?php
include('connection.php')


 // Fetch data from the database
 $sql = mysqli_query($conn,"SELECT no, name, size, charge FROM enrollment");
 
 $result = $conn->query($sql);

 // Check if any rows are found
 if ($result->num_rows > 0) {
     // Display the data in a table
     while ($row = $result->fetch_assoc()) {
         $no = $row['no'];
         $name = $row['name'];
         $size = $row['size'];
         $charge = $row['charge'];

         echo "<tr>";
         echo "<td>$no</td>";
         echo "<td>$name</td>";
         echo "<td>$size</td>";
         echo "<td>$charge</td>";
         echo "</tr>";
     }
 } else {
     echo "<tr><td colspan='4'>No data found in the database.</td></tr>";
 }

 // Close the database connection
 $conn->close();
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
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">

</head>
<style>
    .container{
        padding-top: 2.5cm;
    }
</style>
<body>
    <!-- navigation bar  starts here -->
    <nav class="navbar navbar-expand-lg bg-light fixed-top shadow">
        
      <a class="navbar-brand" href="index.html">
          <!--the image  -->
          <img src="images/WhatsApp Image 2023-05-21 at 14.53.12.jpeg" alt="" width="30" height="24">
        </a>
      <a href="index.html" class="navbar-brand"> <i>AFRICAN SHIPPING</i>

           </a>
           <!-- hamburger icon -->
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarOptions" aria-controls="navbarOptions" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
      </button>

          
  
      <div class="collapse navbar-collapse" id="navbardisplaynavigations">
          <nav class="navbar-nav" >
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item"><a href="index.php" class="nav-link"style="font-size: 20px;">Home</a></li>
                <li><a href="#"  class="nav-link"style="font-size: 20px;">Country</a>
                  <ul class="submenu">
                      <li><a href="#" class="nav-link">United States</a></li>
                      <li><a href="#" class="nav-link">Canada</a></li>
                      <li><a href="#" class="nav-link">Kenya</a></li>
                      <li><a href="#"  class="nav-link">South Africa</a></li>                          
                    </ul>
              </li>
              <li><a href="services.php"  class="nav-link"style="font-size: 20px;">services</a></li>
                <li><a href="#"  class="nav-link"style="font-size: 20px;">Tracking</a></li>
                <li><a href="#"  class="nav-link"style="font-size: 20px;">More</a>
                  <ul class="submenu">
                    <li><a href="#" class="nav-link">Mission</a></li>
                    <li><a href="#" class="nav-link">Vision</a></li>
                    <li><a href="internships.php" class="nav-link">Internships</a></li>
                    <li><a href="contact_us.php"  class="nav-link">contact Us</a></li>
                    <li><a href="#" class="nav-link">About Us</a></li>
                  </ul>
                </li>                     
              </ul>
            </nav>
                
  
  
</nav>  

<div class="container">
    <table class="table ">
        <thead>
            <tr>
                <th><?php echo $name  ?></th>
                <th>Size</th>
                <th>Charge</th>
                <th>Quantity</th>
            </tr>
        </thead>
        <tbody>
       
            <tr>
                <td>Product 1</td>
                <td>Medium</td>
                <td>$10</td>
                <td>2</td>
            </tr>
            <tr>
                <td>Product 2</td>
                <td>Large</td>
                <td>$15</td>
                <td>1</td>
            </tr>
            <!-- Add more rows for additional products -->
            
        </tbody>
    </table>
</div>

</body>
</html>