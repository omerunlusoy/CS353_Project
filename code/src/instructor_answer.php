<?php
session_start();
include("connect.php");

if(isset($_POST['post_button'])){

    $answer = $_POST['Answer'];
    $check = $_POST['post_button'];
    $QnA_ID_S = $_SESSION['QnA_ID_S'];
    $CID = $_SESSION['CID'];
    $IID = $_SESSION['IID'];


    $sql = "select *
               from QnA_Entry_Instructor
               where QnA_ID = '$check'";
    $result1 = mysqli_query($con, $sql);

    if($result1)
    {
        $row1= mysqli_fetch_array($result1);
        if($result1->num_rows != 0)
        {
            $sql_update = "UPDATE QnA_Entry_Instructor SET text = '$answer' WHERE QnA_ID = '$check';";
            mysqli_query($con, $sql_update );
        }
        else
        {
            $sql_insert = "insert into QnA_Entry_Instructor (QnA_ID_S,IID, CID, text, date) 
                            values ('$QnA_ID_S', '$IID','$CID','$answer', CURDATE())";
            $result = mysqli_query($con, $sql_insert );
            if($result)
            {
                echo "<script type='text/javascript'>alert('Answer Posted!');</script>";
            }
            else
            {
                echo "<script type='text/javascript'>alert('Database Error!');</script>";
            }


        }
    }
    else
    {
        echo "<script type='text/javascript'>alert('Database Error3!');</script>";
    }

}

if(isset($_POST['go_back_button'])){

    header("Location: instructor_forum.php");
}

?>

<!DOCTYPE html>
<html style="font-size: 16px;">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="Learn Everyday, Join online courses today, Train Your Brain Today!, Learn to enjoyevery minute of your life., Online Learning, Innovations in Online Learning, Education and Learning, 01, 02, 03, 04, Contact Us">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>Answer-Instructor</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
    <link rel="stylesheet" href="Answer-Instructor.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 3.13.2, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">



    <script type="application/ld+json">{
            "@context": "http://schema.org",
            "@type": "Organization",
            "name": "",
            "url": "index.html",
            "logo": "images/SapientiaLogo.PNG"
        }</script>
    <meta property="og:title" content="Answer-Instructor">
    <meta property="og:type" content="website">
    <meta name="theme-color" content="#478ac9">
    <link rel="canonical" href="index.html">
    <meta property="og:url" content="index.html">
</head>
<body class="u-body"><header class="u-clearfix u-header u-header" id="sec-85c8"><div class="u-clearfix u-sheet u-sheet-1">
        <a href="https://nicepage.com" class="u-image u-logo u-image-1" data-image-width="521" data-image-height="202">
            <img src="images/SapientiaLogo.PNG" class="u-logo-image u-logo-image-1" data-image-width="196.129">
        </a>
    </div></header>
<section class="u-clearfix u-section-1" id="sec-ee35">
    <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <a href="instructor_account.php" class="u-active-none u-border-2 u-border-palette-1-base u-btn u-btn-rectangle u-button-style u-hover-none u-none u-text-body-color u-btn-1">Account</a>
        <a href="instructor_forum.php" class="u-active-none u-border-2 u-border-palette-1-base u-btn u-btn-rectangle u-button-style u-hover-none u-none u-text-body-color u-btn-2">Forum</a>
        <a href="instructor_main_courses.php" class="u-active-none u-border-2 u-border-palette-1-base u-btn u-btn-rectangle u-button-style u-hover-none u-none u-text-body-color u-btn-3">My Courses</a>
        <a href="instructor_announcements.php" class="u-active-none u-border-2 u-border-palette-1-base u-btn u-btn-rectangle u-button-style u-hover-none u-none u-text-body-color u-btn-4">My Announcements</a>
        <a href="logout.php" class="u-active-none u-border-2 u-border-palette-1-base u-btn u-btn-rectangle u-button-style u-hover-none u-none u-text-body-color u-btn-5">Logout</a>
    </div>
</section>
<section class="u-align-center u-border-15 u-border-palette-2-light-2 u-clearfix u-section-2" id="sec-2a64">
    <div class="u-clearfix u-sheet u-sheet-1">
        <h2 class="u-text u-text-1"><b>&nbsp;Answer the Question</b>
        </h2>
        <?php


        $QnA_ID_S = $_SESSION['QnA_ID_S'];

        $sql = "select QAEI.QnA_ID, QAEI.text as answer, S.text as question
                from QnA_Entry_Student S join QnA_Entry_Instructor QAEI on S.QnA_ID_S = QAEI.QnA_ID_S
                where S.QnA_ID_S = '$QnA_ID_S' ";

        $result = mysqli_query($con, $sql);

        if ($result) {
            $row = mysqli_fetch_array($result);
            $question = $row['question'];
            $answer = $row['answer'];
            $QnA_ID = $row['QnA_ID'];
        }
        else
        {
            echo "<script type='text/javascript'>alert('Database Error!');</script>";
        }

        ?>
        <h2 class="u-text u-text-2"> <?php echo $question; ?></h2>
        <div class="u-form u-form-1">
            <form action="#" method="POST" >
                <div class="u-form-group u-form-message">
                    <label for="message-6797" class="u-label">Write Your Answer Below</label>
                    <textarea placeholder="Write Your Answer Here" rows="4" cols="50" id="message-6797" name="Answer" class="u-border-8 u-border-palette-2-light-1 u-input u-input-rectangle u-white u-input-1" required=""><?php echo $answer; ?></textarea>
                </div>
                <div class="u-align-right u-form-group u-form-submit">
                    <form action="#" METHOD="POST">
                        <button type="submit" name = "post_button" id ="btn" class="u-border-2 u-border-palette-2-light-2 u-btn u-button-style u-hover-palette-2-light-2 u-none u-text-black u-text-hover-white u-btn-4" value=<?php echo $QnA_ID; ?>>Post Answer</button>
                    </form>
                </div>
            </form>
        </div>
        <div class="u-form u-form-2">
            <form action="#" method="POST" >
                <div class="u-align-center u-form-group u-form-submit">
                    <a href="instructor_forum.php" class="u-btn u-btn-round u-btn-submit u-button-style u-palette-2-light-2 u-radius-24 u-btn-2">Go back<br>
                    </a>
                    <input type="submit" name ="go_back_button" value="submit" class="u-form-control-hidden">
                </div>
            </form>
        </div>
    </div>
</section>
<section class="u-align-center u-clearfix u-section-3" id="sec-f5aa">
    <div class="u-clearfix u-sheet u-sheet-1"></div>
</section>


<footer class="u-align-center u-clearfix u-footer u-grey-80 u-footer" id="sec-266b"><div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <p class="u-small-text u-text u-text-variant u-text-1">Wisdom is life...</p>
    </div></footer>
</body>
</html>