<?php
include ('header.php');
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Registration Page</title>
<!-- <link rel="stylesheet" href="form_style.css"> -->
<style>
.sidenav {
  display:none;
}
.menu-btn{
    display: none;
}
</style>

</head>
<body>
<div class="container" align="center" style="margin-top: 80px;">
    <div class="card bg-light shadow mb-5 bg-body rounded" style="max-width: 25rem;">
        <div class="card-header">
            <h2 class="card-title">Registration</h2>
        </div>
        <form action="reg_a.php" method="post">
        
        <div class="card-body">

        <table align="center">
            <tr>
            <td id="form_td">
                <label for="uid">User ID</label><br>
                <input type="text" name="uid" required><br><br>
                <label for="fname">First Name</label><br>
                <input type="text" name="fname" required><br><br>
                <label for="lname">Last Name</label><br>
                <input type="text" name="lname" required><br><br>
                <label for="mail">Email</label><br>
                <input type="text" name="mail" required><br><br>
                <label for="pwd">Password</label><br>
                <input type="password" id="pass0" name="pwd" minlength=3 required><br><br>
                <label>Confirm Password</label><br>
                <input type="password" id="pass1" name="pwd1" minlength=3 required><br><br>

                <label for="cell1">Cell no.</label><br>
                <input type="text" name="cell1" required><br><br>
                <label for="religion1">Religion</label><br>
                <input type="text" name="religion1" required><br><br>
                <label for="country1">Country</label><br>
                <input type="text" name="country1" required><br><br>
                <label for="district1">District</label><br>
                <input type="text" name="district1" required><br><br>
                <label for="street1">Street Name</label><br>
                <input type="text" name="street1" required><br><br>
                <label for="postal1">Postal Code</label><br>
                <input type="text" name="postal1" required><br><br>
            </td>
            </tr>
        </table>
        </div>
        <div class="card-footer">
            <input type="submit" id="submit" class="btn btn-primary" 
            value="Register">
        </div>
        </form>
        
    </div>
</div>

<?php include('footer.php') ?>
<script>
/* Footer year */
    var date = new Date();
    //Day represents [0-6]-index of the week where 0->Sunday.
    //Date represents the numeric day of the week or month (1-31).
    var year = date.getFullYear();
    document.getElementById("cur_year").innerHTML = year;

/* Confirm Password validation */
    $('#pass0, #pass1').on('keyup',function() {
        if ($('#pass1').val()==$('#pass0').val()){
            $('#pass1').css('border-color', 'lime');
            $('#submit').prop('disabled', false);
        }
        else {
            $('#pass1').css('border-color', 'red');
            $('#submit').prop('disabled', true);
        }
    });

</script>

</body>
</html>