<?php

class Test extends CI_Controller 
{

	public function __construct()
        {
        	parent::__construct();

        	$this->load->database();
			$this->load->library('Session/session');
			$this->load->model('test_models');

                if(!isset($_SESSION['user_logged'])){

                	$this->session->set_flashdata("error", "Пожалуйста авторизуйтесь!");
                	redirect("auth/login");

                }
        }



	public function test_1($page = 'test_1'){

		$this->load->database();
		$this->load->library('Session/session');
		$this->load->helper('form');
    	$this->load->library('form_validation');
    	$this->db->close();
		$this->db->initialize();

		if ( ! file_exists(APPPATH.'/views/test/'.$page.'.php'))
			{
					// Упс, у нас нет такой страницы!
					show_404();
			}

		$temp = $this->test_models->test_check_1();
		$temp_1 = $this->test_models->test_check_0();

		$data['coef'] = $temp;
		$data['ready'] = $temp_1;
		

		$this->load->view('templates/header_for_user', $data);
		$this->load->view('test/'.$page, $data);
		$this->load->view('templates/footer_for_user', $data);
	}
	public function test_number_1($page = 'test_number_1'){

		$this->load->database();
		$this->load->library('Session/session');
		$this->load->helper('form');
    	$this->load->library('form_validation');
    	$this->db->close();
		$this->db->initialize();

		if ( ! file_exists(APPPATH.'/views/test/'.$page.'.php'))
			{
					// Упс, у нас нет такой страницы!
					show_404();
			}

		if ($this->input->post('submit') == true){
			if($this->form_validation->run() == false){

				$this->test_models->test_isert_1();
				$this->session->set_flashdata("success", "Данные успешно загруженны!");
				redirect("test/test_1", "refresh");
				
			}
		}

		$this->load->view('templates/header_for_user');
		$this->load->view('test/'.$page);
		$this->load->view('templates/footer_for_user');
	}
	public function test_number_2($page = 'test_number_2'){

		$this->load->database();
		$this->load->library('Session/session');
		$this->load->helper('form');
    	$this->load->library('form_validation');
    	$this->db->close();
		$this->db->initialize();

		if ( ! file_exists(APPPATH.'/views/test/'.$page.'.php'))
			{
					// Упс, у нас нет такой страницы!
					show_404();
			}

		if ($this->input->post('submit') == true){
			if($this->form_validation->run() == false){

				$this->test_models->test_isert_2();
				$this->session->set_flashdata("success", "Данные успешно загруженны!");
				redirect("test/test_1", "refresh");
				
			}
		}

		$this->load->view('templates/header_for_user');
		$this->load->view('test/'.$page);
		$this->load->view('templates/footer_for_user');
	}
	public function test_number_3($page = 'test_number_3'){

		$this->load->database();
		$this->load->library('Session/session');
		$this->load->helper('form');
    	$this->load->library('form_validation');
    	$this->db->close();
		$this->db->initialize();

		if ( ! file_exists(APPPATH.'/views/test/'.$page.'.php'))
			{
					// Упс, у нас нет такой страницы!
					show_404();
			}

		if ($this->input->post('submit') == true){
			if($this->form_validation->run() == false){

				$this->test_models->test_isert_3();
				$this->session->set_flashdata("success", "Данные успешно загруженны!");
				redirect("test/test_1", "refresh");
				
			}
		}

		$this->load->view('templates/header_for_user');
		$this->load->view('test/'.$page);
		$this->load->view('templates/footer_for_user');
	}
	public function test_number_4($page = 'test_number_4'){

		$this->load->database();
		$this->load->library('Session/session');
		$this->load->helper('form');
    	$this->load->library('form_validation');
    	$this->db->close();
		$this->db->initialize();

		if ( ! file_exists(APPPATH.'/views/test/'.$page.'.php'))
			{
					// Упс, у нас нет такой страницы!
					show_404();
			}

		if ($this->input->post('submit') == true){
			if($this->form_validation->run() == false){

				$this->test_models->test_isert_4();
				$this->session->set_flashdata("success", "Данные успешно загруженны!");
				redirect("test/test_1", "refresh");
				
			}
		}

		$this->load->view('templates/header_for_user');
		$this->load->view('test/'.$page);
		$this->load->view('templates/footer_for_user');
	}


	public function test_number_5($page = 'test_number_5'){

		$this->load->database();
		$this->load->library('Session/session');
		$this->load->helper('form');
    	$this->load->library('form_validation');
    	$this->db->close();
		$this->db->initialize();

		if ( ! file_exists(APPPATH.'/views/test/'.$page.'.php'))
			{
					// Упс, у нас нет такой страницы! Методика диагностики личности на мотивацию к успеху Т. Элерса
					show_404();
			}

		if ($this->input->post('submit') == true){
			if($this->form_validation->run() == false){

				$this->test_models->test_isert_5();
				$this->session->set_flashdata("success", "Данные успешно загруженны!");
				redirect("test/test_1", "refresh");
				
			}
		}

		$this->load->view('templates/header_for_user');
		$this->load->view('test/'.$page);
		$this->load->view('templates/footer_for_user');
	}


	public function test_number_6($page = 'test_number_6'){

		$this->load->database();
		$this->load->library('Session/session');
		$this->load->helper('form');
    	$this->load->library('form_validation');
    	$this->db->close();
		$this->db->initialize();

		if ( ! file_exists(APPPATH.'/views/test/'.$page.'.php'))
			{
					// Упс, у нас нет такой страницы!
					show_404();
			}

		if ($this->input->post('submit') == true){
			if($this->form_validation->run() == false){

				$this->test_models->test_isert_6();
				$this->session->set_flashdata("success", "Данные успешно загруженны!");
				redirect("test/test_1", "refresh");
				
			}
		}

		$this->load->view('templates/header_for_user');
		$this->load->view('test/'.$page);
		$this->load->view('templates/footer_for_user');
	}


	public function test_number_7($page = 'test_number_7'){

		$this->load->database();
		$this->load->library('Session/session');
		$this->load->helper('form');
    	$this->load->library('form_validation');
    	$this->db->close();
		$this->db->initialize();

		if ( ! file_exists(APPPATH.'/views/test/'.$page.'.php'))
			{
					// Упс, у нас нет такой страницы!
					show_404();
			}

		if ($this->input->post('submit') == true){
			if($this->form_validation->run() == false){

				$this->test_models->test_isert_7();
				$this->session->set_flashdata("success", "Данные успешно загруженны!");
				redirect("test/test_1", "refresh");
				
			}
		}

		$this->load->view('templates/header_for_user');
		$this->load->view('test/'.$page);
		$this->load->view('templates/footer_for_user');
	}

	public function test_number_8($page = 'test_number_8'){

		$this->load->database();
		$this->load->library('Session/session');
		$this->load->helper('form');
    	$this->load->library('form_validation');
    	$this->db->close();
		$this->db->initialize();

		if ( ! file_exists(APPPATH.'/views/test/'.$page.'.php'))
			{
					// Упс, у нас нет такой страницы!
					show_404();
			}

		if ($this->input->post('submit') == true){
			if($this->form_validation->run() == false){

				$this->test_models->test_isert_8();
				$this->session->set_flashdata("success", "Данные успешно загруженны!");
				redirect("test/test_1", "refresh");
				
			}
		}

		$this->load->view('templates/header_for_user');
		$this->load->view('test/'.$page);
		$this->load->view('templates/footer_for_user');
	}

	public function logout(){

		unset($_SESSION);
		session_destroy();
		redirect("auth/openpage", "refresh");
	}
	
}