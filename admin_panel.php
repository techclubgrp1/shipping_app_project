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
                    <i class="fa fa-pen"></i> 
                     <span> Enter Goods</span>
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
   
    <!-- Main division -->
    <div class="main">
        <div class="row">
            <div class="col-lg-6 mb-3">
                <label for="name" class="label">Name</label>
                <input type="text" class="form-control">

            </div>
            <div class="col-lg-6 mb-3">
                <label for="name" class="label">Name</label>
                <input type="text" class="form-control">
            </div>
            <div class="col-lg-5 mb-3">
                <label for="name" class="label">Name</label>
                <input type="text" class="form-control">
            </div>
        </div>
    </div>

</body>
</html>