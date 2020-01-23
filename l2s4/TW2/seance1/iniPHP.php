<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>Premier exercice PHP</title>
        <meta charset="UTF-8" />
        <link rel="stylesheet" href="iniPHP.css" />
    </head>
    <body>
        <header>
            <h1>Premier exercice PHP</h1>
            <h2>Réalisé par <span class="nom">Geoffrey HERMAN</span></h2>
        </header>
        <section>
            <h2>Question 1</h2>
              <?php echo "Nous sommes le ".date("d/m/Y").".";?>
        </section>
        <section>
            <h2>Question 2</h2>
              <?php echo "La version de php est : ".PHP_VERSION." et le systeme d'exploitation est : ".PHP_OS."." ;?>
        </section>
        <section>
            <h2>Question 3</h2>
            <?php $n=5; $texte="le cinq"?>
            <?php echo "\$n"." vaut : ".$n." et "."\$texte"." vaut : ".$texte."." ;?>
        </section>
        <section>
            <h2>Question 4</h2>
            <?php
            for($i = 0;$i < 5;$i++){
              echo $texte."<br>";
            }
            ?>
        </section>
        <section>
            <h2>Question 5</h2>
            <?php function paragrapheTronque($chaine,$i){
              $resultat = "";
              for($j = 0;$j<$i;$j++){
                $resultat = $resultat.$chaine[$j];
              }
              return $resultat;
            }
            ?>
            <?php echo paragrapheTronque($a="bonjour",$b=2)."<br>";?>

            <?php
            for($k = 0;$k< strlen($texte)+1;$k++){
              echo substr($texte,0,$k)."<br>";
            }

            ;?>


        </section>
        <section>
            <h2>Question 7</h2>
            <?php
            //fonction qui retourne la multiplication entre deux nombres entrés en parametre
            function multiplication($int,$entier){
              return "<li>".$int." * ".$entier ." = ".$int*$entier;
            }
            //fonction qui retourne la table de multiplication d'un entier donné en parametre
            function tableMultiplications($int){
              $resultat = "";
              for($l=1;$l<10;$l++){
                $resultat .= multiplication($int,$l)."<br>";
              }
              return "<ul>"."<br>".$resultat."</ul>";
            }
            echo tableMultiplications(2);
            ?>
        </section>
        <section>
            <h2>Question 8</h2>
            <?php
            function tablesMultiplications(){
              $result = "";
              for($m=1;$m<10;$m++){
                $result .= tableMultiplications($m);
              }
              return $result;
            }
            echo tablesMultiplications();
            ?>
        </section>
        <section>
            <h2>Question 9</h2>
            <?php
            function ligne_multi(){
              $result = "<table>"."<tbody>";

              for($z=1;$z<10;$z++){
                $result .= "<tr>"."<th> ".$z." </th>";
                for($y=1;$y<10;$y++){
                  $result .= "<th> ".$z*$y." <th>";
                }
                $result.= "<tr>"."<br>";
              }
              $result.= "</tbody>"."</table>";
              return $result;
            }
            echo ligne_multi();
            ?>

        </section>
    </body>
</html>
