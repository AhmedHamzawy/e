<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends Admin_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->model('Page_model');
    $this->load->model('Setting_model');
    $this->load->model('Tag_model');
    $this->load->model('Category_model');


  }

  public function index()
  {

  	$pages = $this->Page_model->with_category()->order_by('created_at, updated_at','desc')->get_all();
  	$setting =  $this->Setting_model->get(1);
  	$tags = $this->Tag_model->get_all();
  	$categories = $this->Category_model->get_all();
  	$logs = $this->db->get('activity_log',6)->result();

    $this->data['pages'] = $pages;
    $this->data['setting'] = $setting;
    $this->data['tags'] = $tags;
    $this->data['categories'] = $categories;
    $this->data['logs'] = $logs;

    $this->render('admin/dashboard_view');
  }
}