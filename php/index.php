<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Ma page web</title>
    </head>
    <body>

        <h1>Ma page web</h1>
        <p>Aujourd'hui nous sommes le <?php echo date('d/m/Y h:i:s'); // la fonction affiche l'heure ?>.</p> 

        <?php echo "On peut voir que ça fonctionne"; /* si je veux écrire un commentaire plus long,
        donc sur plusieurs lignes, je fais comme ça.
        Le code PHP ne se voit pas dans le code source de la page  */ ?>

        <p>Comment écrire une variable :</p>
       
       <?php
       $userAge = 50; // La variable est créée et vaut 50
       echo "Age ";
       echo $userAge; // Echo Affiche la variable dans le navigateur
       echo " ans ";
        ?> <br> <br>

        <?php
        $fullname = "Toto";
        echo "Bonjour ";
        echo $fullname;
        echo " et bienvenue sur le site !";
        ?> <br><br>

        <?php
                $fullname = "Toto";
                echo "Bonjour $fullname et bienvenue sur le site !";
        ?> <br> <br>

        <?php
        $fullname = 'Toto';
        echo 'Bonjour $fullname et bienvenue sur le site !'; // ERREUR !
        ?> <br><br>

        <?php
        $fullname = 'Toto';
        echo 'Bonjour ' . $fullname . ' et bienvenue sur le site !'; // OK
        ?> <br><br>

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
        echo '<br>  $number = 10 % 3 =' .$number .' (le sigle % = Modulo = reste de la division)'; 
        ?>
    
    </body>
</html>