<?php
$servidor="localhost";
$usuario="pma";
$senhabancodedados="JujvJMA]BUM)CMu*";
$banco="capcha";

$conecxao=mysqli_connect($servidor,$usuario,$senhabancodedados,$banco);

if(!$conecxao){
    die;
}




?>