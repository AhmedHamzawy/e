<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Settings extends Admin_Controller
{

  function __construct()
  {
        parent::__construct();
        if(!$this->ion_auth->in_group('admin'))
        {
            $this->session->set_flashdata('message','You are not allowed to visit the Pages page');
            redirect('admin','refresh');
        }
        $this->load->model('Setting_model');
        $this->load->library('form_validation');
        $this->load->helper('text');
  }

    public function edit($setting_id = 1)
    {
        $setting = $this->Setting_model->get($setting_id);

        $this->data['setting'] = $setting;


        $rules = $this->Setting_model->rules;
        $this->form_validation->set_rules($rules['update']);
        if($this->form_validation->run()===FALSE)
        {
            $this->render('admin/settings/edit_view');
        }
        else
        {
         
                $name = $this->input->post('name');
                $description = $this->input->post('description');
                $town = $this->input->post('town');
                $county = $this->input->post('county');
                $post_code = $this->input->post('post_code');
                $country = $this->input->post('country');
                $telephone = $this->input->post('telephone');
                $email = $this->input->post('email');
                $website = $this->input->post('website');
                $facebook = $this->input->post('facebook');
                $twitter = $this->input->post('twitter');
                $instagram = $this->input->post('instagram');
                $youtube = $this->input->post('youtube');


                $update_data = array('name'=>$name, 'description' => $description,'town' => $town,'county' => $county,
                'post_code' => $post_code, 'country' => $country, 'telephone' => $telephone , 'email' => $email , 'website' => $website,
                'facebook' => $facebook, 'twitter' => $twitter, 'instagram' => $instagram, 'youtube' => $youtube , 'updated_by'=>$this->user_id);
                $this->Setting_model->update($update_data, $setting_id);
                
               
               
                   
                $this->session->set_flashdata('message', 'The Settings were updated successfully.');

                $user = $this->ion_auth->user()->row();
                $create_data_log = array('user_id' => $this->user_id,'text' => $user->first_name.' '.$user->last_name.' Changed The Settings ','created_at' => $settings->updated_at);
                $this->db->insert('activity_log',$create_data_log);

                redirect('admin/settings/edit/1','refresh');
                
          }
        }
    
  
   

   
}
