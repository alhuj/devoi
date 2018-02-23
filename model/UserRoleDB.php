<?php

function addUserRole($idUser, $idRole)
{
    $sql = "INSERT INTO user_roles VALUES "
            . "($idUser, $idRole)";
    return executeSQL($sql) or die($sql);
}

// La liste des roles d'un user donne
function listeRoleUser($idUser)
{
    $sql = "SELECT nomRole, idRole "
            . "FROM user_roles ur, role r "
            . "WHERE r.id = ur.idRole "
            . "AND ur.idUser = $idUser";
    return executeSQL($sql);
}

function revokeRole($idRole, $idUti)
{
    $sql = "DELETE FROM user_roles WHERE idRole = $idRole AND idUser = $idUti";
    return executeSQL($sql);
}


?>