<?php

for($i=1;$i<=5;$i++){
    for($j = 1; $j <= 5; $j++){
        echo "●";
    }
    echo "<br />";
}


// $i=1;
// while($i<=50){
//     echo $i."\n";
//     if(($i%3==0)&&($i%5==0)){
//         echo "FizzBuzz";
//         echo "<br />";
//         $i++;
//         continue;
//     }else if($i % 3 == 0){
//         echo "Fizz";
//     }else if($i % 5 == 0){
//         echo "Buzz";
//     }else{
//         echo "それ以外の数";
//     }
//     $i++;
//     echo "<br />";
// }