<?php namespace Controllers;

	//El controllador hace uso del modelo con su mismo nombre.
	use Models\Usuarios as Usuario;
	
	class UsuariosController{

		private $usuarios;

		public function __construct(){
			$this->usuarios = new Usuario();
		}

		public function index(){
			$datos = $this->usuarios->mostrar();
			return $datos;
		}

		public function agregar(){
			if($_POST){
				$this->usuarios->set("nombre", $_POST['nombre']);
				$this->usuarios->set("apellido", $_POST['apellido']);
				$this->usuarios->set("dni", $_POST['dni']);
				$this->usuarios->set("usuario", $_POST['usuario']);
				$this->usuarios->set("pass", $_POST['pass']);
				$this->usuarios->agregar();

				header('Location: '. URL . "usuarios");
			}
		}

		public function editar($id){
			if($_POST){
				$this->usuarios->set("id", $_POST['id']);
				$this->usuarios->set("nombre", $_POST['nombre']);
				$this->usuarios->set("apellido", $_POST['apellido']);
				$this->usuarios->set("dni", $_POST['dni']);
				$this->usuarios->set("usuario", $_POST['usuario']);
				$this->usuarios->set("pass", $_POST['pass']);
				$this->usuarios->editar();

				header('Location: '. URL . "usuarios");
			}else{
				$this->usuarios->set("id", $id);

				$datos = $this->usuarios->ver();
				return $datos;
			}
		}

		public function eliminar($id){
			$this->usuarios->set("id", $id);
			$this->usuarios->borrar();
			header('Location: '. URL . "usuarios");
		}
	}
?>