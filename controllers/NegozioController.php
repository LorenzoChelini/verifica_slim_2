<?php
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

    class NegozioController {
        function articoli(Request $request, Response $response, $args)  { 
            $negozio = new Negozio("Mediaworld","0557371111","Viuzzo delle Case Nuove 44904","https://www.mediaworld.it","partita_iva");
            $arr = [];
            foreach($negozio->get_articoli() as $articolo){
                
                $arr[] = [
                    "id" => $articolo->get_id(),
                    "nome" => $articolo->get_nome(),
                    "descrizione" => $articolo->get_descrizione(),
                    "prezzo_di_listino" => $articolo->get_prezzo_di_listino()
                ];
            }

            $response->getBody()->write(json_encode($arr));
            
            return $response;
        }

        function articoliConID(Request $request, Response $response, $args)  {
            $negozio = new Negozio("Mediaworld","0557371111","Viuzzo delle Case Nuove 44904","https://www.mediaworld.it","partita_iva");
            $id = $args["id"];
            $arr = [];

            foreach($negozio->get_articoli_id($id) as $articolo){
                $arr[] = [
                    "id" => $articolo->get_id(),
                    "nome" => $articolo->get_nome(),
                    "descrizione" => $articolo->get_descrizione(),
                    "prezzo_di_listino" => $articolo->get_prezzo_di_listino()
                ];
            }

            $response->getBody()->write(json_encode($arr));
            return $response;
        }
        function ordini(Request $request, Response $response, $args){
            $negozio = new Negozio("Mediaworld","0557371111","Viuzzo delle Case Nuove 44904","https://www.mediaworld.it","partita_iva");
            $arr = [];
            foreach($negozio->get_ordini() as $ordine){
                
                $arr[] = [
                    "numero_ordine" => $ordine->get_numero_ordine(),
                    "data" => $ordine->get_data(),
                    "importo_totale" => $ordine->get_importo_totale()
                ];
            }

            $response->getBody()->write(json_encode($arr));
            
            return $response;
        }
        function ordini(Request $request, Response $response, $args){
            $negozio = new Negozio("Mediaworld","0557371111","Viuzzo delle Case Nuove 44904","https://www.mediaworld.it","partita_iva");
            $n = $args["numero_ordine"]
            $arr = [];
            foreach($negozio->get_ordini() as $ordine){
                
                $arr[] = [
                    "numero_ordine" => $ordine->get_numero_ordine(),
                    "data" => $ordine->get_data(),
                    "importo_totale" => $ordine->get_importo_totale()
                ];
            }

            $response->getBody()->write(json_encode($arr));
            
            return $response;
        }
    }

?>