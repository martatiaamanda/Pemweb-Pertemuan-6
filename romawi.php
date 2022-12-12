<?php
function intToRoman($number) {
    $arrayRomawi = 
    ['M' => 1000, 
    'CM' => 900, 
    'D' => 500, 
    'CD' => 400, 
    'C' => 100, 
    'XC' => 90, 
    'L' => 50, 
    'XL' => 40, 
    'X' => 10, 
    'IX' => 9, 
    'V' => 5, 
    'IV' => 4, 
    'I' => 1];
    $value = '';
    while ($number> 0) {
        foreach ($arrayRomawi as $romawi => $int) {
            if($number >= $int) {
                $number -= $int;
                $value .= $romawi;
                break;
            }
        }
    }
    echo $value;
}
echo "Output 163 = ",intToRoman(163),"<br>", "Output 2002 = ", intToRoman(1994);
?>