<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Keynote Speaker</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="./assets/css/style.css">

    <link rel="stylesheet" href="style.css">

    <style>
    * {
        color: black;
    }

    .text {
        color: rgb(255, 255, 255);
        font-size: 15px;
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        /* text-align: center; */
        padding: 20px;
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


    <div class="container">
        <div class="row">

            <section id="ORGANIZED BY" class="section-padding">
                <div class="col-12 text-center" data-aos="fade-down" data-aos-delay="150">
                    <div class="section-title">
                        <h1 class="display-4 fw-semibold">KEYNOTE SPEAKER</h1>
                        <div class="line"></div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <div class="card image-card">
                            <img src="assets\images\keynoteSpeaker\DusitNiyato2.jpeg" class="card-img-top" alt="Image">

                            <div class="overlay">
                                <div class="text">
                                    <h5 style="color: white;">Professor Dusit Niyato</h5>
                                    <h5 style="color: white;">Ph.D., IEEE Fellow, IET Fellow</h5><br>
                                    <p style="color: white;">President's Chair Professor in Computer Science and
                                        Engineering School of
                                        Computer
                                        Science and Engineering (SCSE), Nanyang Technological University, Singapore.
                                    </p>
                                    <a href="https://personal.ntu.edu.sg/dniyato/" class="btn btn-primary"
                                        target="_blank">View Profile</a>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card image-card">
                            <img src="assets\images\keynoteSpeaker\ThomasBack2.jpeg" class="card-img-top" alt="Image">

                            <div class="overlay">
                                <div class="text">
                                    <h5 style="color: white;">Professor Thomas Bäck</h5>
                                    <h5 style="color: white;">Ph.D., IEEE Fellow</h5><br>
                                    <p style="color: white;">Leiden Institute of Advanced Computer Science (LIACS),
                                        Leiden University,
                                        Netherlands.
                                    </p>
                                    <a href="https://www.universiteitleiden.nl/en/staffmembers/thomas-back#tab-2"
                                        class="btn btn-primary" target="_blank">View Profile</a>
                                    <a href="keynote_abstract.php" class="btn btn-primary">Abstract</a>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card image-card">
                            <img src="assets\images\keynoteSpeaker\GittaKutyniok.jpeg" class="card-img-top" alt="Image">

                            <div class="overlay">
                                <div class="text">
                                    <h5 style="color: white;">Professor Gitta Kutyniok</h5>
                                    <h5 style="color: white;">Ph.D., IEEE Fellow</h5><br>
                                    <p style="color: white;">Ludwig-Maximilians Universität München.
                                    </p>
                                    <!-- keynot_ab_gitta.php -->
                                    <a href="https://www.ai.math.uni-muenchen.de/members/professor/kutyniok/index.html"
                                        class="btn btn-primary" target="_blank">View Profile</a>
                                    <a href="keynot_ab_gitta.php" class="btn btn-primary">Abstract</a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </section>
        </div>
    </div>


    <?php
    include './footer.php';
    ?>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script src="./assets/js/main.js"></script>

    <script>
    document.addEventListener('DOMContentLoaded', function() {
        const imageCards = document.querySelectorAll('.image-card');

        imageCards.forEach(card => {
            const overlay = card.querySelector('.overlay');
            const text = card.querySelector('.text');

            card.addEventListener('mouseover', () => {
                const textHeight = text.offsetHeight;
                overlay.style.height = `${textHeight}px`;
            });

            card.addEventListener('mouseleave', () => {
                overlay.style.height = '0';
            });
        });
    });
    </script>
</body>

</html>