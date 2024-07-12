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

    <!-- ABOUT -->
    <section id="about" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center" data-aos="fade-down" data-aos-delay="50">
                    <style>
                        h1 {
                            color: #000000;
                        }

                        table {
                            width: 100%;
                            border-collapse: collapse;
                            margin-top: 20px;
                        }

                        th,
                        td {
                            padding: 10px;
                            text-align: left;
                            border-bottom: 1px solid #ddd;
                        }
                    </style>

                    <div class="section-title">
                        <h1>Registration Fee</h1>
                        <div class="line"></div>
                        <table>
                            <tr>
                                <td>Author (Both online and virtual)</td>
                                <td>360 USD</td>
                            </tr>
                            <tr>
                                <td>Author - IEEE member</td>
                                <td>330 USD</td>
                            </tr>
                            <tr>
                                <td>Author - IEEE chapter</td>
                                <td>300 USD</td>
                            </tr>
                            <tr>
                                <td>Participants</td>
                                <td>200 USD</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SERVICES -->


    <?php
    include './footer.php';
    ?>

   


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script src="./assets/js/main.js"></script>
</body>

</html>