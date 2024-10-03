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
    <?php
   include './slide.php';
   ?>




    <!-- ABOUT -->
    <section id="about" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center" data-aos="fade-down" data-aos-delay="50">
                    <h1 class="display-4 fw-semibold">Mr. Prayuth TungsaNgob</h1>
                    <h5><span class="small-square"></span></h5>
                    <div class="line"></div>
                </div>
            </div>
            <div class="row ">
                <div class="col-md-4" data-aos="fade-right" data-aos-delay="100">
                    <div class="image-bio-container">
                        <div class="image-container">
                            <img src=".\assets\images\keynoteSpeaker\Prayuth.png" class="img-fluid"
                                alt="Peerapon Vateekul">
                        </div>
                    </div>
                </div>
                <div class="col-md-8 biography pt-5" data-aos="fade-left" data-aos-delay="200">
                    <!-- <h5><span style="font-size: 12px;">►</span> Brief Biography</h5> -->
                    <p class="text">As the Chief Technology Officer (CTO) of the Enterprise Business Group for Thailand,
                        I am passionate about leading digital
                        transformation initiatives that drive innovation and growth across diverse sectors. With a
                        strong background in wireless technology, data
                        infrastructure, cloud computing, and artificial intelligence (AI), I specialize in creating
                        cutting-edge solutions that empower organizations
                        to thrive in the digital age.</p><br><br>
                    <p class="text">My experience extends to developing smart city initiatives, revolutionizing
                        healthcare systems with smart technologies, and enhancing
                        financial services through intelligent solutions. I am dedicated to leveraging technology to
                        improve operational efficiency, enhance
                        customer experiences, and drive business success.</p><br><br>
                    <p class="text">With a focus on delivering tangible results and driving impactful change, I am
                        committed to collaborating with stakeholders and
                        harnessing the power of technology to create a brighter and more connected future for businesses
                        and communities in Thailand.</p>

                    <table class="table table-bordered mt-3">
                        <thead>
                            <tr>
                                <th>Duration</th>
                                <th>Company</th>
                                <th>Position</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>2017 - Current</td>
                                <td>Huawei EBG</td>
                                <td>CTO</td>
                            </tr>
                            <tr>
                                <td>2015 - 2017</td>
                                <td>Alcatel Lucent Enterprise (Thailand)</td>
                                <td>Technical Consultant</td>
                            </tr>
                            <tr>
                                <td>2012 - 2015</td>
                                <td>Allied Telesis (Thailand)</td>
                                <td>Technical Support and Service</td>
                            </tr>
                            <tr>
                                <td>2010 - 2012</td>
                                <td>The Practical Solution</td>
                                <td>Presale Manager</td>
                            </tr>
                            <tr>
                                <td>2008 - 2010</td>
                                <td>The Practical Solution</td>
                                <td>Presale (Network, Security, Virtualization and Storage)</td>
                            </tr>
                        </tbody>
                    </table>
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