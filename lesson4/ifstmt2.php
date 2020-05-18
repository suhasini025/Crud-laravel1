<?php
$name = "samer";
if($name == "user"){
    echo "you can enter!";
}else{
    echo "you can't enter";
}

?>
<hr>

<?php
//nested if condition
$user = "suhasini";
$password = "password";
if($user == "suhasini"){
if($password == "password1"){
    echo "you can enter!";
}else{
    echo "INvalid Password!";
}
}else{
    echo "you can not enter";
}
?>
<hr>
<?php
$user = "user";
$password = "password";
if($user == "user" && $password == "password"){
    echo "you can enter!";
}else{
        echo "you cannot enter";
    
}
?>

<hr>
<?php
$age = 78;
if($age<20){
    echo "you are teenage";
}elseif($age>=20 && $age<=40){
    echo "you are young";
}elseif($age>=40 && $age<=60){
    echo "you are old";

}else{
    echo "you are too old";
}
?>