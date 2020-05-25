<?php if(!defined('BASEPATH'))exit('No direct script access allowed');
require_once 'vendor/autoload.php';
use Elasticsearch\ClientBuilder;
class Jc extends CI_Controller {
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
	public function state_wise_jc()
	{
		$hosts = [URL.'jc_details/'];
		$client = ClientBuilder::create()->setHosts($hosts)->build();
		$par_accnt_id = $this->input->post('par_accnt_id');
		$arn = $this->input->post('arn');
		// echo $par_accnt_id;die;
		$open_jc = $this->input->post('_open_jc');
		$closed_jc = $this->input->post('closed_jc');
		if($par_accnt_id !=''){
				if($open_jc != ''){
				$query_total_state_wise_jc = $client->search([
				'body' => [
					'query' => [
			          'term'=> [
			            '_id'=> $par_accnt_id
			          ]
			        ],
			        'size'=> 0,
			        'aggs' => [
			            'ordersNest' => [
			                'nested' => [
			                    'path' => 'ORDER_INFO'
			                ],
			                'aggs'=> [
			                  'countOpenJc'=> [
			                    'filter'=> [
			                     'term'=> [
			                      'ORDER_INFO.STATUS_CD.keyword'=> 'Open'
			                    ]],
			                'aggs'=> [
			                        'StateWiseCount'=> [
			                           'terms'=> [
			                               'field'=> 'ORDER_INFO.DLR_SLS_STATE.keyword',
			                               'size'=> 10000
			                             ]
			                           ]
			                        ]
			                  ]
			                ]
			            ]
			        ]
				]
			]);
				if($query_total_state_wise_jc['aggregations']['ordersNest'] >=1){
				$total_state_wise_jc_result = $query_total_state_wise_jc['aggregations']['ordersNest'];
				}
				// print_r($total_state_wise_jc_result);die;
				$output = $total_state_wise_jc_result['countOpenJc']['StateWiseCount']['buckets'];
				// print_r($output);die;
				foreach($output as $key => $value){
					// print_r($value);die;
					$info[] = array(
						 strtolower($value['key']),
						 strtolower($value['doc_count'])
					);
				}
				// print_r($info);die;
			} elseif ($closed_jc != '') {
				// echo'closed_jc';die;
				$query_total_state_wise_jc = $client->search([
				'body' => [
					'query' => [
			          'term'=> [
			            '_id'=> $par_accnt_id
			          ]
			        ],
			        'size'=> 0,
			        'aggs' => [
			            'ordersNest' => [
			                'nested' => [
			                    'path' => 'ORDER_INFO'
			                ],
			                'aggs'=> [
			                  'countClosedJc'=> [
			                    'filter'=> [
			                     'term'=> [
			                      'ORDER_INFO.STATUS_CD.keyword'=> 'Closed'
			                    ]],
			                'aggs'=> [
			                        'StateWiseCount'=> [
			                           'terms'=> [
			                               'field'=> 'ORDER_INFO.DLR_SLS_STATE.keyword',
			                               'size'=> 10000
			                             ]
			                           ]
			                        ]
			                  ]
			                ]
			            ]
			        ]
				]
				]);
					// print_r($query_total_state_wise_jc['aggregations']['ordersNest']);die;
					if($query_total_state_wise_jc['aggregations']['ordersNest'] >=1){
					$total_state_wise_jc_result = $query_total_state_wise_jc['aggregations']['ordersNest'];
					}
					// print_r($total_state_wise_jc_result);die;
					$output = $total_state_wise_jc_result['countClosedJc']['StateWiseCount']['buckets'];
					// print_r($output);die;
					foreach($output as $key=>$d){
						
						$info[] = array(
							 strtolower($d['key']),
							 strtolower($d['doc_count'])
						);
					}
			} else {
				// echo'dd';die;
					$query_total_state_wise_jc = $client->search([
					'body' => [
						'query' => [
				              'term'=> [
				               '_id'=> $par_accnt_id
				               ]
					        ],
					    'size'=> 0,
					    'aggs' => [
					        'ordersNest' => [
					        'nested' => [
					        'path' => 'ORDER_INFO'
					     ],
					    'aggs'=> [
					      'StateWiseCount'=> [
					        'terms'=> ['field'=> 'ORDER_INFO.DLR_SLS_STATE.keyword',
					        'size'=> 10000
					          
					        ]
					        
					      ]
					      
					    ]
					          
					        ]
					      
					    ]

					]
				]);
				if($query_total_state_wise_jc['aggregations']['ordersNest'] >=1){
				$total_state_wise_jc_result = $query_total_state_wise_jc['aggregations']['ordersNest'];
					}
					// print_r($total_state_wise_jc_result);die;
					$output = $total_state_wise_jc_result['StateWiseCount']['buckets'];
					// print_r($output);die;
					foreach($output as $d){
						// echo $d['key'];
						$info[] = array(
							 strtolower($d['key']),
							 strtolower($d['doc_count'])
						);
					}
			}			
		} else {
			// echo'Child start';die;
			if($open_jc != ''){

				$query_total_state_wise_jc = $client->search([
				'body' => [
					'query' => [
			          'term'=> [
			            '_id'=> $arn
			          ]
			        ],
			        'size'=> 0,
			        'aggs' => [
			            'ordersNest' => [
			                'nested' => [
			                    'path' => 'ORDER_INFO'
			                ],
			                'aggs'=> [
			                  'countOpenJc'=> [
			                    'filter'=> [
			                     'term'=> [
			                      'ORDER_INFO.STATUS_CD.keyword'=> 'Open'
			                    ]],
			                'aggs'=> [
			                        'StateWiseCount'=> [
			                           'terms'=> [
			                               'field'=> 'ORDER_INFO.DLR_SLS_STATE.keyword',
			                               'size'=> 10000
			                             ]
			                           ]
			                        ]
			                  ]
			                ]
			            ]
			        ]
				]
			]);
				if($query_total_state_wise_jc['aggregations']['ordersNest'] >=1){
				$total_state_wise_jc_result = $query_total_state_wise_jc['aggregations']['ordersNest'];
				}
				// print_r($total_state_wise_jc_result);die;
				$output = $total_state_wise_jc_result['countOpenJc']['StateWiseCount']['buckets'];
				// print_r($output);die;
				foreach($output as $key => $value){
					// print_r($value);die;
					$info[] = array(
						 strtolower($value['key']),
						 strtolower($value['doc_count'])
					);
				}
				// print_r($info);die;
			} elseif ($closed_jc != '') {
				// echo'closed_jc';die;
				$query_total_state_wise_jc = $client->search([
				'body' => [
					'query' => [
			          'term'=> [
			            '_id'=> $arn
			          ]
			        ],
			        'size'=> 0,
			        'aggs' => [
			            'ordersNest' => [
			                'nested' => [
			                    'path' => 'ORDER_INFO'
			                ],
			                'aggs'=> [
			                  'countClosedJc'=> [
			                    'filter'=> [
			                     'term'=> [
			                      'ORDER_INFO.STATUS_CD.keyword'=> 'Closed'
			                    ]],
			                'aggs'=> [
			                        'StateWiseCount'=> [
			                           'terms'=> [
			                               'field'=> 'ORDER_INFO.DLR_SLS_STATE.keyword',
			                               'size'=> 10000
			                             ]
			                           ]
			                        ]
			                  ]
			                ]
			            ]
			        ]
				]
				]);
					// print_r($query_total_state_wise_jc['aggregations']['ordersNest']);die;
					if($query_total_state_wise_jc['aggregations']['ordersNest'] >=1){
					$total_state_wise_jc_result = $query_total_state_wise_jc['aggregations']['ordersNest'];
					}
					// print_r($total_state_wise_jc_result);die;
					$output = $total_state_wise_jc_result['countClosedJc']['StateWiseCount']['buckets'];
					// print_r($output);die;
					foreach($output as $key=>$d){
						
						$info[] = array(
							 strtolower($d['key']),
							 strtolower($d['doc_count'])
						);
					}
			} else {
				
					$query_total_state_wise_jc = $client->search([
					'body' => [
						'query' => [
				              'term'=> [
				               '_id'=> $arn
				               ]
					        ],
					    'size'=> 0,
					    'aggs' => [
					        'ordersNest' => [
					        'nested' => [
					        'path' => 'ORDER_INFO'
					     ],
					    'aggs'=> [
					      'StateWiseCount'=> [
					        'terms'=> ['field'=> 'ORDER_INFO.DLR_SLS_STATE.keyword',
					        'size'=> 10000
					          
					        ]
					        
					      ]
					      
					    ]
					          
					        ]
					      
					    ]

					]
				]);
				if($query_total_state_wise_jc['aggregations']['ordersNest'] >=1){
				$total_state_wise_jc_result = $query_total_state_wise_jc['aggregations']['ordersNest'];
					}
					// print_r($total_state_wise_jc_result);die;
					$output = $total_state_wise_jc_result['StateWiseCount']['buckets'];
					// print_r($output);die;
					foreach($output as $d){
						// echo $d['key'];
						$info[] = array(
							 strtolower($d['key']),
							 strtolower($d['doc_count'])
						);
					}
			}
		}
		// print_r($output);
		echo json_encode($info);
	}

	public function month_wise_job_cards()
	{
		$hosts = [URL.'orders/'];
		$client = ClientBuilder::create()->setHosts($hosts)->build();
		$par_accnt_id = $this->input->post('par_accnt_id');
		$arn = $this->input->post('arn');
		$status = $this->input->post('status');
		if($status == 'open_jc'){
			$status = 'Open';
		}elseif ($status == 'closed_jc') {
			$status = 'Closed';
		}else{
			$status = 'all_jc';
		}
		if($par_accnt_id !='') {

		if($status !='' && $status == 'all_jc'){
			$query_total_month_wise_job_cards = $client->search([
				'body' => [
					'query'=> [
						  'term'=> [
						    '_id'=>$par_accnt_id
						  ]
						  ],
						  'size'=> 0,
						  'aggs'=> [
						    'ordersNest'=> [
						      'nested' =>  [
						        'path' => 'ORDER_INFO'
						      		],
						      
						          'aggs'=> [
						            'MonthWise'=> [
						              'terms'=> [
						                'field'=> 'ORDER_INFO.ORDER_MONTH.keyword',
						                'size'=> 12,
						                'order'=> [
						                	'_key'=> 'asc'
						                ]
						              ]
						            ]
						          ]
						    ]
						    ]
				]
			]);
			if($query_total_month_wise_job_cards['aggregations']['ordersNest'] >=1){
				$total_month_wise_job_cards_result = $query_total_month_wise_job_cards['aggregations']['ordersNest'];
				}
				//$months = array(1 => 'Jan.', 2 => 'Feb.', 3 => 'Mar.', 4 => 'Apr.', 5 => 'May', 6 => 'Jun.', 7 => 'Jul.', 8 => 'Aug.', 9 => 'Sep.', 10 => 'Oct.', 11 => 'Nov.', 12 => 'Dec.');

				$output = $total_month_wise_job_cards_result['MonthWise']['buckets'];
	
			}else{
				
				$query_total_month_wise_job_cards = $client->search([
				'body' => [
						'query'=> [
							  'term'=> [
							    '_id'=> $par_accnt_id
							  ]
							  ],
							  'size'=> 0,
							  'aggs'=> [
							    'ordersNest'=> [
							      'nested' =>  [
							        'path' => 'ORDER_INFO'
							      ],
							      'aggs'=> [
							        'YearWise'=> [
							          'filter'=> [
							            'term'=> [
							             'ORDER_INFO.STATUS_CD.keyword'=> $status
							          	]],
							           'aggs'=> [
							            'MonthWise'=> [
							              'terms'=> [
							                'field'=> 'ORDER_INFO.ORDER_MONTH.keyword',
							                'size'=> 12,
							                'order'=> [
						                	'_key'=> 'asc'
						                	]
							              ]
							            ]
							          ]
							          ]
							         ]
							        ]
							      ]
					]
				]);
				// print_r($query_total_month_wise_job_cards['aggregations']['ordersNest']);die;
			if($query_total_month_wise_job_cards['aggregations']['ordersNest'] >=1){
				$total_month_wise_job_cards_result = $query_total_month_wise_job_cards['aggregations']['ordersNest'];
				}
				$output = $total_month_wise_job_cards_result['YearWise']['MonthWise']['buckets'];
				
				
			}
			
		}else{
			if($status !='' && $status == 'all_jc'){
			$query_total_month_wise_job_cards = $client->search([
				'body' => [
					'query'=> [
						  'term'=> [
						    '_id'=>$arn
						  ]
						  ],
						  'size'=> 0,
						  'aggs'=> [
						    'ordersNest'=> [
						      'nested' =>  [
						        'path' => 'ORDER_INFO'
						      		],
						      
						          'aggs'=> [
						            'MonthWise'=> [
						              'terms'=> [
						                'field'=> 'ORDER_INFO.ORDER_MONTH.keyword',
						                'size'=> 12,
						                'order'=> [
						                	'_key'=> 'asc'
						                ]
						              ]
						            ]
						          ]
						    ]
						    ]
				]
			]);
			if($query_total_month_wise_job_cards['aggregations']['ordersNest'] >=1){
				$total_month_wise_job_cards_result = $query_total_month_wise_job_cards['aggregations']['ordersNest'];
				}
				//$months = array(1 => 'Jan.', 2 => 'Feb.', 3 => 'Mar.', 4 => 'Apr.', 5 => 'May', 6 => 'Jun.', 7 => 'Jul.', 8 => 'Aug.', 9 => 'Sep.', 10 => 'Oct.', 11 => 'Nov.', 12 => 'Dec.');

				$output = $total_month_wise_job_cards_result['MonthWise']['buckets'];
	
			}else{
				
				$query_total_month_wise_job_cards = $client->search([
				'body' => [
						'query'=> [
							  'term'=> [
							    '_id'=> $arn
							  ]
							  ],
							  'size'=> 0,
							  'aggs'=> [
							    'ordersNest'=> [
							      'nested' =>  [
							        'path' => 'ORDER_INFO'
							      ],
							      'aggs'=> [
							        'YearWise'=> [
							          'filter'=> [
							            'term'=> [
							             'ORDER_INFO.STATUS_CD.keyword'=> $status
							          	]],
							           'aggs'=> [
							            'MonthWise'=> [
							              'terms'=> [
							                'field'=> 'ORDER_INFO.ORDER_MONTH.keyword',
							                'size'=> 12,
							                'order'=> [
						                	'_key'=> 'asc'
						                	]
							              ]
							            ]
							          ]
							          ]
							         ]
							        ]
							      ]
					]
				]);
				// print_r($query_total_month_wise_job_cards['aggregations']['ordersNest']);die;
			if($query_total_month_wise_job_cards['aggregations']['ordersNest'] >=1){
				$total_month_wise_job_cards_result = $query_total_month_wise_job_cards['aggregations']['ordersNest'];
				}
				$output = $total_month_wise_job_cards_result['YearWise']['MonthWise']['buckets'];
				
				
			}
		}
		echo json_encode($output);
		
	}

	public function lob_wise_jc()
	{
		$hosts = [URL.'orders/'];
		$client = ClientBuilder::create()->setHosts($hosts)->build();
		$par_accnt_id = $this->input->post('par_accnt_id');
		$arn = $this->input->post('arn');
		$open_jc = $this->input->post('open_jc');
		$closed_jc = $this->input->post('closed_jc');
		if($par_accnt_id != ''){
			if($open_jc != ''){
				$query_total_lov_wise_jc = $client->search([
					'body' => [
						'query' => [
					          'term'=> [
					            '_id'=> $par_accnt_id
					          ]
					        ],
					        'size'=> 0,
					        'aggs' => [
					            'ordersNest' => [
					                'nested' => [
					                    'path' => 'ORDER_INFO'
					                ],
					                'aggs'=> [
					                  'countOpenLobJc'=> [
					                    'filter'=> [
					                'term'=> [
					                      'ORDER_INFO.STATUS_CD.keyword'=> 'Open'
					                    ]],
					                  
					                    'aggs'=> [
					                        'LobWise'=> [ 
					                        'terms'=> [
					                               'field'=> 'ORDER_INFO.SR_ASSET_LOB.keyword'
					                             ]
					                           ]
					                          ]
					                
					                ]
					            ]
					        ]
					      ]
					]
				]);
				// print_r($query_total_lov_wise_jc);die;
				if($query_total_lov_wise_jc['aggregations']['ordersNest'] >=1){
				$total_lob_wise_jc_result = $query_total_lov_wise_jc['aggregations']['ordersNest'];
				}

				
				$output = $total_lob_wise_jc_result['countOpenLobJc']['LobWise']['buckets'];
			}elseif ($closed_jc !='') {
				$query_total_lov_wise_jc = $client->search([
					'body' => [
						'query' => [
					          'term'=> [
					            '_id'=> $par_accnt_id
					          ]
					        ],
					        'size'=> 0,
					        'aggs' => [
					            'ordersNest' => [
					                'nested' => [
					                    'path' => 'ORDER_INFO'
					                ],
					                'aggs'=> [
					                  'countClosedLobJc'=> [
					                    'filter'=> [
					                'term'=> [
					                      'ORDER_INFO.STATUS_CD.keyword'=> 'Closed'
					                    ]],
					                  
					                    'aggs'=> [
					                        'LobWise'=> [ 
					                        'terms'=> [
					                               'field'=> 'ORDER_INFO.SR_ASSET_LOB.keyword'
					                             ]
					                           ]
					                          ]
					                
					                ]
					            ]
					        ]
					      ]
					]
				]);
				// print_r($query_total_lov_wise_jc);die;
				if($query_total_lov_wise_jc['aggregations']['ordersNest'] >=1){
				$total_lob_wise_jc_result = $query_total_lov_wise_jc['aggregations']['ordersNest'];
				}

				
				$output = $total_lob_wise_jc_result['countClosedLobJc']['LobWise']['buckets'];
			}else{
				$query_total_lov_wise_jc = $client->search([
				'body' => [
					'query' => [
                'term'=> [
                  '_id'=> $par_accnt_id
                ]
	              ],
	              'size'=> 0,
	              'aggs' => [
	                  'countofLOB' => [
	                      'nested' => [
	                          'path' => 'ORDER_INFO'
	                      ],
	                      'aggs'=> [
	                            'LOV'=> [
	                              'terms'=> ['field'=> 'ORDER_INFO.SR_ASSET_LOB.keyword'            
	                              ]
	                          ]
	                      ]
	                  ]
	              ]
				]
			]);
			// print_r($query_total_lov_wise_jc['aggregations']['countofLOB']);die;
			if($query_total_lov_wise_jc['aggregations']['countofLOB'] >=1){
				$total_lob_wise_jc_result = $query_total_lov_wise_jc['aggregations']['countofLOB'];
			}

			$output = $total_lob_wise_jc_result['LOV']['buckets'];
		// print_r($output);die;
			}
			
		}else{
			if($open_jc != ''){
				$query_total_lov_wise_jc = $client->search([
					'body' => [
						'query' => [
					          'term'=> [
					            '_id'=> $arn
					          ]
					        ],
					        'size'=> 0,
					        'aggs' => [
					            'ordersNest' => [
					                'nested' => [
					                    'path' => 'ORDER_INFO'
					                ],
					                'aggs'=> [
					                  'countOpenLobJc'=> [
					                    'filter'=> [
					                'term'=> [
					                      'ORDER_INFO.STATUS_CD.keyword'=> 'Open'
					                    ]],
					                  
					                    'aggs'=> [
					                        'LobWise'=> [ 
					                        'terms'=> [
					                               'field'=> 'ORDER_INFO.SR_ASSET_LOB.keyword'
					                             ]
					                           ]
					                          ]
					                
					                ]
					            ]
					        ]
					      ]
					]
				]);
				// print_r($query_total_lov_wise_jc);die;
				if($query_total_lov_wise_jc['aggregations']['ordersNest'] >=1){
				$total_lob_wise_jc_result = $query_total_lov_wise_jc['aggregations']['ordersNest'];
				}

				
				$output = $total_lob_wise_jc_result['countOpenLobJc']['LobWise']['buckets'];
			}elseif ($closed_jc !='') {
				$query_total_lov_wise_jc = $client->search([
					'body' => [
						'query' => [
					          'term'=> [
					            '_id'=> $arn
					          ]
					        ],
					        'size'=> 0,
					        'aggs' => [
					            'ordersNest' => [
					                'nested' => [
					                    'path' => 'ORDER_INFO'
					                ],
					                'aggs'=> [
					                  'countClosedLobJc'=> [
					                    'filter'=> [
					                'term'=> [
					                      'ORDER_INFO.STATUS_CD.keyword'=> 'Closed'
					                    ]],
					                  
					                    'aggs'=> [
					                        'LobWise'=> [ 
					                        'terms'=> [
					                               'field'=> 'ORDER_INFO.SR_ASSET_LOB.keyword'
					                             ]
					                           ]
					                          ]
					                
					                ]
					            ]
					        ]
					      ]
					]
				]);
				// print_r($query_total_lov_wise_jc);die;
				if($query_total_lov_wise_jc['aggregations']['ordersNest'] >=1){
				$total_lob_wise_jc_result = $query_total_lov_wise_jc['aggregations']['ordersNest'];
				}

				
				$output = $total_lob_wise_jc_result['countClosedLobJc']['LobWise']['buckets'];
				//Chid Start
			}else{
				$query_total_lov_wise_jc = $client->search([
				'body' => [
					'query' => [
                'term'=> [
                  '_id'=> $arn
                ]
	              ],
	              'size'=> 0,
	              'aggs' => [
	                  'countofLOB' => [
	                      'nested' => [
	                          'path' => 'ORDER_INFO'
	                      ],
	                      'aggs'=> [
	                            'LOV'=> [
	                              'terms'=> ['field'=> 'ORDER_INFO.SR_ASSET_LOB.keyword'            
	                              ]
	                          ]
	                      ]
	                  ]
	              ]
				]
			]);
			// print_r($query_total_lov_wise_jc['aggregations']['countofLOB']);die;
			if($query_total_lov_wise_jc['aggregations']['countofLOB'] >=1){
				$total_lob_wise_jc_result = $query_total_lov_wise_jc['aggregations']['countofLOB'];
			}

			$output = $total_lob_wise_jc_result['LOV']['buckets'];
		// print_r($output);die;
			}
		}

		
		
		echo json_encode($output);


	}

	public function search_chassis_number()
	{
		$hosts = [URL.'orders/'];
		$client = ClientBuilder::create()->setHosts($hosts)->build();
		$par_accnt_id = $this->input->post('par_accnt_id');
		$arn = $this->input->post('arn');
		$chassis_number = $this->input->post('chassis_number');
		$status = $this->input->post('status');
		if($status == 'open_jc'){
			$status = 'Open';
		}elseif ($status == 'closed_jc') {
			$status = 'Closed';
		}else{
			$status = 'all_jc';
		}
		if($par_accnt_id != ''){

			if($chassis_number != '' && $status !='all_jc'){
			// echo $status;die;
			$query_search_chassis_number = $client->search([
				'body' => [
				  'query' => [
					    'bool' => [
					      'must' => [
					        [
					          'term' => [
					            'PAR_ACCNT_ARN.keyword' => [
					              'value' => $par_accnt_id
					            ]
					          ]
					        ],
					        [
					          'nested' => [
					            'query' => [
					              'bool'=> [
					                'must'=> [
					                  [
					                    'term'=> [
					                        'ORDER_INFO.STATUS_CD.keyword' => [
					                  'value' => $status
					                      ]
					                    ]],                             
					                    [
					                    'term'=> [
					                      'ORDER_INFO.SR_ASSET_NUM.keyword'=> [
					                        'value'=> $chassis_number
					                      ]
					                    ]
					                  ]
					                ]
					              ]
					            ],
					            'path' => 'ORDER_INFO',
					            'inner_hits' => [
					              'name' => 'jc_details',
					              'size' => 200,
					              '_source' => [
					                'includes' => [
					                  'ORDER_INFO.ORDER_MONTHYEAR',
					                  'ORDER_INFO.DLR_SLS_STATE',
					                  'ORDER_INFO.DLR_NAME',
					                  'ORDER_INFO.ORDER_NUM',
					                  'ORDER_INFO.VEHICLE_REGISTRATION_NUMBER',
					                  'ORDER_INFO.JC_CREATED_DT',
					                  'ORDER_INFO.JC_CREATED_DT_STR',
					                  'ORDER_INFO.STATUS_CD',
					                  'ORDER_INFO.TAT',
					                  'ORDER_INFO.SR_ASSET_PL',
					                  'ORDER_INFO.SR_SR_CAT_TYPE_CD',
					                  'ORDER_INFO.SR_ASSET_NUM'
					                ]
					              ]
					            ]
					          ]
					        ]
					      ]
					    ]
					  ],
					  '_source' => false
					]

						]);
						// print_r($query_search_chassis_number);die;
					} else {
			
							$query_search_chassis_number = $client->search([
								'body' => [
								  'query' => [
								    'bool' => [
								      'must' => [
								        [
								          'term' => [
								            'PAR_ACCNT_ARN.keyword' => [
								              'value' => $par_accnt_id
								            ]
								          ]
								        ],
								        [
								          'nested' => [
								            'query' => [
								              'term' => [
								                'ORDER_INFO.SR_ASSET_NUM.keyword'=> [
								                  'value' => $chassis_number
								                ]
								              ]
								            ],
								           
								           'path' => 'ORDER_INFO',
								            'inner_hits' => [
								              'name' => 'jc_details',
								              'size' => 200,
								              '_source' => [
								                'includes' => [
								                'ORDER_INFO.ORDER_MONTHYEAR',
												'ORDER_INFO.DLR_SLS_STATE',
												'ORDER_INFO.DLR_NAME',
												'ORDER_INFO.ORDER_NUM',
												'ORDER_INFO.VEHICLE_REGISTRATION_NUMBER',
												'ORDER_INFO.JC_CREATED_DT',
												'ORDER_INFO.JC_CREATED_DT_STR',
												'ORDER_INFO.STATUS_CD',
												'ORDER_INFO.TAT',
												'ORDER_INFO.SR_ASSET_PL',
												'ORDER_INFO.SR_SR_CAT_TYPE_CD',
												'ORDER_INFO.SR_ASSET_NUM',
								                'ORDER_INFO.MONTH_YEAR'
								                ]
								              ],
								              'sort'=> [
								                       [
								                 'ORDER_INFO.STATUS_CD.keyword'=> [
								                          'order'=> 'desc'
								                             ]
								                       ],
								                       [
								                 'ORDER_INFO.MONTH_YEAR'=> [
								                          'order'=> 'asc'
								                             ]
								                       ]
								                       ]
								              ]
								            ]
								        ]
								      ]
								    ]
								  ],
								  '_source' => false
								]
							]);
						}
						// print_r($query_search_chassis_number);die;
						// print_r($query_search_chassis_number['hits']['hits'][0]['inner_hits']['jc_details']['hits']['hits']);die;
						// print_r($query_search_chassis_number['hits']['hits'][0]['inner_hits']['jc_details']['hits']['hits']);die;
						if($query_search_chassis_number['hits']['hits'][0] >=1){
							$total_search_chassis_number_result = $query_search_chassis_number['hits']['hits'][0];
						}
						
						$output1 = $total_search_chassis_number_result['inner_hits']['jc_details']['hits']['hits'];
						foreach($output1 as $d){
							$data[] = $d['_source']; 
						}
						$output = $data;
						

				} else { //Child start

					if($chassis_number != '' && $status !='all_jc'){
			// echo $status;die;
			$query_search_chassis_number = $client->search([
				'body' => [
				  'query' => [
					    'bool' => [
					      'must' => [
					        [
					          'term' => [
					            'ACCNT_ARN.keyword' => [
					              'value' => $arn
					            ]
					          ]
					        ],
					        [
					          'nested' => [
					            'query' => [
					              'bool'=> [
					                'must'=> [
					                  [
					                    'term'=> [
					                        'ORDER_INFO.STATUS_CD.keyword' => [
					                  'value' => $status
					                      ]
					                    ]],                             
					                    [
					                    'term'=> [
					                      'ORDER_INFO.SR_ASSET_NUM.keyword'=> [
					                        'value'=> $chassis_number
					                      ]
					                    ]
					                  ]
					                ]
					              ]
					            ],
					            'path' => 'ORDER_INFO',
					            'inner_hits' => [
					              'name' => 'jc_details',
					              'size' => 200,
					              '_source' => [
					                'includes' => [
					                  'ORDER_INFO.ORDER_MONTHYEAR',
					                  'ORDER_INFO.DLR_SLS_STATE',
					                  'ORDER_INFO.DLR_NAME',
					                  'ORDER_INFO.ORDER_NUM',
					                  'ORDER_INFO.VEHICLE_REGISTRATION_NUMBER',
					                  'ORDER_INFO.JC_CREATED_DT',
					                  'ORDER_INFO.JC_CREATED_DT_STR',
					                  'ORDER_INFO.STATUS_CD',
					                  'ORDER_INFO.TAT',
					                  'ORDER_INFO.SR_ASSET_PL',
					                  'ORDER_INFO.SR_SR_CAT_TYPE_CD',
					                  'ORDER_INFO.SR_ASSET_NUM'
					                ]
					              ]
					            ]
					          ]
					        ]
					      ]
					    ]
					  ],
					  '_source' => false
					]

					]);
					// print_r($query_search_chassis_number);die;
					} else {
						// echo'child data';die;
							$query_search_chassis_number = $client->search([
								'body' => [
								  'query' => [
								    'bool' => [
								      'must' => [
								        [
								          'term' => [
								            'ACCNT_ARN.keyword' => [
								              'value' => $arn
								            ]
								          ]
								        ],
								        [
								          'nested' => [
								            'query' => [
								              'term' => [
								                'ORDER_INFO.SR_ASSET_NUM.keyword'=> [
								                  'value' => $chassis_number				     
								              	]
								              ]
								            ],
								            'path' => 'ORDER_INFO',
								            'inner_hits' => [
								              'name' => 'jc_details',
								              'size' => 200,
								              '_source' => [
								                'includes' => [
								                  'ORDER_INFO.ORDER_MONTHYEAR',
									                  'ORDER_INFO.DLR_SLS_STATE',
									                  'ORDER_INFO.DLR_NAME',
									                  'ORDER_INFO.ORDER_NUM',
									                  'ORDER_INFO.VEHICLE_REGISTRATION_NUMBER',
									                  'ORDER_INFO.JC_CREATED_DT',
									                  'ORDER_INFO.JC_CREATED_DT_STR',
									                  'ORDER_INFO.STATUS_CD',
									                  'ORDER_INFO.TAT',
									                  'ORDER_INFO.SR_ASSET_PL',
									                  'ORDER_INFO.SR_SR_CAT_TYPE_CD',
									                  'ORDER_INFO.SR_ASSET_NUM'
								                ]
								              ],
								              'sort'=> [
                       									[
						                			 'ORDER_INFO.STATUS_CD.keyword'=> [
						                          'order'=> 'desc'
						                             ]
						                       ]
						                       ]
								            ]
								          ]
								        ]
								      ]
								    ]
								  ],
								  '_source' => false
								]
							]);
						}
						// print_r($query_search_chassis_number);die;
						if($query_search_chassis_number['hits']['hits'][0] >=1){
							$total_search_chassis_number_result = $query_search_chassis_number['hits']['hits'][0];
						}
						
						$output1 = $total_search_chassis_number_result['inner_hits']['jc_details']['hits']['hits'];
						foreach($output1 as $d){
							$data[] = $d['_source']; 
						}
						$output = $data;	

				}
				// die;
				echo json_encode($output);
	}

	public function yrs() {

	    $hosts = [URL.'orders/'];
		$client = ClientBuilder::create()->setHosts($hosts)->build();
		$par_accnt_id = $this->input->post('par_accnt_id');
		$arn = $this->input->post('arn');
		
		if($par_accnt_id != ''){

			$query_total_detailed_job_cards = $client->search([
				'body' => [
					
						'query' => [
			              'term'=> [
			               '_id'=> $par_accnt_id
			               ]
			                               ],
						    'size'=> 0,
						    'aggs' => [
						        'ordersNest' => [
						        'nested' => [
						        'path' => 'ORDER_INFO'
						     ],
						    'aggs'=> [
						      'StateWiseCount'=> [
						        'terms'=> [
						        	'field'=> 'ORDER_INFO.FSCL_YEAR.keyword',
						        	'order'=> [
             						 '_key'=> 'desc'
            						]
									]
								]
							]
						]
					]
				]
			]);
			// print_r($query_total_detailed_job_cards['aggregations']['ordersNest']);die;
			if($query_total_detailed_job_cards['aggregations']['ordersNest'] >=1){
				$total_detailed_job_cards_result = $query_total_detailed_job_cards['aggregations']['ordersNest'];
			}

			$output = $total_detailed_job_cards_result['StateWiseCount']['buckets'];
			$option = '';
			// print_r($output);die;
			// $option = 'jc_chassis_num';
			$option = '<option value=""> Select Years </option>';
			foreach ($output as $value) {
			$option .= '<option value="'.$value['key'].'">'.$value['key'].'</option>';
			}
		
		} else {
			$query_total_detailed_job_cards = $client->search([
				'body' => [
					
						'query' => [
			              'term'=> [
			               '_id'=> $arn
			               ]
			                               ],
						    'size'=> 0,
						    'aggs' => [
						        'ordersNest' => [
						        'nested' => [
						        'path' => 'ORDER_INFO'
						     ],
						    'aggs'=> [
						      'StateWiseCount'=> [
						        'terms'=> [
						        	'field'=> 'ORDER_INFO.FSCL_YEAR.keyword',
						        	'order'=> [
             						 '_key'=> 'desc'
            						]
									]
								]
							]
						]
					]
				]
			]);
			// print_r($query_total_detailed_job_cards['aggregations']['ordersNest']);die;
			if($query_total_detailed_job_cards['aggregations']['ordersNest'] >=1){
				$total_detailed_job_cards_result = $query_total_detailed_job_cards['aggregations']['ordersNest'];
			}

			$output = $total_detailed_job_cards_result['StateWiseCount']['buckets'];
			$option = '';
			// print_r($output);die;
			// $option = 'jc_chassis_num';
			$option = '<option value=""> Select Years </option>';
			foreach ($output as $value) {
			$option .= '<option value="'.$value['key'].'">'.$value['key'].'</option>';
			}
		}

		echo json_encode($option);

	
	}

	public function yrs_month_data()
	{
		$hosts = [URL.'jc_details/'];
		$client = ClientBuilder::create()->setHosts($hosts)->build();
		$par_accnt_id = $this->input->post('par_accnt_id');
		$yrs = $this->input->post('yrs');
		$arn = $this->input->post('arn');
		$status = $this->input->post('status');
		if($status == 'open_jc'){
			$status = 'Open';
		}elseif ($status == 'closed_jc') {
			$status = 'Closed';
		}else{
			$status = 'all_jc';
		}
		
		if($par_accnt_id != ''){
			if($yrs !='' && $status =='all_jc'){
			$query_total_search_month_wise_job_cards = $client->search([
				'body' => [
					'query'=> [
						  'term'=> [
						    '_id'=> $par_accnt_id
						  ]
						  ],
						  'size'=> 0,
						  'aggs'=> [
						    'ordersNest'=> [
						      'nested' =>  [
						        'path' => 'ORDER_INFO'
						      ],
						      'aggs'=> [
						        'YearWise'=> [
						          'filter'=> [
						            'term'=> [
						             'ORDER_INFO.FSCL_YEAR.keyword'=> $yrs
						          ]],
						            'aggs'=> [
						            'MonthWise'=> [
						              'terms'=> [
						                'field'=> 'ORDER_INFO.ORDER_MONTH.keyword',
						                'size'=> 12,
						                'order'=> [
						                	'_key'=> 'asc'
						                ]
						              ]
						            ]
						          ]
						      ]
						    ]
						    ]
						  ]
					]
			]);

			// print_r($query_total_search_month_wise_job_cards['aggregations']['ordersNest']);die;
			if($query_total_search_month_wise_job_cards['aggregations']['ordersNest'] >=1){
				$total_search_month_wise_job_cards_result = $query_total_search_month_wise_job_cards['aggregations']['ordersNest'];
				}
				$output = $total_search_month_wise_job_cards_result['YearWise']['MonthWise']['buckets'];
				}else if($yrs !='' && $status =='Open' || $status == 'Closed'){
					$query_total_month_wise_job_cards = $client->search([
						'body'=> [

					     'query' => [
					          'term'=> [
					            '_id'=> $par_accnt_id
					          ]
					        ],
					        'size'=> 0,
					        'aggs' => [
					            'ordersNest' => [
					                'nested' => [
					                    'path' => 'ORDER_INFO'
					                ],
					                'aggs'=> [
					                  'countOpenClosedJc'=> [
					                    'filter'=> [
					                    'term'=> [
					                      'ORDER_INFO.STATUS_CD.keyword'=> $status
					                    ]],
					           'aggs'=> [
					  'YearWise'=> [
					    'filter'=> [
					    'term'=> [
					      'ORDER_INFO.FSCL_YEAR.keyword'=> $yrs
					                        ]],
					                    'aggs'=> [
					                       'MonthWise'=> [
					                         'terms'=> [
					                          'field'=> 'ORDER_INFO.ORDER_MONTH.keyword',
					                           'size'=> 12,
					                           'order'=> [
					                             '_key'=> 'asc'
					                           ]
					                           ]
					                          ]
					                         ]                            
					                       ]
					                    ]
					                  ]
					                ]
					            ]
					        ]
						]
					]);
					// print_r($query_total_month_wise_job_cards['aggregations']['ordersNest']['countOpenClosedJc']);die;
					if($query_total_month_wise_job_cards['aggregations']['ordersNest']['countOpenClosedJc'] >=1){
				$total_month_wise_job_cards_result = $query_total_month_wise_job_cards['aggregations']['ordersNest']['countOpenClosedJc'];
				}
				$output = $total_month_wise_job_cards_result['YearWise']['MonthWise']['buckets'];
				}else{
				$query_total_month_wise_job_cards = $client->search([
				'body' => [
					'query'=> [

						  'term'=> [

						    '_id'=>$par_accnt_id

						  ]

						  ],

						  'size'=> 0,

						  'aggs'=> [

						    'ordersNest'=> [

						      'nested' =>  [

						        'path' => 'ORDER_INFO'
						      ],
						      
						          'aggs'=> [
						            'MonthWise'=> [
						              'terms'=> [
						                'field'=> 'ORDER_INFO.ORDER_MONTH.keyword',
						                'size'=> 12,
						                'order'=> [
						                	'_key'=> 'asc'
						                ]
						              ]
						            ]
						          ]

						    ]

						    ]
				]
			]);
			// print_r($query_total_month_wise_job_cards['aggregations']['ordersNest']);die;
			if($query_total_month_wise_job_cards['aggregations']['ordersNest'] >=1){
				$total_month_wise_job_cards_result = $query_total_month_wise_job_cards['aggregations']['ordersNest'];
				}
				$output = $total_month_wise_job_cards_result['MonthWise']['buckets'];
			}

		}else{
			//child
			if($yrs !='' && $status =='all_jc'){
			$query_total_search_month_wise_job_cards = $client->search([
				'body' => [
					'query'=> [
						  'term'=> [
						    '_id'=> $arn
						  ]
						  ],
						  'size'=> 0,
						  'aggs'=> [
						    'ordersNest'=> [
						      'nested' =>  [
						        'path' => 'ORDER_INFO'
						      ],
						      'aggs'=> [
						        'YearWise'=> [
						          'filter'=> [
						            'term'=> [
						             'ORDER_INFO.FSCL_YEAR.keyword'=> $yrs
						          ]],
						            'aggs'=> [
						            'MonthWise'=> [
						              'terms'=> [
						                'field'=> 'ORDER_INFO.ORDER_MONTH.keyword',
						                'size'=> 12,
						                'order'=> [
						                	'_key'=> 'asc'
						                ]
						              ]
						            ]
						          ]
						      ]
						    ]
						    ]
						  ]
					]
			]);

			// print_r($query_total_search_month_wise_job_cards['aggregations']['ordersNest']);die;
			if($query_total_search_month_wise_job_cards['aggregations']['ordersNest'] >=1){
				$total_search_month_wise_job_cards_result = $query_total_search_month_wise_job_cards['aggregations']['ordersNest'];
				}
				$output = $total_search_month_wise_job_cards_result['YearWise']['MonthWise']['buckets'];
				}else if($yrs !='' && $status =='Open' || $status == 'Closed'){
					$query_total_month_wise_job_cards = $client->search([
						'body'=> [

					     'query' => [
					          'term'=> [
					            '_id'=> $arn
					          ]
					        ],
					        'size'=> 0,
					        'aggs' => [
					            'ordersNest' => [
					                'nested' => [
					                    'path' => 'ORDER_INFO'
					                ],
					                'aggs'=> [
					                  'countOpenClosedJc'=> [
					                    'filter'=> [
					                    'term'=> [
					                      'ORDER_INFO.STATUS_CD.keyword'=> $status
					                    ]],
					           'aggs'=> [
					  'YearWise'=> [
					    'filter'=> [
					    'term'=> [
					      'ORDER_INFO.FSCL_YEAR.keyword'=> $yrs
					                        ]],
					                    'aggs'=> [
					                       'MonthWise'=> [
					                         'terms'=> [
					                          'field'=> 'ORDER_INFO.ORDER_MONTH.keyword',
					                           'size'=> 12,
					                           'order'=> [
					                             '_key'=> 'asc'
					                           ]
					                           ]
					                          ]
					                         ]                            
					                       ]
					                    ]
					                  ]
					                ]
					            ]
					        ]
						]
					]);
					// print_r($query_total_month_wise_job_cards['aggregations']['ordersNest']['countOpenClosedJc']);die;
					if($query_total_month_wise_job_cards['aggregations']['ordersNest']['countOpenClosedJc'] >=1){
				$total_month_wise_job_cards_result = $query_total_month_wise_job_cards['aggregations']['ordersNest']['countOpenClosedJc'];
				}
				$output = $total_month_wise_job_cards_result['YearWise']['MonthWise']['buckets'];
				}else{
				$query_total_month_wise_job_cards = $client->search([
				'body' => [
					'query'=> [

						  'term'=> [

						    '_id'=>$arn

						  ]

						  ],

						  'size'=> 0,

						  'aggs'=> [

						    'ordersNest'=> [

						      'nested' =>  [

						        'path' => 'ORDER_INFO'
						      ],
						      
						          'aggs'=> [
						            'MonthWise'=> [
						              'terms'=> [
						                'field'=> 'ORDER_INFO.ORDER_MONTH.keyword',
						                'size'=> 12,
						                'order'=> [
						                	'_key'=> 'asc'
						                ]
						              ]
						            ]
						          ]

						    ]

						    ]
				]
			]);
			// print_r($query_total_month_wise_job_cards['aggregations']['ordersNest']);die;
			if($query_total_month_wise_job_cards['aggregations']['ordersNest'] >=1){
				$total_month_wise_job_cards_result = $query_total_month_wise_job_cards['aggregations']['ordersNest'];
				}
				$output = $total_month_wise_job_cards_result['MonthWise']['buckets'];
			}
		}

		echo json_encode($output);
	}

	public function detailed_job_cards()
	{
		$hosts = [URL.'jc_details/'];
		$client = ClientBuilder::create()->setHosts($hosts)->build();
		$par_accnt_id = $this->input->post('par_accnt_id');
		$arn = $this->input->post('arn');
		if($par_accnt_id != ''){

			$query_total_detailed_job_cards = $client->search([
				'body' => [
					'query' => [
					    'bool' => [
					      'must' =>
					        [
					          'term' => [
					            'PAR_ACCNT_ARN.keyword' => [
					              'value' => $par_accnt_id
					             
					            ]
					          ]
					        ]
					    ]
					    ],
					    '_source'=>   [
					                  'ORDER_INFO.ORDER_MONTHYEAR',
					                  'ORDER_INFO.DLR_SLS_STATE',
					                  'ORDER_INFO.CON_FST_NAME',
					                  'ORDER_INFO.TAT',
					                  'ORDER_INFO.VEHICLE_REGISTRATION_NUMBER',
					                  'ORDER_INFO.JC_CREATED_DT',
					                  'ORDER_INFO.DLR_NAME',
					                  'ORDER_INFO.ORDER_NUM',
					                  'ORDER_INFO.SR_ASSET_NUM',
					                  'ORDER_INFO.SR_ASSET_PL',
					                  'ORDER_INFO.SR_SR_CAT_TYPE_CD',
					                  'ORDER_INFO.STATUS_CD'
					                ]
				]
			]);
			// print_r($query_total_detailed_job_cards['hits']['hits']);die;
			if($query_total_detailed_job_cards['hits']['hits'] >=1){
				$total_detailed_job_cards_result = $query_total_detailed_job_cards['hits']['hits'];
			}

			$output = $total_detailed_job_cards_result[0]['_source']['ORDER_INFO'];
		
		} else {
			$query_total_detailed_job_cards = $client->search([
				'body' => [
					'query' => [
					    'bool' => [
					      'must' =>
					        [
					          'term' => [
					            'PAR_ACCNT_ARN.keyword' => [
					              'value' => $arn
					             
					            ]
					          ]
					        ]
					    ]
					    ],
					    '_source'=>   [
					                  'ORDER_INFO.ORDER_MONTHYEAR',
					                  'ORDER_INFO.DLR_SLS_STATE',
					                  'ORDER_INFO.CON_FST_NAME',
					                  'ORDER_INFO.TAT',
					                  'ORDER_INFO.VEHICLE_REGISTRATION_NUMBER',
					                  'ORDER_INFO.JC_CREATED_DT',
					                  'ORDER_INFO.DLR_NAME',
					                  'ORDER_INFO.ORDER_NUM',
					                  'ORDER_INFO.SR_ASSET_NUM',
					                  'ORDER_INFO.SR_ASSET_PL',
					                  'ORDER_INFO.SR_SR_CAT_TYPE_CD',
					                  'ORDER_INFO.STATUS_CD'
					                ]
				]
			]);
			// print_r($query_total_detailed_job_cards['hits']['hits']);die;
			if($query_total_detailed_job_cards['hits']['hits'] >=1){
				$total_detailed_job_cards_result = $query_total_detailed_job_cards['hits']['hits'];
			}

			$output = $total_detailed_job_cards_result[0]['_source']['ORDER_INFO'];
		}
		echo json_encode($output);
	}


	public function chassis_number()
	{
		$hosts = [URL.'orders/'];
		$client = ClientBuilder::create()->setHosts($hosts)->build();
		$par_accnt_id = $this->input->post('par_accnt_id');
		$arn = $this->input->post('arn');
		
		if($par_accnt_id != ''){

			$query_total_detailed_job_cards = $client->search([
				'body' => [
					
						'query' => [
			              'term'=> [
			               '_id'=> $par_accnt_id
			               ]
			                               ],
						    'size'=> 0,
						    'aggs' => [
						        'ordersNest' => [
						        'nested' => [
						        'path' => 'ORDER_INFO'
						     ],
						    'aggs'=> [
						      'StateWiseCount'=> [
						        'terms'=> ['field'=> 'ORDER_INFO.SR_ASSET_NUM.keyword','size'=>13000,
						]

						]

						]

						]

						]
				]
			]);
			// print_r($query_total_detailed_job_cards['aggregations']['ordersNest']);die;
			if($query_total_detailed_job_cards['aggregations']['ordersNest'] >=1){
				$total_detailed_job_cards_result = $query_total_detailed_job_cards['aggregations']['ordersNest'];
			}

			$output = $total_detailed_job_cards_result['StateWiseCount']['buckets'];
			$option = '';
			// print_r($output);die;
			// $option = 'jc_chassis_num';
			$option = '<option value=""> Select Chassis Number </option>';
			foreach ($output as $value) {
			$option .= '<option value="'.$value['key'].'">'.$value['key'].'</option>';
		}
		
		} else {
			$query_total_detailed_job_cards = $client->search([
				'body' => [
					
						'query' => [
			              'term'=> [
			               '_id'=> $arn
			               ]
			                               ],
						    'size'=> 0,
						    'aggs' => [
						        'ordersNest' => [
						        'nested' => [
						        'path' => 'ORDER_INFO'
						     ],
						    'aggs'=> [
						      'StateWiseCount'=> [
						        'terms'=> ['field'=> 'ORDER_INFO.SR_ASSET_NUM.keyword','size'=>13000,
						]

						]

						]

						]

						]
				]
			]);
			// print_r($query_total_detailed_job_cards['aggregations']['ordersNest']);die;
			if($query_total_detailed_job_cards['aggregations']['ordersNest'] >=1){
				$total_detailed_job_cards_result = $query_total_detailed_job_cards['aggregations']['ordersNest'];
			}

			$output = $total_detailed_job_cards_result['StateWiseCount']['buckets'];
			$option = '';
			// print_r($output);die;
			// $option = 'jc_chassis_num';
			$option = '<option value=""> Select Chassis Number </option>';
			foreach ($output as $value) {
			$option .= '<option value="'.$value['key'].'">'.$value['key'].'</option>';
		}
		}
		echo json_encode($option);

	}



}//End Class