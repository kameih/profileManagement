<?php include('header.php');
session_start();

?>
<!-- <img src="uploads/images/a154ea36ea99ab374ff2519f8ad6c8e7">
 -->
 <style type="text/css">

.form-group.profile {
    /* width: 100%!important; */
    display: flex;
    margin-left: -14px;
    height: 105px;
}

.col-lg-3.display {
    border: 1px solid;
    color: #caaaaa;
    height: 133px;
    width: 179px;
    margin-left: 87px;
    text-align: center;
    overflow: hidden;
}

 </style>

<div class="row form-div">
    <div class="col-lg-7">
<div class="form-group">

 <form role="form" enctype="multipart/form-data" method="post" action="<?php echo BASE_URL;?>register.php" id="form_registration">

        <div class="form-group">
            <label for="name">Full Name</label>
            <input type="text" class="form-control check_field" id="name" name="name" placeholder="Enter your Name" value="<?php isset($_SESSION['userinfo']['name'])? print_r($_SESSION['userinfo']['name']):"";?>">
            <span id="req_name" class="text-danger error-text"></span>
        </div>
        <div class="form-group">
            <label for="email">Email address</label>
            <input type="email" class="form-control check_field" id="email" name="email" placeholder="Enter email" value="<?php isset($_SESSION['userinfo']['email'])? print_r($_SESSION['userinfo']['email']):"";?>">
            <span id="req_email" class="text-danger error-text <?php if(isset($_SESSION["exist_email"])) echo "errorblock";?> " ><?php isset($_SESSION["exist_email"]) ? print_r($_SESSION["exist_email"]):""; unset($_SESSION["exist_email"]);?></span>
        </div>
        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" class="form-control check_field" id="username" name="username" placeholder="Enter your User-name" value="<?php isset($_SESSION['userinfo']['infousername'])? print_r($_SESSION['userinfo']['infousername']):"";?>">
            <span id="req_username" class="text-danger error-text <?php if(isset($_SESSION["exist_account"])) echo "errorblock";?>"><?php isset($_SESSION["exist_account"]) ? print_r($_SESSION["exist_account"]): ""; unset($_SESSION["exist_account"]);?></span>
        </div>

        <div class="form-group">
            <label for="phone">Phone</label>
            <input type="text" class="form-control check_field" id="phone" name="phone" placeholder="Enter your Ph. no." value="<?php isset($_SESSION['userinfo']['phone'])? print_r($_SESSION['userinfo']['phone']):"";?>">
            <span id="req_phone" class="text-danger error-text"></span>
        </div>

        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control check_field" id="password" name="password" placeholder="Password">
            <span id="req_password" class="text-danger error-text"></span>
        </div>
        <div class="form-group">
            <label for="repassword">Re-Type Password</label>
            <input type="password" class="form-control check_field" id="repassword" name="repassword" placeholder="Password">
            <span id="req_repassword" class="text-danger error-text"></span>
        </div>

        <div class="form-group profile">
            <div class="col-lg-9">
                <label for="profileimage">Profile Image</label>
                <input type="file" class="form-control check_field" id="profileimage" name="profileimage"  accept="image/jpg,image/png,image/jpeg" onchange="readURL(this)">
                <span id="req_profileimage" class="text-danger error-text"></span>
            </div>

                <div class="col-lg-3 display">
                 <img src="" class="preview"> 
                </div>
        </div>

      
        <div class="form-group">
            <label for="about_me">About Me</label>
            <textarea class="form-control" id="about_me" name="about_me" rows="3"><?php isset($_SESSION['userinfo']['about'])? print_r($_SESSION['userinfo']['about']):"";?></textarea>

        </div>


        <input name="register" type="submit" class="btn btn-primary" value="Register Me"  id="form_register">

    </form>

    </div></div>
</div>
<?php unset($_SESSION['userinfo']);?>
<script type="text/javascript">
// window.onbeforeunload = function () {
//     // if (!confirmReload) {
//         return "If you reload this page, your previous action will be repeated";
//     // } 
//     // else
//     // {
//     //     return false;
//     // }
// }

// if(confirmReload)
// {
//     $(window).bind("beforeunload",function(event) {
//    return "You have unsaved changes";
   
// });
// }
// else
// {
//     $(window).unbind('beforeunload');
// }
// $(window).bind("beforeunload",function(event) {
//     // if(confirmReload) return "You have unsaved changes";
//     // else
//     // {
//          window.onbeforeunload = null;
//     //}
// });

</script>
