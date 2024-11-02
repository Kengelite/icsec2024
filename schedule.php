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

.table th,
.table td {
    vertical-align: top;
    text-align: left;
    border: 1px solid #000;
}

.table thead th {
    background-color: #99cc99;
    font-weight: bold;
}

.sub-table {
    margin: 0;
    /* ปรับให้ตารางย่อยติดขอบ */
    border-collapse: collapse;
    width: 100%;
    /* ปรับให้กว้างเต็มพื้นที่ */
}

.sub-header th {
    background-color: #99cc99;
    font-weight: bold;
    border: 1px solid #000;
}

.inner-cell {
    text-align: left;
    vertical-align: top;
}

.session-chair {
    font-style: italic;
}

.data-item {
    display: block;
}

* {
    color: black;
}

.section-title {
    text-align: center;
}

.table th,
.table td {
    vertical-align: top;
    text-align: left;
    border: 1px solid #000;
}

.table thead th {
    background-color: #99cc99;
    font-weight: bold;
}

.session-chair {
    font-style: italic;
}

/* ปรับขนาดฟอนต์ในหน้าจอขนาดเล็ก */
@media (max-width: 768px) {

    .table th,
    .table td {
        font-size: 0.85rem;
        padding: 0.5rem;
    }
}

@media (max-width: 576px) {

    .table th,
    .table td {
        font-size: 0.75rem;
        padding: 0.3rem;
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

                            <div class="mt-3" style="color:red;">*** The paper numbers presented in the parallel
                                sessions are from those who already
                                have registered, paid, and indicated their prefered mode of presentation. The organizing
                                team will keep updating the table. ***</div>
                        </h5>
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th colspan="2" class="text-center" style="background-color: #99cc99;">November
                                            6, 2024</th>
                                    </tr>
                                    <tr>
                                        <th style="background-color: #99cc99; width: 20%;">Time</th>
                                        <th style="background-color: #99cc99; width: 80%;">Conference Program</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>12.30 PM - 1.00 PM</td>
                                        <td>(Onsite Participants)<br>Registration on the 1st floor,<br>Pullman Khon Kaen
                                            Raja Orchid Hotel</td>
                                    </tr>
                                    <tr>
                                        <td>1.00 PM - 2.30 PM</td>
                                        <td>
                                            Parallel Sessions for Tutorials and Workshops
                                            <div class="table-responsive">
                                                <table class="table sub-table mt-2">
                                                    <thead>
                                                        <tr class="sub-header">
                                                            <th class="text-center">Room#</th>
                                                            <th class="text-center">Fahmui 1 & 2</th>
                                                            <th class="text-center">Chat Tan 1</th>
                                                            <th class="text-center">Fahmui 4 & 5</th>
                                                            <th class="text-center">Erawan 1 & 2</th>
                                                            <th class="text-center">Chat Tan 1 & 2</th>
                                                            <th class="text-center">Fah Mui 3</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <th class="text-center">Activity</th>
                                                            <td class="text-center">Tutorial#1</td>
                                                            <td class="text-center">Tutorial#2</td>
                                                            <td class="text-center">Tutorial#3</td>
                                                            <td class="text-center">Workshop#1</td>
                                                            <td class="text-center">Workshop#2</td>
                                                            <td class="text-center">Presentations</td>
                                                        </tr>
                                                        <tr>
                                                            <th class="text-center">Topic</th>
                                                            <td><b>Quantum Intelligence:<br>An Introduction to Quantum
                                                                    Computing and Quantum Machine Learning</b></td>
                                                            <td><b>Generative AI in Data Science and Analysis</b></td>
                                                            <td><b>An introduction to training and optimizing Large
                                                                    Language Models</b></td>
                                                            <td><b>Digital Security Engineered for Digital-Age
                                                                    Education</b></td>
                                                            <td><b>Your city, smarter than ever with City Digital Data
                                                                    Platform</b></td>
                                                            <td><b>Internet of Things, Wireless Networks and
                                                                    Communications</b><br><span
                                                                    class="session-chair">Session chair: Isoon Kansurat,
                                                                    Ph.D.</span></td>
                                                        </tr>
                                                        <tr>
                                                            <th class="text-center">Speakers</th>
                                                            <td><span style="color: blue;">Prof. Stephen John Turner,
                                                                    Ph.D.</span><br><span
                                                                    style="font-style: italic;">Vidyasirimedhi Institute
                                                                    of Science and Technology (VISTEC), Thailand</span>
                                                            </td>
                                                            <td><span style="color: blue;">Thanachart Numnonda,
                                                                    Ph.D.</span><br><span
                                                                    style="font-style: italic;">Khon Kaen University,
                                                                    Thailand</span>
                                                            </td>
                                                            <td><span style="color: blue;">Asst. Prof. Jan N. van Rijn,
                                                                    Ph.D.</span><br><span
                                                                    style="font-style: italic;">Leiden Institute of
                                                                    Advanced Computer Science (LIACS), Leiden
                                                                    University, The Netherlands</span></td>
                                                            <td><span style="color: blue;">Mr. Sophon
                                                                    Thanaratikun</span><br><span
                                                                    style="font-style: italic;">Fortinet Security
                                                                    Network (Thailand) Ltd.</span></td>
                                                            <td><span style="color: blue;">Mr. Arun
                                                                    Ongartsittigul</span><br><span
                                                                    style="font-style: italic;">Bedrock Analytics Co.,
                                                                    Ltd.</span></td>
                                                            <td>
                                                                <span class="data-item">1571047783</span>
                                                                <span class="data-item">1571049029</span>
                                                                <span class="data-item">1571056231</span>
                                                                <span class="data-item">1571056234</span>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="background-color: #99cc99; width: 20%;">2.30 PM - 2.45 PM</td>
                                        <td style="background-color: #99cc99; width: 80%;">Coffee Break</td>
                                    </tr>
                                    <tr>
                                        <td>2.45 PM - 4.30 PM</td>
                                        <td class="inner-cell">
                                            <table class="table sub-table mt-2">
                                                <thead>
                                                    <tr class="sub-header">
                                                        <th class="text-center">Room#</th>
                                                        <th class="text-center">Fahmui 1 & 2</th>
                                                        <th class="text-center">Fahmui 4 & 5</th>
                                                        <th class="text-center">Erawan 1 & 2</th>
                                                        <th class="text-center">Chat Tan 1 & 2</th>
                                                        <th class="text-center" style="width: 15%;">Fah Mui 3</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <th class="text-center">Activity</th>
                                                        <td style="text-align: center; vertical-align: middle;"
                                                            rowspan="3">Research Collaboration and
                                                            Networking Session</td>
                                                        <td class="text-center">Tutorial#3 (Continue)</td>
                                                        <td class="text-center">Workshop#1 (Continue)</td>
                                                        <td class="text-center">Workshop#3</td>
                                                        <td class="text-center"></td>
                                                    </tr>
                                                    <tr>
                                                        <th class="text-center">Topic</th>

                                                        <td><b>An introduction to training and optimizing Large Language
                                                                Models</b></td>
                                                        <td><b>Digital Security Engineered for Digital-Age Education
                                                        </td>
                                                        <td><b>Deepzoom Platform</b></td>
                                                        <td rowspan="2" style="text-align: center;">TBA</td>
                                                    </tr>
                                                    <tr>
                                                        <th class="text-center">Speakers</th>

                                                        <td><span style="color: blue;">Asst. Prof. Jan N. van Rijn,
                                                                Ph.D.</span><br><span style="font-style: italic;">The
                                                                Leiden Institute of Advanced Computer Science (LIACS),
                                                                Leiden University, The Netherlands</span></td>
                                                        <td><span style="color: blue;">Mr. Sophon
                                                                Thanaratikun</span><br><span
                                                                style="font-style: italic;">Fortinet Security Network
                                                                (Thailand) Ltd.</span></td>
                                                        <td><span style="color: blue;">Mr. Kasisdis
                                                                Mahakijdechachai</span><br><span
                                                                style="font-style: italic;">Bedrock Analytics Co.,
                                                                Ltd.</span></td>

                                                    </tr>
                                                </tbody>
                                            </table>
                                </tbody>
                            </table>


                        </div>
                        <!-- ต่อจากโค้ดก่อนหน้า -->

                        <!-- ตารางวันที่ 7 พฤศจิกายน -->
                        <div class="table-responsive mt-5">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th colspan="2" class="text-center" style="background-color: #f2a08a;">November
                                            7, 2024</th>
                                    </tr>
                                    <tr>
                                        <th style="background-color: #f2a08a; width: 20%;">Time</th>
                                        <th style="background-color: #f2a08a; width: 80%;">Conference Program</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>08.00 AM - 08.40 AM</td>
                                        <td>
                                            <div style="width: 50%; float: left; border-right: 1px solid #000;">
                                                Onsite participants register on the 2nd floor, <br>
                                                Orchid Ballroom 1, Pullman Khon Kaen Raja Orchid Hotel
                                            </div>
                                            <div style=" width: 50%; float: left; padding-left: 10px; ">
                                                Online participants join via Zoom Meeting
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>08.40 AM - 08.50 AM</td>
                                        <td>Video Presentation</td>
                                    </tr>
                                    <tr>
                                        <td>08.50 AM - 09.40 AM</td>
                                        <td>Opening Ceremony</td>
                                    </tr>
                                    <tr>
                                        <td>09.40 AM - 09.45 AM</td>
                                        <td>Group photo (Onsite and Online)</td>
                                    </tr>
                                    <tr>
                                        <td style="background-color: #f2a08a;">09.45 AM - 10.00 AM</td>
                                        <td style="background-color: #f2a08a;">Coffee Break</td>
                                    </tr>
                                    <tr>
                                        <td>10.00 AM - 11.00 AM</td>
                                        <td>
                                            <b>Keynote</b><br><b>
                                                "On the Automated Generation of Optimization Heuristics: A Dream or
                                                Reality?"<br></b>
                                            <span style="color: blue;">Professor Thomas Bäck, Ph.D., IEEE
                                                Fellow</span><br>The Leiden Institute of Advanced Computer
                                            Science (LIACS), Leiden University, The Netherlands
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>11.00 AM - 12.00 PM</td>
                                        <td>
                                            <b>Keynote</b><br>
                                            <b>"Large Language Models (LLMs) with Retrieval-Augmented Generation for
                                                Next
                                                Generation Networking" <br>(Virtual presentation)</b>
                                            <br>
                                            <span style="color: blue;">Professor Dusit (Tao) Niyato, Ph.D., IEEE Fellow,
                                                IET Fellow </span><br>
                                            School of Computer Science and Engineering (SCSE), Nanyang Technological
                                            University, Singapore

                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="background-color: #f2a08a;">12.00 PM - 01.15 PM</td>
                                        <td style="background-color: #f2a08a;">Lunch Break</td>
                                    </tr>
                                    <tr>
                                        <td>01.15 PM - 02.15 PM</td>
                                        <td>
                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr style="background-color: #f2a08a;">
                                                        <th style="width: 10%; background-color: #f2a08a;"
                                                            class="text-center">Room#</th>
                                                        <th style="width: 30%; background-color: #f2a08a;"
                                                            class="text-center">ChatTan 2
                                                        </th>
                                                        <th style="width: 30%; background-color: #f2a08a;"
                                                            class="text-center">Fahmui 1 & 2
                                                        </th>
                                                        <th style="width: 30%; background-color: #f2a08a;"
                                                            class="text-center">Erawan 2</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <th>Activity</th>
                                                        <td>Invited Speaker</td>
                                                        <td>Invited Speaker</td>
                                                        <td>Invited Speaker</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Topic</th>
                                                        <td>Real-Time AI-Based Video Analytics: Theory and Applications
                                                        </td>
                                                        <td>Nature-inspired Robot Intelligence: From Nature to Advanced
                                                            Robotics Technology</td>
                                                        <td>Revolutionizing Healthcare with Digital Twins: The Power of
                                                            Generative AI Integration</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Speakers</th>
                                                        <td><span style="color: blue;">Assoc.Prof. Peerapon Vateekul,
                                                                Ph.D. </span><br>
                                                            <span style="font-style: italic;">Chulalongkorn University,
                                                                Thailand</span>
                                                        </td>
                                                        <td><span style="color: blue;">Professor Poramate Manoonpong,
                                                                Ph.D.</span><br>
                                                            <span style="font-style: italic;">Vidyasirimedhi Institute
                                                                of Science and Technology (VISTEC), Thailand</span>
                                                        </td>
                                                        <td><span style="color: blue;">Professor Paisarn Muneesawang,
                                                                Ph.D.</span><br>
                                                            <span style="font-style: italic;">Faculty of Engineering,
                                                                Mahidol University, Thailand</span>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="background-color: #f2a08a;">02.15 PM - 02.30 PM</td>
                                        <td style="background-color: #f2a08a;">Coffee Break</td>
                                    </tr>
                                    <tr>
                                        <td>02.30 PM - 05.00 PM</td>
                                        <td>Presentations (Parallel Sessions) – <i>See the details on page 7-8</i></td>
                                    </tr>
                                    <tr>
                                        <td>06.30 PM - 09.00 PM</td>
                                        <td>Reception and Best Paper awards<br>Pullman Khon Kaen Raja Orchid Hotel</td>
                                    </tr>
                                </tbody>
                            </table>


                        </div>

                        <!-- ตารางวันที่ 8 -->
                        <div class="table-responsive mt-5">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th colspan="2" class="text-center" style="background-color: #99ccff;">November
                                            8, 2024</th>
                                    </tr>
                                    <tr>
                                        <th style="background-color: #99ccff; width: 20%;">Time</th>
                                        <th style="background-color: #99ccff; width: 80%;">Conference Program</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>08.00 AM - 08.30 AM</td>
                                        <td>
                                            <div style="width: 50%; float: left; border-right: 1px solid #000;">
                                                Onsite participants register on the 2nd floor, <br>
                                                Orchid Ballroom 1, Pullman Khon Kaen Raja Orchid Hotel
                                            </div>
                                            <div style="width: 50%; float: left; padding-left: 10px;">
                                                Online participants join via Zoom Meeting
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>08.30 AM - 10.15 AM</td>
                                        <td><b>AI Forum: Thailand AI Development Plan Forum (2024 – 2030)</b><br>
                                            Computer Science Cooperative Research Network (CSCRN) <br>
                                            Professor Chidchanok Lursinsap, Ph.D and Professor Sartra Wongthanavasu,
                                            Ph.D.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="background-color: #99ccff;">10.15 AM - 10.30 AM</td>
                                        <td style="background-color: #99ccff;">Coffee Break</td>
                                    </tr>
                                    <tr>
                                        <td>10.30 AM - 11.30 AM</td>
                                        <td>
                                            <b>Keynote</b><br><b>
                                                "Building the Digital University: Framework for the Future of Learning,
                                                Campus, and Research" <br></b>
                                            <span style="color: blue;">Mr. Thanapop Juthavantana</span><br>
                                            Technical Director Commercial and Distribution Sales Dept, Huawei Thailand,
                                            Thailand
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>11.30 AM - 12.30 PM</td>
                                        <td>
                                            <b>Keynote</b><br><b>
                                                "Sustainable AI Computing: A Mathematical Perspective" <br>(Virtual
                                                presentation) <br></b><span style="color: blue;">Professor Gitta
                                                Kutyniok,
                                                Ph.D., IEEE Fellow </span><br>
                                            The Institute of Mathematics at the Ludwig Maximilian, University of Munich,
                                            Germany
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="background-color: #99ccff;">12.30 PM - 01.15 PM</td>
                                        <td style="background-color: #99ccff;">Lunch Break</td>
                                    </tr>
                                    <tr>
                                        <td>01.15 PM - 2.45 PM</td>
                                        <td>
                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr style="background-color: #99ccff;">
                                                        <th style="width: 10%; background-color: #99ccff;"
                                                            class="text-center">Room#</th>
                                                        <th style="width: 30%; background-color: #99ccff;"></th>
                                                        <th style="width: 30%; background-color: #99ccff;"
                                                            class="text-center">Erawan 2</th>
                                                        <th style="width: 30%; background-color: #99ccff;"
                                                            class="text-center">Fah Mui 1 & 2
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <th>Activity</th>
                                                        <td>Presentations (Parallel Sessions)</td>
                                                        <td>Invited Speaker</td>
                                                        <td rowspan="3">Steering committee meeting</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Topic</th>
                                                        <td rowspan="2">See the details on page 7-8</td>
                                                        <td>TBA</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Speakers</th>
                                                        <td><span style="color: blue;">Prinya Hom-anek, Ph.D.</span><br>
                                                            <span style="font-style: italic;">ACIS Professional Center
                                                                Co., Ltd., Thailand</span>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>

                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="background-color: #99ccff;">2.45 PM - 3.00 PM</td>
                                        <td style="background-color: #99ccff;">Coffee Break</td>
                                    </tr>
                                    <tr>
                                        <td><b>1:15 PM - 4.30 PM</b></td>
                                        <td><b>City tour (Registration Required)</b></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <table class="table table-bordered mt-5">

                            <tr class="table-success ">
                                <th colspan="9" style="text-align: center; background-color:#f2a08a; ">Presentations
                                    (Parallel Sessions) November 7, 2024</th>
                            </tr>
                            <tr class=" text-start">
                                <td style="white-space: nowrap;" rowspan="1">Room#</td>
                                <td colspan="1" style="text-align:center;">Fah Mui 1 & 2</td>
                                <td colspan="1" style="text-align:center;">Fah Mui 3</td>
                                <td colspan="1" style="text-align:center;">Erawan 1</td>
                                <td colspan="1" style="text-align:center;">Fah Mui 4</td>
                                <td colspan="1" style="text-align:center;">Chat Tan 1</td>
                                <td colspan="1" style="text-align:center;">Chat Tan 2</td>
                                <td colspan="1" style="text-align:center;">Fah Mui 5</td>
                                <td colspan="1" style="text-align:center;">Erawan 2</td>
                            </tr>
                            <tr class=" text-start">
                                <td style="white-space: nowrap;" rowspan="1">Topic</td>
                                <td colspan="1" style="text-align:center;">Applied AI, Generative AI, and Machine
                                    Learning</td>
                                <td colspan="1" style="text-align:center;">Big Data, Data Science, and Applications</td>
                                <td colspan="1" style="text-align:center;">Natural Language Processing</td>
                                <td colspan="1" style="text-align:center;">Computer Educational Technology</td>
                                <td colspan="1" style="text-align:center;">Computer Vision and Image Processing</td>
                                <td colspan="1" style="text-align:center;">Computer Simulation and Modeling</td>
                                <td colspan="1" style="text-align:center;">Geo-informatics and Remote Sensing</td>
                                <td colspan="1" style="text-align:center;">Special Session: HPC-ComCon 2024</td>
                            </tr>
                            <tr class=" text-start" style="background-color:#c2c0c0">
                                <td style="white-space: nowrap;" rowspan="1">Session chairs</td>
                                <td colspan="1" style="text-align:center;">Asst. Prof. Dr. Jan N. van Rijn</td>
                                <td colspan="1" style="text-align:center;">Assoc. Prof. Wararat Songpan</td>
                                <td colspan="1" style="text-align:center;">Dr. Pongsathorn Janyoi and Dr. Arfat Ahmad
                                    Khan</td>
                                <td colspan="1" style="text-align:center;">Assoc. Prof. Dr. Kanda Runapongsa Saikaew
                                </td>
                                <td colspan="1" style="text-align:center;">Prof. Dr. Poramate Manoonpong</td>
                                <td colspan="1" style="text-align:center;">Assoc.Prof. Dr. Olarik Surinta</td>
                                <td colspan="1" style="text-align:center;">Prof. Masahiko Nagai and Dr. Sakpod
                                    Tongleamnak</td>
                                <td colspan="1" style="text-align:center;">Prof. Pascal Bouvry</td>
                            </tr>
                            <tr class=" text-start">
                                <td style="white-space: nowrap;" rowspan="6">Time
                                    02.30 PM - 05.00 PM
                                </td>
                                <td colspan="1" style="background-color:#b7ebb2">1571038517</td>
                                <td colspan="1" style="background-color:#b7ebb2">1571048575</td>
                                <td colspan="1" style="background-color:#f9fdb5">1571038788</td>
                                <td colspan="1" style="background-color:#b7ebb2">1571037497</td>
                                <td colspan="1" style="background-color:#b7ebb2">1571055857</td>
                                <td colspan="1" style="background-color:#b7ebb2">1571056256</td>
                                <td colspan="1" style="background-color:#f9fdb5">1571056376</td>
                                <td colspan="1" style="background-color:#b7ebb2">1571054432</td>
                            </tr>
                            <tr class="text-start">
                                <td colspan="1" style="background-color:#b7ebb2">1571054980</td>
                                <td colspan="1" style="background-color:#b7ebb2">1571048275</td>
                                <td colspan="1" style="background-color:#b7ebb2">1571049090</td>
                                <td colspan="1" style="background-color:#b7ebb2">1571056131</td>
                                <td colspan="1" style="background-color:#b7ebb2">1571048928</td>
                                <td colspan="1" style="background-color:#b7ebb2">1571038480</td>
                                <td colspan="1" style="background-color:#b7ebb2">1571051358</td>
                                <td colspan="1" style="background-color:#b7ebb2">1571047854</td>
                            </tr>
                            <tr class="text-start">
                                <td colspan="1" style="background-color:#b7ebb2">1571054576</td>
                                <td colspan="1" style="background-color:#f9fdb5">1571052530</td>
                                <td colspan="1" style="background-color:#b7ebb2">1571039074</td>
                                <td colspan="1" style="background-color:#f9fdb5">1571048580</td>
                                <td colspan="1" style="background-color:#b7ebb2">1571048094</td>
                                <td colspan="1" style="background-color:#b7ebb2">1571054846</td>
                                <td colspan="1" style="background-color:#b7ebb2">1571055588</td>
                                <td colspan="1" style="background-color:#f9fdb5">1571071673</td>
                            </tr>
                            <tr class="text-start">
                                <td colspan="1" style="background-color:#b7ebb2">1571056060</td>
                                <td colspan="1" style="background-color:#f9fdb5">1571049136</td>
                                <td colspan="1" style="background-color:#b7ebb2">1571056048</td>
                                <td colspan="1" style="background-color:#f9fdb5">1571056345</td>
                                <td colspan="1" style="background-color:#f9fdb5">1571038665</td>
                                <td colspan="1" style="background-color:#b7ebb2">1571055924</td>
                                <td colspan="1" style="background-color:#b7ebb2">1571038720</td>
                                <td colspan="1"></td>
                            </tr>
                            <tr class="text-start">
                                <td colspan="1" style="background-color:#b7ebb2">1571049092</td>
                                <td colspan="1" style="background-color:#f9fdb5">1571043789</td>
                                <td colspan="1" style="background-color:#b7ebb2">1571048596</td>
                                <td colspan="1" style="background-color:#f9fdb5">1571048315</td>
                                <td colspan="1" style="background-color:#f9fdb5">1571048239</td>
                                <td colspan="1" style="background-color:#b7ebb2">1571054437</td>
                                <td colspan="1"></td>
                                <td colspan="1"></td>
                            </tr>
                            <tr class="text-start">
                                <td colspan="1"></td>
                                <td colspan="1"></td>
                                <td colspan="1" style="background-color:#b7ebb2">1571035405</td>
                                <td colspan="1"></td>
                                <td colspan="1"></td>
                                <td colspan="1"></td>
                                <td colspan="1"></td>
                                <td colspan="1"></td>
                            </tr>

                        </table>

                        <table class="table table-bordered mt-5">

                            <tr class="table-success ">
                                <th colspan="6" style="text-align: center; background-color:#99ccff; ">Presentations
                                    (Parallel Sessions) November 8, 2024</th>
                            </tr>
                            <tr class=" text-start">
                                <td style="white-space: nowrap;" rowspan="1">Room#</td>
                                <td colspan="1" style="text-align:center;">Chat Tan 1</td>
                                <td colspan="1" style="text-align:center;">Fah Mui 3</td>
                                <td colspan="1" style="text-align:center;">Fah Mui 4</td>
                                <td colspan="1" style="text-align:center;">Chat Tan 2</td>
                                <td colspan="1" style="text-align:center;">Erawan 1</td>
                            </tr>
                            <tr class=" text-start">
                                <td style="white-space: nowrap;" rowspan="1">Topic</td>
                                <td colspan="1" style="text-align:center;">Special Session: AI in Medical and Healthcare
                                    (AIMedHealth 2024)</td>
                                <td colspan="1" style="text-align:center;">Applied AI and Machine Learning</td>
                                <td colspan="1" style="text-align:center;">Business Intelligence</td>
                                <td colspan="1" style="text-align:center;">Cyber Security, Embedded Systems, and
                                    Robotics</td>
                                <td colspan="1" style="text-align:center;">HCI, Software Engineering, and Software
                                    Development</td>
                            </tr>
                            <tr class=" text-start" style="background-color:#c2c0c0">
                                <td style="white-space: nowrap;" rowspan="1">Session chairs</td>
                                <td colspan="1" style="text-align:center;">Thepchai Supnithi, Ph.D.</td>
                                <td colspan="1" style="text-align:center;">Praisan Padungweang, Ph.D.</td>
                                <td colspan="1" style="text-align:center;">Jakkrit Kaewyotha, Ph.D,</td>
                                <td colspan="1" style="text-align:center;">Professor Deepak Prashar, Ph.D. (Online) &
                                    Assoc. Prof. Punyaphol Horata</td>
                                <td colspan="1" style="text-align:center;">Assoc. Prof.
                                    Kanda Runapongsa Saikaew, Ph.D.
                                </td>
                            </tr>
                            <tr class=" text-start">
                                <td style="white-space: nowrap;" rowspan="6">Time
                                    01.15 PM - 2.45 PM

                                </td>
                                <td colspan="1" style="background-color:#b7ebb2">1571051917</td>
                                <td colspan="1" style="background-color:#b7ebb2">1571056139</td>
                                <td colspan="1" style="background-color:#b7ebb2">1571051617</td>
                                <td colspan="1" style="background-color:#f9fdb5">1571048687</td>
                                <td colspan="1" style="background-color:#b7ebb2">1571048826</td>
                            </tr>
                            <tr class="text-start">
                                <td colspan="1" style="background-color:#b7ebb2">1571055893</td>
                                <td colspan="1" style="background-color:#b7ebb2">1571056241</td>
                                <td colspan="1" style="background-color:#b7ebb2">1571049112</td>
                                <td colspan="1" style="background-color:#b7ebb2">1571038341</td>
                                <td colspan="1" style="background-color:#b7ebb2">1571056052</td>
                            </tr>
                            <tr class="text-start">
                                <td colspan="1" style="background-color:#b7ebb2">1571055925</td>
                                <td colspan="1" style="background-color:#b7ebb2">1571055829</td>
                                <td colspan="1" style="background-color:#f9fdb5">1571046180</td>
                                <td colspan="1" style="background-color:#b7ebb2">1571056251</td>
                                <td colspan="1" style="background-color:#b7ebb2">1571056055</td>
                            </tr>
                            <tr class="text-start">
                                <td colspan="1" style="background-color:#b7ebb2">1571049305</td>
                                <td colspan="1" style="background-color:#f9fdb5">1571049093</td>
                                <td colspan="1" style="background-color:#f9fdb5">1571056252</td>
                                <td colspan="1" style="background-color:#b7ebb2">1571049216</td>
                                <td colspan="1" style="background-color:#b7ebb2">1571056056</td>
                            </tr>
                            <tr class="text-start">
                                <td colspan="1"></td>
                                <td colspan="1"></td>
                                <td colspan="1"></td>
                                <td colspan="1" style="background-color:#b7ebb2">1571048652</td>
                                <td colspan="1"></td>
                            </tr>

                        </table>
                        <div class="d-flex align-items-center mt-3">
                            <span style="font-weight: bold; margin-right: 10px;">Note:</span>
                            <div style="display: inline-flex; align-items: center; margin-right: 20px;">
                                <div
                                    style="width: 30px; height: 20px; background-color: #d9ead3; border: 1px solid #000; margin-right: 5px;">
                                </div>
                                <span>Onsite</span>
                            </div>
                            <div style="display: inline-flex; align-items: center;">
                                <div
                                    style="width: 30px; height: 20px; background-color: #ffff00; border: 1px solid #000; margin-right: 5px;">
                                </div>
                                <span>Online</span>
                            </div>
                        </div>

                        <!-- ปิดท้ายด้วยส่วนที่เหลือของโค้ดเดิม -->

                    </div>

                    <!-- เพิ่มลิงก์ดาวน์โหลดไฟล์ PDF และ DOC -->
                    <div class="download-links mt-3">
                        <a href="./assets/Schedule_ICSEC2024-ENG.pdf" download
                            class="btn btn-primary me-2 d-inline-block">Download Schedule PDF</a>
                        <a href="./assets/ICSEC2024_AbstractBooklet_electronics_2Nov24.pdf" download
                            class="btn btn-primary me-2 d-inline-block">Download Abstract Booklet PDF</a>
                    </div>

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
                        <h1 class="display-4 fw-semibold">Floor plan</h1>
                        <div class="line"></div>
                        <img src="./assets/images/Floorplan1.jpg">
                        <img src="./assets/images/Floorplan2.jpg">
                    </div>
                    <div class="download-links mt-3">
                        <a href="./assets/Floorplan.pdf" download class="btn btn-primary me-2">Download
                            PDF</a>
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