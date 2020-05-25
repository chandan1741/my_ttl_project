<?php
$this->load->view('common/header');
$this->load->view('common/navigation');
?>
 <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data List
      </h1>
      <ol class="breadcrumb">
        <!-- <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">UI</a></li> -->
        <li class="active">Data List</li>
      </ol>
    </section>
     <!-- Main content -->
    <section class="content">
      <!-- <div class="row"> -->
        <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data List</h3>
            </div>
            <!-- /.box-header -->
            <?Php 
            echo "<div class='box-body'><table id='example1' class='table table-bordered table-striped'>";
            // $f = fopen("data2.csv", "r");
            // $fr = fread($f, filesize("data2.csv"));
            // fclose($f);
            // $lines = array();
            // $lines = explode("\n\r",$fr); // IMPORTANT the delimiter here just the "new line" \r\n, use what u need instead of... 
           
            for($i=0;$i<count($rec);$i++)
            {
                echo "<tbody><tr>";

                $cells = array(); 
                $cells = explode(",",$rec[$i]);
                // print_r($cells);die; // use the cell/row delimiter what u need!
                for($k=0;$k<count($cells);$k++)
                {
                   echo "<td>".$cells[$k]."</td>";
                }
                // for k end
                echo "</tr>";
            }
            // for i end
            echo "</tbody></table></div>";
            ?> 
            <!-- <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>role</th>
                  <th>gender</th>
                  <th>phone_number</th>
                  <th>alternate_phone_number</th>
                  <th>is_phone_verified</th>
                  <th>address_id</th>
                  <th>user_id</th>
                </tr>
                </thead>
                <tbody>
                  <?php
                  // print_r($rec);die;
                  foreach($rec as $d) {
                
                  ?>
                <tr>
                  <td><?php echo $d->id;?></td>
                  <td><?php echo $d->role;?></td>
                  <td><?php echo $d->gender;?></td>
                  <td><?php echo $d->phone_number;?></td>
                  <td><?php echo $d->alternate_phone_number;?></td>
                  <td><?php echo $d->is_phone_verified;?></td>
                  <td><?php echo $d->address_id;?></td>
                  <td><?php echo $d->user_id;?></td>
                </tr>
              <?php } ?>
               </tbody>
              </table>
            </div> -->
            <!-- /.box-body -->
          </div>
      <!-- </div> -->
  </section>

<?php
  $this->load->view('common/footer');
?>
<script src="<?php echo base_url();?>assets/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url();?>assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>