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
</head>
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

.image-bio-container {
    display: flex;
    flex-direction: column;
    justify-content: center;
    /* Center vertically */
    align-items: center;
    /* Center horizontally */
    text-align: center;
    /* Center text */
    height: 100%;
    /* Ensure container takes up full height */
}

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

.small-square {
    display: inline-block;
    width: 50px;
    height: 5px;
    background-color: #5054d4;
    vertical-align: middle;
    /* Adjusts vertical alignment to be centered with text */
    margin-right: 5px;
    /* Adds space between the square and the text */
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
</style>

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
                <div class="carousel-caption d-flex h-100 align-items-center justify-content-center">
                    <h2 style="color: white;">THE
                        28<sup style="color: white;">TH</sup> INTERNATIONAL COMPUTER SCIENCE AND ENGINEERING CONFERENCE
                        2024</span></h2>
                </div>
            </div>
            <div class="carousel-item">
                <img src="./assets/images/silde/bg2.png" class="d-block w-100" alt="...">
                <div class="carousel-caption d-flex h-100 align-items-center justify-content-center">
                    <h2 style="color: white;">THE
                        28<sup style="color: white;">TH</sup> INTERNATIONAL COMPUTER SCIENCE AND ENGINEERING CONFERENCE
                        2024</span></h2>
                </div>
            </div>
            <div class="carousel-item">
                <img src="./assets/images/silde/bg3.png" class="d-block w-100" alt="...">
                <div class="carousel-caption d-flex h-100 align-items-center justify-content-center">
                    <h2 style="color: white;">THE
                        28<sup style="color: white;">TH</sup> INTERNATIONAL COMPUTER SCIENCE AND ENGINEERING CONFERENCE
                        2024</span></h2>
                </div>
            </div>
            <div class="carousel-item">
                <img src="./assets/images/silde/bg4.png" class="d-block w-100" alt="...">
                <div class="carousel-caption d-flex h-100 align-items-center justify-content-center">
                    <h2 style="color: white;">THE
                        28<sup style="color: white;">TH</sup> INTERNATIONAL COMPUTER SCIENCE AND ENGINEERING CONFERENCE
                        2024</span></h2>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!-- ABOUT -->
    <section id="about" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center" data-aos="fade-down" data-aos-delay="50">
                    <h1 class="display-4 fw-semibold">Sustainable AI Computing: A Mathematical Perspective</h1>
                    <h5><span class="small-square"></span></h5>
                    <div class="line"></div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-md-12" data-aos="fade-up" data-aos-delay="300">
                    <h5>Abstract </h5>

                    <p class="text">The new wave of artificial intelligence is impacting industry, public life, and the
                        sciences in an unprecedented manner. However, one current major drawback is the lack of
                        reliability as well as the enormous energy problem.

                    </p> <br><br>
                    <p class="text"> The goal of this lecture is to first provide an introduction into this new vibrant
                        research
                        area. We will then present a mathematical perspective on the reliability and energy problem and
                        discuss novel research results in this realm, which reveal possibilities to overcome these
                        current limitations. This will lead us naturally to spiking neural networks and novel computing
                        hardware such as neuromorphic hardware for future AI computing. </p> <br><br>
                    ll on a standard set of benchmark functions.
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-md-4" data-aos="fade-right" data-aos-delay="100">
                    <div class="image-bio-container">
                        <div class="image-container">
                            <img src=".\assets\images\keynoteSpeaker\Baeck_Thomas.jpg" class="img-fluid"
                                alt="Peerapon Vateekul">
                        </div>
                    </div>
                </div>
                <div class="col-md-8 biography" data-aos="fade-left" data-aos-delay="200">
                    <h5><span style="font-size: 12px;">►</span> Brief Biography</h5>
                    <p class="text">Keynote Speaker
                        Prof. Dr. Gitta Kutyniok
                        Bavarian AI Chair for Mathematical Foundations of Artificial Intelligence, LMU Munich
                        Adjunct Professor for Machine Learning, University of Tromsø
                        Consultant, Institute for Robotics and Mechatronics, DLR-German Aerospace Center

                        LMU-Director, Konrad Zuse School of Excellence in Reliable AI.</p><br><br>

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