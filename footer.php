<?php
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        footer {
            margin-left: -50px;
            box-shadow: 0 0 20px;
        }

        a.fa-brands {
            padding: 2px 20px;
            font-size: 30px;
            width: 20px;
            text-align: center;
            text-decoration: none;
            color: grey;
        }

        .fa-facebook:hover {
            color: #3b5998;
        }

        .fa-twitter:hover {
            color: #00acee;
        }

        .fa-linkedin:hover {
            color: #0072b1;
        }

        .fa-youtube:hover {
            color: #FF0000;
        }

        .fa-wikipedia-w:hover {
            color: #3D393A;
        }

        .brdr_btm {
            font-size: 1.1rem;
            border-top: 2px solid #a7acb1;
        }
    </style>
</head>

<body>
    <footer class="text-center">
        <hr>
        <div style="padding-bottom: 1rem !important;" class="pb-2">
            <!-- <span class="brdr_btm">Developed under ACME IT &copy; 2021 - </span>
            <span class="brdr_btm" id="cur_year"></span> -->
            <div align="center">
                <!--  id="left" -->
                <span>
                    <a href="https://www.facebook.com/ACMELabLtd/" target="__blank" class="fa-brands fa-facebook"></a>
                    <a href="https://www.twitter.com" target="__blank" class="fa-brands fa-twitter"></a>
                    <a href="https://wikipedia.org/wiki/ACME_Laboratories" target="__blank" class="fa-brands fa-wikipedia-w"></a>
                    <a href="https://linkedin.com/company/the-acme-lab-ltd" target="__blank" class="fa-brands fa-linkedin"></a>
                    <a href="https://www.youtube.com" target="__blank" class="fa-brands fa-youtube"></a>
                </span>
            </div>
            <div>
                <span class="brdr_btm">Developed under ACME IT &copy; 2021 - </span>
                <span class="brdr_btm" id="cur_year"></span>
            </div>
        </div>
        <script>
            var date = new Date();
            //Day represents [0-6]-index of the week where 0->Sunday.
            //Date represents the numeric day of the week or month (1-31).
            var year = date.getFullYear();
            document.getElementById("cur_year").innerHTML = year;
        </script>

    </footer>
</body>

</html>