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
</head>

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
                    <h1 class="display-4 fw-semibold">Generative AI in Data Science and Analysis</h1>
                    <h5><span class="small-square"></span></h5>
                    <div class="line"></div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-md-4" data-aos="fade-right" data-aos-delay="100">
                    <div class="image-bio-container text-center">
                        <div class="image-container">
                            <img src=".\assets\images\tutorial\Thanachart.png" class="img-fluid"
                                alt="Dr. Thanachart Numnonda">
                        </div>
                        <h6 class="mt-3">Dr. Thanachart Numnonda</h6>
                        <h8 class="mt-3">Profile : <a
                                href="https://www.thanachart.co.th/en/management/risk-oversight-committee/261/dr-thanachart-numnonda"
                                target="_blank">https://shorturl.at/lWuXj</a></h8>
                    </div>
                </div>
                <div class="col-md-8 biography" data-aos="fade-left" data-aos-delay="200">
                    <h5><span style="font-size: 12px;">►</span> Abstract</h5>
                    <p class="text">Generative AI in data science and analysis, focusing on tools like ChatGPT, Gemini,
                        and Claude.ai. It aims to equip participants with the skills to employ AI technologies in
                        extracting, interpreting, and analyzing data without the need for traditional programming.
                        Attendees will explore the functionalities of ChatGPT across different versions, gaining
                        insights into how these tools can be used for deep data analysis and decision-making processes
                        in various data science contexts.</p>
                    <p class="text">The workshop will delve into practical aspects of data science, including data
                        engineering, visualization, predictive analytics, and natural language processing, all through
                        the lens of Generative AI. Participants will engage in hands-on lab sessions, applying these AI
                        tools to real-world data science problems, and learning to conduct end-to-end data projects.
                        This program is designed for individuals looking to integrate advanced AI capabilities into
                        their data science toolkit, enabling them to efficiently handle complex data analysis and
                        predictive modeling tasks with minimal reliance on coding or external IT resources.</p>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-md-12" data-aos="fade-up" data-aos-delay="300">
                    <h5><span style="font-size: 12px;">►</span> Biography</h5>
                    <p class="text">Dr. Thanachart Numnonda is an executive director of IMC Institute. He has a diverse
                        and extensive professional background. Currently, he holds several key positions, including
                        being an independent director and chairman of risk committees in various companies like
                        Thanachart Capital Limited, SiamEast Solutions public company Limited, VinTcom Technology Public
                        Company Limited, and Humanica public company Limited. He is also involved in academia, serving
                        as a council member and chairman of risk committees in several public universities.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ANOTHER ABOUT -->
    <section id="another-about" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center" data-aos="fade-down" data-aos-delay="50">
                    <h1 class="display-4 fw-semibold">Quantum Intelligence : An Introduction to Quantum Computing and
                        Quantum Machine Learning</h1>
                    <h5><span class="small-square"></span></h5>
                    <div class="line"></div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-md-4" data-aos="fade-right" data-aos-delay="100">
                    <div class="image-bio-container text-center">
                        <div class="image-container">
                            <img src=".\assets\images\tutorial\Stephen.jpg" class="img-fluid"
                                alt="Dr. Thanachart Numnonda">
                        </div>
                        <h6 class="mt-3">Prof. Dr. Stephen John Turner</h6>
                        <h8 class="mt-3">Profile : <a
                                href="https://vistec.ac.th/faculty-adjunct-professors-ist-stephen-john-turner?fbclid=IwZXh0bgNhZW0CMTAAAR1dtwS9M2mo8O2-okTCpiQvNoyRVdOf5ig_VhRJh6T4IVralTbC2eo4zpc_aem_ZmFrZWR1bW15MTZieXRlcw"
                                target="_blank">https://vistec.ac.th/stephen-john-turner</a></h8>
                    </div>
                </div>
                <div class="col-md-8 biography" data-aos="fade-left" data-aos-delay="200">
                    <h5><span style="font-size: 12px;">►</span> Abstract</h5>
                    <p class="text">Quantum computing is the study of information processing based on the quantum
                        properties of matter. By combining the rich representational power of quantum states with the
                        possibility of exponential parallelism, quantum computing has the potential to revolutionize
                        many aspects of science, technology and industry. While quantum computing is still at an early
                        stage of development, we have recently seen rapid advances in quantum technology, and quantum
                        computers with hundreds of qubits are now readily available via cloud services. In this current
                        “utility” era, quantum computers are demonstrating their potential to provide an advantage over
                        classical computers in certain application areas.</p>
                    <p class="text">The first part of this tutorial will explain the basic concepts of quantum systems
                        and their properties, including superposition, entanglement and interference, and how the
                        inherent parallelism of quantum computers may be exploited. Examples of quantum algorithms and
                        applications will be given, including quantum networks and security. The second part of the
                        tutorial will describe approaches to quantum machine learning (QML). Some important QML
                        algorithms will be described, including quantum neural networks, with examples taken from
                        real-world applications. Finally, the tutorial will explore the exciting possibilities offered
                        by the convergence of quantum computing and artificial intelligence to form quantum
                        intelligence.</p>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-md-12" data-aos="fade-up" data-aos-delay="300">
                    <h5><span style="font-size: 12px;">►</span> Biography</h5>
                    <p class="text">Stephen John Turner is Professorial Fellow in Quantum Computing at Vidyasirimedhi
                        Institute of Science and Technology (Thailand). From 2008-2015, he was full Professor of
                        Computer Science at Nanyang Technological University (Singapore), having joined the University
                        as an Associate Professor in 2000. During his time there, he was Director of the Parallel and
                        Distributed Computing Centre and subsequently Head of the Networks and Distributed Systems
                        Division in the School of Computer Engineering.</p>
                    <p class="text">He received his MA in Mathematics and Computer Science from Cambridge University
                        (UK) and his MSc and PhD in Computer Science from Manchester University (UK). He is a Chartered
                        IT Professional and Chartered Engineer (UK). His main research interests are: Quantum Computing,
                        Simulation and Optimization, Complex Systems, Internet of Things, and Edge and Cloud Computing.
                        He has published extensively and has received a number of best paper awards, particularly for
                        his work in Parallel and Distributed Simulation.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="another-about" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center" data-aos="fade-down" data-aos-delay="50">
                    <h1 class="display-4 fw-semibold">An introduction to training and optimizing Large Language Models
                    </h1>
                    <h5><span class="small-square"></span></h5>
                    <div class="line"></div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-md-4" data-aos="fade-right" data-aos-delay="100">
                    <div class="image-bio-container text-center">
                        <div class="image-container">
                            <img src=".\assets\images\tutorial\drjan.png" class="img-fluid"
                                alt="Dr. Thanachart Numnonda">
                        </div>
                        <h6 class="mt-3">Asst. Prof. Dr. Jan N. van Rijn</h6>
                        <h8 class="mt-3">Profile : <a
                                href="https://www.universiteitleiden.nl/en/staffmembers/jan-van-rijn#tab-1"
                                target="_blank">https://www.universiteitleiden.nl</a></h8>
                    </div>
                </div>
                <div class="col-md-8 biography" data-aos="fade-left" data-aos-delay="200">
                    <h5><span style="font-size: 12px;">►</span> Abstract</h5>
                    <p class="text">Transformer-based language models have achieved milestones in natural language
                        processing, but they come with challenges, mainly due to their computational footprint.
                        While large language models are readily available for use, it remains important to do academic
                        research towards these for the following reasons:
                    </p>
                    <p class="text">(i) the training procedure and datasets of these models are typically not disclosed,
                        and they are essentially operating as black-boxes maintained by companies. </p>
                    <p class="text">(ii) the size of these models gives them a high computational footprint, even when
                        deployed (inference-stage). Therefore, developing compute-efficient models that can be deployed
                        with the computational resources available at the disposal of small- and medium-size enterprises
                        is crucial. </p>
                    <p class="text">(iii) models such as ChatGPT interact with society in ways that we could not imagine
                        several years before, but many open questions remain, related to trustworthiness, privacy,
                        security, and efficiency, especially in lower-resource contexts. It is therefore important that
                        the research community addresses these topics and develops open-source models for future
                        applications.</p>
                    <p class="text">In this tutorial, we will present our research regarding how to train and optimise
                        large language models. It will cover both the pre-training as well as the finetuning stage.</p>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-md-12" data-aos="fade-up" data-aos-delay="300">
                    <h5><span style="font-size: 12px;">►</span> Biography</h5>
                    <p class="text">Jan N. van Rijn holds a tenured position as assistant professor at Leiden
                        University, where he works in the computer science department (LIACS) and Automated Design of
                        Algorithms cluster (ADA). His research interests include trustworthy artificial intelligence,
                        automated machine learning (AutoML) and metalearning. He obtained his PhD in Computer Science in
                        2016 at Leiden Institute of Advanced Computer Science (LIACS), Leiden University (the
                        Netherlands). During his PhD, he developed OpenML.org, an open science platform for machine
                        learning, enabling sharing of machine learning results. He made several funded research visits
                        to the University of Waikato (New Zealand) and the University of Porto (Portugal). After
                        obtaining his PhD, he worked as a postdoctoral researcher in the Machine Learning lab at the
                        University of Freiburg (Germany), headed by Prof. Dr. Frank Hutter, after which he moved to work
                        as a postdoctoral researcher at Columbia University in the City of New York (USA). In 2023, he
                        visited the College of Computing, Khon Kaen University, Thailand. His research aim is to
                        democratize access to machine learning and artificial intelligence across societal institutions,
                        by developing knowledge and tools that support domain experts, and make AI-experts more aware of
                        safety risks. He is one of the authors of the book ‘Metalearning: Applications to Automated
                        Machine Learning and Data Mining’ (freely accessible, published by Springer).</p>
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