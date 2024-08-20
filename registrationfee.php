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
.section-padding {
    padding-top: 70px;
    padding-bottom: 0px;
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
                <div
                    class="carousel-caption d-flex flex-column h-100 align-items-center justify-content-center text-center">
                    <h2 style="color: white;">THE 28<sup style="color: white;">TH</sup> INTERNATIONAL COMPUTER SCIENCE
                        AND ENGINEERING CONFERENCE 2024</h2> <br>
                    <h5 style="color: white;">6-8 November 2024</h5>
                    <h5 style="color: white;">
                        Paper submission deadline:
                        <span
                            style="color: #FF0000; text-decoration: line-through; background-color: rgba(255, 255, 255, 0.7);">12
                            july 2024</span><span style="color: #FF0000; background-color: rgba(255, 255, 255, 0.7);">
                            extended 26 july
                            2024</span>
                    </h5>
                </div>
            </div>
            <div class="carousel-item">
                <img src="./assets/images/silde/bg2.png" class="d-block w-100" alt="...">
                <div
                    class="carousel-caption d-flex flex-column h-100 align-items-center justify-content-center text-center">
                    <h2 style="color: white;">THE 28<sup style="color: white;">TH</sup> INTERNATIONAL COMPUTER SCIENCE
                        AND ENGINEERING CONFERENCE 2024</h2> <br>
                    <h5 style="color: white;">6-8 November 2024</h5>
                    <h5 style="color: white;">
                        Paper submission deadline:
                        <span
                            style="color: #FF0000; text-decoration: line-through; background-color: rgba(255, 255, 255, 0.7);">12
                            july 2024</span><span style="color: #FF0000; background-color: rgba(255, 255, 255, 0.7);">
                            extended 26 july
                            2024</span>
                    </h5>
                </div>
            </div>
            <div class="carousel-item">
                <img src="./assets/images/silde/bg3.png" class="d-block w-100" alt="...">
                <div
                    class="carousel-caption d-flex flex-column h-100 align-items-center justify-content-center text-center">
                    <h2 style="color: white;">THE 28<sup style="color: white;">TH</sup> INTERNATIONAL COMPUTER SCIENCE
                        AND ENGINEERING CONFERENCE 2024</h2> <br>
                    <h5 style="color: white;">6-8 November 2024</h5>
                    <h5 style="color: white;">
                        Paper submission deadline:
                        <span
                            style="color: #FF0000; text-decoration: line-through; background-color: rgba(255, 255, 255, 0.7);">12
                            july 2024</span><span style="color: #FF0000; background-color: rgba(255, 255, 255, 0.7);">
                            extended 26 july
                            2024</span>
                    </h5>
                </div>
            </div>
            <div class="carousel-item">
                <img src="./assets/images/silde/bg4.png" class="d-block w-100" alt="...">
                <div
                    class="carousel-caption d-flex flex-column h-100 align-items-center justify-content-center text-center">
                    <h2 style="color: white;">THE 28<sup style="color: white;">TH</sup> INTERNATIONAL COMPUTER SCIENCE
                        AND ENGINEERING CONFERENCE 2024</h2> <br>
                    <h5 style="color: white;">6-8 November 2024</h5>
                    <h5 style="color: white;">
                        Paper submission deadline:
                        <span
                            style="color: #FF0000; text-decoration: line-through; background-color: rgba(255, 255, 255, 0.7);">12
                            july 2024</span><span style="color: #FF0000; background-color: rgba(255, 255, 255, 0.7);">
                            extended 26 july
                            2024</span>
                    </h5>
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
    <section id="about" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center" data-aos="fade-down" data-aos-delay="50">
                    <div class="section-title">
                        <h1 class="display-4 fw-semibold">Registration and Payment</h1>
                        <div class="line"></div>

                        <!-- step1 -->
                        <div style="text-align: left;" class="mt-3"><b>Step 1</b> - Login to your EDAS account at
                            <a href="https://edas.info/" style="color: blue !important;"><u
                                    style="color: blue !important;">https://edas.info</u></a>
                        </div>
                        <img src="./assets/images/Regis_payment_p1.png" alt="ICSEC 2024" class="mt-3 mb-4"
                            style="max-width: 100%; height: 50%;">


                        <!-- step2 -->
                        <div style="text-align: left;" class="mt-3"><b>Step 2</b> - Register <br>
                            For authors with accepted papers, click on the Registration icon of the corresponding
                            paper.

                        </div>
                        <img src="./assets/images/Regis_payment_p2.png" alt="ICSEC 2024" class="mt-3 mb-4"
                            style="max-width: 100%; height: 50%;">


                        <!-- step2 continue -->
                        <div style="text-align: left;" class="mt-3">For participants, click on <b>Register</b> tab and
                            search for
                            “ICSEC”. Then click on the ticket
                            icon under<b>Register self</b>.

                        </div>
                        <img src="./assets/images/Regis_payment_p2_2.png" alt="ICSEC 2024" class="mt-3 mb-4"
                            style="max-width: 100%; height: 50%;">

                        <!-- step3  -->
                        <div style="text-align: left;" class="mt-3"><b>Step 3</b> – Click on the <b>Cart</b> icon of the
                            registration type that
                            applies to you. The
                            conference has the right to cancel your registration if an incorrect information or an
                            invalid registration option was registered. Please contact our admin for any questions.
                            Registration fees are non-refundable.

                        </div>
                        <img src="./assets/images/Regis_payment_p3.png" alt="ICSEC 2024" class="mt-3 mb-4"
                            style="max-width: 100%; height: 50%;">

                        <!-- step4  -->
                        <div style="text-align: left;" class="mt-3"><b>Step 4</b> – On the next page, click on “answer
                            the registration questions” at the bottom.

                        </div>
                        <img src="./assets/images/Regis_payment_p4.png" alt="ICSEC 2024" class="mt-3 mb-4"
                            style="max-width: 100%; height: 50%;">

                        <!-- step5  -->
                        <div style="text-align: left;" class="mt-3"><b>Step 5</b> – Check the checkbox if Participate
                            Online. <b>Leave the box unchecked if
                                participate Onsite</b>, then click Submit.

                        </div>
                        <img src="./assets/images/Regis_payment_p5.png" alt="ICSEC 2024" class="mt-3 mb-4"
                            style="max-width: 100%; height: 50%;">

                        <!-- step6  -->
                        <div style="text-align: left;" class="mt-3"><b>Step 6 – Payment:</b> Choose pay by credit card
                            at the bottom (The amount will be
                            charged in US dollar only).

                        </div>
                        <img src="./assets/images/Regis_payment_p6.png" alt="ICSEC 2024" class="mt-3 mb-4"
                            style="max-width: 100%; height: 50%;">

                        <!-- step7  -->
                        <div style="text-align: left;" class="mt-3"><b>Step 7 – Payment:</b> Enter valid card details
                            and click Pay button. After payment please
                            check the invoice if the information is correct.
                        </div>
                        <img src="./assets/images/Regis_payment_p7.png" alt="ICSEC 2024" class="mt-3 mb-4"
                            style="max-width: 100%; height: 50%;">

                        <!-- เพิ่มลิงก์ดาวน์โหลดไฟล์ PDF และ DOC -->
                        <div class="download-links mt-3">
                            <a href="./assets/Registration-and-payment-instruction.pdf" download
                                class="btn btn-primary me-2">Download PDF</a>
                        </div>
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