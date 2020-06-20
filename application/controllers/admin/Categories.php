<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Categories extends Admin_Controller
{

	function __construct()
	{
		parent::__construct();
        if(!$this->ion_auth->in_group('admin'))
        {
            $this->session->set_flashdata('message','You are not allowed to visit the Categories page');
            redirect('admin','refresh');
        }
        $this->load->model('Category_model');
        $this->load->library('form_validation');
        $this->load->helper('text');
	}

	public function index()
	{
        $categories = $this->Category_model->order_by('created_at, updated_at','desc')->paginate(30,$this->Category_model->count_rows());
             
        $this->data['categories'] = $categories;
        $this->data['next_previous_pages'] = $this->Category_model->all_pages;
		$this->render('admin/categories/index_view');
	}

    public function create()
    {
        $position = $this->Category_model->count_rows();
        $rules = $this->Category_model->rules;

        $this->data['position'] = $position;

        $this->form_validation->set_rules($rules['insert']);
        if($this->form_validation->run()===FALSE)
        {
            $this->render('admin/categories/create_view');
        }
        else
        {
            $name = $this->input->post('name');
            $position = $this->input->post('position');
            $visible = $this->input->post('visible');
            

            $insert_data = array('name'=>$name,'position' => $position, 'visible' => $visible,'created_by'=>$this->user_id);
            $category = $this->Category_model->insert($insert_data);

            $last_inserted = $this->db->insert_id();
            $category = $this->Category_model->where($last_inserted)->get();

             $user = $this->ion_auth->user()->row();
             $create_data_log = array('user_id' => $this->user_id,'text' => $user->first_name.' '.$user->last_name.' Created A New Category '.$name,'created_at' => $category->created_at);
             $this->db->insert('activity_log',$create_data_log);

            $this->session->set_flashdata('message', 'The Category was created successfully.');

            redirect('admin/categories','refresh');

        }


    }

    public function edit($category_id)
    {
        $category = $this->Category_model->get($category_id);
        $position = $this->Category_model->count_rows();
       
        $this->data['category'] = $category;
        $this->data['position'] = $position;

        $rules = $this->Category_model->rules;
        $this->form_validation->set_rules($rules['update']);
        if($this->form_validation->run()===FALSE)
        {
            $this->render('admin/categories/edit_view');
        }
        else
        {
           
            $name = $this->input->post('name');
            $position = $this->input->post('position');
            $visible = $this->input->post('visible');


            $update_data = array('name'=>$name,'position' => $position, 'visible' => $visible,'created_by'=>$this->user_id);
            $this->Category_model->update($update_data,$category_id);

            $this->session->set_flashdata('message', 'The Category was updated successfully.');

            $user = $this->ion_auth->user()->row();
            $create_data_log = array('user_id' => $this->user_id,'text' => $user->first_name.' '.$user->last_name.' Updated A Category '.$name,'created_at' => $category->created_at);
            $this->db->insert('activity_log',$create_data_log);

            redirect('admin/categories','refresh');       
                       
          }
                
            
    }
    
    public function delete($category_id)
    {
            $category = $this->Category_model->get($category_id);
        
            $deleted_category = $this->Category_model->delete($category_id);
            $this->session->set_flashdata('message', $deleted_category.' category was deleted');

            $user = $this->ion_auth->user()->row();
            $create_data_log = array('user_id' => $this->user_id,'text' => $user->first_name.' '.$user->last_name.' Deleted A Category '.$category->name,'created_at' => $category->created_at);
            $this->db->insert('activity_log',$create_data_log);

            redirect('admin/categories','refresh');   

    }
}