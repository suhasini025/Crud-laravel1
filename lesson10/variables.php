<?php
//global
$x = 10;
function abc(){
global $x;
echo $x;
}
abc();
?>
<hr>
<?php
function fun1(){
    $x = 100;
    return $x;
}
echo fun1();
?>

<hr>
<?php
function fun2(){
    //local variable
    $x = 10;
    return $x;
}
$y = 20;
$z = $y + fun2();
echo $z;

?>
<hr>

<?php
function myTest(){
    static $x = 0;
echo $x. '<br>';
$x++;
}
myTest();
myTest();
myTest();
myTest();

?>






























