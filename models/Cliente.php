<?php

include_once 'Conn.php';

class Cliente
{
    private $id;
    private $nome;
    private $email;
    private $conn;

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
        return $this;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }

    public function salvar()
    {
        try {
            $this->conn = new Conn();
            $sql = "INSERT INTO cliente (nome, email) VALUES (?, ?)";
            $executar = $this->conn->prepare($sql);
            $executar->bindValue(1, mb_strtoupper($this->nome));
            $executar->bindValue(2, mb_strtolower($this->email));
            return $executar->execute();
        } catch (PDOException $erro) {
            echo $erro->getMessage();
            return false;
        }
    }

    public function consultar()
    {
        try {
            $this->conn = new Conn();
            $sql = "SELECT * FROM cliente ORDER BY id DESC";
            $executar = $this->conn->prepare($sql);
            $executar->execute();
            return $executar->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $erro) {
            echo $erro->getMessage();
            return [];
        }
    }
}
