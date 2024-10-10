<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ICSEC 2024</title>
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

    .carousel-item img {
        width: 600px;
        /* กำหนดความกว้างของภาพ */
        height: 400px;
        /* กำหนดความสูงของภาพ */
        object-fit: cover;
        /* ปรับภาพให้ครอบคลุมพื้นที่ */
    }

    #carouselExampleIndicators {
        position: relative;
        z-index: 0;
    }

    @media (max-width: 1200px) {
        .carousel-caption h2 {
            font-size: 1.75rem;
        }

        .carousel-caption h5 {
            font-size: 1rem;
        }
    }

    @media (max-width: 992px) {
        .carousel-caption h2 {
            font-size: 1.5rem;
        }

        .carousel-caption h5 {
            font-size: 0.875rem;
        }
    }

    @media (max-width: 768px) {
        .carousel-caption h2 {
            font-size: 1.25rem;
        }

        .carousel-caption h5 {
            font-size: 0.75rem;
        }
    }

    @media (max-width: 576px) {
        .carousel-caption h2 {
            font-size: 1rem;
        }

        .carousel-caption h5 {
            font-size: 0.625rem;
        }
    }

    @media (max-width: 768px) {
        .carousel-caption h5 span:nth-child(2) {
            display: block;
        }
    }
    </style>
</head>

<body data-bs-spy="scroll" data-bs-target=".navbar">

    <?php
   include './menu.php';
   ?>

    <!-- HERO -->
    <?php
   include './slide.php';
   ?>


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
                <div class="col-lg-6" data-aos="fade-right">
                    <!-- ข้อความข้างๆรูปภาพ -->
                    <h2>Pullman Khon Kaen Raja Orchid</h2>
                    <p class="about-text" style="text-align: justify;">
                          Pullman Khon Kaen Raja Orchid, an international premium branded hotel at the city center.
                        10-minute
                        drive from Airport. A short walk to Central Plaza Khon Kaen, food streets & Ton Tann Night
                        Market.
                        293 Wifi connected rooms & suites with separate shower & tub starting room size 43 sqm. 2
                        restaurants, 2 bars, 14 meeting rooms (ballroom 1,400 sqm), a fitness, a day spa & an outdoor
                        pool.
                        Khon Kaen University, Khon Kaen Ram & Bangkok Hospital made Khon Kaen known as an education,
                        medical
                        & wellness hub.
                        <br>
                          Situated in the central business district, close to shopping centres – Tuk Com (IT Mall &
                        Department
                        Store), Central Plaza Khon Kaen as well as several banks and hospitals. Easily accessible from
                        the
                        Khon Kaen Railway Station as well as the bus stations. Lake Park, and also a 10 minute drive to
                        government offices and Khon Kaen University. The hotel is also easily accessible from the Khon
                        Kaen
                        Railway Station as well as the bus stations. There is several flights from and to Bangkok daily.
                        <br>
                          The Pullman Khon Kaen Raja Orchid is located in the city centre, a 10 minute drive from the
                        Khon
                        Kaen airport and just a short walking distance to shopping malls.
                        <span class="ms-3">
                            To request the conference discount rate from Pullman Khon Kaen Raja Orchid, please fill the
                            form <a href="./assets/pdf/Pullman Khon Kaen Raja Orchid Hotel.pdf" download><u
                                    style="color:blue;">download form</u></a>
                            and contact
                            <a href="mailto:rsvn@pullmankhonkaen.com">rsvn@pullmankhonkaen.com</a>
                            or call the hotel at 043-913333.
                        </span>
                    </p>

                </div>
                <div class="col-lg-6">
                    <div id="myCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel"
                        data-aos="fade-left">
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
                        <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#myCarousel"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>


            <!-- kosa -->
            <div class="row mt-5">
                <div class="col-lg-6">
                    <div id="myKosa" class="carousel slide carousel-fade" data-bs-ride="carousel" data-aos="fade-right">
                        <div class="carousel-inner" data-bs-interval="50">
                            <div class="carousel-item active">
                                <img src="./assets/images/kosa/kosa5.jpg" class="d-block " alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="./assets/images/kosa/kosa2.jpg" class="d-block " alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="./assets/images/kosa/kosa3.jpg" class="d-block " alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="./assets/images/kosa/kosa4.jpeg" class="d-block " alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="./assets/images/kosa/kosa1.jpg" class="d-block " alt="...">
                            </div>

                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#myKosa"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#myKosa"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-left">
                    <!-- ข้อความข้างๆรูปภาพ -->
                    <h2>Kosa Hotel Khon Kaen</h2>
                    <p class="about-text" style="text-align: justify;">
                        <span class="ms-3">
                            For over 50 years.
                            The Kosa Hotel is not only a residence for Kong Jing tourists.
                            But we are committed to becoming a part of the economic and social development of Northeast
                            China.
                        </span>

                        <br>
                        <span class="ms-3">
                            Currently, Kongjing is known as a center for commerce, education, healthcare, and other
                            fields.
                            Northeast Thailand and Mekong River
                            The Kosa Hotel is located in the center of Kongjing city.
                        </span>
                        <br>
                        <span class="ms-3">
                            Northeast region Close to communities, shopping centers, universities, and hospitals
                            Whether you are for business or leisure, departing from the hotel
                            Going to Kong Jing's destination is both fast and convenient.
                        </span>
                        <br>
                        <span class="ms-3">
                            Warm and comfortable service team
                            We believe that you will be satisfied throughout your entire stay.
                        </span>
                        <span class="ms-3">
                            To request the conference discount rate from Kosa Hotel Khon Kaen please check the
                            information <a href="./assets/pdf/Kosa Hotel Hotel.pdf" download><u
                                    style="color:blue;">download
                                    form</u></a>
                            and contact
                            <a href="mailto:reservations@kosahotel.com">reservations@kosahotel.com</a>
                            or call the hotel at +6643 320 320 or +6683 357 7171 .
                        </span>
                    </p>
                </div>
            </div>




            <!-- Charoen Thani Hotel -->
            <div class="row mt-5">

                <div class="col-lg-6" data-aos="fade-left">
                    <!-- ข้อความข้างๆรูปภาพ -->
                    <h2>Charoen Thani Hotel Khon Kaen</h2>
                    <p class="about-text" style="text-align: justify;">
                        <span class="ms-3">
                            Charoen Thani Khon Kaen Hotel is only 12 kilometers away from Khon Kaan International
                            Airport. This 19 story hotel has a total of 320 rooms equipped with modern facilities. All
                            rooms are exquisitely decorated. Non smoking rooms, air conditioning, bathrobes, writing
                            desk, hair dryer, WiFi, in room safe, TV, elevator, coffee shop (cafe), bar,
                            laundry cleaning service, meeting room, nightclub, restaurant On the first floor, there
                            are leisure activities such as massage, massage bathtub, fitness center, sauna, spa center,
                            outdoor swimming pool, etc. This hotel places great emphasis on customers' feelings, so you
                            can rest assured of comfort and relaxation.
                        </span>
                        <br>

                        <span class="ms-3">
                            To get the conference discount rate at Charoen Thani Hotel Khon Kaen, please download the <a
                                href="./assets/pdf/Charoen Thani Hotel Khon Kaen - ICSEC 2024 (6-8 Nov.2024).pdf"
                                download><u style="color:blue;">reservation form</u></a> and contact the hotel at <a
                                href="mailto:rsvn@charoenthanikhonkaen.com">rsvn@charoenthanikhonkaen.com</a> or call
                            +66 4322 0400 14.
                        </span>

                    </p>
                </div>
                <div class="col-lg-6">
                    <div id="charoenthani" class="carousel slide carousel-fade" data-bs-ride="carousel"
                        data-aos="fade-right">
                        <div class="carousel-inner" data-bs-interval="50">
                            <div class="carousel-item active">
                                <img src="https://api.tourismthailand.org/upload/live/business_content_main_image_mobile/11838/P02000094_1.jpeg"
                                    class="d-block " alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="https://hotelimg.lowestfare.com.hk/c/1466/1466908/Image/44897_15072414310032971062.jpg" class="d-block " alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="https://hotelimg.lowestfare.com.hk/c/1466/1466908/Image/44897_15072414310032971086.jpg" class="d-block " alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="https://www.kayak.co.th/rimg/himg/23/ec/b2/expediav2-95845-f2fa02-438955.jpg?width=1366&height=768&crop=true" class="d-block " alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="https://lh3.googleusercontent.com/Bu69jlDS1gJsbe7Ue3ybTVay5zuAAzkYdWcl3ykrtNL7C9ehZI6Gn8_W26bU6na7ac1HIdHJKmW7l-r3iO0CuyYrcKbA7QmWNf1CHw=w984-h656-l80-e31" class="d-block " alt="...">
                            </div>

                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#charoenthani"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#charoenthani"
                            data-bs-slide="next">
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