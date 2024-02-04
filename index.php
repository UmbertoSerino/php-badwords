<!-- action, una volta compilato il form e inviato rimanda al file script.php, method è il metodo con cui viene effettuata la chiamata -->
<form action="index.php" method="GET">
    <label>Scrivi una parola</label>
    <!-- inseriamo il dato name, che poi verra' inviato al file script.php -->
    <input type="text" name="parola">
    <button type="submit">Risultato</button>
</form>
<?php
// Nome della variabile con il $
$paragraph = 'Ciao, sono quello che ti ha incontrato alla festa';
// prende il valore inserito nel form nel campo name
$testo = isset($_GET['parola']) ? $_GET['parola'] : '';
// str_replace, prende una stringa e la sostituisce con un altra, dalla variabile $
$changeString = str_ireplace($testo, '***', $paragraph);

?>

<!-- echo, stampa il valore della variabile ed echo strlen sta per stampa valore variabile e  lunghezza stringa -->
<p><?php echo $paragraph ?> = <strong> <?php echo strlen($paragraph); ?> lettere</strong> </p>
<p>la parola che inserito "<?php echo $testo ?>" = <?php echo strlen($testo) ?> lettere </p>
<p>Attenzione, c'era una parola che non potevi usare, <br> nuovo testo: <?php echo $changeString ?> = <strong> <?php echo strlen($changeString) ?> lettere</strong></p>