<?php namespace Controllers;

	//El controllador hace uso del modelo con su mismo nombre.
	use Models\Clientes as Cliente;
	use Models\Usuarios as Usuario;
	
	class ClientesController{

		private $clientes;
		private $usuarios;

		public function __construct(){
			$this->usuarios = new Cliente();
			$this->clientes = new Usuario();
		}

		public function index(){
			$datos = $this->clientes->mostrar();
			return $datos;
		}

		public function agregar(){
			if($_POST){
				$this->clientes->set("nombre", $_POST['nombre']);
				$this->clientes->set("apellido", $_POST['apellido']);
				$this->clientes->set("dni", $_POST['dni']);
				$this->clientes->set("fkEjecutivo", $_POST['fkEjecutivo']);
				$this->clientes->agregar();

				header('Location: '. URL . "clientes");
			}
		}

		public function editar($id){
			if($_POST){
				$this->clientes->set("id", $_POST['id']);
				$this->clientes->set("nombre", $_POST['nombre']);
				$this->clientes->set("apellido", $_POST['apellido']);
				$this->clientes->set("dni", $_POST['dni']);
				$this->clientes->set("fkEjecutivo", $_POST['fkEjecutivo']);
				$this->clientes->editar();

				header('Location: '. URL . "clientes");
			}else{
				$this->clientes->set("id", $id);

				$datos = $this->clientes->ver();
				return $datos;
			}
		}

		public function eliminar($id){
			$this->clientes->set("id", $id);
			$this->clientes->borrar();
			header('Location: '. URL . "clientes");
		}
	}
?>