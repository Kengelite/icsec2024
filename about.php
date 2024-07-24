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

/* .line {
    width: 60px;
    height: 4px;
    background-color: var(--c-brand);
    margin: 16px auto 24px auto;
} */
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

.indented {
    padding-left: 20px;
    /* ปรับค่าตามความต้องการ */
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
                    <div class="section-title">
                        <h1 class="display-4 fw-semibold">About ICSEC</h1>
                        <div class="line"></div>
                        <p class="text">
                            The International Computer Science and Engineering Conference (ICSEC) serves as the leading
                            platform for researchers, practitioners, and educators to present and discuss the most
                            recent innovations, research findings, experiences, trends, and challenges in the field of
                            Computer Science, Computer Engineering, Software Engineering, and Information Technology.
                            ICSEC 2024 is co-organized by IEEE Thailand Section (IEEE Computer Society Thailand Chapter)
                            and College of Computing, Khon Kaen University. ICSEC 2024 will take place over three days
                            in Khon Kaen, Thailand, featuring special sessions and presentations by esteemed researchers
                            from international communities, including renowned keynote speakers. The conference will
                            adopt a hybrid format, offering both onsite and virtual participation options to accommodate
                            diverse attendees. Accepted papers will be considered for inclusion in IEEE Xplore, subject
                            to meeting its standards for scope and quality. Additionally, selected papers may have the
                            opportunity to extend the research work for submission to associated SCOPUS-indexed
                            journals, each of which will conduct its peer review process.
                        </p>
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
                        <h1 class="display-4 fw-semibold">Equity, Diversity, and Inclusion (EDI) Plan</h1>
                        <div class="line"></div>
                        <p class="text">
                            Equity, Diversity, and Inclusion (EDI) are fundamental values aimed at cultivating equal
                            opportunities (equity), embracing and honoring individual, social, and cultural differences
                            (diversity), and facilitating the meaningful engagement of all individuals in various
                            discussions and environments (inclusion). In line with these principles, ICSEC 2024 is
                            committed to promoting:
                        </p>
                        <ul class="left-align text indented">
                            <li>
                                <b>Committee Diversity:</b> We aim to assemble a diverse organization committee,
                                technical committees, and reviewers, considering various social, cultural, and academic
                                backgrounds and skills (e.g., gender, nationality, and research expertise).
                            </li>
                            <li>
                                <b>Speaker Diversity:</b>
                                Diversity centers on recognizing and appreciating human differences and acknowledging
                                diverse talents. We aim to invite speakers and panelists representing diverse
                                populations, backgrounds, research areas, and expertise within Computer Engineering,
                                Software Engineering, and Information Technology to enhance the breadth of perspectives
                                and thinking.
                            </li>
                            <li>
                                <b>Bias Mitigation and Fairness Promotion:</b> We advocate for double-blind reviewing to
                                mitigate unconscious biases related to social, cultural, and economic factors (e.g.,
                                nationality, gender, sexual orientation, and race). Additionally, we encourage reviewers
                                to approach their assessments with empathy and kindness, subject to meeting IEEE
                                Xplore's standards for scope and quality.
                            </li>
                            <li>
                                <b>Participation:</b> We expect all ICSEC 2024 participants to actively contribute to
                                fostering an inclusive and welcoming environment where individuals feel respected and
                                safe regardless of their social, cultural, gender, or economic backgrounds.
                            </li>
                            <li>
                                <b>Student Grants:</b> Although ICSEC 2024 offers a limited number of conference
                                participation grants for awarding students to present their papers at the conference, we
                                prioritize diversity considerations, including social, cultural, and economic factors
                                such as gender, age, geographic location, and research interests, in addition to merit
                                and need-based criteria.
                            </li>
                            <li>
                                <b>EDI Awareness:</b> We encourage all committee members, reviewers, and participants to
                                dedicate time to enhance their understanding of Equity, Diversity, and Inclusion (EDI)
                                principles and their significance in conference activities.
                            </li>
                        </ul>

                        <p class="text ">This EDI plan aims to promote an equitable, diverse, and inclusive environment
                            at ICSEC 2024 at Khon Kaen, Thailand. By creating accessible, welcoming environments and
                            actively embracing diverse perspectives, we aim to foster a conference atmosphere where all
                            participants feel included, valued, and empowered. The EDI plan elevates the overall
                            participant experience at ICSEC 2024.

                        </p>

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