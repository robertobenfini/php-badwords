<?php

    //prendo in valore della text area
    $parag = $_POST['text'];

    //stampo a schermo il testo di text area
    echo $parag."<br/>";

    //stampo a schermo la lunghezza del paragrafo
    echo " Lunghezza paragrafo: ".strlen($parag)."<br/>";

    //prendo il valore dall'input della parolla da censurare
    $word = $_POST['censored'];

    //nascondo la parola da censurare
    echo str_replace($word, '***', $parag);
    

?>