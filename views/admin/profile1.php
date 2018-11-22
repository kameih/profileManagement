<!DOCTYPE html>
<html lang="en">

<head>
    <?php include("head.php");?>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:** -->
    <!--[if lt IE 9]>
    <script src="https:**oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https:**oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<style type="text/css">
.form-group.profile-sect {
    height: 114px;
    padding: 9px 1px 4px;
}

.col-md-4.display {
    float: right;
    border: 1px solid;
    height: 200px;
    margin-top: -41px;
    width: 240px;
    margin-right: 11px;
    overflow: hidden;
}

.col-md-8.file-input {
    float: left;
    margin-left: -16px;
}

.form-group.success-box {
    border: 1px solid;
    padding: 12px 0px 11px;
    border-color: #80d180;
  
}

.form-group.success-box p {
    color: #80d180;
    text-align: center;
    font-size: 18px;
    font-family: sans-serif;
}

</style>
<body class="fix-header fix-sidebar">
      
    <!-- Main wrapper  -->
    <div id="main-wrapper">
         <?php include('header.php');?>

        <!-- End header header -->
        <!-- Left Sidebar  -->
         <?php include('sidebar.php');?>
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
                    <!-- Column -->
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-two">
                                    <header>
                                        <div class="avatar">
                                            <?php 

                                            if($this->usrs[0]->profile_image!='') { ?>

                                            <img src="<?php echo 'uploads/images/'.$this->usrs[0]->profile_image;?>" alt="Allison Walker" />
                                            <?php 
                                        }
                                        else
                                            { ?>
                                            <img src="https://randomuser.me/api/portraits/women/21.jpg" alt="Allison Walker" />
                                            <?php } ?>
                                        </div>
                                    </header>

                                    <h3><?php echo $this->usrs[0]->username;?></h3>
                                    <div class="desc">
                                        <?php ($this->usrs[0]->description !="") ? print_r(substr($this->usrs[0]->description, 0, 600)):print_r("Lorem ipsum dolor sit amet, consectetur adipisicing elit et cupiditate deleniti.");?>
                                    </div>
                                    <div class="contacts">
                                        <a href=""><i class="fa fa-plus"></i></a>
                                        <a href=""><i class="fa fa-whatsapp"></i></a>
                                        <a href=""><i class="fa fa-envelope"></i></a>
                                        <div class="clear"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-lg-12">
                        <div class="card">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs profile-tab" role="tablist">
                                <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#home" role="tab" id="timeline_nav">Timeline</a> </li>
                                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#profile" role="tab" id="profile_nav">Profile</a> </li>
                                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#settings" role="tab" id="setting_nav">Settings</a> </li>
                            </ul>
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div class="tab-pane active" id="home" role="tabpanel">
                                    <div class="card-body">
                                        <div class="profiletimeline">
                                            <div class="sl-item">
                                                <div class="sl-left"> <img src="<?php BASE_URL;?>views/admin/images/users/avatar-1.jpg" alt="user" class="img-circle" /> </div>
                                                <div class="sl-right">
                                                    <div><a href="#" class="link">Michael Qin</a> <span class="sl-date">5 minutes ago</span>
                                                        <p>assign a new task <a href="#"> Design weblayout</a></p>
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-6 m-b-20"><img src="<?php BASE_URL;?>views/admin/images/big/img1.jpg" class="img-responsive radius" /></div>
                                                            <div class="col-lg-3 col-md-6 m-b-20"><img src="<?php BASE_URL;?>views/admin/images/big/img2.jpg" class="img-responsive radius" /></div>
                                                            <div class="col-lg-3 col-md-6 m-b-20"><img src="<?php BASE_URL;?>views/admin/images/big/img3.jpg" class="img-responsive radius" /></div>
                                                            <div class="col-lg-3 col-md-6 m-b-20"><img src="<?php BASE_URL;?>views/admin/images/big/img4.jpg" class="img-responsive radius" /></div>
                                                        </div>
                                                        <div class="like-comm"> <a href="javascript:void(0)" class="link m-r-10">2 comment</a> <a href="javascript:void(0)" class="link m-r-10"><i class="fa fa-heart text-danger"></i> 5 Love</a> </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="sl-item">
                                                <div class="sl-left"> <img src="<?php BASE_URL;?>views/admin/images/users/avatar-2.jpg" alt="user" class="img-circle" /> </div>
                                                <div class="sl-right">
                                                    <div> <a href="#" class="link">Michael Qin</a> <span class="sl-date">5 minutes ago</span>
                                                        <div class="m-t-20 row">
                                                            <div class="col-md-3 col-xs-12"><img src="<?php BASE_URL;?>views/admin/images/big/img1.jpg" alt="user" class="img-responsive radius" /></div>
                                                            <div class="col-md-9 col-xs-12">
                                                                <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. </p> <a href="#" class="btn btn-success"> Design weblayout</a></div>
                                                        </div>
                                                        <div class="like-comm m-t-20"> <a href="javascript:void(0)" class="link m-r-10">2 comment</a> <a href="javascript:void(0)" class="link m-r-10"><i class="fa fa-heart text-danger"></i> 5 Love</a> </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="sl-item">
                                                <div class="sl-left"> <img src="<?php BASE_URL;?>views/admin/images/users/avatar-3.jpg" alt="user" class="img-circle" /> </div>
                                                <div class="sl-right">
                                                    <div><a href="#" class="link">Michael Qin</a> <span class="sl-date">5 minutes ago</span>
                                                        <p class="m-t-10"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum.
                                                            Praesent mauris. Fusce nec tellus sed augue semper </p>
                                                    </div>
                                                    <div class="like-comm m-t-20"> <a href="javascript:void(0)" class="link m-r-10">2 comment</a> <a href="javascript:void(0)" class="link m-r-10"><i class="fa fa-heart text-danger"></i> 5 Love</a> </div>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="sl-item">
                                                <div class="sl-left"> <img src="<?php BASE_URL;?>views/admin/images/users/avatar-4.jpg" alt="user" class="img-circle" /> </div>
                                                <div class="sl-right">
                                                    <div><a href="#" class="link">Michael Qin</a> <span class="sl-date">5 minutes ago</span>
                                                        <blockquote class="m-t-10">
                                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
                                                        </blockquote>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--second tab-->
                                <div class="tab-pane" id="profile" role="tabpanel">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-3 col-xs-6 b-r"> <strong>Full Name</strong>
                                                <br>
                                                <p class="text-muted"><?php echo $this->usrs[0]->name;?></p>
                                            </div>
                                            <div class="col-md-3 col-xs-6 b-r"> <strong>Mobile</strong>
                                                <br>
                                                <p class="text-muted"><?php echo $this->usrs[0]->phone;?></p>
                                            </div>
                                            <div class="col-md-3 col-xs-6 b-r"> <strong>Email</strong>
                                                <br>
                                                <p class="text-muted"><?php echo $this->usrs[0]->email;?></p>
                                            </div>
                                            <div class="col-md-3 col-xs-6"> <strong>Username</strong>
                                                <br>
                                                <p class="text-muted"><?php echo $this->usrs[0]->username;?></p>
                                            </div>
                                        </div>
                                        <hr>
                                        <p class="m-t-30"><?php ($this->usrs[0]->description !="") ? print_r(substr($this->usrs[0]->description, 0)):print_r("Lorem ipsum dolor sit amet, consectetur adipisicing elit et cupiditate deleniti.");?>
                                        </p>
                                        <h4 class="font-medium m-t-30">Skill Set</h4>
                                        <hr>
                                        <h5 class="m-t-30">Wordpress <span class="pull-right">80%</span></h5>
                                        <div class="progress">
                                            <div class="progress-bar bg-success" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width:80%; height:6px;"> <span class="sr-only">50% Complete</span> </div>
                                        </div>
                                        <h5 class="m-t-30">HTML 5 <span class="pull-right">90%</span></h5>
                                        <div class="progress">
                                            <div class="progress-bar bg-info" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width:90%; height:6px;"> <span class="sr-only">50% Complete</span> </div>
                                        </div>
                                        <h5 class="m-t-30">jQuery <span class="pull-right">50%</span></h5>
                                        <div class="progress">
                                            <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:50%; height:6px;"> <span class="sr-only">50% Complete</span> </div>
                                        </div>
                                        <h5 class="m-t-30">Photoshop <span class="pull-right">70%</span></h5>
                                        <div class="progress">
                                            <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:70%; height:6px;"> <span class="sr-only">50% Complete</span> </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="settings" role="tabpanel">
                                    <div class="card-body">
                                        
                                        <form class="form-horizontal form-material" action="<?php echo BASE_URL;?>register.php" method="post" enctype="multipart/form-data">
                                            <div class="form-group">
                                                <label class="col-md-12">Full Name</label>
                                                <div class="col-md-12">
                                                    <input type="text" id="name" name="name" placeholder="Enter your Name" class="form-control form-control-line check_field" value="<?php if($this->usrs[0]->name!="")echo $this->usrs[0]->name;?>">
                                                    <span id="req_name" class="text-danger error-text"></span>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="example-email" class="col-md-12">Email</label>
                                                <div class="col-md-12">
                                                    <input type="email" name="email" placeholder="Enter email"class="form-control form-control-line check_field" id="email" value="<?php if($this->usrs[0]->email!="")echo $this->usrs[0]->email;?>">

                                                    <span id="req_email" class="text-danger error-text <?php if(isset($_SESSION["exist_email"])) echo "errorblock";?> " ><?php isset($_SESSION["update_email_exist"]) ? print_r($_SESSION["update_email_exist"]):""; unset($_SESSION["update_email_exist"]);?></span>

                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="example-email" class="col-md-12">Username</label>
                                                <div class="col-md-12">
                                                     <input type="text" id="username" name="username" placeholder="Enter your User-name" class="form-control form-control-line check_field" value="<?php if($this->usrs[0]->username!="")echo $this->usrs[0]->username;?>">
                                                     <span id="req_username" class="text-danger error-text <?php if(isset($_SESSION["exist_account"])) echo "errorblock";?>"><?php isset($_SESSION["exist_account"]) ? print_r($_SESSION["exist_account"]): ""; unset($_SESSION["exist_account"]);?></span>

                                                </div>
                                            </div>

                                             <div class="form-group">
                                                <label class="col-md-12">Phone No</label>
                                                <div class="col-md-12">
                                                    <input type="text" id="phone" name="phone" placeholder="Enter your Ph. no." class="form-control form-control-line check_field" value="<?php if($this->usrs[0]->phone!="")echo $this->usrs[0]->phone;?>">
                                                    <span id="req_phone" class="text-danger error-text"></span>

                                                </div>
                                            </div>

                                                <div class="form-group profile-sect">
                                                <label class="col-md-12">Change Your Profile Image</label>
                                                <div class="col-md-12">

                                                    <div class="col-md-8 file-input">
                                                    <input type="file"  class="form-control form-control-line" id="profileimage" name="profileimage"  accept="image/jpg,image/png,image/jpeg" onchange="readURL(this)">

                                                    <span id="req_profileimage" class="text-danger error-text"></span>
                                                    </div>

                                                    <div class="col-md-4 display">
                                                        <?php if($this->usrs[0]->profile_image!=""){?>
                                                            <img src="uploads/images/<?php echo $this->usrs[0]->profile_image;?>" class="preview">
                                                        <?php } else

                                                        {
                                                        ?> 
                                                         <img src="" class="preview">
                                                         <?php }?>
                                                    </div>

                                                </div>
                                               
                                            </div>

                                           
                                            <div class="form-group">
                                                <label class="col-md-12">About</label>
                                                <div class="col-md-12">
                                                    <textarea rows="5" class="form-control form-control-line" id="about_me" name="about_me" rows="3"><?php if($this->usrs[0]->description!="")echo $this->usrs[0]->description;?></textarea>
                                                </div>
                                            </div>
                                            
                                            <input type="hidden" name="user_id" value="<?php echo $this->usrs[0]->id;?>" id="user_id">

                                            <div class="form-group">
                                                <div class="col-sm-12">
                                                    <input type="submit"  class="btn btn-success" name="update" value="Update" id="update_profile">
                                                </div>
                                            </div>

                                            
                                        </form>

                                            <?php if(isset($_SESSION['sucess_update'])) {?>
                                            <div class="form-group success-box">
                                                <div class="col-sm-12 ">
                                                    <p> <?php echo $_SESSION['sucess_update']; unset($_SESSION['sucess_update']);?></p>
                                                </div>
                                            </div>
                                            <?php }?>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
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
      <?php include("mainscript.php");?>
      
      <script type="text/javascript">
        var active="<?php echo $_SESSION['settings_dash']?>";

        $(document).ready(function(){
            if(active!="")
            {
                if($("#home").hasClass("active") && $("#timeline_nav").hasClass("active"))
                {
                    $("#home").removeClass("active");
                    $("#timeline_nav").removeClass("active");
                    $("#settings").addClass("active");
                    $("#setting_nav").addClass("active");
                }
            }
        });

      </script>
        <?php  if(!isset($_SESSION)) 
                    { 
                    session_start(); 
                    } unset($_SESSION['settings_dash']);?>
</body>

</html>