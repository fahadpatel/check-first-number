<?php
$value = array(234333,344665,456325);
$number_array=array(2,3);


foreach($value as $key){

  //echo   check($key);

    $number_check=check($key);
    
 
    
    if (in_array($number_check,$number_array)){
            
        echo "this is ".$number_check;
    }else{
    
    echo "start number not exist";
    }

    
       if($number_check==2){
          echo "this is 2";  
    }
    elseif($number_check==3){
    echo "this is 3";
    }
    elseif($number_check==4){
    echo "this is 4";
    }
    else {
    echo "some text";
    }
    

}

function check($number){

        $check= substr($number,0,1);
        return $check;
}

?>
