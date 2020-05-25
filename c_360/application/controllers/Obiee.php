<?php if(!defined('BASEPATH'))exit('No direct script access allowed');

class Obiee extends CI_Controller{
	
	function __construct(){
		parent::__construct();
		
		// if(!$this->session->userdata('password_status') == 1){
		// 		redirect(base_url().'login/index');
		// 	}
		$this->load->model('MLogin');
		$this->load->helper('auth');
		$this->load->library('session');
		
	}
	function generate_token ($len = 32)
{
	// Array of potential characters, shuffled.
	$chars = array(
		'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm',
		'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z',
		'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M',
		'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z',
		'0', '1', '2', '3', '4', '5', '6', '7', '8', '9'
	);
	shuffle($chars);

	$num_chars = count($chars) - 1;
	$token = '';

	// Create random token at the specified length.
	for ($i = 0; $i < $len; $i++)
	{
		$token .= $chars[mt_rand(0, $num_chars)];
	}

	return $token;

}

	public function get_username()
	{
		// print_r();
		// $uname = $this->input->post('username');
		$uname = 'admin';
		$password = 'Admin@123';
		// print_r($uname);die;
		if($this->input->post() == true){
			// print_r($uname);die;
			$this->MLogin->updateAuth('users',$uname,$this->generate_token());
			$result = $this->MLogin->getUser($uname,$password);
			// print_r($result);die;
			if($result){
				$sessiondata = array(
				'user_id' => $result->u_id,
				'user_name' => $result->u_name,
				'auth' => $result->auth,
				'loginuser' => TRUE
				);
				$this->session->set_userdata($sessiondata);
				echo json_encode($result->auth);
			}else{
				echo json_encode('invalid');
			}
			
		}else{
			redirect(base_url().'login');
		}
	}

	public function logout()
	{
		$uname = 'admin';
		$password = 'Admin@123';
		if($this->input->post() == true){
			// print_r($uname);die;
			$this->MLogin->updateAuth('users',$uname,'0');
			// public function logout(){
			$this->session->unset_userdata('user_name');
			$this->session->sess_destroy();
			// redirect(base_url().'login/index');
			// }
			//$result = $this->MLogin->getUser($uname,$password);
			// print_r($result);die;
			// if($result){
			// 	$sessiondata = array(
			// 	'user_id' => $result->u_id,
			// 	'user_name' => $result->u_name,
			// 	'auth' => $result->auth,
			// 	'loginuser' => TRUE
			// 	);
			// 	$this->session->set_userdata($sessiondata);
			// 	echo json_encode($result->auth);
			// }else{
			// 	echo json_encode('invalid');
			// }
			
		}else{
			redirect(base_url().'login');
		}
	}
}//End Class