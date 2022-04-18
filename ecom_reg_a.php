<!DOCTYPE html>
<html>

<head>
    <!-- Sweet Alert 2-> must be called from within html then accessed via 
        script within php -->
    <link rel="stylesheet" href="../sweet2/dist/sweetalert2.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="../sweet2/dist/sweetalert2.min.js"></script>
</head>

<body>
</body>

</html>

<?php
include("dbconn.php");

//post variables
$b_id = $_POST['bid'];
$bun = $_POST['buns'];
$sauce = $_POST['sauce'];
$spice = $_POST['spicy'];
$adon = $_POST['adons'];

/* echo 'Processing post variables, for example: '. $f1; */

$filename = $_FILES['imgburg']["name"];
$tempname = $_FILES['imgburg']["tmp_name"];
//creates uploads directory to the root of the page origin
@mkdir("BurgUploads");
$folder = "BurgUploads/" . $filename;

if (move_uploaded_file($tempname, $folder)) {
    $sql1 = "insert into choices
 values ( '$b_id', '$bun', '$sauce', '$spice', '$adon','" . $filename . "' )";

    $std = oci_parse($conn, $sql1);

    /* echo 'Processing post variables, for example: '. $f1; */

    oci_execute($std);
    echo 'Uploaded';
} else {
    echo 'failed';
}
// echo
//     '<script>
//         swal.fire({ 
//         icon: "success",
//         title: "Registration Complete!",
//         /* text: "Redirect to Log-In on click.", */
//         showConfirmButton: false }).then(okay => {
//             if (okay) {
//                 window.location.href = "login1.php";
//             }
//         });
//     </script>';
/* 
header ("Location: login1.php"); */

?>