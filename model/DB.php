<?php
function getConnexion(){
    $connexion = mysqli_connect('localhost','root','','devoirphp');
    return $connexion;
}

function executeSQL($sql){
    return mysqli_query(getConnexion(),$sql);   
}