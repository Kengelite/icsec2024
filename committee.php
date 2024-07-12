<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ICSEC2024
    </title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="icon" href="./assets/images/organnized/ICSEC.png" type="image/gif" sizes="16x16">
    <style>
        * {
            color: black;
        }

        .section-title {
            text-align: center;
        }

        .left-align {
            text-align: left;
        }

        /* Lower the text size of the name */
        .image-bio-container h4 {
            font-size: 18px;
            /* Adjust the size as needed */
        }

        /* Ensure proper alignment of the biography and the name */
        .biography {
            margin-top: 20px;
            /* Adjust this value as needed */
        }

        .image-container {
            width: 100%;
            /* Set the desired width */
            height: 100%;
            /* Set the desired height */
            overflow: hidden;
            /* Hide the overflowing part of the image */
            display: flex;
            /* Use flexbox */
            justify-content: center;
            /* Center horizontally */
            align-items: center;
            /* Center vertically */
            margin: auto;
            /* Center the container itself */
        }

        .image-container img {
            max-width: 100%;
            /* Ensure the image retains its aspect ratio */
            max-height: 100%;
            /* Ensure the image retains its aspect ratio */
            object-fit: cover;
            /* Crop the image to cover the container */
        }

        .footer-top {
            background-color: #032738;
            /* Dark blue color code */
        }

        .footer-bottom {
            background-color: #032738;
            /* Dark blue color code */
        }

        .text {
            display: inline-block;
            width: 100%;
            text-align: justify;
        }

        .text {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .left-align {
            text-align: left;
        }


        .justify {
            text-align: justify;
        }

        .two-columns {
            column-gap: 20px;
            /* ระยะห่างระหว่างคอลัมน์ */
        }

        /* สื่อการตอบสนองสำหรับหน้าจอคอมพิวเตอร์ */
        @media (min-width: 768px) {
            .two-columns {
                columns: 2;
                /* แบ่งเป็น 2 คอลัมน์ */
            }
        }
    </style>
</head>

<body data-bs-spy="scroll" data-bs-target=".navbar">

    <?php
    include './menu.php';
    ?>

    <!-- HERO -->
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3"
                aria-label="Slide 4"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="./assets/images/silde/bg1.png" class="d-block w-100" alt="...">
                <div class="carousel-caption d-flex flex-column h-100 align-items-center justify-content-center text-center">
                    <h2 style="color: white;">THE 28<sup style="color: white;">TH</sup> INTERNATIONAL COMPUTER SCIENCE AND ENGINEERING CONFERENCE 2024</h2>
                    <br>
                    <h3 style="color: white;">6-8 NOVEMBER 2024</h3>
                    <h3 style="color: white;">
                        PAPER SUBMISSION DEADLINE:
                        <span
                            style="color: #FF0000; text-decoration: line-through; background-color: rgba(255, 255, 255, 0.7);">12
                            JULY 2024</span><span style="color: #FF0000; background-color: rgba(255, 255, 255, 0.7);">
                            EXTENDED 26 JULY
                            2024</span>
                    </h3>
                </div>
            </div>
            <div class="carousel-item">
                <img src="./assets/images/silde/bg2.png" class="d-block w-100" alt="...">
                <div class="carousel-caption d-flex flex-column h-100 align-items-center justify-content-center text-center">
                    <h2 style="color: white;">THE 28<sup style="color: white;">TH</sup> INTERNATIONAL COMPUTER SCIENCE AND ENGINEERING CONFERENCE 2024</h2>
                    <br>
                    <h3 style="color: white;">6-8 NOVEMBER 2024</h3>
                    <h3 style="color: white;">
                        PAPER SUBMISSION DEADLINE:
                        <span
                            style="color: #FF0000; text-decoration: line-through; background-color: rgba(255, 255, 255, 0.7);">12
                            JULY 2024</span><span style="color: #FF0000; background-color: rgba(255, 255, 255, 0.7);">
                            EXTENDED 26 JULY
                            2024</span>
                    </h3>
                </div>
            </div>
            <div class="carousel-item">
                <img src="./assets/images/silde/bg3.png" class="d-block w-100" alt="...">
                <div class="carousel-caption d-flex flex-column h-100 align-items-center justify-content-center text-center">
                    <h2 style="color: white;">THE 28<sup style="color: white;">TH</sup> INTERNATIONAL COMPUTER SCIENCE AND ENGINEERING CONFERENCE 2024</h2>
                    <br>
                    <h3 style="color: white;">6-8 NOVEMBER 2024</h3>
                    <h3 style="color: white;">
                        PAPER SUBMISSION DEADLINE:
                        <span
                            style="color: #FF0000; text-decoration: line-through; background-color: rgba(255, 255, 255, 0.7);">12
                            JULY 2024</span><span style="color: #FF0000; background-color: rgba(255, 255, 255, 0.7);">
                            EXTENDED 26 JULY
                            2024</span>
                    </h3>
                </div>
            </div>
            <div class="carousel-item">
                <img src="./assets/images/silde/bg4.png" class="d-block w-100" alt="...">
                <div class="carousel-caption d-flex flex-column h-100 align-items-center justify-content-center text-center">
                    <h2 style="color: white;">THE 28<sup style="color: white;">TH</sup> INTERNATIONAL COMPUTER SCIENCE AND ENGINEERING CONFERENCE 2024</h2>
                    <br>
                    <h3 style="color: white;">6-8 NOVEMBER 2024</h3>
                    <h3 style="color: white;">
                        PAPER SUBMISSION DEADLINE:
                        <span
                            style="color: #FF0000; text-decoration: line-through; background-color: rgba(255, 255, 255, 0.7);">12
                            JULY 2024</span><span style="color: #FF0000; background-color: rgba(255, 255, 255, 0.7);">
                            EXTENDED 26 JULY
                            2024</span>
                    </h3>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <!-- Body -->
    <!-- Honorary -->
    <section id="Honorary" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center" data-aos="fade-down" data-aos-delay="50">
                    <div class="section-title">
                        <h1 class="display-4 fw-semibold">Honorary Committee</h1>
                        <div class="line"></div>
                        <ul class="left-align justify">
                            <li>Supavadee Aramvith<br>IEEE Thailand Section, Thailand</li>
                            <li>David Banjerdpongchai<br>ECTI Association, Thailand</li>
                            <li>Thanaruk Theeramunkong<br>Artificial Intelligence Association of Thailand (AIAT), Thailand</li>
                            <li>Chetneti Srisa-an<br>Council of IT Deans of Thailand (CITT), Thailand</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="about" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center" data-aos="fade-down" data-aos-delay="50">
                    <div class="section-title">
                        <h1 class="display-4 fw-semibold">International Advisory Committee</h1>
                        <div class="line"></div>
                        <ul class="left-align justify two-columns">
                            <li>Rajkumar Buyya<br>University of Melbourne, Australia</li>
                            <li>Ian F. Akyildiz<br>Georgia Institute of Technology, USA</li>
                            <li>Guang Bin Huang<br>Nanyang Technological University, Singapore</li>
                            <li>Tony Q.S. Quek<br>Singapore University of Technology and Design, Singapore</li>
                            <li>Pascal Bouvry<br>University of Luxembourg, Luxembourg</li>
                            <li>Keshav Dahal<br>University of the West of Scotland, Scotland</li>
                            <li>Mitsunori Makino<br>Chuo University, Japan</li>
                            <li>Susanto Rahardja<br>Institute for Infocomm Research, Singapore</li>
                            <li>Nguyen Gia Nhu<br>Duytan University, Vietnam</li>
                            <li>Dr-Ashish Khanna<br>Maharaja Agrasen Institute of Technology, India</li>
                            <li>Naito Tomoyuki<br>Kobe Institute of Computing, Japan</li>
                            <li>Feng Xia<br>RMIT University, Australia</li>
                            <li>Marcello M. Bonsangue<br>Leiden University, The Netherlands</li>
                            <li>Watanabe Katsumi<br>Waseda University, Japan</li>
                            <li>KC Santosh<br>University of South Dakota, USA</li>
                            <li>Zubair Baig<br>Deakin University, Australia</li>
                            <li>Joao L. Monteiro<br>University of Minho, Portugal</li>
                            <li>Le Hoang Son<br>Vietnam National University, Vietnam</li>
                            <li>Sudeep Tanwar<br>Nirma University, India</li>
                            <li>Herwig Unger<br>FernUniversität in Hagen, Germany</li>
                            <li>Abderrahim Benslimane<br>Avignon University, France</li>
                            <li>Sheng Lung Peng<br>National Taipei University of Business, Taiwan</li>
                            <li>Zhu Han<br>University of Houston, USA</li>
                            <li>Samee Ullah Khan<br>Mississippi State University, USA</li>
                            <li>Ali Kashif Bashir<br>Manchester Metropolitan University, United Kingdom</li>
                            <li>Stephane Bressan<br>National University of Singapore, Singapore</li>
                            <li>David Hoffman<br>Duke University, USA</li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <section id="Honorary" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center" data-aos="fade-down" data-aos-delay="50">
                    <div class="section-title">
                        <h1 class="display-4 fw-semibold">Advisory Committee</h1>
                        <div class="line"></div>
                        <ul class="left-align justify two-columns">
                            <li>Booncharoen Sirinaovakul<br>King Mongkutâ€™s University of Technology Thonburi, Thailand</li>
                            <li>Chai Wutiwiwatchai<br>National Electronics and Computer Technology Center, Thailand</li>
                            <li>Boonserm Kijsirikul<br>Chulalongkorn University, Thailand</li>
                            <li>Kanchana Kanchanasut<br>Asian Institute of Technology, Thailand</li>
                            <li>Peter Haddawy<br>Mahidol University, Thailand</li>
                            <li>Veera Boonjing<br>King Mongkut's Institute of Technology Ladkrabang, Thailand</li>
                            <li>Sukit Limpijumnong<br>National Science and Technology Development Agency (NSTDA), Thailand</li>
                            <li>Thepchai Supnithi<br>Artificial Intelligence Association of Thailand (AIAT), Thailand</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="Honorary" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center" data-aos="fade-down" data-aos-delay="50">
                    <div class="section-title">
                        <h1 class="display-4 fw-semibold">Steering Committee</h1>
                        <div class="line"></div>
                        <ul class="left-align justify two-columns">
                            <li>Anan Phonphoem<br>Kasetsart University, Thailand</li>
                            <li>Chidchanok Lursinsap<br>Chulalongkorn University, Thailand</li>
                            <li>Ekkarat Boonchieng<br>Chiang Mai University, Thailand</li>
                            <li>Kosin Chamnongthai<br>King Mongkut's University of Technology Thonburi, Thailand</li>
                            <li>Prabhas Chongsitvatana<br>Chulalongkorn University, Thailand</li>
                            <li>Prasong Praneepolgrang<br>Navaminda Kasatriyadhiraj Royal Thai Air Force Academy, Thailand</li>
                            <li>Punpiti Piamsa-nga<br>Kasetsart University, Thailand</li>
                            <li>Sartra Wongthanavasu<br>Khon Kaen University, Thailand</li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="Honorary" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center" data-aos="fade-down" data-aos-delay="50">
                    <div class="section-title">
                        <h1 class="display-4 fw-semibold">General Chair &amp; Co-Chair</h1>
                        <div class="line"></div>
                        <ul class="left-align justify">
                            <li>Sirapat Chiewchanwattana (Chair)<br>Khon Kaen University, Thailand</li>
                            <li>Ekkarat Boonchieng (Co-Chair)<br>Chiang Mai University, Thailand</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="Honorary" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center" data-aos="fade-down" data-aos-delay="50">
                    <div class="section-title">
                        <h1 class="display-4 fw-semibold">Technical Program Chair & Co-Chairs </h1>
                        <div class="line"></div>
                        <ul class="left-align justify">
                            <li>Khamron Sunat (Chair)<br>Khon Kaen University, Thailand</li>
                            <li>Chakchai So-In (Co-Chair)<br>IEEE Computer Society Chapter / Khon Kaen University, Thailand</li>
                            <li>Jan N. van Rijn (Co-Chair)<br>Leiden University, The Netherlands</li>
                            <li>Krisana Chinnasarn (Co-Chair)<br>IEEE Computer Society Chapter / Burapha University, Thailand</li>
                            <li>Dusit Niyato (Co-Chair)<br>Nanyang Technological University, Singapore</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="Honorary" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center" data-aos="fade-down" data-aos-delay="50">
                    <div class="section-title">
                        <h1 class="display-4 fw-semibold">Publication Chairs</h1>
                        <div class="line"></div>
                        <ul class="left-align justify">
                            <li>Aziz Nanthaamornphong<br>Prince of Songkla University, Thailand</li>
                            <li>Chanon Dechsupa<br>Khon Kaen University, Thailand</li>
                            <li>Somchai Chuan-Udom<br>Khon Kaen University, Thailand</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="Honorary" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center" data-aos="fade-down" data-aos-delay="50">
                    <div class="section-title">
                        <h1 class="display-4 fw-semibold">Publicity Chairs</h1>
                        <div class="line"></div>
                        <ul class="left-align justify">
                            <li>Sarun Apichontrakul<br>Khon Kaen University, Thailand</li>
                            <li>Kanda Runapongsa Saikaew<br>Khon Kaen University, Thailand</li>
                            <li>Panupong Wanjantuk<br>Khon Kaen University, Thailand</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="Honorary" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center" data-aos="fade-down" data-aos-delay="50">
                    <div class="section-title">
                        <h1 class="display-4 fw-semibold">Financial and Registration Chair</h1>
                        <div class="line"></div>
                        <ul class="left-align justify">
                            <li>Pusadee Seresangtakul<br>Khon Kaen University, Thailand</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="Honorary" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center" data-aos="fade-down" data-aos-delay="50">
                    <div class="section-title">
                        <h1 class="display-4 fw-semibold">Local Arrangement Chairs</h1>
                        <div class="line"></div>
                        <ul class="left-align justify">
                            <li>Monlica Wattana<br>Chair of Information Technology Program, Khon Kaen University, Thailand</li>
                            <li>Phet Aimtongkham<br>Chair of Cybersecurity Program, Khon Kaen University, Thailand</li>
                            <li>Wachirawut Tamviset<br>Chair of Computer Science Program, Khon Kaen University, Thailand</li>
                            <li>Praisan Padungweang<br>Chair of Artificial Intelligence Program, Khon Kaen University, Thailand</li>
                            <li>Urawan Chanket<br>Chair of Geo-informatics Program, Khon Kaen University, Thailand</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="Honorary" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center" data-aos="fade-down" data-aos-delay="50">
                    <div class="section-title">
                        <h1 class="display-4 fw-semibold">General Secretary</h1>
                        <div class="line"></div>
                        <ul class="left-align justify">
                            <li>Chitsutha Soomlek<br>Chair of Information Technology Program, Khon Kaen University, Thailand</li>
                            <li>Yanika Kongsorot<br>Chair of Cybersecurity Program, Khon Kaen University, Thailand</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Optional JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 800,
            once: true
        });
    </script>


    <?php
    include './footer.php';
    ?>


   
</body>

</html>