<!-- sidebar -->
<style>
     .sidebar{
    background-color:  #00008b;
    width: 11%;
    padding-top: 5%;
    height: 100vh;
    position: absolute;
    z-index: 4;

    }
    .sidebar ul li{
        list-style: none;
        font-size: 15px;
    }

    .sidebar ul li a{
        text-decoration: none;
        color: white;
    }
    

    hr {
      border: none;
      height: 5px;
      background-color: white;
    }
    ul {
    list-style: none;
    padding: 0;
    margin: 0;
    }

    .option {
    padding: 10px;
    cursor: pointer;
    color: white;
    }

    .option:hover {
    background-color: #00008b;
    color: white;
    }

    .sub-options {
    display: none;
    background-color: #00008b;
    padding: 10px;
    }

    .option:hover .sub-options {
    display: block;
    }
    

</style>
<div class="shadow-lg mb-5 bg-white rounded">Larger shadow
        <div class="sidebar shadow">
            <ul>
                <li>
                    <a href="truck_goods.php">
                    <i class="fa fa-truck"></i> 
                     <span> Enter Truck Goods</span>
                </a>
                </li>
                <hr>
                <li>
                    <a href="store_goods.php">
                        <i class="fas fa-pen"></i> 
                        <span> Enter Store Goods</span>

                    </a>
                </li>

                <hr>
                <li class="option">
                    <i class="fa fa-eye"></i>
                    <span>View Goods </span>
                    <ul class="sub-options">
                        <li> <a href="view_truck_goods.php">Truck Goods </a> </li>
                        <li> <a href="view_store_goods.php">Store Goods </a></li>      
                    </ul> 
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