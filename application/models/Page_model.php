<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Page_model extends MY_Model
{

    public function __construct()
    {
        $this->has_one['category'] = 'Category_model';
        $this->has_many_pivot['tags'] = 'Tag_model';
        parent::__construct();
    }

    public $rules = array(
        'insert' => array(
            'name' => array('field'=>'name','label'=>'Name','rules'=>'trim|required'),
            'position' => array('field'=>'position','label'=>'Position','rules'=>'trim|is_natural|required'),
            'visible' => array('field'=>'visible','label'=>'Visible','rules'=>'trim|is_natural|required'),
            'description' => array('field'=>'description','label'=>'Description','rules'=>'trim'),
            'content' => array('field'=>'content','label'=>'Content','rules'=>'trim'),
            'keywords' => array('field'=>'keywords','label'=>'keywords','rules'=>'trim'),

        ),
        'update' => array(
            'name' => array('field'=>'name','label'=>'Name','rules'=>'trim|required'),
            'position' => array('field'=>'position','label'=>'Position','rules'=>'trim|is_natural|required'),
            'visible' => array('field'=>'visible','label'=>'Visible','rules'=>'trim|is_natural|required'),
            'description' => array('field'=>'description','label'=>'Description','rules'=>'trim'),
            'content' => array('field'=>'content','label'=>'Content','rules'=>'trim'),
            'keywords' => array('field'=>'keywords','label'=>'keywords','rules'=>'trim'),
        )
    );
}