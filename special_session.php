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
</head>
<style>
    /* .section-title {
        text-align: center;
    }

    .left-align {
        text-align: left;
    }
    .section-title .line {
    width: 60px;
    height: 4px;
    background-color: var(--c-brand);
    margin: 16px auto 24px auto;
} */
    .left-align {
        text-align: left;
        line-height: 1.6;
        /* กำหนดความสูงของบรรทัด */
        margin-bottom: 20px;
        /* เพิ่มระยะห่างด้านล่าง */
        display: inline-block;
        width: 100%;
        box-sizing: border-box;
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

    .col-8 {
        text-align: justify;
        width: 65%;
        display: block;
    }


    .left-align {
        text-align: left;
    }

    .row {
        display: flex;
    }

    .col-4,
    .col-8 {
        display: flex;
        flex-direction: column;
        justify-content: flex-start;
    }

    .display-6 {
        margin-bottom: 0.5rem;
    }

    .ssection-title {
        margin-bottom: 1rem;
    }

    * {
        color: black;
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



    <!-- ABOUT -->


    <section id="about" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center" data-aos="fade-down" data-aos-delay="50">
                    <div class="section-title">
                        <h1 class="display-4 fw-semibold">Special Session (SS) on Artificial Intelligence in Networking and Security (AINetSec 2024)</h1>
                        <div class="line"></div>
                        <div>
                            <div class="row">
                                <div class="col-12 col-md-4">
                                    <p class="left-align">
                                        <br>
                                        <img src="./ttads.png" alt="คำอธิบายรูปภาพ">
                                    </p>
                                </div>

                                <div class=" col-12 col-md-8">
                                    <p class="text">
                                        The integration of Artificial Intelligence (AI) in the fields of networking and security is revolutionizing the way we approach connectivity and
                                        data protection. This special session aims to bring together innovative research and cutting-edge developments in the application of AI to these
                                        critical areas. We invite researchers, academicians, and industry professionals to submit their original and unpublished work for consideration.</p>
                                    <p class="left-align">
                                        <strong>➤ Topics of Interest Include, but are not Limited to</strong>
                                    </p>
                                    <ul class="left-align">
                                        <li>AI-based network architecture design</li>
                                        <li>Machine learning for network optimization and traffic analysis</li>
                                        <li>AI in wireless network design and optimization</li>
                                        <li>AI in 5G and future network technologies</li>
                                        <li>AI applications in cloud networking and security</li>
                                        <li>AI in cybersecurity and threat intelligence</li>
                                        <li>Use of AI in combating emerging network threats</li>
                                        <li>Automated systems for network security management</li>
                                        <li>AI in privacy-preserving techniques and data security</li>
                                        <li>Deep learning for intrusion detection and prevention systems</li>
                                        <li>Ethical considerations and challenges in AI for networking and security</li>
                                        <li>Use of AI in digital forensics</li>
                                        <li>AI in blockchain and secure transactions</li>
                                        <li>AI in securing IoT and network infrastructures</li>
                                        <li>Integration of AI in IoT networking</li>
                                        <li>Edge computing and AI in IoT</li>
                                        <li>AI and IoT in energy management and sustainability</li>
                                        <li>AI for IoT security and network management</li>
                                        <li>Intelligent Systems in Networking, Security, and IoT</li>
                                        <li>Case studies and real-world applications of AI in networking, security, and IoT</li>
                                    </ul>
                                    <p class="left-align">
                                        <strong>➤ Important Dates</strong>
                                    </p>
                                    <ul class="left-align">
                                        <li>Paper Submission: <span style="text-decoration: line-through; color: red;">14 June 2024 (Round 1)</span>
                                        <span style="text-decoration: line-through; color: red;">12 July 2024 (Round 2)</span><span style="color: red;"> Extended 26 July 2024</span></li>
                                        <li>Acceptance Notification: 16 August 2024 (round 1)/ 13 September 2024 (round 2)</li>
                                        <li>Camera-Ready: 16 August 2024 to 30 September 2024
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <h4 class="text">Submission</h4>
                            <p class="text">Papers should be submitted electronically through the online submission system at <a href="https://edas.info/login.php?rurl=aHR0cHM6Ly9lZGFzLmluZm8vbmV3UGFwZXIucGhwP2M9MzIwODEmdHJhY2s9MTIyNTE4">https://edas.info/newPaper</a>;
                                Please indicate that your submission is for the Track = Special Session on AI in Networking and Security.
                            </p>
                            <h4 class="text">Submission Guidelines</h4>
                            <p class="text">Submissions should be original, high-quality work not previously published or under review for other publications. All submissions will undergo a rigorous peer-review process and should adhere to the specified formatting guidelines by IEEE (4 to 6 pages). The author of the accepted paper shall register/ present the paper either onsite or online at ICSEC 2024.
                                <a href="https://www.ieee.org/conferences/publishing/templates.html">(https://www.ieee.org/conferences).</a>
                            </p>
                            <p class="text"><strong>➤ SS Co-Chairs/ Co-TPCs</strong> </p>
                            <ul class="left-align">
                                <li><b>Ali Kashif Bashir</b>, Manchester Metropolitan University, UK</li>
                                <li><b>Chakchai So-In</b>, Khon Kaen University, TH</li>
                                <li><b>Chalee Vorakulpipat</b>, National Electronics and Computer Technology Center, TH</li>
                                <li><b>Chantana Chantrapornchai</b>, Kasetsart University, TH</li>
                                <li><b>Dusit Niyato</b>, Nanyang Technological University, SG</li>
                                <li><b>KC Santosh</b>, University of South Dakota, USA</li>
                                <li><b>Kalika Suksomboon</b>, National Electronics and Computer Technology Center, TH</li>
                                <li><b>Kensuke Fukuda</b>, National Institute of Informatics, JP</li>
                                <li><b>Le Hoang Son</b>, Vietnam National University, VN</li>
                                <li><b>Muhammad Zeeshan Shakir</b>, University of the West of Scotland, UK</li>
                                <li><b>Nele Mentens</b>, KU Leuven/ Leiden University, BE/NL</li>
                                <li><b>Nutthanon Leelathakul</b>, Burapha University, TH</li>
                                <li><b>Olga Gadyatskaya</b>, Leiden University, NL</li>
                                <li><b>Pakarat Musikawan</b>, Khon Kaen University, TH</li>
                                <li><b>Paul Harvey</b>, University of Glasgow, UK</li>
                                <li><b>Peerapon Vateekul</b>, Chulalongkorn University, TH</li>
                                <li><b>Sakorn Mekruksavanich</b>, University of Phayao, TH</li>
                                <li><b>Sangsuree Vasupongayya</b>, Prince of Songkla University, TH</li>
                                <li><b>Santi Phithakkitnukoon</b>, Chiang Mai University, TH</li>
                                <li><b>Satit Kravenkit</b>, Khon Kaen University, TH</li>
                                <li><b>Sooksan Panichpapiboon</b>, King Mongkut's Institute of Technology Ladkrabang, TH</li>
                                <li><b>Songyut Phoemphon</b>, Suranaree University of Technology, TH</li>
                                <li><b>Sucha Supittayapornpong</b>, Vidyasirimedhi Institute of Science and Technology, TH</li>
                                <li><b>Sukumal Kitisin</b>, Kasetsart University, TH</li>
                                <li><b>Sudeep Tanwar</b>, Nirma University, IN</li>
                                <li><b>Van Nhan Vo</b>, Duytan University, VN</li>
                                <li><b>Zhishu Shen</b>, Wuhan University of Technology, CN</li>
                                <li><b>Zubair Baig</b>, Deaken University, AU</li>
                            </ul>
                            <h4 class="text">SS Co-Chairs/ Co-TPCs’ Contacts</h4>
                            <p class="text">For any inquiries regarding the call for papers, please contact</p>
                            <ul class="left-align">
                                <li><b>Phet Aimtongkham</b> (phetim@kku.ac.th) Cyber Security Program@KKU</li>
                                <li><b>Yanika Kongsorot</b> (yaniko@kku.ac.th) Artificial Intelligence Program@KKU</li>
                            </ul>
                            <h4 class="text">Sponsers</h4>
                            <ul class="left-align">
                                <li><b>IEEE C-Chapter:</b> IEEE Computer Society Chapter</li>
                                <li><b>ECTI:</b> Electrical Engineering/Electronics, Computer, Telecommunications, and Information Technology</li>
                                <li><b>CITT:</b> The Association of Council of IT Deans</li>
                                <li><b>AIAT:</b> Artificial Intelligence Association of Thailand</li>
                                <li><b>NECTEC:</b> National Electronics and Computer Technology Center</li>
                            </ul>

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
                        <h1 class="display-4 fw-semibold">Special Session on Quantum Computing</h1>
                        <div class="line"></div>
                        <div>
                            <p class="text">Quantum computing is the next big thing in the world of technology. Over the past decades or so, leading international
                                companies such as Google and IBM have been heavily invested in the development of quantum computer and quantum software. Research in
                                quantum computation have skyrocketed into a new height. The vast power of quantum computation could be applied to solve computational
                                problems that are currently out of reach by the currently most powerful supercomputer. Applications of quantum computation are tremendous,
                                including optimization and artificial intelligence.
                            </p><br>
                            <p class="left-align">The topics of interest in this special session are, but not limited to, as follows.</p>
                            <ol class="left-align">
                                <li>Noisy intermediate-scale (NISQ) computation</li>
                                <li>Quantum computation in education</li>
                                <li>Quantum annealing/optimization</li>
                                <li>Quantum gate-based computation</li>
                                <li>Quantum communication</li>
                                <li>Quantum machine learning</li>
                                <li>Quantum cryptography</li>
                            </ol>
                            <h4 class="text">Submission</h4>
                            <p class="text">Papers should be submitted electronically through the online submission system at <a href="https://edas.info/login.php?rurl=aHR0cHM6Ly9lZGFzLmluZm8vbmV3UGFwZXIucGhwP2M9MzIwODEmdHJhY2s9MTIzNTUy">https://edas.info/newPaper</a>;</p><br><br>
                            <h4 class="text">Special Session Co-chairs:</h4>
                            <ul class="left-align">
                                <li><b>Dr. Sanpawat Kantabutra</b>, Center of Excellence in Quantum Technology, Chiang Mai University</li>
                                <li><b>Dr. Wattana Jindaluang</b>, Center of Excellence in Quantum Technology, Chiang Mai University</li>
                            </ul>
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
                        <h1 class="display-4 fw-semibold">Special Session on Cognitive Information Processing and Its
                            Applications
                        </h1>
                        <div class="line"></div>
                        <p class="text">Cognitive information processing (CIP) currently plays important roles in many applications such as attention, encoding, memory,
                            artificial intelligence (AI), and cognitive computing latest advances in machine thinking. As well as the characteristics of the human visual system,
                            its information and limitations must be first clearly studied, and the artificial systems should be then developed. In this session, we discuss the wide
                            range topics of human cognitive functions, advancements, limitations, and possibility for artificial system development. The topics of interest that fascinating
                            area of this session are as follows:
                        </p>
                        <ol class="left-align">
                            <li>
                                <b> Understanding Human Cognition:</b>
                                <p class="text">
                                    CIP provides insights into how humans perceive, process, and store information. By understanding these cognitive processes,
                                    designers of AI systems can develop interfaces that align with natural human cognition, making interactions more intuitive and user-friendly.
                                </p>
                            </li>

                            <li>
                                <b>Adaptive Interfaces:</b>
                                <p class="text">
                                    AI systems can utilize knowledge from CIP to create adaptive interfaces that adjust based on user behavior and preferences.
                                    This can enhance user experience by presenting information in a way that aligns with how individuals process and retrieve information.
                                </p>
                            </li>
                            <li>
                                <b>Personalization and User Modeling:</b>
                                <p class="text">
                                    CIP principles can be applied to create personalized AI systems that adapt to individual users' cognitive styles and learning preferences.
                                    This involves building user models based on cognitive information to tailor interactions and recommendations.
                                </p>
                            </li>
                            <li>
                                <b>Natural Language Processing (NLP):</b>
                                <p class="text">
                                    Leveraging CIP in AI HMI often involves advancements in NLP. Understanding how humans process and comprehend language allows AI systems
                                    to communicate more effectively with users, whether through speech recognition, chatbots, or natural language interfaces.
                                </p>
                            </li>
                            <li>
                                <b>Attention and Focus in UI/UX Design: </b>
                                <p class="text">
                                    Considering principles of attention from CIP, AI interfaces can be designed to prioritize information effectively,
                                    ensuring that users' attention is directed toward important elements. This is crucial for designing user interfaces that facilitate efficient information processing.
                                </p>
                            </li>
                            <li>
                                Memory Augmentation:
                                <p class="text">
                                    AI systems can assist in information retrieval and memory augmentation by leveraging cognitive principles.
                                    For example, AI-powered recommendation systems can anticipate users' needs based on their past interactions and preferences.
                                </p>
                            </li>
                            <li>
                                <b>Emotion Recognition: </b>
                                <p class="text">
                                    Understanding human emotions, a facet of cognitive processing,
                                    is important for creating emotionally intelligent AI systems. AI can be designed to recognize and respond to human emotions, enhancing the overall quality of interaction.
                                </p>
                            </li>
                        </ol>
                        <h4 class="text">Topics of interests include (but are not limited to) the following:</h4>
                        <ul class="left-align">
                            <li>Human Perception</li>
                            <li>Social Perception</li>
                            <li>Human-Machine Interaction</li>
                            <li>Biomedical Information Processing</li>
                            <li>Cognitive Science and Applications</li>
                            <li>Biomedical Information Processing</li>
                        </ul>
                        <h4 class="text">Submission</h4>
                            <p class="text">Papers should be submitted electronically through the online submission system at <a href="https://edas.info/login.php?rurl=aHR0cHM6Ly9lZGFzLmluZm8vbmV3UGFwZXIucGhwP2M9MzIwODEmdHJhY2s9MTIyOTgz">https://edas.info/newPaper</a>;</p><br><br>
                        <h4 class="text">Special Session Co-chairs:</h4>
                        <ul class="left-align">
                            <li><b>Watanabe Katsumi</b>, Waseda University, Japan.</li>
                            <li><b>Roberto Caldara</b>, University of Fribourg, Switzerland.</li>
                            <li><b>Montri Phothisonothai</b>, Kasetsart University, Thailand.</li>
                        </ul>
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
                        <h1 class="display-4 fw-semibold">Special Session on Artificial Intelligence in Medical and Healthcare</h1>
                        <div class="line"></div>
                        <p class="text">The Artificial Intelligence (AI) in the area of medical and healthcare has revolutionized in term of diagnosis, treatment,
                            and disease management. As the contribution for innovative researchs continues to grow, we invite researchers, practitioners, and experts
                            to contribute their research findings and insights to our upcoming conference on the special session on AI in Medical and Healthcare.
                        </p>
                        <p class="text"><strong>➤ This conference aims to provide a platform for sharing cutting-edge research, practical experiences, and innovative
                                ideas related to the application of AI in medical and healthcare settings. We welcome submissions on a wide range of topics including, but not limited to</strong> </p>
                        <ul class="left-align">
                            <li>AI-driven drug discovery and development</li>
                            <li>AI-enabled diagnostic systems and precision medicine</li>
                            <li>Medical Signal Analysis</li>
                            <li>Data Science and Statistical Models</li>
                            <li>Explainability and Transfer Learning</li>
                            <li>Generative AI for medical applications</li>
                            <li>Knowledge Representation and Decision Support</li>
                            <li>Monitoring and surveillance systems for healthcare facilities</li>
                            <li>Computer vision applications in medical imaging and radiology</li>
                            <li>Machine learning and Deep Learning approaches for personalized medicine</li>
                            <li>Natural language processing for clinical documentation and data analysis</li>
                            <li>Predictive analytics for disease prognosis and treatment planning</li>
                            <li>Standard, Regulatory, and Ethical considerations in AI-driven healthcare</li>
                            <li>Wearable Sensor-Based Human Activity Recognition in the Smart Healthcare System</li>
                        </ul>
                        <h4 class="text">Submission</h4>
                        <p class="text">Papers should be submitted electronically through the online submission system at <a href="https://edas.info/login.php?rurl=aHR0cHM6Ly9lZGFzLmluZm8vbmV3UGFwZXIucGhwP2M9MzIwODEmdHJhY2s9MTIyNTE4">https://edas.info/newPaper</a>;</p><br><br>
                        <h4 class="text">Honorary Chair </h4>
                        <ul class="left-align">
                            <li><b>Thanaruk Theeramunkong</b>, SIIT, Thammasat University, AIAT, Thailand</li>
                        </ul>
                        <h4 class="text">Special Session Co-chairs:</h4>
                        <ul class="left-align">
                            <li><b>Thepchai Supnithi (Chair)</b>, NECTEC, AIAT, Thailand</li>
                            <li><b>Sanparith Marukatat (Co-Chair)</b>, NECTEC, AIAT, Thailand</li>
                            <li><b>Natsuda Kaothanthong (Co-Chair)</b>, SIIT, Thammasat University, AIAT, Thailand</li>
                            <li><b>Narit Hnoohom (Co-Chair)</b>, Mahidol University, AIAT, Thailand</li>
                            <li><b>Rachasak Somyanonthanakul (Co-Chair)</b>, Rangsit University, AIAT, Thailand</li>
                        </ul>
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
                        <h1 class="display-4 fw-semibold">Special Session on HPC, Data Lakes, and Computing Continuum <br> (HPC-ComCon 2024) </h1>
                        <div class="line"></div>
                        <p class="text">Modern computing techniques can store, process, and analyse large amounts of and diversity of data. These techniques could correlate
                            a variety of datasets to gain insight and offer new services and applications. Among others, technologies that are playing a major role in gaining
                            these capabilities are the Internet of Things, Edge Computing, Cloud Computing, High Performance Computing and High Performance Data Analytics.
                            Although developed independently, the integration and interconnection of these technologies, referred to as Computing Continuum, has accelerated
                            the growth of data-driven applications and unleashed numerous opportunities for industry, science, individuals, and society at large. This system
                            of systems can execute complex tasks across multiple systems and multiple technologies. At the same time, numerous challenges are associated.
                            Big data lakes are the inevitable progression of data warehouse technologies that many industries have started to adopt as data management systems. Recently,
                            various research works have arisen on big data lakes under the three research axes, i.e., models, frameworks, and techniques. Also, other research has targeted
                            the marketplace and data pricing problems with all their associated difficulties.
                        </p>
                        <p class="text"><strong>➤ Topics of interest included, but are not limited to</strong> </p>
                        <ul class="left-align">
                            <li>Application development for integrated HPC continuum use cases</li>
                            <li>Data Marketplaces and Data Lakes</li>
                            <li>Compute, storage, and communication systems management</li>
                            <li>Resource management and optimization</li>
                            <li>AI-powered workflow resource optimization</li>
                            <li>Managing computation, Scheduling</li>
                            <li>Performance and scalability</li>
                            <li>Security of platforms</li>
                            <li>Artificial intelligence and ML in the HPC continuum</li>
                            <li>Workflow deployment, orchestration, and monitoring</li>
                            <li>Programming paradigms/models, algorithms</li>
                            <li>Bridging Cloud-HPC</li>
                            <li>Data transfer/communication in the HPC continuum</li>
                            <li>Software interoperability, compatibility</li>
                            <li>Management of heterogeneous systems</li>
                            <li>Energy efficiency and green computing on Computing Continuum</li>
                            <li>Storing and processing data across the continuum</li>
                            <li>Assessment and statistical analysis of ensemble models</li>
                        </ul>
                        <p class="text"><strong>➤ Important Dates</strong> </p>
                        <ul class="left-align">
                        <li>Paper Submission: <span style="text-decoration: line-through; color: red;">14 June 2024 (Round 1)</span>
                        <span style="text-decoration: line-through; color: red;">12 July 2024 (Round 2)</span><span style="color: red;"> Extended 26 July 2024</span></li>
                            <li>Acceptance Notification: 16 August 2024 (round 1)/ 13 September 2024 (round 2)</li>
                            <li>Camera-Ready: 16 August 2024 to 30 September 2024</li>
                        </ul>
                        <h4 class="text">Submission</h4>
                        <p class="text">Papers should be submitted electronically through the online submission system at <a href="https://edas.info/login.php?rurl=aHR0cHM6Ly9lZGFzLmluZm8vbmV3UGFwZXIucGhwP2M9MzIwODEmdHJhY2s9MTIzNTUz">https://edas.info/newPaper</a>;</p> <br><br>
                        <p class="text"><strong>➤ Organizers</strong> </p>
                        <ul class="left-align">
                            <li><b>Prof. Dr. Pascal Bouvry</b>, Faculty of Science, Technology and Medicine Department of Computer Science University of Luxembourg, Luxembourg</li>
                            <li><b>Dr. Johnatan E. Pecero</b>, Faculty of Science, Technology and Medicine Department of Computer Science University of Luxembourg, Luxembourg</li>
                            <li><b>Dr. Grégoire Danoy</b>, Faculty of Science, Technology and Medicine Department of Computer Science University of Luxembourg, Luxembourg</li>
                            <li><b>Prof. Dr. Jacek Blazewicz</b>, Institute of Computing Science Poznan University of Technology, Poland</li>
                            <li><b>Prof. Dr. Jedrzej Musial</b>, Institute of Computing Science Poznan University of Technology, Poland</li>
                            <li><b>Dr. Arijit Roy</b>, Department of Computer Science and Engineering Indian Institute of Technology Patna, India</li>
                        </ul>
                        <p class="text"><strong>➤ Program Committee : (to be invited)</strong> </p>
                        <ul class="left-align">
                            <li><b>Harald Koestler</b>, Department of Computer Science, FAU, Erlangen, Germany</li>
                            <li><b>Apivadee Piyatumrong</b>, National Electronics and Computer Technology Center, Bangkok, Thailand</li>
                            <li><b>Kittichai Lavangnananda</b>, School of Information Technology, King Mongkut’s University of Technology</li>
                            <li><b>Albert Zomaya</b>, University of Sydney, Australia</li>
                            <li><b>El-Ghazali Talb</b>, University of Lille, France</li>
                            <li><b>Frédéric Guinand</b>, University of Le Havre, France</li>
                            <li><b>Samee Khan</b>, Mississippi State University, USA</li>
                            <li><b>Ezhilmathi Krishnasamy</b>, University of Luxembourg, Luxembourg</li>
                            <li><b>Julien Schleich</b>, University of Luxembourg, Luxembourg</li>
                            <li><b>Carlos Jaime Barrios Hernandez</b>, Universidad Industrial de Santander, Bucaramanga, Colombia</li>
                            <li><b>Andrei Tchernykh</b>, CISESE Research Center, Ensenada, Mexico</li>
                            <li><b>Sergio Nesmachnow</b>, Universidad de la Republica, Uruguay</li>
                            <li><b>Ovidiu-Christian Marcu</b>, University of Luxembourg, Luxembourg</li>
                            <li><b>Joanna Kołodziej</b>, Cracow University of Technology, Cracow, Poland</li>
                            <li><b>Horacio González-Vélez</b>, National College of Ireland, Ireland</li>
                            <li><b>Alfredo Goldman</b>, Sao Paolo University, Brazil</li>
                            <li><b>Arijit Roy</b>, Indian Institute of Information Technology, Sri City, India</li>
                            <li><b>Panagiotis Sarigiannidis</b>, University of Western Macedonia, Greece</li>
                            <li><b>Matthias Brust</b>, University of Luxembourg, Luxembourg</li>
                            <li><b>François Coallier</b>, Ecole de Technologie Supérieure, Université du Quebec, Canada</li>
                        </ul>
                    </div>
                </div>
            </div>
    </section>


    <section id="about" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center" data-aos="fade-down" data-aos-delay="50">
                    <div class="section-title">
                        <h1 class="display-4 fw-semibold">Special Session on Geo Intelligence </h1>
                        <div class="line"></div>
                        <p class="text">Geo Intelligence (or Geospatial Intelligence) is information derived from analysis of various images and data associated
                            with a specific geographical location. Geo Intelligence is a practice of collection, interpretation, and information extraction
                            from remote sensing data, GNSS data, GIS data in addressing social issues related with disaster, agriculture, environment, urban,
                            and so on. This special session focuses on the merging of machine learning techniques with geospatial data and big data applications.
                        </p>
                        <p class="text"><strong>➤ The topics of interest in this special session are, but not limited to, as follows.</strong> </p>
                        <ul class="left-align">
                            <li>Remote sensing data analysis</li>
                            <li>Artificial intelligence for geospatial data</li>
                            <li>Semantic interpretation</li>
                            <li>Sensor fusion</li>
                            <li>Calibration and harmonization</li>
                            <li>Innovative remote sensing applications</li>
                            <li>Geo Intelligence in education</li>
                        </ul>
                        <h4 class="text">Submission</h4>
                        <p class="text">Papers should be submitted electronically through the online submission system at <a href="https://edas.info/login.php?rurl=aHR0cHM6Ly9lZGFzLmluZm8vbmV3UGFwZXIucGhwP2M9MzIwODEmdHJhY2s9MTI0MjY0">https://edas.info/newPaper</a>;</p>
                        <p class="text"><strong>➤ Special Session Chair </strong> </p>
                        <ul class="left-align">
                            <li><b>Prof. Masahiko Nagai</b>, Center for Research and Application for Satellite Remote Sensing, Yamaguchi University, Japan</li>
                            <li><b>Dr. Sakpod Tongleamnak</b>, College of Computing, Khon Kaen University</li>
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