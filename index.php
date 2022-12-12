<?php 
$title = 'Quarantaquattro gatti';
$text = "Nella cantina di un palazzone
Tutti i gattini senza padrone
Organizzarono una riunione
Per precisare la situazione
Quarantaquattro gatti
In fila per sei col resto di due
Si unirono compatti
In fila per sei col resto di due
Coi baffi allineati
In fila per sei col resto di due
Le code attorcigliate
In fila per sei col resto di due
Sei per sette quarantadue
Più due quarantaquattro
Loro chiedevano a tutti i bambini
Che sono amici di tutti i gattini";
$length = strlen($text);

$word = $_GET['word'];
$newText = str_replace($word,'***',$text,$count);
$newTitle = 'Gattini censurati';
$newParaLenght = strlen($newText);
?>
<body style="background-color: #292929; color:white; text-align: center; font-size: 1rem">
    

<h3 style="font-size: 1rem; background-color: white; height: 30px; color: black">small tip: aggiungi all'url <strong>'/?word=parolachevuoicensurare'</strong> per censurarla!</h3>
<h1 ><?= $title ?></h1>
<pre><?= $text ?></pre>
<p>Il paragrafo ha una lunghezza di <?= $length ?> parole</p>

<h1  > <?= $newTitle ?></h1>
<pre><?= $newText ?></pre>
<p>La parola sostituita era presente <?= $count ?> volte</p>
<p>Il nuovo paragrafo ha una lunghezza di <?= $newParaLenght ?> parole</p>

</body>