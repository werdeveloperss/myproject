<?php
	class News extends CI_Controller{
		

		public function index(){
			$data['title'] = 'News &amp; Events';

			$data['news'] = $this->news_model->get_news();

			$this->load->view('templates/header');
			$this->load->view('news/index', $data);
			$this->load->view('templates/footer');
		}

		public function view($news_id = NULL){
			$data['news'] = $this->news_model->get_news($news_id);

			if(empty($data['news'])){
				show_404();
			}

			$data['title'] = $data['news']['title'];

			$this->load->view('templates/header');
			$this->load->view('news/view', $data);
			$this->load->view('templates/footer');
		}
	}