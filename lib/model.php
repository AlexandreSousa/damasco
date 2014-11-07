<?php
/**
 * Conexão com Banco de dados
 * 
 * Classe para conexão com o banco de dados
 * 
 * @package     Damascao
 * @subpackage  Damasco.Core.Model
 */
class db {
    public $_db;
    public $Key;
    
    public $host = 'mysql.rapidserver.com.br';
    public $user = 'datainf_datainfo';
    public $pass = 'Leozinho1';
    public $data = 'datainf_db_sec';

    /**
     * 
     * @param   string  $tabela     Nome da tabela
     * @param   string  $campos     Campos da tabela
     * @return  void
     */
    public function creat($tabela,$campos)
    {
        
       $mysqli = new  mysqli();

        $keys   = array_keys($campos);
        $chaves = "`".implode("`,`", $keys)."`";
        $valores= "'" . implode("','", $campos) . "'";
        $sql    = "INSERT INTO {$tabela} ({$chaves})VALUES ({$valores});
        $mysqli->query($sql)";

        $alert  = new Alert;
        $alert->Talert();

    }
    /**
     * 
     * @param   string  $db       Nome da Tabela
     * @param   string  $where    Where da tabela
     * @param   string  $limit    Limites maximo e minimu para consulta
     * @return  void
     */

    public function read($db, $where, $limit){
       $mysqli = new  mysqli($this->host,$this->user,$this->pass,$this->data);

       return $mysqli->query("SELECT * FROM {$db}  {$where} {$limit}");

    }

    public function update($_db,$campos,$where){

        $keys = array_keys($campos);
        $array   = array_values($campos);
        $array2  = array_values($keys);
        $total = count($campos)-1;
        for($i = 0; $i <= $total; $i++ ){
            $variavel.= "`$array2[$i]`='$array[$i]'".',';
        }
        $size = strlen($variavel);
        $sis = substr($variavel,0, $size-1);
        $mysqli->query("UPDATE  `$_db` SET  $sis  WHERE `{$this->Key}` = '$where'");

    }

    public function delet($_db,$id,$modulo,$arquivo){
        $mysqli->query("DELETE FROM `$_db` WHERE `{$this->Key}` = '$id'");


        if(isset($modulo)){
            echo '<meta http-equiv="refresh" content="0;URL=?pg=modulos/'.$modulo.'/list_'.$arquivo.'" />';
        }
    }

    /**
     * @param mixed $Key
     */
    public function setKey($Key)
    {
        $this->Key = $Key;
    }
}
