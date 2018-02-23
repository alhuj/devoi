<?php

function addUser($login, $passwor, $nom)
{
    $sql = "INSERT INTO user VALUES "
            . "(NULL, '$login', '$passwor', '$nom')";
    return executeSQL($sql);
}

function listeUsers()
{
    $sql = "SELECT * FROM user";
    return executeSQL($sql);
}

?>