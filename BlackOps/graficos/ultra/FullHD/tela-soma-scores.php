<?php
$cpu = $_POST['score-cpu']; 
$gpu = $_POST['score-gpu']; 
$ram = $_POST['score-ram']; 

$soma = $cpu + $gpu +$ram;
echo $soma;
?>

<br></br>

<?php
$score = $_POST['score'];
echo $score;
?>

<br></br>

<?php
if ($soma >= $score) {

echo "Seu pc roda!!!";
}

else{
echo "Infelizmente seu pc nao roda :(";
}

?>	