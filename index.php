<?php


date_default_timezone_set("Africa/Casablanca");
spl_autoload_register(function ($class) {
    require_once "$class.php";
});
try {


    $p1 = new Personne("Fred", "1999-12-20", "male");

    $e1 = new Etudiant($p1, "Alan Turing", "2021-10-12");

    $notes = [[13.5, 3], [16.25, 3], [14.00, 8]];
    $e1->set_notes($notes);

    echo '<pre>';

    // echo $etudiant->to_string();
    // echo $p1->to_string();

    // var_dump($p1);
    // var_dump($e1);
    echo $e1->calculer_moyenne();

    // var_dump($etudiant);

    echo '</pre>';
} catch (Exception $e) {
    echo '<pre>';
    // var_dump($e);
    echo $e->getMessage();
    echo '</pre>';
}
