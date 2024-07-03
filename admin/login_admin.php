<!DOCTYPE html>
<html>
<head>  
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name ="viewport" content="width=device-width,initial-scale = 1.0">
    <title>DC Sports</title>
    <link rel="stylesheet" href="../css/style_log.css">
     <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
   
</head>
<body>
   <?include 'alertmessages.php'?>
    <div class="wrapper">
        <span class="css-animation"></span>
        <span class="css-animation2"></span>
         <div class="row">
            <div class="col-lg-6 col-12">  
                <div class="form-box-login" class="col-lg-6 col-md-6 col-12">
                    <h2 class="animation" style="--i:0;">Autentificare</h2>
                    <form action="http://localhost:8888/Licenta2.0/admin/SignIn.php" method="post" >
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-12">       
                                <div class="input-box animation" style="--i:1;">
                                     <input type="text" name="username" id="username" required>
                                     <label>Nume utilizator</label>
                                     <i class='bx bx-user-circle'></i>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12">  
                                <div class="input-box animation" style="--i:2;">
                                    <input type="password" name="password" id="password" required>
                                    <label>Parola</label>
                                    <i class='bx bx-lock' id="togglePassword"></i>
                                </div>
                            </div>
                        
                            <button type="submit" id="login "class="btn animation" style="--i:3;">Autentificare</button>
                        </div>
                    </form>
                </div>

                <div class="description-info login">
                    <h2 class="animation" style="--i:0">DC Sports</h2>
                    <p class="animation" style="--i:1">Cont Admin!</p>
                </div>

            </div>
        </div>
    </div>
    <script src="../js/password.js"></script>
    <script src="../js/refreshpage.js"></script>
      
            

    
   
    
</body>
</html>