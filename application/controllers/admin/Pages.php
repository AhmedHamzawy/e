<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends Admin_Controller
{

  function __construct()
  {
        parent::__construct();
        if(!$this->ion_auth->in_group('admin'))
        {
            $this->session->set_flashdata('message','You are not allowed to visit the Pages page');
            redirect('admin','refresh');
        }
        $this->load->model('Page_model');
        $this->load->model('Category_model');
        $this->load->model('Tag_model');
        $this->load->library('form_validation');
        $this->load->helper('text');
  }

  public function index()
  {
        $pages = $this->Page_model->order_by('created_at, updated_at','desc')->with_category()->paginate(30,$this->Page_model->count_rows());
         
        $this->data['pages'] = $pages;
        $this->data['next_previous_pages'] = $this->Page_model->all_pages;
        
        $this->render('admin/pages/index_view');
  }

    public function create()
    {
    
        $this->data['position'] = $this->Page_model->count_rows();
        $this->data['categories'] = $this->Category_model->get_all();
        $this->data['tags'] = $this->Tag_model->get_all();


        $rules = $this->Page_model->rules;
        $this->form_validation->set_rules($rules['insert']);
        if($this->form_validation->run()===FALSE)
        {
            $this->render('admin/pages/create_view');
        }
        else
        {

            $category_id = $this->input->post('category');
            $name = $this->input->post('name');
            $position = $this->input->post('position');
            $visible = $this->input->post('visible');
            $description = $this->input->post('description');
            $content = $this->input->post('content');
            $keywords = $this->input->post('keywords');
            $tags = $this->input->post('gtags');
        

            $insert_data = array('category_id'=>$category_id, 'name'=>$name,'position' => $position, 'visible' => $visible, 'description' => $description,'content' => $content,'keywords' => $keywords,'created_by'=>$this->user_id);
            $page_id = $this->Page_model->insert($insert_data);

            $last_inserted = $this->db->insert_id();
            $page = $this->Page_model->where($last_inserted)->get();


            $config['upload_path']   = './uploads/pages'; 
            $config['allowed_types'] = 'gif|jpg|png|jpeg'; 
            $config['max_size']      = 5000; 
            $config['max_width']     = 5000; 
            $config['max_height']    = 5000;  
            $config['file_name'] = $page->id;


             $this->load->library('upload', $config);
                
             if (!$this->upload->do_upload('image')) {
                $error = array('error' => $this->upload->display_errors()); 
                $this->load->view('admin/pages/create', $error); 
             } 

            for($i=0; $i<count($tags); $i++)
            {

            $insert_data_page = array('page_id' => $page->id,'tag_id' => $tags[$i]);
            $this->db->insert('pages_tags',$insert_data_page);

            }
            $user = $this->ion_auth->user()->row();
            $insert_data_log = array('user_id' => $this->user_id,'text' => $user->first_name.' '.$user->last_name.' Created A New Page','created_at' => $page->created_at);
            $this->db->insert('activity_log',$insert_data_log);




            redirect('admin/pages','refresh');
        }


    }

    public function edit($page_id)
    {
        $position = $this->Page_model->count_rows();
        $page = $this->Page_model->get($page_id);

        $this->data['position'] = $position;
        $this->data['page'] = $page;
        $this->data['categories'] = $this->Category_model->get_all();
        $this->data['tags'] = $this->Tag_model->get_all();
        $this->data['tags_of_page'] = $this->db->get_where('pages_tags', array('page_id' => $page_id))->result();

        $rules = $this->Page_model->rules;
        $this->form_validation->set_rules($rules['update']);
        if($this->form_validation->run()===FALSE)
        {
            $this->render('admin/pages/edit_view');
        }
        else
        {
         
                $category_id = $this->input->post('category');
                $name = $this->input->post('name');
                $position = $this->input->post('position');
                $visible = $this->input->post('visible');
                $description = $this->input->post('description');
                $content = $this->input->post('content');
                $keywords = $this->input->post('keywords');
                $tags = $this->input->post('gtags');


                $update_data = array('category_id'=>$category_id, 'name'=>$name,'position' => $position, 'visible' => $visible, 'description' => $description,'content' => $content,'keywords' => $keywords,'created_by'=>$this->user_id);
                $this->Page_model->update($update_data, $page_id);
                
                $config['upload_path']   = './uploads/pages'; 
                $config['allowed_types'] = 'gif|jpg|png|jpeg'; 
                $config['max_size']      = 5000; 
                $config['max_width']     = 5000; 
                $config['max_height']    = 5000;  
                $config['file_name'] = $page->id;
                $config['overwrite'] = TRUE;

                

                $this->load->library('upload', $config);
                


                if (!$this->upload->do_upload('image')) {
                        if ("You did not select a file to upload." != $this->upload->display_errors('','') && isset($_FILES['image'])) {

                    $error = array('error' => $this->upload->display_errors()); 
                     $this->session->set_flashdata('message',$error['error']);
                     redirect('admin/pages/edit/'.$page->id,'refresh');
                    }
                } 

                $this->db->delete('pages_tags', array('page_id' => $page_id));
                for($i=0; $i<count($tags); $i++)
                {

                $insert_data_page = array('page_id' => $page_id,'tag_id' => $tags[$i]);
                $this->db->insert('pages_tags',$insert_data_page);

                }
                
                $user = $this->ion_auth->user()->row();
                $create_data_log = array('user_id' => $this->user_id,'text' => $user->first_name.' '.$user->last_name.' Updated A Page '.$name,'created_at' => $page->created_at);
                $this->db->insert('activity_log',$create_data_log);



                $this->session->set_flashdata('message', 'The Page was updated successfully.');
                redirect('admin/pages','refresh');
                
          }
        }
    
  
    public function delete($page_id)
    {
            $page = $this->Page_model->get($page_id);
            
            $pages_tags = $this->Tag_model->where('id' , $page->id)->get();

            $this->db->delete('pages_tags', array('page_id' => $page_id));
            $deleted_page = $this->Page_model->delete($page_id);

          //  unlink($_SERVER['DOCUMENT_ROOT']."/e/uploads/pages/".$page_id.".*");
            array_map( "unlink", glob( $_SERVER['DOCUMENT_ROOT']."/e/uploads/pages/".$page_id.".*" ) );


            $this->session->set_flashdata('message', $deleted_page.' page was deleted');

             $user = $this->ion_auth->user()->row();
             $create_data_log = array('user_id' => $this->user_id,'text' => $user->first_name.' '.$user->last_name.' Deleted A Page '.$page->name,'created_at' => $page->created_at);
            $this->db->insert('activity_log',$create_data_log);
                  
            redirect('admin/pages','refresh');

    }



   
}
