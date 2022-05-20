<!-- ## Snack 2
Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->
<?php
$array = [];
$array["name"] = $_GET["name"];
$array["mail"] = $_GET["mail"];
$array["age"] = intval($_GET["age"]);
$lenght = strlen($array['name']);
//var_dump(gettype($array['age']), $lenght);

if ((strlen($array['name']) >= 3) && (strpos($array['mail'], '@')) && strpos($array['mail'], '.')) {
    echo 'accesso riuscito';
} else {
    echo 'accesso negato';
}
//var_dump($array);
//&& (strpos($array['mail'], '@') && strpos($array['mail'], '.'))