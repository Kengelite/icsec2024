<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Elixir - Bootstrap Template</title>
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

        .carousel-item,
        .carousel-caption {
            z-index: 1;
        }

        #carouselExampleIndicators {
            position: relative;
            z-index: 0;
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
    <!-- ABOUT -->
    <section id="about" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center" data-aos="fade-down" data-aos-delay="50">
                    <div class="section-title">
                        <h1 class="display-4 fw-semibold">ACCOMMODATION</h1>
                        <div class="line"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <!-- ข้อความข้างๆรูปภาพ -->
                    <h2>Pullman Khon Kaen Raja Orchid</h2>
                    <p class="about-text" style="text-align: justify;">
                          Pullman Khon Kaen Raja Orchid, an international premium branded hotel at the city center.
                        10-minute
                        drive from Airport. A short walk to Central Plaza Khon Kaen, food streets & Ton Tann Night Market.
                        293 Wifi connected rooms & suites with separate shower & tub starting room size 43 sqm. 2
                        restaurants, 2 bars, 14 meeting rooms (ballroom 1,400 sqm), a fitness, a day spa & an outdoor pool.
                        Khon Kaen University, Khon Kaen Ram & Bangkok Hospital made Khon Kaen known as an education, medical
                        & wellness hub.
                        <br>
                          Situated in the central business district, close to shopping centres – Tuk Com (IT Mall &
                        Department
                        Store), Central Plaza Khon Kaen as well as several banks and hospitals. Easily accessible from the
                        Khon Kaen Railway Station as well as the bus stations. Lake Park, and also a 10 minute drive to
                        government offices and Khon Kaen University. The hotel is also easily accessible from the Khon Kaen
                        Railway Station as well as the bus stations. There is several flights from and to Bangkok daily.
                        <br>
                          The Pullman Khon Kaen Raja Orchid is located in the city centre, a 10 minute drive from the Khon
                        Kaen airport and just a short walking distance to shopping malls.
                    </p>
                </div>
                <div class="col-lg-6">
                    <div id="myCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
                        <div class="carousel-inner" data-bs-interval="50">
                            <div class="carousel-item active">
                                <img src="./assets/images/pullman.jpg" class="d-block " alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="./assets/images/pullman1.jpg" class="d-block " alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="./assets/images/pullman2.jpg" class="d-block " alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="./assets/images/pullman3.jpg" class="d-block " alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="./assets/images/pullman4.jpg" class="d-block " alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="./assets/images/pullman5.jpg" class="d-block " alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="./assets/images/pullman6.jpg" class="d-block " alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="./assets/images/pullman7.jpg" class="d-block " alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="./assets/images/pullman8.jpg" class="d-block " alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="./assets/images/pullman9.jpg" class="d-block " alt="...">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
            <br><br>
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