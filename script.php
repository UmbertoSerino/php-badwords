<?php
// prende il valore inserito nel form nel campo name
    $testo = $_GET['parolaOffensiva'];
// Nome della variabile con il $
    $paragraph = 'Ciao, sono quello che ti ha incontrato alla festa';

// str_replace, prende una stringa e la sostituisce con un altra, dalla variabile $

$changeString = str_replace('festa', '***', $paragraph)

?>

<!-- echo, stampa il valore della variabile ed echo strlen sta per stampa, lunghezza stringa e valore della variabile -->
<p><?php echo $paragraph ?> = <strong> <?php echo strlen($paragraph);?> lettere</strong> </p>
<p>Attenzione, c'era una parola che non potevi usare, <br> nuovo testo: <?php echo $changeString ?>  = <strong> <?php echo strlen($changeString) ?> lettere</strong></p>
<p>testo che hai inserito <?php echo $testo, strlen($testo) ?> </p>


