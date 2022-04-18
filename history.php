<?php
include('header.php');

session();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>History of Pharmacy, in BD</title>
    <style>
        .embed-responsive .embed-responsive-item,
        .embed-responsive iframe,
        .embed-responsive embed,
        .embed-responsive object,
        .embed-responsive video {
            left: 200px;
            width: 70%;
        }

        @media screen and (max-width:700px) {

            .embed-responsive .embed-responsive-item,
            .embed-responsive iframe,
            .embed-responsive embed,
            .embed-responsive object,
            .embed-responsive video {
                left: 90px;
                width: 80%;
                height: 100%;
            }
        }

        @media screen and (max-width:500px) {

            .embed-responsive .embed-responsive-item,
            .embed-responsive iframe,
            .embed-responsive embed,
            .embed-responsive object,
            .embed-responsive video {
                left: 70px;
                width: 70%;
                height: 110%;
            }
        }
    </style>


</head>

<body>
    <!-- <br><br><br> -->
    <div class="container-fluid">
        <!-- row 1 -->
        <div class="row">
            <h2 style="text-decoration: underline;">History of Pharmacy</h2>
            <div class="col-8-sm">
                <p id="para">
                    The beginnings of pharmacy are ancient. When the first person
                    expressed juice from a succulent leaf to apply to a wound, this
                    art was being practiced. In the Greek legend, Asclepius, the god
                    of the healing art, delegated to Hygieia the duty of compounding
                    his remedies. She was his apothecary or pharmacist. The
                    physician-priests of Egypt were divided into two classes: those
                    who visited the sick and those who remained in the temple and
                    prepared remedies for the patients.
                </p>
            </div>
            <p><b>Reference:</b><cite> Krantz, J. C. and Hartley, . Frank
                    (Invalid Date). pharmacy. Encyclopedia Britannica. Url:
                    <a href="https://www.britannica.com/science/pharmacy">
                        https://www.britannica.com/science/pharmacy</a></cite></p>
        </div>
        <div>
            <hr>
            <div class="row">
                <div>
                    <h4>PRESENT STATUS OF PHARMACY EDUCATION AND FUTURE
                        PROSPECTS AND CHALLENGE OF PHARMACY PRACTICE IN BANGLADESH</h4>
                    <p id="para">
                        Labu, Zubair. (2013). PRESENT STATUS OF PHARMACY EDUCATION AND FUTURE
                        PROSPECTS AND CHALLENGE OF PHARMACY PRACTICE IN BANGLADESH. 1. 1-9.
                        Pharmacy is a multidisciplinary subject composed of all aspects of drugs
                        including its manufacturing, synthesis, quality control and quality
                        assurance, marketing, handling, safety matters, patients care, invention,
                        and public awareness for the rational utilization of drugs, pharmaceutical
                        industry with its tremendous growth capacity has several job opportunities.
                        However, the graduates who pass out do not get employment easily due to their
                        poor training, lack of in depth knowledge of fundamental concepts and
                        practical skills. The enhanced number of out coming graduate Pharmacists
                        demands the need for opening the new job arenas in Bangladesh, but many
                        prospective fields of Pharmacy profession have not yet been introduced in our
                        country. Very recently, a few pharmacists have been employed as hospital
                        pharmacists in few highly reputed private hospitals. Hospital, community and
                        clinical pharmacy in Bangladesh have not been well developed due to lack of
                        government policy. Pharmacy education in Bangladesh started its journey in
                        1964 after the establishment of Department of Pharmacy in the University of
                        Dhaka. The first academic session (1964-1965) of the department began with 24
                        students, including 4 female students. Pharmacy as a profession was recognized
                        in Bangladesh after the Promulgation of Pharmacy Ordinance 1976. Initially,
                        the academic curriculum consisted of a 3-year Bachelor (Honors) and 1-year
                        Master of Pharmacy programs. Later on, the undergraduate program was upgraded
                        to 4-year Bachelor of Pharmacy (Honors) degree in 1996. In 2010, the
                        undergraduate course was further upgraded to 5-year with internship in
                        hospitals and pharmaceutical industries in order to cope with the
                        international Pharm. D. (Doctor of Pharmacy) program.
                    </p>
                </div>
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="pharmacy.pdf" allowfullscreen>
                    </iframe>
                </div>
                <!-- <embed src= "pharmacy.pdf" width= "500px" height= "700"> -->
            </div>
            <hr>
        </div>

        <button type="button" class="btn btn-secondary btn-floating btn-lg" id="btn-back-to-top">
            <i class="fas fa-chevron-circle-up"></i>
        </button>
    </div>
    <?php include('footer.php'); ?>

</body>

</html>