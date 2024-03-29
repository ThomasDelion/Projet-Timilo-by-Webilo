<!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta name="author" content="NoS1gnal"/>

            <link href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" rel="stylesheet" />
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
            <title>Connexion</title>
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
            <link rel="stylesheet" href="./style2.css">
            <link rel="stylesheet" href="./style.css">
        </head>
        <body>
        <body style="background-color:#363636;">
            <nav class="navbar navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                <img src="./logo-webilo.png" alt="" width="auto" height="auto">
                Timilo by Webilo
                </a>
            </div>
            </nav>
            
        <div class="login-form">
             <?php 
                if(isset($_GET['login_err']))
                {
                    $err = htmlspecialchars($_GET['login_err']);

                    switch($err)
                    {
                        case 'password':
                        ?>
                            <div class="alert alert-danger">
                                <strong>Erreur</strong> mot de passe incorrect
                            </div>
                        <?php
                        break;

                        case 'email':
                        ?>
                            <div class="alert alert-danger">
                                <strong>Erreur</strong> email incorrect
                            </div>
                        <?php
                        break;

                        case 'already':
                        ?>
                            <div class="alert alert-danger">
                                <strong>Erreur</strong> compte non existant
                            </div>
                        <?php
                        break;
                    }
                }
                ?> 
            
            <form action="connexion.php" method="post">
                <h2 class="text-center">Connexion</h2>  
                     
                <div class="input-group mb-3">
                    <input type="email" name="email" class="form-control" placeholder="Email" pattern=".+@webilo.fr" required="required" autocomplete="off" aria-describedby="basic-addon2">
                    <span class="input-group-text" id="basic-addon2">@webilo.fr</span>
                </div>
 
                <div class="form-group">
                    <input type="password" class="form-control" placeholder="Mot de passe" name="password">
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">Connexion</button>
                </div>   
            </form>
            <p class="text-center"><a href="inscription.php">Inscription</a></p>
        </div>
        <style>
        .login-form {
        border-radius: 10px;
        background-color: #fff;;
        border-color: #f17f3f;
        width: 500px;
        margin: 115px auto;
        box-shadow: 0px 0px 5px rgba(242,242,242,255); 
        padding: 20px;
        padding-top: 40px;
        padding-bottom: 10px;
        }
        
        a {
        color: #ffffff;
        }
        </style>
        </body>
</html>