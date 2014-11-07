<?php
/**
 * Conexão com banco de dados
 */

     $host = 'mysql.rapidserver.com.br';
     $user = 'datainf_datainfo';
     $pass = 'Leozinho1';
     $data = 'datainf_db_sec';

$mysqli = new  mysqli($this->host,$this->user,$this->pass,$this->data);
