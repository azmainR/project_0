<!DOCTYPE html>
<html>
<head>
    <!-- Sweet Alert 2-> must be called from within html then accessed via 
        script within php -->
    <link rel="stylesheet" href="../sweet2/dist/sweetalert2.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="../sweet2/dist/sweetalert2.min.js"></script> 
</head>
<body>
</body>
</html>

<?php
include ("dbconn.php");

//post variables
$u_id=$_POST['uid'];
$f1=$_POST['fname'];
$l1=$_POST['lname'];
$email=$_POST['mail'];
$pswd=$_POST['pwd'];
$cell2=$_POST['cell1'];
$religion2=$_POST['religion1'];
$country2=$_POST['country1'];
$district2=$_POST['district1'];
$street2=$_POST['street1'];
$postal2=$_POST['postal1'];
/* echo 'Processing post variables, for example: '. $f1; */

$sql1=
"insert into user_list (user_id, first_name, last_name, email, 
password, cell_no, religion, country, district, street_name,
 postal_code)
 values ( '$u_id', '$f1', '$l1', '$email', '$pswd', '$cell2', 
'$religion2', '$country2', '$district2', '$street2', '$postal2' )";

$std=oci_parse($conn, $sql1);

/* echo 'Processing post variables, for example: '. $f1; */

oci_execute($std);

echo
    '<script>
        swal.fire({ 
        icon: "success",
        title: "Registration Complete!",
        /* text: "Redirect to Log-In on click.", */
        showConfirmButton: false }).then(okay => {
            if (okay) {
                window.location.href = "login1.php";
            }
        });
    </script>';
/* 
header ("Location: login1.php"); */

?>