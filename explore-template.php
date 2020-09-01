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




            .box-container {
                width: 80%;
                height: 300px;
                margin: auto;
                position: relative;
                background-color: green;
                border-radius: 10px;
            }

            .box {
                width: 100%;
                height: 300px;
                background-color: white;
                margin: auto;
                position: absolute;
                display: flex;
                justify-content: center;
                align-items: center;
                transition: 1s ease-in-out;
                border-radius: 10px;
                z-index: 100;

            }

            .box span {
                font-size: 43px;
                font-weight: bold;
            }

            .box .img {
                position: absolute;
                top: 0px;
                left: 0px;
                width: 100%;
                height: 100%;
                border-radius: 10px;
                z-index: 100;
            }


            .box .inner-box {
                position: absolute;
                top: 0px;
                left: 0px;
                width: 100%;
                height: 100%;
                background-color: rgb(218, 180, 117, 0.1);
                border: 1px solid #DAB475;
                z-index: 200;
                display: flex;
                justify-content: center;
                align-items: center;
                border-radius: 10px;
                display: none;
            }

            .box .inner-box i {
                font-size: 50px;
                /* color: #DAB475; */
                color: crimson;
            }

            .btns-container {
                width: 100%;
                display: flex;
                justify-content: center;
                margin: 20px;
            }

            .btns-container .no {
                width: 50px;
                height: 50px;
                border-radius: 50px;
                border: none;
                color: white;
                background-color: #49505766;
                box-shadow: inset -1px -1px 2px rgba(16, 40 61, 0.3);
                font-size: 23px;
                position: relative;
                right: 40px;


            }

            .btns-container .yes {
                width: 50px;
                height: 50px;
                border-radius: 50px;
                border: none;
                color: white;
                background-color: #DAB475;
                font-size: 23px;

            }

            button:hover {
                cursor: pointer;
            }

            .invincible {
                display: none !important;
            }

            .move-right {
                animation: moveright 2s ease;
            }

            @keyframes moveright {
                from {
                    right: 0px;
                    top: 0px;
                    transform: rotate(25deg);
                }

                to {
                    right: -1000px;
                    top: 100px;
                    transform: rotate(180deg);
                }
            }






            .move-left {
                animation: moverleft 2s ease;
            }

            @keyframes moverleft {
                from {
                    left: 0px;
                    top: 0px;
                    transform: rotate(-25deg);
                }

                to {
                    left: -1000px;
                    top: 100px;
                    transform: rotate(-180deg);
                }
            }





        }

        /** end of smaller screen **/



        /** start of bigger screen*/
        @media only screen and (min-width: 690px) {

            .mobile-view-container {
                display: none;
            }

            .box-container {
                width: 300px;
                height: 300px;
                margin: auto;
                position: relative;
                background-color: green;
                border-radius: 10px;
            }

            .box {
                width: 300px;
                height: 300px;
                background-color: white;
                margin: auto;
                position: absolute;
                display: flex;
                justify-content: center;
                align-items: center;
                transition: 1s ease-in-out;
                border-radius: 10px;
                z-index: 100;

            }

            .box span {
                font-size: 43px;
                font-weight: bold;
            }

            .box .img {
                position: absolute;
                top: 0px;
                left: 0px;
                width: 100%;
                height: 100%;
                z-index: 100;
                border-radius: 10px;
            }

            .box .inner-box {
                position: absolute;
                top: 0px;
                left: 0px;
                width: 100%;
                height: 100%;
                background-color: rgb(218, 180, 117, 0.1);
                border: 1px solid #DAB475;
                z-index: 200;
                display: flex;
                justify-content: center;
                align-items: center;
                border-radius: 10px;
                display: none;
            }

            .box .inner-box i {
                font-size: 50px;
                /* color: #DAB475; */
                color: crimson;
            }

            .btns-container {
                width: 100%;
                display: flex;
                justify-content: center;
                margin: 20px;
            }

            .btns-container .no {
                width: 50px;
                height: 50px;
                border-radius: 50px;
                border: none;
                color: red;
                background-color: white;
                font-size: 23px;
                position: relative;
                right: 40px;


            }

            .btns-container .yes {
                width: 50px;
                height: 50px;
                border-radius: 50px;
                border: none;
                color: green;
                background-color: white;
                font-size: 23px;

            }

            button:hover {
                cursor: pointer;
            }

            .invincible {
                display: none !important;
            }

            .move-right {
                animation: moveright 2s ease;
            }

            @keyframes moveright {
                from {
                    right: 0px;
                    top: 0px;
                    transform: rotate(25deg);
                }

                to {
                    right: -1000px;
                    top: 100px;
                    transform: rotate(180deg);
                }
            }






            .move-left {
                animation: moverleft 2s ease;
            }

            @keyframes moverleft {
                from {
                    left: 0px;
                    top: 0px;
                    transform: rotate(-25deg);
                }

                to {
                    left: -1000px;
                    top: 100px;
                    transform: rotate(-180deg);
                }
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

<body style="background-color:#10283F;overflow-x:hidden;">

    <div style="width:100%;padding:10px;text-align:center;color:#DAB475;font-size:30px;font-weight:bold;">EXPLORE <i class="fa fa-heart" style="color:crimson;"></i></div>

    <div class="box-container">
        <div style="color:white;font-size:40px;font-weight:bold;position:absolute;top:40%;left:0px;text-align:center;width:100%;">FINISHED!</div>
        <?php
        $x = 0;
        while ($x < 10) {
            echo " <div class='box' uniqueid='$x'>
      <img src='img/myimg.jpg' class='img' draggable='true'>
      <div style='border-radius:0px 0px 10px 10px;position:absolute;bottom:0px;left:0px;padding:10px;height:50px;background-color:rgba(0, 0, 0, 0.1);color:white;width:100%;text-align:center;z-index:200;'>
      Emmanuel
      </div>

      <div class='inner-box' inner-uniqueid='$x'>
      <i class='fa fa-heart'></i>
      </div>

    
      </div>";
            $x++;
        }

        ?>
    </div>

    <div class="btns-container">
        <button class="no"><i class="fa fa-times"></i></button>
        <button class="yes"><i class="fa fa-check"></i></button>
    </div>

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

    <script>
        var yes_btn = document.querySelector(".yes");
        var no_btn = document.querySelector(".no");

        function disable_btns() {
            yes_btn.disabled = true;
            no_btn.disabled = true;
        }

        function enable_btns() {
            yes_btn.disabled = false;
            no_btn.disabled = false;
        }

        $(".yes").click(function() {
            disable_btns()
            var boxes = document.getElementsByClassName("box");
            var last_box_index = boxes.length - 1;
            var id = boxes[last_box_index].getAttribute("uniqueid");

            $("[inner-uniqueid=" + id + "]").css("display", "flex");
            // $(".inner-box").css("display", "flex");
            setTimeout(() => {

                $("[uniqueid=" + id + "]").addClass("move-right");
                setTimeout(() => {
                    $("[uniqueid=" + id + "]").removeClass("box");
                    $("[uniqueid=" + id + "]").addClass("invincible");
                    enable_btns();
                }, 1000)
            }, 200);

        })



        $(".no").click(function() {
            disable_btns();
            var boxes = document.getElementsByClassName("box");
            var last_box_index = boxes.length - 1;
            var id = boxes[last_box_index].getAttribute("uniqueid");


            setTimeout(() => {
                $("[uniqueid=" + id + "]").addClass("move-left");
                setTimeout(() => {
                    $("[uniqueid=" + id + "]").removeClass("box");
                    $("[uniqueid=" + id + "]").addClass("invincible");
                    enable_btns();
                }, 1000)

            }, 200);
        })
    </script>

</body>

</html>