<!--
dark color : #10283F;
gold color : #DAB475;
-->
<!DOCTYPE html>
<html lang="en">

<head>

    <style>
        * {
            margin: 0;
            padding: 0;
        }


        /** start of other stylings **/






        /** end of other stylings **/





        /** start of  smaller screen*/
        @media only screen and (max-width: 690px) {

            .desktop-view-container {
                display: none;
            }




        }

        /** end of smaller screen **/



        /** start of bigger screen*/
        @media only screen and (min-width: 690px) {

            .mobile-view-container {
                display: none;
            }


        }



        /** end of bigger screen **/
    </style>
    <meta charset="utf-8">
    <title>AfrikMingle</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicons -->
    <link href="img/favicon.png" rel="icon">
    <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,700|Open+Sans:300,300i,400,400i,700,700i" rel="stylesheet">

    <!-- Bootstrap CSS File -->
    <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Libraries CSS Files -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="lib/magnific-popup/magnific-popup.css" rel="stylesheet">

    <!-- Main Stylesheet File -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/new-style.css" rel="stylesheet">


</head>

<body>


    <?php include 'header.php'; ?>



    <!--=== user profile page wrapper start ===--->
    <div class="userprofile-page-wrapper">


        <!-- main start --->
        <div class="main">


            <!-- left start --->
            <div class="left">
                <div class="main-photo-container">
                    <img src="img/team/team-2.jpg" alt="photo" class="main-photo">
                    <a href="messages.php"><button class="chat-btn"><i class="fa fa-comment"></i></button></a>
                </div>
            </div>
            <!-- left end --->

            <!-- right start --->
            <div class="right">

                <div class="name-container">
                    <span class="name">Marlene, 21</span>
                    <span class="location"> St. Collins street</span>
                </div>

                <div class="about-container">
                    <div class="title">About me</div>
                    I am a cute an lovable person.. chat me up and i'll reply ASAP
                </div>


                <div class="interests-container">
                    <div class="title">interests</div>
                    <button class="interests-btn">Fitness</button>
                    <button class="interests-btn">Beauty</button>
                    <button class="interests-btn">Sports</button>
                    <button class="interests-btn">Music</button>
                    <button class="interests-btn">Dance</button>
                </div>

                <div class="gallery-photo-container-title">Marlene's photos</div>
                <div class="gallery-photo-container">
                    <img src="img/team/team-2.jpg" class="gallery-photo" alt="photo">
                    <img src="img/team/team-2.jpg" class="gallery-photo" alt="photo">
                    <img src="img/team/team-2.jpg" class="gallery-photo" alt="photo">
                    <img src="img/team/team-2.jpg" class="gallery-photo" alt="photo">
                </div>

            </div>
            <!-- right end --->



        </div>
        <!-- main end -->

    </div>
    <!--=== user profile page wrapper end ===--->



    <!-- JavaScript Libraries -->
    <script src="lib/jquery/jquery.min.js"></script>
    <script src="lib/jquery/jquery-migrate.min.js"></script>
    <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/superfish/hoverIntent.js"></script>
    <script src="lib/superfish/superfish.min.js"></script>
    <script src="lib/magnific-popup/magnific-popup.min.js"></script>



    <!-- Template Main Javascript File -->
    <script src="js/main.js"></script>



</body>

</html>