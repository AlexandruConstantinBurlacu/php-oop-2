<?php

class Prodotto {
    public $nome;
    public $prezzo;
    public $categoria;
    public $id;

    function __construct($nome, $prezzo, Categoria $categoria, $id)
    {
        $this->nome = $nome;
        $this->prezzo = $prezzo;
        $this->categoria = $categoria;
        $this->id = $id;
    }
}

?>