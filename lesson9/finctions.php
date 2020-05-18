<?php
//function is a block of statement excuted reaptily when  cal a function

echo 'My Name is ';
function MyFunction(){
    echo 'suhasini <br>';
}
MyFunction();
MyFunction();
MyFunction();

MyFunction();
?>
<hr>
<?php
function add($num1,$num2){
    echo $num1 + $num2;
}
add(10,20);
?>
<hr>
<?php
function add1($num1, $num2){
    echo $num1 + $num2;
}
$x = 100;
$y = 400;
add1($x,$y);
?>
<hr>
<?php
function printDate($day, $month, $year){
    echo $day.' '.$month.' '.$year;

}
$d = 5;
$m = 'march';
$y = 2019;
printDate($d,$m,$y);
?>
<hr>
<?php
//(10 + 10)/(5 + 5) = 20/10 = 2
function add2($num1, $num2){
    $result = $num1 + $num2;
    return $result;
}
function divide($num1, $num2){
    $result = $num1/$num2;
    return $result;
}
$finalResult = divide(add2(10,10), add2(5,5));
echo 'Final Result is '.$finalResult




















?>


















