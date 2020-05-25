<?php if(!defined('BASEPATH'))exit('No direct script access allowed');

class Login extends CI_Controller {
	
	function __construct() {
		parent::__construct();
		$this->load->model('MLogin');
		$this->load->model('MApi');
	}

	public function index(){
		$this->load->view('login');
	}

	function getUserIP()
    {
    // Get real visitor IP behind CloudFlare network
    if (isset($_SERVER["HTTP_CF_CONNECTING_IP"])) {
              $_SERVER['REMOTE_ADDR'] = $_SERVER["HTTP_CF_CONNECTING_IP"];
              $_SERVER['HTTP_CLIENT_IP'] = $_SERVER["HTTP_CF_CONNECTING_IP"];
    }
    $client  = @$_SERVER['HTTP_CLIENT_IP'];
    $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
    $remote  = $_SERVER['REMOTE_ADDR'];

    if(filter_var($client, FILTER_VALIDATE_IP))
    {
        $ip = $client;
    }
    elseif(filter_var($forward, FILTER_VALIDATE_IP))
    {
        $ip = $forward;
    }
    else
    {
        $ip = $remote;
    }

    return $ip;
    }

    public function get_username()
	{
		// print_r();
		$uname = $this->input->post('user');
		// print_r($uname);die;
		if($this->input->post() == true){
			// print_r($uname);die;
			$sessiondata = array(
				'user_name' => $uname
			);
			// $_SESSION["test"] = 'Hello';
			// print_r($sessiondata['user_name']);die;
			// $this->session->set_userdata('user_name',$uname);
			$this->session->set_userdata('uname', $uname);
			// var_dump($this->session->userdata('uname'));die;
			// redirect(base_url().'search');
			echo json_encode('success');
		}else{
			redirect(base_url().'login');
		}


	}

	public function login1(){
	
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			//$date = date('Y-m-d H:i:s');
			if($this->input->post() == true){
				$result = $this->MLogin->getUser($username,$password);
				if($result){
					$data = array(
                    'user_id'=>$result->u_id,
                    'ip'=>$this->getUserIP(),
                    'login_date'=>date('Y-m-d H:i:s'),
                	);
                	$this->MLogin->insert('user_ip',$data);
                	$this->MLogin->last_login('users',$result->u_id);

					$sessiondata = array(
						'user_id' => $result->u_id,
						'ip'=>$this->getUserIP(),
						'user_name' => $result->u_name,
						'email' => $result->email,
						'loginuser' => TRUE
					);
					$this->session->sess_expiration = '400';
					$this->session->set_userdata($sessiondata);
					echo json_encode('Success!!');
				}else{
					echo json_encode('Invalid username and password!!');
				}
			}else{
				
			}
		
	}
	public function unauthorized()
	{
		$this->load->view('401');
	}
	public function sso_login()
	{

		$data["token"]=$this->uri->segment(3);
	  	$data["device_id"]=$this->uri->segment(4);
	  	$data["app_name"]=$this->uri->segment(5);	 
	  	$data_session['access_token'] = $data["token"];
	  	$this->session->set_userdata($data_session);
	  	// echo $data["token"];die;
	  	$POST_array=array('device_id'=>$data["device_id"],'app_name'=>$data["app_name"]);
		// print_r($POST_array);die;
		$output=$this->MApi->callSkinP("sso/dse/",$POST_array);
		// print_r($output);die;
		$response=json_decode($output,true);
		// print_r($response);die;
		$response_data=$response['data'][0];
		$response=$response['token'];
		$POST_array1=array('login_user'=>trim($response_data['user_login_s']));
		// print_r($response_data);die;
		if(isset($response['access_token']) && $response['access_token']!="") {
			$token=$response['access_token'];
			// echo $this->get_IP_address();die;
			if($token!="") {
				$data_session['user_name']=$response_data['user_login_s'];
				$data_session['dsm_name']=$response_data['dsm_name'];
				$data_session['dealer_code']=$response_data['dealer_code'];
				$data_session['position_name']=$response_data['position_name'];
				$data_session['primary_postnid']=$response_data['primary_postnid'];
				$data_session['emp_row_id']=$response_data['emp_row_id'];
				$data_session['postn_type_cd']=$response_data['postn_type_cd'];
				$data_session['access_token']=$data["token"];//$response['access_token'];
				$data_session['ip']=$this->getUserIP();
				$POST_array1['post_type']=trim(strtoupper($response_data['postn_type_cd']));
				$session=md5(TIME());
				$data_session['REMOTE_ADDR']=$this->getUserIP();
				$data_session['session']=$session;				
				$this->session->set_userdata($data_session);
				$position_array=$this->MApi->callSkinP("gtmeportal/search/primary_employees/",$POST_array1);
				$this->session->set_userdata("pos_arry",$position_array);
				redirect(base_url().'search');

			}
		}

	}

	public function login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		if($this->input->post() == true){
			$POST_array=array('username'=>trim($username),//DUSER147
						'password'=>trim($password),//Tata@0909
						"device_id"=> DEVICE_ID_L,
						"app_version"=> APP_VERSION,
						"app_name"=> APP_NAME_L
		
		);
			// print_r($POST_array);die;
		$output = $this->MApi->callSkinLogin("login",$POST_array);
		$response=json_decode($output,true);
		$response1=json_decode($output,true);
		// print_r($response);die;
		$response = $response['token'];
		$data = $response1['data'];
		// print_r($data[0]['user_login_s']);die;
		// print_r($data[0]['user_login_s']);die;
		$sessiondata = array(
			'access_token' => $response['access_token'],
			'position_id' => $data[0]['position_id'],
			'ip'=>$this->getUserIP(),
			'user_name' => $data[0]['user_login_s'],
			'postn_type' => $data[0]['postn_type_cd'],
			'loginuser' => TRUE
		);
		// print_r($data[0]['postn_type_cd']);die;
		$this->session->set_userdata($sessiondata);
		if($response['access_token'] !=''){
			if($data[0]['postn_type_cd'] =='DAM' || $data[0]['postn_type_cd'] =='SPM' || $data[0]['postn_type_cd'] =='RSM' || $data[0]['postn_type_cd'] =='NPM'){
				echo json_encode('Success!!');
			}else{
				echo json_encode('unauthorized');
			}
			
		}else{
			echo json_encode('Invalid username and password!!');
		}
		}

	}
	


	public function logout(){
		$this->session->unset_userdata('user_name');
		$this->session->unset_userdata('token');
		// $this->session->unset_userdata('user_pin');
		// $this->session->unset_userdata('name');
		// $this->session->unset_userdata('email');
		// $this->session->unset_userdata('user_type');
		$this->session->sess_destroy();
		redirect(base_url().'Login/index');
	}
	
}