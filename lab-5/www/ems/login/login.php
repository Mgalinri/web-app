<?php
session_start();

?>
<!Doctype html>
<html lang="en">
    <!---6LdK8VElAAAAAK956aG0tCr75OWfaGhsmSFvPbDe--->
    <!---Clave de sitio web y clave secreta--->
    <!---6Lf95VElAAAAAF-EVEU0u4Is10Y8ePl600fSBS6c--->
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Page</title>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous"/>
    <!---Solves issues inside the css--->
    <link rel="stylesheet" href="Login_page.css?v=<?php echo time(); ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@1,700&family=Oswald:wght@300&display=swap" rel="stylesheet">
    <script src="Login_page.js"></script>
    
    <script src='https://www.google.com/recaptcha/api.js' async defer></script>

</script>
</head>
<body>

    <div class="container-fluid main-container justify-content-center d-flex vh-100">
    <div class="row align-items-center">
     <div class="login_el  col-md-6">
        <h1 class="text-center mx-auto title">Login</h1>
        <p class="mx-auto text-center"> Sign into your account</p>
        <form class="mx-auto text-center" action="Login_server.php" name="login" method="post">
           <input type="text"  name="user_name" placeholder="User Name">
           </input>
            <label></label>
           <input type="password"  name="password" placeholder="Password" >
           </input>
           <div class="g-recaptcha mx-auto" data-sitekey="6LdK8VElAAAAAK956aG0tCr75OWfaGhsmSFvPbDe"></div>
           <button class="mx-auto" type="submit" name="submit">Submit</button>

</form>
   
      </div>
        </div>

       
    

    </div>
    </div>
</body>
</html>
