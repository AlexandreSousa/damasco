<?php
/**
 * 
 * @package     Damasco
 * @subpackage  Damasco.Core.Model
 */
class Tgrid extends db{
    public $Db;
    public $db;
    public $Modulos;
    public $Campos;
    public $CamposSecond;
    public $Herd;
    public $PrimaryKey;

    /**
     * Função start da classe Tgrid
     *
     * - Instância a objeto db (conexão com o banco de dados)
     *
     * @return  void
     */
    public function __construct()
    {
        require('/var/www/damasco/App/config/db.php');

        $this->db = new mysqli($host,$user,$pass,$data);

    }


    /**
     *
     * @param   string  $name       Nome do titulo da tabela
     * @param   string  $folde      Nome da pasta
     * @param   string  $file       Arquivo dentro da pasta
     *
     */
    public function Ttopo($name,$folde,$file){
        echo '
        <div style="padding:0 10px;"><div  style="border-bottom: solid 3px #297ACC">
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
                <td width="12%"><strong>'.$nome.'</strong></td>
                <td width="8%" align="right"><ul class="nav  span7" style="margin-bottom:0px;">
                        <li class="pull-right"><a href="?pg='.$folde.'/list_'.$file.'">Listar</a></li>
                        <li class="pull-right"><a href="?pg='.$folde.'/add_'.$file.'">Cadastrar</a></li>
                    </ul></td>
            </tr>
            </table>
        </div>
        <br />
        ';
    }
    public function TtopTable($campos){

    }
    /**
     *
     * @Param string    $db             Banco de dados
     * @param string    $campos         Campos da tabela
     */

    public function Ttable($db,$Campos)
    {

        echo '<table class="table table-striped table-hover">';
        echo '<tr>';


        $h       = explode(',',$this->Herd);

        foreach($h as $tpo){

            echo '<th>'.$tpo.'</th>';

        }
        echo '<tr>';
        echo '<th colspan="2">Ações</th>';



        $res = $this->db->query("SELECT * FROM empresa LIMIT $inicio, $maximo");
        print_r($res->fetch_array());


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



    }


    public function TtotalDb($tabela,$max)
    {
        $total = $this->db->query("SELECT * FROM {$tabela}");

        //echo "Temos um total de {$total->num_rows} registro exibindo {$res->num_rows} de  {$total}";

        $cal = $max -$this->num_rows;
        echo "Temos um total de {$total->num_rows} registros exibindo {$max} de {$cal}";

        }

    /**
     * @param  strin $db        nome da base de dados
     * @param string $mod       nome do modulo
     * @param string $file      nome do arquivo do modulo
     * @param string $max       variavel contendo o maximo de registro
     *
     */

    public function Tpaginacion($db,$mod,$file,$max){

        echo '<ul class="pagination">';
        $pagin = $this->db->query("SELECT * FROM {$db}");
        $total = $pagin->num_rows;
        $paginas = ceil($total/$max);
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
    }

    /**
     * @param mixed $Herd
     */
    public function setHerd($Herd)
    {
        $this->Herd = $Herd;
    }


    /**
     * Função end da classe Tgrid
     *
     * - Fecha a conexão com o banco de dados
     */
    public function __destruct()
    {
        // tem que criar a função close do db
    }

}
