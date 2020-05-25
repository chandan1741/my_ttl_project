<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title></title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="shortcut icon" type="image/png" href="<?php echo base_url();?>assets/img/TATAMushroom.png"/>
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/dist/css/skins/_all-skins.min.css">
  <link href='https://infoportal.tatamotors.com/customer360_dev/assets/css/custome.css' rel='stylesheet' type='text/css'>

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
   <link rel="stylesheet" href="<?php echo base_url()?>assets/bower_components/select2/dist/css/select2.min.css">
<style type="text/css">
  .callout.callout-info {
    border-color: #7a8a94 !important;
  }
  .callout {
    border-radius: 0px !important;
    margin: 0 0 20px 0;
    padding: 15px 30px 15px 15px;
    border-left: 5px solid #fbfbfb;
  }
  .callout.callout-info, .alert-info, .label-info, .modal-info .modal-body {
    background-color: #7a8a94 !important;
  }
  .vl {
  border-left: 1px solid #fff;
  height: 75px;
  }
  .vl1 {
  border-left: 1px solid #fff;
  height: 211px;
  }
  .vl2 {
  border-left: 1px solid #fff;
  height: 158px;
  }
  .vl3 {
  border-left: 1px solid #fff;
  height: 183px;
  }
  .vl4 {
    border-left: 1px solid #fff;
    height: 220px;
  }
  .vl5 {
  border-left: 1px solid #fff;
  height: 142px;
  }
  .intro{
    height: 69px;
  }
  .comp{
    height: 50px;
  }
  .square-box{
    position: relative;
    width: 29%;
    overflow: hidden;
    background: #6f0b0b;
    margin-left: 78px;
}
.square-box:before{
    content: "";
    display: block;
    padding-top: 100%;
}
.square-content{
    position:  absolute;
    top: 0;
    left: 0;
    bottom: 0;
    right: 0;
    color: white;
    text-align: center;
}
  a.disabled {
  pointer-events: none;
  cursor: default;
  }
  /*----------------------Table Scrool-----------------------------------------------------*/
  .my-custom-scrollbar {
position: relative;
height: 456px;;
overflow: auto;
}
.my-custom-scrollbar1 {
position: relative;
height: 200px;;
overflow: auto;
}
.my-custom-scrollbar2 {
    position: relative;
    /*height: 511px;*/
    overflow: auto;
    width: 378px;
}
.table-wrapper-scroll-y {
display: block;
}
  
#chartdiv {
  width: 100%;
  height: 500px;
}
  /*----------------------------------------------------------------------------------------*/

/*svg{width:100%;}*/
#container {
    height: 500px; 
    min-width: 310px; 
    max-width: 800px; 
    margin: 0 auto; 
}
#container1 {
    height: 500px; 
    min-width: 310px; 
    max-width: 800px; 
    margin: 0 auto; 
}
.loading {
    /*margin-top: 10em;*/
    text-align: center;
    color: gray;
}
#month_wise_jc_chart{
    width: 115%;
    height: 500px;
    margin-left: -29px;
    margin-top: 
}
/*---------------------------------------------------Water Mark-------------------------------------*/
#background_ip {
    position: absolute;
    z-index: 1;
    background: #ffffff00;
    display: block;
    min-height: 50%;
    min-width: 98%;
    color: yellow;
    margin-left: 0%;
    margin-top: 0%
}
#background_ip2 {
    position: absolute;
    z-index: 1;
    background: #ffffff00;
    display: block;
    min-height: 50%;
    min-width: 30%;
    color: yellow;
    margin-left: 0%;
    margin-top: 0%
}
#background_ip3 {
    position: absolute;
    z-index: 1;
    background: #ffffff00;
    display: block;
    min-height: 50%;
    min-width: 169%;
    color: yellow;
    margin-left: 0%;
    margin-top: 0%
}
#background_ip4 {
    position: absolute;
    z-index: 1;
    background: #ffffff00;
    display: block;
    min-height: 50%;
    min-width: 28%;
    color: yellow;
    margin-left: 0%;
    margin-top: 4%
}#background_ip5 {
    position: absolute;
    z-index: 1;
    background: #ffffff00;
    display: block;
    min-height: 50%;
    min-width: 82%;
    color: yellow;
    margin-left: 0%;
    margin-top: 4%
}#background_ip6 {
    position: absolute;
    z-index: 1;
    background: #ffffff00;
    display: block;
    min-height: 50%;
    min-width: 161%;
    color: yellow;
    margin-left: 0%;
    margin-top: 4%
}
#background_ip7 {
    position: absolute;
    z-index: 1;
    background: #ffffff00;
    display: block;
    min-height: 50%;
    min-width: 92%;
    color: yellow;
    margin-left: 0%;
    margin-top: 13%
}
#background_ip8 {
    position: absolute;
    z-index: 1;
    background: #ffffff00;
    display: block;
    min-height: 50%;
    min-width: 92%;
    color: yellow;
    margin-left: 0%;
    margin-top: 13%
}
#bg-text {
    color:#ababab47;
    font-size:15px;
    transform:rotate(360deg);
    -webkit-transform:rotate(360deg);
}

#background_ip1 {
    position: absolute;
    z-index: 1;
    background: #ffffff00;
    display: block;
    min-height: 40%;
    min-width: 50%;
    color: yellow;
    margin-left: 22%;
    margin-top: 12%;
}
#bg-text1 {
    color:#ababab47;
    font-size:24px;
    transform:rotate(360deg);
    -webkit-transform:rotate(360deg);
}
#bg-text2 {
    color:#ababab47;
    font-size:12px;
    transform:rotate(360deg);
    -webkit-transform:rotate(360deg);
}
#bg-text3 {
    color:#ababab47;
    font-size:29px;
    transform:rotate(360deg);
    -webkit-transform:rotate(360deg);
}
#background_ip9 {
    position: absolute;
    z-index: 0;
    background: #ffffff00;
    display: block;
    min-height: 40%;
    min-width: 100%;
    color: yellow;
    /*margin-left: 22%;*/
    margin-top: 3%;
}
#background_ip10 {
    position: absolute;
    z-index: 1;
    background: #ffffff00;
    display: block;
    min-height: 40%;
    min-width: 100%;
    color: yellow;
    /*margin-left: 22%;*/
    margin-top: 3%;
}
#bg-text9 {
    color:#ababab47;
    font-size:5em;
    transform:rotate(360deg);
    -webkit-transform:rotate(360deg);
}
#lob_wise_job_cards {
  width: 100%;
  height: 500px;
  }
  /*//Chessis Dropdown*/
  .select2-container--default .select2-selection--single {
    background-color: #fff;
    border: 1px solid #aaa;
    border-radius: 0px !important;
    height: 35px !important;
}
.select2{
  width: 349px !important;
}
.bgColor{
    background-color: #137dbd;
    color: #ffffff;
} 
#PreValue,#nextValue{
    border: none;
    height: 25px;
    border-radius: 5px;
}

#background_ip_jc {
    position: absolute;
    z-index: 0;
    background: #ffffff00;
    display: block;
    min-height: 40%;
    min-width: 100%;
    color: yellow;
    /* margin-left: 22%; */
    margin-top: 43%;
} 

#background_intor{
    position: absolute;
    z-index: 1;
    background: #ffffff00;
    display: block;
    min-height: 40%;
    min-width: 13%;
    color: yellow;
    margin-left: 0%;
    margin-top: 0%;
  }
  #background_intor_1 {
    position: absolute;
    z-index: 1;
    background: #ffffff00;
    display: block;
    min-height: 0%;
    min-width: 175%;
    color: yellow;
    margin-left: 0%;
    margin-top: 0%;
}
#background_intor_2 {
    position: absolute;
    z-index: 0;
    background: #ffffff00;
    display: block;
    min-height: 0%;
    min-width: 85%;
    color: yellow;
    margin-left: 0%;
    margin-top: 0%;
}

</style>
<link href='https://fonts.googleapis.com/css?family=Orbitron' rel='stylesheet' type='text/css'>
 <!-- <section class="content-header"> -->
  <link href='<?php echo base_url();?>assets/css/custome.css' rel='stylesheet' type='text/css'>
<!-- Content Wrapper. Contains page content -->
</head>
<!-- ADD THE CLASS layout-top-nav TO REMOVE THE SIDEBAR. -->
<body class="hold-transition skin-blue layout-top-nav">
<div class="wrapper">

  
  <!-- Full Width Column -->
  <div class="content-wrapper">
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          
          <!-- <div class="col-md-3">
          <img src="<?php echo base_url();?>assets/img/spaqplug_logo.png" style="width: 26%">
        </div> -->
        
      <!--  <div class=" col-md-3 pull-right">
          <img src="<?php echo base_url();?>assets/img/tata_it_logo (2).png">
          </div> -->
        </div>
        <div class="col-xs-12">
          <div class="nav-tabs-custom" style="height: 495px;">
            <ul id="myTab" class="nav nav-tabs">
              <li class="active"><a href="#fa-icons" data-toggle="tab">Introduction</a></li>
              <li><a href="#glyphicons" id="t2" class="disabled">CVBU Customer 360</a></li>
              <!-- <li><a href="#glyphicons1" id="t3" class="disabled">Total Complaints Details</a></li> -->
              <li><a href="#glyphicons2" id="t4" class="disabled">Job Card Details</a></li>
              <?php if($this->session->userdata('access_token') == '') {?>
              <a href="<?php echo base_url();?>login/logout"  title="Sign out" class="btn btn-danger pull-right flat" role="button" style="margin-top: 4px;margin-right: 2%;font-size: 14px;">Sign out <i class="fa fa-sign-out" aria-hidden="true"></i></a>
          <?php } ?>
            </ul>

            <div class="tab-content">
              <!-- Font Awesome Icons -->
              <div class="tab-pane active" id="fa-icons">
                <section id="new" >

                  <!-- <h4 class="page-header">Customer 360&#xb0;</h4> -->
                  <div class="col-md-12">
                  <!-- <div class="row fontawesome-icon-list"> -->
                    <div class="callout callout-info intro">
                  <div class="col-md-12">
                    <div class="col-md-4">
                      <!-- <div class="input-group">
                        <span class="input-group-addon" title="Golden Record Flag">
                          <input type="checkbox" name="g_record" id="g_record" value="true" title="Golden Record Flag">
                        </span>
                    </div> -->
                      <div class="form-group">

                      <select class="form-control" name="search_type" id="search_type" required>
                        <option value="">Select search type</option>
                        <option value="acc_name">Account Name</option>
                        <option value="arn_no">ARN Number</option>
                        <option value="v_r_num">Vehicle Registration Number</option>
                        <option value="chassis_num">Chassis Number</option>
                      </select>
                    </div>
                    </div>
                    <div class="col-md-4">
                      <div class="input-group">
                        <span class="input-group-addon" title="Golden Record Flag">
                          <input type="checkbox" name="g_record" id="g_record" value="true" title="Golden Record Flag">
                        </span>
                    <input type="text" placeholder="Please Select Search Type" name="p_search" id="p_search" class="form-control">
                    </div>
                      <ul class="list-group" id="_parent_data" style="color: #000;">
                      
                      </ul>
                    </div>
                    <div class="col-md-4">
                       <input type="text" name="p_ARN" id="p_ARN" class="form-control" readonly placeholder="ARN NUMBER">
                    </div>
                  </div>
                </div>

                <div class="callout callout-info gold_bg_intro">
                  <div id="background_intor">
                    <img src="<?php echo base_url();?>assets/img/spaqplug_logo.png" style="width: 37%">
                     <!--  <p id="bg-text2" style="text-align: center;"><?php echo $this->session->userdata('user_name');?></p>
                      <p id="bg-text2" style="text-align: center;"><?php echo $this->session->userdata('ip');?></p>
                       <p id="bg-text2" style="text-align: center;"><?php echo date('d-m-Y H:i:s');?></p> -->
                       
                        </div>
                        <div id="background_intor_1">
                          <div style="text-align: center;">
                    <img src="<?php echo base_url();?>assets/img/tata_it_logo (2).png" style="height: 40px;width: 9%;">
                  </div>

                  <!--     <p id="bg-text2" style="text-align: center;"><?php echo $this->session->userdata('user_name');?></p>
                      <p id="bg-text2" style="text-align: center;"><?php echo $this->session->userdata('ip');?></p>
                       <p id="bg-text2" style="text-align: center;"><?php echo date('d-m-Y H:i:s');?></p> -->
                       
                        </div>
                        <!-- <div id="background_intor_2">

                      <p id="bg-text2" style="text-align: center;"><?php echo $this->session->userdata('user_name');?></p>
                      <p id="bg-text2" style="text-align: center;"><?php echo $this->session->userdata('ip');?></p>
                       <p id="bg-text2" style="text-align: center;"><?php echo date('d-m-Y H:i:s');?></p>
                       
                        </div> -->
                  <div class="col-md-12">

                    <div class="col-md-1">
                    </div>
                    <div class="col-md-4">
                    <div style="text-align: center;">
                    <img src="<?php echo base_url();?>assets/img/p6.png" style="height: 75px;width: 27%;">
                  </div>
                    <h4 style="/* background-color:#3c8dbc; */text-align: center;color: #fff; margin-bottom: 8px; "><strong>Golden ARN Details</strong></h4>
                    <div class="box-body" style="margin-top: -16px;">
                      <div id="background_ip1">
                      <p id="bg-text2" style="text-align: center;"><?php echo $this->session->userdata('user_name');?></p>
                      <p id="bg-text2" style="text-align: center;"><?php echo $this->session->userdata('ip');?></p>
                       <p id="bg-text2" style="text-align: center;"><?php echo date('d-m-Y H:i:s');?></p>
                       
                        </div>
              <table id="ptbl" class="table table-bordered table-striped">
                <thead>
                <tr style="background-color: #6b6b6b;">
                  <th style="text-align: center; color: #000;"><label name="p_id" id="p_id" ></label></th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td style="color: #000; text-align: center;"><label name="p_n" id="p_n" ></label>
                    <label name="p_n1" id="p_n1" ></label></td>
                </tr>
                 <tr>
                  <td style="background-color: #fff; color: #000;text-align: center;"><label name="p_mob" id="p_mob"></label><label name="p_mob1" id="p_mob1"></label></td>
                </tr>
                <tr>
                  <td  style="background-color: #fff; color: #000;text-align: center;" id="total_child_count"></td>
                </tr>
                </tbody>
                
              </table>

            </div>
              <div style="text-align: center;">
                  <!-- <input type="button" name="cvbu_btn" id="cvbu_btn" data="All" class="btn btn btn-info flat pull-center" value="CVBU Customer 360" disabled>  </input> -->
                  <button type="button" name="cvbu_btn" id="cvbu_btn" data="All" class="btn btn btn-info flat pull-center" value="CVBU Customer 360" disabled>CVBU Customer 360  <i class="fa fa-paper-plane" aria-hidden="true"></i> </button>
                  
                  
                </div>
                  </div>
                 
                    <!-- <div class="col-md-3 col-sm-6 col-xs-12 col">
                      <div class='square-box'>
                          <div class='square-content'>
                            <h3 style="font-family: 'Orbitron', sans-serif;text-align: center;    font-size: 23px;">0</h3>
                          </div>
                      </div>
                      
                    </div> -->
                    <div class="col-md-6 col-xs-12">
                       <div style="text-align: center;">
                    <img src="<?php echo base_url();?>assets/img/p2.png" style="height: 79px;width: 20%;">
                  </div>
                    <h4 style="/*background-color:#3c8dbc;*/text-align: center;color: #fff;margin-bottom: 0px;"><strong>Child ARN Details</strong></h4>
                    <!-- <div class="box"> -->
           
                     <div class="box-body table-responsive table-wrapper-scroll-y my-custom-scrollbar1" style="background-color: #fff; padding: 0px;">
                      <div id="background_ip1">
                      <p id="bg-text1" style="text-align: center;"><?php echo $this->session->userdata('user_name');?></p>
                      <p id="bg-text1" style="text-align: center;"><?php echo $this->session->userdata('ip');?></p>
                       <p id="bg-text1" style="text-align: center;"><?php echo date('d-m-Y H:i:s');?></p>
                       
                        </div>
                    <table id="example1" class="table table-bordered table-striped mb-0">
                      <thead>
                      <tr style="background-color: #6b6b6b;">
                        <th>#</th>
                        <th>ARN</th>
                        <th>Mobile</th>
                        <th>Account Name</th>
                        <th></th>
                      </tr>
                      </thead>
                      <tbody id="child_data_tbl">
                    
                      
                    </tbody>
                  </table>
                </div>
              <!-- </div> -->
                    </div>

                  </div>
                </div>
                    <!-- </div> -->
                  </div>
                </section>

              </div>

              
<!---------------------------------------CVBU Customer 360------------------------------------------------>
        <!-- /#fa-icons -->
              <!-- glyphicons-->
              <div class="tab-pane" id="glyphicons">
                  <section id="new">
                    <!-- <div id="background_ip">
                      <p id="bg-text" style="text-align: center;"><?php echo $this->session->userdata('user_name');?></p>
                      <p id="bg-text" style="text-align: center;"><?php echo $this->session->userdata('ip');?></p>
                       <p id="bg-text" style="text-align: center;"><?php echo date('d-m-Y H:i:s');?></p>
                       
                        </div> -->
                  <!-- <h4 class="page-header">Customer 360&#xb0;</h4> -->

                  <!-- <div class="row fontawesome-icon-list"> -->
                    <div class="callout callout-info" style="height: 100px;">
                  <div class="col-md-12">
                    <div id="background_ip">
                      <p id="bg-text" style="text-align: center;"><?php echo $this->session->userdata('user_name');?></p>
                      <p id="bg-text" style="text-align: center;"><?php echo $this->session->userdata('ip');?></p>
                       <p id="bg-text" style="text-align: center;"><?php echo date('d-m-Y H:i:s');?></p>
                       
                        </div>
                        <div id="background_ip2">
                      <p id="bg-text" style="text-align: center;"><?php echo $this->session->userdata('user_name');?></p>
                      <p id="bg-text" style="text-align: center;"><?php echo $this->session->userdata('ip');?></p>
                       <p id="bg-text" style="text-align: center;"><?php echo date('d-m-Y H:i:s');?></p>
                       
                        </div>
                        <div id="background_ip3">
                      <p id="bg-text" style="text-align: center;"><?php echo $this->session->userdata('user_name');?></p>
                      <p id="bg-text" style="text-align: center;"><?php echo $this->session->userdata('ip');?></p>
                       <p id="bg-text" style="text-align: center;"><?php echo date('d-m-Y H:i:s');?></p>
                       
                        </div>
                    <div class="col-md-4 col-xs-6 f1">
                      <span><strong>Golden Account:</strong></span>
                      <span id='g_account_name'></span><br>
                        <span id='g_account_arn_num'></span><br>
                      <span><strong>Child Account:</strong></span>
                      <span id="g_chil_name"></span><br>
                        <span id="g_chil_arn_num"></span>
                    </div>
                    <div class="col-md-4 vl col-xs-3">
                      <h4 style="text-align: center;"><strong>PSF Sales Score</strong></h4>
                   
                      <div id="pfs_sales_data" class="fonts">0.00/5</div>
                    </div>
                    <div class="col-md-3 vl col-xs-3">
                      <h4 style="text-align: center;"><strong>PSF Service Score</strong></h4>
                      <div id="pfs_service_data" class="fonts">0.00/5</div>
                    </div>
                    <div>
                    <img src="<?php echo base_url();?>assets/img/spaqplug_logo.png" style="width: 6%">
                    </div>
                  </div>
                </div>
                <!-- Modal -->
        <div id="myModal" class="modal fade" role="dialog">
          <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Current Pipeline</h4>
              </div>
              <div class="modal-body">
                <div class="row">
                  <div class="col-md-1 col-xs-4" style="width: 14%">
                      <h4 style="text-align: center;">C0</h4>
                      <div style="text-align: center;">
                     <svg id="animated" viewbox="0 0 100 100">
                  <circle cx="50" cy="50" r="45" fill="#FDB900"/>
                  <path id="progress" stroke-linecap="round" stroke-width="5" stroke="#fff" fill="none"
                        d="M50 10
                           a 40 40 0 0 1 0 80
                           a 40 40 0 0 1 0 -80">
                  </path>
                  <!-- <div id="C0_Qty" text-anchor="middle" dy="7">0</div> -->
                  <text id="C0_Qty" x="50" y="50" text-anchor="middle" dy="7" font-size="20">0</text>
                </svg> 
                </div>
                    </div>
                    <div class="col-md-1 col-xs-4" style="width: 14%">
                     <h4 style="text-align: center;">C1</h4>
                      <div style="text-align: center;">
                     <svg id="animated" viewbox="0 0 100 100">
                  <circle cx="50" cy="50" r="45" fill="#FDB900"/>
                  <path id="progress" stroke-linecap="round" stroke-width="5" stroke="#fff" fill="none"
                        d="M50 10
                           a 40 40 0 0 1 0 80
                           a 40 40 0 0 1 0 -80">
                  </path>
                  <text id="c1_qty" x="50" y="50" text-anchor="middle" dy="7" font-size="20">0</text>
                </svg> 
                </div>
                    </div>
                    <div class="col-md-1 col-xs-4" style="width: 14%">
                     <h4 style="text-align: center;">C1A</h4>
                      <div style="text-align: center;">
                     <svg id="animated" viewbox="0 0 100 100">
                  <circle cx="50" cy="50" r="45" fill="#FDB900"/>
                  <path id="progress" stroke-linecap="round" stroke-width="5" stroke="#fff" fill="none"
                        d="M50 10
                           a 40 40 0 0 1 0 80
                           a 40 40 0 0 1 0 -80">
                  </path>
                  <text id="C1A_Qty" x="50" y="50" text-anchor="middle" dy="7" font-size="20">0</text>
                </svg> 
                </div>
                    </div>
                    <div class="col-md-1 col-xs-4" style="width: 14%">
                     <h4 style="text-align: center;">C2</h4>
                      <div style="text-align: center;">
                     <svg id="animated" viewbox="0 0 100 100">
                  <circle cx="50" cy="50" r="45" fill="#FDB900"/>
                  <path id="progress" stroke-linecap="round" stroke-width="5" stroke="#fff" fill="none"
                        d="M50 10
                           a 40 40 0 0 1 0 80
                           a 40 40 0 0 1 0 -80">
                  </path>
                  <text id="C2_Qty" x="50" y="50" text-anchor="middle" dy="7" font-size="20">0</text>
                </svg> 
                </div>
                    </div>
                    <div class="col-md-1 col-xs-4" style="width: 14%">
                    <h4 style="text-align: center;">Lost</h4>
                      <div style="text-align: center;">
                     <svg id="animated" viewbox="0 0 100 100">
                  <circle cx="50" cy="50" r="45" fill="#FDB900"/>
                  <path id="progress" stroke-linecap="round" stroke-width="5" stroke="#fff" fill="none"
                        d="M50 10
                           a 40 40 0 0 1 0 80
                           a 40 40 0 0 1 0 -80">
                  </path>
              <text id="lost_Qty" x="50" y="50" text-anchor="middle" dy="7" font-size="20">0</text>
                </svg> 
                </div>
            </div>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-danger flat" data-dismiss="modal">Close</button>
              </div>
            </div>

          </div>
        </div>
                <div id="_data" style="display: none;"></div>
                  <!-- </div> -->
                  <div class="callout callout-info" style="height: 204px;">
                    <a href="javascript:void(0);" title="click here" id="data_model" style="text-decoration: none;"><i class="fa fa-info-circle" aria-hidden="true"></i> Click here for more pipeline</a>
                  <div class="col-md-12">
                    <div class="col-md-4">
                       <!-- <div class="col-md-1 col-xs-4 vl5" style="width: 14%"> -->
                       <div class="col-md-5 col-xs-4">
                      <h4 style="text-align: center;">C3</h4>
                      <div style="text-align: center;"><svg id="animated" viewbox="0 0 100 100">
                  <circle cx="50" cy="50" r="45" fill="#FDB900"/>
                  <path id="progress" stroke-linecap="round" stroke-width="5" stroke="#fff" fill="none"
                        d="M50 10
                           a 40 40 0 0 1 0 80
                           a 40 40 0 0 1 0 -80">
                  </path>
                  
              <text id="C3_Qty" x="50" y="50" text-anchor="middle" dy="7"  style="color: #000;font-size: 22px;">0</text>
              
                </svg> </div>
                    </div>
                    <div class="col-md-5 col-xs-4">
                      <h4 style="text-align: center;">Direct Billing</h4>
                      <div style="text-align: center;"><svg id="animated" viewbox="0 0 100 100">
                  <circle cx="50" cy="50" r="45" fill="#FDB900"/>
                  <path id="progress" stroke-linecap="round" stroke-width="5" stroke="#fff" fill="none"
                        d="M50 10
                           a 40 40 0 0 1 0 80
                           a 40 40 0 0 1 0 -80">
                  </path>
                  
              <text id="direct_billing" x="50" y="50" text-anchor="middle" dy="7"  style="color: #000;font-size: 22px;">0</text>
              
                </svg> </div>
                    </div>
                    </div>
                    <div class="col-md-8 vl5" >
                      <h4 style="text-align: center;"><strong>Insights</strong></h4>
                      <h4 style="text-align: center;"><i>**Coming Soon**</i></h4>
                      <p style="text-align: center;">&#9632; Only 10% vehicles under AMC || Promote AMC</p>
                      <p style="text-align: center;">&#9632; 1 Job Card Opened > 10 days || Escalate to service team.</p>
                      <p style="text-align: center;">&#9632; Recommend serice campaign : Starter Motor</p>
                      <p style="text-align: center;">&#9632; Loyalty points</p> 

                    </div>

                    <div id="background_ip4">
                      <p id="bg-text" style="text-align: center;"><?php echo $this->session->userdata('user_name');?></p>
                      <p id="bg-text" style="text-align: center;"><?php echo $this->session->userdata('ip');?></p>
                       <p id="bg-text" style="text-align: center;"><?php echo date('d-m-Y H:i:s');?></p>
                       
                        </div>
                        <div id="background_ip5">
                      <p id="bg-text" style="text-align: center;"><?php echo $this->session->userdata('user_name');?></p>
                      <p id="bg-text" style="text-align: center;"><?php echo $this->session->userdata('ip');?></p>
                       <p id="bg-text" style="text-align: center;"><?php echo date('d-m-Y H:i:s');?></p>
                       
                        </div>
                        <div id="background_ip6">
                      <p id="bg-text" style="text-align: center;"><?php echo $this->session->userdata('user_name');?></p>
                      <p id="bg-text" style="text-align: center;"><?php echo $this->session->userdata('ip');?></p>
                       <p id="bg-text" style="text-align: center;"><?php echo date('d-m-Y H:i:s');?></p>
                       
                        </div>
                    
                    <!-- </div> -->
                   
                    
                  </div>
                </div>
                <!-- ----- -->
                <div class="callout callout-info intended">
                  <div class="col-md-12">

                    <div class="col-md-6 col-xs-12">
                      <div id="background_ip7">
                      <p id="bg-text3" style="text-align: center;"><?php echo $this->session->userdata('user_name');?></p>
                      <p id="bg-text3" style="text-align: center;"><?php echo $this->session->userdata('ip');?></p>
                       <p id="bg-text3" style="text-align: center;"><?php echo date('d-m-Y H:i:s');?></p>
                       
                        </div>
                      <h4 style="text-align: center;"><strong>Revenue Analysis</strong></h4>
                      <div class="small-box" style="background-color: #fff;">
                      <div class="col-md-4" style="background-color: #fff; text-decoration: none;height: 61px;">
                        <p style="color: #000; text-align: center;">Total Vehicles</p>
                        <strong><p style="color: #000; text-align: center;font-size: 1em;font-family: 'Orbitron', sans-serif;" id="t_v"> 0 </p></strong>
                      </div>
                      <div class="col-md-4" style="background-color: #fff; text-decoration: none;text-align: center;">
                        <img src="<?php echo base_url();?>assets/img/grow-revenue.png" style="height: 61px;width: 70%;">
                      </div>
                      <div class="col-md-4" style="background-color: #fff;height: 61px;">
                        <p style="color: #000; text-align: center;">Total Revenue</p>
                        <strong><p style="color: #000; text-align: center;font-size: 1em;font-family: 'Orbitron', sans-serif;" id="tot_rev">&#8377; 0</p></strong>
                      </div>
                    </div>
                    
                     <div class="small-box" style="background-color: #fff;">
                       
                      <div class="col-md-4" style="background-color: #5e3d94; height: 70px;">
                        <h4 style="text-align: center;">Invoice Amount</h4>
                        <strong><p style="color: #fff; text-align: center;font-size: 1em;margin-top: 25px;font-family: 'Orbitron', sans-serif;" id="inv_amount">&#8377; 0</p></strong>
                      </div>
                      <div class="col-md-4" style="background-color: #ec8e00; text-align: center;height: 70px;" >
                        <h4 style="text-align: center;">Spares Revenue</h4>
                        <strong><p style="color: #fff; text-align: center;font-size: 1em;margin-top: 25px;font-family: 'Orbitron', sans-serif;" id="spares_revenue">&#8377; 0</p></strong>
                        
                      </div>
                      <div class="col-md-4" style="background-color: #653003;height: 70px;" >
                        <h4 style="text-align: center;">JC Revenue</h4>
                        <strong><p style="color: #fff; text-align: center;font-size: 1em;margin-top: 25px;font-family: 'Orbitron', sans-serif;" id="jc_revenue">&#8377; 0</p></strong>
                        
                      </div>
                    </div>
                    </div> 
                    
                    <div class="col-md-6 col-xs-12 vl1">
                      <div id="background_ip8">
                      <p id="bg-text3" style="text-align: center;"><?php echo $this->session->userdata('user_name');?></p>
                      <p id="bg-text3" style="text-align: center;"><?php echo $this->session->userdata('ip');?></p>
                       <p id="bg-text3" style="text-align: center;"><?php echo date('d-m-Y H:i:s');?></p>
                       
                        </div>
                      <!-- <div id="background_ip">
                      <center><p id="bg-text"></p></center>
                      <center><p id="bg-text"></p></center>
                       <p id="bg-text"><?php echo date('d-m-Y H:i:s');?></p>
                        </div> -->
                      <h4 style="text-align: center;"><strong>Loyalty Point Analysis</strong></h4>
                      <div style="text-align: center;">
                       <img id="loyalty_chartContainer_loading" src="<?php echo base_url();?>assets/img/spinner.gif" style="display:none;height: 131px;width: 25%;"/>
                       </div>
                      <div id="loyalty_chartContainer" style="height: 190px; width: 100%;"></div>
                    </div>
                  </div>
                </div>
                <!-- ---- -->
                <div class="callout callout-info intended intended1">
                  <!-- <div class="col-md-12"> -->
                    
                    <div class="col-md-6 col-xs-12">
                      <div id="background_ip9">
                      <p id="bg-text3" style="text-align: center;"><?php echo $this->session->userdata('user_name');?></p>
                      <p id="bg-text3" style="text-align: center;"><?php echo $this->session->userdata('ip');?></p>
                       <p id="bg-text3" style="text-align: center;"><?php echo date('d-m-Y H:i:s');?></p>
                       
                        </div>
                      <h4 style="text-align: center;"><strong>Financier Analysis</strong></h4>
                      <div style="text-align: center;">
                        <div>
                        <img id="financier_analysis_loading" src="<?php echo base_url();?>assets/img/spinner.gif" style="display:none;height: 131px;width: 25%;"/>
                        </div>
                      <div id="financier_analysis"></div>
                    </div>
                      
                    </div>
                    <div class="col-md-6 col-xs-12 vl2">
                      <div id="background_ip9">
                      <p id="bg-text3" style="text-align: center;"><?php echo $this->session->userdata('user_name');?></p>
                      <p id="bg-text3" style="text-align: center;"><?php echo $this->session->userdata('ip');?></p>
                       <p id="bg-text3" style="text-align: center;"><?php echo date('d-m-Y H:i:s');?></p>
                       
                        </div>
                      <h4 style="text-align: center;"><strong>Intended Application Usage</strong></h4>
                     
                      <div class="table-responsive" style="text-align: center;overflow: hidden;">
                      <img id="loading-image" src="<?php echo base_url();?>assets/img/loading.gif" style="display:none;height: 200px;width: 64%;"/>
                      <div id="intendedChartContainer" style="height: 150px; width: 100%;"></div>
                      </div>
                    </div>
                  <!-- </div> -->
                </div>
                <!-- --------- -->
                <div class="callout callout-info jc_service">
                  <div class="col-md-12">
                    
                    <div class="col-md-6 col-xs-12">
                      <div id="background_ip9">
                      <p id="bg-text3" style="text-align: center;"><?php echo $this->session->userdata('user_name');?></p>
                      <p id="bg-text3" style="text-align: center;"><?php echo $this->session->userdata('ip');?></p>
                       <p id="bg-text3" style="text-align: center;"><?php echo date('d-m-Y H:i:s');?></p>
                       
                        </div>
                      <h4 style="text-align: center;"><strong>JC Service Analysis</strong></h4>
                      <div id="jc_service_analysis" style="height: 190px; width: 100%;"></div>
                    </div>
                    <div class="col-md-6 col-xs-12 vl4">

                      <a href="javascript:void(0);" id="total_job_card"  title="Click here" style="text-decoration: none;"><i class="fa fa-info-circle" aria-hidden="true"></i> Click here for Total JC to view details</a>

                      <div class="small-box" style="background-color: #fff;margin-top: 15px;"> 
                        <div id="background_ip10">
                      <p id="bg-text3" style="text-align: center;"><?php echo $this->session->userdata('user_name');?></p>
                      <p id="bg-text3" style="text-align: center;"><?php echo $this->session->userdata('ip');?></p>
                       <p id="bg-text3" style="text-align: center;"><?php echo date('d-m-Y H:i:s');?></p>
                       
                        </div>
                    <div class="col-md-6 col-xs-12" style="background-color: #948060;height: 70px;" >
                        <h4 style="text-align: center;">Total JC</h4>
                        <strong><p style="color: #fff; text-align: center;font-size: 1em;margin-top: 25px;font-family: 'Orbitron', sans-serif;" id="total_jc"> 0</p></strong>
                        
                      </div>
                      <div class="col-md-6 col-xs-12" style="background-color: #dd4b39;height: 70px;" >
                        <h4 style="text-align: center;">Open JC</h4>
                        <strong><p style="color: #fff; text-align: center;font-size: 1em;margin-top: 25px;font-family: 'Orbitron', sans-serif;" id="open_jc"> 0</p></strong>
                        
                      </div>
                     <!--  <div class="col-md-4 col-xs-12" style="background-color: #22b6e2;height: 70px;" >
                        <h4 style="text-align: center;">Bandhu JC</h4>
                        <strong><p style="color: #fff; text-align: center;font-size: 1em;margin-top: 25px;font-family: 'Orbitron', sans-serif;" id="bandhuapp_jc"> 0 </p></strong>
                        
                      </div> -->
                      </div>
                      <div class="small-box" style="background-color: #fff;">
                       
                      <div class="col-md-12" style="background-color: #22b6e2; height: 70px;">
                        <h4 style="text-align: center;">Bandhu JC</h4>
                        <strong><p style="color: #fff; text-align: center;font-size: 1em;margin-top: 25px;font-family: 'Orbitron', sans-serif;" id="bandhuapp_jc"> 0 </p></strong>
                      </div>
                    </div>
                     
                  </div>
                </div>
              </div>

              <!-- -------------------- -->
                <div class="callout callout-info revenue">
                  <div class="col-md-12">
                    
                   <div class="col-md-6 col-xs-12 ">
                      <h4 style="text-align: center;"><strong>Complaints History</strong></h4>
                      <div class="small-box" style="background-color: #fff;">
                        <!-- <div style="background-color: #fff;"> -->
                      <div class="col-md-6" style="background-color: #b773e2; text-decoration: none;height: 61px;">
                        <a href="javascript:void(0);" style="text-decoration: none;" id="total_complaints"><h4 style="text-align: center;">Total Complaints</h4>
                        <strong><p style="color: #fff; text-align: center;font-size: 1em;font-family: 'Orbitron', sans-serif;" id="total_comp"> 0 </p></strong></a>
                      </div>
                      
                      <div class="col-md-6" style="background-color: #dd4b39c4;height: 61px;">
                        <h4 style="text-align: center;">Total Open</h4>
                        <strong><p style="color: #fff; text-align: center;font-size: 1em;font-family: 'Orbitron', sans-serif;" id="total_open"> 0 </p></strong>
                      </div>
                      <!-- </div> -->
                    </div>
                    
                     <div class="small-box" style="background-color: #fff;">
                       
                      <div class="col-md-6" style="background-color: #00a65a; height: 70px;">
                        <h4 style="text-align: center;">Total Closed</h4>
                        <strong><p style="color: #fff; text-align: center;font-size: 1em;margin-top: 25px;font-family: 'Orbitron', sans-serif;" id="total_closed"> 0 </p></strong>
                      </div>
                      <!-- <div class="col-md-4" style="background-color: #ec8e00; text-align: center;height: 70px;" >
                        <h4 style="text-align: center;">Spares Revenue</h4>
                        <strong><p style="color: #fff; text-align: center;font-size: 1em;margin-top: 25px;font-family: 'Orbitron', sans-serif;" id="spares_revenue">&#8377; 0</p></strong>
                        
                      </div> -->
                      <div class="col-md-6" style="background-color: #00c0ef;height: 70px;" >
                        <h4 style="text-align: center;">Avg Resolution Days</h4>
                        <strong><p style="color: #fff; text-align: center;font-size: 1em;margin-top: 25px;font-family: 'Orbitron', sans-serif;" id="avg_day"> 0</p></strong>
                        
                      </div>
                      <!-- </div> -->
                    </div>
                      
                    </div>
                    <div class="col-md-6 col-xs-12 vl3">
                      <div id="background_ip9">
                      <p id="bg-text3" style="text-align: center;"><?php echo $this->session->userdata('user_name');?></p>
                      <p id="bg-text3" style="text-align: center;"><?php echo $this->session->userdata('ip');?></p>
                       <p id="bg-text3" style="text-align: center;"><?php echo date('d-m-Y H:i:s');?></p>
                       
                        </div>
                       <h4 style="text-align: center;"><strong>Complaints Problem Area Analysis</strong></h4>
                      <div id="treecontainer" style="width: 100%; background-color: #fff;">
                
                    
                    </div>
                  </div>
                </div>
            </div>
           
      
      <!-- </div> -->
                </section>
              </div>
<!------------------------------------------------------Total Complaints Details------------------------>
              <div class="tab-pane" id="glyphicons1">
                <section id="new">
                  <!-- <h4 class="page-header">Customer 360&#xb0;</h4> -->
                  <div class="callout callout-info comp">
                  <div class="col-md-12">
                    <h4 style="text-align: center;">Total Complaints Details Report</h4>
                  </div>
                  
                </div>
                <div class="col-md-12">
                   <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-yellow">
                  <div class="inner">
                  <!--  <h3><strong><p style="color: #fff; text-align: center;font-size: 1em;font-family: 'Orbitron', sans-serif;" id="t_complaints"> 0 </p></strong><h3> -->
                    <h3 id="t_complaints" style="color: #fff;font-family: 'Orbitron', sans-serif;">0</h3>

                    <p>Total Complaints</p>
                  </div>
                  <div class="icon">
                    <i class="fa fa-comments-o"></i>
                  </div>
                </div>
              </div>
                    <div class="col-md-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-green">
                  <div class="inner">
                    <h3 id="t_closed"style="color: #fff;font-family: 'Orbitron', sans-serif;">0</h3>

                    <p>Closed Complaints</p>
                  </div>
                  <div class="icon">
                   <i class="fa fa-lock"></i>
                  </div>
                  
                </div>
              </div>
                    <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-red">
                  <div class="inner">
                    <h3 id="t_open" style="color: #fff;font-family: 'Orbitron', sans-serif;">0</h3>

                    <p>Open Complaints</p>
                  </div>
                  <div class="icon">

                    <i class="fa fa-unlock"></i>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-black"style="height: 103px;">
                  <div class="inner">
                    <h5 style="text-align: center;margin-bottom: 0px;">Complaints Status</h5>
                    
                    <!-- radio -->
                    <div class="form-group" style="margin-top: -15px;">
                      <div class="radio">
                        <label>
                          <input type="radio" name="optionsRadios1" id="all" value="all" checked>
                         All
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="optionsRadios1" id="open" value="open">
                          Open
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="optionsRadios1" id="closed" value="closed">
                          Closed
                        </label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
                  </div>
                  <div class="row">
                  <div class="col-md-4">
                  <div class="callout callout-info comp">
                  <div class="col-md-12">
                    <h4 style="text-align: center;">State wise complaints</h4>
                  </div>
                </div>
                <!-- <div class="row">
                <div class="col-md-12"> 
                <div id="container"></div>
              </div>
              </div> -->
              <div id="state_complaints"></div>
                  </div>
                  <div class="col-md-4">
                    <div class="callout callout-info comp">
                  <div class="col-md-12">
                    <h4 style="text-align: center;">Problem area wise complaints</h4>
                  </div>
                </div>
                <div id="chartdiv"></div>
                  </div>
                  <div class="col-md-4">
                    <div class="callout callout-info comp">
                  <div>
                    <h4 style="text-align: center;">Detailed Report</h4>

                  </div>
                  <div class="box-body table-responsive table-wrapper-scroll-y my-custom-scrollbar" style="background-color: #fff; padding: 0px;
    margin-top: 30px; width: 117%; margin-left: -19px;">
                      <!-- <div id="background_ip1">
                      <p id="bg-text1" style="text-align: center;"><?php echo $this->session->userdata('user_name');?></p>
                      <p id="bg-text1" style="text-align: center;"><?php echo $this->session->userdata('ip');?></p>
                       <p id="bg-text1" style="text-align: center;"><?php echo date('d-m-Y H:i:s');?></p>
                       
                        </div> -->
                    <table id="example1" class="table table-bordered table-striped mb-0">
                      <thead>
                      <tr style="background-color: #6b6b6b;">
                        <th>State</th>
                        <th>City</th>
                        <th>Problem Area</th>
                        <th>Complaint Number</th>
                       
                      </tr>
                      </thead>
                      <tbody id="comp_data" style="color: #000;">
                    
                      
                    </tbody>
                  </table>
                </div>
           
            
            
          
                </div>
                  </div>
                  </div>
                  <div class="row">
                  <div class="col-md-9">
                    <div class="callout callout-info comp">
                  <div class="col-md-12">
                    <h4 style="text-align: center;">Month wise complaints</h4>
                  </div>
                </div>
                <div id="month_wise_chart" style="height: 238px;width: 100%;"></div>
                  </div>
                  <div class="col-md-3">
                    <div class="callout callout-info comp">
                  <div class="col-md-12">
                    <h4 style="text-align: center;">LOB wise complaints</h4>
                  </div>
                  <div class="box-body">
                  <div id="donut-chart" style="height: 300px;"></div>
              </div>
                </div>
                  </div>
              </div>
                </section>
              </div>
<!------------------------------------------------------------Job Card Details---------------------------->
              <!-- /#ion-icons -->
              <div class="tab-pane" id="glyphicons2">
                <section id="new">
                  <!-- <h4 class="page-header">Customer 360&#xb0;</h4> -->
                  <div class="callout callout-info comp" style="height: 70px;">
                  <div class="col-md-12">
                    <div class="col-md-4">
                      <div class="pull-left" style="text-align: center;">
                      <img src="<?php echo base_url();?>assets/img/spaqplug_logo.png" style="width: 46%">
                    </div>
                    </div>
                    <div class="col-md-4">
                      <h4 style="text-align: center;margin-top: 10px;">Job Card Details</h4>
                    </div>
                    <div class="col-md-4">
                      <div class="pull-right" style="text-align: center;">
                    <img src="<?php echo base_url();?>assets/img/tata_it_logo (2).png" style="height: 34px;width: 61%;">
                  </div>
                    </div>
                    
                  </div>
                </div>
                <div class="col-md-12">
                   <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-yellow">
                  <div class="inner">
                  <!--  <h3><strong><p style="color: #fff; text-align: center;font-size: 1em;font-family: 'Orbitron', sans-serif;" id="t_complaints"> 0 </p></strong><h3> -->
                    <h3 id="t_jc" style="color: #fff;font-family: 'Orbitron', sans-serif;">0</h3>

                    <p>Total JC</p>
                  </div>
                  <div class="icon">
                    <i class="fa fa-truck"></i>
                  </div>
                </div>
              </div>
                    <div class="col-md-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-green">
                  <div class="inner">
                    <h3 id="t_closed_jc"style="color: #fff;font-family: 'Orbitron', sans-serif;">0</h3>

                    <p>Closed JC</p>
                  </div>
                  <div class="icon">
                   <i class="fa fa-lock"></i>
                  </div>
                  
                </div>
              </div>
                    <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-red">
                  <div class="inner">
                    <h3 id="t_open_jc" style="color: #fff;font-family: 'Orbitron', sans-serif;">0</h3>

                    <p>Open JC</p>
                  </div>
                  <div class="icon">

                    <i class="fa fa-unlock"></i>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-black"style="height: 103px;">
                  <div class="inner">
                    <h5 style="text-align: center;margin-bottom: 0px;">Status</h5>
                    <form id='r_from'>
                    <!-- radio -->
                    <div class="form-group" style="margin-top: -15px;">
                      <div class="radio">
                        <label>
                          <input type="radio" name="optionsRadios" id="all_jc" value="all_jc" checked>
                         All
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="optionsRadios" id="_open_jc" value="open_jc">
                          Open JC
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="optionsRadios" id="closed_jc" value="closed_jc">
                          Closed JC
                        </label>
                      </div>
                    </div>
                    </form>
                  </div>
                </div>
              </div>
                  </div>
                  <div class="row">
                  <div class="col-md-4">
                  <div class="callout callout-info comp">
                  <div class="col-md-12">
                    <h4 style="text-align: center;">State wise job cards</h4>
                  </div>
                </div>
                    <div id="background_ip_jc">
                      <p id="bg-text3" style="text-align: center;"><?php echo $this->session->userdata('user_name');?></p>
                      <p id="bg-text3" style="text-align: center;"><?php echo $this->session->userdata('ip');?></p>
                       <p id="bg-text3" style="text-align: center;"><?php echo date('d-m-Y H:i:s');?></p>
                       
                        </div>  
                <div id="container1">
                  <div style="text-align: center;">
                       <img id="state_wise_jc_loading" src="<?php echo base_url();?>assets/img/spinner.gif" style="display:none;height: 90px;width: 23%;"/>
                       </div>
                </div>
                  </div>
                  <div class="col-md-4">
                    <div class="callout callout-info comp">
                  <div class="col-md-12">

                    <h4 style="text-align: center;">Month wise job cards</h4>
                    <!-- <div class="col-md-4"> -->
                      
                  <!-- </div> -->
                  </div>
                  <div class="form-group" style="margin-top: 36px;margin-left: -7px;">
                      <select class="form-control select3" name="jc_yrs" id="jc_yrs">
                        <option value=""> Select Years </option>
                        
                      </select>
                    </div>
                </div>
                 <div id="background_ip_jc">
                      <p id="bg-text3" style="text-align: center;"><?php echo $this->session->userdata('user_name');?></p>
                      <p id="bg-text3" style="text-align: center;"><?php echo $this->session->userdata('ip');?></p>
                       <p id="bg-text3" style="text-align: center;"><?php echo date('d-m-Y H:i:s');?></p>
                       
                        </div>
                <div id="month_wise_jc_chart">
                  <div style="text-align: center;">
                       <img id="month_wise_jc_loading" src="<?php echo base_url();?>assets/img/spinner.gif" style="display:none;height: 90px;width: 23%;margin-top: 20%;"/>
                       </div>
                </div>
                  </div>
                  <div class="col-md-4">
                    <div class="callout callout-info comp">
                    <h4 style="text-align: center;">LOB wise job cards</h4>
                </div>
                <!-- <div class="my-custom-scrollbar2"> -->
                  <div id="background_ip_jc">
                      <p id="bg-text3" style="text-align: center;"><?php echo $this->session->userdata('user_name');?></p>
                      <p id="bg-text3" style="text-align: center;"><?php echo $this->session->userdata('ip');?></p>
                       <p id="bg-text3" style="text-align: center;"><?php echo date('d-m-Y H:i:s');?></p>
                       
                        </div>
                   <div class="box-body table-responsive table-wrapper-scroll-y my-custom-scrollbar2" style="background-color: transparent; padding: 0px; margin-top: 0%; width: 100%; margin-left: 0px;">
                <div id="lob_wise_job_cards">
                  <div style="text-align: center;">
                       <img id="lob_wise_job_cards_loading" src="<?php echo base_url();?>assets/img/spinner.gif" style="display:none;height: 90px;width: 23%;"/>
                       </div>
                </div>
                </div>
                  </div>
                  </div>
                  <div class="row">
                  
                  <div class="col-md-12">
                    <div class="callout callout-info comp">
                  <div class="col-md-12">
                    <!-- <h4 style="text-align: center;">LOB wise complaints</h4> -->
                    <h4 style="text-align: center;">Detailed job cards</h4>
                    <div class="row" style="margin-top: 2%">
                      <div class="col-md-4"></div>
                      <div class="col-md-4">
                      <div class="form-group">
                      <select class="form-control select2" name="jc_chassis_num" id="jc_chassis_num">
                        <option value=""> Select Chassis Number </option>
                        
                      </select>
                    </div>

                  </div>
                    </div>
                  
                  
                  <div class="box-body table-responsive table-wrapper-scroll-y my-custom-scrollbar" style="background-color: #fff; padding: 0px; margin-top: 0%; width: 100%; margin-left: 0px;">
                    <div style="text-align: center;" >
                       <img id="detailed_job_cards_loading"  src="<?php echo base_url();?>assets/img/loading2.gif" style="display:none;height: 28px;width: 17%;"/>
                       </div>
                      
                        
                       <div class="table-responsive">
                        
                    <table id="jc_table" class="table table-bordered table-striped mb-0">
                      <thead>
                      <tr style="background-color: #6b6b6b;">
                        <th>#</th>
                        <th>Month</th>
                        <th>State</th>
                        <th>Workshop Name</th>
                        <th>JC#</th>
                        <th>Chassis Number</th>
                        <th>Registration Number</th>
                        <th style="width: 11%;">JC Created Date</th>
                        <th>TAT(Days)</th>
                        <th>PL</th>
                        <th>Service Type</th>
                        <th>Status</th>
                      </tr>
                      </thead>
                      <div id="background_ip9">
                      <p id="bg-text9" style="text-align: center;"><?php echo $this->session->userdata('user_name');?></p>
                      <p id="bg-text9" style="text-align: center;"><?php echo $this->session->userdata('ip');?></p>
                       <p id="bg-text9" style="text-align: center;"><?php echo date('d-m-Y H:i:s');?></p>
                       
                        </div>
                      <tbody id="jc_data" style="color: #000;">
                    
                      
                    </tbody>
                  </table>
                </div>
                </div>
                <div class="col-lg-6 col-md-6 col-xs-12">
                 <!--  <ul class="pager">
                  <li><a href="#" class="bgColor" id="PreValue">Previous</a></li>
                  <li><a href="#" class="bgColor" id="nextValue">Next</a></li>
                </ul> 
 -->                <div class="col-lg-3 col-md-3 col-xs-4">
                <button class="col-lg-12 col-xs-12 bgColor flat" id="PreValue">Previous</button>
                </div>
                <!-- <div class="col-lg-2  col-md-2 col-xs-4 nav1">
                </div>  --> 
                <div class="col-lg-3  col-md-3 col-xs-4">
                <button class="col-lg-12 col-xs-12 bgColor flat" id="nextValue">Next</button>
                </div>  
            </div>
              </div>
                </div>
                  </div>
              </div>
                </section>
              </div>

            </div>
            <!-- /.tab-content -->
          </div>
          <!-- /.nav-tabs-custom -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="container" style="text-align: center;">
      <strong>Copyright &copy; 2020 <a href="#">Tata Motors Limited.</a></strong> All rights
    reserved.
    </div>
    <!-- /.container -->
  </footer>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="<?php echo base_url();?>assets/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url();?>assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="<?php echo base_url();?>assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url();?>assets/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url();?>assets/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url();?>assets/dist/js/demo.js"></script>
<!-- Select2 -->
<script src="<?php echo base_url()?>assets/bower_components/select2/dist/js/select2.full.min.js"></script>
<!-------------------------------------------Country JS--------------------------------------------------->
<script src="<?php echo base_url();?>assets/charts/highmaps.js"></script>
<script src="<?php echo base_url();?>assets/js/in-all-disputed.js"></script>
<!-- <script src="https://code.highcharts.com/maps/modules/exporting.js"></script> -->
<!-- <script src="https://code.highcharts.com/mapdata/countries/in/custom/in-all-disputed.js"></script> -->
<!---------------------------------------------JS--------------------------------------------------------->
<script src="https://www.amcharts.com/lib/4/core.js"></script>
<script src="<?php echo base_url();?>assets/charts/charts.js"></script>
<script src="https://www.amcharts.com/lib/4/plugins/wordCloud.js"></script>
<script src="https://www.amcharts.com/lib/4/themes/animated.js"></script>
<!-------------------------------------------------------------------------------------------------------->
<script src="<?php echo base_url();?>assets/bower_components/chart.js/Chart.js"></script>
<script src="<?php echo base_url();?>assets/js/jc_custome.js"></script>
<script type="text/javascript">
  $('#data_model').click(function(){
    // alert('ddd');
    $('#myModal').modal("show");
    // $('#myModal').show('modal');
  });
  document.addEventListener("keyup", function (e) {
    var keyCode = e.keyCode ? e.keyCode : e.which;
            if (keyCode == 44) {
                stopPrntScr();
            }
        });
function stopPrntScr() {

            var inpFld = document.createElement("input");
            inpFld.setAttribute("value", ".");
            inpFld.setAttribute("width", "0");
            inpFld.style.height = "0px";
            inpFld.style.width = "0px";
            inpFld.style.border = "0px";
            document.body.appendChild(inpFld);
            inpFld.select();
            document.execCommand("copy");
            inpFld.remove(inpFld);
        }
       function AccessClipboardData() {
            try {
                window.clipboardData.setData('text', "Access   Restricted");
            } catch (err) {
            }
        }
        setInterval("AccessClipboardData()", 300);
  $(document).ready(function(){
    $(this).scrollTop(0);
});
  $(document).ready(function(){
    // close browser

  $('.select2').select2();
  $('.select3').select2();
  $("#p_search").prop('disabled',true); 
  $.ajaxSetup({ cache: false });
  $("#search_type").change(function() {
    if($('#search_type').val() !=""){
      $("#p_search").prop('disabled',false);
    }else{
      $("#p_search").prop('disabled',true);
    }
    
     
  var s_type = $(this).val();
  // alert(s_type);
  if(s_type =="acc_name"){
    $("#p_search").attr("placeholder", "Enter Account Name");
    $("#p_search").val('');
  }else if(s_type =="arn_no"){
    $("#p_search").attr("placeholder", "Enter ARN Number");
    $("#p_search").val('');
  }else if(s_type =="v_r_num"){
    $("#p_search").attr("placeholder", "Enter Vehicle Registration Number");
    $("#p_search").val('');
  }else if(s_type =="chassis_num"){
    $("#p_search").attr("placeholder", "Enter Chassis Number");
    $("#p_search").val('');
  }else{
    $("#p_search").attr("placeholder", "Please Select Search Type");
    $("#p_search").val('');
  }
  $("#p_search").keyup(function(){
    if ($('#g_record').is(":checked")){
      var search_type = $('#search_type').val();
      var csrfName = '<?php echo $this->security->get_csrf_token_name(); ?>',
            csrfHash = '<?php echo $this->security->get_csrf_hash(); ?>';
      var name = $(this).val();
      $.ajax({
      type: "POST",
      url: "<?php echo base_url();?>search/p_search_gold",
      data: {[csrfName]: csrfHash,name:name,search_type:search_type},
      success: function(data){
        $('#_parent_data').html(JSON.parse(data));
      }
      });
    }else{
    var search_type = $('#search_type').val();
    var csrfName = '<?php echo $this->security->get_csrf_token_name(); ?>',
            csrfHash = '<?php echo $this->security->get_csrf_hash(); ?>';
    var name = $(this).val();
    // alert(name);
    $.ajax({
    type: "POST",
    url: "<?php echo base_url();?>search/p_search",
    // data:'name='+$(this).val(),s_type:s_type,ss_type:ss_type,
    data:{[csrfName]: csrfHash,name:name,search_type:search_type},
    success: function(data){
      $('#_parent_data').html(JSON.parse(data));
    }
    });
    }
    
    });
  });
//--------------------------------------------------li Click-----------------------------------------------

  $('.list-group').on('click', 'li', function() {
  $("#t2").attr("data-toggle",'tab');
  $("#t2").removeClass("disabled");
 
  var click_text = $(this).text();
  // alert(click_text);
  // var click_text = $('.list').attr('a_name');
  var p_id = $(this).attr('id');
  var p_mob = $('.list').attr('mob');
  var p_mob1 = $(this).attr("mob_num");
  var account_name = $(this).attr("account_name");
  var accnt_name = $(this).attr("accnt_name");
  // alert(accnt_name);
  // var res = account_name.split(' ').join('_');
  // var res1 = accnt_name.split(' ').join('_');
    // alert(res1);
  // .split(' ').join('_')
  $('#p_search').val($.trim(click_text));
  
  // $('#p_n').text($.trim(click_text));
  $('#p_n').text($.trim(account_name));
  $('#p_n1').text($.trim(accnt_name));

  
  
  // $('#g_account_name').text($.trim(click_text));
  $('#g_account_name').text($.trim(accnt_name));

  $('#p_ARN').val($.trim(p_id));
  $('#p_id').text($.trim(p_id));
  $('#g_account_arn_num').text($.trim(p_id));
  $('#p_mob').text($.trim(p_mob));
  $('#p_mob1').text($.trim(p_mob1));
  $("#_parent_data").html('');
  var csrfName = '<?php echo $this->security->get_csrf_token_name(); ?>',
            csrfHash = '<?php echo $this->security->get_csrf_hash(); ?>';
  $.ajax({
    type: "POST",
    url: "<?php echo base_url();?>search/get_child",
    data:{[csrfName]: csrfHash,p_id:p_id},
    success: function(data){
     $('#cvbu_btn').prop("disabled", false);
     $('#child_data_tbl').html(JSON.parse(data));
     total_count();
    }
    });
 }); 
  function total_count(){
  var total = $('#total').val();
  
    if(total){
      $('#total_child_count').html('<label name="total_child_count " id="total_child_count ">Total child: '+ total +'</label>');
    }else{
      $('#total_child_count').html('<label name="total_child_count " id="total_child_count ">Total child: '+ 0 +'</label>');
    }
    
  }
 });
</script>

<script type="text/javascript">
  $(document).ready(function(){
     $('body').bind('cut copy paste', function (e) {
        e.preventDefault();
    });
    
    //Disable part of page
    $('#id').bind('cut copy paste', function (e) {
        e.preventDefault();
    });

    $('body').bind('cut copy paste', function (e) {
        e.preventDefault();
    });
   
    //Disable mouse right click
    $("body").on("contextmenu",function(e){
        return false;
    });
    
    //Parent data get
    $('#cvbu_btn,#t2').click(function(e){
      e.preventDefault();
       $("#jc_data").empty();
      var data = $('#cvbu_btn').attr('data');
      var par_accnt_id = $('#p_ARN').val();
      total_vehicles(par_accnt_id);
      jc_revenue(par_accnt_id);
      spares_revenue(par_accnt_id);
      problem_area_all(par_accnt_id);
      loyalty_point_analysis(par_accnt_id);
      intended_application(par_accnt_id);
      psf_sales(par_accnt_id);
      psf_service(par_accnt_id);
      invoice_amount(par_accnt_id);
      financier_analysis(par_accnt_id);
      openjc(par_accnt_id);
      c3_count(par_accnt_id);
      jcServiceAnalysis(par_accnt_id);
      totaljc(par_accnt_id);
      total_revenue(par_accnt_id);
      direct_billing(par_accnt_id);
      bandhu_jc(par_accnt_id);
      complaints_details_reports(par_accnt_id);
      // alert(par_accnt_id);
      $('#g_chil_name').text(data);
      $('#g_chil_arn_num').text(data);
      $('#myTab a[href="#glyphicons"]').tab('show');
      var csrfName = '<?php echo $this->security->get_csrf_token_name(); ?>',
            csrfHash = '<?php echo $this->security->get_csrf_hash(); ?>';
      $.ajax({
        type: "POST",
          url: "<?php echo base_url();?>search/get_all_parent_data",
          data:{[csrfName]: csrfHash,par_accnt_id:par_accnt_id},
          success: function(data){
           // console.log(JSON.parse(data));
           $('#_data').html(JSON.parse(data));
           parent_data();
          }
      });
    });
    //Total Revenue
    function total_revenue(par_accnt_id){
      var csrfName = '<?php echo $this->security->get_csrf_token_name(); ?>',
            csrfHash = '<?php echo $this->security->get_csrf_hash(); ?>';
        $.ajax({
              type: "POST",
                url: "<?php echo base_url();?>search/total_revenue",
                data:{[csrfName]: csrfHash,par_accnt_id:par_accnt_id},
                success: function(data){
                  // console.log(JSON.parse(data));
                  
                  var val = JSON.parse(data);
                  if(val !=null){
                  val = (val/10000000).toFixed(2) + ' Cr.';
                  
                  $('#tot_rev').html('&#8377; ' + val);
                  }else{
                  $('#tot_rev').html('&#8377; ' + 0);
                  }
                  
                  
                }
            });
      }
       //Problem area function
      function problem_area_all(par_accnt_id) {
        var csrfName = '<?php echo $this->security->get_csrf_token_name(); ?>',
            csrfHash = '<?php echo $this->security->get_csrf_hash(); ?>';
          $.ajax({
              type: "POST",
                url: "<?php echo base_url();?>search/problem_area",
                data:{[csrfName]: csrfHash,par_accnt_id:par_accnt_id},
                success: function(data){
                  var info = JSON.parse(data);
                  if(info !=''){
                  jQuery('#treecontainer div').html('');
                  
                  var out = info.map(function (obj) {
                   return {
                        name: obj.key,
                        value: obj.doc_count
                    };
                    });
                   am4core.ready(function() {

                  // Themes begin
                  am4core.useTheme(am4themes_animated);
                  // Themes end

                  var chart = am4core.create("treecontainer", am4plugins_wordCloud.WordCloud);
                  chart.fontFamily = "Courier New";
                  var series = chart.series.push(new am4plugins_wordCloud.WordCloudSeries());
                  series.maxFontSize = am4core.percent(30);
                  series.randomness = 0.2;
                  series.rotationThreshold = 10;
                  series.accuracy = 4;
                  series.step = 15;
                  series.data = out;

                  series.dataFields.word = "name";
                  series.dataFields.value = "value";

                  series.heatRules.push({
                   "target": series.labels.template,
                   "property": "fill",
                   "min": am4core.color("#0000CC"),
                   "max": am4core.color("#CC00CC"),
                   "dataField": "value"
                  });

                  // series.labels.template.url = "https://stackoverflow.com/questions/tagged/{word}";
                  // series.labels.template.urlTarget = "_blank";
                  series.labels.template.tooltipText = "{word}: {value}";

                  var hoverState = series.labels.template.states.create("hover");
                  hoverState.properties.fill = am4core.color("#FF0000");

                   }); // end am4core.ready()
    //               

                }else{
                  $('#treecontainer').html('<strong><p style="text-align:center;color: #fff;background-color:#3c8dbc;">No Records</p></strong>');
                  }
                }
            });           
      }

      //Loyalty Point Analysis
      function loyalty_point_analysis(par_accnt_id){
       
        jQuery('#loyalty_chartContainer div').html('');
         var csrfName = '<?php echo $this->security->get_csrf_token_name(); ?>',
            csrfHash = '<?php echo $this->security->get_csrf_hash(); ?>';
            // alert(csrfName+' '+csrfHash);
         $.ajax({
              type: "POST",
                url: "<?php echo base_url();?>search/all_loyalty_point_analysis",
                data:{[csrfName]: csrfHash,par_accnt_id:par_accnt_id},
                beforeSend: function() {
                $("#loyalty_chartContainer_loading").show();
                },
                success: function(data){
                  var info = JSON.parse(data);
                  // console.log(info);
                    if(info !='invalied'){
                      jQuery('#loyalty_chartContainer div').html('');
                      $("#loyalty_chartContainer_loading").hide();
                      am4core.useTheme(am4themes_animated);
                      // Create chart instance
                      var chart = am4core.create("loyalty_chartContainer", am4charts.XYChart);
                      // Add data
                      chart.data = info;

                      var categoryAxis = chart.yAxes.push(new am4charts.CategoryAxis());
                      categoryAxis.dataFields.category = "label";
                      categoryAxis.renderer.labels.template.fill = am4core.color("#fff");
                      categoryAxis.renderer.grid.template.location = 0;

                      var valueAxis = chart.xAxes.push(new am4charts.ValueAxis());
                      valueAxis.renderer.labels.template.fill = am4core.color("#fff");
                      var series = chart.series.push(new am4charts.ColumnSeries());
                      series.dataFields.valueX = "y";
                      series.dataFields.categoryY = "label";

                      var valueLabel = series.columns.template.createChild(am4core.Label);
                      valueLabel.text = "{y}";
                      valueLabel.fontSize = 20;
                      valueLabel.fill = am4core.color("#fff");
                      valueLabel.valign = "middle";
                      valueLabel.align = "center";
                      valueLabel.dx = 10;
                      valueLabel.strokeWidth = 0;
                  
                }else{
                  jQuery('#loyalty_chartContainer div').html('');
                  $("#loyalty_chartContainer_loading").hide();
                        $('#loyalty_chartContainer').html('<strong><p style="text-align:center;">No Records</p></strong>');
                }
                    
                }
            }); 
      } 

      function intended_application(par_accnt_id){
        var csrfName = '<?php echo $this->security->get_csrf_token_name(); ?>',
            csrfHash = '<?php echo $this->security->get_csrf_hash(); ?>';
              jQuery('#intendedChartContainer div').html('');
              $.ajax({
              type: "POST",
                url: "<?php echo base_url();?>search/intended_application",
                data:{[csrfName]: csrfHash,par_accnt_id:par_accnt_id},
                beforeSend: function() {
                $("#loading-image").show();
                },
                success: function(data){
                  jQuery('#intendedChartContainer div').html('');
                  $("#loading-image").hide();
                  
                  if(JSON.parse(data) !=''){
                    var info = JSON.parse(data);
                    var out = info.map(function (obj) {
                     return {
                          litres: obj.doc_count,
                          country: obj.key
                          
                      };
                    });
                    am4core.ready(function() {

                    // Themes begin
                    am4core.useTheme(am4themes_animated);
                    // Themes end

                    // Create chart instance
                    var chart = am4core.create("intendedChartContainer", am4charts.PieChart);

                    // Add data
                    chart.data = out;

                    // Set inner radius
                    chart.innerRadius = am4core.percent(0);

                    // Add and configure Series
                    var pieSeries = chart.series.push(new am4charts.PieSeries());
                    pieSeries.dataFields.value = "litres";
                    pieSeries.dataFields.category = "country";
                    pieSeries.slices.template.stroke = am4core.color("#fff");
                    pieSeries.slices.template.strokeWidth = 2;
                    pieSeries.slices.template.strokeOpacity = 1;
                    // pieSeries.ticks.template.disabled = true;
                    // pieSeries.labels.template.disabled = true;

                    // This creates initial animation
                    pieSeries.hiddenState.properties.opacity = 1;
                    pieSeries.hiddenState.properties.endAngle = -90;
                    pieSeries.hiddenState.properties.startAngle = -90;
                    pieSeries.legendSettings.labelText = "{country}: {value}";

                    pieSeries.legendSettings.labelText = '{category}';
                    pieSeries.legendSettings.valueText = null;
                    pieSeries.labels.template.text = "{category}: {value}";
                    pieSeries.slices.template.tooltipText = "{category}: {value}";
                    }); // end am4core.ready()
               
                  }else{
                    jQuery('#intendedChartContainer div').html('');
                    $("#intendedChartContainer").html('<strong><p style="text-align:center;">No Records</p></strong>');
                  }
                }
            });
      }

      function psf_sales(par_accnt_id){
        var csrfName = '<?php echo $this->security->get_csrf_token_name(); ?>',
            csrfHash = '<?php echo $this->security->get_csrf_hash(); ?>';
        $.ajax({
              type: "POST",
                url: "<?php echo base_url();?>search/psf_sales",
                data:{[csrfName]: csrfHash,par_accnt_id:par_accnt_id},
                success: function(data){
                  $('#pfs_sales_data').html(JSON.parse(data));
                }
            });
      }
      function psf_service(par_accnt_id){
        var csrfName = '<?php echo $this->security->get_csrf_token_name(); ?>',
            csrfHash = '<?php echo $this->security->get_csrf_hash(); ?>';
        $.ajax({
              type: "POST",
                url: "<?php echo base_url();?>search/psf_service",
                data:{[csrfName]: csrfHash,par_accnt_id:par_accnt_id},
                success: function(data){
                  $('#pfs_service_data').html(JSON.parse(data));
                }
            });
      }

      function invoice_amount(par_accnt_id){
        var csrfName = '<?php echo $this->security->get_csrf_token_name(); ?>',
            csrfHash = '<?php echo $this->security->get_csrf_hash(); ?>';
        $.ajax({
              type: "POST",
                url: "<?php echo base_url();?>search/invoice_amount",
                data:{[csrfName]: csrfHash,par_accnt_id:par_accnt_id},
                success: function(data){
                  var val = JSON.parse(data);
                  if(val !=null){

                  val = (val/10000000).toFixed(2) + ' Cr.';
                  
                  // alert(val);
                  $('#inv_amount').html('&#8377; ' + val);
                  }else{
                    $('#inv_amount').html('&#8377; ' + 0);
                  }
                  
                }
            });
      }
      function financier_analysis(par_accnt_id){
        var csrfName = '<?php echo $this->security->get_csrf_token_name(); ?>',
            csrfHash = '<?php echo $this->security->get_csrf_hash(); ?>';
        $("#financier_analysis").empty();
        $.ajax({
              type: "POST",
                url: "<?php echo base_url();?>search/financier_analysis",
                data:{[csrfName]: csrfHash,par_accnt_id:par_accnt_id},
                beforeSend: function() {
                $("#financier_analysis_loading").show();
                },
                success: function(data){
                  // console.log(data);
                  if(JSON.parse(data).length !=""){
                    $("#financier_analysis").empty();
                    $("#financier_analysis_loading").hide();
                    // alert($('#financier_analysis div').html(''));
                    // $('#financier_analysis div').empty();
                    // var c3_count = $('#C3_Qty').text();
                    var info = JSON.parse(data);
                    // var cal = (info / c3_count);
                    // alert(info);
                    var out = info.map(function (obj) {
                     return {
                          name: obj.key,
                          value: obj.doc_count
                        };
                      });
                    // console.log(out);
                    var chart = am4core.create("financier_analysis", am4charts.TreeMap);
                    chart.data = out;

                    /* Set color step */
                    chart.colors.step = 2;

                    /* Define data fields */
                    chart.dataFields.value = "value";
                    chart.dataFields.name = "name";

                    /* Configure top-level series */
                    var level1 = chart.seriesTemplates.create("0");
                    var level1_column = level1.columns.template;
                    // level1_column.column.cornerRadius(10, 10, 10, 10);
                    level1_column.fillOpacity = 0.8;
                    level1_column.stroke = am4core.color("#fff");
                    level1_column.strokeWidth = 5;
                    level1_column.strokeOpacity = 1;

                    /* Add bullet labels */
                    var level1_bullet = level1.bullets.push(new am4charts.LabelBullet());
                    level1_bullet.locationY = 0.5;
                    level1_bullet.locationX = 0.5;
                    level1_bullet.label.text = "{name}: {value}";
                    level1_bullet.label.fill = am4core.color("#fff");
                  
                 }else{
                  $("#financier_analysis").empty();
                   $("#financier_analysis_loading").hide();
                  // jQuery('#financier_analysis div').html('');
                  $('#financier_analysis').html('<strong><p style="text-align:center;">No Records</p></strong>');
                 }
                  
                }
            });
        }
        //c3_count
        function c3_count(par_accnt_id){
          var csrfName = '<?php echo $this->security->get_csrf_token_name(); ?>',
            csrfHash = '<?php echo $this->security->get_csrf_hash(); ?>';
          $.ajax({
              type: "POST",
                url: "<?php echo base_url();?>search/c3_count",
                data:{[csrfName]: csrfHash,par_accnt_id:par_accnt_id},
                success: function(data){
                  var d1 = JSON.parse(data);
                  if(d1 !=null){
                    $('#C3_Qty').html(d1);
                  }else{
                    $('#C3_Qty').html(0);
                  }                  
                }
            });
        }

        //Direct Billing
        function direct_billing(par_accnt_id) {
          var csrfName = '<?php echo $this->security->get_csrf_token_name(); ?>',
            csrfHash = '<?php echo $this->security->get_csrf_hash(); ?>';
          $.ajax({
              type: "POST",
                url: "<?php echo base_url();?>search/direct_billing",
                data:{[csrfName]: csrfHash,par_accnt_id:par_accnt_id},
                success: function(data){
                  var d_b = JSON.parse(data);
                  if(d_b !=null){
                    $('#direct_billing').html(d_b);
                  }else{
                    $('#direct_billing').html(0);
                  }                  
                }
            });
        }


       

        //jcServiceAnalysis
        function jcServiceAnalysis(par_accnt_id){
         var csrfName = '<?php echo $this->security->get_csrf_token_name(); ?>',
            csrfHash = '<?php echo $this->security->get_csrf_hash(); ?>';
          $.ajax({
              type: "POST",
                url: "<?php echo base_url();?>search/jcServiceAnalysis",
                data:{[csrfName]: csrfHash,par_accnt_id:par_accnt_id},
                success: function(data){
                  // console.log(JSON.parse(data));
                  if(JSON.parse(data) !=''){
                    // alert('Hi');
                    var info = JSON.parse(data);
                    var out = info.map(function (obj) {
                     return {
                          country: obj.key,
                          litres: obj.doc_count
                        };
                      });
                    jQuery('#jc_service_analysis div').html('');
                    am4core.ready(function() {

                    // Themes begin
                    am4core.useTheme(am4themes_animated);
                    // Themes end

                    // Create chart instance
                    var chart = am4core.create("jc_service_analysis", am4charts.PieChart);

                    // Add data
                    chart.data = out;

                    // Set inner radius
                    chart.innerRadius = am4core.percent(50);

                    // Add and configure Series
                    var pieSeries = chart.series.push(new am4charts.PieSeries());
                    pieSeries.dataFields.value = "litres";
                    pieSeries.dataFields.category = "country";
                    pieSeries.slices.template.strokeWidth = 2;
                    pieSeries.slices.template.strokeOpacity = 1;
                    // pieSeries.ticks.template.disabled = true;
                    // pieSeries.labels.template.disabled = true;

                    // This creates initial animation
                    pieSeries.hiddenState.properties.opacity = 1;
                    pieSeries.hiddenState.properties.endAngle = -90;
                    pieSeries.hiddenState.properties.startAngle = -90;
                    pieSeries.legendSettings.labelText = "{country}: {litres}";

                    pieSeries.legendSettings.labelText = '{category}';
                    pieSeries.legendSettings.valueText = null;
                    pieSeries.labels.template.text = "{category}: {value}";
                    pieSeries.slices.template.tooltipText = "{category}: {value}";

                    }); // end am4core.ready()
                  }else{
                    $("#jc_service_analysis").html('<strong><p style="text-align:center;">No Records</p></strong>');
                  }
                  // $('#C3_Qty').html(JSON.parse(data));
                }
            });
        }
        //Open JC
        function openjc(par_accnt_id){
          var csrfName = '<?php echo $this->security->get_csrf_token_name(); ?>',
            csrfHash = '<?php echo $this->security->get_csrf_hash(); ?>';
          $.ajax({
              type: "POST",
                url: "<?php echo base_url();?>search/openjc",
                data:{[csrfName]: csrfHash,par_accnt_id:par_accnt_id},
                success: function(data){
                  // console.log(JSON.parse(data));
                  if(JSON.parse(data) !=null){
                    $('#open_jc').html(JSON.parse(data));
                    $('#t_open_jc').html(JSON.parse(data));
                  }else{
                    $('#open_jc').html(JSON.parse(0));
                    $('#t_open_jc').html(JSON.parse(0));
                  }
                  
                  // $('#C3_Qty').html(JSON.parse(data));
                }
            });
        }
        // Total JC
        function totaljc(par_accnt_id){
          var csrfName = '<?php echo $this->security->get_csrf_token_name(); ?>',
            csrfHash = '<?php echo $this->security->get_csrf_hash(); ?>';
          $.ajax({
              type: "POST",
                url: "<?php echo base_url();?>search/totaljc",
                data:{[csrfName]: csrfHash,par_accnt_id:par_accnt_id},
                success: function(data){
                  // console.log(JSON.parse(data));
                  if(JSON.parse(data) !=null){
                    $('#total_jc').html(JSON.parse(data));
                    $('#t_jc').html(JSON.parse(data));
                  }else{
                    $('#total_jc').html(JSON.parse(0));
                    $('#t_jc').html(JSON.parse(0));
                  }
                  
                  
                }
            });
        }

        // bandhu_jc
        function bandhu_jc(par_accnt_id){
          var csrfName = '<?php echo $this->security->get_csrf_token_name(); ?>',
            csrfHash = '<?php echo $this->security->get_csrf_hash(); ?>';
          $.ajax({
              type: "POST",
                url: "<?php echo base_url();?>search/bandhuapp_jc",
                data:{[csrfName]: csrfHash,par_accnt_id:par_accnt_id},
                success: function(data){
                  // console.log(JSON.parse(data));
                  if(JSON.parse(data) !=null){
                    $('#bandhuapp_jc').html(JSON.parse(data));
                  }else{
                    $('#bandhuapp_jc').html(JSON.parse(0));
                  }
                  
                  
                }
            });
        }

        function spares_revenue(par_accnt_id){
          var csrfName = '<?php echo $this->security->get_csrf_token_name(); ?>',
            csrfHash = '<?php echo $this->security->get_csrf_hash(); ?>';
          $.ajax({
              type: "POST",
                url: "<?php echo base_url();?>search/spares_revenue",
                data:{[csrfName]: csrfHash,par_accnt_id:par_accnt_id},
                success: function(data){
                  
                  var val = JSON.parse(data);
                  if(val !=null){
                  val = (val/10000000).toFixed(2) + ' Cr.';
                  
                  $('#spares_revenue').html('&#8377; ' + val);
                  }else{
                  $('#spares_revenue').html('&#8377; ' + 0);
                  }
                  

                  
                }
            });
        }

        function jc_revenue(par_accnt_id){
          var csrfName = '<?php echo $this->security->get_csrf_token_name(); ?>',
            csrfHash = '<?php echo $this->security->get_csrf_hash(); ?>';
          $.ajax({
              type: "POST",
                url: "<?php echo base_url();?>search/jc_revenue",
                data:{[csrfName]: csrfHash,par_accnt_id:par_accnt_id},
                success: function(data){
                  // console.log(JSON.parse(data));
                  var val = JSON.parse(data);
                  if(val !=null){
                  val = (val/10000000).toFixed(2) + ' Cr.';
                  
                  $('#jc_revenue').html('&#8377; ' + val);
                  }else{
                  $('#jc_revenue').html('&#8377; ' + 0);
                  }
                  // $('#jc_revenue').html(JSON.parse(data));
                  
                }
            });
        }

        //total_vehicles
        function total_vehicles(par_accnt_id){
          var csrfName = '<?php echo $this->security->get_csrf_token_name(); ?>',
            csrfHash = '<?php echo $this->security->get_csrf_hash(); ?>';
          $.ajax({
              type: "POST",
                url: "<?php echo base_url();?>search/total_vehicles",
                data:{[csrfName]: csrfHash,par_accnt_id:par_accnt_id},
                success: function(data){
                  if(JSON.parse(data) != null){
                    $('#t_v').html(JSON.parse(data));
                  }else{
                    $('#t_v').html(JSON.parse(0));
                  }
                  
                  
                }
            });
        }

        function complaints_details_reports(par_accnt_id) {

  var csrfName = '<?php echo $this->security->get_csrf_token_name(); ?>',
      csrfHash = '<?php echo $this->security->get_csrf_hash(); ?>';
          $.ajax({
              type: "POST",
              url: "<?php echo base_url();?>search/complaints_details_reports",
              data:{[csrfName]: csrfHash,par_accnt_id:par_accnt_id},
              success: function(data){
                // console.log(data);
                var d = JSON.parse(data);
                $('#comp_data').html(d);
              }
          });
}
  });
</script>
<!-- iCheck -->
<!-- <script src="<?php echo base_url()?>assets/plugins/iCheck/icheck.min.js"></script> -->
<script type="text/javascript">
  //Child data get----------------------------------------------------/////////////////////////////////
    $('body').on('click','.view',function(e){
      e.preventDefault();
      var arn = $(this).attr('arn_num');
      var name = $(this).attr('data');
        child_direct_billing(arn);
        child_problem_area_all(arn);
        child_loyalty_point_analysis(arn);
        child_invoice_amount(arn);
        child_pfs_sales(arn);
        child_pfs_service(arn);
        child_intended_application(arn);
        child_financier_analysis(arn);
        child_jcServiceAnalysis(arn);
        child_openjc(arn);
        child_c3_count(arn);
        child_totalJC(arn);
        child_total_vehicles(arn);
        c_spares_revenue(arn);
        c_jc_revenue(arn);
        c_total_revenue(arn);
        child_bandhu_jc(arn);
        
        // child_loyalty_point_analysis(arn);
      $('#g_chil_name').text(name);
      $('#g_chil_arn_num').text(arn);
      jQuery('#myTab a[href="#glyphicons"]').tab('show');
      var csrfName = '<?php echo $this->security->get_csrf_token_name(); ?>',
            csrfHash = '<?php echo $this->security->get_csrf_hash(); ?>';
      $.ajax({
        type: "POST",
          url: "<?php echo base_url();?>search/get_c_data",
          data:{[csrfName]: csrfHash,arn:arn},
          success: function(data){
           $('#_data').html(JSON.parse(data));
           info();
          }
      })
    });
    //Total Revenue
      function c_total_revenue(arn){
        var csrfName = '<?php echo $this->security->get_csrf_token_name(); ?>',
            csrfHash = '<?php echo $this->security->get_csrf_hash(); ?>';
        $.ajax({
              type: "POST",
                url: "<?php echo base_url();?>search/total_revenue",
                data:{[csrfName]: csrfHash,arn:arn},
                success: function(data){
                  // console.log(JSON.parse(data));
                  var val = JSON.parse(data);
                  if(val !=null){
                  val = (val/10000000).toFixed(2) + ' Cr';
                  
                  $('#tot_rev').html('&#8377;' + val);
                  }else{
                  $('#tot_rev').html('&#8377;' + 0);
                  }
                }
            });
      }
    function c_jc_revenue(arn){
      var csrfName = '<?php echo $this->security->get_csrf_token_name(); ?>',
            csrfHash = '<?php echo $this->security->get_csrf_hash(); ?>';
          $.ajax({
              type: "POST",
                url: "<?php echo base_url();?>search/jc_revenue",
                data:{[csrfName]: csrfHash,arn:arn},
                success: function(data){
                  // console.log(JSON.parse(data));
                  var val = JSON.parse(data);
                  if(val !=null){
                  val = (val/10000000).toFixed(2) + ' Cr';
                  
                  $('#jc_revenue').html('&#8377;' + val);
                  }else{
                  $('#jc_revenue').html('&#8377;' + 0);
                  }
                  //$('#jc_revenue').html(JSON.parse(data));
                  
                }
            });
        }
    function c_spares_revenue(arn){
      var csrfName = '<?php echo $this->security->get_csrf_token_name(); ?>',
            csrfHash = '<?php echo $this->security->get_csrf_hash(); ?>';
          $.ajax({
              type: "POST",
                url: "<?php echo base_url();?>search/spares_revenue",
                data:{[csrfName]: csrfHash,arn:arn},
                success: function(data){
                  var val = JSON.parse(data);
                  if(val !=null){
                  val = (val/10000000).toFixed(2) + ' Cr';
                  
                  $('#spares_revenue').html('&#8377;' + val);
                  }else{
                  $('#spares_revenue').html('&#8377;' + 0);
                  }
                  
                  //$('#spares_revenue').html(JSON.parse(data));
                  
                }
            });
        }
    function child_totalJC(arn){
      var csrfName = '<?php echo $this->security->get_csrf_token_name(); ?>',
            csrfHash = '<?php echo $this->security->get_csrf_hash(); ?>';
      $.ajax({
              type: "POST",
                url: "<?php echo base_url();?>search/totaljc",
                data:{[csrfName]: csrfHash,arn:arn},
                success: function(data){
                  if(JSON.parse(data) !=null) {
                    $('#total_jc').html(JSON.parse(data));
                  } else {
                    $('#total_jc').html(JSON.parse(0));
                  }
                  
                }
            });
        }
    //Child bandhu_jc
        function child_bandhu_jc(arn){
          var csrfName = '<?php echo $this->security->get_csrf_token_name(); ?>',
            csrfHash = '<?php echo $this->security->get_csrf_hash(); ?>';
          $.ajax({
              type: "POST",
                url: "<?php echo base_url();?>search/bandhuapp_jc",
                data:{[csrfName]: csrfHash,arn:arn},
                success: function(data){
                  // console.log(JSON.parse(data));
                  if(JSON.parse(data) !=null){
                    $('#bandhuapp_jc').html(JSON.parse(data));
                  }else{
                    $('#bandhuapp_jc').html(JSON.parse(0));
                  }
                  
                  
                }
            });
        }
    //Direct Billing
        function child_direct_billing(arn) {
          var csrfName = '<?php echo $this->security->get_csrf_token_name(); ?>',
            csrfHash = '<?php echo $this->security->get_csrf_hash(); ?>';
          $.ajax({
              type: "POST",
                url: "<?php echo base_url();?>search/direct_billing",
                data:{[csrfName]: csrfHash,arn:arn},
                success: function(data){
                  var d_b = JSON.parse(data);
                  if(d_b !=null){
                    $('#direct_billing').html(d_b);
                  }else{
                    $('#direct_billing').html(0);
                  }                  
                }
            });
        }

      //Open JC
      function child_openjc(arn){
        var csrfName = '<?php echo $this->security->get_csrf_token_name(); ?>',
            csrfHash = '<?php echo $this->security->get_csrf_hash(); ?>';
          $.ajax({
              type: "POST",
                url: "<?php echo base_url();?>search/openjc",
                data:{[csrfName]: csrfHash,arn:arn},
                success: function(data){
                  if(JSON.parse(data) !=null){
                  $('#open_jc').html(JSON.parse(data));
                  } else {
                    $('#open_jc').html(JSON.parse(0));
                  }
                }
            });
        }
         //Loyalty Point Analysis
        function child_loyalty_point_analysis(arn){
          var csrfName = '<?php echo $this->security->get_csrf_token_name(); ?>',
            csrfHash = '<?php echo $this->security->get_csrf_hash(); ?>';
          jQuery('#loyalty_chartContainer div').html('');
            $.ajax({
                type: "POST",
                  url: "<?php echo base_url();?>search/all_loyalty_point_analysis",
                  data:{[csrfName]: csrfHash,[csrfName]: csrfHash,arn:arn},
                  beforeSend: function() {
                  $("#loyalty_chartContainer_loading").show();
                  },
                  success: function(data){
                    // console.log(data);
                    var info = JSON.parse(data);
                    if(info !="invalied"){
                      jQuery('#loyalty_chartContainer div').html('');
                      $("#loyalty_chartContainer_loading").hide();
                      am4core.useTheme(am4themes_animated);
                      // Create chart instance
                      var chart = am4core.create("loyalty_chartContainer", am4charts.XYChart);
                      // Add data
                      chart.data = info;

                      var categoryAxis = chart.yAxes.push(new am4charts.CategoryAxis());
                      categoryAxis.dataFields.category = "label";
                      categoryAxis.renderer.labels.template.fill = am4core.color("#fff");
                      categoryAxis.renderer.grid.template.location = 0;

                      var valueAxis = chart.xAxes.push(new am4charts.ValueAxis());
                      valueAxis.renderer.labels.template.fill = am4core.color("#fff");
                      var series = chart.series.push(new am4charts.ColumnSeries());
                      series.dataFields.valueX = "y";
                      series.dataFields.categoryY = "label";

                      var valueLabel = series.columns.template.createChild(am4core.Label);
                      valueLabel.text = "{y}";
                      valueLabel.fontSize = 20;
                      valueLabel.fill = am4core.color("#fff");
                      valueLabel.valign = "middle";
                      valueLabel.align = "center";
                      valueLabel.dx = 10;
                      valueLabel.strokeWidth = 0;
                    
                      }else{
                        jQuery('#loyalty_chartContainer div').html('');
                        $("#loyalty_chartContainer_loading").hide();
                        $('#loyalty_chartContainer').html('<strong><p style="text-align:center;">No Records</p></strong>');
                      }
                    }
                    
              });
          }
        //c3_child_count
        function child_c3_count(arn){
          var csrfName = '<?php echo $this->security->get_csrf_token_name(); ?>',
            csrfHash = '<?php echo $this->security->get_csrf_hash(); ?>';
          $.ajax({
              type: "POST",
                url: "<?php echo base_url();?>search/c3_count",
                data:{[csrfName]: csrfHash,arn:arn},
                success: function(data){
                  var d1 = JSON.parse(data);
                  if(d1 !=null){
                    $('#C3_Qty').html(d1);
                  }else{
                    $('#C3_Qty').html(0);
                  }
                  
                }
            });
        }
         function child_jcServiceAnalysis(arn){
         var csrfName = '<?php echo $this->security->get_csrf_token_name(); ?>',
            csrfHash = '<?php echo $this->security->get_csrf_hash(); ?>';
          $.ajax({
              type: "POST",
                url: "<?php echo base_url();?>search/jcServiceAnalysis",
                data:{[csrfName]: csrfHash,arn:arn},
                success: function(data){
                  // console.log(JSON.parse(data));
                  if(JSON.parse(data) !=''){

                    var info = JSON.parse(data);
                    var out = info.map(function (obj) {
                     return {
                          country: obj.key,
                          litres: obj.doc_count
                        };
                      });
                    jQuery('#jc_service_analysis div').html('');
                    am4core.ready(function() {

                    // Themes begin
                    am4core.useTheme(am4themes_animated);
                    // Themes end

                    // Create chart instance
                    var chart = am4core.create("jc_service_analysis", am4charts.PieChart);

                    // Add data
                    chart.data = out;

                    // Set inner radius
                    chart.innerRadius = am4core.percent(50);

                    // Add and configure Series
                    var pieSeries = chart.series.push(new am4charts.PieSeries());
                    pieSeries.dataFields.value = "litres";
                    pieSeries.dataFields.category = "country";
                    pieSeries.slices.template.strokeWidth = 2;
                    pieSeries.slices.template.strokeOpacity = 1;
                    // pieSeries.ticks.template.disabled = true;
                    // pieSeries.labels.template.disabled = true;

                    // This creates initial animation
                    pieSeries.hiddenState.properties.opacity = 1;
                    pieSeries.hiddenState.properties.endAngle = -90;
                    pieSeries.hiddenState.properties.startAngle = -90;
                    pieSeries.legendSettings.labelText = "{country}: {litres}";

                    pieSeries.legendSettings.labelText = '{category}';
                    pieSeries.legendSettings.valueText = null;
                    pieSeries.labels.template.text = "{category}: {value}";
                    pieSeries.slices.template.tooltipText = "{category}: {value}";

                    });
                  }else{
                    $("#jc_service_analysis").html('<strong><p style="text-align:center;">No Records</p></strong>');
                  }
                  
                }
            });
        }
     //Problem area function
      function child_problem_area_all(arn) {
        var csrfName = '<?php echo $this->security->get_csrf_token_name(); ?>',
            csrfHash = '<?php echo $this->security->get_csrf_hash(); ?>';
          $.ajax({
              type: "POST",
                url: "<?php echo base_url();?>search/problem_area",
                data:{[csrfName]: csrfHash,arn:arn},
                success: function(data){
                  if(JSON.parse(data).length !=""){
                    $('#treecontainer div').html('');
                    var info = JSON.parse(data);
                    var out = info.map(function (obj) {
                   return {
                        name: obj.key,
                        value: obj.doc_count
                      };
                    });
                    am4core.ready(function() {

                  // Themes begin
                  am4core.useTheme(am4themes_animated);
                  // Themes end

                  var chart = am4core.create("treecontainer", am4plugins_wordCloud.WordCloud);
                  chart.fontFamily = "Courier New";
                  var series = chart.series.push(new am4plugins_wordCloud.WordCloudSeries());
                  series.maxFontSize = am4core.percent(30);
                  series.randomness = 0.2;
                  series.rotationThreshold = 10;
                  series.accuracy = 4;
                  series.step = 15;
                  series.data = out;

                  series.dataFields.word = "name";
                  series.dataFields.value = "value";

                  series.heatRules.push({
                   "target": series.labels.template,
                   "property": "fill",
                   "min": am4core.color("#0000CC"),
                   "max": am4core.color("#CC00CC"),
                   "dataField": "value"
                  });

                  // series.labels.template.url = "https://stackoverflow.com/questions/tagged/{word}";
                  // series.labels.template.urlTarget = "_blank";
                  series.labels.template.tooltipText = "{word}: {value}";

                  var hoverState = series.labels.template.states.create("hover");
                  hoverState.properties.fill = am4core.color("#FF0000");
                  });
                
                  
                  }else{
                    $('#treecontainer div').html('');
                    $('#treecontainer').html('<strong><p style="text-align:center;">No Records</p></strong>');
                  }
                }
            });           
      }
      function child_intended_application(arn){
        var csrfName = '<?php echo $this->security->get_csrf_token_name(); ?>',
            csrfHash = '<?php echo $this->security->get_csrf_hash(); ?>';
        jQuery('#intendedChartContainer div').html('');
        $.ajax({
              type: "POST",
                url: "<?php echo base_url();?>search/intended_application",
                data:{[csrfName]: csrfHash,arn:arn},
                beforeSend: function() {
                $("#loading-image").show();
                },
                success: function(data){
                  jQuery('#intendedChartContainer div').html('');
                  $("#loading-image").hide();
                  if(JSON.parse(data) !=''){
                    var info = JSON.parse(data);
                    var out = info.map(function (obj) {
                     return {
                          litres: obj.doc_count,
                          country: obj.key
                          
                      };
                    });
                    am4core.ready(function() {

                    // Themes begin
                    am4core.useTheme(am4themes_animated);
                    // Themes end

                    // Create chart instance
                    var chart = am4core.create("intendedChartContainer", am4charts.PieChart);

                    // Add data
                    chart.data = out;

                    // Set inner radius
                    chart.innerRadius = am4core.percent(0);

                    // Add and configure Series
                    var pieSeries = chart.series.push(new am4charts.PieSeries());
                    pieSeries.dataFields.value = "litres";
                    pieSeries.dataFields.category = "country";
                    pieSeries.slices.template.stroke = am4core.color("#fff");
                    pieSeries.slices.template.strokeWidth = 2;
                    pieSeries.slices.template.strokeOpacity = 1;
                    // pieSeries.ticks.template.disabled = true;
                    // pieSeries.labels.template.disabled = true;

                    // This creates initial animation
                    pieSeries.hiddenState.properties.opacity = 1;
                    pieSeries.hiddenState.properties.endAngle = -90;
                    pieSeries.hiddenState.properties.startAngle = -90;
                    pieSeries.legendSettings.labelText = "{country}: {value}";

                    pieSeries.legendSettings.labelText = '{category}';
                    pieSeries.legendSettings.valueText = null;
                    pieSeries.labels.template.text = "{category}: {value}";
                    pieSeries.slices.template.tooltipText = "{category}: {value}";
                    }); // end am4core.ready()
               
                  }else{
                    jQuery('#intendedChartContainer div').html('');
                    $("#intendedChartContainer").html('<strong><p style="text-align:center;">No Records</p></strong>');
                  }
                }
            });
      }

        function child_invoice_amount(arn){
          var csrfName = '<?php echo $this->security->get_csrf_token_name(); ?>',
            csrfHash = '<?php echo $this->security->get_csrf_hash(); ?>';
        $.ajax({
              type: "POST",
                url: "<?php echo base_url();?>search/invoice_amount",
                data:{[csrfName]: csrfHash,arn:arn},
                success: function(data){
                  // $('#inv_amount').html(JSON.parse(data));
                  var val = JSON.parse(data);
                  val = (val/10000000).toFixed(2) + ' Cr';
                  
                  // alert(val);
                  $('#inv_amount').html('&#8377;' + val);
                }
            });
        }
       function child_pfs_sales(arn){
        var csrfName = '<?php echo $this->security->get_csrf_token_name(); ?>',
            csrfHash = '<?php echo $this->security->get_csrf_hash(); ?>';
        $.ajax({
              type: "POST",
                url: "<?php echo base_url();?>search/child_pfs_sales",
                data:{[csrfName]: csrfHash,arn:arn},
                success: function(data){
                  $('#pfs_sales_data').html(JSON.parse(data));
                }
            });
      }
      function child_pfs_service(arn){
        var csrfName = '<?php echo $this->security->get_csrf_token_name(); ?>',
            csrfHash = '<?php echo $this->security->get_csrf_hash(); ?>';
        $.ajax({
              type: "POST",
                url: "<?php echo base_url();?>search/child_pfs_service",
                data:{[csrfName]: csrfHash,arn:arn},
                success: function(data){
                  $('#pfs_service_data').html(JSON.parse(data));
                }
            });
      }
      //total_vehicles
        function child_total_vehicles(arn){
          var csrfName = '<?php echo $this->security->get_csrf_token_name(); ?>',
            csrfHash = '<?php echo $this->security->get_csrf_hash(); ?>';
          $.ajax({
              type: "POST",
                url: "<?php echo base_url();?>search/total_vehicles",
                data:{[csrfName]: csrfHash,arn:arn},
                success: function(data){
                  if(JSON.parse(data) != null){
                    $('#t_v').html(JSON.parse(data));
                  }else{
                    $('#t_v').html(JSON.parse(0));
                  }
                  
                  
                }
            });
        }
      function child_financier_analysis(arn){
        var csrfName = '<?php echo $this->security->get_csrf_token_name(); ?>',
            csrfHash = '<?php echo $this->security->get_csrf_hash(); ?>';
        $.ajax({
              type: "POST",
                url: "<?php echo base_url();?>search/financier_analysis",
                data:{[csrfName]: csrfHash,arn:arn},
                success: function(data){
                  // console.log(data);
                  // if(JSON.parse(data) != []){
                  if(JSON.parse(data).length != "") {
                  $("#financier_analysis").empty();
                  //jQuery('#financier_analysis div').html('');  
                  var info = JSON.parse(data);
                  
                  //var c3_count = $('#C3_Qty').text();
                  // alert(info);
                  var out = info.map(function (obj) {
                   return {
                        name: obj.key,
                        value: obj.doc_count
                      };
                    });
                    var chart = am4core.create("financier_analysis", am4charts.TreeMap);
                    chart.data = out;

                    /* Set color step */
                    chart.colors.step = 2;

                    /* Define data fields */
                    chart.dataFields.value = "value";
                    chart.dataFields.name = "name";

                    /* Configure top-level series */
                    var level1 = chart.seriesTemplates.create("0");
                    var level1_column = level1.columns.template;
                    // level1_column.column.cornerRadius(10, 10, 10, 10);
                    level1_column.fillOpacity = 0.8;
                    level1_column.stroke = am4core.color("#fff");
                    level1_column.strokeWidth = 5;
                    level1_column.strokeOpacity = 1;

                    /* Add bullet labels */
                    var level1_bullet = level1.bullets.push(new am4charts.LabelBullet());
                    level1_bullet.locationY = 0.5;
                    level1_bullet.locationX = 0.5;
                    level1_bullet.label.text = "{name}: {value}";
                    level1_bullet.label.fill = am4core.color("#fff");
                  
                 }else{
                  $("#financier_analysis").empty();
                  $('#financier_analysis').html('<strong><p style="text-align:center;">No Records</p></strong>');
                 }  
                }
            });
        }
</script>
<script type="text/javascript">
      
    //Child recod function
    function info(){
      var avg_day = $('#avg_resolution_day').val();
      if(avg_day == null){
        avg_day = '0';
      }else{
        avg_day;
      }
      $('#avg_day').text(avg_day);

      var C0_Qty = $('#c0').text();
      if(C0_Qty != '0'){
        $('#C0_Qty').text('0');
      }

      var C1_Qty = $('#c1').text();
      if(C1_Qty != '0'){
        $('#C1_Qty').text('0');
      }
      var C1_Qty = $('#c1a').text();
      if(C1_Qty != '0'){
        $('#C1_Qty').text('0');
      }

      var C2_Qty = $('#c2').text();
      if(C2_Qty != '0'){
        $('#C2_Qty').text('0');
      }
      
      var c0 = $('#c0').val();
      var c1 = $('#c1').val();
      var c2 = $('#c2').val();
      var lost_qty = $('#cp').val();
      var c3 = $('#c3').val();

      var c_lost_c0 = $('#c_lost_c0').val();
      if(c_lost_c0 == null){
        c_lost_c0 = '0';
      }else{
        c_lost_c0;
      }
      
      var c_lost_c1 = $('#c_lost_c1').val();
      if(c_lost_c1 == null){
        c_lost_c1 = '0';
      }else{
        c_lost_c1;
      }
    
      var c_lost_c1A = $('#c_lost_c2a').val();

      if(c_lost_c1A == null){
        c_lost_c1A = '0';
      }else{
        c_lost_c1A;
      }
      
      
      var c_lost_c2 = $('#c_lost_c2').val();
      if(c_lost_c2 == null){
        c_lost_c2 = '0';
      }else{
        c_lost_c2;
      }
     
      var total_lost = parseInt(c_lost_c0, 10) + parseInt(c_lost_c1,10) + parseInt(c_lost_c1A,10) + parseInt(c_lost_c2,10);
      $('#lost_Qty').text(total_lost);

      var child_total_complaints = $('#child_all_complaints').val();

      var child_open_complaints = $('#child_open_complaints').val();
      var child_closed_complaints = child_total_complaints - child_open_complaints;
      if(child_total_complaints !=''){
        $('#total_comp').text(child_total_complaints);
        $('#t_complaints').text(child_total_complaints);
        
      }else{
        $('#total_comp').text('0');
        $('#t_complaints').text('0');
        
      }

      if(child_open_complaints !=''){
        $('#total_open').text(child_open_complaints);
        $('#t_open').text(child_open_complaints);
      }else{
        $('#total_open').text('0');
        $('#t_open').text('0');
        
      }

      if(child_closed_complaints !='0'){
        $('#total_closed').text(child_closed_complaints);
        $('#t_closed').text(child_closed_complaints);
      }else{
        $('#total_closed').text('0');
        $('#t_closed').text('0');
      }

      if(c0 !='undefined'){
        $('#C0_Qty').text(c0);
      }else{
        $('#C0_Qty').text('0');
      }

      if(c1 !='undefined'){
        $('#C1_Qty').text(c0);
      }else{
        $('#C1_Qty').text('0');
      }

      if(c2 !='undefined'){
        $('#C2_Qty').text(c0);
      }else{
        $('#C2_Qty').text('0');
      }

      if(lost_qty !='undefined'){
        $('#lost_Qty').text(c0);
      }else{
        $('#lost_Qty').text('0');
      }

      if(c3 !='undefined'){
        $('#C3_Qty').text(c3);
      }else{
        $('#C3_Qty').text('0');
      }
      
    }

    // Parent record function
    function parent_data(){
    var avg_day = $('#p_avg_resolution_day').val();
      if(avg_day == null){
        avg_day = '0';
      }else{
        avg_day;
      }
      $('#avg_day').text(avg_day);

      var pc0 = $('#p_c0').val();
      var pc1 = $('#p_c1').val();
      var pc2 = $('#p_c2').val();
      var pcp = $('#p_cp').val();
      var pc3 = $('#p_c3').val();

      var p_lost_c0 = $('#p_lost_c0').val();
      if(p_lost_c0 == null){
        p_lost_c0 = '0';
      }else{
        p_lost_c0;
      }
      
      var p_lost_c1 = $('#p_lost_c1').val();
      if(p_lost_c1 == null){
        p_lost_c1 = '0';
      }else{
        p_lost_c1;
      }
    
      var p_lost_c1A = $('#p_lost_c1A').val();

      if(p_lost_c1A == null){
        p_lost_c1A = '0';
      }else{
        p_lost_c1A;
      }
      
      
      var p_lost_c2 = $('#p_lost_c2').val();
      if(p_lost_c2 == null){
        p_lost_c2 = '0';
      }else{
        p_lost_c2;
      }
     
      var total_lost = parseInt(p_lost_c0, 10) + parseInt(p_lost_c1,10) + parseInt(p_lost_c1A,10) + parseInt(p_lost_c2,10);
      $('#lost_Qty').text(total_lost);
     
      var all_complaints = $('#all_complaints').val();
      // console.log(all_complaints);
      var open_complaints = $('#open_complaints').val();
      var closed_complaints = all_complaints - open_complaints;

      if(all_complaints !=''){
        $('#total_comp').text(all_complaints);
        $('#t_complaints').text(all_complaints);
      }else{
        $('#total_comp').text('0');
        $('#total_comp').text('0');
      }
      if(open_complaints !=''){
        $('#total_open').text(open_complaints);
        $('#t_open').text(open_complaints);
      }else{
        $('#total_open').text('0');
        $('#t_open').text('0');
      }
      if(closed_complaints !='0'){
        $('#total_closed').text(closed_complaints);
        $('#t_closed').text(closed_complaints);
      }else{
        $('#total_closed').text('0');
        $('#t_closed').text('0');
      }
      if(pc0 !=''){
        $('#C0_Qty').text(pc0);
      }else{
        $('#C0_Qty').text('0');
      }

      if(pc1 !=''){
        $('#C1_Qty').text(pc1);
      }else{
        $('#C1_Qty').text('0');
      }

      if(pcp !=''){
        $('#lost_Qty').text(pcp);
      }else{
        $('#lost_Qty').text('0');
      }

      if(pc2 !=''){
        $('#C2_Qty').text(pc2);
      }else{
        $('#C2_Qty').text('0');
      }

      if(pc3 !=''){
        $('#C3_Qty').text(pc3);
      }else{
        $('#C3_Qty').text('0');
      }
    }
</script>
<script type="text/javascript">
  $(document).ready(function(){
    $('#total_complaints').click(function(){
      
      
       $('#myTab a[href="#glyphicons1"]').tab('show');

    });
    $('#total_job_card').click(function(){
      var  t_open_jc = $('#t_open_jc').text();
      var  t_jc = $('#t_jc').text();
      var t_closed_jc = t_jc - t_open_jc;
      $('#t_closed_jc').text(t_closed_jc);
      $('#myTab a[href="#glyphicons2"]').tab('show');
    })
  })
</script>
<!-- ------------------------------------Line Chart------------------------------------------------ -->
<script>

am4core.ready(function() {

// Themes begin
am4core.useTheme(am4themes_animated);
// Themes end

var chart = am4core.create("month_wise_chart", am4charts.XYChart);

var data = [];
var value = 50;
for(var i = 0; i < 300; i++){
  var date = new Date();
  date.setHours(0,0,0,0);
  date.setDate(i);
  value -= Math.round((Math.random() < 0.5 ? 1 : -1) * Math.random() * 10);
  data.push({date:date, value: value});
}

chart.data = data;

// Create axes
var dateAxis = chart.xAxes.push(new am4charts.DateAxis());
dateAxis.renderer.minGridDistance = 60;

var valueAxis = chart.yAxes.push(new am4charts.ValueAxis());

// Create series
var series = chart.series.push(new am4charts.LineSeries());
series.dataFields.valueY = "value";
series.dataFields.dateX = "date";
series.tooltipText = "{value}"

series.tooltip.pointerOrientation = "vertical";

chart.cursor = new am4charts.XYCursor();
chart.cursor.snapToSeries = series;
chart.cursor.xAxis = dateAxis;

//chart.scrollbarY = new am4core.Scrollbar();
chart.scrollbarX = new am4core.Scrollbar();

}); // end am4core.ready()

</script>

<!----------------------------------------------Country Map Chart----------------------------------------->
<script type="text/javascript">

$('#total_complaints').click(function(){
  var par_accnt_id = $('#p_ARN').val();
  complaints(par_accnt_id);
  problem_area_wise_complaints(par_accnt_id);
});




  function complaints(par_accnt_id){
        var csrfName = '<?php echo $this->security->get_csrf_token_name(); ?>',
            csrfHash = '<?php echo $this->security->get_csrf_hash(); ?>';
        $.ajax({
              type: "POST",
                url: "<?php echo base_url();?>search/complaints",
                data:{[csrfName]: csrfHash,par_accnt_id:par_accnt_id},
                success: function(records){
                  // console.log(records);
                  var comp = JSON.parse(records);
                  
                  var data = comp;
          // Create the chart
          Highcharts.mapChart('state_complaints', {
              chart: {
                  map: 'countries/in/custom/in-all-disputed'
              },

              colorAxis: {
                  min: 0
              },

              series: [{
                  data: data,
                  name: 'Complaints data',
                  states: {
                      hover: {
                          color: '#FF0000'
                      }
                  },
                  dataLabels: {
                      enabled: true,
                      format: '{point.value}',    
                  }
              }]
          });
                }
            });
      };
    //problem_area_wise_complaints
      function problem_area_wise_complaints(par_accnt_id){
         var csrfName = '<?php echo $this->security->get_csrf_token_name(); ?>',
            csrfHash = '<?php echo $this->security->get_csrf_hash(); ?>';

            $.ajax({
               type: "POST",
                url: "<?php echo base_url();?>search/problem_area_wise_complaints",
                data:{[csrfName]: csrfHash,par_accnt_id:par_accnt_id},
                success: function(records){
                  am4core.ready(function() {
                    // Themes begin
                    am4core.useTheme(am4themes_animated);
                    // Themes end

                    var chart = am4core.create("chartdiv", am4charts.XYChart);

                    chart.data = [{
                            "year": "2005",
                            "income": 23.5
                        }, {
                            "year": "2006",
                            "income": 26.2
                        }, {
                            "year": "2007",
                            "income": 30
                        }, {
                            "year": "2008",
                            "income": 29.5
                        }, {
                            "year": "2009",
                            "income": 24.6
                        }];

                    //create category axis for years
                    var categoryAxis = chart.yAxes.push(new am4charts.CategoryAxis());
                    categoryAxis.dataFields.category = "year";
                    categoryAxis.renderer.inversed = true;
                    categoryAxis.renderer.grid.template.location = 0;

                    //create value axis for income and expenses
                    var valueAxis = chart.xAxes.push(new am4charts.ValueAxis());
                    valueAxis.renderer.opposite = true;


                    //create columns
                    var series = chart.series.push(new am4charts.ColumnSeries());
                    series.dataFields.categoryY = "year";
                    series.dataFields.valueX = "income";
                    series.name = "Income";
                    series.columns.template.fillOpacity = 0.5;
                    series.columns.template.strokeOpacity = 0;
                    series.tooltipText = "Income in {categoryY}: {valueX.value}";

                    //create line
                    // var lineSeries = chart.series.push(new am4charts.LineSeries());
                    // lineSeries.dataFields.categoryY = "year";
                    // lineSeries.dataFields.valueX = "expenses";
                    // lineSeries.name = "Expenses";
                    // lineSeries.strokeWidth = 3;
                    // lineSeries.tooltipText = "Expenses in {categoryY}: {valueX.value}";

                    //add bullets
                    // var circleBullet = lineSeries.bullets.push(new am4charts.CircleBullet());
                    // circleBullet.circle.fill = am4core.color("#fff");
                    // circleBullet.circle.strokeWidth = 2;

                    //add chart cursor
                    chart.cursor = new am4charts.XYCursor();
                    chart.cursor.behavior = "zoomY";

                    //add legend
                    chart.legend = new am4charts.Legend();

                    }); // end am4core.ready()
                }
            })
      }


</script>


<!-- ----------------------------------Donut Chart-------------------------------------------------------->
<script>
am4core.ready(function() {

// Themes begin
am4core.useTheme(am4themes_animated);
// Themes end

// Create chart instance
var chart = am4core.create("donut-chart", am4charts.PieChart);

// Add data
chart.data = [ {
  "country": "Lithuania",
  "litres": 501.9
}, {
  "country": "Czech Republic",
  "litres": 301.9
}, {
  "country": "Ireland",
  "litres": 201.1
}, {
  "country": "Germany",
  "litres": 165.8
}, {
  "country": "Australia",
  "litres": 139.9
}, {
  "country": "Austria",
  "litres": 128.3
}, {
  "country": "UK",
  "litres": 99
}, {
  "country": "Belgium",
  "litres": 60
}, {
  "country": "The Netherlands",
  "litres": 50
} ];

// Set inner radius
chart.innerRadius = am4core.percent(50);

// Add and configure Series
var pieSeries = chart.series.push(new am4charts.PieSeries());
pieSeries.dataFields.value = "litres";
pieSeries.dataFields.category = "country";
pieSeries.slices.template.stroke = am4core.color("#fff");
pieSeries.slices.template.strokeWidth = 2;
pieSeries.slices.template.strokeOpacity = 1;

// This creates initial animation
pieSeries.hiddenState.properties.opacity = 1;
pieSeries.hiddenState.properties.endAngle = -90;
pieSeries.hiddenState.properties.startAngle = -90;

}); // end am4core.ready()
</script>
</body>
</html>
