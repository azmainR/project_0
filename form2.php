<?php
include('header.php');
session();

?>
<!DOCTYPE html>
<html>

<head>
  <title> Test Form 2</title>
  <link rel="stylesheet" href="form_style.css">
  <style>
    * {
      box-sizing: border-box;
    }

    #form_box {
      padding: 100px 0;
      text-align: center;
    }

    #form_table {
      padding: 0 70px 50px;
      box-shadow: 0 0 5px;
    }

    #form_td {
      padding: 1px;
    }
  </style>

</head>

<body>
  <div id="form_box">
    <table id="form_table" align="center">
      <thead>
        <tr>
          <th>
            <h2>Form</h2>
          </th>
        </tr>
      </thead>
      <tr>
        <td id="form_td">
          <form action="test_report.php" target="_blank" method="post">
            <label for="company">Choose one</label><br>
            <select name="mng" id="emp" required>
              <option>--Select--</option>
              <option>Steven</option>
              <option>Nancy</option>
            </select><br><br>
            <select name="em_id" id="emp" required>
              <option>--Select--</option>
              <!--Query for the options run here via php and oracle-->
              <?php
              include("dbconn.php");

              $sql = 'select employee_id from employees';
              $stid = oci_parse($conn, $sql);
              oci_execute($stid);
              while ($row = oci_fetch_assoc($stid)) {
                echo "<option>" . $row['EMPLOYEE_ID'] . "</option>";
              }
              ?>

            </select><br><br>
            <input type="submit" id='btn' value="Search"><br>
          </form>
        </td>
      </tr>
    </table>
  </div>
  <?php include('footer.php') ?>
</body>

</html>