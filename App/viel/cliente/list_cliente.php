<?php
/**
 * Created by PhpStorm.
 * User: akira
 * Date: 06/11/14
 * Time: 16:34
 */

echo '<br>';

$teste = new Tform();
$teste->setLabel('Nome:');
$teste->Tinput('text','teste','teste','','','Teste',20);

echo '<br>';

$mod = 'cliente';
$file = 'cliente';

$pag = "$_GET[pag]";
    if($pag >= '1'){
        $pag = $pag;
    }else{
        $pag = '1';
    }
$maximo = '10';
$inicio =  ($pag * $maximo) - $maximo;

$res        = $mysqli->query("SELECT * FROM empresa LIMIT $inicio, $maximo");

while($ok = $res->fetch_array()){
    echo $ok['nome'].'<br>';
}

echo '<br>';

echo '<ul class="pagination">';
    $pagin = $mysqli->query("SELECT * FROM empresa");
    $total = $pagin->num_rows;
    $paginas = ceil($total/$maximo);
    $links = '5';
    echo '<li><a href="?pg='.$mod.'/list_'.$file.'&pag=1">«</a></li>';
    for($i = $pag-$links; $i <= $pag-1; $i++){
        if($i >= 0){
            echo '<li><a href="?pg='.$mod.'/list_'.$file.'&pag='.$i.'">'.$i.'</a></li> ';
        }
    }
    echo '<li class="disabled"><a href="#">'.$pag.'</a></li>';
    for($i = $pag +1; $i <= $pag+$links; $i++){
        if($i > $paginas){

        }else{
            echo '<li><a href="?pg='.$mod.'/list_'.$file.'&pag='.$i.'">'.$i.'</a></li>';
        }

}
echo '<li><a href="?pg='.$mod.'/list_'.$file.'&pag='.$paginas.'">»</a></li>';

echo '</ul>';