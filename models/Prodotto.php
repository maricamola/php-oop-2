<?php
//Definisco la classe Prodotto;
class Prodotto
{
  private $immagine;
  private $nome;
  private $prezzo;
  private $marca;
  protected $discount = 40;

  function __construct($_immagine, $_nome, $_marca, $_prezzo)
  {
    $this->setImmagine($_immagine);
    $this->setNome($_nome);
    $this->setPrezzo($_prezzo);
    $this->setMarca($_marca);
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
  public function setMarca($_marca)
  {
    //Controllo che non sia più lungo di 255 caratteri
    $this->marca = $_marca;
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
  public function getMarca()
  {
    echo $this->marca;
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
