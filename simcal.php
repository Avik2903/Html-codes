<?php
function simcal($n1,$n2,$op){
    if($op=="add")
    echo ($n1+$n2);
    else if($op=="sub")
    echo ($n1-$n2);
}

simcal(5,2,"sub");

?>

<?php
function pali($str){
    $rev=strrev($str);
    if($str==$rev)
    echo ("Palindrome");
    else
    echo ("Not");
}

pali("radar");

?>

<?php
function fib($n){
    if($n==0)
    return 0;
    else if($n==1)
    return 1;
    else
    return (fib($n-1)+fib($n-2));
}
for($i=0;$i<6;$i++)
echo (fib($i));

?>