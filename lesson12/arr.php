<?php
$users = array('suhasini','sindhu','shaivi');
// echo $users;//Notice: Array to string conversion in E:\xampp\htdocs\suhasini\lesson12\arr.php on line 3
// //Array
//print_r($users[0]);
echo $users[2];
?>
<hr>

<?php
$users = array('suhasini','sindhu','shaivi');
print_r($users);
echo '<br><br>'.$users[0]. '<br><br>';
$users[3] = 'prashanth';
print_r($users);
?>
<hr>
<?php
$food = array('Biryani'=>500,'pizza'=>200,'salad'=>300);
print_r($food);
echo $food['Biryani']
?>
<hr>
<?php
$cars = array("Volvo","BMW","Audi","Toyota");
echo "$cars[0], $cars[1], $cars[2], $cars[3]";
?>