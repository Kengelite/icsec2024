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

.section-title {
    text-align: center;
}

.left-align {
    text-align: left;
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

.section-padding {
    padding-top: 70px;
    padding-bottom: 0px;
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
    <section id="about" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center" data-aos="fade-down" data-aos-delay="50">
                    <div class="section-title">
                        <h1 class="display-4 fw-semibold">Presentation Guidelines</h1>
                        <p>*** The registered presenter must indicate the preferred presentation mode, i.e., onsite or
                            online.<br> Please refer to the following guidelines that match your selected mode of
                            presentation. ***</p>
                        <div class="line"></div>

                        <div style="text-align: left;" class="mt-3">
                            <h3>Onsite presentation</h3>

                        </div>
                        <div style="text-align: left;" class="mt-3 ms-5"><b>1 . </b>Your presentation must be in
                            either Microsoft PowerPoint or PDF format. For Latex and R users, please export a PDF file
                            of your project.

                        </div>
                        <div style="text-align: left;" class="mt-3 ms-5"><b>2 . </b> To avoid technical issues during
                            your
                            presentation, the slide ratio should be 16:9. To change the ratio on Microsoft PowerPoint,
                            please go to the ‘Design’ tab at the top, then select ‘Slide Size’. Then, you will find the
                            ratio options.
                        </div>
                        <div style="text-align: left;" class="mt-3 ms-5"><b>3 . </b>The presentation file must be
                            uploaded to EDAS <u style="color: red;" > no
                            later than October 28, 2024, AoE.</u> Your presentation file will be downloaded to the local
                            machine in the presentation room.
                        </div>
                        <img src="./assets/images/present1_1.png" alt="ICSEC 2024" class="mt-3 ms-5 mb-4"
                            style="max-width: 100%; height: auto;">

                        <!-- step3  -->
                        <div style="text-align: left;" class="mt-3 ms-5"><b>4 . </b>If you would like to use your
                            device during the presentation, please
                            <ul style="list-style-type: lower-alpha;" class="ms-4">
                                <li>bring a connector to prevent compatibility issues,</li>
                                <li>try to connect your device and test during the session break, and</li>
                                <li>inform the session chair or our staff in the assigned room before the session
                                    starts.</li>
                            </ul>
                        </div>


                        <div style="text-align: left;" class="mt-3">
                            <h3>Online presentation</h3>

                        </div>
                        <div style="text-align: left;" class="mt-3 ms-5"><b>1 . </b>Please prepare both a
                            presentation file and a video presentation. Since the conference is hybrid, you will deliver
                            a live presentation with Q&A via the Zoom meeting application. The session chair and our
                            technical staff will assist you during your live presentation. A video presentation will be
                            used only in emergencies, e.g., if an internet connection is lost during the session, the
                            audio will be of poor quality, etc.

                        </div>
                        <div style="text-align: left;" class="mt-3 ms-5"><b>2 . </b>The presenter will receive a Zoom
                            meeting invitation and an invitation to Google Drive after the camera-ready deadline is
                            closed. Please ensure you have installed and updated Zoom on your device before the session
                            starts.
                        </div>
                        <div style="text-align: left;" class="mt-3 ms-5"><b>3 . </b>The presenter must prepare a
                            presentation video in .mp4 format. The video will be used as a backup, in case the internet
                            connection is poor and the audience cannot hear the presentation well. The session chair has
                            the right to switch from a live presentation to a video presentation instead. <u style="color: red;" > The presenter
                            must show up (online) throughout the session to answer questions from the audience.
                            Otherwise, ICSEC2024 reserves the right to exclude the paper from the proceedings due to the
                            ‘no show’ policy.</u>
                        </div>
                        <div style="text-align: left;" class="mt-3 ms-5"><b>4 . </b>The registered presenter
                            indicated in EDAS will be contacted via email. The person will receive a link and permission
                            to upload the video to the allocated Google Drive. Each paper will receive a maximum of 1GB
                            in the given storage.
                        </div>
                        <div style="text-align: left;" class="mt-3 ms-5"><b>5 . </b>The video presentation must be
                            uploaded <U style="color: red;" >no later than October 20, 2024, AoE.</U> Our technical staff will check on the quality
                            of the video to ensure that it is ready to use. If not, we will contact you to fix the file.
                        </div>
                        <div style="text-align: left;" class="mt-3 ms-5"><b>6 . </b>Your presentation must be in either
                            Microsoft PowerPoint or PDF format. For Latex and R users, please export a PDF file of your
                            project.
                        </div>
                        <div style="text-align: left;" class="mt-3 ms-5"><b>7 . </b>The presentation file must be
                            uploaded to EDAS <U style="color: red;" >no later than October 28, 2024, AoE. </U> Your presentation file will be
                            downloaded to the local machine in the presentation room.
                        </div>
                        <img src="./assets/images/present1_1.png" alt="ICSEC 2024" class="mt-3 ms-5 mb-4"
                            style="max-width: 100%; height: auto;">


                        <div style="text-align: left;" class="mt-3">
                            <h3>Presentation time</h3>

                        </div>
                        <div style="text-align: left;" class="mt-3 ms-2">The papers will be presented in the order they
                            are listed in the program, and the presentation slot for each paper is 20 minutes. The slots
                            include time for Q&A. We recommend limiting talks to about 15 minutes and Q&A 5 minutes. The
                            session chairs will enforce the slot limits.

                        </div>
                        <div style="text-align: left;" class="mt-3">
                            <h3>No Show Policy</h3>

                        </div>
                        <div style="text-align: left;" class="mt-3 ms-2">Please take note that IEEE has a strict policy
                            on no-shows. Therefore, if your paper is accepted, one of the authors and their
                            representatives <span style="color: red;">MUST PRESENT </span> their paper at the conference, either by appearing physically
                            or online.

                        </div>

                        <div style="text-align: left;color: red;" class="mt-3 ms-2">Papers with no-show participants without a
                            valid reason and solid proof will not be submitted to IEEExplore. No refund of the paid fees
                            may be claimed by the no-show author.

                        </div>
                        <!-- เพิ่มลิงก์ดาวน์โหลดไฟล์ PDF และ DOC -->
                        <div class="download-links mt-3">
                            <a href="./assets/ICSEC2024_Presentation.pdf" download class="btn btn-primary me-2">Download
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