

<?php
// Your code here!


function answer($input){

$primes = "2357111317192329...";


$answer = "";
$i=0;

while($i<5){
    
 $answer = $answer . $primes[$input+$i];
 $i++;
}

echo $answer;
}

answer(0);

echo "\r\n";

answer(1);

echo "\r\n";

answer(2);

echo "\r\n";

answer(3);


?>
