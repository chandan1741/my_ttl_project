<?php if(!defined('BASEPATH'))exit('No direct script access allowed');
require_once 'vendor/autoload.php';
use Elasticsearch\ClientBuilder;
class Search extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->library('session');
		// $user = $_REQUEST['username'];
		// echo $user;die;
		// if(empty($user) || $user == NULL){

			if($this->session->userdata('user_name') == '' && $this->session->userdata('access_token') == ''){
			redirect(base_url().'login/unauthorized');
			}
		// }
	}

	public function index(){
		$this->load->view('index');
	}

	public function p_search(){
		// print_r($_POST);die;
		$s_type = $this->input->post('search_type');
		$hosts1 = [URL.'flat_asset/']; 
		$client1 = ClientBuilder::create()->setHosts($hosts1)->build();
		$hosts = [URL.'parent2child,parent2childntmerge/']; 
		$client = ClientBuilder::create()->setHosts($hosts)->build();
		$area = $this->session->userdata('area');
		$region = $this->session->userdata('region');
		$q = trim($this->input->post('name'));
		if($s_type == 'acc_name'){
			if($q!=''){
			$query = $client->search([
			'body' => [
				'query' => [
					'bool' => [
					'should' => [
						'match' => ['PAR_ACCNT_NAME' => $q]
						]
					]
				]
			]
		]);
			if($query['hits']['total'] >=1){
			$result = $query['hits']['hits'];
		}

		
		if(isset($result)){
    		foreach($result as $r){
    			$name = str_replace(' ', '_', $r['_source']['PAR_ACCNT_NAME']);
    			$output .= '<li id="'.$r['_source']['PAR_ACCNT_ARN'].'" class="list-group-item link-class" style=" cursor: pointer;" accnt_name='.$name.'><a href="javascript:void(0)" class="list" mob='.substr($r['_source']['PAR_ACCNT_MAIN_PH_NUM'], 0, 1) . 'xxxxxxx' . substr($r['_source']['PAR_ACCNT_MAIN_PH_NUM'],  -2).' arn_no='.$r['_source']['PAR_ACCNT_ARN'].' style="color:#000;text-decoration: none;">'.$r['_source']['PAR_ACCNT_NAME'].'</a></li>';
    		}
    	}
		}else{
			$output .= '<li class="list-group-item link-class">No record</li>';
		}
		}elseif ($s_type == 'arn_no') {

			if($q!=''){
					$query = $client->search([
					'body' => [
						// 'query' => [
					 //      'term' => [
					 //         'PAR_ACCNT_ARN.keyword'=> $q
					 //         // 'ACCNT_ARN.keyword'=> $q
					 //      ]
		   	// 			]
						'size' => 1000,
							  'query' => [
							    'bool' => [
							      'should' => [
							        [
							          'term' => [
							            'PAR_ACCNT_ARN.keyword' => [
							              'value' => $q
							            ]
							          ]
							        ],
							        [
							          'nested' => [
							            'query' => [
							              'term' => [
							                'ACCOUNT_INFO.ACCNT_ARN.keyword' => [
							                  'value' => $q
							                ]
							              ]
							            ],
							            'path' => 'ACCOUNT_INFO',
							            'inner_hits'=> [
							            ]
							          ]
							        ]
							      ]
							    ]
							  ],
							  '_source' => [
							    'includes' => [
							      'PAR_ACCNT_ARN',
							      'PAR_ACCNT_CITY_NAME',
							      'PAR_ACCNT_FLG',
							      'PAR_ACCNT_MAIN_PH_NUM',
							      'PAR_ACCNT_MERGE_ID',
							      'PAR_ACCNT_NAME',
							      'PAR_ACCNT_ROW_WID',
							      'PAR_ACCNT_SRC_ROW_ID',
							      'PAR_ACCNT_STATE',
							      'PAR_ACCNT_TYPE_CD',
							      'PAR_GOLDEN_REC_FLAG'
							    ],
							    'excludes' => [ ]
							  ],
							  'sort' => [
							    [
							      '_doc' => [
							        'order' => 'asc'
							      ]
							    ]
							  ]
					
					]
				]);
					// print_r($query);die;
			if($query['hits']['hits'][0] !=''){
				if($query['hits']['hits'][0] >=1){
				$result = $query['hits']['hits'][0];
				}

				
				if(!empty($result)){
					// print_r($result);die;
		    		// foreach($result as $r1){
		    			$name = str_replace(' ', '_', $result['_source']['PAR_ACCNT_NAME']);
		    			$output .= '<li id="'.$result['_source']['PAR_ACCNT_ARN'].'" accnt_name = '. $name .' class="list-group-item link-class list1" style=" cursor: pointer;" mob_num='.substr($result['_source']['PAR_ACCNT_MAIN_PH_NUM'], 0, 1) . 'xxxxxxx' . substr($result['_source']['PAR_ACCNT_MAIN_PH_NUM'],  -2).'><a href="javascript:void(0)" mob='.substr($result['_source']['PAR_ACCNT_MAIN_PH_NUM'], 0, 1) . 'xxxxxxx' . substr($result['_source']['PAR_ACCNT_MAIN_PH_NUM'],  -2).' arn_no='.$result['_source']['PAR_ACCNT_ARN'].'  style="color:#000;text-decoration: none;">'.$result['_source']['PAR_ACCNT_ARN'].'</a></li>';
		    		// }
		    	}else{
		    		$output .= '<li class="list-group-item link-class">No record</li>';
		    	}
			}else{
				$output .= '<li class="list-group-item link-class">No record</li>';
			}
			
		}else{
			$output .= '<li class="list-group-item link-class">No record</li>';
		}
		}elseif ($s_type == 'v_r_num') {
			
			if($q!=''){
			$query = $client1->search([
			'body' => [
				'query'=>[
				  'term'=> [
				    'VEHICLE_REGISTRATION_NUMBER.keyword'=> [
				      'value'=> $q
				    ]
				  ]
				]
			]
		]);
			
			if($query['hits']['hits'][0] >=1){
			$result = $query['hits']['hits'][0];
		}
		// print_r($result);die;
		
		$output .= '<li id="'.$query['hits']['hits'][0]['_source']['ACCNT_ARN'].'" account_name='.$query['hits']['hits'][0]['_source']['ACCNT_NAME'].' class="list-group-item link-class" style=" cursor: pointer;"><a href="javascript:void(0)" class="list" mob="xxxxxxxxxx"  arn_no='.$query['hits']['hits'][0]['_source']['ACCNT_ARN'].' style="color:#000;text-decoration: none;">'.$result['_source']['VEHICLE_REGISTRATION_NUMBER'].'</a></li>';
		
		}else{
			$output .= '<li class="list-group-item link-class">No record</li>';
		}
		}else{
			if($q!=''){
			$query = $client1->search([
			'body' => [
				'query'=>[
				  'term'=> [
				    'ASSET_NUMBER.keyword'=> [
				      'value'=> $q
				    ]
				  ]
				]
				
			]
		]);
			// print_r($query);die;
			// print_r($query['hits']['hits'][0]['inner_hits']['ASSET_INFO_1']['hits']['hits'][0]['_source']);die;
			if($query['hits']['hits'][0]['_source'] >=1){
			$result =$query['hits']['hits'][0]['_source'];
		}
		// print_r($result);die;
		$name = str_replace(' ', '_', $result['ACCNT_NAME']);
		$output .= '<li id="'.$result['ACCNT_ARN'].'" account_name='.$name.' class="list-group-item link-class" style=" cursor: pointer;"><a href="javascript:void(0)" class="list" mob='.substr($result['PAR_ACCNT_MAIN_PH_NUM'], 0, 1) . 'xxxxxxxxxx' . substr($result['PAR_ACCNT_MAIN_PH_NUM'],  -2).' arn_no='.$result['ACCNT_ARN'].' style="color:#000;text-decoration: none;">'.$result['ASSET_NUMBER'].'</a></li>';

			}else{
				$output .= '<li class="list-group-item link-class">No record</li>';
			}
		}

    	echo json_encode($output);
	}
// 
	public function p_search_gold(){
		$hosts = [URL.'parent2childntmerge/']; 
		$client = ClientBuilder::create()->setHosts($hosts)->build();
		// $area = $this->session->userdata('area');
		// $region = $this->session->userdata('region');
		$q = trim($this->input->post('name'));

		$s_type = $this->input->post('search_type');
		if($s_type == 'acc_name'){
		if($q!=''){
			$query = $client->search([
			'body' => [
				'query' => [
					'bool' => [
					'should' => [
						'match' => ['ACCNT_NAME' => $q ]
						]
					]
				]
			]
		]);
			// print_r($query);die;
			if($query['hits']['hits'] >=1){
			$result = $query['hits']['hits'];
		}
		// echo'<pre>';
		// print_r($result);die;
		if(isset($result)){
    		foreach($result as $r){

    			$name = str_replace(' ', '_', $r['_source']['ACCNT_NAME']);
    			$output .= '<li id="'.$r['_source']['ACCNT_ARN'].'" class="list-group-item link-class" style=" cursor: pointer;" accnt_name='.$name.'><a href="javascript:void(0)" class="list" mob='.substr($r['_source']['ACCNT_MAIN_PH_NUM'], 0, 1) . 'xxxxxxx' . substr($r['_source']['ACCNT_MAIN_PH_NUM'],  -2).' arn_no='.$r['_source']['ACCNT_ARN'].' style="color:#000;text-decoration: none;">'.$r['_source']['ACCNT_NAME'].'</a></li>';
    		}
    	}
		}else{
			$output .= '<li class="list-group-item link-class">No record</li>';
		}
		}elseif ($s_type == 'arn_no') {
			if($q!=''){
			$query = $client->search([
			'body' => [
				'query' => [
					'bool' => [
					'should' => [
						'match' => ['ACCNT_ARN' => $q ]
						]
					]
				]
			]
			]);
			if($query['hits']['total'] >=1){
			$result = $query['hits']['hits'];
		}
		// echo'<pre>';
		// print_r($result);
		if(isset($result)){
    		foreach($result as $r){
    			// $output .= '<li class="list-group-item link-class" id="list" mob='.substr($r['_source']['PAR_ACCNT_MAIN_PH_NUM'], 0, 1) . 'xxxxxxx' . substr($r['_source']['PAR_ACCNT_MAIN_PH_NUM'],  -2).' value='.$r['_source']['PAR_ACCNT_ARN'].'>'.$r['_source']['PAR_ACCNT_ARN'].'</li>';
    			$name = str_replace(' ', '_', $r['_source']['ACCNT_NAME']);
    			$output .= '<li id="'.$r['_source']['ACCNT_ARN'].'" class="list-group-item link-class" style=" cursor: pointer;" accnt_name='.$name.'><a href="javascript:void(0)" class="list" mob='.substr($r['_source']['ACCNT_MAIN_PH_NUM'], 0, 1) . 'xxxxxxx' . substr($r['_source']['ACCNT_MAIN_PH_NUM'],  -2).' arn_no='.$r['_source']['ACCNT_ARN'].' style="color:#000;text-decoration: none;">'.$r['_source']['ACCNT_NAME'].'</a></li>';
    		}
    	}
		}else{
			$output .= '<li class="list-group-item link-class">No record</li>';
		}
		}elseif ($s_type == 'v_r_num') {
			
		}else{

		}

	    	echo json_encode($output);
		}

	public function get_child(){
		$hosts = [URL.'parent2child,parent2childntmerge/'];
		$client = ClientBuilder::create()->setHosts($hosts)->build();
		// $client = ClientBuilder::create()->build();
		$p_id = $this->input->post('p_id');
		// print_r($p_id);die;
		if($p_id !=''){
			$query = $client->search([
				'body' => [
					'query' => [
						'bool' => [
						'should' => [
							'match' => ['_id' => $p_id]
							]
						]
					]
				]
			]);
			if($query['hits']['total'] >=1){
			$result = $query['hits']['hits'];
			}
			// print_r($result);die;
			if(isset($result)){
				$output = '';
				$i = 0;
    		foreach($result as $r){
    			$total = count($r['_source']['ACCOUNT_INFO']);
    			// print_r($total);
    			//$count .='<p style="margin-top: 22px"><strong>'.$total.'</strong></p>';
    			
    				$output .= '<input type="hidden" name="total" value='.$total.' id="total">';
    			
    				//print_r($r['_source']['ACCOUNT_INFO']);die;
    			 	
    			foreach($r['_source']['ACCOUNT_INFO'] as $c){
    				$c_name = str_replace(' ', '_', $c['ACCNT_NAME']);
    				$i++;
    				// print_r($r['_source']['PAR_ACCNT_MAIN_PH_NUM']);die;
    				$output .= '<tr class="grpInfo" style="color:#000;">
							<td>'.$i.'</td>
			                <td>'.$c['ACCNT_ARN'].'          
			                </td>
			                <td> '.($r['_source']['PAR_ACCNT_MAIN_PH_NUM'] !='' ? substr($r['_source']['PAR_ACCNT_MAIN_PH_NUM'], 0, 1) . 'xxxxxxx' . substr($r['_source']['PAR_ACCNT_MAIN_PH_NUM'],  -2): 'xxxxxxxxxx').'
			                  
			                </td>
			                <td>
			                  '.$c['ACCNT_NAME'].'
			                </td>
			                
			                <td>
			                <a href="javascript:void(0);" class="view" arn_num = '.$c['ACCNT_ARN'].' data = '.$c_name.' title="Select child"><i class="fa fa-paper-plane" aria-hidden="true" style="font-size:20px;color:#2bd7e8;"></i></a>

			         			
			                </td>
			              </tr>';
			       
    				}
    			}

    			echo json_encode($output);
    			
    		}
		}else{

		}
	}

	public function get_c_data(){
		$hosts = [URL];
		$client = ClientBuilder::create()->setHosts($hosts)->build();
		$arn = $this->input->post('arn');
			if($arn !=''){


				$query = $client->search([    
				    'body' => [
				        'query' => [
				                'match' => [ '_id' => $arn ]
				            ],
				            'size'=> 0,
				            'aggs' => [
				                'OPTY_INFO' => [
				                    'nested' => [
				                        'path' => 'OPTY_INFO'
				                    ],
				                    'aggs'=> [
				                      'opty_stage'=> [
				                        'terms'=> [
				                          'field'=> 'OPTY_INFO.OPTY_STAGE.keyword',
				                          'size'=> 10
				                        ],
				                      'aggs' => [
				                        'opty_val' => [ 'sum'=> [ 'field' => 'OPTY_INFO.OPTY_QTY' ] ]
				                    ]]

				                    ]
				                ]
				            ]
				    	]
					]);
				if($query['aggregations']['OPTY_INFO'] >=1){
				$result = $query['aggregations']['OPTY_INFO'];
				}
				foreach($result as $r){
					foreach ($r['buckets'] as $key => $value) {
						if($value['key'] =='C0'){
							$output .= '<input type="hidden" name="c0" id="c0" value='.$value['opty_val']['value'].'>';
						}
						if($value['key'] =='C1'){
							$output .= '<input type="hidden" name="c1" id="c1" value='.$value['opty_val']['value'].'>';
						}
						if($value['key'] =='C1A'){
							$output .= '<input type="hidden" name="c1a" id="c1a" value='.$value['opty_val']['value'].'>';
						}
						if($value['key'] =='C2'){
							$output .= '<input type="hidden" name="c2" id="c2" value='.$value['opty_val']['value'].'>';
						}
						if($value['key'] =='Closed Lost at C0'){
							$output .= '<input type="hidden" name="c_lost_c0" id="c_lost_c0" value='.$value['opty_val']['value'].'>';
						}
						if($value['key'] =='Closed Lost at C1'){
							$output .= '<input type="hidden" name="c_lost_c1" id="c_lost_c1" value='.$value['opty_val']['value'].'>';
						}
						if($value['key'] =='Closed Lost at C2'){
							$output .= '<input type="hidden" name="c_lost_c2" id="c_lost_c2" value='.$value['opty_val']['value'].'>';
						}
						if($value['key'] =='Closed Lost at C1A'){
							$output .= '<input type="hidden" name="c_lost_c2a" id="c_lost_c2a" value='.$value['opty_val']['value'].'>';
						}
						
					}
				}
				
				//GET Complaints
				$query1 = $client->search([
				  'body' => [
				    'query' => [
				      'term'=> [
				        '_id'=> $arn
				      ]
				    ],
				    'size'=> 0,
				    'aggs' => [
				        'countAllComplaints' => [
				            'nested' => [
				                'path' => 'COMPLAINT_INFO'
				            ],
				            'aggs'=> [
				              'countOpenComplaints'=> [
				                'filter'=> ['term'=> [
				                  'COMPLAINT_INFO.STATUS.keyword'=> 'Open'
				                ]]
				              ]
				            ]
				        ]
				    ]
				  ]
				  ]);
				 if($query1['aggregations']['countAllComplaints'] >=1){
				$result1 = $query1['aggregations']['countAllComplaints'];
				}
				
				$output .= '<input type="hidden" name="child_all_complaints" id="child_all_complaints" value='.$result1['doc_count'].'>';
				$output .= '<input type="hidden" name="child_open_complaints" id="child_open_complaints" value='.$result1['countOpenComplaints']['doc_count'].'>';
				// Average Day.
				$avg_day_query = $client->search([
					'body' => [
						'query' => [
					        'match' => [ '_id' => $arn ]
						    ],
						    'size'=> 0,
						    'aggs' => [
					        'COMPLAINT_INFO' => [
					            'nested' => [
					                'path' => 'COMPLAINT_INFO'
					            ],
					            'aggs'=> [
					              'Average_Open_Days'=> [
					                'avg'=> [
					                  'field'=> 'COMPLAINT_INFO.OPEN_DAYS'
					                ]
					              ]
					            ]
					        ]
					    ]
					]
				]);
					if($avg_day_query['aggregations']['COMPLAINT_INFO'] >=1){
					$avg_day_result = $avg_day_query['aggregations']['COMPLAINT_INFO'];
					}
					$output .= '<input type="hidden" name="avg_resolution_day" id="avg_resolution_day" value='.round($avg_day_result['Average_Open_Days']['value']).'>';
					echo json_encode($output);
				}
			}
			
			public function child_pfs_service(){
					$hosts = [URL.'assess_service,assess_sales/'];
					$client = ClientBuilder::create()->setHosts($hosts)->build();
					$arn = $this->input->post('arn');
					$query_service_sales = $client->search([
					   'body' => [
					       'query' => [
					      'term'=> [
					        '_id'=> $arn
					      ]
					    ],
					    'size'=> 0,
					    'aggs' => [
					        'ServiceInfo' => [
					            'nested' => [
					                'path' => 'PSF_SERVICE_INFO'
					            ],
					            'aggs'=> [
					                  'AverageServiceScore'=> [
					                    'avg'=> ['field'=> 'PSF_SERVICE_INFO.ASSESS_SCORE']
					                  ]
					                ]
					        ],
					        'SalesInfo' => [
					            'nested' => [
					                'path' => 'PSF_SALES_INFO'
					            ],
					            'aggs'=> [
					                  'AverageSalesScore'=> [
					                    'avg'=> ['field'=> 'PSF_SALES_INFO.ASSESS_SCORE']
					                  ]
					                ]
					        ]
					      ]  
					   ]
					]);
					if($query_service_sales['aggregations'] >=1){
					$service_sales_result = $query_service_sales['aggregations'];
					}
					
					$output .= '<p id="pfs_service" class="pfs"><strong>'.round($service_sales_result['ServiceInfo']['AverageServiceScore']['value'],2).'/5</strong></p>';
					echo json_encode($output);
				}
				public function child_pfs_sales(){
					$hosts = [URL.'assess_service,assess_sales/'];
					$client = ClientBuilder::create()->setHosts($hosts)->build();
					$arn = $this->input->post('arn');
					$query_service_sales = $client->search([
					   'body' => [
					       'query' => [
					      'term'=> [
					        '_id'=> $arn
					      ]
					    ],
					    'size'=> 0,
					    'aggs' => [
					        'ServiceInfo' => [
					            'nested' => [
					                'path' => 'PSF_SERVICE_INFO'
					            ],
					            'aggs'=> [
					                  'AverageServiceScore'=> [
					                    'avg'=> ['field'=> 'PSF_SERVICE_INFO.ASSESS_SCORE']
					                  ]
					                ]
					        ],
					        'SalesInfo' => [
					            'nested' => [
					                'path' => 'PSF_SALES_INFO'
					            ],
					            'aggs'=> [
					                  'AverageSalesScore'=> [
					                    'avg'=> ['field'=> 'PSF_SALES_INFO.ASSESS_SCORE']
					                  ]
					                ]
					        ]
					      ]  
					   ]
					]);
					if($query_service_sales['aggregations'] >=1){
					$service_sales_result = $query_service_sales['aggregations'];
					}
					
					$output .= '<p id="pfs_sales" class="pfs"><strong>'.round($service_sales_result['SalesInfo']['AverageSalesScore']['value'],2).'/5</strong></p>';
					echo json_encode($output);
				}
// --------------------------------All Parent function----------------------------------------------------
	public function get_all_parent_data(){
		$hosts = [URL];
		$client = ClientBuilder::create()->setHosts($hosts)->build();
		$par_accnt_id = $this->input->post('par_accnt_id');
		if($par_accnt_id !=''){
			//GET optyspt
			$query = $client->search([
				'body' => [
					'query' => [
					      'term'=> [
					        'PAR_ACCNT_ARN.keyword'=> $par_accnt_id
					      ]
					    ],
					    'size'=> 0,
					    'aggs' => [
					        'OPTY_INFO' => [
					            "nested" => [
					                'path' => 'OPTY_INFO'
					            ],
					            'aggs'=> [
					              'opty_stage'=> [
					                'terms'=> [
					                  'field'=> 'OPTY_INFO.OPTY_STAGE.keyword'
					                ],
					              'aggs' => [
					                'opty_val' => [ 'sum'=> [ 'field' => 'OPTY_INFO.OPTY_QTY' ] ]
					            ]]
					            ]
					        ]
					    ]
					]
				]);
			if($query['aggregations']['OPTY_INFO'] >=1){
				$result = $query['aggregations']['OPTY_INFO'];
			}

			foreach($result as $r){

					foreach ($r['buckets'] as $value) {
						if($value['key'] =='C0'){
							$output .= '<input type="hidden" name="p_c3" id="p_c0" value='.$value['opty_val']['value'].'>';
						}
						
						if($value['key'] =='C1'){
							$output .= '<input type="hidden" name="p_c1" id="p_c1" value='.$value['opty_val']['value'].'>';
						}
						
						if($value['key'] =='C1A'){
							$output .= '<input type="hidden" name="p_c1A" id="p_c1A" value='.$value['opty_val']['value'].'>';
						}
						
						if($value['key'] =='C2'){
							$output .= '<input type="hidden" name="p_c2" id="p_c2" value='.$value['opty_val']['value'].'>';
						}
						
						if($value['key'] =='Closed Lost at C0'){
							$output .= '<input type="hidden" name="p_lost_c0" id="p_lost_c0" value='.$value['opty_val']['value'].'>';
						}
						
						if($value['key'] =='Closed Lost at C1'){
							
							$output .= '<input type="hidden" name="p_lost_c1" id="p_lost_c1" value='.$value['opty_val']['value'].'>';
						}
						
						if($value['key'] =='Closed Lost at C1A'){
							$output .= '<input type="hidden" name="p_lost_c1" id="p_lost_c1A" value='.$value['opty_val']['value'].'>';
						}
						
						if($value['key'] =='Closed Lost at C2'){
							
							$output .= '<input type="hidden" name="p_lost_c2" id="p_lost_c2" value='.$value['opty_val']['value'].'>';
						}
					}
				}
				//GET Complaints
				$query = $client->search([
				  'body' => [
				    'query' => [
				      'term'=> [
				        'PAR_ACCNT_ARN.keyword'=> $par_accnt_id
				      ]
				    ],
				    'size'=> 0,
				    'aggs' => [
				        'countAllComplaints' => [
				            'nested' => [
				                'path' => 'COMPLAINT_INFO'
				            ],
				            'aggs'=> [
				              'countOpenComplaints'=> [
				                'filter'=> ['term'=> [
				                  'COMPLAINT_INFO.STATUS.keyword'=> 'Open'
				                ]]
				              ]
				            ]
				        ]
				    ]
				  ]
				  ]);
				 if($query['aggregations']['countAllComplaints'] >=1){
				$result1 = $query['aggregations']['countAllComplaints'];
				}

				//print_r($result1['countOpenComplaints']['doc_count']);
				
				$output .= '<input type="hidden" name="all_complaints" id="all_complaints" value='.$result1['doc_count'].'>';
				$output .= '<input type="hidden" name="open_complaints" id="open_complaints" value='.$result1['countOpenComplaints']['doc_count'].'>';

				// Average Day.
				$avg_day_query = $client->search([
					'body' => [
						'query' => [
					        'match' => [ 'PAR_ACCNT_ARN.keyword' => $par_accnt_id ]
						    ],
						    'size'=> 0,
						    'aggs' => [
					        'COMPLAINT_INFO' => [
					            'nested' => [
					                'path' => 'COMPLAINT_INFO'
					            ],
					            'aggs'=> [
					              'Average_Open_Days'=> [
					                'avg'=> [
					                  'field'=> 'COMPLAINT_INFO.OPEN_DAYS'
					                ]
					              ]
					            ]
					        ]
					    ]
					]
				]);
				if($avg_day_query['aggregations']['COMPLAINT_INFO'] >=1){
				$avg_day_result = $avg_day_query['aggregations']['COMPLAINT_INFO'];
				}
				if($avg_day_result['Average_Open_Days']['value'] != ''){
					$output .= '<input type="hidden" name="p_avg_resolution_day" id="p_avg_resolution_day" value='.round($avg_day_result['Average_Open_Days']['value']).'>';	
				}
			echo json_encode($output);
		}

	}

	function problem_area(){
		$hosts = [URL.'complaints'];
		$client = ClientBuilder::create()->setHosts($hosts)->build();
		$par_accnt_id = $this->input->post('par_accnt_id');
		$arn = $this->input->post('arn');
		//Get All Problem Area Analysis
		if($par_accnt_id !=''){
			$query_problem_area_analysis = $client->search([
				'body' => [
				  'query' => [
				      'term'=> [
				        'PAR_ACCNT_ARN.keyword'=> $par_accnt_id
				      ]
				    ],
				    'size'=> 0,
				    'aggs' => [
				        'countAllComplaints' => [
				            'nested' => [
				                'path' => 'COMPLAINT_INFO'
				            ],
				            'aggs'=> [
				                  'Problem_area'=> [
				                   'terms'=> ['field'=> 'COMPLAINT_INFO.PROBLEM_AREA.keyword']
				                ]
				            ]
				        ]
				    ]
				  ]
				]);
			}else{
				$query_problem_area_analysis = $client->search([
				'body' => [
				  'query' => [
				      'term'=> [
				        '_id'=> $arn
				      ]
				    ],
				    'size'=> 0,
				    'aggs' => [
				        'countAllComplaints' => [
				            'nested' => [
				                'path' => 'COMPLAINT_INFO'
				            ],
				            'aggs'=> [
				                  'Problem_area'=> [
				                   'terms'=> ['field'=> 'COMPLAINT_INFO.PROBLEM_AREA.keyword']
				                ]
				            ]
				        ]
				    ]
				  ]
				]);
			}
				
				if($query_problem_area_analysis['aggregations']['countAllComplaints'] >=1){
				$problem_area_analysis_result = $query_problem_area_analysis['aggregations']['countAllComplaints'];
				}
				$data = $problem_area_analysis_result['Problem_area']['buckets'];
				echo json_encode($data);
			}

			//All Loyalty Point Analysis
			public function all_loyalty_point_analysis(){
				// print_r($_POST);die;
				$hosts = [URL.'accrloyalty,rdmloyalty/'];
				$client = ClientBuilder::create()->setHosts($hosts)->build();
				$par_accnt_id = $this->input->post('par_accnt_id');
				$arn = $this->input->post('arn');
				if($par_accnt_id !=''){
					$query_loyalty_point_analysis = $client->search([
			    'body' => [
			      'query' => [
				      'term'=> [
				        'PAR_ACCNT_ARN.keyword'=> $par_accnt_id
				      ]
				    ],
				    'size'=> 0,
				    'aggs' => [
				        'RdmloyaltyInfo' => [
				            'nested' => [
				                'path' => 'RDM_LOYALTY_INFO'
				            ],
				            'aggs'=> [
				                  'RedemptionValue'=> [
				                    'sum'=> ['field'=> 'RDM_LOYALTY_INFO.REDEEMED_VALUE']
				                  ]
				                ]
				        ],
				        'AccrloyaltyInfo' => [
				            'nested' => [
				                'path' => 'ACCR_LOYALTY_INFO'
				            ],
				            'aggs'=> [
				                  'AccrualValue'=> [
				                    'sum'=> ['field'=> 'ACCR_LOYALTY_INFO.ACCRUALED_VALUE']
				                  ]
				                ]
				        ]
				    ] 
			    ]
			  ]);
			}else{
				$query_loyalty_point_analysis = $client->search([
			    'body' => [
			      'query' => [
				      'term'=> [
				        '_id'=> $arn
				      ]
				    ],
				    'size'=> 0,
				    'aggs' => [
				        'RdmloyaltyInfo' => [
				            'nested' => [
				                'path' => 'RDM_LOYALTY_INFO'
				            ],
				            'aggs'=> [
				                  'RedemptionValue'=> [
				                    'sum'=> ['field'=> 'RDM_LOYALTY_INFO.REDEEMED_VALUE']
				                  ]
				                ]
				        ],
				        'AccrloyaltyInfo' => [
				            'nested' => [
				                'path' => 'ACCR_LOYALTY_INFO'
				            ],
				            'aggs'=> [
				                  'AccrualValue'=> [
				                    'sum'=> ['field'=> 'ACCR_LOYALTY_INFO.ACCRUALED_VALUE']
				                  ]
				                ]
				        ]
				    ] 
			    ]
			  ]);
			}
				
				// print_r($query_loyalty_point_analysis['aggregations']['RdmloyaltyInfo']);

			if($query_loyalty_point_analysis['aggregations']['RdmloyaltyInfo'] >=1){
				$loyalty_point_analysis_result = $query_loyalty_point_analysis['aggregations']['RdmloyaltyInfo'];
			}
			// print_r($loyalty_point_analysis_result['RedemptionValue']['value']);
			if($query_loyalty_point_analysis['aggregations']['AccrloyaltyInfo'] >=1){
				$loyalty_point_analysis_result1 = $query_loyalty_point_analysis['aggregations']['AccrloyaltyInfo'];
			}
			$acc_value = $loyalty_point_analysis_result1['AccrualValue']['value'];
			$red_value = $loyalty_point_analysis_result['RedemptionValue']['value'];
			$bala_value = $acc_value - $red_value;
			if($acc_value != 0){
				$result = array(array(
				'label'=> "Accrual",
				'y'=>$acc_value
			),array(
				'label'=>'Redemption',
				'y'=>$red_value
				
			),array(
				'label'=>'Balance',
				'y'=>$bala_value
				
			));
			}else{
				$result = 'invalied';
			}
			

			echo json_encode($result);

			}

			public function intended_application(){
				$hosts = [URL.'invoice/'];
				$client = ClientBuilder::create()->setHosts($hosts)->build();
				$par_accnt_id = $this->input->post('par_accnt_id');
				$arn = $this->input->post('arn');
				if($par_accnt_id !=''){
					$intended_application_query = $client->search([
				          'body' => [
				          'query' => [
				              'term'=> [
				                'PAR_ACCNT_ARN.keyword'=> $par_accnt_id
				              ]
				            ],
				            'size'=> 0,
				            'aggs' => [
				                'countofInvoices' => [
				                    'nested' => [
				                        'path' => 'INVOICE_INFO'
				                    ],
				                    'aggs'=> [
				                          'IntendedApplications'=> [
				                            'terms'=> ['field'=> 'INVOICE_INFO.INTENDED_APPLICATION.keyword'
				                            ]
				                          ]
				                        ]
				                	]
				            	]
				      		]	
				  		]);
				}else{
					$intended_application_query = $client->search([
				          'body' => [
				          'query' => [
				              'term'=> [
				                '_id'=> $arn
				              ]
				            ],
				            'size'=> 0,
				            'aggs' => [
				                'countofInvoices' => [
				                    'nested' => [
				                        'path' => 'INVOICE_INFO'
				                    ],
				                    'aggs'=> [
				                          'IntendedApplications'=> [
				                            'terms'=> ['field'=> 'INVOICE_INFO.INTENDED_APPLICATION.keyword'
				                            ]
				                          ]
				                        ]
				                	]
				            	]
				      		]	
				  		]);
					}
					// print_r($intended_application_query);
						if($intended_application_query['aggregations']['countofInvoices'] >=1){
						$intended_application_result = $intended_application_query['aggregations']['countofInvoices'];
						}

						echo json_encode($intended_application_result['IntendedApplications']['buckets']);
					}

				public function psf_service(){
					$hosts = [URL.'assess_service,assess_sales/'];
					$client = ClientBuilder::create()->setHosts($hosts)->build();
					$par_accnt_id = $this->input->post('par_accnt_id');
					$query_service_sales = $client->search([
					   'body' => [
					       'query' => [
					      'term'=> [
					        'PAR_ACCNT_ARN.keyword'=> $par_accnt_id
					      ]
					    ],
					    'size'=> 0,
					    'aggs' => [
					        'ServiceInfo' => [
					            'nested' => [
					                'path' => 'PSF_SERVICE_INFO'
					            ],
					            'aggs'=> [
					                  'AverageServiceScore'=> [
					                    'avg'=> ['field'=> 'PSF_SERVICE_INFO.ASSESS_SCORE']
					                  ]
					                ]
					        ],
					        'SalesInfo' => [
					            'nested' => [
					                'path' => 'PSF_SALES_INFO'
					            ],
					            'aggs'=> [
					                  'AverageSalesScore'=> [
					                    'avg'=> ['field'=> 'PSF_SALES_INFO.ASSESS_SCORE']
					                  ]
					                ]
					        ]
					      ]  
					   ]
					]);
					if($query_service_sales['aggregations'] >=1){
					$service_sales_result = $query_service_sales['aggregations'];
					}
					
					$output .= '<p id="pfs_service" class="pfs"><strong>'.round($service_sales_result['ServiceInfo']['AverageServiceScore']['value'],2).'/5</strong></p>';
					echo json_encode($output);
				}
				public function psf_sales(){
					$hosts = [URL.'assess_service,assess_sales/'];
					$client = ClientBuilder::create()->setHosts($hosts)->build();
					$par_accnt_id = $this->input->post('par_accnt_id');
					$query_service_sales = $client->search([
					   'body' => [
					       'query' => [
					      'term'=> [
					        'PAR_ACCNT_ARN.keyword'=> $par_accnt_id
					      ]
					    ],
					    'size'=> 0,
					    'aggs' => [
					        'ServiceInfo' => [
					            'nested' => [
					                'path' => 'PSF_SERVICE_INFO'
					            ],
					            'aggs'=> [
					                  'AverageServiceScore'=> [
					                    'avg'=> ['field'=> 'PSF_SERVICE_INFO.ASSESS_SCORE']
					                  ]
					                ]
					        ],
					        'SalesInfo' => [
					            'nested' => [
					                'path' => 'PSF_SALES_INFO'
					            ],
					            'aggs'=> [
					                  'AverageSalesScore'=> [
					                    'avg'=> ['field'=> 'PSF_SALES_INFO.ASSESS_SCORE']
					                  ]
					                ]
					        ]
					      ]  
					   ]
					]);
					// print_r($query_service_sales);
					if($query_service_sales['aggregations'] >=1){
					$service_sales_result = $query_service_sales['aggregations'];
					}
					
					$output .= '<p id="pfs_sales" class="pfs"><strong>'.round($service_sales_result['SalesInfo']['AverageSalesScore']['value'],2).'/5</strong></p>';
					echo json_encode($output);
				}
				
			public function invoice_amount(){
				$hosts = [URL.'invoice/'];
				$client = ClientBuilder::create()->setHosts($hosts)->build();
				$par_accnt_id = $this->input->post('par_accnt_id');
				$arn = $this->input->post('arn');
				if($par_accnt_id !=''){
					$query_invoice_amount = $client->search([
					    'body' => [
					        'query' => [
					      'term'=> [
					        'PAR_ACCNT_ARN.keyword'=> $par_accnt_id
					      ]
					    ],
					    'size'=> 0,
					    'aggs' => [
					        'countofInvoices' => [
					            'nested' => [
					                'path' => 'INVOICE_INFO'
					            ],
					            'aggs'=> [
					                  'InvoiceAmount'=> [
					                    'sum'=> ['field'=> 'INVOICE_INFO.INVOICE_AMOUNT']
					                    ]
					                ]
					            ]   
					        ]    
					    ]
					]);
				}else{
					$query_invoice_amount = $client->search([
				    'body' => [
				        'query' => [
				      'term'=> [
				        '_id'=> $arn
				      ]
				    ],
				    'size'=> 0,
				    'aggs' => [
				        'countofInvoices' => [
				            'nested' => [
				                'path' => 'INVOICE_INFO'
				            ],
				            'aggs'=> [
				                  'InvoiceAmount'=> [
				                    'sum'=> ['field'=> 'INVOICE_INFO.INVOICE_AMOUNT']
				                    ]
				                ]
				            ]   
				        ]    
				    ]
				]);
				}

				// print_r($query_invoice_amount['aggregations']['countofInvoices']);die;
				
			if($query_invoice_amount['aggregations']['countofInvoices'] >=1){
					$invoice_result = $query_invoice_amount['aggregations']['countofInvoices'];
				}
				
				// $output .= '<p style="color: #fff; text-align: center;font-size: 1em;margin-top: 25px;"><b>&#8377; '.$invoice_result['InvoiceAmount']['value'].'</b></p>';
				$output = $invoice_result['InvoiceAmount']['value'];
				echo json_encode($output);
				
			}

			//Financier Analysis
			public function financier_analysis(){
				$hosts = [URL.'invoice/'];
				$client = ClientBuilder::create()->setHosts($hosts)->build();
				$par_accnt_id = $this->input->post('par_accnt_id');
				$arn = $this->input->post('arn');
				if($par_accnt_id !=''){
					$query_financier_analysis = $client->search([
				  'body' => [
				  	'query' => [
					      'term'=> [
					        'PAR_ACCNT_ARN.keyword'=> $par_accnt_id
					      ]
					    ],
					    'size'=> 0,
					    'aggs' => [
					        'countofInvoices' => [
					            'nested' => [
					                'path' => 'INVOICE_INFO'
					            ],
					            'aggs'=> [
					                  'FINANCIER_ANALYSIS'=> [
					                    'terms'=> ['field'=> 'INVOICE_INFO.FINANCIER.keyword'            
					                    ]
					                ]
					            ]
					        ]
					    ]
				  ]
				]);
				}else{
					$query_financier_analysis = $client->search([
				  'body' => [
				    'query' => [
					      'term'=> [
					        '_id'=> $arn
					      ]
					    ],
					    'size'=> 0,
					    'aggs' => [
					        'countofInvoices' => [
					            'nested' => [
					                'path' => 'INVOICE_INFO'
					            ],
					            'aggs'=> [
					                  'FINANCIER_ANALYSIS'=> [
					                    'terms'=> ['field'=> 'INVOICE_INFO.FINANCIER.keyword'            
					                    ]
					                ]
					            ]
					        ]
					    ]
				  ]
				]);
				}
				
				if($query_financier_analysis['aggregations']['countofInvoices'] >=1){
				$financier_analysis_result = $query_financier_analysis['aggregations']['countofInvoices'];
				}
				//print_r($financier_analysis_result['FINANCIER_ANALYSIS']['buckets']);
				$data = $financier_analysis_result['FINANCIER_ANALYSIS']['buckets'];
				foreach($data as $d){
					$d1[] = $d['doc_count'];
				}
				// $test = array_sum($data);
				// print_r(array_sum($d1));
				// print_r($test);
				echo json_encode($data);
			}

			public function c3_count(){
				$hosts = [URL.'invoice/'];
				$client = ClientBuilder::create()->setHosts($hosts)->build();
				$par_accnt_id = $this->input->post('par_accnt_id');
				$arn = $this->input->post('arn');
				if($par_accnt_id !=''){
					$query_total_c3 = $client->search([
				    'body' => [
				    	'query' => [
					        'term'=> [
					            'PAR_ACCNT_ARN.keyword'=> $par_accnt_id
					        ]
					    ],
					    'size'=> 0,
					    'aggs' => [
					        'INVOICE_INFO' => [
					            'nested' => [
					                'path' => 'INVOICE_INFO'
					            ]
					            ]]
				    	]
					]);
				}else{
					$query_total_c3 = $client->search([
					    'body' => [
					    	'query' => [
						        'term'=> [
						            '_id'=> $arn
						        ]
						    ],
						    'size'=> 0,
						    'aggs' => [
						        'INVOICE_INFO' => [
						            'nested' => [
						                'path' => 'INVOICE_INFO'
						            ]
						        ]
						    ]
				 
					    ]
					]);
				}
				// print_r($query_total_c3['aggregations']['INVOICE_INFO']);die;
				$output = $query_total_c3['aggregations']['INVOICE_INFO']['doc_count'];

				echo json_encode($output);
			}


			public function direct_billing() {
				$hosts = [URL.'asset/'];
				$client = ClientBuilder::create()->setHosts($hosts)->build();
				$par_accnt_id = $this->input->post('par_accnt_id');
				$arn = $this->input->post('arn');
				if($par_accnt_id !=''){
					$query_direct_billing = $client->search([
				    'body' => [
				    	'query' => [
				               'term'=> [
				                 'PAR_ACCNT_ARN.keyword'=> $par_accnt_id
				               ]
				             ],
				             'size'=> 0,
				             'aggs' => [
				                 'ASSET_INFO' => [
				                     'nested' => [
				                         'path' => 'ASSET_INFO'
				                     ],
				                     'aggs'=> [
				                       'filter_type'=> [
				                         'filter'=> ['term'=> [
				                           'ASSET_INFO.STATUS.keyword'=> 'Sold - Direct Billing'
				                         ]],
				                     'aggs'=> [
				                       'SoldDirectBilling'=> [
				                         'terms'=> [
				                           'field'=> 'ASSET_INFO.STATUS.keyword'
				                         ]]
				                     ]
				                       ]
				                     ]
				                 ]
				             ]   
				    	]
					]);
				}else{
					$query_direct_billing = $client->search([
					    'body' => [
					    	'query' => [
				               'term'=> [
				                 '_id'=> $arn
				               ]
				             ],
				             'size'=> 0,
				             'aggs' => [
				                 'ASSET_INFO' => [
				                     'nested' => [
				                         'path' => 'ASSET_INFO'
				                     ],
				                     'aggs'=> [
				                       'filter_type'=> [
				                         'filter'=> ['term'=> [
				                           'ASSET_INFO.STATUS.keyword'=> 'Sold - Direct Billing'
				                         ]],
				                     'aggs'=> [
				                       'SoldDirectBilling'=> [
				                         'terms'=> [
				                           'field'=> 'ASSET_INFO.STATUS.keyword'
				                         ]]
				                     ]
				                       ]
				                     ]
				                 ]
				             ] 
					    ]
					]);
				}
				// print_r($query_direct_billing['aggregations']['ASSET_INFO']);die;
				
			if($query_direct_billing['aggregations']['ASSET_INFO'] >=1){
					$total_direct_billing_result = $query_direct_billing['aggregations']['ASSET_INFO'];
					if($total_direct_billing_result['filter_type']['SoldDirectBilling']['buckets'] >=1){
							$total_direct_billing_result1 = $total_direct_billing_result['filter_type']['SoldDirectBilling']['buckets'];
					}
				}
				$output = $total_direct_billing_result1[0]['doc_count'];
				echo json_encode($output);
			}

			public function jcServiceAnalysis(){
				$hosts = [URL.'orders/'];
				$client = ClientBuilder::create()->setHosts($hosts)->build();
				$par_accnt_id = $this->input->post('par_accnt_id');
				$arn = $this->input->post('arn');
				if($par_accnt_id !=''){
					// echo'parent';
					$query_jc_service_analysis = $client->search([
					    'body' => [
					    	'query' => [
					      'term'=> [
					        'PAR_ACCNT_ARN.keyword'=> $par_accnt_id
					      ]
					    ],
					    'size'=> 0,
					    'aggs' => [
					        'ORDER_INFO' => [
					            'nested' => [
					                'path' => 'ORDER_INFO'
					            ],
					              
					            'aggs' => [
					                'JCAnalisys' => [ 'terms'=> [ 'field' => 'ORDER_INFO.SR_SR_CAT_TYPE_CD.keyword' ] ]
					           		]
					           	]
					        ]
					    ]
					]);
				}else{
					// echo'child';die;
					$query_jc_service_analysis = $client->search([
					    'body' => [
					    	'query' => [
					      'term'=> [
					        '_id'=> $arn
					      ]
					    ],
					    'size'=> 0,
					    'aggs' => [
					        'ORDER_INFO' => [
					            'nested' => [
					                'path' => 'ORDER_INFO'
					            ],
					              
					            'aggs' => [
					                'JCAnalisys' => [ 'terms'=> [ 'field' => 'ORDER_INFO.SR_SR_CAT_TYPE_CD.keyword' ] ]
					           		]
					           	]
					        ]
					    ]
					]);
				}
				// print_r($query_jc_service_analysis['aggregations']['ORDER_INFO']);die;
				if($query_jc_service_analysis['aggregations']['ORDER_INFO'] >=1){
					$jc_service_analysis_result = $query_jc_service_analysis['aggregations']['ORDER_INFO'];
				}
				echo json_encode($jc_service_analysis_result['JCAnalisys']['buckets']);

				
			}

			public function openjc(){
				$hosts = [URL.'orders/'];
				$client = ClientBuilder::create()->setHosts($hosts)->build();
				$par_accnt_id = $this->input->post('par_accnt_id');
				$arn = $this->input->post('arn');
				if($par_accnt_id !=''){
					$query_jc_open = $client->search([
				        'body' => [
				            'query' => [
				          'term'=> [
				            'PAR_ACCNT_ARN.keyword'=> $par_accnt_id
				          ]
				        ],
				        'size'=> 0,
				        'aggs' => [
				            'ORDER_INFO' => [
				                'nested' => [
				                    'path' => 'ORDER_INFO'
				                ],
				                'aggs'=> [
				                  'filter_type'=> [
				                    'filter'=> ['term'=> [
				                      'ORDER_INFO.STATUS_CD.keyword'=> 'Open'
				                    ]],
				                'aggs'=> [
				                  'comp_status'=> [
				                    'terms'=> [
				                      'field'=> 'ORDER_INFO.STATUS_CD.keyword'
				                    ]]
				                ]
				                  ]
				                ]
				            ]
				        ]
				    ]
				]);
				}else{
					$query_jc_open = $client->search([
				        'body' => [
				            'query' => [
				          'term'=> [
				            '_id'=> $arn
				          ]
				        ],
				        'size'=> 0,
				        'aggs' => [
				            'ORDER_INFO' => [
				                'nested' => [
				                    'path' => 'ORDER_INFO'
				                ],
				                'aggs'=> [
				                  'filter_type'=> [
				                    'filter'=> ['term'=> [
				                      'ORDER_INFO.STATUS_CD.keyword'=> 'Open'
				                    ]],
				                'aggs'=> [
				                  'comp_status'=> [
				                    'terms'=> [
				                      'field'=> 'ORDER_INFO.STATUS_CD.keyword'
				                    ]]
				                ]
				                  ]
				                ]
				            ]
				        ]
				    ]
				]);
				}

				if($query_jc_open['aggregations']['ORDER_INFO'] >=1){
					$jc_open_result = $query_jc_open['aggregations']['ORDER_INFO'];
				}
				foreach ($jc_open_result['filter_type']['comp_status'] as $key => $value) {
					foreach ($value as $key1 => $value1) {
						$data[] = $value;
					}
				}

				$output = $data[0][0]['doc_count'];
					echo json_encode($output);
				// echo json_encode($data[0][0]['doc_count']);
			}


			public function bandhuapp_jc(){
				$hosts = [URL.'bandhuapp_jc/'];
				$client = ClientBuilder::create()->setHosts($hosts)->build();
				$par_accnt_id = $this->input->post('par_accnt_id');
				// print_r($par_accnt_id);die;
				$arn = $this->input->post('arn');
				if($par_accnt_id !=''){

					$query_bandhu_jc = $client->search([
						'body' => [
							'query' => [
						      'term'=> [
						        'PAR_ACCNT_ARN.keyword'=> $par_accnt_id
						        ]],
						      'size'=> 0,
						      'aggs' => [
						      'JOBCARD_INFO' => [
						      'nested' => [
						      'path' => 'JOBCARD_INFO'
						        
						        ]
						      ]
						    ]
						]
					]);
				}else{
					$query_bandhu_jc = $client->search([
						'body' => [
							'query' => [
						      'term'=> [
						        '_id'=> $arn
						        ]],
						      'size'=> 0,
						      'aggs' => [
						      'JOBCARD_INFO' => [
						      'nested' => [
						      'path' => 'JOBCARD_INFO'
						        
						        ]
						      ]
						    ]
						]
					]);
					
				}
				// print_r($query_bandhu_jc['aggregations']['JOBCARD_INFO']['doc_count']);die;
				if($query_bandhu_jc['aggregations']['JOBCARD_INFO'] >=1){
					$bandhu_jc_result = $query_bandhu_jc['aggregations']['JOBCARD_INFO'];
					}
					// print_r($bandhu_jc_result);die;
					$output = $bandhu_jc_result['doc_count'];
					echo json_encode($output);
			}

			

			public function totaljc(){
				$hosts = [URL.'orders/'];
				$client = ClientBuilder::create()->setHosts($hosts)->build();
				$par_accnt_id = $this->input->post('par_accnt_id');
				// print_r($par_accnt_id );die;
				$arn = $this->input->post('arn');
				if($par_accnt_id !=''){
					$query_total_jc = $client->search([
				        'body' => [
				        	'query' => [
							        'term'=> [
							            'PAR_ACCNT_ARN.keyword'=> $par_accnt_id
							        ]
							    ],
							    'size'=> 0,
							    'aggs' => [
							        'ORDER_INFO' => [
							            'nested' => [
							                'path' => 'ORDER_INFO'
							            ]
							        ]
							    ]
				            ]
				        ]);
				}else{
					$query_total_jc = $client->search([
				        'body' => [
				        	'query' => [
							        'term'=> [
							            '_id'=> $arn
							        ]
							    ],
							    'size'=> 0,
							    'aggs' => [
							        'ORDER_INFO' => [
							            'nested' => [
							                'path' => 'ORDER_INFO'
							            ]
							        ]
							    ]
				            ]
				        ]);
					}
					// print_r($query_total_jc);die;
					if($query_total_jc['aggregations']['ORDER_INFO'] >=1){
					$total_jc_result = $query_total_jc['aggregations']['ORDER_INFO'];
					}
					// print_r($total_jc_result);
					$output = $total_jc_result['doc_count'];
					echo json_encode($output);
				}
				
				public function spares_revenue(){
				$hosts = [URL.'invoice_revenue/'];
				$client = ClientBuilder::create()->setHosts($hosts)->build();
				$par_accnt_id = $this->input->post('par_accnt_id');
				$arn = $this->input->post('arn');
				if($par_accnt_id !=''){
					$query_spares_revenue = $client->search([
						'body' => [
							'query' => [
							      'term'=> [
							        'PAR_ACCNT_ARN.keyword'=> $par_accnt_id
							      ]
							    ],
							    'size'=> 0,
							    'aggs' => [
							        'InvoiceInfo' => [
							            'nested' => [
							                'path' => 'INV_REV_INFO'
							            ],
							            'aggs'=> [
							                  'Lab_Revenue'=> [
							                    'sum'=> ['field'=> 'INV_REV_INFO.LAB_REVENUE']
							                  ],
							                  'SPARES_REVENUE'=> [
							                    'sum'=> [
							                      'field'=> 'INV_REV_INFO.CLC_SPARES_REVENUE'
							                    ]
							                  ]
							             ]
							        ]
							    ]
						]
					]);
				}else{
					$query_spares_revenue = $client->search([
						'body' => [
							'query' => [
							      'term'=> [
							        '_id'=> $arn
							      ]
							    ],
							    'size'=> 0,
							    'aggs' => [
							        'InvoiceInfo' => [
							            'nested' => [
							                'path' => 'INV_REV_INFO'
							            ],
							            'aggs'=> [
							                  'Lab_Revenue'=> [
							                    'sum'=> ['field'=> 'INV_REV_INFO.LAB_REVENUE']
							                  ],
							                  'SPARES_REVENUE'=> [
							                    'sum'=> [
							                      'field'=> 'INV_REV_INFO.CLC_SPARES_REVENUE'
							                    ]
							                  ]
							             ]
							        ]
							    ]
						]
					]);
				}

				if($query_spares_revenue['aggregations']['InvoiceInfo'] >=1){
					$spares_revenue_result = $query_spares_revenue['aggregations']['InvoiceInfo'];
				}
				if($spares_revenue_result['SPARES_REVENUE']['value'] !=""){
					$output = round($spares_revenue_result['SPARES_REVENUE']['value'],2);
				}else{
					$output = 0;
				}
				

				echo json_encode($output);
			}
	
	public function jc_revenue(){
		$hosts = [URL.'invoice_revenue/'];
		$client = ClientBuilder::create()->setHosts($hosts)->build();
		$par_accnt_id = $this->input->post('par_accnt_id');
		$arn = $this->input->post('arn');
		if($par_accnt_id !=''){
			$query_jc_revenue = $client->search([
				'body' => [
					'query' => [
					      'term'=> [
					        'PAR_ACCNT_ARN.keyword'=> $par_accnt_id
					      ]
					    ],
					    'size'=> 0,
					    'aggs' => [
					        'InvoiceInfo' => [
					            'nested' => [
					                'path' => 'INV_REV_INFO'
					            ],
					            'aggs'=> [
					                  'Lab_Revenue'=> [
					                    'sum'=> ['field'=> 'INV_REV_INFO.LAB_REVENUE']
					                  ],
					                  'SPARES_REVENUE'=> [
					                    'sum'=> [
					                      'field'=> 'INV_REV_INFO.CLC_SPARES_REVENUE'
					                    ]
					                  ]
					             ]
					        ]
					    ]
				]
			]);
		}else{
			$query_jc_revenue = $client->search([
				'body' => [
					'query' => [
					      'term'=> [
					        '_id'=> $arn
					      ]
					    ],
					    'size'=> 0,
					    'aggs' => [
					        'InvoiceInfo' => [
					            'nested' => [
					                'path' => 'INV_REV_INFO'
					            ],
					            'aggs'=> [
					                  'Lab_Revenue'=> [
					                    'sum'=> ['field'=> 'INV_REV_INFO.LAB_REVENUE']
					                  ],
					                  'SPARES_REVENUE'=> [
					                    'sum'=> [
					                      'field'=> 'INV_REV_INFO.CLC_SPARES_REVENUE'
					                    ]
					                  ]
					             ]
					        ]
					    ]
				]
			]);
		}
		if($query_jc_revenue['aggregations']['InvoiceInfo'] >=1){
			$jc_revenue_result = $query_jc_revenue['aggregations']['InvoiceInfo'];
		}
		// print_r($jc_revenue_result);
		if($jc_revenue_result['Lab_Revenue']['value'] !=''){
			$output = round($jc_revenue_result['Lab_Revenue']['value'],2);
		}else{
			$output = 0;
		}
		

		echo json_encode($output);

	}

	public function total_vehicles(){
		$hosts = [URL.'orders/'];
		$client = ClientBuilder::create()->setHosts($hosts)->build();
		$par_accnt_id = $this->input->post('par_accnt_id');
		$arn = $this->input->post('arn');
		if($par_accnt_id !=''){
			$query_total_vehicles = $client->search([
				'body' => [
					'query'=> [
					    'term'=> [
					      'PAR_ACCNT_ARN.keyword'=> $par_accnt_id
					    ]
					  ],
					  'size'=> 0,
					  'aggs'=> [
					    'ORDER_INFO'=> [
					      'nested'=> [
					        'path'=> 'ORDER_INFO'
					      ],
					      'aggs'=> [
					        'Distinct_Chassis'=> [
					          'cardinality'=> [
					            'field'=> 'ORDER_INFO.SR_ASSET_NUM.keyword'
					          ]
					        ]
					      ]
					    ]
					  ]
				]
			]);
		}else{
			$query_total_vehicles = $client->search([
				'body' => [
					'query'=> [
				    'term'=> [
				      '_id'=> $arn
				    ]
				  ],
				  'size'=> 0,
				  'aggs'=> [
				    'ORDER_INFO'=> [
				      'nested'=> [
				        'path'=> 'ORDER_INFO'
				      ],
				      'aggs'=> [
				        'Distinct_Chassis'=> [
				          'cardinality'=> [
				            'field'=> 'ORDER_INFO.SR_ASSET_NUM.keyword'
				          ]
				        ]
				      ]
				    ]
				  ]
				]
			]);
		}
		// print_r($query_total_vehicles);
		if($query_total_vehicles['aggregations']['ORDER_INFO'] >=1){
			$total_vehicles_result = $query_total_vehicles['aggregations']['ORDER_INFO'];
		}
		
		$output = $total_vehicles_result['Distinct_Chassis']['value'];

		echo json_encode($output);
	}

	public function total_revenue(){
		$hosts = [URL.'invoice_revenue,invoice/'];
		$client = ClientBuilder::create()->setHosts($hosts)->build();
		$par_accnt_id = $this->input->post('par_accnt_id');
		$arn = $this->input->post('arn');
		if($par_accnt_id !=''){
			// echo'ddd';die;
			$query_total_revenue = $client->search([
				'body' => [
					'query' => [
				      'term'=> [
				      	'PAR_ACCNT_ARN.keyword'=> $par_accnt_id
				        // '_id'=> 'AR02-15-128743280688'
				      ]
				    ],
				    'size'=> 0,
				    'aggs' => [
				        'spares_&_labour_revunue' => [
				            'nested' => [
				                'path' => 'INV_REV_INFO'
				            ],
				            'aggs'=> [
				                  'Total_SPARES_Ammount'=> [
				                    'sum'=> ['field'=> 'INV_REV_INFO.CLC_SPARES_REVENUE']
				                  ],
				                  'Total_Lab_Ammount'=>
				                  ['sum'=> [
				                    'field'=> 'INV_REV_INFO.CLC_LAB_REVENUE'
				                  ]]
				                ]
				        ],
				        'Invoice_Ammount' => [
				            'nested' => [
				                'path' => 'INVOICE_INFO'
				            ],
				            'aggs'=> [
				                  'INVOICE_AMOUNT'=> [
				                    'sum'=> ['field'=> 'INVOICE_INFO.INVOICE_AMOUNT']
				                  ]
				                ]
				        ]
				    ] 
				]
			]);	
		}else{
			$query_total_revenue = $client->search([
				'body' => [
					'query' => [
				      'term'=> [
				      	// 'PAR_ACCNT_ARN.keyword'=> $par_accnt_id
				        '_id' => $arn
				      ]
				    ],
				    'size'=> 0,
				    'aggs' => [
				        'spares_&_labour_revunue' => [
				            'nested' => [
				                'path' => 'INV_REV_INFO'
				            ],
				            'aggs'=> [
				                  'Total_SPARES_Ammount'=> [
				                    'sum'=> ['field'=> 'INV_REV_INFO.CLC_SPARES_REVENUE']
				                  ],
				                  'Total_Lab_Ammount'=>
				                  ['sum'=> [
				                    'field'=> 'INV_REV_INFO.CLC_LAB_REVENUE'
				                  ]]
				                ]
				        ],
				        'Invoice_Ammount' => [
				            'nested' => [
				                'path' => 'INVOICE_INFO'
				            ],
				            'aggs'=> [
				                  'INVOICE_AMOUNT'=> [
				                    'sum'=> ['field'=> 'INVOICE_INFO.INVOICE_AMOUNT']
				                  ]
				                ]
				        ]
				    ] 
				]
			]);	
		}
		// print_r($query_total_revenue);
		if($query_total_revenue['aggregations']['Invoice_Ammount'] >=1){
			$total_revenue_result = $query_total_revenue['aggregations']['Invoice_Ammount'];
		}
		$invoice_amount = $total_revenue_result['INVOICE_AMOUNT']['value'];

		if($query_total_revenue['aggregations']['spares_&_labour_revunue'] >=1){
			$total_revenue_result1 = $query_total_revenue['aggregations']['spares_&_labour_revunue'];
		}
		$spares_revenue = $total_revenue_result1['Total_SPARES_Ammount']['value'];
		$jc_revenue = $total_revenue_result1['Total_Lab_Ammount']['value'];

		$total_revenue = $invoice_amount + $spares_revenue + $jc_revenue;
		echo json_encode(round($total_revenue,2));
	}
	//state wise complaints
	public function complaints()
	{
		$hosts = [URL.'complaints_details/'];
		$client = ClientBuilder::create()->setHosts($hosts)->build();
		$par_accnt_id = $this->input->post('par_accnt_id');
		$arn = $this->input->post('arn');
		if($par_accnt_id !=''){
			$query_total_complaints = $client->search([
				'body' => [
					'query' => [
              'term'=> [
               '_id'=> $par_accnt_id
               ]
				                               ],
				    'size'=> 0,
				    'aggs' => [
				        'ComplaintsNest' => [
				        'nested' => [
				        'path' => 'COMPLAINT_INFO'
				     ],
				    'aggs'=> [
				      'StateWiseCount'=> [
				        'terms'=> ['field'=> 'COMPLAINT_INFO.SRV_OU_ACCNT_STATE.keyword'           
				       
				        			]
								]
							]
						]
					]
				]
			]);
			
		}else{
			$query_total_complaints = $client->search([
				'body' => [
					'query' => [
              'term'=> [
               '_id'=> $arn
               ]
				                               ],
				    'size'=> 0,
				    'aggs' => [
				        'ComplaintsNest' => [
				        'nested' => [
				        'path' => 'COMPLAINT_INFO'
				     ],
				    'aggs'=> [
				      'StateWiseCount'=> [
				        'terms'=> ['field'=> 'COMPLAINT_INFO.SRV_OU_ACCNT_STATE.keyword'           
				       
				        			]
								]
							]
						]
					]
				]
			]);
		}
		// print_r($query_total_complaints['aggregations']);die;	
		if($query_total_complaints['aggregations']['ComplaintsNest'] >=1){
			$total_complaints_result = $query_total_complaints['aggregations']['ComplaintsNest'];
		}
		$output = $total_complaints_result['StateWiseCount']['buckets'];
		// print_r(strtolower($output));die;
		foreach($output as $d){
			// echo $d['key'];
			$info[] = array(
				 strtolower($d['key']),
				 strtolower($d['doc_count'])
			);
		}

		// print_r($info);die;
		// print_r($total_complaints_result['StateWiseCount']['buckets']);die;
		echo json_encode($info);
	}

	//Problem area wise complaints
	public function problem_area_wise_complaints()
	{
		$hosts = [URL.'complaints_details/'];
		$client = ClientBuilder::create()->setHosts($hosts)->build();
		$par_accnt_id = $this->input->post('par_accnt_id');
		$arn = $this->input->post('arn');
		if($par_accnt_id !=''){
			$query_total_problem_area_wise_complaints = $client->search([
				'body' => [
					'query' => [
					    'term'=> [
					      '_id'=> 'AR02-09-17043502461'
					      
					    ]
					    
					  ],
					  'size'=> 0,
					  'aggs' => [
					    'countAllComplaints' => [
					      'nested' => [
					        'path' => 'COMPLAINT_INFO'
					        
					      ],
					      'aggs'=> [
					        'Problem_area'=> [
					          'terms'=> ['field'=> 'COMPLAINT_INFO.PROBLEM_AREA.keyword']
					          
					        ]
					        
					      ]
					      
					    ]
					    
					  ]
				]
			]);
		}else{

		}

		//print_r($query_total_problem_area_wise_complaints['aggregations']['countAllComplaints']);die;
		if($query_total_problem_area_wise_complaints['aggregations']['countAllComplaints'] >=1){
			$total_problem_area_wise_complaints = $query_total_problem_area_wise_complaints['aggregations']['countAllComplaints'];
		}

		// print_r($total_problem_area_wise_complaints['Problem_area']['buckets']);die;
		$output = $total_problem_area_wise_complaints['Problem_area']['buckets'];
		// print_r($output);die;
		foreach($output as $key => $value){
			echo $key;
			// $info = array(
			// 	 $d['key'],
			// 	 strtolower($d['doc_count'])
			// );
			// foreach($info as $i){
			// 	echo $i;
			// }
			
		}



		
	}


	public function complaints_details_reports()
	{
		$hosts = [URL.'complaints/'];
		$client = ClientBuilder::create()->setHosts($hosts)->build();
		$par_accnt_id = $this->input->post('par_accnt_id');
		$arn = $this->input->post('arn');
		if($par_accnt_id !=''){
			$query_total_complaints = $client->search([
				'body' => [
					"query" => [
					    "bool" => [
					      "must" =>
					        [
					          "term" => [
					            "PAR_ACCNT_ARN.keyword" => [
					              // "value" => "AR02-19-189253226511"
					              "value" => $par_accnt_id
					             
					            ]
					          ]
					        ]
					    ]
					    ],
					 
					  "_source"=>   [
					                  "COMPLAINT_INFO.PROBLEM_AREA",
					                  "COMPLAINT_INFO.SRV_OU_STATE",
					                  "COMPLAINT_INFO.SR_NUM",
					                  "COMPLAINT_INFO.SRV_OU_ORG_CITY"
					                ]
				]
			]);
		}else{
			$query_total_complaints = $client->search([
				'body' => [
					"query" => [
					    "bool" => [
					      "must" =>
					        [
					          "term" => [
					            "PAR_ACCNT_ARN.keyword" => [
					              // "value" => "AR02-19-189253226511"
					              "value" => $arn
					             
					            ]
					          ]
					        ]
					    ]
					    ],
					 
					  "_source"=>   [
					                  "COMPLAINT_INFO.PROBLEM_AREA",
					                  "COMPLAINT_INFO.SRV_OU_STATE",
					                  "COMPLAINT_INFO.SR_NUM",
					                  "COMPLAINT_INFO.SRV_OU_ORG_CITY"
					                ]
				]
			]);
		}
		// print_r($query_total_complaints['hits']['hits'][0]['_source']);die;
		if($query_total_complaints['hits']['hits'][0]['_source'] >=1){
			$total_complaints_result = $query_total_complaints['hits']['hits'][0]['_source'];
		}
		$output = $total_complaints_result['COMPLAINT_INFO'];
		$table = '';
		foreach ($output as $value) {
			$table .= '<tr class="grpInfo">
                <td>'.$value['SRV_OU_STATE'].'          
                </td>
                <td>
                  '.$value['SRV_OU_ORG_CITY'].'
                </td>
                <td>
                  '.$value['PROBLEM_AREA'].'
                </td>
                <td>
                  '.$value['SR_NUM'].'
                </td>
              </tr>';
		}
		echo json_encode($table);


	}



}//End Class