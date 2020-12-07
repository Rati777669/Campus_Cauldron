<?php
@session_start();
$mykey1 = $_REQUEST['key1'];

if (isset($_POST['answer'])) {
    $answer = $_POST['answer'];

    if (!isset($_SESSION['email'])) {
        echo "<script type='text/javascript'>alert('You have to sign-in before answering a question!'); window.location.href= 'sign-in.php';</script>";
    } else {
        if (empty($answer)) {
            echo "<script type='text/javascript'>alert('Write an Answer!');</script>";
        } else {
            include 'conn.php';
            $sql1 = "select * from users WHERE email='" . $_SESSION['email'] . "'";
            $rs_result1 = mysqli_query($con, $sql1);
            $roww = mysqli_fetch_assoc($rs_result1);
            $ans_by = $roww['username'];
            $ins = mysqli_query($con, "UPDATE q_and_a SET ques_answered=1,answer='$answer',ans_by='$ans_by'  where id=$mykey1");
            if ($ins > 0) {
                echo "<script type='text/javascript'>alert('Your answer has been successfully submitted.'); window.location.href = 'suggested_questions.php';</script>";
            } else {
                echo "An error in database query";
            }
        }
    }
}
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Welcome to Campus Cauldron!</title>
    <!-- SPACE FOR FONTS -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Bree+Serif&family=Montserrat:wght@800&family=Raleway:ital,wght@1,300&family=Roboto+Slab:wght@600&family=Ubuntu:ital,wght@1,300&display=swap" rel="stylesheet">
    <!-- FONT AWESOME LINKS -->
    <script src="https://kit.fontawesome.com/959552e028.js" crossorigin="anonymous"></script>

    <!-- STYLESHEETS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/styles.css">
</head>

<!-- FOR EVENTS AND FESTS -->
<style>
    .card .form-container button {
        background-color: #31326f;
        color: white;
        border: none;
        border-radius: 4px;
    }

    .card .form-container button:hover {
        background-color: #414292;
    }
</style>


<body style="background-image: url('images/img11.jpg');
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;">
    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-dark my-bg">
        <a class="navbar-brand" href="#">Campus Cauldron</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <?php
            include 'include/navbar.php';
            ?>

        </div>
    </nav>
    <br><br>
    <center>
        <section class="answer_it" style="width: 30rem;">
            <div class="card">
                <div class="card-body">
                    <div class="form-container">
                        <div class="row">

                            <div class="col-lg-12 white-background">
                                <h2 class="sign-up-head">
                                    <?php
                                    include 'conn.php';
                                    $sql = "select * from q_and_a where id=$mykey1";
                                    $rs_result = mysqli_query($con, $sql);
                                    $row = mysqli_fetch_assoc($rs_result);
                                    echo $row["question"];
                                    ?>
                                </h2>
                                <form action="#" method="POST">
                                    <div style="text-align:left" class="form-group">
                                        <label><b>Write Answer</b></label>
                                        <textarea name="answer" cols="52" rows="10" placeholder="Write your answer here" id="answer"></textarea>
                                    </div>
                                    <button type="submit" name="submit" class="btn btn-primary btn-block">SUBMIT</button>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </section>
    </center>
    <!-- FOOTER EXPERIMENT -->
    <br><br>
    <!-- Footer -->
    <section id="footer">
        <footer class="page-footer font-small mdb-color pt-4">

            <!-- Footer Links -->
            <div class="container text-center text-md-left">

                <!-- Footer links -->
                <div class="row text-center text-md-left mt-3 pb-3">

                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                        <h6 class="text-uppercase mb-4 font-weight-bold">Campus Cauldron</h6>
                        <p>We hope you enjoyed your visit to our homepage!</p>
                    </div>
                    <!-- Grid column -->

                    <hr class="w-100 clearfix d-md-none">

                    <!-- Grid column -->
                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
                        <h6 class="text-uppercase mb-4 font-weight-bold">Links</h6>
                        <p>
                            <a class="footer-link" href="#after-intro">Notice</a>
                        </p>
                        <p>
                            <a class="footer-link" href="#after-questions">Gallery</a>
                        </p>
                        <p>
                            <a class="footer-link" href="#after-gallery">Clubs and Cells</a>
                        </p>
                        <p>
                            <a class="footer-link" href="#after-clubs">Events and Fests</a>
                        </p>
                    </div>
                    <!-- Grid column -->

                    <hr class="w-100 clearfix d-md-none">

                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
                        <h6 class="text-uppercase mb-4 font-weight-bold">Contact us</h6>
                        <p>
                            <a class="footer-link" href="#!"><i class="fab fa-facebook-square mr-3"></i>Facebook</a>
                        </p>
                        <p>
                            <a class="footer-link" href="#!"><i class="fab fa-linkedin mr-3"></i>LinkedIn</a>
                        </p>
                        <p>
                            <a class="footer-link" href="#!"><i class="fab fa-twitter-square mr-3"></i>Twitter</a>
                        </p>
                        <p>
                            <a class="footer-link" href="#!"><i class="fas fa-envelope mr-3"></i>E-mail</a>
                        </p>
                    </div>

                    <!-- Grid column -->
                    <hr class="w-100 clearfix d-md-none">

                    <!-- Grid column -->
                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
                        <h6 class="text-uppercase mb-4 font-weight-bold">Legal</h6>
                        <p>
                            <a class="footer-link" href="#!">Privacy Policy</a>
                        </p>
                        <p>
                            <a class="footer-link" href="#!">Cookie Policy</a>
                        </p>
                        <p>
                            <a class="footer-link" href="#!">Terms Of Us</a>
                        </p>
                    </div>
                    <!-- Grid column -->

                </div>
                <!-- Footer links -->

                <hr>


                <!-- Grid row -->

            </div>
            <!-- Footer Links -->

        </footer>
        <!-- Footer -->
    </section>

    <!-- SCRIPTS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>