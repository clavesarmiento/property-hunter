<?php
session_start();
error_reporting(0);
include('includes/config.php');
if(strlen($_SESSION['alogin'])==0)
  { 
header('location:index.php');
}
else{
if(isset($_GET['del']))
{
$id=$_GET['del'];
$sql = "delete from tblbrands  WHERE id=:id";
$query = $dbh->prepare($sql);
$query -> bindParam(':id',$id, PDO::PARAM_STR);
$query -> execute();
$msg="Page data updated  successfully";

}
 ?>

<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Property Hunter Realty | Trippings</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  
    <link rel="stylesheet" href="assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="assets/bower_components/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="assets/bower_components/Ionicons/css/ionicons.min.css">
    <!-- jvectormap -->
    <link rel="stylesheet" href="assets/bower_components/jvectormap/jquery-jvectormap.css">
   <!-- DataTables -->
  <link rel="stylesheet" href="assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="assets/dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="assets/dist/css/skins/_all-skins.min.css">


  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

  <style>
.errorWrap {
    padding: 10px;
    margin: 0 0 20px 0;
    background: #fff;
    border-left: 4px solid #dd3d36;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
.succWrap{
    padding: 10px;
    margin: 0 0 20px 0;
    background: #fff;
    border-left: 4px solid #5cb85c;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}

    body {
      font-family: 'Segoe UI', sans-serif;
    }

    .treeview-menu li {
      margin-left: 2rem;
    }
    .content-header h1 {
      font-size: 3rem;
      margin-bottom: 10px;
    }

    .main-footer {
      font-size: 1.2rem;
    }
  </style>


</head>

<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

 
<?php include('includes/header.php');?>

<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="assets/dist/img/yang.jpg" class="img-circle" alt="User Image">
        </div>

        <div class="pull-left info">
          <p>Administrator</p>
        </div>  
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        
        <li>
          <a href="dashboard-admin.php">
            <i class="fa fa-th"></i> <span>Dashboard</span>
            <span class="pull-right-container"></span>
          </a>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-home"></i>
            <span>Properties</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="property-listings.php">Property Listings</a></li>
            <li><a href="property-locations.php">Property Locations</a></li>
            <li><a href="property-types.php">Property Types</a></li>
          </ul>
        </li>

        <li class="active">
          <a href="trippings.php">
            <i class="fa fa-calendar-o"></i> <span>Tripping Schedules</span>
            <span class="pull-right-container"></span>
          </a>
        </li>

        <li>
          <a href="clients.php">
            <i class="glyphicon glyphicon-user"></i> <span>Clients</span>
            <span class="pull-right-container"></span>
          </a>
        </li>

         <li>
          <a href="inquiries.php">
            <i class="glyphicon glyphicon-file"></i> <span>Inquiries</span>
            <span class="pull-right-container"></span>
          </a>
        </li>

        <li>
          <a href="agent-commissions.php">
            <i class="fa fa-plus-square"></i> <span>Commissions</span>
            <span class="pull-right-container"></span>
          </a>
        </li>

        <li>
          <a href="agents.php">
            <i class="fa fa-user-plus"></i> <span>Agents</span>
            <span class="pull-right-container"></span>
          </a>
        </li>
    </section>
  </aside>


  <!--Content Section-->

  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header" style="background-color: white;">
      <p style="font-family: 'Segoe UI', sans-serif; color: gray;font-size: 2rem; margin-left: 1rem; margin-top: 1rem;">
        Tripping Schedules</p>
       <br>
     </section>  
   <!-- Main content -->
    <section class="content">
       <div class="row">
          <div class="col-md-12">
<br>
            <!-- Zero Configuration Table -->
            <div class="panel panel-default">
              <div class="panel-heading">List of Schedules</div>
              <div class="panel-body">
              <?php if($error){?><div class="errorWrap"><strong>ERROR</strong>:<?php echo htmlentities($error); ?> </div><?php } 
        else if($msg){?><div class="succWrap"><strong>SUCCESS</strong>:<?php echo htmlentities($msg); ?> </div><?php }?>
                <table id="mydatatable" class="display table table-striped table-bordered table-hover" cellspacing="0" width="100%">
                  <thead>
                    <tr>
                    <th>#</th>
                        <th>First Name</th>
                        <th>Middle Name</th>
                        <th>Last Name</th>
                      <th>Email Address</th>
                      <th>Contact no</th>
                      <th>Actions</th>
                  
                   
                    
                    </tr>
                  </thead>
                 
                  <tbody>

                  <?php $sql = "SELECT * from  tblusers ";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{       ?>  
                    <tr>
                      <td><?php echo htmlentities($cnt);?></td>
                      <td><?php echo htmlentities($result->Firstname);?></td>
                      <td><?php echo htmlentities($result->Middlename);?></td>
                      <td><?php echo htmlentities($result->Lastname);?></td>
                      <td><?php echo htmlentities($result->EmailId);?></td>
                      <td><?php echo htmlentities($result->ContactNo);?></td>
                      <!--<td><?php echo htmlentities($result->dob);?></td>
                      <td><?php echo htmlentities($result->Address);?></td>
                      <td><?php echo htmlentities($result->City);?></td>
                      <td><?php echo htmlentities($result->Country);?></td>
                      <td><?php echo htmlentities($result->RegDate);?></td>-->
                       <td>
&nbsp;&nbsp;<a href="manage-vehicles.php?del=<?php echo $result->id;?>" onclick="return confirm('Do you want to delete');"><button type="button" class="btn  btn-info btn-xs"><span class="glyphicon glyphicon-eye-open"></span> View</button></a>



      &nbsp;&nbsp;
<a href="manage-vehicles.php?del=<?php echo $result->id;?>" onclick="return confirm('Do you want to delete');"><button type="button" class="btn  btn-danger btn-xs"><span class="glyphicon glyphicon-trash"></span> Delete</button></a>


</td>
                  
                    </tr>
                    <?php $cnt=$cnt+1; }} ?>
                    
                  </tbody>
                </table>

            

              </div>
            </div>

          

          </div>
        </div>

   
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="pull-right hidden-xs">
     
    </div>
    <strong >Copyright &copy; 2019 <a href="https://adminlte.io">Property Hunter Realty</a>.</strong> All rights
    reserved.
  </footer>

  
     
        
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>

</div>
<!-- ./wrapper -->

<?php include('includes/newcarmodal.php');?>

<!-- jQuery 3 -->
<script src="assets/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="assets/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="assets/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="assets/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="assets/dist/js/demo.js"></script>
<script>
   $(function () {
    $('#mydatatable').DataTable({
      'paging'      : true,
      'lengthChange': true,
      'searching'   : true,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : true
    })
  })




</script>


<!-- page script -->
</body>
</html>
<?php } ?>