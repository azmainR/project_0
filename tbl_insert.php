<!DOCTYPE html>
<html>

<head>
    <!-- Sweet Alert 2-> must be called from within html then accessed via 
        script within php -->
    <link rel="stylesheet" href="../sweet2/dist/sweetalert2.min.css">
    <script src="../jquery/jquery-3.6.0.min.js"></script>
    <script src="../sweet2/dist/sweetalert2.min.js"></script>
</head>

<body>
</body>

</html>

<?php
include('dbconn.php');
/* $tables_rows = $_POST['rows'];

echo 'tables_rows ki array? '.is_array($tables_rows).'<br>'.'<br>';
var_dump($tables_rows);
echo '<br>'.'<br>'; */
/* echo '<br>'.'<br>'.$tables_rows[0].'<br>';
echo '<br>'.$tables_rows[1];
echo '<br>'.$tables_rows[9].'<br>'; */

/* var_dump($_POST); */
if (isset($_POST['submit'])) {

    echo register_students();
    echo '<script>console.log("submit working")</script>';
}
function register_students()
{
    echo '<script>console.log("register function working")</script>';
    include('dbconn.php');
    $tables_rows = $_POST['rows'];

    echo '<script>console.log("working function")</script>';

    /* foreach ($_POST['rows'] as $row) { */
    foreach ($tables_rows as $row) {
        var_dump($row);
        echo '<script>console.log("for working")</script>';
        $filename = $_FILES['imgdb']["name"];
        $tempname = $_FILES['imgdb']["tmp_name"];
        //creates uploads directory to the root of the page origin
        @mkdir("StudentsUploads");
        $folder = "StudentsUploads/" . $filename;

        $serial = $row['serial'];
        /* echo '<script>console.log("getting value")</script>';
echo 'is serial array? '.is_array($row['1']).'<br>'.'<br>'; */
        $roll = $row['roll'];
        $class = $row['class'];
        $section = $row['section'];
        $fname = $row['fname'];
        $lname = $row['lname'];
        $cell = $row['cell'];
        $email = $row['email'];
        $dist = $row['dist'];
        $coun = $row['coun'];

        /* student_sequence.nextval */
        if (move_uploaded_file($tempname, $folder)) {
            $sql = "insert into students(SERIAL_NO,ROLL_NO,CLASS,CLASS_SECT,F_NAME,L_NAME,MOBILE,EMAIL,DISTRICT,COUNTRY,IMG)
            values ('$serial', '$roll', '$class','$section','$fname',
            '$lname','$cell','$email','$dist','$coun','" . $filename . "')";

            $std = oci_parse($conn, $sql);
            oci_execute($std);
            echo 'Uploaded';
        } else {
            echo 'failed';
        }

        echo '<script>console.log("$inserting value")</script>';

        if (isset($std)) {
            echo
            '<script>
          swal.fire({ 
              icon: "success",
              title: "Registered!",
              text: "Go Again.",
              showConfirmButton: true }).then(okay => {
                if (okay) {
                 window.location.href = "ediTable.php";
               }
          });
            </script>';
        } else {
            echo
            '<script>
          swal.fire({ 
              icon: "error",
              title: "Something\'s wrong",
              text: "Try Again.",
              showConfirmButton: false }).then(okay => {
                if (okay) {
                 window.location.href = "ediTable.php";
               }
             });
            </script>';
        }
        /* 
        oci_execute($std); */
    }
}





?>