<?php

class Categoria{
    private $id;
    private $nombre;
    private $db;

    // Conexión a la bbdd
    public function __construct(){
        $this->db = Database::connect();
    }

    /**
     * Get the value of id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     */
    public function setId($id) : self
    {
        $this->id = $id;
        return $this;
    }

    /**
     * Get the value of nombre
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set the value of nombre
     */
    public function setNombre($nombre) : self
    {
        $this->nombre = $this->db->real_escape_string($nombre);
        return $this;
    }

    /**
     * Obtener todas las categorías
     */
    public function getAll(){
        $categorias = $this->db->query("SELECT * FROM categorias ORDER BY id DESC;");
        return $categorias;
    }

    /**
     * Obtener una categoría por su ID
     */
    public function getOne(){
        $categoria = $this->db->query("SELECT * FROM categorias WHERE id={$this->getId()}");
        return $categoria->fetch_object();
    }

    /**
     * Guardar una nueva categoría
     */
    public function save(){
        $sql = "INSERT INTO categorias VALUES (NULL, '{$this->getNombre()}');";
        $save = $this->db->query($sql);

        $result = false;
        if($save){
            $result = true;
        }
        return $result;
    }

    /**
     * Editar una categoría existente
     */
    public function edit(){
        $sql = "UPDATE categorias SET nombre='{$this->getNombre()}' WHERE id={$this->getId()};";
        $update = $this->db->query($sql);

        $result = false;
        if($update){
            $result = true;
        }
        return $result;
    }

    /**
     * Eliminar una categoría por su ID
     */
    public function delete(){
        $sql = "DELETE FROM categorias WHERE id={$this->getId()};";
        $delete = $this->db->query($sql);

        $result = false;
        if($delete){
            $result = true;
        }
        return $result;
    }
}

?>
