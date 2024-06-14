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
    </style>
</head>

<body data-bs-spy="scroll" data-bs-target=".navbar">

    <?php
    include './menu.php';
    ?>



    <!-- HERO -->
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="./assets/images/silde/bg1.png" class="d-block w-100" alt="...">
                <div class="carousel-caption d-flex h-100 align-items-center justify-content-center">
                    <h2 style="color: white;">TRANSPORTATION</h2>
                </div>
            </div>
            <div class="carousel-item">
                <img src="./assets/images/silde/bg2.png" class="d-block w-100" alt="...">
                <div class="carousel-caption d-flex h-100 align-items-center justify-content-center">
                    <h2 style="color: white;">TRANSPORTATION</h2>
                </div>
            </div>
            <div class="carousel-item">
                <img src="./assets/images/silde/bg3.png" class="d-block w-100" alt="...">
                <div class="carousel-caption d-flex h-100 align-items-center justify-content-center">
                    <h2 style="color: white;">TRANSPORTATION</h2>
                </div>
            </div>
            <div class="carousel-item">
                <img src="./assets/images/silde/bg4.png" class="d-block w-100" alt="...">
                <div class="carousel-caption d-flex h-100 align-items-center justify-content-center">
                    <h2 style="color: white;">TRANSPORTATION</h2>
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


    <!-- Modal -->
    <div class="modal fade" id="showcallforsupportus" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="showcallforsupportus" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Support Us</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img src="./assets/images/sponsorus.jpg" alt="" srcset="">
                </div>
                <div class="modal-footer">
                    <a type="button" class="btn btn-primary" target="_blank" href="https://drive.google.com/file/d/122fdTfBbD0QN1bvRtCPpIvuni6LgBux9/view" style="color: white;">dowload</a>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="showcallforSponsorship" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="showcallforSponsorship" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Sponsorship Form</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img src="./assets/images/supform.png" alt="" srcset="">
                </div>
                <div class="modal-footer">
                    <a type="button" class="btn btn-primary" target="_blank" href="https://drive.google.com/file/d/1chDsIkHevS52ziEZ_FhPwf5Nv9lDFg5w/view" style="color: white;">dowload</a>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="showcallforpaper" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="showcallforpaper" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel"></h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img src="./assets/images/organnized/icsec2024v4.jpg" alt="" srcset="">
                </div>
                <div class="modal-footer">
                    <a type="button" class="btn btn-primary" target="_blank" href="https://drive.google.com/file/d/1bBxnsS_qGDyS2jXqUZJSyYJes4R7Sy41/view" style="color: white;">dowload</a>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</body>

</html>