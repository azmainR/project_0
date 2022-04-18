<?php
include('dbconn.php');

$bun = $_POST['buns'];
$sauce = $_POST['sauce'];
$spice = $_POST['spicy'];

$sql1 = "select c.burger from choices c
where c.buns='$bun' and c.sauce='$sauce' and c.spiceness='$spice' ";
$test = oci_parse($conn, $sql1);
oci_execute($test);
$row = oci_fetch_assoc($test);
$img = 'BurgUploads/' . $row['BURGER'];

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
                <h2 class="card-title">Chosen Burger</h2>
            </div>

            <div class="card-body" nowrap>
                <h3>Your choice is made.</h3>
                <div class="form-row">
                    <div class="form-group col-sm-4">
                        <!-- <img id="frame" src="" width="100px" height="100px" />
                        <input id="img" type="file" onchange="preview()"> -->
                        <img id="frame" src="<?php echo $img; ?>" width="100px" height="100px" />

                    </div>
                </div>

            </div>
            <div class="card-footer">
                <a class="btn btn-danger" role="button" href="ecom_query.php" id="next1">Choose Again</a>
                <!-- <button class="btn btn-success" onclick="window.location.reload();">Refresh</button> -->
            </div>

        </div>
    </div>


    <script>
        function preview() {
            frame.src = URL.createObjectURL(event.target.files[0]);
            /* URL.revokeObjectURL(frame.src); */
            /* document.getElementById("img").style.display = "none"; */
        }
    </script>
</body>

</html>