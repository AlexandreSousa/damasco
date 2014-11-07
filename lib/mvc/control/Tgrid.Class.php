<?php
/**
 * 
 * @package     Damasco
 * @subpackage  Damasco.Core.Model
 */
class Tgrid{
    public $Db;
    
    /**
     * Função start da classe Tgrid
     * 
     * - Instância a objeto db (conexão com o banco de dados)
     * 
     * @return  void
     */
    public function __construct()
    {
        require_once(APP.'App/config/db.php');
        $this->db = new  mysqli($host,$user,$pass,$data);
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
                <td width="92%"><strong>'.$nome.'</strong></td>
                <td width="8%" align="right"><ul class="nav  span7" style="margin-bottom:0px;">
                        <li class="pull-right"><a href="?pg=modulos/'.$modulo.'/list_'.$arquivo.'">Listar</a></li>
                        <li class="pull-right"><a href="?pg=modulos/'.$modulo.'/add_'.$arquivo.'">Cadastrar</a></li>
                    </ul></td>
            </tr>
            </table>
        </div>
        <br />
        ';
    }
    
    /**
     * 
     * @Param string    $db             Banco de dados
     * @param string    $campos         Campos da tabela
     */
    
    public function Ttable()
    {
    }
    
    
    
    
    public function TtotalDb($tabela)
    {
        $total = $this->db->query("SELECT * FROM {$tabel}");
        
        $de = $this->db->num_rows - $inicio ;
        echo "Temos um total de {$total->num_rows} registro exibindo {$res->num_rows} de  {$de}";
    }
    
    
    
    
    
    
}
