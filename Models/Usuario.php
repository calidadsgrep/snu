<?php
class Usuario
{
    public $id; 
    public $nombres;
    public $apellidos;
    public $correos;
    public $identificacion;
    public $cliente_id;
    public $rol_id;
    public $squema_id;
    public $username;
    public $password;
    public $estado;
    public $created;
    public $modified;

    public function __CONSTRUCT()
    {
        try {
            $this->pdo = Database::StartUp();
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function Index()
    {
        try {
            $stm = $this->pdo->prepare("SELECT usuarios.*, rols.rol, clientes.nombre AS cliente
            FROM  usuarios
             LEFT JOIN clientes ON clientes.id = usuarios.cliente_id
             JOIN rols ON usuarios.rol_id=rols.id");
            $stm->execute();
            return $stm->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function getUsuario()
    {

        try {
            $id = $_REQUEST['id'];
            $stm = $this->pdo->prepare("SELECT * FROM  usuarios WHERE id='$id'");
            $stm->execute();
            return $stm->fetch(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function ClaveUpdate(Usuario $data)
    {

        try {
            $sql = "UPDATE usuarios SET username='$data->username' , password='$data->password' WHERE id = '$data->id";
            $this->pdo->prepare($sql)->execute();
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function Registrar(Usuario $data)
    {
        try {
            $sql = "INSERT INTO usuarios (nombres, apellidos, identificacion, cliente_id, rol_id, squema_id,username, password,estado,  created, modified) 
                    VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

            $this->pdo->prepare($sql)
                ->execute(
                    array(
                        $data->nombres,
                        $data->apellidos,
                        $data->identificacion,
                        $data->cliente_id,
                        $data->rol_id,
                        $data->squema_id=0,
                        $data->username = $data->identificacion,
                        $data->password=md5($data->identificacion),
                        $data->estado,
                        $data->created = date('Y-m-d'),
                        $data->modified=date('Y-m-d')
                    )
                );
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function Actualizar(Usuario $data)
    {
        try {
            $sql = "UPDATE usuarios SET nombres='$data->nombres' , apellidos='$data->apellidos',  identificacion='$data->identificacion' , cliente_id='$data->cliente_id', rol_id='$data->rol_id', estado='$data->estado' WHERE id = '$data->id'";
            $this->pdo->prepare($sql)->execute();
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
}
