<?php
include('header.php');

session();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title> Test Form 3</title>
    <link rel="stylesheet" href="form_style.css">

</head>

<body>


    <div class="container" align="center">
        <div class="card bg-light shadow mb-5 bg-body rounded" style="max-width: 18rem;">
            <div class="card-header">
                <h2 class="card-title">Query Form</h2>
            </div>
            <div class="card-body">
                <form action="test_report_id.php" method="post">

                    <label for='emp1'>Employee ID 1</label><br>
                    <input type="text" name='emp1' required> <br><br>

                    <label for='emp2'>Employee ID 2</label><br>
                    <input type="text" name='emp2' required><br><br>

                    <input type="submit" id='btn' class="btn btn-primary" value="Search"><br>
                </form>
            </div>
        </div>
    </div>
    <br><br><br><br>


    <!-- <footer>
        <hr>
        <div>
            <div class="p-md-2">
                <span>Developed under ACME IT &copy; 2021</span>
            </div>
        </div>

    </footer> -->
    <?php include('footer.php') ?>


</body>

</html>