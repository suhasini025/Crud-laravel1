<?php
$num = 20;
switch($num){
    case 1:
        echo "one";
    break;
    case 2:
        echo "two";
    break;
    case 3:
        echo "three";
    break;
    default :
    echo 'number Not found!';

}
?>
<hr>

<?php
//suhasini and shaivi
$name = "shaivi";
switch($name){
    case "suhasini":
    case "shaivi":
        echo "You are entered";
    break;
    default:
echo "you cannot entered";
}
?>

<hr>

<?php
function add($num1, $num2){
    echo $num1 + $num2;

}
add(5,6);
?>