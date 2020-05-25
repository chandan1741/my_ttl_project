//Job cart
$(document).on('click','.total_job_card_child',function(){

  var arn = $('#g_chil_arn_num').text();
 
state_wise_jc_child(arn);
  
  lob_wise_jc_child(arn);
  // detailed_job_cards(arn);
  chassis_number_child(arn);
  month_wise_job_cards_child(arn);
  yrs_child(arn);

$(window).scrollTop($('.wrapper').offset().top)
  
});
$(document).on('click','.c_all_jc',function(){
  var arn = $('#g_chil_arn_num').text();
  state_wise_jc_child(arn);
  lob_wise_jc_child(arn);
  // detailed_job_cards(arn);
  chassis_number_child(arn);
  month_wise_job_cards_child(arn);
  $("#container1").empty();
  $("#month_wise_jc_chart").empty();
  $("#lob_wise_job_cards").empty();
  $("#jc_data").empty();
   $('#container1_no_record').empty();
   $('#lob_wise_job_cards_no_record').empty();
   $('#month_wise_jc_chart_no_record').empty();
   $('.yr_d').show();
});

 $(document).on('click','input[name="c_optionsRadios"]',function(){
  // alert('dd');
  $('#container1_no_record').empty();
  $('#lob_wise_job_cards_no_record').empty();
  $('#month_wise_jc_chart_no_record').empty();
  $("#container1").empty();
  $("#month_wise_jc_chart").empty();
  $("#lob_wise_job_cards").empty();
  $("#jc_data").empty();
  $('.yr_d').show();
  var arn = $('#g_chil_arn_num').text();
  // var arn = $('#g_chil_arn_num').text();
  var status = $("input[name='c_optionsRadios']:checked").val();
  // alert(status);
   var csrfName = '<?php echo $this->security->get_csrf_token_name(); ?>',
            csrfHash = '<?php echo $this->security->get_csrf_hash(); ?>';
        $.ajax({
              type: "POST",
                url: "jc/month_wise_job_cards",
                data:{[csrfName]: csrfHash,arn:arn,status:status},
                beforeSend: function() {
                $("#state_wise_jc_loading").show();
                },
                success: function(records){
                	// console.log(records);
                	var comp = JSON.parse(records);
                  if(comp.length > 0){
                      // alert(comp);
                  am4core.ready(function() {

                    // Themes begin
                    am4core.useTheme(am4themes_animated);
                    // Themes end

                    // Create chart instance
                    var chart = am4core.create("month_wise_jc_chart", am4charts.XYChart);
                    chart.paddingRight = 20;

                    // Add data
                    chart.data = comp;

                    // Create axes
                    var categoryAxis = chart.xAxes.push(new am4charts.CategoryAxis());
                    categoryAxis.dataFields.category = "key";
                    categoryAxis.renderer.minGridDistance = 50;
                    categoryAxis.renderer.grid.template.location = 0.5;
                    categoryAxis.startLocation = 0.5;
                    categoryAxis.endLocation = 0.5;

                    // Create value axis
                    var valueAxis = chart.yAxes.push(new am4charts.ValueAxis());
                    valueAxis.baseValue = 0;

                    // Create series
                    var series = chart.series.push(new am4charts.LineSeries());
                    series.dataFields.valueY = "doc_count";
                    series.dataFields.categoryX = "key";
                    series.strokeWidth = 2;
                    series.tensionX = 0.77;

                    // bullet is added because we add tooltip to a bullet for it to change color
                    var bullet = series.bullets.push(new am4charts.Bullet());
                    bullet.tooltipText = "{doc_countY}";

                    bullet.adapter.add("fill", function(fill, target){
                        if(target.dataItem.valueY < 0){
                            return am4core.color("#FF0000");
                        }
                        return fill;
                    })
                    var range = valueAxis.createSeriesRange(series);
                    range.value = 0;
                    range.endValue = -1000;
                    range.contents.stroke = am4core.color("#FF0000");
                    range.contents.fill = range.contents.stroke;

                    // Add scrollbar
                    var scrollbarX = new am4charts.XYChartScrollbar();
                    scrollbarX.series.push(series);
                    chart.scrollbarX = scrollbarX;

                    chart.cursor = new am4charts.XYCursor();

                    }); // end am4core.ready()
                }else{
                  $('.yr_d').hide();
                  $('#month_wise_jc_chart_no_record').html('<div class="alert alert-danger">records not found</div>');
                }
                }
              });

})
$(document).on('click','.c_open_jc',function(){
   $('#container1_no_record').empty();
  $('#lob_wise_job_cards_no_record').empty();
  $('#month_wise_jc_chart_no_record').empty();
  $("#container1").empty();
  $("#month_wise_jc_chart").empty();
  $("#lob_wise_job_cards").empty();
  $("#jc_data").empty();
  var arn = $('#g_chil_arn_num').text();
  chassis_number_child(arn);
  var _open_jc = $('input[name=c_optionsRadios]:checked', '#r_from').val();
  lob_wise_open_jc_child(arn,_open_jc);
   var csrfName = '<?php echo $this->security->get_csrf_token_name(); ?>',
            csrfHash = '<?php echo $this->security->get_csrf_hash(); ?>';
        $.ajax({
              type: "POST",
                url: "jc/state_wise_jc",
                data:{[csrfName]: csrfHash,arn:arn,_open_jc:_open_jc},
                beforeSend: function() {
                $("#state_wise_jc_loading").show();
                },
                success: function(records){
                  // console.log(records);
                  $("#state_wise_jc_loading").hide();
                  var comp = JSON.parse(records);
                  // console.log(comp);
                  if(comp != null){

                  var data = comp;
                  // var data1 = [
                  //     ['madhya pradesh', 0],
                  //     ['uttar pradesh', 1],
                  //     ['karnataka', 2],
                  //     ['nagaland', 3],
                  //     ['bihar', 4],
                  //     ['lakshadweep', 5],
                  //     ['andaman and nicobar', 6],
                  //     ['assam', 7],
                  //     ['west bengal', 8],
                  //     ['puducherry', 9],
                  //     ['daman and diu', 10],
                  //     ['gujarat', 11],
                  //     ['rajasthan', 12],
                  //     ['dadara and nagar havelli', 13],
                  //     ['chhattisgarh', 14],
                  //     ['tamil nadu', 15]
                      
                  // ];
                  // console.log(data1);
                  // Create the chart
                  Highcharts.mapChart('container1', {
                      chart: {
                          map: 'countries/in/custom/in-all-disputed'
                      },

                      colorAxis: {
                          min: 0
                      },

                      series: [{
                          data: data,
                          name: 'JC data',
                          states: {
                              hover: {
                                  color: '#3c8dbc'
                              }
                          },
                          dataLabels: {
                              enabled: true,
                              format: '{point.value}',    
                          }
                      }]
                  });
                }else{
                  $('#container1_no_record').html('<div class="alert alert-danger">records not found</div>');
                }
                }
            });
  // alert(_open_jc);
});

// $("#closed_jc").click(function(){
$(document).on('click','.c_closed_jc',function(){
   $('#container1_no_record').empty();
  $('#lob_wise_job_cards_no_record').empty();
  $('#month_wise_jc_chart_no_record').empty();
  $("#container1").empty();
  $("#month_wise_jc_chart").empty();
  $("#lob_wise_job_cards").empty();
  $("#jc_data").empty();
  var arn = $('#g_chil_arn_num').text();
  var closed_jc = $('input[name=c_optionsRadios]:checked', '#r_from').val();
  lob_wise_closed_jc_child(arn,closed_jc);
  $("#jc_data").empty();
  chassis_number_child(arn);
  var csrfName = '<?php echo $this->security->get_csrf_token_name(); ?>',
            csrfHash = '<?php echo $this->security->get_csrf_hash(); ?>';
        $.ajax({
              type: "POST",
                url: "jc/state_wise_jc",
                data:{[csrfName]: csrfHash,arn:arn,closed_jc:closed_jc},
                beforeSend: function() {
                $("#state_wise_jc_loading").show();
                },
                success: function(records){
                  // console.log(records);
                  $("#state_wise_jc_loading").hide();
                  var comp = JSON.parse(records);
                  // console.log(comp);
                  if(comp != null){
                  var data = comp;
                  // var data = [
                  //     ["madhya pradesh", 0],
                  //     ["uttar pradesh", 1]
                      
                  // ];
//                   var data = [
//     ['madhya pradesh', 0],
//     ['uttar pradesh', 1],
//     ['karnataka', 2],
//     ['nagaland', 3],
//     ['bihar', 4],
//     ['lakshadweep', 5],
//     ['andaman and nicobar', 6],
//     ['assam', 7],
//     ['west bengal', 8],
//     ['puducherry', 9],
//     ['daman and diu', 10],
//     ['gujarat', 11],
//     ['rajasthan', 12],
//     ['dadara and nagar havelli', 13],
//     ['chhattisgarh', 14],
//     ['tamil nadu', 15],
//     ['chandigarh', 16],
//     ['punjab', 17],
//     ['haryana', 18],
//     ['andhra pradesh', 19],
//     ['maharashtra', 20],
//     ['himachal pradesh', 21],
//     ['meghalaya', 22],
//     ['kerala', 23],
//     ['telangana', 24],
//     ['mizoram', 25],
//     ['tripura', 26],
//     ['manipur', 27],
//     ['arunanchal pradesh', 28],
//     ['jharkhand', 29],
//     ['goa', 30],
//     ['nct of delhi', 31],
//     ['odisha', 32],
//     ['jammu and kashmir', 33],
//     ['sikkim', 34],
//     ['uttarakhand', 35]
// ];
                  // Create the chart
                  Highcharts.mapChart('container1', {
                      chart: {
                          map: 'countries/in/custom/in-all-disputed'
                      },

                      colorAxis: {
                          min: 0
                      },

                      series: [{
                          data: data,
                          name: 'JC data',
                          states: {
                              hover: {
                                  color: '#3c8dbc'
                              }
                          },
                          dataLabels: {
                              enabled: true,
                              format: '{point.value}',    
                          }
                      }]
                  });
                }else{
                   $('#container1_no_record').html('<div class="alert alert-danger">records not found</div>');
                }
                }
            });
});

function state_wise_jc_child(arn){
  $("#container1").empty();
  $("#month_wise_jc_chart").empty();
  $("#lob_wise_job_cards").empty();
  $("#jc_data").empty();

  var csrfName = '<?php echo $this->security->get_csrf_token_name(); ?>',
            csrfHash = '<?php echo $this->security->get_csrf_hash(); ?>';
        $.ajax({
              type: "POST",
                url: "jc/state_wise_jc",
                data:{[csrfName]: csrfHash,arn:arn},
                beforeSend: function() {
                $("#state_wise_jc_loading").show();
                },
                success: function(records){
                  // console.log(records);
                  $("#state_wise_jc_loading").hide();
                  var comp = JSON.parse(records);
                  if(comp != null){
                  var data = comp;
                  // Create the chart
                  Highcharts.mapChart('container1', {
                      chart: {
                          map: 'countries/in/custom/in-all-disputed'
                      },

                      colorAxis: {
                          min: 0
                      },

                      series: [{
                          data: data,
                          name: 'JC data',
                          states: {
                              hover: {
                                  color: '#3c8dbc'
                              }
                          },
                          dataLabels: {
                              enabled: true,
                              format: '{point.value}',    
                          }
                      }]
                  });
                }else{
                   $('#container1_no_record').html('<div class="alert alert-danger">records not found</div>');
                }
                }
            });
        }

//month_wise_job_cards

function month_wise_job_cards_child(arn){
  $("#container1").empty();
  $("#month_wise_jc_chart").empty();
  $("#lob_wise_job_cards").empty();
  $("#jc_data").empty();
  $('.yr_d').show();
  var csrfName = '<?php echo $this->security->get_csrf_token_name(); ?>',
            csrfHash = '<?php echo $this->security->get_csrf_hash(); ?>';
            var months = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
            $.ajax({
              type: "POST",
                url: "jc/month_wise_job_cards",
                data:{[csrfName]: csrfHash,arn:arn},
                beforeSend: function() {
                $("#month_wise_jc_loading").show();
                },
                success: function(records){
                  $('#month_wise_jc_loading').hide();
                  // console.log(records);
                  var comp = JSON.parse(records);
                  if(comp.length > 0){
                  am4core.ready(function() {

                    // Themes begin
                    am4core.useTheme(am4themes_animated);
                    // Themes end

                    // Create chart instance
                    var chart = am4core.create("month_wise_jc_chart", am4charts.XYChart);
                    chart.paddingRight = 20;

                    // Add data
                    chart.data = comp;

                    // Create axes
                    var categoryAxis = chart.xAxes.push(new am4charts.CategoryAxis());
                    categoryAxis.dataFields.category = "key";
                    categoryAxis.renderer.minGridDistance = 50;
                    categoryAxis.renderer.grid.template.location = 0.5;
                    categoryAxis.startLocation = 0.5;
                    categoryAxis.endLocation = 0.5;

                    // Create value axis
                    var valueAxis = chart.yAxes.push(new am4charts.ValueAxis());
                    valueAxis.baseValue = 0;

                    // Create series
                    var series = chart.series.push(new am4charts.LineSeries());
                    series.dataFields.valueY = "doc_count";
                    series.dataFields.categoryX = "key";
                    series.strokeWidth = 2;
                    series.tensionX = 0.77;

                    // bullet is added because we add tooltip to a bullet for it to change color
                    var bullet = series.bullets.push(new am4charts.Bullet());
                    bullet.tooltipText = "{doc_countY}";

                    bullet.adapter.add("fill", function(fill, target){
                        if(target.dataItem.valueY < 0){
                            return am4core.color("#FF0000");
                        }
                        return fill;
                    })
                    var range = valueAxis.createSeriesRange(series);
                    range.value = 0;
                    range.endValue = -1000;
                    range.contents.stroke = am4core.color("#FF0000");
                    range.contents.fill = range.contents.stroke;

                    // Add scrollbar
                    var scrollbarX = new am4charts.XYChartScrollbar();
                    scrollbarX.series.push(series);
                    chart.scrollbarX = scrollbarX;

                    chart.cursor = new am4charts.XYCursor();

                    }); // end am4core.ready()
                }else{
                  $('.yr_d').hide();
                  $('#month_wise_jc_chart_no_record').html('<div class="alert alert-danger">records not found</div>');
                }
                }
              });
}

//Lov wise jc

function lob_wise_jc_child(arn){

  var csrfName = '<?php echo $this->security->get_csrf_token_name(); ?>',
            csrfHash = '<?php echo $this->security->get_csrf_hash(); ?>';
            $.ajax({
              type: "POST",
                url: "jc/lob_wise_jc",
                data:{[csrfName]: csrfHash,arn:arn},
                beforeSend: function() {
                $("#lob_wise_job_cards_loading").show();
                },
                success: function(records){
                  // console.log(records);
                  $("#lob_wise_job_cards_loading").hide();
                  var comp = JSON.parse(records);
                  // alert(comp);
                  if(comp.length > 0){
                  am4core.ready(function() {

                  // Themes begin
                  am4core.useTheme(am4themes_animated);
                  // Themes end
                  // Create chart instance
                  var chart = am4core.create("lob_wise_job_cards", am4charts.XYChart);
                  chart.scrollbarX = new am4core.Scrollbar();

                  // Add data
                  chart.data = comp;

                  // Create axes
                  var categoryAxis = chart.xAxes.push(new am4charts.CategoryAxis());
                  categoryAxis.dataFields.category = "key";
                  categoryAxis.renderer.grid.template.location = 0;
                  categoryAxis.renderer.minGridDistance = 30;
                  categoryAxis.renderer.labels.template.horizontalCenter = "right";
                  categoryAxis.renderer.labels.template.verticalCenter = "middle";
                  categoryAxis.renderer.labels.template.rotation = 270;
                  categoryAxis.tooltip.disabled = true;
                  categoryAxis.renderer.minHeight = 110;

                  var valueAxis = chart.yAxes.push(new am4charts.ValueAxis());
                  valueAxis.renderer.minWidth = 50;

                  // Create series
                  var series = chart.series.push(new am4charts.ColumnSeries());
                  series.sequencedInterpolation = true;
                  series.dataFields.valueY = "doc_count";
                  series.dataFields.categoryX = "key";
                  series.tooltipText = "{categoryX}: {valueY}[/]";
                  series.columns.template.strokeWidth = 0;

                  series.tooltip.pointerOrientation = "vertical";

                  series.columns.template.column.cornerRadiusTopLeft = 10;
                  series.columns.template.column.cornerRadiusTopRight = 10;
                  series.columns.template.column.fillOpacity = 0.8;

                  // on hover, make corner radiuses bigger
                  var hoverState = series.columns.template.column.states.create("hover");
                  hoverState.properties.cornerRadiusTopLeft = 0;
                  hoverState.properties.cornerRadiusTopRight = 0;
                  hoverState.properties.fillOpacity = 1;

                  series.columns.template.adapter.add("fill", function(fill, target) {
                    return chart.colors.getIndex(target.dataItem.index);
                  });

                  // Cursor
                  chart.cursor = new am4charts.XYCursor();

                  }); // end am4core.ready()
                }else{
                  $('#lob_wise_job_cards_no_record').html('<div class="alert alert-danger">records not found</div>');
                }
                }
            });
}

function lob_wise_open_jc_child(arn,open_jc){
  var csrfName = '<?php echo $this->security->get_csrf_token_name(); ?>',
            csrfHash = '<?php echo $this->security->get_csrf_hash(); ?>';
            $.ajax({
              type: "POST",
                url: "jc/lob_wise_jc",
                data:{[csrfName]: csrfHash,arn:arn,open_jc:open_jc},
                beforeSend: function() {
                $("#lob_wise_job_cards_loading").show();
                },
                success: function(records){
                  // console.log(records);
                  $("#lob_wise_job_cards_loading").hide();
                  var comp = JSON.parse(records);
                  console.log(comp);
                  if(comp.length>0){
                  am4core.ready(function() {

                  // Themes begin
                  am4core.useTheme(am4themes_animated);
                  // Themes end

                  // Create chart instance
                  var chart = am4core.create("lob_wise_job_cards", am4charts.XYChart);
                  chart.scrollbarX = new am4core.Scrollbar();

                  // Add data
                  chart.data = comp;

                  // Create axes
                  var categoryAxis = chart.xAxes.push(new am4charts.CategoryAxis());
                  categoryAxis.dataFields.category = "key";
                  categoryAxis.renderer.grid.template.location = 0;
                  categoryAxis.renderer.minGridDistance = 30;
                  categoryAxis.renderer.labels.template.horizontalCenter = "right";
                  categoryAxis.renderer.labels.template.verticalCenter = "middle";
                  categoryAxis.renderer.labels.template.rotation = 270;
                  categoryAxis.tooltip.disabled = true;
                  categoryAxis.renderer.minHeight = 110;

                  var valueAxis = chart.yAxes.push(new am4charts.ValueAxis());
                  valueAxis.renderer.minWidth = 50;

                  // Create series
                  var series = chart.series.push(new am4charts.ColumnSeries());
                  series.sequencedInterpolation = true;
                  series.dataFields.valueY = "doc_count";
                  series.dataFields.categoryX = "key";
                  series.tooltipText = "{categoryX}: {valueY}[/]";
                  series.columns.template.strokeWidth = 0;

                  series.tooltip.pointerOrientation = "vertical";

                  series.columns.template.column.cornerRadiusTopLeft = 10;
                  series.columns.template.column.cornerRadiusTopRight = 10;
                  series.columns.template.column.fillOpacity = 0.8;

                  // on hover, make corner radiuses bigger
                  var hoverState = series.columns.template.column.states.create("hover");
                  hoverState.properties.cornerRadiusTopLeft = 0;
                  hoverState.properties.cornerRadiusTopRight = 0;
                  hoverState.properties.fillOpacity = 1;

                  series.columns.template.adapter.add("fill", function(fill, target) {
                    return chart.colors.getIndex(target.dataItem.index);
                  });

                  // Cursor
                  chart.cursor = new am4charts.XYCursor();

                  }); // end am4core.ready()
                  }else{

                    $('#lob_wise_job_cards_no_record').html('<div class="alert alert-danger">records not found</div>');
                  }
                }
            });
}

function lob_wise_closed_jc_child(arn,closed_jc){
  var csrfName = '<?php echo $this->security->get_csrf_token_name(); ?>',
            csrfHash = '<?php echo $this->security->get_csrf_hash(); ?>';
            $.ajax({
              type: "POST",
                url: "jc/lob_wise_jc",
                data:{[csrfName]: csrfHash,arn:arn,closed_jc:closed_jc},
                beforeSend: function() {
                $("#lob_wise_job_cards_loading").show();
                },
                success: function(records){
                  // console.log(records);
                  $("#lob_wise_job_cards_loading").hide();
                  var comp = JSON.parse(records);
                  if(comp.length>0){
                  am4core.ready(function() {

                  // Themes begin
                  am4core.useTheme(am4themes_animated);
                  // Themes end

                  // Create chart instance
                  var chart = am4core.create("lob_wise_job_cards", am4charts.XYChart);
                  chart.scrollbarX = new am4core.Scrollbar();

                  // Add data
                  chart.data = comp;

                  // Create axes
                  var categoryAxis = chart.xAxes.push(new am4charts.CategoryAxis());
                  categoryAxis.dataFields.category = "key";
                  categoryAxis.renderer.grid.template.location = 0;
                  categoryAxis.renderer.minGridDistance = 30;
                  categoryAxis.renderer.labels.template.horizontalCenter = "right";
                  categoryAxis.renderer.labels.template.verticalCenter = "middle";
                  categoryAxis.renderer.labels.template.rotation = 270;
                  categoryAxis.tooltip.disabled = true;
                  categoryAxis.renderer.minHeight = 110;

                  var valueAxis = chart.yAxes.push(new am4charts.ValueAxis());
                  valueAxis.renderer.minWidth = 50;

                  // Create series
                  var series = chart.series.push(new am4charts.ColumnSeries());
                  series.sequencedInterpolation = true;
                  series.dataFields.valueY = "doc_count";
                  series.dataFields.categoryX = "key";
                  series.tooltipText = "{categoryX}: {valueY}[/]";
                  series.columns.template.strokeWidth = 0;

                  series.tooltip.pointerOrientation = "vertical";

                  series.columns.template.column.cornerRadiusTopLeft = 10;
                  series.columns.template.column.cornerRadiusTopRight = 10;
                  series.columns.template.column.fillOpacity = 0.8;

                  // on hover, make corner radiuses bigger
                  var hoverState = series.columns.template.column.states.create("hover");
                  hoverState.properties.cornerRadiusTopLeft = 0;
                  hoverState.properties.cornerRadiusTopRight = 0;
                  hoverState.properties.fillOpacity = 1;

                  series.columns.template.adapter.add("fill", function(fill, target) {
                    return chart.colors.getIndex(target.dataItem.index);
                  });

                  // Cursor
                  chart.cursor = new am4charts.XYCursor();

                  }); // end am4core.ready()
                  }else{
                    $('#lob_wise_job_cards_no_record').html('<div class="alert alert-danger">records not found</div>');
                  }
                }
            });
          }

function detailed_job_cards(arn) {
           var csrfName = '<?php echo $this->security->get_csrf_token_name(); ?>',
            csrfHash = '<?php echo $this->security->get_csrf_hash(); ?>';
            $.ajax({
              type: "POST",
                url: "jc/detailed_job_cards",
                data:{[csrfName]: csrfHash,arn:arn},
                // beforeSend: function() {
                // $("#state_wise_jc_loading").show();
                // },
                success: function(records){
                  // $("#state_wise_jc_loading").hide();
                  var userDetails = JSON.parse(records);
                  // console.log(userDetails);
                  // $('#jc_data').html(d);
                  var table =  $('#jc_data');

                var max_size=userDetails.length;
                var sta = 0;
                var elements_per_page = 100;
                var limit = elements_per_page;
                goFun(sta,limit);
                function goFun(sta,limit){
          // console.log(sta,limit);
                var e = 0;
                    for(var i=sta;i<limit;i++){
                      e++;
                    var tab='<tr><td>'+e+'</td><td>'+userDetails[i].ORDER_MONTHYEAR+"\n"+'</td><td>'+userDetails[i].DLR_SLS_STATE+"\n"+'</td><td>'+userDetails[i].DLR_NAME+"\n"+'</td><td>'
                              +userDetails[i].ORDER_NUM+"\n"+'</td><td>'+userDetails[i].SR_ASSET_NUM+"\n"+'</td><td>'+userDetails[i].VEHICLE_REGISTRATION_NUMBER+"\n"+'</td><td>'
                              +userDetails[i].JC_CREATED_DT+"\n"+'</td><td>'+userDetails[i].TAT+"\n"+'</td><td>'+userDetails[i].SR_ASSET_PL+"\n"+'</td><td>'+userDetails[i].SR_SR_CAT_TYPE_CD+"\n"+'</td><td>'+userDetails[i].STATUS_CD+"\n"+'</td></tr>';

                     $('#jc_data').append(tab)

                    }
                }
                $('#nextValue').click(function(){
                    var next = limit;
                    if(max_size>=next) {
                    def = limit+elements_per_page;
           limit = def
                    table.empty();
          if(limit > max_size) {
          def = max_size;
          }
         
                    goFun(next,def);
          
                    }
                });
                  $('#PreValue').click(function(){
                    var pre = limit-(2*elements_per_page);
                    if(pre>=0) {
                    limit = limit-elements_per_page;
                    table.empty();
                    goFun(pre,limit); 
                    }
                });
 var number = Math.round(userDetails.length / elements_per_page);

 // for(i=1;i<=number;i++) {

 //  $('.nav1').append('<button class="btn">'+i+'</button>');
 // }

 // $('.nav1 button').click(function(){
 //       var start = $(this).text();
 //       table.empty();
 //       limit = 100*(parseInt(start)+1) > max_size ? max_size: 100*(parseInt(start)+1)
 //      goFun(start*100,limit); 
 //      });
    }
              });
        }

function chassis_number_child(arn) {
 var csrfName = '<?php echo $this->security->get_csrf_token_name(); ?>',
            csrfHash = '<?php echo $this->security->get_csrf_hash(); ?>';
            $.ajax({
              type: "POST",
                url: "jc/chassis_number",
                data:{[csrfName]: csrfHash,arn:arn},
                beforeSend: function() {
                // $("#detailed_job_cards_loading").show();
                },
                success: function(records){
                  // $("#state_wise_jc_loading").hide();
                  var d = JSON.parse(records);
                  $('#jc_chassis_num').html(d);
                }
              });
}

// $(".jc_chassis_num_c").change(function() {
$(document).on('change','.jc_chassis_num_c',function(){
  
  var arn = $('#g_chil_arn_num').text();
  var csrfName = '<?php echo $this->security->get_csrf_token_name(); ?>',
            csrfHash = '<?php echo $this->security->get_csrf_hash(); ?>';
  var chassis_number = $('#jc_chassis_num').val();
 
  var status = $('input[name=c_optionsRadios]:checked', '#r_from').val();

  // alert(status);
            $.ajax({
              type: "POST",
                url: "jc/search_chassis_number",
                data:{[csrfName]: csrfHash,arn:arn,chassis_number:chassis_number,status:status},
                beforeSend: function() {
                $("#detailed_job_cards_loading").show();
                },
                success: function(records){
                  // console.log(records);
                  $("#jc_data").empty();
                   var userDetails = JSON.parse(records);
                  if(userDetails){
                    var table =  $('#jc_data');
                    var max_size=userDetails.length;
                    var sta = 0;
                    var elements_per_page = 100;
                    var limit = elements_per_page;
                    var d = new Date();
                    var n = d.toISOString(); 
                    goFun(sta,limit);
                    function goFun(sta,limit){
              // console.log(sta,limit);
                    var e = 0;
                        for(var i=sta;i<limit;i++){
                          e++;
                          //userDetails[i].JC_CREATED_DT
                          // var t = new Date();
                          // alert(t);
                       // var d = new Date(userDetails[i].JC_CREATED_DT);
                        // var jsDate = new Date(1511827200000);
                        // var dateString = moment.unix(1511827200000).format("MM/DD/YYYY");
                        // alert(dateString);
                        //var formattedDate =  d.getDate()+ "-" + d.getMonth()+1 + "-" + d.getFullYear();
                        // alert(formattedDate);
                        //console.log(formattedDate);
                        // var hours = (d.getHours() < 10) ? "0" + d.getHours() : d.getHours();
                        // var minutes = (d.getMinutes() < 10) ? "0" + d.getMinutes() : d.getMinutes();
                        // var formattedTime = hours + ":" + minutes;
                        var status_d = userDetails[i].STATUS_CD == 'Open' ? '<span class="label label-warning">Open</span>' : '<span class="label label-success">Closed</span>';

                        // formattedDate = formattedDate;
                        var tab='<tr><td>'+e+'</td><td>'+userDetails[i].ORDER_MONTHYEAR+'</td><td>'+userDetails[i].DLR_SLS_STATE+"\n"+'</td><td>'+userDetails[i].DLR_NAME+"\n"+'</td><td>'
                                  +userDetails[i].ORDER_NUM+"\n"+'</td><td>'+userDetails[i].SR_ASSET_NUM+"\n"+'</td><td>'+userDetails[i].VEHICLE_REGISTRATION_NUMBER+"\n"+'</td><td>'
                                  +userDetails[i].JC_CREATED_DT_STR+"\n"+'</td><td>'+userDetails[i].TAT+"\n"+'</td><td>'+userDetails[i].SR_ASSET_PL+"\n"+'</td><td>'+userDetails[i].SR_SR_CAT_TYPE_CD+"\n"+'</td><td>'+status_d+ "\n"+'</td></tr>';
                          $("#detailed_job_cards_loading").hide();
                          $('#jc_data').append(tab);

                        }
                    }
                    $('#nextValue').click(function(){
                        var next = limit;
                        if(max_size>=next) {
                        def = limit+elements_per_page;
                        limit = def
                        table.empty();
                        if(limit > max_size) {
                        def = max_size;
                        }
                        goFun(next,def);
                        }
                    });
                      $('#PreValue').click(function(){
                        var pre = limit-(2*elements_per_page);
                        if(pre>=0) {
                        limit = limit-elements_per_page;
                        table.empty();
                        goFun(pre,limit); 
                        }
                    });
                    var number = Math.round(userDetails.length / elements_per_page);

                    } else {
                      $("#detailed_job_cards_loading").hide();
                      $('#jc_data').html('<tr><td></td><td></td><td></td><td></td><td></td><td></td><td>Data Not Found</td><td></td><td></td><td></td><td></td><td></td></tr></p>')
                    }
                  }
          }); 
});

function yrs_child(arn) {
  var csrfName = '<?php echo $this->security->get_csrf_token_name(); ?>',
            csrfHash = '<?php echo $this->security->get_csrf_hash(); ?>';
            $.ajax({
              type: "POST",
                url: "jc/yrs",
                data:{[csrfName]: csrfHash,arn:arn},
                beforeSend: function() {
                // $("#detailed_job_cards_loading").show();
                },
                success: function(records){
                  // $("#state_wise_jc_loading").hide();
                  var d = JSON.parse(records);
                  $('#jc_yrs').html(d);
                }
              });
}


$('#jc_yrs').change(function(){
  // alert('dd');
   var arn = $('#g_chil_arn_num').text();
  var csrfName = '<?php echo $this->security->get_csrf_token_name(); ?>',
            csrfHash = '<?php echo $this->security->get_csrf_hash(); ?>';
  var yrs = $('#jc_yrs').val();
  var status = $('input[name=optionsRadios]:checked', '#r_from').val();
              $.ajax({
                  type: "POST",
                  url: "jc/yrs_month_data",
                  data:{[csrfName]: csrfHash,arn:arn,yrs:yrs,status:status},
                  beforeSend: function() {
                  $("#month_wise_jc_loading").show();
                  },
                  success: function(records){
                    $("#month_wise_jc_loading").hide();
                    var comp = JSON.parse(records);
                    am4core.ready(function() {

                    // Themes begin
                    am4core.useTheme(am4themes_animated);
                    // Themes end

                    // Create chart instance
                    var chart = am4core.create("month_wise_jc_chart", am4charts.XYChart);
                    chart.paddingRight = 20;

                    // Add data
                    chart.data = comp;

                    // Create axes
                    var categoryAxis = chart.xAxes.push(new am4charts.CategoryAxis());
                    categoryAxis.dataFields.category = "key";
                    categoryAxis.renderer.minGridDistance = 50;
                    categoryAxis.renderer.grid.template.location = 0.5;
                    categoryAxis.startLocation = 0.5;
                    categoryAxis.endLocation = 0.5;

                    // Create value axis
                    var valueAxis = chart.yAxes.push(new am4charts.ValueAxis());
                    valueAxis.baseValue = 0;

                    // Create series
                    var series = chart.series.push(new am4charts.LineSeries());
                    series.dataFields.valueY = "doc_count";
                    series.dataFields.categoryX = "key";
                    series.strokeWidth = 2;
                    series.tensionX = 0.77;

                    // bullet is added because we add tooltip to a bullet for it to change color
                    var bullet = series.bullets.push(new am4charts.Bullet());
                    bullet.tooltipText = "{doc_countY}";

                    bullet.adapter.add("fill", function(fill, target){
                        if(target.dataItem.valueY < 0){
                            return am4core.color("#FF0000");
                        }
                        return fill;
                    })
                    var range = valueAxis.createSeriesRange(series);
                    range.value = 0;
                    range.endValue = -1000;
                    range.contents.stroke = am4core.color("#FF0000");
                    range.contents.fill = range.contents.stroke;

                    // Add scrollbar
                    var scrollbarX = new am4charts.XYChartScrollbar();
                    scrollbarX.series.push(series);
                    chart.scrollbarX = scrollbarX;

                    chart.cursor = new am4charts.XYCursor();

                    }); // end am4core.ready()
                  }
              });
});

//Ctrl+p disabled
jQuery(document).bind("keyup keydown", function(e){
    if(e.ctrlKey && e.keyCode == 80){
        // alert('fine');
        return false;
    }
});
