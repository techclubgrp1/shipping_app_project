<?php
 include('connection.php')
?>
<?php
include('sign_up_conn.php')
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style2.css">
    <link rel="stylesheet" href="bootstrap-5.2.0/css/bootstrap.min.css">
</head>
<style>
    body{
        background-image: url(images/ship1.jpg);
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        
}
h2{
    
}
.main{
   width: 30%; 
   height: 60%;
   margin :0 auto;
   background-color: #1ecbe1;
   margin-left: 35%;
   border-radius: 1.2cm;
   


}
.label1{
    width: 10cm;
    margin-left: 3cm;
    padding-top: 1cm;
    
}
.label2{
    width: 10cm;
    margin-left: 3cm;
    padding-top: 2cm;
}
.label23{
    width: 10cm;
    margin-left: 3cm;
    padding-top: 2cm;
}
.my-btn{
    color: red;
   
}

</style>
<body >
    <h2 style="color:white; text-align: center; padding-top: 2.5cm;"> <i> Sign Up</i></h2>
        <form action="sign_up.php" method="POST">
        <?php
                    if($response)
                    {
                        include('response.php');
                    }
                   if($error)
                   {
                    include('error.php');
                   }
                    ?>
                
            <div class="main" >      
                <div class="label1">
                                <label for="Username" class="form-label">Username</label>
                                <input type="text" name="username"  class="form-control" placeholder="please enter your username">
                </div>

                <div class="label2" >
                    <label for="password"  class="form-label" style="width: 4cm;">Password</label>
                    <input type="password" name="password" class="form-control" placeholder="please enter your passsword">
                </div>
                
                <div class="label23" >
                    <label for="confirm_password"  class="form-label" style="width: 4cm;">Confirm Password</label>
                    <input type="password" class="form-control" name = "confirm_password" placeholder="please confirm your passsword">
                </div>
                
                
                

            <button class="btn btn-primary " style=" margin-top: 1.5cm; margin-left: 10cm; background-color: #800080; color: black;"type="submit" name="submitButton"> <b>Create</b> </button  >
                   <p>already have an account  <a href="index.php">Login</a> </p>
            </div>
        </form>
  




    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="bootstrap-5.2.0/js/bootstrap.min.js"></script>
</body>
</html>