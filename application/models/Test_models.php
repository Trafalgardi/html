<?php

class Test_models extends CI_Model
{

	public function __construct(){
		
		$this->load->database();
		$this->load->library('Session/session');

	}

	public function test_check_0(){

		$this->load->helper('url');

		$data = array();
		
		$query = $this->db->get_where('allTest', array('user_id' => $_SESSION['user_id'], 'success' => '0')); //'testName' => 'Методика оценки уровня общительности Ряховского',
		foreach ($query->result() as $row)
			{

			    $data[$row->testName] = $row->coef;
			}

		return $data;

		
	}

	public function test_check_1(){

		$this->load->helper('url');

		$data = array();
		
		$query = $this->db->get_where('allTest', array('user_id' => $_SESSION['user_id'], 'success' => '1')); //'testName' => 'Методика оценки уровня общительности Ряховского',
		foreach ($query->result() as $row)
			{

			    $data[$row->testName] = $row->coef;
			}

		return $data;

		
	}

	public function test_isert_1(){

		$this->load->helper('url');

		$answer = "";
		for ($i = 0; $i <= 15; $i++) {

			$answer .= $_POST['optionsRadios' . $i];
		    if($i != 15)
		    {
		    	$answer .= ":";
		    }
		}

		$data = array(

					'testName' => 'Методика оценки уровня общительности Ряховского',
					'insertDate' => date('Y-m-d'),
					'answer' => $answer . ";",
					'user_id' => $_SESSION['user_id']

				);
		$this->db->insert('allTest', $data);
		return;
	}
	public function test_isert_2(){

		$this->load->helper('url');

		$answer = "";
		for ($i = 0; $i <= 24; $i++) {

			$answer .= $_POST['optionsRadios' . $i];
		    if($i != 24)
		    {
		    	$answer .= ":";
		    }
		}

		$data = array(

					'testName' => 'Методика диагностики степени готовности к риску А. М. Шуберта',
					'insertDate' => date('Y-m-d'),
					'answer' => $answer . ";",
					'user_id' => $_SESSION['user_id']

				);
		$this->db->insert('allTest', $data);
		return ;
	}
	public function test_isert_3(){

		$this->load->helper('url');

		$answer = "";
		for ($i = 0; $i <= 9; $i++) {

			$answer .= $_POST['optionsRadios' . $i];
		    if($i != 9)
		    {
		    	$answer .= ":";
		    }
		}

		$data = array(

					'testName' => 'Тест на управленческую ответственность «Какой Вы руководитель?» А. Гороховской',
					'insertDate' => date('Y-m-d'),
					'answer' => $answer . ";",
					'user_id' => $_SESSION['user_id']

				);
		$this->db->insert('allTest', $data);
		return ;
	}
	public function test_isert_4(){

		$this->load->helper('url');

		$answer = "";
		for ($i = 1; $i <= 30; $i++) {

			$answer .= $_POST['optionsRadios' . $i];
		    if($i != 30)
		    {
		    	$answer .= ":";
		    }
		}

		$data = array(

					'testName' => 'Методика диагностики личности на мотивацию к избеганию неудач Т.Элерса',
					'insertDate' => date('Y-m-d'),
					'answer' => $answer . ";",
					'user_id' => $_SESSION['user_id']

				);
		$this->db->insert('allTest', $data);
		return ;
	}
	public function test_isert_5(){

		$this->load->helper('url');

		$answer = "";
		for ($i = 1; $i <= 41; $i++) {

			$answer .= $_POST['optionsRadios' . $i];
		    if($i != 41)
		    {
		    	$answer .= ":";
		    }
		}

		$data = array(

					'testName' => 'Методика диагностики личности на мотивацию к успеху Т. Элерса',
					'insertDate' => date('Y-m-d'),
					'answer' => $answer . ";",
					'user_id' => $_SESSION['user_id']

				);
		$this->db->insert('allTest', $data);
		return ;
	}
	public function test_isert_6(){

		$this->load->helper('url');

		$answer = "";
		for ($i = 1; $i <= 40; $i++) {

			$answer .= $_POST['optionsRadios' . $i];
		    if($i != 40)
		    {
		    	$answer .= ":";
		    }
		}

		$data = array(

					'testName' => 'Тест «Эффективность лидерства» Р.С. Немова',
					'insertDate' => date('Y-m-d'),
					'answer' => $answer . ";",
					'user_id' => $_SESSION['user_id']

				);
		$this->db->insert('allTest', $data);
		return ;
	}

	public function test_isert_7(){

		$this->load->helper('url');

		$answer = "";
		for ($i = 1; $i <= 20; $i++) {

			$answer .= $_POST['optionsRadios' . $i];
		    if($i != 20)
		    {
		    	$answer .= ":";
		    }
		}

		$data = array(

					'testName' => 'Тест «Мотивация успеха и боязнь неудачи» А.А.Реан',
					'insertDate' => date('Y-m-d'),
					'answer' => $answer . ";",
					'user_id' => $_SESSION['user_id']

				);
		$this->db->insert('allTest', $data);
		return ;
	}
}