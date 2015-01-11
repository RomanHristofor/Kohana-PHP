<?php defined('SYSPATH') or die('No direct script access.');
    class Controller_Otzyvs extends Controller_Index {
        public function before()
        {
            parent::before();
        }
        public function action_index()
        {
            $otzyvs = ORM::factory('otzyv')->where('showhide','=','show')->find_all();

            if($_POST)
            {
                $data = Arr::extract($_POST,array('FIO','body','email'));
                $otz = ORM::factory('otzyv');
                $otz -> fio = $data['FIO'];
                $otz -> email = $data['email'];
                $otz -> body = $data['body'];
                $otz -> putdate = date('y-m-d');
                $otz -> showhide = 'show';
                $otz -> ip = $_SERVER['REMOTE_ADDR'];
                try{
                    $otz->save();
                    $this->redirect('/');

                }
                catch(ORM_Validation_Exception $e)
                {
                    $errors = $e->errors('validation');
                }
            }
            $main = View::factory('templates/v_otzyvs')->bind('errors',$errors)->bind('otzyvs',$otzyvs)->bind('data',$data);
            $this->template->main[] = $main;
        }
}
