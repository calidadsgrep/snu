<?php
require_once 'Models/Usuario.php';
require_once 'Models/Cliente.php';
require_once 'Models/Roles.php';
//require_once 'Models/Squema.php';
class UsuariosController
{
    private $usuario;
    public function __CONSTRUCT()
    {
        $this->model = new Usuario();
    }

    function Indexadmin()
    {

        $usuarios = $this->model->Index();
        require_once 'Views/Layout/clientes.php';
        require_once 'Views/Usuarios/index.php';
        require_once 'Views/Layout/foot.php';
    }
    function Clave()
    {
        $usuario = $this->model->getUsuario($_REQUEST['id']);
        require_once 'Views/Usuarios/clave.php';
        require_once 'Views/Layout/foot.php';
    }


    function ClaveUpdate()
    {
        $usuario = new Usuario();
        $usuario->username = $_REQUEST['username'];
        $usuario->password = md5($_REQUEST['password']);
        $usuario->id = $_REQUEST['id'];
        $this->model->ClaveUpdate($usuario);
    }

    function Registrar()
    {
        $usuario = new Usuario();
        if (isset($_REQUEST['id'])) {
            $usuario = $this->model->getUsuario($_REQUEST['id']);
        }   
     $rol= new Roles();
     $roles=$rol->Index();
     $cliente =new Cliente();
     $clientes = $cliente->getCliente();
     //$squemas =new Squema();

     require_once 'Views/Usuarios/crud.php';
     



    }


    function Crud()
    {
        $usuario = new Usuario();     
        $usuario->id = $_REQUEST['id'];   
        $usuario->nombres = $_REQUEST['nombres'];
        $usuario->apellidos = $_REQUEST['apellidos'];
        $usuario->identificacion = $_REQUEST['identificacion'];
        $usuario->cliente_id = $_REQUEST['cliente_id'];
        $usuario->rol_id = $_REQUEST['rol_id'];
        $usuario->estado = $_REQUEST['estado'];

        $usuario->id > 0 ?
            $this->model->Actualizar($usuario) :
            $this->model->Registrar($usuario);
    }
}
