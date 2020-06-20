<?php defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller
{
  protected $data = array();
 
  function __construct()
  {
    parent::__construct();


    $this->data['page_title'] = 'CI App';
    $this->data['page_description'] = 'CI_App';
   
    $this->data['before_head'] = '
   <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
   <!-- Compiled and minified CSS -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.1/css/materialize.min.css">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
   
<link rel="stylesheet" href="https://d1azc1qln24ryf.cloudfront.net/114779/Socicon/style-cf.css?u8vidh">

   <script src="https://cloud.tinymce.com/stable/tinymce.min.js?apiKey=vl3yo6vrmvxlnye6ni9ol67l3kgbh6djwa6etr150bdufpmg"></script>  
  <script>tinymce.init({
  selector: "textarea",
  height: 500,
  theme: "modern",
  plugins: "print preview fullpage powerpaste searchreplace autolink directionality advcode visualblocks visualchars fullscreen image link media template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists textcolor wordcount tinymcespellchecker a11ychecker imagetools mediaembed  linkchecker contextmenu colorpicker textpattern help",
  toolbar1: "formatselect | bold italic strikethrough forecolor backcolor | link | alignleft aligncenter alignright alignjustify  | numlist bullist outdent indent  | removeformat",
  image_advtab: true,
  templates: [
    { title: "Test template 1", content: "Test 1" },
    { title: "Test template 2", content: "Test 2" }
  ],
  content_css: [
    "//fonts.googleapis.com/css?family=Lato:300,300i,400,400i",
    "//www.tinymce.com/css/codepen.min.css"
  ]
 });</script>
   ';
   
    $this->data['before_body'] = '
    <!-- Compiled and minified JavaScript -->
    <script src="http://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.1/js/materialize.min.js"></script>
    <script>$("select").material_select(); $(".button-collapse").sideNav();</script>';
  }

  protected function render($the_view = NULL, $template = 'master')
  {
    if($template == 'json' || $this->input->is_ajax_request())
    {
      header('Content-Type: application/json');
      echo json_encode($this->data);
    }
    elseif(is_null($template))
    {
      $this->load->view($the_view,$this->data);
    }
    else
    {
      $this->data['the_view_content'] = (is_null($the_view)) ? '' : $this->load->view($the_view, $this->data, TRUE);
      $this->load->view('templates/' . $template . '_view', $this->data);
    }
  }
}

class Admin_Controller extends MY_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->library('ion_auth');
    $this->load->helper('url');
    if(!$this->ion_auth->logged_in())
    {
      //redirect them to the login page
      redirect('admin/user/login', 'refresh');
    }
    $current_user = $this->ion_auth->user()->row();
    // get the current user's ID
    $this->user_id = $current_user->id;
    $this->data['current_user'] = $current_user;
    $this->data['current_user_menu'] = '';
    if($this->ion_auth->in_group('admin'))
    {
      $this->data['current_user_menu'] = $this->load->view('templates/_parts/user_menu_admin_view.php', NULL, TRUE);
    }

    $this->data['page_title'] = 'CI App - Dashboard';
  }
  protected function render($the_view = NULL, $template = 'admin_master')
  {
    parent::render($the_view, $template);
  }
}

class Public_Controller extends MY_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->model('Page_model');
    $this->load->model('Category_model');
    $this->load->model('Tag_model');
  }
 
}