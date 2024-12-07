<?php 

class conexionBaseDeDatos{

    protected $conexion;
    protected $servidor;
    protected $usuario;
    protected $password;
    protected $puerto;
    protected $db;

    public function __construct($servidor, $usuario, $password,$db ,$puerto)
    {
        $this->servidor = $servidor;
        $this->usuario = $usuario;
        $this->password = $password;
        $this->db = $db;
        $this->puerto = (int)$puerto;

    }



}


?>