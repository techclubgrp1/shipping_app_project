<?php
 include('connection.php');

 include('login_conn.php');
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <link rel="stylesheet" href="bootstrap-5.2.0/css/bootstrap.min.css">
</head>
<style>
body{
    
        background-image: url(images/ship2.jpg);
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        
}

h2{
    
}

h2{
    
}
.main{
   
   background-color: #1ecbe1;
   border-radius: 1.2cm;
   width: 30%;
   height: 50%;
    margin: 0 auto;
   


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
<body style="">
    <h2 style="color:#1ecbe1; text-align: center; padding-top: 4cm;"> <i> login page</i></h2>
    <form action="index.php" method="POST">
        <div class="main" >      
            <div class="label1">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" name="username"  class="form-control" placeholder="please enter your username">
            </div>

            <div class="label2" >
                <label for="password"  class="form-label" style="width: 4cm;">Password</label>
                <input type="password" class="form-control" name ="password" placeholder="please enter your passsword">
            </div>
            <button class="btn btn-primary " style=" margin-top: 1.5cm; margin-left: 10cm; background-color: #800080; color: black;"type="submit" name="submitButton"> <b>Login</b> </button  >
        <p>Don't have an account? <a href="sign_up.php">sign up</a></p>
        </div>

    </form>




    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="bootstrap-5.2.0/js/bootstrap.min.js"></script>
</body>
</html>