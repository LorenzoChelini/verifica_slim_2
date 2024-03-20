<?php
class Negozio{
    private $nome;
    private $telefono;
    private $indirizzo;
    private $url;
    private $p_iva;
    private $articoli = [];
    private $ordini = [];


    public function __construct($nome,$telefono,$indirizzo,$url,$p_iva){
        $this->nome = $nome;
        $this->telefono = $telefono;
        $this->indirizzo = $indirizzo;
        $this->url = $url;
        $this->p_iva = $p_iva;
        $this->articoli[0] = new Articolo("12345","iPhone20","Nuovo iPhone 20 (0.0) !!!",2999);
        $this->articoli[1] = new Articolo("54321","Samsung Galaxy s23","Meglio dell'iPhone !!",1200);
        $this->ordini[0] = new Ordine("3333","13-03-2024",11397);
    }

    function get_nome(){
        return $this->nome;
   }
   function get_telefono(){
    return $this->telefono;
    }
    function get_indirizzo(){
        return $this->indirizzo;
   }
   function get_url(){
    return $this->url;
}
function get_p_iva(){
    return $this->p_iva;
}
function get_articoli(){
    return $this->articoli;
}
function get_articoli_id($id){
    $articoli = [];
    foreach($this->get_articoli() as $a){
        if($a->get_id() == $id){
            array_push($articoli, $a);
        }
    }
    return $articoli;
}
function get_ordini(){
    return $this->ordini;
}

function get_articoli_numeroOrdine($n){
    $ordini = [];
    foreach($this->get_ordini() as $a){
        if($a->get_numero_ordine() == $n){
            array_push($ordini, $a);
        }
    }
    return $ordini;
}


}

?>