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
include('dbconn.php');
session_start();


$mail1 = $_POST['mail'];
//echo 'email: '. $mail1 . '<br>';
$pass = $_POST['pwd'];
//echo 'pass: ' . $pass . '<br>';

/* No Access to validation page */
/* if(isset($_POST['login'])){
    
}else {
    header("location:login1.php");
} */


if (isset($_POST['rem'])) {

    setcookie('email', $mail1, time() + 60);
    setcookie('password', $pass, time() + 60);
}



if ($mail1 == '') {
    echo
    '<script>
        swal.fire({ 
            icon: "warning",
            title: "Email required!",
            text: "Try Again.",
            showConfirmButton: false }).then(okay => {
              if (okay) {
               window.location.href = "login1.php";
             }
           });
          </script>';
    /* echo '<meta http-equiv="refresh" content="0; url= login1.php">'; */
}
if ($pass == '') {
    echo
    '<script>
        swal.fire({ 
            icon: "warning",
            title: "Password required!",
            text: "Try Again.",
            showConfirmButton: false }).then(okay => {
              if (okay) {
               window.location.href = "login1.php";
             }
           });
          </script>';
    /* echo '<meta http-equiv="refresh" content="0; url= login1.php"> '; */
}
if (($mail1 != '') && ($pass != '')) {



    /* $sql1= "select email,password from user_list"; */

    /* $sql1= "select * from user_list where password='$pass' "; */

    //works for invalid email and pass separately, not both.
    /* $sql1= "select email,password from user_list
where email = '$mail1' or password = '$pass' "; */  //due to and bringing up nothing, nothing cannot be set to a variable, hence the code is running improperly.

    /* $sql1= "select email,password from user_list
where email = '$mail1' and password = '$pass' "; */

    /* $sql1= "select email,password from user_list
where email = '$mail1' "; */

    $sql1 = "select * from user_list
    where email = '$mail1' and password = '$pass' ";

    $wrk = oci_parse($conn, $sql1);
    oci_execute($wrk);

    $nrows = oci_fetch_all($wrk, $res);
    if ($nrows > 0) {
        //echo $mail1;
        oci_execute($wrk);

        if ($row = oci_fetch_assoc($wrk)) {
            $v_email = $row['EMAIL'];
            //echo 'mail for db: '. $v_email . '<br>';
            $v_pass = $row['PASSWORD'];
            //echo 'pass from db: '. $v_pass . '<br>';
            $admin = $row['USER_TYPE'];
        }

        //the while is mainly used here when generating data in the table under specified columns, otherwise its just useless.
        /* while (($row=oci_fetch_assoc($wrk))!=false){  */

        /* if(is_array($row)) //this assures the desired records we seek
//are in array form, otherwise this does not work.*/

        if (($mail1 == $v_email) && ($pass == $v_pass) /* && ($mail1!='') && ($pass!='') */) { // when using multi conditions, using braces around individual conditions is of utmost importance!! SERIOUSLY!!

            $_SESSION['user_mail'] = $mail1;
            $_SESSION['log_in'] = $_POST['login'];
            $_SESSION['admin'] = $admin;

            if ($_SESSION['user_mail'] == $mail1) {
                echo '<meta http-equiv="refresh" content="0;url=2.php ">';
            }
        }
        /* elseif(($mail1!=$v_email) && ($pass==$v_pass)) {
            '<script>alert("Invalid Email!")</script>'; 
			echo '<meta http-equiv="refresh" content="0;url=login1.php?msg=error">';
        }
        elseif(($mail1==$v_email) && ($pass!=$v_pass)) {
            '<script>alert("Invalid Password!")</script>'; 
			echo '<meta http-equiv="refresh" content="0;url=login1.php?msg=error">';
        } */ else {
            echo
            '<script>
                swal.fire({ 
                icon: "error",
                title: "Invalid Email and/or Password!",
                text: "Try Again.",
                showConfirmButton: false }).then(okay => {
                if (okay) {
                window.location.href = "login1.php";
                }
                });
            </script>';

            /* echo '<script>alert("Invalid Email and/or Password!")</script>';
			echo '<meta http-equiv="refresh" content="0;url=login.1php?msg=error">'; */
        }
    } else {
        /* echo '<script>swal("Invalid Email and/or Password!").then(() => { window.history.back(); });
        </script>';  */

        /* Sweet Alert Try 1 */

        /* echo 
        "<script>
            Swal.fire({
                icon: 'error',
                title: 'Invalid Email and/or Password!',
                text: 'Try again..',
                type: 'warning'
            }, function(isConfirm){
                alert('ok');
          });
          $('.swal2-confirm').click(function(){
                window.location.href = 'login1.php';
          });
        </script>"; */

        /* Sweet Alert Try 2 */

        echo
        '<script>
        swal.fire({ 
            icon: "error",
            title: "Invalid Email and/or Password!",
            text: "Try Again.",
            showConfirmButton: false }).then(okay => {
              if (okay) {
               window.location.href = "login1.php";
             }
           });
          </script>';


        //$msg = 'error'; session_destroy();
        /* echo '<meta http-equiv="refresh" content="0;url=login1.php?msg=error">'; */
    }
} else {

    echo
    '<script>
        swal.fire({ 
            icon: "warning",
            title: "Email and/or Password Field(/s) Empty!",
            text: "Try Again.",
            showConfirmButton: false }).then(okay => {
              if (okay) {
               window.location.href = "login1.php";
             }
           });
          </script>';

    /* echo '<script>alert("Invalid Email and/or Password!")</script>'; 
    echo '<meta http-equiv="refresh" content="url=0;login1.php?msg=error">'; */
}

?>