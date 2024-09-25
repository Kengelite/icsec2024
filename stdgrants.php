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
* {
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

<body data-bs-spy="scroll" data-bs-target=".navbar">

    <?php
include './menu.php';
?>

    <!-- HERO -->
    <?php
   include './slide.php';
   ?>

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
                            Applications for student grants must be received through the<b> <a
                                 target="_blank"   href="https://forms.gle/7CKSqbpjsALJUFFY6">Grant Application Form</a></b>
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
                        <div  class="col-12 text-start" style="color:red;">Deadline: October 30th, 2024</div>
                    </div>
                    <br>

                    <p class="left-align"><b>Applicant Eligibility:</b>
                    </p>
                    <ol class="left-align ms-3">
                        <li>The applicant must be a current student (Ph.D., Master's, or Undergraduate).</li>
                        <li>The applicant must be an active student member of IEEE.</li>
                        <li>The applicant must be the first author or co-author of an accepted paper in ICSEC 2024,
                            attend the conference, and present the paper.</li>
                        <li>Each applicant must be a full-time student registered toward a Bachelor's, Master's, or
                            Ph.D. degree when applying.</li>
                        <li>During the expense reimbursement stage, the student applicant must show proof of having
                            registered to attend ICSEC 2024.</li>
                    </ol>



                    <p class="left-align"><b>Guidelines for Application:</b>
                    </p>
                    <ol class="left-align ms-3">
                        <li>To meet the above eligibility criteria, the application must contain a letter from the
                            student's supervisor on university letterhead as a supporting document, which certifies that
                        </li>

                        <p class="left-align ms-3 text">a. the student carries at least 50% of a full-time academic
                            program as a registered undergraduate, master’s, or Ph.D. student in a regular program of
                            study, and
                        </p>

                        <p class="left-align ms-3 text">b. the student is the major contributor to the paper and
                            approximately what was the student's contribution in percent to the paper. If the student is
                            the sole author of the paper, this part is unnecessary. If none of the co-authors have a
                            supervisory relationship with the student, a declaration signed by all authors confirming
                            the applicant’s contribution is required.

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