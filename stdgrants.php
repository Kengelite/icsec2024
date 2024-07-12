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
</head>
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

    .text-center {
        text-align: center;
    }

    .left-align {
        text-align: left;
    }

    .section-padding {
        padding: 50px 0;
        /* เพิ่ม padding เพื่อระยะห่างของข้อความ */
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
    * {
            color: black;
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
                    <div class="section-title">
                        <h1 class="display-4 fw-semibold">Conference Participation Grants for Students</h1>
                        <div class="line"></div>
                        <p class="text">
                            ICSEC 2024 is pleased to offer conference participation grants to IEEE student members.
                            Applications for student grants must be received through the <b>Grant Application Form</b>
                            by the
                            posted deadline provided by the respective conference. ICSEC 2024 reserves the right not to
                            process late or incomplete applications.

                            Before applying, please carefully check the following conditions and criteria to ensure you
                            are eligible for these grants.

                            ICSEC 2024 offers a limited number of Conference Participation Grants for Students to assist
                            IEEE student members in presenting their papers at the conference (on-site only), where the
                            organizing committee reimburses the early registration fees for the grant recipient.

                            Only one student author per paper will be awarded a grant and a student can receive only one
                            grant from ICSEC 2024.
                        </p>
                    </div>
                    <br>

                    <p class="left-align"><b>Applicant Eligibility:</b>
                    </p>
                    <ol class="left-align ms-3">
                        <li>The applicant must be a current student (Ph.D., Master's, or Undergraduate).</li>
                        <li>The applicant must be an active student member of IEEE.</li>
                        <li>The applicant must be the first author or co-author of an accepted paper in ICSEC 2024, attend the conference, and present the paper.</li>
                        <li>Each applicant must be a full-time student registered toward a Bachelor's, Master's, or Ph.D. degree when applying.</li>
                        <li>During the expense reimbursement stage, the student applicant must show proof of having registered to attend ICSEC 2024.</li>
                    </ol>
                    
                    

                        <p class="left-align"><b>Guidelines for Application:</b>
                        </p>
                        <ol class="left-align ms-3">
                        <li>To meet the above eligibility criteria, the application must contain a letter from the student's supervisor on university letterhead as a supporting document, which certifies that</li>

                            <p class="left-align ms-3 text">a. the student carries at least 50% of a full-time academic program as a registered undergraduate, master’s, or Ph.D. student in a regular program of study, and
                            </p> 

                            <p class="left-align ms-3 text">b. the student is the major contributor to the paper and approximately what was the student's contribution in percent to the paper. If the student is the sole author of the paper, this part is unnecessary. If none of the co-authors have a supervisory relationship with the student, a declaration signed by all authors confirming the applicant’s contribution is required.

                            </p>
                          
                            <li>Paper ID and Manuscript title must be included in the application package.
                            </li>
                        
                        </ol>
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