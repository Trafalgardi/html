<?php

class Auth_models extends CI_Model
{

	public function __construct(){
		
		$this->load->database();
		$this->load->library('Session/session');

	}

	public function createuser(){

		$this->load->helper('url');

		$data = array(

					'username' => $_POST['username'],
					'phone ' => $_POST['phone'],
					'email' => $_POST['email'],
					'last_name' => $_POST['fio_1'],
					'first_name' => $_POST['fio_2'],
					'patronymic' => $_POST['fio_3'],
					'date_of_birth' => $_POST['dateofbirth'],
					'gender' => $_POST['sex'],
					'password' => password_hash($_POST['password'], PASSWORD_DEFAULT),
					'join_date' => date('Y-m-d')

				);
		$this->db->insert('users', $data);

		$query = $this->db->get_where('users', array('username' => $_POST['username'], 'email' => $_POST['email']));
		$id = "";
		
		foreach ($query->result() as $row)
			{
			    $id = $row->id;
			}
		
		$data_1 = array(

			'user_id' => $id

		);
		$this->db->insert('passport_data', $data_1);

		$data_2 = array(

			'user_id' => $id

		);
		$this->db->insert('personal_data', $data_2);

		return;
	}

	public function checkuser(){

		$this->load->helper('url');

		$username = $_POST['username'];

		$this->db->select('password');
		$query = $this->db->get_where('users', array('username' => $username));
		$row = $query->row();
		if(isset($row))
		{
			$hash = $row->password;
			
			if (password_verify($_POST['password'], $hash)) {
				$this->session->set_flashdata("success", "Вы успешно прошли авторизацию!");

				$_SESSION['user_logged'] = TRUE;

				$query = $this->db->get_where('users', array('username' => $_POST['username']));
				$id = "";
				
				foreach ($query->result() as $row)
					{
					    $id = $row->id;
					    $_SESSION['user_id'] = $id;
					}
				$query = $this->db->get_where('users', array('id' => $id));
				$fio1 = "";
				$fio2 = "";
				$fio3 = "";
				foreach ($query->result() as $row)
					{
					    $fio1 = $row->last_name;
					    $fio2 = $row->first_name;
					    $fio3 = $row->patronymic;
					    $fio = $fio1 . " " . $fio2 . " " . $fio3;
					    $_SESSION['user_fio'] = $fio;
					}
				if(isset($row))
				{

			    	$_SESSION['username'] = $username;
				}
			    
				redirect("user/profile", "refresh");

			}else
			{

				$this->session->set_flashdata("error", "Такого пользователя не существует или пароль введен не верно");
				redirect("auth/login", "refresh");

			}
			
		}


	}
}