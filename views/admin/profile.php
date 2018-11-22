<?php

?>
<!DOCTYPE html>
<html lang="en">

<?php include("head.php");?>

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
                                <h4 class="card-title">Profile Details</h4>
                                <h6 class="card-subtitle">Export data to Copy, CSV, Excel, PDF & Print</h6>
                               
                                <div class="form-group">
                                        <label for="name">Full Name: </label><span>dfgdfgdfg</span>
                                       
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email address: </label><span>dfgdfgdfg</span>
                                       
                                    </div>
                                    <div class="form-group">
                                        <label for="username">Username</label><span>dfgdfgdfg</span>
                                       
                                    </div>

                                    <div class="form-group">
                                        <label for="phone">Phone</label><span>dfgdfgdfg</span>
                                      
                                    </div>
                                   

                                    <div class="form-group profile">

                                           <label for="profileimage">Profile Image</label>:
                                       
                                            <div class=" display">
                                             <img src="" class="preview"> 
                                            </div>
                                    </div>


                                    <div class="form-group">
                                        <label for="about_me">About Me: </label><span>dfgdfgdfg</span>
                                      

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
    
     <?php include("mainscript.php");?>

</body>

</html>