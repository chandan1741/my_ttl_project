<?php
$this->load->view('common/header');
$this->load->view('common/navigation');
?>
<style type="text/css">
  .callout.callout-info {
    border-color: #3c8dbc !important;
  }
  .callout {
    border-radius: 0px !important;
    margin: 0 0 20px 0;
    padding: 15px 30px 15px 15px;
    border-left: 5px solid #fbfbfb;
  }
  .callout.callout-info, .alert-info, .label-info, .modal-info .modal-body {
    background-color: #3c8dbc !important;
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
  height: 211px;
  }
  .vl3 {
  border-left: 1px solid #fff;
  height: 183px;
  }
  .intro{
    height: 69px;
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
  
   /* g {
    fill: rgb(255,255,255);
    }*/
  /*----------------------------------------------------------------------------------------*/

svg{width:70%;}
</style>
<link href='https://fonts.googleapis.com/css?family=Orbitron' rel='stylesheet' type='text/css'>
 <!-- <section class="content-header"> -->
  <link href='<?php echo base_url();?>assets/css/custome.css' rel='stylesheet' type='text/css'>
 <section class="content-header">
      <h1>
        Dashboard
      </h1>
      <ol class="breadcrumb">
        <li class="active">Dashboard</li>
      </ol>
    </section>
	<section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#fa-icons" data-toggle="tab">Introduction</a></li>
              <li><a href="#glyphicons" data-toggle="tab">CVBU Customer 360</a></li>
            </ul>
            <div class="tab-content">
              <!-- Font Awesome Icons -->
              <div class="tab-pane active" id="fa-icons">
                <section id="new">
                  <h4 class="page-header">Customer 360&#xb0;</h4>
                  <div class="row fontawesome-icon-list">
                   
                  </div>
                </section>
                 <div class="callout callout-info intro">
                  <div class="col-md-12">
                    <div class="col-md-6">
                      <input type="text" placeholder="Enter name" name="p_search" id="p_search" class="form-control">
                    </div>
                    <div class="col-md-6">
                       <input type="text" name="p_ARN" id="p_ARN" class="form-control" readonly placeholder="ARN NUMBER">
                    </div>
                  </div>
                </div>
                <div class="callout callout-info gold_bg">
                  <div class="col-md-12">
                    <div class="col-md-1">
                    </div>
                    <div class="col-md-4">
                    <!-- <div>
                    <img src="<?php echo base_url();?>assets/img/customer-service-clipart-45964.png" style="height: 77px;width: 85%;">
                  </div> -->
                    <h4 style="background-color:#3c8dbc;text-align: center;color: #fff;"><strong>Golden ARN Details</strong></h4>
                    <div class="box-body" style="margin-top: -7px;">
              <table id="ptbl" class="table table-bordered table-striped">
                <thead>
                <tr style="background-color: #6b6b6b;">
                  <th><label name="p_id" id="p_id" style="text-align: center;">AR02-18-188472630477</label></th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td id="p_n"><label name="p_n" id="p_n" style="color: #000; text-align: center;">RIVIERA DE GOA RESORTS AND HOTELS PVT. LTD</label></td>
                </tr>
                 <tr>
                  <td style="background-color: #fff; color: #000;text-align: center;"><label name="p_mob" id="p_mob">9xxxxxxx68</label></td>
                </tr>
                <tr>
                  <td  style="background-color: #fff; color: #000;text-align: center;"><label name="t_child" id="t_child">Total child: 0</label></td>
                </tr>
                </tbody>
                
              </table>

            </div>
              <div style="text-align: center;">
                  <input type="button" name="cvbu_btn" id="cvbu_btn" data="All" class="btn btn btn-info flat pull-center" value="CVBU Customer 360" disabled>
                  
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
                      <!--  <div style="text-align: center;">
                    <img src="<?php echo base_url();?>assets/img/Identity-Customer.png" style="height: 58px;width: 28%;">
                  </div> -->
                    <h4 style="background-color:#3c8dbc;text-align: center;color: #fff;margin-bottom: 0px;"><strong>Child ARN Details</strong></h4>
                    <!-- <div class="box">
           
                     <div class="box-body"> -->
                    <table id="example1" class="table table-bordered table-striped">
                      <thead>
                      <tr style="background-color: #6b6b6b;">
                        <th>Sr.No.</th>
                        <th>ARN</th>
                        <th>Account Number</th>
                        <th>Mobile Number</th>
                        <th></th>
                      </tr>
                      </thead>
                      <tbody id="child_data_tbl">
                    
                      
                    </tbody>
                  </table>
                <!-- </div>
              </div> -->
                    </div>
                  </div>
                </div>
              </div>
              <!-- /#fa-icons -->

              <!-- glyphicons-->
              <div class="tab-pane" id="glyphicons">
              	<div class="tab-pane active" id="fa-icons">
                <section id="new">
                  <h4 class="page-header">Customer 360&#xb0;</h4>

                  <div class="row fontawesome-icon-list">
                    
                  </div>
                </section>
              </div>
                <div class="callout callout-info" style="height: 100px;">
                  <div class="col-md-12">
                    <div class="col-md-4 col-xs-4">
                      <p><strong>Golden Account:</strong></p>
                      <p><strong>Child Account:</strong></p>
                    </div>
                    <div class="col-md-4 vl col-xs-4">
                      <h4 style="text-align: center;"><strong>PSF Sales Score</strong></h4>
                      <div class="fonts">4.04/5</div>
                    </div>
                    <div class="col-md-4 vl col-xs-4">
                      <h4 style="text-align: center;"><strong>PSF Service Score</strong></h4>
                      <div class="fonts">4.04/5</div>
                    </div>
                  </div>
                </div>
                <div class="callout callout-info" style="height: 147px;">
                  <div class="col-md-12">
                    <div class="col-md-2 col-xs-4" >
                      <h4 style="text-align: center;">C0</h4>
                      <div style="text-align: center;">
                     <svg id="animated" viewbox="0 0 100 100">
                  <circle cx="50" cy="50" r="45" fill="#FDB900"/>
                  <path id="progress" stroke-linecap="round" stroke-width="5" stroke="#fff" fill="none"
                        d="M50 10
                           a 40 40 0 0 1 0 80
                           a 40 40 0 0 1 0 -80">
                  </path>
                  <text id="c0_qty" x="50" y="50" text-anchor="middle" dy="7" font-size="20">100</text>
                </svg> 
                </div>
                    </div>
                    <div class="col-md-2 col-xs-4">
                     <h4 style="text-align: center;">C1</h4>
                      <div style="text-align: center;">
                     <svg id="animated" viewbox="0 0 100 100">
                  <circle cx="50" cy="50" r="45" fill="#FDB900"/>
                  <path id="progress" stroke-linecap="round" stroke-width="5" stroke="#fff" fill="none"
                        d="M50 10
                           a 40 40 0 0 1 0 80
                           a 40 40 0 0 1 0 -80">
                  </path>
                  <text id="c1_qty" x="50" y="50" text-anchor="middle" dy="7" font-size="20">100</text>
                </svg> 
                </div>
                    </div>
                    <div class="col-md-2 col-xs-4">
                     <h4 style="text-align: center;">C1A</h4>
                      <div style="text-align: center;">
                     <svg id="animated" viewbox="0 0 100 100">
                  <circle cx="50" cy="50" r="45" fill="#FDB900"/>
                  <path id="progress" stroke-linecap="round" stroke-width="5" stroke="#fff" fill="none"
                        d="M50 10
                           a 40 40 0 0 1 0 80
                           a 40 40 0 0 1 0 -80">
                  </path>
                  <text id="c1a_qty" x="50" y="50" text-anchor="middle" dy="7" font-size="20">100</text>
                </svg> 
                </div>
                    </div>
                    <div class="col-md-2 col-xs-4">
                     <h4 style="text-align: center;">C2</h4>
                      <div style="text-align: center;">
                     <svg id="animated" viewbox="0 0 100 100">
                  <circle cx="50" cy="50" r="45" fill="#FDB900"/>
                  <path id="progress" stroke-linecap="round" stroke-width="5" stroke="#fff" fill="none"
                        d="M50 10
                           a 40 40 0 0 1 0 80
                           a 40 40 0 0 1 0 -80">
                  </path>
                  <text id="c2_qty" x="50" y="50" text-anchor="middle" dy="7" font-size="20">100</text>
                </svg> 
                </div>
                    </div>
                    <div class="col-md-2 col-xs-4">
                    <h4 style="text-align: center;">Lost</h4>
                      <div style="text-align: center;">
                     <svg id="animated" viewbox="0 0 100 100">
                  <circle cx="50" cy="50" r="45" fill="#FDB900"/>
                  <path id="progress" stroke-linecap="round" stroke-width="5" stroke="#fff" fill="none"
                        d="M50 10
                           a 40 40 0 0 1 0 80
                           a 40 40 0 0 1 0 -80">
                  </path>
              <text id="lost_qty" x="50" y="50" text-anchor="middle" dy="7" font-size="20">100</text>
                </svg> 
                </div>
                    </div>
                    <div class="col-md-2 col-xs-4">
                      <h4 style="text-align: center;">C3</h4>
                      <div style="text-align: center;">
                     <svg id="animated" viewbox="0 0 100 100">
                  <circle cx="50" cy="50" r="45" fill="#FDB900"/>
                  <path id="progress" stroke-linecap="round" stroke-width="5" stroke="#fff" fill="none"
                        d="M50 10
                           a 40 40 0 0 1 0 80
                           a 40 40 0 0 1 0 -80">
                  </path>
              <text id="c3_qty" x="50" y="50" text-anchor="middle" dy="7" font-size="20">100</text>
                </svg> 
                </div>
                    </div>
                    
                  </div>
                </div>
               
                <div class="callout callout-info intended">
                  <div class="col-md-12">
                    <div class="col-md-6 col-xs-12">
                      <h4 style="text-align: center;"><strong>Intended Application Usage</strong></h4>
                     
                      <div style="">
                      <div id="chartContainer" style="height: 190px; width: 100%;"></div>
                      </div>
                    </div>
                    <div class="col-md-6 col-xs-12 vl1">
                      <h4 style="text-align: center;"><strong>Loyalty Point Analysis</strong></h4>
                      <div id="loyalty_point" style="height: 190px; width: 100%;"></div>
                    </div>
                  </div>
                </div>
                <div class="callout callout-info intended intended1">
                  <!-- <div class="col-md-12"> -->
                    
                    <div class="col-md-6 col-xs-12">
                      
                      <h4 style="text-align: center;"><strong>Financier Analysis</strong></h4>
                      <div>
                      <div id="financier_analysis"></div>
                    </div>
                      
                    </div>
                    <div class="col-md-6 col-xs-12 vl2">
                      <h4 style="text-align: center;"><strong>Complaints History</strong></h4>
                      <div id="complaints_history" style="height: 228px; width: 100%;"></div>
                    </div>
                  <!-- </div> -->
                </div>
                <div class="callout callout-info jc_service">
                  <div class="col-md-12">
                    
                    <div class="col-md-6 col-xs-12">
                      
                      <h4 style="text-align: center;"><strong>JC Service Analysis</strong></h4>
                      <div id="jc_service_analysis" style="height: 190px; width: 100%;"></div>
                    </div>
                    <div class="col-md-6 col-xs-12 vl2">
                      <h4 style="text-align: center;"><strong>Complaints Problem Area Analysis</strong></h4>
                      <div id="complaints_problem_area_analysis" style="width: 100%;">
                    </div>
                  </div>
                </div>
              </div>
                <div class="callout callout-info revenue">
                  <div class="col-md-12">
                    <div class="col-md-6 col-xs-12">
                      <h4 style="text-align: center;"><strong>Revenue Analysis</strong></h4>
                      <div class="small-box" style="background-color: #fff;">
                        <!-- <div style="background-color: #fff;"> -->
                      <div class="col-md-4" style="background-color: #fff; text-decoration: none;height: 61px;">
                        <p style="color: #000; text-align: center;">Total Vehicles</p>
                        <strong><p style="color: #000; text-align: center;font-size: 1em;font-family: 'Orbitron', sans-serif;" id="t_v"> 0 </p></strong>
                      </div>
                      <div class="col-md-4" style="background-color: #fff; text-decoration: none;text-align: center;">
                        <!-- <img src="<?php echo base_url();?>assets/img/money.png" style="height: 61px;width: 70%;"> -->
                      </div>
                      <div class="col-md-4" style="background-color: #fff;height: 61px;">
                        <p style="color: #000; text-align: center;">Total Revenue</p>
                        <strong><p style="color: #000; text-align: center;font-size: 1em;font-family: 'Orbitron', sans-serif;" id="tot_rev">&#8377; 0</p></strong>
                      </div>
                      <!-- </div> -->
                    </div>
                    <!-- <div class="small-box" style="background-color: #fff;margin-top: 76px;">
                      <div class="col-md-4" style="background-color:#3c8dbc;text-align: center;color: #fff;"><strong>Invoice Amount</strong></div>
                      <div class="col-md-4" style="background-color:#3c8dbc;text-align: center;color: #fff;"> <strong>Spares Revenue</strong></div>
                      <div class="col-md-4" style="background-color:#3c8dbc;text-align: center;color: #fff;"> <strong>JC Revenue</strong></div>
                    </div> -->
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
                      <!-- </div> -->
                    </div>
                    </div>
                    <div class="col-md-6 col-xs-12 vl3">
                      <h4 style="text-align: center;"><strong>Complaints History</strong></h4>
                      <div class="small-box" style="background-color: #fff;">

                      <div class="col-md-3" style="background-color:#3c8dbc;text-align: center;color: #fff;font-size: 11px;"><strong>Total Complaints</strong>
                      <div style=" font-family: 'Orbitron', sans-serif;">0</div></div>
                      <div class="col-md-2" style="background-color:#3c8dbc;text-align: center;color: #fff;font-size: 11px;"><strong>Total Open</strong>
                        <div style=" font-family: 'Orbitron', sans-serif;">0</div>
                      </div>
                      <div class="col-md-3" style="background-color:#3c8dbc;text-align: center;color: #fff;font-size: 11px;"> <strong>Total Closed</strong>
                      <div style=" font-family: 'Orbitron', sans-serif;">0</div></div>
                      <div class="col-md-4" style="background-color:#3c8dbc;text-align: center;color: #fff;font-size: 11px;"> <strong>Avg Resoulation Days</strong>
                      <div style=" font-family: 'Orbitron', sans-serif;">0</div></div>
                    </div><br>

                    <div class="small-box" style="background-color: #fff;">
                      <div class="col-md-6" style="background-color:#3c8dbc;text-align: center;color: #fff;font-size: 19px;"><strong>Total JC</strong>
                      <div style=" font-family: 'Orbitron', sans-serif;">0</div></div>
                      
                      <div class="col-md-6" style="background-color:#3c8dbc;text-align: center;color: #fff;font-size: 19px;"> <strong>Open JC</strong>
                      <div style=" font-family: 'Orbitron', sans-serif;">0</div></div>

                    </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /#ion-icons -->

            </div>
            <!-- /.tab-content -->
          </div>
          <!-- /.nav-tabs-custom -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
   </section>

<?php
$this->load->view('common/footer');
?>
<!-- <script src="https://www.amcharts.com/lib/4/core.js"></script> -->
<script src="<?php echo base_url();?>assets/charts/core.js"></script>
<script src="<?php echo base_url();?>assets/charts/charts.js"></script>
<script src="https://www.amcharts.com/lib/4/themes/animated.js"></script>
<!-- <script src="<?php echo base_url();?>assets/charts/anychart-core.min.js"></script> -->
<script src="https://cdn.anychart.com/releases/8.7.0/js/anychart-treemap.min.js"></script>
<!-- <script src="https://cdn.anychart.com/releases/8.7.1/js/anychart-core.min.js"></script>
<script src="https://cdn.anychart.com/releases/8.7.1/js/anychart-treemap.min.js"></script> -->
<script>
am4core.ready(function() {

// Themes begin
am4core.useTheme(am4themes_animated);
// Themes end

// Create chart instance
var chart = am4core.create("chartContainer", am4charts.PieChart);

// Add data
chart.data = [ {
  "country": "Lithuania",
  "litres": 501.9
}, {
  "country": "Czechia",
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


// Add and configure Series
var pieSeries = chart.series.push(new am4charts.PieSeries());
pieSeries.dataFields.value = "litres";
pieSeries.dataFields.category = "country";

}); // end am4core.ready()
</script>
<script type="text/javascript">
  am4core.useTheme(am4themes_animated);
// Create chart instance
var chart = am4core.create("loyalty_point", am4charts.XYChart);
// Add data
chart.data = [{
  "category": "Research",
  "value": 450
}, {
  "category": "Marketing",
  "value": 1200
}, {
  "category": "Distribution",
  "value": 1850
}];

var categoryAxis = chart.yAxes.push(new am4charts.CategoryAxis());
categoryAxis.dataFields.category = "category";
categoryAxis.renderer.labels.template.fill = am4core.color("#fff");
categoryAxis.renderer.grid.template.location = 0;

var valueAxis = chart.xAxes.push(new am4charts.ValueAxis());
valueAxis.renderer.labels.template.fill = am4core.color("#fff");
var series = chart.series.push(new am4charts.ColumnSeries());
series.dataFields.valueX = "value";
series.dataFields.categoryY = "category";

var valueLabel = series.columns.template.createChild(am4core.Label);
valueLabel.text = "{value}";
valueLabel.fontSize = 20;
valueLabel.fill = am4core.color("#fff");
valueLabel.valign = "middle";
valueLabel.align = "center";
valueLabel.dx = 10;
valueLabel.strokeWidth = 0;
</script>
<script type="text/javascript">

am4core.useTheme(am4themes_animated);
// Create chart instance
var chart = am4core.create("complaints_history", am4charts.XYChart);
// Add data
chart.data = [{
  "category": "Total Closed",
  "value": 1200
}, {
  "category": "Total Open",
  "value": 1850
},{
  "category": "Total Complaints",
  "value": 180,
 
}];

var categoryAxis = chart.yAxes.push(new am4charts.CategoryAxis());
categoryAxis.dataFields.category = "category";
categoryAxis.renderer.grid.template.location = 0;
categoryAxis.renderer.labels.template.fill = am4core.color("#fff");
chart.colors.list = [
  // am4core.color("#845EC2"),
];
var valueAxis = chart.xAxes.push(new am4charts.ValueAxis());
valueAxis.renderer.labels.template.fill = am4core.color("#fff");

var series = chart.series.push(new am4charts.ColumnSeries());
series.dataFields.valueX = "value";
series.dataFields.categoryY = "category";


var valueLabel = series.columns.template.createChild(am4core.Label);
valueLabel.text = "{value}";
valueLabel.fontSize = 20;
valueLabel.fill = am4core.color("#fff");
valueLabel.valign = "middle";
valueLabel.align = 'center';
valueLabel.dx = 10;
valueLabel.strokeWidth = 0;
</script>

<script type="text/javascript">
/* Create chart */
var chart = am4core.create("financier_analysis", am4charts.TreeMap);
chart.data = [{
  "name": "HDFC",
  "value": 190
}, {
  "name": "SBI",
  "value": 289
}, {
  "name": "ICICI",
  "value": 635
}, {
  "name": "HSBC",
  "value": 732
}, {
  "name": "PNB",
  "value": 835
},{
  "name": "IDBI",
  "value": 1135
},{
  "name": "AXIS",
  "value": 2135
},{
  "name": "canara bank",
  "value": 200
}];

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
</script>

<script type="text/javascript">
var chart = am4core.create("complaints_problem_area_analysis", am4charts.TreeMap);
chart.data = [{
  "name": "USA",
  "value": 190
}, {
  "name": "UK",
  "value": 289
}, {
  "name": "UAE",
  "value": 635
}, {
  "name": "INDIA",
  "value": 732
}, {
  "name": "CHIN",
  "value": 835
},{
  "name": "JAPAN",
  "value": 1135
},{
  "name": "BRAZIL",
  "value": 2135
},{
  "name": "RUSH",
  "value": 200
}];

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
</script>
<script>
am4core.ready(function() {

// Themes begin
am4core.useTheme(am4themes_animated);
// Themes end

// Create chart instance
var chart = am4core.create("jc_service_analysis", am4charts.PieChart);

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
pieSeries.slices.template.strokeWidth = 2;
pieSeries.slices.template.strokeOpacity = 1;

// This creates initial animation
pieSeries.hiddenState.properties.opacity = 1;
pieSeries.hiddenState.properties.endAngle = -90;
pieSeries.hiddenState.properties.startAngle = -90;

}); // end am4core.ready()
</script>

