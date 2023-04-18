<?php

  class Produto{
    
  private $nome;
  private $codigo;
  private $validade;
  private $preco;

  public function __construct($nome,$codigo,$validade,$preco){

    $this->nome = $nome;
    $this->codigo = $codigo;
    $this->validade = $validade;
    $this->preco = $preco;
    
    }
    public function getNome(){
      return $this-> nome;
    }
     public function setNome($nome){
       $this->nome = $nome;
    }
  
    public function getCodigo(){
      return $this-> codigo;
    }
    public function setCodigo($codigo){
      $this->codigo = $codigo;
    }
    public function getValidade(){
      return $this->validade;
    }
    public function setValidade($validade){
      $this->validade = $validade;
    }
    public function getPreco(){
     return $this->preco;
    }
    
    public function setPreco($preco){
      $this->preco = $preco;
    }

  
    // public function __tostring(){
    //   return "Produto $this-> nome";
    // }

  }
  
?>