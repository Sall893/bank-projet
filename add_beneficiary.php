<?php
    include "validate_customer.php";
   
 include "header.php";
   
 include "customer_navbar.php";
  
  include "customer_sidebar.php";
    
include "session_timeout.php";
?>


<!DOCTYPE html>
<html>
<head>
    
<meta name="viewport" content="width=device-width, initial-scale=1.0">
 
   <link rel="stylesheet" href="customer_add_style.css">
</head>

<body>
    
<form class="add_customer_form" action="add_beneficiary_action.php" method="post">
      
  <div class="flex-container-form_header">
           
 <h1 id="form_header">Veuillez saisir les informations du beneficiaire...</h1>
        </div>

   
     <div class="flex-container">
            <div class=container>
                <label>Prenom :</label><br>
           
     <input name="fname" size="30" type="text" required />
            </div>
            <div  class=container>
             
   <label>Nom :</b></label><br>
                <input name="lname" size="30" type="text" required />
        
    </div>
        </div>

        <div class="flex-container">
            <div class=container>
            
    <label>Numero de compte :</label>
<br>
               
 <input name="acno" size="25" type="text" required />
    
        </div>
        </div>

        <div class="flex-container">
    
        <div class=container>
                <label>Email-ID :</label><br>
             
   <input name="email" size="30" type="text" required />
            </div>
       
     <div  class=container>
                <label>Numero de telephone :</b></label><br>
           
     <input name="phno" size="30" type="text" required />
            </div>
        </div>

 
       <div class="flex-container">
            <div class="container">
         
       <a href="beneficiary.php" class="button">Retour</a>
            </div>

         
   <div class="container">
                <button type="submit">Soumettre</button>
            </div>

        
    <div class="container">
                <button type="reset" class="reset" onclick="return confirmReset();
">Reinitialiser</button>
            </div>
        </div>

    </form>

    <script>
    function confirmReset() 
{
        return confirm('Do you really want to reset?')
    }
    </script>


</body>

</html>
