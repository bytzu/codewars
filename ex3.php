<?php

function XO($s) {
    $vector_litere = str_split($s);
    $nr_x = 0;
    $nr_o = 0;
    
    foreach($vector_litere as $litera){
      if($litera =='x' or $litera == 'X')
        $nr_x++;
      if($litera =='o' or $litera =='O')
        $nr_o++;
    }

    echo '<br/>'.$nr_o.'<br/>';
  echo '<br/>'.$nr_x.'<br/>';
    
    if( $nr_x == $nr_o)  
      return true;
      
    if($nr_x!=$nr_o)  
      return false;
      
    
  }

  /*
  function XO($s) {
  $lower = strtolower($s);
  return substr_count($lower, 'x') === substr_count($lower, 'o');
}
  */

  echo XO('xxxoo');
  


?>