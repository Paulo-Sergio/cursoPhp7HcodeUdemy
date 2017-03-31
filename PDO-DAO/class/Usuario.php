<?php

class Usuario {

    private $idusuario;
    private $deslogin;
    private $dessenha;
    private $dtcadastro;
    
    public function __construct($login = "", $senha = "") {
        $this->setDeslogin($login);
        $this->setDessenha($senha);
    }

    public function getIdusuario() {
        return $this->idusuario;
    }

    public function getDeslogin() {
        return $this->deslogin;
    }

    public function getDessenha() {
        return $this->dessenha;
    }

    public function getDtcadastro() {
        return $this->dtcadastro;
    }

    public function setIdusuario($idusuario) {
        $this->idusuario = $idusuario;
    }

    public function setDeslogin($deslogin) {
        $this->deslogin = $deslogin;
    }

    public function setDessenha($dessenha) {
        $this->dessenha = $dessenha;
    }

    public function setDtcadastro($dtcadastro) {
        $this->dtcadastro = $dtcadastro;
    }

    public function __toString() {
        $dtCadastroFormatado = null;
        if (!empty($this->getDtcadastro())) {
            $dtCadastroFormatado = $this->getDtcadastro()->format("d/m/Y H:i:s");
        }

        return json_encode(array(
            "idusuario" => $this->getIdusuario(),
            "deslogin" => $this->getDeslogin(),
            "dessenha" => $this->getDessenha(),
            "dtcadastro" => $dtCadastroFormatado
        ));
    }

    public function loadById($id) {
        $sql = new Sql();
        $results = $sql->select("SELECT * FROM  tb_usuarios WHERE idusuario = :ID", array(":ID" => $id));

        if (count($results) > 0) {
            $row = $results[0];
            $this->setData($row);
        }
    }

    public static function getList() {
        $sql = new Sql();
        $results = $sql->select("SELECT * FROM tb_usuarios ORDER BY deslogin;");

        return $results;
    }

    public static function search($login) {
        $sql = new Sql();
        $results = $sql->select("SELECT * FROM tb_usuarios WHERE deslogin LIKE :LOGIN ORDER BY deslogin;", array(
            ':LOGIN' => '%' . $login . '%'
        ));
        return $results;
    }

    public function login($login, $senha) {
        $sql = new Sql();
        $results = $sql->select("SELECT * FROM tb_usuarios WHERE deslogin = :LOGIN and dessenha = :SENHA;", array(
            ':LOGIN' => $login,
            ':SENHA' => $senha
        ));

        if (count($results) > 0) {
            $this->setData($results[0]);
        } else {
            throw new Exception("Login e/ou senha inválidos");
        }
    }

    public function insere() {
        $sql = new Sql();
        $results = $sql->select("CALL sp_usuario_insert(:LOGIN, :SENHA)", array(
            ':LOGIN' => $this->getDeslogin(),
            ':SENHA' => $this->getDessenha()
        ));
        if(count($results) > 0){
            $this->setData($results[0]);
        }
    }

    private function setData($data) {
        $this->setIdusuario($data['idusuario']);
        $this->setDeslogin($data['deslogin']);
        $this->setDessenha($data['dessenha']);
        $this->setDtcadastro(new DateTime($data['dtcadastro']));
    }

}
