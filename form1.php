<?php
include('header.php');
session();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title> Test Form 1</title>
    <link rel="stylesheet" href="form_style.css">

</head>

<body>
    <div class="container" align="center">
        <div class="card bg-light shadow mb-5 bg-body rounded" style="max-width: 25rem;">
            <div class="card-header">
                <h2 class="card-title">Query Form</h2>
            </div>
            <div class="card-body">
                <form action="test_report_date.php" method="post">
                    <!-- target="_blank" -->

                    <input type="date" class="date1" name="from" min='2000-01-01' max='2010-12-31' value="<?php echo date('d-M-y'); ?>" required> &nbsp; &nbsp;

                    <input type="date" class="date1" name="to" min='2000-01-01' max='2010-12-31' value="<?php echo date('d-M-y'); ?>" required>
                    <br><br>

                    <input type="submit" id='btn' class="btn btn-primary" value="Search"><br>
                </form>
            </div>
        </div>
    </div>
    <br><br><br><br>



    <?php include('footer.php') ?>


</body>

</html>