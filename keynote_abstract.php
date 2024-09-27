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
                    <h1 class="display-4 fw-semibold">On the Automated Generation of Optimization Heuristics: A Dream or
                        Reality?</h1>
                    <h5><span class="small-square"></span></h5>
                    <div class="line"></div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-md-12" data-aos="fade-up" data-aos-delay="300">
                    <h5>Thomas Bäck </h5>
                    <h5>Leiden Institute of Advanced Computer Science (LIACS), Leiden University, NL November 2024</h5>
                    <p class="text">For decades, researchers have been looking at paradigms gleaned from nature as
                        inspiration for problem solving approaches, for example in the domain of optimization. There are
                        many classes of such algorithms, including evolutionary algorithms, particle swarms,
                        differential evolution, ant colony optimization, and the number of proposed variants of them is
                        quite large. This makes it hard to keep track of the variants and their respective strengths,
                        and even more so it creates a difficult situation for non-experts who are interested in
                        selecting the best algorithm for their real-world application problem. </p> <br><br>
                    <p class="text">In this presentation, I will introduce and discuss ideas to automatically optimize
                        the
                        optimization heuristic. This task can be approached as an algorithm configuration problem, for
                        which I will present some examples illustrating that this task can be handled by direct global
                        optimization algorithms – in other words, by “automatically optimizing the optimization
                        algorithm”. I will give an example how a combinatorial design space of thousands of
                        configuration variants of evolution strategies in a so-called modular Covariance Matrix
                        Adaptation Evolution Strategy framework can be searched, and how the results can be analyzed
                        using data mining. This approach provides an opportunity for discovering the unexplored areas of
                        the optimization algorithm design space. Extensions towards other algorithm design spaces such
                        as particle swarm optimization and differential evolution are then outlined, too. </p> <br><br>
                    <p class="text">
                        In the second part of the presentation, I will discuss a range of real-world engineering design
                        applications, for which such an approach could truly provide a competitive advantage. In such
                        cases, optimizing the optimization algorithm requires a proper definition of the problem class,
                        for which the optimization is executed. For the example of automotive crash optimization
                        problems, I will present first results demonstrating that these problems differ a lot from the
                        classical benchmark test function sets used by academic community, and present an automated
                        approach to find test functions that properly represent the real-world problem. First results on
                        the performance gain that can be achieved by optimizing the optimization algorithm on such
                        real-world problems are also presented.
                    </p><br><br>
                    <p class="text">
                        To conclude, I will briefly show a novel approach for using a large language model in an
                        iterative loop to automatically generate metaheuristic algorithms for optimization, and how this
                        approach which we call LLaMEA (Large Language Model Evolutionary Algorithm) can generate novel
                        metaheuristics that perform very well on a standard set of benchmark functions.
                    </p>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-md-4" data-aos="fade-right" data-aos-delay="100">
                    <div class="image-bio-container">
                        <div class="image-container">
                            <img src=".\assets\images\keynoteSpeaker\Baeck_Thomas.jpg" class="img-fluid"
                                alt="Peerapon Vateekul">
                        </div>
                    </div>
                </div>
                <div class="col-md-8 biography" data-aos="fade-left" data-aos-delay="200">
                    <h5><span style="font-size: 12px;">►</span> Brief Biography</h5>
                    <p class="text">Thomas Bäck (Fellow, IEEE) received the Diploma degree in Computer Science in 1990
                        and the Ph.D. degree in Computer Science in 1994 (under supervision of H.-P. Schwefel), both
                        from the University of Dortmund, Germany. He is Professor of Computer Science with the Leiden
                        Institute of Advanced Computer Science (LIACS), Leiden University, Netherlands. His research
                        interests include evolutionary computation, machine learning, and their real-world applications,
                        especially in sustainable smart industry and health.</p><br><br>
                    <p class="text">Dr. Bäck has been elected as member of the Royal Netherlands Academy of Arts and
                        Sciences (KNAW, 2021), as IEEE Fellow (class of 2022), and as a member of Academia Europaea
                        (2022). He was a recipient of the IEEE Computational Intelligence Society (CIS) Evolutionary
                        Computation Pioneer Award in 2015, was elected as Fellow of the International Society of Genetic
                        and Evolutionary Computation in 2003, and received the best Ph.D. thesis award from the German
                        society of Computer Science (GI) in 1995.</p><br><br>
                    <p class="text">He currently serves as an Editor in Chief of the Evolutionary Computation Journal
                        (MIT Press), Associate Editor of the IEEE Transactions on Evolutionary Computation and
                        Artificial Intelligence Review journals and area editor of the ACM Transactions on Evolutionary
                        Learning and Optimization. He was also co-editor-in-chief of the Handbook of Evolutionary
                        Computation (CRC Press/Taylor & Francis 1997), co-editor of the Handbook of Natural Computing
                        (Springer, 2013), author of Evolutionary Computation in Theory and Practice (OUP, New York,
                        1996) and co-author of Contemporary Evolution Strategies (Springer, 2013).</p>
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