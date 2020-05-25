<?php
class MApi extends CI_Model {

    var $title   = '';
    var $content = '';
    var $date    = '';
	private $agent = "";
    private $info = array();

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
		$this->agent = isset($_SERVER['HTTP_USER_AGENT']) ? $_SERVER['HTTP_USER_AGENT'] : NULL;
        $this->getBrowser();
        $this->getOS();
		$this->load->library('LogingClass');
    }


//step1
function callSkinLogin($method,$POST_array){
	
	$url=APIURL.$method.'/';
	$ch = curl_init();
	$headers=array('Content-Type: application/json', 'Accept: application/json');
	curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
	curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
	curl_setopt($ch,CURLOPT_HTTPHEADER,$headers);
	curl_setopt($ch,CURLOPT_URL,$url);
	curl_setopt($ch, CURLOPT_HTTPGET, 1);
	curl_setopt($ch, CURLOPT_POST, true);	
	$data_json=json_encode($POST_array);
	$this->logingclass->lfile('customer_360-'.DATE("d-m-Y").'.log');
	//$this->logingclass->lfile('IB_CRM-'.DATE("d-m-Y").'.log');
	//$this->logingclass->lfile('IB_PO-30-10-2018.log');
	//$this->logingclass->lwrite("Request:".$url."\n: ".$data_json."\n");
	
	curl_setopt($ch, CURLOPT_POSTFIELDS,$data_json);
	$output=curl_exec($ch);  
	$httpcode= curl_getinfo($ch, CURLINFO_HTTP_CODE);	
	curl_close($ch);
	$this->logingclass->lwrite("Request\n: ".$data_json."\n");
	$this->logingclass->lwrite("Responce\n: ".$output."\n");

	if($httpcode==200)
	{ 	
		
		return $output;
	}
	else
	{	
		
		return $httpcode;	
		
	}
	
	
}
function callSkinP($method,$POST_array)
		{
			$url=APIURL.$method;
			$url1 = base_url("logs");
			// print_r($url1);die;
			$ch = curl_init();
			 $token=$this->session->userdata('access_token');
			$headers=array('Content-Type: application/json', 'Accept: application/json', 'Authorization: Bearer '.$token.'');
			curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
			curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
			curl_setopt($ch,CURLOPT_HTTPHEADER,$headers);
			curl_setopt($ch,CURLOPT_URL,$url);
			curl_setopt($ch, CURLOPT_HTTPGET, 1);
			curl_setopt($ch, CURLOPT_POST, true);	
			$data_json=json_encode($POST_array);
			// print_r($data_json);die;
			$this->logingclass->lfile('customer_360-'.DATE("d-m-Y").'.log');
	        $this->logingclass->lwrite("Request:".$url1."\n: ".$data_json."\n");
			curl_setopt($ch, CURLOPT_POSTFIELDS,$data_json);
			$output=curl_exec($ch); 
			// echo $output;die; 
			$this->logingclass->lwrite("token\n: ".$this->session->userdata("access_token")."\n");
			$this->logingclass->lwrite("Responce\n: ".$output."\n");

			$httpcode= curl_getinfo($ch, CURLINFO_HTTP_CODE);	
			curl_close($ch);
			
			if($httpcode==401)
			{ 	
				
				redirect('login/unauthorized','refresh');
				exit();
			}

			if($httpcode==200)
			{ 	
				
				return $output;
			}
			else
			{					
				return $httpcode;	
				
			}	
				
			
		}

function callSkin($method,$POST_array)
		{
			//echo "<pre>";print_r($POST_array);	
			$url=APIURL.$method;
			$ch = curl_init();
			$token=$this->session->userdata('access_token') ;
			$headers=array('Content-Type: application/json', 'Accept: application/json', 'Authorization: Bearer '.$token.'');
			curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
			curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
			curl_setopt($ch,CURLOPT_HTTPHEADER,$headers);
			curl_setopt($ch,CURLOPT_URL,$url);
			curl_setopt($ch, CURLOPT_HTTPGET, 1);
			curl_setopt($ch, CURLOPT_POST, true);
			curl_setopt($ch, CURLINFO_HEADER_OUT, true);                         		   
			$data_json=json_encode($POST_array);
			//echo $token;
			 //echo $data_json;exit;
			 
			$this->logingclass->lfile('delivery-'.DATE("d-m-Y").'.log');
	        // $this->logingclass->lfile('IB_CRM-18-01-2017.log');
	         $this->logingclass->lwrite("Request:".$url."\n: ".$data_json."\n");
			curl_setopt($ch, CURLOPT_POSTFIELDS,$data_json);
			$output=curl_exec($ch);            
            $curlinfo= curl_getinfo($ch);
         	//echo "<pre>";print_r($curlinfo);exit;		
			$httpcode= curl_getinfo($ch, CURLINFO_HTTP_CODE);
            //echo $httpcode;exit;			
			curl_close($ch);
			
			if($httpcode==401)
			{ 	
				
				redirect('admin/dashboard/logout','refresh');
				exit();
			}
			$this->logingclass->lwrite("Responce\n: ".$output.' '.$data_json."\n");
			//$outputValue=$httpcode."#".$output;
			if($httpcode==200)
			{ 	
				
				return $output;
			}
			else
			{					
				return $httpcode;	
				
			}	

            //return $outputValue;				
			
		}
		
		function callSkinAddEdit($method,$POST_array)
		{
			
			$url=APIURL.$method;
			$ch = curl_init();
			$token=$this->session->userdata('access_token') ;
			//$HTTP_USER_AGENT=$_SERVER["HTTP_USER_AGENT"];		 
		    //$useragent=$_SERVER['HTTP_USER_AGENT'];

//-WEB-Firefox 56-Win32

		     //$POST_array['db_last_upd_src']=htmlspecialchars(substr($_SERVER["REMOTE_ADDR"].'-'.$HTTP_USER_AGENT,0,50));
			// $POST_array['db_last_upd_src']=$_SESSION["REMOTE_ADDR"]."-".$this->showInfo('browser')."-".$this->showInfo('version')."-".$this->showInfo('os');
			 $POST_array['db_last_upd_src']=$this->session->userdata("REMOTE_ADDR")."-".$this->session->userdata('DEVICE_TYPE');
			
			//print_r(json_encode($POST_array));
			$headers=array('Content-Type: application/json', 'Accept: application/json', 'Authorization: Bearer '.$token.'');
			curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
			curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
			curl_setopt($ch,CURLOPT_HTTPHEADER,$headers);
			curl_setopt($ch,CURLOPT_URL,$url);
			curl_setopt($ch, CURLOPT_HTTPGET, 1);
			curl_setopt($ch, CURLOPT_POST, true);	
			$data_json=json_encode($POST_array);
			$this->logingclass->lfile('delivery-'.DATE("d-m-Y").'.log');
	        //$this->logingclass->lfile('IB_CRM-18-01-2017.log');
	         $this->logingclass->lwrite("Request:".$url."\n: ".$data_json."\n");
			curl_setopt($ch, CURLOPT_POSTFIELDS,$data_json);
			$output=curl_exec($ch);  
			$this->logingclass->lwrite("Responce\n: ".$output."\n");
			$httpcode= curl_getinfo($ch, CURLINFO_HTTP_CODE);	
			curl_close($ch);
			
			if($httpcode==401)
			{ 	
				
				redirect('admin/dashboard/logout','refresh');
				exit();
			}
			$returnOutPut=array();
			$optputArray=json_decode($output);
			
			
			$returnOutPut[]=array("responce_code"=>$httpcode);
			
			if($optputArray->msg!="")
			{
				$returnOutPut[]=array("responce_message"=>$optputArray->msg);
				$returnOutPut[]=array("responce_api"=>'');
				
			}else{
				$returnOutPut[]=array("responce_message"=>'');
				$returnOutPut[]=array("responce_api"=>$optputArray);
				
			}
			
			$returnOutPut=json_encode($returnOutPut);			

           return $returnOutPut;				
			
		}
		
		
		function callSkinReturn($method,$POST_array)
		{
			
			$url=APIURL.$method;
			$ch = curl_init();
			$token=$this->session->userdata('access_token') ;
			$headers=array('Content-Type: application/json', 'Accept: application/json', 'Authorization: Bearer '.$token.'');
			curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
			curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
			curl_setopt($ch,CURLOPT_HTTPHEADER,$headers);
			curl_setopt($ch,CURLOPT_URL,$url);
			curl_setopt($ch, CURLOPT_HTTPGET, 1);
			curl_setopt($ch, CURLOPT_POST, true);	
			$data_json=json_encode($POST_array);
			$this->logingclass->lfile('IB_CRM-'.DATE("d-m-Y").'.log');
	        //$this->logingclass->lfile('IB_CRM-18-01-2017.log');
	        $this->logingclass->lwrite("Request:".$url."\n: ".$data_json."\n");
			curl_setopt($ch, CURLOPT_POSTFIELDS,$data_json);
			$output=curl_exec($ch); 
            $this->logingclass->lwrite("Responce\n: ".$output."\n");			
			$httpcode= curl_getinfo($ch, CURLINFO_HTTP_CODE);	
			curl_close($ch);
			if($httpcode==200)
			{ 	
				
				return $output;
			}
			else
			{					
				return $httpcode;	
				
			}			
			
		}
		
		
		//====================================================================================
		
		function getBrowser(){
        $browser = array("Navigator"            => "/Navigator(.*)/i",
                         "Firefox"              => "/Firefox(.*)/i",
                         "Internet Explorer"    => "/MSIE(.*)/i",
                         "Google Chrome"        => "/chrome(.*)/i",
                         "MAXTHON"              => "/MAXTHON(.*)/i",
                         "Opera"                => "/Opera(.*)/i",
                         );
        foreach($browser as $key => $value){
            if(preg_match($value, $this->agent)){
                $this->info = array_merge($this->info,array("Browser" => $key));
                $this->info = array_merge($this->info,array(
                  "Version" => $this->getVersion($key, $value, $this->agent)));
                break;
            }else{
                $this->info = array_merge($this->info,array("Browser" => "UnKnown"));
                $this->info = array_merge($this->info,array("Version" => "UnKnown"));
            }
        }
        return $this->info['Browser'];
    }

    function getOS(){
        $OS = array("Windows"   =>   "/Windows/i",
                    "Linux"     =>   "/Linux/i",
                    "Unix"      =>   "/Unix/i",
                    "Mac"       =>   "/Mac/i"
                    );

        foreach($OS as $key => $value){
            if(preg_match($value, $this->agent)){
                $this->info = array_merge($this->info,array("Operating System" => $key));
                break;
            }
        }
        return $this->info['Operating System'];
    }

    function getVersion($browser, $search, $string){
        $browser = $this->info['Browser'];
        $version = "";
        $browser = strtolower($browser);
        preg_match_all($search,$string,$match);
        switch($browser){
            case "firefox": $version = str_replace("/","",$match[1][0]);
            break;

            case "internet explorer": $version = substr($match[1][0],0,4);
            break;

            case "opera": $version = str_replace("/","",substr($match[1][0],0,5));
            break;

            case "navigator": $version = substr($match[1][0],1,7);
            break;

            case "maxthon": $version = str_replace(")","",$match[1][0]);
            break;

            case "google chrome": $version = substr($match[1][0],1,10);
        }
        return $version;
    }

    function showInfo($switch){
        $switch = strtolower($switch);
        switch($switch){
            case "browser": return $this->info['Browser'];
            break;

            case "os": return $this->info['Operating System'];
            break;

            case "version": return $this->info['Version'];
            break;

            case "all" : return array($this->info["Version"], 
              $this->info['Operating System'], $this->info['Browser']);
            break;

            default: return "Unkonw";
            break;

        }
    }




}
?>