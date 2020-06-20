<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Setting_model extends MY_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public $rules = array(
        'insert' => array(
            'name' => array('field'=>'name','label'=>'Name','rules'=>'trim|required'),
            'description' => array('field'=>'description','label'=>'Description','rules'=>'trim|required'),
            'town' => array('field'=>'town','label'=>'Town','rules'=>'trim|required'),
            'county' => array('field'=>'county','label'=>'County','rules'=>'trim|required'),
            'post_code' => array('field'=>'post_code','label'=>'Post_code','rules'=>'trim|required'),
            'country' => array('field'=>'country','label'=>'Country','rules'=>'trim|required'),
            'telephone' => array('field'=>'telephone','label'=>'Telephone','rules'=>'trim|required'),
            'email' => array('field'=>'email','label'=>'Email','rules'=>'trim|required'),
            'website' => array('field'=>'website','label'=>'Website','rules'=>'trim|required'),
            
        ),
        'update' => array(
            'name' => array('field'=>'name','label'=>'Name','rules'=>'trim|required'),
            'description' => array('field'=>'description','label'=>'Description','rules'=>'trim|required'),
            'town' => array('field'=>'town','label'=>'Town','rules'=>'trim|required'),
            'county' => array('field'=>'county','label'=>'County','rules'=>'trim|required'),
            'post_code' => array('field'=>'post_code','label'=>'Post_code','rules'=>'trim|required'),
            'country' => array('field'=>'country','label'=>'Country','rules'=>'trim|required'),
            'telephone' => array('field'=>'telephone','label'=>'Telephone','rules'=>'trim|required'),
            'email' => array('field'=>'email','label'=>'Email','rules'=>'trim|required'),
            'website' => array('field'=>'website','label'=>'Website','rules'=>'trim|required'),
        )
    );
}