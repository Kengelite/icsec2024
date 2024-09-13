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

    *{
        color: black;
    }

    /* จัดหน้า content ให้อยู่ตรงกลาง */
    .text-center {
        text-align: center;
    }
    
    p {
    line-height: 1.5; /* หรือค่าอื่น ๆ ที่คุณต้องการ */
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
        margin-bottom: 20px; /* เพิ่มระยะห่างด้านล่างของหัวข้อ */
    }

    /* เส้นบนหัวข้อ */
    

    /* จัดข้อความซ้าย */
    .left-align {
        text-align: left;
        margin-bottom: 20px; /* เพิ่มระยะห่างด้านล่างของข้อความ */
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
</style><body data-bs-spy="scroll" data-bs-target=".navbar">

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
                    <h1 class="display-4 fw-semibold">Regular Paper Submission</h1>
                    <div class="line"></div>
                    <ul class="left-align justify">
                        <li>
                            Papers must be submitted online only through the 
                            <a href="https://edas.info/newPaper.php?c=32081&track=122516">conference website's submission system</a>.
                        </li>
                        <li>
                            The official 
                            <a href="https://www.ieee.org/conferences/publishing/templates.html">“IEEE Manuscript Templates for Conference Proceedings”</a> must be used.
                        </li>
                        <li>
                            At least one author of each accepted paper MUST register and present the paper at the conference for the paper to be included in the program. The program will also be submitted for inclusion in the IEEE Xplore. All accepted and presented papers will be submitted for inclusion in IEEE Xplore.
                        </li>
                        <li>
                            Prospective authors are invited to submit original full papers WITHOUT authors’ names and affiliations, in English, of 4 – 6 pages inclusive of all figures, tables, appendices, etc., in standard IEEE two-column format only, reporting their original work and results, applications, and/or implementation in one or more of the listed areas.
                        </li>
                    </ul>
                    
                    <p class="text">ICSEC 2024 places significant importance on the double-anonymous review process. No submission must reveal its authors’ identities. Authors are expected to adhere to this process diligently. In particular:</p>
                    <ul class="left-align justify">
                        <li>Authors’ names and affiliations must be omitted from the submission.</li>
                        <li>Authors should ensure that any citation to related work by themselves is written in the third person, for instance, “the prior work of ABC” instead of “our prior work.”</li>
                        <li>Authors should omit URLs to author-revealing sites (tools, datasets).</li>
                        <li>Authors should anonymize author-revealing company names. Instead of using company names, they should provide general characteristics of the organizations involved that are needed to understand the context of the paper.</li>
                        <li>While authors can upload a preprint version on arXiv or similar sites, they must avoid specifying that the manuscript was submitted to ICSEC 2024.</li>
                        <li>Authors should use a different paper title for any preprint version in arXiv or similar websites. Authors should not publicly use the submission title during the review process.</li>
                        <li>Authors should ensure that paper acknowledgments do not reveal the origin of their works.</li>
                    </ul>
                    
                    <ul class="left-align justify">
                        <li>Submissions MUST strictly conform to the IEEE conference proceedings formatting instructions specified above. Alterations of spacing, font size, and other changes that deviate from the instructions may result in desk rejection without further review.</li>
                        <li>All submissions must be in PDF. (See instructions for IEEE PDF eXpress)</li>
                        <li>By submitting to ICSEC 2024, authors acknowledge that they are well aware of and agree to be bound by the <a href="https://www.ieee.org/publications/rights/plagiarism/plagiarism.html">IEEE Plagiarism FAQ</a>. Manuscripts submitted to ICSEC 2024 must not have been published elsewhere and must not be under review or submitted for review elsewhere while under consideration for ICSEC 2024. Contravention of this concurrent submission policy will be deemed a serious breach of scientific ethics, and appropriate action will be taken in all such cases.</li>
                        <li>To check for double submission and plagiarism issues, the chairs reserve the right to (1) share the list of submissions with the PC Chairs of other conferences with overlapping review periods and (2) use external plagiarism detection software under contract to IEEE to detect violations of these policies.</li>
                        <li>By submitting to the ICSEC 2024, authors acknowledge that they conform to the authorship policy of the IEEE.</li>
                    </ul>
                    
                    <p class="text">Any submission that does not comply with these requirements may be desk rejected without further review. We encourage the authors to upload their paper information early (and can submit the PDF later) to properly enter conflicts for double-anonymous reviewing. It is the authors' sole responsibility to ensure that the formatting guidelines, double anonymous guidelines, and any other submission guidelines are met at the time of paper submission.</p>
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
                    <h1 class="display-4 fw-semibold">Accepted Contributions</h1>
                    <div class="line"></div>
                    <ul class="left-align justify">
                        <li>Upon notification of acceptance, all authors of accepted papers will be asked to complete an electronic IEEE Copyright form and will receive further instructions for preparing their camera-ready versions. The names, list of authors, and titles in the camera-ready version cannot be modified from the ones in the submitted version unless there is explicit approval from the ICSEC 2024 chairs.</li>
                        <li>All accepted and presented contributions will be published in the conference's electronic proceedings and the IEEE Xplore. At least one author of each accepted paper must register and present the paper at ICSEC 2024 to be published in the proceedings.</li>
                        <li>The IEEE has implemented policies to exclude authors who do not present their papers from further distribution of their publications, such as exclusion from IEEE Xplore.</li>
                        <li>ICSEC 2024 balances the interests of a high-quality conference with fairness toward the authors and audience members, as indicated in our <a href="https://icsec2024.org/about">EDI plan</a>. Therefore, ICSEC 2024 applies this policy and reserves the right to preclude authors who do not present their papers at the conference from publishing them in IEEE Xplore.</li>
                    </ul>
                    </div>
                    <div class="section-title">
                    <h2>Before Creating a PDF</h2> 
                    <div class="line"></div>
                    <ul class="left-align justify">
                        <li>Add the copyright notice to the bottom of the first page of your source document.</li>
                        <li>Proofread your source document thoroughly to confirm that it will require no revision.</li>
                    </ul>
                    </div>
                    
                    <div class="section-title">
                    <h2>Creating your PDF eXpress Account</h2>
                    <div class="line"></div>
                    <ul class="left-align justify">
                        <li>Log in to the <a href="https://ieee-pdf-express.org/">IEEE PDF eXpress TM site</a></li>
                    </ul>
                    
                    <p class="left-align justify">First-time users should do the following:</p>
                    <ol class="left-align ms-2">
                        <li>Select the New Users - Click Here link.</li>
                        <li>Enter the following:
                            <ul class="left-align justify">
                                <li>62781X for the Conference ID</li>
                                <li>your email address</li>
                                <li>a password</li>
                            </ul>
                        </li>
                        <li>Continue to enter information as prompted.</li>
                    </ol>                    
                    <p class="text">
                        An Online confirmation will be displayed, and an email confirmation will be sent to verify your account setup.<br>
                        Previous users of PDF eXpress need to follow the above steps but should enter the same password used for previous conferences. Verify that your contact information is valid.<br>
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