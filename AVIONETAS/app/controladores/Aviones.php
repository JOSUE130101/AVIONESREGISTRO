<?php
class Aviones extends Controlador {
    private $objModelo;
    
    public function __construct() {
        $this->objModelo = $this->modelo("AvionesModelo");
    }

    public function index() {
        $data = $this->objModelo->getAviones();
        $this->vista("AvionesVista", $data);
    }

    public function modificar($id = null) {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $datos = [
                'id' => $id,
                'titulo' => htmlspecialchars($_POST['titulo']),
                'autor' => htmlspecialchars($_POST['autor']),
                'editorial' => htmlspecialchars($_POST['editorial'])
            ];
            
            if ($this->objModelo->actualizarAvion($datos)) {
                header('Location: ' . RUTA_APP . '/Aviones');
                exit();
            }
        } else {
            $Avion = $this->objModelo->getAvion($id);
            if ($Avion) {
                $this->vista("Aviones/editar", $Avion);
            } else {
                header('Location: ' . RUTA_APP . '/Aviones');
                exit();
            }
        }
    }

    public function borrar($id = null) {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            if ($this->objModelo->eliminarAvion($id)) {
                header('Location: ' . RUTA_APP . '/Aviones');
                exit();
            }
        }
    }

    public function alta() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $datos = [
                'titulo' => htmlspecialchars($_POST['titulo']),
                'autor' => htmlspecialchars($_POST['autor']),
                'editorial' => htmlspecialchars($_POST['editorial'])
            ];
            
            if ($this->objModelo->crearAvion($datos)) {
                header('Location: ' . RUTA_APP . '/Aviones');
                exit();
            }
        } else {
            $this->vista("Aviones/alta");
        }
    }
}
?>