
<?php include('header.php');
session_start();
?>

<div class="row form-div">
    <div class="col-lg-7">
<div class="form-group">

<form role="form" enctype="multipart/form-data" method="post" action="<?php BASE_URL;?>admin.php">

        <div class="form-group">
            <label for="username">Enter Your Email</label>

            <input type="email" class="form-control check_field" id="username" name="username" placeholder="Enter your Email" value="<?php isset($_SESSION['email']) ? print_r($_SESSION['email']):"";?>">
            <span id="req_email" class="text-danger error-text"></span>
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control check_field" id="password" name="password" placeholder="Password">
        </div>
        <div class="form-group">
            <label for="repassword">Re-Type Password</label>
            <input type="password" class="form-control check_field" id="repassword" name="repassword" placeholder="Password">
            <span id="req_repassword" class="text-danger error-text"></span>
        </div>
       <?php 

       //session_start();

       //print_r($_SESSION);

       if(isset($_SESSION["not_exist_account"])) {
            //echo $_SESSION["exist_account"];?>

        <div class="form-group exist">
            <span id="exit" class="text-danger error-text" style="display:block"><?php echo $_SESSION["not_exist_account"]; unset($_SESSION["not_exist_account"]);?></span>
        </div>
        <?php }

         if(isset($_SESSION["session_exp"])) {
        ?>

        <div class="form-group exist">
            <span id="exit" class="text-danger error-text" style="display:block"><?php echo $_SESSION["session_exp"]; unset($_SESSION["session_exp"]);?></span>
        </div>
        <?php }?>

        <input name="login" type="submit" class="btn btn-primary" value="Login" id="login_form">

    </form>

</div></div>
</div>
