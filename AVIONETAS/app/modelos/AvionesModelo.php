<?php
/**
 * AvionesModelo.php - Gestiona operaciones CRUD para la tabla Aviones
 */
class AvionesModelo {
    private $obj_mySQLdb;

    public function __construct() {
        $this->obj_mySQLdb = new MySQLdb();
    }

    public function getAviones() {
        return $this->obj_mySQLdb->querySelect("SELECT * FROM Aviones");
    }

    public function getAvion($id) {
        $sql = "SELECT * FROM Aviones WHERE id = " . (int)$id;
        return $this->obj_mySQLdb->querySelect($sql, true);
    }

    public function crearAvion($datos) {
        $sql = "INSERT INTO Aviones (titulo, autor, editorial) 
                VALUES (
                    '" . $this->sanitizar($datos['titulo']) . "', 
                    '" . $this->sanitizar($datos['autor']) . "', 
                    '" . $this->sanitizar($datos['editorial']) . "'
                )";
        return $this->obj_mySQLdb->queryInsert($sql);
    }

    public function actualizarAvion($datos) {
        $sql = sprintf("UPDATE Aviones SET 
                titulo = '%s', 
                autor = '%s', 
                editorial = '%s' 
                WHERE id = %d",
            $this->sanitizar($datos['titulo']),
            $this->sanitizar($datos['autor']),
            $this->sanitizar($datos['editorial']),
            (int)$datos['id']
        );
        return $this->obj_mySQLdb->queryUpdate($sql);
    }

    public function eliminarAvion($id) {
        $sql = "DELETE FROM Aviones WHERE id = " . (int)$id;
        return $this->obj_mySQLdb->queryDelete($sql);
    }

    private function sanitizar($valor) {
        return $this->obj_mySQLdb->escape($valor);
    }
}
?>