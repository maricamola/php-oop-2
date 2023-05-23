<?php
//Definisco la classe Prodotto;
class Prodotto
{
  private $immagine;
  private $nome;
  private $prezzo;
  private $categoria;
  protected $discount = 40;

  function __construct($_immagine, $_nome, $_categoria, $_prezzo)
  {
    $this->setImmagine($_immagine);
    $this->setNome($_nome);
    $this->setPrezzo($_prezzo);
    $this->setCategoria($_categoria);
  }

  //SET per impostare valore alle proprietà
  public function setNome($_nome)
  {
    $this->nome = $_nome;
  }
  public function setPrezzo($_prezzo)
  {
    //Controllo che sia un numero
    $this->prezzo = $_prezzo;
  }
  public function setCategoria($_categoria)
  {
    $this->categoria = $_categoria;
  }
  public function setImmagine($_immagine)
  {
    $this->immagine = $_immagine;
  }
  public function setDiscount($_discount)
  {
    $this->discount = $_discount;
  }



  //GET
  public function getPrezzo()
  {
    echo $this->prezzo;
  }
  public function getCategoria()
  {
    echo $this->categoria;
  }
  public function getNome()
  {
    echo $this->nome;
  }
  public function getImmagine()
  {
    echo $this->immagine;
  }
  public function getDiscount()
  {
    echo $this->discount;
  }
}
