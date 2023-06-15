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
    
    <style>
        body {
          scroll-behavior: smooth;
          display: flex;
          align-items: center;
          justify-content: center;
          height: 100vh;
          width: 100vw;
          background: rgba(35, 201, 223, 0.3);
          overflow-y: scroll;
      }
      .flex-row {
          display: flex;
      }
      .wrapper {
          border: 1px solid #4b00ff;
          border-right: 0;
      }
      
    
      *{
      box-sizing: border-box;
      }

      input[type=text], select, textarea {
        width: 100%;
        padding: 12px;
        border: 1px solid #ccc;
        border-radius: 4px;
        resize: vertical;
      }

      label {
        padding: 12px 12px 12px 0;
        display: inline-block;
      }

      input[type=submit] {
        background-color: #0489aa;
        color: white;
        padding: 12px 20px;
        border: none;
        border-radius: 10px;
        cursor: pointer;
        float: right;
      }

    .container {
        border-radius: 10px;
        background-color: #f2f2f2;
        padding: 50px;
        height: 400px;
        overflow: auto;
      
      }
      
    </style>

</head>
<body>
    <!-- navigation bar here -->
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
    <main>
        <div class="container" style="background-color: whitesmoke;margin-top:0px;">
            <h3><div class="title">Contact us!</div></h3>
            <br>
            <div class="title-info">We'll get back to you soon!</div>
        
            <form action="" method="" class="form">
                <div class="input-group">
                    <label for="first-name">First name</label>
                    <input type="text" name="first_name" id="first-name" placeholder="First name">
                </div>
                
                <div class="input-group">
                    <label for="last-name">Last name</label>
                    <input type="text" name="last_name" id="last-name" placeholder="Last Name">
                   
                </div>

                <div class="input-group">
                    <label for="e-mail">e-mail</label>
                    <input type="text" name="e-mail" id="e-mail" placeholder="e-mail">
                    
                </div>

                <div class="textarea-group">
                    <label for="message">Message</label>
                    <textarea name="message" id="message" rows="5" placeholder="Please share with us you're feedback..."></textarea>
                </div>

                <div class="button-div">
                    <button type="submit">Send</button>
                </div>
        </div>
        </form>
    </main>


</body>
</html>