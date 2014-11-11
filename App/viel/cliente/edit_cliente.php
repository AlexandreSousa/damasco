<?php
/**
 * Created by PhpStorm.
 * User: akira
 * Date: 11/11/14
 * Time: 17:57
 */

echo $id = $_GET['id'];

$mostra = $db->read('menu',"WHERE id = {$id}",'');

$form = new Tform;
$form->Tinput('text','nome','id',$mostra[nome],'','',20);