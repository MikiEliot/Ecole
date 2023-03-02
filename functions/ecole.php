<?php 
    require_once ('../classes/eleve.php');
    require_once ('../classes/enseignant.php');

    $enseignant1 = new Enseignant('Dupont', 'Nikola', 'Arradon', 'mathématiques');
    $eleve1 = new Eleve('Alokin', 'Divad', ' Vannes', '3éme');
    $eleve2 = new Eleve('Cilleuom Le', 'Leunamme', 'Lorient', 'CM2');
    $enseignant2 = new Enseignant('Михајловић', 'Миодраг', 'Carnac', 'physique');

    // Affichage de l'état civil de chaque personne créée
    echo $enseignant1->getEtatCivil() . '<br>';
    
    echo $eleve1->getEtatCivil() . '<br>';
   
    echo $eleve2->getEtatCivil() . '<br>';
   
    echo $enseignant2->getEtatCivil() . '<br>';

    echo '<br>';
    echo '<br>';
 
    echo 'Effectif : ' . Eleve::getEffectif(); ?>

      



<!-- 
    $liste_des_profs= array(  
    new Enseignant('Jean', 'Jacques','Toulouse','mathematique'),
    new Enseignant('Marie-Noel', 'Swystiovskyy','Toulouse','logique')); -->
 
  
    <!-- <pre>
    ?php var_dump($liste_des_eleves); ?>
    </pre>
    <pre>
    ?php print_r($liste_des_profs); ?>
    </pre>
  -->

 

    <!-- $liste_des_eleves = array(
    new Eleve ('DuPont','Nikola','Arradon','CM2'),
    new Eleve ('PontDu','Alokin','Donarra','6'),
    new Eleve ('Tiartuaeb','Divad','Plouharnel','5'),
    new Eleve ('Cilleuom Le','Leunamme','Tneirol','4'),
    new Eleve ('Samoht','Lrak','Nevle','3'),
    new Eleve ('Evreh','Leam','Canrac','2'),
    new Eleve ('Lerech','Etiam','Renner','1')); -->



