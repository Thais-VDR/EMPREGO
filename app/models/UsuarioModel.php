<?php
namespace App\models;

class UsuarioModel {
//atributos do banco de dados
private $id;
private $nome;
private $sobrenome;
private $email;
private $senha;
private $imagem;
private $nivel;
private $ativo;
private $deleted_at;
private $update_at;
private $created_at;

//getters an setters
public function __get($atributo){
    return $this-> $atributo;
}
public function __set($atributo, $valor){
  $this-> $atributo = $valor;
}
}



?>