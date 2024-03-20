<?php
class OrdineFisico extends Ordine{
    private $pagamento;
    function __construct($pagamento){
        $this-> pagamento = $pagamento;
    }
}

?>