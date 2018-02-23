<?php

require_once '../model/DB.php';
require_once '../model/RoleDB.php';
$base_url = "http://localhost:2145/devoirphp/";

//// ADD
if (isset($_POST['valider'])) 
{
    extract($_POST);
    $ok = addRole($nomRole, $descRole);
    echo "OK  :" . $ok;
    header("location:$base_url?page=addrole&ok=$ok");
}

//SUPPRESSION
if (isset($_GET['id'])) 
{
    deleteRole($_GET['id']);
    header("location:$base_url?page=listeroles");
}

?>