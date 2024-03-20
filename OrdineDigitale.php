<?php
class OrdineDigitale extends Ordine{
    private $indirizzo_ip;
    private $codice_autorizzazione;
    function __construct($indirizzo_ip,$codice_autorizzazione){
        $this->indirizzo_ip = $indirizzo_ip;
        $this->codice_autorizzazione = $codice_autorizzazione;
    }
}
?>