<?php

function addRole($nomRole, $descRole)
{
    $sql = "INSERT INTO role VALUES "
            . "(NULL, '$nomRole', '$descRole')";
    return executeSQL($sql);
}

function listeRoles()
{
    $sql = "SELECT * FROM role";
    return executeSQL($sql);
}

function deleteRole($id)
{
    $sql = "DELETE FROM role WHERE id = $id";
    return executeSQL($sql);
}

?>