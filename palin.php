<?php
function palindrome($palindrome) {
    $reversed = '';
    $original = $palindrome;
    $string = array();
    $j = 0;
    $converted = (string) $palindrome;
    //var_dump($converted);

    $palindrome = str_split($converted);
    //var_dump($palindrome);

    $i = count($palindrome) - 1;

    while($i >= 0) {
        $string[$j] = $palindrome[$i];
        $j++;
        $i--;
    }
    $reversed = implode('', $string);
    if($reversed === $original) {
        echo 'palindrome ';
        return TRUE;
    } else {
        echo 'pas un palindrome';
        return FALSE;
    }
}

palindrome('bonjour');
?>