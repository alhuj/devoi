<?php
require_once '../model/DB.php';
require_once '../model/UserDB.php';

$base_url = "http://localhost:2145/devoirphp/";

//// ADD
if(isset($_POST['valider']))
{
    extract($_POST);
    $ok = addUser($login, $password, $nom);
    header("location:$base_url?page=addeuser&ok=$ok");
}


?>