<?php 

class Json{
    protected $file = "";

    public function __construct($file)
    {
        if(!is_file($file)){
            return "Error $file is not file!";
        }
        $this->file = $file;
    }

    public function get_json(){
        $jsondata = file_get_contents($this->file);
        $json = json_decode($jsondata);
        if(!is_array($json)){
            settype($json,"array");
        }
        return $json;
    }

    public function add_to_json($datas){
        if(!is_array($datas)){
            return "Error $datas is not array!";
        }
        $json = $this->get_json();
        $obj = new stdClass();
        foreach($datas as $data => $val){
            $obj->$data = $val;
        }
        array_push($json,$obj);
        $str_json = json_encode($json);
        file_put_contents($this->file,$str_json);
        return $json;
    }

    public function add_to_json_array($datas){
        if(!is_array($datas)){
            return "Error $datas is not array!";
        }
        foreach($datas as $key => $val){
            $this->add_to_json($val);
        }

        return $this->get_json();
    }

    public function claer_json(){
        file_put_contents($this->file,"");
        return 1;
    }
}





?>