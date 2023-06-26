
<?php
 include('connection.php')

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
<form action="store_value.php" method="post">
<div class="container-fluid pt-5">
            <table class="table table-striped table-hover table-responsive"  >
                <thead>
                    <tr>
                        <th scope="col">no.</th>
                        <th scope="col">Size</th>
                        <th scope="col">CPB</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Add to Cart</th>
                       
                       
                    </tr>
                </thead>
                <tbody>
                     <?php 
                      $sql = mysqli_query($conn,"SELECT * FROM boxes");
                     while($fetchRecord = mysqli_fetch_array($sql)){ ?>
                        <tr>
                        
                        <td><?php echo $fetchRecord['no']  ?></td>
                        <td> <?php echo $fetchRecord['size']  ?></td>
                        <td> <?php echo $fetchRecord['cpb']  ?></td>
                        <td> 
                            
                                <label for="integer"></label>
                                <input type="number" name="integer" id="integer" required>
                                
                            </label>
                            <?php
                                include ('store_value.php')
                            ?>
                        </td>
                       
                        
                        <td>
                            <a href="edit-enrollment.php?id=<?php echo $fetchRecord['no']?>" class="btn btn-primary btn-sm">
                            <i class="fa fa-shopping-cart"></i>
                            <button type="submit" name="sumBtn">add</button>
                            </a>
                           
                            </a>
                        </td>
      

                    </tr>
                   
                     <?php  }?>
                </tbody>
            </table>   
        
    
    
        </div>
        </form>
    </div>

   
</body>
</html>