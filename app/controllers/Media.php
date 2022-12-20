<?php 

namespace App;

use Interfaces\PageInterface;
use Model\Realisateur;

class Media implements PageInterface {

    protected $datas;
    protected $defaultModel = "Model\\Film";

    public function list() {
        $model = new $this->defaultModel();
        $datas = $model->getDatas();
    
        return $datas;
    }
    
    public function detail($id) {
        $model = new $this->defaultModel();
        $data = $model->getDataById($id);

        return $data;
    }

    public function getReal($id) {
        $model = new $this->defaultModel();
        $realisateur = new Realisateur;
        $datareal = $realisateur->getDatas();
        $real = $datareal[$id];
        
        return $real;
    }
}

?>