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
    <?php
   include './slide.php';
   ?>


    <!-- ABOUT -->
    <section id="about" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center" data-aos="fade-down" data-aos-delay="50">
                    <div class="section-title">
                        <h1 class="display-4 fw-semibold">Schedule</h1>
                        <div class="line"></div>
                        <h5>ICSEC 2024 - Tentative Schedule <br>
                            November 6 - 8, 2024 <br>
                            at Pullman Khon Kaen Raja Orchid Hotel, Khon Kean, Thailand

                            <div class="mt-3" style="color:red;">*** The paper numbers presented in the parallel sessions are from those who already
                                have registered, paid, and indicated their prefered mode of presentation. The organizing
                                team will keep updating the table. ***</div>
                        </h5>

                        <table class="table table-bordered mt-5">
                            <thead class="table-secondary">
                                <th colspan="2">November 6, 2024 </th>
                            </thead>
                            <tr class=" text-start">
                                <th>Time</th>
                                <th>Conference Program</th>
                            </tr>
                            <tr class=" text-start">
                                <td style="white-space: nowrap;">12.30 PM - 01.00 PM</td>
                                <td>Registration (Onsite Participants) at Pullman Khon Kaen Raja Orchid Hotel</td>
                            </tr>
                            <tr class=" text-start">
                                <td rowspan="5" style="white-space: nowrap;">01.00 PM - 02.30 PM</td>
                                <td>Parallel Sessions for Tutorials and Workshops</td>
                            </tr>
                            <tr class=" text-start">
                                <td>Tutorial Session 1 "Quantum Intelligence: An Introduction to Quantum Computing and
                                    Quantum Machine Learning" by Prof. Dr. Stephen John Turner</td>
                            </tr>
                            <tr class=" text-start">
                                <td>Tutorial Session 2 "An introduction to training and optimizing Large Language
                                    Models" by Asst. Prof. Dr. Jan N. van Rijn</td>
                            </tr>
                            <tr class=" text-start">
                                <td>Workshop 1 "Digital Security Engineered for Digital-Age Education" by FORTINET
                                    SECURITY NETWORK (THAILAND) LTD</td>
                            </tr>
                            <tr class=" text-start">
                                <td>Workshop 1 "Your city, smarter than ever with City Digital Data Platform" by Bedrock Anakytics CO., LTD. </td>
                            </tr>
                            <tr class="text-start table-warning">
                                <td>02.30 PM - 02.45 PM</td>
                                <td>Coffee Break </td>
                            </tr>

                            <tr class="text-start">
                                <td rowspan="6" style="white-space: nowrap;">02.45 PM - 04.30 PM</td>
                                <td>Parallel Sessions for Tutorials and Workshops</td>
                            </tr>
                            <tr class=" text-start">
                                <td>Tutorial Session 3 "Generative AI in Data Science and Analysis" by Dr. Thanachart
                                    Numnonda </td>
                            </tr>
                            <tr class=" text-start">
                                <td>Tutorial Session 2 "An introduction to training and optimizing Large Language
                                    Models" by Asst. Prof. Dr. Jan N. van Rijn (continue)</td>
                            </tr>
                            <tr class=" text-start">
                                <td>Workshop 1 "Digital Security Engineered for Digital-Age Education" by FORTINET
                                    SECURITY NETWORK (THAILAND) LTD (continue)</td>
                            </tr>
                            <tr class=" text-start">
                                <td>Workshop 2  "Deepzoom Platform"  by Bedrock Anakytics CO., LTD. (continue)</td>
                            </tr>
                            <tr class=" text-start">
                                <td>Research Collaboration Networking</td>
                            </tr>
                        </table>


                        <!-- วันที่ 7  -->
                        <table class="table table-bordered mt-5">
                            <thead class="table-secondary">
                                <th colspan="9">November 7, 2024 </th>
                            </thead>
                            <tr class="text-start" style="background-color:#FED8B1">
                                <th>Time</th>
                                <th colspan="8">Conference Program</th>
                            </tr>
                            <tr class=" text-start">
                                <td style="white-space: nowrap;">08.00 AM - 08.40 AM</td>
                                <td colspan="8">Registration (Onsite Participants) at Pullman Khon Kaen Raja Orchid
                                    Hotel</td>
                            </tr>
                            <tr class=" text-start">
                                <td style="white-space: nowrap;">08.40 AM - 08.50 AM</td>
                                <td colspan="8">Video Presentation</td>
                            </tr>
                            <tr class=" text-start">
                                <td style="white-space: nowrap;"> 08.50 AM - 09.45 AM</td>
                                <td colspan="8">Opening Ceremony at Main Conference Hall, Pullman Khon Kaen Raja Orchid
                                    Hotel</td>
                            </tr>
                            <tr class="text-start table-warning">
                                <td>09.45 AM - 10.00 AM</td>
                                <td colspan="8">Coffee Break </td>
                            </tr>

                            <tr class="text-start">
                                <td style="white-space: nowrap;">10.00 AM - 11.00 AM</td>
                                <td colspan="8">Prof.Dr.Thomas Back - "On the Automated Generation of Optimization
                                    Heuristics: A
                                    Dream or Reality?" </td>
                            </tr>
                            <tr class="text-start">
                                <td style="white-space: nowrap;">11.00 AM - 12.00 PM</td>
                                <td colspan="8">Prof.Dr Dusit Niyato - "Large Language Models (LLMs) with
                                    Retrieval-Augmented
                                    Generation
                                    for Next Generation Networking" (Virtual) </td>
                            </tr>
                            <tr class="text-start table-warning">
                                <td>12.00 PM - 01.15 PM</td>
                                <td colspan="8">Lunch Break </td>
                            </tr>
                            <tr class=" text-start">
                                <td style="white-space: nowrap;" rowspan="3">01.15 PM - 02.30 PM</td>
                                <td style="text-align:center; background-color:lightblue" colspan="3">Room#1</td>
                                <td style="text-align:center;background-color:lightpink" colspan="3">Room#2</td>
                                <td style="text-align:center;background-color:lightgreen" colspan="2">Room#3</td>
                            </tr>
                            <tr class=" text-start">
                                <td colspan="3">"Real-Time AI-Based Video Analytics: Theory and Applications"</td>
                                <td colspan="3">"Nature-inspired Robot Intelligence: From Nature to Advanced Robotics
                                    Technology"</td>
                                <td colspan="2"> "Revolutionizing Healthcare with Digital Twins: The Power of Generative
                                    AI Integration"</td>
                            </tr>
                            <tr class=" text-start">
                                <td colspan="3">Prof. Dr. Peerapon Vateekul, Chulalongkorn University, Thailand </td>
                                <td colspan="3">Prof. Dr. Poramate Manoonpong, VISTEC, Thailand </td>
                                <td colspan="2">
                                    Prof.Dr. Paisarn Muneesawang, Computer Engineering, Mahidol University</td>
                            </tr>
                            <tr class="table-success ">
                                <th colspan="9">Presentations (Parallel Sessions) </th>
                            </tr>
                            <tr class=" text-start">
                                <td style="white-space: nowrap;" rowspan="1"></td>
                                <td colspan="1" style="text-align:center;">Room#1</td>
                                <td colspan="1" style="text-align:center;">Room#2</td>
                                <td colspan="1" style="text-align:center;">Room#3</td>
                                <td colspan="1" style="text-align:center;">Room#4</td>
                                <td colspan="1" style="text-align:center;">Room#5</td>
                                <td colspan="1" style="text-align:center;">Room#6</td>
                                <td colspan="1" style="text-align:center;">Room#7</td>
                                <td colspan="1" style="text-align:center;">Room#8</td>
                            </tr>
                            <tr class=" text-start">
                                <td style="white-space: nowrap;" rowspan="1">Topics</td>
                                <td colspan="1">Applied AI, Generative AI, and Machine Learning</td>
                                <td colspan="1">Big Data, Data Science, and Applications</td>
                                <td colspan="1">Natural Language Processing</td>
                                <td colspan="1">Computer Educational Technology</td>
                                <td colspan="1">Computer Vision and Image Processing</td>
                                <td colspan="1">Computer Simulation and Modeling</td>
                                <td colspan="1">Geo-informatics and Remote Sensing</td>
                                <td colspan="1">Special Session: HPC, Data Lakes, and Computing Continuum (HPC-ComCon
                                    2024)</td>
                            </tr>
                            <tr class=" text-start" style="background-color:#FFFFD0">
                                <td style="white-space: nowrap;" rowspan="1">Session Chair</td>
                                <td colspan="1">Asst. Prof. Dr. Jan N. van Rijn</td>
                                <td colspan="1">Assoc. Prof. Wararat Songpan</td>
                                <td colspan="1">Dr. Pongsathorn Janyoi and Dr. Arfat Ahmad Khan</td>
                                <td colspan="1">Assoc. Prof. Dr. Kanda Runapongsa Saikaew</td>
                                <td colspan="1"> Prof. Dr. Poramate Manoonpong</td>
                                <td colspan="1">Asst. Prof. Dr. Khamron</td>
                                <td colspan="1">Prof. Masahiko Nagai and Dr. Sakpod Tongleamnak</td>
                                <td colspan="1">Prof. Pascal Bouvry</td>
                            </tr>
                            <tr class=" text-start">
                                <td style="white-space: nowrap;" rowspan="5">02.30 PM - 05.00 PM</td>
                                <td colspan="1">1571038517</td>
                                <td colspan="1">1571048275</td>
                                <td colspan="1">1571049090</td>
                                <td colspan="1">1571037497</td>
                                <td colspan="1">1571055857</td>
                                <td colspan="1">1571056256</td>
                                <td colspan="1">1571051358</td>
                                <td colspan="1">1571054432</td>
                            </tr>
                            <tr class="text-start">
                                <td colspan="1">1571054576</td>
                                <td colspan="1">1571049136</td>
                                <td colspan="1">1571035405</td>
                                <td colspan="1">1571048580</td>
                                <td colspan="1">1571038665</td>
                                <td colspan="1">1571038480</td>
                                <td colspan="1">1571055588</td>
                                <td colspan="1"></td>
                            </tr>
                            <tr class="text-start">
                                <td colspan="1"></td>
                                <td colspan="1"></td>
                                <td colspan="1"></td>
                                <td colspan="1">1571056345</td>
                                <td colspan="1">1571048239</td>
                                <td colspan="1">1571054846</td>
                                <td colspan="1"></td>
                                <td colspan="1"></td>
                            </tr>
                            <tr class="text-start">
                                <td colspan="1"></td>
                                <td colspan="1"></td>
                                <td colspan="1"></td>
                                <td colspan="1"></td>
                                <td colspan="1"></td>
                                <td colspan="1">1571055924</td>
                                <td colspan="1"></td>
                                <td colspan="1"></td>
                            </tr>
                            <tr class="text-start">
                                <td colspan="1"></td>
                                <td colspan="1"></td>
                                <td colspan="1"></td>
                                <td colspan="1"></td>
                                <td colspan="1"></td>
                                <td colspan="1">1571054437</td>
                                <td colspan="1"></td>
                                <td colspan="1"></td>
                            </tr>

                            <tr class="text-start table-warning">
                                <td>06.30 PM - 09.00 PM</td>
                                <td colspan="8">Reception and Best paper awards </td>
                            </tr>
                        </table>



                        <!-- วันที่ 8  -->

                        <!-- วันที่ 8  -->
                        <table class="table table-bordered mt-5">
                            <thead class="table-secondary">
                                <th colspan="9">November 8, 2024 </th>
                            </thead>
                            <tr class="text-start" style="background-color:#FED8B1">
                                <th>Time</th>
                                <th colspan="8">Conference Program</th>
                            </tr>
                            <tr class=" text-start">
                                <td style="white-space: nowrap;">08.00 AM - 08.30 AM</td>
                                <td colspan="8">Registration (Onsite Participants) at Pullman Khon Kaen Raja Orchid
                                    Hotel</td>
                            </tr>
                            <tr class=" text-start">
                                <td style="white-space: nowrap;">08.30 AM - 10.15 AM</td>
                                <td colspan="8">AI Forum</td>
                            </tr>
                            <tr class="text-start table-warning">
                                <td>10.15 AM - 10.30 AM</td>
                                <td colspan="8">Coffee Break </td>
                            </tr>

                            <tr class=" text-start">
                                <td style="white-space: nowrap;"> 10.30 AM - 11.30 AM</td>
                                <td colspan="8">Mr. Prayuth TungsaNgob - "Building the Digital University: Framework for
                                    the Future
                                    of
                                    Learning, Campus, and Research "</td>
                            </tr>

                            <tr class="text-start">
                                <td style="white-space: nowrap;">11.30 AM - 12.30 PM</td>
                                <td colspan="8">Prof. Dr. Gitta Kutyniok - "Sustainable AI Computing: A Mathematical
                                    Perspective"
                                    (Virtual) </td>
                            </tr>
                            <tr class="text-start table-warning">
                                <td style="white-space: nowrap;">12.30 PM - 01.15 PM</td>
                                <td colspan="8">Lunch Break </td>
                            </tr>
                            <tr class="table-success ">
                                <th colspan="9">Presentations (Parallel Sessions) </th>
                            </tr>
                            <tr class=" text-start">
                                <td style="white-space: nowrap;" rowspan="1"></td>
                                <td colspan="1" style="text-align:center;">Room#1</td>
                                <td colspan="1" style="text-align:center;">Room#2</td>
                                <td colspan="1" style="text-align:center;">Room#3</td>
                                <td colspan="1" style="text-align:center;">Room#4</td>
                                <td colspan="1" style="text-align:center;">Room#5</td>
                                <td colspan="1" style="text-align:center;">Room#6</td>
                                <td colspan="1" style="text-align:center;">Room#7</td>
                                <td colspan="1" style="text-align:center;">Room#8</td>
                            </tr>
                            <tr class=" text-start">
                                <td style="white-space: nowrap;" rowspan="1">Topics</td>
                                <td colspan="1">Special Session: AI in Medical and Healthcare (AIMedHealth 2024)</td>
                                <td colspan="1">Applied AI and Machine Learning</td>
                                <td colspan="1">Business Intelligence</td>
                                <td colspan="1">Cyber Security, Embedded Systems, and Robotics</td>
                                <td colspan="1">Internet of Things, Wireless Networks and Communications</td>
                                <td colspan="1">HCI, Software Engineering, and Software Development</td>
                                <td colspan="1">Dr. Prinya Hom-anek
                                    <br>
                                    (1.30 - 2.30)
                                    <br>
                                    - TBA -
                                </td>
                                <td colspan="1" rowspan="7">Steering committee meeting</td>
                            </tr>
                            <tr class=" text-start" style="background-color:#FFFFD0">
                                <td style="white-space: nowrap;" rowspan="1">Session Chair</td>
                                <td colspan="1">Dr. Thepchai Supnithi (NECTEC)</td>
                                <td colspan="1">Assoc.Prof. Suphakant Phimoltares and Dr. Praisan Padungweang</td>
                                <td colspan="1">Assoc. Prof. Punyaphol Horata</td>
                                <td colspan="1">Prof. Deepak Prashar</td>
                                <td colspan="1">Dr. Isoon Kansurat</td>
                                <td colspan="1">Assoc. Prof. Dr. Kanda Runapongsa Saikaew </td>
                                <td colspan="1"></td>
                            </tr>
                            <tr class="text-start">
                                <td style="white-space: nowrap;" rowspan="5">01.15 PM - 02.45 PM</td>
                                <td colspan="1">1571055893</td>
                                <td colspan="1">1571056139</td>
                                <td colspan="1">1571046180</td>
                                <td colspan="1">1571038341</td>
                                <td colspan="1">1571038720</td>
                                <td colspan="1">1571048826</td>
                                <td colspan="1"></td>
                            </tr>
                            <tr class="text-start">
                                <td colspan="1"></td>
                                <td colspan="1">1571055829</td>
                                <td colspan="1">1571051617</td>
                                <td colspan="1">1571056251</td>
                                <td colspan="1"></td>
                                <td colspan="1"></td>
                                <td colspan="1"></td>
                            </tr>
                            <tr class="text-start">
                                <td colspan="1"></td>
                                <td colspan="1">1571049093</td>
                                <td colspan="1"></td>
                                <td colspan="1">1571048652</td>
                                <td colspan="1"></td>
                                <td colspan="1"></td>
                                <td colspan="1"></td>
                            </tr>
                            <tr class="text-start">
                                <td colspan="1"></td>
                                <td colspan="1"></td>
                                <td colspan="1"></td>
                                <td colspan="1"></td>
                                <td colspan="1"></td>
                                <td colspan="1"></td>
                                <td colspan="1"></td>
                            </tr>
                            <tr class="text-start">
                                <td colspan="1"></td>
                                <td colspan="1"></td>
                                <td colspan="1"></td>
                                <td colspan="1"></td>
                                <td colspan="1"></td>
                                <td colspan="1"></td>
                                <td colspan="1"></td>
                            </tr>
                            <tr class="text-start table-warning">
                                <td>02.45 PM - 03.00 PM</td>
                                <td colspan="8">Coffee Break </td>
                            </tr>
                            <tr class="text-start ">
                                <td>01:15 PM - 04.30 PM</td>
                                <td colspan="8">City Tour </td>
                            </tr>
                            <tr class="text-start">
                                <td style="white-space: nowrap;">04.40 PM</td>
                                <td>Conference Closed </td>
                            </tr>

                        </table>

                        <!-- เพิ่มลิงก์ดาวน์โหลดไฟล์ PDF และ DOC -->
                        <div class="download-links mt-3">
                            <a href="./assets/ICSEC2024Schedule_v1.pdf" download class="btn btn-primary me-2">Download
                                PDF</a>
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