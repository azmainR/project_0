<?php
include('header.php');
include('testticker.php');

//session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Test Home Page</title>


    <!-- <link rel="stylesheet" href="2styles.css"> -->
    <link rel="stylesheet" href="slidestyle.css">

    <style>
        .center_img {
            display: block;
            margin-left: auto;
            margin-right: auto;
            max-width: 100%;
            /* height: 300px; */
        }
    </style>
    <script src="../chartsJS/Chart294.bundle.min.js"></script>
</head>

<body>



    <div id="slideR" class="row">

        <!-- <div class="slide-container">
  <img name="slide" style="width: 100%; height: 460px;">
</div> -->

        <div class="slider">
            <div class="slide active">
                <img src="../images/meds1.jpg" alt="med1">
                <!-- <div class="info">
          <h2>Winter Mountains</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </div> -->
            </div>
            <div class="slide">
                <img src="../images/meds2.jpg" alt="med2">
                <!-- <div class="info">
          <h2>Tropical Desert</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </div> -->
            </div>
            <div class="slide">
                <img src="../images/meds3.jpg" alt="med3">
                <!-- <div class="info">
          <h2>Steaming Volcanoes</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </div> -->
            </div>
            <div class="slide">
                <img src="../images/meds4.jpg" alt="med4">
                <!-- <div class="info">
          <h2>Mountain River</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </div> -->
            </div>
            <div class="navigation">
                <i class="fas fa-chevron-left prev-btn"></i>
                <i class="fas fa-chevron-right next-btn"></i>
            </div>
            <div class="navigation-visibility">
                <div class="slide-icon active"></div>
                <div class="slide-icon"></div>
                <div class="slide-icon"></div>
                <div class="slide-icon"></div>
            </div>
        </div>


    </div>


    <hr>

    <div class="container-fluid">
        <!-- row 1 -->
        <div class="row">
            <h2 style="text-decoration: underline;">Recent discoveries in
                Pharmacology</h2>
            <div class="col-sm-6">
                <h4><em>Vasudevan lab identifies novel means of improving sensitivity
                        and efficiency for PCR COVID testing</em></h4>
                <p id="para">
                    In collaboration with the infectious disease units at the John
                    Radcliffe and Churchill Hospitals, the Vasudevan lab has identified
                    a novel means of improving RT-qPCR sensitivity and efficiency for the
                    detection of SARS-CoV-2 through the concentration of pooled patient lysates.
                </p>
                <img class="center_img" src="../images/pharma1.png">
            </div>

            <div class="col-sm-6">
                <h4><em>New Garland/Dora group paper provides a novel mechanism for
                        the vasospasm underlying cardiovascular disease</em></h4>
                <p id="para">
                    The Vascular Pharmacology group has published a paper in
                    Hypertension showing that loss of nitric oxide production by
                    endothelial cells, a ubiquitous feature of cardiovascular disease,
                    raises the electrical excitability of arterial smooth muscle by
                    recruiting T-type voltage-gated calcium channels. This change
                    switches physiological vasomotion to pathological vasospasm.
                </p>
                <img class="center_img" src="../images/pharma3.jpg">
            </div>
            <hr>
            <!-- width="600px" height="300px" -->
            <div class="col-sm-12">
                <h4><em> Method to study interaction between sympathetic
                        nerves and heart muscle</em></h4>
                <img class="center_img" style="float:left;" src="../images/pharma4.jpg">
                <p id="para">
                    Research led by Associate Professor Rebecca Burton at Oxford,
                    together with Associate Professor Gil Bub at McGill University
                    (Canada) and Professor Emilia Entcheva at George Washington
                    University (USA), has demonstrated a purely optical method that
                    makes it possible to stimulate cells and to directly observe both
                    the effects of spatial distribution and functional connectivity
                    between neurons and heart muscle cells. This model system provides
                    a unique window into the relationship between the tissue health,
                    neuron density and the excitability of the heart muscle. These
                    insights are particularly relevant to understanding complications
                    that arise after damage to the heart tissue, such as potentially
                    lethal heart arrhythmias after a heart attack.
                </p>
                <br>
            </div>
            <div class="col-sm-12">
                <h4><em>A New Biomaker For Cardiovascular Diseases In Older
                        people</em></h4>
                <img class="center_img" style="float: right;" src="../images/pharma5.png">
                <p id="para">
                    Research led by Associate Professor Rebecca Burton at Oxford,
                    together with Associate Professor Gil Bub at McGill University
                    (Canada) and Professor Emilia Entcheva at George Washington
                    University (USA), has demonstrated a purely optical method that
                    makes it possible to stimulate cells and to directly observe both
                    the effects of spatial distribution and functional connectivity
                    between neurons and heart muscle cells. This model system provides
                    a unique window into the relationship between the tissue health,
                    neuron density and the excitability of the heart muscle. These
                    insights are particularly relevant to understanding complications
                    that arise after damage to the heart tissue, such as potentially
                    lethal heart arrhythmias after a heart attack.
                </p>
            </div>
            <p><b>Reference:</b><cite> University of Oxford-Department of Pharmacology(Medical
                    Sciences Division). <a href="https://www.pharm.ox.ac.uk/discoveries">
                        Recent Discoveries</a></cite>.</p>
            <hr>
        </div>
        <!-- row 2 -->
        <div class="row">
            <div class="col-sm-8">
                <h2 id="Chart Sample">Chart Sample</h2>
                <p id="para">The chart below shows the precipitation in Toronto.
                    It shows the precipitation in the year of 2016 and 2017, from
                    the months of Jun to Feb.
                </p>
                <div class="chart">
                    <canvas id="myChart" width="100" height="75"></canvas>
                </div>
                <figure>Toronto: Monthly rainfall</figure>
            </div>
            <div class="col-sm-4">
                <h2 id="History">History</h2>
                <p id="para">Increased summer rainfall in the High Canadian
                    Arctic is altering river hydrology and water quality,
                    transforming northern landscapes in a cascading and
                    multidimensional disruption brought by climate change,
                    according to new Canadian research.
                </p>
            </div>
        </div>
        <hr>
        <!-- row 3 -->
        <div class="row">
            <div class="col-sm-6">
                <h2 id="Consequences">Consequences</h2>
                <p id="para">Another important finding is that the increased
                    magnitude and frequency of rainfalls has a greater
                    control on the release of carbon from the watersheds
                    than permafrost disturbances, but that even small
                    permafrost disturbances are important, because they
                    effectively prime the landscape for accelerated
                    changes when future rainfall levels and stream
                    runoff are higher.
                    <i>(Submitted by Melissa Lafrenière)</i>
                </p>
            </div>
            <div class="col-sm-6">
                <h2 id="Quotes">Quotes</h2>
                <p id="para"> <cite>“In the lower parts of the Arctic or if you're
                        in the south you don't think of rainfall as being
                        very important but the further north you get, the
                        less frequent rainfall gets and the result is that
                        its role in rivers and river flows is quite small,”</cite>
                    Lamoureux told Radio Canada International.
                    <br><br>
                    <cite>“But what this work shows – and we extended this
                        analysis to other rivers around the Arctic – is
                        that there is an increase in frequency of summer
                        rainfall and so much so that in some years rainfall
                        is the dominant mechanism for generating river flow,
                        compared to most years when snowmelt is the dominant
                        mechanism.”</cite>
                </p>
            </div>
        </div>
        <!-- <hr> -->


    </div>

    </div>


    <button type="button" class="btn btn-secondary btn-floating btn-lg" id="btn-back-to-top">
        <i class="fas fa-chevron-circle-up"></i>
    </button>

    <?php include('footer.php'); ?>

    <!-- JS -->

    <!-- <script src="../chartsJS/Chart294.bundle.min.js"></script> -->

    <script src="2scripts.js"></script>

    <script src="slider.js"></script>

</body>

</html>