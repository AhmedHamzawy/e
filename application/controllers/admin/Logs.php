<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Logs extends Admin_Controller
{

  function __construct()
  {
    parent::__construct();
   

  }

  public function index()
  {
      $this->data['logs'] = $this->db->get('activity_log')->result();
      $this->render('admin/logs/index_view');


  }


}