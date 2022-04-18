<?php
include('header.php');

if ($_SESSION['admin'] == 'admin') {
    include('dbconn.php');

    $sql_id = "select count(id) id from choices";
    $test = oci_parse($conn, $sql_id);
    oci_execute($test);
    $val = oci_fetch_assoc($test);
    $id = $val['ID'];
    $id = $id + 1;
    echo '<script>console.log(' . $id . ')</script>';

?>

    <!DOCTYPE html>
    <html>

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Burger Admin</title>
        <style>
            .menu-btn {
                display: none;
            }

            .divider {
                border-left: 1px solid lightgray;
            }

            .form_img {

                width: 85%;
                padding-left: 50px;
                padding-top: 5px;
            }

            .txt_field {
                text-align: center;
                width: 20%;
            }

            .a_right {
                float: right;
            }
        </style>

    </head>

    <body>
        <div class="container" align="center" style="margin-top: 80px;">
            <form action="ecom_reg_a.php" method="post" enctype="multipart/form-data">
                <div class="card bg-light shadow mb-5 bg-body rounded" style="max-width: 45rem;">
                    <div class="card-header">
                        <h2 class="card-title">Burger Registration</h2>
                    </div>
                    <div class="card-body">
                        <div class="form-row">
                            <div class="form-group col-sm">
                                <label for="uid">Burger ID</label><br>
                                <input type="text" class="txt_field" name="bid" value="<?php echo $id ?>" readonly><br><br>

                                <label for="buns">Buns</label><br>
                                <select name="buns" required>
                                    <option selected>Choose 1</option>
                                    <option value="bun1">Bun1</option>
                                    <option value="bun2">Bun2</option>
                                </select><br><br>

                                <label for="sauce">Sauce</label><br>
                                <select name="sauce" required>
                                    <option selected>Choose 1</option>
                                    <option value="less">Less</option>
                                    <option value="med">Medium</option>
                                    <option value="more">More</option>
                                </select><br><br>

                                <label for="spicy">Spiceness</label><br>
                                <select name="spicy" required>
                                    <option selected>Choose 1</option>
                                    <option value="mild">Mild</option>
                                    <option value="spicy">Spicy</option>
                                    <option value="espicy">Ex. Spicy</option>
                                    <option value="naga">Ex. Naga</option>
                                </select><br><br>
                            </div>
                            <div class="divider form-group col-sm">
                                <label for="adons">Add-ons</label><br>
                                <select name="adons">
                                    <option value="" selected>Choose 1</option>
                                    <option value="cheese">Cheese</option>
                                    <option value="egg">Eggs</option>
                                    <option value="bbq">BBQ Sauce</option>
                                    <option value="bacon">Bacon</option>
                                    <option value="beef">Beef Patty</option>
                                </select><br><br>

                                <label for="burg">Burger</label><br>
                                <img id="frame" src="" width="90px" height="90px">
                                <input id="img1" class="form-control-file-sm form_img" type="file" name="imgburg" onchange="preview()" required>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <input type="submit" id="submit" class="btn btn-primary" value="Register">&nbsp;
                        <a class="btn btn-success a_right" href="./ecom_query.php" target="_blank">User Query</a>
                    </div>
            </form>

        </div>
        </div>


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
include('footer.php')
?>