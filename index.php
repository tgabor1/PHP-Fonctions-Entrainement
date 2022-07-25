<?php

include "departement.csv";

$joursFeries = ["01/01", "18/04", "01/05", "08/05", "26/05", "06/06", "14/07", "15/08", "01/11", "11/11", "25/12"];
$date = "01/01";
$numSecu = "283127599910792";
$departement = "76";

// Exercice 1
// function fonctionJoursFeries($valeur, $array){
//     foreach ($array as $jourFerie) {
//         if ($valeur == $jourFerie) {
//             return "vrai";
//         }
//     }
//     return "faux";
// }

// Exercice 2
// function fonctionSansParametre(){
//     $joursFeries == ["01/01", "18/04", "01/05", "08/05", "26/05", "06/06", "14/07", "15/08", "01/11", "11/11", "25/12"];
// }
// return $joursFeries;

// Exercice 3
// function fonctionSecu($numSecu){
//     // uniquement des chiffres 
//      $numSecu = preg_replace("/[^0-9]/", "", $numSecu); 
//      // 13 chiffres + 2 de cle. 
//      if ((strlen($numSecu != 13) && (strlen($numSecu) != 15))){
//         return 0;
//     }
//      // chiffre un ou deux selon le sexe 
//      if (($numSecu[0] == 0) || ( $numSecu[0] > 2)){
//         return 0;
//     }
//      // deux chiffres suivants : année et mois de naissance (entre 1 et 12)
//      if (!in_array(substr($numSecu, 3, 2), range(1, 12))){
//         return 0;
//     }
//      return "vrai";
//    }

//    if (fonctionSecu('2 83 12 75 999 107 92'))
//    echo 'vrai';
// else echo 'faux';

// Exercice 4
function fonctionDepartement($departement){


    function read($csv){
        $file = fopen($csv, 'r');
        while (!feof($file) ) {
            $line[] = fgetcsv($file, 1024);

            $csv = 'myfile.csv';

            $csv = read($csv);
echo '<pre>';
print_r($csv);
echo '</pre>';

    // foreach ($array as $ville) {
    //     if ($valeur == $ville) {
    //         return "";
    //     }
    // }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exos fonctions PHP</title>
</head>

<body>
    <!-- <p><?= fonctionJoursFeries($date, $joursFeries) ?></p> -->
    <!-- <p><?= fonctionSansParametre() ?></p> -->
    <!-- <p><?= fonctionSecu($numSecu) ?></p> -->
</body>

</html>