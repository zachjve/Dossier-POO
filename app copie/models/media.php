<?php

namespace Model;

class Media
{
    protected $datas = [];
    
    public function getDatas() {
        return $this->datas;
    }

    public function getDataById($index) {
        return $this->datas[$index];
    }
}

?>