<?php
class Categoria{
    private $id;
    private $nombre;

    //Conexion base de datos
    private $db;

    public function __construct()
    {
        $this->db = Database::connect();
    }

    public function getId(){
        return $this->id;
    }
    public function getNombre(){
        return $this->nombre;
    } 
    
    public function setId($id){
        $this->id = $this->db->real_escape_string($id);
    }
    public function setNombre($nombre){
        $this->nombre = $this->db->real_escape_string($nombre);
    }

    public function getAll(){
        $categorias = $this->db->query("SELECT * FROM categorias");
        return $categorias;
    }
}
?>