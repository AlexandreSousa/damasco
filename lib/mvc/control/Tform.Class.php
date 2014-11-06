<?php
/**
 * Created by PhpStorm.
 * User: alexandre
 * Date: 06/11/14
 * Time: 01:53
 */

class Tform {
    public $Ttipe;


    public function Tinput(){
        echo '<label>';
        echo '<input class="form-control" type="search" results="10" autofocus="" id="" name="" value="" placeholder="" title="" size="20">';
        echo '</label>';
    }

    /**
     * @param mixed $Ttipe
     */
    public function setTtipe($Ttipe)
    {
        $this->Ttipe = $Ttipe;
    }


} 