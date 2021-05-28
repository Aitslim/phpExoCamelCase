<?php
// Commande pour lancer le serveur inter php";
// php -S localhost:8080

// echo "Hello world !" . "\n";
// echo "\n";
// echo 1+2, "\n";
// echo "\n";

// $var1 = "YYYYY";
// $var2 = "X";
// $var3 = str_replace("Y","X",$var1,4);

// echo "\n";
// echo $var3, "\n";

// $nom = "Ait";
// $prenom = "Slimane";

// echo "Je suis ". $prenom ."\n";
// echo "Et aussi. Je suis $prenom" ."\n";
// echo "Je suis ". $prenom . " ". $nom ."\n";

// $nom = "Ait";
// $prenom = "Slimane";

// $nom .= " ". $prenom;
// echo $nom

function camelCase(string $param): string
{
    $resultat  = "";
    $resultat .= strtolower($param[0]);
	$debut     = false;

	for ($i = 1; $i < strlen(trim($param)); $i++) {

		if ($param[$i] == " ") {
			$debut = true;
            continue;
		}
		$resultat .= ($debut) ? strtoupper($param[$i]) : strtolower($param[$i]);
		$debut     = false;
    }
    return $resultat;
}

$var1 = "Je suis en formation pHP ET le petit chat EST mignon ";
$var2 = camelCase($var1);
echo "\n";
echo "Avant : " . $var1 . "\n";
echo "Après : " . $var2 . "\n";
echo "\n";
