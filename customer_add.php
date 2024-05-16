<?php
    include "validate_admin.php";
    include "header.php";
    include "user_navbar.php";
    include "admin_sidebar.php";
   
 include "session_timeout.php";
?>

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <link rel="stylesheet" href="customer_add_style.css">
</head>

<body>
    <form class="add_customer_form" action="customer_add_action.php" method="post">
 
       <div class="flex-container-form_header">
            <h1 id="form_header">Veuillez remplir les informations suivantes . . .</h1>
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
                <label>Genre:</label>
            </div>
       
     <div class="flex-container-radio">
                <div class="container">
                 
   <input type="radio" name="gender" value="male" id="male-radio" checked>
                  
  <label id="radio-label" for="male-radio"><span class="radio">Homme</span></label>
                </div>
           
     <div class="container">
                    <input type="radio" name="gender" value="female" id="female-radio">
        
            <label id="radio-label" for="female-radio"><span class="radio">Femme</span></label>
                </div>
     
           <div class="container">
                    <input type="radio" name="gender" value="others" id="other-radio">
         
           <label id="radio-label" for="other-radio"><span class="radio">Autres</span></label>
                </div>
            </div>
        </div>

      
  <div class="flex-container">
            <div class=container>
                <label>Date de naissance :</label><br>
               
 <input name="dob" size="30" type="text" placeholder="yyyy-mm-dd" required />
            </div>
        </div>

        <div class="flex-container">
 
           <div class=container>
                <label>Numero Aadhar :</label><br>
                <input name="aadhar" size="25" type="text" required />
  </div>
 
       </div>

        <div class="flex-container">
            <div class=container>
                <label>Email-ID :</label><br>
       
         <input name="email" size="30" type="text" required />
            </div>
            <div  class=container>
             
   <label>Numero de Telephone :</b></label><br>
                <input name="phno" size="30" type="text" required />
            </div>
        </div>

       
 <div class="flex-container">
            <div class=container>
                <label>Addresse :</label><br>
              
  <textarea name="address" required /></textarea>
            </div>
        </div>

        <div class="flex-container">
         
   <div class=container>
                <label>Branche de la Bank :</label>
            </div>
            <div  class=container>
          
      <select name="branch">
                    <option value="SHIVAMOGA">SHIVAMOGA</option>
                    <option value="BANGALORE">BANGALORE</option>
      
              <option value="CHITRADURGA">CHIRADURGA</option>
                    <option value="BHADRAVATHI">BHADRAVATHI</option>
                 
   <option value="MYSORE">MYSORE</option>
                </select>
            </div>
        </div>

        <div class="flex-container">
   
         <div class=container>
                <label>Numero de compte:</label><br>
                <input name="acno" size="25" type="text" required />
            </div>
  

      </div>

        <div class="flex-container">
            <div class=container>
                <label>Ouvrir Solde :</label><br>
           
     <input name="o_balance" size="20" type="text" required />
            </div>
            <div  class=container>
     <label> Code PIN (4 chiffres) :</b></label><br>
        
        <input name="pin" size="15" type="password" required />
            </div>
        </div>

        <div class="flex-container">
            <div class=container>
 
               <label>Nom d'utilisateur :</label><br>
                <input name="cus_uname" size="30" type="text" required />
            </div>
       
     <div  class=container>
                <label>Mot de passe :</b></label><br>
                <input name="cus_pwd"  type="password" required />
  </div>
  </div>

 
       <div class="flex-container">
            <div class="container">
                <button type="submit">Soumettre</button>
            </div>

          
  <div class="container">
                <button type="reset" class="reset" onclick="return confirmReset();">Reinitialiser</button>
            </div>
    </div>

    </form>

 
   <script>
    function confirmReset() {
        return confirm('Do you really want to reset?')
    }
    </script>

</body>
</html>
