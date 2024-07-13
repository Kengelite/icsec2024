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

    .left-align.justify {
        text-align: justify;
    }
</style><body data-bs-spy="scroll" data-bs-target=".navbar">

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
</section>
    <!-- ABOUT -->
    <section id="about" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center" data-aos="fade-down" data-aos-delay="50">
                    <div class="section-title">
                        <h1 class="display-4 fw-semibold"> Digital Security Engineered for Digital-Age Education</h1>
                        <div class="line"></div>

                        <p class="left-align text">The digital transformation of the education environment has empowered schools & university students and teachers with new methods and tools to learn, teach and conduct research. However, the same technology along with cloud services, Bring Your Own Devices (BYOD) and Internet of Things (IoT), increases the attack surface and introduces security risks which makes the campus networks vulnerable to cyber threats and security breaches. The challenge is to find a right security posture that protects its resources and users while at the same time providing a collaborative learning environment. Fortinet is well-positioned to accompany schools, universities, and colleges on their digital transformation journey with security transformation provided by the Fortinet Security Fabric.</p>
                        <p class="left-align text">Attend this hands-on technical training workshop to learn how Fortinet can help you find the right balance between an open and secure academic environment by providing intelligent security for a safe learning environment.</p>
                        <p class="left-align text">Participants who attend this workshop will learn how to:</p>
                        <ul class="left-align compact justify">
                            <li>Configure and leverage Next Generation Firewall (NGFW) capabilities of FortiGate in your environment.</li>
                            <li>Configure FortiClient Endpoint Management System (EMS) and FortiGate Zero Trust Network Access (ZTNA) Application Gateway for secure remote access to applications.</li>
                            <li>Using FortiEDR can provide advanced endpoint protection and help analyze and classify potentially malicious events.</li>
                            <li>Use SD-WAN Templates to facilitate SD-WAN deployments via FortiManager.</li>
                        </ul>

                        <style>
                            /* สไตล์สำหรับตาราง */
                            .info-table {
                                width: 100%;
                                border-collapse: collapse;
                                margin-bottom: 20px;
                            }

                            .info-table th,
                            .info-table td {
                                border: 1px solid #ddd;
                                padding: 8px;
                                text-align: left;
                            }
                        </style>

                        <!-- ตารางข้อมูล -->
                        <table class="info-table">
                            <tr>
                                <th>Format</th>
                                <td>2-3 hours technical workshop</td>
                            </tr>
                            <tr>
                                <th>Objective</th>
                                <td class="text">Provide a compelling, hands-on learning experience to understand how easy it is to deploy, configure, and enable an organization to maintain security and control for a safe learning environment.</td>
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