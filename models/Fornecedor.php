<?php

include_once 'Conn.php';

class Fornecedor
{
    private $id;
    private $nome;
    private $cidade;
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

    public function getCidade()
    {
        return $this->cidade;
    }

    public function setCidade($cidade)
    {
        $this->cidade = $cidade;
        return $this;
    }

    public function salvar()
    {
        try {
            $this->conn = new Conn();
            $sql = "INSERT INTO fornecedor (nome, cidade) VALUES (?, ?)";
            $executar = $this->conn->prepare($sql);
            $executar->bindValue(1, mb_strtoupper($this->nome));
            $executar->bindValue(2, mb_strtoupper($this->cidade));
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
            $sql = "SELECT * FROM fornecedor ORDER BY id DESC";
            $executar = $this->conn->prepare($sql);
            $executar->execute();
            return $executar->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $erro) {
            echo $erro->getMessage();
            return [];
        }
    }
}
