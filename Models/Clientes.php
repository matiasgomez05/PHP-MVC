<?php namespace Models;

class Clientes {

    //Variables
    private $conexion;

    private $id;
    private $nombre;
    private $apellido;
    private $dni;
    private $fk_ejecutivo;

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
        $sql = "SELECT clientes.*, usuarios.nombre, usuarios.apellido 
                FROM clientes
                INNER JOIN usuarios ON (clientes.fk_ejecutivo = usuarios.id) 
                ORDER BY clientes.id DESC";

        $datos = $this->conexion->consultaRetorno($sql);
        return $datos;
    }

    public function agregar(){
        $password = $this->pass;
        $password_hash = password_hash($password, PASSWORD_DEFAULT);

        $sql = "INSERT INTO clientes(id, nombre, apellido, dni, fk_ejecutivo, fecha_creacion)
                VALUES ('', '{$this->nombre}', '{$this->apellido}', '{$this->dni}', '{$this->fkEjecutivo}', NOW())";

        $this->conexion->consultaSimple($sql);
    }

    public function borrar(){
        $sql = "DELETE FROM clientes 
                WHERE id = '{$this->id}'";

        $this->conexion->consultaSimple($sql);
    }

    public function editar(){
        $sql = "UPDATE clientes 
                SET nombre = '{$this->nombre}', apellido = '{$this->apellido}', dni = '{$this->dni}', fk_ejecutivo = '{$this->fkEjecutivo}, 'ultima_modificacion = NOW() 
                WHERE id = '{$this->id}'";

        $this->conexion->consultaSimple($sql);
    }

    public function ver(){
        $sql = "SELECT clientes.*, usuarios.nombre, usuarios.apellido 
                FROM clientes
                INNER JOIN usuarios ON (clientes.fk_ejecutivo = usuarios.id) 
                WHERE id = '{$this->id}'";

        $datos = $this->conexion->consultaRetorno($sql);
        $row = mysqli_fetch_assoc($datos);
        return $row;
    }

}

?>