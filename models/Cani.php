<?php

require_once __DIR__ . '/Prodotto.php';

class Cani extends Prodotto
{
  public $cucce;
  public $alimenti;


  function __construct($_immagine, $_nome, $_cucce, $_prezzo, $_lettiere)
  {
    parent::__construct($_immagine, $_nome, $_cucce, $_prezzo);
    $this->cucce = $_cucce;
  }

  function setAlimenti($_alimenti)
  {
    $this->alimenti = $_alimenti;
  }
}
