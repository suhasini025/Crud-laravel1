<?php
$food = array('Biryani'=>500,'pizza'=>200,'Salad'=>300);
foreach($food as $f=>$res){
    echo '<strong>'.$f.'</strong> --RS. ';
    echo $res.'<br>';
}
?>
<hr>
<?php
//multidimentional array
// Students
//     Boys
//        vikram,
//        srikanth,
//        Ramaya
//     Girls
//        suhasini
//        geeta
//        sita 
$students = array('boys'=>array('vikram','srikanth','naveen'),
'girls'=>array('sita','suhasini','Geeta'));
print_r($students);


?>