<?php
function connectDatabase($db_host,$db_user,$db_password,$db_name) {
    $db_host = 'mysql';
    $db_user = 'root';
    $db_password ='root_password';
    $db_name = 'init';

    $db = mysqli_connect($db_host, $db_user, $db_password, $db_name);

    if (!$db) {
        throw new Exception("connexion echouee " . mysqli_connect_error());
    }

    return $db;
}

try {
    $db = connectDatabase('mysql','root','root_password','init');
} catch (Exception $e) {
    echo $e->getMessage();
    exit;
}

?>