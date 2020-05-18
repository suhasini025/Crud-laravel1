<?php
$cars = array("Volvo","BMW","Audi","Toyota");
echo "$cars[0], $cars[1], $cars[2], $cars[3]";
?>
<hr>
<?php
$cars = array("Volvo","BMW","Audi","Toyota");
$length = count($cars);
//echo $length;
for($i=0; $i<$length; $i++){
    echo $cars[$i]."<br>";
}

?>