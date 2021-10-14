<?php
session_start();
if(isset($_POST['submit']) and isset($_POST['pseudo']) and isset($_POST['pwd'])){
    if(!empty($_POST['pseudo']) and !empty($_POST['pwd'])){
        $pseudo_defaut = 'coupe';
        $pwd_defaut = 'CoupeInfos';
        
        $pseudo = htmlspecialchars($_POST['pseudo']);
        $mdp =  htmlspecialchars($_POST['pwd']);
        if($pseudo == $pseudo_defaut and $mdp == $pwd_defaut){
           $_SESSION['auth'] = true;
           // $_SESSION['pseudo'] = $pseudo['pseudo'];
           // $_SESSION['mdp'] = $mdp['pwd'];
            header('Location: index.php');
}
        else{
            echo 'Votre Pseudo ou mot de passe est incorrect';
            
}
    }
    else{
        echo 'Desole vous devez remplir tous les champs';
    }
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style1.css"/>
</head>
<body>
       <div>
         
          <!-- <img scr="Entreprise.jpg" width="20%" height="30%" /> -->
</div>

   <form method="post" action="index.php">
       <div class="container_image"></div>
       <div class="grd_titre1">
            <h2 class="titre1">Bienvenue a Coupe Infos  <h1><hr>
</div>
             <div class="inputs">
             <input type="text" placeholder="Votre prénom" name="pseudo">
             <input type="password" name="pwd" placeholder="mot de passe: CoupeInfos"/>
             <textarea name="Commentaires" class="comments" placeholder="Indiquer votre message par ici"cols="20" rows="10"></textarea>    
             <div>
   
            <div>
                <button type="submit">Envoyer</button>
            </div>
   
       <span>Veuillez remplir tous les champs requis pour que nous puissons assurer et confirmez votre consultation.</span> 
     
     
     
     
     
       
</form>


<!-- <div class="imgtete"> -->
        <!-- <img src="image/log1.png" width="5%" height="2%"> -->
        <!-- <img src="image/log2.png" width="5%" height="2%"> -->
        <!-- <img src="image/log3.png" width="5%" height="2%"> -->
  <!-- </div> -->

</body>
</html>