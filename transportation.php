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
</head><body data-bs-spy="scroll" data-bs-target=".navbar">

<?php
include './menu.php';
?>

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
                        <h1 class="display-4 fw-semibold">TRANSPORTATION</h1>
                        <div class="line"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <!-- ข้อความข้างๆรูปภาพ -->
                    <h2>Khon Kaen International Airport</h2>
                    <p class="about-text" style="text-align: justify;">
                          The airport has seen an annual growth rate of 20 percent annually since 2013, handling around two
                        million passengers in 2017. The Department of Airports (DOA) has signed a memorandum of
                        understanding (MOU) to upgrade Khon Kaen Airport by 2021. The two billion baht project will increase
                        passenger capacity from 2.8 million to five million per year. The terminal will be expanded from
                        16,500 m2 to 44,500 m2 to accommodate 1,000–2,000 passengers per hour.
                    </p>
                </div>
                <div class="col-lg-6">
                    <div id="myCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
                        <div class="carousel-inner" data-bs-interval="50">
                            <div class="carousel-item active">
                                <img src="./assets/images/Airport1.png" class="d-block " alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="./assets/images/Airport2.png" class="d-block " alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="./assets/images/Airport3.png" class="d-block " alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="./assets/images/Airport4.png" class="d-block " alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="./assets/images/Airport5.png" class="d-block " alt="...">
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
            <div class="row">
                <div class="col-lg-6">
                    <div id="myCarousel2" class="carousel slide carousel-fade" data-bs-ride="carousel">
                        <div class="carousel-inner" data-bs-interval="50">
                            <div class="carousel-item active">
                                <img src="./assets/images/railway1.png" class="d-block " alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="./assets/images/railway2.png" class="d-block " alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="./assets/images/railway3.png" class="d-block " alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="./assets/images/railway4.png" class="d-block " alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="./assets/images/railway5.png" class="d-block " alt="...">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel2" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#myCarousel2" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
                <div class="col-lg-6">
                    <!-- ข้อความข้างๆรูปภาพ -->
                    <h2 class="about-text">Khon Kaen Railway Station</h2>
                    <p class="about-text" style="text-align: justify;">
                          Khon Kaen railway station is a railway station located in Nai Mueang Subdistrict, Khon Kaen City,
                        Khon Kaen. It is a class 1 railway station located 449.752 km (279.5 mi) from Bangkok railway
                        station. The station opened on April 1, 1933, as part of the Northeastern Line Nakhon
                        Ratchasima–Khon Kaen section. On June 24, 1941, the line extended to Udon Thani. The station was
                        rebuilt as the first elevated station of Northeastern region in 2019, with the Thanon Chira
                        Junction–Khon Kaen double-track railway project.
                    </p>
                </div>
            </div>
            <br><br>
            <div class="row">
                <div class="col-lg-6">
                    <!-- ข้อความข้างๆรูปภาพ -->
                    <h2>Bus Terminal no.3 Khon Kaen</h2>
                    <p class="about-text" style="text-align: justify;">
                          The 3rd Provincial Bus Terminal of Khon Kaen, also known as "BKS 3," is a well-known transportation
                        hub. It is considered one of the most modern and less congested bus terminals because it is located
                        approximately 8 kilometers away from the city center. The 3rd Provincial Bus Terminal of Khon Kaen
                        provides long-distance bus services to various destinations, including Bangkok to Khon Kaen and
                        Chiang Mai to Khon Kaen. Additionally, it offers direct bus services from Khon Kaen to Vientiane,
                        the capital of Laos.
                    </p>
                </div>
                <div class="col-lg-6">
                    <div id="myCarousel3" class="carousel slide carousel-fade" data-bs-ride="carousel">
                        <div class="carousel-inner" data-bs-interval="50">
                            <div class="carousel-item active">
                                <img src="./assets/images/terminal1.png" class="d-block " alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="./assets/images/terminal2.png" class="d-block " alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="./assets/images/terminal3.png" class="d-block " alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="./assets/images/terminal4.png" class="d-block " alt="...">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel3" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#myCarousel3" data-bs-slide="next">
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