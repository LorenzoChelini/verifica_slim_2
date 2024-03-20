<?php
class abstract Ordine{
    protected $numero_ordine;
    protected $data;
    protected $importo_totale;
    protected $articoli_venduti = [];
    public function __construct($numero_ordine,$data,$importo_totale){
        $this->numero_ordine = $numero_ordine;
        $this->data = $data;
        $this->importo_totale = $importo_totale;
        $this->articoli_venduti[0] = new ArticoloVenduto("12345",2999,3);
        $this->articoli_venduti[1] = new ArticoloVenduto("54321",1200,2);
    }
    function get_numero_ordine(){
        return $this->numero_ordine;
    }
    function get_data(){
        return $this->data;
    }
    function get_importo_totale(){
        return $this->importo_totale;
    }
    function get_articoli_venduti(){
        return $this->articoli_venduti;
    }
}
?>