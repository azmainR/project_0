<?php
// error_reporting(0);
session_start();

function session()
{
    if (!isset($_SESSION['log_in'])) {
        echo '<meta http-equiv="refresh" content="0; url=login1.php">';
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- FavIco -->
    <link rel="shortcut icon" type="image/x-icon" href="../test_favicon/favicon.ico">

    <!-- BS5 -->
    <link rel="stylesheet" href="../bs5_dist/css/bootstrap.min.css">

    <!-- Font Awesome Icons -->
    <!-- <script src="../fontawesome6/js/all.min.js"></script> -->
    <link rel="stylesheet" href="../fontawesome6/css/all.min.css">

    <!-- Report CSS -->

    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css" /> -->
    <link rel="stylesheet" href="../twitter_bootstrap/bootstrap.min_452.css">
    <link rel="stylesheet" href="../DataTables_full/datatables.min.css">

    <!-- Vanilla CSS -->
    <link rel="stylesheet" href="2styles.css">

    <!-- JQuery + BS5 JS-->
    <script src="../jquery/jquery-3.6.0.min.js"></script>
    <script src="../bs5_dist/js/bootstrap.bundle.min.js"></script>


    <!-- Report JS -->
    <script src="../DataTables_full/datatables.min.js"></script>



    <style>
        #top-menu {
            cursor: pointer;
        }

        @media screen and (max-width: 760px) {
            #no_show_logo {
                display: none;
            }

            #show_logo {
                width: 90%;
                height: 65px;
            }


        }

        /*  @media screen and (min-width: 760px) {
            #top-menu {
                display: none;
            }
            
        } */
        .close-btn {
            /* position: absolute;
            color:lightslategrey;
            font-size: 20px; */
            right: 0;
            /* margin: 10px; */
            cursor: pointer;
            visibility: hidden;
        }

        .sidenav .item {
            position: relative;
            cursor: pointer;
        }

        footer {
            margin-left: -50px;
        }

        #myHeader {
            box-shadow: 0 0 20px;
        }

        .fa-solid {
            color: grey;
        }
    </style>

</head>

<body>

    <div id="myHeader">
        <div class="row">
            <div class="col-sm-9">

                <!-- TEST--successful -->
                <span class="menu-btn">
                    <i id="top-menu" class="fas fa-bars fa-lg"></i>
                    <i class="fa-solid fa-xmark fa-lg close-btn"></i>
                </span>
                <!-- <span class="close-btn">
                <i class="fa-solid fa-xmark"></i>
            </span> -->

                <!-- dual dot represents original folder then another folder in which
the file we seek is kept. Or we could just use the dir location 
like: /trials/images/acme1.png -->
                <a href="2.php" title='Home'>
                    <img id="show_logo" src="../images/acme1.png" alt="acme logo" width="50%" height="60px">
                </a>
            </div>
            <!-- <div class="col-1">

        </div> -->
            <div id="no_show_logo" class="col-sm-3">
                <img style="float: right;" src="../images/acme3.png" alt="year" width="80%" height="60px">
            </div>
        </div>

    </div>

    <!--Nav Bar_vertical-->
    <div class="area">
        <nav id="sidebar" class="sidenav">
            <!-- <div class="close-btn">
        <i class="fa-solid fa-xmark"></i>
    </div> -->
            <hr>
            <div class="item">
                <a href="2.php" title='Home'><i class="fa-solid fa-house"></i><span>Home</span>
                </a>
            </div>
            <div class="nonAdmin item">
                <a href="history.php" title='History' target="_blank">
                    <i class="fa-solid fa-book-medical"></i>
                    <span>History</span>
                </a>
            </div>
            <a class="item" href="ediTable.php" target="_blank" title="Student Registrations">
                <i class="fa-solid fa-users"></i><span>Registry</span></a>
            <div class="drop">
                <a class="item" href="#" class="dropdn" title="Employee Queries">
                    <i class="fa-solid fa-magnifying-glass"></i><span>Queries</span></a>
                <i style="padding-right: 10px;" class="fa-solid fa-angle-down arrow"></i>
                <div class="drop-content">
                    <a href="form1.php"><i class="fa-solid fa-file-export"></i>
                        <span>Date-Wise</span></a>
                    <a href="form3.php"><i class="fa-solid fa-file-export"></i>
                        <span>ID-Wise</span></a>
                    <a href="profile_query.php" target="_blank" title="Student Query">
                        <i class="fa-solid fa-id-card-clip" style="padding-right: 5px;"></i>
                        <span>Student</span></a>
                    <a href="ecom_query.php" target="_blank" title="Burger Query">
                        <i class="fa-solid fa-id-card-clip" style="padding-right: 5px;"></i>
                        <span>Burgers</span></a>
                </div>
            </div>

            <a class="item" href="rand_charts.php" title="Random Data Charts">
                <i class="fa-solid fa-chart-line"></i>
                <span>Charts</span></a>

            <a class="item" href="ecom_reg.php" target="_blank"><i class="fa-solid fa-burger"></i>
                <span>Burgers</span>
            </a>

            <a class="item" href="logout.php" title="Log OFF"><i class="fa-solid fa-right-from-bracket"></i>
                <span>Log Off</span></a>

        </nav>
    </div>


    <script>
        /* function toggleMenu(){
            var side= document.getElementById("sidebar");
            if (!side.style.width || side.style.width =="10px"){
                side.style.width= "150px";
            }
            else {
                side.style.width="10px";
            }
        } */
        $(function() {
            /* script for sub menus */
            /* $('.sub-btn').click(function(){
                $(this).next('.sub-menu').slideToggle();
                $(this).find('.dropdown').toggleClass('rotate');
            }); */
            /* script for menu expansion and collapse */
            /* $('.menu-btn').click(function(){
                $('.sidenav').addClass('active');
                $('.menu-btn').css("transition", "0.5s ease-out");
                $('.menu-btn').css("visibility", "hidden");
                
                $('.close-btn').css("visibility", "visible");
            });

            $('.close-btn').click(function(){
                $('.sidenav').removeClass('active');
                $('.menu-btn').css("visibility", "visible");
                $('.close-btn').css("transition", "0s ease");
                $('.close-btn').css("visibility", "hidden");
            }); */

            $('#top-menu').click(function() {
                $('.sidenav').addClass('active');
                $('#top-menu').css("transition", "0.5s ease-out");
                $('#top-menu').css("visibility", "hidden");
                /* v3 */
                $('.close-btn').css("transition", "0.5s ease-in");
                $('.close-btn').css("visibility", "visible");
            });

            $('.close-btn').click(function() {
                $('.sidenav').removeClass('active');

                $('#top-menu').css("visibility", "visible");
                $('.close-btn').css("transition", "0s");
                $('.close-btn').css("visibility", "hidden");
            });
        });
    </script>

</body>

</html>