<?php

include("connect.php");
session_start();

/*
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $given_cid = $_POST['given_cid'];
    $student_id = $_SESSION['login_pass'];

    // cancel the application
    $delete = "delete from apply where sid ='$student_id' and cid='$given_cid'";
    $result = mysqli_query($con,$delete);

    // increase quota
    $update_quota = "update company set quota = (quota + 1) where cid='$given_cid'";
    $result2 = mysqli_query($con,$update_quota);

    if (!$result && !$result2) {
        echo "<script type='text/javascript'>alert('Cancellation FAILED!');</script>";
        exit();
    }else{
        echo "<script type='text/javascript'>alert('Successful cancellation!');</script>";
    }
}*/
?>

<!DOCTYPE html>
<html style="font-size: 16px;">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="Learn Everyday, Join online courses today, Train Your Brain Today!, Learn to enjoyevery minute of your life., Online Learning, Innovations in Online Learning, Education and Learning, 01, 02, 03, 04, Contact Us">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>Sign Up</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
    <link rel="stylesheet" href="Sign-Up.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 3.13.2, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i|Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">


    <script type="application/ld+json">{
            "@context": "http://schema.org",
            "@type": "Organization",
            "name": "",
            "url": "index.html",
            "logo": "#"
        }</script>
    <meta property="og:title" content="Sign Up">
    <meta property="og:type" content="website">
    <meta name="theme-color" content="#478ac9">
    <link rel="canonical" href="index.html">
    <meta property="og:url" content="index.html">
</head>
<body class="u-body"><header class="u-clearfix u-header u-header" id="sec-85c8"><div class="u-clearfix u-sheet u-sheet-1">
        <a href="https://nicepage.com" class="u-image u-logo u-image-1">
            <img src="#" class="u-logo-image u-logo-image-1">
        </a>
        <a href="https://nicepage.com/k/radio-website-templates" class="u-border-1 u-border-active-palette-2-base u-border-hover-palette-1-base u-btn u-button-style u-none u-text-body-color u-btn-1">Home</a>
        <a href="https://nicepage.com/k/radio-website-templates" class="u-border-1 u-border-active-palette-2-base u-border-hover-palette-1-base u-btn u-button-style u-none u-text-body-color u-btn-2">Login</a>
    </div></header>
<section class="u-clearfix u-image u-valign-top u-section-1" id="sec-5c0b">
    <div class="u-clearfix u-layout-wrap u-layout-wrap-1">
        <div class="u-gutter-0 u-layout">
            <div class="u-layout-row">
                <div class="u-align-left u-container-style u-layout-cell u-size-29 u-layout-cell-1">
                    <div class="u-container-layout u-container-layout-1">
                        <h5 class="u-custom-font u-font-pt-sans u-text u-text-1">online learning</h5>
                        <h1 class="u-text u-text-2">Sapientia</h1>
                        <h1 class="u-text u-text-3">
                            <span style="font-size: 2.5rem;">Sign Up for Wisdom</span>
                        </h1>
                        <div class="u-form u-form-1">
                            <form action="#" method="POST" class="u-clearfix u-form-spacing-10 u-form-vertical u-inner-form" style="padding: 10px" source="custom" name="form-1">
                                <div class="u-form-group u-form-name">
                                    <label for="name-4921" class="u-form-control-hidden u-label">Name</label>
                                    <input type="text" placeholder="Enter your Name" id="name-4921" name="name" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="">
                                </div>
                                <div class="u-form-email u-form-group">
                                    <label for="email-4921" class="u-form-control-hidden u-label">Email</label>
                                    <input type="email" placeholder="Enter a valid email address" id="email-4921" name="email" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="">
                                </div>
                                <div class="u-form-group u-form-group-3">
                                    <label for="text-2187" class="u-form-control-hidden u-label"></label>
                                    <input type="text" placeholder="Enter a password" id="text-2187" name="password" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white">
                                </div>
                                <div class="u-align-left u-form-group u-form-submit">
                                    <a href="#" class="u-btn u-btn-submit u-button-style">Sign Up<br>
                                    </a>
                                    <input type="submit" value="submit" class="u-form-control-hidden">
                                </div>
                                <div class="u-form-send-message u-form-send-success"> Thank you! Your message has been sent. </div>
                                <div class="u-form-send-error u-form-send-message"> Unable to send your message. Please fix errors then try again. </div>
                                <input type="hidden" value="" name="recaptchaResponse">
                            </form>
                        </div>
                    </div>
                </div>
                <div class="u-align-right u-container-style u-image u-layout-cell u-size-31 u-image-1">
                    <div class="u-container-layout u-valign-bottom u-container-layout-2"></div>
                </div>
            </div>
        </div>
    </div>
</section>


<footer class="u-align-center u-clearfix u-footer u-grey-80 u-footer" id="sec-266b"><div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <p class="u-small-text u-text u-text-variant u-text-1">Wisdom is life...</p>
    </div></footer>
<section class="u-backlink u-clearfix u-grey-80">
    <a class="u-link" href="https://nicepage.com/html5-template" target="_blank">
        <span>HTML5 Templates</span>
    </a>
    <p class="u-text">
        <span>created with</span>
    </p>
    <a class="u-link" href="https://nicepage.com/html-website-builder" target="_blank">
        <span>HTML Builder</span>
    </a>.
</section>
</body>
</html>