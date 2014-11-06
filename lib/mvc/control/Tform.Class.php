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

        echo '<input type="'.$this->Ttipe.'" id="" name="" value="" placeholder="" title="" >';
    }

    /**
     * @param mixed $Ttipe
     */
    public function setTtipe($Ttipe)
    {
        $this->Ttipe = $Ttipe;
    }


} 