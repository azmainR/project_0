<?php
include('header.php')
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Test Login BS5</title>
  <!-- <meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="stylesheet" href="bs5_dist/css/bootstrap.min.css">
<script src="bs5_dist/js/bootstrap.bundle.min.js"></script>  -->
  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
-->
  <link rel="stylesheet" href="form_style.css">
  <style>
    .sidenav,
    #toc {
      display: none;
    }

    .menu-btn {
      display: none;
    }

    #hide {
      cursor: pointer;
    }

    #show {
      display: none;
      cursor: pointer;
    }

    .grad {
      background-image: linear-gradient(to bottom left, rgb(241, 236, 236), #d5dadf);
      /* background-image: linear-gradient(to bottom left, red, green); */
    }

    /* .card {
    margin-top: 80px;
} */
  </style>
</head>

<body class="grad">

  <div class="container" align="center">
    <div class="card bg-light shadow mb-5 bg-body rounded" style="max-width: 18rem;">
      <div class="card-header">
        <h2 class="card-title"> Login </h2>
      </div>
      <div class="card-body">
        <form action="login_v.php" method="post">
          <label for="mail" class="my-0">
            <h6>Email</h6>
          </label>
          <input type="text" id="m1" class="form-control mb-2" name="mail" style="text-align: left;" aria-describedby="emailHelp" value="<?php
                                                                                                                                          if (isset($_COOKIE['email'])) {
                                                                                                                                            echo $_COOKIE['email'];
                                                                                                                                          } ?>">

          <label for="pwd" class="mb-0">
            <h6>Password</h6>
          </label>

          <!-- Using icon inline -->
          <div class="input-group">
            <input type="password" id="pswd" class="form-control" name="pwd" value="<?php
                                                                                    if (isset($_COOKIE['password'])) {
                                                                                      echo $_COOKIE['password'];
                                                                                    }
                                                                                    ?>">
            <span class="input-group-text">
              <!-- <i class="far fa-eye-slash" id="eye" onclick="showHidePwd();"></i> -->
              <i class="far fa-eye-slash" id="hide" onclick="showHidePwd();"></i>
              <i class="far fa-eye" id="show" onclick="showHidePwd();"></i>
            </span>
          </div>
          <br>

          <input type="submit" class="btn btn-secondary" name="login" value="Sign In"> &nbsp; &nbsp;
          <label>
            <input name='rem' type="checkbox">&nbsp;Remember me
          </label>
          <hr>
          <label>Cannot log in?</label><br>
        </form>
        <a href="reg.php">
          <button type="submit" class="btn btn-primary">Register</button>
        </a>



      </div>
    </div>
  </div>
  <?php include('footer.php') ?>

  <script>
    function showHidePwd() {
      var x = document.getElementById("pswd");
      if (x.type === "password") {
        x.type = "text";
        document.getElementById("show").style.display = "inline-block";
        document.getElementById("hide").style.display = "none";
      } else {
        x.type = "password";
        document.getElementById("show").style.display = "none";
        document.getElementById("hide").style.display = "inline-block";
      }
    }
    /* function showHidePwd() {
        var input = document.getElementById("pswd");
        if (input.type === "password") {
            input.type = "text";
            document.getElementById("eye").className = "far fa-eye";
        } else {
            input.type = "password";
            document.getElementById("eye").className = "far fa-eye-slash";
        }
    } */
  </script>

</body>

</html>