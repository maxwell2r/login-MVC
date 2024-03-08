<?php
use database\Connection;

class User
{
    private $id;
    private $name;
    private $email;
    private $password;

    public function validadeLogin()
    {
        $conn = Connection::getConn();
        $sql ="SELECT * from user where email = :email";
        $stmt = $conn->prepare($sql);
        $stmt->bindValue(":email", $this->email);
        $stmt->execute();

        if ($stmt->rowCount()) {
            $result = $stmt->fetch();

            if ($result['password'] === $this->password) {
                $_SESSION['usr'] = $result['id'];
                return true;
            }
        }
        throw new \Exception('login inválido!');
    }

    public function setId($id)
    {
        $this->id = $id;
    }
    public function getId()
    {
        return $this->id;
    }

    public function setName($name)
    {
        $this->name = $name;
    }
    public function getName()
    {
        return $this->name;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }
    public function getEmail()
    {
        return $this->email;
    }

    public function setPassword($password)
    {
        $this->password = $password;
    }
    public function getPassword()
    {
        return $this->password;
    }
}