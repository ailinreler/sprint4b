<?php

class Usuario{

  private $nombre;
  private $pass;
  private $mail;
  private $telefono;
  private $avatar;


    public function getNombre()
    {
        return $this->nombre;
    }


    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }


    public function getPass()
    {
        return $this->pass;
    }


    public function setPass($pass)
    {
        $this->contrasenia = password_hash($pass, PASSWORD_DEFAULT);

        return $this;
    }


    public function getMail()
    {
        return $this->mail;
    }


    public function setMail($mail)
    {
        $this->mail = $mail;

        return $this;
    }


    public function getTelefono()
    {
        return $this->telefono;
    }


    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;

        return $this;
    }


    public function getAvatar()
    {
        return $this->avatar;
    }


    public function setAvatar($avatar)
    {
        $this->avatar = $avatar;

        return $this;
    }

}
