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
                                <td style="white-space: nowrap;">12.30 PM - 1.00 PM</td>
                                <td>Registration (Onsite Participants) at Pullman Khon Kaen Raja Orchid Hotel</td>
                            </tr>
                            <tr class=" text-start">
                                <td rowspan="5" style="white-space: nowrap;">1.00 PM - 2.30 PM</td>
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
                                <td>Workshop 2 <i> ...TBD... </i> by Bedrock Anakytics CO., LTD. </td>
                            </tr>
                            <tr class="text-start table-warning">
                                <td>2.30 PM - 2.45 PM</td>
                                <td>Coffee Break </td>
                            </tr>

                            <tr class="text-start">
                                <td rowspan="6" style="white-space: nowrap;">2.45 PM - 4.30 PM</td>
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
                                <td>Workshop 2 <i> ...TBD... </i> by Bedrock Anakytics CO., LTD.  (continue)</td>
                            </tr>
                            <tr class=" text-start">
                                <td>Research Collaboration Networking</td>
                            </tr>
                        </table>

                        <!-- วันที่ 7  -->
                        <table class="table table-bordered mt-5">
                            <thead class="table-secondary">
                                <th colspan="2">November 7, 2024 </th>
                            </thead>
                            <tr class=" text-start">
                                <th>Time</th>
                                <th>Conference Program</th>
                            </tr>
                            <tr class=" text-start">
                                <td style="white-space: nowrap;">08.00 AM - 08.40 AM</td>
                                <td>Registration (Onsite Participants) at Pullman Khon Kaen Raja Orchid Hotel</td>
                            </tr>
                            <tr class=" text-start">
                                <td style="white-space: nowrap;">08.40 AM - 08.50 AM</td>
                                <td>Video Presentation</td>
                            </tr>
                            <tr class=" text-start">
                                <td style="white-space: nowrap;"> 08.50 AM - 09.45 AM</td>
                                <td>Opening Ceremony at Main Conference Hall, Pullman Khon Kaen Raja Orchid Hotel</td>
                            </tr>
                            <tr class="text-start table-warning">
                                <td>09.45 AM - 10.00 AM</td>
                                <td>Coffee Break </td>
                            </tr>

                            <tr class="text-start">
                                <td style="white-space: nowrap;">10.00 AM - 11.00 AM</td>
                                <td>Prof.Dr.Thomas Back - "On the Automated Generation of Optimization Heuristics: A
                                    Dream or Reality?" </td>
                            </tr>
                            <tr class="text-start">
                                <td style="white-space: nowrap;">11.00 AM - 12.00 PM</td>
                                <td>Prof.Dr Dusit Niyato - <i> ...TBD... </i> </td>
                            </tr>
                            <tr class="text-start table-warning">
                                <td style="white-space: nowrap;">12.00 PM - 01.00 PM</td>
                                <td>Lunch Break </td>
                            </tr>
                            <tr class="text-start">
                                <td style="white-space: nowrap;">01.00 PM - 2.30 PM</td>
                                <td>Invited Speakers </td>
                            </tr>
                            <tr class="text-start table-warning">
                                <td style="white-space: nowrap;">02.30 PM - 2.45 PM</td>
                                <td>Coffee Break </td>
                            </tr>
                            <tr class="text-start">
                                <td style="white-space: nowrap;">02.45 PM - 05.00 PM</td>
                                <td>Presentations (Parallel Sessions - 7 Tracks) </td>
                            </tr>
                            <tr class="text-start">
                                <td style="white-space: nowrap;">06.00 PM - 10.00 PM</td>
                                <td>Banquet and Research Networking </td>
                            </tr>
                        </table>

                        <!-- วันที่ 8  -->
                        <table class="table table-bordered mt-5">
                            <thead class="table-secondary">
                                <th colspan="2">November 8, 2024 </th>
                            </thead>
                            <tr class=" text-start">
                                <th>Time</th>
                                <th>Conference Program</th>
                            </tr>
                            <tr class=" text-start">
                                <td style="white-space: nowrap;">08.00 AM - 08.30 AM</td>
                                <td>Registration (Onsite Participants) at Pullman Khon Kaen Raja Orchid Hotel</td>
                            </tr>
                            <tr class=" text-start">
                                <td style="white-space: nowrap;">08.30 AM - 09.30 AM</td>
                                <td>Representative from Huawei</td>
                            </tr>
                            <tr class=" text-start">
                                <td style="white-space: nowrap;"> 09.30 AM - 10.30 AM</td>
                                <td>Prof. Dr. Gitta Kutyniok - "Sustainable AI Computing: A Mathematical Perspective"
                                    (Virtual)</td>
                            </tr>
                            <tr class="text-start table-warning">
                                <td>10.30 AM - 10.45 AM</td>
                                <td>Coffee Break </td>
                            </tr>

                            <tr class="text-start">
                                <td style="white-space: nowrap;">10.45 AM - 12.00 PM</td>
                                <td>AI Forum </td>
                            </tr>
                            <tr class="text-start table-warning">
                                <td style="white-space: nowrap;">12.00 PM - 01.00 PM</td>
                                <td>Lunch Break </td>
                            </tr>
                            <tr class="text-start">
                                <td style="white-space: nowrap;" rowspan="2">01.00 PM - 4.30 PM </td>
                                <td>Presentations (Parallel Sessions - 7 Tracks) </td>
                            </tr>
                            <tr class="text-start">
                                <td>Streering Committee Meeting </td>
                            </tr>
                            <tr class="text-start">
                                <td style="white-space: nowrap;">4.40 PM</td>
                                <td>Conference Closed </td>
                            </tr>

                        </table>

                        <!-- เพิ่มลิงก์ดาวน์โหลดไฟล์ PDF และ DOC -->
                        <div class="download-links mt-3">
                            <a href="./assets/ICSEC2024Schedule.pdf" download
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