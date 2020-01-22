<?php
/*function DNA_strand($dna) {
  
  $dnastrand = '';  
  $cuvant = str_split($dna);

  foreach($cuvant as $litera){
      switch($litera){
            case 'A':
                $dnastrand.= 'T';
                break;
            case 'T':
                $dnastrand.= 'A';
                break;
            case 'G':
                $dnastrand.= 'C';
                break;
            case C:
                $dnastrand.= 'G';
                break;

      }     
  }
  return $dnastrand;

}*/

function DNA_strand($dna) {
    return strtr($dna, 'ACGT', 'TGCA');
  }

echo DNA_strand("AAAA");

?>