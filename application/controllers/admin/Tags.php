<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Tags extends Admin_Controller
{

  function __construct()
  {
    parent::__construct();
        if(!$this->ion_auth->in_group('admin'))
        {
            $this->session->set_flashdata('message','You are not allowed to visit the Pages page');
            redirect('admin','refresh');
        }
        $this->load->model('Tag_model');
        $this->load->library('form_validation');
        $this->load->helper('text');
  }

  public function index()
  {
        $tags = $this->Tag_model->order_by('created_at, updated_at','desc')->paginate(30,$this->Tag_model->count_rows());
        
         
        $this->data['tags'] = $tags;
        $this->data['next_previous_pages'] = $this->Tag_model->all_pages;
        
        $this->render('admin/tags/index_view');
  }

  public function create()
  {
        $position = $this->Tag_model->count_rows();
        $this->data['position'] = $position;


        $rules = $this->Tag_model->rules;
        $this->form_validation->set_rules($rules['insert']);
        if($this->form_validation->run()===FALSE)
        {
            $this->render('admin/tags/create_view');
        }
        else
        {

            $name = $this->input->post('name');
            $description = $this->input->post('description');

            $insert_data = array('name'=>$name, 'description' => $description, 'created_by'=>$this->user_id);
            $tag_id = $this->Tag_model->insert($insert_data);

            $last_inserted = $this->db->insert_id();
            $tag = $this->Tag_model->where($last_inserted)->get();

            $user = $this->ion_auth->user()->row();
            $create_data_log = array('user_id' => $this->user_id,'text' => $user->first_name.' '.$user->last_name.' Created A New Tag '.$name,'created_at' => $tag->created_at);
            $this->db->insert('activity_log',$create_data_log);

            $this->session->set_flashdata('message', 'The Tag was created successfully.');

            redirect('admin/tags','refresh');

        }
  }

  public function edit($tag_id)
  {
        $tag = $this->Tag_model->get($tag_id);
        $this->data['tag'] = $tag;

        $rules = $this->Tag_model->rules;
        $this->form_validation->set_rules($rules['update']);
        if($this->form_validation->run()===FALSE)
        {
            $this->render('admin/tags/edit_view');
        }
        else
        {
         
            $name = $this->input->post('name');
            $description = $this->input->post('description');

            $update_data = array('name'=>$name, 'description' => $description, 'created_by'=>$this->user_id);
            $this->Tag_model->update($update_data, $tag_id);
                   
            $this->session->set_flashdata('message', 'The translation was updated successfully.');

            $user = $this->ion_auth->user()->row();
            $create_data_log = array('user_id' => $this->user_id,'text' => $user->first_name.' '.$user->last_name.' Updated A Tag '.$name,'created_at' => $tag->created_at);
            $this->db->insert('activity_log',$create_data_log);

            redirect('admin/tags','refresh');
                
          }
    }
    
  
    public function delete($tag_id)
    {
        $tag = $this->Tag_model->get($tag_id);
        
        $deleted_tags = $this->Tag_model->delete($tag_id);
        $this->session->set_flashdata('message', $deleted_tags.' tag was deleted');

        $user = $this->ion_auth->user()->row();
        $create_data_log = array('user_id' => $this->user_id,'text' => $user->first_name.' '.$user->last_name.' Deleted A Page '.$tag->name,'created_at' => $tag->created_at);
        $this->db->insert('activity_log',$create_data_log);
              
        redirect('admin/tags','refresh');

    }
}