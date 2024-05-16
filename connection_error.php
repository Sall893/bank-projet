<?php
    include "header.php";
?>

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <link rel="stylesheet" href="session_expired_style.css">
</head>


<body>
    <div class="flex-container">
       
 <div class="flex-item">
            <img id="session" src="/images/error.png">
        </div>
      
  <div class="flex-item-message">
            <h1 id="session-sub">Uh-Oh !</h1>
    
        <p id="session-sub">
                Nous avons un probleme avec la base de donnee !<br>
            </p>
          
  <p id="session">
                <b>Message d erreur: </b>
           
     <?php
                    if (isset($_GET['error'])) {
                        echo $_GET['error'];
          
          }
                ?><br><br>
                veuillez verifier que les informations de connection sont correctent 
          
      and/or le serveur est normalement regler/responding.<br>
<br>
                veuillez reesayer plutard svp . :)
            </p>
        </div>
        <div class="flex-item">
      
      <a href="home.php" class="button">Acceuil</a>
  
      </div>
    </div>

</body>
</html>
