<?php
include('header.php');
session();

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
    <link rel="stylesheet" href="2styles.css">

    <!-- JQuery + BS5 JS-->
    <script src="../jquery/jquery-3.6.0.min.js"></script>
    <script src="../bs5_dist/js/bootstrap.bundle.min.js"></script>

    <!-- Custom CSS -->
    <style>
        .container.prof {
            padding-top: 15px;
        }

        .container textarea {
            height: 85px;
            width: 400px;
            resize: both;
        }
    </style>


</head>

<body>
    <div class="container prof" align="center">
        <div class="card bg-light shadow mb-5 bg-body rounded" style="max-width: 30rem;">
            <div class="card-header">
                <h2 class="card-title">Query Form</h2>
            </div>

            <div class="card-body" nowrap>
                <br>
                <form action="profile_show.php" method="post">
                    <!-- target="_blank" -->
                    <div class="form-group">
                        <div class="input-group">

                            <label class="form-label">Roll:&nbsp;</label>
                            <input class="form-control form-control-sm" style="width: 10%;" type="text" name="roll" required>&nbsp; &nbsp;

                            <label class="form-label">Class:&nbsp;</label>
                            <select style="text-align:center" class="form-select form-select-sm" name="class" required>
                                <option selected>...</option>
                                <!-- <option value="I" readonly>I</option>
                <option value="II" readonly>II</option>
                <option value="III" readonly>III</option>
                <option value="IV" readonly>IV</option> -->
                                <option value="V" readonly>V</option>
                            </select>&nbsp; &nbsp;

                            <label class="form-label">Section:&nbsp;</label>
                            <select style="text-align:center" class="form-select form-select-sm" name="section" required>
                                <option selected>...</option>
                                <option value="A" readonly>A</option>
                                <option value="B" readonly>B</option>
                                <option value="C" readonly>C</option>
                                <option value="D" readonly>D</option>
                            </select>&nbsp; &nbsp;

                        </div>
                    </div>
                    <br>
            </div>
            <div class="card-footer">
                <input type="submit" id='btn' class="btn btn-primary" value="Search"><br>
            </div>
            </form>
        </div>
    </div>
    <div class="container">

        <textarea class="form-control" disabled>
            Current Possibile Combinations:
            Roll: 3, 4, 5
            Section: D
        </textarea>
    </div>


    <?php include('footer.php') ?>

</body>

</html>