<?php


date_default_timezone_set("Africa/Casablanca");
spl_autoload_register(function ($class) {
    require_once "$class.php";
});
try {
} catch (Exception $e) {
    echo '<pre>';
    // var_dump($e);
    echo $e->getMessage();
    echo '</pre>';
}
