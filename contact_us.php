<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AFRICAN SHIPPING</title>
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
    <?php include('navbar.html')?>

    <!-- main starts here -->
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