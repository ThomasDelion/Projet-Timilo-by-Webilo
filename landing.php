<?php 
    session_start();
    require_once 'config.php'; // ajout connexion bdd 
   // si la session existe pas soit si l'on est pas connecté on redirige
    if(!isset($_SESSION['user'])){
        header('Location:index.php');
        die();
    }
    
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   
    <title>Espace membre</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="./style2.css">
  </head>
<body>
<body style="background-color:#363636;">
<nav class="navbar navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="https://webilo.fr/">
      <img src="./logo-webilo.png" alt="logo-webilo" width="auto" height="auto">
      Timilo by Webilo
    </a>
    <a href="deconnexion.php" class="btn btn-danger btn-lg">Déconnexion</a>
  </div>
</nav>
   
  
     
  <table width="5%" border="1" align="center">
   <tr>
    <div class="container" action="inscription_traitement.php" method="post">
     <figure>
      <blockquote class="blockquote">
       <h2>TIMER</h2>

  <select class="form-select" aria-label="Default select example">
  <option selected>Sélectionner un projet</option>
  <option value="1" name="projet_id">BTS SIO SLAM</option>
  <option value="2" name="projet_id">Iron Projet</option>
  </select>
       

     </figure>
        <center>
        <p name="timer">
            <span id="seconds">00</span><span class="dots">:</span><span id="tens">00</span>
        </p>
        <button id="button-start">Démarrer</button>
        <button id="button-stop" onclick="clearInterval(myTimer);">
        <input type="button" onclick='document.location.reload(false)' value="Stop"></button>
      </div>
   </tr>
  </table>              
            
            
  
<table width="5%" border="1" align="center">
   <tr>
    <div class="texte">
     <figure>
      <blockquote class="blockquote">
       <h2>WORK SESSIONS</h2>
      </blockquote>
     </figure>
<table class="table" align="center">
  <thead>
    <tr>
      <th scope="col">Date</th>
      <th scope="col">Projet</th>
      <th scope="col">Session</th>
    </tr>
  </thead>
  <tbody>
    <tr action="inscription_traitement.php" method="post">
      <td name="date_enregistrement" placeholder="2021-10-28" required="required" autocomplete="off"></td>
      <td name="projet_id" placeholder="Iron Projet" required="required" autocomplete="off"></td>
      <td name="timer" placeholder="04:23:30" required="required" autocomplete="off"></td>
    </tr>
    <tr>
      <td>2021-10-29</td>
      <td>BTS SIO SLAM</td>
      <td>00:00:02</td>
    </tr>
    <tr>
      <td>2021-10-29</td>
      <td>BTS SIO SLAM</td>
      <td>00:00:04</td>
    </tr>
    <tr>
      <td>2021-10-29</td>
      <td>BTS SIO SLAM</td>
      <td>00:00:08</td>
    </tr>
    <tr>
      <td>2021-10-29</td>
      <td>Iron Projet</td>
      <td>00:00:05</td>
    </tr>
    <tr>
      <td>2021-11-09</td>
      <td>Iron Projet</td>
      <td>00:00:07</td>
    </tr>
  </tbody>
</table>
 
          
 
    <script src="./script.js"></script>
    <script src="./script_worksession.js"></script>
    <style>

    .container {
    border-radius: 10px;
    background-color: #fff;;
    border-color: #f17f3f;
    width: 500px;
    margin: 115px auto;
    box-shadow: 0px 0px 5px rgba(242,242,242,255);  
    padding: 20px;
    padding-top: 20px;
    padding-bottom: 20px;
    }
    
    p {
    color: #f17f3f;
    margin-top: 0;
    margin-bottom: 1rem;
    font-size: 80px;
}

    h2 {
    color: #f17f3f;
    margin-top: 0;
    margin-bottom: 1rem;
    font-size: 20px;
}

    .table {
    border-radius: 10px;
    background-color: #fff;;
    border-color: #f17f3f;
    width: 500px;
    margin: 10px auto;
    box-shadow: 0px 0px 5px rgba(242,242,242,255); 
    padding: 20px;
    padding-top: 20px;
    padding-bottom: 80px;
    }
    
    .texte {
    border-radius: 10px;
    background-color: #fff;;
    border-color: #f17f3f;
    width: 500px;
    margin: -90px auto;
    box-shadow: 0px 0px 5px rgba(242,242,242,255); 
    padding: 20px;
    padding-top: 20px;
    padding-bottom: 80px;
    }
    </style>
  </body>
</html>
