<?

/*
function find($integers) {
$odd = array();
   $even = array();
   
   for($i=0; $i<count($integers); $i++){
     if($integers[$i]%2==0){
       array_push($odd,$integers[$i]);
     }else{
       array_push($even,$integers[$i]);
     }   
   }

   if(count($odd)<count($even))
       return $odd[0];
   else
       return $even[0];

}
*/


find([100, 101, 102]);


function find($i) {
    foreach ($i as $x)
       $x % 2 == 0 ? $even[] = $x : $odd[] = $x;
    return $odd < $even ? $odd[0] : $even[0];
 }
 

?>