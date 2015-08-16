<?php

class Menu extends CI_Controller{
    
    public function __construct() {
        parent::__construct();
        //Modelos
        $this->load->model('menu_model');
        //Librerias
        $this->load->library('parser');
        $this->load->library('encrypt');
        //Helpers
        $this->load->helper('form');
    }
    
    function index(){}
    
    function get_menus(){
        $menus = $this->menu_model->get_menus();
            $data=array(
                'menus' => $menus,          
                        );
	$this->parser->parse('frontend/menus/lista_menus', $data);
    }
    
    function insertar_menus() {
        $process = $this->input->post('process');
        if ($process) {
            $cambio_menu = $this->input->post('cambio_menu');
            $plato_servido = $this->input->post('plato_servido');
            $dia_menu = $this->input->post('dia_menu');
            $descripcion = $this->input->post('descripcion');
            $values = array('cambio_menu' => $cambio_menu, 'plato_servido' => $plato_servido, 'dia_menu' => $dia_menu, 'descripcion' => $descripcion);
            $menuInsertado = $this->menu_model->insert_menu($values);
         }else {
            $data['result']="Debe LLenar los campos";
            $this->parser->parse('frontend/menus/insertar_menu', $data);
        }
    }

    public function detalle_menu($id_menu){
            	$menu['menu']= $this->menu_model->detail($id_menu);
                $data = array(
				'menu' => $menu,
				'id_menu' => $id_menu,
		);
		$this->parser->parse('frontend/menus/detalle_menu', $data);
                
    }
    
    public function update_menu($id_menu){
	$process = $this->input->post('process');
	if($process){
                     $cambio_menu = $this->input->post('cambio_menu');
            $plato_servido = $this->input->post('plato_servido');
            $dia_menu = $this->input->post('dia_menu');
            $descripcion = $this->input->post('descripcion');
            $values = array('cambio_menu' => $cambio_menu, 'plato_servido' => $plato_servido, 'dia_menu' => $dia_menu, 'descripcion' => $descripcion);
                    $menuInsertado = $this->menu_model->update_menu($id_menu, $values);
                    $this->parser->parse('menus/get_menus', $data);
        }else{
		$menu['menu'] = $this->menu_model->detail($id_menu);
               	$data = array(
		'menu' => $menu,
		'id_menu' => $id_menu
		);
		$this->parser->parse('frontend/menus/update_menu', $data);
						
		}
	}
        
        public function delete_menu(){ 
		$menuId = $this->input->post('check');
		//index es una variable cualquiera que cree porque no tenia idea de que ponerle
		foreach ($menuId as $index => $menuId) {
			$deletedMenu = $this->menu_model->delete_menu($menuId);
		}
		$menu['menus'] = $this->menu_model->get_menus();
			redirect('menus/get_menus', 'refresh');
	}
}
