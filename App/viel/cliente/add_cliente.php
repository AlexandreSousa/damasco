<?php
/**
 * Created by PhpStorm.
 * User: akira
 * Date: 07/11/14
 * Time: 18:34
 */

$x = new Tform;
$x->setLabel('Teste');
$ok = $x->Tinput('tex','form','id','','Teste de formulario','',20);

$x->setForm($ok);