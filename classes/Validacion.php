<?php

class Validacion{

  public function validacionGeneral(){

    $errores = [];

    //validación user

    if (isset($_POST['user'])) {

      $user = trim($_POST['user']);
      if (empty($user)) {
        $errores['erroruser'] = "el nombre es obligatorio";
      }

    }



    // validación password

    if (isset($_POST['pass'])) {

      $pass = trim($_POST['pass']);
      $passconf = trim($_POST['passconf']);

      if (empty($pass)) {
        $errores['errorpass'] = "por favor, ingrese contraseña";
      }elseif ($pass != $passconf) {
        $errores['errorpassdistintas'] = "Las contraseñas son distintas";
      }elseif (strlen($pass) < 5) {
        $errores['errorpasscorta'] = "La contraseña debe contener por lo menos 5 caracteres";
      }

    }


    // validación mail

    if (isset($_POST['mail'])) {

      $mail = trim($_POST['mail']);
      if (empty($mail)) {
        $errores['errormail'] = "Por favor, agregar un mail";
      }elseif (!filter_var($mail, FILTER_VALIDATE_EMAIL)) {
        $errores['errormailingresado'] = "El mail ingresado no es válido";
      }

    }




    // validación teléfono - el teléfono no es obligatorio

    if (isset($_POST['phone'])) {

      $telefono = trim($_POST['phone']);

      if (empty($telefono)) {
        $telefono = 0; // se puede poner null?

      }

    }

    //validación avatar

    if (isset($_POST['avatar'])) {
      $nImagen = uniqid();
      $path = "../images/";


      function guardarAvatar($avatar, $nImagen,$path)
      {
        if ($_FILES[$avatar]['error'] == UPLOAD_ERR_OK) {
          $ext = pathinfo($_FILES[$avatar]['name'], PATHINFO_EXTENSION);
          move_uploaded_file($_FILES[$avatar]['tmp_name'], $path . $nImagen . "." . $ext);

          return $nImagen . '.' . $ext;

        }
      }

      $nombreCompleto = guardarAvatar('avatar', $nImagen, $path);
    }

    return $errores;

  }


  public function validacionRegistroMysql(Usuario $usuario){

    $sql =

  }

}
