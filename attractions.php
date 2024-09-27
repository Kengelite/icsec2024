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
        *{
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
            font-size: 18px; /* Adjust the size as needed */
        }

        /* Ensure proper alignment of the biography and the name */
        .biography {
            margin-top: 20px; /* Adjust this value as needed */
        }

        .image-container {
            width: 100%; /* Set the desired width */
            height: 100%; /* Set the desired height */
            overflow: hidden; /* Hide the overflowing part of the image */
            display: flex; /* Use flexbox */
            justify-content: center; /* Center horizontally */
            align-items: center; /* Center vertically */
            margin: auto; /* Center the container itself */
        }

        .image-container img {
            max-width: 100%; /* Ensure the image retains its aspect ratio */
            max-height: 100%; /* Ensure the image retains its aspect ratio */
            object-fit: cover; /* Crop the image to cover the container */
        }
        .footer-top {
    background-color: #032738; /* Dark blue color code */
}
.footer-bottom {
    background-color: #032738; /* Dark blue color code */
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
                        <h1 class="display-4 fw-semibold">ATTRACTION</h1>
                        <div class="line"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <!-- ข้อความข้างๆรูปภาพ -->
                    <h2>Phra Mahathat Kaen Nakhon</h2>
                    <p class="about-text" style="text-align: justify;">
                      Phra Mahathat Kaen Nakhon or Phra That Kao Chan is a reinforced concrete building made of brick and
                        cement. It has a pagoda-shaped top. At the top of the pagoda you can see views of Bueng Kaen Nakhon
                        and Khon Kaen city. Phra That Kaen Nakhon is 80 meters high with 4 Phra Chulathat located at 4
                        corners and surrounded by a 7-headed Naga glass wall. It is an art form of the Dvaravati period.
                        Mixing Indochina arts Inside the Phra That there are 9 floors. And inside the floor will be covered
                        with marble.
                        <br>
                          Tourists can visit inside. Phra Mahathat Kaen Nakhon has a total of 9 floors, with every floor
                        having different beauty and interest. The top floor will house the Buddha's relics. For example, the
                        first floor will be interesting. It looks like an auditorium. There are 4 main Buddha images
                        enshrined.
                    </p>
                </div>
                <div class="col-lg-6">
                    <div id="myCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
                        <div class="carousel-inner" data-bs-interval="50">
                            <div class="carousel-item active">
                                <img src="./assets/images/PraMahathatKaenNakhon.jpg" class="d-block " alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="./assets/images/PraMahathatKaenNakhon2.jpg" class="d-block " alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="./assets/images/PraMahathatKaenNakhon3.jpg" class="d-block " alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="./assets/images/PraMahathatKaenNakhon4.jpg" class="d-block " alt="...">
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
            <br><br>
            <div class="row">
                <div class="col-lg-6">
                    <div id="myCarousel2" class="carousel slide carousel-fade" data-bs-ride="carousel">
                        <div class="carousel-inner" data-bs-interval="50">
                            <div class="carousel-item active">
                                <img src="./assets/images/Phutthabat.jpg" class="d-block " alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="./assets/images/Phutthabat2.jpg" class="d-block " alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="./assets/images/Phutthabat3.jpg" class="d-block " alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="./assets/images/Phutthabat4.jpg" class="d-block " alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="./assets/images/Phutthabat5.jpg" class="d-block " alt="...">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel2"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#myCarousel2"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
                <div class="col-lg-6">
                    <!-- ข้อความข้างๆรูปภาพ -->
                    <h2 class="about-text">Wat Phra Phutthabat Phu Phan Kham</h2>
                    <p class="about-text" style="text-align: justify;">
                      Wat Phra Phutthabat Phu Phan Kham It is a temple located on the top of Phu Phan Kham Mountain. To go
                        up to worship Luang Pho Khao which is enshrined on the top of Phu Phan Kham mountain. You have to
                        walk up 1049 steps. It is a test of your willpower, faith, and determination in conquering the
                        Phuphan Kham Mountain. At the entrance to the stairs is a 7-headed Nagarat statue with a pipe all
                        the way to the top. Along the path there are lush green trees.
                        <br>
                          Wat Phra Phutthabat Phu Phan Kham It is one of the temples located on a mountain that has one of the
                        largest Buddha statues in Khon Kaen Province, Phra Buddha Uttaramahamongkol Ubon Ratchathani.
                        Villagers often call him Luang Pho Khao or Luang Pho Phu Phan Kham. Big white Buddha statue The
                        monks rested in admiration. People flock to worship and pray for blessings and prosperity in life.
                        There are not many. In the area below Luang Por Khao, there are still places of worship. Let's make
                        a wish too.
    
                    </p>
                </div>
            </div>
            <br><br>
            <div class="row">
                <div class="col-lg-6">
                    <!-- ข้อความข้างๆรูปภาพ -->
                    <h2>Ton Tann Green Market</h2>
                    <p class="about-text" style="text-align: justify;">
                      Check out this cool new shopping spot in Khon Kaen! It's all about creating a chill vibe, perfect
                        for those post-work evenings. Imagine a place where art lovers, collectors, and inventors can hang
                        out and showcase their stuff. They've got storytelling sessions, drama performances, dance shows,
                        photography exhibits, and even street performances. It's not just about shopping; it's a cool space
                        for people with similar interests to connect. Classic car and big bike crews often drop by to flaunt
                        their wheels and swap ideas. If you're into a laid-back shopping scene and good vibes, this is the
                        spot for you!
    
                    </p>
                </div>
                <div class="col-lg-6">
                    <div id="myCarousel3" class="carousel slide carousel-fade" data-bs-ride="carousel">
                        <div class="carousel-inner" data-bs-interval="50">
                            <div class="carousel-item active">
                                <img src="./assets/images/tontan.jpg" class="d-block " alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="./assets/images/tontan2.jpg" class="d-block " alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="./assets/images/tontan3.jpg" class="d-block " alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="./assets/images/tontan4.jpg" class="d-block " alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="./assets/images/tontan5.jpg" class="d-block " alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="./assets/images/tontan6.jpg" class="d-block " alt="...">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel3"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#myCarousel3"
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
