
       <!---------- Connexion dans la base de donnee --------->
<?php

    echo "<pre>";
               print_r($_POST);
    echo "</pre>";

try
{
$bdd = new PDO('mysql:host=localhost;dbname=coupeinfos', 'root', '');
$bdd -> setAttribute(PDO::ATTR_ERRMODE ,PDO::ERRMODE_EXCEPTION);
    // echo ('bOOOOM');
}
catch (Exception $e)
{
die('Erreur : ' .$e->getMessage() );
}
?>

 <!-- ------------------------ REQUETE PREPAREE ----------------------- -->
<?php
if(isset($_POST['jouer']) and isset($_POST['score_1'] ) AND isset($_POST['score_2'] )){
    echo "score pret";  
    $num=$_POST['jouer'];

    // score pour chaque equipe 

//    if($score_1 > $score_2){
//         $score_1 = $score_1 + 3;
//         $matchjouer = "$score_1";
//         elsif ($score_2 > $score_1){
//                    $score_2 = $score_2 + 3;
//                    $matchjouer ="$score_2";
//                 }
//                 else{
//                     $score_1 = 0;
//                     $score_2 = 0;
//                     $matchjouer = $score_1 + $score_2;
//                     echo "$matchjouer";
//                 }


    // }
                        // Insertion dans la table match 
 
    $codesql="INSERT INTO `match` (`nom_equipe_1`, `nom_equipe_2`, `score_1`, `score_2`, `numero_match` , `matchjouer`)
        VALUES( :nom1, :nom2, :score1 , :score2 , :num ,:matchjouer )";

$req = $bdd->prepare($codesql);
$req->execute(
    array(
        "nom1" => $_POST['equipe_1'],
        "nom2" => $_POST['equipe_2'],
        "score1" => $_POST['score_1'],
        "score2" => $_POST['score_2'],
        "num" => $num,
        "matchjouer" =>$matchjouer
    )
);
}

                // Instruction pour les classements dans la table match
            // On va verifier les variables dans la table Classement

// ---------------   insertion dans la table classement du groupe A
             
//  $bdd-> query("select * from `classementgroupea`");
//  $ClassementA = "Insert into `classementgroupea` (`MJ`,`MG`,`MN`,`MP`,`BP`,`BC`,`Diff`,`Point`)
//   Values ( :mj, :mg, :mn, :mp, :bp, :bc, :diff, :point ) ";
    // $req -> execute (
        // "mj" => $_POST['MJ'],
        // "mg" => $_POST['MG'],
        // "mn" => $_POST['MN'],
        // "mp" => $_POST['MP'],
        // "bp" => $_POST['BP'],
        // "bc" => $_POST['BC'],
        // "diff" => $_POST['Diff'],
        // "point" => $_POST['Point']
    // )
//    $bdd => query($ClassementA);
    // 
    // cette condition doit verifier dans le premier groupe que si le match est joue  
    
        
       //   match jouer (MJ)
   
    // for($i=0; $i<=6; $i++)
    //    if(isset($matchjouer['MJ']) || $matchjouer['MJ'] ) 
    //   {
    //     $mj= $bdd -> query("Select * from `classementgroupea` where equipA order by MJ");
    //   }
    //   else(!empty ($matchjouer['MJ']))
    //   {
            //  $matchjouer=NULL;
    //   } 
 



      //  Match gagner   (MG) 



      











//  ----------------    insertion dans la table classement du groupe B

// $bdd-> query("select * from `classementgroupeb`");
//  $ClassementB = "Insert into `classementgroupeb` (`MJ`,`MG`,`MN`,`MP`,`BP`,`BC`,`Diff`,`Point`)
//   Values ( :mj, :mg, :mn, :mp, :bp, :bc, :diff, :point ) ",
    // $req -> execute (
        // "mj" => $_POST['MJ'],
        // "mg" => $_POST['MG'],
        // "mn" => $_POST['MN'],
        // "mp" => $_POST['MP'],
        // "bp" => $_POST['BP'],
        // "bc" => $_POST['BC'],
        // "diff" => $_POST['Diff'],
        // "point" => $_POST['Point']
    // )
// 
//  $bdd => query($ClassementB);
// 
// 
// 




?>



















































































































































































