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
                    <h1 class="display-4 fw-semibold">Real-Time AI-Based Video Analytics: Theory and Applications</h1>
                    <h5><span class="small-square"></span></h5>
                    <div class="line"></div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-md-4" data-aos="fade-right" data-aos-delay="100">
                    <div class="image-bio-container">
                        <div class="image-container">
                            <img src=".\assets\images\invited\Peerapon.jpg" class="img-fluid" alt="Peerapon Vateekul">
                        </div>
                        <h6 class="mt-3"> Professor Dr. Peerapon Vateekul</h6>
                    </div>
                </div>
                <div class="col-md-8 biography" data-aos="fade-left" data-aos-delay="200">
                    <h5><span style="font-size: 12px;">►</span> Abstract</h5>
                    <p class="text">Nowadays, AI techniques have been advancing and are being applied in many kinds of
                        data, especially in video analytics. In this session, we aim to present many of our research
                        works in real-time deep learning-based video analytics. First, DeepGI is our innovation to
                        assist endoscopists in detecting anomalies in gastrointestinal (GI) tracts in real-time from
                        various types of endoscopy videos. Our models can (i) detect polyps from colonoscopy videos to
                        prevent colon cancer, (ii) segment gastric intestinal metaplasia (GIM) lesions from gastroscopy
                        videos, and (iii) classify malignant scenes of bile duct strictures from cholangioscopy videos.
                        Second, D-mind is an innovation from AI for Mental Health (AIMET) that helps detect depression
                        from interview videos in real-time through a mobile application. At the moment, more than
                        200,000 users are using the D-mind application. Third, we can identify the severity level of
                        Parkinson’s Disease (PD) patients using facial expression and gait videos. All of these works
                        are good examples that theory in the AI domain can be applied in real-world applications.</p>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-md-12" data-aos="fade-up" data-aos-delay="300">
                    <h5><span style="font-size: 12px;">►</span> Biography</h5>
                    <p class="text">Peerapon Vateekul received a Ph.D. degree from the Department of Electrical and
                        Computer Engineering, University of Miami (UM), FL, USA, in 2012. Currently, he is an professor
                        at the Department of Computer Engineering, Faculty of Engineering, Chulalongkorn University,
                        Thailand. His research interests include machine learning, data mining, deep learning, text
                        mining, and big data analytics. To be more specific, his works include variants of
                        classification, natural language processing, data quality management, video analytics, and
                        applied deep learning and reinforcement learning techniques in various domains viz. healthcare,
                        geoinformatics, hydrometeorology, transportation, and energy. Some examples of AI-assisted
                        medical diagnoses are real-time polyp detection from colonoscopy videos, gastrointestinal
                        metaplasia segmentation from gastroscopy videos, depressive scoring from interview videos,
                        Parkinson’s face classification, and movement disorder diagnosis. He is a certified SAS
                        instructor for more than 10 years. Moreover, he is also a certified instructor for NVIDIA Deep
                        Learning Institute and has joined NVIDIA AI Technology Center (NVAITC) since 2018.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ANOTHER SECTION -->
    <section id="another-about" class="ANOTHER-ABOUT section-padding">

        <div class="container">
            <div class="row">
                <div class="col-12 text-center" data-aos="fade-down" data-aos-delay="50">
                    <h1 class="display-4 fw-semibold">Nature-inspired Robot Intelligence: From Nature to Advanced
                        Robotics Technology</h1>
                    <h5><span class="small-square"></span></h5>
                    <div class="line"></div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-md-4 text-center" data-aos="fade-right" data-aos-delay="100">
                    <img src="./assets/images/invited/Poramate.jpg" class="img-fluid " alt="Poramate Manoonpong">
                    <h6 class="mt-3">Professor Dr. Poramate Manoonpong</h6>
                </div>
                <div class="col-md-8" data-aos="fade-left" data-aos-delay="200">
                    <h5><span style="font-size: 12px;">►</span>Abstract</h5>
                    <p class="text">Living creatures can quickly form their gaits within minutes of being born. This is
                        due to their neural locomotion control circuits comprising genetically encoded. They can quickly
                        adapt their movement to traverse a variety of substrates and even take proactive steps to avoid
                        colliding with an obstacle. Furthermore, in addition to locomotion, they can also perform
                        diverse complex autonomous behaviors, such as object transportation and navigation, with a high
                        degree of energy efficiency. Biological studies reveal that these capabilities are the result of
                        the coupling of their biomechanics (e.g., structures, muscles, and materials) and neural
                        mechanisms with plasticity and memory (brain).</p>
                    <p class="text">In this talk, I will present “how we can realize biomechanics and neural mechanisms
                        inspired by nature for robots so they can become more intelligent like living creatures”. I will
                        also demonstrate that this nature-inspired robotics can help us not only address scientific
                        questions, but also advance robotics technology for real world (industrial) applications. It may
                        even bring the goal of creating “true robot intelligence” a little bit closer.</p>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-md-12" data-aos="fade-up" data-aos-delay="300">
                    <h5><span style="font-size: 12px;">►</span> Biography</h5>
                    <div class="text">
                        <p> <span class="ms-4"> He </span> is a Professor at the School of Information Science & Technology, Vidyasirimedhi Institute
                            of
                            Science & Technology (VISTEC), located in Rayong, Thailand. In addition to his primary role,
                            he
                            holds an ancillary academic position as a Professor of Biorobotics at the University of
                            Southern
                            Denmark (SDU), Denmark. Furthermore, he serves as the head of the Research Center for
                            Advanced
                            Robotics and Intelligent Automation at VISTEC.
                        </p>


                        <p> <span class="ms-4"> As </span> author or co-author, he has published over 120 publications in journals (e.g., Nature
                            Physics, Nature Machine Intelligence, IEEE Transactions on Cybernetics, IEEE Transactions on
                            Neural Networks and Learning Systems, IEEE Robotics and Automation Letters) and conferences
                            (e.g., IROS, ICRA) and his articles have been cited in total more than 3100 citations. His
                            H-index is 29 (from google scholar).</p>

                        <p><span class="ms-4"> He </span> has been the Principal Investigator (PI) or co-Principal Investigator (co-PI) on more
                            than 10
                            funded projects, including those funded by EU Horizon 2020, Human Frontier Science Program
                            (HFSP), and Doctoral Networks - Marie Skłodowska-Curie Actions. Currently, he serves as an
                            associate editor of IEEE Robotics and Automation Letters, Frontiers in Neuroscience
                            (Neurorobotics), and Adaptive Behavior (SAGE), a guest associate editor of Frontiers in
                            Robotics
                            and AI, and an associate editor for IEEE International Conference on Soft Robotics
                            (2020,2021,2022). He also serves as the editorial board of the Scientific Reports and
                            Journal of
                            the Royal Society Interface.</p>
                        <p> <span class="ms-4"> The </span> central goal of his research is to understand “how brain-like mechanisms and
                            biomechanics
                            can be realized in robots so they can become more intelligent like living creatures?”.
                            According
                            to this, his team has developed bio-inspired behaving robots with general bio-inspired
                            machine
                            learning methods and could show that these robots can acquire complex behaviors with
                            learning
                            and adaptation. In addition to this, his team also focuses on transferring biomechanical and
                            neural developments of robots to other real-world applications, like inspection, healthcare,
                            industry, service.</p>
                        .
                    </div>
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