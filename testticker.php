<!DOCTYPE html>
<html lang="en">
    <head>
    <link rel="stylesheet" href="../newsticker1/dist/css/jquery.jConveyorTicker.min.css">
    

    <style>
        .container {margin-top: 62px; max-width: 100%; max-height: fit-content;}
        .wrap{
            width: 100%;
            white-space: nowrap;
            overflow: hidden;
            font-size: 0;
            background: #fff;
            border-radius: 3px;
            box-shadow: inset 0 0 7px rgba(69, 78, 140,0.5);
        }
        /* .jctkr-wrapper a {
            text-decoration: none;
        } */
        .jctkr-label{
            vertical-align:middle;
            height: 5px;
            padding: 0 17px;
            line-height: 20px;
            /* background: rgba(69, 78, 140,0.7); */
            /* font-style: italic; */
            font-size: 19px;
            /* color: #fff;
            text-shadow: 0 1px 2px rgba(69, 78, 140,1); */
            cursor: default;
        }
       /*  .jctkr-label:hover{
            background: rgba(69, 78, 140,0.9);
        } */
            [class*="js-conveyor-"] ul{
            display: inline-block;
            opacity: 0.5;
        }
            [class*="js-conveyor-"] ul li{
            padding: 0 10px;
            line-height: 10px;
            font-size: 16px;
        }
    </style>
  


    </head>
    <body>
    <!-- <p id="datetime"></p> -->
        <div class="container">
        <div class="wrap">
        <div class="jctkr-label">
            <p id="datetime"></p>
        </div>
        <div class="ticker1 jctkr-wrapper jctkr-initialized">
        <ul>
        <li>
            <span><a href="https://www.google.com">Use the link to go to Google</a></span> &nbsp;
            <span><a href="https://www.yahoo.com">Use the link to go to Yahoo</a></span> &nbsp;
            <span><a href="https://www.outlook.com">Use the link to go to Outlook</a></span> &nbsp;
            <span><a href="https://www.warframe.com">Use the link to be a Tenno</a></span> &nbsp;
            <span><a href="https://www.steam.com">Use the link to go to ...</a></span> &nbsp;
            <span><a href="https://www.steampowered.com">Use the link to buy GAMES!!!</a></span> &nbsp;
            <span><a href="https://www.ubisoft.com">Use the link to play as Assassins</a></span> &nbsp;
            <span><a href="https://www.acmeglobal.com">Use the link to go to ACME!</a></span> &nbsp;
        </li>
        </ul>
        </div>
        </div>
        </div>
        
        <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> -->
        <script src="../newsticker1/dist/js/jquery.jConveyorTicker.min.js"></script>

        <script>
        $(function(){
            $('.ticker1').jConveyorTicker();
        });
        </script>
    

        
    </body>
</html>