<?php defined('SYSPATH') or die('No direct script access.');
    class Model_Otzyv extends ORM{
    public function rules(){
        return array(
            'fio'=>array(array('not_empty')),
            'body'=>array(array('not_empty')),
            'email'=>array(array('not_empty'),array('email'))

             );

    }
    public function labels(){
        return array(
            'fio'=>'ФИО',
            'body'=>'Содержание',
            'email'=>'E-mail'
        );
    }
}
