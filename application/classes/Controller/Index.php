<?php defined('SYSPATH') or die('No direct script access.');
class Controller_Index extends Controller_Template {
//определение перемнной шаблона*
public $template = 'v_index';

public function before(){
		parent::before();
//передача переменной в шаблон
        $this->template->title = 'Добро пожаловать на сайт!';
        $this->template->main = array();
}
	public function action_index()	//экшен
	{
		$id = $this->request->param('id');
		//echo $id;
		if(!$id){
			$id = 'index';

            $main2 = View::factory('templates/v_karusel');
            $this->template->main[] = $main2;
		}

        $text = ORM::factory('static')->where('url','=', $id)->find();
        $main = View::factory('templates/v_static')->bind('text',$text);
		$this->template->main[] = $main;

	}


}

/*class Controller_Index extends Controller_Template {
public $template = 'v_index';

	public function before()
	{
		parent::before();
		$this->template->title= 'Интернет магазин';
	}
}
	/*public function action_index()
	{
		$this->template->content= 'Главная страница';
	}*/
	/*public function action_catalog()
	{
         $products = Model::factory('catalog')->all_products();

         $this->template->content = View::factory('v_catalog', array('products' => $products,));
	}
	public function action_index()
	{
		$config = Kohana::$config->load('conf');
        $value  = $config->get('site');
		print_r($value);
	}
	
	
*/
