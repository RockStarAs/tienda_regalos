<?php 
    class Home extends Controladores{ 
        public function __construct(){
            parent::__construct();
        }
        public function home($parametros){
           $this->vistas->obten_vista($this,"home");
        }
        /*public function carrito($parametros){
            $carrito = $this->modelo->get_carrito($parametros);
            echo "$carrito";
        }
        public function inserta_categoria(){
            $data = $this->modelo->set_categoria("Detalles","Detalles para toda ocasión",1);
            print_r($data);
        }
        public function ver_categoria($id_categoria){
            $data = $this->modelo->get_categoria($id_categoria);
            $this->vistas->obten_vista($this,"ver_categoria",$data);
        }*/
    }
?>