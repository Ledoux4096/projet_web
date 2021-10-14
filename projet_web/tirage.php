<?php session_start(); ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion du tournoi</title>
    <link rel="stylesheet" href="tournoi.css">
</head>
<body>

     <?php include("tete.php"); ?>
     <?php include("Base.php");?>
    

          <!-- 1er Partie pour lancer le tirage -->
        <h2>Gestion tirage</h2>

   <?php  

$equipA=[];
$equipB=[]; 
$equipe = array ('Brésil','Argentine','France','Italie','Espagne','Allemagne','Portugal','Haiti');
$a=0;
$b=0;
$lot=0;

    for ($i=0; $i<4;$i++){
      $grp=rand(0,1);
      $grp= $grp + $lot;
        if($grp %2==0)
        {
           $equipA[$a] = $equipe[$grp];
           $equipB[$b]= $equipe[$grp+1]; 
           $a++;
           $b++;
        }
        else{ 
          $equipA[$a]= $equipe[$grp];
          $equipB[$b]= $equipe[$grp - 1];
          $a++;
          $b++;
    }
   
   
$lot=$lot+2;
  }
     ?>

      <a class="button" href="tirage.php">Tirage</a>
       <!-- <FORM ACTION="tirage.php" METHOD="POST"> -->
       <!-- <INPUT TYPE="SUBMIT" NAME="TIRAGE" VALUE="TIRAGE"/> -->
       <!-- </FORM> -->
       


    
          <!-- 2eme Partie pour la presentation des groupes(par serie) -->
             <!-- les equipes apres le tirage -->
      

                         <!---------------- Affichage des equipes dans le tirage du groupe A  ----------->

    <div id="Table2">
                                                 
        <table align= "center">
          <h1></h1>
           <tr>
             <th></th>
             <th>Groupe A</th>
             <th>Groupe B</th>
           </tr>
           <tr>
             <td class="tete_serie">1e série</td>
             <td><?php  echo  $equipA[0] ; ?></td>
             <td><?php  echo  $equipB[0] ; ?></td>

             <!--  <td><br /> -->
           </tr>
           <tr>
             <td class="tete_serie">2e série</td>
             <td><?php  echo  $equipA[1] ; ?></td>
             <td><?php  echo  $equipB[1] ; ?></td>
           </tr>
           <tr>
                <td class="tete_serie">3e série</td>
                <td><?php  echo  $equipA[2] ; ?></td>
                <td><?php  echo  $equipB[2] ; ?></td>
           </tr>
           <tr>
                <td class="tete_serie">4e série</td>
                <td><?php  echo  $equipA[3] ; ?></td>
                <td><?php  echo  $equipB[3] ; ?></td>
           </tr>
 
   </table>
</div>

  <!-- 3eme partie les affiches du premier tour -->

      <!-- Groupe A -->
  
  <div id="Table3">

  <table align=center>
    <tr>
           <th>Groupe A</th>
           <th>Affiche</th>
           <th>Score</th>
    </tr>

    <tr>
                   <td class="match_numero">1.</td>
                   <td class="Vs"><?php  echo  $equipA[0] ?> VS  <?php  echo  $equipA[1] ?></td>
                   <td>
                   <form action="Base.php" method="post">
                          <input 
                              type="hidden"
                              name="equipe_1" 
                              value=<?php echo $equipA[0] ?>
                          /> 
                          <input 
                            type="hidden" 
                            name="equipe_2" 
                            value=<?php echo $equipA[1] ?> />

                          <input type="number" name="score_1" min=0 max=10  required/> 
                          VS 
                          <input type="number" name="score_2" min=0 max=10 required/> 
                          <button type="submit" name="jouer" value="1"> Jouer </button>
                    </form>
                   </td>
       </tr>

       <tr>
                   <td class="match_numero">2.</td>
                   <td class="Vs"><?php  echo  $equipA[2] ?> VS  <?php  echo  $equipA[3] ?></td>
                   <td>
                   <form action="Base.php" method="post">
                          <input 
                              type="hidden"
                              name="equipe_1" 
                              value=<?php echo $equipA[2] ?>
                          /> 
                          <input 
                            type="hidden" 
                            name="equipe_2" 
                            value=<?php echo $equipA[3] ?> />

                          <input type="number" name="score_1" min=0 max=10  required/> 
                          VS 
                          <input type="number" name="score_2" min=0 max=10 required/> 
                          <button type="submit" name="jouer" value="2"> Jouer </button>
                    </form>
                   </td>
       </tr>
     

       <tr>
                   <td class="match_numero">3.</td>
                   <td class="Vs"><?php  echo  $equipA[0] ?> VS  <?php  echo  $equipA[2] ?></td>
                   <td>
                   <form action="Base.php" method="post">
                          <input 
                              type="hidden"
                              name="equipe_1" 
                              value=<?php echo $equipA[0] ?>
                          /> 
                          <input 
                            type="hidden" 
                            name="equipe_2" 
                            value=<?php echo $equipA[2] ?> />

                          <input type="number" name="score_1" min=0 max=10  required/> 
                          VS 
                          <input type="number" name="score_2" min=0 max=10 required/> 
                          <button type="submit" name="jouer" value="3"> Jouer </button>
                    </form>
                   </td>
       </tr>
       <tr>
                   <td class="match_numero">4.</td>
                   <td class="Vs"><?php  echo  $equipA[1] ?> VS  <?php  echo  $equipA[3] ?></td>
                   <td>
                   <form action="Base.php" method="post">
                          <input 
                              type="hidden"
                              name="equipe_1" 
                              value=<?php echo $equipA[1] ?>
                          /> 
                          <input 
                            type="hidden" 
                            name="equipe_2" 
                            value=<?php echo $equipA[3] ?> />

                          <input type="number" name="score_1" min=0 max=10  required/> 
                          VS 
                          <input type="number" name="score_2" min=0 max=10 required/> 
                          <button type="submit" name="jouer" value="4"> Jouer </button>
                    </form>
                   </td>
       </tr>

       <tr>
                   <td class="match_numero">5.</td>
                   <td class="Vs"><?php  echo  $equipA[0] ?> VS  <?php  echo  $equipA[3] ?></td>
                   <td>
                   <form action="Base.php" method="post">
                          <input 
                              type="hidden"
                              name="equipe_1" 
                              value=<?php echo $equipA[0] ?>
                          /> 
                          <input 
                            type="hidden" 
                            name="equipe_2" 
                            value=<?php echo $equipA[3] ?> />

                          <input type="number" name="score_1" min=0 max=10  required/> 
                          VS 
                          <input type="number" name="score_2" min=0 max=10 required/> 
                          <button type="submit" name="jouer" value="5"> Jouer </button>
                    </form>
                   </td>
       </tr>

       <tr>
                   <td class="match_numero">6.</td>
                   <td class="Vs"><?php  echo  $equipA[1] ?> VS  <?php  echo  $equipA[2] ?></td>
                   <td>
                   <form action="Base.php" method="post">
                          <input 
                              type="hidden"
                              name="equipe_1" 
                              value=<?php echo $equipA[1] ?>
                          /> 
                          <input 
                            type="hidden" 
                            name="equipe_2" 
                            value=<?php echo $equipA[2] ?> />

                          <input type="number" name="score_1" min=0 max=10  required/> 
                          VS 
                          <input type="number" name="score_2" min=0 max=10 required/> 
                          <button type="submit" name="jouer" value="6 "> Jouer </button>
                    </form>
                   </td>
       </tr>

  </table>

</div>



                                        




















































<!-- Groupe B -->
       <!---------------- Affichage des equipes dans le tirage du groupe B  ----------->

    <div id="Table4" ></div>
    <table align="center">
      <tr>
              <th>Groupe B</th>
              <th>Affiche</th>
              <th>Score</th>
      </tr>

        <tr>
                   <td class="match_numero">7.</td>
                   <td class="Vs"><?php  echo  $equipB[0] ?> VS  <?php  echo  $equipB[1] ?></td>
                   <td>
                   <form action="Base.php" method="post">
                          <input 
                              type="hidden"
                              name="equipe_1" 
                              value=<?php echo $equipB[0] ?>
                          /> 
                          <input 
                            type="hidden" 
                            name="equipe_2" 
                            value=<?php echo $equipB[1] ?> />

                          <input type="number" name="score_1" min=0 max=10  required/> 
                          VS 
                          <input type="number" name="score_2" min=0 max=10 required/> 
                          <button type="submit" name="jouer" value="7"> Jouer </button>
                    </form>
                   </td>
       </tr>
    
       <tr>
                   <td class="match_numero">8.</td>
                   <td class="Vs"><?php  echo  $equipB[2] ?> VS  <?php  echo  $equipB[3] ?></td>
                   <td>
                   <form action="Base.php" method="post">
                          <input 
                              type="hidden"
                              name="equipe_1" 
                              value=<?php echo $equipB[2] ?>
                          /> 
                          <input 
                            type="hidden" 
                            name="equipe_2" 
                            value=<?php echo $equipB[3] ?> />

                          <input type="number" name="score_1" min=0 max=10  required/> 
                          VS 
                          <input type="number" name="score_2" min=0 max=10 required/> 
                          <button type="submit" name="jouer" value="8"> Jouer </button>
                    </form>
                   </td>
       </tr>


       <tr>
                   <td class="match_numero">9.</td>
                   <td class="Vs"><?php  echo  $equipB[0] ?> VS  <?php  echo  $equipB[2] ?></td>
                   <td>
                   <form action="Base.php" method="post">
                          <input 
                              type="hidden"
                              name="equipe_1" 
                              value=<?php echo $equipB[0] ?>
                          /> 
                          <input 
                            type="hidden" 
                            name="equipe_2" 
                            value=<?php echo $equipB[2] ?> />

                          <input type="number" name="score_1" min=0 max=10  required/> 
                          VS 
                          <input type="number" name="score_2" min=0 max=10 required/> 
                          <button type="submit" name="jouer" value="9"> Jouer </button>
                    </form>
                   </td>
       </tr>

       <tr>
                   <td class="match_numero">10.</td>
                   <td class="Vs"><?php  echo  $equipB[1] ?> VS  <?php  echo  $equipB[3] ?></td>
                   <td>
                   <form action="Base.php" method="post">
                          <input 
                              type="hidden"
                              name="equipe_1" 
                              value=<?php echo $equipB[1] ?>
                          /> 
                          <input 
                            type="hidden" 
                            name="equipe_2" 
                            value=<?php echo $equipB[3] ?> />

                          <input type="number" name="score_1" min=0 max=10  required/> 
                          VS 
                          <input type="number" name="score_2" min=0 max=10 required/> 
                          <button type="submit" name="jouer" value="10"> Jouer </button>
                    </form>
                   </td>
       </tr>
        
       <tr>
                   <td class="match_numero">11.</td>
                   <td class="Vs"><?php  echo  $equipB[0] ?> VS  <?php  echo  $equipB[3] ?></td>
                   <td>
                   <form action="Base.php" method="post">
                          <input 
                              type="hidden"
                              name="equipe_1" 
                              value=<?php echo $equipB[0] ?>
                          /> 
                          <input 
                            type="hidden" 
                            name="equipe_2" 
                            value=<?php echo $equipB[3] ?> />

                          <input type="number" name="score_1" min=0 max=10  required/> 
                          VS 
                          <input type="number" name="score_2" min=0 max=10 required/> 
                          <button type="submit" name="jouer" value="11"> Jouer </button>
                    </form>
                   </td>
       </tr>
         
       <tr>
                   <td class="match_numero">12.</td>
                   <td class="Vs"><?php  echo  $equipB[0] ?> VS  <?php  echo  $equipB[1] ?></td>
                   <td>
                   <form action="Base.php" method="post">
                          <input 
                              type="hidden"
                              name="equipe_1" 
                              value=<?php echo $equipB[1] ?>
                          /> 
                          <input 
                            type="hidden" 
                            name="equipe_2" 
                            value=<?php echo $equipB[2] ?> />

                          <input type="number" name="score_1" min=0 max=10  required/> 
                          VS 
                          <input type="number" name="score_2" min=0 max=10 required/> 
                          <button type="submit" name="jouer" value="12"> Jouer </button>
                    </form>
                   </td>
       </tr>
    </table>
 
             

  

    
   
 
    <?php include("pied.php");?>


     
 






</body>
</html>