<?php
function palindrome($palindrome) {

    $palindrome = strtolower($palindrome); //force le str en minuscule
   $reversed = strrev($palindrome);

    if($reversed === $palindrome) {
        echo "c'est un palindrome";
        return TRUE;
    } else {
        echo 'pas un palindrome';
        return FALSE;
    }
}

palindrome('Kayak');

?>

