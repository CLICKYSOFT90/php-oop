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

    const ELECTRONIC_ITEM_TELEVISION = 'television';
    const ELECTRONIC_ITEM_CONSOLE = 'console';
    const ELECTRONIC_ITEM_MICROWAVE = 'microwave';
    const ELECTRONIC_ITEM_CONTROLLER = 'controller';

    public static $types = [
        self::ELECTRONIC_ITEM_CONSOLE,
        self::ELECTRONIC_ITEM_MICROWAVE,
        self::ELECTRONIC_ITEM_TELEVISION,
        self::ELECTRONIC_ITEM_CONTROLLER,
    ];
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

    /**
     * @return mixed
     */
    public function getExtras(){
        return $this->extras;
    }

    /**
     * @return mixed
     */
    public function getMaxNumOfExtras(){
        return $this->maxNumOfExtras;
    }

    /**
     * @return void
     */
    public function setMaxNumOfExtras($maxNumberOfExtras){
        $this->maxNumOfExtras = $maxNumberOfExtras;
    }

    /**
     * @return void
     */
    public function getPrice(){
        return $this->price;
    }

    /**
     * @param $type
     * @return void
     */
    public function setType($type){
        $this->type = $type;
    }

    /**
     * @return mixed
     */
    public function getType(){
        return $this->type;
    }
}