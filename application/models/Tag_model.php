<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Tag_model extends MY_Model
{

    public function __construct()
    {
        $this->has_many_pivot['pages'] = 'Page_model';
        parent::__construct();
    }

    public $rules = array(
        'insert' => array(
            'name' => array('field'=>'name','label'=>'Name','rules'=>'trim|required'),
            'description' => array('field'=>'description','label'=>'Description','rules'=>'trim')
        ),
        'update' => array(
            'name' => array('field'=>'name','label'=>'Name','rules'=>'trim|required'),
            'description' => array('field'=>'description','label'=>'Description','rules'=>'trim')
        )
    );
}