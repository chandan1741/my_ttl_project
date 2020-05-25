<?php if(!defined('BASEPATH'))exit('No direct script access allowed');

class Customer extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
    if($this->session->userdata('user_name') == ''){
      redirect(base_url().'login/index');
    }
		
	}
	public function index(){
	$this->load->library('aws_sdk');//load S3 library
  	$bucket = 'obiee-emr-analytics-data';
  	$objects = $this->aws_sdk->getIterator('ListObjects', array("Bucket" => $bucket,"Prefix" => 'datalake/warehousedb_mobility/bandhuApp/emandi_userdetails/')); //must have the trailing forward slash "/"));
    foreach ($objects as $object) {
                                            
       $key=$object['Key'];
                                            
    }
  $result = $this->aws_sdk->getObject(array('Bucket' => $bucket,'Key' => $key));
 
  $array=explode("\n",$result['Body']);
  		$data['rec'] = $array;
		$this->load->view('data_table',$data);
	}
// -------------------------------------------------XXXXXXXXXXXXXXXXXXX-----------------------------------------
	public function readData(){
  	$this->load->library('aws_sdk');//load S3 library
  	$bucket = 'obiee-emr-analytics-data';
  	// $file_path =  $_FILES ['Customer_360_JSON']['name']; 
  	$objects = $this->aws_sdk->getIterator('ListObjects', array(
                                          "Bucket" => $bucket,
                                          "Prefix" => 'datalake/warehousedb_mobility/bandhuApp/emandi_userdetails/' //must have the trailing forward slash "/"
                                          ));
                                          foreach ($objects as $object) {
                                            //echo  $object['Key'] . PHP_EOL;
                                            $key=$object['Key'];
                                            // echo $key. "<br>";
                                            // echo $object['Size'];
                                          }
  $result = $this->aws_sdk->getObject(array('Bucket' => $bucket,'Key' => $key));
  // print_r($result);
  $array=explode("\n",$result['Body']);
  //  // header("Content-Type: {$result['ContentType']}");
  //   // echo $result['Body'];
  //$array=explode("\n",$result['Body']);
  echo'<pre>';
  print_r($array);die;
}
}