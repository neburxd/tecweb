<?php
namespace ejemplos\POO;
class Cabecera {
    private $titulo;
    private $ubicacion;
    private $enlace;

    public function __construct($tittle, $location, $link){
        $this->titulo = $tittle;
        $this->ubicacion = $location;
        $this->enlace = $link;
    }

    public function graficar(){
        $estilo = 'font-size: 40px; text-aling: '.$this->ubicacion;
        echo '< style="'.$estilo.'">';
        echo '<h4>';
        echo '';
    }
}
?>