<?php
    /* Avoid multiple sessions warning
    Check if session is set before starting a new one. */
   
 if(!isset($_SESSION)) {
        session_start();
    }

    include "validate_customer.php";
   
 include "connect.php";
    include "header.php";
    include "customer_navbar.php";
   
 include "customer_sidebar.php";
    include "session_timeout.php";

   
 $_SESSION['auto_delete_benef'] = false;
?>

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <link rel="stylesheet" href="action_style.css">
</head>

<body>
    <div class="flex-container">
        <div class="flex-item">
         
   <p id="info" style="font-size:36px;">
                <b>Un ou plusieurs de vos beneficiairs ont ete supprimer ! :(</b><br>
            </p>
        </div>

   
     <div class="flex-item">
            <p id="info" style="margin-top:-40px;">
        
        <br>Pour des raisons de securite si des informations sensibles de votre beneficiaire ont ete modifier <b>OR</b> 
Si le 
                Beneficiaire n'existe plus, il ont ete supprimer de la liste des
                beneficiares automatiquement.
<br><br>
                veuillez ajouter leurs informations svp. :)
            </p>
        </div>
        <?php $conn->close(); ?>

 
       <div class="flex-item">
            <a href="beneficiary.php" class="button">Fond de Transfert</a>
        </div>

 
   </div>

</body>
</html>
