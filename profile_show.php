<?php
include('dbconn.php');
include('header.php');

session();

$roll = $_POST['roll'];
/* echo 'roll: '.$roll.'<br>'; */
$class = $_POST['class'];
/* echo 'class: '.$class.'<br>'; */
$section = $_POST['section'];
/* echo 'section: '.$section; */

$sql1 = "select s.SERIAL_NO , s.F_NAME || ' ' || s.L_NAME st_name, s.MOBILE ,
    s.EMAIL ,s.DISTRICT ,s.COUNTRY,s.IMG
    FROM STUDENTS s 
    WHERE s.ROLL_NO ='$roll' AND s.CLASS ='$class' AND s.CLASS_SECT = '$section' ";
$test = oci_parse($conn, $sql1);
oci_execute($test);
$row = oci_fetch_assoc($test);
$serial = $row['SERIAL_NO'];
$name = $row['ST_NAME'];
$mob = $row['MOBILE'];
$mail = $row['EMAIL'];
$distr = $row['DISTRICT'];
$country = $row['COUNTRY'];
$img = 'StudentsUploads/' . $row['IMG'];
/* echo $serial.'<br>';
        echo $name.'<br>';
        echo $mob.'<br>';
        echo $mail.'<br>';
        echo $distr.'<br>';
        echo $country.'<br>'; */
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
        /* input{
            text-align: center;
        } */
        .row.prof {
            margin-bottom: 15px;
        }

        .container.prof {
            padding-top: 15px;
        }

        .input-group> :not(:first-child):not(.dropdown-menu):not(.valid-tooltip):not(.valid-feedback):not(.invalid-tooltip):not(.invalid-feedback) {
            background-color: #f7f7f7;
        }
    </style>


</head>

<body>
    <div class="container prof" align="center">
        <div class="card bg-light shadow mb-5 bg-body rounded" style="max-width: 40rem;">
            <div class="card-header">
                <h2 class="card-title">Student Profile</h2>
            </div>

            <div class="card-body" nowrap>
                <br>
                <!-- <form> -->
                <div class="form-row">
                    <div class="form-group col-sm-4">
                        <!-- <img id="frame" src="" width="100px" height="100px" />
                        <input id="img" type="file" onchange="preview()"> -->
                        <img id="frame" src="<?php echo $img; ?>" width="100px" height="100px" />

                    </div>
                    <div class="form-group col-sm-5">

                    </div>
                    <div class="form-group col-sm-3">
                        <div class="input-group">
                            <span class="input-group-text">Serial</span>
                            <input type="text" class="form-control" value="<?php echo $serial; ?>" disabled>
                        </div>
                    </div>
                </div>
                <div class="form-row" align="center">
                    <div class="col-sm-12">
                        <h4>Personal Details</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="row prof">
                            <div class="input-group">
                                <span class="input-group-text">Name</span>
                                <input type="text" class="form-control" aria-label="Full Name" value="<?php echo $name; ?>" readonly>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="row prof">
                            <div class="input-group">
                                <span class="input-group-text">Class</span>
                                <input type="text" class="form-control" aria-label="Full Name" value="<?php echo $class; ?>" readonly>
                            </div>
                        </div>
                        <div class="row prof">
                            <div class="input-group">
                                <span class="input-group-text">Roll No.</span>
                                <input type="text" class="form-control" aria-label="Full Name" value="<?php echo $roll; ?>" readonly>
                            </div>
                        </div>
                        <div class="row prof">
                            <div class="input-group">
                                <span class="input-group-text">Section</span>
                                <input type="text" class="form-control" aria-label="Full Name" value="<?php echo $section; ?>" readonly>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-row" align="center">
                    <div class="col-sm-12">
                        <h4>Contact and Location</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="row prof">
                            <div class="input-group">
                                <span class="input-group-text">Mobile</span>
                                <input type="text" class="form-control" aria-label="Full Name" value="<?php echo $mob; ?>" readonly>
                            </div>
                        </div>
                        <div class="row prof">
                            <div class="input-group">
                                <span class="input-group-text">E-Mail</span>
                                <input type="text" class="form-control" aria-label="Full Name" value="<?php echo $mail; ?>" readonly>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="row prof">
                            <div class="input-group">
                                <span class="input-group-text">District</span>
                                <input type="text" class="form-control" aria-label="Full Name" value="<?php echo $distr; ?>" readonly>
                            </div>
                        </div>
                        <div class="row prof">
                            <div class="input-group">
                                <span class="input-group-text">Country</span>
                                <input type="text" class="form-control" aria-label="Full Name" value="<?php echo $country; ?>" readonly>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="card-footer">
                <!-- <button type="reset" class="btn btn-danger">Reset</button> -->
                <button class="btn btn-success" onclick="window.location.reload();">Refresh</button>
            </div>

        </div>
    </div>

    <?php include('footer.php') ?>

    <script>
        function preview() {
            frame.src = URL.createObjectURL(event.target.files[0]);
            /* URL.revokeObjectURL(frame.src); */
            document.getElementById("img").style.display = "none";
        }
    </script>
</body>

</html>