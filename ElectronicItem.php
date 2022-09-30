<?php

class ElectronicItem
{
    /**
     * @var $maxNumOfExtras
     */
    public $maxNumOfExtras;
    public $price;
    public $extras;
    public $type;

    /**
     * @return bool
     * Check if the electronic item reached the limit of extras.
     */
    public function maxExtras(){
        if( ($this->extras + 1) > $this->maxNumOfExtras){
            return false;
        }
        return true;
    }

    /**
     * @param $extras
     * @return void
     */
    public function setExtras($extras){
        if($this->maxExtras() && $extras > $this->maxNumOfExtras){
            return;
        }
        $this->extras = $extras;
    }

}