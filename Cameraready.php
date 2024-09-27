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
</head>
<style>
* {
    color: black;
}

/* จัดหน้า content ให้อยู่ตรงกลาง */
.text-center {
    text-align: center;
}

p {
    line-height: 1.5;
    /* หรือค่าอื่น ๆ ที่คุณต้องการ */
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

/* ปรับขนาดและรูปแบบของเนื้อหา */
.display-4 {
    font-size: 2.5rem;
    margin-bottom: 20px;
    /* เพิ่มระยะห่างด้านล่างของหัวข้อ */
}

/* เส้นบนหัวข้อ */


/* จัดข้อความซ้าย */
.left-align {
    text-align: left;
    margin-bottom: 20px;
    /* เพิ่มระยะห่างด้านล่างของข้อความ */
}

/* ข้อความตัวเอียง */
.fw-semibold {
    font-weight: 600;
}

.section-title {
    text-align: center;
}

.left-align.justify {
    text-align: justify;
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
                        <h1 class="display-4 fw-semibold">Instructions for Camera-Ready Preparation</h1>
                        <div class="line"></div>
                        <ol class="left-align justify">
                            <li class="ps-2">
                                Please improve your review manuscript by considering the reviewer's comments and
                                anything else you want to edit before submitting the final version of your
                                manuscript.</a>
                            </li>
                            <li class="ps-2">
                                Please adhere to the <U>IEEE format</U> in your writing and ensure <U>all fonts are
                                    embedded in
                                    the content.</U> This is a significant step that will ensure your PDF passes the
                                IEEE PDF
                                eXpress check.
                            </li>
                            <li class="ps-2">
                                <span style="color: red;">The similarity index of the paper must not exceed 25%.</span>
                                The conference organizer employs plagiarism detection software to verify the similarity
                                level of your manuscript.
                            </li>
                            <li class="ps-2">
                                <span style="color: red;">The author names listed in the camera-ready (i.e., the final
                                    version of the
                                    manuscript) must match those in the submission system </span>unless the ICSEC chair
                                has
                                explicitly consented to any changes.
                            </li>
                            <li class="ps-2">
                                Please add the following copyright notice to the footer of the first page of your
                                manuscript:
                                <ol type="a">
                                    <li>
                                        <p> For papers in which all authors are employed by the US government, the
                                            copyright notice is:
                                            <br>
                                            <strong style="font-weight: 900;">U.S. Government work not protected by U.S.
                                                copyright</strong>
                                        </p>
                                    </li>
                                    <li>
                                        <p> For papers in which all authors are employed by a Crown government (UK,
                                            Canada, and Australia), the copyright notice is:
                                            <br>
                                            <strong style="font-weight: 900;">979-8-3503-6686-0/24/&#36;31.00 &copy;
                                                2024 Crown</strong>
                                        </p>
                                    </li>
                                    <li>
                                        <p> For papers in which all authors are employed by the European Union, the
                                            copyright notice is:
                                            <br>
                                            <strong style="font-weight: 900;">979-8-3503-6686-0/24/&#36;31.00 &copy;
                                                2024 European Union</strong>
                                        </p>
                                    </li>
                                    <li>
                                        <p> For all other papers the copyright notice is:
                                            <br>
                                            <strong style="font-weight: 900;">979-8-3503-6686-0/24/&#36;31.00 &copy;
                                                2024 IEEE</strong>
                                        </p>
                                    </li>
                                </ol>
                            </li>
                            <li class="ps-2">
                                Please add the following copyright notice to the footer of the first page of your
                                manuscript:
                                <ol style="list-style-type:none;">
                                    <li>6.1 Please visit the pdf eXpress login page:
                                        <a href="https://ieee-pdf-express.org/account/login" target="_blank">
                                            https://ieee-pdf-express.org/account/login</a>
                                    </li>
                                    <li class="pt-2">
                                        6.2 Create an account using your email address, Conference ID: <strong>62781X</strong> , and a
                                        password of your choice, as shown in the screenshot below.
                                        <br>
                                        <div style="text-align: center;">
                                            <img class="w-50" src="./assets/images/IEEE_PDF.png" alt="">
                                        </div>
                                    </li>
                                    <li class="pt-3">6.3 After you log in, please upload your final PDF manuscript and
                                        wait for PDF
                                        eXpress to perform the necessary checks. Once the PDF passes the PDF eXpress
                                        check, please download the PDF eXpress provided PDF and upload this new PDF
                                        eXpress passed .pdf file to EDAS as the Camera-Ready manuscript.</li>
                                    <li class="pt-2">6.4 More information on how to use pdf eXpress is available at
                                        <a href="https://ieee-pdf-express.org/External/UsingIEEEPDFeXpress"
                                            target="_blank">
                                            https://ieee-pdf-express.org/External/UsingIEEEPDFeXpress.</a>
                                    </li>
                                    <li class="pt-2">6.5 If you are having trouble with the pdfXpress website, please
                                        email
                                        PDFSupport@ieee.org and send them your query or screenshot of the error. The
                                        conference committee may be unable to address questions related to pdfXpress
                                        support/issues.</li>
                                </ol>
                            </li>
                        </ol>
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
                        <h1 class="display-4 fw-semibold">Copyright Information</h1>
                        <div class="line"></div>
                        <ul class="left-align justify">
                            <li>IEEE requires all authors or their employers who intend to publish in the IEEE Xplore
                                Digital Library to provide an electronic transfer of the copyright using the IEEE
                                Electronic Copyright Form (eCF).</li>
                            <li>Copyright and Reprint Permission: Abstracting is permitted with credit to the source.
                                Libraries are permitted to photocopy beyond the limit of U.S. copyright law for private
                                use of patrons those articles in this volume that carry a code at the bottom of the
                                first page, provided the per-copy fee indicated in the code is paid through Copyright
                                Clearance Center, 222 Rosewood Drive, Danvers, MA 01923. For reprint or republication
                                permission, email to IEEE Copyrights Manager at pubs-permissions@ieee.org. All rights
                                reserved. Copyright ©2024 by IEEE.
                            </li>

                        </ul>
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