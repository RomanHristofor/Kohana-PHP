<?php defined('SYSPATH') or die('No direct script access.');
class Controller_Weddingfoto extends Controller_Index {
    public function before()
    {
        parent::before();
    }
    public function action_index()
    {

        $categori = ORM::factory('categori')->where('showhide','=','show')->find_all();
        $main = View::factory('templates/v_foto')->bind('categori',$categori);
        $this->template->main[] = $main;
        // good
    }
}