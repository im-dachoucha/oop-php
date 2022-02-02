<?php


date_default_timezone_set("Africa/Casablanca");
spl_autoload_register(function ($class) {
    require_once "$class.php";
});
try {
    $p1 = new Personne("Fred", "1999-12-20", "male");

    echo '<pre>';

    // echo $etudiant->to_string();
    // echo $p1->to_string();

    var_dump($p1);

    // var_dump($etudiant);

    echo '</pre>';
} catch (Exception $e) {
    echo '<pre>';
    // var_dump($e);
    echo $e->getMessage();
    echo '</pre>';
}
