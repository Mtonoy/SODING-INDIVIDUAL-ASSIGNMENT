<?php
$x=0;
$array=[];
  $first = 1;
  $second = 2;
 
  echo "<b>Fibonacci Series : </b> \n";
 
  echo $first.' '.$second.' ';
  $third=0;
  while ($third<4000000){
 
    $third = $first + $second;
    if ($third<4000000){
       echo $third.' ';
       $array[$x]=$third;
       $x++;
    }
    $first = $second;
    $second = $third;
    }
    
  $sum=0;
  for($i = 0; $i < $x; $i++){
      if($array[$i]%2==0){
          $sum=$sum+$array[$i];
      }
  }
  $sum=$sum+2;
  echo "<br> <b>sum of the even-value :  </b>". $sum;
?>
