<!DOCTYPE html>
<html lang="zxx">
<head>
    <!-- meta tag -->
    <meta charset="utf-8">
    <title>Educate HTML Template</title>
    <meta name="description" content="">
    <!-- responsive tag -->
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>
<body class="defult-home">

<!--Preloader area start here-->
<div id="loader" class="loader orange-color">
    <div class="loader-container">
        <div class='loader-icon'>
            <img src="<?php echo get_template_directory_uri();?>/assets/images/pre-logo1.png" alt="">
        </div>
    </div>
</div>
<!--Preloader area End here-->
<?php if (is_home()): ?>
<!-- Main content Start -->
<div class="main-content">
    <!--Full width header Start-->
    <div class="full-width-header home8-style4 main-home">
        <!--Header Start-->
        <?php else: ?>
        <div class="full-width-header header-style1 home8-style4">
        <div class="main-content">
        <?php endif; ?>
        <header id="rs-header" class="rs-header">
<?php if (!is_home()): ?>
    <!-- Topbar Area Start -->
    <div class="topbar-area home8-topbar">
        <div class="container">
            <div class="row y-middle">
                <div class="col-md-7">
                    <ul class="topbar-contact">
                        <li>
                            <i class="flaticon-email"></i>
                            <a href="mailto:support@rstheme.com">support@rstheme.com</a>
                        </li>
                        <li>
                            <i class="flaticon-location"></i>
                            374 William S Canning Blvd, MA 2721, USA
                        </li>
                    </ul>
                </div>
                <div class="col-md-5 text-end">
                    <ul class="topbar-right">
                        <li class="login-register">
                            <i class="fa fa-sign-in"></i>
                            <a href="login.html">Login</a>/<a href="register.html">Register</a>
                        </li>
                        <li class="btn-part">
                            <a class="apply-btn" href="#">Apply Now</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar Area End -->
<?php endif; ?>
	        <?php get_template_part("template-parts/common/navigation") ?>
        </header>
        <!--Header End-->
    </div>
    <!--Full width header End-->

