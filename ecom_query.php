<?php
include('header.php');
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
    <link rel="stylesheet" href="../fontawesome6/css/all.min.css">

    <!-- Vanilla Custom CSS -->
    <link rel="stylesheet" href="burger.css">

    <!-- JQuery + BS5 JS-->
    <script src="../jquery/jquery-3.6.0.min.js"></script>
    <script src="../bs5_dist/js/bootstrap.bundle.min.js"></script>

    <!-- Custom CSS -->
    <style>
        .container.prof {
            padding-top: 80px;
        }

        #myHeader,
        footer {
            margin-left: 0;
        }
    </style>


</head>

<body>
    <div class="container prof" align="center">
        <div class="card bg-light shadow mb-5 bg-body rounded" style="max-width: 65rem;">

            <form action="burg_show.php" method="post">
                <div class="card-header">
                    <h2 class="card-title">What do you want?</h2>
                </div>

                <div class="card-body" nowrap>
                    <br>
                    <h1 id="changeH">Buns</h1>
                    <hr>
                    <div class="container bun_choices active">
                        <div class="row">
                            <div class="col-5">
                                <img class="imgOptions" src="../images/burgers/buns/Screenshot 2021-12-13 120821.png">
                                <br>
                                <label>
                                    <input type="radio" name="buns" value="bun1" required>
                                    Bun1
                                </label>
                            </div>
                            <div class="col-2"></div>
                            <div class="col-5">
                                <img class="imgOptions" src="../images/burgers/buns/Screenshot 2021-12-13 120919.png">
                                <br>
                                <label>
                                    <input type="radio" name="buns" value="bun2" required>
                                    Bun2
                                </label>
                            </div>
                        </div>
                        <div class="row">
                            <a class="btn btn-danger" role="button" id="next1">Next</a>
                        </div>
                    </div>

                    <div class="container sauce_choices">
                        <div class="row">
                            <div class="col-4">
                                <img class="imgOptions" src="../images/burgers/sauces/Screenshot 2021-12-13 162628.png">
                                <br>
                                <label>
                                    <input type="radio" name="sauce" value="less" required>
                                    Less Saucy</label>
                            </div>
                            <div class="col-4">
                                <img class="imgOptions" src="../images/burgers/sauces/Screenshot 2021-12-13 162701.png">
                                <br>
                                <label>
                                    <input type="radio" name="sauce" value="med" required>
                                    Medium Saucy</label>
                            </div>
                            <div class="col-4">
                                <img class="imgOptions" src="../images/burgers/sauces/Screenshot 2021-12-13 162729.png">
                                <br>
                                <label>
                                    <input type="radio" name="sauce" value="more" required>
                                    More Saucy</label>
                            </div>
                        </div>
                        <div class="row">
                            <a class="btn btn-danger" role="button" id="next2">Next</a>
                        </div>
                    </div>
                    <div class="container spicy_choices">
                        <div class="row">
                            <div class="col-3">
                                <img class="imgOptions" src="../images/burgers/spiceness/mild.png">
                                <br>
                                <label>
                                    <input type="radio" name="spicy" value="mild" required>
                                    Mild Spicy</label>
                            </div>
                            <div class="col-3">
                                <img class="imgOptions" src="../images/burgers/spiceness/spicy.png">
                                <br>
                                <label>
                                    <input type="radio" name="spicy" value="spicy" required>
                                    Very Spicy</label>
                            </div>
                            <div class="col-3">
                                <img class="imgOptions" src="../images/burgers/spiceness/vspicy.png">
                                <br>
                                <label>
                                    <input type="radio" name="spicy" value="espicy" required>
                                    Extremely Spicy</label>
                            </div>
                            <div class="col-3">
                                <img class="imgOptions" src="../images/burgers/spiceness/naga.png">
                                <br>
                                <label>
                                    <input type="radio" name="spicy" value="naga" required>
                                    Naga Spicy</label>
                            </div>
                        </div>
                        <div class="row">
                            <a class="btn btn-danger" role="button" id="next3">Next</a>
                        </div>
                    </div>
                    <div class="container addon_choices">
                        <div class="row">
                            <div class="col-4">
                                <img class="imgOptions" src="../images/burgers/addons/Screenshot 2021-12-14 084101.png">
                                <br>
                                <label>
                                    <input type="radio" name="addon" value="cheese">
                                    Less Saucy</label>
                            </div>
                            <div class="col-4">
                                <img class="imgOptions" src="../images/burgers/addons/Screenshot 2021-12-14 084139.png">
                                <br>
                                <label>
                                    <input type="radio" name="addon" value="bbq">
                                    BBQ Sauce</label>
                            </div>
                            <div class="col-4">
                                <img class="imgOptions" src="../images/burgers/addons/Screenshot 2021-12-14 084206.png">
                                <br>
                                <label>
                                    <input type="radio" name="addon" value="egg">
                                    Eggs</label>
                            </div>
                            <div class="col-4">
                                <img class="imgOptions" src="../images/burgers/addons/Screenshot 2021-12-14 084014.png">
                                <br>
                                <label>
                                    <input type="radio" name="addon" value="bacon">
                                    Bacon</label>
                            </div>
                            <div class="col-4">
                                <img class="imgOptions" src="../images/burgers/addons/Screenshot 2021-12-14 083845.png">
                                <br>
                                <label>
                                    <input type="radio" name="addon" value="beef">
                                    Beef Patty</label>
                            </div>
                        </div>
                        <!-- <div class="row">
                            <a class="btn btn-danger" role="button" id="next4">Next</a>
                        </div> -->
                    </div>

                </div>
                <div class="card-footer">
                    <input type="submit" id='btn' class="btn btn-primary" value="Submit"><br>
                </div>
            </form>
        </div>
        <?php
        // echo var_dump($_POST);
        ?>

        <script>
            $(function() {
                $("input[name=buns]:radio").click(function() {
                    if ($(this).prop("checked")) {
                        $('#next1').click(function() {
                            $('.bun_choices').removeClass('active');
                            $('.sauce_choices').addClass('active');
                            $('#changeH').text('Sauces');
                        });
                    }
                });
                $("input[name=sauce]:radio").click(function() {
                    if ($(this).prop("checked")) {
                        $('#next2').click(function() {
                            $('.sauce_choices').removeClass('active');
                            $('.spicy_choices').addClass('active');
                            $('#changeH').text('Spiceness Factor');
                        });
                    }
                });
                $("input[name=spicy]:radio").click(function() {
                    if ($(this).prop("checked")) {
                        $('#next3').click(function() {
                            $('.spicy_choices').removeClass('active');
                            $('.addon_choices').addClass('active');
                            $('#changeH').text('Addons(Optional)');
                        });
                    }
                });
            });
        </script>
    </div>
    <?php include('footer.php') ?>
</body>

</html>