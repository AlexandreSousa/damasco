<?php
/**
 * Created by PhpStorm.
 * User: akira
 * Date: 06/11/14
 * Time: 16:34
 */



$topo = new Tgrid();
$topo->Ttopo('Listagen de usuario','cliente','cliente');


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

//$res        = $mysqli->query("SELECT * FROM login LIMIT $inicio, $maximo");

$res = $db->read('login','',"LIMIT {$inicio}, {$maximo}");



$topo->TtotalDb(login);

?>
<table class="table table-striped table-hover">
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Login</th>
        <th colspan="2">Ações</th>
    </tr>
<?php
while($ok = $res->fetch_array()){

    ?>
    <tr>
    <?php
    echo '<td>'.$ok['id'].'</td>';
    echo '<td>'.$ok['cpf'].'</td>';
    echo '<td>'.$ok['senha'].'</td>';
    ?>
        <td width="1"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" data-placement="top" rel="tooltip"><span class="glyphicon glyphicon-pencil"></span></button></td>
        <td width="1"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" data-placement="top" rel="tooltip"><span class="glyphicon glyphicon-trash"></span></button></td>
    </tr>

    <?php
    }

?>

</table>
<?php
echo '<br>';

echo '<ul class="pagination">';
    $pagin = $mysqli->query("SELECT * FROM login");
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