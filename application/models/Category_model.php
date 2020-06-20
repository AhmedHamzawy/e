<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Category_model extends MY_Model
{

    public function __construct()
    {
        $this->has_many['pages'] = array('Page_model','category_id','id');
        $this->pagination_delimiters = array('<li>','</li>');
        $this->pagination_arrows = array('<span aria-hidden="true">&laquo;</span>','<span aria-hidden="true">&raquo;</span>');
        parent::__construct();
    }

    public $rules = array(
      'insert' => array(
            'name' => array('field'=>'name','label'=>'Name','rules'=>'trim|required'),
            'position' => array('field'=>'position','label'=>'Position','rules'=>'trim|is_natural|required'),
            'visible' => array('field'=>'visible','label'=>'Visible','rules'=>'trim|is_natural|required'),
        ),
        'update' => array(
            'name' => array('field'=>'name','label'=>'Name','rules'=>'trim|required'),
            'position' => array('field'=>'position','label'=>'Position','rules'=>'trim|is_natural|required'),
            'visible' => array('field'=>'visible','label'=>'Visible','rules'=>'trim|is_natural|required'),
        ) 
    ); 
}