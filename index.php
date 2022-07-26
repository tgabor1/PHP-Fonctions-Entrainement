<?php

// Exercice 1
// $joursFeries = ["01/01", "18/04", "01/05", "08/05", "26/05", "06/06", "14/07", "15/08", "01/11", "11/11", "25/12"];
// $date = "01/01";

// function fonctionJoursFeries($valeur, $array){
//     foreach ($array as $jourFerie){
//         if ($valeur == $jourFerie){
//             return "vrai";
//         }
//     }
//     return "faux";
// }
// print_r(fonctionJoursFeries($date, $joursFeries));



// Exercice 2
// function fonctionSansParametre(){
//     return ["01/01", "18/04", "01/05", "08/05", "26/05", "06/06", "14/07", "15/08", "01/11", "11/11", "25/12"];
// }
// print_r(fonctionSansParametre());



// Exercice 3
// function fonctionSecu($numSecu){
//     // uniquement des chiffres 
//     $numSecu = preg_replace("/[^0-9]/", "", $numSecu);
//     // 13 chiffres + 2 de cle. 
//     if ((strlen($numSecu != 13) && (strlen($numSecu) != 15))){
//         return 0;
//     }
//     // chiffre un ou deux selon le sexe 
//     if (($numSecu[0] == 0) || ($numSecu[0] > 2)){
//         return 0;
//     }
//     // deux chiffres suivants : année et mois de naissance (entre 1 et 12)
//     if (!in_array(substr($numSecu, 3, 2), range(1, 12))){
//         return 0;
//     }
//     return "vrai";
// }
//     if (fonctionSecu('2 83 12 75 999 107 92'))
//         echo 'vrai';
//     else echo 'faux';



// Exercice 4
// $numDep = "";

// function departement($numDep){
//     if (($handle = fopen("departement.csv", "r")) !== FALSE){
//         while (($data = fgetcsv($handle, 1000, ",")) !== FALSE){
//                 if ($numDep == $data[1]){
//                     return $data[2];
//                 }
//         }
//         fclose($handle);
//     }
// }
// echo departement("76");



// Exercice 5
// $numDep = "";

// function departement($numDep){
//     if (($handle = fopen("villes_france.csv", "r")) !== FALSE){
//         while (($data = fgetcsv($handle, 1000, ",")) !== FALSE){
//             if ($numDep == $data[1]){
//                 return $data[2];
//             }
//         }
//         fclose($handle);
//     }
// }
// echo departement("76");



// Exercice 6
$date = "Monday 25th of July 2022";

// Affichage de quelque chose comme : Monday 8th of August 2005
// echo date('l jS \of F Y');

function fonctionDate($date){
    setlocale(LC_ALL, 'fr_FR.UTF8', 'fr_FR','fr','fr','fra','fr_FR@euro');
    echo "Aujourd'hui nous sommes le ".strftime("%A %d %B %Y");
    // echo "Aujourd'hui nous sommes le " . strftime($date);
}
print_r(fonctionDate($date))






// $date = "Monday 8th of August 2005";

// // Affichage de quelque chose comme : Monday 8th of August 2005
// // echo date('l jS \of F Y');

// function fonctionDate($date){
//     setlocale(LC_ALL, 'fr_FR.UTF8', 'fr_FR','fr','fr','fra','fr_FR@euro');
//     // echo "Aujourd'hui nous sommes le ".strftime("%A %d %B %Y");
//     echo "Aujourd'hui nous sommes le " . strftime($date);
// }
// print_r(fonctionDate($date))


?>