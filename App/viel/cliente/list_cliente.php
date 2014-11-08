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

$pag = "$_GET[pag]";
    if($pag >= '1'){
        $pag = $pag;
    }else{
        $pag = '1';
    }
$maximo = '10';
$inicio =  ($pag * $maximo) - $maximo;

//$res        = $mysqli->query("SELECT * FROM login LIMIT $inicio, $maximo");


$topo->TtotalDb('empresa',$maximo);


$topo->setHerd('ID,Nome,Fantasia,Ações');
$topo->Ttable('empresa','id,nome,fantasia');

/*
while($ok = $res->fetch_array()){
    ?>
    <tr>
    <?php
    echo '<td>'.$ok['id'].'</td>';
    echo '<td>'.$ok['nome'].'</td>';
    echo '<td>'.$ok['fantasia'].'</td>';
    ?>
        <td width="1"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" data-placement="top" rel="tooltip"><span class="glyphicon glyphicon-pencil"></span></button></td>
        <td width="1"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" data-placement="top" rel="tooltip"><span class="glyphicon glyphicon-trash"></span></button></td>
    </tr>

    <?php
    }
*/
?>
</table>
<?php
echo '<br>';

$topo->Tpaginacion('empresa','cliente','cliente',$maximo);