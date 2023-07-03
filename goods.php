
<?php 
session_start();

    
    $server="localhost";
    $username="root";
    $password="";
    $database="kevann";

    $connect = mysqli_connect($server, $username, $password, $database);
    if($connect){
        echo "connection succeeded";
    }
    else{
        echo "failed";
    }
$connect = mysqli_connect("localhost", "root", "", "kevann");

if(isset($_POST["add_to_cart"]))
{
	if(isset($_SESSION["shopping_cart"]))
	{
		$item_array_id = array_column($_SESSION["shopping_cart"], "item_id");
		if(!in_array($_GET["id"], $item_array_id))
		{
			$count = count($_SESSION["shopping_cart"]);
			$item_array = array(
				'item_id'			=>	$_GET["id"],
				'item_name'			=>	$_POST["hidden_name"],
				'item_price'		=>	$_POST["hidden_price"],
				'item_quantity'		=>	$_POST["quantity"]
			);
			$_SESSION["shopping_cart"][$count] = $item_array;
		}
		else
		{
			echo '<script>alert("Item Already Added")</script>';
		}
	}
	else
	{
		$item_array = array(
			'item_id'			=>	$_GET["id"],
			'item_name'			=>	$_POST["hidden_name"],
			'item_price'		=>	$_POST["hidden_price"],
			'item_quantity'		=>	$_POST["quantity"]
		);
		$_SESSION["shopping_cart"][0] = $item_array;
	}
}

if(isset($_GET["action"]))
{
	if($_GET["action"] == "delete")
	{
		foreach($_SESSION["shopping_cart"] as $keys => $values)
		{
			if($values["item_id"] == $_GET["id"])
			{
				unset($_SESSION["shopping_cart"][$keys]);
				echo '<script>alert("Item Removed")</script>';
				echo '<script>window.location="goods.php"</script>';
			}
		}
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


<!-- new -->
<div class="container">
			<br />
			<br />
			<br />
			<h3 align="center"><U>SHIP WITH US</U></h3><br />
			<br /><br />
			<?php
				$query = "SELECT * FROM goods ORDER BY id ASC";
				$result = mysqli_query($connect, $query);
				if(mysqli_num_rows($result) > 0)
				{
					while($row = mysqli_fetch_array($result))
					{
				?>
			<div class="col-lg-12">
				<form method="post" action="goods.php?action=add&id=<?php echo $row["id"]; ?>">
        <table class="table table-striped table-hover table-responsive"  >
                <thead>
                    <tr>
                        <th scope="col">no.</th>
                        <th scope="col">Name</th>
                        <th scope="col">Price</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Action</th>
                        

      
                    </tr>
                </thead>
                <tbody>
                     
                        <tr>
                        
                        <td style=""><?php echo $row['id']  ?></td>
                        <td style=""> <?php echo $row['name']  ?></td>
                        <td style=";"> <?php echo $row['price']  ?></td>
                        <td> 
                          <label for="quantity"></label>
                          <input type="text" name="quantity" value="1" class="form-control" /> </td>
                        <td style=""><input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-success" value="Add to Cart" /></td>                     
                        <td style="">	<input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>" /></td>
                        <td style=";"><input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" /></td>
                      
                      

                    </tr>
                   
                </tbody>
            </table>   
					<!-- <div style="border:1px solid #333; background-color:#f1f1f1; border-radius:5px; padding:16px;" align="center">
						<br />

						<h4 class="text-info"><?php echo $row["name"]; ?></h4>

						<h4 class="text-danger">$ <?php echo $row["price"]; ?></h4>

						<input type="text" name="quantity" value="1" class="form-control" />

						<input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>" />

						<input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" />

						<input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-success" value="Add to Cart" />

					</div> -->
				</form>
			</div>
			<?php
					}
				}
			?>
			<div style="clear:both"></div>
			<br />
			<h3>Order Details</h3>
			<div class="table-responsive">
				<table class="table table-bordered">
					<tr>
						<th width="40%">Item Name</th>
						<th width="10%">Quantity</th>
						<th width="20%">Price</th>
						<th width="15%">Total</th>
						<th width="5%">Action</th>
					</tr>
					<?php
					if(!empty($_SESSION["shopping_cart"]))
					{
						$total = 0;
						foreach($_SESSION["shopping_cart"] as $keys => $values)
						{
					?>
					<tr>
						<td><?php echo $values["item_name"]; ?></td>
						<td><?php echo $values["item_quantity"]; ?></td>
						<td>$ <?php echo $values["item_price"]; ?></td>
						<td>$ <?php echo number_format($values["item_quantity"] * $values["item_price"], 2);?></td>
						<td><a href="goods.php?action=delete&id=<?php echo $values["item_id"]; ?>"><span class="text-danger">Remove</span></a></td>
					</tr>
					<?php
							$total = $total + ($values["item_quantity"] * $values["item_price"]);
						}
					?>
					<tr>
						<td colspan="3" align="right">Total</td>
						<td align="right">$ <?php echo number_format($total, 2); ?></td>
						<td></td>
					</tr>
					<?php
					}
					?>
						
				</table>
			</div>
		</div>
	</div>
	<br />
   
</body>
</html>