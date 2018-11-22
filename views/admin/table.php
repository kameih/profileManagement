<!DOCTYPE html>
<html lang="en">

<?php include("head.php");?>

<style type="text/css">
button.btn.btn-primary.inactive-but {
    /* transition: background-color 3.5s ease; */
    background-color: #bdb5ec;
}
button.btn.btn-success.active-but {
    background: #abe5f2;
}</style>


<body class="fix-header fix-sidebar">
   
    <!-- Main wrapper  -->
    <div id="main-wrapper">
        <!-- header header  -->
       <?php include("header.php");?>
        <!-- End header header -->
        <!-- Left Sidebar  -->
        <?php include("sidebar.php");?>
        <!-- End Left Sidebar  -->
        <!-- Page wrapper  -->
        <div class="page-wrapper">
            <!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Dashboard</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div>
            </div>
            <!-- End Bread crumb -->
            <!-- Container fluid  -->
            <div class="container-fluid">
                <!-- Start Page Content -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Data Export</h4>
                                <h6 class="card-subtitle">Export data to Copy, CSV, Excel, PDF & Print</h6>
                                <div class="table-responsive m-t-40">
                                    <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th>Srl</th>
                                                <th>NAme</th>
                                                <th>Phone</th>
                                                <th>Email</th>
                                                <th>Username</th>
                                                <th>Reg Date</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>Srl</th>
                                                <th>NAme</th>
                                                <th>Phone</th>
                                                <th>Email</th>
                                                <th>Username</th>
                                                <th>Reg Date</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            <?php 
                                                $i=0;
                                                foreach($this->usrs as $usr){

                                                ?>
                                            <tr>
                                                <td><?php echo $i;?></td>
                                                <td><?php echo $usr->name;?></td>
                                                <td><?php echo $usr->phone;?></td>
                                                <td><?php echo $usr->email;?></td>
                                                <td><?php echo $usr->username;?></td>
                                                <td><?php echo $usr->re_date;?></td>
                                                <td><button class="btn btn-success <?php if($usr->status==0)echo 'active-but';?>" onclick="ajaxfunctiondash(<?php echo $usr->id;?>,'<?php echo BASE_URL;?>', 'active')">Active</button><button class="btn btn-primary <?php if($usr->status==1)echo 'inactive-but';?>" onclick="ajaxfunctiondash(<?php echo $usr->id;?>,'<?php echo BASE_URL;?>', 'inactive')">Inactive</button></td>
                                                <td><button class="btn btn-primary" onclick="ajaxfunctiondash(<?php echo $usr->id;?>,'<?php echo BASE_URL;?>', 'delete')">Delete</button></td>
                                            </tr>
                                            <?php $i++;
                                        }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End PAge Content -->
            </div>
            <!-- End Container fluid  -->
            <!-- footer -->
            <?php include("footer.php");?>
            <!-- End footer -->
        </div>
        <!-- End Page wrapper  -->
    </div>
    <!-- End Wrapper -->
    
    <!-- All Jquery -->
    <script src="<?php BASE_URL;?>views/admin/js/lib/jquery/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="<?php BASE_URL;?>views/admin/js/lib/bootstrap/js/popper.min.js"></script>
    <script src="<?php BASE_URL;?>views/admin/js/lib/bootstrap/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="<?php BASE_URL;?>views/admin/js/jquery.slimscroll.js"></script>
    <!--Menu sidebar -->
    <script src="<?php BASE_URL;?>views/admin/js/sidebarmenu.js"></script>
    <!--stickey kit -->
    <script src="<?php BASE_URL;?>views/admin/js/lib/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <!--Custom JavaScript -->
    <script src="<?php BASE_URL;?>views/admin/js/custom.min.js"></script>
    <script src="<?php BASE_URL;?>views/admin/js/customjs.js"></script>


    <script src="<?php BASE_URL;?>views/admin/js/lib/datatables/datatables.min.js"></script>
    <script src="<?php BASE_URL;?>views/admin/js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>
    <script src="<?php BASE_URL;?>views/admin/js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js"></script>
    <script src="<?php BASE_URL;?>views/admin/js/lib/datatables/cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
    <script src="<?php BASE_URL;?>views/admin/js/lib/datatables/cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
    <script src="<?php BASE_URL;?>views/admin/js/lib/datatables/cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
    <script src="<?php BASE_URL;?>views/admin/js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js"></script>
    <script src="<?php BASE_URL;?>views/admin/js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js"></script>
    <script src="<?php BASE_URL;?>views/admin/js/lib/datatables/datatables-init.js"></script>

</body>

</html>