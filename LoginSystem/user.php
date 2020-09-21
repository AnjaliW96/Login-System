<?php


class user
{
    private $name;
    private $email;
    private $gender;
    private $username;
    private $password;

    public function setName($name){
        $this->name = $name;
    }
    public function getName()
    {
        return $this->name;
    }
    public function setEmail($email): void
    {
        $this->email = $email;
    }
    public function getEmail()
    {
        return $this->email;
    }
    public function setGender($gender): void
    {
        $this->gender = $gender;
    }
    public function getGender()
    {
        return $this->gender;
    }
    public function setUsername($username): void
    {
        $this->username = $username;
    }
    public function getUsername()
    {
        return $this->username;
    }
    public function setPassword($password): void
    {
        $this->password = $password;
    }
    public function getPassword()
    {
        return $this->password;
    }
}
?>