<?php


function third_side($triangle1, $triangle2, $c)
{
    $angle = cal_cos($c);
    return sqrt(($triangle1 * $triangle1) + ($triangle2 * $triangle2) - 2 * $triangle1 * $triangle2 * $angle);
}




function countAllOnes($num)
{
 
  if(!is_int($num) || $num <= 0 ){
    return "Invalid number must be integer greater than 0";
  }

  
  $count = 0;

  
  while ($num) {
    $count += $num & 1;
    $num >>= 1;
  }

  return $count;
}




function separate($srate, $prate)
{
  $sepa = array($srate, $prate);
  echo implode (" / ", $sepa);
}



function isSastry($num)
{
  $result = "FALSE";

 
  if(!is_int($num) || $num <= 0 ){
    return "Invalid number must be integer greater than 0";
  }

 
  $num = $num . $num + 1;
  
 
  $sr = sqrt($num);
  if(($sr - floor($sr)) == 0){
    $result = "TRUE";
  }

  return  $result;
}

?>