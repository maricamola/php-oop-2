<?php

require_once __DIR__ . '/Prodotto.php';

class Cani extends Prodotto
{
  public $lettiere;
  public $tiragraffi;


  function __construct($_immagine, $_nome, $_marca, $_prezzo, $_lettiere)
  {
    parent::__construct($_immagine, $_nome, $_marca, $_prezzo);
    $this->lettiere = $_lettiere;
  }

  function setTiragraffi($_tiragraffi)
  {
    $this->tiragraffi = $_tiragraffi;
  }
}
