<?php

//Complete the method/function so that it converts dash/underscore delimited words into camel casing. The first word within the output should be capitalized only if the original word was capitalized (known as Upper Camel Case, also often referred to as Pascal case).
//Examples
//toCamelCase("the-stealth-warrior"); // returns "theStealthWarrior"
//toCamelCase("The_Stealth_Warrior"); // returns "TheStealthWarrior"

function toCamelCase($str){

    $fraza_noua = '';
    
        $foundUnderscore = strpos($str,"-");
        if($foundUnderscore!==false){
          $arrCuv = explode("-",$str);
        }
        
        $foundMinus = strpos($str,"_");
        if($foundMinus!==false){
          $arrCuv = explode("_",$str);
        }
        
        //print_r($arrCuv);
        for($i=0;$i<count($arrCuv);$i++){
            if($i==0){
                $fraza_noua.=$arrCuv[$i];
            }else{
              $fraza_noua.=ucfirst($arrCuv[$i]);
            }
        }
    
        return $fraza_noua;
    
    }

echo toCamelCase("the_stealth_warrior");


//function toCamelCase($str){
//    return preg_replace_callback("~[_-](\w)~", function($m) { return strtoupper($m[1]); }, $str);
//}

//function toCamelCase($str){
//    $str = str_replace("-", "_",$str);
//    $firstPos = strpos($str, "_");
//    return substr($str,0,$firstPos).str_replace("_", "",ucwords(substr($str,$firstPos), "_"));
//}

//function toCamelCase( $str ){

//    return 
//      str_replace(' ','', $str[0].
//        substr(
//          ucwords(
//            str_replace(['_','-'],' ',$str)
//          ),1
//        )
//      );

      
  }


?>