<?php
/**
 * Conexão com Banco de dados
 */


class db {
    public $_db;
    public $Key;

    public function creat($tabela,$campos){

        $keys = array_keys($campos);
        $chaves = "`".implode("`,`", $keys)."`";
        $valores = "'" . implode("','", $campos) . "'";
        $mysqli->query("INSERT INTO {$tabela} ({$chaves})VALUES ({$valores})";

        $alert = new Alert;
        $alert->Talert();

    }

    public function read($db, $where, $limit){

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
