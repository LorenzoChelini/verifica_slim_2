<?php
class Articolo{
    private $id;
    private $nome;
    private $descrizione;
    private $prezzo_di_listino;

    public function __construct ($id,$nome,$descrizione,$prezzo_di_listino) {
        $this->id = $id;
        $this->nome = $nome;
        $this->descrizione = $descrizione;
        $this->prezzo_di_listino = $prezzo_di_listino;
    }


    function get_id(){
        return $this->id;
    }
    function get_nome(){
        return $this->nome;
    }
    function get_descrizione(){
        return $this->descrizione;
    }
    function get_prezzo_di_listino(){
        return $this->prezzo_di_listino;
    }
}

?>