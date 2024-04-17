<?php 
class Fatura {
private $numero;
private $descricao;
private $qntItem;
private $precoItem;

public function getNumero () {
    return $this->numero;
}

public function setNumero ($numero) {
    $this->numero = $numero;
}
public function getDescricao () {
    return $this->descricao;
}

public function setDescricao ($descricao) {
    $this->descricao = $descricao;
}
public function getQntItem () {
    return $this->qntItem;
}

public function setQntItem ($qntItem) {
    $this->qntItem = $qntItem;
}
public function getPrecoItem () {
    return $this->precoItem;
}

public function setPrecoItem ($precoItem) {
    if ($precoItem < 0) {
        $this->precoItem = 0.0;
    } else {
        return $precoItem;
    }
}

public function getTotalFatura (){
     $totalFatura = $this->qntItem * $this->precoItem;
     if ($totalFatura < 0) {
        $totalFatura = 0;
      } else {
        return $totalFatura;
      }
}

}



?>