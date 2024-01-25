<?php
//ESERCIZIO 1
// $users = [
//     ['name' => 'Anthony','cognome' => 'Elia', 'gender' => 'Uomo'],
//     ['name' => 'Lucia','cognome' => 'Delia', 'gender' => 'Donna'],
//     ['name' => 'Yvan','cognome' => 'Silla', 'gender' => 'Uomo'],
// ];

// foreach ($users as $key => $elemento){
// if($elemento["gender"] == 'Uomo'){
//     echo "Buongiorno Sig. {$elemento["name"]}\n";
// } else {
//     echo "Buongiorno Sig.ra {$elemento["name"]}\n";
// };
// };

//ESERCIZIO 2
// $numeri = [1,2,3,4,5,6,7,8,9];
// $sommaNumeriPari = 0;
// $i = 0;
// foreach($numeri as $elemento){
//     if($elemento%2 == 0){
//         $sommaNumeriPari += $elemento;
//     $i++;
// }
// } echo $sommaNumeriPari."\n";
// $media = $sommaNumeriPari/$i;
// echo $media;

//ESERCIZIO 3 
// for($i=0; $i<=100; $i++){
//     if ($i %3==0 && $i%5==0){
//     echo "HACKADEMY\n";
// } else if ($i %3==0) {
//     echo "PHP\n";
// } else if ($i %5==0) {
//     echo "JAVA\n";
// } else {
//     echo "{$i}\n";
// }
//};

$temperatura = 20; 

if ($temperatura < 15){
    echo "Fa freddo";
} else ($temperatura >= 15){
    echo "Fa caldo";
} else ($temperatura <= 5){
    echo "Fa molto freddo";
} if else ($temperatura > 25){
    echo "Fa molto caldo";
};


