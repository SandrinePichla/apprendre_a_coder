<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Ma page web</title>
    </head>
    <body>
   
        <h1>Ma page web</h1>
        <h2>Aujourd'hui nous sommes le <?php echo date('d/m/Y h:i:s'); // la fonction affiche l'heure ?>.</h2> 

        <?php echo "On peut voir que ça fonctionne"; /* si je veux écrire un commentaire plus long,
        donc sur plusieurs lignes, je fais comme ça.
        Le code PHP ne se voit pas dans le code source de la page  */ ?>

        <h2>Comment écrire une variable : $userAge = 50; </h2>
       <h2>Comment la lire sur le web : echo $userAge; </h2>
       <?php
       $userAge = 50; // La variable est créée et vaut 50
       echo "Age ";
       echo $userAge; // Echo Affiche la variable dans le navigateur
       echo " ans ";
        ?> <br> <br>
       
       <h2>Utilisation des " " et des ' '</h2>

        <?php
        $fullname = "Toto";
        echo "Bonjour ";
        echo $fullname;
        echo " et bienvenue sur le site !";
        ?> <br><br>
        
        <h2>Tout écrire dans une phrase :  echo "Bonjour $fullname et bienvenue sur le site !";</h2>
        <?php
                $fullname = "Toto";
                echo "Bonjour $fullname et bienvenue sur le site !";
        ?> <br> <br>

        <?php
        $fullname = 'Toto';
        echo 'Bonjour $fullname et bienvenue sur le site !'; // ERREUR !
        ?> <br><br>
        <h2>Le mieux : Séparer par des ' et des . : echo 'Bonjour ' . $fullname . ' et bienvenue sur le site !';</h2>
        <?php
        $fullname = 'Toto';
        echo 'Bonjour ' . $fullname . ' et bienvenue sur le site !'; // OK
        ?> <br><br>
        
        <h2>Faire des calculs</h2>

        <?php
        echo 'Demander à l\'ordinateur d\'effectuer des calculs';
        $number = 2 + 4; 
        echo '<br> $number = 2 + 4 = '  . $number ;   // $number prend la valeur 6
        $number = 5 - 1;
        echo '<br> $number = 5 - 1 = ' . $number ; // $number prend la valeur 4
        $number = 3 * 5;
        echo  '<br> $number = 3 * 5 =' . $number ; // $number prend la valeur 15
        $number = 10 / 2;
        echo ' <br> $number =10 / 2 =' . $number ; // $number prend la valeur 5
        $number = 3 * 5 + 1;
        echo ' <br> $number = 3 * 5 + 1=' . $number ;// $number prend la valeur 16
        $number = (1 + 2) * 2;
        echo '<br> $number = (1 + 2) * 2 = '. $number ;  // $number prend la valeur 6
        $number = 10;
        $result = ($number + 5) * $number; // $result prend la valeur 150
        echo '<br> $result Fonction  (X + 5)*X =' .$result .' avec $number = X=10';  

        $number = 10 % 5; // $number prend la valeur 0 car la division tombe juste
        echo '<br>  $number = 10 % 5 =' .$number .' (le sigle % = Modulo = reste de la division)'; 
        $number = 10 % 3; // $number prend la valeur 1 car il reste 1
        echo '<br>  $number = 10 % 3 =' .$number .' (le sigle % = Modulo = reste de la division)<br><br>'; 
        ?>

        <?php
        echo "Utiliser la fonction if et si faux, else : <br>";
        $isEnabled = true; // La condition d'accès

        if ($isEnabled == true) {
            echo "Vous êtes autorisé(e) à accéder au site ✅ <br><br>";
        }
        else {
            echo "Accès refusé ❌ <br>";
        }
        ?>
        <h2>Fonctions IF ELSEIF et ELSE </h2>

        <?php
        echo "Utiliser la fonction if, si \"non\"  elseif, et \"si ni oui ni non\" else : <br>";

        $isAllowedToEnter = "Non"; // SI on a l'autorisation d'entrer

        if ($isAllowedToEnter == "Oui") {echo "Vous êtes autorisé(e) à accéder au site✅";
            // instructions à exécuter quand on est autorisé à entrer
        } // SINON SI on n'a pas l'autorisation d'entrer
        elseif ($isAllowedToEnter == "Non") {echo "Accès refusé ❌ <br> ";
            // instructions à exécuter quand on n'est pas autorisé à entrer
        } // SINON (la variable ne contient ni Oui ni Non, on ne peut pas agir)
        else {
            echo "Euh, je ne comprends pas ton choix ...<br<><br>";
        }
        
        ?>

        <h2>Le cas des booléens, soit la variable est true  (vrai) ;soit false  (faux).</h2>
        <p>Si on veut que la condition soit vraie, on écrit :   if ($isAllowedToEnter) </p>
        <p>si on veut que la condition soit fausse, on écrit :   if (!$isAllowedToEnter)</p>

        <?php
        $isAllowedToEnter = true;

        if ($isAllowedToEnter) {
            echo "Bienvenue ";
        }
        else {
            echo "T'as pas le droit d'entrer !";
        }
        ?><br>

        <?php
        $isAllowedToEnter = true;

        // Si pas autorisé
        if (! $isAllowedToEnter) {echo "t'es pas autoisé";
        }
        else { echo "tu peux";}
        ?><br>

        <?php
        $isEnabled = true;
        $isOwner = false;

        if ($isEnabled && $isOwner) {
            echo 'Accès à la recette validé ✅';
        } else {
            echo 'Accès à la recette interdit ! ❌';
        }
        ?><br>

        <h1>2 méthodes pour écrire le même code</h1>
        <p>classique</p>

        <?php
        $chickenRecipesEnabled = true;

        if ($chickenRecipesEnabled) {
            echo 'Liste des recettes à base de poulet';
        }
        ?> <br>
        <p>Longue avec endif;</p>
        
        <?php $chickenRecipesEnabled = true; ?>

        <?php if ($chickenRecipesEnabled): ?> <!-- Ne pas oublier le ":" -->

        Liste des recettes à base de poulet

        <?php endif; ?><!-- Ni le ";" après le endif -->

        <h1>Switch</h1>
        <p>Comparaison avec If et elseif</p>
        
        <?php
        $grade = 12;

        if ($grade == 0) {
            echo "Tu es vraiment un gros nul !!!";
        }

        elseif ($grade == 5) {
            echo "Tu es très mauvais";
        }

        elseif ($grade == 7) {
            echo "Tu es mauvais";
        }

        elseif ($grade == 10) {
            echo "Tu as pile poil la moyenne, c'est un peu juste…";
        }

        elseif ($grade == 12) {
            echo "Tu es assez bon";
        }

        elseif ($grade == 16) {
            echo "Tu te débrouilles très bien !";
        }

        elseif ($grade == 20) {
            echo "Excellent travail, c'est parfait !";
        }

        else {
            echo "Désolé, je n'ai pas de message à afficher pour cette note";
        }
        ?><br>

        <p>comparaison avec switch, case et break pour arrêter la lecture et default à la fin</p>

        <?php
        $grade = 10;

        switch ($grade) // on indique sur quelle variable on travaille
        { 
            case 0: // dans le cas où $grade vaut 0
                echo "Tu es vraiment un gros nul !!!";
            break;
            
            case 5: // dans le cas où $grade vaut 5
                echo "Tu es très mauvais";
            break;
            
            case 7: // dans le cas où $grade vaut 7
                echo "Tu es mauvais";
            break;
            
            case 10: // etc. etc.
                echo "Tu as pile poil la moyenne";
            break;
            
            case 12:
                echo "Tu es assez bon";
            break;
            
            case 16:
                echo "Tu te débrouilles très bien !";
            break;
            
            case 20:
                echo "Excellent travail, c'est parfait !";
            break;
            
            default:
                echo "Désolé, je n'ai pas de message à afficher pour cette note";
        }
        ?><br>

<p>Sans le break, toutes les réponses après la bonne réponse s'affichent</p>
      <?php
        $grade = 10;

        switch ($grade) // on indique sur quelle variable on travaille
        { 
            case 0: // dans le cas où $grade vaut 0
                echo "Tu es vraiment un gros nul !!!";
            
            
            case 5: // dans le cas où $grade vaut 5
                echo "Tu es très mauvais";
           
            
            case 7: // dans le cas où $grade vaut 7
                echo "Tu es mauvais";
            
            
            case 10: // etc. etc.
                echo "Tu as pile poil la moyenne, c'est un peu juste…";
           
            
            case 12:
                echo "Tu es assez bon";
            
            
            case 16:
                echo "Tu te débrouilles très bien !";
            
            
            case 20:
                echo "Excellent travail, c'est parfait !";
            
            
            default:
                echo "Désolé, je n'ai pas de message à afficher pour cette note";
        }
        ?><br>1


    <?php
    $userAge = 15;

    $isAdult = ($userAge >= 18) ? true : false;

    ?>
    
    <br>2


     <?php
    $userAge = 15;

    // Ou mieux, dans ce cas précis
    $isAdult = ($userAge >= 18); 
    ?>

    

   
        
    
    </body>
</html>