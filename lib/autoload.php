<?php
function __autoload($classe){
    if(file_exists("lib/mvc/".$classe.".Class.php")):
        include_once("lib/mvc/".$classe.".Class.php");

    endif;

    if(file_exists("lib/mvc/".$classe.".Class.php")):
        include_once("lib/mvc/".$classe.".Class.php");
    endif;
}