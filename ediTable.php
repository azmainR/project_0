<?php

include("header.php");

// session_start();
if ($_SESSION['admin'] == 'admin') {

    include("dbconn.php");
    $sql_serial = "select max(serial_no) sn from students ";
    $test = oci_parse($conn, $sql_serial);
    oci_execute($test);
    $val = oci_fetch_assoc($test);
    $serial = $val['SN'];
    $serial = $serial + 1;
    echo '<script>console.log(' . $serial . ')</script>';

    function fetch_row($sn)
    {
        $serial1 = $sn;
        $output = '';
        $output .=
            '<tr align="center">
        <td>
            <input class="form-control-sm" style="width: 80%;" type="text" 
             value=' . $serial1 . ' name="rows[0][serial]" readonly>
        </td>
        <td>
            <input class="form-control-sm" style="width: 80%;" type="text" name="rows[0][roll]" required>
        </td>
        <td>
            <input class="form-control-sm" style="width: 80%;" type="text" name="rows[0][class]" required>
        </td>
        <td>
            <input class="form-control-sm" style="width: 80%;" type="text" name="rows[0][section]" required>
        </td>
        <td>
            <input class="form-control-sm" style="width: 80%;" type="text" name="rows[0][fname]" required>
        </td>
        <td>
            <input class="form-control-sm" style="width: 80%;" type="text" name="rows[0][lname]" required>
        </td>
        <td>
            <input class="form-control-sm" style="width: 80%;" type="tel" pattern="^(0\W*1\W*(?:\d\W*){9})$" maxlength="11" name="rows[0][cell]" required>
        </td>
        <td>
            <input class="form-control-sm" style="width: 80%;" type="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" 
            name="rows[0][email]" required>
        </td>
        <td>
            <input class="form-control-sm" style="width: 80%;" type="text" name="rows[0][dist]" required>
        </td>
        <td>
            <input class="form-control-sm" style="width: 80%;" type="text" name="rows[0][coun]" required>
        </td>
        <td class="imgBox">
            <img id="frame" src="" width="50px" height="50px" >
            <input id="img1" class="form-control-file-sm" style="width: 85%;" 
            type="file" name="imgdb" onchange="preview()" required>
        </td>

    </tr>';
        // <td><button class="btn btn-danger remrow" disabled>X</button></td>
        /* echo '<script>console.log("working row")</script>'; */
        return $output;
    }

?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Table Form</title>

        <!-- BS5 css-->
        <link rel="stylesheet" href="../bs5_dist/css/bootstrap.min.css">


        <!-- fontawesome -->
        <link rel="stylesheet" href="../fontawesome6/css/all.min.css">

        <!-- Jquery and BS5 JS-->
        <script src="../jquery/jquery-3.6.0.min.js"></script>
        <script src="../bs5_dist/js/bootstrap.min.js"></script>

        <style>
            input {
                text-align: center;
            }

            #student_register td {
                padding-top: 30px;
            }

            #student_register td.imgBox {
                padding-top: 8px;
            }

            #frame {
                padding-bottom: 0px;
                margin-bottom: 6px;
            }
        </style>
    </head>

    <body style="margin-left: 50px;">
        <h2 style="margin-top: 60px;">Student Registry</h2>
        <div class="container-sm container-responsive mt-0">

            <!-- <div class="row"> -->
            <!-- <div class="col-12-sm"> -->

            <!-- </td> -->
            <!-- <button id="add_row" class="float-end btn btn-secondary">
            <i class="fas fa-user-plus"></i>&nbsp;Add User
        </button> -->
            <!-- <button id="add_row"> Add Row </button> -->
            <form id="student_form" action="tbl_insert.php" method="post" enctype="multipart/form-data">

                <table id="student_register" class="table table-responsive 
            table-bordered table-striped" align="center">
                    <thead>
                        <tr style="text-align:center;">
                            <th>Sl. No.</th>
                            <th>Roll No.</th>
                            <th>Class</th>
                            <th>Section</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Mobile</th>
                            <th>Email</th>
                            <th>District</th>
                            <th>Country</th>
                            <!-- <th>Remove Row</th> -->
                            <th>Upload Img.</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php
                        echo fetch_row($serial);
                        /*  echo $serial; */
                        ?>


                    </tbody>

                    <tfoot>
                        <tr>
                            <td colspan="12" style="text-align:center;">
                                <input class="btn btn-primary" type="submit" name="submit" value="Register">
                                <input class="btn btn-danger float-end" type="reset" value="Clear">
                                <button class="btn btn-success" onclick="window.location.reload();">Refresh</button>
                            </td>
                        </tr>
                    </tfoot>
                </table>

            </form>
            <!-- </div> -->
            <!-- </div> -->
        </div>
        <?php include("footer.php"); ?>
        <!-- name=rows['+i+'][serial] -->
        <!-- <script>
        $(document).ready(function() {
            var serial1 = '<?php echo $serial + 1 ?>';
            console.log('JS ' + serial1);
            var i = 1,
                row_count = 1;
            $('#add_row').click(function() {
                var table_row = '<tr><td><input class="form-control-sm" style="width: 80%;" type="text" value=' + serial1 + ' name="rows[' + i + '][serial]" readonly></td>' +
                    '<td><input class="form-control-sm" style="width: 80%;" type="text" name="rows[' + i + '][roll]" maxlength="3" required></td>' +
                    '<td><input class="form-control-sm" style="width: 80%;" type="text" name="rows[' + i + '][class]" maxlength="2" required></td>' +
                    '<td><input class="form-control-sm" style="width: 80%;" type="text" name="rows[' + i + '][section]" maxlength="1" required></td>' +
                    '<td><input class="form-control-sm" style="width: 80%;" type="text" name="rows[' + i + '][fname]" required></td>' +
                    '<td><input class="form-control-sm" style="width: 80%;" type="text" name="rows[' + i + '][lname]" required></td>' +
                    '<td><input class="form-control-sm" style="width: 80%;" type="tel" name="rows[' + i + '][cell]" maxlength="11" required></td>' +
                    '<td><input class="form-control-sm" style="width: 80%;" type="text" name="rows[' + i + '][email]" required></td>' +
                    '<td><input class="form-control-sm" style="width: 80%;" type="text" name="rows[' + i + '][dist]" required></td>' +
                    '<td><input class="form-control-sm" style="width: 80%;" type="text" name="rows[' + i + '][coun]" required></td>' +
                    '<td><button class="btn btn-danger remrow">X</button></td></tr>';
                $("#student_register tbody").append(table_row);
                row_count++;

                /* Number of rows limited */
                if (row_count == 7) {
                    $('#add_row').prop('disabled', true);
                }
                i++;
                serial1++;
                $(".remrow").click(function() {
                    $(this).parent().parent().remove();
                });
            });


        });
    </script> -->
        <script>
            function preview() {
                frame.src = URL.createObjectURL(event.target.files[0]);

                /* document.getElementById("img1").style.display = "none"; */
            }
        </script>
    </body>

    </html>
<?php
} else {
    echo '<div class="container-sm"><h2 class="display-1" style="color:red;"><b>Halt! Admin Access Only...</b></h2></div>';
}
?>