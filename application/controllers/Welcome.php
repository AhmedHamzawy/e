<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends Public_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
			$this->data['latest'] = $this->Page_model->get_all();
			$this->data['pages_c1'] = $this->Page_model->where('category_id' , 3)->get_all();
			$this->data['pages_c2'] = $this->Page_model->where('category_id' , 4)->get_all();
			$this->data['pages_c3'] = $this->Page_model->where('category_id' , 1)->get_all();
			$this->data['pages_c4'] = $this->Page_model->where('category_id' , 5)->get_all();
			$this->data['pages_c5'] = $this->Page_model->where('category_id' , 6)->get_all();
			$this->data['pages_c6'] = $this->Page_model->where('category_id' , 0)->get_all();

		    $this->data['categories'] = $category =  $this->Category_model->get_all();


		    $this->render('index');

	}

	public function category($name = null)
	{
		$this->data['categories'] = $category =  $this->Category_model->get_all();
		$this->data['pages_c1'] = $this->Page_model->where('category_id' , 3)->get_all();
		$this->data['pages_c2'] = $this->Page_model->where('category_id' , 4)->get_all();
		$this->data['pages_c3'] = $this->Page_model->where('category_id' , 1)->get_all();
		$this->data['pages_c4'] = $this->Page_model->where('category_id' , 5)->get_all();
		$this->data['pages_c5'] = $this->Page_model->where('category_id' , 6)->get_all();
		$this->data['pages_c6'] = $this->Page_model->where('category_id' , 0)->get_all();

		$this->data['category'] = $category =  $this->Category_model->where('name', $name)->get();
		$this->data['category_pages'] = $this->Page_model->where('category_id' , $category->id)->get_all();

		$this->render('category');
	}

	public function tag($name = null)
	{
		$pages = [];
		$this->data['categories'] = $category =  $this->Category_model->get_all();
		$this->data['pages_c1'] = $this->Page_model->where('category_id' , 3)->get_all();
		$this->data['pages_c2'] = $this->Page_model->where('category_id' , 4)->get_all();
		$this->data['pages_c3'] = $this->Page_model->where('category_id' , 1)->get_all();
		$this->data['pages_c4'] = $this->Page_model->where('category_id' , 5)->get_all();
		$this->data['pages_c5'] = $this->Page_model->where('category_id' , 6)->get_all();
		$this->data['pages_c6'] = $this->Page_model->where('category_id' , 0)->get_all();

		$this->data['tag'] = $tag =  $this->Tag_model->where('name', $name)->get();
		$this->data['tag_pages'] = $tag_pages =  $this->db->get_where('pages_tags' , array('tag_id' => $tag->id ) )->result();
		
		foreach ($tag_pages as $page) {
	     $page_pick = $this->Page_model->where('id' , $page->page_id)->get();
	     array_push($pages , $page_pick);
		}
	
	$this->data['pages'] = $pages;
		$this->render('tag');
	}

	public function author($username = null)
	{
		$this->data['author'] = $author =  $this->db->get_where('users',  array('username' =>  $username ))->result();
		$this->data['author_pages'] = $this->Page_model->where('created_by' , $author[0]->id)->get_all();
		$this->data['pages_c1'] = $this->Page_model->where('category_id' , 3)->get_all();
		$this->data['pages_c2'] = $this->Page_model->where('category_id' , 4)->get_all();
		$this->data['pages_c3'] = $this->Page_model->where('category_id' , 1)->get_all();
		$this->data['pages_c4'] = $this->Page_model->where('category_id' , 5)->get_all();
		$this->data['pages_c5'] = $this->Page_model->where('category_id' , 6)->get_all();
		$this->data['pages_c6'] = $this->Page_model->where('category_id' , 0)->get_all();
		
		$this->render('author');
	}

	public function page($id = null){
		$this->data['categories'] = $category =  $this->Category_model->get_all();
		$this->data['pages_c1'] = $this->Page_model->where('category_id' , 3)->get_all();
		$this->data['pages_c2'] = $this->Page_model->where('category_id' , 4)->get_all();
		$this->data['pages_c3'] = $this->Page_model->where('category_id' , 1)->get_all();
		$this->data['pages_c4'] = $this->Page_model->where('category_id' , 5)->get_all();
		$this->data['pages_c5'] = $this->Page_model->where('category_id' , 6)->get_all();
		$this->data['pages_c6'] = $this->Page_model->where('category_id' , 0)->get_all();

		$this->data['page'] = $this->Page_model->where('id' , $id)->get();
				$this->render('page');


	}
}
