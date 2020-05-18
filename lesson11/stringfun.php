<?php
//string length
$text = "Welcome to php & this is a PHP tutorial.";
$totalWords = str_word_count($text, 1,'&.');
//echo $totalWords; 
print_r($totalWords);
?>
<hr>
<?php
//string length
$text = "Welcome to Telugu Computer World!";
$shuffledText = str_shuffle($text);
echo $shuffledText; 
?>

<hr>
<?php
$t = 'abcdefghijklmn123456787';
$t1 = strlen($t);
echo $t1;
?>
<hr>
<?php
$t = 'suhasinireddy12345678';
$t1 = strlen($t);
echo $t.'<br><br>';
$shuffledT = str_shuffle($t);
echo $shuffledT; 
?>
<hr>
<?php
$subText = substr($shuffledT,0,$t1/2);
echo $subText;
?>
<hr>
<?php
$t1 = 'welcome to hello world! i am suhasini';

$t2 = 'welcome to hello world!';
similar_text($t1,$t2,$res);
echo $res;
?>

