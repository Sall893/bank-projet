<?php
    include "header.php";

  
  if (isset($_GET['loginFailed'])) {
        $message = "Invalid Credentials ! Please try again.";
    
    echo "<script type='text/javascript'>alert('$message');</script>";
    }
?>

<!DOCTYPE html>
<html>
<head>

    <link rel="stylesheet" href="admin_login_style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>


<body>
  
  <form action="admin_login_action.php" method="post">
        <div class="flex-container-1">
          
  <div class="flex-item">
                <h2>Connection en Tant qu'administrateur</h2>
     
       </div>

            <label><b>Nom d'utilisateur</b></label>
            <div class="flex-item">
                <input type="text" name="admin_uname" required>
   
         </div>

            <label><b>Mot de passe</b></label>
            <div class="flex-item">
                <input type="password" name="admin_psw" required>
  
          </div>
        </div>

        <div class="flex-container-2">
            <div class="flex-item">
                <button type="submit">Se connecter</button>
   
         </div>

            <div class="flex-item">
                <button type="button" class="cancelbtn">Annuler</button>
            </div>
   
     </div>
    </form>


</body>

</html>
