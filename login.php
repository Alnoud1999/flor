<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>project</title>
    <link rel="stylesheet" href="login.css" type="text/css">
    <link rel="stylesheet" 
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>

    <section>
      
           
                  
     
        
    <div class="contentbox">
            <div class="formbox">
                <h1> welcome to our website</h1>
                <form method="POST" action="error.php">
                    <div class="inputbox">
                        <span>username</span>
                        <input type="text" name="username" id="username">
                    </div>
                    <div class="inputbox">
                    <span>password</span>
                    <input type="password" name="password" id="password">
                    </div>
                    <div class="remember">
                    <p>Dont have account?<a href="registration.php">Sing up</a></p>
                </div>
                <div class="inputbox">
                    <input type="submit" value="sign in" onclick="vaildate()">
                </div>
                </form> 
                <h2>OR</h2>
                <h3> continue with social media</h3>
                <ul class="social">
                    <li><i class="fa-brands fa-google"></i></li>
                    <li><i class="fa-brands fa-twitter"></i></li>
                    <li><i class="fa-brands fa-facebook-f"></i></li>
               
                </ul>
                </div>

            </div>

        </div>
    </section>

    
</body>
<script src="login.js"></script>
</html>