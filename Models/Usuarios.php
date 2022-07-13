<?php namespace Models;

class Usuarios {

    //Variables
    private $conexion;
    
    private $id;
    private $nombre;
    private $apellido;
    private $dni;
    private $user;
    private $pass;

    //Conexion
    public function __construct(){
        $this->conexion = new Conexion();
    }

    //Getters y Setters
    public function set($atributo, $contenido){
        $this->$atributo = $contenido;
    }

    public function get($atributo){
        return $this->$atributo;
    }

    //CRUD Usuarios
    public function mostrar(){
        $sql = "SELECT * 
                FROM usuarios 
                ORDER BY id ASC";

        $datos = $this->conexion->consultaRetorno($sql);
        return $datos;
    }

    public function agregar(){
        $password = $this->pass;
        $password_hash = password_hash($password, PASSWORD_DEFAULT);

        $sql = "INSERT INTO usuarios(id, nombre, apellido, dni, usuario, pass, fecha_creacion, ultima_modificacion)
                VALUES ('', '{$this->nombre}', '{$this->apellido}', '{$this->dni}', '{$this->usuario}', '{$password_hash}', NOW(), NOW())";

        $this->conexion->consultaSimple($sql);
    }

    public function borrar(){
        $sql = "DELETE FROM usuarios 
                WHERE id = '{$this->id}'";

        $this->conexion->consultaSimple($sql);
    }

    public function editar(){
        $password = $this->pass;
        $password_hash = password_hash($password, PASSWORD_DEFAULT);

        $sql = "UPDATE usuarios 
                SET nombre = '{$this->nombre}', apellido = '{$this->apellido}', dni = '{$this->dni}', usuario = '{$this->usuario}', pass = '{$password_hash}', ultima_modificacion = NOW()
                WHERE id = '{$this->id}'";

        $this->conexion->consultaSimple($sql);
    }

    public function ver(){
        $sql = "SELECT *
                FROM usuarios 
                WHERE id = '{$this->id}'";

        $datos = $this->conexion->consultaRetorno($sql);
        $row = mysqli_fetch_assoc($datos);
        return $row;
    }

}

?>